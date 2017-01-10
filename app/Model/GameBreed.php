<?php
App::uses('AppModel', 'Model');
/**
* Kennel Space
*
*
*/
class GameBreed extends AppModel {

	public $useTable = 'game_breeds';
        public $belongsTo=array(
        			'Breed'=>array('className'=>'Breed',
                                              'foreignKey'=>'breed_id',
                                              'dependency'=>false),
                                'BreedImages'=>array('className'=>'BreedImages',
                                              'foreignKey'=>'breed_image_id',
                                              'dependency'=>false)
                               
                               );
}

?>