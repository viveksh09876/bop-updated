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
class BackgroundImage extends AppModel {
	
	public $useTable = 'shop_background_images';
        var $filename_thumbs_arr = array('200x140');
	
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
