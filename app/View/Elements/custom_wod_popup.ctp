<?php $this->Html->script(array('ckeditor/ckeditor'), array('inline'=>false));?>

<style>
.mov_value label.error{  margin-left: -107px;  margin-top: 34px; position: absolute;}
.wd_save_options label.error{ margin-top: 14px;position: absolute;}
</style>

<div class="loginpopup custom_wod_popup register" style="display:none;">
    	<span class="overlay"></span>
        <div class="loginBox createEvent addWod">
            <div class="logininner clearfix">
                <a class="close" href="javascript://" onclick="close_form();"><img src="<?php echo $this->webroot; ?>images/close_btn.png" alt=""></a>
                
                <h2>Custom WOD</h2>            
                    
                <?php echo $this->Form->create('Wod',array('id' => 'AddWodForm')); ?>
                    
                    <?php 
						echo $this->Form->input('div',array('type' => 'hidden')); 
						echo $this->Form->input('ctr',array('type' => 'hidden')); 
						echo $this->Form->input('num',array('type' => 'hidden')); 
						echo $this->Form->input('division',array('type' => 'hidden')); 
						echo $this->Form->input('division_sex',array('type' => 'hidden')); 
                    ?>
                    <div class="col">
                      <div class="wodDictionory"> 
                       <?php 
							echo $this->Form->label('title','Title'); 
							echo $this->Form->input('title',array('class' => 'required mr10', 'placeholder' => 'Enter Title', 'label' => false, 'error' => false, 'div' => false)); 
                        ?>                      	
					  </div>
                      
                   
                      <div class="wodDictionory"> 
                      	<?php 
							echo $this->Form->label('description','Event Notes'); 
							echo $this->Form->input('description',array('class' => 'required','type'=>'textarea', 'label' => false, 'error' => false, 'div' => false, 'style'=>'width: 357px;'));
                        ?>
					  </div>    
					   <div class="wodDictionory wd_save_options"> 
					  <?php 	echo $this->Form->label('wod_save_type','Wod save options'); 
							echo $this->Form->input('wod_save_type', array(
								'label' => false,
								'div' => false,
								'type' => 'radio',
								'class' => 'required',
								'options' => array('0' => ' Available to this division only &nbsp;&nbsp;', '1' => ' Available to all divisions'),
								 'selected' => '1',
								'legend' => false
							));
							?>
						</div>	
						                     
                    </div>
                    
                    <div class="col right">                        
                      
                      <div class="wodDictionory"> 
                      	<?php 
                      		$wod_types = array(
								'AMRAP' => 'AMRAP (As Many Rounds As Possible)',
								'AMREP' => 'AMREP (As Many Reps As Possible)',
								'Time' => 'Time',
								'Distance' => 'Distance',
								'Load' => 'Load',
								'Reps' => 'Reps',
								'Rounds For Time' => 'Rounds For Time',
								'EMOM' => 'Every Minute On the Minute'
							);
                      	
							echo $this->Form->label('wod_type','Wod Type'); 
							echo $this->Form->input('wod_type',array('class' => 'required','type'=>'select','empty' => 'Please select','options' => $wod_types, 'label' => false, 'error' => false, 'div' => false)); 
                        ?>  
					  </div>                                           
                  
                      <div class="wodDictionory"> 
                      <?php 
							echo $this->Form->label('details','Wod Details'); 
							echo $this->Form->input('details',array('class' => 'required','type'=>'textarea', 'label' => false, 'error' => false, 'div' => false, 'style'=>'width: 357px;'));
                        ?>                      	
					  </div>			
                      
                    </div> <!--right colum ends here-->
                    
                    
                    
                        <div class="clear"></div>
                       <div style="float: left;
    margin-top: -11px;
    padding-bottom: 10px;
    width: 100%;"><span style="color: #f00;">*</span>Your WOD is currently not saved to WOD dictionary for future use, please fill in the form below to save your WOD</div>  
                       
                     <div class="bottomCol mb10">
                     	<h3> Add Movements </h3>
                        <section class="addMovemnt mt10" id="movementsDataBoxHtml1">
                      <div class="col"> 	
                              <div class="wodDictionory"> 
                                <?php 
									echo $this->Form->label('movement_category][','Movement'); 
									echo $this->Form->input('movement_category][',array('type'=>'select', 'class' => 'required', 'options' => $movements, 'label' => false, 'error' => false, 'div' => false));
								?> 
                              </div>
                      </div>
                      <div class="col right">
                          <div class="wodDictionory"> 
                            <?php 
								echo $this->Form->label('movement_option][','Options'); 
								echo $this->Form->input('movement_option][',array('type'=>'select', 'class' => 'required optionSelected', 'options' => array('time' => 'Time','distance' => 'Distance','load' => 'Load', 'reps' => 'Reps', 'none' => 'None') , 'label' => false, 'error' => false, 'div' => false));
							?> 
                          </div>
                          
                          <div class="wodDictionory mt35 mov_value"> 
                            <?php echo $this->Form->input('option_data][]', array('class' => 'required number','label' => false,'div' => false,'placeholder' => 'value') ); ?>
                          </div>
                          
                          <div class="wodDictionory mt35"> 
                            <?php 
								echo $this->Form->input('movement_distance][',array('type'=>'select', 'class' => 'required distanceOption', 'options' => array('mile' => 'Mile','meter' => 'Meter'), 'label' => false, 'error' => false, 'div' => false, 'style' => 'width:100px; display:none; ')); 
								echo $this->Form->input('movement_load][',array('type'=>'select', 'class' => 'required loadOption', 'options' => array('lbs' => 'lbs','kg' => 'Kg'), 'label' => false, 'error' => false, 'div' => false, 'style'=>'display:none;width:100px;')); 
                            ?>
                          </div>
                      </div>
                        <div class="clear"></div>
                        </section>
                        <div class="clear"></div>
                        	
                     </div> <!--bottom colum ends here-->    
                     
                     
                         <input class="gray-btn mb20 ml10" value="Remove" id="removeButton" type="button" style='display:none;'>
                         <input class="gray-btn mb20" value="Add Movement" id="addButton" type="button">
                        <div class="clear"></div>
                    <div class="col">     
	                    <div class="wodDictionory mb30 existing_wod_condition" style="display: none;">
	                     <?php 	
	                     
	                     		echo $this->Form->input('existing_wod_id',array('type'=>'hidden', 'id'=>'existing_wod_id'));
	                     
	                     		echo $this->Form->label('select_wod','Select type of Wod you want to use'); 
								echo $this->Form->input('select_wod', array(
									'label' => false,
									'div' => false,
									'type' => 'radio',
									'options' => array('0' => ' Existing Wod  ', '1' => ' Save New Wod'),
									'onclick' => 'toggle_adjusted_criteria(this.value)',
									'selected' => '0',
									'legend' => false
								));
								?>
	                    </div> 
	                  </div>
	                  <div class="clear"></div>    	
                      <div class="col adjusted_criteria" style="display: none;">
                    <div class="wodDictionory">                      
                       <?php    		                   
                       
							echo $this->Form->label('adjusted_criteria','Adjusted Criteria'); 
							echo $this->Form->input('adjusted_criteria', array(
								'label' => false,
								'div' => false,
								'type' => 'select',
								'options' => array('time'=>'Time', 'distance' => 'Distance', 'reps' =>'Reps', 'load' => 'Load', 'rounds' => 'Rounds'),								
								'legend' => false
							));
                        ?>                       
					  </div>   
					 </div> 
					   <div class="col right adjusted_criteria" style="display: none;">
					   		<div class="wodDictionory">   
						   	 <?php 
								echo $this->Form->label('adjusted_criteria_value','Value'); 
								echo $this->Form->input('adjusted_criteria_value',array('class' => '', 'placeholder' => 'Enter Value', 'label' => false, 'error' => false, 'div' => false)); 
	                        ?>  
	                        </div>
					   </div>
					   	
					  
					
					     <div class="clear"></div>
                         
                    <div class="bottom save_my_wod">
						
                        <button onclick="submit_addWodForm();" class="submit_wod_details pull-left">Submit Details</button>
                    </div>  
                    
                     <div class="bottom save_existing_wod" style="display: none;">
						
                        <button onclick="return use_existing_wod();" class="submit_wod_details pull-left">Continue</button>
                    </div>  
                    
                <?php echo $this->Form->end(); ?>
            
            </div>
        </div>    
    </div>


<?php
$this->Js->get('#WodTypeId')->event('change', 
	$this->Js->request(array(
		'controller'=>'events',
		'action'=>'get_by_type'
		), array(
		'update'=>'#WodSubType',
		'async' => true,
		'method' => 'post',
		'dataExpression'=>true,
		'data'=> $this->Js->serializeForm(array(
			'isForm' => true,
			'inline' => true
			))
		))
	);
?>
<script type="text/javascript">


$(document).ready(function(){ 
    var counter = 2;
    
    $('.existing_wod_condition').hide();
	$('#existing_wod_id').val('');
	$('.save_existing_wod').hide();
    
    $("#addButton").click(function () { 
	    var html = $("#movementsDataBoxHtml1").html();
		$(".addMovemnt:last").after('<section class="addMovemnt mt10" id="movementsDataBoxHtml'+ counter +'">'+ html + '</section>');
		
		if(counter >= 1)
		{
			$("#removeButton").show();	
		}
		counter++;
     });
 
     $("#removeButton").click(function () {
		if(counter==1){
	          alert("No more textbox to remove");
	          return false;
	       } 	 
		counter--;	
		
		if(counter == 1)
		{
			$("#removeButton").hide();	
		} 
        $("#movementsDataBoxHtml" + counter).remove();
 
     });
     
    $(".optionSelected").live('change',function(){
		var selectedOption = $(this).val();
		
		var parentId = $(this).parents('section').attr("id");
	
		if ( selectedOption == 'distance'){
			$('#' + parentId + ' .distanceOption').show();
			$('#' + parentId + ' .loadOption').hide();
		}else if ( selectedOption == 'load'){
			$('#' + parentId + ' .distanceOption').hide();
			$('#' + parentId + ' .loadOption').show();
		}else{
			$('#' + parentId + ' .distanceOption').hide();
			$('#' + parentId + ' .loadOption').hide();
		}
	});
     
  });

  
	CKEDITOR.replace( 'WodDescription' ,
	{
		toolbar: [
			{ name: 'document', items: [ 'Source', '-', 'NewPage', 'Preview', '-', 'Templates' ] },	// Defines toolbar group with name (used to create voice label) and items in 3 subgroups.
			[ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ],			// Defines toolbar group without name.
			'/',																					// Line break - next group will be placed in new line.
			{ name: 'basicstyles', items: [ 'Bold', 'Italic' ] }
		]
	});
	CKEDITOR.replace( 'WodDetails' ,
	{
		toolbar: [
			{ name: 'document', items: [ 'Source', '-', 'NewPage', 'Preview', '-', 'Templates' ] },	// Defines toolbar group with name (used to create voice label) and items in 3 subgroups.
			[ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ],			// Defines toolbar group without name.
			'/',																					// Line break - next group will be placed in new line.
			{ name: 'basicstyles', items: [ 'Bold', 'Italic' ] }
		]
	});
	
	
	function submit_addWodForm()
	{
		$('#AddWodForm').validate({
            submitHandler: function(form) { 
            	var textarea = document.getElementById('WodDetails'); 
	   			CKEDITOR.instances[textarea.id].updateElement(); // update textarea
	   			 var editorcontent = textarea.value.replace(/<[^>]*>/gi, ''); // strip tags
	   			if(editorcontent.length == 0)
	   			{
	   				alert('Please enter Wod Details');
	   			}else{                
				            
	               $('.submit_wod_details').hide();
	               $.post('<?php echo $this->webroot; ?>events/save_custom_wod', $('#AddWodForm').serialize(), function(data){ 
						
						var response = JSON.parse(data);					
						if(response['status'] == "exist")
						{
							alert('A similar Wod already exist.');
							$('.existing_wod_condition').show();
							$('#existing_wod_id').val(response['wod_id']);
							$('.submit_wod_details').show();
							$('.save_my_wod').hide();
							$('.save_existing_wod').show();
							$('#WodSelectWod0').attr('checked','checked');
							
						}else{
						
							if(response['status'] == 'success')
							{
								$('.wods_select').append('<option id="op_wod_' + response['div']+'_'+response['ctr'] + '_' + response['wod_id'] + '" value="' + response['wod_id'] + '">' + response['wod_title'] + '</option>');	
							}
							
							$('.wod_select_' +response['div']+'_'+response['ctr']).val(response['wod_id']);
							get_wod_details(response['wod_id'], response['div'] ,response['ctr'], response['num'], response['division'], response['division_sex']);
							
							reset_form();
							scrollToAnchor('.new_division_' + response['div']);	
						}
						
			 	  });
			 	}
            }   
        });	
        return false;
	}
	
	function reset_form()
	{		
		/*Reset Form*/
		$('#AddWodForm input[type=text]').val('');
		$('#AddWodForm textarea').val('');
		document.getElementById('AddWodForm').reset();
		
		
		CKEDITOR.instances['WodDescription'].setData(''); // update textarea
		CKEDITOR.instances['WodDetails'].setData(''); // update textarea
		$('#AddWodForm').validate().resetForm();
		$('.submit_wod_details').show();
		$('.custom_wod_popup').hide();
		$('#WodAdjustedCriteriaValue').removeClass('required');
		$('.adjusted_criteria').hide();
		$('.existing_wod_condition').hide();
	}
	
	function close_form()
	{
		var div = $('#WodDiv').val();
		reset_form(); 
		$('.custom_wod_popup').fadeOut();	
		scrollToAnchor('.new_division_' + div);
	}
	
	function toggle_adjusted_criteria(val)
	{
		if(val == '1')
		{
			$('.adjusted_criteria').show();
			$('#WodAdjustedCriteriaValue').addClass('required');
			$('.save_my_wod').show();
			$('.save_existing_wod').hide();
			
		}else{
			$('#WodAdjustedCriteriaValue').removeClass('required');
			$('.adjusted_criteria').hide();
			$('.save_my_wod').hide();
			$('.save_existing_wod').show();
		}	
	}
	
	function use_existing_wod()
	{
		var wod_id = $('#existing_wod_id').val();
		var div = $('#WodDiv').val();
		var ctr = $('#WodCtr').val();
		var num = $('#WodNum').val();
		var division = $('#WodDivision').val();
		var division_sex = $('#WodDivisionSex').val();
		
		document.getElementById('AddWodForm').reset();
		 $('.existing_wod_condition').hide();
		$('#existing_wod_id').val('');
		$('.save_existing_wod').hide();
		$('.save_my_wod').show();
		
		$('.wod_select_' + div + '_' + ctr).val(wod_id);
		get_wod_details(wod_id, div ,ctr, num, division, division_sex);
		$('.custom_wod_popup').hide();
		scrollToAnchor('.new_division_' + div);	
		return false;
	}
	
</script>

<?php
if (class_exists('JsHelper') && method_exists($this->Js, 'writeBuffer')) echo $this->Js->writeBuffer();
// Writes cached scripts
?>    

