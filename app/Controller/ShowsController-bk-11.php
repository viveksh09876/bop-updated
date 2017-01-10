<?php 

App::uses('Controller', 'Controller');

/**
 * Shop Controller
 *
 * Purpose : Manage Show
 * @project Best of Pedigree
 * @since 6 July, 2015
 * @version Cake Php 2.3.8
 * @author : Naveen Joshi
 */
class ShowsController extends AppController 
{
	public $uses = array('Show','Breed','ShowEntry','User','ShowWinner');
	public function beforeFilter() {
		$this->Auth->allow(array('breed_competition','save_winners','get_winners'));
		parent::beforeFilter();
	}
	
	
	/**
	 * Method Name : admin_manage	 
	 * Author Name : Naveen Joshi
	 * Date : 6 July 2015
	 * Description : manage shows
	 */
	public function admin_manage() {
		$cond=array();

		if($this->request->query['keyword']){
		    $keyword=$this->request->query['keyword'];
	            $cond['OR']=array('Show.title Like'=>'%'.$keyword.'%','Show.entry_fees Like'=>'%'.$keyword.'%');
		}
		$this->paginate=array('conditions'=>$cond,
		                       'order' => 'Show.id desc',
			                    'limit' => ADMIN_PAGE_LIMIT);
								
		$this->set('Shows',$this->paginate('Show'));
	}
	
	/**
	 * Method Name : admin_add
	 * Author Name : Naveen Joshi
	 * Date : 6 July 2015
	 * Description : add show
	 */
	 
	 public function admin_add(){
		 $errors = array();
	         $add_errors = array();
		 $error_flag = false;
                // echo '<pre/>'; print_r($this->request->data);
		 if($this->request->is('post')){
                     if(!empty($_FILES['filename']['name']))
                    { 
                            $config['upload_path'] = UPLOAD_SHOW_DIR;
                            $config['allowed_types'] = 'gif|jpg|png|jpeg';
                            $config['max_size']	= 2165466;;
                            $config['encrypt_name'] = true;

                            $this->Upload->initializes($config);

                            if ($this->Upload->do_upload('filename'))
                            {
                                    $imgdata_arr = $this->Upload->data();
                                    $this->request->data['Show']['image'] = $imgdata_arr['file_name'];
                            }
                            else
                            {
                                    $errors[] = $this->Upload->display_errors();
                                    $error_flag = true;
                            }
                    }
                        
			 $this->request->data['Show']['added_date']=date('Y-m-d H:i:s');
                         $this->request->data['Show']['breed_id']=implode(',', $this->request->data['Show']['breed_id']);
			 if($this->Show->save($this->request->data)){
                             if(!empty($_FILES['filename']['name']) && $error_flag==false)
                                {
                                        $this->create_all_thumbs($imgdata_arr['file_name'], UPLOAD_SHOW_DIR, 'Show', 'image', array(), 'shows');
                                }
				 $this->Session->setFlash(__('Show added successfully'),'default',array(),'success');
				 $this->redirect(array('action'=>'manage'));
			 }
		 }

                 $this->set('Breeds',$this->Breed->find('all',array('fields'=>array('id','name'))));
	 }
	 
	 /**
	 * Method Name : admin_edit
	 * Author Name : Naveen Joshi
	 * Date : 7 July 2015
	 * Description : edit show
	 */
	 
	 public function admin_edit($id=null){
		 $this->Show->id=$id;
		 if(!$this->Show->exists()){
			$this->Session->setFlash(__('Invalid id'),'default',array(),'error');
			$this->redirect(array('action'=>'manage')); 
		 }
		 $rs=$this->Show->read(null,$id);
		 if($this->request->is('put')){
			 
			
                     if($_FILES['filename']['name']) { 
                            $this->unlink_thumbs(UPLOAD_SHOW_DIR, 'Show', 'image', array('id' => $id), array(), 'shows');
                            $config['upload_path'] = UPLOAD_SHOW_DIR;
                            $config['allowed_types'] = 'gif|jpg|png|jpeg';
                            $config['max_size']	= 2165466;
                            $config['encrypt_name'] = true;

                            $this->Upload->initializes($config);

                            if ($this->Upload->do_upload('filename'))
                            {
                                    $imgdata_arr = $this->Upload->data();
                                    $this->request->data['Show']['image'] = $imgdata_arr['file_name'];
                            }
                            else
                            {
                                    $errors[] = $this->Upload->display_errors();
                                    $error_flag = true;
                            }
                        }else{
                               $this->request->data['Show']['image']=$this->request->data['Show']['old_image'];
                        }
			 //$this->request->data['Shop']['updated_date']=date('Y-m-d H:i:s');
                         $this->request->data['Show']['breed_id']=implode(',', $this->request->data['Show']['breed_id']);
			 if($this->Show->save($this->request->data)){
                              if(!empty($_FILES['filename']['name']))
                                {
                                        $this->create_all_thumbs($imgdata_arr['file_name'], UPLOAD_SHOW_DIR, 'Show', 'image', array(), 'shows');
                                }
                              $this->Session->setFlash(__('show updated successfully'),'default',array(),'success');
                              $this->redirect(array('action'=>'manage'));
			 }
		 }
                 $this->set('Breeds',$this->Breed->find('all',array('fields'=>array('id','name'))));
		 $this->request->data=$rs;
	 }



         /**
	 * Method Name : admin_view
	 * Author Name : Naveen Joshi
	 * Date : 7 July 2015
	 * Description : Admin view
	 */


         function admin_view($id=null){
              $this->Show->id=$id;
                 if(!$this->Show->exists()){
                        $this->Session->setFlash(__('Invalid id'),'default',array(),'error');
                        $this->redirect(array('action'=>'manage'));
                 }
                 $this->set('show',$this->Show->findById($id));
         }
	 
	 /**
	 * Method Name : admin_delete
	 * Author Name : Naveen Joshi
	 * Date : 7 July 2015
	 * Description : delete show
	 */
	 
	 public function admin_delete($id=null){
		 $this->Show->id=$id;
		 if(!$this->Show->exists()){
			$this->Session->setFlash(__('Invalid id'),'default',array(),'error');
			$this->redirect(array('action'=>'manage')); 
		 }
		 if($this->Show->delete($id)){
                      $this->unlink_thumbs(UPLOAD_SHOW_DIR, 'Show', 'image', array('id' => $id), array(), 'shows');
                      $this->Session->setFlash(__('Show deleted successfully'),'default',array(),'success');
                      $this->redirect(array('action'=>'manage'));
		 }
		 
		  $this->Session->setFlash(__('Show could not be deleted, please try again.'),'default',array(),'error');
		  $this->redirect(array('action'=>'manage'));
	 }
         
         
     public function index(){
             $this->loadModel('GameBreed');
             $this->layout='user';
             $userId=$this->Auth->user('id');
             $credits=$this->Auth->user('credits');
             
             $this->set('allShows',$this->Show->find('all'));
             $this->set('allDogs',$this->GameBreed->find('all',array('conditions'=>array('GameBreed.user_id'=>$userId))));
             if($this->request->is('ajax')){
                 $this->layout='ajax';
                 $this->ShowEntry->set($this->request->data);
                 $this->request->data['ShowEntry']['user_id']=$userId;
                 $this->request->data['ShowEntry']['date']=date('Y-m-d H:i:s');
                 if($this->ShowEntry->validates(array('fieldList'=>array('game_breed_id')))){
                     $showArr=$this->Show->findById($this->request->data['ShowEntry']['show_id'],array('entry_fees','start_date','end_date'));
                     $gameBreedArr=$this->GameBreed->findById($this->request->data['ShowEntry']['game_breed_id'],array('age'));
                     $breedAge=$gameBreedArr['GameBreed']['age'];
                     $this->request->data['ShowEntry']['age']=$breedAge;
                     $today=date('Y-m-d H:i:s');
                     if(strtotime($today) < strtotime($showArr['Show']['start_date'])){
                     if($credits >= $showArr['Show']['entry_fees']){
                         $credits=$credits-$showArr['Show']['entry_fees'];
                         $this->User->id=$userId;
                         $this->User->saveField('credits',$credits);
                          $this->Session->write('Auth.User.credits', $credits); 
                         if($this->ShowEntry->save($this->request->data)){
                             $msg='Dog has entered in the show, Thank you';
                             $st='1';
                         }
                     }else{
                        $msg='Sorry credit is not sufficient to enter into this show.';
                        $st='0';
                        }
                     }else{
                        $msg='Sorry show entries are closed now.';
                        $st='0';
                        }
                 }else{
                     $msg='Entry could not be saved.'; 
                     $st='0';
                 }
                 echo json_encode(array('message'=>$msg,'status'=>$st,'id'=>$this->request->data['ShowEntry']['show_id'])); die;
             }
             $showDogs=$this->ShowEntry->find('all',array('fields'=>array('ShowEntry.game_breed_id','ShowEntry.show_id'),'conditions'=>array('ShowEntry.user_id'=>$userId)));
             $allDogsByUser=array();
			 
			
			 
             if($showDogs){
                 foreach($showDogs as $dg){
                    $allDogsByUser[$dg['ShowEntry']['show_id']][]=$dg['ShowEntry']['game_breed_id']; 
                 }
             }
             //echo '<pre/>'; print_r($allDogsByUser); die;
             $this->set('allUserDogs',$allDogsByUser);
             
             }
             
             
             
             function participants($showId=null){
                 $this->layout='user';
                 //$this->ShowEntry->recursive="3";
                 $showArr=$this->ShowEntry->find('all',array('conditions'=>array('ShowEntry.show_id'=>$showId),'fields'=>array('GameBreed.*','Breed.name','BreedImage.filename','BreedImage.filename_adult','User.first_name','User.last_name'),'group'=>'GameBreed.id',
                     'joins'=>array(
                         array(
                             'table'=>'users',
                             'alias'=>'User',
                             'type'=>'left',
                             'conditions'=>array('ShowEntry.user_id=User.id')
                         ),
                         array(
                             'table'=>'game_breeds',
                             'alias'=>'GameBreed',
                             'type'=>'left',
                             'conditions'=>array('GameBreed.id=ShowEntry.game_breed_id','ShowEntry.show_id='.$showId.'')
                         ),
                         array(
                             'table'=>'breeds',
                             'alias'=>'Breed',
                             'type'=>'left',
                             'conditions'=>array('Breed.id=GameBreed.breed_id')
                         ),
                          array(
                             'table'=>'breed_images',
                             'alias'=>'BreedImage',
                             'type'=>'left',
                             'conditions'=>array('BreedImage.breed_id=Breed.id')
                         )
                     )));
                 //echo '<pre/>'; print_r($showArr); die;
                 $this->set('partipants',$showArr);
             }
             
             
    public function breed_competition(){
           
		$this->loadModel('ShowWinner');
        
		//Note:  taking age<=20 days as puppy
		
        $shows = $this->Show->find('all',array('Show.end_date' <= date('Y-m-d'),'Show.show_type'=>'confirmation', 'Show.status !=' => 2));
				 
		foreach($shows as $show) {
			
			 //calculate stats for each participant
			 $allentries = $this->ShowEntry->find('all', array('conditions' => array('ShowEntry.show_id' => $show['Show']['id'])));
			 
			 if(count($allentries) > 1) {
				 
				 foreach($allentries as $st) {
				 
					 $StatsSum = $st['GameBreed']['gen'] +
								 $st['GameBreed']['head'] + 
								 $st['GameBreed']['body'] + 
								 $st['GameBreed']['forequarters'] + 
								 $st['GameBreed']['hindquarters'] + 
								 $st['GameBreed']['coat'] + 
								 $st['GameBreed']['temperament'];
					 
					 $this->ShowEntry->id = $st['ShowEntry']['id'];
					 $this->ShowEntry->save(array('stat_sum' => $StatsSum));				 
				 }
				 
				 //Novice Entries
				 $allNoviceEntries = $this->ShowEntry->find('all',array('conditions'=>array('ShowEntry.category'=>'novice','ShowEntry.show_id'=>$show['Show']['id'])));
				 
				 if(count($allNoviceEntries) > 0) {
					 usort($allNoviceEntries, 'sortBySum');	
					$this->award_points($allNoviceEntries);
					$this->award_title($allNoviceEntries);
				 }
				 				 
				 
				 //Open Entries
				 $allOpenEntries = $this->ShowEntry->find('all',array('conditions'=>array('ShowEntry.category'=>'open','ShowEntry.show_id'=>$show['Show']['id'])));
				 
				 if(count($allOpenEntries) > 0) {
					usort($allOpenEntries, 'sortBySum');				 
					$this->award_points($allOpenEntries);
					$this->award_title($allOpenEntries);
				 }
				 
				 //Expert Entries
				 $allExpertEntries = $this->ShowEntry->find('all',array('conditions'=>array('ShowEntry.category'=>'expert','ShowEntry.show_id'=>$show['Show']['id'])));
				 
				 if(count($allExpertEntries) > 0) {
					usort($allExpertEntries, 'sortBySum');				 
					$this->award_points($allExpertEntries);
					$this->award_title($allExpertEntries);
				 }
				 
				 
				 $show_remarks = 'Results Generated';
				 
			 }else{
				 
				 $show_remarks = 'Show cancelled due to single or no entry';
				 
			 }

			$this->Show->id = $show['Show']['id'];
			$this->Show->save(array('status' => 2, 'remarks' => $show_remarks));	
			 
		}
				 
				 
				 
				 				 
				 
                 /*
                 $allNovicePuppies=$this->ShowEntry->find('all',array('conditions'=>array('ShowEntry.age <='=>'20','ShowEntry.category'=>'novice','ShowEntry.show_id'=>$show['Show']['id'])));
                 
                 if($allNovicePuppies){
                     $finalNoviceWinnerPuppies=$this->get_winners($allNovicePuppies);
                 }
                 
                 
                 $allOpenPuppies=$this->ShowEntry->find('all',array('conditions'=>array('ShowEntry.age <='=>'20','ShowEntry.category'=>'open','ShowEntry.show_id'=>$show['Show']['id'])));
                 if($allOpenPuppies){
                     $finalOpenWinnerPuppies=$this->get_winners($allOpenPuppies);
                 }
                 
                     
                 $allExpertPuppies=$this->ShowEntry->find('all',array('conditions'=>array('ShowEntry.age <='=>'20','ShowEntry.category'=>'expert','ShowEntry.show_id'=>$show['Show']['id'])));
                 if($allExpertPuppies){
                     $finalExpertWinnerPuppies=$this->get_winners($allExpertPuppies);
                 }
                 
                
                 
                 $allNoviceDogs=$this->ShowEntry->find('all',array('conditions'=>array('ShowEntry.age >'=>'20','ShowEntry.category'=>'novice','ShowEntry.show_id'=>$show['Show']['id'],'GameBreed.gender'=>'Dog')));
                 if($allNoviceDogs){
                     $finalNoviceWinnerDogs=$this->get_winners($allNoviceDogs);
                 }
                 
                 
                 $allOpenDogs=$this->ShowEntry->find('all',array('conditions'=>array('ShowEntry.age >'=>'20','ShowEntry.category'=>'open','ShowEntry.show_id'=>$show['Show']['id'],'GameBreed.gender'=>'Dog')));
                 if($allOpenDogs){
                     $finalOpenWinnerDogs=$this->get_winners($allOpenDogs);
                 }
                 
                
                 
                 $allExpertDogs=$this->ShowEntry->find('all',array('conditions'=>array('ShowEntry.age >'=>'20','ShowEntry.category'=>'expert','ShowEntry.show_id'=>$show['Show']['id'],'GameBreed.gender'=>'Dog')));
                 if($allExpertDogs){
                     $finalExpertWinnerDogs=$this->get_winners($allExpertDogs);
                 }
                 
                
                 $allNoviceBitches=$this->ShowEntry->find('all',array('conditions'=>array('ShowEntry.age >'=>'20','ShowEntry.category'=>'novice','ShowEntry.show_id'=>$show['Show']['id'],'GameBreed.gender'=>'Bitch')));
                 if($allNoviceBitches){
                     $finalNoviceWinnerBitches=$this->get_winners($allNoviceBitches);
                 }
                 
                 
                 $allOpenBitches=$this->ShowEntry->find('all',array('conditions'=>array('ShowEntry.age >'=>'20','ShowEntry.category'=>'open','ShowEntry.show_id'=>$show['Show']['id'],'GameBreed.gender'=>'Bitch')));
                 if($allOpenBitches){
                     $finalOpenWinnerBitches=$this->get_winners($allOpenBitches);
                 }
                 
                 
                 
                 $allExpertBitches=$this->ShowEntry->find('all',array('conditions'=>array('ShowEntry.age >'=>'20','ShowEntry.category'=>'expert','ShowEntry.show_id'=>$show['Show']['id'],'GameBreed.gender'=>'Bitch')));
                 if($allExpertBitches){
                     $finalExpertWinnerBitches=$this->get_winners($allExpertBitches);
                 }
                 */
                
                 die;
             }
             
    

	
		
	


	public function award_points($entries) {
		
		$count = count($entries);
		if($count > 1) {
			
			switch($count) {
				
				case 2	: $start_point = 1; break;
				case 3	: $start_point = 2; break;
				case 4	: $start_point = 3; break;
				case 5	: $start_point = 4; break;
				case 6	: $start_point = 5; break;
				default	: $start_point = 5; break;				
			}
			
			foreach($entries as $ent) {
				
				$this->ShowEntry->id = $ent['ShowEntry']['id'];
				$this->ShowEntry->save(array('points_awarded' => $start_point));
				
				$this->ShowEntry->bindModel(array(
										'belongsTo' => array(
											'User' => array('className' => 'User', 'foreignKey' => 'user_id')
										)
									));
									
				$showEntry = $this->ShowEntry->findById($ent['ShowEntry']['id']);
				
				$payout = $start_point*100;
				
				//Log entry to payoutsLog table
				$payoutArr = array(
								'show_id' 		=> $showEntry['ShowEntry']['show_id'],
								'show_entry_id'	=> $showEntry['ShowEntry']['id'],
								'points'		=> $start_point,
								'amount' 		=> $payout,
								'created'		=> date('Y-m-d H:i:s')
						);
				
				$this->loadModel('PayoutLog');
				$this->PayoutLog->create();
				$this->PayoutLog->save($payoutArr);
				
				
				$updated_funds = $showEntry['User']['funds'] + $payout;
				
				$this->User->id = $showEntry['User']['id'];
				$this->User->save(array('funds' => $updated_funds));
				
				$start_point--;
			}
			
			return; 
			
		}else{	
			
			if(isset($entries[0])) {
				//Not Qualified if only single entry in category
				$this->ShowEntry->id = $entries[0]['ShowEntry']['id'];
				$this->ShowEntry->save(array('remarks' => 'NQ'));
			}
			return;
		}		
	}	
	
	
	public function award_title($entries) {
		
		$breedsArr = $dogArr = $bitchArr = array();
		$j = 0;
				
		foreach($entries as $ent) {
			
			if($ent['GameBreed']['gender'] == 'Dog') {
				$dogArr[] = $ent;
			}else{
				$bitchArr[] = $ent;
			}
			
			$breedArr[$ent['ShowEntry']['game_breed_id']][$j] = $ent;
			$j++;
			
		}
		
		$titleWinners = array();
		$i = 0;
		
		//Best In Show
		$titleWinners[$i]['show_id'] = $entries[0]['ShowEntry']['show_id'];
		$titleWinners[$i]['show_entry_id'] = $entries[0]['ShowEntry']['id'];
		$titleWinners[$i]['title'] = 'Best in Show';
		$titleWinners[$i]['created'] = date('Y-m-d H:i:s');
		$i++;
		
		
		//winning Dog
		if(!empty($dogArr) && count($dogArr) > 1) {
			
			$titleWinners[$i]['show_id'] = $dogArr[0]['ShowEntry']['show_id'];
			$titleWinners[$i]['show_entry_id'] = $dogArr[0]['ShowEntry']['id'];
			$titleWinners[$i]['title'] = 'Winner Dog';
			$titleWinners[$i]['created'] = date('Y-m-d H:i:s');
			$i++;
		}
		
		//winning bitch
		if(!empty($bitchArr) && count($bitchArr) > 1) {
			
			$titleWinners[$i]['show_id'] = $bitchArr[0]['ShowEntry']['show_id'];
			$titleWinners[$i]['show_entry_id'] = $bitchArr[0]['ShowEntry']['id'];
			$titleWinners[$i]['title'] = 'Winner Bitch';
			$titleWinners[$i]['created'] = date('Y-m-d H:i:s');
			$i++;
		}
		
		$bread_already = array();
		
		//Best of breed
		foreach($breedArr as $breed) {
			
			if(count($breed) > 1) {
				foreach($breed as $ind => $ba) {
				
					//if($k == 0){
					if(!in_array($ba['ShowEntry']['game_breed_id'], $bread_already)) {
					
						$titleWinners[$i]['show_id'] = $ba['ShowEntry']['show_id'];
						$titleWinners[$i]['show_entry_id'] = $ba['ShowEntry']['id'];
						$titleWinners[$i]['title'] = 'Best of Breed';
						$titleWinners[$i]['created'] = date('Y-m-d H:i:s');
						$i++;
						$k++;
						$bread_already[] = $ba['ShowEntry']['game_breed_id'];
					}
				}
			}			
		}
		
		$this->ShowWinner->create();
		$this->ShowWinner->saveAll($titleWinners);
		return;
		
	}

	
	public function results($id = null) {
		
		if(!empty($id)) {
			
			$this->Show->recursive = 3;
			
			
			$this->Show->bindModel(array(
							'hasMany'  => array(
									'ShowWinner' => array('className' => 'ShowWinner', 'foreignKey' => 'show_id')
								)							
							));
			
			$this->ShowWinner->bindModel(array(
								'belongsTo' => array(
									'ShowEntry' => array('className' => 'ShowEntry', 'foreignKey' => 'show_entry_id')
								)						
							));
			
			$this->ShowEntry->bindModel(array(
								'belongsTo' => array(
									'User' => array('className' => 'User', 'foreignKey' => 'user_id')
								)						
							));
			
			$show = $this->Show->findById($id);	
			echo '<pre>'; print_r($show); die;	
			
		}
		
	}
	
	

	
	 function get_winners($competionArr){
		 $gameArr=array();
		 $StatsSum=0;
		 $Count=count($competionArr);
		 if($Count<=4){
			 foreach($competionArr as $st){
				 $StatsSum=(($st['GameBreed']['gen'])+($st['GameBreed']['head'])+($st['GameBreed']['body'])+($st['GameBreed']['forequarters'])+($st['GameBreed']['hindquarters']+($st['GameBreed']['coat']+($st['GameBreed']['temperament']))));
				 $gameArr[][$st['ShowEntry']['id']]=$StatsSum; //all stats sum , identify which show participant got which stat
			 }
			rsort($gameArr);
			$finalWinners=$gameArr;   //final  winner based on stat
			
	   }else{
		   foreach($competionArr as $st){
				 $StatsSum=(($st['GameBreed']['gen'])+($st['GameBreed']['head'])+($st['GameBreed']['body'])+($st['GameBreed']['forequarters'])+($st['GameBreed']['hindquarters']+($st['GameBreed']['coat']+($st['GameBreed']['temperament']))));
				 $gameArr[][$st['ShowEntry']['id']]=$StatsSum; //all stats sum , identify which show participant got which stat
			 }
			rsort($gameArr);
			$finalWinners=array_reverse(array_slice($gameArr, 0, 4));   //final four  winner based on stat
	   }
	   return $finalWinners ;
	   die;
	 }
             
	 function save_winners($winnerArr){
		 if($winnerArr){
			 
		 }
		 die;
	 }
	 
	 
	 
	 
  
}
	