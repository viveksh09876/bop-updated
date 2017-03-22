<script src="http://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.7/css/jquery.dataTables.css">

<?php echo $this->Html->css(array('jquery.fancybox')); 
	echo $this->Html->script(array('jquery.fancybox'));
?>
<!------------------------------------->
<!--sidebar start-->
<style>
   .table-responsive{background-color:#ffffff}
   /*  bhoechie tab */
   div.bhoechie-tab-container{
   z-index: 10;
   background-color: #ffffff;
   padding: 0 !important;
   border-radius: 4px;
   -moz-border-radius: 4px;
   border:1px solid #ddd;
   margin-top: 5px;
   /*margin-left: 10px;*/
   -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
   box-shadow: 0 6px 12px rgba(0,0,0,.175);
   -moz-box-shadow: 0 6px 12px rgba(0,0,0,.175);
   background-clip: padding-box;
   opacity: 0.97;
   filter: alpha(opacity=97);
   }
   div.bhoechie-tab-menu{
   padding-right: 0;
   padding-left: 0;
   padding-bottom: 0;
   }
   div.bhoechie-tab-menu div.list-group{
   margin-bottom: 0;
   }
   div.bhoechie-tab-menu div.list-group>a{
   margin-bottom: 0;
   }
   div.bhoechie-tab-menu div.list-group>a .glyphicon,
   div.bhoechie-tab-menu div.list-group>a .fa {
   color: #5A55A3;
   }
   div.bhoechie-tab-menu div.list-group>a:first-child{
   border-top-right-radius: 0;
   -moz-border-top-right-radius: 0;
   }
   div.bhoechie-tab-menu div.list-group>a:last-child{
   border-bottom-right-radius: 0;
   -moz-border-bottom-right-radius: 0;
   }
   div.bhoechie-tab-menu div.list-group>a.active,
   div.bhoechie-tab-menu div.list-group>a.active .glyphicon,
   div.bhoechie-tab-menu div.list-group>a.active .fa{
   background-color: #5A55A3;
   background-image: #5A55A3;
   color: #ffffff;
   }
   div.bhoechie-tab-menu div.list-group>a.active:after{
   content: '';
   position: absolute;
   left: 100%;
   top: 50%;
   margin-top: -13px;
   border-left: 0;
   border-bottom: 13px solid transparent;
   border-top: 13px solid transparent;
   border-left: 10px solid #5A55A3;
   }
   div.bhoechie-tab-content{
   background-color: #ffffff;
   /* border: 1px solid #eeeeee; */
   padding-left: 20px;
   padding-top: 10px;
   }
   div.bhoechie-tab div.bhoechie-tab-content:not(.active){
   display: none;
   }
   .wrapper{ margin-left:30px; margin-right:30px;}
   .top-header{background-color:#B378D3!important; color:#ffffff; }
   .panel-heading{ font-weight:bold;}
</style>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
<section class="wrapper">
<div class="row">
<div class="top-header"><div class="panel-heading">MY POSTED JOBS</div></div>
<div class="main_container">
   <div class="job-page">
      <?php echo $this->Session->flash(); ?>
      <div class="table-responsive" style="padding-left:20px;padding-right:20px;">
         <table id="posted_jobs" class="display" >
            <thead>
               <tr>
                  <th>ID</th>
                  <th>Total TRAINING AMOUNT (Clicks)</th>
				  <th>Pending TRAINING AMOUNT (Clicks)</th>
                  <th>TRAINING CATEGORY</th>
                  <th>POSTED DATE</th>
				  <th>TOTAL TIME (in hrs)</th>
				  <th>JOB START DATE/TIME</th>
				  <th>AMOUNT</th>
				  <th>AMOUNT TRANSFERRED</th>
				  <th>STATUS</th>
                  <th>Action</th>
               </tr>
            </thead>
            <tbody>
               <?php if($MyPostedJobs){ 
                  foreach($MyPostedJobs as $aj):?>
               <tr>
                  <td>ID#<?php echo $aj['Job']['id']; ?></td>
                  <td style="text-align:center;"><?php echo $aj['Job']['training_clicks']; ?></td>
				  <td style="text-align:center;"><?php echo $aj['Job']['training_clicks'] - $aj['Job']['progress']; ?></td>
                  <td><?php echo $aj['Job']['categories']; ?></td>
				  <td><?php echo $aj['Job']['posted_date']; ?></td>
				  <td><?php echo $aj['Job']['time_complete']; ?></td>
				  <td><?php echo $aj['Job']['job_start_time']; ?></td>
                  <td>$<?php echo $aj['Job']['salary']; ?></td>
				  <td>$<?php echo $aj['Job']['amount_released']; ?></td>
				  <td><?php
					
					if($aj['Job']['status'] == 0){ echo 'Posted'; }elseif ($aj['Job']['status'] == 1){ echo 'Accepted';	}elseif ($aj['Job']['status'] == 2){ echo 'In Progress';	}elseif ($aj['Job']['status'] == 3){ echo 'Completed'; }	?></td>
                  <td>
					<?php if($aj['Job']['status'] == 2 || $aj['Job']['status'] == 3){ ?>
						
						<?php if($aj['Job']['amount_released'] < $aj['Job']['salary']){ ?>
						<a class="btn btn-primary" href="javascript:void(0)" onclick="release_amount(<?php echo $aj['Job']['id']; ?>);">
                        Release Amount</a>
						<?php } ?>
						<?php if($aj['Job']['status'] == 2){ ?>
						<a class="btn btn-primary" href="javascript:void(0)" onclick="mark_complete(<?php echo $aj['Job']['id']; ?>);">
                        Mark Complete</a>
						<?php } ?>
						
					<?php
					}else{
					if($aj['Job']['status'] == 0){ ?>
                     <a class="btn btn-primary" href="javascript:void(0)" onclick="show_responses(this);">
                        View Responses</a>
					<?php }elseif ($aj['Job']['status'] == 1){ echo 'Accepted';	}elseif ($aj['Job']['status'] == 2){ echo 'In Progress';	}elseif ($aj['Job']['status'] == 3){ echo 'Completed'; }	}?>
                  </td>
               </tr>
               <tr class="responses" style="display:none">
               <td colspan="5">
               <table class="table table-bordered">
               <tr>
               <th>Job Id</th>
               <th>Name</th>
               <th>Email</th>
               <th>Applied on</th>
               <th>Status</th>
               <th>Action</th>
               </tr>
               <?php if($aj['AppliedJob']){
                  foreach($aj['AppliedJob'] as $ap){?>
               <tr>
               <td>ID#<?php echo $ap['job_id']; ?></td>
               <td><?php echo $ap['User']['kennel_name'] ?></td>
               <td><?php echo $ap['User']['email']; ?></td>
               <td><?php echo $ap['applied_date']; ?></td>
               <td><?php echo $ap['status']; ?></td>
               <td><?php if($ap['status']=='Pending'){ ?><a class="btn btn-primary" href="<?php echo $this->webroot; ?>jobs/applied_job_status/<?php echo $ap['id']; ?>/<?php echo $ap['job_id']; ?>/Accepted">Accept</a><?php } 
                  else if($ap['status']=='Accepted'){ ?><a class="btn btn-primary" href="<?php echo $this->webroot; ?>jobs/applied_job_status/<?php echo $ap['id']; ?>/<?php echo $ap['job_id']; ?>/Rejected">Reject</a><?php }
                  else if($ap['status']=='Rejected'){ ?><a class="btn btn-primary" href="<?php echo $this->webroot; ?>jobs/applied_job_status/<?php echo $ap['id']; ?>/<?php echo $ap['job_id']; ?>/Accepted">Accept</a><?php }?>
               </tr>
               <?php }
                  }else{ ?>
               <tr><td colspan="6">No Response found.</td></tr>
               <?php } ?>
               </table>
               </td>
               </tr>
               <?php endforeach; ?>
               <?php }else{ ?>
               <tr>
                  <td colspan="5">No Record Found.</td>
               </tr>
               <?php } ?>
            </tbody>
         </table>
      </div>
   </div>
</div>
<!-- /col-lg-9 END SECTION MIDDLE -->
<!--sidebar start-->
<!--sidebar end-->
<script>
   $(document).ready(function () {
   
       $('#posted_jobs').DataTable({
   "autoWidth": true,
   "aoColumnDefs": [{
   "aTargets": [1,2,3,4,5],
   "defaultContent": "",
   }]
       });
   });
</script>
<script>
   function show_responses(obj){
      $(obj).parent().parent().next().slideToggle();
   }
   
   function release_amount(job_id) {
		
		$.fancybox.open({
			type: 'ajax',
			href: '<?php echo $this->webroot. 'jobs/get_release_amount/'; ?>' + job_id
		});
   
   }
   
   function mark_complete(job_id) {
	   
	   var y = confirm('Are you sure you want to mark this job complete?');
	   if(y) {
		   $.post('<?php echo $this->webroot.'/jobs/mark_complete'?>',{jobid: job_id}, function(resp){
			   if(resp == 'success') {
				   alert('Job marked completed!');
				   window.location.reload();
			   }
		   });
	   }
	   
   }
</script>