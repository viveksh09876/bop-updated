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
	public $uses = array('User','Job','AppliedJob', 'UserLicence','GameBreed', 'DogSkill');
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
//		    $employerLicenceArr = $this->EmployerLicence->findById($this->request->data['UserLicence']['employer_licence_id']);
            	    
            
                    $this->Session->setFlash(__('Job has been successfully posted. '),'default',array('class'=>'success'));
               }else{
            
            
                   $this->Session->setFlash(__('Job could not be posted. '),'default',array('class'=>'error'));
               }
                
            }
            $optionsenergy = $this->GameBreed->find('all', array('conditions' => array('GameBreed.user_id' => $this->Auth->user('id'))));
            
            
            $optionse = "";
            $i=0;
            foreach ($optionsenergy as $optin){
                $optionse .= "<option value='{$optin['GameBreed']['id']}' >{$optin['GameBreed']['name']}</option>";
            }
            
            $this->set('allEnergyBones', $optionse);
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

        private function isCompleted($dogSkills, $skills){
        	$isCompleted = false;
        	if(count($dogSkills) > 0){
        		foreach ($skills as $skill) {
        			if($dogSkills['DogSkill'][$skill] >= 100){
        				$isCompleted = true;
        			}
        			else{
        				$isCompleted = false;
        				break;
        			}
        		}
        	}
        	return $isCompleted;
        }

        private function isConfirmationCompleted($dogSkills){
        	$isCompleted = false;
        	$skills = array(
        		'stacking', 'gait', 'table_exam', 
        		'free_stacking', 'hand_stacking', 
        		'handling'
    		);
        	return $this->isCompleted($dogSkills, $skills);
        }

        private function isAgilityCompleted($dogSkills){
        	$isCompleted = false;
        	$skills = array(
        		'dog_walk', 'a_frame', 'seesaw', 
        		'pause_table', 'weave_poles', 
        		'open_tunnel', 'closed_tunnel', 'bar_jump',
        		'panel_jump', 'broad_jump_agility',
    		);
        	return $this->isCompleted($dogSkills, $skills);
        }

        private function isObedienceCompleted($dogSkills){
        	$isCompleted = false;
        	$skills = array(
        		'heal_on_lease', 'figure_eight', 'stand_for_exam', 
        		'recall', 'long_sit', 'drop_on_recall', 'retrieve_over_high_jump',
        		'broad_jump', 'single_exercise', 'scene_descrimination_1', 
        		'scene_descrimination_2', 'direct_retrieve', 'moving_stand_and_exam',
        		'direct_jump'
    		);
        	return $this->isCompleted($dogSkills, $skills);
        }

        private function isRallyCompleted($dogSkills){
        	$isCompleted = false;
        	$skills = array(
        		'sit', 'down', 'right_turn', 'left_turn', 'about_u_turn', '270_right', 
        		'270_left', '360_left', '360_right', 'all_front_finish_right_forward', 
        		'call_front_finish_left_forward', 'call_front_finish_right_halt',
        		'call_front_finish_left_halt', 'slow_pace', 'fast_pace', 'normal_pace', 
        		'moving_side_step_right', 'spiral_right_dog_outside', 'spiral_left_dog_inside',
        		'straight_figure_eight_weave', 'serpentine_weave', '1_step_front', '2_step_front',
        		'3_step_front', '1_step_back', '2_step_back', '3_step_back', 'halt', 'down_and_stop',
        		'walk_around_dog', 'pivat_right', 'heal', 'stand', 'stand_sit', 'stand_down', 
        		'call_rally', 'jump'
    		);
        	return $this->isCompleted($dogSkills, $skills);
        }

        private function isJobCompleted($appliedJob){
        	$categories = explode(',', $appliedJob['Job']['categories']);
        	$isCompleted = array();
        	$isDone = false;
        	$this->GameBreed->recursive = '2';
            $gamebreed = $this->GameBreed->findById($appliedJob['Job']['game_breed_id']);

        	foreach ($categories as $category) {
        		$dogSkill = $this->DogSkill->findByGameBreedIdAndCategory($gamebreed['GameBreed']['id'], $category);
        		$isCompleted[$category] = false;
        		switch ($category) 
        		{
        			case 'confirmation':
    					$isCompleted[$category] = $this->isConfirmationCompleted($dogSkill);
    				break;
        			
        			case 'agility':
        				$isCompleted[$category] = $this->isAgilityCompleted($dogSkill);
    				break;

    				case 'obedience':
    					$isCompleted[$category] = $this->isObedienceCompleted($dogSkill);
    				break;

    				case 'rally':
    					$isCompleted[$category] = $this->isRallyCompleted($dogSkill);
    				break;	

        			default:
        				# code...
    				break;
        		}
        	}

        	foreach ($isCompleted as $category => $isTrue){
        		if($isTrue){
        			$isDone = true;
        		}
        		else{
        			$isDone = false;
        			break;
        		}
        	}

        	return $isDone;
        }
        
        function getappliedjobs() {
        $applied_jobs = $this->AppliedJob->find('all', array('conditions' => array('AppliedJob.applied_by' => $this->Auth->user('id'))));
        $i = 1;

        $data = '{
              "data": [';
        foreach ($applied_jobs as $aj) {
        	$categories = $aj['Job']['categories'];
        	$markComplete = "";
        	if ($aj['AppliedJob']['status'] == 'Accepted')
        	{
        		$cats = explode(',', $categories);
        		$categories = '';
        		$i = 1;
        		foreach ($cats as $category){
        			$categories .= "<a href='".$this->webroot.'kennels/training/'.$category.'/'.$aj["Job"]["game_breed_id"]."'>".$category."</a>";
        			if($i < count($cats)){
        				$categories .= ',';
        			}
        		}
        		if ($this->isJobCompleted($aj)){
        			$markComplete = "<a class='btn btn-success btn-sm' href='".$this->webroot."jobs/applied_job_status/".$aj['AppliedJob']['id']."/".$aj["Job"]["id"]."/Completed'>Mark as Completed</a>";
        		}
        		else{
        			$aj['AppliedJob']['status'] = 'In Progress';
        		}
        	}
            $data .= '[
                  "' . $aj['Job']['id'] . '",
                  "' . $aj['Job']['amount_of_training'] . '",
                  "' . $categories . '",
                  "$' . $aj['Job']['salary'] . '",
                  "'. $aj['AppliedJob']['status'] .'",
                  "'. $markComplete.'"
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

	