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
            <div class="col-lg-8 pt">


                <div class="row">
                    <!-- TWITTER PANEL -->


                    <div class="panel panel-default" style="margin-left:36px;">
                        <div class="panel-heading">KENNEL BANNER</div>
                        <div class="panel-body">
                            <img src="<?php echo $this->webroot; ?>files/kennel_banners/<?php echo $kennelData['User']['kennel_banner']; ?>">
                        </div>
                    </div>



                </div><!-- /row -->

                <div class="row">
                    <?php echo $this->Session->flash(); ?>
                    <div class="">
                        <div class="panel panel-default" style="margin-left:36px;">
                            <div class="panel-heading">KENNEL DESCRIPTION</div>
                            <div class="panel-body">
                                <?php echo $kennelData['User']['kennel_desc']; ?>
                            </div>
                        </div>
                    </div>
                    <!-- TWITTER PANEL -->



                </div><!-- /row -->

                <div class="row">


                    <!------------------------------------->
                    <style>

                        /*  bhoechie tab */
                        div.bhoechie-tab-container{
                            z-index: 10;
                            background-color: #ffffff;
                            padding: 0 !important;
                            border-radius: 4px;
                            -moz-border-radius: 4px;
                            border:1px solid #ddd;
                            margin-top: 20px;
                            margin-left: 50px;
                            -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
                            box-shadow: 0 6px 12px rgba(0,0,0,.175);
                            -moz-box-shadow: 0 6px 12px rgba(0,0,0,.175);
                            background-clip: padding-box;
                            opacity: 0.97;
                            filter: alpha(opacity=97);
                        }
                        div.bhoechie-tab-menu{
                            padding-right: 0;
                            padding-left: 0;
                            padding-bottom: 0;
                        }
                        div.bhoechie-tab-menu div.list-group{
                            margin-bottom: 0;
                        }
                        div.bhoechie-tab-menu div.list-group>a{
                            margin-bottom: 0;
                        }
                        div.bhoechie-tab-menu div.list-group>a .glyphicon,
                        div.bhoechie-tab-menu div.list-group>a .fa {
                            color: #5A55A3;
                        }
                        div.bhoechie-tab-menu div.list-group>a:first-child{
                            border-top-right-radius: 0;
                            -moz-border-top-right-radius: 0;
                        }
                        div.bhoechie-tab-menu div.list-group>a:last-child{
                            border-bottom-right-radius: 0;
                            -moz-border-bottom-right-radius: 0;
                        }
                        div.bhoechie-tab-menu div.list-group>a.active,
                        div.bhoechie-tab-menu div.list-group>a.active .glyphicon,
                        div.bhoechie-tab-menu div.list-group>a.active .fa{
                            background-color: #5A55A3;
                            background-image: #5A55A3;
                            color: #ffffff;
                        }
                        div.bhoechie-tab-menu div.list-group>a.active:after{
                            content: '';
                            position: absolute;
                            left: 100%;
                            top: 50%;
                            margin-top: -13px;
                            border-left: 0;
                            border-bottom: 13px solid transparent;
                            border-top: 13px solid transparent;
                            border-left: 10px solid #5A55A3;
                        }

                        div.bhoechie-tab-content{
                            background-color: #ffffff;
                            /* border: 1px solid #eeeeee; */
                            padding-left: 20px;
                            padding-top: 10px;
                        }

                        div.bhoechie-tab div.bhoechie-tab-content:not(.active){
                            display: none;
                        }
                    </style>
                    <script>
                        $(document).ready(function () {
                            $("div.bhoechie-tab-menu>div.list-group>a").click(function (e) {
                                e.preventDefault();
                                $(this).siblings('a.active').removeClass("active");
                                $(this).addClass("active");
                                var index = $(this).index();
                                $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
                                $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
                            });
                        });
                    </script>
                    <div class="">
                        <div class="row">
                            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11 bhoechie-tab-container">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 bhoechie-tab-menu">
                                    <div class="list-group">
                                        <a href="#" class="list-group-item active text-center">
                                            DOGS
                                        </a>
                                        <a href="#" class="list-group-item text-center">
                                            BITCH
                                        </a>
                                        <a href="#" class="list-group-item text-center">
                                            PUPPY
                                        </a>
                                        <a href="#" class="list-group-item text-center">
                                            RETIRED
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 bhoechie-tab">
                                    <!-- flight section -->
                                    <div class="bhoechie-tab-content active">
                                        <!-- -->
                                        <div class="card-body">
<table id="breed_dogs" class="display" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th >S.No.</th>
                                        <th>Name</th>
                                        <th>Age</th>
                                        <th>Breed</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                            </table>

                                            
                                        </div>
                                        <!-- -->

                                    </div>
                                    <!-- train section -->
                                    <div class="bhoechie-tab-content">
                                        <!-- -->
                                        <div class="card-body">
                                            <table id="breed_bitches" class="display" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>S.No.</th>
                                        <th>Name</th>
                                        <th>Age</th>
                                        <th>Breed</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                            </table>
                                        </div>
                                        <!-- -->
                                    </div>

                                    <!-- hotel search -->
                                    <div class="bhoechie-tab-content">
                                        <!-- -->
                                        <div class="card-body">
                                            <table id="breed_puppies" class="display" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>S.No.</th>
                                        <th>Name</th>
                                        <th>Age</th>
                                        <th>Breed</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                            </table>
                                           
                                        </div>
                                        <!-- -->
                                    </div>
                                    <div class="bhoechie-tab-content">
                                        <!-- -->
                                        <div class="card-body">
                                            <table id="breed_retired" class="display" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>S.No.</th>
                                        <th>Name</th>
                                        <th>Age</th>
                                        <th>Breed</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                            </table>
                                        </div>
                                        <!-- -->
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!------------------------------------->





                </div><!-- /row -->

                <div class="row">
                    <!-- TWITTER PANEL -->

                    <div class="col-md-12 mb">
                        <!-- INSTAGRAM PANEL -->
                        <div class="instagram-panel pn" style="background-image: none !important">
                            <!-- <i class="fa fa-instagram fa-4x"></i> -->
                            <div class="container">

                                <ul class="tabs">
                                    <li class="tab-link current" data-tab="tab-1">Awards</li>
                                    <li class="tab-link" data-tab="tab-2">Achievements</li>
                                    <li class="tab-link" data-tab="tab-3">Inventory</li>
                                </ul>

                                <div id="tab-1" class="tab-content current">
                                    Award Section
                                </div>
                                <div id="tab-2" class="tab-content">
                                    Achievements Section
                                </div>
                                <div id="tab-3" class="tab-content">
                                    Inventory Section
                                </div>

                                <div id="section_detail_awards" class="section_detail">
                                    <table id="section_awards" class="display" cellspacing="0" style="width: 75%; margin-left: 12%;">
                                        <thead>
                                            <tr>
                                                <th>S.No.</th>
                                                <th>Title</th>
                                                <th>List</th>
                                                <th>Status</th>                                                
                                            </tr>
                                        </thead>
                                    </table>
                                </div>

                                <div id="section_detail_hidden_achievement" class="section_detail">
                                    <table id="section_hidden_achievement" class="display" cellspacing="0" style="width: 75%; margin-left: 12%;">
                                        <thead>
                                            <tr>
                                                <th>S.No.</th>
                                                <th>List</th>
                                                <th>Status</th>                                                
                                            </tr>
                                        </thead>
                                    </table>
                                </div>

                                <div id="section_detail_inventory" class="section_detail">
                                    <table id="section_details" class="display" cellspacing="0" style="width: 75%; margin-left: 12%;">
                                        <thead>
                                            <tr>
                                                <th >S.No.</th>
                                                <th>Detail</th>                                               
                                                <th>Item</th>
                                                <th>Dog Name</th>
                                                <th>Amount</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div><!-- container -->
                        </div>
                    </div><!-- /col-md-4 -->

                </div><!-- /row -->

            </div><!-- /col-lg-9 END SECTION MIDDLE -->

            <!-- ------------- -->

            <script>
                $(document).ready(function () {
                    $loop = 0;
                    $.ajax({
                        url: "<?php echo $this->Html->url(array("controller" => "messages", "action" => "getmessages")) ?>",
                        success: function (data) {
                            var obj = jQuery.parseJSON(data);
                            html = '';
                            for (k in obj) {
                                img = obj[k]['sender']["photo"];
                                time = obj[k]['Message']["created"];
                                name = obj[k]['sender']["first_name"] + " " + obj[k]['sender']["last_name"];
                                message = obj[k]['Message']["content"];
                                //alert(img);
                                html += '<div class="media msg">\n\
                                <a href="#" class="pull-left">\n\
                                    <img width="60px" height="62px" alt="" src="<?php echo $this->webroot; ?>/files/user_images/' + img + '">\n\
                                </a>\n\
                                <div class="media-body">\n\
                                    <small class="pull-right time"><i class="fa fa-clock-o"></i> ' + time + '</small>\n\
                                    <h5 class="media-heading">' + name + '</h5>\n\
                                    <small class="col-lg-10">' + message + '</small>\n\
                                </div>\n\
                            </div>';
                            }

                            $("#last_node").append(html);
                            setInterval(function () {
                                $.ajax({
                                    url: "<?php echo $this->Html->url(array("controller" => "messages", "action" => "getlatestmessages")) ?>",
                                    success: function (data) {
                                        var obj = jQuery.parseJSON(data);
                                        html = '';
                                        for (k in obj) {
                                            img = obj[k]['sender']["photo"];
                                            time = obj[k]['Message']["created"];
                                            name = obj[k]['sender']["first_name"] + " " + obj[k]['sender']["last_name"];
                                            message = obj[k]['Message']["content"];
                                            //alert(img);
                                            html += '<div class="media msg">\n\
                                <a href="#" class="pull-left">\n\
                                    <img width="60px" height="62px" alt="" src="<?php echo $this->webroot; ?>/files/user_images/' + img + '">\n\
                                </a>\n\
                                <div class="media-body">\n\
                                    <small class="pull-right time"><i class="fa fa-clock-o"></i> ' + time + '</small>\n\
                                    <h5 class="media-heading">' + name + '</h5>\n\
                                    <small class="col-lg-10">' + message + '</small>\n\
                                </div>\n\
                            </div>';
                                        }

                                        $("#last_node").append(html);
                                        $('#chatWrap').animate({
                                            scrollTop: $('#last_node').height()
                                        }, 1000);
                                    }
                                });
                            }, 5000);

                        }
                    })

                    $("#send_msg").click(function () {
                        cont = $("#MessageContent").val();
                        $.ajax({
                            url: "<?php echo $this->Html->url(array("controller" => "messages", "action" => "post_message_text")) ?>",
                            data: {"message": cont},
                            type: "post",
                            success: function (data) {

                                $("#MessageContent").val('');



                            }
                        });
                    });


                });
            </script>

            <div class="message-wrap col-lg-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Group Chat</div>
                    <div class="panel-body">


                        <div style="height:250px; overflow: auto;" class="msg-wrap" id="chatWrap">
                            <div id="last_node">&nbsp;</div>




                        </div>
                        <div class="send-wrap ">
                            <div class="input textarea"><textarea id="MessageContent" cols="30" placeholder="Write message here..." rows="3" class="form-control send-message" name="data[Message][content]"></textarea></div>
                        </div>
                        <div class="btn-panel">
                            <input type="button" id="send_msg" value="Send Message" class="col-lg-4 text-right btn   send-message-btn pull-right">
                        </div>

                    </div>

                </div>
            </div>                            

            <!-- ------------- -->

            <?php //echo $this->element('right_sidebar'); ?>


        </div><!-- /col-lg-3 -->

    </section>
</section>

<script>
    $(document).ready(function () {

        $('#container').addClass('kennel_page');

        $('#breed_dogs').DataTable({
            "ajax": '<?php echo $this->webroot; ?>kennels/purchased_dogs',
            "autoWidth": false,
            "columns": [
                { "width": "5%" },
                { "width": "30%" },
                { "width": "20%" },
                { "width": "40%" },
                { "width": "5%" }
          
            ]
        });

        $('#breed_bitches').DataTable({
            "ajax": '<?php echo $this->webroot; ?>kennels/purchased_bitches',
            "autoWidth": false,
            "columns": [
                { "width": "5%" },
                { "width": "30%" },
                { "width": "20%" },
                { "width": "40%" },
                { "width": "5%" }
            ]
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

        $('#breed_retired').DataTable({
            "ajax": '<?php echo $this->webroot; ?>kennels/purchased_retired',
            "autoWidth": false,
            "columns": [
                { "width": "5%" },
                { "width": "30%" },
                { "width": "20%" },
                { "width": "40%" },
                { "width": "5%" }
            ]
        });

        $('#section_details').DataTable({
            "ajax": '<?php echo $this->webroot; ?>kennels/inventory',
            "autoWidth": false,
            "columns": [
                { "width": "10%" },
                { "width": "30%" },                
                { "width": "30%" },
                { "width": "20%" },
                { "width": "10%" }
            ]
        });

        $('#section_hidden_achievement').DataTable({
            "ajax": '<?php echo $this->webroot; ?>kennels/hidden_achievement',
            "autoWidth": false,
            "columns": [
                { "width": "5%" },
                { "width": "40%" },
                { "width": "15%" }
            ]
        });

        $('#section_awards').DataTable({
            "ajax": '<?php echo $this->webroot; ?>kennels/awards',
            "autoWidth": false,
            "columns": [
                { "width": "5%" },
                { "width": "20%" },
                { "width": "20%" },
                { "width": "10%" }
            ]
        }); 
        
        $('#section_detail_hidden_achievement').hide();
        $('#section_detail_inventory').hide();



        $('ul.tabs li').click(function () {
            var tab_id = $(this).attr('data-tab');

            $('ul.tabs li').removeClass('current');
            $('.tab-content').removeClass('current');

            $(this).addClass('current');
            $("#" + tab_id).addClass('current');
        });
    });

$('.tab-link').click(function(){
    if($(this).html() == 'Achievements')
    {
    
        $('#section_detail_hidden_achievement').show();
        $('#section_detail_awards').hide();
        $('#section_detail_inventory').hide();

    }
    else if($(this).html() == 'Inventory')
    {
        $('#section_detail_hidden_achievement').hide();
        $('#section_detail_awards').hide();
        $('#section_detail_inventory').show();
        
    }
    else if($(this).html() == 'Awards')
    {
        $('#section_detail_hidden_achievement').hide();
        $('#section_detail_inventory').hide();
        $('#section_detail_awards').show();
    }
    
});
</script>

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
