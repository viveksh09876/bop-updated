<?php
App::uses('Controller', 'Controller');

/**
 * Tutorials Controller
 *
 * Purpose : Manage Tutorials
 * @project Crossfit
 * @since 25 June, 2014
 * @version Cake Php 2.3.8
 * @author : Vivek Sharma
 */
class KennelsController extends AppController
{
    public $layout='user';
    public $uses=array('GameBreed','User','Breed','DogSkill');
    function beforeFilter(){
       parent::beforeFilter();
    }
 /**
	 * Method Name :index
	 * Author Name : Naveen Joshi
	 * Date : 19 July 2015
	 * Description : kennel index page
	 */
    public function index(){
        if($this->Session->read('purchase')){
            $this->Session->setFlash(__('Congratulations !! a new game breed has been added to your kennel.'),'default',array('class'=>'success'));
        }
        $this->Session->delete('purchase');
        $kennelData=$this->User->findById($this->Auth->user('id'),array('kennel_banner','kennel_desc'));
        $this->set('kennelData',$kennelData);
       
    }
     /**
	 * Method Name : purchased dogs
	 * Author Name : Naveen Joshi
	 * Date : 19 July 2015
	 * Description : to list purchased dog by player
	 */
    function purchased_dogs(){
         $allGameBreedDogs=$this->GameBreed->find('all',array('conditions'=>array('GameBreed.user_id'=>$this->Auth->user('id'),'GameBreed.gender'=>'Dog')));
        $i=1;
        
         $dataDog='{
              "data": [';
             foreach($allGameBreedDogs as $brd){
               $dataDog .= '[
                  "'.$i.'",
                  "'.$brd['GameBreed']['name'].'",
                  "'.$brd['GameBreed']['age'].' day(s)",
                  "'.$brd['Breed']['name'].'",
                  "<a href=kennels/dog/'.$brd['GameBreed']['id'].'>View Info</a>"
                             ]';
             if($i<count($allGameBreedDogs)){  $dataDog .= ',';}
            $i++; }
             $dataDog .= ']}';

        
                
        echo $dataDog;
        die;
    }

     function purchased_bitches(){
         $allGameBreedBitch=$this->GameBreed->find('all',array('conditions'=>array('GameBreed.user_id'=>$this->Auth->user('id'),'GameBreed.gender'=>'Bitch')));
        $i=1;

         $dataBitch='{
              "data": [';
             foreach($allGameBreedBitch as $brd){
               $dataBitch .= '[
                  "'.$i.'",
                  "'.$brd['GameBreed']['name'].'",
                  "'.$brd['GameBreed']['age'].' day(s)",
                  "'.$brd['Breed']['name'].'",
                  "<a href=kennels/dog/'.$brd['GameBreed']['id'].'>View Info</a>"
                             ]';
             if($i<count($allGameBreedBitch)){  $dataBitch .= ',';}
            $i++; }
             $dataBitch .= ']}';



        echo $dataBitch;
        die;
    }

     /**
	 * Method Name : dog
	 * Author Name : Naveen Joshi
	 * Date : 19 July 2015
	 * Description : to list dog's statics
	 */
    function dog($gbId){
        $this->layout='user';
        if($gbId){
            $this->GameBreed->recursive='2';
            $this->Breed->bindModel(array('hasMany' => array('BreedImages')));
            $gamebreed=$this->GameBreed->findById($gbId);
            $this->set('breed',$gamebreed);
        }
    }
    
     /**
	 * Method Name : Settings
	 * Author Name : Naveen Joshi
	 * Date : 26 July 2015
	 * Description : kennel settings
	 */
    function settings(){
        $this->layout='user';
        //echo '<pre/>'; print_r($_FILES['filename']['name']); die;
        $id=$this->Auth->user('id');
         if($this->request->is('put') || $this->request->is('post')){
             $userArr=array();
             if($_FILES['filename']['name']) {
                    $this->unlink_thumbs(UPLOAD_KENNELBANNER_DIR, 'User', 'kennel_banner', array('id' => $id), array(), 'kennel_banners');
                    $config['upload_path'] = UPLOAD_KENNELBANNER_DIR;
                    $config['allowed_types'] = 'gif|jpg|png|jpeg';
                    $config['max_size']	= 2165466;
                    $config['encrypt_name'] = true;

                    $this->Upload->initializes($config);

                    if ($this->Upload->do_upload('filename'))
                    {//echo '<pre/>'; print_r($_FILES['filename']['name']); die;
                            $imgdata_arr = $this->Upload->data();
                            $userArr['User']['kennel_banner'] = $imgdata_arr['file_name'];
                    }
                    else
                    {
                            $errors[] = $this->Upload->display_errors();
                            $error_flag = true;
                    }
                }else{
                       $userArr['User']['kennel_banner']=$this->request->data['User']['old_image'];
                }
                
                if($this->request->data['User']['password']){
                   $passArr=$this->User->findById($id,array('password'));
                   $newPass=$this->Auth->password($this->request->data['User']['password']);
                   if($passArr['User']['password']==$newPass){
                        $userArr['User']['password']=$this->Auth->password($newPass);
                   }else{
                       $this->Session->setFlash(__('Old password is incorrect'),'default',array('class'=>'error'));
                       $this->redirect(array('action'=>'settings'));
                   }
                }
                $userArr['User']['kennel_desc']=$this->request->data['User']['kennel_desc'];
                $userArr['User']['kennel_name']=$this->request->data['User']['kennel_name'];
                $this->User->id=$id;
                if($this->User->save($userArr,false)){
                     //echo '<pre/>'; print_r($updatedData);
                      if(!empty($_FILES['filename']['name']))
                        {
                                $this->create_all_thumbs($imgdata_arr['file_name'], UPLOAD_KENNELBANNER_DIR, 'User', 'kennel_banner', array(), 'kennel_banners');
                        }
                      $this->Session->setFlash(__('Information updated successfully'),'default',array('class'=>'success'));
                       
                 }else{
                     $this->Session->setFlash(__('Information not updated successfully'),'default',array('class'=>'error'));
                 }
        
        
        
    }
        $rs=$this->User->read(null,$id);
        $this->request->data=$rs;

   }
   
   
   function training($category,$gameBreedId){
      $this->layout='user';
        if($gameBreedId){
            $this->GameBreed->recursive='2';
            $this->Breed->bindModel(array('hasMany' => array('BreedImages')));
            $gamebreed=$this->GameBreed->findById($gameBreedId);
            $this->set('breed',$gamebreed);
            //echo '<pre/>'; print_r();
            $this->set('dogSkills',$this->DogSkill->findByGameBreedIdAndCategory($gameBreedId,$category));
        }else{
            $this->Session->setFlash(__('Invalid Page'),'default',array('class'=>'error'));
        }
   }
   
   function train_now($dogSkillId,$param,$gameBreedId,$category){
       if($dogSkillId && $param){
           $totalVal=$this->DogSkill->findById($dogSkillId,array($param));    /*$param holds all training parameters under confirmation, agility , rally */
           $gameBreedInfo=$this->GameBreed->findById($gameBreedId,array($category,'energy'));
           if(($totalVal['DogSkill'][$param]!='100') && ($gameBreedInfo['GameBreed']['energy'] !=0)){                          /** *$category holds confirmation, agility, rally, obedience. */
               $skill_increase = rand(1, 5);
               $energy_decrease = rand(5, 25);   
               if(($totalVal['DogSkill'][$param]+$skill_increase)>=100){
                   $totalVal['DogSkill'][$param]=100;
               }else{
                   $totalVal['DogSkill'][$param]=$totalVal['DogSkill'][$param]+$skill_increase;
               }
               $this->DogSkill->id=$dogSkillId;
               $this->DogSkill->saveField($param,$totalVal['DogSkill'][$param]);
               $this->DogSkill->saveField('trainer_id',$this->Auth->user('id'));
               
              
               if(($gameBreedInfo['GameBreed']['energy'] !=0) ){
                      $dog_skill_level=$gameBreedInfo['GameBreed'][$category];
                      $dog_energy=$gameBreedInfo['GameBreed']['energy'];
                      

                      if($dog_skill_level + $skill_increase >= 100)  {
                        $skill_increase = 100;
                      }else  {
                        $skill_increase = $dog_skill_level + $skill_increase;
                      }
                      
                      if($dog_energy == 0) {
                    //do nothing
                      }elseif($dog_energy <= $energy_decrease)  {
                        $dog_energy=0;
                      }else  {
                        $dog_energy=$dog_energy-$energy_decrease;
                      }
                   $this->GameBreed->id=$gameBreedId;
                   $gmBd=array(
                       'GameBreed'=>array(
                           $category=>$skill_increase,
                           'energy'=>$dog_energy
                       )
                   );
                   //$this->DogSkill->saveField($category,$gameBreedInfo['GameBreed'][$category]+2);
                    $this->GameBreed->save($gmBd,false);
               }
           }else{
               $this->Session->setFlash(__('Energy has been exhosted.Energy will be refreshed at 12pm game time or visit shop to buy enegry bone to refill energy.'),'default',array('class'=>'error')); 
           }
       }
       $this->redirect($this->referer());
   }
}

?>
