<script src="http://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.7/css/jquery.dataTables.css">

<!--sidebar start-->

<!--sidebar end-->

<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <style>
            .panel-default {
                border: 0px solid #000000;
                -moz-border-radius: 7px;/*Firefox*/
                -webkit-border-radius: 7px;/*Safari, Chrome*/
                border-radius: 7px;

            }
            .panel-heading{
                background-color: #B378D3!important;
                color:#fff!important;
                font-weight: bold;
            }
        </style>
        <div class="row">


            <section id="main-content">
                <section class="wrapper">

                    <div class="row">

                    </div>

                    <div class="col-lg-12 pt">


                        <div class="row">
                            <!-- TWITTER PANEL -->


                            <div class="panel panel-default" style="margin-left:36px;">
                                <div class="panel-heading">Shop</div>

                                <div class="panel-body">



                                    <!--main content start-->
                                    <section id="main-content" class="shop-bg">
                                        <section class="wrapper">
                                            <div class="row" style="margin-left:60px;">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pt main_container">
                                                    <div class="shop-page" style="background: white none repeat scroll 0% 0%; padding: 5px; border-radius: 5px;">

                                                        <?php echo $this->Session->flash(); ?>

                                                        <div class="panel-body" >
                                                            <center><img src="<?php echo $this->webroot; ?>files/kennel_banners/<?php echo $kennelData['User']['shop_banner']; ?>" class="img-responsive"></center>
                                                        </div>
                                                        <p>HERE YOU CAN PURCHASE GAME BRED DOGS. THE TRAITS,GENETICS,COLOR, MARKINGS AND PATTERNS ARE UNKNOWN. </p><br>
                                                        <div class="panel-heading">ORIGIN DOGS</div>
                                                        <div class="common_box">


                                                            
                                                            <form action="/beta/shop" id="GameBreedShopForm" method="post" onsubmit="return check_space();">
                                                            <br/>
                                                            <?php
                                                            $breeds = array();
                                                            if ($allBreeds) {
                                                                foreach ($allBreeds as $brd) {
                                                                    $breeds[$brd['Breed']['id']] = $brd['Breed']['name'];
                                                                }
                                                            }
                                                            ?>
                                                            <?php echo $this->Form->input('name', array('class' => 'required', 'label' => false, 'div' => false, 'style' => 'width:300px;height:35px')); ?><br/><label>NAME</label><br>
                                                            <select name="data[GameBreed][breed_id]" class="required" style="width:300px;height:35px" id="GameBreedBreedId">
                                                                <option value="">Select</option>
                                                                <option value="60">Great Dane</option>
                                                                <option value="59">Doberman Pinscher</option>
                                                                <option value="62">Great Dane2</option>
                                                                <option value="63">German Shepherd</option>
                                                            </select></br><label>BREEDS</label></br>
                                                            <?php
                                                            echo $this->Form->input('gender', array('class' => 'required', 'label' => false, 'div' => false, 'options' => array('Dog' => 'Dog',
                                                                    'Bitch' => 'Bitch'), 'style' => 'width:300px;height:35px', 'empty' => 'Select'));
                                                            ?></br><label>SEX</label></br>
                                                            <button type="button" onclick="check_pet_availability()">Check Availability</button></br>
                                                            <input id="pet_buy" type="submit" name="buy_game_breed" value="BUY" /></br>

                                                            <?php echo $this->Form->end(); ?>
                                                        </div>
                                                        <br><div class="panel-heading">CREDITS</div>
                                                        <div class="common_box">

                                                            <p>USED TO BUY KENNEL SPACES, ADD EXTRA BREEDING, PULL DOG OUT OF RETIREMENT ETC.</p>

                                                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                                                <input type="hidden" name="cmd" value="_s-xclick">
                                                                <input type="hidden" name="hosted_button_id" value="FN4JZYPG2FH4U">
                                                                <table>
                                                                    <tr><td><b><input type="hidden" name="on0" value="CREDITS">CREDITS</b></td></tr><tr><td><select name="os0">
                                                                                <option value="1 Credit">1 Credit $1.99 USD</option>
                                                                                <option value="3 CreditS">3 CreditS $4.99 USD</option>
                                                                                <option value="10 Credits">10 Credits $9.99 USD</option>
                                                                                <option value="27 Credits">27 Credits $19.99 USD</option>
                                                                                <option value="72 Credits">72 Credits $39.99 USD</option>
                                                                            </select> </td></tr>
                                                                </table><br>
                                                                <input type="hidden" name="currency_code" value="USD">
                                                                <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                                                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                                                            </form>


                                                        </div>

                                                        <br><div class="panel-heading">ENERGY BONES</div>
                                                        <div class="common_box">


                                                            <p>GIVE YOUR DOG A TREAT THAT WILL REFRESH THEIR ENERGY TO TRAIN AND SHOW.</p>
                                                            <?php echo $this->Form->create('UserEnergyBone'); ?>

                                                            <?php
                                                            $bones = array();
                                                            if ($allEnergyBones) {
                                                                foreach ($allEnergyBones as $eb) {
                                                                    $bones[$eb['EnergyBone']['id']] = $eb['EnergyBone']['title'];
                                                                }
                                                            }
                                                            ?>
                                                            <?php echo $this->Form->input('energy_bone_id', array('class' => 'required', 'label' => false, 'div' => false, 'options' => $bones, 'empty' => 'Select', 'style' => 'width:300px;height:35px', 'onchange' => 'get_energybone_price(this.value)')); ?><br><label>ENERGY BONES</label><br>
                                                            <?php echo $this->Form->input('Payment.payment_mode', array('class' => 'required', 'label' => false, 'div' => false, 'options' => array('1' => 'Game Funds', '2' => 'Credits'), 'empty' => 'Select', 'style' => 'width:300px;height:35px')); ?><br><label>BUY WITH</label><br>
                                                            <input type="submit" name="energy_bone" value="BUY" /><br>
                                                            <div id="energy_bone_prices" class="price-value"></div>

                                                            <?php echo $this->Form->end(); ?>
                                                        </div>
                                                        <br><div class="panel-heading">EMPLOYERS LICENSE</div>
                                                        <div class="common_box">

                                                            <!---- <P class="txt-right">BEST OF FED BUCKS: $1000.00</P>
                                                             <P class="txt-right">BEST OF PE D TOKENS: 4</P>----->
                                                            <p>EMPLOYERS LICENSE ALLOWS YOU TO POST JOBS.</p>
                                                            <?php echo $this->Form->create('UserLicence'); ?>

                                                            <?php
                                                            $licences = array();
                                                            if ($allEmployerLicences) {
                                                                foreach ($allEmployerLicences as $el) {
                                                                    $licences[$el['EmployerLicence']['id']] = $el['EmployerLicence']['title'];
                                                                }
                                                            }
                                                            ?>
                                                            <?php echo $this->Form->input('employer_licence_id', array('class' => 'required', 'label' => false, 'div' => false, 'options' => $licences, 'empty' => 'Select', 'style' => 'width:300px;height:35px', 'onchange' => 'get_employer_licence_info(this.value)')); ?><br><label>LICENCE</label><br>
                                                            <?php echo $this->Form->input('Payment.payment_mode', array('class' => 'required', 'label' => false, 'div' => false, 'options' => array('1' => 'Game Funds', '2' => 'Credits'), 'empty' => 'Select', 'style' => 'width:300px;height:35px')); ?><br><label>BUY WITH</label><br>
                                                            <input type="submit" name="buy_licences" value="BUY LICENCE" /><br>
                                                            <div id="licence_prices" class="price-value"></div>

                                                            <?php echo $this->Form->end(); ?>
                                                        </div>
                                                        <br><div class="panel-heading">KENNEL SPACES</div>
                                                        <div class="common_box">

                                                            <p>INCREASE YOUR KENNEL SPACE.</p>
                                                            <?php echo $this->Form->create('UserKennelSpace'); ?>

                                                            <?php
                                                            $spaces = array();
                                                            if ($allKennelSpaces) {
                                                                foreach ($allKennelSpaces as $space) {
                                                                    $spaces[$space['KennelSpace']['id']] = $space['KennelSpace']['spaces'];
                                                                }
                                                            }
                                                            ?>
                                                            <?php echo $this->Form->input('kennel_space_id', array('class' => 'required', 'label' => false, 'div' => false, 'options' => $spaces, 'empty' => 'Select', 'style' => 'width:300px;height:35px', 'onchange' => 'get_space_price(this.value)')); ?><br><label>KENNEL SPACES</label><br>
                                                            <?php echo $this->Form->input('Payment.payment_mode', array('class' => 'required', 'label' => false, 'div' => false, 'options' => array('1' => 'Game Funds', '2' => 'Credits'), 'empty' => 'Select', 'style' => 'width:300px;height:35px')); ?><br><label>BUY WITH</label><br>
                                                            <input type="submit" name="kennel_space" value="BUY" /><br>
                                                            <div id="kennel_prices" class="price-value"></div>

                                                            <?php echo $this->Form->end(); ?>
                                                        </div>
                                                        <br>
                                                        <div class="panel-heading">RETIREMENT MEDALS</div>
                                                        <div class="common_box">

                                                            <p>PULL A DOG OUT OF RETIREMENT FOR 1 GAME MONTH TO BREED AND SHOW.</p>
                                                            <?php echo $this->Form->create('UserRetirementMedal'); ?>

                                                            <?php
                                                            $medals = array();
                                                            if ($allRetirementMedals) {
                                                                foreach ($allRetirementMedals as $rm) {
                                                                    $medals[$rm['RetirementMedal']['id']] = $rm['RetirementMedal']['title'];
                                                                }
                                                            }
                                                            ?>
                                                            <?php echo $this->Form->input('retirement_medal_id', array('class' => 'required', 'label' => false, 'div' => false, 'options' => $medals, 'empty' => 'Select', 'style' => 'width:300px;height:35px', 'onchange' => 'get_medal_price(this.value)')); ?><br><label>RETIREMENT MEDAL</label><br>
                                                            <?php echo $this->Form->input('Payment.payment_mode', array('class' => 'required', 'label' => false, 'div' => false, 'options' => array('1' => 'Game Funds', '2' => 'Credits'), 'empty' => 'Select', 'style' => 'width:300px;height:35px')); ?><br><label>BUY WITH</label><br>
                                                            <input type="submit" name="retirement_medal" value="BUY" /><br>
                                                            <div id="medal_prices" class="price-value"></div>

                                                            <?php echo $this->Form->end(); ?>
                                                        </div>
                                                        <br>                        <div class="panel-heading">BREEDING RIBBON</div>

                                                        <div class="common_box">
                                                            <p>ALLOWS YOU TO BREED A BITCH THAT IS NOT IN HEAT.</p>
                                                            <?php echo $this->Form->create('UserBreedingRibbon'); ?>
                                                            <?php
                                                            $bitches = array();
                                                            if ($BitechesNotInHeat) {
                                                                foreach ($BitechesNotInHeat as $bitch) {
                                                                    $bitches[$bitch['GameBreed']['id']] = $bitch['GameBreed']['name'];
                                                                }
                                                            }
                                                            ?>

                                                            <?php
                                                            $ribbons = array();
                                                            if ($allBreedingRibbons) {
                                                                foreach ($allBreedingRibbons as $br) {
                                                                    $ribbons[$br['BreedingRibbon']['id']] = $br['BreedingRibbon']['title'];
                                                                }
                                                            }
                                                            ?>

                                                            <?php echo $this->Form->input('game_breed_id', array('class' => 'required', 'label' => false, 'div' => false, 'options' => $bitches, 'empty' => 'Select', 'style' => 'width:300px;height:35px')); ?><br><label>SELECT BITCH</label><br>
                                                            <?php echo $this->Form->input('breeding_ribbon_id', array('class' => 'required', 'label' => false, 'div' => false, 'options' => $ribbons, 'empty' => 'Select', 'style' => 'width:300px;height:35px', 'onchange' => 'get_ribbon_price(this.value)')); ?><br><label>BREEDING RIBBON</label><br>
                                                            <?php echo $this->Form->input('Payment.payment_mode', array('class' => 'required', 'label' => false, 'div' => false, 'options' => array('1' => 'Game Funds', '2' => 'Credits'), 'empty' => 'Select', 'style' => 'width:300px;height:35px')); ?><br><label>BUY WITH</label><br>
                                                            <input type="submit" name="breeding_ribbon" value="BUY" /><br>
                                                            <div id="ribbon_prices" class="price-value"></div>

                                                            <?php echo $this->Form->end(); ?>
                                                        </div>
                                                        <br>
                                                        <div class="panel-heading">GAME FUNDS</div>
                                                        <div class="common_box">

                                                            <p>ADD GAME FUNDS TO YOUR ACCOUNT.</p>
                                                            <?php
                                                            $funds = array();
                                                            if ($allGameFunds) {
                                                                foreach ($allGameFunds as $br) {
                                                                    $funds[$br['GameFund']['game_funds']] = $br['GameFund']['game_funds'];
                                                                }
                                                            }
                                                            ?>
                                                            <?php echo $this->Form->create('GameFund') ?>

                                                            <?php echo $this->Form->input('cash', array('class' => 'required', 'label' => false, 'div' => false, 'options' => $funds, 'empty' => 'Select', 'style' => 'width:300px;height:35px')); ?><br><label>AMOUNT</label><br>
                                                            <?php echo $this->Form->input('Payment.payment_mode', array('class' => 'required', 'label' => false, 'div' => false, 'options' => array('2' => 'Credits'), 'empty' => 'Select', 'style' => 'width:300px;height:35px', 'onchange' => 'get_fund_price(this.value)')); ?><br><label>BUY WITH</label><br>
                                                            <input type="submit" name="buy_game_funds" value="ADD" /><br>
                                                            <div id="fund_prices" class="price-value"></div>

                                                            <?php echo $this->Form->end(); ?>
                                                        </div>
                                                        <br><div class="panel-heading">BACKGROUND IMAGES</div>
                                                        <div class="common_box" style="display:inline-block; width: 100%;">

                                                            <p>ALL BACKGROUNDS AVAILABLE TO USERS TO SELECT AND PURCHASE.</p>
                                                            <?php if ($allBackgroundImages) {
                                                                
                                                                
                                                                ?>
                                                             <?php echo $this->Form->create('BackgroundImage') ?>
                                                                <div class="bk_img">
                                                                    <?php foreach ($allBackgroundImages as $img) { ?>
                                                                    <div class="col-sm-3" style="padding-left:2px;padding-right:2px;"> <a href="javascript:void(0)" onclick="show_img('<?php echo $img['BackgroundImage']['id']; ?>')"><img src="<?php echo $this->webroot; ?>files/pet_background_img/<?php echo $img['BackgroundImage']['image']; ?>" class="img-responsive img-thumbnail"></a>
                                                                    <div class="text-center"><input type="hidden" name="BG_id" value="<?php echo $img["BackgroundImage"]["id"] ?>"><input type="submit" name="BGIMG" value="Buy"></div>
                                                                    </div>
                                                                   
                                                                    

                                                                    <?php } ?>
                                                                </div>
                                                            <?php echo $this->Form->end(); ?>
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


                                            </div>
                                        </section>
                                    </section></div>
                                <script>
                                    $(function () {
                                        $(".fancybox").fancybox({
                                            'scroll': false,
                                            'transitionIn': 'elastic',
                                            'transitionOut': 'elastic',
                                            'openSpeed': 250
                                        });
                                        $('#GameBreedShopForm').validate();
                                        $('#UserKennelSpaceShopForm').validate();
                                        $('#UserLicenceShopForm').validate();
                                    });

                                    function get_space_price(spaceId) {
                                        if (spaceId) {
                                            var url = '<?php echo $this->webroot; ?>shop/kennel_space_prices/' + spaceId;
                                            $.get(url, function (data) {
                                                $('#kennel_prices').html(data);
                                            });
                                        }
                                    }

                                    function get_employer_licence_info(licenceId) {
                                        if (licenceId) {
                                            var url = '<?php echo $this->webroot; ?>shop/employer_licence_prices/' + licenceId;
                                            $.get(url, function (data) {
                                                $('#licence_prices').html(data);
                                            });
                                        }
                                    }

                                    function get_energybone_price(energyBoneId) {
                                        if (energyBoneId) {
                                            var url = '<?php echo $this->webroot; ?>shop/energybone_prices/' + energyBoneId;
                                            $.get(url, function (data) {
                                                $('#energy_bone_prices').html(data);
                                            });
                                        }
                                    }

                                    function get_medal_price(medalId) {
                                        if (medalId) {
                                            var url = '<?php echo $this->webroot; ?>shop/retirement_medal_prices/' + medalId;
                                            $.get(url, function (data) {
                                                $('#medal_prices').html(data);
                                            });
                                        }
                                    }
                                    function get_ribbon_price(ribbonId) {
                                        if (ribbonId) {
                                            var url = '<?php echo $this->webroot; ?>shop/ribbon_prices/' + ribbonId;
                                            $.get(url, function (data) {
                                                $('#ribbon_prices').html(data);
                                            });
                                        }
                                    }
                                    function get_fund_price(fund) {
                                        if (fund) {
                                            var url = '<?php echo $this->webroot; ?>shop/fund_prices/' + fund;
                                            $.get(url, function (data) {
                                                $('#fund_prices').html(data);
                                            });
                                        }
                                    }

                                    function show_img(id) {
                                        $('#img_div').html("<div><img src='<?php echo $this->webroot; ?>img/loader.gif'></div>");

                                        var url = "<?php echo $this->webroot; ?>shop/background_images/" + id;
                                        $.get(url, function (data) {
                                            $('#img_div').html(data);
                                            $('#bkImg').trigger('click');
                                        });
                                    }

                                    function update_comment(data, textStatus) {

                                        if (textStatus == 'success') {
                                            var jdata = $.parseJSON(data);
                                            var st = jdata.status;
                                            if (st == 1) {
                                                $('#msg').addClass('success');
                                            } else {
                                                $('#msg').addClass('error');
                                            }
                                            $('#msg').html(jdata.message);

                                        }
                                    }

                                    function check_pet_availability() {

                                        var pet_id = $('#GameBreedBreedId').val();
                                        var pet_sex = $('#GameBreedGender').val();

                                        if (pet_id != "" && pet_sex != "") {

                                            $.post('<?php echo $this->webroot . 'shop/check_pet_availability'; ?>', {pet_breed_id: pet_id, gender: pet_sex}, function (resp) {
                                                if (resp == 1) {
                                                    alert('Congratulations! Selected breed is available.');
                                                    $('#pet_buy').show();
                                                } else {
                                                    alert('Sorry! Selected breed is not available currently.');
                                                    $('#pet_buy').hide();
                                                }
                                            });

                                        } else {
                                            alert('Please select breed and gender!');
                                        }

                                    }

                                    function check_space()
                                    {
                                        var dogs = $("dogs_total_count").text();
                                        var space = $("sapce").text();
                                        if(dogs < space)
                                        {
                                            return true;
                                        }
                                        else
                                        {
                                            alert("Please Buy more Kennel Spaces!!!")
                                            return false;
                                        }
                                    }
                                </script>

                                <style>
                                    .bk_img {
                                        display:inline;
                                    }
                                    .bk_img > li {
                                        padding: 5px;
                                    }
                                    .bk_img img {
                                        height:205px;
                                        width:233px;
                                    }

                                    .background_img_frm input[type="submit"] {
                                        background: #fff none repeat scroll 0 0;
                                        border: 1px solid #bbb;
                                        cursor: pointer;
                                        padding: 5px 10px;
                                        width: 20%;
                                    }
                                    #pet_buy{ display: none;}
                                    .common_box{  background: rgb(204, 204, 204) none repeat scroll 0% 0%; padding: 5px; border-radius: 5px; opacity: 0.9;}
                                </style>