<?php ?>
<div class="loginpopup invite_athlete_box register" style="display:none;">
    	<span class="overlay"></span>
        <div class="loginBox createEvent">
            <div class="logininner clearfix">
                <a class="close" href="javascript://" onclick="$('.people_div').html(''); $('.invite_athlete_box').hide(); scrollToAnchor('.pricing');"><img src="<?php echo $this->webroot; ?>images/close_btn.png" alt=""></a>
                
                <h2>invite atheletes/affiliates /teams etc</h2>            
                    
                <form id="peopleForm" action="#" method="post" onsubmit="return save_invited_people();">
                    
                    <input type="text" id="search_keyword" class="search-bar pull-left mr10" placeholder="Enter keyword for search" />
                      
						<div class="blue pull-left">
							<button onclick="return search_people();">SEARCH</button>
						</div>                 
                    
                    <div class="col loading_div">Please wait...</div>
                    <div class="col people_div invite-column"></div>
                                     
                    <div class="bottom">                    	
                        <button onclick="return save_invited_people();" class="pull-left">Invite</button>                 	
                    </div>                                
                </form>            
            </div>
        </div>    
    </div>
    
 <script type="text/javascript">
 
 function save_invited_people()
 {
	var invited = $('#number_invited_people').val(); 
	invited = parseInt(invited) + 1;	
	$('#invitee_label').show();	
			 
	$('.people_check').each(function(e){
		
		if($(this).is(':checked'))
		{
			if(!$('#invitee_'+this.value).length)
			{
				$('.invited_people_div').append('<input type="hidden" id="invitee_'+ this.value +'" name="data[People][' + invited + ']" value="'+ this.value +'"/>');
				$('.display_people').append('<li class="invites" id="invitee_li_' + this.value + '"> <input type="button" class="invitees" value="' + this.title + '" /><span class="cross" onclick="remove_invitee(' + this.value + ')"></span></li>');
				invited = parseInt(invited) + 1;
			}
		}
		
	});	
	$('.invite_athlete_box').fadeOut();
	scrollToAnchor('.pricing');
	return false;
 }
 
 function remove_invitee(num)
 {
	$('#invitee_'+num).remove();
	$('#invitee_li_'+num).remove();	
 }
 
 function search_people()
 {
	var keyword = $('#search_keyword').val();
	
	$('.loading_div').show();
	$('.people_div').hide();
	$.post('<?php echo $this->webroot; ?>events/get_people',{ keyword: keyword}, function(data) {
		
		$('.people_div').html(data);
		$('.loading_div').hide();
		$('.people_div').show();
		
	});	
	return false;
 }
 </script>   
