$(document).ready(function() {
	
	//Register form validation
	$("#register_button").click(function(){
    		$('#userSignUp').validate({
			 rules: {
					"data[User][photo]": {
						required: true,
						extension: "png|jpg|jpeg",
						messages:{ 
							
							extension: "Please select profile picture (Only jpeg, jpg, png files allowed)"}
					}
				},	
            submitHandler: function(form) {                
                form.submit();
            }   
        });
	});
	
	//Login form validation
	$("#login_btn").click(function(){
    		$('#UserLoginForm').validate({
            submitHandler: function(form) {                
                form.submit();
            }   
        });
	});
	
	//Forgot password form validation
	$("#forgot_password_btn").click(function(){
    		$('#UserForgotPasswordForm').validate({
            submitHandler: function(form) {                
                form.submit();
            }   
        });
	});

	//Update password form validation
	$( "#UserUpdatePasswordForm" ).validate({
		rules: {
			"data[User][password]": {
			required: true,
			minlength: 4
			},
			"data[User][confirm_password]" : {
                    minlength : 4,
                    equalTo : "#UserPassword"
                }
		}
	});
	
	//Twitter email update form validation
	$("#twitter_login_btn").click(function(){
    		$('#UserTwitterEmailForm').validate({
            submitHandler: function(form) {                
                form.submit();
            }   
        });
	});
	
	//Event create form validation
	$("#save_event").click(function(){		
    		$('#CreateEventForm').validate({
				
				rules: {
					"data[Event][picture]": {
						required: true,
						extension: "png|jpg|jpeg",
						messages:{ 
							
							extension: "Please select event picture (Only jpeg, jpg, png files allowed)"}
					}
				},
				submitHandler: function(form) 
				{   
					var ev_details = $('#EventDetails').val();
					if(ev_details == "")
					{
						alert('Please enter event details');
					} else{
						var fl = 0;          
						$('.wod_values').each(function(i){
						
							if($(this).val() == '')
							{
								fl = 1;
							}
						});
						
						if(fl == 0)
						{
							form.submit();
						}else{
							alert('Please fill all Division values');
							return false;
						}
					}  				
					
				}   
        });
	});	
	
	
	//Challenge Form
	//Event create form validation
	$("#send_challenge").click(function(){		
    		$('#ChallengeForm').validate({
				
				submitHandler: function(form) 
				{      
					var fl = 0;          
					$('.wod_values').each(function(i){
					
						if($(this).val() == '')
						{
							fl = 1;
						}
					});
					
					if(fl == 0)
					{
						var num_people = $('#num_of_selected').val();
						if(num_people > 0)
						{	
							form.submit();
						}else{
							alert('Add at least 1 person to challenge');
							return false;
						}
						
					}else{
						alert('Please fill all Division values');
						return false;
					}
					
				}   
        });
	});	
	
	
	//Event update form validation
	$("#update_event").click(function(){		
    		$('#CreateEventForm').validate({
				
				rules: {
					"data[Event][picture]": {
						//required: true,
						extension: "png|jpg|jpeg",
						messages:{ 
							
							extension: "Please select profile picture (Only jpeg, jpg, png files allowed)"}
					}
				},
				submitHandler: function(form) 
				{                
					form.submit();
				}   
        });
	});	
		
	//Manage Affiliate profile form validation
	$("#save_profile").click(function(){		
    		$('#UserProfileForm').validate({
				
				rules: {
					"data[User][photo]": {
						//required: true,
						extension: "png|jpg|jpeg",
						messages:{ 
							
							extension: "Please select profile picture (Only jpeg, jpg, png files allowed)"}
					}
				},
				submitHandler: function(form) 
				{                
					form.submit();
				}   
        });
	});		
		
	//Event registration form validation
	$('#register_submit').click(function(){	
		
    		$('#EventRegistrationForm').validate({
				submitHandler: function(form) 
				{      
						form.submit();
				}   
        });
	});	
	
	//Payment form validation
	$('#payment_submit').click(function(){	
		
    		$('#PaymentForm').validate({
				submitHandler: function(form) 
				{      
					form.submit();
				}   
        });
	});	

	
});

function validate_img(form_id)
{
	var filename = $('#profile_picture').val();
	var extension = filename.substring(filename.lastIndexOf('.')+1);
	
	if(extension == "png" || extension == "jpeg" || extension == "jpg")
	{
		$(form_id).submit();	
	}else{
		alert("Please select valid file. Only png, jpeg, jpg files allowed"); 	
	}
}
