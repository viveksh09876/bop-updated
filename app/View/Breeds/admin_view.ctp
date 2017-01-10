<style>
.whitebox.viewMode > table {
    float: none;
    margin-left: 70px;
}

.tables_div > table {
	width:70%;
	text-align:center;
}

</style>
<div class="products row">
    <div class="floatleft mtop10"><h1><?php  echo __('View Breed Details');?></h1></div>
    <div class="floatright">
        <?php
		echo $this->Html->link('<span>'.__('Back To Manage Breed').'</span>', array('controller' => 'breeds','action' => 'manage','admin' => true),array('class'=>'black_btn','escape'=>false));?>
	</div>
</div>

<div align="center" class="whitebox mtop15 viewMode">
    <table cellspacing="2" cellpadding="7" border="0" align="center">
		<tr>
			<td align="left"><strong class="upper"><?php echo __('Id'); ?></strong></td>
			<td align="left"><?php echo h($breed['Breed']['id']); ?></td>
		</tr>
		
		
		<tr>
			<td align="left"><strong class="upper"><?php echo __('Breed Name'); ?></strong></td>
			<td align="left"><?php echo $breed['Breed']['name']; ?></td>
		</tr>
        
        <tr>
			<td align="left"><strong class="upper"><?php echo __('Litter Size'); ?></strong></td>
			<td align="left"><?php echo $breed['Breed']['litter_size']; ?></td>
		</tr>
        
         <tr>
			<td align="left"><strong class="upper"><?php echo __('Description'); ?></strong></td>
			<td align="left"><?php echo $breed['Breed']['description']; ?></td>
		</tr>
        
        
		<?php // echo '<pre/>'; print_r($breed); die; ?>
		
    </table>
    <?php if($breed['BreedImages']){ $i=1;?>
    <hr/>
	<div class="tables_div" style="margin:20px 0;">
		<h2>Color/Markings</h2>	
		<table id="colorsTable" cellspacing="0" cellpadding="7" border="1" align="center">
			<tr id="head_row">
				<td><strong>S.No.</strong></td>
				<td><strong>Puppy Image</strong></td>
				<td><strong>Adult Image</strong></td>
				<td><strong>Color</strong></td>
				<td><strong>Marking</strong></td>
				
			</tr>
            <?php foreach($breed['BreedImages'] as $bi){ ?>
			<tr id="row_1">
				<td><?php echo $i; ?></td>
				<td><img src="<?php if($bi['filename']){echo DISPLAY_BREED_DIR.$bi['filename'];}else{ echo $this->webroot.'images/image_not_available.jpg';} ?>" alt="" width="100" height="100"/></td>
				<td><img src="<?php if($bi['filename_adult']){echo DISPLAY_BREED_DIR.$bi['filename_adult'];}else{ echo $this->webroot.'images/image_not_available.jpg';} ?>" alt="" width="100" height="100"/></td>
				<td><?php echo $bi['color']; ?></td>
				<td><?php echo $bi['marking']; ?></td>
			</tr>
            <?php  $i++; }?>
		</table>
	</div>
    <?php } ?>
</div>
