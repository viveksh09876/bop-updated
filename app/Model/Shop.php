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
class Shop extends AppModel {
	
	public $useTable = 'shops';
        var $filename_thumbs_arr = array('200x140');
	public $belongsTo=array('Breed'=>array('className'=>'Breed',
                                              'foreignKey'=>'breed_id',
                                              'dependency'=>false));
        public $actsAs = array(
                'Upload.Upload' => array(
                    'picture' => array(
                        'path' => '{ROOT}webroot{DS}files{DS}backgroundImgs{DS}',
                        'thumbnailMethod' => 'php',
                        'thumbnailSizes' => array(
                            'big' => '200x200',
                            'small' => '120x120',
                            'thumb' => '80x80'
                        )
                    )
                )
            );

        }

?>
