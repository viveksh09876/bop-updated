<div class="products row">
    <div class="floatleft mtop10"><h2><?php  echo __('View Show Info');?></h2></div>
    <div class="floatright">
        <?php
		echo $this->Html->link('<span>'.__('Back To Manage Show').'</span>', array('controller' => 'shows','action' => 'manage','admin' => true),array('class'=>'black_btn','escape'=>false));?>
	</div>
</div>

<div align="center" class="whitebox mtop15 viewMode">
    <table cellspacing="2" cellpadding="7" border="0" align="center">
		
		<tr>
			<td align="left"><strong class="upper"><?php echo __('Show Title'); ?></strong></td>
			<td align="left"><?php echo $show['Show']['title']; ?></td>
		</tr>
		<tr>
			<td align="left"><strong class="upper"><?php echo __('Start Date'); ?></strong></td>
			<td align="left"><?php echo format_date($show['Show']['start_date']); ?></td>
		</tr>
		<tr>
			<td align="left"><strong class="upper"><?php echo __('End Date'); ?></strong></td>
			<td align="left"><?php echo format_date($show['Show']['end_date']); ?></td>
		</tr>
		<tr>
			<td align="left"><strong class="upper"><?php echo __('Entry Fees'); ?></strong></td>
			<td align="left"><?php echo $show['Show']['entry_fees']; ?></td>
		</tr>
                <tr>
			<td align="left"><strong class="upper"><?php echo __('Bonus Payouts'); ?></strong></td>
			<td align="left"><?php echo $show['Show']['bonus_payouts']; ?></td>
		</tr>
                 <?php if($show['Show']['image']){?>
                <tr>
			<td align="left"><strong class="upper"><?php echo __('Image'); ?></strong></td>
			<td align="left"><img src="<?php echo $this->webroot;?>files/shows/<?php echo $show['Show']['image'] ?>"></td>
		</tr>
                <?php } ?>
                <tr>
			<td align="left"><strong class="upper"><?php echo __('Description'); ?></strong></td>
			<td align="left"><?php echo $show['Show']['description']; ?></td>
		</tr>
		
	</table>
</div>







