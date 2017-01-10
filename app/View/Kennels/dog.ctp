<?php 
    if (empty($backgroundImage))
        $backgroundImage = '../../img/kennel-bg.png';
    else
        $backgroundImage = $this->webroot.'files/pet_background_img/'.$backgroundImage;
?>
<script src="http://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.7/css/jquery.dataTables.css">
<!--main content start-->
<section id="main-content" style="margin:0">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pt main_container">
                <div class="dog-page">
                    <style>
                        .val_div_box {
                            border: 1px solid #ccc;
                            border-radius: 4px;
                            width: 100%;
                        }
                        dog-left .val_div {
                            border-radius: 4px;
                            height: 16px;
                        }
                        .val_div {
                            background: rgba(0, 0, 0, 0) -moz-linear-gradient(left center , #00ff00, #330099) repeat scroll 0 0;
                            height: 21px;
                            background-color:#0000;
                        }
                       
                        .dog-left {
                            border: 5px solid #bbbbbb;
                            border-radius: 10px;
                            float: left;
                            min-height: 670px;
                            //padding: 0 1.5%;
                            width: 22%;
                        }
                        .dog-main{ float:right; width:71.5%; margin-right:.5%;}
                        .dog-main .picpace-holder{  /*border: 5px solid #bbb; */
                            width: 98%;
                            text-align: center;
                            border-radius: 10px;
                            height: 441px;
                            background: url('<?php echo $backgroundImage;?>') no-repeat;
                            background-size: 100% auto;
                            background-position-y: 81%;
                        }
                        .dog-main .picpace-holder span{ display:table-cell; height:258px; width:1000px; vertical-align:middle;}

                        .maintabs .tab-content.current {
                            overflow: hidden;
                        }


                        .blink_me {
                            animation: 3s linear 0s normal none infinite running blinker;
                        }
                        @keyframes blinker { 50% { opacity: 0.0; }}
                        .breed-link-box {
                            background: #660066 none repeat scroll 0 0;
                            border: medium none #424a5d;
                            border-radius: 5px;
                            color: #fff;
                            font-weight: bold;
                            opacity: 0.6;
                            padding: 10px;
                            text-align: right;
                        }
                        .breed-link-box p {
                            float: left;
                        }
                        .breed-link-box a {
                            background: #ffffff none repeat scroll 0 0;
                            border-radius: 5px;
                            cursor: pointer;
                            font-weight: bold;
                            padding: 10px;
                        }
                        a, a:hover, a:focus {
                            outline: medium none;
                            text-decoration: none;
                        }
                        a, a:hover, a:focus {
                            outline: medium none;
                            text-decoration: none;
                        }
                        .dog-main .name-box {
                            /*border: 1px solid #bbb;*/
                            color: #333;
                            font-size: 14px;
                            margin: 10px 0;
                            padding: 2px 40px;
                        }
                    </style>
                    <div class="dog-left">
                        <h4 class="text-center" style="margin:0px; padding-bottom: 10px;padding-top: 10px; background-color: #B378D3; color:#fff;"> GENETIC TRAITS</h4>
                        <ul>
                            <li><label>GENERAL (<?php echo $breed['GameBreed']['gen'] . '/100'; ?>)</label><div class="val_div_box" style="width: <?php echo $breed['GameBreed']['gen'] . 'px'; ?>"><div class="val_div" style="width: <?php echo $breed['GameBreed']['gen'] . 'px'; ?>;background: rgba(0, 0, 0, 0) -moz-linear-gradient(left center , #00ff00, #330099) repeat scroll 0 0"></div></div></li>
                            <li><label>HEAD (<?php echo $breed['GameBreed']['head'] . '/100'; ?>)</label><div class="val_div_box" style="width: <?php echo $breed['GameBreed']['gen'] . 'px'; ?>"><div class="val_div" style="width: <?php echo $breed['GameBreed']['head'] . 'px'; ?>;background: rgba(0, 0, 0, 0) -moz-linear-gradient(left center , #00ff00, #330099) repeat scroll 0 0"></div></div></li>
                            <li><label>BODY (<?php echo $breed['GameBreed']['body'] . '/100'; ?>)</label><div class="val_div_box" style="width: <?php echo $breed['GameBreed']['gen'] . 'px'; ?>"><div class="val_div" style="width: <?php echo $breed['GameBreed']['body'] . 'px'; ?>;background: rgba(0, 0, 0, 0) -moz-linear-gradient(left center , #00ff00, #330099) repeat scroll 0 0"></div></div></li>
                            <li><label>FOREQUATERS (<?php echo $breed['GameBreed']['forequarters'] . '/100'; ?>)</label><div class="val_div_box" style="width: <?php echo $breed['GameBreed']['gen'] . 'px'; ?>"><div class="val_div" style="width: <?php echo $breed['GameBreed']['forequarters'] . 'px'; ?>;background: rgba(0, 0, 0, 0) -moz-linear-gradient(left center , #00ff00, #330099) repeat scroll 0 0"></div></div></li>
                            <li><label>HINDQUATERS (<?php echo $breed['GameBreed']['hindquarters'] . '/100'; ?>)</label><div class="val_div_box" style="width: <?php echo $breed['GameBreed']['gen'] . 'px'; ?>"><div class="val_div" style="width: <?php echo $breed['GameBreed']['hindquarters'] . 'px'; ?>;background: rgba(0, 0, 0, 0) -moz-linear-gradient(left center , #00ff00, #330099) repeat scroll 0 0"></div></div></li>
                            <li><label>COAT (<?php echo $breed['GameBreed']['coat'] . '/100'; ?>)</label><div class="val_div_box" style="width: <?php echo $breed['GameBreed']['gen'] . 'px'; ?>"><div class="val_div" style="width: <?php echo $breed['GameBreed']['coat'] . 'px'; ?>;background: rgba(0, 0, 0, 0) -moz-linear-gradient(left center , #00ff00, #330099) repeat scroll 0 0"></div></div></li>
                            <li><label>TEMPERMENT (<?php echo $breed['GameBreed']['temperament'] . '/100'; ?>)</label><div class="val_div_box" style="width: <?php echo $breed['GameBreed']['gen'] . 'px'; ?>"><div class="val_div" style="width: <?php echo $breed['GameBreed']['temperament'] . 'px'; ?>;background: rgba(0, 0, 0, 0) -moz-linear-gradient(left center , #00ff00, #330099) repeat scroll 0 0"></div></div></li>
                            </ul>
							<h4 style="margin:0px; padding-bottom: 10px;padding-top: 10px; background-color: #B378D3; color:#fff; text-align: center; ">HEALTH STATS</h4>
							<ul>
                            <li><label>HEART (<?php echo $breed['GameBreed']['heart'] . '/100'; ?>)</label><div class="val_div_box" style="width: <?php echo $breed['GameBreed']['gen'] . 'px'; ?>"><div class="val_div" style="width: <?php echo $breed['GameBreed']['heart'] . 'px'; ?>;background: rgba(0, 0, 0, 0) -moz-linear-gradient(left center , #00ff00, #330099) repeat scroll 0 0"></div></div></li>
                            <li><label>HIP (<?php echo $breed['GameBreed']['hip'] . '/100'; ?>)</label><div class="val_div_box" style="width: <?php echo $breed['GameBreed']['gen'] . 'px'; ?>"><div class="val_div" style="width: <?php echo $breed['GameBreed']['hip'] . 'px'; ?>;background: rgba(0, 0, 0, 0) -moz-linear-gradient(left center , #00ff00, #330099) repeat scroll 0 0"></div></div></li>
                            <li><label>EYE (<?php echo $breed['GameBreed']['eyes'] . '/100'; ?>)</label><div class="val_div_box" style="width: <?php echo $breed['GameBreed']['gen'] . 'px'; ?>"><div class="val_div" style="width: <?php echo $breed['GameBreed']['eyes'] . 'px'; ?>;background: rgba(0, 0, 0, 0) -moz-linear-gradient(left center , #00ff00, #330099) repeat scroll 0 0"></div></div></li>
                            <li><label>THYROID (<?php echo $breed['GameBreed']['thyroid'] . '/100'; ?>)</label><div class="val_div_box" style="width: <?php echo $breed['GameBreed']['gen'] . 'px'; ?>"><div class="val_div" style="width: <?php echo $breed['GameBreed']['thyroid'] . 'px'; ?>;background: rgba(0, 0, 0, 0) -moz-linear-gradient(left center , #00ff00, #330099) repeat scroll 0 0"></div></div></li>
                        </ul>

                    </div>
                    <div class="dog-main">
                        <div class="picpace-holder"> <img style="max-height: 400px;" src="<?php echo SITE_URL; ?>timthumb.php?src=files/breeds/<?php
                            if ($breed['GameBreed']['age'] < 21) {
                                echo $breed['Breed']['BreedImages']['0']['filename'];
                            } else {
                                echo $breed['Breed']['BreedImages']['0']['filename_adult'];
                            }
                            ?>&w=500&zc=1"></span></div>

                        <?php

                        if ($breed['GameBreed']['gender'] == 'Bitch' && 
                            $breed['GameBreed']['age'] >= 21 && 
                            $breed['GameBreed']['is_in_heat'] == 1) { ?>
                            <div class="breed-link-box blink_me">
                                <p><?php echo $breed['GameBreed']['name']; ?> is in heat. Click on breed button.</p>
                                <a href="<?php echo $this->webroot . 'kennels/select_stud/' . $breed['GameBreed']['id']; ?>">Breed</a></div>
                        <?php } ?>

                        <div class="doginfo row" style="background-color: #fff;">
                          <div class="name-box" style="font-weight: bold; text-align: center;">
                            <?php 
								
								if(!empty($awards['conformation'])) {
									echo $awards['conformation'].' ';
								}
							
                                echo $breed['GameBreed']['name']; 
                                
								if(!empty($awards['agility'])) {
									echo $awards['agility'];
								}
								
								if(!empty($awards['rally'])) {
									echo ', '.$awards['rally'];
								}
								
								if(!empty($awards['obedience'])) {
									echo ', '.$awards['obedience'];
								}
								
                            ?>
                          </div>
                          <div class="name-box col-sm-2">Sex: <?php echo $breed['GameBreed']['gender']; ?></div>    
                          <div class="name-box col-sm-4">Breed: <?php echo $breed['Breed']['name']; ?></div> 
                          <div class="name-box col-sm-3">Color: <?php echo $breed['Breed']['BreedImages']['0']['color'];?></div>    
                          <div class="name-box col-sm-3">Energy: <?php echo $breed['GameBreed']['energy']; ?></div>    
                        </div>
                        <div class="color-box">
                            <ul class="tabs">
                                <li class="tab-link current" data-tab="tab-1">EVENT TRAINING</li>
                                <li class="tab-link" data-tab="tab-2">PET INFO</li>
                                <li class="tab-link" data-tab="tab-3">PEDIGREE</li>
                                <li class="tab-link" data-tab="tab-4">LITTER</li>
                                <li class="tab-link" data-tab="tab-5">AWARDS/SHOW RESULTS</li>
                            </ul>
                            <div class="maintabs">
                            <?php echo $this->Session->flash(); ?>
                            <div id="tab-1" class="tab-content current">

                                <ul style="border-top: none;width:40%;">
                                    <li><small><a href="<?php echo $this->webroot; ?>kennels/training/confirmation/<?php echo $breed['GameBreed']['id']; ?>"  class="btn btn-primary">CONFORMATION</a></small>

<span  style="display: inline-block;
    float: right;
    margin-left: 20px;
   
    width: 100px;"><strong class="voilet val_div" style="width:<?php echo $breed['GameBreed']['confirmation']; ?>%;display: inline-block;height: 18px;"></strong><br>(<?php echo $breed['GameBreed']['confirmation']; ?>/100) </span>

</li> 
                                    <li><small><a href="<?php echo $this->webroot; ?>kennels/training/agility/<?php echo $breed['GameBreed']['id']; ?>"  class="btn btn-primary">AGILITY</a></small>

<span  style="display: inline-block;
    float: right;
    margin-left: 20px;

    width: 100px;"><strong class="sky val_div" style="width:<?php echo $breed['GameBreed']['agility']; ?>%;display: inline-block;height: 18px;"></strong><br>(<?php echo $breed['GameBreed']['agility']; ?>/100)</span>

</li>
                                    <li><small><a href="<?php echo $this->webroot; ?>kennels/training/obedience/<?php echo $breed['GameBreed']['id']; ?>"  class="btn btn-primary">OBEDIENCE</a></small>

<span style="display: inline-block;
    float: right;
    margin-left: 20px;

    width: 100px;"><strong class="blue val_div" style="width:<?php echo $breed['GameBreed']['obedience']; ?>%;display: inline-block;height: 18px;"></strong><br>(<?php echo $breed['GameBreed']['obedience']; ?>/100)</span>

</li>
                                    <li><small><a href="<?php echo $this->webroot; ?>kennels/training/rally/<?php echo $breed['GameBreed']['id']; ?>"  class="btn btn-primary">RALLY</a></small>

<span style="display: inline-block;
    float: right;
    margin-left: 20px;

    width: 100px;"><strong class="green val_div" style="width:<?php echo $breed['GameBreed']['rally']; ?>%;display: inline-block;height: 18px;"></strong ><br>(<?php echo $breed['GameBreed']['rally']; ?>/100)</span>

</li>
                                </ul>
                            </div>
                            <div id="tab-2" class="tab-content">

                                <?php //if ($breed['GameBreed']['gender'] == 'Dog') 
					{ ?>
                                    
                                    <form id="placeStudForm" name="placeStudForm" method="post" action="<?php echo $this->webroot . 'kennels/change_dog_name'; ?>">
                                        <input type="hidden" name="game_breed_id" value="<?php echo $breed['GameBreed']['id']; ?>">
                                        <ul style="border-top: none" class="ul-no-style">
                                            <li><h4>CHANGE PET NAME: </h4></li>
                                            <li><input type="text" name="breed_name" class="required"/></li>
                                            <li><input type="submit"  value="Rename"/></li>
                                        </ul>
                                    </form>
          <?php 
}
if ($breed['GameBreed']['gender'] == 'Dog') { ?>
                                    <form id="placeStudForm" name="placeStudForm" method="post" action="<?php echo $this->webroot . 'kennels/place_stud'; ?>">
                                        <input type="hidden" name="game_breed_id" value="<?php echo $breed['GameBreed']['id']; ?>">
                                        <ul style="border-top: none" class="ul-no-style">
                                                <!--<li><input type="text" /><label>CHANGE NAME</label></li>-->


                                            <?php if ($breed['GameBreed']['is_up_for_breed'] == 1) { ?>
                                                <li><h4>TAKE DOWN STUD: </h4></li>
                                                <li>STUD AMOUNT: <?php echo $breed['GameBreed']['breed_price']; ?></li>
                                                <li><input type="submit"  value="Take Down"/></li>
                                            <?php } else { ?>
                                                <li><h4>PLACE UP STUD: </h4></li>
                                                <li><input type="text" name="breed_price" maxlength="5" class="required number"/><label>AMOUNT</label></li>
                                                <li><input type="submit"  value="Place"/></li>
                                            <?php } ?>
                                        </ul>
                                    </form>

                                <?php } ?>


                                <?php if ($breed['GameBreed']['for_adoption'] == 0) { ?>
				
                                    <form id="placeAdoptionForm" name="placeAdoptionForm" method="post" action="<?php echo $this->webroot . 'adoption/place_for_adoption'; ?>">
                                        <input type="hidden" name="game_breed_id" value="<?php echo $breed['GameBreed']['id']; ?>">
                                        <ul style="border-top: none" class="ul-no-style">
                                            <!--<li><h4>PLACE YOUR DOG FOR SALE. SHOWS YOUR DOG FOR SALE IN ADOPTION TAB, BUT DOG REMAINS IN YOUR KENNEL TILL DOG SELLS</h4></li>-->
                                            <li><h4>PLACE UP FOR ADOPTION: <span id="help-message" style="cursor: pointer;    border: 1px solid; color:red; padding: 4px !important; border-radius: 37px;">?</span></h4></li>
                                            <li><input type="text" name="adoption_price" maxlength="5" class="required number" /><label>AMOUNT</label></li>
                                            <li><input type="submit"  value="SELL"/></li>
                                            <div id="message" style="border: 1px solid #0CF;border-radius: 2px;padding: 12px;width: 70%;margin-top: -50px;margin-left: 253px;background-color: aliceblue;display: none;">PLACE YOUR DOG FOR SALE. SHOWS YOUR DOG FOR SALE IN ADOPTION TAB, BUT DOG REMAINS IN YOUR KENNEL TILL DOG SELLS</div>
                                        </ul>
                                    </form>
                                <?php } else if ($breed['GameBreed']['for_adoption'] == 1) { ?>

                                    <form id="placeAdoptionForm" name="placeAdoptionForm" method="post" action="<?php echo $this->webroot . 'adoption/take_down_adoption'; ?>">
                                        <input type="hidden" name="game_breed_id" value="<?php echo $breed['GameBreed']['id']; ?>">
                                        <ul style="border-top: none">					
                                            <li><h4>TAKE DOWN FROM ADOPTION: </h4></li>					
                                            <li><input type="submit"  value="TAKE DOWN"/></li>			
                                        </ul>
                                    </form>

                                <?php } ?>

                                <?php if ($breed['GameBreed']['for_adoption'] != 2) { ?>	
                                    <form id="sellPetForm" name="sellPetForm" method="post" action="<?php echo $this->webroot . 'adoption/sell_to_pedigree'; ?>">
                                        <input type="hidden" name="game_breed_id" value="<?php echo $breed['GameBreed']['id']; ?>">
                                        <ul style="border-top: none">
                                            <li></li>

                                            <li><h4>SELL TO BEST OF PEDIGREE SHOP: </h4></li>
                                            <li><input type="submit"  value="SELL"/></li>			  
                                        </ul>
                                    </form>
                                <?php } ?>
                                <ul>
                                    <li><h4>DNA TESTING / HEALTH TESTS</h4></li>
                                    <p>B locus: <?php if($vet_B_locus > 0){ echo $breed['GameBreed']['b_locus_gene']; }else{ echo 'NA';} ?></p>
                                    <p>D locus: <?php if($vet_D_locus > 0){ echo $breed['GameBreed']['d_locus_gene']; }else{ echo 'NA'; } ?></p>
                                    <p>E locus: <?php if($vet_E_locus > 0){ echo $breed['GameBreed']['e_locus_gene']; }else{ echo 'NA'; } ?></p>
                                    <p>S locus: <?php if($vet_S_locus > 0){ echo $breed['GameBreed']['s_locus_gene']; }else{ echo 'NA';} ?></p>
                                    <p>Health Test: <?php if($vet_health_test > 0) echo 'Completed'; else echo 'NA'; ?></p>
                                </ul>
                            </div>
                            <div id="tab-3" class="tab-content">
				<table id="pedigree">
                                   <thead>
                                   <tr>
					<th align="left">GENERATION</th>
                                        <th align="left">DOG NAME</th>
                                        <th align="left">BITCH NAME</th>
                                        <th align="left">PUPPY NAME</th>
                                        
                                    </tr>
                                    </thead>
                                     <tbody>
                                    <?php 
if(!empty($matches )){ $i=1;
foreach ($matches as $match){ ?>
                                        <tr>
			<td align="left" valign="middle"><?php echo $i; ?></td>
            <?php //echo !empty($match['gen'])?$match['gen']:""; ?>
                        <td align="left" valign="middle"><?php echo !empty($match['dog'])?$match['dog']:""; ?></td>
			<td align="left" valign="middle"><?php echo !empty($match['bitch'])?$match['bitch']:""; ?></td>
		        <td align="left" valign="middle"><?php echo !empty($match['puppy'])?$match['puppy']:""; ?></td>

                                        </tr>
                                    <?php $i++;}?>
            <tr>
                <td align="left" valign="middle">4</td>
                <td align="left" valign="middle"></td>
                <td align="left" valign="middle"></td>
                <td align="left" valign="middle"></td>
            </tr>
                                   <?php }else{?>
                                    No data available in table
                                <?php }?>
				 </tbody>
                                </table>
				                                 
                            </div>

                            <div id="tab-4" class="tab-content">
                                <table id="litters">
                                   <thead>
                                   <tr>
					
                                        <th align="left">DOG NAME</th>
                                        <th align="left">SEX</th>
                                        <th align="left">AGE</th>
					<th align="left">OWNER</th>
                                        
                                    </tr>
                                    </thead>
                                     <tbody>
                                    <?php 
if(!empty($puppy_matches )){
foreach ($puppy_matches as $pmatch){ ?>
                                        <tr>
			<td align="left" valign="middle"><?php echo !empty($pmatch['puppy_name'])?$pmatch['puppy_name']:""; ?></td>
                        <td align="left" valign="middle"><?php echo !empty($pmatch['sex'])?$pmatch['sex']:""; ?></td>
			<td align="left" valign="middle"><?php echo !empty($pmatch['age'])?$pmatch['age']:""; ?></td>
		        <td align="left" valign="middle"><?php echo !empty($pmatch['owner'])?$pmatch['owner']:""; ?></td>

                                        </tr>
                                    <?php }}else{?>
                                    No data available in table
                                <?php }?>
				 </tbody>
                                </table>
                            </div>
                            <div id="tab-5" class="tab-content">
                                <table id="show_results">
                                   <thead>
                                   <tr>
                                        <th align="left">Shows</th>
                                        <th align="left">Award</th>
                                        <th align="left">Qualifying Score</th>
                                        <!-- <th align="left">Time</th> -->
                                        <th align="left">Points</th>
                                        <!-- <th align="left">Winnings</th> -->
                                    </tr>
                                    </thead>
                                     <tbody>
                                    <?php foreach ($Winners as $wnr): ?>
                                        <tr>
                                            <td align="left" valign="middle"><?php 
                                            echo $wnr['Show']['title'] 
                                            // . '<br>Show: ' . $wnr['Show']['show_type']; ?>
                                            &nbsp;
                                            <!-- </td> -->

                                            <td align="left" valign="middle"><?php echo $wnr['ShowWinner']['title']; ?></td>
                                            <td align="left" valign="middle"><?php echo $wnr['ShowEntry']['stat_sum']; ?></td>
                                            <!-- <td align="left" valign="middle"><?php  
                                            // echo $wnr['ShowWinner']['created']; ?></td>-->
                                            <td align="left" valign="middle"><?php echo $wnr['ShowEntry']['points_awarded']; ?></td>
                                            <!-- <td align="left" valign="middle">100.00$</td> -->
                                        </tr>
                                    <?php endforeach; ?>
				 </tbody>
                                </table>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
            <!-- /col-lg-9 END SECTION MIDDLE -->
            <?php //echo $this->element('right_sidebar'); ?>
            <script>
                $(document).ready(function () {
                    $('ul.tabs li').click(function () {
                        var tab_id = $(this).attr('data-tab');

                        $('ul.tabs li').removeClass('current');
                        $('.tab-content').removeClass('current');

                        $(this).addClass('current');
                        $("#" + tab_id).addClass('current');
                    });

			 $('#breed_puppies').DataTable({
			    "ajax": '<?php echo $this->webroot; ?>kennels/purchased_puppies',
			    "autoWidth": false,
			    "columns": [
				{ "width": "5%" },
				{ "width": "30%" },
				{ "width": "20%" },
				{ "width": "40%" },
				{ "width": "5%" }
			    ]
			});



                });
		$('#show_results').DataTable({
	         "autoWidth": true
	        });
		$('#pedigree').DataTable({
	         "autoWidth": true
	        });
		$('#litters').DataTable({
	         "autoWidth": true
	        });

            $( "#help-message" ).mouseenter(function() {
              $("#message" ).css( 'display', 'inherit' );
              
            });
            $( "#help-message" ).mouseleave(function() {
              $("#message" ).css( 'display', 'none' );
              
            });
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
   background: #3C4049;
   color: #fff;
   border-top-left-radius: 4px;
   border-top-right-radius: 4px;
   }
   .maintabs .tab-content{
   display: none;
   background: #ffffff;
   padding: 15px;
   /* height:270px;*/
   }
   .maintabs .tab-content.current{
   display: inherit;
   }
   .dog-left .val_div{ height: 16px; border-radius: 4px;}
   .ul-no-style{list-style: none;}
   .ul-no-style li{list-style: none;}
   ul{list-style: none;}
   ul li{list-style: none;}
   

</style>

<style>
    ul.tabs{
        margin: 0px;
        padding: 0px;
        list-style: none;
        border-top-right-radius: 5px;
        border-top-left-radius: 5px;
    }
    ul.tabs li{
        background: #3C4049;
        color: #fff;
        display: inline-block;
        padding: 10px 15px;
        cursor: pointer;
        font-size: 16px;
        font-weight: bold;
        border-top-right-radius: 5px;
        border-top-left-radius: 5px;
    }

    ul.tabs li.current{
        background: #3C4049;
        color: #fff;
        font-size: 22px;
    }

    .container .tab-content{
        display: none;
        background: #ededed;
        padding: 15px;
        width: 81%;
    }

    .container .tab-content.current{
        display: inherit;
    }
    div.section_detail {
        width: 81%;
        background-color: #fff;
    }
</style>
