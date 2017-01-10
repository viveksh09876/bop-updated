<?php

App::uses('Controller', 'Controller');

/**
 * Adoption Controller
 *
 * Purpose : Manage Adoption
 * @project Best of Pedigree
 * @version Cake Php 2.3.8
 * @author : Vivek Sharma
 */
class AdoptionController extends AppController {

    public $layout = 'front';

    function beforeFilter() {
        parent::beforeFilter();
    }

    /**
     * Method Name :index
     * Author Name : Gaurav
     * Description : Adoption index page
     */
    public function index() {
        $this->loadModel('Breed');
        $this->set('allBreeds', $this->Breed->find('all'));
$this->loadModel("ManageBanner");
$this->set("banners",$this->ManageBanner->find("first"));
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
            $this->set('data', $data);
        }
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
	            return $this->redirect('/adoption/bank');
	        }
	    }
return $this->redirect('/adoption/bank');
    }
    /**
     * Method Name :index
     * Author Name : Gaurav
     * Description : Adoption index page
     */
    public function bank() {
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

    public function place_for_adoption() {

        if (!empty($this->data)) {

            $this->loadModel('GameBreed');
            $this->GameBreed->id = $this->data['game_breed_id'];
            $this->GameBreed->save(array(
                'for_adoption' => 1,
                'adoption_price' => floatval($this->data['adoption_price']),
                'modified' => date('Y-m-d H:i:s')
            ));

            $this->Session->setFlash(__('Pet successfully placed for adoption.'), 'default', array('class' => 'success'));
            $this->redirect($this->referer());
        }
    }

    public function take_down_adoption() {

        if (!empty($this->data)) {

            $this->loadModel('GameBreed');
            $this->GameBreed->id = $this->data['game_breed_id'];
            $this->GameBreed->save(array(
                'for_adoption' => 0,
                'modified' => date('Y-m-d H:i:s')
            ));

            $this->Session->setFlash(__('Pet successfully taken down from adoption.'), 'default', array('class' => 'success'));
            $this->redirect($this->referer());
        }
    }

    public function sell_to_pedigree() {

        if (!empty($this->data)) {


            $this->loadModel('GameBreed');
            $this->loadModel('User');

            $user = $this->User->findById($this->Auth->user('id'));

            $new_funds = $user['User']['funds'] + 30;

            $this->User->id = $this->Auth->user('id');
            $this->User->save(array(
                'funds' => $new_funds,
                'modified' => date('Y-m-d H:i:s')
            ));

            $this->GameBreed->id = $this->data['game_breed_id'];
            $this->GameBreed->save(array(
                'user_id' => 0,
                'for_adoption' => 2,
                'adoption_price' => '40.00',
                'modified' => date('Y-m-d H:i:s')
            ));

            $this->Session->setFlash(__('Pet successfully sold to best of pedigree shop.'), 'default', array('class' => 'success'));
            $this->redirect('/kennels');
        }
    }

    public function adopt_pet($game_breed_id = null) {

        if (!empty($game_breed_id)) {

            $this->loadModel('GameBreed');
            $this->loadModel('User');

            $user_id = $this->Auth->user('id');
            $breed = $this->GameBreed->findById($game_breed_id);

            if ($breed['GameBreed']['for_adoption'] != 0) {

                $user = $this->User->findById($this->Auth->user('id'));

                if ($user['User']['funds'] >= $breed['GameBreed']['adoption_price']) {

                    $rem_funds = $user['User']['funds'] - $breed['GameBreed']['adoption_price'];
                    $this->User->id = $user['User']['id'];
                    $this->User->save(array('funds' => $rem_funds, 'modified' => date('Y-m-d H:i:S')));

                    $this->GameBreed->id = $breed['GameBreed']['id'];
                    $this->GameBreed->save(array(
                        'for_adoption' => 0,
                        'user_id' => $user['User']['id'],
                        'modified' => date('Y-m-d H:i:s')
                    ));


                    $this->Session->setFlash(__('Congratulations! ' . $breed['GameBreed']['name'] . ' is successfully adopted by you.'), 'default', array('class' => 'success'));
                    $this->redirect('/kennels');
                } else {

                    $this->Session->setFlash(__('Not enough funds for adoption.'), 'default', array('class' => 'error'));
                    $this->redirect($this->referer());
                }
            } else {

                $this->Session->setFlash(__('Pet not available for adoption now.'), 'default', array('class' => 'error'));
                $this->redirect($this->referer());
            }
        }
    }

}
