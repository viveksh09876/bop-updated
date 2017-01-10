<?php
App::uses('AppModel', 'Model');
/**
* Category Model
*
* 
* @since 7 August 2013
* @version Cake Php 2.3.8
* @author Naveen
*/
class ShowWinner extends AppModel {
    public $useTable='show_winners';
    
    public $belongsTo=array(
        'Show'=>array('className'=>'Show',
                      'foreignKey'=>'show_id',
                      'dependency'=>false),
        'ShowEntry'=>array('className'=>'ShowEntry',
                      'foreignKey'=>'show_entry_id',
                      'dependency'=>false)
    );
}
