<div id="msg"></div>
<img src="<?php echo $this->webroot; ?>files/pet_background_img/<?php echo $img['BackgroundImage']['image']; ?>">
<?php echo $this->Form->create('UserBgImage',array('class'=>'background_img_frm')); ?>
<li><label>Cost: $ <?php echo $img['BackgroundImage']['cost']; ?></label></li>
<li> <?php echo $this->Form->input('payment_mode',array('class'=>'required','label'=>false,'div'=>false,'options'=>array('Game Cash'=>'Game Cash','Bones'=>'Bones'),'empty'=>'Select','style'=>'width:570px;height:35px')); ?><label>BUY WITH</label></li>
<?php echo $this->Form->input('background_img_id',array('type'=>'hidden','value'=>$img['BackgroundImage']['id'])); ?>
<li><?php echo $this->Js->submit('Buy',
	 	array('url'=>array('controller'=>'shop','action'=>'purchase_img'),
	 	'success' => 'update_comment(data,textStatus);',
	 	'before' => $this->Js->get('#loader')->effect('show', array('buffer' => false)),
		'complete' => $this->Js->get('#loader')->effect('hide', array('buffer' => false))
	 	));
		?>
</li>
<?php echo $this->Form->end();
echo $this->Html->image('loader.gif', array('id'=>'loader','style'=>'display:none;height:50px;width:50px',));
echo $this->Js->writeBuffer();
?>



