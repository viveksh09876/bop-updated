<!--<script src="http://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.7/css/jquery.dataTables.css">
-->

<!--main content start-->
<section id="main-content">
    <section class="wrapper">
    <!--For header of every div-->
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
            <div class="pt panel panel-default" style="100%">
            <?php echo $this->Session->flash(); ?>
            <div class="row">
                    <!-- TWITTER PANEL -->


                    <div class="panel panel-default" style="margin:36px;">
                        <div class="panel-heading">VETERINARIAN</div>
                        <div class="panel-body" style="text-align:center;">
                            <img src="<?php echo $this->webroot; ?>files/kennel_banners/<?php echo $kennelData['User']['vet_banner']; ?>" style="max-width:100%">
                        </div>
                    </div>



            </div><!-- /row -->
            
            <form action="<?php echo Router::url('/',true).'vet/save_shot';?>" method="post">
                <div class="row">
                    <!-- TWITTER PANEL -->
                    <div class="panel panel-default" style="margin:36px;">
                        <div class="panel-heading">SHOT / CHECKUP ($75)</div>
                        <div class="panel-body">
                            <p>Shots and checkup need to be done every month. You can not enter shows unless you have a Checkup and Shots</p>
                            	<select name="breed">
	                    	    <option selected disabled>--Select Dog--</option>
	                    	    <?php 
		                           if($allBreeds) {
		                             foreach($allBreeds as $brd){
		                                 echo '<option value="' . $brd['GameBreed']['id'] . '">' . $brd['GameBreed']['name'] . '</option>';
		                             }
		                           } ?>
	                    	</select>
	                    	<?php 
	                    	if ($this->Session->read('Auth.User.funds') >= 75) {
	                    	    echo '<input type="submit" value="VET" class="btn btn-primary">';
	                    	} else {
	                    	    echo "You do not have sufficent fund. Please add some funds to enable checkup.";
	                    	}
	                    	?>
                            
                        </div>
                    </div>
                </div><!-- /row -->
	    </form>
	    <form action="<?php echo Router::url('/',true).'vet/save_test';?>" method="post">
                <div class="row">
                    <div class="">
                        <div class="panel panel-default" style="margin:36px;">
                        <div class="panel-heading">DNA TESTING / HEALTH TESTS ($65)</div>
                            <div class="panel-body">
                            	<p>DNA testing is done once in a Dogs lifetime to Fine, Color, and Marking Traits.</p>
                            	<p>Health test are done once in Dogs life and gives a over all score for Eyes, Heart, Temp, Hip.</p>
                            	<select name="test_type">
                            	    <option selected disabled>--Select Test--</option>
                            	    <option value="1">Health Test</option>
                            	    <option value="2">B Locus</option>
                            	    <option value="3">D Locus</option>
                            	    <option value="4">E Locus</option>
                            	    <option value="5">S Locus</option>
                            	</select>
                            	<select name="breed">
                            	    <option selected disabled>--Select Dog--</option>
                            	    <?php
		                           if($allBreeds) {
		                             foreach($allBreeds as $brd){
		                                 echo '<option value="' . $brd['GameBreed']['id'] . '">' . $brd['GameBreed']['name'] . '</option>';
		                             }
		                           } ?>
                            	</select>
                            	<?php 
	                    	if ($this->Session->read('Auth.User.funds') >= 65) {
                            	    echo '<input type="submit" value="Test" class="btn btn-primary">';
                            	} else {
                            	    echo "Please add some funds for tests";
                            	}
                            	?>
                            </div>
                        </div>
                    </div>
                </div><!-- /row -->
            </form>
                
            <form action="<?php echo Router::url('/',true).'vet/save_spay';?>" method="post">
                <div class="row">
                    <div class="">
                        <div class="panel panel-default" style="margin:36px;">
                        <div class="panel-heading">SPAY / NEUTER ($50)</div>
                            <div class="panel-body">
                            	<p>Here you can Spay/ Neuter your dog. Once done is Inreversable.</p>
                            	<select name="breed">
                            	    <option selected disabled>--Select Dog--</option>
                            	    <?php
		                           if($allBreeds) {
		                             foreach($allBreeds as $brd){
		                                 echo '<option value="' . $brd['GameBreed']['id'] . '">' . $brd['GameBreed']['name'] . '</option>';
		                             }
		                           } ?>
                            	</select>
                            	<?php 
	                    	if ($this->Session->read('Auth.User.funds') >= 50) {
                            	    echo '<input type="submit" value="SPAY / NEUTER" class="btn btn-primary">';
                            	} else {
                            	    echo "Please add some funds for Spay";
                            	}
                            	?>
                            </div>
                        </div>
                    </div>
                </div><!-- /row -->
            </form>
                
	    <form action="<?php echo Router::url('/',true).'vet/save_groom';?>" method="post">
                <div class="row">
                    <div class="">
                        <div class="panel panel-default" style="margin:36px;">
                        <div class="panel-heading">GROOMER ($10)</div>
                            <div class="panel-body">
                            	<p>Groomers help show your dogs potential in the show ring.</p>
                            	<p>Wash, Dry, Comb, Cut, Clip, Nail, Trimming.. </p>
                            	<select name="breed">
                            	    <option selected disabled>--Select Dog--</option>
                            	    <?php
		                           if($allBreeds) {
		                             foreach($allBreeds as $brd){
		                                 echo '<option value="' . $brd['GameBreed']['id'] . '">' . $brd['GameBreed']['name'] . '</option>';
		                             }
		                           } ?>
                            	</select>
                            	<?php 
	                    	if ($this->Session->read('Auth.User.funds') >= 10) {
                            	    echo '<input type="submit" value="Groom" class="btn btn-primary">';
                            	} else {
                            	    echo "Please add some funds for Grooming";
                            	}
                            	?>
                            </div>
                        </div>
                    </div>
                </div><!-- /row -->
            </form>
                
            </div><!-- /col-lg-9 END SECTION MIDDLE -->
        </div><!-- /col-lg-3 -->
    </section>
</section>
