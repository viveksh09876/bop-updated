<?php if($ProductType){
            $products=array();
            foreach($ProductTypes as $prod){
                    $products[$prod['ProductType']['id']]=$prod['ProductType']['name'];
            } ?>


      <?php  if($ProductType=='1'){ ?>
       <?php echo $this->Form->create('Pet',array('type'=>'file','url'=>array('controller'=>'shop','action'=>'add'))); ?>
         <table cellspacing="0" cellpadding="7" border="0" align="center">
            
                <tr>
			<td align="left"><strong class="upper">Product Type</strong></td>
			<td align="left"><?php
		        echo $this->Form->input('Product.product_id',array('class' => 'input required', 'label' => false, 'error' => false, 'div' => false, 'style'=>'width: 450px;','options'=>$products,'empty'=>'Select Product','onChange'=>'getProductFields(this.value)','value'=>'1'));?>
			</td>
		</tr>
                 <tr>
			<td align="left"><strong class="upper">Breed Name</strong></td>
			<td align="left"><?php	
			$breeds=array();
			foreach($allBreeds as $breed){
				$breeds[$breed['Breed']['id']]=$breed['Breed']['name'];	
			}
			echo $this->Form->input('Pet.breed_id',array('class' => 'input required', 'label' => false, 'error' => false, 'div' => false, 'style'=>'width: 450px;','options'=>$breeds,'empty'=>'Select Breed','onchange'=>'get_breed_color(this.value)'));?>
			</td>
		</tr>
                 <tr>
			<td align="left"><strong class="upper">Pet Colour</strong></td>
			<td align="left"><?php
			
			echo $this->Form->input('Pet.color',array('class' => 'input required', 'label' => false, 'error' => false, 'div' => false, 'style'=>'width: 450px;','options'=>'','empty'=>'Select Colour'));?>
			</td>
		</tr>
		<tr>
			<td align="left"><strong class="upper">Pet Type</strong></td>
			<td align="left"><?php	echo $this->Form->input('Pet.pet_type',array('class' => 'input required', 'label' => false, 'error' => false, 'div' => false, 'style'=>'width: 200px;','options'=>array('Dog'=>'Dog','Bitch'=>'Bitch'),'empty'=>'Select Pet Type'));?>
			</td>
		</tr>				
		<tr>
			<td align="left"><strong class="upper">Cost(in $)</strong></td>
			<td align="left"><?php	echo $this->Form->input('Pet.cost',array('class' => 'input required', 'label' => false, 'error' => false, 'div' => false, 'style'=>'width: 450px;'));?>
			</td>
		</tr>
        <tr>
			<td align="left"><strong class="upper">Description</strong></td>
			<td  align="left"><?php	echo $this->Form->input('Pet.description',array('class' => 'editor', 'label' => false, 'error' => false, 'div' => false));?>
			</td>
		</tr>
                
         </table>
        <?php }else if($ProductType=='2'){ ?>

                  <?php echo $this->Form->create('BackgroundImage',array('type'=>'file','url'=>array('controller'=>'shop','action'=>'add'))); ?>
                 <table cellspacing="0" cellpadding="7" border="0" align="center">
	 <tr>
			<td align="left"><strong class="upper">Product Type</strong></td>
			<td align="left"><?php
			echo $this->Form->input('Product.product_id',array('class' => 'input required', 'label' => false, 'error' => false, 'div' => false, 'style'=>'width: 450px;','options'=>$products,'empty'=>'Select Product','onChange'=>'getProductFields(this.value)','value'=>'2'));?>
			</td>
		</tr>
                <tr>
			<td align="left"><strong class="upper">Title</strong></td>
			<td align="left"><?php
			echo $this->Form->input('BackgroundImage.title',array('class' => 'input', 'label' => false, 'error' => false, 'div' => false, 'style'=>'width: 450px'));?>
			</td>
		</tr>
                <tr>
			<td align="left"><strong class="upper">Cost</strong></td>
			<td align="left"><?php
			echo $this->Form->input('BackgroundImage.cost',array('class' => 'input required', 'label' => false, 'error' => false, 'div' => false, 'style'=>'width: 450px'));?>
			</td>
		</tr>
           <tr>
			<td align="left"><strong class="upper">Image</strong></td>
			<td align="left"><input type="file" name="filename" />
			</td>
		</tr>		
		<tr>
			<td align="left"><strong class="upper">Description</strong></td>
			<td align="left"><?php	echo $this->Form->input('BackgroundImage.description',array('class' => 'editor', 'label' => false, 'error' => false, 'div' => false,'id'=>'img_desc','type'=>'textarea'));?>
			</td>
		</tr> </table>
            <?php }else if($ProductType=='3'){ ?>

                    <?php echo $this->Form->create('EmployerLicence',array('type'=>'file','url'=>array('controller'=>'shop','action'=>'add'))); ?>
                   <table cellspacing="0" cellpadding="7" border="0" align="center">
                        <tr>
			<td align="left"><strong class="upper">Product Type</strong></td>
			<td align="left"><?php
			echo $this->Form->input('Product.product_id',array('class' => 'input required', 'label' => false, 'error' => false, 'div' => false, 'style'=>'width: 450px;','options'=>$products,'empty'=>'Select Product','onChange'=>'getProductFields(this.value)','value'=>'3'));?>
			</td>
		</tr>
                <tr>
			<td align="left"><strong class="upper">Title</strong></td>
			<td align="left"><?php
			echo $this->Form->input('EmployerLicence.title',array('class' => 'input required', 'label' => false, 'error' => false, 'div' => false, 'style'=>'width: 450px'));?>
			</td>
		</tr>
                 <tr>
			<td align="left"><strong class="upper">Validity</strong></td>
			<td align="left"><?php
			echo $this->Form->input('EmployerLicence.validity',array('class' => 'input required', 'label' => false, 'error' => false, 'div' => false, 'style'=>'width: 450px'));?>
			</td>
		</tr>
                <tr>
			<td align="left"><strong class="upper">Game Cash</strong></td>
			<td align="left"><?php
			echo $this->Form->input('EmployerLicence.game_cash',array('class' => 'input required', 'label' => false, 'error' => false, 'div' => false, 'style'=>'width: 450px'));?>
			</td>
		</tr>
           <tr>
			<td align="left"><strong class="upper">Credits to Purchase</strong></td>
			<td align="left"><?php
			echo $this->Form->input('EmployerLicence.credits_to_buy',array('class' => 'input required', 'label' => false, 'error' => false, 'div' => false, 'style'=>'width: 450px'));?>
			</td>
		</tr>   </table>

           <?php  }else if($ProductType=='4'){ ?>
                     <?php echo $this->Form->create('BreedingRibbon',array('type'=>'file','url'=>array('controller'=>'shop','action'=>'add'))); ?>
                   <table cellspacing="0" cellpadding="7" border="0" align="center">
                    
                       <tr>
			<td align="left"><strong class="upper">Product Type</strong></td>
			<td align="left"><?php
			echo $this->Form->input('Product.product_id',array('class' => 'input required', 'label' => false, 'error' => false, 'div' => false, 'style'=>'width: 450px;','options'=>$products,'empty'=>'Select Product','onChange'=>'getProductFields(this.value)','value'=>'4'));?>
			</td>
		</tr>
                <tr>
			<td align="left"><strong class="upper">Title</strong></td>
			<td align="left"><?php
			echo $this->Form->input('BreedingRibbon.title',array('class' => 'input required', 'label' => false, 'error' => false, 'div' => false, 'style'=>'width: 450px'));?>
			</td>
		</tr>
                
                <tr>
			<td align="left"><strong class="upper">Game Cash</strong></td>
			<td align="left"><?php
			echo $this->Form->input('BreedingRibbon.game_cash',array('class' => 'input required', 'label' => false, 'error' => false, 'div' => false, 'style'=>'width: 450px'));?>
			</td>
		</tr>
           <tr>
			<td align="left"><strong class="upper">Credits to Purchase</strong></td>
			<td align="left"><?php
			echo $this->Form->input('BreedingRibbon.credits_to_buy',array('class' => 'input required', 'label' => false, 'error' => false, 'div' => false, 'style'=>'width: 450px'));?>
			</td>
		</tr>
                 
                   </table>
                <?php }else if($ProductType=='5'){ ?>
                  <?php echo $this->Form->create('RetirementMedal',array('type'=>'file','url'=>array('controller'=>'shop','action'=>'add'))); ?>
                   <table cellspacing="0" cellpadding="7" border="0" align="center">
                    
                        <tr>
			<td align="left"><strong class="upper">Product Type</strong></td>
			<td align="left"><?php
			echo $this->Form->input('Product.product_id',array('class' => 'input required', 'label' => false, 'error' => false, 'div' => false, 'style'=>'width: 450px;','options'=>$products,'empty'=>'Select Product','onChange'=>'getProductFields(this.value)','value'=>'5'));?>
			</td>
		</tr>
                <tr>
			<td align="left"><strong class="upper">Title</strong></td>
			<td align="left"><?php
			echo $this->Form->input('RetirementMedal.title',array('class' => 'input required', 'label' => false, 'error' => false, 'div' => false, 'style'=>'width: 450px'));?>
			</td>
		</tr>
                
                <tr>
			<td align="left"><strong class="upper">Game Cash</strong></td>
			<td align="left"><?php
			echo $this->Form->input('RetirementMedal.game_cash',array('class' => 'input required', 'label' => false, 'error' => false, 'div' => false, 'style'=>'width: 450px'));?>
			</td>
		</tr>
           <tr>
			<td align="left"><strong class="upper">Credits to Purchase</strong></td>
			<td align="left"><?php
			echo $this->Form->input('RetirementMedal.credits_to_buy',array('class' => 'input required', 'label' => false, 'error' => false, 'div' => false, 'style'=>'width: 450px'));?>
			</td>
		</tr>
                 <tr>
			<td align="left"><strong class="upper">Expiration Date </strong></td>
			<td align="left"><?php
			echo $this->Form->input('RetirementMedal.expiration_date',array('class' => 'input required exp_date', 'label' => false, 'error' => false, 'div' => false, 'style'=>'width: 450px','type'=>'text'));?>
			</td>
		</tr>
                  
                   </table>
                <?php }else if($ProductType=='6'){ ?>
                  <?php echo $this->Form->create('KennelSpace',array('type'=>'file','url'=>array('controller'=>'shop','action'=>'add'))); ?>
                   <table cellspacing="0" cellpadding="7" border="0" align="center">

                        <tr>
			<td align="left"><strong class="upper">Product Type</strong></td>
			<td align="left"><?php
			echo $this->Form->input('Product.product_id',array('class' => 'input required', 'label' => false, 'error' => false, 'div' => false, 'style'=>'width: 450px;','options'=>$products,'empty'=>'Select Product','onChange'=>'getProductFields(this.value)','value'=>'6'));?>
			</td>
		</tr>
                <tr>
			<td align="left"><strong class="upper">Title</strong></td>
			<td align="left"><?php
			echo $this->Form->input('KennelSpace.title',array('class' => 'input required', 'label' => false, 'error' => false, 'div' => false, 'style'=>'width: 450px'));?>
			</td>
		</tr>
                 <tr>
			<td align="left"><strong class="upper">Cost(In $)</strong></td>
			<td align="left"><?php
			echo $this->Form->input('KennelSpace.cost',array('class' => 'input required', 'label' => false, 'error' => false, 'div' => false, 'style'=>'width: 450px'));?>
			</td>
		</tr>

                <tr>
			<td align="left"><strong class="upper">Spaces</strong></td>
			<td align="left"><?php
                        $spaces=array(''=>'Select','1 Space'=>'1 Space','2 Spaces'=>'2 Spaces','3 Spaces'=>'3 Spaces','5 Spaces'=>'5 Spaces','10 Spaces'=>'10 Spaces');
			echo $this->Form->input('KennelSpace.spaces',array('class' => 'input required', 'label' => false, 'error' => false, 'div' => false, 'style'=>'width: 450px','options'=>$spaces));?>
			</td>
		</tr>
               <tr>
			<td align="left"><strong class="upper">Description</strong></td>
			<td align="left"><?php
                       echo $this->Form->input('KennelSpace.description',array( 'label' => false, 'error' => false, 'div' => false, 'style'=>'width: 450px','type'=>'textarea'));?>
			</td>
		</tr>
                 

                   </table>
                <?php }else if($ProductType=='7'){ ?>
                  <?php echo $this->Form->create('EnergyBone',array('type'=>'file','url'=>array('controller'=>'shop','action'=>'add'))); ?>
                   <table cellspacing="0" cellpadding="7" border="0" align="center">

                        <tr>
			<td align="left"><strong class="upper">Product Type</strong></td>
			<td align="left"><?php
			echo $this->Form->input('Product.product_id',array('class' => 'input required', 'label' => false, 'error' => false, 'div' => false, 'style'=>'width: 450px;','options'=>$products,'empty'=>'Select Product','onChange'=>'getProductFields(this.value)','value'=>'7'));?>
			</td>
		</tr>
                <tr>
			<td align="left"><strong class="upper">Title</strong></td>
			<td align="left"><?php
			echo $this->Form->input('EnergyBone.title',array('class' => 'input required', 'label' => false, 'error' => false, 'div' => false, 'style'=>'width: 450px'));?>
			</td>
		</tr>
                 <tr>
			<td align="left"><strong class="upper">Cost(In $)</strong></td>
			<td align="left"><?php
			echo $this->Form->input('EnergyBone.cost',array('class' => 'input required', 'label' => false, 'error' => false, 'div' => false, 'style'=>'width: 450px'));?>
			</td>
		</tr>

           <tr>
			<td align="left"><strong class="upper">Description</strong></td>
			<td align="left"><?php
                       echo $this->Form->input('EnergyBone.description',array( 'label' => false, 'error' => false, 'div' => false, 'style'=>'width: 450px','type'=>'textarea'));?>
			</td>
		</tr>
                   </table>
                <?php }?>
               <div class="black_btn2" style="margin-top:40px;"><span class="upper"><?php echo $this->Form->end(__('Submit'));?></span></div>

<?php }?>
            
 <script>
 $(function(){
		$('.exp_date').datepicker({
	        dateFormat: 'yy-mm-dd'
	     });

 });

 $(function(){
	  $('#PetAdminProductFieldsForm').validate();
          $('#RetirementMedalAdminProductFieldsForm').validate();
          $('#BreedingRibbonAdminProductFieldsForm').validate();
          $('#EmployerLicenceAdminProductFieldsForm').validate();
          $('#BackgroundImageAdminProductFieldsForm').validate();
          $('#KennelSpaceAdminProductFieldsForm').validate();
          $('#EnergyBoneAdminProductFieldsForm').validate();
	});
	CKEDITOR.replace( 'PetDescription' ,
	{
		 filebrowserBrowseUrl :'<?php echo SITE_URL?>js/ckeditor/filemanager/browser/default/browser.html?Connector=<?php echo SITE_URL?>js/ckeditor/filemanager/connectors/php/connector.php',
		filebrowserImageBrowseUrl : '<?php echo SITE_URL?>js/ckeditor/filemanager/browser/default/browser.html?Type=Image&Connector=<?php echo SITE_URL?>js/ckeditor/filemanager/connectors/php/connector.php',
		filebrowserFlashBrowseUrl :'<?php echo SITE_URL?>js/ckeditor/filemanager/browser/default/browser.html?Type=Flash&Connector=<?php echo SITE_URL?>js/ckeditor/filemanager/connectors/php/connector.php',
		filebrowserUploadUrl  :'<?php echo SITE_URL?>js/ckeditor/filemanager/connectors/php/upload.php?Type=File',
		filebrowserImageUploadUrl : '<?php echo SITE_URL?>js/ckeditor/filemanager/connectors/php/upload.php?Type=Image',
		filebrowserFlashUploadUrl : '<?php echo SITE_URL?>js/ckeditor/filemanager/connectors/php/upload.php?Type=Flash'
	});


function get_breed_color(id){
    var url='<?php echo $this->webroot;?>admin/shop/get_breed_color/'+id;
    $.get(url,function(data){
       $('#PetColor').html(data);
    });
}

</script>
