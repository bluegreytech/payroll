<select class="form-control" name="hr_id"> 
	<option desabled value="">Please select hr</option>
	<?php
	if($hrData){
		foreach($hrData as $hr)
		{
	?>
		<option value="<?php echo $hr->hr_id; ?>"><?php echo $hr->FullName;?></option>
	<?php
	}}
	?>
</select>