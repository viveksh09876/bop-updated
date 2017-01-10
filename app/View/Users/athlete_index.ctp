<?php $this->Html->script(array('ckeditor/ckeditor'), array('inline'=>false));?>
<?php 
echo $this->Html->css(array('jquery.mCustomScrollbar'));
echo $this->Html->script(array('jcarousallite','jquery.mCustomScrollbar')); ?>	
	<!-- Slider -->
	<section class="athlt-profile-top row">
		<div class="athlt-profile-top-hd row">
			<div class="page-mid">
				<div class="row">
					<h3 class="admin-hd">Athlete Admin Panel <span>/ Signed in as</span>  <span> <?php echo $user['first_name'].' '.$user['last_name']; ?> </span></h3>
					<div class="fRight admin-hd-ryt setting-icon">
						
						<a href="javascript://" onclick="toggle_dropdown();" class=""> <img class="" src="<?php echo $this->webroot; ?>images/admin-setting.png" alt=""> </a>
						     <div class="drop-content" style="display:none;">
								 <ul>
									<li><a href="<?php echo $this->webroot; ?>athlete/manage_profile">Manage Profile</a></li>
								
									<li><a href="<?php echo $this->webroot; ?>athlete/manage_badges">Manage Badges</a></li>
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
				<?php echo $this->Form->create('ProfileForm',array('type' => 'file', 'url' => array('controller' => 'users', 'action' => 'update_profile'))); ?>
				
				<div class="athlt-profile-lmn">
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
						<a href="<?php echo $this->webroot.'challenges/challenge_user'; ?>" class="button-blue mr10"> Create Challenge </a>
						<a href="javascript://" onclick="show_help('<?php echo $this->webroot.'info/help'; ?>');" class="button-blue mr10"> Help </a>
					</div>
				</div>
				
				<div class="athlt-profile-rmn">
					<ul>
						<li> <label> Region </label>  <span> <?php if(isset($profile['Region']['name'])) echo $profile['Region']['name']; else echo 'n/a'; ?></span></li>
						<li> <label> Box </label>  <span> TBBJ</span></li>
						<li> <label> Gender </label>  <span> <?php if(!empty($profile['AthleteProfile']['gender'])) echo $profile['AthleteProfile']['gender']; else echo 'n/a'; ?></span></li>
						<li> <label> Age </label>  <span> <?php if(!empty($profile['AthleteProfile']['date_of_birth'])) echo calculateAge($profile['AthleteProfile']['date_of_birth']); else echo 'n/a'; ?></span></li>
						<li> <label> Height </label>  <span> <?php if(!empty($profile['AthleteProfile']['height'])) echo $profile['AthleteProfile']['height']; else echo 'n/a'; ?></span></li>
						<li> <label> Weight </label>  <span> <?php if(!empty($profile['AthleteProfile']['weight'])) echo $profile['AthleteProfile']['weight']; else echo 'n/a'; ?></span></li>
						
					</ul>
					<div class="row profile-scl mt10">
						<?php if(!empty($profile['AthleteProfile']['fb_page'])){ ?>
						<a href="<?php echo 'http://www.facebook.com/'.$profile['AthleteProfile']['fb_page']; ?>" class="sc1"> &nbsp; </a>
						<?php } ?>
						
						<?php if(!empty($profile['AthleteProfile']['twitter_page'])){ ?>
						<a href="<?php echo 'http://www.twitter.com/'.$profile['AthleteProfile']['twitter_page']; ?>" class="sc2"> &nbsp; </a>
						<?php } ?>
						
						<?php if(!empty($profile['AthleteProfile']['google_page'])){ ?>
						<a href="<?php echo $profile['AthleteProfile']['google_page']; ?>" class="sc3"> &nbsp; </a>
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
					<div class="athl-brd-lSec">
						<div class="mng-cnter">
							<h3>Management Center</h3>
							<ul class="management_center"> 
								<li> <a href="<?php echo $this->webroot.'events/nearby_events'; ?>" class="mc-ico1">Nearby Events</a> <?php if($count_nearby > 0 ){ ?><span> <?php echo $count_nearby; ?> </span><?php  }?> </li>
								<li> <a href="<?php echo $this->webroot.'challenges/requests'; ?>" class="mc-ico2">Challenge Requests </a> <?php if($challenge_request > 0 ){ ?><span> <?php echo $challenge_request; ?> </span><?php  }?> </li>
								<li> <a href="<?php echo $this->webroot.'challenges/pending_confirmations'; ?>" class="mc-ico3">Pending Confirmations</a> </li>
								<li> <a href="<?php echo $this->webroot.'challenges/future_events'; ?>" class="mc-ico3">Future Events </a></li>
								<li> <a href="<?php echo $this->webroot.'challenges/my_events'; ?>" class="mc-ico3">My Events </a></li>
							</ul>
						</div>
					</div>
					<div class="athl-brd-rSec">
						<div class="social-badges">
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
					</div>
				</div>
				
				<div class="row">
					<div class="body-content-box-1 mb25">
						<div class="box-1-head">
							<div class="disp-tCell"><span> Messages </span> </div>
						</div>
						<div class="messages-secion-inner">
							<ul class="athlete_messages">
								<li style="height: 100px; text-align: center; margin-top:50px;">
									<img src="<?php echo $this->webroot.'images/loading.gif'; ?>" alt="" />
								</li>
								
							</ul>
							<div class="add4"><a href="#"> <img src="images/add4.png" alt=""></a></div>
						</div>
					</div>
				</div>
				
				<div class="row mb25">
					<ul class="athlt-board-mn">
						<li class="athlt-board-li-outer">
							<div class="body-content-box-1">
								<div class="box-1-head">
									<div class="disp-tCell"><span> Performance Trends </span> </div>
								</div>
								<div class="athlt-board-cont">
									<ul class="athl-brd-list">
										<li> <a href="#">Metcon</a> <span class="up"> &nbsp;</span> </li>
										<li> <a href="#">Lifts</a><span class="down"> &nbsp;</span> </li>
										<li> <a href="#">Monostructural - Running</a> <span class="up"> &nbsp;</span> </li>
										<li> <a href="#">Monostructural - Rowing</a> <span class="up"> &nbsp;</span> </li>
										<li> <a href="#">Monostructural - Biking</a> <span class="up"> &nbsp;</span> </li>
									</ul>
								</div>
							</div>
						</li>
						<li class="athlt-board-li-outer mid"> 
							<div class="body-content-box-1">
								<div class="box-1-head">
									<div class="disp-tCell"><span> My Stats - current </span> </div>
								</div>
								<div class="athlt-board-cont">
									<ul class="athl-brd-list">
										<li> <a href="#">Fran - 502 </a> <span class="up"> &nbsp;</span> </li>
										<li> <a href="#">Dead Lifts - 252</a><span class="down"> &nbsp;</span> </li>
										<li> <a href="#">Fran - 502 </a> <span class="up"> &nbsp;</span></li>
										<li> <a href="#">Dead Lifts - 252</a> <span class="up"> &nbsp;</span> </li>
										<li> <a href="#">Fran - 502 </a> <span class="up"> &nbsp;</span> </li>
									</ul>
								</div>
							</div>
						</li>
						<li class="athlt-board-li-outer"> 
							<div class="body-content-box-1">
								<div class="box-1-head">
									<div class="disp-tCell"><span> My Placings </span> </div>
								</div>
								<div class="athlt-board-cont">
									<ul class="athl-brd-list">
										<li> <a href="#">Texas Thrown - 1st</a> <span class="up"> &nbsp;</span> </li>
										<li> <a href="#">Georgia Beatdown - 2nd</a><span class="down"> &nbsp;</span> </li>
										<li> <a href="#">Texas Thrown - 3rd</a> <span class="up"> &nbsp;</span> </li>
										<li> <a href="#">Texas Thrown - 1st</a> <span class="up"> &nbsp;</span> </li>
										<li> <a href="#">Georgia Beatdown - 2nd</a> <span class="up"> &nbsp;</span> </li>
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
									<div class="disp-tCell"><span> Metcon PRs - Overall </span> </div>
								</div>
								<div class="athlt-board-cont">
									<ul class="athl-brd-list">
										<li> <a href="#">Metcon</a>  </li>
										<li> <a href="#">Lifts</a> </li>
										<li> <a href="#">Monostructural - Running</a> </li>
										<li> <a href="#">Monostructural - Rowing</a> </li>
										<li> <a href="#">Monostructural - Biking</a> </li>
									</ul>
								</div>
							</div>
						</li>
						<li class="athlt-board-li-outer mid"> 
							<div class="body-content-box-1">
								<div class="box-1-head">
									<div class="disp-tCell"><span> Lift PRs - Overall </span> </div>
								</div>
								<div class="athlt-board-cont">
									<ul class="athl-brd-list">
										<li> <a href="#">Fran - 502 </a> </li>
										<li> <a href="#">Dead Lifts - 252</a></li>
										<li> <a href="#">Fran - 502 </a> </li>
										<li> <a href="#">Dead Lifts - 252</a> </li>
										<li> <a href="#">Fran - 502 </a> </li>
									</ul>
								</div>
							</div>
						</li>
						<li class="athlt-board-li-outer"> 
							<div class="body-content-box-1">
								<div class="box-1-head">
									<div class="disp-tCell"><span> Monostructural Running PRs </span> </div>
								</div>
								<div class="athlt-board-cont">
									<ul class="athl-brd-list">
										<li> <a href="#">Texas Thrown - 1st</a> </li>
										<li> <a href="#">Georgia Beatdown - 2nd</a></li>
										<li> <a href="#">Texas Thrown - 3rd</a> </li>
										<li> <a href="#">Texas Thrown - 1st</a> </li>
										<li> <a href="#">Georgia Beatdown - 2nd</a> </li>
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
									<div class="disp-tCell"><span> Monostructural Rowing PRs - Overall </span> </div>
								</div>
								<div class="athlt-board-cont">
									<ul class="athl-brd-list">
										<li> <a href="#">Metcon</a>  </li>
										<li> <a href="#">Lifts</a> </li>
										<li> <a href="#">Monostructural - Running</a> </li>
										<li> <a href="#">Monostructural - Rowing</a> </li>
										<li> <a href="#">Monostructural - Biking</a> </li>
									</ul>
								</div>
							</div>
						</li>
						<li class="athlt-board-li-outer mid"> 
							<div class="body-content-box-1">
								<div class="box-1-head">
									<div class="disp-tCell"><span> Monostructural Biking PRs - Overall </span> </div>
								</div>
								<div class="athlt-board-cont">
									<ul class="athl-brd-list">
										<li> <a href="#">Fran - 502 </a> </li>
										<li> <a href="#">Dead Lifts - 252</a></li>
										<li> <a href="#">Fran - 502 </a> </li>
										<li> <a href="#">Dead Lifts - 252</a> </li>
										<li> <a href="#">Fran - 502 </a> </li>
									</ul>
								</div>
							</div>
						</li>
						<li class="athlt-board-li-outer"> 
							<div class="body-content-box-1">
								<div class="box-1-head">
									<div class="disp-tCell"><span> Gymnastics PRs - Overall </span> </div>
								</div>
								<div class="athlt-board-cont">
									<ul class="athl-brd-list">
										<li> <a href="#">Texas Thrown - 1st</a> </li>
										<li> <a href="#">Georgia Beatdown - 2nd</a></li>
										<li> <a href="#">Texas Thrown - 3rd</a> </li>
										<li> <a href="#">Texas Thrown - 1st</a> </li>
										<li> <a href="#">Georgia Beatdown - 2nd</a> </li>
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
    
  	get_athlete_messages('<?php echo $this->webroot.'messages/get_athlete_messages'; ?>');
});

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
	
	
</script>
