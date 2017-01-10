<?php
App::uses('AppModel', 'Model');
/**
* Kennel Space
*
*
*/
class GameBreedDog extends AppModel {

	public $useTable = 'game_breeds';
    public function getPurchaseDog($id){
    	return $this->query('SELECT name, id FROM game_breeds WHERE user_id ='. $id);
    }
}

?>