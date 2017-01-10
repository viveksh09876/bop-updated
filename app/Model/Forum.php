<?php
/**********************************************
 ** Model Name : Artcile Model
 ** Desc : This model will be used for managing Articles 
    of Resource Section.
 ** Developed By : Rajesh Kumar Kanojia
 ** Developed On : March 18 2014
***********************************************/

 class Forum extends AppModel {
	 public $primaryKey = 'forum_id';
	 public $useTable='forums';
	 public $belongsTo=array('User'=>array('className'=>'User',
	                                        'foreignKey'=>'user_id')
	 
	 );
         
         public $hasMany=array('ForumComment'=>array('className'=>'ForumComment',
	                                        'foreignKey'=>'forum_id',
                                                'dependency'=>true)
	 
	 );
	 
	  public $validate=array(
                         'post_title' => array(
                                  'rule'=>'notEmpty',   
				'message' => 'please enter post title.'   
                           ),
                          
                           'post_slug' => array(
                                            'required' => array(
                                                    'rule' => array('notempty'),
                                            ),
                                            'checkSlugAvailbility' => array(
                                                    'rule' => 'checkSlugAvailbility',
                                                    'message' => 'The given slug is already exist'			
                                            )
                                    ),
                             );


	      function checkSlugAvailbility(){
				$result=false;
				if(isset($this->data['Forum']['forum_id'])){
					$result=$this->find('all',array('conditions'=>array('Forum.post_slug'=>$this->data['Forum']['post_slug'],'forum_id NOT'=>$this->data['Forum']['forum_id']),'fields'=>array('forum_id')));
				}else{
					$result=$this->find('all',array('conditions'=>array('Forum.post_slug'=>$this->data['Forum']['post_slug']),'fields'=>array('forum_id')));
				}	
				
				if($result){
					 $this->data['Forum']['post_slug']= $this->data['Forum']['post_slug'].time('H:i:s');
					 return true;
				}else{
					return true;
				}
			
	}
	 
 }
?>