<!--main content start-->


<?php echo $this->Form->create('User', array('type' => 'file', 'class' => 'form-horizontal')); ?>
<div class="panel panel-default">
    <div class="panel-heading">KENNEL SETTTINGS</div>
    <div class="panel-body">
 <?php echo $this->Session->flash(); ?>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">KENNEL DISCRIPTIONS</label>
            <div class="col-sm-6">
                <?php echo $this->Form->input('kennel_desc', array("rows" => 3, "cols" => 50, "class" => "form-control", 'type' => 'textarea', 'label' => false, 'div' => false)); ?>
            </div>
        </div>


        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">KENNEL NAME</label>
            <div class="col-sm-6">
                <?php echo $this->Form->input('kennel_name', array('type' => 'text', "class" => "form-control", 'label' => false, 'div' => false)); ?>
            </div>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">ADD/CHANGE AVATAR</label>
            <div class="col-sm-6">
                <input type="file" name="filename"  />
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">ADD/CHANGE BANNER</label>
            <div class="col-sm-6">
                <input type="file" name="kennel_banner" value='' />
            </div>
        </div>
        <?php /*<div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">ADD/CHANGE VET BANNER</label>
            <div class="col-sm-6">
                <input type="file" name="vet_banner" value='' />
            </div>
        </div>
		<div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">ADD/CHANGE SHOP BANNER</label>
            <div class="col-sm-6">
                <input type="file" name="shop_banner" value='' />
            </div>
        </div> */?>
        <h4>PASSWORD CHANGE</h4>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">OLD PASSWORD</label>
            <div class="col-sm-6">
                <?php echo $this->Form->input('password', array('class' => 'required', "required" => false, "class" => "form-control", 'type' => 'password', 'label' => false, 'div' => false, 'value' => '')); ?>
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">NEW PASSWORD</label>
            <div class="col-sm-6">
                <?php echo $this->Form->input('new_password', array('class' => 'required', "required" => false, "class" => "form-control", 'type' => 'password', 'label' => false, 'div' => false)); ?>
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">CONFIRM PASSWORD</label>
            <div class="col-sm-6">
                <?php echo $this->Form->input('confirm_password', array('class' => 'required', "required" => false, "class" => "form-control", 'type' => 'password', 'label' => false, 'div' => false)); ?>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <?php echo $this->Form->input("SAVE",array("type"=>"submit","class"=>"btn btn-primary","div"=>false,"label"=>false))?>
                
            </div>
        </div>

    </div>
</div>
</form>
<?php if (!empty($this->request->data['User']['kennel_banner'])) { ?>
    <img src="<?php echo $this->webroot; ?>files/kennel_banners/<?php echo $this->request->data['User']['kennel_banner'] ?>"></td>
    <?php echo $this->Form->input('old_image', array('type' => 'hidden', 'label' => false, 'div' => false, 'value' => @$this->request->data['User']['kennel_banner'])); ?>
<?php } ?>



<script>
    $('#UserSettingsForm').validate({
        rules: {
            "data[User][password]": {
                required: false
            },
            "data[User][new_password]": {
                required: false
            },
            "data[User][confirm_password]": {
                required: false,
                equalTo: "#UserNewPassword"
            }
        },
        messages: {
            "data[User][confirm_password]": {
                required: false,
                equalTo: "Please enter the same password as above"
            }
        }
    });
</script> 
