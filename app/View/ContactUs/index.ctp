<style>
	#cntct-detail label.error { margin-bottom:-5px;}
	
</style>
 
 <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script>
      function initialize() {
        var map_canvas = document.getElementById('map_canvas');
        var map_options = {
          center: new google.maps.LatLng(39.755018,-75.626847),
          zoom: 8,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(map_canvas, map_options)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
<script>
	$(document).ready(function(){
		$("#cntct-detail").validate({
			rules:{
				recaptcha_response_field: {
					required: true
				}
			},
			submitHandler: function(frm){
				$(frm).find('input[type=submit],button[type=submit]').attr('disabled', 'disabled');
				$(frm).submit();
			}
		});
		
		$('input').removeAttr('required');
		$('textarea').removeAttr('required');
	})
</script>

	<!-- Slider -->
	<section class="athlt-profile-top row">
		<div class="page-mid events-map">
			<div class="row">
				<div class="contact mb60">
                	<h1>Contact Us </h1>
               	<?php 
					if(!empty($row_blk_top['Block']['content']))
					{
						echo '<p>'.$row_blk_top['Block']['content'].'</p>';
					}
				?>
                </div>
			</div>
		</div>
	</section>
	<!-- Slider End -->
	
	<!-- MId Section -->
	<section class="body-content-bg ptb25 row">
		<div class="page-mid event-colum">
		<?php echo $this->Xicom->display_errors($errors); ?>
         <!--left of corporate offce-->
			<div class="cntct-left">
            	<div class="leaderboard">
                	<h2> CORPORATE OFFICE</h2>
                </div>
                <div class="clear"></div>
                	<div class="inner-left">
				<?php 
					if(!empty($row_blk_address))
					{
						if(!empty($row_blk_address['Block']['title']))
						{
							echo '<h3>'.$row_blk_address['Block']['title'].'</h3>';
						}
						
						echo $row_blk_address['Block']['content']; 
					}
				?>

          </div>
          
          	<div class="left-map" id="map_canvas">
            	
            </div>
            </div> <!--left of corporate offce end-->
            
             <!--right contact form-->
             	<div class="contact-form">
                <div class="leaderboard">
                	<h2> Contact Form </h2>
                </div>
					   <div class="clear"></div>
                <?php
					echo $this->Form->create('ContactUs', array('id' => 'cntct-detail','url' => $this->Html->url( null, true ), 'inputDefaults' => array('label' => false, 'div' => false, 'error' => false)));
				?>	
                      
                        	<label>First Name
                        	<br/>
                        	<?php echo $this->Form->input('first_name', array('class' => 'required', 'type' => 'text')); ?>
                        	</label>
                 
                      
                        	<label class="pull-right">Last Name
                        	<br>
                        	<?php echo $this->Form->input('last_name', array('class' => 'required', 'type' => 'text')); ?>
                        	</label>
                        
                    	
                    		<label>Email Address
                    		<br/>
                        	<?php echo $this->Form->input('email_id', array('class' => 'required email', 'type' => 'text')); ?>
                        	</label>
                        
                    	
                    		<label class="pull-right">Subject
                        	<br/>
                        	<?php echo $this->Form->input('subject', array('class' => 'required', 'type' => 'text')); ?>
                        	</label>
                        
                      
                        		<label class="messge">Message<br/>
                        
							<?php echo $this->Form->textarea('message', array('class' => 'required' )); ?>
							</label>
                       
                        
                       <input type="submit" value="SUBMIT" id="contact_btn" class="rgist-btn">
                        <div class="clear"></div>
                    </form>
                    
                </div>
             
             <!--right contact form End -->
        </div>
	</section>
	<!-- MId Section End -->

	

