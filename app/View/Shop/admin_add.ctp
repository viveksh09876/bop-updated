   <div class="faqs row">
    <div class="floatleft mtop10"><h1><?php echo __('Add Inventory'); ?></h1></div>
    <div class="floatright">
        <?php
		echo $this->Html->link('<span>'.__('Back To Manage Shop').'</span>', array('controller' => 'shop','action' => 'manage','admin' => true),array('class'=>'black_btn','escape'=>false));?>
	</div>
	<div class="errorMsg"><?php echo $this->element('/admin/validations'); ?></div>
</div>
  <!---Fields to be loaded here with js------>
 
<div align="center" class="whitebox mtop15">
     <div class="product_fields">
    <table cellspacing="0" cellpadding="7" border="0" align="center" style=" margin-right: 317px;">	
    <tr>
			<td align="left"><strong class="upper">Product Type</strong></td>
			<td align="left"><?php	
			$products=array();
			foreach($ProductTypes as $prod){
				$products[$prod['ProductType']['id']]=$prod['ProductType']['name'];	
			}
			echo $this->Form->input('product_id',array('class' => 'input required', 'label' => false, 'error' => false, 'div' => false, 'style'=>'width: 450px;','options'=>$products,'empty'=>'Select Product','onChange'=>'getProductFields(this.value)'));?>
			</td>
		</tr>
        </table>
      
        
        	</div>
        </div>
		 
            
  <script>
 
	
  function getRandomInt(min, max) { 
	 
	 for(i=1; i<=6;i++){
	    $('#stats_'+i).val(Math.floor(Math.random() * (max - min + 1)) + min);
    	}
   }
   
   function getProductFields(val){
	   $('.product_fields').html('<div><img src="<?php echo $this->webroot;?>img/loader.gif"></div>');
	   var url='<?php echo $this->webroot;?>admin/shop/product_fields/'+val;
	   $.post(url,function(data){
		  $('.product_fields').html(data);
	   });
   }
  </script>         
    