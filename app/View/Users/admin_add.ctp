<div class="faqs row">
    <div class="floatleft mtop10"><h2><?php echo __('Add User'); ?></h2></div>
    <?php
    echo $this->Session->flash('success');
	?>
    <div class="floatright">
        <?php
		echo $this->Html->link('<span>'.__('Back To Manage User').'</span>', array('controller' => 'users','action' => 'manage','admin' => true),array('class'=>'black_btn','escape'=>false));?>
	</div>
	<div class="errorMsg"><?php echo $this->element('/admin/validations'); ?></div>
</div>

<div align="center" class="whitebox mtop15">
    <?php 
    echo $this->Form->create('User',array('type'=>'file'));
    ?>
    <table cellspacing="0" cellpadding="7" border="0" align="center">
		<tr>
			<td align="left"><strong class="upper">First Name</strong></td>
			<td align="left"><?php	echo $this->Form->input('first_name',array('class' => 'input required', 'label' => false, 'div' => false, 'style'=>'width: 450px;'));?>
			</td>
		</tr>
        <tr>
			<td align="left"><strong class="upper">Last Name</strong></td>
			<td align="left"><?php	echo $this->Form->input('last_name',array('class' => 'input', 'label' => false, 'div' => false, 'style'=>'width: 450px;'));?>
			</td>
		</tr>
        
		<tr>
			<td align="left"><strong class="upper">Gender</strong></td>
			<td align="left">
				<?php $genderoptions = array('Male' => 'Male', 'Female' => 'Female');?>
				<?php echo $this->Form->radio('gender',$genderoptions,array('label' => false, 'div' => false, 'legend' => false, 'class' => 'required'));?>	
			</td>
		</tr>
		<tr>
			<td align="left"><strong class="upper">Email</strong></td>
			<td align="left"><?php	echo $this->Form->input('email',array('class' => 'input', 'label' => false, 'div' => false, 'style'=>'width: 450px;'));?>
			</td>
		</tr>
        <tr>
			<td align="left"><strong class="upper">Date of Birth</strong></td>
			<td align="left"><?php	echo $this->Form->input('date_of_birth',array('class' => 'input required', 'label' => false, 'div' => false, 'style'=>'width: 450px;','type'=>'text','id'=>'datepicker'));?>
			</td>
            
		</tr>
        <tr>
			<td align="left"><strong class="upper">Mobile No.</strong></td>
			<td align="left"><?php	echo $this->Form->input('moblie_number',array('class' => 'input', 'label' => false, 'div' => false, 'style'=>'width: 450px;'));?>
			</td>
       </tr>
        <tr>
			<td align="left"><strong class="upper">Photo</strong></td>
			<td align="left"><input type="file" name="filename" />
			</td>
       </tr>
       <tr>
			<td align="left"><strong class="upper">Kennel Name</strong></td>
			<td align="left"><?php	echo $this->Form->input('kennel_name',array('class' => 'input', 'label' => false, 'div' => false,'style'=>'width: 450px;' ));?>
			</td>
       </tr> 
        <tr>
			<td align="left"><strong class="upper">Kennel Spaces</strong></td>
			<td align="left"><?php	echo $this->Form->input('kennel_spaces',array('class' => 'input', 'label' => false, 'div' => false,'style'=>'width: 450px;' ));?>
			</td>
       </tr>
	   <tr>
			<td align="left"><strong class="upper">Funds</strong></td>
			<td align="left"><?php	echo $this->Form->input('funds',array('class' => 'input', 'label' => false, 'div' => false,'style'=>'width: 450px;' ));?>
			</td>
       </tr>
       <tr>
			<td align="left"><strong class="upper">Credits</strong></td>
			<td align="left"><?php	echo $this->Form->input('credits',array('class' => 'input', 'label' => false, 'div' => false,'style'=>'width: 450px;' ));?>
			</td>
       </tr>
        <tr>
			<td align="left"><strong class="upper">Kennel XP</strong></td>
			<td align="left"><?php	echo $this->Form->input('kennel_xp',array('class' => 'input', 'label' => false, 'div' => false,'style'=>'width: 450px;' ));?>
			</td>
       </tr>
	   <tr>
			<td align="left"><strong class="upper">Training XP</strong></td>
			<td align="left"><?php	echo $this->Form->input('training_xp',array('class' => 'input', 'label' => false, 'div' => false,'style'=>'width: 450px;' ));?>
			</td>
       </tr>
	   <tr>
			<td align="left"><strong class="upper">Handling XP</strong></td>
			<td align="left"><?php	echo $this->Form->input('handling_xp',array('class' => 'input', 'label' => false, 'div' => false,'style'=>'width: 450px;' ));?>
			</td>
       </tr>
       <tr>
			<td align="left"><strong class="upper">Description</strong></td>
			<td align="left"><?php	echo $this->Form->input('profile_description',array( 'label' => false, 'type'=>'textarea','div'=>false));?>
			</td>
       </tr>
        <tr>
			<td align="left"><strong class="upper">User Status</strong></td>
			<td align="left"><?php	echo $this->Form->input('status',array( 'label' => false,'options'=>array('1'=>'Active','0'=>'Inactive'),'div'=>false));?>
			</td>
       </tr>
        <tr>
            <td align="left"></td>
            <td align="left">
            <div class="black_btn2">
            <span class="upper">
			<?php echo $this->form->submit('submit',array('type' => 'submit', 'id'=>'optin_edit'));?>
            </span>
            </div>
            </td>
        </tr>  
    </table>
    <?php
    echo $this->Form->end();
    ?>
</div>
<script>
 $(function(){
		$('#datepicker').datepicker({
	         dateFormat: 'yy-mm-dd'
	     });
		  $('#UserAdminAddForm').validate();
 });

	CKEDITOR.replace( 'UserProfileDescription' ,
	{
		 filebrowserBrowseUrl :'<?php echo SITE_URL?>js/ckeditor/filemanager/browser/default/browser.html?Connector=<?php echo SITE_URL?>js/ckeditor/filemanager/connectors/php/connector.php',
		filebrowserImageBrowseUrl : '<?php echo SITE_URL?>js/ckeditor/filemanager/browser/default/browser.html?Type=Image&Connector=<?php echo SITE_URL?>js/ckeditor/filemanager/connectors/php/connector.php',
		filebrowserFlashBrowseUrl :'<?php echo SITE_URL?>js/ckeditor/filemanager/browser/default/browser.html?Type=Flash&Connector=<?php echo SITE_URL?>js/ckeditor/filemanager/connectors/php/connector.php',
		filebrowserUploadUrl  :'<?php echo SITE_URL?>js/ckeditor/filemanager/connectors/php/upload.php?Type=File',
		filebrowserImageUploadUrl : '<?php echo SITE_URL?>js/ckeditor/filemanager/connectors/php/upload.php?Type=Image',
		filebrowserFlashUploadUrl : '<?php echo SITE_URL?>js/ckeditor/filemanager/connectors/php/upload.php?Type=Flash'
	});
</script>
