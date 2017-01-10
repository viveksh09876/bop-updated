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
class ShopController extends AppController 
{
	public $uses = array('User','Breed','Pet','BackgroundImage','BreedingRibbon','EmployerLicence','RetirementMedal','EnergyBone','KennelSpace','GameBreed','UserKennelSpace','UserLicence','UserBreedingRibbon','UserEnergyBone','UserRetirementMedal');
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
		$cond=array();
                $this->loadModel('ProductType');
		if($this->request->query['keyword']){
			$keyword=$this->request->query['keyword'];
			//$cond['OR']=array('Pet.pet_type Like'=>'%'.$keyword.'%','Pet.cost Like'=>'%'.$keyword.'%');
		}

                if($this->request->query['product_id']==''){
                   $this->request->query['product_id']='1';
                }
                if($this->request->query['product_id']=='2'){
                   $model='BackgroundImage';
                }else  if($this->request->query['product_id']=='3'){
                    $model='EmployerLicence';
                }else  if($this->request->query['product_id']=='4'){
                    $model='BreedingRibbon';
                }else  if($this->request->query['product_id']=='5'){
                     $model='RetirementMedal';
                }else  if($this->request->query['product_id']=='6'){
                     $model='KennelSpace';
                }else  if($this->request->query['product_id']=='7'){
                     $model='EnergyBone';
                }else{
                     $model='Pet';
                }
		$this->paginate=array('conditions'=>$cond,
		                    'order' => ''.$model.'.id Desc',
			                    'limit' => ADMIN_PAGE_LIMIT);
								
		$this->set('shops',$this->paginate(''.$model.''));
                $this->set('product_type',$this->request->query['product_id']);
                $this->set('ProductTypes',$this->ProductType->find('all'));
	}
	
	/**
	 * Method Name : admin_add
	 * Author Name : Naveen Joshi
	 * Date : 26 June 2015
	 * Description : add pet 
	 */
	 
	 public function admin_add(){

		 $this->loadModel('ProductType');
		 $allBreeds=$this->Breed->find('all',array('conditions'=>array('Breed.status'=>'1'),'fields'=>array('Breed.id','Breed.name')));
		 $this->set('allBreeds',$allBreeds);
		 $this->set('ProductTypes',$this->ProductType->find('all'));
                 $errors = array();
	         $add_errors = array();
		 $error_flag = false;
		 if($this->request->is('post')){ 
                     if($this->request->data['Product']['product_id']=='1'){
                         $model='Pet'; 
                     }else if($this->request->data['Product']['product_id']=='2'){
                         $model='BackgroundImage';
                     }else if($this->request->data['Product']['product_id']=='3'){
                         $model='EmployerLicence';
                     }else if($this->request->data['Product']['product_id']=='4'){
                         $model='BreedingRibbon';
                     }else if($this->request->data['Product']['product_id']=='5'){
                         $model='RetirementMedal';
                     }else if($this->request->data['Product']['product_id']=='6'){
                         $model='KennelSpace';
                     }else if($this->request->data['Product']['product_id']=='7'){
                         $model='EnergyBone';
                     }
                     if(!empty($_FILES['filename']['name']))
                    { 
                            $config['upload_path'] = UPLOAD_BACKGROUNDIMG_DIR;
                            $config['allowed_types'] = 'gif|jpg|png|jpeg';
                            $config['max_size']	= 2165466;;
                            $config['encrypt_name'] = true;

                            $this->Upload->initializes($config);

                            if ($this->Upload->do_upload('filename'))
                            {
                                    $imgdata_arr = $this->Upload->data();
                                    $this->request->data[$model]['image'] = $imgdata_arr['file_name'];
                            }
                            else
                            {
                                    $errors[] = $this->Upload->display_errors();
                                    $error_flag = true;
                            }
                    }
                        
			 $this->request->data[$model]['added_date']=date('Y-m-d H:i:s');
                          $this->request->data[$model]['product_id']=$this->request->data['Product']['product_id'];
                        
			 if($this->$model->save($this->request->data)){
                             if(!empty($_FILES['filename']['name']) && $error_flag==false)
                                {
                                        $this->create_all_thumbs($imgdata_arr['file_name'], UPLOAD_BACKGROUNDIMG_DIR, $model, 'image', array(), 'pet_background_img');
                                }
				 $this->Session->setFlash(__('Inventory added successfully'),'default',array(),'success');
				 $this->redirect(array('action'=>'manage'));
			 }
		 }
                
	 }
	 
	 /**
	 * Method Name : admin_edit
	 * Author Name : Naveen Joshi
	 * Date : 27 June 2015
	 * Description : edit pet 
	 */
	 
	 public function admin_edit($id=null,$prdId=null){
             $this->loadModel('ProductType');
              $this->set('ProductTypes',$this->ProductType->find('all'));
              $this->loadModel('ProductType');
               $this->loadModel('PetColors');

                if($prdId=='1'){
                         $model='Pet';
                     }else if($prdId=='2'){
                         $model='BackgroundImage';
                     }else if($prdId=='3'){
                         $model='EmployerLicence';
                     }else if($prdId=='4'){
                         $model='BreedingRibbon';
                     }else if($prdId=='5'){
                         $model='RetirementMedal';
                     }else if($prdId=='6'){
                         $model='KennelSpace';
                     }else if($prdId=='7'){
                         $model='EnergyBone';
                     }
               if($model=='Pet'){
		 $this->Pet->id=$id;
		 if(!$this->Pet->exists()){
			$this->Session->setFlash(__('Invalid id'),'default',array(),'error');
			$this->redirect(array('action'=>'manage')); 
		 }
		 $rs=$this->Pet->read(null,$id);
		 if($this->request->is('put')){
                     $this->request->data['Pet']['updated_date']=date('Y-m-d H:i:s');
			 if($this->Pet->save($this->request->data)){
                              
                              $this->Session->setFlash(__('Inventory updated successfully'),'default',array(),'success');
                              $this->redirect(array('action'=>'manage'));
			 }
		 }

                 }else if($model=='BackgroundImage'){
		 $this->BackgroundImage->id=$id;
		 if(!$this->BackgroundImage->exists()){
			$this->Session->setFlash(__('Invalid id'),'default',array(),'error');
			$this->redirect(array('action'=>'manage'));
		 }
		 $rs=$this->BackgroundImage->read(null,$id);
		 if($this->request->is('put')){
                     if($_FILES['filename']['name']) {
                            $this->unlink_thumbs(UPLOAD_BACKGROUNDIMG_DIR, 'BackgroundImage', 'image', array('id' => $id), array(), 'pet_background_img');
                            $config['upload_path'] = UPLOAD_BACKGROUNDIMG_DIR;
                            $config['allowed_types'] = 'gif|jpg|png|jpeg';
                            $config['max_size']	= 2165466;
                            $config['encrypt_name'] = true;

                            $this->Upload->initializes($config);

                            if ($this->Upload->do_upload('filename'))
                            {
                                    $imgdata_arr = $this->Upload->data();
                                    $this->request->data['BackgroundImage']['image'] = $imgdata_arr['file_name'];
                            }
                            else
                            {
                                    $errors[] = $this->Upload->display_errors();
                                    $error_flag = true;
                            }
                        }else{
                               $this->request->data['BackgroundImage']['image']=$this->request->data['BackgroundImage']['old_image'];
                        }
			 $this->request->data['BackgroundImage']['updated_date']=date('Y-m-d H:i:s');
			 if($this->BackgroundImage->save($this->request->data)){
                              if(!empty($_FILES['filename']['name']))
                                {
                                        $this->create_all_thumbs($imgdata_arr['file_name'], UPLOAD_BACKGROUNDIMG_DIR, 'BackgroundImage', 'image', array(), 'pet_background_img');
                                }
                              $this->Session->setFlash(__('Inventory updated successfully'),'default',array(),'success');
                              $this->redirect(array('action'=>'manage'));
			 }
		 }

                 }else   if($model=='EmployerLicence'){
		 $this->EmployerLicence->id=$id;
		 if(!$this->EmployerLicence->exists()){
			$this->Session->setFlash(__('Invalid id'),'default',array(),'error');
			$this->redirect(array('action'=>'manage'));
		 }
		 $rs=$this->EmployerLicence->read(null,$id);
		 if($this->request->is('put')){
                     
			 $this->request->data['EmployerLicence']['updated_date']=date('Y-m-d H:i:s');
			 if($this->EmployerLicence->save($this->request->data)){
                              
                              $this->Session->setFlash(__('Inventory updated successfully'),'default',array(),'success');
                              $this->redirect(array('action'=>'manage'));
			 }
		 }

                 }else   if($model=='BreedingRibbon'){
		 $this->BreedingRibbon->id=$id;
		 if(!$this->BreedingRibbon->exists()){
			$this->Session->setFlash(__('Invalid id'),'default',array(),'error');
			$this->redirect(array('action'=>'manage'));
		 }
		 $rs=$this->BreedingRibbon->read(null,$id);
		 if($this->request->is('put')){
			 if($this->BreedingRibbon->save($this->request->data)){
                              
                              $this->Session->setFlash(__('Inventory updated successfully'),'default',array(),'success');
                              $this->redirect(array('action'=>'manage'));
			 }
		 }

                 }else   if($model=='RetirementMedal'){
		 $this->RetirementMedal->id=$id;
		 if(!$this->RetirementMedal->exists()){
			$this->Session->setFlash(__('Invalid id'),'default',array(),'error');
			$this->redirect(array('action'=>'manage'));
		 }
		 $rs=$this->RetirementMedal->read(null,$id);
		 if($this->request->is('put')){
			 if($this->RetirementMedal->save($this->request->data)){

                              $this->Session->setFlash(__('Inventory updated successfully'),'default',array(),'success');
                              $this->redirect(array('action'=>'manage'));
			 }
		 }

                 }else   if($model=='KennelSpace'){
		 $this->KennelSpace->id=$id;
		 if(!$this->KennelSpace->exists()){
			$this->Session->setFlash(__('Invalid id'),'default',array(),'error');
			$this->redirect(array('action'=>'manage'));
		 }
		 $rs=$this->KennelSpace->read(null,$id);
		 if($this->request->is('put')){
			 if($this->KennelSpace->save($this->request->data)){

                              $this->Session->setFlash(__('Inventory updated successfully'),'default',array(),'success');
                              $this->redirect(array('action'=>'manage'));
			 }
		 }

                 }else   if($model=='EnergyBone'){
		 $this->EnergyBone->id=$id;
		 if(!$this->EnergyBone->exists()){
			$this->Session->setFlash(__('Invalid id'),'default',array(),'error');
			$this->redirect(array('action'=>'manage'));
		 }
		 $rs=$this->EnergyBone->read(null,$id);
		 if($this->request->is('put')){
			 if($this->EnergyBone->save($this->request->data)){

                              $this->Session->setFlash(__('Inventory updated successfully'),'default',array(),'success');
                              $this->redirect(array('action'=>'manage'));
			 }
		 }

                 }
		 $this->request->data=$rs;
		 $allBreeds=$this->Breed->find('all',array('conditions'=>array('Breed.status'=>'1'),'fields'=>array('Breed.id','Breed.name')));
		 $this->set('allBreeds',$allBreeds);
                  $this->set('ProductTypes',$this->ProductType->find('all'));
	 }
	 
	 /**
	 * Method Name : admin_delete
	 * Author Name : Naveen Joshi
	 * Date : 27 June 2015
	 * Description : delete pet 
	 */
	 
	 public function admin_delete($id=null,$prdId=null){
             $rs='';
             if($prdId=='1'){
		 $this->Pet->id=$id;
		 if(!$this->Pet->exists()){
			$this->Session->setFlash(__('Invalid id'),'default',array(),'error');
			$this->redirect(array('action'=>'manage')); 
		 }
                 $rs=$this->Pet->delete($id);
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
			  $this->Session->setFlash(__('Inventory deleted successfully'),'default',array(),'success');
			  $this->redirect(array('action'=>'manage'));
		 }
		 
		  $this->Session->setFlash(__('Inventory could not be deleted, please try again.'),'default',array(),'error');
		  $this->redirect(array('action'=>'manage'));
	 }
	 
	 
	 public function admin_product_fields($ProductType=null){
		$this->layout='ajax';
                $this->loadModel('PetColors');
                 $this->loadModel('ProductType');
                  $this->set('ProductTypes',$this->ProductType->find('all'));
		$allBreeds=$this->Breed->find('all',array('conditions'=>array('Breed.status'=>'1'),'fields'=>array('Breed.id','Breed.name')));
		$this->set('allBreeds',$allBreeds);
                //$this->set('PetColors',$this->PetColors->find('all'));
		$this->set('ProductType',$ProductType);
	 }


         function admin_get_breed_color($id){
             $this->layout='ajax';
             $this->loadModel('BreedImages');
             $PetColors=$this->BreedImages->find('all',array('conditions'=>array('BreedImages.breed_id'=>$id),'fields'=>array('BreedImages.color')));
              $rows="<option value=''>Select Colour</option>";
		if($PetColors){
			foreach($PetColors as $row){
				$rows.="<option value='".$row['BreedImages']['color']."'>".$row['BreedImages']['color']."</option>";

			}
		}
		echo $rows; die;
         }

    /**
	 * Method Name : shop
	 * Author Name : Naveen Joshi
	 * Date : 19 July 2015
	 * Description : to manage shop for front end
	 */
     function shop(){
         //echo '<pre/>';print_r($this->request->data); die;
         $this->layout='user';
         $userId=$this->Auth->user('id');
         $this->set('allBreeds',$this->Breed->find('all'));
         $this->set('allKennelSpaces',$this->KennelSpace->find('all',array('id','spaces')));
         $this->set('allEmployerLicences',$this->EmployerLicence->find('all'));
         $this->set('allEnergyBones',$this->EnergyBone->find('all'));
         $this->set('allRetirementMedals',$this->RetirementMedal->find('all'));
         $this->set('allBreedingRibbons',$this->BreedingRibbon->find('all'));
         $creditArr=$this->User->findById($userId,array('credits','kennel_spaces','energy_bones'));
         $credit=$creditArr['User']['credits'];
        
         if($this->request->is('post')){
             /*  Game Breed Buy start------->*/
            if($_POST['buy_game_breed']){
               $breedCost='300';
               if($credit>=$breedCost){
                   $credit=$credit-$breedCost;
                   $this->request->data['GameBreed']['cost']='300';
                   $this->request->data['GameBreed']['user_id']=$userId;
                   $this->request->data['GameBreed']['age']='0';
                   $this->request->data['GameBreed']['purchase_date']=date('Y-m-d H:i:s');
                   if($this->GameBreed->save($this->request->data)){
                       $this->User->id=$userId;
                       $this->User->saveField('credits',$credit);
                       $userUpdatedData=$this->User->findById($userId);
                       $this->Session->write('purchase','1');
                       $this->Auth->login($userUpdatedData['User']); //update session
                       $this->redirect(array('controller'=>'shop','action'=>'continue_to'));
                   }
               }else{
                     $this->Session->setFlash(__('Sorry you do not have enough credit left with you. '),'default',array('class'=>'success'));
                }
            }
             /*  Game Breed Buy end------->*/

            /*  Kennel space Buy start------->*/
            if($_POST['kennel_space']){
                $spaceArr=$this->KennelSpace->findById($this->request->data['UserKennelSpace']['kennel_space_id']);
                if($credit>=$spaceArr['KennelSpace']['cost']){
                     $credit=$credit-$spaceArr['KennelSpace']['cost'];
                     $data=array();
                     $data['UserKennelSpace']['kennel_space_id']=$this->request->data['UserKennelSpace']['kennel_space_id'];
                     $data['UserKennelSpace']['user_id']=$userId;
                     $data['UserKennelSpace']['spaces']=$spaceArr['KennelSpace']['spaces'];
                     $data['UserKennelSpace']['cost']=$spaceArr['KennelSpace']['cost'];
                     $data['UserKennelSpace']['purchase_date']=date('Y-m-d H:i:s');
                     if($this->UserKennelSpace->save($data)){
                         $AddedSpace=explode(' ',$spaceArr['KennelSpace']['spaces']);
                         $totalSpace=$creditArr['User']['kennel_spaces']+$AddedSpace[0];
                         $this->User->id=$userId;
                         $this->User->saveField('credits',$credit);    //update credits
                         $this->User->saveField('kennel_spaces',$totalSpace);  //update kennel space
                         $userUpdatedData=$this->User->findById($userId);
                         $this->Auth->login($userUpdatedData['User']); //update session data
                         $this->Session->setFlash(__('Congratulations !! '.$spaceArr['KennelSpace']['spaces'].' added to you kennel. now you have '.$totalSpace.' total kennel spaces.'),'default',array('class'=>'success'));
                     }
                }else{
                     $this->Session->setFlash(__('Sorry, You do not have enough credit left with you. '),'default',array('class'=>'success'));
                }
            }
             /*  Kennel space Buy end------->*/


            /* Emploer Licence buy starts-------*/
             if($_POST['buy_licences']){
                $employerLicenceArr=$this->EmployerLicence->findById($this->request->data['UserLicence']['employer_licence_id']);
                $creditsToBuy=$employerLicenceArr['EmployerLicence']['credits_to_buy'];
                if($credit>=$creditsToBuy){
                     $credit=$credit-$creditsToBuy;
                     $data=array();
                     $data['UserLicence']['employer_licence_id']=$this->request->data['UserLicence']['employer_licence_id'];
                     $data['UserLicence']['user_id']=$userId;
                     $data['UserLicence']['cost']=$creditsToBuy;
                     $data['UserLicence']['purchased_date']=date('Y-m-d H:i:s');
                     if($this->UserLicence->save($data)){
                         $this->User->id=$userId;
                         $this->User->saveField('credits',$credit);    //update credits
                         $userUpdatedData=$this->User->findById($userId);
                         $this->Auth->login($userUpdatedData['User']); //update session data
                         $this->Session->setFlash(__('Congratulations !! You have successfully purchased '.$employerLicenceArr['EmployerLicence']['title'].' Licence. Validity: '.$employerLicenceArr['EmployerLicence']['validity'].''),'default',array('class'=>'success'));
                     }
                }else{
                     $this->Session->setFlash(__('Sorry You do not have enough credit left with you. '),'default',array('class'=>'success'));
                }
             }

              /* Employer Licence buy ends-------*/

             /* Energy Bone buy starts-------*/
              if($_POST['energy_bone']){
                $EnergyBoneArr=$this->EnergyBone->findById($this->request->data['UserEnergyBone']['energy_bone_id']);
                $cost=$EnergyBoneArr['EnergyBone']['cost'];
                if($credit>=$cost){
                     $credit=$credit-$cost;
                     $data=array();
                     $data['UserEnergyBone']['energy_bone_id']=$this->request->data['UserEnergyBone']['energy_bone_id'];
                     $data['UserEnergyBone']['user_id']=$userId;
                     $data['UserEnergyBone']['cost']=$cost;
                     $data['UserEnergyBone']['purchased_date']=date('Y-m-d H:i:s');
                     if($this->UserEnergyBone->save($data)){
                         $this->User->id=$userId;
                         $this->User->saveField('credits',$credit);    //update credits
                         $this->User->saveField('energy_bones',$creditArr['User']['energy_bones']+1);    //update energy bones
                         $userUpdatedData=$this->User->findById($userId);
                         $this->Auth->login($userUpdatedData['User']); //update session data
                         $this->Session->setFlash(__('Congratulations !! You have successfully purchased energy bone'),'default',array('class'=>'success'));
                     }
                }else{
                     $this->Session->setFlash(__('Sorry You do not have enough credit left with you. '),'default',array('class'=>'success'));
                }
             }
              /* Energy Bone buy ends-------*/

             /* Retirement buy starts-------*/
              if($_POST['retirement_medal']){
                $RetirementMedalArr=$this->RetirementMedal->findById($this->request->data['UserRetirementMedal']['retirement_medal_id']);
                $creditsToBuy=$RetirementMedalArr['RetirementMedal']['credits_to_buy'];
                if($credit>=$creditsToBuy){
                     $credit=$credit-$creditsToBuy;
                     $data=array();
                     $data['UserRetirementMedal']['retirement_medal_id']=$this->request->data['UserRetirementMedal']['retirement_medal_id'];
                     $data['UserRetirementMedal']['user_id']=$userId;
                     $data['UserRetirementMedal']['cost']=$creditsToBuy;
                     $data['UserRetirementMedal']['purchased_date']=date('Y-m-d H:i:s');
                     if($this->UserRetirementMedal->save($data)){
                         $this->User->id=$userId;
                         $this->User->saveField('credits',$credit);    //update credits
                         $userUpdatedData=$this->User->findById($userId);
                         $this->Auth->login($userUpdatedData['User']); //update session data
                         $this->Session->setFlash(__('Congratulations !! You have successfully purchased '.$RetirementMedalArr['RetirementMedal']['title'].' Retirement Medal. Expiration Date: '.$RetirementMedalArr['RetirementMedal']['expiration_date'].''),'default',array('class'=>'success'));
                     }
                }else{
                     $this->Session->setFlash(__('Sorry You do not have enough credit left with you. '),'default',array('class'=>'success'));
                }
             }
              /* Retirement medal buy ends-------*/
         }
     }

      /**
	 * Method Name : continue_to
	 * Author Name : Naveen Joshi
	 * Date : 19 july June 2015
	 * Description : this will redirect to paypal later
	 */


     function continue_to(){
        $this->layout='user';
        $this->Session->write('purchase','1');
     }


      /**
	 * Method Name : kennel_space_prices
	 * Author Name : Naveen Joshi
	 * Date :y19 julu 2015
	 * Description : to get kennel space prices
	 */

     function kennel_space_prices($id=null){
        $this->layout='ajax';
        $kennelSpaceArr=$this->KennelSpace->findById($id);
        echo $kennelSpaceArr['KennelSpace']['spaces'].' '.'for'.' '.'$'.' '.$kennelSpaceArr['KennelSpace']['cost'];
        die;
     }

    /**
	 * Method Name : employer_licence_prices
	 * Author Name : Naveen Joshi
	 * Date :y19 julu 2015
	 * Description : to get employer licence prices
	 */
     function employer_licence_prices($id=null){
        $this->layout='ajax';
        $EmpLicenceArr=$this->EmployerLicence->findById($id);
        echo 'Minimum credits to buy: '.$EmpLicenceArr['EmployerLicence']['credits_to_buy'].'<br>'.'Validity: '.$EmpLicenceArr['EmployerLicence']['validity'];
        die;
     }

     /**
	 * Method Name : energybone_prices
	 * Author Name : Naveen Joshi
	 * Date :19 july 2015
	 * Description : to get energy bone prices
	 */

     function energybone_prices($id=null){
        $this->layout='ajax';
        $EnegyBoneArr=$this->EnergyBone->findById($id);
        echo 'Cost: $ '.$EnegyBoneArr['EnergyBone']['cost'];
        die;
     }

     /**
	 * Method Name : retirement_medal_prices
	 * Author Name : Naveen Joshi
	 * Date :19 july 2015
	 * Description : to get retirement medal prices
	 */

     function retirement_medal_prices($id=null){
        $this->layout='ajax';
        $RetirementMedalArr=$this->RetirementMedal->findById($id);
        echo 'Minimum credits to buy: '.$RetirementMedalArr['RetirementMedal']['credits_to_buy'].'<br>'.'Expiration Date: '.$RetirementMedalArr['RetirementMedal']['expiration_date'];
        die;
     }
  
}

	