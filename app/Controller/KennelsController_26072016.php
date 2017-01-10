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
class KennelsController extends AppController {

    public $layout = 'front';
    public $uses = array('GameBreed', 'User', 'Breed', 'DogSkill', 'ShowWinner', 'UserEnergyBones', 'UserKennelSpace', 'UserLicence', 'UserRetirementMedal', 'UserBgImage');

    function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow(array('inc_energy_cron', 'increaseAgeCron', 'updateHeatColumnCron'));
    }

    /**
     * Method Name :index
     * Author Name : Naveen Joshi
     * Date : 19 July 2015
     * Description : kennel index page
     */
    public function index() {
      
        if ($this->Session->read('purchase')) {
            $this->Session->setFlash(__('Congratulations !! a new game breed has been added to your kennel.'), 'default', array('class' => 'success'));
        }
        $this->Session->delete('purchase');
        $kennelData = $this->User->findById($this->Auth->user('id'), array('kennel_banner', 'kennel_desc'));
        $this->set('kennelData', $kennelData);
    }

    /**
     * Method Name : purchased dogs
     * Author Name : Naveen Joshi
     * Date : 19 July 2015
     * Description : to list purchased dog by player
     */
    function purchased_dogs() {
        $allGameBreedDogs = $this->GameBreed->find('all', array('conditions' => array('GameBreed.user_id' => $this->Auth->user('id'), 'GameBreed.gender' => 'Dog', 'GameBreed.age >=' => 21, 'GameBreed.age <' => 250 )));
        $i = 1;

        $dataDog = '{
              "data": [';
        foreach ($allGameBreedDogs as $brd) {
         
            $dataDog .= '[
                  "' . $i . " ". $this->Auth->user('id').'",
                  "' . $brd['GameBreed']['name'] . '",
                  "' . $brd['GameBreed']['age'] . ' day(s)",
                  "' . $brd['Breed']['name'] . '",
                  "<a href=kennels/dog/' . $brd['GameBreed']['id'] . '>View Info</a>"
                             ]';
            if ($i < count($allGameBreedDogs)) {
                $dataDog .= ',';
            }
        //    }
            $i++;
        }
        $dataDog .= ']}';

        echo $dataDog;
        die;
    }

    function purchased_puppies() {
        $allGameBreedDogs = $this->GameBreed->find('all', array('conditions' => array('GameBreed.user_id' => $this->Auth->user('id'), 'GameBreed.age <' => 21)));
        
        $i = 1;

        $dataDog = '{
              "data": [';
        $p = 1;
        foreach ($allGameBreedDogs as $brd) {
            $display_date = strtotime($brd['GameBreed']['display_date']);
            $cur_date = strtotime(date('Y-m-d'));
           // if ($cur_date >= $display_date) {

                if ($brd['GameBreed']['gender'] == 'Bitch' && $brd['GameBreed']['age'] < 14) {
                    $dataDog .= '[
		                  "' . $i . '",
		                  "' . $brd['GameBreed']['name'] . '",
		                  "' . $brd['GameBreed']['age'] . ' day(s)",
		                  "' . $brd['Breed']['name'] . '",
		                  "<a href=kennels/dog/' . $brd['GameBreed']['id'] . '>View Info</a>"
		                             ]';

                    if ($p < count($allGameBreedDogs)) {
                        $dataDog .= ',';
                    }
                    $i++;
                } else if ($brd['GameBreed']['gender'] == 'Dog' && $brd['GameBreed']['age'] < 21) {

                    $dataDog .= '[
		                  "' . $i . '",
		                  "' . $brd['GameBreed']['name'] . '",
		                  "' . $brd['GameBreed']['age'] . ' day(s)",
		                  "' . $brd['Breed']['name'] . '",
		                  "<a href=kennels/dog/' . $brd['GameBreed']['id'] . '>View Info</a>"
		                             ]';

                    if ($p < count($allGameBreedDogs)) {
                        $dataDog .= ',';
                    }
                    $i++;
                }
           //}
            $p++;
        }

        if (substr($dataDog, -1, 1) == ',') {
            $dataDog = substr($dataDog, 0, -1);
        }

        $dataDog .= ']}';



        echo $dataDog;
        die;
    }

    function purchased_bitches() {
        $allGameBreedBitch = $this->GameBreed->find('all', array('conditions' => array('GameBreed.user_id' => $this->Auth->user('id'), 'GameBreed.gender' => 'Bitch', 'GameBreed.age >=' => 21, 'GameBreed.age <' => 250)));
        $i = 1;

        $dataBitch = '{
              "data": [';
        foreach ($allGameBreedBitch as $brd) {
            $dataBitch .= '[
                  "' . $i . '",
                  "' . $brd['GameBreed']['name'] . '",
                  "' . $brd['GameBreed']['age'] . ' day(s)",
                  "' . $brd['Breed']['name'] . '",
                  "<a href=kennels/dog/' . $brd['GameBreed']['id'] . '>View Info</a>"
                             ]';
            if ($i < count($allGameBreedBitch)) {
                $dataBitch .= ',';
            }
            $i++;
        }
        $dataBitch .= ']}';



        echo $dataBitch;
        die;
    }

    function purchased_retired() {
        $allGameBreedBitch = $this->GameBreed->find('all', array('conditions' => array('GameBreed.user_id' => $this->Auth->user('id'), 'GameBreed.gender' =>  array('Dog', 'Bitch'), 'GameBreed.age >=' => 250,'GameBreed.age <' => 350)));
        $i = 1;

        $dataBitch = '{
              "data": [';
        foreach ($allGameBreedBitch as $brd) {
            $dataBitch .= '[
                  "' . $i . '",
                  "' . $brd['GameBreed']['name'] . '",
                  "' . $brd['GameBreed']['age'] . ' day(s)",
                  "' . $brd['Breed']['name'] . '",
                  "<a href=kennels/dog/' . $brd['GameBreed']['id'] . '>View Info</a>"
                             ]';
            if ($i < count($allGameBreedBitch)) {
                $dataBitch .= ',';
            }
            $i++;
        }
        $dataBitch .= ']}';



        echo $dataBitch;
        die;
    }

    function hidden_achievement() {
        $allInventory = array('0' => 'Origin dogs:', '1' => 'Buy  10 Origin dogs  = 200 XP', '2' => 'Buy 50 origin dogs =400xp', '3' => 'Buy 100 origin dogs= 600 xp', '4' => 'Buy 500 Origin dogs =1000xp', '5' => 'Dog Titles:', '6' => 'First CH dog , Bitch, = 250 xp', '7' => 'First GCH dog, Bitch , = 500xp', '8' => 'First NA dog , Bitch , =   100 xp', '9' => 'First OA dog, Bitch , =  150xp', '10' => 'First AX  Dog, bitch , =  200XP', '11' => 'First MACH dog , Bitch , =   500xp', '12' => 'First CD Dog, Bitch = 100 xp', '13' => 'First CDX dog , Bitch = 150XP', '14' => 'First UD dog, Bitch ,  =    200 XP', '15' => 'First OTCH dog, Bitch ,  = 500 XP', '16' => 'Player breed dogs:', '17' => 'First CH dog , Bitch, = 250 xp', '18' => 'First GCH dog, Bitch , = 500xp', '19' => 'First NA dog , Bitch , =   100 xp', '20' => 'First OA dog, Bitch , =  150xp', '21' => 'First AX  Dog, bitch , =  200XP', '22' => 'First MACH dog , Bitch , =   500xp', '23' => 'First CD Dog, Bitch ,=   100 xp', '24' => 'First CDX dog , Bitch, =   150XP', '25' => 'First UD dog, Bitch ,  =    200 XP', '26' => 'First OTCH dog, Bitch ,  = 500 XP', '27' => 'Winning dog:', '28' => 'Get Winning dog 5 time = 300xp', '29' => 'Winning dog 10 time = 600xp', '30' => 'Winning dog 20 times= 1200xp', '31' => 'Winning dog 50 times=3500xp', '32' => 'Winning Bitch:', '33' => 'Winning Bitch 5 time=300xp', '34' => 'Winning Bitch 10 times=600xp', '35' => 'Winning Bitch 20 times=1200xp', '36' => 'Winning Bitch 50 times=3500xp', '37' => 'Best of Breed:', '38' => 'Get Best of breed 5 times=300xp', '39' => 'Get best of brees 10 times=600xp', '40' => 'Best of breed 20 times=1200xp', '41' => 'Best of Breed 50 times= 3500xp', '42' => 'Best winner:', '43' => 'Get Best of winner 5 times=500xp', '44' => 'Best of Winner 10 times=700xp', '45' => 'Best of Winner 20 times=1400xp', '46' => 'Best of Winner 50 times= 2800xp', '47' => 'Best of opposite Sex:', '48' => 'Get BOOS 5 times=300xp', '49' => 'Get BOOS 10 times=600xp', '50' => 'Get BOOS 20 times=1200xp', '51' => 'Get BOOS 50 times=2400xp', '52' => 'Best in show:', '53' => 'Get BIS 5 times=200xp', '54' => 'Get BIS 10 times=400xp', '55' => 'Get BIS 20 times=800xp', '56' => 'Get BIS 50 times=1600xp', '57' => 'Get BIS 100 times=3600xp', '58' => 'Training achievements:', '59' => 'First Fully trained dog  in conformation = 100 xp', '60' => 'First fully trained dog in agility = 200xp', '61' => 'First fully trained dog in obedience= 150xp', '62' => 'First fully trained dog in Rally – 250xp', '63' => 'First fully trained in all 4 areas =800 xp', '64' => 'Job Acheivments:', '65' => 'First Job complete 100% = 50xp', '66' => '50 jobs completed 100% =500xp', '67' => '100 jobs completed 100% =1000XP', '68' => '200 jobs completed 100%=2000xp', '69' => '500 jobs completed 100%= 5000 xp', '70' => 'Shop purchases achievements:', '71' => 'Buy first  employers licence = 100xp', '72' => 'Buy 5 employers licence=600 XP', '73' => 'Buy 10 employer licence=1200xp');

        $i = 1;

        $dataInventory = '{
              "data": [';
        for ($j = 0; $j < 73; $j++) {

            if ($allInventory[$j] == 'Origin dogs:' || $allInventory[$j] == 'Dog Titles:' || $allInventory[$j] == 'Player breed dogs:' || $allInventory[$j] == 'Winning dog:' || $allInventory[$j] == 'Winning Bitch:' || $allInventory[$j] == 'Best of Breed:' || $allInventory[$j] == 'Best winner:' || $allInventory[$j] == 'Best of opposite Sex:' || $allInventory[$j] == 'Best in show:' || $allInventory[$j] == 'Training achievements:' || $allInventory[$j] == 'Job Acheivments:' || $allInventory[$j] == 'Shop purchases achievements:') {
                $dataInventory .= '[
                    "' . $i . '",
                    "<strong>' . $allInventory[$j] . '</strong>",
                    ""
                ]';
            } else {
                $dataInventory .= '[
                    "' . $i . '",
                    "' . $allInventory[$j] . '",
                    ""
                ]';
            }

            if ($i < count($allInventory)) {
                $dataInventory .= ',';
                $i++;
            }
        }
        $dataInventory = substr_replace($dataInventory, "", -1);
        $dataInventory .= ']}';



        echo $dataInventory;
        die;
    }

    function awards() {
        $allInventory = array(array('CH- Champion:', 'Must have a total of 15 points plus 2 major wins'), array('GCH- Grand Champion:', 'Must have a total of 25 points plus 2 major wins'), array('PACH-Preferred Agility Champion', '75 points plus two major wins'), array('MACH-Master Agility Champion:', '60 points plus two major wins'), array('AX-Agility Excellence:', '45 points plus 2 major wins'), array('OA-Open Agility:', '30 points 2 major wins'), array('NA- Novice Agility:', '15 points 2 major wins'), array('OTCH-Obedience Trial Champion:', '70 points plus two major wins'), array('UDX Utility Dog Excellent:', '55 plus two major wins'), array('UD-Utility Dog:', '40 points plus 2 major wins'), array('CDX-Companion Dog Excellent:', '25 points plus 2 major wins'), array('CD-Companion Dog:', '15 points plus two major wins'), array('RNC-Rally National Champion:', '100 points plus 2 major wins', '75 points plus 2 major wins'), array('RAE-Rally advanced Excellent:', '60 points plus two major wins'), array('RE-Ralley Excellence:', '45 points plus 2 major wins'), array('RA-Rally Advanced:', '30 points plus 2 major wins'), array('RN-Rally Novice:', '15 points plus 2 major wins'), array('DC-Dual Champion:', 'Must have CH and GCH or OTCH or RNC or MACH'), array('TC-Triple Champion:', 'MUST have CH,GCH and OTCH or RNC or MATCH'), array('CGC-Canine Good Citizen:', 'Must complete CGC test'), array('CGCA-Advance canine Good Citizen', 'CGCA test', 'A major win is one of these five', 'BOB-Best of Breed', 'BOW-Best of Winners', 'WD-winners Dog', 'WB-winners Bitch'));

        $i = 1;

        $dataInventory = '{"data": [';
        for ($j = 0; $j < count($allInventory); $j++) {
            for ($k = 1; $k < count($allInventory[$j]); $k++) {
                $dataInventory .= '[
                        "' . $i . '",
                        "' . $allInventory[$j][0] . '",
                        "' . $allInventory[$j][$k] . '",
                        ""
                    ]';
                if ($k < count($allInventory)) {
                    $dataInventory .= ',';
                }
                $i++;
            }
        }
        $dataInventory = substr_replace($dataInventory, "", -1);
        $dataInventory .= ']}';

        echo $dataInventory;
        die;
    }

    function inventory() {
        $id = $this->Auth->user('id');
        $allInventory = $this->UserEnergyBones->getData($id);
        $i = 1;

        $dataInventory = '{
              "data": [';
        foreach ($allInventory as $brd) {

            $dataInventory .= '[
                  "' . $i . '",
                  "' . $brd['shop_energy_bones']['title'] . '",
                  " Energy Bones",
                  "' . $brd['user_energy_bones']['dog_name'] . '",
                  "' . $brd['shop_energy_bones']['cost'] . '"
                             ]';
            if ($i <= count($allInventory)) {
                $dataInventory .= ',';
            }
            $i++;
        }
        $j = 0;
        $allInventory = $this->UserKennelSpace->getData($id);
        foreach ($allInventory as $brd) {

            $dataInventory .= '[
                  "' . $i . '",
                  "' . $brd['user_kennel_spaces']['spaces'] . '",
                  " Kennel Spaces",
                  "' . $brd['user_kennel_spaces']['dog_name'] . '",
                  "' . $brd['shop_kennel_spaces']['cost'] . '"
                             ]';
            if ($j <= count($allInventory)) {
                $dataInventory .= ',';
            }
            $j++;
            $i++;
        }

        $j = 0;
        $allInventory = $this->UserLicence->getData($id);
        foreach ($allInventory as $brd) {

            $dataInventory .= '[
                  "' . $i . '",
                  "' . $brd['shop_employer_licences']['title'] . '",
                  " Employers Licence",
                  "",
                  "' . $brd['user_licences']['cost'] . '"
                             ]';
            if ($j <= count($allInventory)) {
                $dataInventory .= ',';
            }
            $j++;
            $i++;
        }

        $j = 0;
        $allInventory = $this->UserRetirementMedal->getData($id);
        foreach ($allInventory as $brd) {

            $dataInventory .= '[
                  "' . $i . '",
                  "' . $brd['shop_retirement_medals']['title'] . '",
                  " Retirement Medal",
                  "' . $brd['user_retirement_medals']['dog_name'] . '",
                  "' . $brd['user_retirement_medals']['cost'] . '"
                             ]';
            if ($j < count($allInventory) - 1) {
                $dataInventory .= ',';
            }
            $j++;
            $i++;
        }

        $dataInventory .= ']}';
        echo $dataInventory;
        die;
    }

    function count_inventory() {
        $allInventory = $this->GameBreed->find('all', array('conditions' => array('GameBreed.user_id' => $this->Auth->user('id'))));
        $i = 1;

        $dataInventory = '';
        foreach ($allInventory as $brd) {
            $dataInventory = count($allInventory);
        }
        echo $dataInventory;
        die;
    }

    /**
     * Method Name : dog
     * Author Name : Naveen Joshi
     * Date : 19 July 2015
     * Description : to list dog's statics
     */
    function dog($gbId) {
        $this->loadModel('Veterinarian');
        // get vet of dog
        $vet_B_locus     = $this->Veterinarian->find('count', array('conditions' => array('b_locus_testing' => $gbId)));
        $vet_D_locus     = $this->Veterinarian->find('count', array('conditions' => array('d_locus_testing' => $gbId)));
        $vet_E_locus     = $this->Veterinarian->find('count', array('conditions' => array('e_locus_testing' => $gbId)));
        $vet_S_locus     = $this->Veterinarian->find('count', array('conditions' => array('s_locus_testing' => $gbId)));
        $vet_health_test = $this->Veterinarian->find('count', array('conditions' => array('health_testing'  => $gbId)));
        
        $this->set('vet_B_locus', $vet_B_locus);
        $this->set('vet_D_locus', $vet_D_locus);
        $this->set('vet_E_locus', $vet_E_locus);
        $this->set('vet_S_locus', $vet_S_locus);
        $this->set('vet_health_test', $vet_health_test);

        $this->layout = 'front';
        if ($gbId) {
          $this->GameBreed->recursive = '2';
          $this->GameBreed->bindModel(array('belongsTo' => array(
                                              'BreedImages' => array(
                                                'className' => 'BreedImages',
                                                'foreignKey' => 'breed_image_id'
                                                )
                                              )
                                            ));
          $gamebreed = $this->GameBreed->findById($gbId);
          //print_r($gamebreed);die;
          $gamebreed['Breed']['BreedImages'][0] = $gamebreed['BreedImages'];

          $this->set('breed', $gamebreed);

          $match=array();
          $match_puppy=array();
      		if(!empty($gamebreed["GameBreed"]["breed_id"])){

      			$this->GameBreed->bindModel(array("belongsTo"=>array("User")));
      			$gamebreed_dogs = $this->GameBreed->find("all",array("conditions"=>array("GameBreed.breed_id"=>$gamebreed["GameBreed"]["breed_id"])));
            // var_dump($this->gamebreed_dogs->lastQuery());  
           
      			if(!empty($gamebreed_dogs)){
      				foreach($gamebreed_dogs as $do_dog){
              
      					if($do_dog["GameBreed"]["gender"]=="Dog"){
                  if(!empty($do_dog["GameBreed"]["name"])){
      						  $match[$do_dog["GameBreed"]["user_id"]]["dog"]=$do_dog["GameBreed"]["name"];
      						}
                  if(!empty($do_dog["GameBreed"]["gen"])){						
          			   $match[$do_dog["GameBreed"]["user_id"]]["gen"]=$do_dog["GameBreed"]["gen"];
                  }
                }
                if($do_dog["GameBreed"]["gender"]=="Bitch"){
                  if(!empty($do_dog["GameBreed"]["name"])){						
                    $match[$do_dog["GameBreed"]["user_id"]]["bitch"]=$do_dog["GameBreed"]["name"];
                  }
                  if(!empty($do_dog["GameBreed"]["gen"])){						
                    $match[$do_dog["GameBreed"]["user_id"]]["gen"]=$do_dog["GameBreed"]["gen"];
                  }
                }
                if(in_array($do_dog["GameBreed"]["gender"],array("Dog","Bitch")) &&  $do_dog["GameBreed"]["age"] < 21){
                  if(!empty($do_dog["GameBreed"]["name"])){
                    $match_puppy[]=array(
                                          "puppy_name"=>$do_dog["GameBreed"]["name"],
                                          "sex"=>$do_dog["GameBreed"]["gender"],
                                          "age"=>$do_dog["GameBreed"]["age"],
                                          "owner"=>@$do_dog["User"]["first_name"]." ".@$do_dog["User"]["last_name"]
                                        );
                    $match[$do_dog["GameBreed"]["user_id"]]["puppy"]=$do_dog["GameBreed"]["name"];
                  }
                }
                if(!empty($do_dog["GameBreed"]["gen"])){						
                  $match[$do_dog["GameBreed"]["user_id"]]["gen"]=$do_dog["GameBreed"]["gen"];
                }
              }
            }
          }

          $this->set('matches', $match);
          $this->set('puppy_matches', $match_puppy);
        }
        //print_r($gamebreed);die;
        // , array('conditions' => array('breed_id'  => $gbId))
        $this->ShowWinner->recursive = 2;
        $winnersArr = $this->ShowWinner->find('all', array('contain' => array('ShowEntry'),'conditions' => array('ShowEntry.game_breed_id' => $gbId)));
        
        // echo '<pre/>'; print_r($winnersArr);
        $this->set('Winners', $winnersArr);
    }

function pedigree($gbId=null){


}


    /**
     * Method Name : Settings
     * Author Name : Naveen Joshi
     * Date : 26 July 2015
     * Description : kennel settings
     */
    function settings() {
        $this->layout = 'front';
        //echo '<pre/>'; print_r($_FILES['filename']['name']); die;
        $id = $this->Auth->user('id');
        if ($this->request->is('put') || $this->request->is('post')) {
            $userArr = array();

            //pr($_FILES);die;
            if (!empty($_FILES['kennel_banner']['name'])) {
                $this->unlink_thumbs(UPLOAD_KENNELBANNER_DIR, 'User', 'kennel_banner', array('id' => $id), array(), 'kennel_banners');
                $config['upload_path'] = UPLOAD_KENNELBANNER_DIR;
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = 2165466;
                $config['encrypt_name'] = true;

                $this->Upload->initializes($config);

                if ($this->Upload->do_upload('kennel_banner')) {

//echo '<pre/>'; print_r($_FILES['filename']['name']); die;
                    $imgdata_arr = $this->Upload->data();

                    $userArr['User']['kennel_banner'] = $imgdata_arr['file_name'];
                } else {
                    $errors[] = $this->Upload->display_errors();
                    $error_flag = true;
                }
            } else {
                //$userArr['User']['kennel_banner'] = @$this->request->data['User']['old_image'];
            }

            // pr($_FILES);
            if (!empty($_FILES['filename']['name'])) {

                //$this->unlink_thumbs(DISPLAY_USERIMG_DIR, 'User', 'photo', array('id' => $id), array(), 'user_images');
                $config['upload_path'] = UPLOAD_USERIMG_DIR;
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = 2165466;
                $config['encrypt_name'] = true;

                $this->Upload->initializes($config);

                if ($this->Upload->do_upload('filename')) {

//echo '<pre/>'; print_r($_FILES['filename']['name']); die;
                    $imgdata_arr = $this->Upload->data();

                    $userArr['User']['photo'] = $imgdata_arr['file_name'];
                } else {
                    $errors[] = $this->Upload->display_errors();
                    $error_flag = true;
                }
            } else {
                
            }


            if (!empty($_FILES['shop_banner']['name'])) {
                $this->unlink_thumbs(UPLOAD_KENNELBANNER_DIR, 'User', 'shop_banner', array('id' => $id), array(), 'kennel_banners');
                $config['upload_path'] = UPLOAD_KENNELBANNER_DIR;
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = 2165466;
                $config['encrypt_name'] = true;

                $this->Upload->initializes($config);

                if ($this->Upload->do_upload('shop_banner')) {
                    $imgdata_arr = $this->Upload->data();

                    $userArr['User']['shop_banner'] = $imgdata_arr['file_name'];
                } else {
                    $errors[] = $this->Upload->display_errors();
                    $error_flag = true;
                }
            } else {
                //$userArr['User']['kennel_banner'] = @$this->request->data['User']['old_image'];
            }

            if (!empty($_FILES['vet_banner']['name'])) {
                $this->unlink_thumbs(UPLOAD_KENNELBANNER_DIR, 'User', 'vet_banner', array('id' => $id), array(), 'kennel_banners');
                $config['upload_path'] = UPLOAD_KENNELBANNER_DIR;
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = 2165466;
                $config['encrypt_name'] = true;

                $this->Upload->initializes($config);

                if ($this->Upload->do_upload('vet_banner')) {
                    $imgdata_arr = $this->Upload->data();

                    $userArr['User']['vet_banner'] = $imgdata_arr['file_name'];
                } else {
                    $errors[] = $this->Upload->display_errors();
                    $error_flag = true;
                }
            } else {
                //$userArr['User']['kennel_banner'] = @$this->request->data['User']['old_image'];
            }






            if ($this->request->data['User']['password']) {
                $passArr = $this->User->findById($id, array('password'));
                $newPass = $this->Auth->password($this->request->data['User']['password']);
                if ($passArr['User']['password'] == $newPass) {
                    $userArr['User']['password'] = $this->Auth->password($newPass);
                } else {
                    $this->Session->setFlash(__('Old password is incorrect'), 'default', array('class' => 'error'));
                    $this->redirect(array('action' => 'settings'));
                }
            }
            $userArr['User']['kennel_desc'] = $this->request->data['User']['kennel_desc'];
            $userArr['User']['kennel_name'] = $this->request->data['User']['kennel_name'];
            $this->User->id = $id;
            // pr($userArr);die;
            if ($this->User->save($userArr, false)) {
                //echo '<pre/>'; print_r($updatedData);
                if (!empty($_FILES['filename']['name'])) {
                    $this->create_all_thumbs($imgdata_arr['file_name'], UPLOAD_KENNELBANNER_DIR, 'User', 'kennel_banner', array(), 'kennel_banners');
                }
                $this->Session->setFlash(__('Information updated successfully'), 'default', array('class' => 'success'));
            } else {
                $this->Session->setFlash(__('Information not updated successfully'), 'default', array('class' => 'error'));
            }
        }
        $rs = $this->User->read(null, $id);
        $this->request->data = $rs;
    }

    function training($category, $gameBreedId) {
        // $this->layout = 'user';
        if ($gameBreedId) {
            $this->GameBreed->recursive = '2';
            $this->Breed->bindModel(array('hasMany' => array('BreedImages')));
            $gamebreed = $this->GameBreed->findById($gameBreedId);
            $userImage = $this->UserBgImage->find();
            print_r($userImage);
            $this->set('breed', $gamebreed);
            $this->set('bgimg', $userImage);
            //echo '<pre/>'; print_r();
            $this->set('dogSkills', $this->DogSkill->findByGameBreedIdAndCategory($gameBreedId, $category));
        } else {
            $this->Session->setFlash(__('Invalid Page'), 'default', array('class' => 'error'));
        }
    }

    function train_now($dogSkillId, $param, $gameBreedId, $category) {
        if ($dogSkillId && $param) {
            $totalVal = $this->DogSkill->findById($dogSkillId, array($param));    /* $param holds all training parameters under confirmation, agility , rally */
            $gameBreedInfo = $this->GameBreed->findById($gameBreedId, array($category, 'energy'));
            if (($totalVal['DogSkill'][$param] != '100') && ($gameBreedInfo['GameBreed']['energy'] != 0)) { /**             * $category holds confirmation, agility, rally, obedience. */
                $skill_increase = rand(1, 5);
                $energy_decrease = rand(5, 25);
                if (($totalVal['DogSkill'][$param] + $skill_increase) >= 100) {
                    $totalVal['DogSkill'][$param] = 100;
                } else {
                    $totalVal['DogSkill'][$param] = $totalVal['DogSkill'][$param] + $skill_increase;
                }
                $this->DogSkill->id = $dogSkillId;
                $this->DogSkill->saveField($param, $totalVal['DogSkill'][$param]);
                $this->DogSkill->saveField('trainer_id', $this->Auth->user('id'));


                if (($gameBreedInfo['GameBreed']['energy'] != 0)) {
                    $dog_skill_level = $gameBreedInfo['GameBreed'][$category];
                    $dog_energy = $gameBreedInfo['GameBreed']['energy'];


                    if ($dog_skill_level + $skill_increase >= 100) {
                        $skill_increase = 100;
                    } else {
                        $skill_increase = $dog_skill_level + $skill_increase;
                    }

                    if ($dog_energy == 0) {
                        //do nothing
                    } elseif ($dog_energy <= $energy_decrease) {
                        $dog_energy = 0;
                    } else {
                        $dog_energy = $dog_energy - $energy_decrease;
                    }
                    $this->GameBreed->id = $gameBreedId;
                    $gmBd = array(
                        'GameBreed' => array(
                            $category => $skill_increase,
                            'energy' => $dog_energy
                        )
                    );
                    //$this->DogSkill->saveField($category,$gameBreedInfo['GameBreed'][$category]+2);
                    $this->GameBreed->save($gmBd, false);
                }
            } else {
                $this->Session->setFlash(__('Energy has been exhosted.Energy will be refreshed at 12pm game time or visit shop to buy enegry bone to refill energy.'), 'default', array('class' => 'error'));
            }
        }
        $this->redirect($this->referer());
    }

    function inc_energy_cron() {
        $allBreeds = $this->GameBreed->find('all');
        foreach ($allBreeds as $bd) {
            if ($bd['GameBreed']['energy'] != 100) {

                $inc = $bd['GameBreed']['energy'] * 0.1;

                $inc = intval($inc);

                // $new_energy = $bd['GameBreed']['energy'] + $inc;
                if ($new_energy > 100)
                    $new_energy = 100;

                $new_energy = 100;

                $this->GameBreed->id = $bd['GameBreed']['id'];
                $this->GameBreed->save(array(
                    'GameBreed.energy' => $new_energy
                ));
            }
        }
        die;
    }

    public function place_stud() {

        if (!empty($this->request->data)) {

            $data = $this->data;
            $breed = $this->GameBreed->findById($data['game_breed_id']);

            if (!empty($breed)) {

                if ($breed['GameBreed']['is_up_for_breed'] == '1') {

                    //Take Down
                    $this->GameBreed->id = $breed['GameBreed']['id'];
                    $this->GameBreed->save(array('is_up_for_breed' => 0, 'modified' => date('Y-m-d H:i:s')));

                    $this->Session->setFlash(__($breed['GameBreed']['name'] . ' has been taken down from stud list.'), 'default', array('class' => 'success'));
                } else {

                    //Place up for stud
                    $this->GameBreed->id = $breed['GameBreed']['id'];
                    $this->GameBreed->save(array('is_up_for_breed' => 1, 'breed_price' => $data['breed_price'], 'modified' => date('Y-m-d H:i:s')));

                    $this->Session->setFlash(__($breed['GameBreed']['name'] . ' has been put up on stud list.'), 'default', array('class' => 'success'));
                }
            }
        }
        $this->redirect($this->referer());
    }

    public function change_dog_name() {

          if (!empty($this->request->data)) {

              $data = $this->data;
              $breed = $this->GameBreed->findById($data['game_breed_id']);

              if (!empty($breed)) {
                  //Change dog name
                  $this->GameBreed->id = $breed['GameBreed']['id'];
                  $result  = $this->GameBreed->save(array('name' => $data['breed_name'], 'modified' => date('Y-m-d H:i:s')));
                  
                  $this->Session->setFlash(__($breed['GameBreed']['name'] . ' has been updated.'), 'default', array('class' => 'success'));
                 
              }
          }
          $this->redirect($this->referer());
      }

    public function purchase_bg($id = null) {
        /* Add bg to a/c */
        $this->autoRender = false;
        if ($this->request->is("post")) {
            $userId = $this->Auth->user('id');

            $this->loadModel("User");
            $creditArr = $this->User->findById($userId, array('credits', 'kennel_spaces', 'energy_bones', 'funds'));
            $Cost = 300;

            $paid = false;
            if ($creditArr["User"]["funds"] >= $Cost) {
                $credit_c = $creditArr['User']['funds']-300;
                $paid = true;
            }

            if ($paid) {
                $this->User->id = $userId;   //update credits
                $this->User->saveField('funds', $credit_c);  
          


                $this->Session->setFlash(__('Congratulations !! You have successfully purchased picture'), 'default', array('class' => 'success'));
            }
        } else {
            $this->Session->setFlash(__('Sorry You do not have enough credit left with you. '), 'default', array('class' => 'error'));
        }
        $this->redirect(array("action" => "select_stud", $id));
        die;
    }

    public function select_stud($id, $stud_id = '') {
        if (!empty($this->data)) {
            $stud_id = $this->data['select_dog'];
            //print_r($this->data);die;
        }

        if (!empty($id)) {

            $this->GameBreed->recursive = '2';
            $this->Breed->bindModel(array('hasMany' => array('BreedImages')));
            $bitch = $this->GameBreed->findById($id);

            // print_r($bitch);die;

            if ($bitch['GameBreed']['is_in_heat'] == 0 || $bitch['GameBreed']['gender'] != 'Bitch') {

                $this->Session->setFlash(__($breed['GameBreed']['name'] . ' cannot breed.'), 'default', array('class' => 'error'));
            } else {

                $this->GameBreed->recursive = '2';
                $this->Breed->bindModel(array('hasMany' => array('BreedImages')));

                $alldogs = $this->GameBreed->find('all', array('conditions' => array('GameBreed.user_id' => $bitch['GameBreed']['user_id'], 'GameBreed.gender' => 'Dog', 'GameBreed.age >=' => 21
//, 'GameBreed.breed_id' => $bitch['GameBreed']['breed_id']
                    ), "order" => array("GameBreed.id" => "desc")));

                if (!empty($stud_id)) {

                    $this->GameBreed->recursive = '2';
                    $this->Breed->bindModel(array('hasMany' => array('BreedImages')));

                    $dogs = $this->GameBreed->find('all', array('conditions' => array('GameBreed.id' => $stud_id)));
                    // echo $stud_id;
                    //  print_r($dogs);die;
                    if (!empty($dogs)) {

                        $mydog = $dogs[0];
                        $this->set('mydog', $mydog);
                    }
                } else {


                    if (!empty($alldogs)) {
                        $mydog = $alldogs[0];
                        $this->set('mydog', $mydog);
                    }
                }
                $userId = $this->Auth->user('id');
                $this->set('allPurchasedDog', $this->GameBreed->find('list', array('conditions' => array('GameBreed.user_id !=' => $userId), 'fields' => array("GameBreed.name", "GameBreed.name"))));
                $this->loadModel("UserBgImage");

                $purchase_img = $this->UserBgImage->field("image", array("user_id" => $this->Auth->user('id')), "id desc");

                $breed = $bitch;
//print_r($alldogs);die;

                $this->set('dogs', $alldogs);
                $this->set(compact('breed', 'purchase_img'));
            }
        }
    }

    public function do_breed($bitch_id, $dog_id) {

        if (!empty($bitch_id)) {

            $this->GameBreed->recursive = '2';
            $this->Breed->bindModel(
                    array(
                        'hasMany' => array('BreedImages')
                    )
            );
            $this->GameBreed->bindModel(
                    array(
                        'belongsTo' => array('User')
                    )
            );
            $bitch = $this->GameBreed->findById($bitch_id);

            // print_r($bitch);die;

            if (!empty($dog_id)) {

                $this->GameBreed->recursive = '2';
                $this->Breed->bindModel(array('hasMany' => array('BreedImages')));
                $dog = $this->GameBreed->findById($dog_id);

                $charge_amount = 0;

                if ($dog['GameBreed']['user_id'] != $bitch['GameBreed']['user_id']) {
                    $charge_amount = $dog['GameBreed']['breed_price'];
                }

                $rem_amount = $bitch['User']['funds'] - $charge_amount;
                if ($rem_amount < 0) {

                    $this->Session->setFlash(__('Not enough game funds to breed.'), 'default', array('class' => 'error'));

                    $this->redirect($this->referer());
                }

                $this->User->id = $bitch['User']['id'];
                $this->User->save(array('funds' => $rem_amount));

                //calculate stats & litter
                $max_litter = rand(1, $bitch['Breed']['litter_size']);

                $litter = array();

                $gender = array('Bitch', 'Dog');

                for ($i = 0; $i < $max_litter; $i++) {

                    //stats
                    //$litter[$i]['name'] = $bitch_id;
                    $litter[$i]['user_id'] = $bitch['GameBreed']['user_id'];
                    $litter[$i]['breed_id'] = $dog['GameBreed']['breed_id'];
                    $litter[$i]['cost'] = 0;
                    $litter[$i]['gender'] = array_rand($gender);
                    $litter[$i]['age'] = 0;
                    $litter[$i]['is_in_heat'] = 0;
                    $litter[$i]['gen'] = rand($bitch['GameBreed']['gen'], $dog['GameBreed']['gen']);
                    $litter[$i]['head'] = rand($bitch['GameBreed']['head'], $dog['GameBreed']['head']);
                    $litter[$i]['body'] = rand($bitch['GameBreed']['body'], $dog['GameBreed']['body']);
                    $litter[$i]['forequarters'] = rand($bitch['GameBreed']['forequarters'], $dog['GameBreed']['forequarters']);
                    $litter[$i]['hindquarters'] = rand($bitch['GameBreed']['hindquarters'], $dog['GameBreed']['hindquarters']);
                    $litter[$i]['coat'] = rand($bitch['GameBreed']['coat'], $dog['GameBreed']['coat']);
                    $litter[$i]['temperament'] = rand($bitch['GameBreed']['temperament'], $dog['GameBreed']['temperament']);
                    $litter[$i]['heart'] = 0;
                    $litter[$i]['hip'] = 0;
                    $litter[$i]['eyes'] = 0;
                    $litter[$i]['thyroid'] = 0;
                    $litter[$i]['confirmation'] = 0;
                    $litter[$i]['agility'] = 0;
                    $litter[$i]['obedience'] = 0;
                    $litter[$i]['rally'] = 0;
                    $litter[$i]['energy'] = 0;
                    $litter[$i]['rest'] = 0;
                    $litter[$i]['is_up_for_breed'] = 0;
                    $litter[$i]['breed_price'] = 0;

                    $date = date('Y-m-d', strtotime('+5 days'));

                    $litter[$i]['display_date'] = $date;
                    $litter[$i]['purchase_date'] = $date;
                    $i++;
                }
                // print_r($litter);die;

                $this->GameBreed->create();
                $this->GameBreed->saveAll($litter);

                $this->GameBreed->id = $bitch['GameBreed']['id'];
                $this->GameBreed->save(array('is_in_heat' => 1));


                $this->Session->setFlash(__('Breeding done successfully.'), 'default', array('class' => 'success'));

                $this->redirect(array('controller' => 'kennels', 'action' => 'index'));
            } else {
                $this->redirect($this->referer());
            }
        } else {
            $this->redirect($this->referer());
        }
    }

    public function increaseAgeCron() {

        $this->loadModel('GameBreed');

        $gamebreed = $this->GameBreed->find('all');

        foreach ($gamebreed as $gb) {

            if ($gb['GameBreed']['display_date'] >= date('Y-m-d')) {

                $newage = $gb['GameBreed']['age'] + 3;

                $this->GameBreed->id = $gb['GameBreed']['id'];
                $this->GameBreed->save(array('age' => $newage));
            }
        }
        /*
          $this->GameBreed->updateAll(array(
          'GameBreed.age' => 'GameBreed.age + 3'
          ));
         */
        echo 'age updated';
        die;
    }

    public function setEnergyToZero() {
      $this->loadModel('GameBreed');
      $this->GameBreed->updateAll(
          array('energy' => 0)
      );
          // $this->GameBreed->saveField('energy', '0');
        echo 'Energy Updated';
        die;
    }

    public function updateHeatColumnCron() {

        //type = 1 (put in heat) type=0 (take down from heat on 14th date of month)

        $this->loadModel('GameBreed');
        $bitches = $this->GameBreed->find('all', array(
            'conditions' => array(
                'GameBreed.gender' => 'Bitch',
                'GameBreed.age >=' => 14
            )
        ));

        if (!empty($bitches)) {

            $modified = date('Y-m-d H:i:s');

            foreach ($bitches as $bitch) {

                //update heat_days_left value for bitches already in heat
                if ($bitch['GameBreed']['is_in_heat'] == 1) {

                    if ($bitch['GameBreed']['heat_days_left'] > 0) {
                        $bitch['GameBreed']['heat_days_left'] = $bitch['GameBreed']['heat_days_left'] - 1;
                    }

                    if ($bitch['GameBreed']['heat_days_left'] == 0) {
                        $this->GameBreed->id = $bitch['GameBreed']['id'];
                        $this->GameBreed->save(array('is_in_heat' => 0, 'heat_date' => date('Y-m-d')));
                    }
                } else {

                    if (!empty($bitch['GameBreed']['heat_date'])) {
                        $cur_date = date_create(date('Y-m-d'));
                        $last_heat_date = date_create($bitch['GameBreed']['heat_date']);
                        $diff = date_diff($last_heat_date, $cur_date);
                        $days = $diff->days;

                        if ($days == 14) {
                            $this->GameBreed->id = $bitch['GameBreed']['id'];
                            $this->GameBreed->save(array(
                                'is_in_heat' => 1,
                                'heat_days_left' => 4,
                                'heat_date' => date('Y-m-d'),
                                'modified' => $modified
                            ));
                        }
                    } else {
                        //new born becoming adult now
                        $this->GameBreed->id = $bitch['GameBreed']['id'];
                        $this->GameBreed->save(array(
                            'is_in_heat' => 1,
                            'heat_days_left' => 4,
                            'heat_date' => date('Y-m-d'),
                            'modified' => $modified
                        ));
                    }
                }
            }
        }

        echo 'cron run successfully';
        die;
    }

    public function choose_stud($id) {
        // Configure::write('debug', 2);
        $this->loadModel('GameBreed');

        $bitch = $this->GameBreed->findById($id);

        $this->GameBreed->recursive = 2;

        $this->loadModel('Breed');
        $this->Breed->bindModel(array(
            'hasMany' => array(
                'BreedImages'
            )
        ));

        $conditions = array(
            'GameBreed.gender' => 'Dog',
            'GameBreed.is_up_for_breed' => 1,
            'GameBreed.age >=' => 21,
            'GameBreed.breed_id' => $bitch['GameBreed']['breed_id'],
            'GameBreed.status' => 1
        );

        $this->paginate = array(
            'conditions' => $conditions,
            'order' => 'GameBreed.id desc',
            'limit' => ADMIN_PAGE_LIMIT
        );

        $breeds = $this->paginate('GameBreed');

        if (empty($breeds)) {
            $this->Session->setFlash(__('No suitable stud found.'), 'default', array('class' => 'error'));
            $this->redirect($this->referer());
        }

        $this->set('bitch_id', $id);
        $this->set('breeds', $breeds);

        $this->render('choose_stud');
    }

}

?>
