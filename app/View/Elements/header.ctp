    <!--header start-->
      <header class="header black-bg logo">
           <!--<a id="a-home" href="javascript:void(0)"> <img style="width:75%" src="<?php echo $this->webroot; ?>img/logo.png">  </a>-->

            
          <div class="sidebar-toggle-box">
              <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
          </div>
            <!--logo start-->
            <!-- <a href="index.html" class="logo"><b>&nbsp;</b></a> -->
            <!--logo end-->
            <div class="top-menu">
            <div style="margin:10px" class="pull-right">
                <span style="color:rgb(48,54,67);font-weight:bold; font-size:25px; font-family:cursive">Welcome <?php echo $SESS_KENNELNAME; ?>&nbsp; &nbsp;</span>
                <button  class="btn btn-default"><a href="<?php echo $this->webroot;?>users/logout">Logout</a></button>
                </div>
            </div>

        </header>
      <!--header end-->