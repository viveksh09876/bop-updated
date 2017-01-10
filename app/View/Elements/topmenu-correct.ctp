<nav class="navbar navbar-default navbar-fixed-top navbar-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-expand-toggle">
                <i class="fa fa-bars icon"></i>
            </button>
            <ol class="breadcrumb navbar-breadcrumb">
                <li class="active"><?php echo $this->Html->image("logo.png", array("width" => "200px", "height" => "68px")); ?></li>
            </ol>
            <button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
                <i class="fa fa-th icon"></i>
            </button>
        </div>

        <ul class="nav navbar-nav navbar-right">
            <button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
                <i class="fa fa-times icon"></i>
            </button>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-comments-o"></i> 
                    <?php if(count($messages_noti)>0){?>
                    <span class="badge"><?php echo count($messages_noti);?></span><?php }?></a>
                <?php if(!empty($messages_noti)){?>
                <ul class="dropdown-menu animated fadeInDown" style="height:200px;overflow: auto;">
                    <?php foreach($messages_noti as $noti_msg){?>
                    <li class="title">
                        <a href="<?php echo $this->Html->url(array("controller"=>"messages","action"=>"index",$noti_msg["MessagesUser"]["user_id"]));?>"><?php echo substr($noti_msg["Message"]["content"],0,30);?></a>
                        <br>
                        <span class="pull-right">By: <strong><?php echo @$noti_msg["sender"]["first_name"]; ?></strong></span>
                        <div class="clearfix">&nbsp;</div>
                    </li>
                    <?php }?>
                    <li class="text-center"><?php echo $this->Html->link("View all",array("controller"=>"messages","action"=>"index"));?></li>
                </ul>
                <?php }?>
            </li>

            <style>

                .dropdown-menu>li>a {
                    color:#428bca;
                }

                .dropdown ul.dropdown-menu:before {
                    content: "";
                    border-bottom: 10px solid #d1d1d1;
                    border-right: 10px solid transparent;
                    border-left: 10px solid transparent;
                    position: absolute;
                    top: -10px;
                    right: 16px;
                    z-index: 10;
                }
                .dropdown ul.dropdown-menu:after {
                    content: "";
                    border-bottom: 12px solid #ccc;
                    border-right: 12px solid transparent;
                    border-left: 12px solid transparent;
                    position: absolute;
                    top: -12px;
                    right: 14px;
                    z-index: 9;
                }
                .custom-nav .dropdown-menu li{
                    text-align: center;

                }
                .custom-nav .dropdown-menu li a{
                    background-color:#67DFF0; 
                    color:#010809;
                    border: 0px solid #000000;
                    -moz-border-radius: 5px;/*Firefox*/
                    -webkit-border-radius: 5px;/*Safari, Chrome*/
                    border-radius: 5px;

                }
                .custom-nav .dropdown-menu li a:hover{
                    background-color:#67DFF0; 
                }
                .dropdown-menu .divider{
                    height: 0;
                    margin: 2px 0;
                }
            </style>



            <li>
                <ul class="nav navbar-nav custom-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">MENU</a>
                        <ul class="dropdown-menu">
                            <li><a  href="<?php echo $this->webroot; ?>kennel">
                                    MY KENNEL
                                </a></li>
                            <li class="divider"></li>
                            <li> <a  href="<?php echo $this->webroot; ?>shop">
                                    <span>SHOP</span>
                                </a></li>
                            <li class="divider"></li>
                            <li><a  href="#">
              <!-- <i class="fa fa-dashboard"></i> -->
                                    <span>VET</span>
                                </a></li>
                            <li class="divider"></li>
                            <li><a class="active" href="<?php echo $this->webroot; ?>shows/index">
              <!-- <i class="fa fa-dashboard"></i> -->
                                    <span>SHOWS</span>
                                </a></li>
                            <li class="divider"></li>
                            <li><a class="active" href="<?php echo $this->webroot; ?>shows/show_results">
              <!-- <i class="fa fa-dashboard"></i> -->
                                    <span>SHOW RESULTS</span>
                                </a></li>
                            <li class="divider"></li>
                            <li> <a class="active" href="<?php echo $this->webroot; ?>jobs/index">
              <!-- <i class="fa fa-dashboard"></i> -->
                                    <span>ALL JOBS</span>
                                </a></li>
                            <li class="divider"></li>
                            <li><a class="active" href="<?php echo $this->webroot; ?>jobs/post_job">
              <!-- <i class="fa fa-dashboard"></i> -->
                                    <span>POST A JOB</span>
                                </a></li>
                            <li class="divider"></li>
                            <li><a class="active" href="<?php echo $this->webroot; ?>jobs/posted_jobs">
              <!-- <i class="fa fa-dashboard"></i> -->
                                    <span>MY POSTED JOBS</span>
                                </a></li>
                            <li class="divider"></li>
                            <li><a class="active" href="<?php echo $this->webroot; ?>jobs/applied_jobs">
              <!-- <i class="fa fa-dashboard"></i> -->
                                    <span>APPLIED JOBS</span>
                                </a></li>
                            <li class="divider"></li>
                            <li><a class="active" href="<?php echo $this->webroot . 'adoption/index'; ?>">
              <!-- <i class="fa fa-dashboard"></i> -->
                                    <span>ADOPTION</span>
                                </a></li>
                            <li class="divider"></li>
                            <li><a class="active" href="<?php echo $this->webroot; ?>forums/index">
              <!-- <i class="fa fa-dashboard"></i> -->
                                    <span>FORUM</span>
                                </a></li>
                            <li class="divider"></li>
                            <li>
                           <?php echo  $this->Html->link('<span>BANK</span>',array("controller"=>"adoption","action"=>"bank"),array("escape"=>false,"class"=>"active"))?>
                            </li>
                                <li class="divider"></li>
                        </ul>
                    </li>
                </ul>


            <li class="dropdown profile">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo @$SESS_USERNAME; ?><span class="caret"></span></a>
                <ul class="dropdown-menu animated fadeInDown">
                    <li class="profile-img">
                        <?php echo $this->Html->image("/files/user_images/" . $logged_in_user["User"]["photo"], array("class" => "profile-img")) ?>

                    </li>
                    <li>
                        <div class="profile-info">
                            <h4 class="username"><?php echo @$SESS_USERNAME; ?></h4>
                            <p><?php echo @$SESS_KENNELNAME; ?></p>
                            <div class="btn-group margin-bottom-2x" role="group">
                                <a href="<?php echo $this->webroot; ?>kennels/settings">
                                    <button type="button" class="btn btn-default"><i class="fa fa-user"></i> Kennel Settings</button></a>
                                <a href="/beta/users/logout">
                                    <button type="button" class="btn btn-default"><i class="fa fa-sign-out"></i> Logout</button></a>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>