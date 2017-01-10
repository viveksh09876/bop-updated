<?php
$this->Paginator->options(array (
    'update' => '#main-container',
    'evalScripts' => true,
    'before' => $this->Js->get('#busy-indicator')->effect('fadeIn', array ('buffer' => true)),
    'complete' => $this->Js->get('#busy-indicator')->effect('fadeOut', array ('buffer' => true)),
));
?>
<div class="faqs index">
    <h2><?php echo __('Manage Shop');?></h2>
    <p class="top15 gray12">
    <?php 
    echo $this->Session->flash('success');
    echo $this->Session->flash('error');
    ?>
    </p>
    
	<?php
	echo $this->Form->create(
			null, array(
				'url' => array('controller' => 'shop', 
					'action' => 'admin_manage'),
					'inputDefaults' => array(
							'label' => false,
							'div' => false
						),
				'type' => 'get',
				'name' => 'search_form'
			)
		);
	?>
	<div class="row mtop15">
		<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
			<tr valign="top">
			  <td align="left" class="searchbox">
				<div class="">
				
					<table cellspacing="0" cellpadding="4" border="0">
						<tr valign="top">
							<td valign="middle" align="left" width="200">
								<strong><?php echo __('Keyword :'); ?></strong>
									<?php
									if ( !empty($this->request->query['keyword']) )
									{
										$keyword = $this->request->query['keyword'];
									}
									else
									{
										$keyword = '';
									}
									echo $this->Form->input(null, array(
											'type'=>'text',
											'name'=>'keyword',											
											'class' => 'input',
											'id' => 'keyword',
											'style' => 'width: 200px;',
											'div' =>false,
											'value' => $keyword
									));
								?>
							</td>
							
							<td valign="middle" align="left" style="width:100%">
								<div class="black_btn2 mtop15">
									<span class="upper">
										<input type="submit" value="Search" name="">
									</span>
								</div>
								 <div class="floatright mtop15" style="">
								<?php
								echo $this->Html->link('<span>'.__('Add Inventory').'</span>', array('controller' => 'shop','action' => 'add','admin' => true),array('class'=>'black_btn','escape'=>false));
	?>
								</div>
							</td>
						</tr>
					</table>
				</div>
			</td>
		  </tr>
		</table>	
	</div>
	<?php echo $this->Form->end(); ?>
	
    <div class="row mtop30">
	<?php echo $this->Form->create('Breed', array('controller'=>'breeds', 'action'=>'delete_multiple','admin'=>true));?>
        <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center" class="listing">
            <tr>
				
                                <th align="left"><?php echo 'Product Type';?></th>
				<th align="left"><?php echo $this->Paginator->sort('breed_id','Breed');?></th>
				<th align="left"><?php echo $this->Paginator->sort('pet_type');?></th>
                                <th align="left"><?php echo $this->Paginator->sort('color');?></th>
			    <th align="left"><?php echo $this->Paginator->sort('cost','Cost(in $)');?></th>	
              		       <th align="left"><?php echo $this->Paginator->sort('description');?></th>
				<th align="left"><?php echo $this->Paginator->sort('added_date','Added on');?></th>
				
				<th class="actions"><?php echo __('Actions');?></th>
            </tr>
	    <?php
			foreach ($shops as $shop): ?>
			<tr>
				
                                <td align="left" valign="middle"><?php if($shop['Shop']['product_id']=='1'){ echo 'PET';}else if($shop['Shop']['product_id']=='2'){ echo 'Pet Background Image'; };?>&nbsp;</td>
				<td align="left" valign="middle"><?php if($shop['Breed']['name']){echo $shop['Breed']['name'];}else{ echo'--';} ?></td>
				<td align="left" valign="middle"><?php if($shop['Shop']['pet_type']){ echo $shop['Shop']['pet_type'];}else{ echo'--';} ?></td>
                                 <td align="left" valign="middle"><?php if($shop['Shop']['color']){ echo $shop['Shop']['color'];}else{ echo'--';} ?></td>
                                <td align="left" valign="middle"><?php if($shop['Shop']['cost']){ echo $shop['Shop']['cost'];}else{ echo'--';} ?></td>
				<td align="left" valign="middle"><?php echo substr($shop['Shop']['description'],0,50);  ?></td>
                                <td align="left" valign="middle"><?php echo format_date($shop['Shop']['added_date']);  ?></td>
				<td align="center">
				<?php echo $this->Html->link($this->Html->image(ADMIN_IMAGES_PATH.'edit.gif'), array('action' => 'admin_edit', $shop['Shop']['id']),array('escape'=>false)); ?>&nbsp;
				<?php echo $this->Html->link($this->Html->image(ADMIN_IMAGES_PATH.'trash.gif'), array('action' => 'admin_delete', $shop['Shop']['id']),array('escape'=>false), __('Are you sure you want to delete # %s?', $shop['Shop']['id'])); ?>
				</td>
			</tr>
			<?php endforeach; ?>
			<tr align='right'>
				<td colspan="12" align="left" class="bordernone">
					<div class="floatleft mtop7">
						<div class="pagination">
						<?php
						echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
						echo $this->Paginator->numbers(array('separator' => ''));
						echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
						?>
						</div>
					</div>
				</td>
			</tr>
        </table>
		<?php echo $this->Form->end();?>
    </div>
</div>
<?php
echo $this->Js->writeBuffer();
?>