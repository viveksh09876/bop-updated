<?php
App::uses('AppModel', 'Model');
/**
* Breed Model
*
* @project Best of Pedigree
* @since 13 June 2015
* @version Cake Php 2.3.8
* @author Vivek Sharma
*/
class ShowEntry extends AppModel {
	
	public $useTable = 'show_entries';
        public $validate=
                array(
                    'game_breed_id'=>array(
                        'rule'=>'notEmpty',
                        'message'=>'please select dog.'
                    )
                    
                );
        
        public $belongsTo=array(
                         'GameBreed'=>array('className'=>'GameBreed',
                                             'foreignKey'=>'game_breed_id')
        );
        
              
	
		
}

?>
