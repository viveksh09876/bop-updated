<style>
    .jumbotron {
    padding-top: 0;
    }
	.jumbotron p{ font-size: 14px;}
</style>
<!--sidebar start-->

      <!--sidebar end-->
<!--main content start-->
<script src="http://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.7/css/jquery.dataTables.css">

<!--sidebar start-->

<!--sidebar end-->

<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <style>
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
                        <div class="panel-heading">Shows</div>
                        <div class="panel-body">

<?php if(!empty($banners['ManageBanner']['show_banner'])){?>
 <center><img src="<?php echo $this->webroot; ?>files/kennel_banners/<?php echo $banners['ManageBanner']['show_banner']; ?>" class="img-responsive">	</center>
<?php }?>


<section id="main-content">
<section class="wrapper">
  <div class="row">
      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 pt main_container">
        
         <?php echo $this->Session->flash(); ?>
   <?php if($allShows){ 
       $i=0; ?> 
         <?php 


foreach($allShows as $sh){ $i++;
                   if($i%2==0){ $cls='show_right'; }else{ $cls=''; }?>
         
    <div class="jumbotron <?php echo $cls; ?> bhoechie-tab-container">
        <?php echo $this->Form->create('ShowEntry');?>
      <h3 class="page-title"><?php echo $sh['Show']['title'].' ('.$sh['Show']['show_type'].')'; ?></h3>
<div class="show_content">
      <p><?php if(strlen($sh['Show']['description'])>200){ echo substr($sh['Show']['description'],0,200).' '.'...';}else{ echo $sh['Show']['description'];} ?></p>
      <div class="show_time">
          <span>Entry Fees $: <?php echo $sh['Show']['entry_fees']; ?></span>&nbsp;&nbsp;&nbsp;<span>Starts: <?php echo date('Y-m-d',strtotime($sh['Show']['start_date'])); ?></span>&nbsp;&nbsp;&nbsp;
          <span>Closes: <?php echo date('Y-m-d',strtotime($sh['Show']['end_date'])); ?></span>
      </div>
	  
	 <?php 
		$show_start_date = date('Y-m-d', strtotime($sh['Show']['start_date'])); 
		$show_end_date = date('Y-m-d', strtotime($sh['Show']['end_date'])); 
		$curdate = date('Y-m-d');
		
		
		if(($curdate < $show_start_date) && ($curdate < $show_end_date)){
	 ?> 
	  
     <div class="form-group">
         <?php $breedArr=array();
         			
			  foreach($allDogs as $dg){ 
				 if(isset($allUserDogs[$sh['Show']['id']])) {
					if(!in_array($dg['GameBreed']['id'],$allUserDogs[$sh['Show']['id']])){
						$breedArr[$dg['GameBreed']['id']]=$dg['GameBreed']['name'];
					} 
				 }else{
					 $breedArr[$dg['GameBreed']['id']]=$dg['GameBreed']['name'];
				 } 
			
       } ?>
         <?php echo $this->Form->input('game_breed_id',array('label'=>false,'options'=>$breedArr,'class'=>'form-control','empty'=>'Select')) ?>
          <?php echo $this->Form->input('category',array('label'=>'Game Category','options'=>array('novice'=>'novice','open'=>'open','expert'=>'expert'),'class'=>'form-control','empty'=>'Select')) ?>
          <?php echo $this->Form->input('show_id',array('label'=>false,'class'=>'form-control','type'=>'hidden','value'=>$sh['Show']['id'])) ?>
         </div>
              <?php echo $this->Js->submit('Enter Show',
                        array('url'=>array('controller'=>'shows','action'=>'index'),
                        'success' => 'update_comment(data,textStatus);',
                        'before' => $this->Js->get('#loader_'.$sh['Show']['id'])->effect('show', array('buffer' => false)),
                        'complete' => $this->Js->get('#loader_'.$sh['Show']['id'])->effect('hide', array('buffer' => false)),
                       'style'=>'width:25%',
                            'class'=>'form-control'));
                        ?> 

        <?php 
		
		}elseif($curdate > $show_end_date){ ?>
		<br/>		
		<a href="<?php echo $this->webroot.'shows/show_results/'; ?>">View Results</a>
    <!-- <a href="<?php echo $this->webroot.'shows/show_results'; ?>">View Results</a> -->
		<!--<a href="javascript://" onclick="alert('This section is under development');">View Results</a>-->	
			
	<?php }else{ ?>
		<br/>
		<p>Show is in progress. Results will be declared soon!</p>
		
	<?php	}
        echo $this->Html->image('loader.gif', array('id'=>'loader_'.$sh['Show']['id'],'style'=>'display:none;height:30px;width:30px; margin-left:104px; margin-top:-53px',));
        
        ?>
      <!--<a href="<?php echo $this->webroot; ?>shows/participants/<?php echo $sh['Show']['id']; ?>">View Participants</a>-->
      <br>
      <div class="alert" style="height:55px;margin:0"role="alert" id="action_msg_<?php echo $sh['Show']['id'] ?>"></div>
	  
	  <?php echo $this->Form->end(); ?>
    </div>
        </div>
         <?php  } ?>
         <?php }else{ ?>
         <div class="error">No show found yet.</div>
         <?php } ?>
      </div>
 <!-- /col-lg-9 END SECTION MIDDLE -->
 

 <!--sidebar start-->


 <!--sidebar end-->
 </div>
 </section>
  </section>
 <script>
   
     function update_comment(data,textStatus){
		if(textStatus=='success'){
		var jdata=$.parseJSON(data);
		var st=jdata.status;
                var cls='';
                if(st==1){
                    $('#action_msg_'+jdata.id).addClass('alert-success');
                    cls='alert-success';
                }else{
                    $('#action_msg_'+jdata.id).addClass('alert-danger');
                    cls='alert-danger';
                }
		$('#action_msg_'+jdata.id).html(jdata.message);
		setTimeout(function(){
			$('#action_msg_'+jdata.id).html('');
                        $('#action_msg_'+jdata.id).removeClass(cls);
                        if(st==1){
                            location.reload();
                        }
			},3000);
		
	}
}
     </script>
	 <?php echo $this->Js->writeBuffer(); ?></div>
