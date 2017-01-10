
<div class="col-lg-3 col-md-3 col-xs-12 col-sm-3 ds dsr">
<!--COMPLETED ACTIONS DONUTS CHART-->

    <h3 <?php if($this->action=='index'){ ?>class="active"<?php } ?>"><a href="<?php echo $this->webroot;?>kennel">MY KENNEL</a></h3>

    <!-- First Action -->
    <div class="desc  <?php if($this->action=='settings'){ ?>active<?php } ?>" style="margin-top: 75px;">

    <div class="details">
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
    <div class="desc">

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
        <a class="active" href="#">
              <!-- <i class="fa fa-dashboard"></i> -->
              <span>SHOWS</span>
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
        <a class="active" href="#">
              <!-- <i class="fa fa-dashboard"></i> -->
              <span>ADOPTION</span>
          </a>
    </div>
    </div>
    <!-- Fourth Member -->
    <div class="desc">

    <div class="details">
        <a class="active" href="#">
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