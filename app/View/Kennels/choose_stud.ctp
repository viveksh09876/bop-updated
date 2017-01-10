<style>
.listing th, .listing td{ padding: 7px}
.maintabs{ background: #fff;} 
</style>

 <?php echo $this->element('left_sidebar'); ?>
<!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <div class="row">
                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 pt main_container">
                   <div class="color-box maintabs">
                            
        
           <div id="tab-1" class="tab-content current">
			<h3>Select Stud</h3>	
			<table  width="100%" cellspacing="15" cellpadding="25" border="1" align="center" class="listing">
              <tr>
				<th align="left">Image</th>
				<th align="left">Details</th>
              </tr>
	    <?php
			foreach ($breeds as $breed){ ?>
			<tr>
				<td align="left" valign="middle" style="width: 30%;"><?php   $image=$breed['Breed']['BreedImages']['0']['filename_adult'];  ?>
                           <img style="height: auto;" src="<?php echo SITE_URL;?>timthumb.php?src=files/breeds/<?php echo $image; ?>&w=160">&nbsp;
				</td>
				
				<td align="left" valign="middle" style="padding:0 !important" >
                  <table border="1" cellspacing="2" cellpadding="2" style="width: 100%">
						 <tr>
							<td>Name</td>
							<td><?php echo $breed['GameBreed']['name']; ?></td>
						</tr>

						<tr>
							<td>General</td>
							<td><div class="val_div" style="width: <?php echo $breed['GameBreed']['gen'].'px'; ?>"></div></td>
						</tr>
						<tr>
							<td>Head</td>
							<td><div class="val_div" style="width: <?php echo $breed['GameBreed']['head'].'px'; ?>"></div></td>
						</tr>
						<tr>
							<td>Body</td>
							<td><div class="val_div" style="width: <?php echo $breed['GameBreed']['body'].'px'; ?>"></div></td>
						</tr>
						<tr>
							<td>Forequaters</td>
							<td><div class="val_div" style="width: <?php echo $breed['GameBreed']['forequarters'].'px'; ?>"></div></td>
						</tr>
						<tr>
							<td>Hindquaters</td>
							<td><div class="val_div" style="width: <?php echo $breed['GameBreed']['hindquarters'].'px'; ?>"></div></td>
						</tr>
						<tr>
							<td>Coat</td>
							<td><div class="val_div" style="width: <?php echo $breed['GameBreed']['coat'].'px'; ?>"></div></td>
						</tr>
						<tr>
							<td>Temperament</td>
							<td><div class="val_div" style="width: <?php echo $breed['GameBreed']['temperament'].'px'; ?>"></div></td>
						</tr>
						<tr>
							<td>Heart</td>
							<td><div class="val_div" style="width: <?php echo $breed['GameBreed']['heart'].'px'; ?>"></div></td>
						</tr>
						<tr>
							<td>Hip</td>
							<td><div class="val_div" style="width: <?php echo $breed['GameBreed']['hip'].'px'; ?>"></div></td>
						</tr>
						<tr>
							<td>Eyes</td>
							<td><div class="val_div" style="width: <?php echo $breed['GameBreed']['eyes'].'px'; ?>"></div></td>
						</tr>
						<tr>
							<td>Thyroid</td>
							<td><div class="val_div" style="width: <?php echo $breed['GameBreed']['thyroid'].'px'; ?>"></div></td>
						</tr>
	
			
					</table> 
				</td>
			</tr>
			<?php } ?>
			
			<tr><td colspan="2">
				<div class="select-for-breed"><a href="<?php echo $this->webroot.'kennels/select_stud/'.$bitch_id.'/'.$breed['GameBreed']['id']; ?>">Select for breed</a></div>
			</td></tr>
		</table>	
                            </div>

       

    </div>
    </div>
              
	 <!-- /col-lg-9 END SECTION MIDDLE -->
	 <?php echo $this->element('right_sidebar'); ?>
    </div>
  <section>
</section>
