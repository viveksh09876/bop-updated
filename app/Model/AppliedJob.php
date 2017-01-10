<?php
App::uses('AppModel', 'Model');
/**
* 
*
* 
*/
class AppliedJob extends AppModel {
	
	public $useTable = 'applied_jobs';
        
        public $belongsTo=array(
                 'User'=>array(
                     'className'=>'User',
                     'foreignKey'=>'applied_by',
                     'dependency'=>false
                 ),
            'Job'=>array(
                     'className'=>'Job',
                     'foreignKey'=>'job_id',
                     'dependency'=>false
                 )
            
        );
}

?>
