   <div class="faqs row">
    <div class="floatleft mtop10"><h1><?php echo __('Edit Inventory'); ?></h1></div>
    <div class="floatright">
        <?php
		echo $this->Html->link('<span>'.__('Back To Manage Shop').'</span>', array('controller' => 'shop','action' => 'manage','admin' => true),array('class'=>'black_btn','escape'=>false));?>
	</div>
	<div class="errorMsg"><?php echo $this->element('/admin/validations'); ?></div>
</div>

<div align="center" class="whitebox mtop15">
    <?php echo $this->Form->create('Shop',array('type'=>'file')); ?>
    	
    <table cellspacing="0" cellpadding="7" border="0" align="center">
       <?php if($this->request->data['Shop']['product_id']=='1'){ ?>
        <tr>
        <td align="left"><strong class="upper">Product Type</strong></td>
			<td align="left"><?php
			$products=array();
			foreach($ProductTypes as $prod){
				$products[$prod['ProductType']['id']]=$prod['ProductType']['name'];
			}
			echo $this->Form->input('Shop.product_id',array('class' => 'input required', 'label' => false, 'error' => false, 'div' => false, 'style'=>'width: 450px;','options'=>$products,'empty'=>'Select Product'));?>
			</td>
		</tr>

		<tr>
			<td align="left"><strong class="upper">Breed Name</strong></td>
			<td align="left"><?php	
			$breeds=array();
			foreach($allBreeds as $breed){
				$breeds[$breed['Breed']['id']]=$breed['Breed']['name'];	
			}
			echo $this->Form->input('Shop.breed_id',array('class' => 'input required', 'label' => false, 'error' => false, 'div' => false, 'style'=>'width: 450px;','options'=>$breeds,'empty'=>'Select Breed','onchange'=>'get_breed_color(this.value)'));?>
			</td>
		</tr>
                 <tr>
			<td align="left"><strong class="upper">Pet Colour</strong></td>
			<td align="left"><?php
			
			echo $this->Form->input('Shop.color',array('class' => 'input required', 'label' => false, 'error' => false, 'div' => false, 'style'=>'width: 450px;','options'=>'','empty'=>'Select Colour'));?>
			</td>
		</tr>
		<tr>
			<td align="left"><strong class="upper">Pet Type</strong></td>
			<td align="left"><?php	echo $this->Form->input('Shop.pet_type',array('class' => 'input required', 'label' => false, 'error' => false, 'div' => false, 'style'=>'width: 200px;','options'=>array('Dog'=>'Dog','Bitch'=>'Bitch'),'empty'=>'Select Pet Type'));?>
			</td>
		</tr>				
		<tr>
			<td align="left"><strong class="upper">Cost(in $)</strong></td>
			<td align="left"><?php	echo $this->Form->input('Shop.cost',array('class' => 'input required', 'label' => false, 'error' => false, 'div' => false, 'style'=>'width: 450px;'));?>
			</td>
		</tr>
                <tr>
			<td align="left"><strong class="upper">Description</strong></td>
			<td align="left"><?php	echo $this->Form->input('Shop.description',array( 'label' => false, 'error' => false, 'div' => false));?>
			</td>
		</tr>	
                <?php }else if($this->request->data['Shop']['product_id']=='2'){ ?>
                <tr>
                      <td align="left"><strong class="upper">Product Type</strong></td>
			<td align="left"><?php
			$products=array();
			foreach($ProductTypes as $prod){
				$products[$prod['ProductType']['id']]=$prod['ProductType']['name'];
			}
			echo $this->Form->input('Shop.product_id',array('class' => 'input required', 'label' => false, 'error' => false, 'div' => false, 'style'=>'width: 450px;','options'=>$products,'empty'=>'Select Product','value'=>'2'));?>
			</td>
		</tr>
           <tr>
			<td align="left"><strong class="upper">Image</strong></td>
			<td align="left"><input type="file" name="filename" />
			</td>
		</tr>
                 <?php echo $this->Form->input('id',array('type'=>'hidden','value'=>$this->request->data['Shop']['id']));?>
               <?php if($this->request->data['Shop']['image']){?>
                <tr>
                <td align="left">&nbsp;</td>
                                <td align="left"><img src="<?php echo $this->webroot;?>files/pet_background_img/<?php echo $this->request->data['Shop']['image'] ?>"></td>
                    </tr>
                    <?php } ?>
                 <?php echo $this->Form->input('old_image',array('type'=>'hidden','value'=>$this->request->data['Shop']['image']));?>
		<tr>
			<td align="left"><strong class="upper">Description</strong></td>
			<td align="left"><?php	echo $this->Form->input('Shop.description',array( 'label' => false, 'error' => false, 'div' => false));?>
			</td>
		</tr>	

                <?php } ?>
	</table>
	
             
      <div class="black_btn2" style="margin-top:40px;"><span class="upper"><?php echo $this->Form->end(__('Submit'));?></span></div>
</div>
            
  <script>
  
  $(function(){ 
	  $('#ShopAdminEditForm').validate();
          get_breed_color('<?php echo $this->request->data['Shop']['breed_id']; ?>');
	});
	
function get_breed_color(id){
    var url='<?php echo $this->webroot;?>admin/shop/get_breed_color/'+id;
    $.get(url,function(data){
       $('#ShopColor').html(data);
       $("#ShopColor option[value='<?php echo $this->request->data['Shop']['color']; ?>']").attr("selected", "selected");
    });
}
  function getRandomInt(min, max) { 
	 
	 for(i=1; i<=6;i++){
	    $('#stats_'+i).val(Math.floor(Math.random() * (max - min + 1)) + min);
    	}

       
   }

    CKEDITOR.replace( 'ShopDescription' ,
	{
		 filebrowserBrowseUrl :'<?php echo SITE_URL?>js/ckeditor/filemanager/browser/default/browser.html?Connector=<?php echo SITE_URL?>js/ckeditor/filemanager/connectors/php/connector.php',
		filebrowserImageBrowseUrl : '<?php echo SITE_URL?>js/ckeditor/filemanager/browser/default/browser.html?Type=Image&Connector=<?php echo SITE_URL?>js/ckeditor/filemanager/connectors/php/connector.php',
		filebrowserFlashBrowseUrl :'<?php echo SITE_URL?>js/ckeditor/filemanager/browser/default/browser.html?Type=Flash&Connector=<?php echo SITE_URL?>js/ckeditor/filemanager/connectors/php/connector.php',
		filebrowserUploadUrl  :'<?php echo SITE_URL?>js/ckeditor/filemanager/connectors/php/upload.php?Type=File',
		filebrowserImageUploadUrl : '<?php echo SITE_URL?>js/ckeditor/filemanager/connectors/php/upload.php?Type=Image',
		filebrowserFlashUploadUrl : '<?php echo SITE_URL?>js/ckeditor/filemanager/connectors/php/upload.php?Type=Flash'
	});
  </script>         
    