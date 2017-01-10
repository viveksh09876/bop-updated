<?php echo $this->element('slider'); ?>
<?php
	
	echo $this->Html->css(array('jcrop/jquery.Jcrop'));
	echo $this->Html->script(array('jcrop/js/jquery.Jcrop'));		
?>
<style>

.loginBox, .loginBox.createEvent {top:70px;}
</style>

<div class="loginpopup register">
	<span class="overlay"></span>
    <div class="loginBox">
        <div class="logininner clearfix">
            <a class="close" href="<?php echo SITE_URL; ?>"><img src="<?php echo FRONT_END_IMAGES_PATH ?>close_btn.png" alt="" /></a>
            
            <h2>Create an Account</h2> 
           <?php
            echo $this->Session->flash('success');
			echo $this->Session->flash('error');
			echo $this->Session->flash();
			?>          
                
            <?php echo $this->Form->create('User', array ('id' => 'userSignUp', 'class' => 'formStyle','type' => 'file')); ?>
                <div id="coordinate_input">
	                <input type="hidden" id="x" name="x" />
					<input type="hidden" id="y" name="y" />
					<input type="hidden" id="w" name="w" />
					<input type="hidden" id="h" name="h" />
                </div>
                <div class="checktype">
                    <label>Signing up as:</label>
                    <div class="inputtext">
                        <p>
                        	<input type="radio" id="athlete_radio" class="user_type_radio"  name="data[User][user_type]" value="athlete" onclick="check_affiliate();" checked=true />
                            Athlete
                        </p>
                        <p>
                        	<input type="radio" id="affiliate_radio" class="user_type_radio"  name="data[User][user_type]" value="affiliate" onclick="check_affiliate();" />
                            Affiliate
                        </p>
                        <p>
                        	<input type="radio" name="data[User][user_type]" class="user_type_radio"  value="fan" onclick="check_affiliate();"/>
                            Fan 
                        </p>
                    </div>
                </div>
                
                <div class="social">
                	<ul>
                    	<li>
                    		<button type="submit" name="facebook_button" id="facebook_button" value="facebook" class="myButtonfacebook"></button>
                    	</li>
                    	<li>
                    		<button type="submit" name="twitter_button" id="twitter_button" value="twitter" class="myButtontwitter"></button>
                    	</li>
                    	<li>
                    		<button type="submit" name="linkedin_button" id="linkedin_button" value="linkedin" class="myButtonlinkedin"></button>
                    	</li>
                    </ul>	
                
                	<span class="or">OR</span>
                </div>
                
                <div class="col">
                    
                    <div class="inputtype">
                        <label>First name</label>
                        <div class="inputtext">
                            <?php echo $this->Form->input('first_name', array ('type' => 'text', 'tabindex' => '1', 'class' => 'required', 'required' => false, 'minlength' => 2, 'label' => false, 'div' => false)); ?>
                        </div>
                    </div>
                    
                    <div class="inputtype affiliate_view">
                        <label>Affiliate Name</label>
                        <div class="inputtext">
                            <?php echo $this->Form->input('other_name', array ('type' => 'text', 'id' => 'affiliate_name' ,'tabindex' => '3', 'class' => '', 'required' => false,  'label' => false, 'div' => false)); ?>
                        </div>
                    </div>
                   
                    <div class="inputtype">
                        <label>Username</label>
                        <div class="inputtext">
                            <?php echo $this->Form->input('username', array ('type' => 'text', 'tabindex' => '3', 'class' => 'required', 'required' => false,  'label' => false, 'div' => false)); ?>
                        </div>
                    </div>
                    
                    <div class="inputtype">
                        <label>Password</label>
                        <div class="inputtext">
                            <?php
							echo $this->Form->input('password', array ('id'=>'signuppassword', 'tabindex' => '5','class' => 'inpText required', 'required' => false,'minlength' => 4, 'maxlength' => 20, 'label' => false, 'div' => false));
							?>
                        </div>
                    </div>
                    <div class="inputtype">
                        <label>Photo</label>
                        <div class="inputbrows">
                            <div class='fancy-file'>
                                <div class='fancy-file-name'>&nbsp;</div>
                                <button class='fancy-file-button'>Browse...</button>
                                <div class='input-container'>
                                    <?php echo $this->Form->input('User.photo', array('type' => 'file', 'tabindex' => '7','class' => 'required', 'required' => false, 'label' => false, 'div' => false,'onchange'=>'readURL(this)')); ?>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="inputtype">
                    	<div class="cropbox" style="max-width:70px; max-height:70px; overflow:hidden;">
                        	<img id="img_prev" src="#" alt="" />
                    	</div>
                    </div>

                </div>
                
                <div class="col right">
                    
                    <div class="inputtype">
                        <label>Last name</label>
                        <div class="inputtext">
                            <?php echo $this->Form->input('last_name', array ('type' => 'text', 'tabindex' => '2', 'class' => 'required', 'required' => false, 'label' => false, 'div' => false)); ?>
                        </div>
                    </div>
                    <div class="inputtype">
                        <label>Email Address</label>
                        <div class="inputtext">
                            <?php echo $this->Form->input('email', array ('type' => 'text', 'tabindex' => '3', 'class' => 'required email', 'required' => false,  'label' => false, 'div' => false)); ?>
                        </div>
                    </div>
                    <div class="inputtype">
                        <label>Mobile number (optional)</label>
                        <div class="inputtext">
                            <?php echo $this->Form->input('mobile_number', array ('type' => 'text', 'tabindex' => '4', 'label' => false, 'div' => false)); ?>
                        </div>
                    </div>
                    <div class="inputtype">
                        <label>Confirm password</label>
                        <div class="inputtext">
                            <?php
							echo $this->Form->input('confirm_password', array ('type' => 'password', 'tabindex' => '6', 'class' => 'inpText required', 'equalTo' => '#signuppassword','label' => false, 'div' => false));
							?>
                        </div>
                    </div>
                    

                </div>
                
                <div class="bottom">
                	<?php echo $this->Form->submit('Create Account', array ('class' => 'submitBtn ','name' => "register_button",'id' => "register_button", 'label' => false, 'div' => false)); ?>
                    <p><input id="terms_conditions" type="checkbox" class="mright5 required" value="1" name="data[User][terms]" /> I have read and agree to <a href="<?php echo $this->webroot.'terms-conditions'; ?>" target="_blank">Terms and Condition</a> & <a href="<?php echo $this->webroot.'privacy'; ?>" target="_blank">privacy policy</a></p>
                	
                </div>
                            
            <?php
          	  echo $this->Form->end();
            ?>
        
        </div>
    </div>

</div>

<div id="inp_img_div" style="display:none;" class="prev_img_div">
	<img src="" id="img_crop" alt="" />
	<input id="crop_save" name="save" type="submit" value="Save" class="blueBtn" style=" " />
	
</div>
<script>

$(document).ready(function(){
	
	$('#crop_save').click(function(e){
		$.fancybox.close();
		return false;
	});
	
	<?php //if(!isset($this->request->data) || $this->request->data['User']['user_type'] != 'affiliate'){ ?>
	
	$('.user_type_radio').removeAttr('checked');
	$('#athlete_radio').prop('checked',true);
	$('#affiliate_name').removeClass('required');
  	$('.affiliate_view').hide();
  	<?php //} ?>
  	
  	$("#UserPhoto").change(function (e) {
		
		
	});
  	
});

		
		
var jcrop_api;
var bounds, boundx, boundy;
function readURL(input) {
	if (input.files[0] && input.files[0]) {
		
		var file, img, fsize, fsize_text;
		
		
		fsize = true;
		//get file size
		var iSize = ($("#UserPhoto")[0].files[0].size / 1024);
	     if (iSize / 1024 > 1)
	     {
	        if (((iSize / 1024) / 1024) > 1)
	        {
	            iSize = (Math.round(((iSize / 1024) / 1024) * 100) / 100);
	            fsize_text = iSize + "Gb";
	            fsize = false;
	        }
	        else
	        {
	            iSize = (Math.round((iSize / 1024) * 100) / 100)
	            fsize_text = iSize + "Mb";
	            fsize = false;
	        }
	     }
	     else
	     {
	        iSize = (Math.round(iSize * 100) / 100)
	        fsize_text = iSize + "Kb";
	        if(parseInt(iSize) > 500)
	        {
	        	fsize = false;
	        }
	        //alert(iSize  + "kb");		        
	     }   
	     
	     if(!fsize)
	     {
	     	alert('Image size is: '+fsize_text+'. Image size should not be more than 500kb.');
	     }
		
		if(fsize)
		{
			var reader = new FileReader();
		
		reader.onload = function (e) {
			$('#img_prev')
			.attr('src', e.target.result)
			.width(70)
			.height(70);
			
			$('#img_crop').attr('src', e.target.result);
			clearCoords;
			$('.jcrop-holder img').attr('src', e.target.result);
			$.fancybox.open({
				'href' : '#inp_img_div',
				'afterLoad' : function(){
					
					
					$('#img_crop').Jcrop({
						  onChange:   showCoords,
						  onSelect:   showCoords,
						  onRelease:  clearCoords
						  		
						},function(){
						  jcrop_api = this;
						  bounds = jcrop_api.getBounds();
							boundx = bounds[0];
							boundy = bounds[1];
						});			
			
					$('#coords').on('change','input',function(e){
					  var x1 = $('#x1').val(),
						  x2 = $('#x2').val(),
						  y1 = $('#y1').val(),
						  y2 = $('#y2').val();
					  jcrop_api.setSelect([x1,y1,x2,y2]);
					});
				}
			});
		};
		reader.readAsDataURL(input.files[0]);
		}
		
	}
}

  function showCoords(c)
  {
    $('#x').val(c.x);
    $('#y').val(c.y);
    $('#w').val(c.w);
    $('#h').val(c.h);
    showPreview(c);
  };
  
  function showPreview(coords) {
  	//console.log(coords);
   
	if (parseInt(coords.w) > 0)
	{
		var rx = 100 / coords.w;
		var ry = 100 / coords.h;

		$('#img_prev').css({
			width: Math.round(rx * boundx) + 'px',
			height: Math.round(ry * boundy) + 'px',
			marginLeft: '-' + Math.round(rx * coords.x) + 'px',
			marginTop: '-' + Math.round(ry * coords.y) + 'px'
		});
	}
}


  function clearCoords()
  {
    $('#coords input').val('');
  }
  
  function check_affiliate()
  {
  	if($('#affiliate_radio').is(':checked'))
  	{
  		$('.affiliate_view').show();
  		$('#affiliate_name').addClass('required');
  	}else{
  		
  		$('#affiliate_name').removeClass('required');
  		$('.affiliate_view').hide();
  	}
  }
</script>
