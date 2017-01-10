<div class="faqs index">
    <h2><?php echo __('Manage Shows');?></h2>
    <p class="top15 gray12">
    <?php 
    echo $this->Session->flash('success');
    echo $this->Session->flash('error');
    ?>
    </p>
    <?php
	echo $this->Form->create(
			null, array(
				'url' => array('controller' => 'shows',
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
				<div class="floatleft">
				
					<table cellspacing="0" cellpadding="4" border="0">
						<tr valign="top">
							<td valign="middle" align="left" width="200" >
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
											'placeholder' => 'Title/Entry Fees',
											'class' => 'input',
											'id' => 'keyword',
											'style' => 'width: 200px;',
											'value' => $keyword
									));
								?>
							</td>
							<!--<td valign="middle" align="left" width="200" >
								<strong><?php echo __('Account Type :'); ?></strong>
									<?php
									if ( !empty($this->request->query['type']) )
									{
										$type = $this->request->query['type'];
									}
									else
									{
										$type = '';
									}
									echo $this->Form->input(null, array(
											'type'=>'select',
											'class' => 'input',
											'empty' => 'Please select',
											'name' => 'type',
											'options' => array('athlete' => 'Athlete','affiliate' => 'Affiliate', 'fan' => 'Fan'),
											'style' => 'width: 200px;',
											'selected' => $type
									));
								?>
							</td>-->
							<td valign="middle" align="left" style="width:100%">
								<div class="black_btn2 mtop15">
									<span class="upper">
										<input type="submit" value="Search" name="">
									</span>
								</div>
								 <div class="floatright mtop15" style="">
								<?php
								echo $this->Html->link('<span>'.__('Add New Show').'</span>', array('controller' => 'shows','action' => 'add','admin' => true),array('class'=>'black_btn','escape'=>false,'style'=>'margin-left: 87%;
    padding-left: 16px;'));
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
        <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center" class="listing">
            <tr>
				<th align="left"><?php echo $this->Paginator->sort('image');?></th>
				<th align="left"><?php echo $this->Paginator->sort('title');?></th>
				<th align="left"><?php echo $this->Paginator->sort('start_date');?></th>
				<th align="left"><?php echo $this->Paginator->sort('end_date');?></th>
				<th align="left"><?php echo $this->Paginator->sort('entry_fees');?></th>
                                <th align="left"><?php echo $this->Paginator->sort('entry_payouts');?></th>
				<th class="actions"><?php echo __('Actions');?></th>
            </tr>
	    <?php
			foreach ($Shows as $show): ?>
			<tr>
				<td align="left" valign="middle">
					<?php if(!empty($show['Show']['image'])){?>
                                                 <img style="height:110px;width:110px;" src="<?php echo $this->webroot;?>files/shows/<?php echo $show['Show']['image'];  ?>">
                                             <?php } else{?>
                                                 <img style="height:110px;width:110px;" src="<?php echo $this->webroot;?>images/image_not_available.jpg"  alt="" width="120" height="120"/>
                                            <?php } ?>
			    </td>
				<td align="left" valign="middle"><?php echo $show['Show']['title']; ?>&nbsp;</td>
				<td align="left" valign="middle"><?php echo format_date($show['Show']['start_date']); ?>&nbsp;</td>
				<td align="left" valign="middle"><?php echo format_date($show['Show']['end_date']); ?>&nbsp;</td>
                                <td align="left" valign="middle"><?php echo $show['Show']['entry_fees']; ?>&nbsp;</td>
                                <td align="left" valign="middle"><?php echo $show['Show']['bonus_payouts']; ?>&nbsp;</td>
				
				<td align="center">
				<?php echo $this->Html->link($this->Html->image(ADMIN_IMAGES_PATH.'view.gif'), array('action' => 'view', $show['Show']['id']),array('escape'=>false)); ?>&nbsp;
				<?php echo $this->Html->link($this->Html->image(ADMIN_IMAGES_PATH.'edit.gif'), array('action' => 'edit', $show['Show']['id']),array('escape'=>false)); ?>&nbsp;
				<?php 
					echo $this->Html->link($this->Html->image(ADMIN_IMAGES_PATH.'trash.gif'), array('action' => 'delete', $show['Show']['id']),array('escape'=>false), __('Are you sure you want to delete # %s?', $show['Show']['id']));
				?>
				</td>
			</tr>
			<?php endforeach; ?>
			<tr align='right'>
				<td colspan="9" align="left" class="bordernone">
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
    </div>
</div>
<?php echo $this->Js->writeBuffer(); ?>