<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class UsersDiscussion extends AppModel {
    
    var $belongsTo = array(
    'Discussion' =>
                array(
                    'className' => 'Discussion',
                    'foreignKey' => 'discussion_id',
                    'conditions' => '',
                    'fields' => '',
                    'order' => ''
            ),  
    'Sender' =>
                array(
                    'className' => 'User',
                    'foreignKey' => 'sender_id',
                    'conditions' => '',
                    'fields' => array("first_name","last_name","id"),
                    'order' => ''
            ),  
    'Received' =>
                array(
                    'className' => 'User',
                    'foreignKey' => 'received_id',
                    'conditions' => '',
                    'fields' => array("first_name","last_name","id"),
                    'order' => ''
            ),  

);
}