<?php

App::uses('Controller', 'Controller');

/**
 * Shop Controller
 *
 * Purpose : Manage Shop
 * @project Best of Pedigree
 * @since 25 June, 2015
 * @version Cake Php 2.3.8
 * @author : Naveen Joshi
 */
class ShopController extends AppController {

    public $uses = array('User', 'Breed', 'Pet', 'BackgroundImage', 'BreedingRibbon', 'EmployerLicence', 'RetirementMedal', 'EnergyBone', 'KennelSpace', 'GameBreed', 'UserKennelSpace', 'UserLicence', 'UserBreedingRibbon', 'UserEnergyBone', 'UserRetirementMedal', 'UserBgImage', 'GameFund', 'GameBreedDog');

    public function beforeFilter() {
        //$this->Auth->allow(array('product_fields'));
        parent::beforeFilter();
    }

    /**
     * Method Name : admin_manage	 
     * Author Name : Naveen Joshi
     * Date : 25 June 2015
     * Description : manage shop
     */
    public function admin_manage() {
        $cond = array();
        $this->loadModel('ProductType');
        if (isset($this->request->query['keyword']) && !empty($this->request->query['keyword'])) {
            $keyword = $this->request->query['keyword'];
        }

        if (!isset($this->request->query['product_id']) || $this->request->query['product_id'] == '') {
            $this->request->query['product_id'] = '1';
        }
        if ($this->request->query['product_id'] == '2') {
            $model = 'BackgroundImage';
        } else if ($this->request->query['product_id'] == '3') {
            $model = 'EmployerLicence';
        } else if ($this->request->query['product_id'] == '4') {
            $model = 'BreedingRibbon';
        } else if ($this->request->query['product_id'] == '5') {
            $model = 'RetirementMedal';
        } else if ($this->request->query['product_id'] == '6') {
            $model = 'KennelSpace';
        } else if ($this->request->query['product_id'] == '7') {
            $model = 'EnergyBone';
        } else if ($this->request->query['product_id'] == '8') {
            $model = 'GameFund';
        } else {
            $model = 'Pet';
        }
        $this->paginate = array('conditions' => $cond,
            'order' => '' . $model . '.id Desc',
            'limit' => ADMIN_PAGE_LIMIT);

        $this->set('shops', $this->paginate('' . $model . ''));
        $this->set('product_type', $this->request->query['product_id']);
        $this->set('ProductTypes', $this->ProductType->find('all'));
    }

    /**
     * Method Name : admin_add
     * Author Name : Naveen Joshi
     * Date : 26 June 2015
     * Description : add pet 
     */
    public function admin_add() {

        $this->loadModel('ProductType');
        $allBreeds = $this->Breed->find('all');
        $this->set('allBreeds', $allBreeds);
        $this->set('ProductTypes', $this->ProductType->find('all'));
        $errors = array();
        $add_errors = array();
        $error_flag = false;

        if ($this->request->is('post')) {
            if ($this->request->data['Product']['product_id'] == '1') {
                $model = 'Pet';
            } else if ($this->request->data['Product']['product_id'] == '2') {

                $model = 'BackgroundImage';
                $upload_path = UPLOAD_BACKGROUNDIMG_DIR;
                $upload_dir_name = 'pet_background_img';
            } else if ($this->request->data['Product']['product_id'] == '3') {

                $model = 'EmployerLicence';
                $upload_path = UPLOAD_EMPLICENCEIMG_DIR;
                $upload_dir_name = 'employer_licence_img';
            } else if ($this->request->data['Product']['product_id'] == '4') {

                $model = 'BreedingRibbon';
                $upload_path = UPLOAD_BREEDRIBBONIMG_DIR;
                $upload_dir_name = '
                _img';
            } else if ($this->request->data['Product']['product_id'] == '5') {

                $model = 'RetirementMedal';
                $upload_path = UPLOAD_RETIREMENTMEDALIMG_DIR;
                $upload_dir_name = 'retirement_medal_img';
            } else if ($this->request->data['Product']['product_id'] == '6') {

                $model = 'KennelSpace';
            } else if ($this->request->data['Product']['product_id'] == '7') {

                $model = 'EnergyBone';
                $upload_path = UPLOAD_ENERGYBONEIMG_DIR;
                $upload_dir_name = 'energy_bone_img';
            } else if ($this->request->data['Product']['product_id'] == '8') {
                $model = 'GameFund';
            }
            if (!empty($_FILES['filename']['name'])) {

                $config['upload_path'] = $upload_path;
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = 2165466;
                ;
                $config['encrypt_name'] = true;

                $this->Upload->initializes($config);

                if ($this->Upload->do_upload('filename')) {
                    $imgdata_arr = $this->Upload->data();
                    $this->request->data[$model]['image'] = $imgdata_arr['file_name'];
                } else {
                    $errors[] = $this->Upload->display_errors();
                    $error_flag = true;
                }
            }

            $this->request->data[$model]['added_date'] = date('Y-m-d H:i:s');
            $this->request->data[$model]['product_id'] = $this->request->data['Product']['product_id'];

            if ($this->$model->save($this->request->data)) {
                if (!empty($_FILES['filename']['name']) && $error_flag == false) {
                    $this->create_all_thumbs($imgdata_arr['file_name'], $upload_path, $model, 'image', array(), $upload_dir_name);
                }
                $this->Session->setFlash(__('Inventory added successfully'), 'default', array(), 'success');
                $this->redirect(array('action' => 'manage', '?' => http_build_query(array('product_id' => $this->request->data['Product']['product_id']))));
            }
        }
    }

    /**
     * Method Name : admin_edit
     * Author Name : Naveen Joshi
     * Date : 27 June 2015
     * Description : edit pet 
     */
    public function admin_edit($id = null, $prdId = null) {
        $this->loadModel('ProductType');
        $this->set('ProductTypes', $this->ProductType->find('all'));
        $this->loadModel('ProductType');
        $this->loadModel('PetColors');

        if ($prdId == '1') {
            $model = 'Pet';
        } else if ($prdId == '2') {

            $model = 'BackgroundImage';
            $upload_path = UPLOAD_BACKGROUNDIMG_DIR;
            $upload_dir_name = 'pet_background_img';
        } else if ($prdId == '3') {

            $model = 'EmployerLicence';
            $upload_path = UPLOAD_EMPLICENCEIMG_DIR;
            $upload_dir_name = 'employer_licence_img';
        } else if ($prdId == '4') {

            $model = 'BreedingRibbon';
            $upload_path = UPLOAD_BREEDRIBBONIMG_DIR;
            $upload_dir_name = 'breed_ribbon_img';
        } else if ($prdId == '5') {

            $model = 'RetirementMedal';
            $upload_path = UPLOAD_RETIREMENTMEDALIMG_DIR;
            $upload_dir_name = 'retirement_medal_img';
        } else if ($prdId == '6') {

            $model = 'KennelSpace';
        } else if ($prdId == '7') {

            $model = 'EnergyBone';
            $upload_path = UPLOAD_ENERGYBONEIMG_DIR;
            $upload_dir_name = 'energy_bone_img';
        } else if ($prdId == '8') {
            $model = 'GameFund';
        }

        if (isset($upload_dir_name)) {
            $this->$model->id = $id;
            if (!$this->$model->exists()) {
                $this->Session->setFlash(__('Invalid id'), 'default', array(), 'error');
                $this->redirect(array('action' => 'manage', '?' => http_build_query(array('product_id' => $prdId))));
            }
            $rs = $this->{$model}->read(null, $id);

            if ($this->request->is('put')) {
                if ($_FILES['filename']['name']) {

                    $this->unlink_thumbs($upload_path, $model, 'image', array('id' => $id), array(), $upload_dir_name);
                    $config['upload_path'] = $upload_path;
                    $config['allowed_types'] = 'gif|jpg|png|jpeg';
                    $config['max_size'] = 2165466;
                    $config['encrypt_name'] = true;

                    $this->Upload->initializes($config);

                    if ($this->Upload->do_upload('filename')) {
                        $imgdata_arr = $this->Upload->data();
                        $this->request->data[$model]['image'] = $imgdata_arr['file_name'];
                    } else {
                        $errors[] = $this->Upload->display_errors();
                        $error_flag = true;
                    }
                } else {
                    $this->request->data[$model]['image'] = $this->request->data[$model]['old_image'];
                }
                $this->request->data[$model]['updated_date'] = date('Y-m-d H:i:s');
                if ($this->{$model}->save($this->request->data)) {
                    if (!empty($_FILES['filename']['name'])) {
                        $this->create_all_thumbs($imgdata_arr['file_name'], $upload_path, $model, 'image', array(), $upload_dir_name);
                    }
                    $this->Session->setFlash(__('Inventory updated successfully'), 'default', array(), 'success');
                    $this->redirect(array('action' => 'manage', '?' => http_build_query(array('product_id' => $prdId))));
                }
            }
        } else {
            $this->{$model}->id = $id;
            if (!$this->{$model}->exists()) {
                $this->Session->setFlash(__('Invalid id'), 'default', array(), 'error');
                $this->redirect(array('action' => 'manage', '?' => http_build_query(array('product_id' => $prdId))));
            }
            $rs = $this->{$model}->read(null, $id);
            if ($this->request->is('put')) {

                $this->request->data['{$model}']['updated_date'] = date('Y-m-d H:i:s');
                if ($this->{$model}->save($this->request->data)) {

                    $this->Session->setFlash(__('Inventory updated successfully'), 'default', array(), 'success');
                    $this->redirect(array('action' => 'manage', '?' => http_build_query(array('product_id' => $prdId))));
                }
            }
        }
        $this->request->data = $rs;
        $allBreeds = $this->Breed->find('all', array('conditions' => array('Breed.status' => '1'), 'fields' => array('Breed.id', 'Breed.name')));
        $this->set('allBreeds', $allBreeds);
        $this->set('ProductTypes', $this->ProductType->find('all'));
    }

    /**
     * Method Name : admin_delete
     * Author Name : Naveen Joshi
     * Date : 27 June 2015
     * Description : delete pet 
     */
    public function admin_delete($id = null, $prdId = null) {
        $rs = '';
        if ($prdId == '1') {
            $model = 'Pet';
        } else if ($prdId == '2') {
            $model = 'BackgroundImage';
        } else if ($prdId == '3') {
            $model = 'EmployerLicence';
        } else if ($prdId == '4') {
            $model = 'BreedingRibbon';
        } else if ($prdId == '5') {
            $model = 'RetirementMedal';
        } else if ($prdId == '6') {
            $model = 'KennelSpace';
        } else if ($prdId == '7') {
            $model = 'EnergyBone';
        } else if ($prdId == '8') {
            $model = 'GameFund';
        }

        $this->{$model}->id = $id;
        if (!$this->{$model}->exists()) {
            $this->Session->setFlash(__('Invalid id'), 'default', array(), 'error');
            $this->redirect(array('action' => 'manage', '?' => http_build_query(array('product_id' => $prdId))));
        }
        if ($this->{$model}->delete($id)) {
            $this->Session->setFlash(__('Inventory deleted successfully'), 'default', array(), 'success');
            $this->redirect(array('action' => 'manage', '?' => http_build_query(array('product_id' => $prdId))));
        }
        /*       if($prdId=='1'){
        

          }
          if($prdId=='2'){
          $this->BackgroundImage->id=$id;
          if(!$this->BackgroundImage->exists()){
          $this->Session->setFlash(__('Invalid id'),'default',array(),'error');
          $this->redirect(array('action'=>'manage'));
          }
          $rs= $this->BackgroundImage->delete($id);
          }
          if($prdId=='3'){
          $this->EmployerLicence->id=$id;
          if(!$this->EmployerLicence->exists()){
          $this->Session->setFlash(__('Invalid id'),'default',array(),'error');
          $this->redirect(array('action'=>'manage'));
          }
          $rs=$this->EmployerLicence->delete($id);
          }
          if($prdId=='4'){
          $this->BreedingRibbon->id=$id;
          if(!$this->BreedingRibbon->exists()){
          $this->Session->setFlash(__('Invalid id'),'default',array(),'error');
          $this->redirect(array('action'=>'manage'));
          }

          $rs= $this->BreedingRibbon->delete($id);
          }
          if($prdId=='5'){
          $this->RetirementMedal->id=$id;
          if(!$this->RetirementMedal->exists()){
          $this->Session->setFlash(__('Invalid id'),'default',array(),'error');
          $this->redirect(array('action'=>'manage'));
          }
          $rs= $this->BreedingRibbon->delete($id);
          }
          if($prdId=='6'){
          $this->KennelSpace->id=$id;
          if(!$this->KennelSpace->exists()){
          $this->Session->setFlash(__('Invalid id'),'default',array(),'error');
          $this->redirect(array('action'=>'manage'));
          }
          $rs= $this->KennelSpace->delete($id);
          }
          if($prdId=='7'){
          $this->EnergyBone->id=$id;
          if(!$this->EnergyBone->exists()){
          $this->Session->setFlash(__('Invalid id'),'default',array(),'error');
          $this->redirect(array('action'=>'manage'));
          }
          $rs= $this->EnergyBone->delete($id);
          }
          if($rs){

          } */

        $this->Session->setFlash(__('Inventory could not be deleted, please try again.'), 'default', array(), 'error');
        $this->redirect(array('action' => 'manage'));
    }

    public function admin_product_fields($ProductType = null) {
        $this->layout = 'ajax';
        $this->loadModel('PetColors');
        $this->loadModel('ProductType');
        $this->set('ProductTypes', $this->ProductType->find('all'));
        $allBreeds = $this->Breed->find('all', array('conditions' => array('Breed.status' => '1'), 'fields' => array('Breed.id', 'Breed.name')));
        $this->set('allBreeds', $allBreeds);
        //$this->set('PetColors',$this->PetColors->find('all'));
        $this->set('ProductType', $ProductType);
    }

    function admin_get_breed_color($id) {
        $this->layout = 'ajax';
        $this->loadModel('BreedImages');
        $PetColors = $this->BreedImages->find('all', array('conditions' => array('BreedImages.breed_id' => $id), 'fields' => array('BreedImages.color')));
        $rows = "<option value=''>Select Colour</option>";
        if ($PetColors) {
            foreach ($PetColors as $row) {
                $rows.="<option value='" . $row['BreedImages']['color'] . "'>" . $row['BreedImages']['color'] . "</option>";
            }
        }
        echo $rows;
        die;
    }

    private function getAchievementConditionValue($total){
    	$condition = 0;
        switch ($total) 
        {
          case 10:
            $condition = 10;
          break;

          case 50:
            $condition = 50;
          break;

          case 100:
            $condition = 100;
          break;

          case 500:
            $condition = 500;
          break;
          
          default:
          break;
        }
        return $condition;
    }

    private function getELAchievementConditionValue($total){
    	$condition = 0;
        switch ($total) 
        {
          case 1:
            $condition = 1;
          break;

          case 2:
            $condition = 5;
          break;

          case 10:
            $condition = 10;
          break;
          
          default:
          break;
        }
        return $condition;	
    }


    private function updateOriginDogsAchievement($userId)
    {
      $this->loadModel('GameBreed');
      $gameBreed = $this->GameBreed->find('all', array(
        'fields'=>array('COUNT(*) as total_origin_dogs'),
        'conditions'=>array('user_id'=>$userId)
      ));
      $condition = 0;
      if(count($gameBreed) > 0)
	      $condition = $this->getAchievementConditionValue($gameBreed[0][0]['total_origin_dogs']);

      if($condition != 0){
		$this->loadModel('Achievements');
        $odAch = $this->Achievements->find('first',array(
          'conditions'=>array(
            'award_type'=>'OD',
            'condition' => $condition
          )
        ));

        if(count($odAch) > 0){
	      	$this->loadModel('UserAchievements');
	      	$this->loadModel('User');
    		  $isExists = $this->UserAchievements->find('first', array('conditions'=>array('achievement_id'=>$odAch['Achievements']['id'],'user_id' => $userId)));
    		
    		if(count($isExists) == 0)
			{	
				$this->addUserAchievement($odAch['Achievements']);
			}
        }
      }
    }

    private function updateEmployeeLicenseAchievements($userId){
    	$this->loadModel('UserLicence');
    	$userEmployerLicenses = $this->UserLicence->find('all', array(
  			'fields'=>array('COUNT(*) as total_employer_license'),
  			'conditions'=>array('user_id'=>$userId)
  		));
  		$condition = 0;
  		if(count($userEmployerLicenses) > 0)
      {
  			$condition = $this->getELAchievementConditionValue($userEmployerLicenses[0][0]['total_employer_license']);
      }
  		if($condition != 0){
  			$this->loadModel('Achievements');
  			$ach = $this->Achievements->find('first',array(
  					'conditions'=>array(
  					'award_type'=>'SPA',
  					'condition' => $condition
  				)
  			));

        if(count($ach) > 0){
	      	$this->loadModel('UserAchievements');
	      	$this->loadModel('User');	
          $isExists = $this->UserAchievements->find('first', array('conditions'=>array('achievement_id'=>$ach['Achievements']['id'],'user_id' => $userId)));
  		
	    		if(count($isExists) == 0){	
					 $this->addUserAchievement($ach['Achievements']);
				  }
        }
    	}
    }


    /**
     * Method Name : shop
     * Author Name : Naveen Joshi
     * Date : 19 July 2015
     * Description : to manage shop for front end
     */
    function shop() {
    	  $kennelData = $this->User->findById($this->Auth->user('id'), array('shop_banner', 'kennel_desc'));
        $this->set('kennelData', $kennelData);

        //payment mode 1=>Game Cash, 2=>Bones
        $this->layout = 'front';
        $userId = $this->Auth->user('id');
        $options = array(
                    'group' => 'Breed.id'
                );
        $this->set('allBreeds', $this->Breed->find('all'));
        $this->set('allPetsBreeds', $this->Pet->find('all', $options));
        $this->set('allKennelSpaces', $this->KennelSpace->find('all', array('id', 'spaces')));
        //$this->set('allPurchasedDog', $this->GameBreedDog->find('all', array('id', 'name')));
        $this->set('allPurchasedDog', $this->GameBreed->find('all', array('conditions' => array('GameBreed.user_id' => $userId))));
        $this->set('allEmployerLicences', $this->EmployerLicence->find('all'));
        $this->set('allEnergyBones', $this->EnergyBone->find('all'));
        $this->set('allRetirementMedals', $this->RetirementMedal->find('all'));
        $this->set('allBreedingRibbons', $this->BreedingRibbon->find('all'));
        $this->set('allBackgroundImages', $this->BackgroundImage->find('all'));
        $retiredBreeds = [];
        $allRetiredBreeds = $this->getRetiredGameBreeds(array('Dog', 'Bitch'));
        foreach ($allRetiredBreeds as $brd) {
            if(!$this->getDogRetirementMedal($brd['GameBreed']['name'])){
              $retiredBreeds[] = $brd; 
            }
        }
        $this->set('allRetiredBreeds', $retiredBreeds);
        $this->set('allGameFunds', $this->GameFund->find('all'));
        $this->set('BitechesNotInHeat', $this->GameBreed->find('all', array(
        	'conditions' => array(
        		'GameBreed.gender' => 'Bitch', 
        		//'GameBreed.is_in_heat' => '0', 
				'GameBreed.user_id' => $userId,
				'GameBreed.age >=' => 21,
			)
		)));
        $creditArr = $this->User->findById($userId, array('credits', 'kennel_spaces', 'energy_bones', 'funds'));
        $credit = $creditArr['User']['credits'];    //bones
        $fund = $creditArr['User']['funds'];

        $allPets = $this->Pet->find('all');

        $allBreeds = $already = array();
        foreach ($allPets as $ap) {
            if (!in_array($ap['Breed']['id'], $already)) {
                $allBreeds[] = $ap;
                $already[] = $ap['Breed']['id'];
            }
        }
        $this->set('allBreeds', $allBreeds);

        $paid = 0;

        if ($this->request->is('post')) {

            $paymentMode = '';

            if (isset($this->request->data['Payment']['payment_mode'])) {
                $paymentMode = $this->request->data['Payment']['payment_mode'];
            }

            /*  Game Breed Buy start-------> */
            if (isset($_POST['buy_game_breed'])) {
                $this->request->data['GameBreed']['gender'] = $this->request->data['gender'];
				
				/*
				$isExists = $this->GameBreed->findByBreedIdAndUserIdAndGender($this->request->data['GameBreed']['breed_id'], $userId, $this->request->data['GameBreed']['gender']);

                $pet_available = $this->Pet->find('all', array(
                    'conditions' => array(
                        'Pet.breed_id' => $this->request->data['GameBreed']['breed_id']
                )));

                if (empty($pet_available)) {
                    $this->Session->setFlash(__('Sorry! Selected breed is not available. '), 'default', array('class' => 'error'));
                    $this->redirect($this->referer());
                } else {

                    $all_sel_pets = array();
                    foreach ($pet_available as $pa) {
                        $all_sel_pets[] = $pa['Pet']['id'];
                    }

                    $randomElement = $all_sel_pets[array_rand($all_sel_pets, 1)];
                }
                $selectedPet = $this->Pet->findById($randomElement);
				*/


                //  if(!$isExists){

                $this->loadModel('BreedImages');
                $imges = $this->BreedImages->find('all', array(
                    'conditions' => array(
                        'BreedImages.breed_id' => $this['Pet']['breed_id'],
                        'BreedImages.color' => $selectedPet['Pet']['color']
                    )
                ));
				
				/*
                $all_pet_imges = array();
				
                foreach ($imges as $im) {
                    $all_pet_imges[] = $im['BreedImages']['id'];
                }

                $randomElementImage = $all_pet_imges[array_rand($all_pet_imges, 1)];
				*/
				$randomElementImage = $this->request->data['GameBreed']['breed_image_id'];
				

                //$breedCost = $selectedPet['Pet']['cost'];

				$breedCost = $this->request->data['GameBreed']['cost'];
				
                if ($credit >= $breedCost) {
                    $credit = $credit - $breedCost;    //buy with bones
                    
                    $breedImage = $this->BreedImages->find('first', array(
                        'conditions' => array(
                            'BreedImages.id' => $randomElementImage,
                        )
                    ));

                    $this->request->data['GameBreed']['name'] = $this->request->data['name'];
                    $this->request->data['GameBreed']['cost'] = $breedCost;
                    $this->request->data['GameBreed']['breed_image_id'] = $randomElementImage;
                    $this->request->data['GameBreed']['user_id'] = $userId;
                    $this->request->data['GameBreed']['age'] = '21';
                    $this->request->data['GameBreed']['purchase_date'] = date('Y-m-d H:i:s');
                    for ($i = 0; $i <= 10; $i++) {
                        $randomVal[] = rand(1, 100);
                    }

                    if ($this->request->data['GameBreed']['gender'] == 'Bitch') {
                        $this->request->data['GameBreed']['is_in_heat'] = 1;
                        $this->request->data['GameBreed']['heat_days_left'] = 4;
                        $this->request->data['GameBreed']['heat_date'] = date('Y-m-d H:i:s');
                    }


                    $this->request->data['GameBreed']['head'] = $randomVal[0];
                    $this->request->data['GameBreed']['body'] = $randomVal[1];
                    $this->request->data['GameBreed']['hindquarters'] = $randomVal[2];
                    $this->request->data['GameBreed']['forequarters'] = $randomVal[3];
                    $this->request->data['GameBreed']['coat'] = $randomVal[4];
                    $this->request->data['GameBreed']['temperament'] = $randomVal[5];
                    $this->request->data['GameBreed']['gen'] = $randomVal[6];
                    $this->request->data['GameBreed']['heart'] = 0;
                    $this->request->data['GameBreed']['hip'] = 0;
                    $this->request->data['GameBreed']['eyes'] = 0;
                    $this->request->data['GameBreed']['thyroid'] = 0;
                    $this->request->data['GameBreed']['energy'] = 100;
                    $this->request->data['GameBreed']['color'] = $breedImage['BreedImages']['color'];
					$this->request->data['GameBreed']['b_locus_gene'] = rand(0, $breedImage['BreedImages']['b_locus_gene']);
					$this->request->data['GameBreed']['d_locus_gene'] = rand(0, $breedImage['BreedImages']['d_locus_gene']);
					$this->request->data['GameBreed']['e_locus_gene'] = rand(0, $breedImage['BreedImages']['e_locus_gene']);
					$this->request->data['GameBreed']['s_locus_gene'] = rand(0, $breedImage['BreedImages']['s_locus_gene']);
                    if ($savedData = $this->GameBreed->save($this->request->data)) {
                        $trainingArr = array('confirmation', 'agility', 'rally', 'obedience');
                        $this->loadModel('DogSkill');
                        $tArr = array();
                        for ($j = 0; $j < 4; $j++) {
                            $tArr['DogSkill']['game_breed_id'] = $savedData['GameBreed']['id'];
                            $tArr['DogSkill']['category'] = $trainingArr[$j];

                            $this->DogSkill->create();
                            $this->DogSkill->save($tArr, false);
                        }
                        $this->User->id = $userId;
                        $this->User->saveField('credits', $credit);
                        $this->Session->write('purchase', '1');
                        $userUpdatedData = $this->User->findById($userId); //update credit
                        $this->Auth->login($userUpdatedData['User']);
                        $this->updateOriginDogsAchievement($userId);
                        // $this->redirect(array('controller' => 'shop', 'action' => 'continue_to'));
                        $this->redirect(array('controller' => 'kennels', 'action' => 'index'));
                    }
                    $paid = '1';

                } else {
                    $this->Session->setFlash(__('Sorry you do not have enough credit left with you. '), 'default', array('class' => 'error'));
                }
                /* }else{
                  $this->Session->setFlash(__('Orgin dog is already in your kennel. '),'default',array('class'=>'error'));
                  } */
            }
            /*  Game Breed Buy end-------> */

            /*  Kennel space Buy start-------> */
            if (isset($_POST['kennel_space'])) {
                $spaceArr = $this->KennelSpace->findById($this->request->data['UserKennelSpace']['kennel_space_id']);
                if ($credit >= $spaceArr['KennelSpace']['cost']) {
                    $credit = $credit - $spaceArr['KennelSpace']['cost'];
                    $data = array();
                    $data['UserKennelSpace']['kennel_space_id'] = $this->request->data['UserKennelSpace']['kennel_space_id'];
                    $data['UserKennelSpace']['user_id'] = $userId;
                    $data['UserKennelSpace']['spaces'] = $spaceArr['KennelSpace']['spaces'];
                    $data['UserKennelSpace']['cost'] = $spaceArr['KennelSpace']['cost'];
                    $data['UserKennelSpace']['purchase_date'] = date('Y-m-d H:i:s');
                    // $data['UserKennelSpace']['dog_name'] = $this->request->data['UserKennelSpace']['purchase_dog_id'];
                    $data['UserKennelSpace']['dog_name'] = '';
                    if ($this->UserKennelSpace->save($data)) {
                        $AddedSpace = explode(' ', $spaceArr['KennelSpace']['spaces']);
                        $totalSpace = $creditArr['User']['kennel_spaces'] + $AddedSpace[0];
                        $this->User->id = $userId;
                        $this->User->saveField('credits', $credit);    //update credits
                        $this->User->saveField('kennel_spaces', $totalSpace);  //update kennel space
                        $this->Session->setFlash(__('Congratulations !! ' . $spaceArr['KennelSpace']['spaces'] . ' added to you kennel. now you have ' . $totalSpace . ' total kennel spaces.'), 'default', array('class' => 'success'));
                    }
                    $paid = '1';
                } else {
                    $this->Session->setFlash(__('Sorry, You do not have enough credit left with you. '), 'default', array('class' => 'error'));
                }
            }
            /*  Kennel space Buy end-------> */


            /* Emploer Licence buy starts------- */
            if (isset($_POST['buy_licences'])) {
                $employerLicenceArr = $this->EmployerLicence->findById($this->request->data['UserLicence']['employer_licence_id']);
                $creditsToBuy = $employerLicenceArr['EmployerLicence']['credits_to_buy'];
                $cashToBuy = $employerLicenceArr['EmployerLicence']['game_cash'];
                if ($paymentMode == '1') {   //buy with funds;
                    if ($fund >= $cashToBuy) {
                        $fund = $fund - $cashToBuy;
                        $paid = '1';
                    }
                } else if ($paymentMode == '2') {   //buy with bones;
                    if ($credit >= $creditsToBuy) {
                        $credit = $credit - $creditsToBuy;
                        $paid = '1';
                    }
                }
                if ($paid) {
                    $data = array();
                    $data['UserLicence']['employer_licence_id'] = $this->request->data['UserLicence']['employer_licence_id'];
                    $data['UserLicence']['user_id'] = $userId;
                    $data['UserLicence']['cost'] = $creditsToBuy;
                    $data['UserLicence']['purchased_date'] = date('Y-m-d H:i:s');
                    if ($this->UserLicence->save($data)) {
                        $this->User->id = $userId;
                        $this->User->saveField('credits', $credit);    //update credits
                        $this->User->saveField('funds', $fund);    //update funds
                        $this->Session->setFlash(__('Congratulations !! You have successfully purchased ' . $employerLicenceArr['EmployerLicence']['title'] . ' Licence. Validity: ' . $employerLicenceArr['EmployerLicence']['validity'] . ''), 'default', array('class' => 'success'));
                    }
                    $this->updateEmployeeLicenseAchievements($this->Auth->user('id'));
      
                } else {
                    $this->Session->setFlash(__('Sorry You do not have enough credit left with you. '), 'default', array('class' => 'error'));
                }
            }

            /* Employer Licence buy ends------- */

            /* Energy Bone buy starts------- */
            if (isset($_POST['energy_bone'])) {
                $EnergyBoneArr = $this->EnergyBone->findById($this->request->data['UserEnergyBone']['energy_bone_id']);
                $cost = $EnergyBoneArr['EnergyBone']['cost'];
                if ($paymentMode == '1') {   //buy with funds;
                    if ($fund >= $cost) {
                        $fund = $fund - $cost;
                        $paid = '1';
                    }
                } else if ($paymentMode == '2') {   //buy with bones;
                    if ($credit >= $cost) {
                        $credit = $credit - $cost;
                        $paid = '1';
                    }
                }
                if ($paid) {
                    $data = array();
                    $data['UserEnergyBone']['energy_bone_id'] = $this->request->data['UserEnergyBone']['energy_bone_id'];
                    $data['UserEnergyBone']['user_id'] = $userId;
                    $data['UserEnergyBone']['cost'] = $cost;
                    $data['UserEnergyBone']['purchased_date'] = date('Y-m-d H:i:s');
                    $data['UserEnergyBone']['dog_name'] = $this->request->data['UserEnergyBone']['purchase_dog_id'];
                    $this->GameBreed->id = $this->request->data['UserEnergyBone']['purchase_dog_id'];
                    $this->GameBreed->saveField('energy', 100);
                    if ($this->UserEnergyBone->save($data)) {
                        $this->User->id = $userId;
                        $this->User->saveField('credits', $credit);    //update credits
                        $this->User->saveField('funds', $fund);    //update funds
                        $this->Session->setFlash(__('Congratulations !! You have successfully purchased energy bone'), 'default', array('class' => 'success'));
                    }
                } else {
                    $this->Session->setFlash(__('Sorry You do not have enough balance left with you. '), 'default', array('class' => 'success'));
                }
            }
            /* Energy Bone buy ends------- */

            /* Retirement buy starts------- */
            if (isset($_POST['retirement_medal'])) {
                $RetirementMedalArr = $this->RetirementMedal->findById($this->request->data['UserRetirementMedal']['retirement_medal_id']);
                $creditsToBuy = $RetirementMedalArr['RetirementMedal']['credits_to_buy'];
                $cashToBuy = $RetirementMedalArr['RetirementMedal']['game_cash'];
                if ($paymentMode == '1') {   //buy with funds;
                    if ($fund >= $cashToBuy) {
                        $fund = $fund - $cashToBuy;
                        $paid = '1';
                    }
                } else if ($paymentMode == '2') {   //buy with bones;
                    if ($credit >= $creditsToBuy) {
                        $credit = $credit - $creditsToBuy;
                        $paid = '1';
                    }
                }
                if ($paid) {
                    $data = array();
                    $data['UserRetirementMedal']['retirement_medal_id'] = $this->request->data['UserRetirementMedal']['retirement_medal_id'];
                    $data['UserRetirementMedal']['user_id'] = $userId;
                    $data['UserRetirementMedal']['cost'] = $creditsToBuy;
                    $data['UserRetirementMedal']['purchased_date'] = date('Y-m-d H:i:s');
                    $data['UserRetirementMedal']['dog_name'] = $this->request->data['UserRetirementMedal']['purchase_dog_id'];

                    if ($this->UserRetirementMedal->save($data)) {
                        $this->User->id = $userId;
                        $this->User->saveField('credits', $credit);    //update credits
                        $this->User->saveField('funds', $fund);    //update funds
                        $this->Session->setFlash(__('Congratulations !! You have successfully purchased ' . $RetirementMedalArr['RetirementMedal']['title'] . ' Retirement Medal. Expiration Date: ' . $RetirementMedalArr['RetirementMedal']['expiration_date'] . ''), 'default', array('class' => 'success'));
                    }
                } else {
                    $this->Session->setFlash(__('Sorry You do not have enough credit left with you. '), 'default', array('class' => 'error'));
                }
            }
            /* Retirement medal buy ends------- */

            /* Breeding Ribbon section starts here------- */

            if (isset($_POST['breeding_ribbon'])) {
                // echo '<script>alert('.$this->request->data['UserBreedingRibbon']['purchase_dog_id']. ')</script>';
             	$savedBreed = $this->GameBreed->find('first', array(
	                    'conditions' => array('GameBreed.id' => $this->request->data['UserBreedingRibbon']['game_breed_id']),
	                    // 'fields' => array('GameBreed.name')
                ));
                if ($savedBreed['GameBreed']['is_in_heat'] != 1){
	                $BreedingRibbonArr = $this->BreedingRibbon->findById($this->request->data['UserBreedingRibbon']['breeding_ribbon_id']);
	                $creditsToBuy = $BreedingRibbonArr['BreedingRibbon']['credits_to_buy'];
	                $cashToBuy = $BreedingRibbonArr['BreedingRibbon']['game_cash'];
	                if ($paymentMode == '1') {   //buy with funds;
	                    if ($fund >= $cashToBuy) {
	                        $fund = $fund - $cashToBuy;
	                        $paid = '1';
	                    }
	                } else if ($paymentMode == '2') {   //buy with bones;
	                    if ($credit >= $creditsToBuy) {
	                        $credit = $credit - $creditsToBuy;
	                        $paid = '1';
	                    }
	                }
	                if ($paid) {
	                    $savedBreed = $this->GameBreed->find('first', array(
	                        'conditions' => array('GameBreed.id' => $this->request->data['UserBreedingRibbon']['game_breed_id']),
	                        'fields' => array('GameBreed.name')
	                    ));

	                    $this->GameBreed->updateAll(
	                        array('breed_status' => 2),
	                        array('GameBreed.id' => $this->request->data['UserBreedingRibbon']['game_breed_id'])
	                    );
	                
	                    $data = array();
	                    $data['UserBreedingRibbon']['user_id'] = $userId;
	                    $data['UserBreedingRibbon']['cost'] = $creditsToBuy;
	                    $data['UserBreedingRibbon']['purchased_date'] = date('Y-m-d H:i:s');
	                    $data['UserBreedingRibbon']['dog_name'] = $savedBreed['GameBreed']['name']; //$this->request->data['UserBreedingRibbon']['game_breed_id'];
	                    
	              //      $BreedData = array('GameBreed' => array('id' => $this->request->data['UserBreedingRibbon']['game_breed_id'], 'is_in_heat' => 1));
	                    // $this->GameBreed
	                   
	                    
	                    if ($this->UserBreedingRibbon->save($data) /*&& $this->GameBreed->save($BreedData)*/) {
	                    
	                     	
	                     	$this->GameBreed->id = $this->request->data['UserBreedingRibbon']['game_breed_id'];
	    		    	    $this->GameBreed->saveField("is_in_heat", 1);
	    					$this->GameBreed->saveField("heat_date", date('Y-m-d H:i:s'));
	                    	
	                        $this->User->id = $userId;
	                        $this->User->saveField('credits', $credit);    //update credits
	                        $this->User->saveField('funds', $fund);    //update funds
	                        $this->Session->setFlash(__('Congratulations !! You have successfully purchased ' . $BreedingRibbonArr['BreedingRibbon']['title'] . ', Now bitch is able to breed.'), 'default', array('class' => 'success'));
	                    }
	                } else {
	                    $this->Session->setFlash(__('Sorry You do not have enough credit left with you. '), 'default', array('class' => 'error'));
	                }
	            } else {
                    $this->Session->setFlash(__('Sorry! The bitch is already in heat '), 'default', array('class' => 'error'));
                }
            }

            /* Breeding Ribbon section ends here------- */

            /* Add fund to a/c */
            if (isset($_POST['buy_game_funds'])) {
                $FundArr = $this->GameFund->findByCreditsToBuy($this->request->data['GameFund']['cash']);
                $creditsToBuy = $FundArr['GameFund']['credits_to_buy'];
                if ($paymentMode == '2') {   //buy with bones;
                    if ($credit >= $creditsToBuy) {
                        $credit = $credit - $creditsToBuy;
                        $paid = '1';
                    }
                }
                if ($paid) {
                    $this->User->id = $userId;   //update credits
                    $this->User->saveField('credits', $credit);    //update credits
                    $this->User->saveField('funds', $fund + $this->request->data['GameFund']['cash']);    //update fund
                    $this->Session->setFlash(__('Congratulations !! You have successfully added fund to your account'), 'default', array('class' => 'success'));
                } else {
                    $this->Session->setFlash(__('Sorry You do not have enough credit left with you. '), 'default', array('class' => 'error'));
                }
            }
            
            
            /* Add bg to a/c */
            if (isset($_POST['BGIMG'])) {
                $data['UserBgImage']['user_id'] = $this->Auth->user('id');
                $data['UserBgImage']['background_img_id'] = $this->request->data['BG_id'];
                $data['UserBgImage']['image'] = $this->request->data['BG_name'];
                $data['UserBgImage']['cost'] = $this->request->data['BG_cost'];
                $data['UserBgImage']['purchased_date'] = date('Y-m-d H:i:s');
                $data['UserBgImage']['dog_name'] = $this->request->data['BG_dog_name'];
                $this->UserBgImage->save($data);
                
                $FundArr = $this->BackgroundImage->findById($this->request->data['BG_id'],array("cost"));
                $Cost = $FundArr['BackgroundImage']['cost'];         
                if ($creditArr["User"]["funds"] >= $Cost) {
                    $credit_c = $creditArr["User"]["funds"] - $Cost;
                    $paid = '1';
                }
              
                if ($paid) {
                    $this->User->id = $userId;   //update credits
                   // $this->User->saveField('credits', $credit);    //update credits
                    $this->User->saveField('funds', $credit_c);    //update fund
                    $this->Session->setFlash(__('Congratulations !! You have successfully purchased picture'), 'default', array('class' => 'success'));
                } else {
                    $this->Session->setFlash(__('Sorry You do not have enough credit left with you. '), 'default', array('class' => 'error'));
                }
            }
            /* Add fund to a/c */
            if ($paid = '1') {
                $userUpdatedData = $this->User->findById($userId);
                $this->Auth->login($userUpdatedData['User']); //update session data
                $this->redirect(array('action' => 'shop'));
            }
        }
    }

    public function check_pet_availability() {

        if (!empty($this->data)) {

            $pet = $this->Pet->find('first', array(
                'conditions' => array(
                    'Pet.breed_id' => $this->data['pet_breed_id']
                )
            ));

            if (!empty($pet)) {
                echo 1;
                die;
            } else {
                echo 0;
                die;
            }
        }
    }
	
	
	public function get_available_pets() {
		
		if(!empty($this->data)) {
			
			
			$this->Pet->recursive = 2;
			$this->Breed->bindModel(array('hasMany' => array(
										'BreedImages' => array(
												'className' => 'BreedImages',
												'foreignKey' => 'breed_id'
										)								
								)));
			
			
			$breeds = $this->Pet->find('all', array(
										'conditions' => array(
												'Pet.breed_id' => $this->data['pet_breed_id']
										)
									));
			
			//echo '<pre>'; print_r($breeds); die;
			
			$html = '<table id="pet_options_table" cellpadding="2" cellspacing="1" style="width:90%" border="1">';
			$html.='<tr>';
			$html.='<th>Image</th>';
			$html.='<th>Color</th>';
			$html.='<th>Marking</th>';
			$html.='<th>Cost</th>';
			$html.='<th>Select</th>';
			$html.='</tr>';	
			
			
			if(!empty($breeds)) {
				
				foreach($breeds as $bd) {
					
					if(!empty($bd['Breed']['BreedImages'])) {				
						foreach($bd['Breed']['BreedImages'] as $img) {					
							if($img['color'] == $bd['Pet']['color']) {						
								$html.='<tr>';
								$html.='<td><img style="max-height: 400px;" src="'.SITE_URL.'timthumb.php?src=files/breeds/'.$img['filename_adult'].'" /></td>';
								$html.='<td>'.$img['color'].'</td>';
								$html.='<td>'.$img['marking'].'</td>';
								$html.='<td>$'.$bd['Pet']['cost'].'</td>';
								$html.='<td><a href="javascript://" onclick="update_pet_buy_options(\''.$img['id'].'\', \''.$bd['Pet']['cost'].'\');">Buy</a></td>';
								$html.='</tr>';
							}					
						}				
					}					
				}				
			}		
			
			$html.= '</table>';	
			
			echo $html; die;
		}
		
	}
	

    /**
     * Method Name : continue_to
     * Author Name : Naveen Joshi
     * Date : 19 july June 2015
     * Description : this will redirect to paypal later
     */
    function continue_to() {
        $this->layout = 'user';
    }

    /**
     * Method Name : kennel_space_prices
     * Author Name : Naveen Joshi
     * Date :y19 julu 2015
     * Description : to get kennel space prices
     */
    function kennel_space_prices($id = null) {
        $this->layout = 'ajax';
        $kennelSpaceArr = $this->KennelSpace->findById($id);
        echo $kennelSpaceArr['KennelSpace']['spaces'] . ' ' . 'for' . ' ' . '$' . ' ' . $kennelSpaceArr['KennelSpace']['cost'];
        die;
    }

    /**
     * Method Name : employer_licence_prices
     * Author Name : Naveen Joshi
     * Date :y19 julu 2015
     * Description : to get employer licence prices
     */
    function employer_licence_prices($id = null) {
        $this->layout = 'ajax';
        $EmpLicenceArr = $this->EmployerLicence->findById($id);
        echo 'Minimum credits to buy: ' . $EmpLicenceArr['EmployerLicence']['credits_to_buy'] . '<br>' . 'Game Cash: ' . $EmpLicenceArr['EmployerLicence']['game_cash'] . '<br>' . 'Validity: ' . $EmpLicenceArr['EmployerLicence']['validity'];
        die;
    }

    /**
     * Method Name : energybone_prices
     * Author Name : Naveen Joshi
     * Date :19 july 2015
     * Description : to get energy bone prices
     */
    function energybone_prices($id = null) {
        $this->layout = 'ajax';
        $EnegyBoneArr = $this->EnergyBone->findById($id);
        echo 'Cost: $ ' . $EnegyBoneArr['EnergyBone']['cost'];
        die;
    }

    /**
     * Method Name : energybone_prices
     * Author Name : Naveen Joshi
     * Date :19 july 2015
     * Description : to get energy bone prices
     */
    function fund_prices($price = null) {
        $this->layout = 'ajax';
        $FundArr = $this->GameFund->find('first', array('GameFund.game_funds' => $price));
        echo 'Credits to buy: $ ' . $FundArr['GameFund']['credits_to_buy'];
        die;
    }

    /**
     * Method Name : retirement_medal_prices
     * Author Name : Naveen Joshi
     * Date :19 july 2015
     * Description : to get retirement medal prices
     */
    function retirement_medal_prices($id = null) {
        $this->layout = 'ajax';
        $RetirementMedalArr = $this->RetirementMedal->findById($id);
        echo 'Minimum credits to buy: ' . $RetirementMedalArr['RetirementMedal']['credits_to_buy'] . '<br>' . 'Game Cash: ' . $RetirementMedalArr['RetirementMedal']['game_cash'] . '<br>' . 'Expiration Date: ' . $RetirementMedalArr['RetirementMedal']['expiration_date'];
        die;
    }

    /**
     * Method Name : retirement_medal_prices
     * Author Name : Naveen Joshi
     * Date :19 july 2015
     * Description : to get retirement medal prices
     */
    function ribbon_prices($id = null) {
        $this->layout = 'ajax';
        $BreedingRibbonArr = $this->BreedingRibbon->findById($id);
        echo 'Minimum credits to buy: ' . $BreedingRibbonArr['BreedingRibbon']['credits_to_buy'] . '<br>' . 'Game Cash: ' . $BreedingRibbonArr['BreedingRibbon']['game_cash'];
        die;
    }

    /**
     * Method Name : background_images
     * Author Name : Naveen Joshi
     * Date :21 july 2015
     * Description : background images to be loaded by ajax in front end shop page
     */
    function background_images($id) {
        $this->layout = 'ajax';
        $imgData = $this->BackgroundImage->findById($id);
        $this->set('img', $imgData);
        //print_r($imgData); die;
    }

    /**
     * Method Name : background_images
     * Author Name : Naveen Joshi
     * Date :21 july 2015
     * Description : background images to be loaded by ajax in front end shop page
     */
    function purchase_img() {
      // print_r($this->request->data);
        $this->layout = 'ajax';
        $userId = $this->Auth->user('id');
        $creditArr = $this->User->findById($userId, array('credits'));
        $credit = $creditArr['User']['credits'];
        $ImgArr = $this->BackgroundImage->findById($this->request->data['UserBgImage']['background_img_id']);
        $cost = $ImgArr['BackgroundImage']['cost'];
        if ($credit >= $cost) {
            $credit = $credit - $cost;
            $data = array();
            $data['UserBgImage']['background_img_id'] = $this->request->data['UserBgImage']['background_img_id'];
            $data['UserBgImage']['user_id'] = $userId;
            $data['UserBgImage']['cost'] = $cost;
            $data['UserBgImage']['image'] = $ImgArr['BackgroundImage']['image'];
            $data['UserBgImage']['purchased_date'] = date('Y-m-d H:i:s');
            print_r($data);
            if ($this->UserBgImage->save($data)) {
                $this->User->id = $userId;
                $this->User->saveField('credits', $credit);    //update credits
                $userUpdatedData = $this->User->findById($userId);
                $this->Auth->login($userUpdatedData['User']); //update session data
                $msg = 'Congratulations !! You have successfully purchased background Image ';
                $status = '1';
            }
        } else {
            $msg = 'Sorry You do not have enough credit left with you.';
            $status = '0';
        }
        echo json_encode(array('message' => $msg, 'status' => $status));
        die;
    }

}
