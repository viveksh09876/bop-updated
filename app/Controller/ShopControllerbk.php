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
	public $uses = array('Breed','Shop');
	public $components  = array('Img');
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

		if($this->request->query['keyword']){
			$keyword=$this->request->query['keyword'];
			$cond['OR']=array('Shop.pet_type Like'=>'%'.$keyword.'%','Shop.cost Like'=>'%'.$keyword.'%');
		}
		$this->paginate=array('conditions'=>$cond,
		                       'order' => 'Shop.id desc',
			                    'limit' => ADMIN_PAGE_LIMIT);
								
		$this->set('shops',$this->paginate('Shop'));		
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
		 if($this->request->is('post')){//print_r($_FILES['img']['name']); die;
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
                                    $this->request->data['Shop']['image'] = $imgdata_arr['file_name'];
                            }
                            else
                            {
                                    $errors[] = $this->Upload->display_errors();
                                    $error_flag = true;
                            }
                    }
                        
			 $this->request->data['Shop']['added_date']=date('Y-m-d H:i:s');
                        
			 if($this->Shop->save($this->request->data)){
                             if(!empty($_FILES['filename']['name']) && $error_flag==false)
                                {
                                        $this->create_all_thumbs($imgdata_arr['file_name'], UPLOAD_BACKGROUNDIMG_DIR, 'Shop', 'image', array(), 'pet_background_img');
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
	 
	 public function admin_edit($id=null){
              $this->loadModel('ProductType');
               $this->loadModel('PetColors');
		 $this->Shop->id=$id;
		 if(!$this->Shop->exists()){
			$this->Session->setFlash(__('Invalid id'),'default',array(),'error');
			$this->redirect(array('action'=>'manage')); 
		 }
		 $rs=$this->Shop->read(null,$id);
		 if($this->request->is('put')){
                     if($_FILES['filename']['name']) { 
                            $this->unlink_thumbs(UPLOAD_BACKGROUNDIMG_DIR, 'Shop', 'image', array('id' => $id), array(), 'pet_background_img');
                            $config['upload_path'] = UPLOAD_BACKGROUNDIMG_DIR;
                            $config['allowed_types'] = 'gif|jpg|png|jpeg';
                            $config['max_size']	= 2165466;
                            $config['encrypt_name'] = true;

                            $this->Upload->initializes($config);

                            if ($this->Upload->do_upload('filename'))
                            {
                                    $imgdata_arr = $this->Upload->data();
                                    $this->request->data['Shop']['image'] = $imgdata_arr['file_name'];
                            }
                            else
                            {
                                    $errors[] = $this->Upload->display_errors();
                                    $error_flag = true;
                            }
                        }else{
                               $this->request->data['Shop']['image']=$this->request->data['Shop']['old_image'];
                        }
			 $this->request->data['Shop']['updated_date']=date('Y-m-d H:i:s');
			 if($this->Shop->save($this->request->data)){
                              if(!empty($_FILES['filename']['name']))
                                {
                                        $this->create_all_thumbs($imgdata_arr['file_name'], UPLOAD_BACKGROUNDIMG_DIR, 'Shop', 'image', array(), 'pet_background_img');
                                }
                              $this->Session->setFlash(__('Inventory updated successfully'),'default',array(),'success');
                              $this->redirect(array('action'=>'manage'));
			 }
		 }
		 $this->request->data=$rs;
		 $allBreeds=$this->Breed->find('all',array('conditions'=>array('Breed.status'=>'1'),'fields'=>array('Breed.id','Breed.name')));
		 $this->set('allBreeds',$allBreeds);
                  $this->set('ProductTypes',$this->ProductType->find('all'));
                 //$this->set('PetColors',$this->PetColors->find('all'));
	 }
	 
	 /**
	 * Method Name : admin_delete
	 * Author Name : Naveen Joshi
	 * Date : 27 June 2015
	 * Description : delete pet 
	 */
	 
	 public function admin_delete($id=null){
		 $this->Shop->id=$id;
		 if(!$this->Shop->exists()){
			$this->Session->setFlash(__('Invalid id'),'default',array(),'error');
			$this->redirect(array('action'=>'manage')); 
		 }
		 if($this->Shop->delete($id)){
			  $this->Session->setFlash(__('Pet deleted successfully'),'default',array(),'success');
			  $this->redirect(array('action'=>'manage'));
		 }
		 
		  $this->Session->setFlash(__('Pet could not be deleted, please try again.'),'default',array(),'error');
		  $this->redirect(array('action'=>'manage'));
	 }
	 
	 
	 public function admin_product_fields($ProductType){
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
  
  
}
	