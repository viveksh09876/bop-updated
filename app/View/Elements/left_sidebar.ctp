 <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">

               <!---   <h5 class="centered"><?php //echo $SESS_KENNELNAME; ?></h5>--->
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-user"></i>
                          <span><?php echo $SESS_KENNELNAME; ?></span>
                      </a>
                      <!-- <ul class="sub">
                          <li><a  href="general.html">General</a></li>
                          <li><a  href="buttons.html">Buttons</a></li>
                          <li><a  href="panels.html">Panels</a></li>
                      </ul> -->
                  </li>
                  <!-- <li class="mt">
                      <a class="active" href="index.html">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li> -->

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-money"></i>
                          <span>Funds: <?php echo $this->Session->read('Auth.User.funds') ?></span>
                      </a>
                      <!-- <ul class="sub">
                          <li><a  href="general.html">General</a></li>
                          <li><a  href="buttons.html">Buttons</a></li>
                          <li><a  href="panels.html">Panels</a></li>
                      </ul> -->
                  </li>
                   <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-paw"></i>
                          <span>Bones:  <?php echo $this->Session->read('Auth.User.credits') ?></span>
                      </a>
                      <!-- <ul class="sub">
                          <li><a  href="form_component.html">Form Components</a></li>
                      </ul> -->
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-envelope-o"></i>
                          <span>IM Inbox: 1</span>
                      </a>
                      <!-- <ul class="sub">
                          <li><a  href="blank.html">Blank Page</a></li>
                          <li><a  href="login.html">Login</a></li>
                          <li><a  href="lock_screen.html">Lock Screen</a></li>
                      </ul> -->
                  </li>
                    <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-bar-chart-o"></i>
                          <span>Kennel Spaces: <?php echo $this->Session->read('Auth.User.kennel_spaces') ?></span>
                      </a>
                      <!-- <ul class="sub">
                          <li><a  href="basic_table.html">Basic Table</a></li>
                          <li><a  href="responsive_table.html">Responsive Table</a></li>
                      </ul> -->
                  </li>
                  
                  
                  <li class="sub-menu"><?php //echo '<pre/>'; print_r($this->Session->read()); die; ?>
                      <a href="javascript:;" >
                          <i class="fa fa-bar-chart-o"></i>
                          <span>Kennel XP: <?php echo $this->Session->read('Auth.User.kennel_xp') ?></span>
                      </a>
                      <!-- <ul class="sub">
                          <li><a  href="basic_table.html">Basic Table</a></li>
                          <li><a  href="responsive_table.html">Responsive Table</a></li>
                      </ul> -->
                  </li>
                    <li class="sub-menu"><?php //echo '<pre/>'; print_r($this->Session->read()); die; ?>
                      <a href="javascript:;" >
                          <i class="fa fa-bar-chart-o"></i>
                          <span>Trainer XP: 1</span>
                      </a>
                      <!-- <ul class="sub">
                          <li><a  href="basic_table.html">Basic Table</a></li>
                          <li><a  href="responsive_table.html">Responsive Table</a></li>
                      </ul> -->
                  </li>
                    <li class="sub-menu"><?php //echo '<pre/>'; print_r($this->Session->read()); die; ?>
                      <a href="javascript:;" >
                          <i class="fa fa-bar-chart-o"></i>
                          <span>Handler XP: 1</span>
                      </a>
                      <!-- <ul class="sub">
                          <li><a  href="basic_table.html">Basic Table</a></li>
                          <li><a  href="responsive_table.html">Responsive Table</a></li>
                      </ul> -->
                  </li>
               
                  
                <!---  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Handler XP: 13</span>
                      </a>
                      <!-- <ul class="sub">
                          <li><a  href="morris.html">Morris</a></li>
                          <li><a  href="chartjs.html">Chartjs</a></li>
                      </ul> -->
               <!--   </li>---->

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->