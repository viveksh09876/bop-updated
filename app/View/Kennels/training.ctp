<?php 

if (empty($backgroundImage))
        $backgroundImage = '../../img/kennel-bg.png';
    else
        $backgroundImage = $this->webroot.'files/pet_background_img/'.$backgroundImage;
?>
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pt main_container">
                <div class="dog-page" style="width: 67%;margin: auto;">
                    <div class="dog-main" style="width:95.5%">
                        <div class="picpace-holder"> 
							<?php // echo "<pre>"; print_r($breed['BreedImages']); echo "<--";//echo $breed['Breed']['BreedImages']['0']['filename']['UserBgImage']; ?>
                          <img src="<?php echo SITE_URL; ?>timthumb.php?src=files/breeds/<?php
                            if ($breed['GameBreed']['age'] < 21) {
                                echo $breed['BreedImages']['filename'];
                            } else {
                                echo $breed['BreedImages']['filename_adult'];
                            }
                            ?>&w=500&zc=1?>">
                        </div>

                        <div class="panel panel-default" style="margin-top: 20px;width: 98%;">
                          <div class="panel-heading" style="background: #B378D3 !important;color: #fff;font-weight: bold;">Dog Detail</div>
                          <div class="panel-body">
                            <b><?php echo $this->Session->flash(); ?></b>
                            <br>
                            <div class="name-box">Name: <?php echo $breed['GameBreed']['name']; ?></div>
                            <div class="name-box">Info : <?php echo $breed['BreedImages']['color']; ?> <?php echo $breed['GameBreed']['gender']; ?></div>
                            <div class="name-box">Conformation : <?php echo $breed['GameBreed']['confirmation']; ?></div>
                            <div class="name-box">Agility : <?php echo $breed['GameBreed']['agility']; ?></div>
                            <div class="name-box">Obedience : <?php echo $breed['GameBreed']['obedience']; ?></div>
                            <div class="name-box">Rally : <?php echo $breed['GameBreed']['rally']; ?></div>
                            <div class="name-box">Energy : <?php echo $breed['GameBreed']['energy']; ?></div>
                            <br>
                            <div class="color-box">
                                <?php  echo $this->element('confirmation') ?>
                                  <?php echo $this->element('obedience') ?>
                                 <?php echo $this->element('agility') ?>
                                <?php echo $this->element('rally') ?>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
<script>//alert(<?php echo $bgimg['UserBgImage']['image'];?>)</script>
<style>
  .dog-main .picpace-holder {
    text-align: center;
    border-radius: 10px;
    background: url('<?php echo $backgroundImage?>') no-repeat;
    background-size: 100% auto;
    background-position-y: 81%;
  }
</style>