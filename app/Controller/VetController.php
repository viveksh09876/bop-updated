<?php

App::uses('Controller', 'Controller');

/**
 * Tutorials Controller
 *
 * Purpose : Manage Tutorials
 * @project Crossfit
 * @since 25 June, 2014
 * @version Cake Php 2.3.8
 * @author : Gaurav Singh
 */
class VetController extends AppController {

    public $layout = 'front';
    public $uses = array('GameBreed', 'User', 'Breed', 'DogSkill', 'ShowWinner', 'Pet');

    function beforeFilter() {
        parent::beforeFilter();
        //$this->Auth->allow(array('updateHeatColumnCron'));
    }

    /**
     * Method Name :index
     * Author Name : Gaurav Singh
     * Date : 19 March 2016
     * Description : Vet index page
     */
    public function index() {
        $kennelData = $this->User->findById($this->Auth->user('id'), array('vet_banner', 'kennel_desc'));
        $this->set('kennelData', $kennelData);
     	/*$allPets = $this->Pet->find('all');
	 $allBreeds = $already = array();
	 foreach($allPets as $ap) {
		 if(!in_array($ap['Breed']['id'], $already)) {
			$allBreeds[] = $ap;
			$already[] = $ap['Breed']['id'];	
		 }
	 }*/
	 $allGameBreedDogs = $this->GameBreed->find('all', array('conditions' => array('GameBreed.user_id' => $this->Auth->user('id'), 'GameBreed.gender' => 'Dog', 'GameBreed.age >=' => 21)));
	 $this->set('allBreeds', $allGameBreedDogs);
    }

    /**
     * Method Name :save_shot
     * Author Name : Gaurav Singh
     * Date : 19 March 2016
     * Description : Vet index page
     */
    public function save_shot() {

    // Has any form data been POSTed?
    if ($this->request->is('post')) {
        // If the form data can be validated and saved...
        $breed_data = $this->request->data;

        $this->loadModel('User');
        // Load current logged in user and debit amount from credit or fund
         $user = $this->User->find('first', array('conditions' => array('User.id' => $this->Auth->user('id'))));
		if($user['User']['funds'] >= 75) {
		    	$user['User']['funds'] = $user['User']['funds'] - 75;
		    	$this->User->save($user);
	    		$this->Session->write('Auth.User.funds', $user['User']['funds']);
		    	$this->Session->setFlash(__('Congratulations !! Shot successful.'), 'default', array('class' => 'success'));
	    	} else {
	    		$this->Session->setFlash(__('Sorry ! You dont have sufficent funds.'), 'default', array('class' => 'error'));
	    	}
	    	
        $veterinarian['user_id'] = $this->Auth->user('id');
        $veterinarian['shots_checkups'] = $breed_data['breed'];
        $veterinarian['b_locus_testing'] = 0;
        $veterinarian['d_locus_testing'] = 0;
        $veterinarian['e_locus_testing'] = 0;
        $veterinarian['s_locus_testing'] = 0;
        $veterinarian['health_testing'] = 0;
        $veterinarian['spay_neuter'] = 0;
        $veterinarian['groomer'] = 0;
        $this->loadModel('Veterinarian');
       
        if ($this->Veterinarian->save($veterinarian)) {
            return $this->redirect('/vet');
        }
    }
    return $this->redirect('/vet');
    }

    /**
     * Method Name :save_test
     * Author Name : Gaurav Singh
     * Date : 19 March 2016
     * Description : Vet index page
     */
    public function save_test() {
    // Has any form data been POSTed?
    if ($this->request->is('post')) {
        // If the form data can be validated and saved...
        $breed_data = $this->request->data;
        
        $this->loadModel('User');
        // Load current logged in user and debit amount from credit or fund
         $user = $this->User->find('first', array('conditions' => array('User.id' => $this->Auth->user('id'))));
		if($user['User']['funds'] >= 65) {
		    	$user['User']['funds'] = $user['User']['funds'] - 65;
		    	$this->User->save($user);
	    		$this->Session->write('Auth.User.funds', $user['User']['funds']);
		    	$this->Session->setFlash(__('Congratulations !! Test successful.'), 'default', array('class' => 'success'));
	    	} else {
	    		$this->Session->setFlash(__('Sorry ! You dont have sufficent funds.'), 'default', array('class' => 'error'));
	    	}
	    	
        $veterinarian['user_id'] = $this->Auth->user('id');
        $veterinarian['shots_checkups'] = 0;
		$this->loadModel('Veterinarian');
		$flag = false;
		
        switch ($breed_data['test_type']) {
	        case 1:
			
				//condition to check if dog had already gone thru health test
				$already = $this->Veterinarian->find('first', 
													array('conditions' => array(
														'Veterinarian.user_id' => $veterinarian['user_id'],
														'Veterinarian.health_testing' => $breed_data['breed']
												)));
				
				if( !empty($already) ) {					
					$flag = true;
					$this->Session->setFlash(__('Health Test already done for this dog!'), 'default', array('class' => 'error'));
				}else{
					$this->loadModel('GameBreed');
					$this->GameBreed->id = $breed_data['breed'];
					$this->GameBreed->save(array(
											'heart' => mt_rand(1,99),
											'hip' => mt_rand(1,99),
											'eyes' => mt_rand(1,99),
											'thyroid' => mt_rand(1,99)
										));
				}
				
	        	$veterinarian['health_testing'] = $breed_data['breed'];
	        	$veterinarian['b_locus_testing'] = 0;
	        	$veterinarian['d_locus_testing'] = 0;
	        	$veterinarian['e_locus_testing'] = 0;
	        	$veterinarian['s_locus_testing'] = 0;
	        	break;
	        case 2:
				//condition to check if dog had already gone thru b locus test
				$already = $this->Veterinarian->find('first', 
													array('conditions' => array(
														'Veterinarian.user_id' => $veterinarian['user_id'],
														'Veterinarian.b_locus_testing' => $breed_data['breed']
												)));
				if( !empty($already) ) {					
					$flag = true;
					$this->Session->setFlash(__('B Locus Test already done for this dog!'), 'default', array('class' => 'error'));
				}
	        	$veterinarian['b_locus_testing'] = $breed_data['breed'];
	        	$veterinarian['health_testing'] = 0;
	        	$veterinarian['d_locus_testing'] = 0;
	        	$veterinarian['e_locus_testing'] = 0;
	        	$veterinarian['s_locus_testing'] = 0;
	        	break;
	        case 3:
				//condition to check if dog had already gone thru D locus test
				$already = $this->Veterinarian->find('first', 
													array('conditions' => array(
														'Veterinarian.user_id' => $veterinarian['user_id'],
														'Veterinarian.d_locus_testing' => $breed_data['breed']
												)));
				if( !empty($already) ) {					
					$flag = true;
					$this->Session->setFlash(__('D Locus Test already done for this dog!'), 'default', array('class' => 'error'));
				}
	        	$veterinarian['d_locus_testing'] = $breed_data['breed'];
	        	$veterinarian['health_testing'] = 0;
	        	$veterinarian['b_locus_testing'] = 0;
	        	$veterinarian['e_locus_testing'] = 0;
	        	$veterinarian['s_locus_testing'] = 0;
	        	break;
	        case 4:
				//condition to check if dog had already gone thru E locus test
				$already = $this->Veterinarian->find('first', 
													array('conditions' => array(
														'Veterinarian.user_id' => $veterinarian['user_id'],
														'Veterinarian.e_locus_testing' => $breed_data['breed']
												)));
				if( !empty($already) ) {					
					$flag = true;
					$this->Session->setFlash(__('E Locus Test already done for this dog!'), 'default', array('class' => 'error'));
				}
	        	$veterinarian['e_locus_testing'] = $breed_data['breed'];
	        	$veterinarian['health_testing'] = 0;
	        	$veterinarian['b_locus_testing'] = 0;
	        	$veterinarian['d_locus_testing'] = 0;
	        	$veterinarian['s_locus_testing'] = 0;
	        	break;
	        case 5:
				//condition to check if dog had already gone thru S locus test
				$already = $this->Veterinarian->find('first', 
													array('conditions' => array(
														'Veterinarian.user_id' => $veterinarian['user_id'],
														'Veterinarian.s_locus_testing' => $breed_data['breed']
												)));
				if( !empty($already) ) {					
					$flag = true;
					$this->Session->setFlash(__('S Locus Test already done for this dog!'), 'default', array('class' => 'error'));
				}
	        	$veterinarian['s_locus_testing'] = $breed_data['breed'];
	        	$veterinarian['health_testing'] = 0;
	        	$veterinarian['b_locus_testing'] = 0;
	        	$veterinarian['d_locus_testing'] = 0;
	        	$veterinarian['e_locus_testing'] = 0;
	        	break;
        }
        $veterinarian['spay_neuter'] = 0;
        $veterinarian['groomer'] = 0;
        $this->loadModel('Veterinarian');
       
		if(!$flag) {
			if ($this->Veterinarian->save($veterinarian)) {
				return $this->redirect('/vet');
			}
		}        
    }
    return $this->redirect('/vet');
    }

    /**
     * Method Name :save_spay
     * Author Name : Gaurav Singh
     * Date : 19 March 2016
     * Description : Vet index page
     */
    public function save_spay() {

    // Has any form data been POSTed?
    if ($this->request->is('post')) {
        // If the form data can be validated and saved...
        $breed_data = $this->request->data;

        $this->loadModel('User');
        // Load current logged in user and debit amount from credit or fund
         $user = $this->User->find('first', array('conditions' => array('User.id' => $this->Auth->user('id'))));
		if($user['User']['funds'] >= 50) {
		    	$user['User']['funds'] = $user['User']['funds'] - 50;
		    	$this->User->save($user);
	    		$this->Session->write('Auth.User.funds', $user['User']['funds']);
		    	$this->Session->setFlash(__('Congratulations !! Spay / Neuter successful.'), 'default', array('class' => 'success'));
	    	} else {
	    		$this->Session->setFlash(__('Sorry ! You dont have sufficent funds.'), 'default', array('class' => 'error'));
	    	}
	    	
        $veterinarian['user_id'] = $this->Auth->user('id');
        $veterinarian['shots_checkups'] = 0;
        $veterinarian['b_locus_testing'] = 0;
        $veterinarian['d_locus_testing'] = 0;
        $veterinarian['e_locus_testing'] = 0;
        $veterinarian['s_locus_testing'] = 0;
        $veterinarian['health_testing'] = 0;
        $veterinarian['spay_neuter'] = $breed_data['breed'];
        $veterinarian['groomer'] = 0;
        $this->loadModel('Veterinarian');
       
        if ($this->Veterinarian->save($veterinarian)) {
            return $this->redirect('/vet');
        }
    }
    return $this->redirect('/vet');
    }

    /**
     * Method Name :save_groom
     * Author Name : Gaurav Singh
     * Date : 19 March 2016
     * Description : Vet index page
     */
    public function save_groom() {
    
    // Has any form data been POSTed?
    if ($this->request->is('post')) {
        // If the form data can be validated and saved...
        $breed_data = $this->request->data;
        
        $this->loadModel('User');
        // Load current logged in user and debit amount from credit or fund
         $user = $this->User->find('first', array('conditions' => array('User.id' => $this->Auth->user('id'))));
		if($user['User']['funds'] >= 10) {
		    	$user['User']['funds'] = $user['User']['funds'] - 10;
		    	$this->User->save($user);
	    		$this->Session->write('Auth.User.funds', $user['User']['funds']);
		    	$this->Session->setFlash(__('Congratulations !! Grooming successful.'), 'default', array('class' => 'success'));
	    	} else {
	    		$this->Session->setFlash(__('Sorry ! You dont have sufficent funds.'), 'default', array('class' => 'error'));
	    	}
	    	
        $veterinarian['user_id'] = $this->Auth->user('id');
        $veterinarian['shots_checkups'] = 0;
        $veterinarian['b_locus_testing'] = 0;
        $veterinarian['d_locus_testing'] = 0;
        $veterinarian['e_locus_testing'] = 0;
        $veterinarian['s_locus_testing'] = 0;
        $veterinarian['health_testing'] = 0;
        $veterinarian['spay_neuter'] = 0;
        $veterinarian['groomer'] = $breed_data['breed'];
        $this->loadModel('Veterinarian');
       
        if ($this->Veterinarian->save($veterinarian)) {
            return $this->redirect('/vet');
        }
    }
    return $this->redirect('/vet');
    }
}

?>