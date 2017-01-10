<style>
    .row-fluid{  height: 531px;

    position: absolute;
   }
   
   .main_container ul li {
    float: left;
    margin: 4px 0;
    width: 33%;
}
</style>

<!--sidebar start-->
 <?php echo $this->element('left_sidebar'); ?>
      <!--sidebar end-->
<!--main content start-->
<section id="main-content">
<section class="wrapper">
  <div class="row">
      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 pt main_container">
          <h2>Show Participants</h2>
         <div class="row-fluid" >
             <?php if($partipants){  ?>
            <ul class="thumbnails">
                <?php foreach($partipants as $pt){?>
              <li class="span4">
                <div class="thumbnail">
                  <img alt="300x200" data-src="holder.js/300x200" style="width: 300px; height: 200px;" src="<?php echo $this->webroot; ?>files/breeds/big/<?php echo $pt['BreedImage']['filename']; ?>">
                  <div class="caption">
                    <h4>Name: <?php echo $pt['GameBreed']['name']; ?></h4>
                    <p>Owner: <?php echo $pt['User']['first_name'].' '.$pt['User']['last_name']; ?></p>
                    <h4>Genetic Traits: </h4> <!--<a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>--->
                    <p>General: <?php echo $pt['GameBreed']['gen']; ?></p>
                    <p>Head: <?php echo $pt['GameBreed']['head']; ?></p>
                    <p>Body: <?php echo $pt['GameBreed']['body']; ?></p>
                    <p>Forequarters: <?php echo $pt['GameBreed']['forequarters']; ?></p>
                    <p>Hindquarters: <?php echo $pt['GameBreed']['hindquarters']; ?></p>
                    <p>Coat: <?php echo $pt['GameBreed']['coat']; ?></p>
                    <p>Temperament: <?php echo $pt['GameBreed']['temperament']; ?></p>
                  </div>
                </div>
              </li>
                      <?php } ?>
            </ul>
             <?php }else{ ?>
             <div class="error">No participants yet.</div>
             <?php } ?>
          </div>
      </div>
 <!-- /col-lg-9 END SECTION MIDDLE -->
 <!--sidebar start-->
 <?php echo $this->element('right_sidebar'); ?>

 <!--sidebar end-->

