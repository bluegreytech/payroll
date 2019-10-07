<?php 
	 $this->load->view('common/header');
	 $this->load->view('common/sidebar');
?>
			<!-- Page Wrapper -->
 <div class="page-wrapper">			
   <div class="content container-fluid">
		<div class="row">
			<div class="col-md-12">
				<?php if(($this->session->flashdata('error'))){ ?>
				<div class="alert alert-danger" id="errorMessage">
				<strong><?php echo $this->session->flashdata('error'); ?></strong> 
				</div>
				<?php } ?>
				<?php if(($this->session->flashdata('success'))){ ?>
				<div class="alert alert-success" id="successMessage">
				<strong> <?php echo $this->session->flashdata('success'); ?></strong> 
				</div>
				<?php } ?>
				<h4 class="page-title">Add Leave</h4>
				<div class="card-box mb-0">
					<div class="row">
						<div class="offset-md-1 col-md-10 offset-md-1">
							<form method="POST" action="<?php echo base_url();?>leave/addempleave" id="frm_addleave">
								<div class="form-group">
									<input type="hidden" name="empleave_id" value="<?php echo $empleave_id;?>">
											<label>Employee Name <span class="text-danger">*</span>
											</label>											
											<select  class=" form-control selectpicker" multiple data-live-search="true" data-actions-box="true" multiple name="employename[]" id="employename">
												<!-- <option disabled="" value="">Please select</option> -->	
												<?php if(!empty($emplist)){
													foreach($emplist as $row) { ?>
													<option value="<?php echo $row->emp_id; ?>" <?php if($row->emp_id==$emp_id){echo "selected";} ?> ><?php echo ucfirst($row->first_name." ".$row->last_name);?></option>
													<?php  } } ?>
											</select>
											<span id="emperror"></span>
										</div>
								<div class="form-group">
									<label>Leave Type <span class="text-danger">*</span></label>
									<select class="form-control" name='typeofleave' id='typeofleave'>
										<option selected="" value="" disabled="">Please select</option>
										<?php if(!empty($leavelist)){ 
											foreach($leavelist as $row) { //echo "<pre>";print_r($row);   ?>
                                             <option value="<?php echo $row->leave_id; ?>" <?php if($row->leave_id==$typeofleave){ echo "selected"; } ?>><?php echo ucfirst($row->leave_name);?></option>
										<?php } } ?>									
									</select>
								</div>
								<div class="form-group">
									<label>Leave<span class="text-danger">*</span></label>
									<select class="form-control" name='leavedays' id='leavedays'>
										<option selected="" value="" disabled="">Please select</option>
									  	<option value="halfday" <?php if($leavedays=='halfday'){ echo "selected"; }?>>Half Day</option>
									  	<option value="fullday" <?php if($leavedays=='fullday'){ echo "selected"; }?>>Full Day</option>	
									  	<option value="earlyleave" <?php if($leavedays=='earlyleave'){ echo "selected"; }?>>Early Leave</option>								
									</select>
								</div>
								<div class="form-group">
									<label>From <span class="text-danger">*</span></label>
									<div class="cal-icon">
									<input class="form-control" type="text" name="leavefrom" id="leavefrom" readonly="">
									</div>
									<!-- <div class="form-group">
                                        <label>From <span class="text-danger">*</span></label>
                                        <div class="input-group date cal-icon" id="id_0">
                                            <input type="text"  class="form-control timing" required/>
                                        </div>
                                    </div> -->
										
								</div>
								<div class="form-group">
									<label>To <span class="text-danger">*</span></label>
									<div class="cal-icon">
									<input class="form-control" type="text" name="leaveto" id="leaveto" readonly="">
									</div>
								</div>
								<div class="form-group" id="timein" style="display:none;">
									<label>Time in  <span class="text-danger">*</span></label>
									<div class="clock-icon">
									<input class="form-control" type="text" name="leavetimein" id="leavetimein" readonly="" >
									</div>
								</div>
								<div class="form-group"  id="timeout" style="display:none;">
									<label>Time out  <span class="text-danger">*</span></label>
									<div class="cal-icon">
									<input class="form-control" type="text" name="leavetimeout" id="leavetimeout" readonly="">
									</div>
								</div>
								<div class="form-group">
									<label>Number of days <span class="text-danger">*</span></label>
									<input class="form-control" type="text" name="noofdays" id="noofdays"  readonly="" value="<?php echo $noofdays; ?>">
								</div>
							
								<div class="form-group">
									<label>Leave Reason <span class="text-danger">*</span></label>
									<textarea rows="4" class="form-control" name="leavereason" id="leavereason"><?php echo $leavereason; ?></textarea>
								</div>
									<div class="submit-section">
									<hr>
									<button class="btn btn-primary submit-btn" name="Save" type="submit"><?php echo ($empleave_id!='')?'Update':'Submit' ?></button>
									<button type="button" name="cancel" class="btn btn-secondary submit-btn" onClick="location.href='<?php echo base_url(); ?>leave/<?php echo 
									$redirect_page; ?>'">Cancel
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				
				</div>
			</div>
		</div>
	</div>
<!-- /Page Wrapper -->
</div>
	<!-- /Main Wrapper -->

	<!-- Sidebar Overlay -->
	<div class="sidebar-overlay" data-reff=""></div>

	<!-- jQuery -->
    <?php  $this->load->view('common/footer'); ?>
		
<script>
	$(function() { 
    setTimeout(function() {
  $('#errorMessage').fadeOut('fast');
}, 5000);  
});

$(function() { 
    setTimeout(function() {
  $('#successMessage').fadeOut('fast');
}, 5000);  
});

$(function() { 
    setTimeout(function() {
  $('#warningMessage').fadeOut('fast');
}, 5000);  
});
$(document).ready(function()
{
   
  	$('#leavefrom').datetimepicker({
            "allowInputToggle": true,
            "showClose": true,
            "showClear": true,
            "showTodayButton": true,
            ignoreReadonly: true,		
            "format": "DD/MM/YYYY",
        }).val('<?php echo ($leavefrom!='0000-00-00') && ($leavefrom!='')  ? date('d/m/Y', strtotime($leavefrom)) : ''; ?>');  
  
	$('#leaveto').datetimepicker({					
				  	format: 'DD/MM/YYYY',					
					ignoreReadonly: true,
					"allowInputToggle": true,
		            "showClose": true,
		            "showClear": true,
		            "showTodayButton": true,
	}).val('<?php echo ($leaveto!='0000-00-00')&&($leaveto!='')  ? date('d/m/Y', strtotime($leaveto)) : ''; ?>');
	
		
    $('#leavetimein').datetimepicker({					
				   format: "hh:mm:ss A",			
					ignoreReadonly: true,
	}).val('<?php echo ($leavetimein!='00:00:00')&&($leavetimein!='')  ? date('h:i:s A', strtotime($leavetimein)) : ''; ?>');

   $('#leavetimeout').datetimepicker({					
				format: "hh:mm:ss A",			
				ignoreReadonly: true,					
					
	}).val('<?php echo ($leavetimeout!='00:00:00')&&($leavetimeout!='')  ? date('h:i:s A', strtotime($leavetimeout)) : ''; ?>');


	$("#frm_addleave").validate(
	{
			rules: {
				'employename[]':{
					required:true,						
			    },
				typeofleave:{
					required:true,
				},		
				leavefrom:{
					required:true,
				},
				leaveto:{				
					required: true,
				},
				leavedays:{
					required: true,
				},
				noofdays:{
					required: true,
				},						
			
			},
		
			errorPlacement: function (error, element) {
				console.log('dd', element.attr("name"));
				if(element.attr("name") == "employename[]") {
					error.appendTo("#emperror");
				} else{
				error.insertAfter(element)
				}
			}											
			
			
	});

	$("#leavedays").change(function () {
	var end = this.value;
	var leavedays = $('#leavedays').val();
	
	if(leavedays=='halfday'){


		//alert(leavedays);
		$('#timein').css('display','block');
		$('#timeout').css('display','block');
       


	}else if(leavedays=='earlyleave'){
    	$('#timein').css('display','block');
		$('#timeout').css('display','block');
      
	} 
	else{
	
		$('#timein').css('display','none');
		$('#timeout').css('display','none');
	}
  
	});

});	
 
   
  var leavedays = $("select#leavedays option:selected").attr('value');
  //alert(leavedays);
  if(leavedays=='halfday'){
		//alert(leavedays);
		$('#timein').css('display','block');
		$('#timeout').css('display','block');
       
		

	}else if(leavedays=='earlyleave'){

    	$('#timein').css('display','block');
		$('#timeout').css('display','block');
       
	} 
	else{
		//alert(leavedays);
		$('#timein').css('display','none');
		$('#timeout').css('display','none');

	

	}


$(document).ready(function() {
   	$('#leaveto').focusout(function(){  

		var fromDate = $('#leavefrom').val(); 			
		var toDate = $('#leaveto').val();
		var dateFirst = new Date(myDateFormatter(fromDate));
		var dateSecond = new Date(myDateFormatter(toDate));    
		// time difference
		var timeDiff = Math.abs((dateSecond.getTime()) - dateFirst.getTime());
		var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));
		total=diffDays+1;

		//console.log(diffDays+1);
		$('#noofdays').val(total);
    });

     $('#timeout').focusout(function(){  
			var timein = $('#timein').val();
			var timeout = $('#timeout').val();
			alert(timein);
			alert(timeout);
		    var diff =  new Date(timeout) - new Date( timein);  

			alert(diff);
		});
});
	
	
	
function myDateFormatter (dobdate) {
 dArr = dobdate.split("/");  // ex input "18/01/2010"
//console.log(dArr);
  return dArr[1]+ "/" +dArr[0]+ "/" +dArr[2]; //ex out: "18/01/10"       
};


	
	       
</script>
    