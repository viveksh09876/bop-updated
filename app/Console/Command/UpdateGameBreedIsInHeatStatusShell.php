<?php 

class UpdateGameBreedIsInHeatShell extends AppShell {
    public $uses = array('GameBreed');
 
 	private function getDays($purchased_date){
      $now = time(); // or your date as      
      $your_date = strtotime($purchased_date);
      $datediff = floor(($now - $your_date)/(60*60*24));
      return $datediff;
    }

    public function update_game_breeds_is_in_heat_status() {
    	$bitches = $this->GameBreed->find('all', array('conditions' => array(
    		'gender' => 'Bitch',
    		'age >=' => 21
		)));
   		foreach ($bitches as $gameBreed) {
   			$daysDifference = $this->getDays($gameBreed['GameBreed']['heat_date']);
   			$this->GameBreed->id = $gameBreed['GameBreed']['id'];
	        if ($daysDifference % 18 >= 0 && $daysDifference % 18 < 3)
              	$this->GameBreed->saveField('is_in_heat', 1);
	        else
              	$this->GameBreed->saveField('is_in_heat', 0);
   		}
        echo 'Is In Heat Status Updated';
    }
}

?>