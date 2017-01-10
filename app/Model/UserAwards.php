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
class UserAwards extends AppModel {
	
        public $useTable = 'user_awards';

        public $belongsTo = array(
                'Award'=>array('className'=>'Awards',
                                             'foreignKey'=>'award_id'),
                'User'=>array('className'=>'User',
                                             'foreignKey'=>'user_id')
        );
}

?>
