<style>
    table tr td{ font-size: 12px; padding: 5px;}
    .head-row td{ font-size: 12px; font-weight:bold;}
    .instagram-panel{ min-height: 300px;}
    table.main-table{ width: 780px;}
    .tab-content{ width: 850px;}
</style>

<!--sidebar start-->

<!--sidebar end-->

<!--main content start-->
<section id="main-content">
    <section class="wrapper">

        <div class="row">
            <div class="col-lg-9 pt">
                <div class="row">

                    <div class="col-md-12 mb">
                        <!-- INSTAGRAM PANEL -->
                        <div class="instagram-panel">									
                            <?php echo $this->Session->flash(); ?>							
                            <div class="select-breed">
                                <form id="breedForm" name="breedForm" method="post" action="">
                                    <h3>Adoption Centre</h3>
                                    <select name="breed">
                                        <option value="">Select Breed</option>
                                        <?php foreach ($allBreeds as $breed) { ?>
                                            <option value="<?php echo $breed['Breed']['id']; ?>"><?php echo $breed['Breed']['name']; ?></option>
                                        <?php } ?>
                                    </select>
                                    <input type="submit" value="Search">
                                </form>
                            </div>
                            <?php if (isset($data)) { ?>
                                <div class="container" style="margin-top: 30px; width: 900px;">
                                    <ul class="tabs">
                                        <li class="tab-link current" data-tab="tab-1">Dog</li>
                                        <li class="tab-link" data-tab="tab-2">Bitch</li>
                                        <li class="tab-link" data-tab="tab-3">Puppy</li>
                                        <li class="tab-link" data-tab="tab-4">Retired</li>
                                    </ul>
                                    <div id="tab-1" class="tab-content current">
                                        <table class="main-table"  width="100%" cellspacing="15" cellpadding="25" border="1" align="center" class="listing">

                                            <?php
                                            foreach ($data as $dat) {
                                                if ($dat['GameBreed']['gender'] == 'Dog' && $dat['GameBreed']['age'] >= 21) {
                                                    ?>
                                                    <tr>
                                                        <td align="left" valign="middle" style="width: 30%;"><?php $image = $dat['Breed']['BreedImages']['0']['filename_adult']; ?>
                                                            <img style="height: auto;" src="<?php echo SITE_URL; ?>timthumb.php?src=files/breeds/<?php echo $image; ?>&w=160">&nbsp;
                                                        </td>

                                                        <td align="left" valign="middle" style="padding:0 !important" >
                                                            <table border="1" cellspacing="2" cellpadding="2" style="width: 100%">
                                                                <tr class="head-row">
                                                                    <td>Name</td>
                                                                    <td>Age</td>
                                                                    <td>Color</td>
                                                                    <td>General Traits</td>
                                                                    <td>Health Stats</td>
                                                                    <td>Cost</td>
                                                                    <td>Action</td>
                                                                </tr>

                                                                <tr>
                                                                    <td><?php echo $dat['GameBreed']['name']; ?></td>
                                                                    <td><?php echo $dat['GameBreed']['age']; ?></td>
                                                                    <td><?php echo $dat['GameBreed']['color']; ?></td>
                                                                    <td><?php echo '343/700'; ?></td>
                                                                    <td><?php echo '343/700'; ?></td>
                                                                    <td><?php echo $dat['GameBreed']['adoption_price']; ?></td>
                                                                    <td><a href="<?php echo $this->webroot . 'adoption/adopt_pet/' . $dat['GameBreed']['id']; ?>">Adopt</a></td>
                                                                </tr>

                                                            </table> 
                                                        </td>
                                                    </tr>

                                                    <?php
                                                }
                                            }
                                            ?>			
                                        </table>

                                    </div>
                                    <div id="tab-2" class="tab-content">

                                        <table  width="100%" cellspacing="15" cellpadding="25" border="1" align="center" class="listing">

                                            <?php
                                            foreach ($data as $dat) {
                                                if ($dat['GameBreed']['gender'] == 'Bitch' && $dat['GameBreed']['age'] >= 14) {
                                                    ?>
                                                    <tr>
                                                        <td align="left" valign="middle" style="width: 30%;"><?php $image = $dat['Breed']['BreedImages']['0']['filename_adult']; ?>
                                                            <img style="height: auto;" src="<?php echo SITE_URL; ?>timthumb.php?src=files/breeds/<?php echo $image; ?>&w=160">&nbsp;
                                                        </td>

                                                        <td align="left" valign="middle" style="padding:0 !important" >
                                                            <table border="1" cellspacing="2" cellpadding="2" style="width: 100%">
                                                                <tr class="head-row">
                                                                    <td>Name</td>
                                                                    <td>Age</td>
                                                                    <td>Color</td>
                                                                    <td>General Traits</td>
                                                                    <td>Health Stats</td>
                                                                    <td>Cost</td>
                                                                    <td>Action</td>
                                                                </tr>

                                                                <tr>
                                                                    <td><?php echo $dat['GameBreed']['name']; ?></td>
                                                                    <td><?php echo $dat['GameBreed']['age']; ?></td>
                                                                    <td><?php echo $dat['GameBreed']['color']; ?></td>
                                                                    <td><?php echo '343/700'; ?></td>
                                                                    <td><?php echo '343/700'; ?></td>
                                                                    <td><?php echo $dat['GameBreed']['adoption_price']; ?></td>
                                                                    <td><a href="<?php echo $this->webroot . 'adoption/adopt_pet/' . $dat['GameBreed']['id']; ?>">Adopt</a></td>
                                                                </tr>

                                                            </table> 
                                                        </td>
                                                    </tr>

                                                    <?php
                                                }
                                            }
                                            ?>			
                                        </table>

                                    </div>
                                    <div id="tab-3" class="tab-content">

                                        <table  width="100%" cellspacing="15" cellpadding="25" border="1" align="center" class="listing">

                                            <?php
                                            foreach ($data as $dat) {
                                                if (($dat['GameBreed']['gender'] == 'Dog' && $dat['GameBreed']['age'] < 21) || ($dat['GameBreed']['gender'] == 'Bitch' && $dat['GameBreed']['age'] < 14)) {
                                                    ?>
                                                    <tr>
                                                        <td align="left" valign="middle" style="width: 30%;"><?php $image = $dat['Breed']['BreedImages']['0']['filename']; ?>
                                                            <img style="height: auto;" src="<?php echo SITE_URL; ?>timthumb.php?src=files/breeds/<?php echo $image; ?>&w=160">&nbsp;
                                                        </td>

                                                        <td align="left" valign="middle" style="padding:0 !important" >
                                                            <table border="1" cellspacing="2" cellpadding="2" style="width: 100%">
                                                                <tr class="head-row">
                                                                    <td>Name</td>
                                                                    <td>Age</td>
                                                                    <td>Color</td>
                                                                    <td>General Traits</td>
                                                                    <td>Health Stats</td>
                                                                    <td>Cost</td>
                                                                    <td>Action</td>
                                                                </tr>

                                                                <tr>
                                                                    <td><?php echo $dat['GameBreed']['name']; ?></td>
                                                                    <td><?php echo $dat['GameBreed']['age']; ?></td>
                                                                    <td><?php echo $dat['GameBreed']['color']; ?></td>
                                                                    <td><?php echo '343/700'; ?></td>
                                                                    <td><?php echo '343/700'; ?></td>
                                                                    <td><?php echo $dat['GameBreed']['adoption_cost']; ?></td>
                                                                    <td><a href="<?php echo $this->webroot . 'adoption/adopt_pet/' . $dat['GameBreed']['id']; ?>">Adopt</a></td>
                                                                </tr>

                                                            </table> 
                                                        </td>
                                                    </tr>

                                                    <?php
                                                }
                                            }
                                            ?>			
                                        </table>

                                    </div>
                                    <div id="tab-4" class="tab-content">
                                        Retired
                                    </div>


                                </div><!-- container -->
                            <?php } ?>
                        </div>
                    </div><!-- /col-md-4 -->

                </div><!-- /row -->

            </div><!-- /col-lg-9 END SECTION MIDDLE -->




        </div>	

    </section>
</section>

<script>
    $(document).ready(function () {

        $('#container').addClass('kennel_page');


        $('ul.tabs li').click(function () {
            var tab_id = $(this).attr('data-tab');

            $('ul.tabs li').removeClass('current');
            $('.tab-content').removeClass('current');

            $(this).addClass('current');
            $("#" + tab_id).addClass('current');
        });
    });


</script>

<style>


    ul.tabs{
        margin: 0px;
        padding: 0px;
        list-style: none;
    }
    ul.tabs li{
        background: none;
        color: #222;
        display: inline-block;
        padding: 10px 15px;
        cursor: pointer;
        font-size: 22px;
        font-weight: bold;
    }

    ul.tabs li.current{
        background: #ededed;
        color: #222;
    }

    .container .tab-content{
        display: none;
        background: #ededed;
        padding: 15px;

    }

    .container .tab-content.current{
        display: inherit;
    }
</style>