<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * @project Creators Exchange
 * @since 2 August 2013
 * @version Cake Php 2.3.8
 * @author : Bhanu Prakash Pandey
 */
class AppController extends Controller 
{

	var $helpers = array('Html', 'Form', 'Session', 'Js','Paginator', 'Xicom', 'Img');
	var $components = array('Email','Session','Cookie', 'Auth', 'RequestHandler', 'Upload', 'Image');
	
	function beforeFilter()
	{
     
		if($this->params['prefix'] == 'admin')
		{
			if ($this->Auth->user())
			{
				if ( $this->Auth->user('role') == UserRoleConst::RoleUser )
				{
					$this->redirect('/');
				}
			}
			$this->__set_adminfilter();
			$this->layout = 'admin';
		}
		else
		{
			if ($this->Auth->user())
			{
				if ($this->Auth->user('role') == UserRoleConst::RoleAdmin)
				{
					$this->redirect(array('controller' => 'users', 'action' => 'admin_index', 'admin' => true));
				}
				
			}
			//CHANGING THE DEFAULT FIELDS OF AUTH TO USE EMAIL ID INSTEAD OF USERNAME
			$this->Auth->authenticate = array('Form' => array
					(
							'fields' => array('username' => 'email', 'password' => 'password'),
							'scope' => array('role' => UserRoleConst::RoleUser)
					)
			);
			$this->Auth->loginRedirect = array('controller' => 'users', 'action' => 'index');
			$this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'index');
			$this->Auth->loginError = __("Enter correct Username or Email and Password to login.");
			$this->Auth->authError = __('You are not authorized to access that location.');
	
			$this->__set_userfilter();
			
			// set cookie options			
			if (!$this->Auth->loggedIn() && $this->Cookie->read('remember_me')) 
			{
				$this->Cookie->httpOnly = true;
				 $cookie = $this->Cookie->read('remember_me');
				
				 $this->loadModel('User'); // If the User model is not loaded already
				 $user = $this->User->find('first', array(
						'conditions' => array(
							'User.email' => $cookie['email'],
							'User.password' => $cookie['password'],
							'User.status'	=> '1'
						)
				 ));
			  
				 if ($user && !$this->Auth->login($user['User'])) 
				 {
						$this->redirect(array('controller' => 'users', 'action' => 'logout')); // destroy session & cookie
				 }
			 }
		}

		
		
		if ( $this->params['action'] == 'login' || $this->params['action'] == 'register')
		{
			$this->loadModel('Event');
			$events = $this->Event->find('all', array('conditions' => array('Event.start_date >= ' => date('Y-m-d'), 'Event.status' => 1),
													'order' => array('Event.start_date' => 'asc'),
													'fields' => array('Event.id','Event.event_type','Event.created','Event.title','Event.start_date','Event.location','Event.picture')
												));
		
				$start_month = '';
				$months = $timeline = $competitions = $throwdown = $challenges = array();
				if ( !empty($events) )
				{
					$i = 0;
					foreach($events as $ev)
					{
						$ev_month = date('F',strtotime($ev['Event']['start_date']));	
						 
						
						if ( $i == 0 )
						{
							$start_month = date('m',strtotime($ev['Event']['start_date']));
						}
						
						$timeline[$ev_month][] = $ev;
						if ($ev['Event']['event_type'] == 'competition')
						{
							$competitions[] = $ev;
						}else if($ev['Event']['event_type'] == 'throwdown') 
						{
							$throwdown[] = $ev;
						}
					}
				}
				
				$all_months = array();
				$currentMonth = (int)$start_month;
				$num = 15 - count($events);
				
				for ($x = $currentMonth; $x < $currentMonth + $num; $x++) {
				    $all_months[] = date('F', mktime(0, 0, 0, $x, 0));
				}
				//pr($timeline); die;
				
				$this->loadModel('Challenge');
				$this->loadModel('ChallengePeople');
				
				$this->Challenge->recursive = 2;
				$this->ChallengePeople->bindModel(array('belongsTo' => array('User' => array('className' => 'User', 
																							 'foreignKey' => 'user_id',
																							 'fields' => array('User.username',
																							 					 'User.photo', 
																							 					 'User.id',
																												 'User.first_name',
																												 'User.last_name'
																												)
																							))));
																							
				$this->Challenge->bindModel(array('hasMany' => array('ChallengePeople' => array('className' => 'ChallengePeople', 'foreignKey' => 'challenge_id'))));
				$challenges_data = $this->Challenge->find('all', array('conditions' => array('Challenge.date >= ' => date('Y-m-d'),'Challenge.status' => 'Pending'))); 
				
				if ( !empty($challenges_data) )
				{
					foreach($challenges_data as $ch)
					{
						$flag = 0;
						foreach($ch['ChallengePeople'] as $ppl)
						{
							if ( $ppl['status'] == 'Pending' )
							{
								$flag = 1;
								break;
							}
						}
		
						if ( $flag == 0 )
						{
							$challenges[] = $ch;
						}
					}
				}
		
				//pr($all_months);die;
				
				$this->set(compact('events','competitions','throwdown','challenges','timeline','all_months'));
		}


	}
	/**
	 * Method Name : __set_userfilter
	 * Author Name : Bhanu Prakash Pandey
	 * Date : 02-08-2013
	 * Description : check for front end user
	 */
	private function __set_userfilter()
	{
		if( $this->Auth->user('id') && $this->Auth->user('role') == UserRoleConst::RoleUser )
		{
			$this->Session->write('SESS_USERID', $this->Auth->user('id'));
			$this->set('SESS_LOGGEDIN', true);
			$this->set('SESS_USERNAME', $this->Auth->user('first_name'));
			$this->set('SESS_USER_TYPE', $this->Auth->user('user_type'));
		}
		else
		{
			$this->set('SESS_LOGGEDIN', false);
		}
	}
	
	/**
	 * Method Name : __set_adminfilter
	 * Author Name : Bhanu Prakash Pandey
	 * Date : 02-08-2013
	 * Description : check for Administrator
	 */
	 
	private function __set_adminfilter()
	{
		$this->Auth->authenticate = array('Form' => array
				(
						'fields' => array('username' => 'email', 'password' => 'password'),
						'scope' => array('role' => UserRoleConst::RoleAdmin)
				)
		);
		//CHANGING THE DEFAULT FIELDS OF AUTH TO USE EMAIL ID INSTEAD OF USERNAME
	
		$this->Auth->loginRedirect = array('controller' => 'users', 'action' => 'admin_index');
		$this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'admin_login');
		$this->Auth->authError = __("You must be logged in to access this area.");
		$this->Auth->loginError = __("Enter correct Username and Password to login.");		
		if ( $this->Auth->user('id') && $this->Auth->user('role') == UserRoleConst::RoleAdmin )
		{
			$this->set('SESS_ADMIN_LOGGEDIN', true);
			$this->set('SESS_ADMIN_USERID', $this->Auth->user('id'));
			$this->set('SESS_ADMIN_USERNAME', $this->Auth->user('email'));
		}
	}
	
/**
 * Method Name : file_get_contents_curl	 
 * Author Name : Bhanu Prakash Pandey
 * Date : 13 August 2013
 * Description : to get data through CURL request
 */
	function file_get_contents_curl($url, $post = null, $headers = null)
	{
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_URL, $url);
		if ($post !== null)
		{
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		}
		if ($headers !== null)
		{
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		}
		
		if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN')
		{
			//Stop cURL from verifying the peer's and host's certificate.
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		}

		$data = curl_exec($ch);
		curl_close($ch);

		return $data;
	}
/**
 * Method Name : __getLinkedInAccessToken	 
 * Author Name : Bhanu Prakash Pandey
 * Date : 13 August 2013
 * Description : to get access token for Linkedin user
 */ 
	function __getLinkedInAccessToken()
	{
		$params = array('grant_type' => 'authorization_code',
	                    'client_id' => LoginAPI::LINKEDIN_KEY,
	                    'client_secret' => LoginAPI::LINKEDIN_SECRET,
	                    'code' => $_GET['code'],
	                    'redirect_uri' => LoginAPI::LINKEDIN_OAUTH_CALLBACK,
	              );
	     
	    // Access Token request
	    $url = 'https://www.linkedin.com/uas/oauth2/accessToken?' . http_build_query($params);
	     
	    // Tell streams to make a POST request
	    $context = stream_context_create(
	                    array('http' =>
	                        array('method' => 'POST',
	                        )
	                    )
	                );
	 
	    // Retrieve access token information
	    $response = @file_get_contents($url, false, $context);
	 
	    // Native PHP object, please
	    $token = json_decode($response);	 
	    // Store access token
	    $_SESSION['access_token'] = $token->access_token; 	     
	    return true;
	}
/**
 * Method Name : __getLinkedInAuthorizationCode	 
 * Author Name : Bhanu Prakash Pandey
 * Date : 13 August 2013
 * Description : to get authorization code for Linkedin user
 */ 	
	function __getLinkedInAuthorizationCode()
	{
		$params = array('response_type' => 'code',
	                    'client_id' => LoginAPI::LINKEDIN_KEY,
	                    'scope' => 'r_fullprofile r_emailaddress rw_nus',
	                    'state' => uniqid('', true), // unique long string
	                    'redirect_uri' => LoginAPI::LINKEDIN_OAUTH_CALLBACK,
	              );
	 
	    // Authentication request
	    $url = 'https://www.linkedin.com/uas/oauth2/authorization?' . http_build_query($params);	     
	    // Needed to identify request when it returns to us
	    $_SESSION['state'] = $params['state'];	 
	    // Redirect user to authenticate
	    header("Location: $url");
	    exit;
	}
/**
 * Method Name : __getLinkedInData	 
 * Author Name : Bhanu Prakash Pandey
 * Date : 13 August 2013
 * Description : to get user for Linkedin user
 */ 	
	function __getLinkedInData($method, $resource)
	{
		$params = array('oauth2_access_token' => $_SESSION['access_token'],
                    'format' => 'json',
              );     
	    // Need to use HTTPS
	    $url = 'https://api.linkedin.com' . $resource . '?' . http_build_query($params);
	    // Tell streams to make a (GET, POST, PUT, or DELETE) request
	    $context = stream_context_create(
	                    array('http' =>
	                        array('method' => $method,
	                        )
	                    )
	                );	 
	 
	    // Hocus Pocus
	    $response = file_get_contents($url, false, $context);	 
	    return json_decode($response);		
	}
	
	/**
	 * Purpose : TO UNLINK THE IMAGE BY TAKING NAME FROM THE TABLE AND ITS THUMB USING THE MODEL NAME
	 * Created on : 9-Dec-2011
	 * Author : Nitin
	*/
	function unlink_thumbs($img_loc, $model_name, $field_name, $whr, $thumb_sizes = array(), $custom_field_name = '')
	{
		$img_loc = $img_loc;
		
		append_slash($img_loc);
		
		$this->loadModel($model_name);
		//IF $thumb_sizes IS NOT ARRAY THEN CONSIDERING IT AS A VARIABLE OF MODEL
		if(empty($thumb_sizes))
		{
			$th_var_name = $field_name.'_thumbs_arr';
			if(!empty($this->$model_name->$th_var_name))
			{
				$thumb_sizes = $this->$model_name->$th_var_name;
			}
			else
			{
				$th_var_name = $custom_field_name.'_thumbs_arr';
				if(!empty($this->$model_name->$th_var_name))
				{
					$thumb_sizes = $this->$model_name->$th_var_name;
				}
			}
		}

 		$result_arr = $this->$model_name->find('list', array('conditions' => $whr, 'fields' => array($field_name)));
		if(count($result_arr))
		{
			foreach($result_arr as $img_name)
			{
				if(empty($img_name))
				{
					continue;
				}
				
				if(!empty($thumb_sizes))
				{
					foreach($thumb_sizes as $size)
					{
						$size_arr = @explode('x', $size);
						$th_imgname = $this->get_thumb_name($img_name, $size_arr[0], $size_arr[1], $img_loc);
						@unlink($th_imgname);
					}
				}

				@unlink($img_loc.$img_name);
			}
		}
	}
	
	function create_all_thumbs($img_name, $img_loc, $model_name, $field_name = '', $thumb_sizes = array(), $custom_field_name = '')
	{
		
		if(empty($img_name))
		{
			return;
		}

		//IF $thumb_sizes IS NOT ARRAY THEN CONSIDERING IT AS A VARIABLE OF MODEL
		if(empty($thumb_sizes) && !empty($field_name))
		{
			//try to load
			$this->loadModel($model_name);
			$th_var_name = $field_name.'_thumbs_arr';
			if(!empty($this->$model_name->$th_var_name))
			{
				$thumb_sizes = $this->$model_name->$th_var_name;
			}
			else
			{
				$th_var_name = $custom_field_name.'_thumbs_arr';
				if(!empty($this->$model_name->$th_var_name))
				{
					$thumb_sizes = $this->$model_name->$th_var_name;
				}
			}
		}
		
		if(count($thumb_sizes) && !empty($thumb_sizes))
		{
			foreach($thumb_sizes as $size)
			{
				$size_arr = @explode('x', $size);
				
				$aspect_ratio = '';
				
				if(empty($size_arr[0]))
				{
					$aspect_ratio = 'height';
				}
				elseif(empty($size_arr[1]))
				{
					$aspect_ratio = 'width';
				}
				elseif(!empty($size_arr[2]))
				{
					$aspect_ratio = $size_arr[2];
				}
				
				$this->Image->resize($img_loc.$img_name, $size_arr[0], $size_arr[1], $img_loc, $aspect_ratio);
			}
		}
	}
	
	/**
	 * Purpose : TO CREATE THE THUMB IMAGE NAME (same function also created in the xicom helper. But it return imagename with the thumb path)
	 * Created on : 9-Dec-2011
	 * Author : Nitin
	*/
	function get_thumb_name($img_name, $width, $height, $thumb_subloc)
	{
		$dotpos = strrpos($img_name, '.');
		$firstpart = substr($img_name, 0, $dotpos);
		$ext = substr($img_name, ($dotpos+1));
		
		append_slash($thumb_subloc);
		
		return $thumb_subloc.$firstpart.'_'.$width.'x'.$height.'.'.$ext;
	}
}
