<?php $this->Html->script(array('ckeditor/ckeditor','jcarousallite'), array('inline'=>false));?>

	<!-- Slider -->
	<section class="athlt-profile-top row">
		<div class="athlt-profile-top-hd row">
			<div class="page-mid">
				<div class="row">
					<h3 class="admin-hd">Affiliate Admin Panel <span>/ Signed in as</span>  <span> <?php echo $user['first_name'].' '.$user['last_name']; ?> </span></h3>
					<div class="fRight admin-hd-ryt setting-icon">
						
						<a href="javascript://" onclick="toggle_dropdown();" class=""> <img class="" src="<?php echo $this->webroot; ?>images/admin-setting.png" alt=""> </a>
						     <div class="drop-content" style="display:none;">
								 <ul>
									<li><a href="<?php echo $this->webroot; ?>affiliate/manage_profile">Manage Profile</a></li>
									<li><a href="<?php echo $this->webroot; ?>affiliate/manage_coaches">Manage Coaches</a></li>
									<li><a href="<?php echo $this->webroot; ?>affiliate/manage_athletes">Manage Athletes</a></li>
									<li><a href="<?php echo $this->webroot; ?>affiliate/manage_badges">Manage Badges</a></li>
									<li><a href="https://connect.stripe.com/oauth/authorize?response_type=code&client_id=<?php echo STRIPE_CLIENT_ID; ?>&scope=read_write&state=<?php echo $profile['AffiliateProfile']['id']; ?>">Connect Stripe Account</a></li>
								 </ul>
                            
                            </div>
						
					</div>
				</div>
			</div>
		</div>
		<div class="page-mid">
		
			<?php 
				echo $this->Session->flash('success');
				echo $this->Session->flash('error');
				echo $this->Session->flash();
			?>
			<div class="athlt-profile-main row">
				<div class="athlt-profile-lmn">
					<?php echo $this->Form->create('ProfileForm',array('type' => 'file', 'url' => array('controller' => 'users', 'action' => 'update_profile'))); ?>
					<div class="prof-image"> 
						
						<img src="<?php echo $this->webroot.'files/'. $user['id'] .'/'. 'big_'.$user['photo']; ?>" width="100%" alt="">						
						<a href="javascript://" onclick="$('#profile_picture').trigger('click');"> Edit </a>
						
					</div>
					<input type = "file" name = "data[photo]" id = "profile_picture" style = "opacity:0; height:0; width: 0"/> 
					
					<div class="prof-disc">
						<h3 class="row"><?php echo $user['first_name'].' '.$user['last_name']; ?>  
							<a id="edit_profileForm"  href="javascript://" onclick = "show_edit_description();" class="fRight button-blk mt2"> Edit </a>
							<a id="save_profileForm" href="javascript://" onclick = "return submit_profileForm();" class="fRight button-blk mt2" style = "display:none; ">Save</a>	
						</h3>
						<div class="prof-disc-cont description_text">
							<?php echo $user['profile_description']; ?>
							</div>
						
						<div class="prof-disc-cont description_field" style = "display:none;">
							<textarea id="profile_description" name = "profile_description" style = "height:160px; width: 459px;"><?php echo $user['profile_description']; ?></textarea>
							
						</div>
					</div>
					<div class="row mt15">
						
						<?php echo $this->Html->link('Create Event',array('controller'=>'events','action'=>'create_event'),array('class'=>'button-blue mr10')); ?>
						<a href="javascript://" onclick="show_help('<?php echo $this->webroot.'info/help'; ?>');" class="button-blue mr10"> Help </a>
					</div>
				</div>
				
				<div class="athlt-profile-rmn">
				<ul>
						<li> <label> Region </label>  <span> <?php if(isset($profile['Region']['name'])) echo $profile['Region']['name']; else echo 'n/a'; ?></span></li>
						<li> <label> League </label>  <span> TBBJ</span></li>
						<li> <label> Coach #1 </label>  <span> <?php if(isset($profile['Coach_1']) && !empty($profile['Coach_1'])) echo $profile['Coach_1']['first_name'].' '.$profile['Coach_1']['last_name']; else echo '-'; ?></span></li>
						<li> <label> Coach #2 </label>  <span> <?php if(isset($profile['Coach_1']) && !empty($profile['Coach_2'])) echo $profile['Coach_2']['first_name'].' '.$profile['Coach_2']['last_name']; else echo '-'; ?></span></li>
						<li> <label> Established </label>  <span> <?php if(!empty($profile['AffiliateProfile']['established'])) echo $profile['AffiliateProfile']['established']; else echo 'n/a'; ?></span></li>
						<li> <label> #Athletes </label>  <span> <?php if(!empty($profile['AffiliateProfile']['no_of_athletes'])) echo $profile['AffiliateProfile']['no_of_athletes']; else echo 'n/a'; ?></span></li>
						<li> <label> #Fans </label>  <span> <?php if(!empty($profile['AffiliateProfile']['no_of_fans'])) echo $profile['AffiliateProfile']['no_of_fans']; else echo 'n/a'; ?></span></li>
						<li> <label> Charities </label>  <span>  <?php if(!empty($profile['AffiliateProfile']['charity_amount_raised'])) echo '$'.$profile['AffiliateProfile']['charity_amount_raised']; else echo '-'; ?></span></li>
						<li> <label> Firebreather of the month </label>  <span> <a href="#"> <img src="<?php echo $this->webroot; ?>images/fbom1.png" alt=""></a></span></li>
					</ul>
					<div class="row profile-scl mt10">
						<?php if(!empty($profile['AffiliateProfile']['fb_page'])){ ?>
						<a href="<?php echo 'http://www.facebook.com/'.$profile['AffiliateProfile']['fb_page']; ?>" class="sc1"> &nbsp; </a>
						<?php } ?>
						
						<?php if(!empty($profile['AffiliateProfile']['twitter_page'])){ ?>
						<a href="<?php echo 'http://www.twitter.com/'.$profile['AffiliateProfile']['twitter_page']; ?>" class="sc2"> &nbsp; </a>
						<?php } ?>
						
						<?php if(!empty($profile['AffiliateProfile']['google_page'])){ ?>
						<a href="<?php echo $profile['AffiliateProfile']['google_page']; ?>" class="sc3"> &nbsp; </a>
						<?php } ?>
					</div>
				</div>
				<?php echo $this->Form->end(); ?>
			</div>
		</div>
	</section>
	<!-- Slider End -->
	
	<!-- MId Section -->
	<section class="body-content-bg ptb25 row">
		<div class="page-mid">
			<div class="body-content-mn row mt10">
				<div class="row mb25">
					<div class="regi-pnl-l">
						<div class="body-content-box-1">
							<div class="box-1-head">
								<div class="disp-tCell">
									<span> Registration panel</span>
									<select id="filter_registration_panel" class="black_select" onchange="get_event_registration_feeds(this.value);">
										<option value="0"> Select Event</option>
										<?php 
											if(!empty($events))
											{
												foreach($events as $ev)
												{
													echo '<option value="'.$ev['Event']['id'].'">'.$ev['Event']['title'].'</option>';	
												}	
											}
										
										?>
									</select> 
								</div>
							</div>
							<div class="regi-pnl-l-inner">
								<ul class="event_registration_feeds"> 
									<li style="height: 127px; text-align: center; margin-top:90px;">
										<img src="<?php echo $this->webroot; ?>images/loading.gif" alt="Loading..." />
									</li>
									
								</ul>
							</div>
						</div>
					</div>
					<div class="msg-pnl-r">
						<div class="body-content-box-1">
							<div class="box-1-head">
								<div class="disp-tCell"><span> Messages</span> </div>
							</div>
							<div class="msg-pnl-r-inner">
								<ul> 
									<?php if(!empty($messages)){ 
												foreach($messages as $msg) {
													
													if($msg['Message']['type'] == '1'){
										?>
										<li onclick="open_lightbox('<?php echo $this->webroot.'messages/reply_popup/'.$msg['Message']['id']; ?>', '600px', '500px');" id="msg_id_<?php echo $msg['Message']['id']; ?>"> 
											<span title="<?php echo $msg['Message']['from_first_name']. ' ' . $msg['Message']['from_last_name']; ?>">
												<?php echo $this->Text->truncate($msg['Message']['from_first_name'].' '.$msg['Message']['from_last_name'], 20, array('ellipsis' => '...', 'exact' =>true)); ?>
											</span> 
											<p title="<?php echo $msg['Message']['message']; ?>"> 
												<?php echo $this->Text->truncate($msg['Message']['message'], 30, array('ellipsis' => '...', 'exact' =>true)); ?> 
											</p> 							
											
											<label><?php echo formatDate($msg['Message']['created']); ?></label> 
										</li>
									<?php }else{ ?>
										
										<li>
											<span><?php echo $msg['Message']['message']; ?></span>
											<a href="<?php echo $this->webroot.'profile/'.$msg['User']['username']; ?>" target="_blank"><?php echo $msg['Message']['from_first_name']. ' '. $msg['Message']['from_last_name']?></a>
											<label><?php echo formatDate($msg['Message']['created']); ?></label> 
										</li>
										
									<?php } }}else{ ?>
										<li>
											<span>&nbsp;</span>
											<p>No messages found</p>
											<label>&nbsp;</label>
										</li>
									<?php } ?>	
									
									</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="athl-brd-lSec">
						<div class="mng-cnter mb20">
							<h3>Accounts Manager</h3>
							<ul> 
								<li> <a href="#" class="mc-ico1">Edit Athlete Account</a> </li>
								<?php if(isset($upcoming_event_id)){ ?>
								<li> <a href="<?php echo $this->webroot.'events/manage_registrations/'.$upcoming_event_id; ?>" class="mc-ico2">Manage Registration </a></li>
								
								<?php } ?>
								<li> <a href="<?php echo $this->webroot.'events/manage_events'; ?>" class="mc-ico3">Manage Events</a> </li>
							</ul>
						</div>
						<div class="row mb20 doNxtEvent">
							<div class="doNxtEvent-inner">
								<h3>#Days to next Event</h3>
								<span> <?php if(isset($days_next_event)) echo $days_next_event; else echo '-'; ?> </span>
							</div>
						</div>
						<div class="row mb20 doNxtEvent">
							<div class="doNxtEvent-inner">
								<h3>#Athletes Registered</h3>
								<span> <?php if(isset($athlete_count)) echo $athlete_count; else echo 0; ?> </span>
							</div>
						</div>
						<div class="row mb20 doNxtEvent">
							<div class="doNxtEvent-inner">
								<h3>#of Regions Attending</h3>
								<span> 4 </span>
							</div>
						</div>
					</div>
					<div class="athl-brd-rSec">
						<div class="social-badges mb25">
							<div class="body-content-box-1">
								<div class="box-1-head">
									<div class="disp-tCell"><span> Social Badges</span> </div>
								</div>
								<?php if(!empty($badges)){ ?>
								<div class="sociallink badges_list big-sliders social-badge-secion-inner pt30 pb60 mr0" style="width: 600px; height:120px;">
									<?php if(count($badges) >= 5){ ?>
									<a href="" class="prev">Prev</a>
									<?php } ?>
                        	 <div class="slider-container">
	                                <ul class="" >
	                                	<?php if(!empty($badges)){	                                			
												foreach($badges as $bg){ 
	                                		?>
	                                    <li>
	                                    	<a href="<?php echo $bg['Badge']['link']; ?>" target="_blank" title="<?php echo $bg['Badge']['title']; ?>">
	                                    		<img class="circle big" src="<?php echo $this->webroot.'files/badges/'.$bg['Badge']['id'].'/thumb_'.$bg['Badge']['photo']; ?>" width="105" height="105" alt="" />
	                                    	</a>
	                                    </li>	                                                                   
	                                	<?php }} ?>
	                                </ul>
	                         </div>
	                         		<?php if(count($badges) >= 5){ ?>
	                                <a href="" class="next">Next</a>
	                                <?php } ?>
								</div>
								<?php }else{ ?>
									<div class="sociallink badges_list social-badge-secion-inner pt30 pb60 mr0" style="width: 689px; height:120px;">
										</div>
								<?php } ?>	
							</div>
						</div>
						<div class="social-badges mb25">
							<div class="body-content-box-1">
								<div class="box-1-head">
									<div class="disp-tCell"><span> Event Messenger</span> </div>
								</div>
								<div class="messages-secion-inner">
									<?php echo $this->Form->create('Customfeed', array('id' => 'EventNewsIndexForm','type' => 'file','url' => array('controller' => 'events', 'action' => 'post_news'), 'method' => 'post'))?>
									<ul class="messages-secion-evnts brdr-btm-groove">
										<li class="mb10">
											<div class="mng-event-top">
												<select name="data[Customfeed][event_id]" class="required">
													<option value=""> Select Event</option>
													<?php 
														if(!empty($events))
														{
															foreach($events as $ev)
															{
																echo '<option value="'.$ev['Event']['id'].'">'.$ev['Event']['title'].'</option>';	
															}	
														}
													
													?>
												</select>
												
												<div class="fRight posRel">
													<textarea id="post_text" name="data[Customfeed][content]" class="required"></textarea>
													<a href="javascript://" onclick="post_feeds();" class="post">POST</a>
												</div>
												
												<div class="public_check checkbox_btn">
													<label><input type="checkbox" class="checkbox" name="data[Customfeed][is_public]" value="1"/> <span>Public</span></label>
												</div>
											</div>
										</li>
									</ul>
									
									<?php echo $this->Form->end(); ?>
									<ul class="messages-secion-evnts vticker mrgn-top15">	
										
										<li style="height: 100px; text-align: center; margin-top:50px;">
											<img src="<?php echo $this->webroot; ?>images/loading.gif" alt="Loading..." />
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="row mb25">
					<ul class="athlt-board-mn">
						<li class="athlt-board-li-outer">
							<div class="body-content-box-1">
								<div class="box-1-head">
									<div class="disp-tCell"> <img src="images/indv-athl-1.png" class="fLeft mtb10" alt=""> <span class="mtb21 ml10"> Athlete #1 </span> </div>
								</div>
								<div class="athlt-board-cont">
									<ul class="athl-brd-list ind-athl-brd">
										<li> <a href="#">Recent Placing</a> <label> 4th </label> </li>
										<li> <a href="#">Recent Placing</a> <label> Beatdown </label> </li>
										<li> <a href="#">Performance Trends</a><span class="up fLeft"> &nbsp;</span> </li>
									</ul>
								</div>
							</div>
						</li>
						<li class="athlt-board-li-outer mid"> 
							<div class="body-content-box-1">
								<div class="box-1-head">
									<div class="disp-tCell"> <img src="images/indv-athl-2.png" class="fLeft mtb10" alt=""> <span class="mtb21 ml10"> Athlete #2 </span> </div>
								</div>
								<div class="athlt-board-cont">
									<ul class="athl-brd-list ind-athl-brd">
										<li> <a href="#">Recent Placing</a> <label> 4th </label> </li>
										<li> <a href="#">Recent Placing</a> <label> Beatdown </label> </li>
										<li> <a href="#">Performance Trends</a><span class="up fLeft"> &nbsp;</span> </li>
									</ul>
								</div>
							</div>
						</li>
						<li class="athlt-board-li-outer"> 
							<div class="body-content-box-1">
								<div class="box-1-head">
									<div class="disp-tCell"> <img src="images/indv-athl-3.png" class="fLeft mtb10" alt=""> <span class="mtb21 ml10"> Athlete #3 </span> </div>
								</div>
								<div class="athlt-board-cont">
									<ul class="athl-brd-list ind-athl-brd">
										<li> <a href="#">Recent Placing</a> <label> 4th </label> </li>
										<li> <a href="#">Recent Placing</a> <label> Beatdown </label> </li>
										<li> <a href="#">Performance Trends</a><span class="up fLeft"> &nbsp;</span> </li>
									</ul>
								</div>
							</div>
							
						</li>
					</ul>
				</div>
				
				<div class="row mb25">
					<ul class="athlt-board-mn">
						<li class="athlt-board-li-outer">
							<div class="body-content-box-1">
								<div class="box-1-head">
									<div class="disp-tCell"> <img src="images/indv-athl-1.png" class="fLeft mtb10" alt=""> <span class="mtb21 ml10"> Athlete #1 </span> </div>
								</div>
								<div class="athlt-board-cont">
									<ul class="athl-brd-list ind-athl-brd">
										<li> <a href="#">Recent Placing</a> <label> 4th </label> </li>
										<li> <a href="#">Recent Placing</a> <label> Beatdown </label> </li>
										<li> <a href="#">Performance Trends</a><span class="up fLeft"> &nbsp;</span> </li>
									</ul>
								</div>
							</div>
						</li>
						<li class="athlt-board-li-outer mid"> 
							<div class="body-content-box-1">
								<div class="box-1-head">
									<div class="disp-tCell"> <img src="images/indv-athl-2.png" class="fLeft mtb10" alt=""> <span class="mtb21 ml10"> Athlete #2 </span> </div>
								</div>
								<div class="athlt-board-cont">
									<ul class="athl-brd-list ind-athl-brd">
										<li> <a href="#">Recent Placing</a> <label> 4th </label> </li>
										<li> <a href="#">Recent Placing</a> <label> Beatdown </label> </li>
										<li> <a href="#">Performance Trends</a><span class="up fLeft"> &nbsp;</span> </li>
									</ul>
								</div>
							</div>
						</li>
						<li class="athlt-board-li-outer"> 
							<div class="body-content-box-1">
								<div class="box-1-head">
									<div class="disp-tCell"> <img src="images/indv-athl-3.png" class="fLeft mtb10" alt=""> <span class="mtb21 ml10"> Athlete #3 </span> </div>
								</div>
								<div class="athlt-board-cont">
									<ul class="athl-brd-list ind-athl-brd">
										<li> <a href="#">Recent Placing</a> <label> 4th </label> </li>
										<li> <a href="#">Recent Placing</a> <label> Beatdown </label> </li>
										<li> <a href="#">Performance Trends</a><span class="up fLeft"> &nbsp;</span> </li>
									</ul>
								</div>
							</div>
							
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- MId Section End -->
	
<script type = "text/javascript">

$(document).ready(function(){
	$('#EventNewsIndexForm').validate();
	
	get_news_posts('<?php echo $this->webroot.'users/get_page_feeds/'.$user['id']; ?>');
	get_event_registration_feeds(0);
	
	$('.description_text').mCustomScrollbar();	
	$('#profile_picture').change(function(){
		validate_img('#ProfileFormIndexForm');	
	});
	
	<?php if(!empty($badges) && count($badges)>=5) { ?>
	 $(".badges_list").jCarouselLite({
        btnNext: ".next",
        btnPrev: ".prev"
    });
    <?php } ?>
});

function post_feeds()
{	
	if($('#EventNewsIndexForm').valid())
	{
		var frm = $('#EventNewsIndexForm').serialize();
		$('.vticker').html('<li style="height: 100px; text-align: center; margin-top:50px;"><img src="<?php echo $this->webroot; ?>images/loading.gif" alt="Loading..." /></li>');
		document.getElementById('EventNewsIndexForm').reset();	
		$.post('<?php echo $this->webroot.'events/post_news'; ?>',frm,function(data){
			
					get_news_posts('<?php echo $this->webroot.'users/get_page_feeds/'.$user['id']; ?>');
			//console.log(data);
		});
	}
		
}



function get_event_registration_feeds(event_id)
{
	$.post('<?php echo $this->webroot.'events/event_registration_feeds/'; ?>' + event_id,function(data){
		$('.event_registration_feeds').html(data);
	});
}

function show_edit_description()
{
	
	$('#edit_profileForm').hide();
	$('.description_text').hide();
	$('.description_field').show();
	$('#save_profileForm').show();	
}

function submit_profileForm()
{
	var value = $('#profile_description').val();
	$('#ProfileFormIndexForm').submit();
	
}



function reply_box(box_id)
{
	$('.reply_box').remove();	
	$('#msg_id_'+box_id).after('<li id="msg_reply_'+box_id+'" class="reply_box"><img src="<?php echo $this->webroot.'images/loading.gif'?>"></li>');
	$.post('<?php echo $this->webroot.'messages/get_message/'?>' + box_id, function(data){
		$('.reply_box').html(data);
	});
}

CKEDITOR.replace( 'profile_description' ,
	{
		toolbar: [
			{ name: 'document', items: [ 'Source', '-', 'NewPage', 'Preview', '-', 'Templates' ] },	// Defines toolbar group with name (used to create voice label) and items in 3 subgroups.
			[ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ],			// Defines toolbar group without name.
			'/',																					// Line break - next group will be placed in new line.
			{ name: 'basicstyles', items: [ 'Bold', 'Italic' ] }
		],
		height: '80px',
	});
	

function readURL(input) {
	if (input.files[0] && input.files[0]) {
		var reader = new FileReader();
	
	reader.onload = function (e) {
		$('#img_prev')
		.attr('src', e.target.result)
		.width(48)
		.height(48);
	};
	
	reader.readAsDataURL(input.files[0]);
	}
}
	
</script>

