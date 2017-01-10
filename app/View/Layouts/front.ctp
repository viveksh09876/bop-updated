<!DOCTYPE html>
<html>

    <head>
        <title>Best of Pedigree</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
        <!-- CSS Libs -->
        <link rel="stylesheet" type="text/css" href="<?php echo $this->webroot; ?>/dist/lib/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $this->webroot; ?>/dist/lib/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $this->webroot; ?>/dist/lib/css/animate.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $this->webroot; ?>/dist/lib/css/bootstrap-switch.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $this->webroot; ?>/dist/lib/css/checkbox3.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $this->webroot; ?>/dist/lib/css/jquery.dataTables.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $this->webroot; ?>/dist/lib/css/dataTables.bootstrap.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $this->webroot; ?>/dist/lib/css/select2.min.css">
        <!-- CSS App -->
        <link rel="stylesheet" type="text/css" href="<?php echo $this->webroot; ?>/dist/css/style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $this->webroot; ?>/dist/css/themes/flat-blue.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $this->webroot; ?>/dist/css/style_tablesort.css">

 

<?php 
echo $this->Html->script(array("/dist/lib/js/jquery.min","/dist/lib/js/bootstrap.min"));
?>
<style>
.row{margin-right: 0px;margin-left: 0px;}
</style>
    </head>

    <body class="flat-blue">
        <div class="app-container">
            <div class="row content-container">
                <?php echo $this->element("topmenu"); ?>
                <div class="side-menu sidebar-inverse">
                    <?php echo $this->element("sidebar"); ?>
                </div>
                <!-- Main Content -->
                <div class="container-fluid" style="padding:0px;overflow:hidden;">
                    <div class="side-body padding-top">

                        <?php echo $this->fetch('content'); ?>
                        
                    </div>
                </div>
               
            </div>
            <footer class="app-footer">
                <div class="wrapper">
                    © 2016 Copyright bestofpedigree.com.
                </div>
            </footer>
            <div>

                <!-- Javascript Libs -->
                <?php //echo $this->Html->script(array('jquery-latest', 'jquery.tablesorter.pager', 'jquery.tablesorter')); ?>
                <script type="text/javascript" src="<?php echo $this->webroot; ?>/dist/lib/js/Chart.min.js"></script>
                <script type="text/javascript" src="<?php echo $this->webroot; ?>/dist/lib/js/bootstrap-switch.min.js"></script>
                <script type="text/javascript" src="<?php echo $this->webroot; ?>/dist/lib/js/jquery.matchHeight-min.js"></script>
                <script type="text/javascript" src="<?php echo $this->webroot; ?>/dist/lib/js/jquery.dataTables.min.js"></script>
                <script type="text/javascript" src="<?php echo $this->webroot; ?>/dist/lib/js/dataTables.bootstrap.min.js"></script>
                <script type="text/javascript" src="<?php echo $this->webroot; ?>/dist/lib/js/select2.full.min.js"></script>
                <script type="text/javascript" src="<?php echo $this->webroot; ?>/dist/lib/js/ace/ace.js"></script>
                <script type="text/javascript" src="<?php echo $this->webroot; ?>/dist/lib/js/ace/mode-html.js"></script>
                <script type="text/javascript" src="<?php echo $this->webroot; ?>/dist/lib/js/ace/theme-github.js"></script>
                <!-- Javascript -->
                <script type="text/javascript" src="<?php echo $this->webroot; ?>/dist/js/app.js"></script>
                <script type="text/javascript" src="<?php echo $this->webroot; ?>/dist/js/index.js"></script>
    </body>
</html>