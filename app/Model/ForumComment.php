<?php
/**********************************************
 ** Model Name : Artcile Model
 ** Desc : This model will be used for managing Articles
 of Resource Section.
 ** Developed By : Rajesh Kumar Kanojia
 ** Developed On : March 18 2014
 ***********************************************/

class ForumComment extends AppModel {
	public $primaryKey = 'forum_comment_id';
	public $useTable='forum_comments';
	//var $actsAs = array('Tree');
	
	public $belongsTo=array('User'=>array('className'=>'User',
	                                      'foreignKey'=>'user_id'
	));

	

  

}
?>