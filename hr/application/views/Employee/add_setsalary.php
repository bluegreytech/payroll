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
					
						<div class="col-md-12">
							<form method="POST" action="<?php echo base_url();?>leave/addempleave" id="frm_addleave">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input type="hidden" name="empleave_id" value="<?php //echo $empleave_id;?>">
												<label>Salary Month<span class="text-danger">*</span>
												</label>											
											   <input type="text" class="form-control" name="salary_month" id="salary_month" readonly="">										
										</div>
										<div class="form-group">
												<label>Employee Code<span class="text-danger">*</span></label>
												<input class=" form-control" type="hidden" name="emp_id" id="emp_id" Placeholder="Employee Code" value="<?php echo $emp_id;?>">
												<input class=" form-control" type="text" name="employee_code" id="employee_code" Placeholder="Employee Code" value="<?php echo $employee_code;?>" <?php if($employee_code){ echo "readonly"; }?> >
										</div>
										<div class="form-group">
											<label>Employee Name <span class="text-danger">*</span>
											</label>											
											<select  class=" form-control selectpicker" data-live-search="true" data-actions-box="true"  name="employename[]" id="employename">
												 <option selected="" value="">Please select</option> 
												<?php if(!empty($emplist)){
												foreach($emplist as $row) { ?>
												<option value="<?php echo $row->emp_id; ?>" <?php if($row->emp_id==$emp_id){echo "selected";} ?> ><?php echo ucfirst($row->first_name." ".$row->last_name);?></option>
												<?php } } ?>
											</select>
											<span id="emperror"></span>
										</div>
										
									</div>
								
									<div class="col-md-6">
										<div class="form-group">
											<label>Joining Date<span class="text-danger">*</span></label>
											<div class="cal-icon">
											<input class="form-control" type="text" name="jod" id="jod" Placeholder="Joining Date"  value="<?php echo $joiningdate;?>" readonly>
											</div>
										</div>
										<div class="form-group">
												<label>Gender<span class="text-danger">*</span></label>
												<select class="form-control" name="Gender"  id="Gender">
													<option disabled="" selected="">Please Select</option>
													<option value="Male" <?php if($gender=='Male'){ echo "selected";}?>>Male</option>
													<option value="Female" <?php if($gender=='Female'){ echo "selected";}?>>Female</option>
													<option value="Other" <?php if($gender=='Other'){ echo "selected";}?>>Other</option>
												</select>
										</div>
										<div class="form-group">
											<label>Pancard No.<span class="text-danger">*</span></label>
											<input class="form-control" type="text" name="jod" id="jod" Placeholder="pancard no"  value="<?php echo $pancard;?>" readonly>
											
										</div>
									</div>

									<div class="col-md-12">
										<hr>
										<div class="row">
 
										<div class="col-sm-6"> 
											<h4 class="text-primary">Earnings</h4>
												<?php 
											   // echo "<pre>";print_r($com_compliances);die;            
												foreach($com_compliancesdeduction as $compdeductdata)
												 { //echo "<pre>";print_r($compdata['compliancename']); 

											?>
											<div class="form-group">
												<label><?php  if($compdeductdata['compliancename']=='PT'){
													echo "Prof. Tax"; 
												}else{
													echo $compdeductdata['compliancename'];
												}
												?></label>
												<input class="form-control" type="text">
												<input type="hidden" name="compliancepercentage[]" id="" value="<?php echo $compdeductdata['compliancepercentage']; ?>">
											</div>
												
											<?php
												}
											?>
											
											<div class="form-group">
												<label>Other</label>
												<input class="form-control" type="text">
											</div>
											<div class="add-more">
												<a href="#"><i class="fa fa-plus-circle"></i> Add More</a>
											</div>
											
										</div>
										<div class="col-sm-6">  
											<h4 class="text-primary">Deductions</h4>
										    <?php 
											   // echo "<pre>";print_r($com_compliances);die;            
												foreach($com_compliances as $compdata)
												 { //echo "<pre>";print_r($compdata['compliancename']); 

											?>
											<div class="form-group">
												<label><?php  if($compdata['compliancename']=='PT'){
													echo "Prof. Tax"; 
												}else{
													echo $compdata['compliancename'];
												}
												?></label>
												<input class="form-control" type="text">
												<input type="hidden" name="compliancepercentage[]" id="">
											</div>
												
											<?php
											}
											?>
										</div>
                                         	
										</div>
										<div class="row">
											<div class="col-sm-6">
												<div class="form-group">
													<label>Gross Earning</label>
													<input class="form-control" type="text">
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label>Total Deduction</label>
													<input class="form-control" type="text">
												</div>
											</div>
										</div>
										<div class="form-group">
											<label>Net Pay</label>
											<input class="form-control" type="text" name="netpay" id="netpay" onkeyup="payword.value=convertNumberToWords(this.value)" style="color: red">
											
										</div>
										<div class="form-group">
											<label><i class="fa fa-inr" aria-hidden="true"></i> in Words</label>
											<input class="form-control" type="text" id="payword" name="payword" style="color: red">
										</div>
									</div>
								</div>							
								
									<div class="submit-section">
									<hr>
									<button class="btn btn-primary submit-btn" name="Save" type="submit" id="btnsave"><?php //echo ($empleave_id!='')?'Update':'Submit' ?>Submit</button>
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
	$('select').selectpicker({
		noneSelectedText : 'Please Select',
	});
   
  	$('#salary_month').datetimepicker({
            "allowInputToggle": true,
            "showClose": true,
            "showClear": true,
            "showTodayButton": true,
            ignoreReadonly: true,		
         	  viewMode: 'months',       		 
              format: 'YYYY-MM',
        }).val('<?php //echo ($leavefrom!='0000-00-00') && ($leavefrom!='')  ? date('d/m/Y', strtotime($leavefrom)) : ''; ?>');  
  
	
	

//$.validator.setDefaults({ ignore: ":hidden:not(select#leavetime)" });
	$("#frm_addleave").validate(
	{
		
		ignore: "input[type='text']:hidden"	,
		 //for all select
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

});
function convertNumberToWords(amount) {

    var words = new Array();
    words[0] = '';
    words[1] = 'One';
    words[2] = 'Two';
    words[3] = 'Three';
    words[4] = 'Four';
    words[5] = 'Five';
    words[6] = 'Six';
    words[7] = 'Seven';
    words[8] = 'Eight';
    words[9] = 'Nine';
    words[10] = 'Ten';
    words[11] = 'Eleven';
    words[12] = 'Twelve';
    words[13] = 'Thirteen';
    words[14] = 'Fourteen';
    words[15] = 'Fifteen';
    words[16] = 'Sixteen';
    words[17] = 'Seventeen';
    words[18] = 'Eighteen';
    words[19] = 'Nineteen';
    words[20] = 'Twenty';
    words[30] = 'Thirty';
    words[40] = 'Forty';
    words[50] = 'Fifty';
    words[60] = 'Sixty';
    words[70] = 'Seventy';
    words[80] = 'Eighty';
    words[90] = 'Ninety';
    amount = amount.toString();
    var atemp = amount.split(".");
    var number = atemp[0].split(",").join("");
    var n_length = number.length;
    var words_string = "";
    if (n_length <= 9) {
        var n_array = new Array(0, 0, 0, 0, 0, 0, 0, 0, 0);
        var received_n_array = new Array();
        for (var i = 0; i < n_length; i++) {
            received_n_array[i] = number.substr(i, 1);
        }
        for (var i = 9 - n_length, j = 0; i < 9; i++, j++) {
            n_array[i] = received_n_array[j];
        }
        for (var i = 0, j = 1; i < 9; i++, j++) {
            if (i == 0 || i == 2 || i == 4 || i == 7) {
                if (n_array[i] == 1) {
                    n_array[j] = 10 + parseInt(n_array[j]);
                    n_array[i] = 0;
                }
            }
        }
        value = "";
        for (var i = 0; i < 9; i++) {
            if (i == 0 || i == 2 || i == 4 || i == 7) {
                value = n_array[i] * 10;
            } else {
                value = n_array[i];
            }
            if (value != 0) {
                words_string += words[value] + " ";
            }
            if ((i == 1 && value != 0) || (i == 0 && value != 0 && n_array[i + 1] == 0)) {
                words_string += "Crores ";
            }
            if ((i == 3 && value != 0) || (i == 2 && value != 0 && n_array[i + 1] == 0)) {
                words_string += "Lakhs ";
            }
            if ((i == 5 && value != 0) || (i == 4 && value != 0 && n_array[i + 1] == 0)) {
                words_string += "Thousand ";
            }
            if (i == 6 && value != 0 && (n_array[i + 1] != 0 && n_array[i + 2] != 0)) {
                words_string += "Hundred and ";
            } else if (i == 6 && value != 0) {
                words_string += "Hundred ";
            }
        }
        words_string = words_string.split("  ").join(" ");
       
    }

    return words_string;
}  
//leaveday=$("select#leavedays option:selected").attr('value');
	

	
	       
</script>
    