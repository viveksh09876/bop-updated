<!--sidebar start-->
<!--sidebar end-->
<!--main content start-->
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
   .no-ul-style{
   	list-style:none;
   }
   .no-ul-style li{
   	list-style:none;
   }
   .middle-tab-container{
   	padding:10px;
   }
   table tr td{  padding-bottom:5px;}
</style>

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

<div class="row">
<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 pt bhoechie-tab-container">
   <div class="post-page">
      <h2 class="page-title">POST A JOB! </h2>
      <?php echo $this->Session->flash();?>
      <div class="middle-tab-container">
      <?php if($this->get('canBuy')=='true'){ ?>
      
      <p>HERE YOU CAN POST A JOB! FOR DOG TRAINING IN CONFIRMATION, AGILITY, OBIDENCE AND RALLY..</p>
      <ul class="no-ul-style">
         <?php echo $this->Form->create('Job'); ?>
         <li><label class="full">JOB TITLE </label><?php echo $this->Form->input('title',array('label'=>false,'div'=>false,'class'=>'required')); ?></li>
         <li><input type="checkbox" value="confirmation" name="data[Job][categories][]" class="required"/><label>CONFIRMATION</label></li>
         <li><input type="checkbox"  value="agilty" name="data[Job][categories][]" class="required" /><label>AGILITY</label></li>
         <li><input type="checkbox"  value="odedience" name="data[Job][categories][]"  class="required"/><label>OBEDIENCE</label></li>
         <li><input type="checkbox"  value="rally" name="data[Job][categories][]"  class="required"/><label>RALLY</label></li>
         <table border="0" padding="0">
         <tr>
           <td>
         <label>AMOUNT OF TRAINING </label></td><td><?php echo $this->Form->input('amount_of_training',array('label'=>false,'div'=>false,'class'=>'sm-txt required')); ?></td>
         </tr><tr>
         <td><label>SALARY </label></td><td><?php echo $this->Form->input('salary',array('label'=>false,'div'=>false,'class'=>'sm-txt required')); ?></td>
         </tr><tr>
         <td><label>AMOUNT OF TRAINING BY CLICKS</label></td><td><?php echo $this->Form->input('training_clicks',array('label'=>false,'div'=>false,'class'=>'sm-txt required')); ?></td>
         </tr><tr>
         <td><label>EVENT TO BE TRAINED IN</label></td><td><?php echo $this->Form->input('trained_event',array('label'=>false,'div'=>false,'class'=>'sm-txt required')); ?></td>
         </tr><tr>
         <td><label>AMOUNT TO EMPLOYEE ONCE THE JOB IS COMPLETE</label></td><td><?php echo $this->Form->input('employee_amount',array('label'=>false,'div'=>false,'class'=>'sm-txt required')); ?></li>
         </tr><tr>
         <td><label>TIME THEY HAVE TO COMPLETE JOB</label></td><td><?php echo $this->Form->input('time_complete',array('label'=>false,'div'=>false,'class'=>'sm-txt required')); ?></td>
	</tr><tr>
	</table>
         <li><input type="submit" class="sm-txt" value="Post" /></li>
         <?php echo $this->Form->end(); ?>
         <?php } else{  ?>
         
         	<p>Please buy a license first!</p>
         <?php } ?>
         
      </ul>
      </div>
   </div>
</div>
<!-- /col-lg-9 END SECTION MIDDLE -->
<!--sidebar start-->
<!--sidebar end-->
<script>

    if(!<?php echo $this->get('canBuy') ?>){
    	alert('Please buy a license first!');
    }

   $(function(){
      $('#JobPostJobForm').validate({
          rules:{
              "data[Job][salary]":{
                 required:true,
                 number: true
              }
          },
          messages: {
                   "data[Job][salary]": "Please enter a valid amount"
          }
      });
   });
</script>