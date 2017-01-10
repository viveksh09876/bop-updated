<style>
progress {
	margin-left: 20px ;
	display: block;
	/* Important Thing */
	-webkit-appearance: none;
-moz-appearance: none;
	border: none;
}

/* All good till now. Now we'll style the background */
progress::-webkit-progress-bar {
	background: white;
	box-shadow: 0 1px 0px 0 rgba(255, 255, 255, 0.2);
}

progress::-moz-progress-bar {
	background: #B378D3;
	box-shadow: 0 1px 0px 0 rgba(255, 255, 255, 0.2);
}


/* Now the value part */
progress::-webkit-progress-value {
	box-shadow: inset 0 1px 1px 0 rgba(255, 255, 255, 0.4);
	background: MEDIUMORCHID ;
	
	/* Looks great, now animating it */
	background-size: 25px 14px, 100% 100%, 100% 100%;
	-webkit-animation: move 5s linear 0 infinite;
}

progress::-moz-progress-value {
	box-shadow: inset 0 1px 1px 0 rgba(255, 255, 255, 0.4);
	background: MEDIUMORCHID ;
	
	/* Looks great, now animating it */
	background-size: 25px 14px, 100% 100%, 100% 100%;
	-moz-animation: move 5s linear 0 infinite;
}


/* That's it! Now let's try creating a new stripe pattern and animate it using animation and keyframes properties  */

@-webkit-keyframes move {
	0% {background-position: 0px 0px, 0 0, 0 0}
	100% {background-position: -100px 0px, 0 0, 0 0}
}
@-moz-keyframes move {
	0% {background-position: 0px 0px, 0 0, 0 0}
	100% {background-position: -100px 0px, 0 0, 0 0}
}
/* Prefix-free was creating issues with the animation */
</style>
<nav class="navbar navbar-default" role="navigation">
    <div class="side-menu-container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">
                <div class="icon"> <?php echo $this->Html->image("/files/user_images/".$logged_in_user["User"]["photo"],array("width"=>"60px","height"=>"62px")) ?></div>
                <div class="title" style="float:right;width:170px;"><?php echo @$SESS_KENNELNAME; ?></div>
            </a>
            <button type="button" class="navbar-expand-toggle pull-right visible-xs">
                <i class="fa fa-times icon"></i>
            </button>
        </div>
       
        <ul class="nav navbar-nav">
            
            <li>
                <a href="#">
                    <span class="icon fa fa-money"></span><span class="title">Game Funds: <?php echo $this->Session->read('Auth.User.funds') ?></span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon fa fa-paw"></span><span class="title">Credits:  <?php echo $this->Session->read('Auth.User.credits') ?></span>
                </a>
            </li>
            
            <li>
                <a href="#">
                    <span class="icon fa fa-bar-chart-o"></span><span class="title">Kennel Spaces: </span><span id="space" style="font-size: 16px;  margin-left: -83px;"><?php echo $this->Session->read('Auth.User.kennel_spaces') ?><span><br></a><progress max="100" value="<?php echo $this->Session->read('Auth.User.kennel_spaces') ?>"></progress>            </li>
            <li>
                <a href="#">
                    <span class="icon fa fa-bar-chart-o"></span><span class="title">Kennel XP: <?php echo $this->Session->read('Auth.User.kennel_xp');  
					$xp=$this->Session->read('Auth.User.kennel_xp');
					if ( $xp<1000){ echo "( LEVEL 1 )"; $prg = $xp;}
					else if ( $xp<2000 ){echo"( LEVEL 2 )"; $prg=$xp-1000;}
					else if ( $xp<3000 ){echo"( LEVEL 3 )"; $prg=$xp-2000;}
					else {echo"( LEVEL 4 )"; $prg=$xp-3000;}
					?></span>              <br></a><progress max="1000" value="<?php echo $prg; ?>"></progress>
            </li>
            <li>
                <a href="#">
                    <span class="icon fa fa-paw"></span><span class="title">Dogs: <span id="dogs_total_count"></span> <?php echo $this->Session->read('Auth.User.dogs') ?></span>
                </a>
            </li>
            
            
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>

<script>

    $(document).ready(function(){
        $.ajax({
            url: '<?php echo $this->webroot; ?>kennels/count_inventory',
            success: function(response) { 
                $("#dogs_total_count").html(response);
            } 
        });
        
    });
</script>
