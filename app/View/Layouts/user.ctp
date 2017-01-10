<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev','Best of Pedigree');
?><!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
       <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Dashboard">
        <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array('frontend/bootstrap','frontend/jquery.gritter','frontend/style','frontend/style-responsive','jquery.fancybox'));
		echo $this->Html->script(array('jquery.min','jquery-1.8.3.min','html5','jquery.validate','additional-methods',
										'jquery.mCustomScrollbar','jquery.mousewheel','jquery.fancybox','custom'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
     <!-- Custom styles for this template -->
     <link href="<?php echo $this->webroot; ?>font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo $this->webroot; ?>lineicons/style.css">
    <script src="<?php echo $this->webroot; ?>js/chart-master/Chart.js"></script>
        <!-- js placed at the end of the document so the pages load faster -->
        <script src="<?php echo $this->webroot; ?>js/bootstrap.min.js"></script>
        <script class="include" type="text/javascript" src="<?php echo $this->webroot; ?>js/jquery.dcjqaccordion.2.7.js"></script>
        <script src="<?php echo $this->webroot; ?>js/jquery.scrollTo.min.js"></script>
        <script src="<?php echo $this->webroot; ?>js/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="<?php echo $this->webroot; ?>js/jquery.sparkline.js"></script>
        <!--common script for all pages-->
        <script src="<?php echo $this->webroot; ?>js/common-scripts.js"></script>
        <script type="text/javascript" src="<?php echo $this->webroot; ?>js/gritter/js/jquery.gritter.js"></script>
        <script type="text/javascript" src="<?php echo $this->webroot; ?>js/gritter-conf.js"></script>
        <!--script for this page-->
        <script src="<?php echo $this->webroot; ?>js/sparkline-chart.js"></script>
        <script src="<?php echo $this->webroot; ?>js/zabuto_calendar.js"></script>
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
            <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
              <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
            <![endif]-->
</head>
<body>
	<section id="container">      
       <?php echo $this->element('header'); ?>
		<!-- Main content Start -->
		<?php echo $this->fetch('content'); ?>
		<!-- Main content Start -->
  <?php echo $this->element('footer'); ?>
        </section>
        
</body>
</html>

