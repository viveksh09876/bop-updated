	<div class="faqs row">
    <div class="floatleft mtop10"><h1><?php echo __('Add Category'); ?></h1></div>
    <div class="floatright">
        <?php
		echo $this->Html->link('<span>'.__('Back To Manage Categories').'</span>', array('controller' => 'tutorials','action' => 'category_index','admin' => true),array('class'=>'black_btn','escape'=>false));?>
	</div>
	<div class="errorMsg"><?php echo $this->element('/admin/validations'); ?></div>
</div>

<div align="center" class="whitebox mtop15">
    <?php echo $this->Form->create('TutorialCategory');?>
    <table cellspacing="0" cellpadding="7" border="0" align="center">
		<tr>
			<td align="left"><strong class="upper">Category Name</strong></td>
			<td align="left"><?php	echo $this->Form->input('name',array('class' => 'input required', 'label' => false, 'error' => false, 'div' => false, 'style'=>'width: 450px;'));?>
			</td>
		</tr>
		<tr>
			<td align="left"><strong class="upper">Description</strong></td>
			<td align="left"><?php	echo $this->Form->input('description',array('class' => 'input','type'=>'textarea', 'label' => false, 'error' => false, 'div' => false, 'style'=>'width: 450px;'));?>
			</td>
		</tr>
        <tr>
            <td align="left"></td>
            <td align="left"><div class="black_btn2"><span class="upper"><?php echo $this->Form->end(__('Submit'));?></span></div></td>
        </tr>  
    </table>
</div>
<script>

$(function(){ 
  $('#TutorialCategoryAdminCategoryAddForm').validate();
});
	
</script>