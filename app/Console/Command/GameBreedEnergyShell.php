<?php 

class GameBreedEnergyShell extends AppShell {
    public $uses = array('GameBreed');
 
    public function update_game_breeds_enrgy() {
   		$this->GameBreed->updateAll(array('energy' => 100 ));
  		echo 'Enery Updated to 100';
    }
}

?>