
<section id="main-content">
    <section class="wrapper">




        <div class="row">
            <div class="panel panel-default widget">
                <a href="<?php echo $this->Html->url(array("action"=>"index"));?>" class="btn btn-primary btn-xs pull-right" style="margin-right:10px;">Back to forum list</a>
                <div class="clearfix">&nbsp;</div>
                <div class="panel-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-xs-2 col-md-1">
                                    <?php if (!empty($PostArr['Forum']['post_image'])) { ?>
                                        <img alt="" src="<?php echo $this->webroot; ?>img/forums/<?php echo $PostArr['Forum']['post_image']; ?>" class="img-circle img-responsive">
                                    <?php } else { ?>
                                        <img alt="" src="<?php echo $this->webroot; ?>img/forums/paw.png" class="img-circle img-responsive">
                                    <?php } ?>
                                    
                                </div>
                                <div class="col-xs-10 col-md-11">
                                    <div style="margin-bottom:10px;">
                                        <h3><?php echo $PostArr['Forum']['post_title']; ?></h3>
                                       
                                    </div>
                                    <div class="comment-text">
                                        <?php echo $PostArr['Forum']['post_desc']; ?>
                                    </div>
                                     <div class="mic-info">
                                            By: <?php echo $PostArr['User']['first_name']; ?> Posted on <i class="fa fa-clock-o"></i> Posted on: <?php echo $this->Time->timeAgoInWords($PostArr['Forum']['post_added_date'], array('end' => '+150 years')); ?>
                                        </div>
                                    <div class="action">
                                        <a class="up" href="javascript:void(0)" id="like_<?php echo $PostArr['Forum']['forum_id']; ?>" onclick="vote('like', 'main', '<?php echo $PostArr['Forum']['forum_id']; ?>')" >
                                            <i class="fa fa-thumbs-o-up"></i><span class="main_likes"><?php echo $PostArr['Forum']['likes']; ?></span></a>
                                        <a class="down" href="javascript:void(0)" id="dislike_<?php echo $PostArr['Forum']['forum_id']; ?>"  onclick="vote('dislike', 'main', '<?php echo $PostArr['Forum']['forum_id']; ?>')"><i class="fa fa-thumbs-o-down"></i><span class="main_dislikes"><?php echo $PostArr['Forum']['dislikes']; ?></span></a>

                                    </div>
                                </div>
                            </div>
                        </li>

                        <li style="list-style-type:none;">
                            <ul class="list-group" style="margin-left:30px;">

                                <?php if ($PostArr['ForumComment']) {
                                    
                                    
                                    foreach ($PostArr['ForumComment'] as $cmt) { ?>
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-xs-2 col-md-1">

                                                    <?php if (!empty($cmt['User']['photo'])) { ?>
                                                        <img alt="" src="<?php echo $this->webroot; ?>files/user_images/<?php echo @$cmt['User']['photo']; ?>" class="img-circle img-responsive">
                                                    <?php } else { ?>
                                                        <img alt="" src="<?php echo $this->webroot; ?>img/avatar.jpg" class="img-circle img-responsive">
                                                    <?php } ?>
                                                </div>
                                                <div class="col-xs-10 col-md-11">
                                                  
                                                    <div class="comment-text">
                                                        <?php echo @$cmt['comments']; ?>
                                                    </div>
                                                    <div style="margin-top:10px;;margin-bottom:5px;">
                                                        <div class="mic-info">
                                                            By: <?php echo @$cmt['User']['first_name']; ?> Commented on: <i class="fa fa-clock-o"></i><?php echo $this->Time->timeAgoInWords($cmt['post_sent_date'], array('end' => '+150 years')); ?>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="action">
                                                        <a class="up" href="javascript:void(0)" id="like_<?php echo $cmt['forum_comment_id']; ?>" onclick="vote('like', 'sub', '<?php echo $cmt['forum_comment_id']; ?>')"><i class="fa fa-thumbs-o-up"></i><span class="sub_likes_<?php echo $cmt['forum_comment_id']; ?>"><?php echo $cmt['likes']; ?></span></a>
                                                        <a class="down" href="javascript:void(0)" id="dislike_<?php echo $cmt['forum_comment_id']; ?>" onclick="vote('dislike', 'sub', '<?php echo $cmt['forum_comment_id']; ?>')"><i class="fa fa-thumbs-o-down"></i><span class="sub_dislikes_<?php echo $cmt['forum_comment_id']; ?>"><?php echo $cmt['dislikes']; ?></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <?php
                                    }
                                }
                                ?>

                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </div>






        <div class="row">
            <div class="col-lg-8 col-md-8">




                <div class="post">
                    <?php echo $this->Form->create('ForumComment', array('id' => 'cmt_frm')); ?>
                    <div class="topwrap">
                        

                        <div class="posttext pull-left">
                            <div class="textwraper">
                                <div class="postreply">Post a Reply</div>

                                <?php echo $this->Form->input('ForumComment.comments', array('type' => 'textarea', 'placeholder' => 'Type your comment here', 'label' => false, 'required' => false)); ?>
                                <?php echo $this->Form->input('ForumComment.forum_id', array('type' => 'hidden', 'value' => $PostArr['Forum']['forum_id'])); ?>

                            </div>
                        </div>

                        <div class="clearfix"></div>
                    </div> 
                    <?php echo $this->Session->flash(); ?>
                    <div class="postinfobot">

                        <div class="pull-right postreply">
                            <div class="pull-left"><button class="btn btn-primary" type="submit" onclick=" return save_comment();">Post Reply</button></div>
                            <div class="clearfix"></div>
                        </div>


                        <div class="clearfix"></div>
                    </div>
                    <?php echo $this->Form->end(); ?>
                </div><!-- POST -->


            </div>
        </div>
    </section>
</section>

<script>
    function save_comment() {
        $('#cmt_frm').submit();
    }

    function vote(vote, type, id) {
        var url = '<?php echo $this->webroot; ?>forums/vote/' + vote + '/' + type + '/' + id;
        $.get(url, function (data) {
            var jdata = $.parseJSON(data);
            if (jdata.type == 'main') {
                $('.main_likes').text(jdata.likes);
                $('.main_dislikes').text(jdata.dislikes);
            }

            if (jdata.type == 'sub') {
                $('.sub_likes_' + jdata.id).text(jdata.likes);
                $('.sub_dislikes_' + jdata.id).text(jdata.dislikes);
            }

        });


    }
</script>
<style>
    textarea {
        height: 115px;
        width: 778px;
    }   

</style>