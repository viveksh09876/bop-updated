<style>
	div.slidesjs-slide{ left: 0px !important;}
</style>
<?php echo $this->Html->script('jquery.slides'); ?>
<!-- Slider -->
<section class="slider row">
	<div class="page-mid">
		<div class="slider-content">
        	
        
        	
            <div class="imageBox event_slider">
            	<?php if(count($events) > 5){ ?>
            	<a class="prev slidesjs-previous slidesjs-navigation" href="javascript://"><img src="<?php echo FRONT_END_IMAGES_PATH ?>prev_arrow.png" alt="" /></a>
        		<?php } ?>
         <?php if ( !empty($events) ){
              	$k = 0; $allcount=1;  $num = count($events);
              	foreach($events as $evd){ ?>  			
              	
              	<?php if($k==0){  ?>
              		<div>
              	<?php } ?>	
              	
              	
                <div class="col <?php if($k!=2 && $k!=5) echo ' mr35'; if($k>2) echo ' mt30'.' '.$k; ?>">     
                	<div class="inner">  
                    	<a href="<?php echo $this->webroot.'events/event_details/'.$evd['Event']['id']; ?>">         	
                            <img style="min-height:240px;max-height:240px;<?php if($k!=1) echo 'min-width:300px;max-width:300px;'; else if($k==1) echo 'min-width:300px;max-width:300px;';?>" src="<?php echo $this->webroot.'files/events/'.$evd['Event']['id'].'/big_'.$evd['Event']['picture']; ?>" alt="" />
                            <span class="text">
                                <span class="head"><?php echo $evd['Event']['title']; ?></span>
                                <span class="txt">posted <?php echo formatDateTime($evd['Event']['created']); ?></span>
                                <img src="<?php echo FRONT_END_IMAGES_PATH ?>arrow.png" alt="" class="arrow" />
                            </span>
                        </a>
                    </div>                
                </div>
              	
               
               <?php $k++; ?>
                 <?php if($k==6 || $allcount==$num){ $k=0; ?>
                	</div>
                <?php } ?>
               
                <?php $allcount++;   }} ?>
             <?php if(count($events) > 6){ ?>
			<a class="next slidesjs-next slidesjs-navigation" href="javascript://"><img src="<?php echo FRONT_END_IMAGES_PATH ?>next_arrow.png" alt="" /></a>
        	<?php } ?>
            </div>                
            
		</div>
	</div>
	<div class="slider-timeline"> 
		<div class="page-mid">
			<ul class="timelnr-mnths">
				<?php 
					 $already = array();
					foreach($timeline as $month => $evt){ 
						
						$width = '65';
						if(!empty($evt))
						{
							$width = count($evt)*$width;
						}
						
					?>
					<li style="display: inline-block; width:<?php echo $width; ?>px;"> <a href="#"> <?php echo $month; ?></a> </li>
				<?php $already[] = $month; } ?>
				
				<?php foreach($all_months as $mnth){
						if(!in_array($mnth, $already)){
				 ?>	
					<li style="display: inline-block; width:62px;"> <a href="#"> <?php echo $mnth; ?></a> </li>
				<?php }} ?>
				
			</ul>
			<ul class="timelnr-list"> 
				<?php 
					$ev_ct = 0;
					foreach($timeline as $month => $event){
							
						foreach($event as $ev){
							$ev_ct++;	
				 ?>
				<li class="<?php if($ev['Event']['start_date'] == date('Y-m-d')){ ?>active<?php } ?>"><a href="<?php echo $this->webroot.'events/event_details/'.$ev['Event']['id']; ?>"><img src="<?php echo $this->webroot.'files/events/'.$ev['Event']['id'].'/thumb_'.$ev['Event']['picture']; ?>" alt=""></a></li>
				<?php }}
					
					if ( $ev_ct < 15){
						$evct = 15-$ev_ct;
					}
					
					for($i=0; $i<$evct; $i++){				
				 ?>				 
						 <li class="extra_ct"> </li>
				
				 <?php } ?>
				
			</ul>
		</div>
	</div>
</section>
<!-- Slider End -->

<script type="text/javascript">
	$(document).ready(function(){
		
		setTimeout(function(){ 
			$(".event_slider").slidesjs({
		     width: 1005,
       		 height: 536,
       		  navigation: {
			      active: false,			     
			        // [boolean] Generates next and previous buttons.
			        // You can set to false and use your own buttons.
			        // User defined buttons must have the following:
			        // previous button: class="slidesjs-previous slidesjs-navigation"
			        // next button: class="slidesjs-next slidesjs-navigation"
			      effect: "fade"
			        // [string] Can be either "slide" or "fade".
			    },
			    pagination: {
			      active: false
			       
			    }
		  });
			
			}, 100);
		
	});
</script>