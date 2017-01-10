<?php

App::uses('Controller', 'Controller');

/**
 * Messages Controller
 *
 * Purpose : Manage messages
 * @project Crossfit
 * @since 30 June 2014
 * @version Cake Php 2.3.8
 * @author : Vivek Sharma
 */
class MessagesController extends AppController {

    public $name = 'Messages';
    public $components = array('RequestHandler');
    public $helpers = array('Html', 'Form', 'Js');
    public $uses = array('Message', 'User');

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('display_message_popup', 'send_message');
    }

    /**
     * Method Name : display_message_popup
     * Author Name : Vivek Sharma
     * Date : 30 June 2014
     * Description : display message popup
     */
    public function display_message_popup($username = null) {
        $this->layout = 'ajax';

        $user = $this->User->find('first', array('conditions' => array('User.username' => $username),
            'fields' => array('User.id', 'User.email')));
        $this->set('user', $user);
        $this->render('message_popup');
    }

    /**
     * Method Name : send_message
     * Author Name : Vivek Sharma
     * Date : 30 June 2014
     * Description : send message
     */
    public function send_message() {

        $this->layout = 'ajax';

        if (!empty($this->request->data)) {
            $data = $this->data;
            $to_user = $this->User->find('first', array('conditions' => array('User.id' => $data['Message']['to_id']),
                'fields' => array('User.email', 'User.first_name')));

            $data['Message']['to_email'] = $to_user['User']['email'];

            if (!empty($data['Message']['from_id'])) {
                $user = $this->User->find('first', array('conditions' => array('User.id' => $data['Message']['from_id']),
                    'fields' => array('User.email')));
                $from_email = $data['Message']['from_email'] = $user['User']['email'];
            } else {
                $from_email = $data['Message']['from_email'];
            }

            if (!isset($data['Message']['from_first_name'])) {
                $data['Message']['from_first_name'] = $this->Session->read('Auth.User.first_name');
            }

            if (!isset($data['Message']['from_last_name'])) {
                $data['Message']['from_last_name'] = $this->Session->read('Auth.User.last_name');
            }

            $data['Message']['ip_address'] = $this->request->clientIp();
            $data['Message']['created'] = date('Y-m-d H:i:s');

            $this->Message->create();
            if ($message = $this->Message->save($data)) {
                /* Send email to user */
                $this->loadModel('Emailtemplate');
                $email_content = $this->Emailtemplate->find('first', array('fields' => array('from_name', 'from_email', 'reply_to', 'subject', 'content'), 'conditions' => array('email_for' => 'Message')));
                $content = $email_content['Emailtemplate']['content'];

                $content = str_replace(array('{USERNAME}', '{FROM}', '{SUBJECT}', '{CONTENT}'), array(ucfirst($to_user['User']['first_name']),
                    $data['Message']['from_first_name'] . ' ' . $data['Message']['from_last_name'],
                    $data['Message']['subject'],
                    nl2br($data['Message']['message']
                    )
                        ), $content);
                $email_content['Emailtemplate']['content'] = $content;

                $email = new CakeEmail('smtp');
                $email->from(array(ADMIN_EMAIL => APPLICATION_NAME))
                        ->to($to_user['User']['email'])
                        ->emailFormat('html')
                        ->subject($email_content['Emailtemplate']['subject'])
                        ->send($content);

                echo 'success';
            } else {
                echo 'error';
            }
            die;
        }

        $this->render('message_popup');
    }

    /**
     * Method Name : reply_popup
     * Author Name : Vivek Sharma
     * Date : 1 July 2014
     * Description : display reply message popup
     */
    public function reply_popup($message_id) {
        $this->layout = 'ajax';

        $this->Message->bindModel(array(
            'belongsTo' => array(
                'User' => array(
                    'className' => 'User',
                    'foreignKey' => 'from_id'
                )
            )
        ));
        $message = $this->Message->find('first', array('conditions' => array('Message.id' => $message_id)));

        $this->set('message', $message);
        $this->render('reply_popup');
    }

    /**
     * Method Name : send_reply
     * Author Name : Vivek Sharma
     * Date : 1 July 2014
     * Description : send reply to message
     */
    public function send_reply() {
        if (!empty($this->data)) {
            $data = $this->data;
            $data['Message']['created'] = date('Y-m-d H:i:s');
            $data['Message']['from_first_name'] = $this->Auth->user('first_name');
            $data['Message']['from_last_name'] = $this->Auth->user('last_name');
            $data['Message']['from_email'] = $this->Auth->user('email');
            $data['Message']['ip_address'] = $this->request->clientIp();

            $message = $this->Message->findById($data['Message']['message_id']);
            $to_user = $this->User->find('first', array('conditions' => array('User.email' => $message['Message']['from_email']),
                'fields' => array('User.email', 'User.id')));

            $data['Message']['to_email'] = $message['Message']['from_email'];
            if (!empty($to_user)) {
                $data['Message']['to_id'] = $to_user['User']['id'];
            }

            $this->Message->create();
            if ($this->Message->save($data)) {
                /* Send email to user */
                $this->loadModel('Emailtemplate');
                $email_content = $this->Emailtemplate->find('first', array('fields' => array('from_name', 'from_email', 'reply_to', 'subject', 'content'), 'conditions' => array('email_for' => 'Message')));
                $content = $email_content['Emailtemplate']['content'];

                $content = str_replace(array('{USERNAME}', '{FROM}', '{SUBJECT}', '{CONTENT}'), array(ucfirst($message['Message']['from_first_name']),
                    $this->Auth->user('first_name') . ' ' . $this->Auth->user('last_name'),
                    $data['Message']['subject'],
                    nl2br($data['Message']['message'])
                        ), $content);
                $email_content['Emailtemplate']['content'] = $content;

                $email = new CakeEmail('smtp');
                $email->from(array(ADMIN_EMAIL => APPLICATION_NAME))
                        ->to($message['Message']['from_email'])
                        ->emailFormat('html')
                        ->subject($email_content['Emailtemplate']['subject'])
                        ->send($content);
                echo 'success';
            } else {
                echo 'error';
            }
            die;
        }
    }

    /**
     * Method Name : get_athlete_messages
     * Author Name : Vivek Sharma
     * Date : 1 July 2014
     * Description : get athlete messages
     */
    public function get_athlete_messages() {
        $user_id = $this->Auth->user('id');

        $this->Message->bindModel(array('belongsTo' => array(
                'User' => array(
                    'className' => 'User',
                    'foreignKey' => 'from_id',
                    'fields' => array('User.id', 'User.email', 'User.first_name', 'User.username', 'User.last_name', 'User.photo')
                )
        )));
        $messages = $this->Message->find('all', array('conditions' => array('Message.to_id' => $user_id)));

        $data = '';

        if (!empty($messages)) {
            foreach ($messages as $msg) {
                $data.='<li>
									<div class="msg-img"> 
										<a href="' . $this->webroot . '/profile/' . $msg['User']['username'] . '">
											<img src="' . $this->webroot . 'files/' . $msg['User']['id'] . '/thumb_' . $msg['User']['photo'] . '" alt="">
										</a>
									</div>
									<div class="msg-cont" onclick="open_lightbox(\'' . $this->webroot . 'messages/reply_popup/' . $msg['Message']['id'] . '\', \'600px\', \'500px\');">  
										<span class="row"> <a href="javascript://"> ' . $msg['User']['first_name'] . ' ' . $msg['User']['last_name'] . ' - ' . $msg['Message']['subject'] . ' </a></span>
										<p>' . wraptext($msg['Message']['message'], 150) . '</p>
										<b>' . formatDateTime($msg['Message']['created']) . ' </b>
									</div>
								</li>';
            }
        } else {
            $data.='<li style="height: 100px; text-align: center; margin-top:50px;">No messages found</li>';
        }

        echo $data;
        die;
    }

    /**
     * Method Name : post_message
     * Author Name : Vivek Sharma
     * Date : 8 August 2014
     * Description : post fan message to fb/twitter
     */
    public function post_message() {
        $msg = '';
        if (!empty($this->data)) {
            //pr($this->data); die;
            $user = $this->User->findById($this->Auth->user('id'));
            if ($this->data['post_fb'] == '1') {
                $fb_post_url = "https://graph.facebook.com/" . $user['User']['facebook_id'] . "/feed?message=" . urlencode($this->data['content']) . "&access_token=" . $user['User']['fb_access_token'];
                $context = stream_context_create(array('http' => array('method' => 'POST')));
                $fbdata = file_get_contents($fb_post_url, false, $context);

                $response = json_decode($fbdata);

                if (isset($response->id)) {
                    $this->Message->create();
                    $this->Message->save(array('type' => '3', 'from_id' => $this->Auth->user('id'), 'message' => $this->data['content'], 'created' => date('Y-m-d H:i:s'), 'ip_address' => $this->request->clientIp()));

                    $msg = 'success|Status message posted successfully.';
                } else {
                    $msg = 'error|There is some issue. Please try again later.';
                }
            }
            if ($this->data['post_tw']) {
                App::import('Vendor', 'twitterauth/twitteroauth');
                $connection = new TwitterOAuth(LoginAPI::TWITTER_CONSUMER_KEY, LoginAPI::TWITTER_CONSUMER_SECRET, $user['User']['twitter_auth_token'], $user['User']['twitter_auth_secret']);
                $response = $connection->post('statuses/update', array('status' => $this->data['content']));


                if (isset($response->id)) {
                    $this->Message->create();
                    $this->Message->save(array('type' => '3', 'from_id' => $this->Auth->user('id'), 'message' => $this->data['content'], 'created' => date('Y-m-d H:i:s'), 'ip_address' => $this->request->clientIp()));

                    $msg = 'success|Status message posted successfully.';
                } else {
                    $msg = 'error|There is some issue. Please try again later.';
                }
            }
        } else {
            $msg = 'error|Invalid request.';
        }
        echo $msg;
        die;
    }

    /**
     * Method Name : get_fan_messages
     * Author Name : Vivek Sharma
     * Date : 8 August 2014
     * Description : get messages and status updates of fan
     */
    public function get_fan_messages() {
        $this->layout = 'ajax';
        $status = $this->Message->find('all', array('conditions' => array('type' => '3', 'Message.from_id' => $this->Auth->user('id'))));

        $this->Message->primaryKey = 'from_id';
        $this->Message->bindModel(array('belongsTo' => array('User' => array('className' => 'User', 'foreignKey' => 'from_id', 'fields' => array('User.username', 'User.first_name', 'User.last_name', 'User.id')))));
        $messages = $this->Message->find('all', array('conditions' => array('Message.to_id' => $this->Auth->user('id'))));

        $data = array_merge($status, $messages);

        $arr = array();
        if (!empty($data)) {
            foreach ($data as $pst) {
                $arr[$pst['Message']['created']][] = $pst['Message'];
            }
        }
        //pr($arr); die;
        array_multisort($arr, SORT_DESC, $data);
        $this->set('messages', $data);
        $this->render('fan_messages');
    }

    function index_old($user_id = null) {
        $this->layout = "front";
        $users = $this->User->find("all", array("conditions" => array("User.status" => 1), "order" => array("first_name" => "asc")));
        $id = $this->Auth->user('id');
        $this->loadModel('MessagesUser');
        if ($this->request->is("post")) {
            $this->Message->save($this->request->data);
            $last_k = $this->Message->getLastInsertID();
            $save_data = array("message_id" => $last_k, "user_id" => $id, "receiver_id" => $user_id);
            $this->MessagesUser->save($save_data);
            $this->redirect(array("action" => "index", $user_id));
        }

        $this->MessagesUser->bindModel(
                array('belongsTo' => array(
                        'Message' => array(
                            'className' => 'Message',
                            'foreignKey' => 'message_id'
                        ),
                        'sender' => array(
                            'className' => 'User',
                            'foreignKey' => 'user_id'
                        ),
                        'receiver' => array(
                            'className' => 'User',
                            'foreignKey' => 'receiver_id'
                        )
                    )
                )
        );
        //$messages=$this->MessagesUser->query("SELECT * FROM `messages_users` WHERE (user_id =$user_id AND receiver_id = $id) or (user_id = $id AND receiver_id = $user_id) order by id");

        if ($id != '') {
            $this->MessagesUser->updateAll(array("MessagesUser.view" => 1), array("MessagesUser.user_id" => $user_id));
        }

        $messages = $this->MessagesUser->find("all", array("conditions" => array(
                'OR' => array(
                    array('and' => array("MessagesUser.user_id" => $user_id, "MessagesUser.receiver_id" => $id)),
                    array('and' => array("MessagesUser.user_id" => $id, "MessagesUser.receiver_id" => $user_id)),
                )
            ),
            'order' => array("MessagesUser.id" => "asc")
        ));


        $this->set(compact('users', 'messages', 'id'));
    }

    function getmessages() {
        $this->autoRender = false;
        $this->loadModel('MessagesUser');
        $this->MessagesUser->bindModel(
                array('belongsTo' => array(
                        'Message' => array(
                            'className' => 'Message',
                            'foreignKey' => 'message_id'
                        ),
                        'sender' => array(
                            'className' => 'User',
                            'foreignKey' => 'user_id',
                            'fields' => array("first_name", "last_name", "photo")
                        )
                    )
                )
        );
        $messages = $this->MessagesUser->find("all", array("order" => array("Message.id" => "asc")));
        $this->MessagesUser->updateAll(array("view" => 0));
        echo json_encode($messages);
        //pr($messages);
    }

    function getlatestmessages() {
        $this->autoRender = false;
        $this->loadModel('MessagesUser');
        $this->MessagesUser->bindModel(
                array('belongsTo' => array(
                        'Message' => array(
                            'className' => 'Message',
                            'foreignKey' => 'message_id'
                        ),
                        'sender' => array(
                            'className' => 'User',
                            'foreignKey' => 'user_id',
                            'fields' => array("first_name", "last_name", "photo")
                        )
                    )
                )
        );
        $messages = $this->MessagesUser->find("all", array("conditions" => array("MessagesUser.view" => 1), "order" => array("Message.id" => "asc")));
        $this->MessagesUser->updateAll(array("view" => 0));
        echo json_encode($messages);
        //pr($messages);
    }

    function post_message_text() {
        $this->autoRender = false;
           if(!empty( $this->request->data["message"])){
            $id = $this->Auth->user('id');
            $this->loadModel('MessagesUser');
            $save_msg = array("content" => $this->request->data["message"]);
            $this->Message->save($save_msg);
            $last_k = $this->Message->getLastInsertID();
            $save_data = array("message_id" => $last_k, "user_id" => $id, "receiver_id" => 0,"view"=>1);
            $this->MessagesUser->save($save_data);
            echo 1;
           }
        
    }

}
