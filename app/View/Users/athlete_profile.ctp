<?php
	echo $this->Html->script('jquery-ui.custom'); 
	echo $this->Html->css(array('jquery-ui.custom')); 
?>
<?php 
echo $this->Html->css(array('jquery.mCustomScrollbar'));
echo $this->Html->script(array('jcarousallite','jquery.mCustomScrollbar')); ?>	
	<!-- Slider -->
	<section class="athlt-profile-top row">
		<div class="page-mid">
			<div class="athlt-profile-main row">
				<div class="athlt-profile-lmn">
					<div class="prof-image"> 
						<img src="<?php echo $this->webroot.'files/'.$user['id'].'/big_'.$user['photo']; ?>" width="100%" alt="" style="height:214px;"> 
						<!--<a href="#"> Edit </a>-->
					</div>
					<div class="prof-disc">
						<h3 class="row"><?php echo $user['first_name'].' '.$user['last_name']; ?></h3>
						<div class="prof-disc-cont gap description_text">
							<?php echo $user['profile_description']; ?>                           
						</div>
                        	<?php if(!empty($badges)){ ?>
                        <div class="sociallink badges_list">
                        	 <?php if(count($badges) >= 4){ ?>
                        	<a href="" class="prev">Prev</a>
                        	<?php } ?>
                        	 <div class="slider-container">
                                <ul class="" >
                                	<?php if(!empty($badges)){ 
                                			
											foreach($badges as $bg){ 
                                		?>
                                    <li>
                                    	<a href="<?php echo $bg['Badge']['link']; ?>" target="_blank">
                                    		<img class="circle small" src="<?php echo $this->webroot.'files/badges/'.$bg['Badge']['id'].'/thumb_'.$bg['Badge']['photo']; ?>" width="75" height="75" alt="" />
                                    	</a>
                                    </li>
                                                                   
                                	<?php }} ?>
                                </ul>
                                </div>
                                <?php if(count($badges) >= 4){ ?>
                                <a href="" class="next">Next</a>
                                <?php } ?>
							</div>
						<?php }else{ ?>
							 <div class="sociallink badges_list" style="width:350px; height:100px;"></div>
						<?php } ?>
					</div>
					<div class="row box_row">
                    	<ul class="blue_btn">
                    		<?php if ( $user['id'] != $this->Session->read('Auth.User.id') ) { ?>
                    			
                    			<?php if($this->Session->read('Auth.User.user_type') == 'athlete'){ ?>
                        		<li><a href="<?php echo $this->webroot.'challenges/challenge_user/'.$user['id']; ?>"><span>Challenge Me</span></a></li>
                        		<?php } ?>
                        		<li>
									<a href="javascript://" onclick="open_lightbox('<?php echo $this->webroot.'messages/display_message_popup/'.$user['username']; ?>','600px', '<?php if($this->Session->check('Auth.User.id')) echo '400px;'; else echo '565px'; ?>');">
										<span>Message Me</span>
									</a>
								</li>
								<li>
									<?php if ( $this->Session->check('Auth.User.id')){  
											
											
										?>
										<a href="javascript://" style="<?php if(isset($is_follow)) echo 'display:none;'?>" class="follow_btn" onclick="follow_user('<?php echo $this->webroot.'followers/follow'; ?>','<?php echo $user['id']; ?>', '<?php echo $this->Session->read('Auth.User.id'); ?>'); get_my_fans('<?php echo $this->webroot.'followers/get_athlete_followers/'.$user['id']; ?>');">
											<span>Follow</span>
										</a>
									
										
										<a href="javascript://" style="<?php if(!isset($is_follow)) echo 'display:none;'?>" class="gray-strip-bg unfollow_btn" onclick="unfollow_user('<?php echo $this->webroot.'followers/unfollow'; ?>','<?php echo $user['id']; ?>', '<?php echo $this->Session->read('Auth.User.id'); ?>'); get_my_fans('<?php echo $this->webroot.'followers/get_athlete_followers/'.$user['id']; ?>');">
											<span>Following</span>
										</a>
										
									<?php } ?>
								</li>
                        	<?php } else { ?>
									<li><a href="<?php echo $this->webroot.'users'; ?>"><span>Dashboard</span></a></li>
							<?php } ?>
                        </ul>
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
				
			</div>
		</div>
	</section>
	<!-- Slider End -->
	
	<!-- MId Section -->
	<section class="body-content-bg ptb25 row">
		<div class="page-mid">
			<div class="body-content-mn row mt10">
				
				<div class="row">
					<div class="athl-brd-lSec">
						<div class="mng-cnter wood mb20">
							<h3>WOD PR<sub>s</sub></h3>
							<ul> 
								<li><span>2:11</span> <a href="#">Fran</a> </li>
								<li><span>1:32</span><a href="#">Helen</a></li>
								<li><span>16:11</span><a href="#">Grace</a> </li>
							</ul>
						</div>

						<div class="mng-cnter wood mb20">
							<h3>Lift PR<sub>s</sub></h3>
							<ul> 
								<li><span>750</span> <a href="#">Squat</a> </li>
								<li><span>500</span><a href="#">Deadlift</a></li>
								<li><span>350</span><a href="#">Cleand & Jerk</a> </li>
							</ul>
						</div>
					</div>
                    
					<div class="athl-brd-rSec">
						
                        <div class="leftside">
                        	<?php if(!empty($leaderboard)){ ?>
                            <div class="leaderboard">
                            	
                                <h2>My LeaderBoards</h2>
                                
                                <div class="accdion">
                                	<?php if(!empty($leaderboard)){
                                			$i=1;
											foreach($leaderboard as $lb){	
									 ?>
                                	
                                	<div title="<?php echo '<strong>'.$lb['Challenge']['ChallengeWod']['Wod']['title'].'</strong><br>'.$lb['Challenge']['location'].'<br>'.$lb['Challenge']['ChallengeWod']['Wod']['description']; ?>" id="head_<?php echo $i; ?>" class="head leader_head <?php if($i == 1) echo 'open'; else echo 'close'; ?>" onclick="toggle_leader('<?php echo $i; ?>');">
                                		<h3>Challenge #<?php echo $i; if(!empty($lb['Challenge']['location'])) echo ' - '.wraptext($lb['Challenge']['location'],40); ?></h3>
                                	</div>
                                    <ul id="headul_<?php echo $i; ?>" style="<?php if($i!=1) echo 'display:none;'; ?>" class="leader_ul">
                                    	<?php $j=1;
                                    			foreach($lb['Challenge']['ChallengePeople'] as $ppl){ ?>
                                    	<li style="<?php if($ppl['user_id'] == $user['id']) echo 'background-color: #888'; ?>">
                                        	<span class="num"><?php echo $j; ?>.</span>
                                        	<span>
                                        		<a href="<?php echo $this->webroot.'profile/'.$ppl['User']['username']; ?>" target="_blank">
                                        			<?php echo $ppl['User']['first_name'].' '.$ppl['User']['last_name']; ?>
                                        		</a>
                                        	</span>
                                        	<span class="col">
                                        		<a href="<?php if(!empty($ppl['video_link'])) echo $ppl['video_link']; else echo '#'; ?>" target="_blank">
                                        		<?php if(!empty($ppl['score'])) echo $ppl['score'].' ('.$ppl['type'].')'; else echo 'N/A';
														if($lb['Challenge']['status'] == 'Contested'){
															if($j == 1){
																echo ' - <strong>Win</strong> ';
															}
														}
												 ?>
                                        		</a>
                                        		</span>
                                        	<span class="col">
                                        		<?php if($ppl['status'] == 'Contested') { ?>
                                        			<img src="<?php echo $this->webroot.'images/tick.png'; ?>" alt="" height="20" width="20" />
                                        		<?php }else{ ?>
                                        			<img src="<?php echo $this->webroot.'images/minus.png'; ?>" alt="" height="20" width="20" />
                                        		<?php } ?>			
                                        	</span>
                                        
                                        </li>
                                    	
                                    	<?php $j++; } ?>
                                    </ul>
                                    <?php  $i++;  }} ?>
                                	                                
                                </div>
                            
                            </div>
                            <?php } ?>
                            <div class="social-badges social mt15">
                                <div class="body-content-box-1">
                                    <div class="box-1-head">
                                        <div class="disp-tCell"><span> My Social Network</span> </div>
                                    </div>
                                    <div class="messages-secion-inner">
                                        <ul class="messages-secion-evnts vticker" style="max-height: 450px; overflow-y:scroll;">
                                            <li class="noBrdr" style="height: 100px; text-align: center; margin-top:50px;">
                                               <img src="<?php echo $this->webroot; ?>images/loading.gif" alt="Loading..." />
                                            </li>
                                          
                                        </ul>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                        
                        <div class="rightside">
                        	
                            <div class="fansBox">
                            	
                                <div class="head">
                                	<a class="link" href="#">Become a Fan</a>
                                	<h2>My Fans</h2>                                
                                </div>
                                <ul class="my_fans">
                                	<li style="width:100%; text-align: center;"><img src="<?php echo $this->webroot.'images/loading.gif'; ?>" alt=""></li>
                                	
                                </ul>
                                
                                <a class="viewbtn" href="<?php echo $this->webroot.'followers/get_all_followers/'.$user['id']; ?>"><span>View All Fans</span></a>
                            </div>
                        	  <?php if ( !empty($events) ) { ?>
                            <div class="social-badges event mt15" style="border:none;">
                                <div class="body-content-box-1">
                                    <div class="box-1-head">
                                        <div class="disp-tCell"><span> My Events</span> </div>
                                    </div>
                                    <div class="messages-secion-inner">
                                        <ul class="messages-secion-evnts">
                                         <?php if ( !empty($events) ) { 
													$i=0;
													foreach($events as $ev) {
														
										 ?>                                           
                                            <li>
                                                <div class="msg-img"> 
													<img src="<?php echo $this->webroot.'files/events/'.$ev['Event']['id'].'/thumb_'.$ev['Event']['picture']; ?>"  alt="" style="height:65px; width:65px;" />
                                                </div>
                                                <div class="msg-cont">  
                                                    <span class="row"> <a href="<?php echo $this->webroot.'events/event_details/'.$ev['Event']['id']; ?>"><?php echo $ev['Event']['title']; ?></a></span>
                                                    <p><?php echo $ev['Event']['event_type']; ?></p>
                                                    <b><?php echo formatDate($ev['Event']['start_date']); ?></b>
                                                </div>
                                            </li>
                                           <?php                                            
												$i++;
												                                           
                                           		if ( $i == 3) break; 
											   }
											}
										  ?> 
										                                            
                                        </ul>
                                        <a class="viewbtn" href="<?php echo $this->webroot.'events/my_events'; ?>"><span>View All Events</span></a>
                                    </div>
                                </div>
                            </div>
                            <?php  } ?>
                        	
                            <div class="row mt15">
                                    <a href="#"> <img src="<?php echo $this->webroot; ?>images/add5.png" class="row" alt=""></a>
                                </div>
                            <div class="row mt15">
                                <a href="#"> <img src="<?php echo $this->webroot; ?>images/add4.png" class="row" alt=""></a>
                            </div>

                        </div>
                    
                    </div>    
				</div>
				
			</div>
		</div>
	</section>
	<!-- MId Section End -->
	
<script type="text/javascript">

$(document).ready(function(){
	$('.description_text').mCustomScrollbar();
	$(document).tooltip();	
	
	get_my_fans('<?php echo $this->webroot.'followers/get_athlete_followers/'.$user['id']; ?>');
	
	<?php if(!empty($badges) && count($badges)>=4) { ?>
	 $(".badges_list").jCarouselLite({
        btnNext: ".next",
        btnPrev: ".prev"
    });
    <?php } ?>
    
      get_news_posts('<?php echo $this->webroot.'users/get_page_feeds/'.$user['id']; ?>');
});

function toggle_leader(num)
{
	var cls = $('#head_'+num).attr('class');
	
	$('.leader_head').removeClass('open');
	$('.leader_head').addClass('close');
	$('.leader_ul').slideUp('slow');
	
	if(cls.indexOf('open') > -1)
	{
		$('#head_'+num).removeClass('open');
		$('#head_'+num).addClass('close');
		$('#headul_'+num).slideUp('slow');
	}else{
		
		$('#head_'+num).removeClass('close');
		$('#head_'+num).addClass('open');
		$('#headul_'+num).slideDown('slow');
	}
	
	
}

</script>	
