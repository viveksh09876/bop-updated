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
    <?php 
            $products=array();
            foreach($ProductTypes as $prod){
                    $products[$prod['ProductType']['id']]=$prod['ProductType']['name'];
            } ?>
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
							<td valign="middle" align="left" width="200" >
                                                        <strong><?php echo __('Product Types :'); ?></strong><?php
                                                        echo $this->Form->input('product_id',array( 'label' => false, 'error' => false, 'div' => false, 'style'=>'width: 200px;height:32px','options'=>$products,'value'=>$product_type));?>
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
	<?php //echo $this->Form->create('Breed', array('controller'=>'breeds', 'action'=>'delete_multiple','admin'=>true));?>
        <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center" class="listing">
            <?php if($product_type=='1'){ ?>
            <tr>
				
                              
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
				
                              
				<td align="left" valign="middle"><?php if($shop['Breed']['name']){echo $shop['Breed']['name'];}else{ echo'--';} ?></td>
				<td align="left" valign="middle"><?php if($shop['Pet']['pet_type']){ echo $shop['Pet']['pet_type'];}else{ echo'--';} ?></td>
                                 <td align="left" valign="middle"><?php if($shop['Pet']['color']){ echo $shop['Pet']['color'];}else{ echo'--';} ?></td>
                                <td align="left" valign="middle"><?php if($shop['Pet']['cost']){ echo $shop['Pet']['cost'];}else{ echo'--';} ?></td>
				<td align="left" valign="middle"><?php echo substr($shop['Pet']['description'],0,50);  ?></td>
                                <td align="left" valign="middle"><?php echo format_date($shop['Pet']['added_date']);  ?></td>
				<td align="center">
                                   
				<?php echo $this->Html->link($this->Html->image(ADMIN_IMAGES_PATH.'edit.gif'), array('action' => 'admin_edit', $shop['Pet']['id'],$product_type),array('escape'=>false)); ?>&nbsp;
				<?php echo $this->Html->link($this->Html->image(ADMIN_IMAGES_PATH.'trash.gif'), array('action' => 'admin_delete', $shop['Pet']['id'],$product_type),array('escape'=>false), __('Are you sure you want to delete # %s?', $shop['Pet']['id'])); ?>
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
                        <?php }else if($product_type=='2'){ ?>
                            <tr>

                                
				<th align="left"><?php echo $this->Paginator->sort('image');?></th>
				<th align="left"><?php echo $this->Paginator->sort('title');?></th>
                                <th align="left"><?php echo $this->Paginator->sort('description');?></th>
				<th align="left"><?php echo $this->Paginator->sort('added_date','Added on');?></th>

				<th class="actions"><?php echo __('Actions');?></th>
            </tr>
	    <?php
			foreach ($shops as $shop): ?>
			<tr>

                               
				<td align="left" valign="middle">
					<?php if(!empty($shop['BackgroundImage']['image'])){?>
										 <img style="height:110px;width:110px;" src="<?php echo $this->webroot;?>files/pet_background_img/<?php echo $shop['BackgroundImage']['image'];  ?>">
                                                                <?php } else{?>
                                                                     <img style="height:110px;width:110px;" src="<?php echo $this->webroot;?>images/image_not_available.jpg"  alt="" width="120" height="120"/>
								      <?php } ?>
			    </td>
				<td align="left" valign="middle"><?php echo $shop['BackgroundImage']['title'];?></td>
				<td align="left" valign="middle"><?php echo substr($shop['BackgroundImage']['description'],0,50);  ?></td>
                                <td align="left" valign="middle"><?php echo format_date($shop['BackgroundImage']['added_date']);  ?></td>
				<td align="center">

				<?php echo $this->Html->link($this->Html->image(ADMIN_IMAGES_PATH.'edit.gif'), array('action' => 'admin_edit', $shop['BackgroundImage']['id'],$product_type),array('escape'=>false)); ?>&nbsp;
				<?php echo $this->Html->link($this->Html->image(ADMIN_IMAGES_PATH.'trash.gif'), array('action' => 'admin_delete', $shop['BackgroundImage']['id'],$product_type),array('escape'=>false), __('Are you sure you want to delete # %s?', $shop['BackgroundImage']['id'])); ?>
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
                        <?php }else if($product_type=='3'){ ?>
                            <tr>

                                
				<th align="left"><?php echo $this->Paginator->sort('title');?></th>
				<th align="left"><?php echo $this->Paginator->sort('validity');?></th>
                                <th align="left"><?php echo $this->Paginator->sort('game_cash');?></th>
			    <th align="left"><?php echo $this->Paginator->sort('credits_to_buy');?></th>
				<th align="left"><?php echo $this->Paginator->sort('added_date','Added on');?></th>

				<th class="actions"><?php echo __('Actions');?></th>
            </tr>
	    <?php
			foreach ($shops as $shop): ?>
                        <tr>
				<td align="left" valign="middle"><?php echo $shop['EmployerLicence']['title'];?></td>
                                <td align="left" valign="middle"><?php echo $shop['EmployerLicence']['validity'];?></td>
                                <td align="left" valign="middle"><?php echo $shop['EmployerLicence']['game_cash'];?></td>
                                <td align="left" valign="middle"><?php echo $shop['EmployerLicence']['credits_to_buy'];?></td>
                                <td align="left" valign="middle"><?php echo format_date($shop['EmployerLicence']['added_date']);  ?></td>
				<td align="center">

				<?php echo $this->Html->link($this->Html->image(ADMIN_IMAGES_PATH.'edit.gif'), array('action' => 'admin_edit', $shop['EmployerLicence']['id'],$product_type),array('escape'=>false)); ?>&nbsp;
				<?php echo $this->Html->link($this->Html->image(ADMIN_IMAGES_PATH.'trash.gif'), array('action' => 'admin_delete', $shop['EmployerLicence']['id'],$product_type),array('escape'=>false), __('Are you sure you want to delete # %s?', $shop['EmployerLicence']['id'])); ?>
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
                        <?php }else if($product_type=='4'){ ?>
                             <tr>


				<th align="left"><?php echo $this->Paginator->sort('title');?></th>
                                <th align="left"><?php echo $this->Paginator->sort('game_cash');?></th>
			    <th align="left"><?php echo $this->Paginator->sort('credits_to_buy');?></th>
                            <th align="left"><?php echo $this->Paginator->sort('is_active','Status');?></th>
				<th align="left"><?php echo $this->Paginator->sort('added_date','Added on');?></th>

				<th class="actions"><?php echo __('Actions');?></th>
                          </tr>
	    <?php
			foreach ($shops as $shop): ?>
			<tr>
			
				<td align="left" valign="middle"><?php echo $shop['BreedingRibbon']['title'];?></td>
                                <td align="left" valign="middle"><?php echo $shop['BreedingRibbon']['game_cash'];?></td>
                                <td align="left" valign="middle"><?php echo $shop['BreedingRibbon']['credits_to_buy'];?></td>
                                <td align="left" valign="middle"><?php if($shop['BreedingRibbon']['is_active']=='0'){echo 'Inactive';}else{ echo 'Active';};?></td>
                                <td align="left" valign="middle"><?php echo format_date($shop['BreedingRibbon']['added_date']);  ?></td>
				<td align="center">

				<?php echo $this->Html->link($this->Html->image(ADMIN_IMAGES_PATH.'edit.gif'), array('action' => 'admin_edit', $shop['BreedingRibbon']['id'],$product_type),array('escape'=>false)); ?>&nbsp;
				<?php echo $this->Html->link($this->Html->image(ADMIN_IMAGES_PATH.'trash.gif'), array('action' => 'admin_delete', $shop['BreedingRibbon']['id'],$product_type),array('escape'=>false), __('Are you sure you want to delete # %s?', $shop['BreedingRibbon']['id'])); ?>
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
                        <?php }else if($product_type=='5'){ ?>
                             <tr>


				<th align="left"><?php echo $this->Paginator->sort('title');?></th>
                                <th align="left"><?php echo $this->Paginator->sort('game_cash');?></th>
			    <th align="left"><?php echo $this->Paginator->sort('credits_to_buy');?></th>
                            <th align="left"><?php echo $this->Paginator->sort('expiration_date');?></th>
                            <th align="left"><?php echo $this->Paginator->sort('is_active','Status');?></th>
				<th align="left"><?php echo $this->Paginator->sort('added_date','Added on');?></th>

				<th class="actions"><?php echo __('Actions');?></th>
                          </tr>
	    <?php
			foreach ($shops as $shop): ?>
			<tr>
				<td align="left" valign="middle"><?php echo $shop['RetirementMedal']['title'];?></td>
                                <td align="left" valign="middle"><?php echo $shop['RetirementMedal']['game_cash'];?></td>
                                <td align="left" valign="middle"><?php echo $shop['RetirementMedal']['credits_to_buy'];?></td>
                                <td align="left" valign="middle"><?php echo $shop['RetirementMedal']['expiration_date'];?></td>
                                <td align="left" valign="middle"><?php if($shop['RetirementMedal']['is_active']=='0'){echo 'Inactive';}else{ echo 'Active';};?></td>
                                <td align="left" valign="middle"><?php echo format_date($shop['RetirementMedal']['added_date']);  ?></td>
				<td align="center">

				<?php echo $this->Html->link($this->Html->image(ADMIN_IMAGES_PATH.'edit.gif'), array('action' => 'admin_edit', $shop['RetirementMedal']['id'],$product_type),array('escape'=>false)); ?>&nbsp;
				<?php echo $this->Html->link($this->Html->image(ADMIN_IMAGES_PATH.'trash.gif'), array('action' => 'admin_delete', $shop['RetirementMedal']['id'],$product_type),array('escape'=>false), __('Are you sure you want to delete # %s?', $shop['RetirementMedal']['id'])); ?>
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
                        <?php }else if($product_type=='6'){ ?>
                             <tr>


				<th align="left"><?php echo $this->Paginator->sort('title');?></th>
                                <th align="left"><?php echo $this->Paginator->sort('spaces');?></th>
                                <th align="left"><?php echo $this->Paginator->sort('cost');?></th>
			    <th align="left"><?php echo $this->Paginator->sort('description');?></th>
				<th align="left"><?php echo $this->Paginator->sort('added_date','Added on');?></th>

				<th class="actions"><?php echo __('Actions');?></th>
                          </tr>
	    <?php
			foreach ($shops as $shop): ?>
			<tr>
				<td align="left" valign="middle"><?php echo $shop['KennelSpace']['title'];?></td>
                                <td align="left" valign="middle"><?php echo $shop['KennelSpace']['spaces'];?></td>
                                 <td align="left" valign="middle"><?php echo $shop['KennelSpace']['cost'];?></td>
                                <td align="left" valign="middle"><?php echo $shop['KennelSpace']['description'];?></td>
                                <td align="left" valign="middle"><?php echo format_date($shop['KennelSpace']['added_date']);  ?></td>
				<td align="center">

				<?php echo $this->Html->link($this->Html->image(ADMIN_IMAGES_PATH.'edit.gif'), array('action' => 'admin_edit', $shop['KennelSpace']['id'],$product_type),array('escape'=>false)); ?>&nbsp;
				<?php echo $this->Html->link($this->Html->image(ADMIN_IMAGES_PATH.'trash.gif'), array('action' => 'admin_delete', $shop['KennelSpace']['id'],$product_type),array('escape'=>false), __('Are you sure you want to delete # %s?', $shop['KennelSpace']['id'])); ?>
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
                        <?php }else if($product_type=='7'){ ?>
                             <tr>


				<th align="left"><?php echo $this->Paginator->sort('title');?></th>
                                <th align="left"><?php echo $this->Paginator->sort('cost');?></th>
			    <th align="left"><?php echo $this->Paginator->sort('description');?></th>
				<th align="left"><?php echo $this->Paginator->sort('added_date','Added on');?></th>

				<th class="actions"><?php echo __('Actions');?></th>
                          </tr>
	    <?php
			foreach ($shops as $shop): ?>
			<tr>
				<td align="left" valign="middle"><?php echo $shop['EnergyBone']['title'];?></td>
                                <td align="left" valign="middle"><?php echo $shop['EnergyBone']['cost'];?></td>
                                <td align="left" valign="middle"><?php echo $shop['EnergyBone']['description'];?></td>
                                <td align="left" valign="middle"><?php echo format_date($shop['EnergyBone']['added_date']);  ?></td>
				<td align="center">

				<?php echo $this->Html->link($this->Html->image(ADMIN_IMAGES_PATH.'edit.gif'), array('action' => 'admin_edit', $shop['EnergyBone']['id'],$product_type),array('escape'=>false)); ?>&nbsp;
				<?php echo $this->Html->link($this->Html->image(ADMIN_IMAGES_PATH.'trash.gif'), array('action' => 'admin_delete', $shop['EnergyBone']['id'],$product_type),array('escape'=>false), __('Are you sure you want to delete # %s?', $shop['EnergyBone']['id'])); ?>
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
                        <?php }?>
        </table>
		<?php //echo $this->Form->end();?>
    </div>
</div>
<?php
echo $this->Js->writeBuffer();
?>