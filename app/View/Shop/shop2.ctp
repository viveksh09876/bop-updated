<style>
    .bk_img {
    display: -moz-inline-box;
}
    .bk_img > li {
    padding: 5px;
}
.bk_img img {
    height:205px;
    width:250px;
}

.background_img_frm input[type="submit"] {
    background: #fff none repeat scroll 0 0;
    border: 1px solid #bbb;
    cursor: pointer;
    padding: 5px 10px;
    width: 20%;
}
    </style>
 <?php echo $this->element('left_sidebar'); ?>
<!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <div class="row">
                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 pt main_container">
                  <div class="shop-page">
                  	<h2 class="page-title">BEST OF PEDIGREE <br />SHOP</h2>
                        <?php echo $this->Session->flash(); ?>
                    <p>HEAR YOU CAN PURCHASE GAME BRED DOGS. THE TRAITS,GENETICS,C0LOR, MARKINGS AND PATTERNS ARE UNKNOWN. </p>
                    <div class="common_box">
                        <h3>ORIGIN DOGS</h3>
                        <?php echo $this->Form->create('GameBreed'); ?>
                        <ul>
                            <li><?php $breeds=array();
                           if($allBreeds){
                             foreach($allBreeds as $brd){
                                 $breeds[$brd['Breed']['id']]=$brd['Breed']['name'];
                             }
                           }?>
                              <li>  <?php echo $this->Form->input('name',array('class'=>'required','label'=>false,'div'=>false,'style'=>'width:570px;height:35px')); ?><label>NAME</label></li>
                              <li> <?php echo $this->Form->input('breed_id',array('class'=>'required','label'=>false,'div'=>false,'options'=>$breeds,'empty'=>'Select','style'=>'width:570px;height:35px')); ?><label>BREEDS</label></li>
                            <li> <?php echo $this->Form->input('gender',array('class'=>'required','label'=>false,'div'=>false,'options'=>array('Dog'=>'Dog',
                                'Bitch'=>'Bitch'),'style'=>'width:570px;height:35px','empty'=>'Select')); ?><label>SEX</label></li>
                            <li><input type="submit" name="buy_game_breed" value="BUY ($300)" /></li>
                        </ul>
                        <?php echo $this->Form->end(); ?>
                    </div>
                    <!------
                    <div class="common_box">
                        <h3>PEDIGREE TOKENS</h3>
                        <p>PEDIGREE TOKEN ARE SOLD IN BUNDLES THROUGH PAYPAL. TH ERE USED TO BUYA EMPLOYERS LICENSE TO POST AND CREATE JOBS.<br /> ADD EXTRA KENN F.I. SPACES.<br /> ADD EXIT, BREEDINGS. </p>
                        <ul>
                            <li><input type="text" /><label>BUNDLES</label></li>
                            <li><input type="submit" value="PAYPAL" /></li>
                        </ul>
                    </div>-------->
                     <div class="common_box">
                        <h3>Bones</h3>
                        <p>USED TO BUY KENNEL SPACES, ADD EXTRA BREEDING, PULL DOG OUT OF RETIREMENT ETC.</p>
                         <?php echo $this->Form->create('UserEnergyBone'); ?>
                        <ul>
                            <?php $bones=array();
                           if($allEnergyBones){
                             foreach($allEnergyBones as $eb){
                                 $bones[$eb['EnergyBone']['id']]=$eb['EnergyBone']['title'];
                             }
                           }?>
                            <li> <?php echo $this->Form->input('energy_bone_id',array('class'=>'required','label'=>false,'div'=>false,'options'=>$bones,'empty'=>'Select','style'=>'width:570px;height:35px','onchange'=>'get_energybone_price(this.value)')); ?><label>ENERGY BONE</label></li>
                            <li><input type="submit" name="energy_bone" value="PAYPAL" /></li>
                            <li class="energy_bone_prices"></li>
                        </ul>
                         <?php echo $this->Form->end(); ?>
                    </div>
                    <div class="common_box">
                        <h3>EMPLOYERS LICENSE</h3>
                       <!---- <P class="txt-right">BEST OF FED BUCKS: $1000.00</P>
                        <P class="txt-right">BEST OF PE D TOKENS: 4</P>----->
                        <p>EMPLOYERS LICENSE ALLOWS YOU TO POST JOBS.</p>
                          <?php echo $this->Form->create('UserLicence'); ?>
                        <ul>
                            <?php $licences=array();
                           if($allEmployerLicences){
                             foreach($allEmployerLicences as $el){
                                 $licences[$el['EmployerLicence']['id']]=$el['EmployerLicence']['title'];
                             }
                           }?>
                            <li> <?php echo $this->Form->input('employer_licence_id',array('class'=>'required','label'=>false,'div'=>false,'options'=>$licences,'empty'=>'Select','style'=>'width:570px;height:35px','onchange'=>'get_employer_licence_info(this.value)')); ?><label>Licence</label></li>
                            <li><input type="submit" name="buy_licences" value="BUY LICENCE" /></li>
                            <li class="licence_prices"></li>
                        </ul>
                         <?php echo $this->Form->end(); ?>
                    </div>

                    <div class="common_box">
                        <h3>KENNEL SPACES</h3>
                        <p>INCREASE YOUR KENNEL SPACE.</p>
                         <?php echo $this->Form->create('UserKennelSpace'); ?>
                        <ul>
                            <?php $spaces=array();
                           if($allKennelSpaces){
                             foreach($allKennelSpaces as $space){
                                 $spaces[$space['KennelSpace']['id']]=$space['KennelSpace']['spaces'];
                             }
                           }?>
                            <li> <?php echo $this->Form->input('kennel_space_id',array('class'=>'required','label'=>false,'div'=>false,'options'=>$spaces,'empty'=>'Select','style'=>'width:570px;height:35px','onchange'=>'get_space_price(this.value)')); ?><label>KENNEL SPACES</label></li>
                            <li><input type="submit" name="kennel_space" value="BUY" /></li>
                            <li class="kennel_prices"></li>
                        </ul>
                         <?php echo $this->Form->end(); ?>
                    </div>
                    
                    <div class="common_box">
                        <h3>RETIREMENT MEDALS</h3>
                        <p>PULL A DOG OUT OF RETIREMENT FOR 1 GAME MONTH TO BREED AND SHOW.</p>
                         <?php echo $this->Form->create('UserRetirementMedal'); ?>
                        <ul>
                            <?php $medals=array();
                           if($allRetirementMedals){
                             foreach($allRetirementMedals as $rm){
                                 $medals[$rm['RetirementMedal']['id']]=$rm['RetirementMedal']['title'];
                             }
                           }?>
                            <li> <?php echo $this->Form->input('retirement_medal_id',array('class'=>'required','label'=>false,'div'=>false,'options'=>$medals,'empty'=>'Select','style'=>'width:570px;height:35px','onchange'=>'get_medal_price(this.value)')); ?><label>RETIREMENT MEDAL</label></li>
                            <li><input type="submit" name="retirement_medal" value="BUY" /></li>
                            <li class="medal_prices"></li>
                        </ul>
                         <?php echo $this->Form->end(); ?>
                    </div>
                    <div class="common_box">
                        <h3>BREEDING RIBBON</h3>
                        <p>ALLOWS YOU TO BREED A BITCH THAT IS NOT IN HEAT.</p>
                        <ul>
                            <li><input type="text" /><label>SELECT BITCH</label></li>
                            <li><input type="submit" value="BUY" /></li>

                        </ul>
                    </div>
                    <div class="common_box">
                        <h3>BACKGROUND IMAGES</h3>
                        <p>ALL BACKGROUNDS AVAILABLE TO USERS TO SELECT AND PURCHASE.</p>
                        <?php if($allBackgroundImages){ ?>
                        <ul class="bk_img">
                           <?php foreach($allBackgroundImages as $img){ ?>
                            <li><a href="javascript:void(0)" onclick="show_img('<?php echo $img['BackgroundImage']['id']; ?>')"><img src="<?php echo $this->webroot; ?>files/pet_background_img/<?php echo $img['BackgroundImage']['image']; ?>"></a></li>
                          
                            <?php } ?>
                        </ul>
                        <?php } ?>
                    </div>

                    <!-------Image to be loaded here------>
                    <div id="img_div" style="display:none;width:100%;min-width:800px;height: 500px ">
                        
                      </div>
                    <!---image load ends--->
                     <a href="#img_div" id="bkImg" class="fancybox" style="display:none"></a>
                  </div>
                  </div>
             <!-- /col-lg-9 END SECTION MIDDLE -->

             <?php echo $this->element('right_sidebar'); ?>
              </div>
          </section>
      </section>
<script>
    $(function(){
       $(".fancybox").fancybox({
           'autoscale' : true,
            'width'  : '450',
            'height'  : '700',
            'transitionIn'  : 'elastic',
            'transitionOut' : 'elastic',
            'openSpeed' : 250
       });
       $('#GameBreedShopForm').validate();
       $('#UserKennelSpaceShopForm').validate();
       $('#UserLicenceShopForm').validate();
    });

    function get_space_price(spaceId){
       if(spaceId){
           var url='<?php echo $this->webroot;?>shop/kennel_space_prices/'+spaceId;
           $.get(url,function(data){
               $('.kennel_prices').html(data);
           });
        }
    }

     function get_employer_licence_info(licenceId){
       if(licenceId){
           var url='<?php echo $this->webroot;?>shop/employer_licence_prices/'+licenceId;
           $.get(url,function(data){
               $('.licence_prices').html(data);
           });
        }
    }

    function get_energybone_price(energyBoneId){
       if(energyBoneId){
           var url='<?php echo $this->webroot;?>shop/energybone_prices/'+energyBoneId;
           $.get(url,function(data){
               $('.energy_bone_prices').html(data);
           });
        }
    }

    function get_medal_price(medalId){
       if(medalId){
           var url='<?php echo $this->webroot;?>shop/retirement_medal_prices/'+medalId;
           $.get(url,function(data){
               $('.medal_prices').html(data);
           });
        }
    }

    function show_img(id){
     $('#img_div').html("<div><img src='<?php echo $this->webroot;?>img/loader.gif'></div>");
     $('#bkImg').trigger('click');
     var url="<?php echo $this->webroot; ?>shop/background_images/"+id;
     $.get(url,function(data){
        $('#img_div').html(data);
     });
    }

    function update_comment(data,textStatus){

	if(textStatus=='success'){
                var jdata=$.parseJSON(data);
		var st=jdata.status;
                if(st==1){
                    $('#msg').addClass('success');
		}else{
                     $('#msg').addClass('error');
                }
		$('#msg').html(jdata.message);
		
	}
}
    </script>