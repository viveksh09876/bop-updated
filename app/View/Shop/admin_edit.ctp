<style>
img{ max-width: 300px;}
</style>

   <?php
            $products=array();
            foreach($ProductTypes as $prod){
                    $products[$prod['ProductType']['id']]=$prod['ProductType']['name'];
            } ?>
<div class="faqs row">
    <div class="floatleft mtop10"><h1><?php echo __('Edit Inventory'); ?></h1></div>
    <div class="floatright">
        <?php
		echo $this->Html->link('<span>'.__('Back To Manage Shop').'</span>', array('controller' => 'shop','action' => 'manage','admin' => true),array('class'=>'black_btn','escape'=>false));?>
	</div>
	<div class="errorMsg"><?php echo $this->element('/admin/validations'); ?></div>
</div>

<div align="center" class="whitebox mtop15">
    	
    
       <?php if(isset($this->request->data['Pet']['product_id']) && $this->request->data['Pet']['product_id']=='1'){ ?>
        <?php echo $this->Form->create('Pet',array('type'=>'file','url'=>array('controller'=>'shop','action'=>'edit',$this->params->pass['0'],$this->params->pass['1']))); ?>
         <table cellspacing="0" cellpadding="7" border="0" align="center">

                <tr>
			<td align="left"><strong class="upper">Product Type</strong></td>
			<td align="left"><?php
		        echo $this->Form->input('Pet.product_id',array('class' => 'input required', 'label' => false, 'error' => false, 'div' => false, 'style'=>'width: 450px;','options'=>$products,'empty'=>'Select Product','onChange'=>'getProductFields(this.value)','value'=>'1'));?>
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
     <div class="black_btn2" style="margin-top:40px;"><span class="upper"><?php echo $this->Form->end(__('Submit'));?></span></div>
                <?php }else if(isset($this->request->data['BackgroundImage']['product_id']) && $this->request->data['BackgroundImage']['product_id']=='2'){ ?>
                  <?php echo $this->Form->create('BackgroundImage',array('type'=>'file','url'=>array('controller'=>'shop','action'=>'edit',$this->params->pass['0'],$this->params->pass['1']))); ?>
                     <table cellspacing="0" cellpadding="7" border="0" align="center">
                <tr>
                      <td align="left"><strong class="upper">Product Type</strong></td>
			<td align="left"><?php
			$products=array();
			foreach($ProductTypes as $prod){
				$products[$prod['ProductType']['id']]=$prod['ProductType']['name'];
			}
			echo $this->Form->input('BackgroundImage.product_id',array('class' => 'input required', 'label' => false, 'error' => false, 'div' => false, 'style'=>'width: 450px;','options'=>$products,'empty'=>'Select Product','value'=>'2'));?>
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
			echo $this->Form->input('BackgroundImage.cost',array('class' => 'input', 'label' => false, 'error' => false, 'div' => false, 'style'=>'width: 450px'));?>
			</td>
		</tr>
           <tr>
			<td align="left"><strong class="upper">Image</strong></td>
			<td align="left"><input type="file" name="filename" />
			</td>
		</tr>
                 <?php echo $this->Form->input('id',array('type'=>'hidden','value'=>$this->request->data['BackgroundImage']['id']));?>
               <?php if($this->request->data['BackgroundImage']['image']){?>
                <tr>
                <td align="left">&nbsp;</td>
                                <td align="left"><img src="<?php echo $this->webroot;?>files/pet_background_img/<?php echo $this->request->data['BackgroundImage']['image'] ?>"></td>
                    </tr>
                    <?php } ?>
                 <?php echo $this->Form->input('old_image',array('type'=>'hidden','value'=>$this->request->data['BackgroundImage']['image']));?>
		<tr>
			<td align="left"><strong class="upper">Description</strong></td>
			<td align="left"><?php	echo $this->Form->input('BackgroundImage.description',array( 'label' => false, 'error' => false, 'div' => false,'type'=>'textarea'));?>
			</td>
		</tr>	
            </table>
             <div class="black_btn2" style="margin-top:40px;"><span class="upper"><?php echo $this->Form->end(__('Submit'));?></span></div>
                <?php }else if(isset($this->request->data['EmployerLicence']['product_id']) && $this->request->data['EmployerLicence']['product_id']=='3'){ ?>
                     <?php echo $this->Form->create('EmployerLicence',array('type'=>'file','url'=>array('controller'=>'shop','action'=>'edit',$this->params->pass['0'],$this->params->pass['1']))); ?>
                   <table cellspacing="0" cellpadding="7" border="0" align="center">
                        <tr>
			<td align="left"><strong class="upper">Product Type</strong></td>
			<td align="left"><?php
			echo $this->Form->input('EmployerLicence.product_id',array('class' => 'input required', 'label' => false, 'error' => false, 'div' => false, 'style'=>'width: 450px;','options'=>$products,'empty'=>'Select Product','onChange'=>'getProductFields(this.value)','value'=>'3'));?>
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
		</tr>   
		
		 <tr>
			<td align="left"><strong class="upper">Image</strong></td>
			<td align="left"><input type="file" name="filename" />
			</td>
		</tr>
                
		   <?php if($this->request->data['EmployerLicence']['image']){?>
			<tr>
			<td align="left">&nbsp;</td>
							<td align="left"><img src="<?php echo $this->webroot;?>files/employer_licence_img/<?php echo $this->request->data['EmployerLicence']['image'] ?>"></td>
				</tr>
				<?php } ?>
			 <?php echo $this->Form->input('old_image',array('type'=>'hidden','value'=>$this->request->data['EmployerLicence']['image']));?>
		
		</table>
                <?php }else if(isset($this->request->data['BreedingRibbon']['product_id']) && $this->request->data['BreedingRibbon']['product_id']=='4'){ ?>
                     <?php echo $this->Form->create('BreedingRibbon',array('type'=>'file','url'=>array('controller'=>'shop','action'=>'edit',$this->params->pass['0'],$this->params->pass['1']))); ?>
                   <table cellspacing="0" cellpadding="7" border="0" align="center">

                       <tr>
			<td align="left"><strong class="upper">Product Type</strong></td>
			<td align="left"><?php
			echo $this->Form->input('BreedingRibbon.product_id',array('class' => 'input required', 'label' => false, 'error' => false, 'div' => false, 'style'=>'width: 450px;','options'=>$products,'empty'=>'Select Product','onChange'=>'getProductFields(this.value)','value'=>'4'));?>
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
		<?php if($this->request->data['BreedingRibbon']['image']){?>
			<tr>
			<td align="left">&nbsp;</td>
							<td align="left"><img src="<?php echo $this->webroot;?>files/breed_ribbon_img/<?php echo $this->request->data['BreedingRibbon']['image'] ?>"></td>
				</tr>
				<?php } ?>
			 <?php echo $this->Form->input('old_image',array('type'=>'hidden','value'=>$this->request->data['BreedingRibbon']['image']));?>
        </table>
              <div class="black_btn2" style="margin-top:40px;"><span class="upper"><?php echo $this->Form->end(__('Submit'));?></span></div>
                <?php }else if(isset($this->request->data['RetirementMedal']['product_id']) && $this->request->data['RetirementMedal']['product_id']=='5'){ ?>
                       <?php echo $this->Form->create('RetirementMedal',array('type'=>'file','url'=>array('controller'=>'shop','action'=>'edit',$this->params->pass['0'],$this->params->pass['1']))); ?>
                   <table cellspacing="0" cellpadding="7" border="0" align="center">

                        <tr>
			<td align="left"><strong class="upper">Product Type</strong></td>
			<td align="left"><?php
			echo $this->Form->input('RetirementMedal.product_id',array('class' => 'input required', 'label' => false, 'error' => false, 'div' => false, 'style'=>'width: 450px;','options'=>$products,'empty'=>'Select Product','onChange'=>'getProductFields(this.value)','value'=>'5'));?>
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
		<?php if($this->request->data['RetirementMedal']['image']){?>
			<tr>
			<td align="left">&nbsp;</td>
							<td align="left"><img src="<?php echo $this->webroot;?>files/retirement_medal_img/<?php echo $this->request->data['RetirementMedal']['image'] ?>"></td>
				</tr>
				<?php } ?>
			 <?php echo $this->Form->input('old_image',array('type'=>'hidden','value'=>$this->request->data['RetirementMedal']['image']));?>
       </table>
       
	   <div class="black_btn2" style="margin-top:40px;"><span class="upper"><?php echo $this->Form->end(__('Submit'));?></span></div>
                <?php }else if(isset($this->request->data['KennelSpace']['product_id']) && $this->request->data['KennelSpace']['product_id']=='6'){ ?>
                       <?php echo $this->Form->create('KennelSpace',array('type'=>'file','url'=>array('controller'=>'shop','action'=>'edit',$this->params->pass['0'],$this->params->pass['1']))); ?>
                   <table cellspacing="0" cellpadding="7" border="0" align="center">

                    <tr>
			<td align="left"><strong class="upper">Product Type</strong></td>
			<td align="left"><?php
			echo $this->Form->input('KennelSpace.product_id',array('class' => 'input required', 'label' => false, 'error' => false, 'div' => false, 'style'=>'width: 450px;','options'=>$products,'empty'=>'Select Product','onChange'=>'getProductFields(this.value)','value'=>'6'));?>
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
               <div class="black_btn2" style="margin-top:40px;"><span class="upper"><?php echo $this->Form->end(__('Submit'));?></span></div>
                <?php }else if(isset($this->request->data['EnergyBone']['product_id']) && $this->request->data['EnergyBone']['product_id']=='7'){ ?>
                       <?php echo $this->Form->create('EnergyBone',array('type'=>'file','url'=>array('controller'=>'shop','action'=>'edit',$this->params->pass['0'],$this->params->pass['1']))); ?>
                   <table cellspacing="0" cellpadding="7" border="0" align="center">

                       <tr>
			<td align="left"><strong class="upper">Product Type</strong></td>
			<td align="left"><?php
			echo $this->Form->input('EnergyBone.product_id',array('class' => 'input required', 'label' => false, 'error' => false, 'div' => false, 'style'=>'width: 450px;','options'=>$products,'empty'=>'Select Product','onChange'=>'getProductFields(this.value)','value'=>'7'));?>
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
		<?php if($this->request->data['EnergyBone']['image']){?>
			<tr>
			<td align="left">&nbsp;</td>
							<td align="left"><img src="<?php echo $this->webroot;?>files/energy_bone_img/<?php echo $this->request->data['EnergyBone']['image'] ?>"></td>
				</tr>
				<?php } ?>
			 <?php echo $this->Form->input('old_image',array('type'=>'hidden','value'=>$this->request->data['EnergyBone']['image']));?>
        </table>
        
		<div class="black_btn2" style="margin-top:40px;"><span class="upper"><?php echo $this->Form->end(__('Submit'));?></span></div>
                <?php }else if($this->request->data['GameFund']['product_id']=='8'){ ?>
                  <?php echo $this->Form->create('GameFund',array('url'=>array('controller'=>'shop','action'=>'edit',$this->params->pass['0'],$this->params->pass['1']))); ?>
                   <table cellspacing="0" cellpadding="7" border="0" align="center">

                        <tr>
			<td align="left"><strong class="upper">Product Type</strong></td>
			<td align="left"><?php
			echo $this->Form->input('GameFund.product_id',array('class' => 'input required', 'label' => false, 'error' => false, 'div' => false, 'style'=>'width: 450px;','options'=>$products,'empty'=>'Select Product','onChange'=>'getProductFields(this.value)','value'=>'8'));?>
			</td>
		</tr>
                <tr>
			<td align="left"><strong class="upper">Game Fund</strong></td>
			<td align="left"><?php
			echo $this->Form->input('GameFund.game_funds',array('class' => 'input required', 'label' => false, 'error' => false, 'div' => false, 'style'=>'width: 450px'));?>
			</td>
		</tr>
                <tr>
			<td align="left"><strong class="upper">Credits to Buy</strong></td>
			<td align="left"><?php
			echo $this->Form->input('GameFund.credits_to_buy',array('class' => 'input required', 'label' => false, 'error' => false, 'div' => false, 'style'=>'width: 450px'));?>
			</td>
		</tr>
                 
                   </table>
               <div class="black_btn2" style="margin-top:40px;"><span class="upper"><?php echo $this->Form->end(__('Submit'));?></span></div>
                <?php }?>
	 
	
             
     
</div>
            
  <script>
  
  $(function(){ 
		<?php if(isset($this->request->data['Pet']['breed_id'])){ ?>
          get_breed_color('<?php echo $this->request->data['Pet']['breed_id']; ?>');
		  
		  function get_breed_color(id){
			var url='<?php echo $this->webroot;?>admin/shop/get_breed_color/'+id;
			$.get(url,function(data){
			   $('#PetColor').html(data);
			   $("#PetColor option[value='<?php echo $this->request->data['Pet']['color']; ?>']").attr("selected", "selected");
			});
		}
		<?php } ?>
	});

 $(function(){
  $('#PetAdminEditForm').validate();
  $('#RetirementMedalAdmiEditForm').validate();
  $('#BreedingRibbonAdminEditForm').validate();
  $('#EmployerLicenceAdminEditForm').validate();
  $('#BackgroundImageAdminEditForm').validate();
  $('#KennelSpaceAdminEditForm').validate();
  $('#EnergyBoneAdminEditForm').validate();
});
	

  function getRandomInt(min, max) { 
	 
	 for(i=1; i<=6;i++){
	    $('#stats_'+i).val(Math.floor(Math.random() * (max - min + 1)) + min);
    	}

       
   }

    CKEDITOR.replace( 'PetDescription' ,
	{
		 filebrowserBrowseUrl :'<?php echo SITE_URL?>js/ckeditor/filemanager/browser/default/browser.html?Connector=<?php echo SITE_URL?>js/ckeditor/filemanager/connectors/php/connector.php',
		filebrowserImageBrowseUrl : '<?php echo SITE_URL?>js/ckeditor/filemanager/browser/default/browser.html?Type=Image&Connector=<?php echo SITE_URL?>js/ckeditor/filemanager/connectors/php/connector.php',
		filebrowserFlashBrowseUrl :'<?php echo SITE_URL?>js/ckeditor/filemanager/browser/default/browser.html?Type=Flash&Connector=<?php echo SITE_URL?>js/ckeditor/filemanager/connectors/php/connector.php',
		filebrowserUploadUrl  :'<?php echo SITE_URL?>js/ckeditor/filemanager/connectors/php/upload.php?Type=File',
		filebrowserImageUploadUrl : '<?php echo SITE_URL?>js/ckeditor/filemanager/connectors/php/upload.php?Type=Image',
		filebrowserFlashUploadUrl : '<?php echo SITE_URL?>js/ckeditor/filemanager/connectors/php/upload.php?Type=Flash'
	});
  </script>         
    