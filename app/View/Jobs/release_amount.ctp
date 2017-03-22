<div style="text-align:center; padding: 10px; width: 300px;">
	
	<div>
	<label for="release_amount">Amount: </label>
	$<input id="release_amount" type="number" name="release_amount" value="<?php echo $release_amount; ?>" style="margin-bottom: 10px; width: 50px;">
	</div>
	<button type="button" onclick="release_confirm();">Release Amount</button>
</div>

<script type="text/javascript">

function release_confirm() {
	
	var amt = $('#release_amount').val();
	if(amt != '' && parseInt(amt) > 0) {
		var y = confirm('Are you sure you want to transfer $'+amt);
		if(y) {
			$.post('<?php echo $this->webroot.'/jobs/release_amount'; ?>', {rel: amt, emp: '<?php echo $employee_id; ?>', jobid: '<?php echo $jobid; ?>'}, function(resp){
				
				if(resp == 'insufficent_funds') {
					alert('You have insufficent funds!');
					window.location.reload();
				}else if(resp == 'success') {
					alert('Amount transferred successfully!');
					window.location.reload();
				}
				
			});
		}
	}else{
		alert('Please enter valid amount');
	}
	
	
}

</script>