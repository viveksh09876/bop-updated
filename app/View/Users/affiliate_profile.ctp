<?php 
echo $this->Html->css(array('jquery.mCustomScrollbar'));
echo $this->Html->script(array('jcarousallite','jquery.mCustomScrollbar')); ?>	
<style>

</style>
	<!-- Slider -->
	<section class="athlt-profile-top row">
		<div class="page-mid">
			<div class="athlt-profile-main row">
				<div class="athlt-profile-lmn">
					<div class="prof-image"> 
						<img src="<?php echo $this->webroot.'files/'.$user['id'].'/big_'.$user['photo']; ?>" width="100%" alt="" style="height:214px;"> 
						<a style="display: none;" href="#"> Edit </a>
					</div>
					<div class="prof-disc">
						<h3 class="row"><?php echo $user['first_name'].' '.$user['last_name']; ?></h3>
						<div class="prof-disc-cont gap description_text">
							<?php echo $user['profile_description']?>                          
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
                        	<li>
								<?php if ( $user['id'] != $this->Session->read('Auth.User.id') ) { ?>
									<a href="javascript://" onclick="open_lightbox('<?php echo $this->webroot.'messages/display_message_popup/'.$user['username']; ?>','600px', '<?php if($this->Session->check('Auth.User.id')) echo '400px;'; else echo '565px'; ?>');">
										<span>Message Me</span>
									</a>
									
									<?php if ( $this->Session->check('Auth.User.id')){  
											
											
										?>
										<a href="javascript://" style="<?php if(isset($is_follow)) echo 'display:none;'?>" class="follow_btn" onclick="follow_user('<?php echo $this->webroot.'followers/follow'; ?>','<?php echo $user['id']; ?>', '<?php echo $this->Session->read('Auth.User.id'); ?>');">
											<span>Follow</span>
										</a>
									
										
										<a href="javascript://" style="<?php if(!isset($is_follow)) echo 'display:none;'?>" class="gray-strip-bg unfollow_btn" onclick="unfollow_user('<?php echo $this->webroot.'followers/unfollow'; ?>','<?php echo $user['id']; ?>', '<?php echo $this->Session->read('Auth.User.id'); ?>');">
											<span>Following</span>
										</a>
										
									<?php } ?>
								<?php } else { ?>
									<a href="<?php echo $this->webroot.'users'; ?>"><span>Dashboard</span></a>
								<?php } ?>
							</li>
                        </ul>
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
                    <?php if(isset($coaches) && !empty($coaches)) { ?>
                    	<div class="fansBox coache mb20">
                        	<div class="head">
                                <h2>Coaches</h2>
                            </div>
                            <div class="scroll-pane horizontal-only">
                            <ul class="coach_scroller">
                            	<?php foreach($coaches as $coach){ ?>
                            	<li>
                            		<a href="<?php echo $this->webroot.'profile/'.$user['User']['username']; ?>"><img src="<?php echo $this->webroot.'files/coach/'.$coach['Coach']['id'].'/thumb_'.$coach['Coach']['photo']; ?>" width="63" height="63" alt="" />
                            			<span><?php echo $coach['User']['first_name']; ?></span>
                            		</a>
                            	</li>
                            	
                            	<?php } ?>
                            </ul>
                            </div>
                            <!--<div class="scroll">
                            	<div class="inner">
                                    <span></span>
                                </div>
                            </div>-->
						</div>
                      <?php } ?>
						<div class="mng-cnter wood mb20">
							<h3>Stats</h3>
                            <span class="open">Southwest Regionals</span>
							<ul> 
								<li><span>2:11</span> <a href="#">Fran</a> </li>
								<li><span>1:32</span><a href="#">Helen</a></li>
								<li><span>16:11</span><a href="#">Grace</a> </li>
							</ul>
                            <span class="open">SOuthwest Regionals</span>
							<ul> 
								<li><span>2:11</span> <a href="#">Fran</a> </li>
								<li><span>1:32</span><a href="#">Helen</a></li>
								<li><span>16:11</span><a href="#">Grace</a> </li>
							</ul>
						</div>

						<div class="mng-cnter wood mb20">
							<h3>Charities</h3>
							<ul> 
								<li><span>$4550</span> <a href="#">#1 Amount Raised</a> </li>
								<li><span>$2350</span><a href="#">#2 Amount Raised</a></li>
								<li><span>$350</span><a href="#">#3 Amount Raised</a> </li>
							</ul>
						</div>
					</div>
                    
					<div class="athl-brd-rSec">
						
                        <div class="leftside">
                        	
                            <div class="leaderboard profile">
                            	<span class="date">Jan. 6, 2013</span>
                                <h2>WOD performance results</h2>
                                
                                <div class="accdion">
                                    <div class="result">
                                    	
                                        <ul>
                                        	<li><p>Total Weight Lifted in January <span class="black">1,900</span> <span class="red">LBS</span></p></li>
                                        	<li><p>Total Distance Rowed in January<span class="black">40,000</span> <span class="red">KM</span></p></li>
                                        	<li><p>Total Distance Ran in January<span class="black">60</span> <span class="red">MILES</span></p></li>
                                        	<li><p>New PR’s in January<span class="black">44</span> <span class="red">30 Athletes</span></p></li>
                                        	<li><p>Total Distance Rowed in January<span class="black">40,000</span> <span class="red">KM</span></p></li>
                                        	<li><p>Total Distance Ran in January<span class="black">60</span> <span class="red">MILES</span></p></li>
                                        </ul>
                                    
                                    </div>
                                    
                                </div>
                            
                            </div>
                        	
                            <div class="leaderboard mt25">
                            	
                                <h2>LeaderBoards</h2>
                                
                                <div class="accdion sec">
                                	<div class="head open">
                                        <span class="num">Name</span>
                                        <span>Event</span>
                                        <span class="col">Stats</span>
                                        <span class="col">Rank</span>
                                    </div>
                                    <ul>
                                    	<li>
                                        	<div class="col1">
                                                <span class="num">1.</span>
                                                <span>Athlete #1</span>
                                            </div>
                                        	<span>Event Name</span>
                                        	<span class="col">36</span>
                                        	<span class="col">2</span>
                                        </li>
                                    	<li>
                                        	<div class="col1">
                                        	<span class="num">2.</span>
                                        	<span>Athlete #1</span>
                                            </div>
                                        	<span>Event Name</span>
                                        	<span class="col">36</span>
                                        	<span class="col">2</span>
                                        </li>
                                    	<li>
                                        	<div class="col1">
                                        	<span class="num">3.</span>
                                        	<span>Athlete #1</span>
                                            </div>
                                        	<span>Event Name</span>
                                        	<span class="col">36</span>
                                        	<span class="col">2</span>
                                        </li>
                                    	<li>
                                        	<div class="col1">
                                        	<span class="num">4.</span>
                                        	<span>Athlete #1</span>
                                            </div>
                                        	<span>Event Name</span>
                                        	<span class="col">36</span>
                                        	<span class="col">2</span>
                                        </li>
                                    	<li>
                                        	<div class="col1">
                                        	<span class="num">5.</span>
                                        	<span>Athlete #1</span>
                                            </div>
                                        	<span>Event Name</span>
                                        	<span class="col">36</span>
                                        	<span class="col">2</span>
                                        </li>
                                    </ul>
                                
                                </div>
                            
                            </div>
                          
                            <div class="social-badges social mt15">
                                <div class="body-content-box-1">
                                    <div class="box-1-head">
                                        <div class="disp-tCell"><span>Affiliate News</span> </div>
                                    </div>
                                    <div class="messages-secion-inner">
                                        <ul class="messages-secion-evnts vticker" style="max-height: 347px !important; overflow: auto;">
                                        	
                                        	<li style="height: 100px; text-align: center; margin-top:50px;">
												<img src="<?php echo $this->webroot; ?>images/loading.gif" alt="Loading..." />
											</li>
                                           
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="rightside">
                        	
                        	<?php if(!empty($fans) && $profile['AffiliateProfile']['show_fans'] == 'Yes'){ ?>
                            <div class="fansBox">
                            	
                                <div class="head">
                                	<h2 class="pb10 textupper">Fans</h2>                                
                                </div>
                                <ul>
                                	<?php foreach($fans as $fan){ ?>
                                	<li>
                                		<a href="<?php echo $this->webroot.'profile/'.$fan['User']['username']; ?>" title="<?php echo $fan['User']['first_name'].' '.$fan['User']['last_name']; ?>" target="_blank">
                                		<img src="<?php if(!empty($fan['User']['photo'])) 
                                								echo $this->webroot.'files/'.$fan['User']['id'].'/thumb_'.$fan['User']['photo'];
														else
															echo $this->webroot.'images/no_image.jpg';	 
														?>" alt="<?php echo $fan['User']['first_name'].' '.$fan['User']['last_name']; ?>" width="63" height="63" />
										<span><?php echo $fan['User']['first_name']; ?></span>
									</a>
									</li>
                                	<?php } ?>
                                </ul>
                                
                                <a class="viewbtn" href="#"><span>View All Fans</span></a>
                            </div>
                            <?php } ?>                        	
                        	<?php if( isset($athletes) && !empty($athletes) ) {  ?>
                            <div class="fansBox mt20">
                            	
                                <div class="head">
                                	<h2 class="pb10 textupper">Athletes</h2>                                
                                </div>
                                <ul>
								<?php foreach($athletes as $ath){ ?>
                                	<li>
										<a href="<?php echo $this->webroot.'users/profile/'.$ath['User']['id']; ?>">
											<img src="<?php echo $this->webroot.'files/'.$ath['User']['id'].'/thumb_'.$ath['User']['photo']; ?>" title="<?php echo $ath['User']['email']; ?>" alt="" style="height:65px;width:65px;" />
											<span><?php echo $ath['User']['first_name']; ?></span>
										</a>
									</li>
                                	                               
                               <?php } ?>
                                </ul>
                                
                                <a class="viewbtn" href="<?php echo $this->webroot.'athletes'; ?>"><span>View All Athletes</span></a>
                            </div>
                        	<?php } ?>
                        	<?php if ( isset($data['upcoming_events']) && !empty($data['upcoming_events']) ){ ?>
                            <div class="social-badges event mt15 no-brdr">
                                <div class="body-content-box-1  no-brdr">
                                    <div class="box-1-head">
                                        <div class="disp-tCell"><span>Future Events</span> </div>
                                    </div>
                                    <div class="messages-secion-inner">
                                        <ul class="messages-secion-evnts pb10">
										
										<?php if ( isset($data['upcoming_events']) && !empty($data['upcoming_events']) ){ 
													$i=0;
													foreach($data['upcoming_events'] as $up){
														if ( $i < 3 ){	
										?>
                                            <li>
                                                <div class="msg-img"> 
													<img src="<?php echo $this->webroot.'files/events/'.$up['Event']['id'].'/thumb_'.$up['Event']['picture']; ?>" alt="" style="width:65px; height:65px;">
												</div>
                                                <div class="msg-cont">  
                                                    <span class="row"> <a href="<?php echo $this->webroot.'events/event_details/'.$up['Event']['id']; ?>"><?php echo $up['Event']['title']; ?></a></span>
                                                    <p><?php echo $up['Event']['event_type']; ?></p>
                                                    <b><?php echo formatDate($up['Event']['start_date']); ?></b>
                                                </div>
                                            </li>
                                            
                                         <?php  $i++; }}} ?>   
                                           
                                        </ul>
                                        <a class="viewbtn" href="<?php echo $this->webroot.'events/manage_events#future_events'; ?>"><span>View All events</span></a>
                                    </div>
                                </div>
                            </div>
                        	<?php } ?>
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
	
	var div_width = $('.coach_scroller').width();
	//console.log(div_width);
	$('.coach_scroller').css('min-width',parseInt(div_width)+150+'px');
	setTimeout(function(){
		$('.scroll-pane').mCustomScrollbar({ axis: 'x'});
	},1000);
	
	get_news_posts();	
	
	<?php if(!empty($badges) && count($badges)>=4) { ?>
	 $(".badges_list").jCarouselLite({
        btnNext: ".next",
        btnPrev: ".prev"
    });
    <?php } ?>
});

function get_news_posts()
{
	$.post('<?php echo $this->webroot.'users/get_page_feeds/'.$user['id']; ?>',function(data){
		$('.vticker').html(data);
	});
}

</script>	
