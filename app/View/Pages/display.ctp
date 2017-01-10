<?php echo $this->Html->script(array('cycleall')); ?>
<iframe src="http://demo.social-referrals.com/domain/testcondition" width="600" height="600"></iframe>
<?php echo $this->element('slider'); ?>
<section class="body-content-bg ptb25 row">
	<div class="page-mid">
		<div class="body-content-mn row mt10">
			<div class="body-content-mn-left">
				
				<?php if(!empty($competitions)){ 	?>		
				<div class="body-content-box-1 mb40 height288">
					<div class="box-1-head">
						<div class="disp-tCell"><span> Competitions </span> <a href="<?php echo $this->webroot.'events'; ?>" class="more"> <span class="more-a">More</span> <img src="<?php echo FRONT_END_IMAGES_PATH ?>arrow-right.png" alt=""></a></div>
					</div>
					<div class="box-1-body disp-tRow">
						<div class="disp-tCell">
							<div class="slider_container">
						<?php 
								if(!empty($competitions)){ 	$j=0;								
									for($i=0; $i<ceil(count($competitions)/3); $i++){			
						?>								
								
								<ul class="compition-sBox mt10">
								<?php if(isset($competitions[$j])){ ?>
									
									<li>
										<a href="<?php echo $this->webroot.'events/event_details/'.$competitions[$j]['Event']['id']; ?>">
										<div class="row">
											<div class="boxImage tCenter row"> <img src="<?php echo $this->webroot.'files/events/'.$competitions[$j]['Event']['id'].'/'.'small_'.$competitions[$j]['Event']['picture']; ?>" alt=""> </div>
											<div class="boxCont row">
												<h3><?php echo $competitions[$j]['Event']['title']; ?>,</h3>
												<p> </p>
												<span> <?php echo formatDate($competitions[$j]['Event']['start_date']); ?></span>
											</div>
										</div>
										</a>
									</li>
									<?php } if(isset($competitions[$j+1])){ ?>
									<li>
										<a href="<?php echo $this->webroot.'events/event_details/'.$competitions[$j+1]['Event']['id']; ?>">
										<div class="row">
											<div class="boxImage tCenter row"> <img src="<?php echo $this->webroot.'files/events/'.$competitions[$j+1]['Event']['id'].'/'.'small_'.$competitions[$j+1]['Event']['picture']; ?>" alt=""> </div>
											<div class="boxCont row">
												<h3><?php echo $competitions[$j+1]['Event']['title']; ?>,</h3>
												<p> </p>
												<span> <?php echo formatDate($competitions[$j+1]['Event']['start_date']); ?></span>
											</div>
										</div>
										</a>
									</li>
									<?php } ?>
									
									<?php if(isset($competitions[$j+2])){ ?>
									<li>
										<a href="<?php echo $this->webroot.'events/event_details/'.$competitions[$j+2]['Event']['id']; ?>">
										<div class="row">
											<div class="boxImage tCenter row"> <img src="<?php echo $this->webroot.'files/events/'.$competitions[$j+2]['Event']['id'].'/'.'small_'.$competitions[$j+2]['Event']['picture']; ?>" alt=""> </div>
											<div class="boxCont row">
												<h3><?php echo $competitions[$j+2]['Event']['title']; ?>,</h3>
												<p> </p>
												<span> <?php echo formatDate($competitions[$j+2]['Event']['start_date']); ?></span>
											</div>
										</div>
										</a>
									</li>
									<?php } ?>	
								</ul>
								<?php $j=$j+3; } ?>
								
								<?php } ?>								
								
							</div>
							<?php if(!empty($competitions)){ ?>
							<ul class="row tCenter step_paging step_tabs">
								
							</ul>
							<?php } ?>
						</div>
					</div>
				</div>
				<?php }else{ ?>
				<div class="body-content-box-1 mb40 bg-box-pat height322">
					<div class="box-1-head">
						<div class="disp-tCell"><span> Competitions </span> <a href="<?php echo $this->webroot.'events'; ?>" class="more"> <span class="more-a">More</span> <img src="<?php echo FRONT_END_IMAGES_PATH ?>arrow-right.png" alt=""></a></div>
					</div>
					<div class="box-1-body disp-tRow" style="text-align:center;">
						<span style="margin-left: -62px;margin-top: 109px; position: absolute;">No events found</span>
					</div>
				</div>		
					
				<?php } ?>
				
				
				<?php if(!empty($throwdown)){ ?>
				<div class="body-content-box-1 mb40 bg-box-pat height322">
					<div class="box-1-head">
						<div class="disp-tCell"><span> ThrowDowns </span> <a href="<?php echo $this->webroot.'events'; ?>" class="more"> <span class="more-a">More</span> <img src="<?php echo FRONT_END_IMAGES_PATH ?>arrow-right.png" alt=""></a></div>
					</div>
					<div class="box-1-body disp-tRow">
						<div class="disp-tCell">
						<div class="slider_container_2">
								<?php if(!empty($throwdown)){ 	$j=0;								
									for($i=0; $i<ceil(count($throwdown)/3); $i++){	?>
								
								<ul class="compition-sBox mt10">
								<?php if(isset($throwdown[$j])){ ?>								
								
								<li>
									<a href="<?php echo $this->webroot.'events/event_details/'.$throwdown[$j]['Event']['id']; ?>">
									<div class="row">
										<div class="boxImage tCenter row"> <img src="<?php echo $this->webroot.'files/events/'.$throwdown[$j]['Event']['id'].'/'.'small_'.$throwdown[$j]['Event']['picture']; ?>" alt=""> </div>
										<div class="boxCont row">
											<h3><?php echo $throwdown[$j]['Event']['title']; ?>,</h3>
											<p> </p>
											<span> <?php echo formatDate($throwdown[$j]['Event']['start_date']); ?></span>
										</div>
									</div>
									</a>
								</li>
								<?php } if(isset($throwdown[$j+1])){ ?>
								<li>
									<a href="<?php echo $this->webroot.'events/event_details/'.$throwdown[$j+1]['Event']['id']; ?>">
									<div class="row">
										<div class="boxImage tCenter row"> <img src="<?php echo $this->webroot.'files/events/'.$throwdown[$j+1]['Event']['id'].'/'.'small_'.$throwdown[$j+1]['Event']['picture']; ?>" alt=""> </div>
										<div class="boxCont row">
											<h3><?php echo $throwdown[$j+1]['Event']['title']; ?>,</h3>
											<p> </p>
											<span> <?php echo formatDate($throwdown[$j+1]['Event']['start_date']); ?></span>
										</div>
									</div>
									</a>
								</li>
								<?php } ?>
								
								<?php if(isset($throwdown[$j+2])){ ?>
								<li>
									<a href="<?php echo $this->webroot.'events/event_details/'.$throwdown[$j+2]['Event']['id']; ?>">
									<div class="row">
										<div class="boxImage tCenter row"> <img src="<?php echo $this->webroot.'files/events/'.$throwdown[$j+2]['Event']['id'].'/'.'small_'.$throwdown[$j+2]['Event']['picture']; ?>" alt=""> </div>
										<div class="boxCont row">
											<h3><?php echo $throwdown[$j+2]['Event']['title']; ?>,</h3>
											<p> </p>
											<span> <?php echo formatDate($throwdown[$j+2]['Event']['start_date']); ?></span>
										</div>
									</div>
									</a>
								</li>
								<?php } ?>	
								</ul>
								<?php $j=$j+3; } ?>
								
								<?php } ?>								
								
							</div>
							
							<?php if(!empty($throwdown)){ ?>
								<ul class="row tCenter step_paging step_tabs_2">
								
								</ul>
							<?php } ?>
							</div>
					</div>
				</div>
				<?php }else{ ?>
					
				<div class="body-content-box-1 mb40 bg-box-pat height322">
					<div class="box-1-head">
						<div class="disp-tCell"><span> ThrowDowns </span> <a href="<?php echo $this->webroot.'events'; ?>" class="more"> <span class="more-a">More</span> <img src="<?php echo FRONT_END_IMAGES_PATH ?>arrow-right.png" alt=""></a></div>
					</div>
					<div class="box-1-body disp-tRow" style="text-align:center;">
						<span style="margin-left: -62px;margin-top: 109px; position: absolute;">No events found</span>
					</div>
				</div>		
					
				<?php } ?>
				
				<?php if(!empty($challenges)){ 	?>		
				<div class="body-content-box-1 mb40 bg-box-pat height322">
					<div class="box-1-head">
						<div class="disp-tCell"><span> Challenges </span> <a href="<?php echo $this->webroot.'events'; ?>" class="more"> <span class="more-a">More</span> <img src="<?php echo FRONT_END_IMAGES_PATH ?>arrow-right.png" alt=""></a></div>
					</div>
					<div class="box-1-body disp-tRow">
						<div class="disp-tCell">
							<div class="slider_container_3">
							<?php if(!empty($challenges)){
												$j=0; 									
									for($i=0; $i<ceil(count($challenges)/2); $i++){	?>
							<ul class="challenge-sBox mt10">
								<?php if(isset($challenges[$j])){ ?>
								<li>
									<div class="row">
										
										<div class="boxVScont row">
											<a href="<?php echo $this->webroot.'profile/'.$challenges[$j]['ChallengePeople'][0]['User']['username']; ?>">
												<img src="<?php echo $this->webroot.'files/'.$challenges[$j]['ChallengePeople'][0]['User']['id'].'/small_'.$challenges[$j]['ChallengePeople'][0]['User']['photo']; ?>" alt="">
											</a>
											<a href="<?php echo $this->webroot.'profile/'.$challenges[$j]['ChallengePeople'][1]['User']['username']; ?>">
												<img src="<?php echo $this->webroot.'files/'.$challenges[$j]['ChallengePeople'][1]['User']['id'].'/small_'.$challenges[$j]['ChallengePeople'][1]['User']['photo'] ?>" alt="">
											</a>
										</div>
										<div class="boxCont">
											<h3>
												<a href="<?php echo $this->webroot.'profile/'.$challenges[$j]['ChallengePeople'][0]['User']['username']; ?>">
													<?php echo $challenges[$j]['ChallengePeople'][0]['User']['first_name'].' '.$challenges[$j]['ChallengePeople'][0]['User']['last_name']; ?>
												</a>
													 vs. 
												<a href="<?php echo $this->webroot.'profile/'.$challenges[$j]['ChallengePeople'][1]['User']['username']; ?>">	 
													<?php echo $challenges[$j]['ChallengePeople'][1]['User']['first_name'].' '.$challenges[$j]['ChallengePeople'][1]['User']['last_name']; ?></h3>
												</a>
											<p></p>
											<span> <?php echo formatDate($challenges[$j]['Challenge']['date']);?> @ <?php echo $challenges[$j]['Challenge']['location']; ?></span>
										</div>
									</div>
								</li>
								<?php } ?>
								<?php if(isset($challenges[$j+1])){ ?>
								<li>
									<div class="row">
										<div class="boxVScont row">
											<img src="<?php echo $this->webroot.'files/'.$challenges[$j+1]['ChallengePeople'][0]['User']['id'].'/small_'.$challenges[$j+1]['ChallengePeople'][0]['User']['photo']; ?>" alt="">
											<img src="<?php echo $this->webroot.'files/'.$challenges[$j+1]['ChallengePeople'][1]['User']['id'].'/small_'.$challenges[$j+1]['ChallengePeople'][1]['User']['photo'] ?>" alt="">
										</div>
										<div class="boxCont">
											<h3><?php echo $challenges[$j+1]['ChallengePeople'][0]['User']['first_name'].' '.$challenges[$j+1]['ChallengePeople'][0]['User']['last_name']; ?>
													 vs. <?php echo $challenges[$j+1]['ChallengePeople'][1]['User']['first_name'].' '.$challenges[$j+1]['ChallengePeople'][1]['User']['last_name']; ?></h3>
											<p></p>
											<span> <?php echo formatDate($challenges[$j+1]['Challenge']['date']);?> @ <?php echo $challenges[$j+1]['Challenge']['location']; ?></span>
										</div>
									</div>
								</li>
								<?php } ?>
							</ul>
							<?php $j=$j+2; } ?>
								
							<?php } ?>	
							
							</div>
							<ul class="row tCenter step_paging step_tabs_3">
								
							</ul>
						</div>
					</div>
				</div>
				
				<?php }else{ ?>
					
					<div class="body-content-box-1 mb40 bg-box-pat height322">
						<div class="box-1-head">
								<div class="disp-tCell"><span> Challenges </span> <a href="<?php echo $this->webroot.'events'; ?>" class="more"> <span class="more-a">More</span> <img src="<?php echo FRONT_END_IMAGES_PATH ?>arrow-right.png" alt=""></a></div>
							</div>
						<div class="box-1-body disp-tRow" style="text-align:center;">
							<span style="margin-left: -62px;margin-top: 109px; position: absolute;">No events found</span>
						</div>
					</div>	
				<?php } ?>	
				
			</div>
			
			<div class="body-content-mn-right">
				<div class="row mb40">
					<a href="#"> <img src="<?php echo FRONT_END_IMAGES_PATH ?>add1.png" class="row" alt=""></a>
				</div>
				<div class="row mb40">
					<a href="#"> <img src="<?php echo FRONT_END_IMAGES_PATH ?>add2.png" class="row" alt=""></a>
				</div>
				<div class="row mb40">
					<a href="#"> <img src="<?php echo FRONT_END_IMAGES_PATH ?>add3.png" class="row" alt=""></a>
				</div>
			</div>
		</div>
	</div>
</section>

<script type="text/javascript">
$(document).ready(function(){
	 $('.slider_container').cycle({
			speed: 1000,
			timeout:4000,
			fx: 'fade',
			pager: '.step_tabs',
			activePagerClass: 'active',
			pagerAnchorBuilder: function(idx, slide) {
				return '<li><a href="javascript://"></a></li>';
			}
		});
		
	 $('.slider_container_2').cycle({
			speed: 1000,
			timeout:4000,
			fx: 'fade',
			pager: '.step_tabs_2',
			activePagerClass: 'active',
			pagerAnchorBuilder: function(idx, slide) {
				return '<li><a href="javascript://"></a></li>';
			}
		});
		
	 $('.slider_container_3').cycle({
			speed: 1000,
			timeout:4000,
			fx: 'fade',
			pager: '.step_tabs_3',
			activePagerClass: 'active',
			pagerAnchorBuilder: function(idx, slide) {
				 return '<li><a href="javascript://"></a></li>'; 
			}
		});	
});	
</script>