<?php
$this->Paginator->options(array (
    'update' => '#main-container',
    'evalScripts' => true,
    'before' => $this->Js->get('#busy-indicator')->effect('fadeIn', array ('buffer' => true)),
    'complete' => $this->Js->get('#busy-indicator')->effect('fadeOut', array ('buffer' => true)),
));
?>
<div class="faqs index">
    <h2><?php echo __('Manage Forum');?></h2>
    <p class="top15 gray12">
    <?php 
    echo $this->Session->flash('success');
    echo $this->Session->flash('error');
    ?>
    </p>
    
	<?php
	echo $this->Form->create(
			null, array(
				'url' => array('controller' => 'forums', 
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
									<?php
									if ( !empty($this->request->query['keyword']) )
									{
										$keyword = $this->request->query['keyword'];
									}
									else
									{
										$keyword = '';
									}
									
								?>
							</td>
							
							<td valign="middle" align="left" style="width:100%">
								
								 <div class="floatright mtop15" style="">
								<?php
								echo $this->Html->link('<span>'.__('Back To Posts').'</span>', array('controller' => 'forums','action' => 'manage','admin' => true),array('class'=>'black_btn','escape'=>false));
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
				
				<th align="left">S.No</th>
				<th align="left">Commented By</th>
				<th align="left">Comment</th>
				<th align="left">Date</th>
                                <th align="left">Likes</th>
                                <th align="left">Dislikes</th>
                                <th align="left">Comment Status</th>
				<th class="actions"><?php echo __('Actions');?></th>
            </tr>
	    <?php $i=0;
			foreach ($data as $dt): $i++ ; ?>
			<tr>
				<td align="left" valign="middle"><?php echo $i++; ?> &nbsp;</td>
				<td align="left" valign="middle"><?php echo $dt['User']['first_name']; ?></td>
				<td align="left" valign="middle"><?php echo $dt['ForumComment']['comments']; ?></td>
                                <td align="left" valign="middle"><?php echo format_date($dt['ForumComment']['post_sent_date']); ?></td>
                                <td align="left" valign="middle"><?php echo $dt['ForumComment']['likes']; ?></td>
                                <td align="left" valign="middle"><?php echo $dt['ForumComment']['dislikes']; ?></td>
				<td align="left" valign="middle">
				<?php  if($dt['ForumComment']['status']=='Disapproved'){?>
                                <a href="<?php echo $this->webroot; ?>admin/forums/change_comment_status/Approved/<?php echo $dt['ForumComment']['forum_comment_id']; ?>" style="color:#090 !important" >Approve</a>
                                <?php }?>

                                <?php  if($dt['ForumComment']['status']=='Approved'){?>
                                <a href="<?php echo $this->webroot; ?>admin/forums/change_comment_status/Disapproved/<?php echo $dt['ForumComment']['forum_comment_id']; ?>" style="color:red !important" >Disapprove</a>
                                <?php }?></td>
                                <td align="center">
				<?php echo $this->Html->link($this->Html->image(ADMIN_IMAGES_PATH.'trash.gif'), array('action' => 'admin_delete_comment', $dt['ForumComment']['forum_comment_id']),array('escape'=>false), __('Are you sure you want to delete # %s?', $dt['ForumComment']['forum_comment_id'])); ?>
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
		<?php echo $this->Form->end();?>
    </div>
</div>
<?php
echo $this->Js->writeBuffer();
?>