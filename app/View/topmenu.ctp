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
                <a href="/beta/message.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-comments-o"></i></a>
                <ul class="dropdown-menu animated fadeInDown">
                    <li class="title">
                        Notification <span class="badge pull-right">0</span>
                    </li>
                    <li class="message">
                        No new notification
                    </li>
                </ul>
            </li>




   
                <ul class="nav navbar-nav custom-nav" id="menu">
                    <li class="dropdown" id="ddown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"   style="text-color:red;">MENU</a>
                        
                        <ul class="dropdown-menu" id="dmenu">
                            <li><a  href="<?php echo $this->webroot; ?>kennel">
                                    MY KENNEL
                                </a></li>
                            <li class="divider"></li>
                            <li> <a  href="<?php echo $this->webroot; ?>shop">
                                    <span>SHOP</span> 
                                </a></li>
                                
                                
                            <li class="divider"></li>
                            <li><a class="active" href="<?php echo $this->webroot; ?>shows/index">
              <!-- <i class="fa fa-dashboard"></i> -->
                                    <span>&nbspVET &nbsp&nbsp&nbsp</span>
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
                            <li> <a class="active dropdown-submenu" role="menu" aria-labelledby="dLabel" href="<?php echo $this->webroot; ?>jobs/index">
              <!-- <i class="fa fa-dashboard"></i> -->
                                    <span>ALL JOBS</span>
                                </a>
                                <ul class="dropdown-menu">
						<li class=><a href="#">ALL JOBS</a></li>
						<li><a href="#">POST A JOBS</a></li>
						<li><a href="#">MY POSTED JOBS</a></li>
						<li><a href="#">APPLIED JOBS</a></li>
					</ul>
                                </li>
                            <li class="divider"></li>
                                    <span>&nbsp&nbsp&nbsp&nbsp&nbspADOPTION&nbsp&nbsp</span>
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
