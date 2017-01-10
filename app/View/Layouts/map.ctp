<?php
$cakeDescription = __d('cake_dev','Best of Pedigree');
?>
<!DOCTYPE html>
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

		echo $this->Html->css(array('jquery.qtip'));
		echo $this->Html->script(array('jquery.min','jquery-1.8.3.min','html5','jquery.validate','additional-methods','jquery.mCustomScrollbar','jquery.mousewheel','jquery.fancybox','jquery.qtip.min','custom'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
    
</head>
<body>
	<section id="container">      
       <img src="<?php echo $this->webroot.'img/MAP.jpg'; ?>" alt="" usemap="#Map" />
	<map name="Map" id="Map">
		<area alt="" title="Hello" href="#" shape="rect" coords="1013,766" />
		<area alt="" title="Vet" href="#" shape="rect" coords="1116,683,938,870" />
		<area alt="" title="View Shows" href="<?php echo $this->webroot.'shows'; ?>" shape="rect" coords="45,828,748,1300" />
		<area alt="" title="Kennel" href="<?php echo $this->webroot.'kennel'; ?>" shape="rect" coords="1095,166,966,308" />
		<area alt="" title="Training Centre" href="<?php echo $this->webroot.'jobs/index'; ?>" shape="rect" coords="761,559,377,768" />
		<area alt="" title="Shop" href="<?php echo $this->webroot.'shop'; ?>" shape="rect" coords="792,380,610,514" />
		
	</map>
    </section>
	
	
</body>
</html>

