<script src="http://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.7/css/jquery.dataTables.css">

<!--sidebar start-->
 <?php echo $this->element('left_sidebar'); ?>
      <!--sidebar end-->

  <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-9 pt">


                    <div class="row">
                        <!-- TWITTER PANEL -->

                        <div class="col-md-12 mb">
                            <!-- INSTAGRAM PANEL -->
                            <div class="instagram-panel pn">&nbsp;
                                <!-- <i class="fa fa-instagram fa-4x"></i>
                                <p>KENNEL BANNER</p> -->
                                <img src="<?php echo $this->webroot; ?>files/kennel_banners/<?php echo $kennelData['User']['kennel_banner'];?>">
                            </div>
                        </div><!-- /col-md-4 -->

                    </div><!-- /row -->

                    <div class="row">
                        <!-- TWITTER PANEL -->
                      <?php echo $this->Session->flash(); ?>
                        <div class="col-md-12 mb">
                            <!-- INSTAGRAM PANEL -->
                            <div class="instagram-panel pn" style="opacity:0.70; background-image: none !important">
                                <!-- <i class="fa fa-instagram fa-4x"></i> -->
                                <p>KENNEL DESCRIPTION</p>
                                <?php echo $kennelData['User']['kennel_desc'];?>
                            </div>
                        </div><!-- /col-md-4 -->

                    </div><!-- /row -->

                    <div class="row">
                        <div class="col-md-12 mb tabbable tabs-left" style="margin-bottom: 25px;">
                            <ul class="nav nav-tabs">
                              <li class="active"><a href="#a" data-toggle="tab">DOGS</a></li>
                              <li><a href="#b" data-toggle="tab">BITCH</a></li>
                              <li><a href="#c" data-toggle="tab">PUPPY</a></li>
                              <li><a href="#d" data-toggle="tab">RETIRED</a></li>
                            </ul>
                            <div class="tab-content breedlist">
                             <div class="tab-pane active " id="a">
                                 <table id="breed_dogs" class="display" cellspacing="0" >
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
                             <div class="table tab-pane pull-left" id="b">
                                   <table id="breed_bitches" class="display" cellspacing="0">
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
                             <div class="tab-pane pull-left" id="c">
	                             <table id="breed_puppies" class="display" cellspacing="0">
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
                             <div class="tab-pane" id="d">LIST OF RETIRED HERE </div>
                            </div>
                        </div>
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
                                    <li class="tab-link" data-tab="tab-2">Hidden Achievements</li>
                                    <li class="tab-link" data-tab="tab-3">Inventory</li>
                            </ul>

                            <div id="tab-1" class="tab-content current">
                                   Award Section
                            </div>
                            <div id="tab-2" class="tab-content">
                                    Hidden Achievements Section
                            </div>
                            <div id="tab-3" class="tab-content">
                                   Inventory Section
                            </div>
                            

                    </div><!-- container -->
                            </div>
                        </div><!-- /col-md-4 -->

                    </div><!-- /row -->

                  </div><!-- /col-lg-9 END SECTION MIDDLE -->


     
    <?php echo $this->element('right_sidebar'); ?>


</div><!-- /col-lg-3 -->
              </div><!--/row -->
          </section>
      </section>

  <script>
      $(document).ready(function() {
		 
		$('#container').addClass('kennel_page');	
		  
        $('#breed_dogs').dataTable( {
            "ajax": '<?php echo $this->webroot;?>kennels/purchased_dogs'
        } );
        $('#breed_bitches').dataTable( {
            "ajax": '<?php echo $this->webroot;?>kennels/purchased_bitches'
        } );
        $('#breed_puppies').dataTable( {
            "ajax": '<?php echo $this->webroot;?>kennels/purchased_puppies'
        } );
        
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
            width: 81%;
    }

   .container .tab-content.current{
            display: inherit;
    }
	  </style>