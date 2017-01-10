<!--main content start-->
<section id="main-content" style="margin:0">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pt main_container">
                <div class="dog-page">


                    <?php
                    echo $this->Session->flash();

                    $img_bg = "../../img/kennel-bg.png";
                    if (!empty($purchase_img)) {
                        $img_bg = $this->webroot . "/files/pet_background_img/$purchase_img";
                    }
                    ?>
                    <style>
                        .val_div_box {
                            border: 1px solid #ccc;
                            border-radius: 4px;
                            width: 100%;
                        }

                        .error{
                            text-align: center;
                        }

                        dog-left .val_div {
                            border-radius: 4px;
                            height: 16px;
                        }
                        .val_div {
                            /*background: rgba(0, 0, 0, 0) -moz-linear-gradient(left center , #00ff00, #330099) repeat scroll 0 0;*/
			
                            height: 21px;
                        }
                        ul li {
                            list-style: outside none none;
                        }
                        .main_container ul li {
                            float: left;
                            margin: 4px 0;
                            width: 100%;
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
                            background: url('<?php echo $img_bg; ?>') no-repeat;
                            background-size: 100% auto;
                            background-position-y: 81%;
                        }
                        .dog-main .picpace-holder span{ display:table-cell; height:258px; width:1000px; vertical-align:middle;}

                        .maintabs .tab-content.current {
                            display: inherit;
                            height: 450px;
                            overflow: auto;
                        }

                        .picpace-holder > img {
                            padding: 48px 25px;
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
                            border: 1px solid #bbb;
                            color: #333;
                            font-size: 14px;
                            margin: 10px 0;
                            padding: 2px 10px;
                        }
                    </style>
                    <div class="dog-left">
                        <h4 class="text-center" style="margin:0px; padding-bottom: 10px;padding-top: 10px; background-color: #B378D3; color:#fff;"> GENETIC TRAITS</h4>
                        <ul>
                            <li>
                                <label>General(<?php 
                                    // if (isset($breed['GameBreed'], $breed['GameBreed']['gen'])){
                                        echo $breed['GameBreed']['gen']. '/100';
                                    // }
                                    // else
                                    // {
                                    //     echo '0/100'; 
                                    // } 
                                    ?>)
                                </label>
                                <div class="val_div_box" style="width: <?php echo $breed['GameBreed']['gen'] . 'px'; ?>">
                                    <div class="val_div" style="width: <?php echo $breed['GameBreed']['gen'] . 'px'; ?>">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <label>Head (<?php echo $breed['GameBreed']['head'] . '/100'; ?>)</label>
                                <div class="val_div_box" style="width: <?php echo $breed['GameBreed']['head'] . 'px'; ?>">
                                    <div class="val_div" style="width: <?php echo $breed['GameBreed']['head'] . 'px'; ?>">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <label>Body (<?php echo $breed['GameBreed']['body'] . '/100'; ?>)</label>
                                <div class="val_div_box" style="width: <?php echo $breed['GameBreed']['body'] . 'px'; ?>">
                                    <div class="val_div" style="width: <?php echo $breed['GameBreed']['body'] . 'px'; ?>">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <label>Forequaters (<?php echo $breed['GameBreed']['forequarters'] . '/100'; ?>)</label>
                                <div class="val_div_box" style="width: <?php echo $breed['GameBreed']['forequarters'] . 'px'; ?>">
                                    <div class="val_div" style="width: <?php echo $breed['GameBreed']['forequarters'] . 'px'; ?>">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <label>Hindquaters (<?php echo $breed['GameBreed']['hindquarters'] . '/100'; ?>)</label>
                                <div class="val_div_box" style="width: <?php echo $breed['GameBreed']['hindquarters'] . 'px'; ?>">
                                    <div class="val_div" style="width: <?php echo $breed['GameBreed']['hindquarters'] . 'px'; ?>">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <label>Coat (<?php echo $breed['GameBreed']['coat'] . '/100'; ?>)</label>
                                <div class="val_div_box" style="width: <?php echo $breed['GameBreed']['coat'] . 'px'; ?>">
                                    <div class="val_div" style="width: <?php echo $breed['GameBreed']['coat'] . 'px'; ?>">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <label>Temperament (<?php echo $breed['GameBreed']['temperament'] . '/100'; ?>)</label>
                                <div class="val_div_box" style="width: <?php echo $breed['GameBreed']['temperament'] . 'px'; ?>">
                                    <div class="val_div" style="width: <?php echo $breed['GameBreed']['temperament'] . 'px'; ?>">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <label>Heart (<?php echo $breed['GameBreed']['heart'] . '/100'; ?>)</label>
                                <div class="val_div_box" style="width: <?php echo $breed['GameBreed']['heart'] . 'px'; ?>">
                                    <div class="val_div" style="width: <?php echo $breed['GameBreed']['heart'] . 'px'; ?>">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <label>Hip (<?php echo $breed['GameBreed']['hip'] . '/100'; ?>)</label>
                                <div class="val_div_box" style="width: <?php echo $breed['GameBreed']['hip'] . 'px'; ?>">
                                    <div class="val_div" style="width: <?php echo $breed['GameBreed']['hip'] . 'px'; ?>">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <label>Eyes (<?php echo $breed['GameBreed']['eyes'] . '/100'; ?>)</label>
                                <div class="val_div_box" style="width: <?php echo $breed['GameBreed']['eyes'] . 'px'; ?>">
                                    <div class="val_div" style="width: <?php echo $breed['GameBreed']['eyes'] . 'px'; ?>">
                                    </div>
                                </div>
                            </li>

                            <li>
                                <label>Thyroid (<?php echo $breed['GameBreed']['thyroid'] . '/100'; ?>)</label>
                                <div class="val_div_box" style="width: <?php echo $breed['GameBreed']['thyroid'] . 'px'; ?>">
                                    <div class="val_div" style="width: <?php echo $breed['GameBreed']['thyroid'] . 'px'; ?>">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="dog-main">
                        <div class="picpace-holder"> 
                            <?php if (!empty($breed['BreedImages']['filename_adult'])) { ?>
                                <img src="<?php echo SITE_URL; ?>timthumb.php?src=files/breeds/<?php echo $breed['BreedImages']['filename_adult']; ?>&w=600&h=450" width="450" height="450">
                            <?php } ?>
                        </div>
                        <div class="clearfix">&nbsp;</div>
                        <?php if (!empty($dogs)) { ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Breed
                                </div>
                                <div class="panel-body">
                                    <div class="col-sm-5 text-right">
                                        <p>Select From Your Dog Listing</p>
                                        <form id="selectDogForm" name="selectDogForm" method="post" action="<?php echo $this->webroot . 'kennels/select_stud/' . $breed['GameBreed']['id']; ?>">
                                            <select id="select_dog" name="select_dog" >
                                                <option> Select </option>
                                                <?php
                                                if (!empty($dogs)) {
                                                    foreach ($dogs as $dg) 
                                                    {
                                                        // if ($dg['GameBreed']['id'] != $mydog['GameBreed']['id']) {
                                                            // ?>
                                                        <option
                                                            <?php 
                                                            if (!empty($mydog))
                                                            {
                                                                if($dg['GameBreed']['id'] == $mydog['GameBreed']['id']){ ?>
                                                                    selected
                                                                <?php }
                                                            }?>
                                                            value="<?php echo $dg['GameBreed']['id']; ?>"
                                                        >
                                                            <?php echo $dg['GameBreed']['name']; ?>
                                                        </option>
                                                            <?php
                                                        // }
                                                    }
                                                }
                                                ?>
                                            </select>
                                            <input type="submit" value="Select Dog"/>
                                        </form>
                                    </div>
                                    <div class="col-sm-1 text-center">
                                        <p>&nbsp;</p>
                                        OR</div>
                                    <div class="col-sm-6">
                                        <p>Select From The Community Stud Listing For A Fee</p>

                                        <?php echo $this->Form->create(null, array("url" => array("controller" => "kennels", "action" => "purchase_bg", $breed['GameBreed']['id']), "type" => "post")) ?>
                                        <select id="select_dog" name="select_dog">
                                            <option> Select </option>
                                            <?php
                                            if (!empty($allPurchasedDog)) {
                                                foreach ($allPurchasedDog as $dg) {
                                                    ?>
                                                    <option
                                                    <?php 
                                                        if (!empty($mydog)){
                                                            if($dg['GameBreed']['id'] == $mydog['GameBreed']['id']){ ?>
                                                                selected
                                                            <?php }
                                                        }?>
                                                        value="<?php echo $dg['GameBreed']['id']; ?>"
                                                    >
                                                        <?php echo $dg['GameBreed']['name']; ?>
                                                    </option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                        <input type="submit" value="Select Dog"/>
                                        </form>
                                        <p>Cost $300 Game Funds</p>
                                    </div>
                                    <div class="clearfix">&nbsp;</div>
                                    <div class="col-sm-11 text-center">
                                        <?php if (!empty($mydog)) { ?>
                                            <a   href="<?php echo $this->webroot . 'kennels/do_breed/' . @$breed['GameBreed']['id'] . '/' . @$mydog['GameBreed']['id']; ?>" class="btn btn-default">Breed</a>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>




                <div class="clearfix">&nbsp;</div>
                <div class="clearfix">&nbsp;</div>




                <div class="clearfix">&nbsp</div>
                <?php if (isset($mydog) && !empty($mydog)) { ?>
                    <div class="dog-page">

                        <div class="dog-left">
                            <div class="panel panel-default" style="background-color:transparent;border:none;">
                                <div class="panel-heading"><?php echo $mydog['GameBreed']['name']; ?></div>
                                <div class="panel-body">
                                    <ul>

                                        <li>
                                            <label>General(<?php echo $mydog['GameBreed']['gen'] . '/100'; ?>)</label>
                                            <div class="val_div_box" style="width: <?php echo $mydog['GameBreed']['gen'] . 'px'; ?>">
                                                <div class="val_div" style="width: <?php echo $mydog['GameBreed']['gen'] . 'px'; ?>">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <label>Head (<?php echo $mydog['GameBreed']['head'] . '/100'; ?>)</label>
                                            <div class="val_div_box" style="width: <?php echo $mydog['GameBreed']['head'] . 'px'; ?>">
                                                <div class="val_div" style="width: <?php echo $mydog['GameBreed']['head'] . 'px'; ?>">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <label>Body (<?php echo $mydog['GameBreed']['body'] . '/100'; ?>)</label>
                                            <div class="val_div_box" style="width: <?php echo $mydog['GameBreed']['body'] . 'px'; ?>">
                                                <div class="val_div" style="width: <?php echo $mydog['GameBreed']['body'] . 'px'; ?>">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <label>Forequaters (<?php echo $mydog['GameBreed']['forequarters'] . '/100'; ?>)</label>
                                            <div class="val_div_box" style="width: <?php echo $mydog['GameBreed']['forequarters'] . 'px'; ?>">
                                                <div class="val_div" style="width: <?php echo $mydog['GameBreed']['forequarters'] . 'px'; ?>">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <label>Hindquaters (<?php echo $mydog['GameBreed']['hindquarters'] . '/100'; ?>)</label>
                                            <div class="val_div_box" style="width: <?php echo $mydog['GameBreed']['hindquarters'] . 'px'; ?>">
                                                <div class="val_div" style="width: <?php echo $mydog['GameBreed']['hindquarters'] . 'px'; ?>">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <label>Coat (<?php echo $mydog['GameBreed']['coat'] . '/100'; ?>)</label>
                                            <div class="val_div_box" style="width: <?php echo $mydog['GameBreed']['coat'] . 'px'; ?>">
                                                <div class="val_div" style="width: <?php echo $mydog['GameBreed']['coat'] . 'px'; ?>">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <label>Temperament (<?php echo $mydog['GameBreed']['temperament'] . '/100'; ?>)</label>
                                            <div class="val_div_box" style="width: <?php echo $mydog['GameBreed']['temperament'] . 'px'; ?>">
                                                <div class="val_div" style="width: <?php echo $mydog['GameBreed']['temperament'] . 'px'; ?>">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <label>Heart (<?php echo $mydog['GameBreed']['heart'] . '/100'; ?>)</label>
                                            <div class="val_div_box" style="width: <?php echo $mydog['GameBreed']['heart'] . 'px'; ?>">
                                                <div class="val_div" style="width: <?php echo $mydog['GameBreed']['heart'] . 'px'; ?>">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <label>Hip (<?php echo $mydog['GameBreed']['hip'] . '/100'; ?>)</label>
                                            <div class="val_div_box" style="width: <?php echo $mydog['GameBreed']['hip'] . 'px'; ?>">
                                                <div class="val_div" style="width: <?php echo $mydog['GameBreed']['hip'] . 'px'; ?>">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <label>Eyes (<?php echo $mydog['GameBreed']['eyes'] . '/100'; ?>)</label>
                                            <div class="val_div_box" style="width: <?php echo $mydog['GameBreed']['eyes'] . 'px'; ?>">
                                                <div class="val_div" style="width: <?php echo $mydog['GameBreed']['eyes'] . 'px'; ?>">
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <label>Thyroid (<?php echo $mydog['GameBreed']['thyroid'] . '/100'; ?>)</label>
                                            <div class="val_div_box" style="width: <?php echo $mydog['GameBreed']['thyroid'] . 'px'; ?>">
                                                <div class="val_div" style="width: <?php echo $mydog['GameBreed']['thyroid'] . 'px'; ?>">
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="dog-main">
                            <div class="picpace-holder"> 
                                <?php if ($mydog["BreedImages"]["filename_adult"]) { ?>
                                    <img src="<?php echo SITE_URL; ?>timthumb.php?src=files/breeds/<?php echo $mydog["BreedImages"]["filename_adult"]; ?>&w=600&h=450" width="450" height="450">
                                <?php } elseif (!empty($breed['Breed']['BreedImages']['0']['filename_adult'])) {
                                    ?>
                                    <img src="<?php echo SITE_URL; ?>timthumb.php?src=files/breeds/<?php echo $breed['Breed']['BreedImages']['0']['filename_adult']; ?>&w=500&h=450" width="450" height="450>
                                <?php } ?>
                            </div>

                            <!------------------------------------------------>
                            <div class="clearfix">&nbsp</div>



                            <!------------------------------------------------>



                        </div>
                    </div>
                <?php } ?>





            </div>

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


            <!-- /col-lg-9 END SECTION MIDDLE -->
            <?php //echo $this->element('right_sidebar');   ?>
            <script>
                $(document).ready(function () {
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

    </section>
</section>
