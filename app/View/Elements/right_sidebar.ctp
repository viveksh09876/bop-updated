<style>

.sidebar {
  background: #ebebeb;
  border-right: 1px solid #bdbdbd;
 
  height: 100%;
	width: 220px;
}

desc details.active::after {
  content: "";
  display: block;
  width: 26px;
  height: 20px;
  -moz-transform: rotate(62deg) skew(30deg);
  -webkit-transform: rotate(62deg) skew(30deg);
  transform: rotate(62deg) skew(30deg);
  margin-top: -32px;
  margin-left: 177px;
  background: #5FAEDF;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=$lightBlue , endColorstr=$darkBlue);
  background: -webkit-gradient(linear, left top, right bottom, from(#5FAEDF), to(#4889B4));
  background: -moz-linear-gradient(-45deg, #5FAEDF, #4889B4);
  background: -o-linear-gradient(-45deg, #5FAEDF, #4889B4);
  background: linear-gradient(-45deg, #5FAEDF, #4889B4);
  border-top: 1px solid #1D6CAF;
  border-right: 1px solid #0C2D49;
  -webkit-box-shadow: inset 0px 1px 0px 0 rgba(255, 255, 255, 0.2);
  -moz-box-shadow: inset 0px 1px 0px 0 rgba(255, 255, 255, 0.2);
  box-shadow: inset 0px 1px 0px 0 rgba(255, 255, 255, 0.2);
}

.desc details.active a {
  color: white;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.4);
}
.desc details {
	background-color: #F0F0F0;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=$lightColor , endColorstr=$darkColor);
  background-image: -webkit-gradient(linear, left top, left bottom, from(#F0F0F0), to(#DBDBDB));
  background-image: -moz-linear-gradient(top, #F0F0F0, #DBDBDB);
  background-image: -o-linear-gradient(top, #F0F0F0, #DBDBDB);
  background-image: linear-gradient(top, #F0F0F0, #DBDBDB);
  border-bottom: 1px solid #BDBDBD;
  border-top: 1px solid white;
  height: 42px;
  line-height: 42px;
  margin-left: -20px;
}
.desc details a {
  color: #616161;
  display: block;
  margin-left: 20px;
  text-decoration: none;
  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.8);
}
.desc details:last-child {
  -webkit-box-shadow: 0px 2px 10px 0 rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0px 2px 10px 0 rgba(0, 0, 0, 0.1);
  box-shadow: 0px 2px 10px 0 rgba(0, 0, 0, 0.1);
}

}
</style>
<div class="col-lg-3 col-md-3 col-xs-12 col-sm-3 ds dsr sidebar">
<!--COMPLETED ACTIONS DONUTS CHART-->

    <h3 class="desc" <?php if($this->action=='index'){ ?>class="active"<?php } ?>"><a href="<?php echo $this->webroot;?>kennel">MY KENNEL</a></h3>

    <!-- First Action -->
    <div class=" desc  <?php if($this->action=='settings'){ ?>active<?php } ?>" style="margin-top: 75px;">

   <div class="details active">
        <a  href="<?php echo $this->webroot;?>kennels/settings">
              <!-- <i class="fa fa-dashboard"></i> -->
              <span>KENNEL SETTINGS</span>
          </a>
    </div>
    </div>
    <!-- Second Action -->
    <div class="desc  <?php if($this->action=='shop'){ ?>active<?php } ?>">

    <div class="details">
        <a  href="<?php echo $this->webroot;?>shop">
              <!-- <i class="fa fa-dashboard"></i> -->
              <span>SHOP</span>
          </a>
    </div>
    </div>
    <!-- Third Action -->
    <div class="desc <?php if($this->action=='shows'){ ?>active<?php } ?>">

    <div class="details">
        <a class="active" href="#">
              <!-- <i class="fa fa-dashboard"></i> -->
              <span>VET</span>
          </a>
    </div>
    </div>
    <!-- Fourth Action -->
    <div class="desc">

    <div class="details">
        <a class="active" href="<?php echo $this->webroot;?>shows/index">
              <!-- <i class="fa fa-dashboard"></i> -->
              <span>SHOWS</span>
          </a>
    </div>
    </div>
    
     <!-- Fourth Action -->
    <div class="desc">

    <div class="details">
        <a class="active" href="<?php echo $this->webroot;?>shows/show_results">
              <!-- <i class="fa fa-dashboard"></i> -->
              <span>SHOW RESULTS</span>
          </a>
    </div>
    </div>


    <!-- USERS ONLINE SECTION -->
    <!-- <h3>MORE</h3> -->
    <!-- First Member -->
    <!-- <div class="desc">

    <div class="details">
        <a class="active" href="#">
              <i class="fa fa-dashboard"></i>
              <span>FORUM</span>
          </a>
    </div>
    </div> -->
    <!-- Second Member -->
    <div class="desc">

    <div class="details">
        <a class="active" href="#" onclick="show_submenus(this)">
              <!-- <i class="fa fa-dashboard"></i> -->
              <span>JOBS</span>
          </a>
        <div class="submenu" style="display:none">
            <a class="active" href="<?php echo $this->webroot;?>jobs/index">
              <!-- <i class="fa fa-dashboard"></i> -->
              <span>ALL JOBS</span>
          </a>
          <a class="active" href="<?php echo $this->webroot;?>jobs/post_job">
              <!-- <i class="fa fa-dashboard"></i> -->
              <span>POST A JOB</span>
          </a>
              <a class="active" href="<?php echo $this->webroot;?>jobs/posted_jobs">
              <!-- <i class="fa fa-dashboard"></i> -->
              <span>MY POSTED JOBS</span>
          </a>
            <a class="active" href="<?php echo $this->webroot;?>jobs/applied_jobs">
              <!-- <i class="fa fa-dashboard"></i> -->
              <span>APPLIED JOBS</span>
          </a>
            
        </div>
    </div>
    </div>
    <!-- Third Member -->
    <div class="desc">

    <div class="details">
        <a class="active" href="<?php echo $this->webroot.'adoption/index'; ?>">
              <!-- <i class="fa fa-dashboard"></i> -->
              <span>ADOPTION</span>
          </a>
    </div>
    </div>
    <!-- Fourth Member -->
    <div class="desc">

    <div class="details">
        <a class="active" href="<?php echo $this->webroot;?>forums/index">
              <!-- <i class="fa fa-dashboard"></i> -->
              <span>FORUM</span>
          </a>
    </div>
    </div>
  <!-- Fourth Member -->
    <div class="desc">

    <div class="details">
        <a class="active" href="#">
              <!-- <i class="fa fa-dashboard"></i> -->
              <span>HELP</span>
          </a>
    </div>
    </div>
    
    

    <!-- CALENDAR-->
   <!--  <div id="calendar" class="mb">
        <div class="panel green-panel no-margin">
            <div class="panel-body">
                <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                    <div class="arrow"></div>
                    <h3 class="popover-title" style="disadding: none;"></h3>
                    <div id="date-popover-content" class="popover-content"></div>
                </div>
                <div id="my-calendar"></div>
            </div>
        </div>
    </div> --><!-- / calendar -->

</div><!-- /col-lg-3 -->
  <script> 
      function show_submenus(obj){
          $(obj).siblings().slideToggle();
         } 
      </script>
      <script>
      $('a').click(function(e){
	var _elem = $(this);
  
  $('a').parent('details').each(function(){
  	$(this).removeClass('active');
  });
  
  _elem.parent('details').addClass('active');
});
      </script>