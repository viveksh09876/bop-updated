<?php

class DiscussionsController extends AppController {

    public $components = array('Paginator');

    public function index() {
        $this->layout = "front";
        $id = $this->Auth->user('id');
        $this->loadModel("UsersDiscussion");
        $this->Paginator->settings = array("conditions" => array("UsersDiscussion.status" => array(0, 1), "received_id" => $id),'limit' => 10,
		"order"=>array("UsersDiscussion.id"=>"desc"));
        $all_messages = $this->Paginator->paginate("UsersDiscussion");

        $this->set('all_messages', $all_messages);
    }

    public function compose() {
        $this->layout = "front";
        $this->loadModel("User");
        $id = $this->Auth->user('id');
        $users = $this->User->find("list", array("conditions" => array("User.id !=" => $id), 'fields' => array("id", "name")));
        $this->set("users", $users);

        if ($this->request->is("post")) {
            $this->Discussion->save($this->request->data);
            $last_id = $this->Discussion->getLastInsertId();

            $this->loadModel("UsersDiscussion");
            $this->UsersDiscussion->save(array(
                "discussion_id" => $last_id,
                "sender_id" => $id,
                "received_id" => $this->request->data["Discussion"]["received_id"],
            ));
            $this->Session->setFlash("Your Message has been sent");
            $this->redirect(array("action"=>"index"));
        }
    }

    function view($id=null,$bk=null) {
        $this->layout = "front";
        $this->loadModel("UsersDiscussion");
        if(!empty($id)){
          $this->UsersDiscussion->updateAll(array("status"=>1),array("UsersDiscussion.id"=>$id));
        }
      
        $message = $this->UsersDiscussion->find("first",array("conditions" => array("UsersDiscussion.id" => $id)));
        $this->set('message', $message);
        $this->set('bk', $bk);
    }

    function sent() {
        $this->layout = "front";
        $id = $this->Auth->user('id');
        $this->loadModel("UsersDiscussion");
        $this->Paginator->settings = array("conditions" => array("UsersDiscussion.status" => array(0, 1), "sender_id" => $id),'limit' => 10,
		"order"=>array("UsersDiscussion.id"=>"desc"));
        $all_messages = $this->Paginator->paginate("UsersDiscussion");

        $this->set('all_messages', $all_messages);
    }

}

?>
