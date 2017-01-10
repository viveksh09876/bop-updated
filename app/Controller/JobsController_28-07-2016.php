<?php 

App::uses('Controller', 'Controller');

/**
 * Jobs Controller
 *
 * Purpose : Manage Job
 * @project Best of Pedigree
 * @since 2 August, 2015
 * @version Cake Php 2.3.8
 * @author : Naveen Joshi
 */
class JobsController extends AppController 
{
	public $uses = array('User','Job','AppliedJob', 'UserLicence');
        public $paginate=array('limit'=>'15');
        public $layout = 'front';
	public function beforeFilter() {
		//$this->Auth->allow(array('product_fields'));
		parent::beforeFilter();
	}
	
	
	/**
	 * Method Name : index	 
	 * Author Name : Naveen Joshi
	 * Date : 2 August, 2015
	 * Description : List all Jobs sent by users
	 */
        
        function index(){
$this->loadModel("ManageBanner");
$this->set("banners",$this->ManageBanner->find("first"));
            $this->paginate=array('conditions'=>array('Job.user_id !='=>$this->Auth->user('id')));
            $this->set('AllJobs',$this->paginate('Job'));
        }
        
        /**
	 * Method Name : index	 
	 * Author Name : Naveen Joshi
	 * Date : 2 August, 2015
	 * Description : List all Jobs sent by users
	 */
        
        function posted_jobs(){
            $this->Job->recursive='2';	            
	    $this->loadModel("ManageBanner");
	    $this->set("banners",$this->ManageBanner->find("first"));
            $this->paginate=array('conditions'=>array('Job.user_id'=>$this->Auth->user('id')));
            $this->set('MyPostedJobs',$this->paginate('Job'));
        }
        
        
        /**
	 * Method Name : post_job	 
	 * Author Name : Naveen Joshi
	 * Date : 2 August, 2015
	 * Description : post job
	 */
        
        function post_job(){ 
            $this->loadModel("ManageBanner");
	    $this->set("banners",$this->ManageBanner->find("first"));
            $this->loadModel('GameBreed');
            $usr_id = $this->Auth->user('id');		
               
		$conditions = array("UserLicence.user_id" => $usr_id);
		$empLicenseList = $this->UserLicence->find('all', array(
		 'limit' => 1,
		 'order' => array('UserLicence.id' => 'desc'),
		 'conditions' => $conditions
		));
		
		if(empty($empLicenseList)){
		//	$this->Session->setFlash(__('Please buy a license first!'),'default',array('class'=>'error'));
			$this->set('canBuy', 'false');
		}else{
			
		//$this->Session->setFlash(__('License: '. $empLicenseList[0]['UserLicence']['id'].' '.  print_r($empLicenseList)),'default',array('class'=>'error'));
			$date1=date_create($empLicenseList[0]['UserLicence']['purchased_date']);
			$date2=new DateTime();
			$diff=date_diff($date1,$date2);
			if($diff->days < 21){
				$this->set('canBuy', 'true');
			}else{
				$this->set('canBuy', 'false');
			}         
			//$this->Session->setFlash(__(''.$diff->days),'default',array('class'=>'error'));
		}
	       
            if($this->request->is('post')){

                $count=count($this->request->data['Job']['categories']);
                if($count){
                    for($i=0; $i<$count;$i++){
                        $catArr[]=$this->request->data['Job']['categories'][$i];
                    }
                }
               $this->request->data['Job']['categories']=implode(',',$catArr); 
               $this->request->data['Job']['user_id']=$this->Auth->user('id');
               $this->request->data['Job']['posted_date']=date('Y-m-d H:i:s');
               if($this->Job->save($this->request->data)){
		    $employerLicenceArr = $this->EmployerLicence->findById($this->request->data['UserLicence']['employer_licence_id']);
            	    
            
                    $this->Session->setFlash(__('Job has been successfully posted. '),'default',array('class'=>'success'));
               }else{
            
            
                   $this->Session->setFlash(__('Job could not be posted. '),'default',array('class'=>'error'));
               }
                
            }
            
            $this->set('GameBreed',$this->GameBreed->find('all',array('conditions'=>array('GameBreed.user_id'=>$this->Auth->user('id')))));
        }
        
        function apply($jobId=null){
           $this->Job->id=$jobId;
           
           if(!$this->Job->exists()){
               $this->Session->setFlash(__('Invalid Job'),'default',array('class'=>'error'));
               $this->redirect(array('action'=>'index'));
           }
           
           $alreadyApplied=$this->AppliedJob->findByJobIdAndAppliedBy($jobId,$this->Auth->user('id'));
           
           if($alreadyApplied){
              $this->Session->setFlash(__('Already Applied.'),'default',array('class'=>'error'));
              $this->redirect(array('action'=>'index')); 
           }
           
           $jobArr=array();
           $jobArr['AppliedJob']['job_id']=$jobId;
           $jobArr['AppliedJob']['applied_by']=$this->Auth->user('id');
           $jobArr['AppliedJob']['applied_date']=date('Y-m-d H:i:s');
           if($this->AppliedJob->save($jobArr)){
               $this->Session->setFlash(__('Successfully Applied. '),'default',array('class'=>'success'));
           }else{
               $this->Session->setFlash(__('Error occured, please try again later. '),'default',array('class'=>'error'));
           }
           
            $this->redirect(array('action'=>'index'));
           
        }
        
        function applied_job_status($id=null,$job_id=null,$status=null){
           $this->Job->id=$job_id;
           
           if(!$this->Job->exists()){
               $this->Session->setFlash(__('Invalid Job'),'default',array('class'=>'error'));
               $this->redirect(array('action'=>'posted_jobs'));
           }
           
           $this->AppliedJob->id=$id;
           
           
           if($this->AppliedJob->saveField('status',$status)){
               $this->Session->setFlash(__('Applicant '.$status.' Successfully. '),'default',array('class'=>'success'));
           }else{
               $this->Session->setFlash(__('Action could not be applied please try again later. '),'default',array('class'=>'error'));
           }
           
            $this->redirect(array('action'=>'posted_jobs'));
           
        }
        
        function applied_jobs(){
           $this->AppliedJob->recursive='2';
           $this->paginate=array('conditions'=>array('AppliedJob.applied_by'=>$this->Auth->user('id')));
            $this->set('AllJobs',$this->paginate('AppliedJob')); 
          // echo '<pre/>';
            //print_r($this->paginate('AppliedJob')); die;
        }
        
        function getappliedjobs() {
        $applied_jobs = $this->AppliedJob->find('all', array('conditions' => array('AppliedJob.applied_by' => $this->Auth->user('id'))));
        $i = 1;

        $data = '{
              "data": [';
        foreach ($applied_jobs as $aj) {

            $data .= '[
                  "' . $aj['Job']['id'] . '",
                  "' . $aj['Job']['amount_of_training'] . '",
                  "' . $aj['Job']['categories'] . '",
                  "$' . $aj['Job']['salary'] . '",
                  "'. $aj['AppliedJob']['status'] .'"
                             ]';
            if ($i < count($applied_jobs)) {
                $data .= ',';
            }
            $i++;
        }
        $data .= ']}';

        echo $data;
        die;
    }

function getalljobs() {
        $all_jobs = $this->Job->find('all', array('conditions' => array('Job.user_id !='=>$this->Auth->user('id'))));
        $i = 1;

        $data = '{
              "data": [';
        foreach ($all_jobs as $aj) {

            $data .= '[
                  "' . $aj['Job']['id'] . '",
                  "' . $aj['Job']['amount_of_training'] . '",
                  "' . $aj['Job']['categories'] . '",
                  "$' . $aj['Job']['salary'] . '",
                  "<a href='.$this->webroot.'jobs/apply/'.$aj['Job']['id'].' class=btn btn-primary>APPLY</a>"
                             ]';
            if ($i < count($all_jobs)) {
                $data .= ',';
            }
            $i++;
        }
        $data .= ']}';

        echo $data;
        die;
    }
	
}

	