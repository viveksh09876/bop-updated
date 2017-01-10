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
	public $WINNERS_ARRAY = array(
		'Best in Show'=>'BIS',
		'Best of Breed'=>'BOB',
		'Winning Dog'=>'WD',
		'Winning Bitch'=>'WB',
		'Best of Opposite sex'=>'BOOS'
	);

	public $ACHIEVEMENT_TYPES = array(
		'OD'=>'Origin Dogs',
		'DT'=>'Dog Titles',
		'PBD'=>'Player Breed Dogs',
		'WD'=>'Winning Dog',
		'WB'=>'Winning Bitch',
		'BW'=>'Best Winner',
		'BOB'=>'Best of Breed',
		'BOOS'=>'Best of Opposite Sex',
		'BIS'=>'Best in Show',
		'TA'=>'Training Achievements',
		'JA'=>'Job Achievements',
		'SPA'=>'Shop purchases achievements'
	);


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
			$this->Auth->loginRedirect = array('controller' => 'kennels', 'action' => 'index');
			$this->Auth->logoutRedirect = array('controller' => 'home', 'action' => 'index');
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

		
		
		/*if ( $this->params['action'] == 'login' || $this->params['action'] == 'register')
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
				}*/
		
				//pr($all_months);die;
				
				//$this->set(compact('events','competitions','throwdown','challenges','timeline','all_months'));
		//}
  $this->loadModel('UsersDiscussion');
 $messages_noti = $this->UsersDiscussion->find("count", array("conditions" => array(
                array("UsersDiscussion.received_id" => $this->Auth->user('id'), "UsersDiscussion.status" => 0),
            ),
            'order' => array("UsersDiscussion.id" => "desc")
        ));

        $this->set('messages_noti', $messages_noti);
	}
        
        
        function beforeRender() {
         $this->loadModel("User");
        $logged_in_user= $this->User->find("first",array("conditions"=>array("User.id"=>$this->Auth->user('id'))));
        $this->set("logged_in_user",$logged_in_user);
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
			$this->set('SESS_KENNELNAME', $this->Auth->user('kennel_name'));
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

	public function assignAwardTitles($gameBreed){
      $awards = [];
      if($gameBreed){
		  
        $this->loadModel('ShowEntry');
        
		
		$this->ShowEntry->unbindModel(array('belongsTo' => array('User', 'GameBreed')));
		$this->ShowEntry->bindModel(array(
							'belongsTo' => array(
									'Show' => array('className' => 'Show',
													'foreignKey' => 'show_id',
													'fields' => array('show_type'))
												)));
		$entries = $this->ShowEntry->find('all', array(
							'conditions' => array('ShowEntry.game_breed_id' => $gameBreed['id'])
						));
						
		
		$titles = array('conformation' => '','agility' => '','obedience' => '','rally' => '');
		$points = array('conformation' => 0, 
						'agility' => 0,
						'obedience' => 0,
						'rally' => 0);
		
		if(!empty($entries)) {
				
				
			foreach($entries as $ent) {
				
				switch($ent['Show']['show_type']) {
					
					case 'Conformation': $points['conformation'] += $ent['ShowEntry']['points_awarded']; break;
					case 'Agility': $points['agility'] += $ent['ShowEntry']['points_awarded']; break;
					case 'Obedience': $points['obedience'] += $ent['ShowEntry']['points_awarded']; break;
					case 'Rally': $points['rally'] += $ent['ShowEntry']['points_awarded']; break;
					
				}
				
			}
			
			if($points['conformation'] >= 800 ) {
				$titles['conformation'] = 'GCHP';
			}else if($points['conformation'] >= 400 ) {
				$titles['conformation'] = 'GCHG';
			}else if($points['conformation'] >= 200 ) {
				$titles['conformation'] = 'GCHS';
			}else if($points['conformation'] >= 100 ) {
				$titles['conformation'] = 'GCHB';
			}else if($points['conformation'] >= 25 ) {
				$titles['conformation'] = 'GCH';
			}else if($points['conformation'] >= 15 ) {
				$titles['conformation'] = 'CH';
			}
			
			
			if($points['agility'] >= 750 ) {
				$titles['agility'] = 'MACH';
			}else if($points['agility'] >= 500 ) {
				$titles['agility'] = 'MX';
			}else if($points['agility'] >= 300 ) {
				$titles['agility'] = 'AX';
			}else if($points['agility'] >= 200 ) {
				$titles['agility'] = 'OA';
			}else if($points['agility'] >= 75 ) {
				$titles['agility'] = 'NA';
			}
			
			
			if($points['rally'] >= 400 ) {
				$titles['rally'] = 'RAE';
			}else if($points['rally'] >= 250 ) {
				$titles['rally'] = 'RE';
			}else if($points['rally'] >= 100 ) {
				$titles['rally'] = 'RA';
			}else if($points['rally'] >= 50 ) {
				$titles['rally'] = 'RN';
			}
			
			
			if($points['obedience'] >= 100 ) {
				$titles['obedience'] = 'OTCH';
			}else if($points['obedience'] >= 75 ) {
				$titles['obedience'] = 'NOC';
			}else if($points['obedience'] >= 50 ) {
				$titles['obedience'] = 'UDX';
			}else if($points['obedience'] >= 35 ) {
				$titles['obedience'] = 'UD';
			}else if($points['obedience'] >= 25 ) {
				$titles['obedience'] = 'CDX';
			}else if($points['obedience'] >= 15 ) {
				$titles['obedience'] = 'CD';
			}
			
			//pr($titles); die;
		}	
		
		return $titles;

		
		/*
		
		$this->loadModel('ShowWinner');
        $winData = $this->ShowWinner->find('all', [
          'fields'=>array('Count(*) as total_wins', '(Sum(ShowEntry.points_awarded)) as points'),
          'contain'=>['ShowEntry'],
          'conditions'=> [
            'ShowEntry.game_breed_id'=>$gameBreed['id']
          ],
        ]);

        if(count($winData) > 0){
          $winData = $winData[0][0];
        }
        if($winData['total_wins'] > 1)
        {
          if($winData['total_wins'] >= 2 && $winData['points'] >= 15){
            $awards = ['CD', 'CH', 'NA', 'RN'];
          }
          if($winData['total_wins'] >= 2 && $winData['points'] >= 25){
            array_push($awards, "CDX", "GCH");
          }
          if($winData['total_wins'] >= 2 && $winData['points'] >= 30){
            array_push($awards, "OA", "RA");
          }
          if($winData['total_wins'] >= 2 && $winData['points'] >= 40){
            array_push($awards, "UD");
          }
          if($winData['total_wins'] >= 2 && $winData['points'] >= 45){
            array_push($awards, "AX", "RE");
          }
          if($winData['total_wins'] >= 2 && $winData['points'] >= 55){
            array_push($awards, "UDX");
          }
          if($winData['total_wins'] >= 2 && $winData['points'] >= 60){
            array_push($awards, "MACH", "RAE");
          }
          if($winData['total_wins'] >= 2 && $winData['points'] >= 70){
            array_push($awards, "OTCH");
          }
          if ($winData['total_wins'] >= 2 && $winData['points'] >= 75){
            array_push($awards, "PACH", "RNC");
          }

          if ((in_array("CH", $awards) && in_array("GCH", $awards)) || 
              in_array("RNC", $awards) || in_array("MACH", $awards) || in_array("OTCH", $awards) ){
            $awards = ['DC','CH', 'GCH', 'OTCH', 'RNC', 'MACH'];
          }
          if ((in_array("CH", $awards) && in_array("GCH", $awards) && in_array("OTCH", $awards)) || 
            in_array("RNC", $awards) || in_array("MACH", $awards)){
            $awards = ['TC','CH', 'GCH', 'OTCH', 'RNC', 'MACH'];
          }
        }*/
       // return $awards;
    	}
	}

	protected function addUserAchievement($achievement){
		$this->UserAchievements->create();
		$this->UserAchievements->save(array('achievement_id'=>$achievement['id'],'user_id'=>$this->Auth->user('id')));
		$this->updateUserKennelXP($achievement);
	}

	protected function updateUserKennelXP($achievement){
		$this->User->id = $this->Auth->user('id');
		$this->User->save(array('kennel_xp' =>  (int)$this->Auth->user('kennel_xp')+(int)$achievement['reward']));
		$userUpdatedData = $this->User->findById($this->Auth->user('id')); //update credit
        $this->Auth->login($userUpdatedData['User']);
	}

	protected function getDogRetirementMedal($dogName){
      $this->loadModel('UserRetirementMedal');

      $dogRM = $this->UserRetirementMedal->find('first', array(
        'conditions' => array(
          'user_id' => $this->Auth->user('id'),
          'dog_name' => $dogName
        ),
        'order'=> 'purchased_date DESC',
        'limit' => 1
      ));
      if (count($dogRM) > 0){
        $dateDiff = $this->getDateDifference($dogRM['UserRetirementMedal']['purchased_date']);
        $monthDiff = $this->getMonthsDifference($dateDiff, $this->getYearsDifference($dateDiff));
        if ($monthDiff > 0){
          return false;
        }
        return true;
      }      

      return false;
    }

	protected function getRetiredGameBreeds($genders){
        return $this->GameBreed->find('all', array('conditions' => array('GameBreed.user_id' => $this->Auth->user('id'), 'GameBreed.gender' =>  $genders, 'GameBreed.age >=' => 250,'GameBreed.age <' => 350)));
    }

    protected function getDateDifference($date){
      $curDate = date("Y-m-d");
      $diff = abs(strtotime($curDate) - strtotime($date));
      return $diff;
    }

    protected function getYearsDifference($diff){
      $years = floor($diff / (365*60*60*24));
      return $years;
    }

    protected function getMonthsDifference($diff,  $years){
      $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
      return $months;
    }
}
