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
    <!-- TWITTER PANEL -->
    <div style="margin-left:36px;" class="panel panel-default">
        <div class="panel-heading">Compose Message</div>
        <div class="panel-body">
            <div class="col-sm-6">
            <?php echo $this->Form->create("Discussion");?>
                <div class="form-group">
                    <label for="exampleInputEmail1">To</label>
                    <?php echo $this->Form->input("received_id",array("class"=>"form-control","empty"=>"Select","required"=>"required","label"=>false,"options"=>$users,"type"=>"select"));?>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Subject</label>
                    <?php echo $this->Form->input("subject",array("class"=>"form-control","required"=>"required","label"=>false,"type"=>"text"));?>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Message</label>
                    <?php echo $this->Form->input("message",array("class"=>"form-control","required"=>"required","label"=>false,"type"=>"textarea"));?>
                </div>
               
                <?php echo $this->Html->link("Cancel",array("controller"=>"discussions","action"=>"index"),array("class"=>"btn btn-primary"))?>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        </div>
    </div>



</div>