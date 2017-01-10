<?php

App::uses('Controller', 'Controller');

/**
 * Home Controller
 *
 * Purpose : Manage All home page activities
 * @project Best of Pedigree
 * @since 11 July, 2015
 * @version Cake Php 2.3.8
 * @author : Naveen Joshi
 */
class HomeController extends AppController
{
	
	public function beforeFilter() {
		$this->Auth->allow(array('index'));
		parent::beforeFilter();
	}


	/**
	 * Method Name : index
	 * Author Name : Naveen Joshi
	 * Date : 11 July, 2015
	 * Description : Home page 
	 */
	public function index() {
            $this->layout='default';
            if($this->Auth->user('id')){
                $this->redirect(array('controller'=>'kennels','action'=>'index'));
            }
           
       }



}
