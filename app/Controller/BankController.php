<?php

App::uses('Controller', 'Controller');

/**
 * Bank Controller
 *
 * Purpose : Manage Banks Transaction
 * @project Best of Pedigree
 * @version Cake Php 2.3.8
 * @author : Gaurav Singh
 */
class BankController extends AppController {

    public $layout = 'front';

    function beforeFilter() {
        parent::beforeFilter();
    }
    /**
     * Method Name :Save Transaction
     * Author Name : Gaurav
     * Description : Bank transaction save page
     */
    public function save_transaction() {
	    // Has any form data been POSTed?
	    if ($this->request->is('post')) {
	    
	        // If the form data can be validated and saved...
	        $transaction = $this->request->data;
	        $this->loadModel('User');
	        // Load current logged in user and debit amount from credit or fund
	         $user = $this->User->find('first', array(
		        'conditions' => array('User.id' => $this->Auth->user('id'))
		    ));
		   // echo "<pre>";print_r($user);echo "</pre>";
		    if ($transaction['type'] == 'fund') {
		    	$user['User']['funds'] = $user['User']['funds'] - $transaction['amount'];
		    } else {
		    	$user['User']['credits'] = $user['User']['credits'] - $transaction['amount'];
		    }
		  //  echo "<pre>";print_r($user);echo "</pre>";die;
		    $this->User->save($user);
		    $this->Session->write('Auth.User.funds', $user['User']['funds']);
		    $this->Session->write('Auth.User.credits', $user['User']['credits']);
		// Load user to whom amount is transfered from credit or fund
	        $user = $this->User->find('first', array(
		        'conditions' => array('User.id' => $transaction['to_user_id'])
		    ));
		    if ($transaction['type'] == 'fund') {
		    	$user['User']['funds'] += $transaction['amount'];
		    } else {
		    	$user['User']['credits'] += $transaction['amount'];
		    }
		    $this->User->save($user);

	        // Add transaction user name and other details
	        //$transaction['user_name'] = $user['User']['first_name'] . ' ' . $user['User']['last_name']; //save user id for future
	        $transaction['transaction_id'] = time();
	        $transaction['from_user_id'] = $this->Auth->user('id');
	        $this->loadModel('Transaction');
	       
	        if ($this->Transaction->save($transaction)) {
	            return $this->redirect('/bank');
	        }
	    }
return $this->redirect('/bank');
    }
    /**
     * Method Name :index
     * Author Name : Gaurav
     * Description : Bank index page
     */
    public function index() {
	// Load transactions
	$this->loadModel('Transaction');
	$this->loadModel('User');
	
	
	$allTransactions = $this->Transaction->find("all", array(
        "joins" => array(
            array(
                "table" => "users",
                "alias" => "User",
                "type" => "LEFT",
                "conditions" => array(
                    "User.id = Transaction.to_user_id"
                )
            )
        ),
      'fields' => array('Transaction.type', 'Transaction.transaction_id', 'Transaction.created', 'Transaction.description', 'Transaction.amount', 'User.first_name','User.last_name'),
        'conditions' => array(
        'OR' => array(
            'Transaction.to_user_id' => $this->Auth->user('id'),
            'Transaction.from_user_id' => $this->Auth->user('id')
            )
        )
    ));	
//$allTransactions = $this->Transaction->User->find('all', array('conditions' => array('Transaction.user_id' => $this->Auth->user('id'))));
	
//echo "<pre>";print_r($allTransactions);echo "</pre>";die;
	// Load all users withous current user
	$this->loadModel('User');
	$allUsers = $this->User->find('all', array(
	    'conditions' => array(
	        'NOT' => array(
	            'User.id' => $this->Auth->user('id')
	        )
	    )
	));

	// Other works
        $this->loadModel('Breed');
        $this->set('allBreeds', $this->Breed->find('all'));

        if (!empty($this->request->data)) {

            $breed_id = $this->request->data['breed'];

            $this->loadModel('GameBreed');


            if (empty($breed_id)) {

                $this->GameBreed->recursive = '2';
                $this->Breed->bindModel(array('hasMany' => array('BreedImages')));

                $data = $this->GameBreed->find('all', array(
                    'conditions' => array(
                        'GameBreed.for_adoption !=' => 0
                    //'GameBreed.user_id !=' => $this->Auth->user('id') 		
                    )
                ));
            } else {

                $this->GameBreed->recursive = '2';
                $this->Breed->bindModel(array('hasMany' => array('BreedImages')));

                $data = $this->GameBreed->find('all', array(
                    'conditions' => array(
                        //'GameBreed.user_id !=' => $this->Auth->user('id'),
                        'GameBreed.for_adoption !=' => 0,
                        'GameBreed.breed_id' => $breed_id
                    )
                ));
            }
            echo "<pre>";print_r($data);echo "</pre>";
            $this->set('data', $data);
        }
        $this->set('allTransactions', $allTransactions);
         $this->set('allUsers', $allUsers);
    }
}
