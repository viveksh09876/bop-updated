<?php
App::uses('AppModel', 'Model');
/**
* Breed Model
*
* @project Best of Pedigree
* @since 4 August 2016
* @version Cake Php 2.3.8
* @author Saad Ali
*/
class UserAchievements extends AppModel {
	
	public $useTable = 'user_achievements';
        
        public $belongsTo = array(
                'Achievement'=>array('className'=>'Achievements',
                                             'foreignKey'=>'achievement_id'),
                'User'=>array('className'=>'User',
                                             'foreignKey'=>'user_id')
        );
        
              
	
		
}

?>
