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
class ShowsController extends AppController {

    public $uses = array('Show', 'Breed', 'ShowEntry', 'User', 'ShowWinner', 'Awards', 'UserAwards', 'Achievements', 'UserAchievements');

    public function beforeFilter() {
        $this->Auth->allow(array('breed_competition', 'save_winners', 'get_winners'));
        parent::beforeFilter();
    }

    /**
     * Method Name : admin_manage	 
     * Author Name : Naveen Joshi
     * Date : 6 July 2015
     * Description : manage shows
     */
    public function admin_manage() {
        $cond = array();

        if (isset($this->request->query['keyword'])) {
            $keyword = $this->request->query['keyword'];
            $cond['OR'] = array('Show.title Like' => '%' . $keyword . '%', 'Show.entry_fees Like' => '%' . $keyword . '%');
        }
        $this->paginate = array('conditions' => $cond,
            'order' => 'Show.id desc',
            'limit' => ADMIN_PAGE_LIMIT);

        $this->set('Shows', $this->paginate('Show'));
    }

    /**
     * Method Name : admin_add
     * Author Name : Naveen Joshi
     * Date : 6 July 2015
     * Description : add show
     */
    public function admin_add() {
        $errors = array();
        $add_errors = array();
        $error_flag = false;
        // echo '<pre/>'; print_r($this->request->data);
        if ($this->request->is('post')) {
            if (!empty($_FILES['filename']['name'])) {
                $config['upload_path'] = UPLOAD_SHOW_DIR;
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = 2165466;
                ;
                $config['encrypt_name'] = true;

                $this->Upload->initializes($config);

                if ($this->Upload->do_upload('filename')) {
                    $imgdata_arr = $this->Upload->data();
                    $this->request->data['Show']['image'] = $imgdata_arr['file_name'];
                } else {
                    $errors[] = $this->Upload->display_errors();
                    $error_flag = true;
                }
            }

            $this->request->data['Show']['added_date'] = date('Y-m-d H:i:s');
            $this->request->data['Show']['breed_id'] = implode(',', $this->request->data['Show']['breed_id']);
            if ($this->Show->save($this->request->data)) {
                if (!empty($_FILES['filename']['name']) && $error_flag == false) {
                    $this->create_all_thumbs($imgdata_arr['file_name'], UPLOAD_SHOW_DIR, 'Show', 'image', array(), 'shows');
                }
                $this->Session->setFlash(__('Show added successfully'), 'default', array(), 'success');
                $this->redirect(array('action' => 'manage'));
            }
        }

        $this->set('Breeds', $this->Breed->find('all', array('fields' => array('id', 'name'))));
    }

    /**
     * Method Name : admin_edit
     * Author Name : Naveen Joshi
     * Date : 7 July 2015
     * Description : edit show
     */
    public function admin_edit($id = null) {
        $this->Show->id = $id;
        if (!$this->Show->exists()) {
            $this->Session->setFlash(__('Invalid id'), 'default', array(), 'error');
            $this->redirect(array('action' => 'manage'));
        }
        $rs = $this->Show->read(null, $id);
        if ($this->request->is('put')) {


            if ($_FILES['filename']['name']) {
                $this->unlink_thumbs(UPLOAD_SHOW_DIR, 'Show', 'image', array('id' => $id), array(), 'shows');
                $config['upload_path'] = UPLOAD_SHOW_DIR;
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = 2165466;
                $config['encrypt_name'] = true;

                $this->Upload->initializes($config);

                if ($this->Upload->do_upload('filename')) {
                    $imgdata_arr = $this->Upload->data();
                    $this->request->data['Show']['image'] = $imgdata_arr['file_name'];
                } else {
                    $errors[] = $this->Upload->display_errors();
                    $error_flag = true;
                }
            } else {
                $this->request->data['Show']['image'] = $this->request->data['Show']['old_image'];
            }
            //$this->request->data['Shop']['updated_date']=date('Y-m-d H:i:s');
            $this->request->data['Show']['breed_id'] = implode(',', $this->request->data['Show']['breed_id']);
            if ($this->Show->save($this->request->data)) {
                if (!empty($_FILES['filename']['name'])) {
                    $this->create_all_thumbs($imgdata_arr['file_name'], UPLOAD_SHOW_DIR, 'Show', 'image', array(), 'shows');
                }
                $this->Session->setFlash(__('show updated successfully'), 'default', array(), 'success');
                $this->redirect(array('action' => 'manage'));
            }
        }
        $this->set('Breeds', $this->Breed->find('all', array('fields' => array('id', 'name'))));
        $this->request->data = $rs;
    }

    /**
     * Method Name : admin_view
     * Author Name : Naveen Joshi
     * Date : 7 July 2015
     * Description : Admin view
     */
    function admin_view($id = null) {
        $this->Show->id = $id;
        if (!$this->Show->exists()) {
            $this->Session->setFlash(__('Invalid id'), 'default', array(), 'error');
            $this->redirect(array('action' => 'manage'));
        }
        $this->set('show', $this->Show->findById($id));
    }

    /**
     * Method Name : admin_delete
     * Author Name : Naveen Joshi
     * Date : 7 July 2015
     * Description : delete show
     */
    public function admin_delete($id = null) {
        $this->Show->id = $id;
        if (!$this->Show->exists()) {
            $this->Session->setFlash(__('Invalid id'), 'default', array(), 'error');
            $this->redirect(array('action' => 'manage'));
        }
        if ($this->Show->delete($id)) {
            $this->unlink_thumbs(UPLOAD_SHOW_DIR, 'Show', 'image', array('id' => $id), array(), 'shows');
            $this->Session->setFlash(__('Show deleted successfully'), 'default', array(), 'success');
            $this->redirect(array('action' => 'manage'));
        }

        $this->Session->setFlash(__('Show could not be deleted, please try again.'), 'default', array(), 'error');
        $this->redirect(array('action' => 'manage'));
    }

    public function index() {

        $this->loadModel('GameBreed');
        $this->layout = 'front';
        $userId = $this->Auth->user('id');
        $credits = $this->Auth->user('credits');

        $this->loadModel("ManageBanner");
        $this->set("banners", $this->ManageBanner->find("first"));

        $this->set('allShows', $this->Show->find('all'));
        $this->set('allDogs', $this->GameBreed->find('all', array('conditions' => array('GameBreed.user_id' => $userId))));

        if ($this->request->is('ajax')) {
            $this->layout = 'ajax';
            $this->ShowEntry->set($this->request->data);
            $this->request->data['ShowEntry']['user_id'] = $userId;
            $this->request->data['ShowEntry']['date'] = date('Y-m-d H:i:s');
            if ($this->ShowEntry->validates(array('fieldList' => array('game_breed_id')))) {
                $showArr = $this->Show->findById($this->request->data['ShowEntry']['show_id']);
                $gameBreedArr = $this->GameBreed->findById($this->request->data['ShowEntry']['game_breed_id']);
                // , array('age')

                $status = false;
                if ($showArr['Show']['show_type'] == 'Best in Pedigree'){
                    if($gameBreedArr['GameBreed']['gen'] >= 90 && $gameBreedArr['GameBreed']['head'] >= 90 && $gameBreedArr['GameBreed']['body'] >= 90 && $gameBreedArr['GameBreed']['forequarters'] >= 90 && $gameBreedArr['GameBreed']['GameBreed']['coat'] >= 90 && $gameBreedArr['GameBreed']['hindquarters'] >= 90 && $gameBreedArr['GameBreed']['temperament'] >= 90 && $gameBreedArr['GameBreed']['heart'] >= 90 && $gameBreedArr['GameBreed']['hip'] >= 90 && $gameBreedArr['GameBreed']['eyes'] >= 90 && $gameBreedArr['GameBreed']['thyroid'] >= 90 && $gameBreedArr['GameBreed']['gen'] >= 90 && $gameBreedArr['GameBreed']['gen'] >= 90)
                    {
                        $status = true;
                    }
                }
                else{
                    $status = true;
                }
                if($status){
                    $breedAge = $gameBreedArr['GameBreed']['age'];
                    $this->request->data['ShowEntry']['age'] = $breedAge;
                    $today = date('Y-m-d H:i:s');
                    if (strtotime($today) < strtotime($showArr['Show']['start_date'])) {
                        if ($credits >= $showArr['Show']['entry_fees']) {
                            $credits = $credits - $showArr['Show']['entry_fees'];
                            $this->User->id = $userId;
                            $this->User->saveField('credits', $credits);
                            $this->Session->write('Auth.User.credits', $credits);
                            if ($this->ShowEntry->save($this->request->data)) {
                                $msg = 'Dog has entered in the show, Thank you';
                                $st = '1';
                            }
                        } else {
                            $msg = 'Sorry credit is not sufficient to enter into this show.';
                            $st = '0';
                        }
                    } else {
                        $msg = 'Sorry show entries are closed now.';
                        $st = '0';
                    }
                }else{
                    $msg = 'Must Meet Requirements.';
                    $st = '0';    
                }
            } else {
                $msg = 'Entry could not be saved.';
                $st = '0';
            }
            echo json_encode(array('message' => $msg, 'status' => $st, 'id' => $this->request->data['ShowEntry']['show_id']));
            die;
        }


        $showDogs = $this->ShowEntry->find('all', array('fields' => array('ShowEntry.game_breed_id', 'ShowEntry.show_id'), 'conditions' => array('ShowEntry.user_id' => $userId)));
        $allDogsByUser = array();

        if ($showDogs) {
            foreach ($showDogs as $dg) {
                $allDogsByUser[$dg['ShowEntry']['show_id']][] = $dg['ShowEntry']['game_breed_id'];
            }
        }

        $this->set('allUserDogs', $allDogsByUser);
    }

    function participants($showId = null) {
        $this->layout = 'user';
        //$this->ShowEntry->recursive="3";
        $showArr = $this->ShowEntry->find('all', array('conditions' => array('ShowEntry.show_id' => $showId), 'fields' => array('GameBreed.*', 'Breed.name', 'BreedImage.filename', 'BreedImage.filename_adult', 'User.first_name', 'User.last_name'), 'group' => 'GameBreed.id',
            'joins' => array(
                array(
                    'table' => 'users',
                    'alias' => 'User',
                    'type' => 'left',
                    'conditions' => array('ShowEntry.user_id=User.id')
                ),
                array(
                    'table' => 'game_breeds',
                    'alias' => 'GameBreed',
                    'type' => 'left',
                    'conditions' => array('GameBreed.id=ShowEntry.game_breed_id', 'ShowEntry.show_id=' . $showId . '')
                ),
                array(
                    'table' => 'breeds',
                    'alias' => 'Breed',
                    'type' => 'left',
                    'conditions' => array('Breed.id=GameBreed.breed_id')
                ),
                array(
                    'table' => 'breed_images',
                    'alias' => 'BreedImage',
                    'type' => 'left',
                    'conditions' => array('BreedImage.breed_id=Breed.id')
                )
        )));
        //echo '<pre/>'; print_r($showArr); die;
        $this->set('partipants', $showArr);
    }

    private function getAchivementId($title){
    	$this->loadModel('Achievements');
    	$ach = $this->Achievements->find('first',array(
    		'conditions'=> array(
    			'award_type'=>$this->WINNERS_ARRAY[$title]
			),
			'fields'=> array('id')
		));
		if (count($ach) > 0){
			return $ach['Achievements']['id'];
		}
		return;
    }

    private function getAward($title){
    	$this->loadModel('Awards');
    	$awd = $this->Awards->find('first',array(
    		'conditions'=> array(
    			'short_name'=>$title
			),
			'fields'=> array('id', 'short_name')
		));
		if (count($awd) > 0){
			return $awd['Awards'];
		}
		return;
    }

    private function addUserAwards($show){
    	$this->loadModel('Awards');
        $this->loadModel('ShowEntry');
        $this->loadModel('ShowWinner');
        $this->loadModel('UserAwards');

    	$awards = [''];
        $userId = $this->Auth->user('id');

        $curUserEntries = $this->ShowEntry->find('all', array(
            'conditions' => array(
            	'ShowEntry.show_id' => $show['Show']['id'],
            	'ShowEntry.user_id' => $userId
        	),
        ));

        foreach ($curUserEntries as $entry) {
        	$result = $this->assignAwardTitles($entry['GameBreed']);
        	if (!empty($result)){
        		foreach ($result as $value) {
        			array_push($awards,$value); 
    			}	
        	}
        }
        
        $uniqueAwards = array_filter(array_unique($awards));
        foreach ($uniqueAwards as $award){
        	if($awd = $this->getAwardId($award)){
	        	$this->UserAwards->create();
	    		$data = array(
					'award_id'=>$awd['id'],
					'user_id'=>$userId
				);
				$this->UserAwards->save($data);
			}
        }
    }

    private function addAwardsAchievements($award){
        $this->loadModel('Achievements');
        $this->loadModel('Awards');
        $this->loadModel('UserAwards');
        $this->loadModel('UserAchievements');

        $total_awards = $this->UserAwards->find('count', array('conditions'=>array(
            'user_id' => $userId, 'award_id'=>$award['id']
        )));
        if($total_awards == 1){
            $achCondition = '';
            switch ($award['Awards']['short_name']) {
                case 'CH':
                case 'GCH':
                case 'NA':
                case 'OA':
                case 'AX':
                case 'MACH':
                case 'CD':
                case 'CDX':
                case 'UD':
                case 'OTCH':
                    $achCondition = $award['Awards']['short_name'].'1';
                break;

                default:
                break;
            }
            if(!empty($achCondition)){
                $ach = $this->Achievements->find('first',array(
                        'conditions'=>array(
                        'award_type'=>'DT',
                        'condition' => $achCondition
                    )
                ));

                if(count($ach) > 0){
                    $this->loadModel('UserAchievements');
                    $this->loadModel('User');
                    if($ach['Achievements']['condition'] < $condition){
                        $isExists = $this->UserAchievements->find('first', array('conditions'=>array('achievement_id'=>$ach['Achievements']['id'],'user_id' => $userId)));
                    
                        if(count($isExists) == 0){  
                            $this->addUserAchievement($ach['Achievements']);
                        }
                    }
                }
            }
        }
    }

    public function getGameBreedScore($gameBreed, $show){
        $statsSum = $gameBreed['gen'] + 
                    $gameBreed['head'] + 
                    $gameBreed['body'] +
                    $gameBreed['forequarters'] + 
                    $gameBreed['hindquarters'] +
                    $gameBreed['coat'] + 
                    $gameBreed['temperament'] +
                    $gameBreed['heart'] +
                    $gameBreed['hip'] +
                    $gameBreed['eyes'] +
                    $gameBreed['thyroid'];
        
        switch ($show['show_type']) {
            case 'Conformation':
                $statsSum +=$gameBreed['confirmation'];
            break;

            case 'Agility':
                $statsSum +=$gameBreed['agility'];
            break;

            case 'Rally':
                $statsSum +=$gameBreed['rally'];
            break;

            case 'Obedience':
                $statsSum +=$gameBreed['obedience'];
            break;

            case 'Show Stoppers':
            case 'Rush':
            case 'Best in Pedigree':

                $statsSum +=$gameBreed['confirmation'] +
                            $gameBreed['agility'] +
                            $gameBreed['rally'] +
                            $gameBreed['obedience'];

            break;

            default:
            break;
        }

        return $statsSum;
    }

    public function breed_competition() {
        $this->loadModel('ShowWinner');
        //Note:  taking age<=20 days as puppy
        $curDate = date('Y-m-d');
        $shows = $this->Show->find('all', array(
            'conditions'=>array(
                'Show.end_date' <= $curDate, 
                'Show.status !=' => 2)
            )
        );
        
        foreach ($shows as $show) 
        {
            //calculate stats for each participant
            $allentries = $this->ShowEntry->find('all', array('conditions' => array('ShowEntry.show_id' => $show['Show']['id'])));

            if (count($allentries) > 1) {

                foreach ($allentries as $st) 
                {
                    $statsSum = $this->getGameBreedScore($st['GameBreed'], $show['Show']);
                    $this->ShowEntry->id = $st['ShowEntry']['id'];
                    $this->ShowEntry->save(array('stat_sum' => $StatsSum));
                }

                $allEntries = $this->ShowEntry->find('all', array(
                    'conditions' => array('ShowEntry.show_id' => $show['Show']['id']),
                    'order' => 'ShowEntry.stat_sum DESC'
                ));

                $this->award_title($allEntries);
				
				//award points only if 6 or more entries
				if(count($allEntries) > 5) {
					$this->award_points($allEntries);	
				}
                

                // //Novice Entries
                // $allNoviceEntries = $this->ShowEntry->find('all', array('conditions' => array('ShowEntry.category' => 'novice', 'ShowEntry.show_id' => $show['Show']['id'])));

                // if (count($allNoviceEntries) > 0) {
                //     usort($allNoviceEntries, 'sortBySum');
                //     $this->award_points($allNoviceEntries);
                //     $this->award_title($allNoviceEntries);
                // }


                // //Open Entries
                // $allOpenEntries = $this->ShowEntry->find('all', array('conditions' => array('ShowEntry.category' => 'open', 'ShowEntry.show_id' => $show['Show']['id'])));

                // if (count($allOpenEntries) > 0) {
                //     usort($allOpenEntries, 'sortBySum');
                //     $this->award_points($allOpenEntries);
                //     $this->award_title($allOpenEntries);
                // }

                // //Expert Entries
                // $allExpertEntries = $this->ShowEntry->find('all', array('conditions' => array('ShowEntry.category' => 'expert', 'ShowEntry.show_id' => $show['Show']['id'])));

                // if (count($allExpertEntries) > 0) {
                //     usort($allExpertEntries, 'sortBySum');
                //     $this->award_points($allExpertEntries);
                //     $this->award_title($allExpertEntries);
                // }


                $show_remarks = 'Results Generated';
            } else {

                $show_remarks = 'Show cancelled due to single or no entry';
            }
            $status = 0;
            if($curDate >= $show['Show']['start_date'])
            {   
            	$this->addUserAwards($show);
                $this->updateAchievements($this->Auth->user('id'),'WD');
                $this->updateAchievements($this->Auth->user('id'),'WB');
                $this->updateAchievements($this->Auth->user('id'),'BIS');
                $this->updateAchievements($this->Auth->user('id'),'BOOS');
                $this->updateAchievements($this->Auth->user('id'),'BOB');
                $this->updateAchievements($this->Auth->user('id'),'BW');
                $status = 2;
            }
            $this->Show->id = $show['Show']['id'];
            $this->Show->save(array('status' => $status, 'remarks' => $show_remarks));
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

    private function getAchievementsConditionValue($total){
        $condition = 0;
        switch ($total) {
            case 5:
                $condition = 5;
            break;

            case 10:
                $condition = 10;
            break;

            case 20:
                $condition = 20;
            break;

            case 50:
                $condition = 50;
            break;
            
            default:
            break;
        }
        return $condition;
    }

    private function getAwardTitle($type){
        $title = '';
        switch ($type) {
            case 'WD':
                $title = 'Winning Dog';
            break;

            case 'WB':
                $title = 'Winning Bitch';
            break;

            case 'BIS':
                $title = 'Best in Show';
            break;

            case 'BOOS':
                $title = 'Best of Opposite sex';
            break;

            case 'BOB':
                $title = 'Best of Breed';
            break;

            case 'BW':
                $title = 'Best Winner';
            break;
            
            default:
            break;
        }
        return $title;
    }

    private function updateAchievements($userId, $type){
        $this->loadModel('ShowWinner');
        $title = $this->getAwardTitle($type);
        if(!empty($title))
        {
            $awards = $this->ShowWinner->find('all', array(
                'contains'=>array('ShowEntry'),
                'fields'=>array('COUNT(DISTINCT show_entry_id) as total'),
                'conditions'=>array('ShowEntry.user_id'=>$userId, 'ShowWinner.title'=>$title),
            ));

            $condition = 0;
            if(count($awards) > 0){
                if($type == 'BIS' && $awards[0][0]['total'] == 100){
                    $condition = 100;
                }
                else{
                    $condition = $this->getAchievementsConditionValue($awards[0][0]['total']);
                }
            }

            if($condition != 0){
                $this->loadModel('Achievements');
                $ach = $this->Achievements->find('all',array(
                        'conditions'=>array(
                        'award_type'=>$type,
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
    }

    public function award_points($entries) {

        $count = count($entries);
        if ($count > 1) {

            switch ($count) {

                case 2 : $start_point = 1;
                    break;
                case 3 : $start_point = 2;
                    break;
                case 4 : $start_point = 3;
                    break;
                case 5 : $start_point = 4;
                    break;
                case 6 : $start_point = 5;
                    break;
                default : $start_point = 5;
                    break;
            }

            $position = 1;

            foreach ($entries as $ent) {


                $this->ShowEntry->id = $ent['ShowEntry']['id'];
                // $this->ShowEntry->save(array('position' => $position));

                $position = $position + 1;

                $this->ShowEntry->bindModel(array(
                    'belongsTo' => array(
                        'User' => array('className' => 'User', 'foreignKey' => 'user_id')
                    )
                ));

                $showEntry = $this->ShowEntry->findById($ent['ShowEntry']['id']);

                $payout = $start_point * 100;

                //Log entry to payoutsLog table
                $payoutArr = array(
                    'show_id' => $showEntry['ShowEntry']['show_id'],
                    'show_entry_id' => $showEntry['ShowEntry']['id'],
                    'points' => $start_point,
                    'amount' => $payout,
                    'created' => date('Y-m-d H:i:s')
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
        } else {

            if (isset($entries[0])) {
                //Not Qualified if only single entry in category
                $this->ShowEntry->id = $entries[0]['ShowEntry']['id'];
                $this->ShowEntry->save(array('remarks' => 'NQ'));
            }
            return;
        }
    }

    public function award_title($entries) {

        // $breedsArr = $dogArr = $bitchArr = array();
        // $j = 0;

        // foreach ($entries as $ent) {

        //     if ($ent['GameBreed']['gender'] == 'Dog') {
        //         $dogArr[] = $ent;
        //     } else {
        //         $bitchArr[] = $ent;
        //     }

        //     $breedArr[$ent['ShowEntry']['game_breed_id']][$j] = $ent;
        //     $j++;
        // }
        $show_id = '';
        $titleWinners = array();
        $i = 0;
        $userId = $this->Auth->user('id');

        foreach ($entries as $entry) 
        {
            $show_id = $entry['ShowEntry']['show_id'];
            $this->ShowEntry->id = $entry['ShowEntry']['id'];
            if ($i < 4)
            {
                $titleWinners[$i]['show_id'] = $entry['ShowEntry']['show_id'];
                $titleWinners[$i]['show_entry_id'] = $entry['ShowEntry']['id'];
                $titleWinners[$i]['created'] = date('Y-m-d H:i:s');
                
                switch ($i) {
                    case 0:
                        $titleWinners[$i]['title'] = 'Best in Show';
                        $this->ShowEntry->save(array(
                            'points_awarded' => 4, 
                            'remarks'=>'1st place',
                            'position' => $i+1
                        ));  
                    break;

                    case 1:
                        $titleWinners[$i]['title'] = 'Best of Breed';
                        $this->ShowEntry->save(array(
                            'points_awarded' => 2, 
                            'remarks'=>'2nd place',
                            'position' => $i+1
                        ));
                    break;

                    case 2:
                        if($entry['GameBreed']['gender'] == 'Dog')
                            $titleWinners[$i]['title'] = 'Winning Dog';
                        else
                            $titleWinners[$i]['title'] = 'Winning Bitch';
                        $this->ShowEntry->save(array(
                            'points_awarded' => 3, 
                            'remarks'=>'3rd place',
                            'position' => $i+1
                        ));
                    break;

                    case 3:
                        $titleWinners[$i]['title'] = 'Best of Opposite sex';
                        $this->ShowEntry->save(array(
                            'points_awarded' => 1, 
                            'remarks'=>'4th place',
                            'position' => $i+1
                        ));
                    break;
                    
                    default:
                        # code...
                    break;
                }
            }
            else
            {
                $this->ShowEntry->save(array(
                    'points_awarded' => 0, 
                    'remarks'=>'NQ',
                    'position' => $i+1
                ));
            }
            $i++;
        }

        if($i > 0){
            $this->ShowWinner->deleteAll(array('ShowWinner.show_id' => $show_id), false);
            $this->ShowWinner->create();    
            $this->ShowWinner->saveAll($titleWinners);
        }
        return;
    }

    public function results($id = null) {

        if (!empty($id)) {

            $this->Show->recursive = 2;
            /* $this->loadModel('GameBreed');
              $this->GameBreed->bindModel(array('belongsTo' => array(
              'BreedImages' => array(
              'className' => 'BreedImages',
              'foreignKey' => 'breed_image_id'
              )
              )
              )); */

            $this->Show->bindModel(array(
                'hasMany' => array(
                    'ShowWinner' => array('className' => 'ShowWinner', 'foreignKey' => 'show_id')
                )
            ));
            /*
              $this->ShowWinner->bindModel(array(
              'belongsTo' => array(
              'ShowEntry' => array('className' => 'ShowEntry', 'foreignKey' => 'show_entry_id')
              )
              ));
             */
            /* $this->ShowEntry->bindModel(array(
              'belongsTo' => array(
              'User' => array('className' => 'User', 'foreignKey' => 'user_id')
              )
              )); */

            $show = $this->Show->findById($id);
            //  pr($show ); die;

            $this->layout = 'user';
            //echo '<pre>'; print_r($show); die;
            $this->set('show', $show);
            $this->render('show_results');
        }
    }

    function getShowId($show_type)
    {
        $show_data = $this->Show->find('all',array(
                            "conditions" => ['Show.show_type' => $show_type]
                        ));
        $ids = Hash::extract($show_data, '{n}.Show.id');
        return $ids;
    }

    /**
     * Method Name : results
     * Author Name : Naveen Joshi
     * Date : 11 sept 2015
     * Description : to show competition results
     */
    function show_results($id = null) {
        //ini_set('memory_limit', '-1');
        //set_time_limit(0);
        $this->layout = 'front';

        if (isset($gbId)) {
            $this->GameBreed->recursive = '2';
            $this->Breed->bindModel(array('hasMany' => array('BreedImages')));
            $gamebreed = $this->GameBreed->findById($gbId);
            $this->set('breed', $gamebreed);
        }

        // $this->Breed->bindModel(array('belongsTo' => array('BreedImages')));
        $this->ShowWinner->recursive = 3;

//        $this->ShowWinner->bindModel(
//                array(
//                    'belongsTo' => array(
//                        'Show' => array('className' => 'Show', 'foreignKey' => 'show_id'),
//                        'ShowEntry' => array('className' => 'ShowEntry', 'foreignKey' => 'show_entry_id')
//                    )
//                )
//        );

        $con = array(1 => 1);
        // $ids = $this->getShowId('Conformation');
        if (!empty($id)) {
            $con["ShowWinner.show_id"] = $id;
        }
        $winnersArr = $this->ShowWinner->find('all', array(
            "conditions" => $con,
            /*"order" => "ShowEntry.position ASC",
            "limit" => 10*/
                /* "joins" => array(
                  array(
                  "table" => "show_entries",
                  "alias" => "ShowEntries",
                  "type" => "LEFT",
                  "conditions" => array(
                  "ShowWinner.show_entry_id = ShowEntries.id"
                  )
                  ),
                  array(
                  "table" => "shows",
                  "alias" => "Shows",
                  "type" => "LEFT",
                  "conditions" => array(
                  "ShowWinner.show_id = Shows.id"
                  )
                  ),
                  array(
                  "table" => "users",
                  "alias" => "Users",
                  "type" => "LEFT",
                  "conditions" => array(
                  "ShowEntries.user_id = Users.id"
                  )
                  ),
                  array(
                  "table" => "game_breeds",
                  "alias" => "GameBreed",
                  "type" => "LEFT",
                  "conditions" => array(
                  "ShowEntries.game_breed_id = GameBreed.id"
                  )
                  ),
                  array(
                  "table" => "breed_images",
                  "alias" => "BreedImages",
                  "type" => "LEFT",
                  "conditions" => array(
                  "GameBreed.breed_image_id = BreedImages.id"
                  )
                  )
                  ) */
        ));

        // echo '<pre>';
        // var_dump($winnersArr);
        // exit;
        
        // foreach ($winnersArr as $key =>&$winner) {
        //     $sum_Rank = 0;
        //     $sum_Rank = $winner['ShowEntry']['stat_sum']+$winner['ShowEntry']['GameBreed']['confirmation'];
        //     $winner['ShowEntry']['sum_Rank'] = $sum_Rank; 
        // }

        // $winnersArr = Set::sort($winnersArr, '{n}.ShowEntry.sum_Rank', 'desc');
        // $this->set('Winners', $winnersArr);

        // Best in Pedigree
        // $ids = $this->getShowId('Conformation');
        // if (!empty($ids)) {
        //     $con["ShowWinner.show_id"] = $ids;
        // }
        // $pedigrees = $this->ShowWinner->find("all", array("conditions" => $con));
        // if(!empty($pedigrees))
        // {
        //     foreach ($pedigrees as $key =>&$pedigree) {
        //         $sum_Rank = 0;
        //         $sum_Rank = $pedigree['ShowEntry']['stat_sum']+$pedigree['ShowEntry']['GameBreed']['confirmation'];
        //         $pedigree['ShowEntry']['sum_Rank'] = $sum_Rank; 
        //     }

        //     $pedigrees = Set::sort($pedigrees, '{n}.ShowEntry.sum_Rank', 'desc');
        // }

        // $this->set("pedigrees", $pedigrees);
        $results = [
            'conformation'=>[],
            'agility'=>[],
            'rally' => [],
            'obd'=> [],
            "bop" => [],
            "sstop" => [],
            "rush"=> []
        ];
        
        $conf_con = array("Show.show_type" => "Conformation");
        if (!empty($id)) {
            $conf_con["ShowEntry.show_id"] = $id;
        }
        
        $this->ShowEntry->bindModel(array("belongsTo" => array("Show", "User")));
        $this->loadModel("ShowEntry");
        $conformations = $this->ShowEntry->find("all", array(
            "conditions" => $conf_con,
            "order"=> "ShowEntry.position",
            'limit'=> 10
        ));

        $results['conformation'] = $conformations;

        $acon = array("Show.show_type" => "Agility");
        if (!empty($id)) {
            $acon["ShowEntry.show_id"] = $id;
        }
        
        $this->ShowEntry->bindModel(array("belongsTo" => array("Show", "User")));
        $this->loadModel("ShowEntry");
        $agilities = $this->ShowEntry->find("all", array(
            "conditions" => $acon,
            "order"=> "ShowEntry.position",
            'limit'=> 10
        ));

        $results['agility'] = $agilities;
        

        $con_b = array("Show.show_type" => "Obedience");
        if (!empty($id)) {
            $con_b["ShowEntry.show_id"] = $id;
        }

        $this->ShowEntry->bindModel(array("belongsTo" => array("Show", "User")));
        $obediences = $this->ShowEntry->find("all", array(
            "conditions" => $con_b,
            "order"=> "ShowEntry.position",
            'limit'=> 10
        ));

        $results['obd'] = $obediences;

        $con_bop = array("Show.show_type" => "Best in Pedigree");
        if (!empty($id)) {
            $con_bop["ShowEntry.show_id"] = $id;
        }

        $this->ShowEntry->bindModel(array("belongsTo" => array("Show", "User")));
        $bestInPedigrees = $this->ShowEntry->find("all", array(
            "conditions" => $con_bop,
            "order"=> "ShowEntry.position",
            'limit'=> 10
        ));

        $results['bop'] = $bestInPedigrees;

        $con_c = array("Show.show_type" => "Rally");
        if (!empty($id)) {
            $con_c["ShowEntry.show_id"] = $id;
        }

        $this->ShowEntry->bindModel(array("belongsTo" => array("Show", "User")));
        $rallies = $this->ShowEntry->find("all", array(
            "conditions" => $con_c,
            "order"=> "ShowEntry.position",
            'limit'=> 10
        ));


        $results['rally'] = $rallies;
        
        $con_d = array("Show.show_type" => "Show Stoppers");
        if (!empty($id)) {
            $con_d["ShowEntry.show_id"] = $id;
        }

        // $this->ShowEntry->bindModel(
        //         array(
        //             "belongsTo" => array("Show",
        //                 "Transaction" => array(
        //                     'className' => 'Transaction',
        //                     'foreignKey' => false,
        //                     'dependent' => false,
        //                     'conditions' => 'Transaction.from_user_id=ShowEntry.user_id',
        //                     'fields' => '',
        //                     'order' => '',
        //                     'limit' => '',
        //                     'offset' => '',
        //                     'exclusive' => '',
        //                     'finderQuery' => '',
        //                     'counterQuery' => ''
        //                 )
        //             )
        // ));
        
        // $con_d["Transaction.type"] = "credit";

        $this->ShowEntry->bindModel(array("belongsTo" => array("Show", "User")));
        $stoppers = $this->ShowEntry->find("all", array(
            "conditions" => $con_d,
            "order"=> "ShowEntry.position",
            'limit'=> 10
        ));
        
        $results['sstop'] = $stoppers;
        
        $con_e = array("Show.show_type" => "Rush");
        if (!empty($id)) {
            $con_d["ShowEntry.show_id"] = $id;
        }

        $this->ShowEntry->bindModel(array("belongsTo" => array("Show", "User")));
        $rushes = $this->ShowEntry->find("all", array(
            "conditions" => $con_e,
            "order"=> "ShowEntry.position",
            'limit'=> 10
        ));


        $results['rush'] = $rushes;

        // $stoppers = $this->ShowWinner->find("all", array("conditions" => $con));
        // //print_r($stoppers);die;
        // if(!empty($stoppers))
        // {
        //     foreach ($stoppers as $key =>&$stopper) {
        //         $sum_Rank = 0;
        //         $sum_Rank = $stopper['ShowEntry']['stat_sum']+$stopper['ShowEntry']['GameBreed']['confirmation'];
        //         $stopper['ShowEntry']['sum_Rank'] = $sum_Rank; 
        //     }

        //     $stoppers = Set::sort($stoppers, '{n}.ShowEntry.sum_Rank', 'desc');
        // }

        $this->set('shows', $results);
    }

    function get_winners($competionArr) {
        $gameArr = array();
        $StatsSum = 0;
        $Count = count($competionArr);
        if ($Count <= 4) {
            foreach ($competionArr as $st) {
                $StatsSum = (($st['GameBreed']['gen']) + ($st['GameBreed']['head']) + ($st['GameBreed']['body']) + ($st['GameBreed']['forequarters']) + ($st['GameBreed']['hindquarters'] + ($st['GameBreed']['coat'] + ($st['GameBreed']['temperament']))));
                $gameArr[][$st['ShowEntry']['id']] = $StatsSum; //all stats sum , identify which show participant got which stat
            }
            rsort($gameArr);
            $finalWinners = $gameArr;   //final  winner based on stat
        } else {
            foreach ($competionArr as $st) {
                $StatsSum = (($st['GameBreed']['gen']) + ($st['GameBreed']['head']) + ($st['GameBreed']['body']) + ($st['GameBreed']['forequarters']) + ($st['GameBreed']['hindquarters'] + ($st['GameBreed']['coat'] + ($st['GameBreed']['temperament']))));
                $gameArr[][$st['ShowEntry']['id']] = $StatsSum; //all stats sum , identify which show participant got which stat
            }
            rsort($gameArr);
            $finalWinners = array_reverse(array_slice($gameArr, 0, 4));   //final four  winner based on stat
        }
        return $finalWinners;
        die;
    }

    function save_winners($winnerArr) {
        if ($winnerArr) {
            
        }
        die;
    }

}
