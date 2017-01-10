<?php $this->Html->script(array('ckeditor/ckeditor','jcarousallite'), array('inline'=>false));?>
	<!-- Slider -->
	<section class="athlt-profile-top row">
		
		<div class="page-mid">
		
			<?php 
				echo $this->Session->flash('success');
				echo $this->Session->flash('error');
				echo $this->Session->flash();
			?>
			<div class="athlt-profile-main row">
				<div class="athlt-profile-lmn">
					<div class="prof-image"> 
						<img src="<?php echo $this->webroot.'files/'. $user['id'] .'/'. 'big_'.$user['photo']; ?>" width="100%" alt=""> 						
					</div>
					<input type = "file" name = "data[photo]" id = "profile_picture" onchange = "validate_img('#ProfileFormIndexForm');" style = "opacity:0; height:0; width: 0"/> 
					
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
                    			
                    			
                        		<li>
									<a href="javascript://" onclick="open_lightbox('<?php echo $this->webroot.'messages/display_message_popup/'.$user['username']; ?>','600px', '<?php if($this->Session->check('Auth.User.id')) echo '400px;'; else echo '565px'; ?>');">
										<span>Message Me</span>
									</a>
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
						<li> <label> My Cross Filter </label>  <span> Filter</span></li>
											
						
					</ul>
					<div class="row profile-scl mt10">
						<?php if(!empty($profile['FanProfile']['fb_page'])){ ?>
						<a href="<?php echo 'http://www.facebook.com/'.$profile['FanProfile']['fb_page']; ?>" class="sc1"> &nbsp; </a>
						<?php } ?>
						
						<?php if(!empty($profile['FanProfile']['twitter_page'])){ ?>
						<a href="<?php echo 'http://www.twitter.com/'.$profile['FanProfile']['twitter_page']; ?>" class="sc2"> &nbsp; </a>
						<?php } ?>
						
						<?php if(!empty($profile['FanProfile']['google_page'])){ ?>
						<a href="<?php echo $profile['FanProfile']['google_page']; ?>" class="sc3"> &nbsp; </a>
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
					<aside class="athl-brd-lSec">
						<div class="mng-cnter wood mb20 community">
							<h3>Community News</h3>
							<ul> 
								<li><a href="#">www.mobilitywod.com</a> </li>
								<li><a href="#">www.workhardworkharder.com</a></li>
								<li><a href="#">www.crossfitendurance.com</a> </li>
							</ul>
						</div>						
                      
											
					</aside>
                    
					<div class="athl-brd-rSec">
						<!--fan follows-->
						<section class="fan-follows">
							<section class="follows event-follows clearfix">
								<div class="head-line"> MY EVENTS </div>
								<div class="box-sections event_i_follow">
									<!-- following box-->
																		
							<?php
								 if(!empty($events)){								
									$i=1;
									foreach($events as $ev){  ?>											
									
									<!-- following box-->
									<div class="mng-cnter wood mb20 following black-heading">
												<h3>
													<a href="<?php echo $this->webroot.'events/event_details/'.$ev['Event']['id']; ?>" target="_blank">
														<?php echo $ev['Event']['title']; ?>
													</a>
												</h3>
												<ul>
												<?php if(!empty($ev['Event']['EventRegistration'])){ 
															foreach($ev['Event']['EventRegistration'] as $reg){		
													?>
													
													
													<li>
													<?php if(!empty($reg['user_id'])){ ?>
														<img class="follows" src="<?php echo $this->webroot.'files/'.$reg['User']['id'].'/thumb_'.$reg['User']['photo']; ?>" alt=""> 
														<a href="<?php if(!empty($reg['User']['username'])) echo $this->webroot.'profile/'.$reg['User']['username']; ?>" target="_blank">
															<?php echo $reg['User']['first_name'].' '.$reg['User']['last_name']; ?>
														</a>
													<?php }else{ ?>
														<?php echo $reg['first_name'].' '.$reg['last_name']; ?>
													<?php } ?>	
													</li>
													
													<?php }}else{ ?>
														<li style="margin-top:20px; text-align:center; border-bottom:none;">
																	 No athletes registered
														</li>
													<?php } ?>	
													
												</ul>
									</div>
									<!-- following box ends-->
									<?php $i++; }}else{ ?>
										<div class="events-box messages-secion-inner" style="height: 80px; text-align:center;">
										 			<div style="margin-top:30px;">No events found</div>
										 		</div>	
									<?php } ?>	
									
									
									
									
								</div>
							</section>
							<!--event following ends here-->
							
							
							<!--athelete follow-->
							
							<section class="follows event-follows clearfix mt20">
								<div class="head-line"> MY ATHLETES </div>
								<div class="box-sections">
									<!-- following box-->
									
									<?php
										 if(!empty($data)){
										
											$i=1;
											foreach($data as $dat){
												
												 ?>
										
												<div class="mng-cnter wood mb20 following headings">
												 			<div class="black-heading"> 
												 				<h3>
												 					<a target="_blank" href="<?php echo $this->webroot.'profile/'.$dat['User']['username']; ?>">
												 						<?php echo $dat['User']['first_name'].' '.$dat['User']['last_name']; ?>
												 				   </a>
												 			    </h3>
												 			</div>
																<ul>
																	<?php 
																		if(!empty($dat['User']['EventRegistration'])){
																			foreach($dat['User']['EventRegistration'] as $evr){	
																	 ?> 
																	<li>
																		
																		<a href="<?php echo $this->webroot.'events/event_details/'.$evr['Event']['id']; ?>">
																			<img class="follows" src="<?php echo $this->webroot.'files/events/'.$evr['Event']['id'].'/thumb_'.$evr['Event']['picture']?>" alt=""/>
																			<?php echo $evr['Event']['title'].' - '.$evr['final_score']; ?></a>
																		 <span class="sensex-img <?php if($evr['is_top_position'] == '1') echo 'green_arrow'; ?>">
																		 
																		 </span>
																	</li>
																	<?php }}else{ ?>
																	<li style="margin-top:20px; text-align:center; border-bottom:none;">
																	 No events found
																	</li>		
																	<?php } ?>		
																	
																</ul>
													</div>
										<?php $i++; }}else{ ?>
										 		<div class="events-box messages-secion-inner" style="height: 80px; text-align:center;">
										 			<div style="margin-top:30px;">No athletes found</div>
										 		</div>	
										 	<?php } ?>
									
									
								</div>
							</section>
							<!-- Athelete follows ends here-->
						</section>
						<!--fan follows ends-->
						
                        <div class="social-badges social mt15">
                                <div class="body-content-box-1">
                                    <div class="box-1-head">
                                        <div class="disp-tCell"><span>MY SOCIAL NETWORK</span> </div>
                                    </div>
                                    <div class="messages-secion-inner">
                                        <ul class="messages-secion-evnts vticker">
                                            <li class="noBrdr" style="height: 100px; text-align: center; margin-top:50px;">
                                               <img src="<?php echo $this->webroot; ?>images/loading.gif" alt="Loading..." />
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                     
                    </div>    
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
	
	get_news_posts('<?php echo $this->webroot.'users/get_page_feeds/'.$user['id']; ?>');
	get_events_i_follow('<?php echo $this->webroot.'events/events_i_follow/'.$user['id']; ?>');
});

function show_edit_description()
{
	$('#edit_profileForm').hide();
	$('.description_text').hide();
	$('.description_field').show();
	$('#save_profileForm').show();	
}


	
	
</script>

