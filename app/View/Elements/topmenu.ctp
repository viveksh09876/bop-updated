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

 
<!--
<li class="dropdown">  
<a><script id="cid0020000117661314116" data-cfasync="false" async src="//st.chatango.com/js/gz/emb.js" style="width: 250px;height: 350px;">{"handle":"kennelsbest","arch":"js","styles":{"a":"0A122A","b":100,"c":"FFFFFF","d":"FFFFFF","k":"0A122A","l":"0A122A","m":"0A122A","n":"FFFFFF","p":"10","q":"0A122A","r":100,"cv":1,"cvfntsz":"11px","cvbg":"ffffff","cvfg":"000000","cvw":50,"cvh":60}}</script></a>
</li> 
-->
          <li class="dropdown">
                <a href="../message.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-comments-o"></i></a>
                <ul class="dropdown-menu animated fadeInDown">
                    <li class="title">
                        Notification <span class="badge pull-right"><?php echo $messages_noti;?></span>
                    </li>
                    <li class="message">
                       <?php echo $this->Html->link("Send & Receive Messages",array("controller"=>"discussions","action"=>"index"),array("class"=>"btn btn-primary"))?>
						
                    </li>
                </ul>
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
                    background-color:#353D47; 
                    color:#fff;
                    border: 0px solid #000000;
                    -moz-border-radius: 5px;/*Firefox*/
                    -webkit-border-radius: 5px;/*Safari, Chrome*/
                    border-radius: 5px;

                }
.divider{
background-color#353D47; 
}
                .custom-nav .dropdown-menu li a:hover{
                    background-color:#353D47; 
                }
                .dropdown-menu .divider{
                    height: 0;
                    margin: 2px 0;
                }
             .nav .open > a, .nav .open > a:focus, .nav .open > a:hover{
                    background-color:#D1D1D1;
    border-color: #000000;
                }
                #SubMenu1 a{
                    margin: 5px;
                    padding: 6px;
                }
            </style>

            <script>
                $(document).ready(function () {
                    $('li#ddown a').on('click', function (event) {
                        $(this).parent().toggleClass('open');
                    });
                });
            </script>
   
                <ul class="nav navbar-nav custom-nav" id="menu">
                    <li class="dropdown" id="ddown">
                        <a href="#" class="dropdown-toggle"    style="text-color:red;">MENU</a>
                        
                        <ul class="dropdown-menu" id="dmenu">
                            <li><a  href="<?php echo $this->webroot; ?>kennel">
                                    MY KENNEL
                                </a></li>
                            <li class="divider"></li>
                            <li> <a  href="<?php echo $this->webroot; ?>shop">
                                    <span>SHOP</span> 
                                </a></li>
                                
                                
                            <li class="divider"></li>
                            <li><a class="active" href="<?php echo $this->webroot; ?>vet/index">
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
                             <li> 
                                <a class="active" href="#SubMenu1" data-toggle="collapse" data-parent="#MainMenu">
              <!-- <i class="fa fa-dashboard"></i> --      class="list-group-item list-group-item-success strong" -->
                                    <span>JOBS</span>
                                </a>
                                <div class="collapse list-group-submenu" id="SubMenu1">
                                    <a href="<?php echo $this->webroot; ?>jobs/index" class="list-group-item" data-parent="#SubMenu1">ALL JOBS</a>
                                    <a href="<?php echo $this->webroot; ?>jobs/post_job" class="list-group-item" data-parent="#SubMenu1">POST A JOB</a>
                                    <a href="<?php echo $this->webroot; ?>jobs/posted_jobs" class="list-group-item" data-parent="#SubMenu1">MY POSTED JOBS</a>
                                    <a href="<?php echo $this->webroot; ?>jobs/applied_jobs" class="list-group-item" data-parent="#SubMenu1">APPLIED JOBS</a>
                                </div>

                            </li>
                            <li class="divider"></li>
                                    <li><a class="active" href="<?php echo $this->webroot . 'adoption/index'; ?>">
              
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
