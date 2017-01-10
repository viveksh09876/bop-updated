<?php
App::uses('AppModel', 'Model');
/**
* Breed Model
*
* @project Best of Pedigree
* @since 6-07- 2015
* @version Cake Php 2.3.8
* @author Naveen Joshi
*/
class Show extends AppModel {
	
	public $useTable = 'shows';
        var $filename_thumbs_arr = array('200x140');
	
        public $actsAs = array(
                'Upload.Upload' => array(
                    'picture' => array(
                        'path' => '{ROOT}webroot{DS}files{DS}shows{DS}',
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
