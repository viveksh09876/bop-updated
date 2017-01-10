<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev','Best of Pedigree');
?><!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		
	
		echo $this->Html->css(array('frontend/home-page','jquery.mCustomScrollbar', 'font-awesome.min','jquery.fancybox','style_tablesort'));
		echo $this->Html->script(array('html5','jquery.min','jquery.validate','additional-methods','validation',
										'jquery.mCustomScrollbar','jquery.mousewheel','jquery.fancybox','custom','jquery-latest','jquery.tablesorter.pager','jquery.tablesorter'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
<div class="home-banner">
    <header>
<div class="header-section">
<a id="sign_in" href="#">Sign In</a>
<a href="#" id="sign_up">Sign Up</a>
</div>
    </header>
 <!--Front end logn section Start from Here-->

  <div id="login-box" class="white-box" style="display:none;">
      <div id="login-status"></div>
	   <div class="lb-data">
               <?php echo $this->Session->flash('error'); ?>
			<h2>Login Panel</h2>
                        <?php echo $this->Form->create('User', array('url' => array('controller' => 'users','action' => 'login'),'inputDefaults' => array('label' => false,'div' => false)));?>
			<p class="top30"><span class="login_field">
				<?php echo $this->Form->input('email', array('type' => 'text','placeholder' => 'Email*', 'class' => 'required', 'size' => '48','div'=>false,'label'=>false,'style'=>'height:30px' ));?>

			  </span>
			</p>
			<p class="top15">
				<span class="login_field">
					<?php echo $this->Form->input('password', array('type' => 'password' ,'placeholder' => 'Password*','class' => 'required', 'size' => '48','div'=>false,'label'=>false,'style'=>'height:30px' ));?>
				 </span>
			</p>
			<div class="top15">
				<div class="floatright">
					<div class="black_btn2">
						<span class="upper">
                            <input type="submit" value="Sign In">
                        </span>	
					</div>
				</div>
			</div>			

			<?php echo $this->Form->end(); ?>
		  </div>
  </div>

      <div class="white-box"  id="register_now" style="display:none;">
      <div id="login-status"></div>
	   <div class="lb-data">
               <?php echo $this->Session->flash('registration_error'); ?>
                <?php echo $this->Session->flash('registration_success'); ?>
			<h2>Register Now:</h2>
                        <?php echo $this->Form->create('User', array('url' => array('controller' => 'users','action' => 'registration'),'id'=>'registration','inputDefaults' => array('label' => false,'div' => false)));?>
			<div id="left_section">
                        <p class="top30"><span class="login_field">
				<?php echo $this->Form->input('first_name', array('type' => 'text','placeholder' => 'First Name*', 'class' => 'inpt', 'size' => '48','div'=>false,'label'=>false,'style'=>'height:30px' ));?>

			  </span>
			</p>
                        <p class="top30"><span class="login_field">
				<?php echo $this->Form->input('last_name', array('type' => 'text','placeholder' => 'Last Name', 'size' => '48','div'=>false,'label'=>false,'style'=>'height:30px','required'=>false ));?>

			  </span>
			</p>
                        <p class="top30"><span class="login_field">
				<?php echo $this->Form->input('username', array('type' => 'text','placeholder' => 'User Name', 'size' => '48','div'=>false,'label'=>false,'style'=>'height:30px','required'=>false ));?>

			  </span>
			</p>
                        <p class="top30"><span class="login_field">
				<?php echo $this->Form->input('email', array('type' => 'text','placeholder' => 'Email*', 'class' => 'inpt', 'size' => '48','div'=>false,'label'=>false,'style'=>'height:30px' ));?>

			  </span>
			</p>
                        </div>
                        <div id="right_section">
                        <p class="top30"><span class="login_field">
				<?php echo $this->Form->input('password', array('type' => 'password','placeholder' => 'Password*', 'class' => 'inpt', 'size' => '48','div'=>false,'label'=>false,'style'=>'height:30px' ));?>

			  </span>
			</p>

			<p class="top15">
			<span class="login_field">
				<?php echo $this->Form->input('mobile_number', array('type' => 'text' ,'placeholder' => 'Phone','class' => 'inpt', 'size' => '48','div'=>false,'label'=>false,'style'=>'height:30px' ));?>
			 </span>
			</p>
                        <p class="top15">
			<span class="login_field">
				<?php echo $this->Form->input('kennel_name', array('type' => 'text' ,'placeholder' => 'Kennel Name','class' => 'inpt', 'size' => '48','div'=>false,'label'=>false,'style'=>'height:30px' ));?>
			 </span>
			</p>
                        </div>
			<div class="top15">
				<div class="floatright">
					<div class="black_btn2"><span class="upper">
                                             <input type="submit" value="Sign Up">
                                            </span></div>

				</div>
			</div>
			
			<?php echo $this->Form->end() ?>
		  </div>
  </div>

 

     <a href="#login-box" id="trigger-login-box" class="fancybox" style="display:none">login</a>
<!--front end logn section end Here-->

	<div class="wrapper home">

		<!-- Main content Start -->
		<?php echo $this->fetch('content'); ?>
		<!-- Main content Start -->
	

	</div>
</div>
</body>
</html>
<style>
.error{ color: red; display: block;}
#errorMessage{color:red}
#registration_errorMessage{color:red}
</style>
<script>
    $(function(){
       $('.fancybox').fancybox();
       $('#UserIndexForm').validate({
           rules:{
              "data[User][email]":{
                  required:true,
                  email:true
              },
              "data[User][password]":"required"
           },
           messages:{
             "data[User][email]":"Please enter a valid email",
             "data[User][password]":"Please enter password"
           }
       });
       $('#registration').validate({
           rules:{
              "data[User][email]":{
                  required:true,
                  email:true
              },
              "data[User][password]":"required",
              "data[User][first_name]":"required"
           },
           messages:{
               "data[User][first_name]":"Please enter your first name",
             "data[User][email]":"Please enter a valid email",
             "data[User][password]":"Please enter password"
           }
       });
      
   <?php $errorStatus=$this->Session->read('loginError');
               if($errorStatus){?>
                   $('#register_now').hide();
                   $('#login-box').slideToggle('slow');
               <?php }
               if($this->Session->read('rgError')){?>
                   $('#login-box').hide();
                   $('#register_now').slideToggle('slow');
                   <?php }?>
               
        
    });


$('#sign_in').click(function(){
   $('#register_now').hide();
    $('#login-box').slideToggle('slow');
});
$('#sign_up').click(function(){
$('#login-box').hide();
    $('#register_now').slideToggle('slow');
});
    </script>

