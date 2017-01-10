<?php

App::uses('AppModel', 'Model');

/**
 * User Model
 *
 * @project Crossfit
 * @since 13 August 2013
 * @version Cake Php 2.3.8
 * @author Bhanu Prakash Pandey
 */
class User extends AppModel {

    /**
     * Validation rules
     *
     * @var array
     * 
     */
    var $filename_thumbs_arr = array('200x140');
    public $virtualFields = array(
        'name' => 'CONCAT(User.first_name, " ", User.last_name)'
    );
    public $validate = array(
        'first_name' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'Please enter a first name'
            )
        ),
        'last_name' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'Please enter a last name'
            )
        ),
        'email' => array(
            array('rule' => 'notEmpty',
                'message' => 'Please enter the email'
            ),
            array('rule' => 'email',
                'message' => 'Invalid email'
            ),
            'checkEmailAvailbility' => array(
                'rule' => 'checkEmailAvailbility',
                'message' => 'The given email already exists'
            )
        ),
        'password' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'Please enter a password'
            )/* ,
          'between' => array(
          'rule' => array('between', 4, 20),
          'message' => 'Password should be at least 4 chars long'
          ) */
        ),
    );
    public $actsAs = array(
        'Upload.Upload' => array(
            'picture' => array(
                'path' => '{ROOT}webroot{DS}files{DS}user_images{DS}',
                'thumbnailMethod' => 'php',
                'thumbnailSizes' => array(
                    'big' => '200x200',
                    'small' => '120x120',
                    'thumb' => '80x80'
                )
            )
        )
    );

    function checkEmailAvailbility() {
        $result = false;
        if ($this->data['User']['id']) {
            $result = $this->find('all', array('conditions' => array('email' => $this->data['User']['email'], 'id NOT ' => $this->data['User']['id']), 'fields' => array('id')));
        } else {
            $result = $this->find('all', array('conditions' => array('email' => $this->data['User']['email']), 'fields' => array('id')));
        }
        if ($result) {
            return false;
        } else {
            return true;
        }
    }

}
