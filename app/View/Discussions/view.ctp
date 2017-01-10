<div class="col-sm-9">
    
    <?php //pr($message);?>
    
    <section class="panel panel-default mail-container">
        <div class="panel-heading"><strong><span class="glyphicon glyphicon-th"></span> By <?php printf("%s %s",@$message["Sender"]["first_name"],@$message["Sender"]["last_name"])?> to <?php printf("%s %s",@$message["Received"]["first_name"],@$message["Received"]["last_name"])?></strong>
         <?php 
         if($bk=="sent"){
             $action="sent";
         }else{
             $action="index";
         }
         echo $this->Html->link("Back",array("controller"=>"discussions","action"=>$action),array("class"=>"btn btn-primary btn-xs pull-right"))?>
        </div>
        <div class="panel-body">

            

            <div class="mail-header row">
                <div class="col-md-12">
                    <h3><?php echo $message["Discussion"]["subject"]?></h3>
                </div>
            </div>

            <div class="mail-info">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="list-unstyled list-inline">
                            <li><i class="fa fa-calendar-o"></i> <?php echo $message["Discussion"]["created"]?></li>
                            
                            
                            
                        </ul>
                    </div>
                </div>
            </div>

            <div class="mail-content">
                <p><?php echo $message["Discussion"]["message"]?></p>
            </div>
            
            
        </div>
    </section>
</div>