<?php
App::uses('AppModel', 'Model');
/**
* Trainer Log Model
*
* @project Best of Pedigree
* @since 24 August 201
* @version Cake Php 2.3.8
* @author Saad Ali
*/
class TrainerLog extends AppModel {
	
	public $useTable = 'trainer_log';
	public $belongsTo = array('AppliedJob'=>array(
            'className'=>'AppliedJob',
            'foreignKey'=>'applied_job_id',
            'dependency'=>false
        )
    );
}
?>
