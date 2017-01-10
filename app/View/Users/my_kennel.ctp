 <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
    <?php echo $this->element('left_sidebar'); ?>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <div class="row">
                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 pt main_container">
                  <div class="dog-page">
                  	<div class="dog-left">
                        <ul>
                            <li><label>GENERAL</label><input type="text" /></li>
                            <li><label>HEAD</label><input type="text" /></li>
                            <li><label>BODY</label><input type="text" /></li>
                            <li><label>FOREQUATERS</label><input type="text" /></li>
                            <li><label>HINDQUATERS</label><input type="text" /></li>
                            <li><label>CONT</label><input type="text" /></li>
                            <li><label>TEMPERMENT</label><input type="text" /></li>
                        </ul>
                    </div>
                    <div class="dog-main">
                        <div class="picpace-holder"><span>Dog pic/<br /> DOberman EXP..</span></div>
                        <div class="name-box">Dog Name Title</div>
                        <div class="name-box">Dog info : color sex breed stud/in heat</div>
                        <div class="color-box">
                            <ul>
                                <li><small>CONFIRMATION</small><span><strong class="voilet"></strong></span></li>
                                <li><small>AGILITY</small><span><strong class="sky"></strong></span></li>
                                <li><small>OBEDIENCE</small><span><strong class="blue"></strong></span></li>
                                <li><small>RALLY</small><span><strong class="green"></strong></span></li>
                            </ul>

                        </div>
                    </div>
                  </div>
                  </div>
             <!-- /col-lg-9 END SECTION MIDDLE -->
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->
      <?php echo $this->element('right_sidebar'); ?>
          </section>
      </section>

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              Bestofpedigree.com &copy; 2015
              <a href="index.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>
<!-- js placed at the end of the document so the pages load faster -->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/jquery-1.8.3.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>
<script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="assets/js/jquery.sparkline.js"></script>
<!--common script for all pages-->
<script src="assets/js/common-scripts.js"></script>
<script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
<script type="text/javascript" src="assets/js/gritter-conf.js"></script>
<!--script for this page-->
<script src="assets/js/sparkline-chart.js"></script>
<script src="assets/js/zabuto_calendar.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
    /*var unique_id = $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: 'Welcome to Dashgum!',
        // (string | mandatory) the text inside the notification
        text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo. Free version for <a href="http://blacktie.co" target="_blank" style="color:#ffd777">BlackTie.co</a>.',
        // (string | optional) the image to display on the left
        image: 'assets/img/ui-sam.jpg',
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: true,
        // (int | optional) the time you want it to be alive for before fading out
        time: '',
        // (string | optional) the class name you want to apply to that specific message
        class_name: 'my-sticky-class'
    });*/
    return false;
    });
</script>
<script type="application/javascript">
    $(document).ready(function () {
        $("#date-popover").popover({html: true, trigger: "manual"});
        $("#date-popover").hide();
        $("#date-popover").click(function (e) {
            $(this).hide();
        });

        $("#my-calendar").zabuto_calendar({
            action: function () {
                return myDateFunction(this.id, false);
            },
            action_nav: function () {
                return myNavFunction(this.id);
            },
            ajax: {
                url: "show_data.php?action=1",
                modal: true
            },
            legend: [
                {type: "text", label: "Special event", badge: "00"},
                {type: "block", label: "Regular event", }
            ]
        });
    });


    function myNavFunction(id) {
        $("#date-popover").hide();
        var nav = $("#" + id).data("navigation");
        var to = $("#" + id).data("to");
    }
</script>
</body>

<!-- Mirrored from bestofpedigree.com/dev/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Jun 2015 19:20:44 GMT -->
</html>