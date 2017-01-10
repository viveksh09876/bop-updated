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
 * Users Controller
 *
 * Purpose : Manage user activity
 * @project Creators Exchange
 * @since 2 August 2013
 * @version Cake Php 2.3.8
 * @author : Bhanu Prakash Pandey
 */
class UsersController extends AppController 
{

	/**
	 * Controller name
	 *
	 * @var string
	 */
	public $name = 'Users';
	public $components  = array('Uploader');
	/**
	 * This controller does not use a model
	 *
	 * @var array
	 */
	public $uses = array('User');

	
	/**
	 * Purpose : To allow the user view some pages without login
	 * Input : To allow register function access without login
	 * Created on : 02-08-2013
	 * Author : Bhanu Prakash Pandey
	 */
	function beforeFilter()
	{
		parent::beforeFilter();
		$this->Auth->allow(array('register','verify','login','facebook','twitter','linkedin','twitter_callback',
								'forgot_password','update_password','twitter_email','get_profile', 'get_page_feeds','admin_forgot_password','admin_update_password'));
	}
	
	/**
	 * Method Name : admin_login
	 * Author Name : Bhanu Prakash Pandey
	 * Date : 02 August 2013
	 * Description : used for admin login
	 */
	
	public function admin_login()
	{
		if ($this->Auth->login())
		{
			$referer = array('controller' => 'users', 'action' => 'admin_index', 'admin' => true);
			$this->redirect($referer);
		}
		if (!empty($this->request->data))
		{
			$this->user = $this->Auth->user();
			if (!empty($this->user))
			{
				if ($this->user['role'] == UserRoleConst::RoleAdmin)
				{
					$referer = array('controller' => 'users', 'action' => 'admin_index', 'admin' => true);
					$this->redirect($referer);
				}
				else
				{
					$this->Session->destroy();
					$this->Session->setFlash(__('This account is not valid'),'default',array(),'error');
					$this->redirect('/');
				}
			}
			else
			{
				$this->Session->setFlash(__('User name or password is not valid'),'default',array(),'error');
				$referer = array('controller' => 'users', 'action' => 'admin_login', 'admin' => true);
				//$this->redirect($referer);
			}
		}
	}
	
	/**
	 * Method Name : admin_logout	 
	 * Author Name : Bhanu Prakash Pandey
	 * Date : 02 August 2013
	 * Description : used for logout from admin panel 
	 */

	public function admin_logout()
	{
		$this->Session->destroy();		
		$this->Auth->logout();
		$this->Session->setFlash(__('You are logged out successfully'),'default',array(),'success');
		$referer = array('controller' => 'users', 'action' => 'admin_login', 'admin' => true);
		$this->redirect($referer);
	}
	
	/**
	 * Method Name : admin_index
	 * Author Name : Bhanu Prakash Pandey
	 * Date : 02 August 2013
	 * Description : used for admin dashboard
	 */
	
	public function admin_index()
	{
	
		$this->set('title_for_layout', 'Administrator | Dashboard');
	}
	
	/**
	 * Method Name : admin_manage
	 * Author Name : Bhanu Prakash Pandey
	 * Date : 13 August 2013
	 * Description : used for admin users listing
	 */
	 public function admin_manage()
	 {
	 	$conditions = "User.role = '". UserRoleConst::RoleUser ."'";
		if ( !empty($this->request->query['keyword']))
		{
			$keyword = strtolower(trim($this->request->query['keyword']));
			$conditions	.= " AND ( LOWER(User.first_name) LIKE '%" . $keyword . "%' OR LOWER(User.last_name) LIKE '%" . $keyword . "%' OR LOWER(User.email) LIKE '%" . $keyword . "%')";
		}
		if ( !empty($this->request->query['type']))
		{
			$account_type = strtolower(trim($this->request->query['type']));
			$conditions	.= " AND LOWER(User.user_type) = '" . $account_type . "'";
		}
		
		$this->paginate = array(
			'conditions' => $conditions,
			'order' => 'User.id desc',
			'limit' => ADMIN_PAGE_LIMIT
		);
		$users = $this->paginate('User');
		$this->set('users', $users);
	 }
	 
	 /**
	 * admin_edit method
	 *
	 * @param string $id
	 * @return void
	 */
    public function admin_edit($id = null)
    {
		if ( !empty($this->request->data) )
		{
			$data = $this->request->data;
			if ( $this->User->save($data) )
			{
				$this->Session->setFlash(__('User details has been updated successfully'),'default',array(),'success');	
				$this->redirect(array('controller' => 'users','action' => 'manage','admin' => true));
			}
			else
			{
				$errors = $this->User->validationErrors;
				$this->set('invalidfields', $errors);
			}
		}
		$this->request->data = $this->User->read(null, $id);
    }
	
	 /**
	 * admin_view method
	 *
	 * @param string $id
	 * @return void
	 */
    public function admin_view($id = null)
    {
		$this->User->id = $id;
		if (!$this->User->exists())
		{
			throw new NotFoundException(__('Invalid User found'));
		}
		$this->set('user', $this->User->read(null, $id));
    }
	 
	 /**
	 * Method Name : admin_delete
	 * Author Name : Bhanu Prakash Pandey
	 * Date : 13 August 2013
	 * Description : delete user
	 */
	
	public function admin_delete( $id = null )
	{
		$this->User->id = $id;
		$this->User->saveField('status',STATUS_DELETED);
		$this->Session->setFlash(__('Account has been deleted successfully'),'default',array(),'success');
		$this->redirect(array('controller' => 'users', 'action' => 'admin_manage'));
	}
	
	
	/**
	 * Method Name : register	 
	 * Author Name : Bhanu Prakash Pandey
	 * Date : 13 August 2013
	 * Description : user registration
	 */

	public function register()
	{
		if ( $this->request->isPost() )
		{
			//pr(pathinfo($this->data['User']['photo']['name'])); die;
			if ( isset($this->request->data['facebook_button']) )
			{
				// Check for Facebook registration
				$this->Session->write('userType',$this->request->data['User']['user_type']);
				$this->redirect(array('controller' => 'users', 'action' => 'facebook'));				
			}
			else if ( isset($this->request->data['twitter_button']) )
			{
				// Check for Twitter registration
				$this->Session->write('userType',$this->request->data['User']['user_type']);
				$this->redirect(array('controller' => 'users', 'action' => 'twitter'));
			}
			else if ( isset($this->request->data['linkedin_button']) )
			{
				// Check for Linkedin registration
				$this->Session->write('userType',$this->request->data['User']['user_type']);
				$this->redirect(array('controller' => 'users', 'action' => 'linkedin'));
			}
			else 
			{
				$data = $this->request->data;
				$data['User']['username'] = str_replace('/','',str_replace(' ', '-',strtolower($data['User']['username'])));
				
				$flag = 0;
				
				if ( $data['User']['user_type'] == 'affiliate')
				{
					$other_exists_user = $this->User->find('first',array('conditions'=>array(
																	'status <>'=>2,																
																	'other_name'=>$data['User']['other_name']								
																		
																	)
															)
												);
					if ( !empty($other_exists_user) )
					{
						$flag = 1;
					} 
				}
				$exists_user = $this->User->find('first',array('conditions'=>array(
																	'status <>'=>2,																
																	'email'=>$data['User']['email']								
																		
																	)
															)
												);
				
				if ( $flag == 1)
				{
					$this->Session->setFlash(__('Affiliate name already exist.'),'default',array(),'error');
					return;
				}
				
				if ($exists_user)
				{
					$this->Session->setFlash(__('Email id already exist.'),'default',array(),'error');
					return;
				}
				else
				{
					$exists_user = $this->User->find('first',array('conditions'=>array(
																	'status <>'=>2,																	
																	'username' => $data['User']['username']
																	)
															)
												);
					
					if ($exists_user)
					{
						$this->Session->setFlash(__('Username already exist.'),'default',array(),'error');
						return;
					}
					
					if ( isset($data['User']['photo']) )
					{
						$image = $data['User']['photo'];
						unset($data['User']['photo']);
					}
										
					$this->User->set($data);
					$this->User->create();
					$data['User']['role'] = UserRoleConst::RoleUser;
					$data['User']['status'] = STATUS_INACTIVE ;
					$data['User']['verification_code'] = String::uuid() ;
					$data['User']['password'] = $this->Auth->password($data['User']['password']);
					if ( $user = $this->User->save($data) )
					{
						$lastInsertedId = $user['User']['id'];
						
						$image_array = $image;
						$user_id = $lastInsertedId;
						$image_info = pathinfo($image_array['name']);
						$image_new_name = $image_info['filename'].time().'_'.$user_id;
						
						
						$dest_dir = WWW_ROOT.'files/'.$user_id; 
						
						if (!is_dir($dest_dir))
						{
							mkdir($dest_dir, 0777);
						}
						$dest_dir = $dest_dir.DS;
						$thumbnails = Thumbnail::user_profile_thumbs();	
						$params = array('size'=>'500');
						$size_dimensions = array('width'=>20, 'height'=>20);	
						$this->Uploader->upload($image_array, $dest_dir , array(), $image_new_name, $params, $size_dimensions);	
						
						if ( $this->Uploader->error )
						{
							$file_error = $this->Uploader->errorMessage;
							
							$this->Session->setFlash(__('Error occured while uploading image'),'default',array(),'error');
							$this->Session->setFlash(__($file_error, 'error-messages' ),'default',array(),'error');	
						}else{
							$image_new_name = $this->Uploader->filename;
							$source_path = WWW_ROOT.'files'.DS.$user_id.DS.$image_new_name;
							$filedata = array(
								'source_path' => $source_path,
								'dest_dir' => $dest_dir,
								'file_name' => $image_new_name
							);
							$file_dimension = array(
								'width' => $this->request->data['w'],
								'height' => $this->request->data['h'],
								'x' => $this->request->data['x'],
								'y' => $this->request->data['y']
							);
							//pr($filedata); die;
							$this->Uploader->crop( $filedata, $file_dimension, $thumbnails , array('remove'=>false) );
						}
						
						$this->User->saveField('photo',$this->Uploader->filename);						
						
						
						//$data['User']['password'] = $password;
						$this->User->saveField('password',$data['User']['password']);
						
						/* Send email to user */
						$this->loadModel('Emailtemplate');
						$email_content = $this->Emailtemplate->find('first', array('fields' => array('from_name', 'from_email', 'reply_to', 'subject', 'content'), 'conditions' => array('email_for' => 'Registration')));
						$content = $email_content['Emailtemplate']['content'];
						$activate_url = Router::url(array('controller' => 'users', 'action' => 'verify', $data['User']['verification_code']), true);
						$activate_url = "<a href='$activate_url'>$activate_url</a>";
						$content = str_replace(array('{USERNAME}', '{ACTIVATE_LINK}'), array(ucfirst($data['User']['first_name']), $activate_url), $content);
						$email_content['Emailtemplate']['content'] = $content;
						//~ pr($email_content);
						//~ die;
						$email = new CakeEmail('smtp');
						$email->from(array (ADMIN_EMAIL => APPLICATION_NAME))
						->to($this->request->data['User']['email'])
						->emailFormat('html')
						->subject($email_content['Emailtemplate']['subject'])
						->send($content);										
						
							
						$this->Session->setFlash(__('Please check your inbox to activate your Account'),'default',array(),'success');
						$this->redirect(array('controller' => 'users','action' => 'register'));
					}
					else
					{
						$this->Session->setFlash(__('Please fill the required fields.'),'default',array(),'error');
					}
				}
			}
			
		}
		$this->set('title_for_layout', 'User Registration');		
	}
	
	/**
	 * Method Name : verisfy	 
	 * Author Name : Bhanu Prakash Pandey
	 * Date : 13 August 2013
	 * Description : verify account
	 */
    public function verify($verificationcode = null)
    {
    	if ( isset($verificationcode) )
		{
			$user = $this->User->find(
				'first', array (
					'conditions' => array (
						'User.verification_code' => $verificationcode
					)
				)
			);
				if ($user)
				{
					if (isset($user['User']['password']))
					{
						unset($user['User']['password']);
					} //unset password to prevent writing over it
					$updateuser = array ();
					$updateuser['User']['id'] = $user['User']['id'];
					$updateuser['User']['status'] = STATUS_ACTIVE;
					$updateuser['User']['verification_code'] = null;
					$userdata = array_merge($user['User'], $updateuser['User']);
					if ( $this->User->save($updateuser) )
					{
						// Confirmation mail when successfully verified
						$this->loadModel('Emailtemplate');
						$email_content = $this->Emailtemplate->find('first', array('fields' => array('from_name', 'from_email', 'reply_to', 'subject', 'content'), 'conditions' => array('email_for' => 'Account_confirmation')));
						$content = $email_content['Emailtemplate']['content'];
						$content = str_replace(array('{USERNAME}'), array(ucfirst($user['User']['first_name'])), $content);
						
						$email = new CakeEmail('smtp');
						$email->from(array (ADMIN_EMAIL => APPLICATION_NAME))
						->to($userdata['email'])
						->emailFormat('html')
						->subject($email_content['Emailtemplate']['subject'])
						->send($content);
						
						//~ $confirmation_email = new CakeEmail('smtp');
						//~ $confirmation_email->from(array (ADMIN_EMAIL => APPLICATION_NAME))
							//~ ->to($userdata['email'])
							//~ ->subject('Account Confirmation')
							//~ ->emailFormat('html')
							//~ ->viewVars(array ('user' => $userdata))
							//~ ->template('confirmation', 'default')
							//~ ->send(APPLICATION_NAME. ' : Confirmation Mail.');

						if ($this->Auth->login($userdata))
						{
							$this->Session->setFlash(__('Thank you !! your account has been verified.'),'default',array(),'success');
							$this->redirect(array ('controller' => 'users', 'action' => 'index'));
						}
					}
					else
					{
						$errors = $this->User->validationErrors;
						$this->Session->setFlash(__('Account not verified.'),'default',array(),'error');
						$this->redirect(array ('controller' => 'users', 'action' => 'login'));
					}
				}
				else
				{
					$this->Session->setFlash(__('Thank you !! your verification code has expired.'),'default',array(),'error');
					$this->redirect(array ('controller' => 'users', 'action' => 'login'));
				}
		}
    }

/**
 * Method Name : index	 
 * Author Name : Bhanu Prakash Pandey
 * Date : 13 August 2013
 * Description : user dashboard
 */

	public function index()
	{
		$user_data = $this->User->findById($this->Auth->user('id'));	
		if($user_data['User']['status'] == STATUS_ACTIVE)
		{
			$user_type = $this->Auth->user('user_type');
			$this->set('usersession',$this->Auth->user());
			
			$user = $this->User->findById($this->Auth->user('id'));
			
			$this->set('user',$user['User']);
			
			if ( $user_type == USER_ATHLETE )
			{

				$this->loadModel('ChallengePeople');
				$this->ChallengePeople->bindModel(array('belongsTo' => array('Challenge' => array('className' => 'Challenge', 'foreignKey' => 'challenge_id'))));
				$challenge_request = $this->ChallengePeople->find('all', array('conditions' => array('ChallengePeople.user_id' => $this->Auth->user('id'),'ChallengePeople.status' => 'Pending')));
				
				$count_challenge = 0;
				if ( !empty($challenge_request) )
				{
					foreach($challenge_request as $chq)
					{	 
						if ( $chq['Challenge']['date'] >= date('Y-m-d'))
						{	
							$count_challenge++;
						} 
					}
				}			
				
				$this->loadModel('AthleteProfile');
				$profile = $this->AthleteProfile->get_details($this->Auth->user('id'));
				$this->set('profile', $profile);		
				
				if ( isset($profile['AthleteProfile']) )
				{
					$nearby = $this->get_nearby_events($profile['AthleteProfile']['latitude'],$profile['AthleteProfile']['longitude']);
						
				}else{
					$this->set('count_nearby',0);
				}
				
				$this->loadModel('Badge');
				$badges = $this->Badge->find('all',array('conditions'=>array('Badge.user_id'=>$this->Auth->user('id'))));		
				
				$this->set('badges', $badges);	
						
				$this->set('challenge_request', $count_challenge);							
																
				$this->render('athlete_index');
			}
			else if ( $user_type == USER_AFFILIATE)
			{
				$this->loadModel('Event');
				$events = $this->Event->find('all', array('conditions' => array('Event.user_id' => $this->Auth->user('id')),
															'order' => array('Event.start_date' => 'asc')));
								
				if ( !empty($events) )
				{
					$upcoming = $all_ids = array();
					
					foreach($events as $ev)
					{
						$all_ids[] = $ev['Event']['id'];						
						$event_time = strtotime($ev['Event']['start_date']);	
						
						if ( $event_time > strtotime(date('Y-m-d')) )						
						{														
							$upcoming[] = $ev;	 //store all upcoming events in array
						}
					}
					$upcoming_event_id = '';
					if ( !empty($upcoming) )
					{
						$upcoming_event_date = strtotime($upcoming[0]['Event']['start_date']);
						$upcoming_event_id = $upcoming[0]['Event']['id'];						
						
						//Loop to find out upcoming event
						foreach($upcoming as $up)
						{
							$event_date = strtotime($up['Event']['start_date']);
							if ( $event_date < $upcoming_event_date )
							{
								$upcoming_event_date = $event_date;
								$upcoming_event_id = $up['Event']['id'];	
							}
						}						
						
						// Calculate number of days to next event
						$days_next_event = $upcoming_event_date - strtotime(date('Y-m-d'));
						$days_next_event = floor($days_next_event/3600/24);
						$this->set('days_next_event', $days_next_event);	
						$this->set('upcoming_event_id', $upcoming_event_id);							
					}	
					
					// Count number of athletes registered under all events created by user
					$this->loadModel('EventRegistration');
					$athlete_count = $this->EventRegistration->find('count', array('conditions' => array('EventRegistration.event_id' => $upcoming_event_id)));
					$this->set('athlete_count', $athlete_count);
					
					$this->loadModel('AffiliateProfile');
					$profile = $this->AffiliateProfile->get_details($user['User']['id']);
					$this->set('profile', $profile);				
				}

				$this->loadModel('Message');
				$this->Message->primaryKey = 'from_id';
				$this->Message->bindModel(array('belongsTo' => array('User' => array('className' => 'User', 'foreignKey' =>'from_id', 'fields' => array('User.username','User.id')))));
				$messages = $this->Message->find('all', array('conditions' => array('Message.to_id' => $user['User']['id']),
															'order' => array('Message.id' => 'desc')));
				$this->set('messages', $messages); 
				
				$this->loadModel('Badge');
				$badges = $this->Badge->find('all',array('conditions'=>array('Badge.user_id'=>$this->Auth->user('id'))));		
				
				$this->set('events', $events);
				$this->set('badges', $badges);	
				$this->render('affiliate_index');
			}
			else
			{
				$this->set_fan_dashboard_data($this->Auth->user('id'));
				$this->render('fan_index');
			}
			$this->set('title_for_layout', 'User Dashboard');		
		}	
		else
		{
			$this->Session->destroy();
			$this->Session->setFlash(__('Account is not activated. Please activate your account.'),'default',array(),'error');
			$this->redirect(array('controller' => 'users', 'action' => 'login')); 
		}
	}


	/**
	 * Method Name : set_fan_dashboard_data	 
	 * Author Name : Vivek Sharma
	 * Date : 30 July 2014
	 * Description : set fan dashboard data
	 */
	 public function set_fan_dashboard_data($user_id)
	 {
	 			
	 	$this->loadModel('Badge');
		$badges = $this->Badge->find('all', array('conditions' => array('Badge.user_id' => $user_id)));
		$this->set('badges', $badges);
		
		$this->loadModel('FanProfile');
		$profile = $this->FanProfile->get_details($user_id);
		
		$this->set('profile', $profile);
		
		return;
	 }

	/**
	 * Method Name : get_nearby_events	 
	 * Author Name : Vivek Sharma
	 * Date : 30 July 2014
	 * Description : get nearby events
	 */	
	public function get_nearby_events($lat,$long)
	{
		$this->loadModel('Event');
		$events = $this->Event->find('all', array('conditions' => array('Event.status' => 1, 'Event.start_date > ' => date('Y-m-d'))));
		
		$nearby_events = array();
		
		if ( !empty($events) )
		{
			foreach($events as $ev)
			{
				if ( !empty($lat) && !empty($long) )
				{
					$distance = getDistance($lat, $long, $ev['Event']['latitude'], $ev['Event']['longitude']);
					
					if ( $distance < 50 )
						$nearby_events[] = $ev;
				}				
			}
		}
		
		$this->set('count_nearby', count($nearby_events));
		$this->set('nearby_events', $nearby_events);
		
		return;
	}
			

 	/**
	 * Method Name : get_page_feeds	 
	 * Author Name : Vivek Sharma
	 * Date : 17 June 2014
	 * Description : get feeds from fb page & twitter page
	 */
	 public function get_page_feeds($user_id)
	 {
	 	App::import('vendors','TwitterAPIExchange');
	 	$this->layout = 'ajax';
		
		
		$user = $this->User->find('first', array('conditions' => array('User.id' => $user_id), 'fields' => array('User.user_type')));
		
		$posts = array(); $i=0;
		
		if ( $user['User']['user_type'] == 'athlete')
		{
			$this->loadModel('AthleteProfile');
		 	$profile = $this->AthleteProfile->find('first',array('conditions' => array('AthleteProfile.user_id' => $user_id),
																'fields' => array('AthleteProfile.fb_page', 'AthleteProfile.twitter_page')));
																
			$Model = 'AthleteProfile';													
			
		}else if ($user['User']['user_type'] == 'fan')
		{
			$this->loadModel('FanProfile');
		 	$profile = $this->FanProfile->find('first',array('conditions' => array('FanProfile.user_id' => $user_id),
																'fields' => array('FanProfile.fb_page', 'FanProfile.twitter_page')));
																
			$Model = 'FanProfile';	
			
		}else if($user['User']['user_type'] == 'affiliate'){
				
			$this->loadModel('AffiliateProfile');
		 	$profile = $this->AffiliateProfile->find('first',array('conditions' => array('AffiliateProfile.user_id' => $user_id),
																'fields' => array('AffiliateProfile.fb_page', 'AffiliateProfile.twitter_page')));
			
			$this->loadModel('Customfeed');
		
			$this->Customfeed->bindModel(array('belongsTo' => array(
											'Event' => array(
													'className' => 'Event',
													'foreignKey' => 'event_id'
											)
									)));
			$custom = $this->Customfeed->find('all', array('conditions' => array('Customfeed.user_id' => $this->Auth->user('id')),
															'fields' => array('Customfeed.*', 'Event.id','Event.title', 'Event.picture')));
			
			if ( !empty($custom) )
			{
				foreach($custom as $fd)
				{
					if ( $fd['Customfeed']['is_public'] == 'Yes' )
					{
						$posts[$i]['picture'] = $this->webroot.'files/events/'.$fd['Event']['id'].'/thumb_'.$fd['Event']['picture'];
						$posts[$i]['name'] = $fd['Event']['title'];
						$posts[$i]['message'] = $fd['Customfeed']['content'];
						$posts[$i]['link'] = $this->webroot.'events/event_details/'.$fd['Event']['id'];
						$posts[$i]['created'] = strtotime($fd['Customfeed']['created']);
						
						$i++;
					}
				}
			}
			
			$Model = 'AffiliateProfile';	
		
		}	
		
		
		if ( !empty($profile[$Model]['fb_page']) )
		{														
	 		$fb_posts = file_get_contents("https://graph.facebook.com/".$profile[$Model]['fb_page']."/posts?fields=caption,description,id,link,message,picture,name,story,updated_time&limit=10&access_token=".FB_ACCESS_TOKEN);
			$fb_posts = json_decode($fb_posts);
				
			
			if ( isset($fb_posts->data) && !empty($fb_posts->data))
			{
				foreach($fb_posts->data as $dat)
				{
					$posts[$i]['picture'] = $posts[$i]['name'] = $posts[$i]['message'] = $posts[$i]['link'] = $posts[$i]['created'] = '';
					
					if ( !empty($dat->picture) )
						$posts[$i]['picture'] = $dat->picture;
					
					if ( !empty($dat->name) )
						$posts[$i]['name'] = $dat->name;
					
					if ( !empty($dat->message) )
						$posts[$i]['message'] = $dat->message;
					
					if ( !empty($dat->link) )
						$posts[$i]['link'] = $dat->link;
					
					if ( !empty($dat->picture) )
						$posts[$i]['created'] = strtotime($dat->created_time);
						
					$i++;	
				}				
			}
		}		
		
			
		if ( !empty($profile[$Model]['twitter_page']) )
		{
			$settings = array(
			    'oauth_access_token' => TW_TOKEN,
			    'oauth_access_token_secret' => TW_TOKEN_SECRET,
			    'consumer_key' => TW_APP_KEY,
			    'consumer_secret' => TW_APP_SECRET
			);			
						
			$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
			$getfield = '?screen_name='.$profile[$Model]['twitter_page'].'&count=5';
			
			$requestMethod = 'GET';
			
			$twitter = new TwitterAPIExchange($settings);
			$response = $twitter->setGetfield($getfield)
			                    ->buildOauth($url, $requestMethod)
			                    ->performRequest();
						
			$response = json_decode($response);
			
			if ( !empty($response) )
			{
				foreach($response as $tw)
				{
					$posts[$i]['picture'] = $posts[$i]['name'] = $posts[$i]['message'] = $posts[$i]['link'] = $posts[$i]['created'] = '';
					
					if ( !empty($tw->user->profile_image_url) )
						$posts[$i]['picture'] = $tw->user->profile_image_url;
					
					if ( !empty($tw->user->name) )
						$posts[$i]['name'] = $tw->user->name;
					
					if ( !empty($tw->text) )
						$posts[$i]['message'] = $tw->text;
					
					if ( !empty($tw->user->url) )
						$posts[$i]['link'] = $tw->user->url;
					
					if ( !empty($tw->created_at) )
						$posts[$i]['created'] = strtotime($tw->created_at);
						
					$i++;
				}	
				
			}
			
		}
		
		
		$arr = array();
		if ( !empty($posts) )
		{
			foreach($posts as $pst)
			{
				$arr[$pst['created']][] = $pst;
			}
		}
		
		array_multisort($arr, SORT_DESC, $posts);		
						
					
		$this->set('posts',$posts);
		$this->render('news');
	 }	 

	/**
	 * Method Name : login	 
	 * Author Name : Bhanu Prakash Pandey
	 * Date : 13 August 2013
	 * Description : used for login functionality for Frontend users
	 */
	public function login()
	{
		if ($this->Auth->login())
		{
			if (isset($this->request->data['User']) && $this->request->data['User']['remember_me'] == 1) 
			{
				// After what time frame should the cookie expire
				$cookieTime = "1 week"; // You can do e.g: 1 week, 17 weeks, 14 days
			 
				// remove "remember me checkbox"
				unset($this->request->data['User']['remember_me']);
							 
				// hash the user's password
				$this->request->data['User']['password'] = $this->Auth->password($this->request->data['User']['password']);
							 
				// write the cookie
				$this->Cookie->write('remember_me', $this->request->data['User'], true, $cookieTime);
			}
			$this->redirect(array('controller' => 'users', 'action' => 'index'));
		}
		if (!empty($this->request->data))
		{
			$this->user = $this->Auth->user();
			if (!empty($this->user))
			{
				
				if ($this->user['status'] == STATUS_ACTIVE)
				{
					if ($this->user['role'] == UserRoleConst::RoleUser)
					{
						$this->redirect(array('controller' => 'users', 'action' => 'index'));
					}
					else
					{
						$this->Session->destroy();
						$this->Session->setFlash(__('This account is not valid'),'default',array(),'error');
						$this->redirect('/');
					}	
				}
				else
				{
					$this->Session->destroy();
					$this->Session->setFlash(__('Account is not activated. Please activate your account.'),'default',array(),'error');
					$this->redirect('/');	
				}
			}
			else
			{
				$this->Session->setFlash(__('Email or password is not valid'),'default',array(),'error');
			}
		}
	}
	
	/**
	 * Method Name : logout	 
	 * Author Name : Bhanu Prakash Pandey
	 * Date : 13 August 2013
	 * Description : used for logout functionality for Frontend users
	 */

	public function logout()
	{
		$this->Session->destroy();		
		$this->Cookie->delete('remember_me');
		$this->Auth->logout();
		//$this->Session->setFlash(__('You are logged out successfully'),'default',array(),'success');
		//$this->redirect(array('controller' => 'users', 'action' => 'login'));
		$this->redirect(array('controller' => 'pages', 'action' => 'display'));
	}

	
	/**
	 * Method Name : facebook	 
	 * Author Name : Bhanu Prakash Pandey
	 * Date : 13 August 2013
	 * Description : used for Facebook authentication
	 */

	public function facebook()
	{
		$access_token = $this->__auth_facebook();
		if( !empty($access_token) )
		{
			$data = $this->file_get_contents_curl('https://graph.facebook.com/me?fields=id,name,username,first_name,last_name,gender,bio,birthday,email,location&access_token='.$access_token);
			$fbuser_data = json_decode($data);
			
			//Email id exists or not
			if( !empty($fbuser_data->email) )
			{
				$this->Session->write('Auth.User.fb_user_access_token', $access_token);
				
				$exists_user = $this->User->findByEmail($fbuser_data->email);
				if ( $this->Auth->user('id') )
				{
					// If website user try to shared post with facebook
					$this->User->id = $this->Auth->user('id');
					$this->User->saveField('facebook_id', $fbuser_data->id);
					$this->User->saveField('fb_access_token', $access_token);
					
					
					
					if ( isset($fbuser_data->username) )
					{
						$this->User->saveField('username', strtolower($fbuser_data->username));
					}
					
					$this->redirect( array( 'controller' => 'users', 'action' => 'index' ) );
				}
				else
				{
					$data = array(
								'email' => $fbuser_data->email,
								'facebook_id' => $fbuser_data->id,
								'fb_access_token' => $access_token,
							); 
							
					if ( $exists_user )
					{
						$data['id'] = $exists_user['User']['id'] ;
						$this->User->validate = array();
						$user = $this->User->save($data);
						$getUserData = $this->User->findById($exists_user['User']['id']);
						$this->request->data['User']['id'] = $getUserData['User']['id'];
						$this->request->data['User']['role'] = $getUserData['User']['role'];
						$this->request->data['User']['user_type'] = $getUserData['User']['user_type'];
						$this->request->data['User']['email'] = $getUserData['User']['email'];
						$this->request->data['User']['password'] = $getUserData['User']['password'];
						$this->Auth->login($this->request->data['User']);
					}
					else
					{												
						// End of pulling facebook user profile
						
						$data['first_name'] 	= 	( isset($fbuser_data->first_name) ) ? $fbuser_data->first_name : $fbuser_data->name ;//$fbuser_data->name ;
						$data['last_name']  	= 	( isset($fbuser_data->last_name) ) ? $fbuser_data->last_name : '' ;
						$data['role'] = UserRoleConst::RoleUser;
						$data['status'] = STATUS_ACTIVE ;
						$data['user_type'] = $this->Session->read('userType');
						$data['verification_code'] = '';
						$data['password'] 		= 	$this->Auth->password( $fbuser_data->first_name.$fbuser_data->id );						
						$this->User->validate = array();
						$user = $this->User->save($data);
						
						$this->Session->delete('userType');
						
						$lastInsertedId = $this->User->getLastInsertID();
						$this->request->data['User']['id'] = $lastInsertedId;
						$this->request->data['User']['role'] = UserRoleConst::RoleUser;
						$this->request->data['User']['user_type'] = $data['user_type'];
						$this->request->data['User']['email'] = $data['email'];
						$this->request->data['User']['password'] = $this->Auth->password( $fbuser_data->first_name.$fbuser_data->id );
						$this->Auth->login($this->request->data['User']);
						
						// Registration email
						$this->loadModel('Emailtemplate');
						$email_content = $this->Emailtemplate->find('first', array('fields' => array('from_name', 'from_email', 'reply_to', 'subject', 'content'), 'conditions' => array('email_for' => 'Social_registration')));
						$content = $email_content['Emailtemplate']['content'];
						$content = str_replace(array('{USERNAME}' ,'{EMAIL}','{PASSWORD}'), array(ucfirst($user['User']['first_name']), $data['email'], $fbuser_data->first_name.$fbuser_data->id), $content);
						
						$email = new CakeEmail('smtp');
						$email->from(array (ADMIN_EMAIL => APPLICATION_NAME))
						->to($data['email'])
						->emailFormat('html')
						->subject($email_content['Emailtemplate']['subject'])
						->send($content);

					}
					
					if ( $this->Auth->login() )
					{ 
						$this->redirect( array( 'controller' => 'users', 'action' => 'index' ) );
					}
				}
				
			}
		}
	}

	/**
	* Purpose : authenticate facebook login
	* Author : Bhanu Prakash Pandey
	* Created Date: 13 August 2012	
	*/
	private function __auth_facebook()
	{
		$access_token = '';
		$post_login_url = SITE_URL . 'users/facebook';	
		if( isset($_REQUEST["code"]) )
		{
			$code = $_REQUEST["code"];
		}
		else 
		{
			$code = '';
		}
		
		//to get the access_token with publish_stream permission 
       if(empty($code))
		{ 
			$dialog_url= 'https://www.facebook.com/dialog/oauth?client_id='.LoginAPI::FACEBOOK_APP_ID.'&redirect_uri='.urlencode($post_login_url) .'&state='. uniqid() .'&scope=publish_actions,manage_pages,email,read_stream,user_about_me';
			echo("<script>top.location.href='" . $dialog_url . "'</script>");
			 
		}
		else
		{
		  $token_url="https://graph.facebook.com/oauth/access_token?"
		   . "client_id=" . LoginAPI::FACEBOOK_APP_ID 
		   . "&redirect_uri=" . urlencode($post_login_url)
		   . "&client_secret=" . LoginAPI::FACEBOOK_APP_SECREAT
		   . "&code=" . $code;
		   $URL = $token_url;
		   $data = $this->file_get_contents_curl($URL);
		   parse_str($data, $params);
		  
		   $access_token = $params['access_token'];
		   
		   $extended_token_url = 'https://graph.facebook.com/oauth/access_token?client_id='.LoginAPI::FACEBOOK_APP_ID.'&client_secret='.LoginAPI::FACEBOOK_APP_SECREAT.'&grant_type=fb_exchange_token&fb_exchange_token='.$access_token;
				
		   $response = file_get_contents($extended_token_url);
		   $resp = explode('&',$response);
		   $resp = explode('=',$resp[0]);
		  // pr($resp); die;
		   return $resp[1];
		}
	}

/**
 * Method Name : twitter	 
 * Author Name : Bhanu Prakash Pandey
 * Date : 13 August 2013
 * Description : used for Twitter authentication
 */
	public function twitter()
	{
		App::import('Vendor', 'twitterauth/twitteroauth');		
		$connection = new TwitterOAuth( LoginAPI::TWITTER_CONSUMER_KEY , LoginAPI::TWITTER_CONSUMER_SECRET );
		
		$request_token = $connection->getRequestToken(LoginAPI::TWITTER_OAUTH_CALLBACK);
		
		$_SESSION['oauth_token'] = $token = $request_token['oauth_token'];
		$_SESSION['oauth_token_secret'] = $request_token['oauth_token_secret'];
		
		//pr($_SESSION);die;
		 switch ($connection->http_code) 
		 {
			case 200:
			/// Build authorize URL and redirect user to Twitter. 
				$url = $connection->getAuthorizeURL($token);
				$this->redirect($url);
			break;
			default:
			/// Show notification if something went wrong. 
				echo 'Could not connect to Twitter. Refresh the page or try again later.';
		}
	}

/**
 * Method Name : twitter_callback	 
 * Author Name : Bhanu Prakash Pandey
 * Date : 13 August 2013
 * Description : callback url for twitter
 */ 
	public function twitter_callback()
	{
		if(isset($_REQUEST['denied']))
		{
			$this->redirect('/');
		}
		//pr($_SESSION);die;
		App::import('Vendor', 'twitterauth/twitteroauth');		
		$connection = new TwitterOAuth(LoginAPI::TWITTER_CONSUMER_KEY, LoginAPI::TWITTER_CONSUMER_SECRET, $_SESSION['oauth_token'], $_SESSION['oauth_token_secret']);
		
		$user_data = $connection->getAccessToken($_REQUEST['oauth_verifier']);
		
		unset($_SESSION['oauth_token']);
		unset($_SESSION['oauth_token_secret']);
		// Check exists twitter id
		if( isset($user_data['user_id'] ) )
		{
			$exists_user = $this->User->findByTwitterId($user_data['user_id']);
			
			if ( $this->Auth->user('id') )
			{
				
				// If website user try to shared post with Twitter
				if ( empty($exists_user) )
				{
					$this->User->id = $this->Auth->user('id');
					$this->User->save(array('twitter_id' =>  $user_data['user_id'],
											'twitter_auth_token' => $user_data['oauth_token'],
											'twitter_auth_secret' => $user_data['oauth_token_secret']));
				
				}
				else
				{
					$this->User->id = $this->Auth->user('id');
					$this->User->save(array('twitter_id' =>  $user_data['user_id'],
											'twitter_auth_token' => $user_data['oauth_token'],
											'twitter_auth_secret' => $user_data['oauth_token_secret']));
											
					$this->Session->setFlash(__('This login credential is in use already!'));
				}
				$this->redirect( array( 'controller' => 'users', 'action' => 'index' ) );
			}
			else
			{
				$user_json = $connection->get('account/verify_credentials');
				$data = array(
							'twitter_id'=>$user_data['user_id'],
							'twitter_auth_token'=>$user_data['oauth_token'],
							'twitter_auth_secret'=> $user_data['oauth_token_secret'],
							'username' => $user_data['screen_name']
						);  
				
				
				if ( $exists_user )
				{
					$data['id'] = $exists_user['User']['id'] ;
					$this->User->validate = array();
					$user = $this->User->save($data);
					$getUserData = $this->User->findById($exists_user['User']['id']);
					$this->request->data['User']['id'] = $getUserData['User']['id'];
					$this->request->data['User']['role'] = $getUserData['User']['role'];
					$this->request->data['User']['user_type'] = $getUserData['User']['user_type'];
					$this->request->data['User']['email'] = $getUserData['User']['email'];
					$this->request->data['User']['password'] = $getUserData['User']['password'];
					$this->Auth->login($this->request->data['User']);
				}
				else
				{ 
					$data['first_name'] = $user_json->name;
					$data['role'] = UserRoleConst::RoleUser;
					$data['status'] = STATUS_ACTIVE ;
					$data['user_type'] = $this->Session->read('userType');
					$data['verification_code'] = '';
					$data['password'] 		= 	$this->Auth->password( $user_data['screen_name'].$user_data['user_id'] );						
					$this->User->validate = array();
					$user = $this->User->save($data);
					
					$this->Session->delete('userType');
					
					$lastInsertedId = $this->User->getLastInsertID();
					$this->request->data['User']['id'] = $lastInsertedId;
					$this->request->data['User']['role'] = UserRoleConst::RoleUser;
					$this->request->data['User']['user_type'] = $data['user_type'];
					$this->request->data['User']['email'] = $data['first_name'];
					$this->request->data['User']['password'] = $this->Auth->password( $user_data['screen_name'].$user_data['user_id']);
					//$this->Auth->login($this->request->data['User']);
					//die($user_data['screen_name']."==".$user_data['user_id']);
					$this->redirect( array( 'controller' => 'users', 'action' => 'twitter_email',$user_data['user_id'],$user_data['screen_name'] ) );					
					
				}
				
				if ( $this->Auth->login() )
				{ 
					$this->redirect( array( 'controller' => 'users', 'action' => 'index' ) );
				}
			}
		}
	}
	
   /**
	 * Method Name : twitter_email	 
	 * Author Name : Santosh Gupta
	 * Input : 1) $twitter_id 
	 * 		   2) $screen_name	
	 * Date : 20 August 2013
	 * Description : Update twitter email address and send email
	 */ 
	public function twitter_email($twitter_id = null,$screen_name = null)
	{
		$this->set('twitter_id',$twitter_id);
		$this->set('screen_name',$screen_name);
		if ( $this->request->isPost() )
		{
			if ( isset($this->request->data) )
			{
				$this->loadModel('User');
				$exists_user = $this->User->findByTwitterId($this->request->data['User']['twitter_id']);
				
				if($exists_user)
				{
					$data['User']['email'] = $this->request->data['User']['email'];
					$data['User']['id'] = $exists_user['User']['id'];
					
					//Update email address
					$this->User->save($data);
					
					$exists_user['User']['email'] = $this->request->data['User']['email'];
					$exists_user['User']['password'] = $this->Auth->password( $this->request->data['User']['screen_name'].$this->request->data['User']['twitter_id']);
					$this->Auth->login($exists_user['User']);
					
					if ( $this->Auth->login() )
					{ 
						// Registration email
						$this->loadModel('Emailtemplate');
						$email_content = $this->Emailtemplate->find('first', array('fields' => array('from_name', 'from_email', 'reply_to', 'subject', 'content'), 'conditions' => array('email_for' => 'Social_registration')));
						$content = $email_content['Emailtemplate']['content'];
						$content = str_replace(array('{USERNAME}' ,'{EMAIL}','{PASSWORD}'), array(ucfirst($exists_user['User']['first_name']), $data['User']['email'], $this->request->data['User']['screen_name'].$this->request->data['User']['twitter_id']), $content);
						
						$email = new CakeEmail('smtp');
						$email->from(array (ADMIN_EMAIL => APPLICATION_NAME))
						->to($data['User']['email'])
						->emailFormat('html')
						->subject($email_content['Emailtemplate']['subject'])
						->send($content);
						
						$this->redirect( array( 'controller' => 'users', 'action' => 'index' ) );
					}
				}
			}
		}
	}
	
/**
 * Method Name : linkedin	 
 * Author Name : Bhanu Prakash Pandey
 * Date : 13 August 2013
 * Description : callback url for twitter
 */ 
	public function linkedin()
	{
		if (isset($_GET['error'])) 
		{
		    // LinkedIn returned an error
		    print $_GET['error'] . ': ' . $_GET['error_description'];
		    exit;
		}
		elseif (isset($_GET['code'])) 
		{
		    // User authorized your application
		    if ($_SESSION['state'] == $_GET['state']) 
		    {
		        // Get token so you can make API calls
		        $this->__getLinkedInAccessToken();
		    }
		    else 
		    {
		        // CSRF attack? Or did you mix up your states?
		        exit;
		    }
		} 
		else 
		{
		   if (empty($_SESSION['access_token'])) 
		   {
		        // Start authorization process
		        $this->__getLinkedInAuthorizationCode();
		    }
		}
		
		$responseProfileData = $this->__getLinkedInData("GET",'/v1/people/~:(firstName,lastName)');
		$responseEmailData = $this->__getLinkedInData("GET",'/v1/people/~/email-address');
		
		$exists_user = $this->User->findByEmail($responseEmailData);
		if ( $exists_user )
		{
			$getUserData = $this->User->findById($exists_user['User']['id']);
			$this->request->data['User']['id'] = $getUserData['User']['id'];
			$this->request->data['User']['role'] = $getUserData['User']['role'];
			$this->request->data['User']['user_type'] = $getUserData['User']['user_type'];
			$this->request->data['User']['email'] = $getUserData['User']['email'];
			$this->request->data['User']['username'] = $getUserData['User']['email'];
			$this->request->data['User']['password'] = $getUserData['User']['password'];
			$this->Auth->login($this->request->data['User']);
		}
		else
		{
			$data['first_name'] = $responseProfileData->firstName;
			$data['last_name'] = $responseProfileData->lastName;
			$data['username'] = $responseEmailData;
			$data['email'] = $responseEmailData;
			$data['role'] = UserRoleConst::RoleUser;
			$data['status'] = STATUS_ACTIVE ;
			$data['user_type'] = $this->Session->read('userType');
			$data['verification_code'] = '';
			$data['password'] 		= 	$this->Auth->password( $responseProfileData->firstName.$responseProfileData->lastName );						
			$this->User->validate = array();
			$user = $this->User->save($data);
			
			$this->Session->delete('userType');
			
			$lastInsertedId = $this->User->getLastInsertID();
			$this->request->data['User']['id'] = $lastInsertedId;
			$this->request->data['User']['role'] = UserRoleConst::RoleUser;
			$this->request->data['User']['user_type'] = $data['user_type'];
			$this->request->data['User']['email'] = $data['email'];
			$this->request->data['User']['password'] = $this->Auth->password( $responseProfileData->firstName.$responseProfileData->lastName );
			$this->Auth->login($this->request->data['User']);
			
			// Registration email
			$this->loadModel('Emailtemplate');
			$email_content = $this->Emailtemplate->find('first', array('fields' => array('from_name', 'from_email', 'reply_to', 'subject', 'content'), 'conditions' => array('email_for' => 'Social_registration')));
			$content = $email_content['Emailtemplate']['content'];
			$content = str_replace(array('{USERNAME}' ,'{EMAIL}','{PASSWORD}'), array(ucfirst($data['first_name']), $data['email'], $responseProfileData->firstName.$responseProfileData->lastName), $content);
			
			$email = new CakeEmail('smtp');
			$email->from(array (ADMIN_EMAIL => APPLICATION_NAME))
			->to($data['email'])
			->emailFormat('html')
			->subject($email_content['Emailtemplate']['subject'])
			->send($content);
		}
		
		if ( $this->Auth->login() )
		{ 
			$this->redirect( array( 'controller' => 'users', 'action' => 'index' ) );
		}
	}


/**
 * Method Name : forgot_password	 
 * Author Name : Santosh Gupta
 * Date : 19 August 2013
 * Description : Forgot password function
 */ 
	public function forgot_password()
	{
		if ( $this->request->isPost() )
		{
			if (isset($this->request->data['User']) && (count($this->request->data['User']) > 0))
			{
				$data = $this->request->data;
				$exists_user = $this->User->find('first',array('conditions'=>array('status'=>1,'email'=>$data['User']['email'])));
				
				if ($exists_user)
				{					
					//$post_data['User']['verification_code'] = String::uuid() ;
					$updateuser = array ();
					$updateuser['User']['id'] = $exists_user['User']['id'];
					$updateuser['User']['verification_code'] = String::uuid() ;
					
					if ( $this->User->save($updateuser) )
					{
						$post_data['User']['verification_code'] = $updateuser['User']['verification_code'] ;
						$post_data['User']['first_name'] = $exists_user['User']['first_name'] ;
						$post_data['User']['last_name'] = $exists_user['User']['last_name'] ;						
						
						/* Send email to user */
						$this->loadModel('Emailtemplate');
						$email_content = $this->Emailtemplate->find('first', array('fields' => array('from_name', 'from_email', 'reply_to', 'subject', 'content'), 'conditions' => array('email_for' => 'Forgot_password')));
						$content = $email_content['Emailtemplate']['content'];
						$reset_url = Router::url(array('controller' => 'users', 'action' => 'update_password', $updateuser['User']['verification_code']), true);
						$reset_url = "<a href='$reset_url'>$reset_url</a>";
						$content = str_replace(array('{USERNAME}', '{DOMAIN}', '{PWD_RESET_LINK}'), array(ucfirst($post_data['User']['first_name']),'crossfit.com', $reset_url), $content);
						$email_content['Emailtemplate']['content'] = $content;
						//~ pr($email_content);
						//~ die;
						$email = new CakeEmail('smtp');
						$email->from(array (ADMIN_EMAIL => APPLICATION_NAME))
						->to($this->request->data['User']['email'])
						->emailFormat('html')
						->subject($email_content['Emailtemplate']['subject'])
						->send($content);
						
						$this->Session->setFlash(__('Please check your email to update your password.'),'default',array(),'success');
						$this->redirect(array('controller' => 'users','action' => 'forgot_password'));
						//$this->render('email');
					}
					else
					{
						$this->Session->setFlash(__('Email not sent.'),'default',array(),'success');
						$this->redirect(array('controller' => 'users','action' => 'forgot_password'));
					}
				}
				else
				{
					$this->Session->setFlash(__('Email address does not exist.'),'default',array(),'error');
					$this->redirect(array('controller' => 'users','action' => 'forgot_password'));
				}
			}
			else
			{
				$this->Session->setFlash(__('Email address does not exist.'),'default',array(),'error');
				$this->redirect(array('controller' => 'users','action' => 'forgot_password'));
			}
		}		
	}
 
/**
 * Method Name : update_password	 
 * Author Name : Santosh Gupta
 * Inputs :  $token
 * Date : 19 August 2013
 * Description : Update password
 */ 
	public function update_password($token=null)
	{
		if ( $this->request->is('post') )
		{
			$this->set('token',$token);
			$user = $this->User->find('first',array('conditions'=>array('verification_code'=>$token)));
			
			if ($user)
			{
				if (strlen(trim($this->request->data['User']['password'])) < 4)
				{
					$this->Session->setFlash(__('Password length at least should be 4 chars.'),'default',array(),'error');
					$this->redirect(array('controller' => 'users','action' => 'update_password',$token));
				}
				else
				{
					if (trim($this->request->data['User']['password']) == trim($this->request->data['User']['confirm_password']))
					{
						$updateuser = array ();
						$updateuser['User']['id'] = $user['User']['id'];
						$updateuser['User']['verification_code'] = null;	
						
						if ( $this->User->save($updateuser) )
						{
							$this->User->id = $user['User']['id'];
							$this->User->saveField('password',$this->Auth->password($this->request->data['User']['password']));
							
							//Delete cookie
							$this->Cookie->delete('remember_me');
							
							$this->Session->setFlash(__('Password updated successfully. Please login.'),'default',array(),'success');
							$this->redirect(array('controller' => 'users','action' => 'login'));
						}
						else
						{
							$this->Session->setFlash(__('Password could not update.'),'default',array(),'error');
							$this->redirect(array('controller' => 'users','action' => 'update_password',$token));
						}
					}
					else
					{
						$this->Session->setFlash(__('Password and confirm password does not match.'),'default',array(),'error');
						$this->redirect(array('controller' => 'users','action' => 'update_password',$token));
					}
				}
			}else{
				
				$this->Session->setFlash(__('Invalid token. Please try again.'),'default',array(),'error');
				$this->set('token',$token);	
			}
		}
		else
		{		
			if ($token)
			{
				$this->set('token',$token);
			}
			else
			{
				$this->Session->setFlash(__('You are not authorized to access this page.'),'default',array(),'error');
				$this->redirect(array('controller' => 'users','action' => 'login'));
			}			
		}
	}
	
	
	/**
	 * Method Name : update_profile	 
	 * Author Name : Vivek Sharma
	 * Date : 26 May 2014
	 * Description : used for updating user profile description and image from frontend dashboard
	 */
	 public function update_profile()
	 {
		 if($this->request->is('post') && !empty($this->request->data))
		 {				
			$this->User->id = $this->Auth->user('id');
			$this->User->save($this->data);
			
		 }	
		 $this->redirect(array('controller' => 'users', 'action' => 'index'));	
	 }
	 
	 
	 /**
	 * Method Name : profile	 
	 * Author Name : Vivek Sharma
	 * Date : 30 May 2014
	 * Description : display user profile on frontend
	 */
	 public function profile($user_id = null)
	 {
		if ( empty($user_id) )
		{
			$user_id = $this->Auth->user('id');	
		}
		$user = $this->User->find('first',array('conditions' => array('User.id' => $user_id),
												'fields' => array('User.id', 'User.first_name', 'User.last_name', 
																	'User.email', 'User.user_type', 'User.photo', 'User.profile_description',
																	'User.gender', 'User.date_of_birth','User.username')));
												
		if ( !empty($user) )
      	{
			$this->set('user',$user['User']);
			
			
			if ( $user['User']['user_type'] == 'affiliate' )
			{
				$data = $this->get_profile_events_info($user['User']['id']);
				
				$this->loadModel('AffiliateProfile');
				$profile = $this->AffiliateProfile->get_details($user['User']['id']);
				//pr($data); die;			
				
				$this->loadModel('Follower');
				$this->Follower->bindModel(array('belongsTo' => array('User' => array( 'className' => 'User', 'foreignKey' => 'user_id'))));
				$fans = $this->Follower->find('all', array('conditions' => array('Follower.following_id' => $user['User']['id']),
																	'fields' => array('User.id','User.photo','User.first_name', 'User.last_name', 'User.username'),
																	'limit' => 3,
																	'order' => array('Follower.id' => 'desc')));				
													
									
				$this->loadModel('Coach');
				$this->Coach->bindModel(array('belongsTo' => array('User' => array( 'className' => 'User', 'foreignKey' => 'user_id'))));
				$coaches = $this->Coach->find('all', array('conditions' => array('Coach.affiliate_id' => $user['User']['id'], 
																					'Coach.status' => 'Approved')));		
				
				$this->loadModel('Badge');
				$badges = $this->Badge->find('all',array('conditions'=>array('Badge.user_id' => $user['User']['id'])));		
				
				$this->set('fans', $fans);
				$this->set('data', $data);
				$this->set('profile', $profile);
				$this->set('coaches', $coaches);						
				$this->set('badges', $badges);				
				$this->render('affiliate_profile'); 
					
			}
			else if ( $user['User']['user_type'] == 'athlete' )
			{
				
				$this->set_athlete_profile_data($user['User']['id']);	
				$this->render('athlete_profile');
					
			}
			else if ( $user['User']['user_type'] == 'fan' )
			{
				$this->set_fan_profile_data($user['User']['id']);
				$this->render('fan_profile');	
			}
		}
		else
		{
			$this->redirect(array('controller' => 'users', 'action' => 'index'));	
		} 			
	 }
		
		
	 /**
	 * Method Name : set_fan_profile_data	 
	 * Author Name : Vivek Sharma
	 * Date : 28 August 2014
	 * Description : set data for fan profile
	 */
	 public function set_fan_profile_data($user_id)
	 {
	 	App::import('Controller', 'Followers');
	 	$Follower = new FollowersController;
		$Follower->constructClasses();
		
		$data = $Follower->set_followers_data($user_id);
		
		$this->loadModel('Follower');
		$this->loadModel('Event');
		$this->loadModel('EventRegistration');
		
		
		//$this->Follower->unbindModel(array('belongsTo' => array('User')));
				
		$this->Follower->recursive = 3;
		
		$this->EventRegistration->bindModel(array('belongsTo' => array('User' => array('className' => 'User', 
																			   'foreignKey' => 'user_id',
																			   'fields' => array('id','first_name','last_name','username','photo')
																			   )
															)
										)
								 );
		
		$this->Event->bindModel(array('hasMany' => array('EventRegistration' => array('className' => 'EventRegistration',
																					  'foreignKey' => 'event_id',
																					  'conditions' => array('payment_status' => 'Paid'),
																					  'fields' => array('id','user_id','final_score','first_name','last_name')
																				)
														)));
																				
		$this->Follower->bindModel(array('belongsTo' => array('Event' => array('className' => 'Event', 
																			   'foreignKey' => 'event_id',
																			   'fields' => array('id','title','picture')
																			   )
															)
										)
								 );
		$events = $this->Follower->find('all', array('conditions' => array('Follower.user_id' => $user_id, 'Follower.event_id IS NOT NULL')));
		
		$this->loadModel('FanProfile');
		$profile = $this->FanProfile->get_details($user_id);
		
		$this->loadModel('Badge');
		$badges = $this->Badge->find('all', array('conditions' => array('Badge.user_id' => $user_id)));
		$this->set('badges', $badges);
		
		$this->set('profile', $profile);
		$this->set('data', $data);
		$this->set('events', $events);
		
		return;
	 }	 
	 
	 
	 
	 /**
	 * Method Name : get_profile	 
	 * Author Name : Vivek Sharma
	 * Date : 27 June 2014
	 * Description : get user profile from slug
	 */
	 public function get_profile()
	 {
	 	$username = $this->params['slug'];
		if( !empty($username) )
		{
			
			$user = $this->User->find('first', array('conditions' => array('User.username' => strtolower($username)),
													'fields' => array('User.id', 'User.first_name', 'User.last_name', 
																	'User.email', 'User.user_type', 'User.photo', 'User.profile_description',
																	'User.gender', 'User.date_of_birth', 'User.username')));
			if ( !empty($user) )
			{
				
					/**Check follower or not if logged in*/
					if ( $this->Session->check('Auth.User.id') )
					{
						$this->loadModel('Follower');
						$is_follow = $this->Follower->find('first', array('conditions' => array('Follower.user_id' => $this->Auth->user('id'),
																							'Follower.following_id' => $user['User']['id']),
																		'fields' => array('Follower.id')));
						
						if ( !empty($is_follow) )
						{
							$this->set('is_follow', '1');
						}
					}
					
					$this->set('user',$user['User']);
					
					if ( $user['User']['user_type'] == 'affiliate' )
					{
						$data = $this->get_profile_events_info($user['User']['id']);
						
						$this->loadModel('AffiliateProfile');
						$profile = $this->AffiliateProfile->get_details($user['User']['id']);	
						
						$this->loadModel('Follower');
						$this->Follower->bindModel(array('belongsTo' => array('User' => array( 'className' => 'User', 'foreignKey' => 'user_id'))));
						$fans = $this->Follower->find('all', array('conditions' => array('Follower.following_id' => $user['User']['id']),
																	'fields' => array('User.id','User.photo','User.first_name', 'User.last_name', 'User.username'),
																	'limit' => 3,
																	'order' => array('Follower.id' => 'desc')));				
						
											
						$this->loadModel('Coach');
						$this->Coach->bindModel(array('belongsTo' => array('User' => array( 'className' => 'User', 'foreignKey' => 'user_id'))));
						$coaches = $this->Coach->find('all', array('conditions' => array('Coach.affiliate_id' => $user['User']['id'], 
																							'Coach.status' => 'Approved')));		
						
						$this->loadModel('Badge');
						$badges = $this->Badge->find('all',array('conditions'=>array('Badge.user_id' => $user['User']['id'])));		
						
						$this->set('fans', $fans);
						$this->set('data', $data);
						$this->set('profile', $profile);
						$this->set('coaches', $coaches);						
						$this->set('badges', $badges);				
						$this->render('affiliate_profile'); 
							
					}
					else if ( $user['User']['user_type'] == 'athlete' )
					{
						$this->loadModel('EventRegistration');
						$this->EventRegistration->bindModel(array('belongsTo' => array('Event' => array('className' => 'Event', 'ForeignKey' => 'event_id'))));
						$events = $this->EventRegistration->find('all', array('conditions' => array('EventRegistration.user_id' => $user['User']['id']),
																				'order' => array('EventRegistration.id' => 'desc')));
						
						
						$this->set_athlete_profile_data($user['User']['id']);
						
						$this->set('events', $events);				
						$this->render('athlete_profile');
							
					}
					else if ( $user['User']['user_type'] == 'fan' )
					{
						$this->set_fan_profile_data($user['User']['id']);
						$this->render('fan_profile');	
					}
				
			} else {
				$this->redirect('/');
			}
		}else{
			$this->redirect('/');
		}
	 }
	 
	 
	 /**
	 * Method Name : set_athlete_profile_data	 
	 * Author Name : Vivek Sharma
	 * Date : 24 July 2014
	 * Description : get details of athlete to show on profile
	 */
	 public function set_athlete_profile_data($user_id)
	 {
	 	
		$this->loadModel('EventRegistration');
		$this->EventRegistration->bindModel(array('belongsTo' => array('Event' => array('className' => 'Event', 'ForeignKey' => 'event_id'))));
		$events = $this->EventRegistration->find('all', array('conditions' => array('EventRegistration.user_id' => $user_id),
																		'order' => array('EventRegistration.id' => 'desc')));
		
		
		$this->set('events', $events);
		
	 	$this->loadModel('Challenge');	
	 	$this->loadModel('ChallengePeople');
		$this->loadModel('ChallengeWod');
		
		$this->ChallengePeople->recursive = 3;
		
		$this->ChallengeWod->bindModel(array('belongsTo' => array('Wod' => array('className' => 'Wod', 'foreignKey' => 'wod_id', 'fields' => array('Wod.title', 'Wod.description', 'Wod.details')))));
		$this->Challenge->bindModel(array('hasMany' => array('ChallengePeople' => array('className' => 'ChallengePeople', 'foreignKey' => 'challenge_id','order' => array('ChallengePeople.score' => 'desc'))),
											'hasOne' => array('ChallengeWod' => array('className' => 'ChallengeWod', 'foreignKey' => 'challenge_id'))));
		$this->ChallengePeople->bindModel(array('belongsTo' => array(
																'Challenge' => array('className' => 'Challenge', 'foreignKey' => 'challenge_id'),
																'User' => array('className' => 'User', 
																				'foreignKey' => 'user_id', 
																				'fields' => array('User.first_name', 'User.last_name','User.username','User.id'))	
															)));
		$challenges = $this->ChallengePeople->find('all', array('conditions' => array('ChallengePeople.user_id' => $user_id)));
		
		
		$this->loadModel('Badge');
		$badges = $this->Badge->find('all',array('conditions'=>array('Badge.user_id' => $user_id)));	
		
		$this->loadModel('AthleteProfile');
		$profile = $this->AthleteProfile->get_details($user_id);
		$this->set('profile', $profile);					
						
		$this->set('badges', $badges);	
		
		$this->set('leaderboard', $challenges);
		return;
	 }
	 
	 /**
	 * Method Name : get_profile_events_info	 
	 * Author Name : Vivek Sharma
	 * Date : 30 June 2014
	 * Description : get upcoming event details
	 */
	 public function get_profile_events_info($user_id)
	 {
	 	$this->loadModel('Event');
						$events = $this->Event->find('all', array('conditions' => array('Event.user_id' => $user_id),
																	'order' => array('Event.start_date' => 'asc')));
				
		$data = array();	
									
		if ( !empty($events) )
		{
			$upcoming = $all_ids = array();
			
			foreach($events as $ev)
			{
				$all_ids[] = $ev['Event']['id'];						
				$event_time = strtotime($ev['Event']['start_date'].' '.$ev['Event']['start_time']);	
				
				if ( $event_time > strtotime(date('Y-m-d H:i:s')) )						
				{														
					$upcoming[] = $ev;	 //store all upcoming events in array
				}
			}

			$data['upcoming_events'] =  $upcoming;			
								
			// fetch all athletes registered under all events created by user
			$this->loadModel('EventRegistration');
			
			$this->EventRegistration->bindModel(array('belongsTo' => array('User' => array('className' => 'User', 'ForeignKey' => 'user_id',
																							'fields' => array('User.id', 'User.first_name', 'User.last_name', 
																												'User.email', 'User.photo')))));
								
			$operator = '';																									
			if(count($all_ids) > 1)
				$operator = 'IN';
			
			$all_athletes = $this->EventRegistration->find('all', array('conditions' => array('EventRegistration.event_id '.$operator.' ' => $all_ids)));
			
			$all_ath_ids = $athletes = array();
			
			if ( !empty($all_athletes) )
			{
				$i = 0;
				foreach($all_athletes as $ath)
				{
					if ( !in_array($ath['User']['id'], $all_ath_ids) && !empty($ath['User']['photo']) )
					{
						$athletes[] = $ath;
						$all_ath_ids[] = $ath['User']['id'];
						$i++;	
					}
					if ( $i=='3' )
						break;								
				}						
			}
			
			$data['athletes'] = $athletes;												
		}		
		return $data;	
	 }	
	
	/**
	 * Method Name : admin_change_password	 
	 * Author Name : Vivek Sharma
	 * Date : 12 Jun 2015
	 * Description : Change Password
	 */
	 public function admin_change_password() {
	 	
		if(!empty($this->request->data)) {
			
			$data = $this->data;
			$user = $this->User->findById($this->Auth->user('id'));
			
			if(!empty($user)) {
				
				$old_pass = $this->Auth->password($data['User']['old_password']);
				
				if(trim($user['User']['password']) == $old_pass) {
					
					$password = $this->Auth->password($data['User']['new_password']);
					$this->User->id = $user['User']['id'];
					if($this->User->save(array('password' => $password, 'modified' => date('Y-m-d H:i:s')))) {
						
						$this->Session->setFlash(__('Password updated successfully'),'default',array(),'success');
						$this->redirect($this->referer());
						
					}else{
						$this->Session->setFlash(__('There is some issue. Please try again later.'),'default',array(),'error');
					}
					
				}else{
					$this->Session->setFlash(__('Old password does not match'),'default',array(),'error');
				}
				
			} else {
				$this->Session->setFlash(__('User not found'),'default',array(),'error');	
			}			
		}
		
	 }


	/**
	 * Method Name : admin_forgot_password	 
	 * Author Name : Vivek Sharma
	 * Date : 12 Jun 2015
	 * Description : forgot Password
	 */
	public function admin_forgot_password() {
		
		if ( $this->request->isPost() )
		{
			if (isset($this->request->data['User']) && (count($this->request->data['User']) > 0))
			{
				$data = $this->request->data;
				$exists_user = $this->User->find('first',array('conditions'=>array('status'=>1,'email'=>$data['User']['email'])));
				
				if ($exists_user)
				{					
					//$post_data['User']['verification_code'] = String::uuid() ;
					$updateuser = array ();
					$updateuser['User']['id'] = $exists_user['User']['id'];
					$updateuser['User']['verification_code'] = String::uuid() ;
					
					if ( $this->User->save($updateuser) )
					{
						$post_data['User']['verification_code'] = $updateuser['User']['verification_code'] ;
						$post_data['User']['first_name'] = $exists_user['User']['first_name'] ;
						$post_data['User']['last_name'] = $exists_user['User']['last_name'] ;						
						
						/* Send email to user */
						$this->loadModel('Emailtemplate');
						$email_content = $this->Emailtemplate->find('first', array('fields' => array('from_name', 'from_email', 'reply_to', 'subject', 'content'), 'conditions' => array('email_for' => 'Forgot_password')));
						$content = $email_content['Emailtemplate']['content'];
						$reset_url = Router::url(array('controller' => 'users', 'action' => 'update_password', $updateuser['User']['verification_code']), true);
						$reset_url = "<a href='$reset_url'>$reset_url</a>";
						$content = str_replace(array('{USERNAME}', '{DOMAIN}', '{PWD_RESET_LINK}'), array(ucfirst($post_data['User']['first_name']),'bestofpedigree.com', $reset_url), $content);
						$email_content['Emailtemplate']['content'] = $content;
						//~ pr($email_content);
						//~ die;
						
						
						$email = new CakeEmail('smtp');
						$email->from(array (ADMIN_EMAIL => APPLICATION_NAME))
						->to($this->request->data['User']['email'])
						->emailFormat('html')
						->subject($email_content['Emailtemplate']['subject'])
						->send($content);
						
						$this->Session->setFlash(__('Please check your email to update your password.'),'default',array(),'success');
						$this->redirect(array('controller' => 'users','action' => 'forgot_password','admin' => true));
						//$this->render('email');
					}
					else
					{
						$this->Session->setFlash(__('Email not sent.'),'default',array(),'success');
						$this->redirect(array('controller' => 'users','action' => 'forgot_password','admin' => true));
					}
				}
				else
				{
					$this->Session->setFlash(__('Email address does not exist.'),'default',array(),'error');
					$this->redirect(array('controller' => 'users','action' => 'forgot_password','admin' => true));
				}
			}
			else
			{
				$this->Session->setFlash(__('Email address does not exist.'),'default',array(),'error');
				$this->redirect(array('controller' => 'users','action' => 'forgot_password','admin' => true));
			}
		}
		
	}


	/**
 * Method Name : admin_update_password	 
 * Author Name : Vivek Sharma
 * Inputs :  $token
 * Date : 12 Jun 2015
 * Description : Update password
 */ 
	public function admin_update_password($token=null)
	{
		if ( $this->request->is('post') )
		{
			$this->set('token',$token);
			$user = $this->User->find('first',array('conditions'=>array('verification_code'=>$token)));
			
			if ($user)
			{
				if (strlen(trim($this->request->data['User']['password'])) < 6)
				{
					$this->Session->setFlash(__('Password length at least should be 6 chars.'),'default',array(),'error');
					$this->redirect(array('controller' => 'users','action' => 'update_password',$token, 'admin' => true));
				}
				else
				{
					if (trim($this->request->data['User']['password']) == trim($this->request->data['User']['confirm_password']))
					{
						$updateuser = array ();
						$updateuser['User']['id'] = $user['User']['id'];
						$updateuser['User']['verification_code'] = null;	
						
						if ( $this->User->save($updateuser) )
						{
							$this->User->id = $user['User']['id'];
							$this->User->saveField('password',$this->Auth->password($this->request->data['User']['password']));
							
							//Delete cookie
							$this->Cookie->delete('remember_me');
							
							$this->Session->setFlash(__('Password updated successfully. Please login.'),'default',array(),'success');
							$this->redirect(array('controller' => 'users','action' => 'login','admin' => true));
						}
						else
						{
							$this->Session->setFlash(__('Password could not update.'),'default',array(),'error');
							$this->redirect(array('controller' => 'users','action' => 'update_password',$token,'admin' => true));
						}
					}
					else
					{
						$this->Session->setFlash(__('Password and confirm password does not match.'),'default',array(),'error');
						$this->redirect(array('controller' => 'users','action' => 'update_password',$token ,'admin' => true));
					}
				}
			}else{
				
				$this->Session->setFlash(__('Invalid token. Please try again.'),'default',array(),'error');
				$this->set('token',$token);	
			}
		}
		else
		{		
			if ($token)
			{
				$this->set('token',$token);
			}
			else
			{
				$this->Session->setFlash(__('You are not authorized to access this page.'),'default',array(),'error');
				$this->redirect(array('controller' => 'users','action' => 'login','admin' => true));
			}			
		}
	}
	

	
}
