<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Veterinarian extends AppModel {
    
    var $belongsTo = array( 
    'Dog' =>
                array(
                    'className' => 'User',
                    'foreignKey' => 'user_id',
                    'conditions' => '',
                    'fields' => array("id"),
                    'order' => ''
            ),
);
}