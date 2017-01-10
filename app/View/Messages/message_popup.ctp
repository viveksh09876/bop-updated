<style>
	.loginBox { padding: 0; 
			   position: absolute; 
			   top: 0; 
			   left: 0; 
			   margin: 0; 
			   width: auto; 
			   border-radius: 10px; 
			   background: none; }
	


</style>

<div class="loginpopup register">
	<span class="overlay"></span>
    <div class="loginBox">
        <div class="logininner clearfix">
            <a class="close" href="javascript://" onclick="$.fancybox.close();"><img src="<?php echo FRONT_END_IMAGES_PATH ?>close_btn.png" alt="" /></a>
            
            <h2>Send Message</h2> 
           <div id="successMessage" class="respMsg" style="display: none;">Message sent successfully</div> 
           <div id="errorMessage" class="respMsg" style="display: none;">There is some issue. Try again later.</div>      
                
            <?php 
            	echo $this->Form->create('Message', array ('id' => 'messageForm', 'class' => 'formStyle'));
				
				echo $this->Form->input('to_id', array('type' => 'hidden', 'value' => $user['User']['id']));
				echo $this->Form->input('to_email', array('type' => 'hidden', 'value' => $user['User']['email']));
				echo $this->Form->input('from_id', array('type' => 'hidden', 'value' => $this->Session->read('Auth.User.id')));
			 ?>
                
                
          	 <?php if(!$this->Session->check('Auth.User.id')){ ?>
                 <div class="social">                 	  
                 	  <label class="wd100p">You need to login to send a message. <a href="<?php echo $this->webroot.'users/login'; ?>">Click here</a> to login.</label>
                      <span class="or">OR</span>
                 	
                 </div>            
              <?php } ?>  
                <div class="col">
                    
                    <?php if(!$this->Session->check('Auth.User.id')){ ?>
                    <div class="inputtype">
                        <label>First name</label>
                        <div class="inputtext">
                            <?php echo $this->Form->input('from_first_name', array ('type' => 'text', 'tabindex' => '1', 'class' => 'required', 'required' => false, 'minlength' => 2, 'label' => false, 'div' => false)); ?>
                        </div>
                    </div>
                    <?php } ?>
                    <?php if(!$this->Session->check('Auth.User.id')){ ?>
                    <div class="inputtype">
                        <label>Email</label>
                        <div class="inputtext">
                            <?php echo $this->Form->input('from_email', array ('type' => 'text', 'tabindex' => '3', 'class' => 'required email', 'required' => false,  'label' => false, 'div' => false)); ?>
                         </div>
                    </div>
                    
                    
                    <?php } ?>

                </div>
                
                <div class="col right">
                     <?php if(!$this->Session->check('Auth.User.id')){ ?>
                    <div class="inputtype">
                        <label>Last name</label>
                        <div class="inputtext">
                            <?php echo $this->Form->input('from_last_name', array ('type' => 'text', 'tabindex' => '2', 'class' => 'required', 'required' => false, 'label' => false, 'div' => false)); ?>
                        </div>
                    </div>
                    <?php } ?>
                      <?php if(!$this->Session->check('Auth.User.id')){ ?>
                    <div class="inputtype">
                        <label>Subject</label>
                        <div class="inputtext">
                            <?php echo $this->Form->input('subject', array ('type' => 'text', 'tabindex' => '2', 'class' => 'required', 'required' => false, 'label' => false, 'div' => false)); ?>
                     </div>
                    </div>
                    <?php }  ?>         
                                                            

                </div>
                
                <div class="clear"></div>
                  <?php if($this->Session->check('Auth.User.id')){ ?>
                <div class="col col-full wd100p">
                	  <div class="inputtype">
                        <label>Subject</label>
                        <div class="inputtext">
                            <?php echo $this->Form->input('subject', array ('type' => 'text', 'tabindex' => '2', 'class' => 'msg_subject required', 'required' => false, 'label' => false, 'div' => false)); ?>
                     </div>
                    </div>
                </div>
                <?php } ?>
                
                <div class="col col-full no-left">
                	<div class="inputtype">
                        <label>Message</label>
                        <div class="inputtext">
                            <?php echo $this->Form->input('message', array ('type' => 'textarea', 'max-length' => '200','tabindex' => '2', 'class' => 'required', 'required' => false, 'cols' => '63', 'label' => false, 'div' => false)); ?>
                        </div>
                    </div>	
                </div>
                
                <div class="bottom">
                	
                	<?php echo $this->Form->submit('Send', array ('class' => 'submitBtn ','name' => "send_button",'id' => "send_button", 'label' => false, 'div' => false)); ?>
                   <p class="please_wait">Sending message...&nbsp;&nbsp;</p>
                </div>
                            
            <?php
            echo $this->Form->end();
            ?>
        
        </div>
    </div>

</div>

<script type="text/javascript">
	$(document).ready(function(){
	
	$('.respMsg').hide();	
		
	$("#send_button").click(function(){
    		$('#messageForm').validate({
			
            	submitHandler: function(form) {     
            		$('.respMsg').hide();	           
              		$('.please_wait').show();
              		$('#send_button').hide();
              		var frm = $('#messageForm').serialize();
              		
              		$.post('<?php echo $this->webroot.'messages/send_message'?>',frm,function(data){
              			if(data == "success")
              			{
              				$('#successMessage').show();
              			}else{
              				$('#errorMessage').show();
              			}
              			$('.please_wait').hide();
              			$('#send_button').show();
              		});
            	}   
        });
	});	
	});
</script>
