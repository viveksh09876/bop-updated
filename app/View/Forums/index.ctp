<section id="main-content">
    <section class="wrapper">

        <div class="row">

        </div><div class="col-lg-12 col-md-12">
            <style>
                .panel-default {
                    border: 0px solid #000000;
                    -moz-border-radius: 7px;/*Firefox*/
                    -webkit-border-radius: 7px;/*Safari, Chrome*/
                    border-radius: 7px;

                }
                .panel{
                    background: transparent;
                    border: none!important;
                }
                .panel-heading{
                    background-color: #B378D3!important;
                    color:#fff!important;
                    font-weight: bold;
                }
                .panel-body{
                    background-color: #fff;
                }
            </style>

            <div class="panel panel-default">
                <div class="panel-heading">Forums</div>
                <?php
                if ($data) {
                    $first_id=true;
                    foreach ($data as $dt) {
                       if($first_id){
                           $margin="";
                       }else{
                           $margin="margin-top:15px;";
                       }
                       $first_id=false;
                        ?>
                <div class="panel-body" style="<?php echo $margin;?>">
                            <div class="row">
                                <div class="col-xs-2 col-md-1">
                                    <?php if (!empty($dt['Forum']['post_image'])) { ?>
                                        <img alt="" src="<?php echo $this->webroot; ?>img/forums/<?php echo $dt['Forum']['post_image']; ?>" class="img-circle img-responsive">
                                    <?php } else { ?>
                                        <img alt="" src="<?php echo $this->webroot; ?>img/forums/paw.png" class="img-circle img-responsive">
                                    <?php } ?>

                                </div>
                                <div class="col-xs-10 col-md-11">
                                    <div style="margin-bottom:5px;">
                                        <h2><a href="<?php echo $this->webroot; ?>forums/comments/<?php echo $dt['Forum']['post_slug']; ?>"><?php echo $dt['Forum']['post_title']; ?></a></h2>

                                    </div>
                                    <div class="mic-info"  style="margin-bottom:15px;">

                                        By: <?php echo $dt['User']['first_name']; ?> Posted on: <i class="fa fa-clock-o"></i> <?php echo $this->Time->timeAgoInWords($dt['Forum']['post_added_date'], array('end' => '+150 years')); ?>                                        
                                    </div>
                                    <div class="comment-text">
                                        <?php echo $dt['Forum']['post_desc']; ?>
                                    </div>

                                    <div class="mic-info"  style="margin-bottom:15px;">

                                        <span class=" btn btn-primary btn-xs"> <i class="fa fa-comment "> <?php echo $dt['Forum']['total_comments']; ?> </i></span> <span class=" btn btn-primary btn-xs"><i class="fa fa-eye "> <?php echo $dt['Forum']['total_views']; ?></i> </span> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    ?>
                    <div class="panel-body">
                        <div class="row">
                            <div class="error">No post added yet.</div>
                        </div>
                    </div>
                    <?php
                }
                ?>

            </div>
        </div>
    </section>
</section>

