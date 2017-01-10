<?php 

class AgeUpdateShell extends AppShell {
    public $uses = array('GameBreed');
 
    public function update_game_breeds_age() {
   		$allGameBreedDogs = $this->GameBreed->find('all');        
        $currentdate = date('d',time());
        foreach ($allGameBreedDogs as $brd) {
            $dat = strtotime($brd['GameBreed']['modified']);
            $cday = date('d',$dat);
            $data = array(
            	'id' => $brd['GameBreed']['id'], 
            	'age' => ($brd['GameBreed']['age'] + 1),
            	'modified' => date('Y-m-d H:i:s')
        	);
            $result = $this->GameBreed->save($data);
        }
  		echo 'All Breeds Age Has Been Updated';
    }
}

?>