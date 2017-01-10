<!--main content start-->
<section id="main-content" style="margin:0">
<section class="wrapper">
<div class="row">
<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 pt main_container">
<div class="dog-page">
   
<div class="dog-left">
    <h3>GENETIC TRAITS</h3>
    <ul>
        <li><label>GENERAL (<?php echo $breed['GameBreed']['gen'].'/100'; ?>)</label><div class="val_div_box"><div class="val_div" style="width: <?php echo $breed['GameBreed']['gen'].'px'; ?>"></div></div></li>
        <li><label>HEAD (<?php echo $breed['GameBreed']['head'].'/100'; ?>)</label><div class="val_div_box"><div class="val_div" style="width: <?php echo $breed['GameBreed']['head'].'px'; ?>"></div></div></li>
        <li><label>BODY (<?php echo $breed['GameBreed']['body'].'/100'; ?>)</label><div class="val_div_box"><div class="val_div" style="width: <?php echo $breed['GameBreed']['body'].'px'; ?>"></div></div></li>
        <li><label>FOREQUATERS (<?php echo $breed['GameBreed']['forequarters'].'/100'; ?>)</label><div class="val_div_box"><div class="val_div" style="width: <?php echo $breed['GameBreed']['forequarters'].'px'; ?>"></div></div></li>
        <li><label>HINDQUATERS (<?php echo $breed['GameBreed']['hindquarters'].'/100'; ?>)</label><div class="val_div_box"><div class="val_div" style="width: <?php echo $breed['GameBreed']['hindquarters'].'px'; ?>"></div></div></li>
        <li><label>COAT (<?php echo $breed['GameBreed']['coat'].'/100'; ?>)</label><div class="val_div_box"><div class="val_div" style="width: <?php echo $breed['GameBreed']['coat'].'px'; ?>"></div></div></li>
        <li><label>TEMPERMENT (<?php echo $breed['GameBreed']['temperament'].'/100'; ?>)</label><div class="val_div_box"><div class="val_div" style="width: <?php echo $breed['GameBreed']['temperament'].'px'; ?>"></div></div></li>
		<li>HEALTH STATS</li>
		<li><label>HEART (<?php echo $breed['GameBreed']['heart'].'/100'; ?>)</label><div class="val_div_box"><div class="val_div" style="width: <?php echo $breed['GameBreed']['heart'].'px'; ?>"></div></div></li>
        <li><label>HIP (<?php echo $breed['GameBreed']['hip'].'/100'; ?>)</label><div class="val_div_box"><div class="val_div" style="width: <?php echo $breed['GameBreed']['hip'].'px'; ?>"></div></div></li>
        <li><label>EYE (<?php echo $breed['GameBreed']['eyes'].'/100'; ?>)</label><div class="val_div_box"><div class="val_div" style="width: <?php echo $breed['GameBreed']['eyes'].'px'; ?>"></div></div></li>
        <li><label>THYROID (<?php echo $breed['GameBreed']['thyroid'].'/100'; ?>)</label><div class="val_div_box"><div class="val_div" style="width: <?php echo $breed['GameBreed']['thyroid'].'px'; ?>"></div></div></li>
	</ul>
 
</div>
<div class="dog-main">
    <div class="picpace-holder"> <img src="<?php echo SITE_URL;?>timthumb.php?src=files/breeds/<?php if($breed['GameBreed']['age'] < 21) { echo $breed['Breed']['BreedImages']['0']['filename']; }else{ echo $breed['Breed']['BreedImages']['0']['filename_adult'];} ?>&w=500&zc=1"></span></div>
	
	<?php if($breed['GameBreed']['gender'] == 'Bitch' && $breed['GameBreed']['is_in_heat'] == 1){ ?>
	<div class="breed-link-box blink_me">
		<p><?php echo $breed['GameBreed']['name']; ?> is in heat. Click on breed button.</p>
		<a href="<?php echo $this->webroot.'kennels/select_stud/'.$breed['GameBreed']['id']; ?>">Breed</a></div>
	<?php } ?>
	
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
        <?php echo $this->Session->flash(); ?>
		<div id="tab-1" class="tab-content current">
			
			   <ul style="border-top: none">
				<li><small><a href="<?php echo $this->webroot;?>kennels/training/confirmation/<?php echo $breed['GameBreed']['id']; ?>">CONFORMATION</a></small><span><strong class="voilet" style="width:<?php echo $breed['GameBreed']['confirmation'];?>%"></strong></span></li>
				<li><small><a href="<?php echo $this->webroot;?>kennels/training/agility/<?php echo $breed['GameBreed']['id']; ?>">AGILITY</a></small><span><strong class="sky" style="width:<?php echo $breed['GameBreed']['agility'];?>%"></strong></span></li>
				<li><small><a href="<?php echo $this->webroot;?>kennels/training/obedience/<?php echo $breed['GameBreed']['id']; ?>">OBEDIENCE</a></small><span><strong class="blue" style="width:<?php echo $breed['GameBreed']['obedience'];?>%"></strong></span></li>
				<li><small><a href="<?php echo $this->webroot;?>kennels/training/rally/<?php echo $breed['GameBreed']['id']; ?>">RALLY</a></small><span><strong class="green" style="width:<?php echo $breed['GameBreed']['rally'];?>%"></strong ></span></li>
			</ul>
		</div>
		<div id="tab-2" class="tab-content">
			
			<?php if($breed['GameBreed']['gender'] == 'Dog'){ ?>
			<form id="placeStudForm" name="placeStudForm" method="post" action="<?php echo $this->webroot.'kennels/place_stud'; ?>">
				<input type="hidden" name="game_breed_id" value="<?php echo $breed['GameBreed']['id']; ?>">
			<ul style="border-top: none">
				<!--<li><input type="text" /><label>CHANGE NAME</label></li>-->
				
				
				<?php if($breed['GameBreed']['is_up_for_breed'] == 1){ ?>
				<li><h4>TAKE DOWN STUD: </h4></li>
				<li>STUD AMOUNT: <?php echo $breed['GameBreed']['breed_price']; ?></li>
				<li><input type="submit"  value="Take Down"/></li>
				<?php }else{ ?>
				<li><h4>PLACE UP STUD: </h4></li>
				<li><input type="text" name="breed_price" maxlength="5" class="required number"/><label>AMOUNT</label></li>
				<li><input type="submit"  value="Place"/></li>
				<?php } ?>
			</ul>
			</form>
			<?php } ?>
			
			
		 <?php if($breed['GameBreed']['for_adoption'] == 0){ ?>
			<form id="placeAdoptionForm" name="placeAdoptionForm" method="post" action="<?php echo $this->webroot.'adoption/place_for_adoption'; ?>">
				<input type="hidden" name="game_breed_id" value="<?php echo $breed['GameBreed']['id']; ?>">
			 <ul style="border-top: none">
					<li><h4>PLACE YOUR DOG FOR SALE. SHOWS YOUR DOG FOR SALE IN ADOPTION TAB, BUT DOG REMAINS IN YOUR KENNEL TILL DOG SELLS</h4></li>
					<li><h4>PLACE UP FOR AdOPTION: </h4></li>
					<li><input type="text" name="adoption_price" maxlength="5" class="required number" /><label>AMOUNT</label></li>
					<li><input type="submit"  value="SELL"/></li>
			
			</ul>
			</form>
		<?php }else if($breed['GameBreed']['for_adoption'] == 1){ ?>
		
			<form id="placeAdoptionForm" name="placeAdoptionForm" method="post" action="<?php echo $this->webroot.'adoption/take_down_adoption'; ?>">
				<input type="hidden" name="game_breed_id" value="<?php echo $breed['GameBreed']['id']; ?>">
			 <ul style="border-top: none">					
					<li><h4>TAKE DOWN FROM ADOPTION: </h4></li>					
					<li><input type="submit"  value="TAKE DOWN"/></li>			
			</ul>
			</form>
		
		<?php } ?>
			
		 <?php if($breed['GameBreed']['for_adoption'] != 2){ ?>	
			<form id="sellPetForm" name="sellPetForm" method="post" action="<?php echo $this->webroot.'adoption/sell_to_pedigree'; ?>">
				<input type="hidden" name="game_breed_id" value="<?php echo $breed['GameBreed']['id']; ?>">
				 <ul style="border-top: none">
					<li></li>
				
					<li><h4>SELL TO BEST OF PEDIGREE SHOP: </h4></li>
					<li><input type="submit"  value="SELL"/></li>			  
			  </ul>
			</form>
			<?php } ?>
		</div>
		<div id="tab-3" class="tab-content">
			   PEDIGREE
		</div>
	   
		<div id="tab-4" class="tab-content">
								   LITTER
							</div>
                            <div id="tab-5" class="tab-content">
                                   <table  width="100%" cellspacing="15" cellpadding="25" border="0" align="center" class="listing">
            <tr>
				<th align="left">Shows</th>
				<th align="left">Award/qualifying Score</th>
				<th align="left">Time</th>
				<th align="left">Points</th>
				<th align="left">Winnings</th>
				
            </tr>
	    <?php
			foreach ($Winners as $wnr): ?>
			<tr>
				<td align="left" valign="middle"><?php echo $wnr['ShowEntry']['User']['kennel_name'].'<br>Show: '.$wnr['Show']['show_type']; ?>&nbsp;</td>
				
				<td align="left" valign="middle"><?php echo $wnr['ShowWinner']['title']; ?></td>
				<td align="left" valign="middle">NA</td>
				<td align="left" valign="middle"><?php echo $wnr['ShowEntry']['points_awarded']; ?></td>
				<td align="left" valign="middle">100.00$</td>
			</tr>
			<?php endforeach; ?>
			
        </table>
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
   table tr td{
     border: 5px solid #ccc;
    padding: 5px;
    color: #393939;
    font-size: 19px;
    word-wrap: break-word;
}  

th{
border: 5px solid #ccc;
padding: 5px;
color: #393939;
    font-size: 16px;
    word-wrap: break-word;
}     

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
	.dog-left .val_div{ height: 16px; border-radius: 4px;}
    
      </style>