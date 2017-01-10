<tr>
			<td align="left"><strong class="upper">Breed Name</strong></td>
			<td align="left"><?php	
			$breeds=array();
			foreach($allBreeds as $breed){
				$breeds[$breed['Breed']['id']]=$breed['Breed']['name'];	
			}
			echo $this->Form->input('breed_id',array('class' => 'input required', 'label' => false, 'error' => false, 'div' => false, 'style'=>'width: 450px;','options'=>$breeds,'empty'=>'Select Breed'));?>
			</td>
		</tr>		
		<tr>
			<td align="left"><strong class="upper">Pet Type</strong></td>
			<td align="left"><?php	echo $this->Form->input('pet_type',array('class' => 'input required', 'label' => false, 'error' => false, 'div' => false, 'style'=>'width: 200px;','options'=>array('Dog'=>'Dog','Bitch'=>'Bitch'),'empty'=>'Select Pet Type'));?>
			</td>
		</tr>				
		<tr>
			<td align="left"><strong class="upper">Cost(in $)</strong></td>
			<td align="left"><?php	echo $this->Form->input('cost',array('class' => 'input required', 'label' => false, 'error' => false, 'div' => false, 'style'=>'width: 450px;'));?>
			</td>
		</tr>	
	</table>
	<div class="tables_div" style="margin:20px 0;  width:50%">	
    <h2>Statics/Genetics</h2>
		<table id="colorsTable" cellspacing="0" cellpadding="7" border="1">
           
			<tr id="row_1">
				<td>General</td><td><?php echo $this->Form->input('stats_general',array('label'=>false,'div'=>false,'style'=>'width: 300px;','id'=>'stats_1','class' => 'input required')); ?></td>
			</tr>
            <tr id="row_1">
				<td>Head</td><td><?php echo $this->Form->input('stats_head',array('label'=>false,'div'=>false,'style'=>'width: 300px;','id'=>'stats_2','class' => 'input required')); ?></td>
			</tr>
            <tr id="row_1">
				<td>Body</td><td><?php echo $this->Form->input('stats_body',array('label'=>false,'div'=>false,'style'=>'width: 300px;','id'=>'stats_3','class' => 'input required')); ?></td>
			</tr>
            <tr id="row_1">
				<td>Fourquarters</td><td><?php echo $this->Form->input('stats_fourquarters',array('label'=>false,'div'=>false,'style'=>'width: 300px;','id'=>'stats_4','class' => 'input required')); ?></td>
			</tr>
             <tr id="row_1">
				<td>Coat</td><td><?php echo $this->Form->input('stats_coat',array('label'=>false,'div'=>false,'style'=>'width: 300px;','id'=>'stats_5','class' => 'input required')); ?></td>
			</tr>
            <tr id="row_1">
				<td>Hindquarters</td><td><?php echo $this->Form->input('stats_hindquarters',array('label'=>false,'div'=>false,'style'=>'width: 300px;','id'=>'stats_6','class' => 'input required')); ?></td>
			</tr>