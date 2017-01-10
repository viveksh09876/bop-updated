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
	
	public function beforeFilter() {
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
		 $allBreeds=$this->Breed->find('all',array('conditions'=>array('Breed.status'=>'1'),'fields'=>array('Breed.id','Breed.name')));
		 $this->set('allBreeds',$allBreeds);
		 if($this->request->is('post')){
			 $this->request->data['Shop']['added_date']=date('Y-m-d H:i:s');
			 if($this->Shop->save($this->request->data)){
				 $this->Session->setFlash(__('Pet added successfully'),'default',array(),'success');
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
		 $this->Shop->id=$id;
		 if(!$this->Shop->exists()){
			$this->Session->setFlash(__('Invalid id'),'default',array(),'error');
			$this->redirect(array('action'=>'manage')); 
		 }
		 $rs=$this->Shop->read(null,$id);
		 if($this->request->is('put')){
			 $this->request->data['Shop']['updated_date']=date('Y-m-d H:i:s');
			 if($this->Shop->save($this->request->data)){
				  $this->Session->setFlash(__('Pet updated successfully'),'default',array(),'success');
				  $this->redirect(array('action'=>'manage'));
			 }
		 }
		 $this->request->data=$rs;
		 $allBreeds=$this->Breed->find('all',array('conditions'=>array('Breed.status'=>'1'),'fields'=>array('Breed.id','Breed.name')));
		 $this->set('allBreeds',$allBreeds);
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
  
  
}
	