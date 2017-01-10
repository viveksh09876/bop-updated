
<!--main content start-->
<section id="main-content" style="margin:0">
<section class="wrapper">
<div class="row">
<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 pt main_container">
<div class="dog-page">
   
    <div class="dog-left">
        <h3>GENETIC TRAITS</h3>
    <ul>
        <li><label>GENERAL</label><input type="text" value="<?php echo $breed['GameBreed']['gen']; ?>"/></li>
        <li><label>HEAD</label><input type="text" value="<?php echo $breed['GameBreed']['head']; ?>"/></li>
        <li><label>BODY</label><input type="text" value="<?php echo $breed['GameBreed']['body']; ?>"/></li>
        <li><label>FOREQUATERS</label><input type="text" value="<?php echo $breed['GameBreed']['forequarters']; ?>" /></li>
        <li><label>HINDQUATERS</label><input type="text" value="<?php echo $breed['GameBreed']['hindquarters']; ?>"/></li>
        <li><label>COAT</label><input type="text" value="<?php echo $breed['GameBreed']['coat']; ?>"/></li>
        <li><label>TEMPERMENT</label><input type="text" value="<?php echo $breed['GameBreed']['temperament']; ?>"/></li>

<li>HEALTH STATS</li>
     
         <li><label>HEART</label><input type="text" value="0/100" /></li>
         <li><label>HIP</label><input type="text" value="0/100" /></li>
        <li><label>EYE</label><input type="text" value="0/100" /></li>
         <li><label>THYROID</label><input type="text" value="0/100"/></li>

 </ul>
 
</div>
<div class="dog-main"><?php //echo '<pre/>'; print_r($breed); ?>
    <div class="picpace-holder"><img src="<?php echo DISPLAY_BREED_DIR .'home/'.$breed['Breed']['BreedImages']['0']['filename']; ?>"></span></div>
    <div class="name-box">Name: <?php echo $breed['GameBreed']['name']; ?></div>
    <div class="name-box">Info : <?php echo $breed['Breed']['BreedImages']['0']['color']; ?> <?php echo $breed['GameBreed']['gender']; ?></div>
    <div class="color-box maintabs">
          <ul class="tabs" style="border-top: none; display:flex;">
                                    <li class="tab-link current" data-tab="tab-1">C,A,O,R</li>
                                    <li class="tab-link" data-tab="tab-2">PET INFO</li>
                                    <li class="tab-link" data-tab="tab-3">PEDIGREE</li>
                                    <li class="tab-link" data-tab="tab-4">LITTER</li>
                                    <li class="tab-link" data-tab="tab-5">AWARDS/SHOW RESULTS</li>
                            </ul>
        
                            <div id="tab-1" class="tab-content current">
                                   <ul style="border-top: none">
                                    <li><small><a href="<?php echo $this->webroot;?>kennels/training/confirmation/<?php echo $breed['GameBreed']['id']; ?>">CONFIRMATION</a></small><span><strong class="voilet" style="width:<?php echo $breed['GameBreed']['confirmation'];?>%"></strong></span></li>
                                    <li><small><a href="<?php echo $this->webroot;?>kennels/training/agility/<?php echo $breed['GameBreed']['id']; ?>">AGILITY</a></small><span><strong class="sky" style="width:<?php echo $breed['GameBreed']['agility'];?>%"></strong></span></li>
                                    <li><small><a href="<?php echo $this->webroot;?>kennels/training/obedience/<?php echo $breed['GameBreed']['id']; ?>">OBEDIENCE</a></small><span><strong class="blue" style="width:<?php echo $breed['GameBreed']['obedience'];?>%"></strong></span></li>
                                    <li><small><a href="<?php echo $this->webroot;?>kennels/training/rally/<?php echo $breed['GameBreed']['id']; ?>">RALLY</a></small><span><strong class="green" style="width:<?php echo $breed['GameBreed']['rally'];?>%"></strong ></span></li>
                                </ul>
                            </div>
                            <div id="tab-2" class="tab-content">
                                   <ul style="border-top: none">
                                        <li><input type="text" /><label>CHANGE NAME</label></li>
                                        <li><h4>PLACE UP STUD: </h4></li>
                                        <li><input type="text" /><label>AMOUNT</label></li>
                                        <li><input type="submit"  value="Public Stud"/><input type="submit"  value="Private Stud"/></li>
                                        <li><input type="submit"  value="Take Down"/></li>
                                  </ul>
                                
                                 <ul style="border-top: none">
                                        <li><h4>PLACE YOUR DOG FOR SALE. SHOWS YOUR DOG FOR SALE IN ADOPTION TAB, BUT DOG REMAINS IN YOUR KENNEL TILL DOG SELLS</h4></li>
                                        <li><h4>PLACE UP FOR SALE: </h4></li>
                                        <li><input type="text" /><label>AMOUNT</label></li>
                                        <li><input type="submit"  value="SELL"/></li>
                                        <li></li>
                                        <li><h4>SELL TO BEST OF PEDIGREE SHOP: </h4></li>
                                        <li><input type="submit"  value="SELL"/></li>
                                  
                                  </ul>
                                
                            </div>
                            <div id="tab-3" class="tab-content">
                                   PEDIGREE
                            </div>
                           
                            <div id="tab-4" class="tab-content">
                                                       LITTER
                                                </div>
                            <div id="tab-5" class="tab-content">
                                                    AWARDS/SHOW RESULTS
                                                </div>

       

    </div>
</div>
</div>
</div>
<!-- /col-lg-9 END SECTION MIDDLE -->
<?php echo $this->element('right_sidebar'); ?>
 <script>
      $(document).ready(function() {
      $('ul.tabs li').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('ul.tabs li').removeClass('current');
		$('.tab-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	});
    } );
    
   
      </script>
      
      <style>
          

  .maintabs > ul.tabs{
            margin: 0px;
            padding: 0px;
            list-style: none;
    }
  .maintabs > ul.tabs li{
            background: none;
            color: #222;
            display: inline-block;
            padding: 10px 15px;
            cursor: pointer;
            font-size: 15px;
            font-weight: bold;
    }

   .maintabs > ul.tabs li.current{
            background: #ededed;
            color: #222;
    }

  .maintabs .tab-content{
            display: none;
            background: #ededed;
            padding: 15px;
            width: 99%;
            height:270px;
    }

   .maintabs .tab-content.current{
            display: inherit;
    }
    
    .picpace-holder > img {
    height: 260px;
    width: 100%;
}
      </style>