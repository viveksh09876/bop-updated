<script src="http://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.7/css/jquery.dataTables.css">
<!--sidebar start-->
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
<section class="wrapper">
<style>
   div.bhoechie-tab-container{
   z-index: 10;
   background-color: #ffffff;
   padding: 0 !important;
   border-radius: 4px;
   -moz-border-radius: 4px;
   border:1px solid #ddd;
   margin-top: 5px;
   margin-left: 10px;
   -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
   box-shadow: 0 6px 12px rgba(0,0,0,.175);
   -moz-box-shadow: 0 6px 12px rgba(0,0,0,.175);
   background-clip: padding-box;
   opacity: 0.97;
   filter: alpha(opacity=97);
   }
   .page-title
   {
   border-bottom: 1px solid #EAEAEA;
   border-top-left-radius: 2px;
   border-top-right-radius: 2px;
   background-color: #B378D3!important;
   color: #fff!important;
   font-size: 20px;
   margin-bottom: 20px;
   margin-top:0px;
   margin-left:0px;
   margin-right:0px;
   }
   .panel-default {
   border: 0px solid #000000;
   -moz-border-radius: 7px;/*Firefox*/
   -webkit-border-radius: 7px;/*Safari, Chrome*/
   border-radius: 7px;
   }
   .panel-heading{
   background-color: #B378D3!important;
   color:#fff!important;
   font-weight: bold;
   }
</style>
<div class="row">
<section id="main-content">
<section class="wrapper">
<div class="row">
</div>
<div class="col-lg-9 pt">
<div class="row">
<!-- TWITTER PANEL -->
<div class="panel panel-default" style="margin-left:36px;">
<div class="panel-heading">Jobs</div>
<div class="panel-body">
<?php if(!empty($banners['ManageBanner']['job_banner'])){?>
<center><img src="<?php echo $this->webroot; ?>files/kennel_banners/<?php echo $banners['ManageBanner']['job_banner']; ?>" class="img-responsive">	</center>
<?php }?>
<!--sidebar start-->
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
<section class="wrapper">
<div class="row">
   <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 pt main_container bhoechie-tab-container">
      <div class="job-page">
         <h2 class="page-title">ALL JOBS </h2>
         <?php echo $this->Session->flash(); ?>
         <div class="table-responsive" style="padding-top:20px;padding-left:10px;padding-right:10px;">
            <table class="table table-bordered" id="all_jobs">
               <thead>
                  <tr>
                     <th>ID</th>
                     <th>TRAINING AMOUNT</th>
                     <th>TRAINING CATEGORY</th>
                     <th>AMOUNT</th>
                     <th>APPLY/ACCEPT</th>
                  </tr>
               </thead>
            </table>
         </div>
      </div>
   </div>
   <!-- /col-lg-9 END SECTION MIDDLE -->
   <!--sidebar start-->
   <!--sidebar end-->
</div>
<script>
   $(document).ready(function () {
   
   
       $('#all_jobs').DataTable({
           "ajax": '<?php echo $this->webroot; ?>jobs/getalljobs',
   "autoWidth": false,
   "columns": [
   { "width": "5%" },
   { "width": "30%" },
   { "width": "40%" },
   { "width": "20%" },
   { "width": "20%", "orderable": false }
   
   ]
       });
   });
</script>