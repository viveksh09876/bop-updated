<?php
App::uses('AppModel', 'Model');
/**
* Game Fund
*
* 
*/
class Job extends AppModel {
	
	public $useTable = 'jobs';
        
        public $hasMany=array(
                 'AppliedJob'=>array(
                     'className'=>'AppliedJob',
                     'foreignKey'=>'job_id',
                     'dependency'=>false
                 )
        );
        
        public $belongsTo=array(
                 'GameBreed'=>array(
                     'className'=>'GameBreed',
                     'foreignKey'=>'game_breed_id',
                     'dependency'=>false
                 )
        );
}

?>
