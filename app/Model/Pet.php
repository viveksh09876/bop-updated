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
class Pet extends AppModel {
	
	public $useTable = 'shop_pets';
        var $filename_thumbs_arr = array('200x140');
	public $belongsTo=array('Breed'=>array('className'=>'Breed',
                                              'foreignKey'=>'breed_id',
                                              'dependency'=>false));
       

        }

?>
