<?php 

App::uses('Controller', 'Controller');

/**
 * Forums Controller
 *
 * Purpose : Manage Forums
 * @project Best of Pedigree
 * @since 31 August, 2015
 * @version Cake Php 2.3.8
 * @author : Naveen Joshi
 */
class ForumsController extends AppController 
{
	public $uses=array('Forum','ForumComment');
	public function beforeFilter() {
		//$this->Auth->allow(array('product_fields'));
		parent::beforeFilter();
	}
	
	
	/**
	 * Method Name : admin_manage	 
	 * Author Name : Naveen Joshi
	 * Date : 31 August, 2015
	 * Description : manage forums
	 */
        
        function index(){
	    $this->layout='front';
            $this->paginate=array('conditions'=>array('Forum.status'=>'Active'),'order'=>array('Forum.forum_id'=>'desc'),'limit'=>9);
	    $data=$this->paginate('Forum');
	    $this->set('data',$data);
            //echo '<pre/>';print_r($data); die;
                
	}
        
        function comments($slug){
            $this->layout='front';
            $this->Forum->recursive='2';
            $forumArr=$this->Forum->findByPostSlug($slug);
            $this->set('PostArr',$forumArr); //echo '<pre/>';print_r($forumArr); die;
            if($this->request->is('post')){
                if($forumArr['Forum']['comment_status']=='Close'){
                    $this->Session->setFlash(__('Comments are now closed for this post. '),'default',array('class'=>'error'));
                    $this->redirect(array('action'=>'comments',$slug)); die;
                }
                
                $this->request->data['ForumComment']['user_id']=$this->Auth->user('id');
                $this->request->data['ForumComment']['post_sent_date']=date('Y-m-d H:i:s');  
                if($this->ForumComment->save($this->request->data)){
                     $this->Forum->updateAll(array('Forum.total_comments' =>'Forum.total_comments + 1'), array('Forum.forum_id' =>$this->request->data['ForumComment']['forum_id']));
                     $this->Session->setFlash(__('Comment posted successfully. '),'default',array('class'=>'success'));
                     $this->redirect(array('action'=>'comments',$slug));
                }else{
                     $this->Session->setFlash(__('Comment could not be posted, please try again later. '),'default',array('class'=>'error'));
                }
            }else{
                 $this->Forum->updateAll(array('Forum.total_views' =>'Forum.total_views + 1'), array('Forum.forum_id' =>$forumArr['Forum']['forum_id']));
            }
                
	}
        
       function admin_manage(){
		$this->layout='admin';
		$this->paginate=array('order'=>array('Forum.forum_id'=>'desc'),'limit'=>9);
		$data=$this->paginate('Forum');
		$this->set('data',$data);
	}
        
         function admin_view_comments($id=null){
		$this->layout='admin';
		$this->paginate=array('conditions'=>array('ForumComment.forum_id'=>$id),'order'=>array('ForumComment.forum_comment_id'=>'desc'),'limit'=>9);
		$data=$this->paginate('ForumComment');
               // echo '<pre/>'; print_r($data); die;
		$this->set('data',$data);
	}
        
         function admin_add_post(){
		$this->layout='admin';
                if($this->request->data){
                    $this->request->data['Forum']['user_id']=$this->Auth->user('id');
                    $this->request->data['Forum']['post_added_date']=date('Y-m-d H:i:s');
                    $this->Forum->set($this->request->data);
                    if($this->Forum->validates(array('fieldList'=>array('post_slug')))){
                        if(!empty($this->request->data["Forum"]["image"]["name"])){
                            $name=  uniqid()."_".$this->request->data["Forum"]["image"]["name"];
                            $path=WWW_ROOT."img/forums/".$name;
                            move_uploaded_file($this->request->data["Forum"]["image"]["tmp_name"], $path);
                            $this->request->data['Forum']['post_image']=$name;
                        }
                        
                        if($this->Forum->save($this->request->data)){
                           $this->Session->setFlash(__('Post has been added successfully.'),'default',array('class'=>'success'));
                           $this->redirect(array('action'=>'manage')); 
                        }
                    }
                }
		
	}
        
         function admin_edit_post($id=null){
		$this->layout='admin';
                $rs=$this->Forum->read(null,$id);
                $this->set("rs",$rs);
                if($this->request->is('put')){
                    $this->request->data['Forum']['user_id']=$this->Auth->user('id');
                    $this->request->data['Forum']['post_updated_date']=date('Y-m-d H:i:s');
                    $this->Forum->set($this->request->data);
                    if($this->Forum->validates(array('fieldList'=>array('post_slug')))){
                         if(!empty($this->request->data["Forum"]["image"]["name"])){
                            $name=  uniqid()."_".$this->request->data["Forum"]["image"]["name"];
                            $path=WWW_ROOT."img/forums/".$name;
                            move_uploaded_file($this->request->data["Forum"]["image"]["tmp_name"], $path);
                            $this->request->data['Forum']['post_image']=$name;
                        }
                        
                        if($this->Forum->save($this->request->data)){
                           $this->Session->setFlash(__('Post has been updated successfully.'),'default',array('class'=>'success'));
                           $this->redirect(array('action'=>'manage')); 
                        }
                    }
                }else{
                $this->request->data=$rs;
                }
		
	}
        
        function admin_delete_post($id=null){
		$this->Forum->id=$id;
		$rs=$this->Forum->read(null,$id);
		if(!$this->Forum->exists()) {
			$this->Session->setFlash(__('Invalid Access'));
			$this->redirect(array('action'=>'manage'));
		}
		if($this->Forum->delete($id)) {
			$this->Session->setFlash(__('Post deleted successfully.'),'default',array('class'=>'success'));
			$this->redirect(array('action'=>'manage','admin'=>true));
		}
	}
        
        function admin_delete_comment($id=null){
		$this->ForumComment->id=$id;
		if(!$this->ForumComment->exists()) {
			$this->Session->setFlash(__('Invalid Access'));
			$this->redirect($this->referer());
		}
		if($this->ForumComment->delete($id)) {
			$this->Session->setFlash(__('Comment deleted successfully.'),'default',array('class'=>'success'));
			$this->redirect($this->referer());
		}
	}

	function admin_view($id=null){
		$this->layout='admin';
		$this->paginate=array('conditions'=>array('ForumComment.forum_id'=>$id),'limit'=>'9');
		$data=$this->paginate('ForumComment');
		$this->set('data',$data);
	}

	function approve($id){
		if($id){
			$this->Forum->id=$id;
			if($this->Forum->saveField('topic_status', 'Approved')){
				$this->Session->setFlash(__('Topic is approved.'),'default',array('class'=>'success'));
				$this->redirect(array('action'=>'index','admin'=>true));
			}
		}
	}

	function disapprove($id){
		if($id){
			$this->Forum->id=$id;
			if($this->Forum->saveField('topic_status', 'Disapproved')){
				$this->Session->setFlash(__('Topic is Disapproved.'),'default',array('class'=>'success'));
				$this->redirect(array('action'=>'index','admin'=>true));
			}
		}
	}


	function admin_change_post_status($status,$id){
		if($id){
			$this->Forum->id=$id;
			if($this->Forum->saveField('comment_status', $status)){
				$this->Session->setFlash(__('Comment status changed successfully.'),'default',array('class'=>'success'));
				$this->redirect(array('action'=>'manage','admin'=>true));
			}
		}else{
                    $this->Session->setFlash(__('Invalid Id.'),'default',array('class'=>'error'));
			$this->redirect(array('action'=>'manage','admin'=>true));
                } 
	}
	
        
        function admin_change_comment_status($status,$id){
		if($id){
			$this->ForumComment->id=$id;
			if($this->ForumComment->saveField('status', $status)){
				$this->Session->setFlash(__('Comment status changed successfully.'),'default',array('class'=>'success'));
				$this->redirect($this->referer());
			}
		}else{
                    $this->Session->setFlash(__('Invalid Id.'),'default',array('class'=>'error'));
			$this->redirect($this->referer());
                } 
	}
	
        
        
	function admin_answer_query($id=null){
		$this->layout='admin';
		$this->Forum->id=$id;
		if(!$this->Forum->exists()) {
			$this->Session->setFlash(__('Invalid Access'));
			$this->redirect(array('action'=>'index'));
		}
		$rs=$this->Forum->read(null,$id);
		if($this->request->is('post') || $this->request->is('put')) {
			$this->request->data['Forum']['answer_date']=date('Y-m-d H:i:s');
			$this->request->data['Forum']['answer_status']="Answered";
			if($this->Forum->save($this->request->data)){
				$this->Session->setFlash(__('Comment answer is added.'),'default',array('class'=>'success'));
				$this->redirect(array('action'=>'list_answer',$id,'admin'=>true));
			}
		}
		$this->request->data=$rs;
	}

	function admin_list_answer($id=null){
		$this->layout='admin';
		$data=$this->Forum->findByForumId($id);
		$this->set('data',$data);
	}


	function approve_comment($id){
		if($id){
			$rs=$this->ForumComment->read(null,$id);
			$this->ForumComment->id=$id;
			if($this->ForumComment->saveField('comment_status', 'Approved')){
				$this->Session->setFlash(__('Comment is approved .'),'default',array('class'=>'success'));
				$this->redirect(array('action'=>'view',$rs['ForumComment']['forum_id'],'admin'=>true));
			}
		}
	}

	function disapprove_comment($id){
		if($id){
			$rs=$this->ForumComment->read(null,$id);
			$this->ForumComment->id=$id;
			if($this->ForumComment->saveField('comment_status', 'Disapproved')){
				$this->Session->setFlash(__('Comment is Disapproved.'),'default',array('class'=>'success'));
				$this->redirect(array('action'=>'view',$rs['ForumComment']['forum_id'],'admin'=>true));
			}
		}
	}

	
    function vote($vote, $type, $id){
        $this->loadModel('ForumVote');
        $neverDone='0';
         if($type=='main'){
             $isAlreadyLiked=$this->ForumVote->findByForumIdAndUserIdAndVote($id,$this->Auth->user('id'),'like');
             $isAlreadyDisLiked=$this->ForumVote->findByForumIdAndUserIdAndVote($id,$this->Auth->user('id'),'dislike');
             
            if($vote=='like' && $isAlreadyDisLiked){
                $this->Forum->updateAll(array('Forum.dislikes' =>'Forum.dislikes - 1'), array('Forum.forum_id' =>$id)); 
                $this->Forum->updateAll(array('Forum.likes' =>'Forum.likes + 1'), array('Forum.forum_id' =>$id));
                $this->ForumVote->updateAll(array('ForumVote.vote' =>'"like"'), array('ForumVote.id' =>$isAlreadyDisLiked['ForumVote']['id']));
            }elseif($vote=='dislike' && $isAlreadyLiked){
                $this->Forum->updateAll(array('Forum.likes' =>'Forum.likes - 1'), array('Forum.forum_id' =>$id));
                $this->Forum->updateAll(array('Forum.dislikes' =>'Forum.dislikes + 1'), array('Forum.forum_id' =>$id)); 
                $this->ForumVote->updateAll(array('ForumVote.vote' =>'"dislike"'), array('ForumVote.id' =>$isAlreadyLiked['ForumVote']['id']));
            }elseif($vote=='dislike' && !($isAlreadyLiked)  && !($isAlreadyDisLiked)){
                $this->Forum->updateAll(array('Forum.dislikes' =>'Forum.dislikes + 1'), array('Forum.forum_id' =>$id));
                $neverDone='1';
            }elseif($vote=='like' && !($isAlreadyLiked)  && !($isAlreadyDisLiked)){
                $this->Forum->updateAll(array('Forum.likes' =>'Forum.likes + 1'), array('Forum.forum_id' =>$id));
                $neverDone='1';
            }
            
            if($neverDone){
                $voteArr=array();
                 $voteArr['ForumVote']['forum_id']=$id;
                 $voteArr['ForumVote']['user_id']=$this->Auth->user('id');
                 $voteArr['ForumVote']['vote']=$vote;
                 $this->ForumVote->save($voteArr,false);
            }
            $rs=$this->Forum->findByForumId($id,array('likes','dislikes'));
            $likes=$rs['Forum']['likes'];
            $dislikes=$rs['Forum']['dislikes'];
         }
        if($type=='sub'){
             $isAlreadyLiked=$this->ForumVote->findByForumCommentIdAndUserIdAndVote($id,$this->Auth->user('id'),'like');
             $isAlreadyDisLiked=$this->ForumVote->findByForumCommentIdAndUserIdAndVote($id,$this->Auth->user('id'),'dislike');
             
           if($vote=='like' && $isAlreadyDisLiked){
                $this->ForumComment->updateAll(array('ForumComment.likes' =>'ForumComment.likes + 1'), array('ForumComment.forum_comment_id' =>$id)); 
                $this->ForumComment->updateAll(array('ForumComment.dislikes' =>'ForumComment.dislikes - 1'), array('ForumComment.forum_comment_id' =>$id)); 
                $this->ForumVote->updateAll(array('ForumVote.vote' =>'"like"'), array('ForumVote.id' =>$isAlreadyDisLiked['ForumVote']['id']));
            }elseif($vote=='dislike' && $isAlreadyLiked){
                $this->ForumComment->updateAll(array('ForumComment.likes' =>'ForumComment.likes - 1'), array('ForumComment.forum_comment_id' =>$id)); 
                $this->ForumComment->updateAll(array('ForumComment.dislikes' =>'ForumComment.dislikes + 1'), array('ForumComment.forum_comment_id' =>$id)); 
                 $this->ForumVote->updateAll(array('ForumVote.vote' =>'"dislike"'), array('ForumVote.id' =>$isAlreadyLiked['ForumVote']['id']));
            }elseif($vote=='dislike' && !($isAlreadyLiked)  && !($isAlreadyDisLiked)){
                $this->ForumComment->updateAll(array('ForumComment.dislikes' =>'ForumComment.dislikes + 1'), array('ForumComment.forum_comment_id' =>$id));
                $neverDone='1';
            }elseif($vote=='like' && !($isAlreadyLiked)  && !($isAlreadyDisLiked)){
                $this->ForumComment->updateAll(array('ForumComment.likes' =>'ForumComment.likes + 1'), array('ForumComment.forum_comment_id' =>$id));
                $neverDone='1';
            }
             if($neverDone){
                 $voteArr=array();
                 $voteArr['ForumVote']['forum_comment_id']=$id;
                 $voteArr['ForumVote']['user_id']=$this->Auth->user('id');
                 $voteArr['ForumVote']['vote']=$vote;
                 $this->ForumVote->save($voteArr,false);
             }
            $rs=$this->ForumComment->findByForumCommentId($id,array('likes','dislikes'));
            $likes=$rs['ForumComment']['likes'];
            $dislikes=$rs['ForumComment']['dislikes'];
        }
        
        echo json_encode(array('likes'=>$likes,'dislikes'=>$dislikes,'type'=>$type,'vote'=>$vote,'id'=>$id)); die;
    }
	
}

	?>