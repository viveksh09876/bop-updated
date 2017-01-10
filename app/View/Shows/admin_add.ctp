<?php 
echo $this->Html->css(array('timepicker'));
echo $this->Html->script(array('timepicker')); ?>

<div class="faqs row">
    <div class="floatleft mtop10"><h2><?php echo __('Add Show'); ?></h2></div>
    <?php
    echo $this->Session->flash('success');
	?>
    <div class="floatright">
        <?php
		echo $this->Html->link('<span>'.__('Back To Manage Show').'</span>', array('controller' => 'shows','action' => 'manage','admin' => true),array('class'=>'black_btn','escape'=>false));?>
	</div>
	<div class="errorMsg"><?php echo $this->element('/admin/validations'); ?></div>
</div>

<div align="center" class="whitebox mtop15">
    <?php 
    echo $this->Form->create('Show',array('type'=>'file'));
    ?>
    <table cellspacing="0" cellpadding="7" border="0" align="center">
		<tr>
			<td align="left"><strong class="upper">Show Title</strong></td>
			<td align="left"><?php	echo $this->Form->input('title',array('class' => 'input required', 'label' => false, 'div' => false, 'style'=>'width: 450px;'));?>
			</td>
		</tr>
                <?php $showTypes=array('Conformation'=>'Conformation','Agility'=>'Agility','Obedience'=>'Obedience','Rally'=>'Rally','Best in Pedigree'=>'Best in Pedigree','Show Stoppers'=>'Show Stoppers','Rush'=>'Rush'); ?>
               <tr>
			<td align="left"><strong class="upper">Type of Show</strong></td>
			<td align="left"><?php	echo $this->Form->input('show_type',array('class' => 'input required', 'label' => false, 'div' => false, 'style'=>'width: 450px;','options'=>$showTypes));?>
			</td>
		</tr>
                <?php $allBreeds=array();
                    foreach($Breeds as $breed){
                        $allBreeds[$breed['Breed']['id']]=$breed['Breed']['name'];
                    }?>

                 <tr>
			<td align="left"><strong class="upper">Breed</strong></td>
			<td align="left"><?php	echo $this->Form->input('breed_id',array('class' => 'input required', 'label' => false, 'div' => false, 'style'=>'width: 450px;','options'=>$allBreeds,'multiple'=>true,'after'=>'(Hold control/command to select multiple breeds)'));?>
			</td>
		</tr>

                <tr>
			<td align="left"><strong class="upper">Start Date</strong></td>
			<td align="left"><?php	echo $this->Form->input('start_date',array( 'label' => false, 'div' => false, 'style'=>'width: 450px;','class'=>'input required show_date','type'=>'text'));?>
			</td>
		</tr>
        
		  <tr>
			<td align="left"><strong class="upper">End Date</strong></td>
			<td align="left"><?php	echo $this->Form->input('end_date',array( 'label' => false, 'div' => false, 'style'=>'width: 450px;','class'=>'input required show_date','type'=>'text'));?>
			</td>
		</tr>
		<tr>
			<td align="left"><strong class="upper">Entry Fees</strong></td>
			<td align="left"><?php	echo $this->Form->input('entry_fees',array('class' => 'input required', 'label' => false, 'div' => false, 'style'=>'width: 450px;'));?>
			</td>
		</tr>
        <tr>
			<td align="left"><strong class="upper">Bonus Payouts</strong></td>
			<td align="left"><?php	echo $this->Form->input('bonus_payouts',array('class' => 'input required', 'label' => false, 'div' => false, 'style'=>'width: 450px;','type'=>'text','id'=>'datepicker'));?>
			</td>
            
		</tr>
       
        <tr>
			<td align="left"><strong class="upper">Image</strong></td>
			<td align="left"><input type="file" name="filename" />
			</td>
       </tr>
      
       <tr>
			<td align="left"><strong class="upper">Description</strong></td>
			<td align="left"><?php	echo $this->Form->input('description',array( 'label' => false, 'type'=>'textarea','div'=>false));?>
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
		$('.show_date').datetimepicker({
	        dateFormat: 'yy-mm-dd',
			timeFormat: 'hh:mm:ss',
			minDate: 0
	     });
		  $('#ShowAdminAddForm').validate();
 });

	CKEDITOR.replace( 'ShowDescription' ,
	{
		 filebrowserBrowseUrl :'<?php echo SITE_URL?>js/ckeditor/filemanager/browser/default/browser.html?Connector=<?php echo SITE_URL?>js/ckeditor/filemanager/connectors/php/connector.php',
		filebrowserImageBrowseUrl : '<?php echo SITE_URL?>js/ckeditor/filemanager/browser/default/browser.html?Type=Image&Connector=<?php echo SITE_URL?>js/ckeditor/filemanager/connectors/php/connector.php',
		filebrowserFlashBrowseUrl :'<?php echo SITE_URL?>js/ckeditor/filemanager/browser/default/browser.html?Type=Flash&Connector=<?php echo SITE_URL?>js/ckeditor/filemanager/connectors/php/connector.php',
		filebrowserUploadUrl  :'<?php echo SITE_URL?>js/ckeditor/filemanager/connectors/php/upload.php?Type=File',
		filebrowserImageUploadUrl : '<?php echo SITE_URL?>js/ckeditor/filemanager/connectors/php/upload.php?Type=Image',
		filebrowserFlashUploadUrl : '<?php echo SITE_URL?>js/ckeditor/filemanager/connectors/php/upload.php?Type=Flash'
	});
</script>
