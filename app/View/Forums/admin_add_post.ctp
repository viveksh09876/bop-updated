<div class="faqs row">
    <div class="floatleft mtop10"><h2><?php echo __('Add Show'); ?></h2></div>
    <?php
    echo $this->Session->flash('success');
	?>
    <div class="floatright">
        <?php
		echo $this->Html->link('<span>'.__('Back To Manage Forums').'</span>', array('controller' => 'forums','action' => 'manage','admin' => true),array('class'=>'black_btn','escape'=>false));?>
	</div>
	<div class="errorMsg"><?php echo $this->element('/admin/validations'); ?></div>
</div>

<div align="center" class="whitebox mtop15">
    <?php 
    echo $this->Form->create('Forum',array("type"=>"file"));
    ?>
    <table cellspacing="0" cellpadding="7" border="0" align="center">
		<tr>
			<td align="left"><strong class="upper">Post Title/Query</strong></td>
			<td align="left"><?php	echo $this->Form->input('post_title',array('class' => 'input required', 'label' => false, 'div' => false, 'style'=>'width: 450px;','onKeyup'=>'getSlug();'));?>
			</td>
                        <?php echo $this->Form->input('post_slug',array('type'=>'hidden')); ?>
		</tr>
          
                    <tr>
			<td align="left"><strong class="upper">Description</strong></td>
			<td align="left"><?php	echo $this->Form->input('post_desc',array( 'label' => false, 'type'=>'textarea','div'=>false));?>
                    </td>
                   </tr>
                   
                   <tr>
			<td align="left"><strong class="upper">Image</strong></td>
			<td align="left"><?php	echo $this->Form->input('image',array( 'title'=>'','label' => false,'type'=>'file','div'=>false));?>
                            <p style="color:#999;font-size: 11px;">This is optional. A paw image will still appear</p>
                    </td>
                   </tr>
                   
                   <tr>
			<td align="left"><strong class="upper">Status</strong></td>
			<td align="left"><?php	echo $this->Form->input('status',array( 'label' => false, 'options'=>array('Active'=>'Active','Inactive'=>'Inactive','Close'=>'Close'),'div'=>false));?>
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
		
		  $('#ForumAdminAddPostForm').validate();
 });

	CKEDITOR.replace( 'ForumPostDesc' ,
	{
		 filebrowserBrowseUrl :'<?php echo SITE_URL?>js/ckeditor/filemanager/browser/default/browser.html?Connector=<?php echo SITE_URL?>js/ckeditor/filemanager/connectors/php/connector.php',
		filebrowserImageBrowseUrl : '<?php echo SITE_URL?>js/ckeditor/filemanager/browser/default/browser.html?Type=Image&Connector=<?php echo SITE_URL?>js/ckeditor/filemanager/connectors/php/connector.php',
		filebrowserFlashBrowseUrl :'<?php echo SITE_URL?>js/ckeditor/filemanager/browser/default/browser.html?Type=Flash&Connector=<?php echo SITE_URL?>js/ckeditor/filemanager/connectors/php/connector.php',
		filebrowserUploadUrl  :'<?php echo SITE_URL?>js/ckeditor/filemanager/connectors/php/upload.php?Type=File',
		filebrowserImageUploadUrl : '<?php echo SITE_URL?>js/ckeditor/filemanager/connectors/php/upload.php?Type=Image',
		filebrowserFlashUploadUrl : '<?php echo SITE_URL?>js/ckeditor/filemanager/connectors/php/upload.php?Type=Flash'
	});
        
        
        function getSlug(){
 		var str='';
 		str=str+$("input[name='data[Forum][post_title]']").val();
 		var newstr = str.replace(/[^a-zA-Z ]/g, "");
 		var newstr = newstr.replace(/\s+/g, '-'); 		
 		$("input[name='data[Forum][post_slug]']").val(newstr.toLowerCase());
 		
 	}
</script>
