 
 <?php if($ProductType){
            $products=array();
            foreach($ProductTypes as $prod){
                    $products[$prod['ProductType']['id']]=$prod['ProductType']['name'];
            } ?>

 <table cellspacing="0" cellpadding="7" border="0" align="center">
      <?php  if($ProductType=='1'){ ?>
                <tr>
			<td align="left"><strong class="upper">Product Type</strong></td>
			<td align="left"><?php
		        echo $this->Form->input('Shop.product_id',array('class' => 'input required', 'label' => false, 'error' => false, 'div' => false, 'style'=>'width: 450px;','options'=>$products,'empty'=>'Select Product','onChange'=>'getProductFields(this.value)','value'=>'1'));?>
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
			<td  align="left"><?php	echo $this->Form->input('Shop.description',array('class' => 'editor', 'label' => false, 'error' => false, 'div' => false));?>
			</td>
		</tr>		
	
        <?php }else if($ProductType=='2'){ ?>
	 <tr>
			<td align="left"><strong class="upper">Product Type</strong></td>
			<td align="left"><?php
			echo $this->Form->input('Shop.product_id',array('class' => 'input required', 'label' => false, 'error' => false, 'div' => false, 'style'=>'width: 450px;','options'=>$products,'empty'=>'Select Product','onChange'=>'getProductFields(this.value)','value'=>'2'));?>
			</td>
		</tr>
           <tr>
			<td align="left"><strong class="upper">Image</strong></td>
			<td align="left"><input type="file" name="filename" />
			</td>
		</tr>		
		<tr>
			<td align="left"><strong class="upper">Description</strong></td>
			<td align="left"><?php	echo $this->Form->input('Shop.description',array('class' => 'editor', 'label' => false, 'error' => false, 'div' => false,'id'=>'img_desc'));?>
			</td>
		</tr>	
        
            <?php }else{?>
                <tr>
			<td align="left"><strong class="upper">Product Type</strong></td>
			<td align="left"><?php
		        echo $this->Form->input('Shop.product_id',array('class' => 'input required', 'label' => false, 'error' => false, 'div' => false, 'style'=>'width: 450px;','options'=>$products,'empty'=>'Select Product','onChange'=>'getProductFields(this.value)','value'=>'1'));?>
			</td>
		</tr>
           <?php  } ?>
</table>
 <?php if(in_array($ProductType,array(1,2))){?>
   <div class="black_btn2" style="margin-top:40px;"><span class="upper"><?php echo $this->Form->end(__('Submit'));?></span></div>
  <?php }
 }?>
            
 <script>
 
	CKEDITOR.replace( 'ShopDescription' ,
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
       $('#ShopColor').html(data);
    });
}

</script>
