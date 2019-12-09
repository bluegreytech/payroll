<?php 
	 $this->load->view('common/header');
	 $this->load->view('common/sidebar');
?>
<style type="text/css">
	table.table td .add {
		display: none;
	}
	table.table td .comadd {
		display: none;
	}
</style>
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
				<h4 class="page-title">Add Employee</h4>
				<div class="card-box mb-0">
					<div class="row">
						<div class="col-md-12">
								<form method="post" enctype="multipart/form-data" action="<?php echo base_url();?>employee/addemp" id="frm_emp">
									<div class="profile-img-wrap edit-img">
									<?php  

									 if(($ProfileImage!='' && file_exists(base_path().'/upload/emp/'.$ProfileImage))){ ?>
										<img class="inline-block" src="<?php echo base_url(); ?>upload/emp/<?php echo $ProfileImage; ?>" alt="" id="blah">
									<?php
									}else{
									?>
										<img class="inline-block" src="<?php echo base_url(); ?>upload/no_image/user_no_image.png" alt="" id="blah">
									<?php
									}
									?>
										<div class="fileupload btn">
											<span class="btn-text">Upload</span>
												<input type="hidden" name="pre_profile_image" class="form-control" value="<?php echo $ProfileImage;?>" id="pre_profile_image">
											<input type="file" name="ProfileImage" class="upload" onchange="readURL(this);">
												<span id="imgerror"></span>
										</div>
									
									</div>
									
							
							<div class="row"> 
								<div class="col-sm-6">
									<div class="form-group">
										<label>Employee Code<span class="text-danger">*</span></label>
										<input class=" form-control" type="hidden" name="emp_id" id="emp_id" Placeholder="Employee Code" value="<?php echo $emp_id;?>">
										<input class=" form-control" type="text" name="employee_code" id="employee_code" Placeholder="Employee Code" value="<?php echo $employee_code;?>" <?php if($employee_code){ echo "readonly"; }?> >
									</div>
									<div class="form-group">
										<label>Department<span class="text-danger">*</span></label>
										<input class=" form-control" type="text" name="department" id="department" Placeholder="Department" value="<?php echo $department ? $department :'';?>">
									</div>
									<div class="form-group">
										<label>Designation<span class="text-danger">*</span></label>
										<input class=" form-control" type="text" name="desgination" id="desgination" Placeholder="Designation" value="<?php echo $desgination;?>">
									</div>
									
									<div class="form-group">
										<label>First Name<span class="text-danger">*</span></label>
										<input type="hidden" name="hr_id" id="hr_id">	
										<input class="form-control" type="text" name="FirstName" Placeholder="First Name" id="First_Name" value="<?php echo $first_name ;?>">
									</div>
									<div class="form-group">
										<label>Last Name<span class="text-danger">*</span></label>
										<input type="hidden" name="hr_id" id="hr_id">	
										<input class="form-control" type="text" name="LastName" Placeholder="Last Name" id="LastName" value="<?php echo $last_name ;?>">
									</div>
									<div class="form-group">
										<label>Email Address</label>
										<input class="form-control" type="text" name="EmailAddress" Placeholder="EmailAddress"  id="EmailAddress" value="<?php echo $email; ?>" <?php if($email){ echo "readonly"; }?>>
									</div>
									<div class="form-group">
										<label>Phone<span class="text-danger">*</span></label>
										<input class="form-control" type="text" name="PhoneNumber" Placeholder="PhoneNumber" id="PhoneNumber" value="<?php echo $phone ;?>">
									</div>
									<div class="form-group">
										<label>Date of Birth<span class="text-danger">*</span></label>
										<div class="cal-icon">
										<input class="form-control" type="text" name="dob"  id="dob" Placeholder="Date of Birth" value="<?php //echo $Dateofbirth?$Dateofbirth:''; ?>" readonly>
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
										<label>Marital Status<span class="text-danger">*</span></label>
										<select class="form-control" name="marital_status"  id="Gender">
											<option disabled="" selected="">Please Select</option>
											<option value="single" <?php if($marital_status=='single'){ echo "selected";} ?>>Single</option>
											<option value="married" <?php if($marital_status=='married'){ echo "selected"; }?>>Married</option>
										</select>
									</div>
									  <div class="form-group">
										<label>Address<span class="text-danger">*</span></label>
										<textarea class="form-control" name="Address" id="Address"><?php echo $Address; ?></textarea>
										</div>
									
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label>Place of Birth</label>
										<input class="form-control" type="text" name="pob" Placeholder="Place of Birth" id="pob" value="<?php echo $Placeofbirth; ?>" >
									</div>
									
									<div class="form-group">
										<label>Religion</label>
										<input class="form-control" type="text" name="religion" Placeholder="Religion" id="religion" value="<?php echo $religion;?>">
									</div>
									<div class="form-group">
										<label>Nationality</label>
										<input class="form-control" type="text" name="nationality" Placeholder="Nationality" id="nationality" value="<?php echo $nationality; ?>">
									</div>
									<div class="form-group">
										<label>Joining Date<span class="text-danger">*</span></label>
										<div class="cal-icon">
										<input class="form-control" type="text" name="jod" id="jod" Placeholder="Joining Date"  value="<?php echo $joiningdate;?>" readonly>
										</div>
									</div>
									<div class="form-group">
										<label>Qualification Employee<span class="text-danger">*</span></label>
										<select class="form-control" name="qualificationemp"  id="qualificationemp">
											<option disabled="" selected="">Please Select</option>
											<option value="10th" <?php if($qualification_emp=='10th'){echo "selected";}?>>10th</option>
											<option value="12th" <?php if($qualification_emp=='12th'){echo "selected";}?>>12th</option>
											<option value="B.A." <?php if($qualification_emp=='B.A.'){echo "selected";}?>>B.A.</option>
											<option value="B.E." <?php if($qualification_emp=='B.E.'){echo "selected";}?>>B.E.</option>
											<option value="B.Ed" <?php if($qualification_emp=='B.Ed'){echo "selected";}?>>B.Ed</option>
											<option value="M.E." <?php if($qualification_emp=='M.E.'){echo "selected";}?>>M.E.</option>
											<option value="Bsc."<?php if($qualification_emp=='Bsc.'){echo "selected";}?>>Bsc.</option>
											<option value="Msc." <?php if($qualification_emp=='Msc.'){echo "selected";}?>>Msc.</option>
											<option value="B.C.A." <?php if($qualification_emp=='B.C.A.'){echo "selected";}?> >B.C.A.</option>
											<option value="M.C.A." <?php if($qualification_emp=='M.C.A.'){echo "selected";}?>>M.C.A.</option>
											<option value="Bcom." <?php if($qualification_emp=='Bcom.'){echo "selected";}?>>Bcom.</option>
											<option value="Mcom."  <?php if($qualification_emp=='Mcom.'){echo "selected";}?>>Mcom.</option>
											<option value="BBA" <?php if($qualification_emp=='BBA'){echo "selected";}?>>BBA</option>
											<option value="MBA" <?php if($qualification_emp=='MBA'){echo "selected";}?>>MBA</option>
											<option value="Diploma" <?php if($qualification_emp=='Diploma'){echo "selected";}?>>Diploma</option>
											<option value="Other" <?php if($qualification_emp=='Other'){echo "selected";}?>>Other</option>
										</select>
										
									</div>
									<div class="from-group">
										<?php if($qualification_emp=='Other'){  ?>
										<input type="text" name="otherqulification" id="otherqulification" class="form-control" value="<?php echo  $otherqulification; ?>">
										<?php }else{ ?>
                                        <input type="text" name="otherqulification" id="otherqulification" class="form-control" value="">
										<?php } ?>
									</div>
									
									<div class="form-group">
										<label class="col-form-label">Blood Group</label>
									    <select class="form-control" name="bloodgroup"  id="bloodgroup">
											<option disabled="" selected="">Please Select</option>
											<option value="A+" <?php if($bloodgroup=='A+'){echo "selected";}?>>A+</option>
											<option value="A-" <?php if($bloodgroup=='A-'){echo "selected";}?>>A-</option>
											<option value="B+" <?php if($bloodgroup=='B+'){echo "selected";}?>>B+</option>
											<option value="B-" <?php if($bloodgroup=='B-'){echo "selected";}?>>B-</option>
											<option value="O+" <?php if($bloodgroup=='O+'){echo "selected";}?> >O+</option>
											<option value="O-" <?php if($bloodgroup=='O-'){echo "selected";}?>>O-</option>
											<option value="AB+"  <?php if($bloodgroup=='AB+'){echo "selected";}?>>AB+</option>
											<option value="AB-" <?php if($bloodgroup=='AB-'){echo "selected";}?>>AB-</option>
										</select>
									</div>
										<div class="form-group">
										<label class="col-form-label">Salary<span class="text-danger">*</span></label>
									    <select class="form-control" name="salary" id="salary">
											<option disabled="" selected="">Please Select</option>
											<option value="monthly" <?php if($salary=='monthly'){echo "selected";}?>>Monthly</option>
											<option value="per_day_wages" <?php if($salary=='per_day_wages'){echo "selected";}?>>Per Day Wages</option>
										</select>
									</div>
										<div class="form-group">
										<label class="col-form-label">Annual Salary Amount<span class="text-danger">*</span></label>
									    <input type="text" class="form-control" name="salary_amount" id="salary_amount" value="<?php echo $salaryamt;?>">
									</div>
									<div class="form-group">
										<label class="col-form-label">Probation Period Day<span class="text-danger">*</span></label>
										<div class="cal-icon">
									  		<input type="text" name="probation_period_day" class="form-control" id="probation_period_day" value="<?php echo $probation_period_day;?>" readonly>
										</div>
									</div>

									<div class="form-group">
										<label class="col-form-label">Physically Challanged<span class="text-danger">*</span></label>
										<select name="physically_challenged"  class="form-control" id="physically_challenged">
											<option value="" disabled="" selected="">Please Select</option>
											<option value="Yes" <?php if($physically_challenged=='Yes'){ echo "selected"; } ?>>Yes</option>
											<option value="No" <?php if($physically_challenged=='No'){ echo "selected"; } ?>>No</option>
										</select>
									</div>

								<?php  if($status!=''){ //echo $status; ?>
                                
									<div class="form-group">
										
                                         <label class="col-form-label" style="margin-top: 11px;">Status<span class="text-danger">*</span></label> &nbsp;
											<label class="radio-inline">
												<input type="radio" name="status" <?php if($status=="Active") { echo "checked"; } ?>  value="Active" >Active
											</label>
											<label class="radio-inline">
												<input type="radio" name="status" <?php if($status=="Inactive") { echo "checked"; } ?> value="Inactive">Inactive
											</label>
									</div>
									<?php } else { ?>
										<div class="form-group">
											<label class="col-form-label" style="margin-top: 11px;">Status<span class="text-danger">*</span></label>
											<label class="radio-inline">
												<input type="radio" name="status" checked  value="Active">Active
											</label>
											<label class="radio-inline">
												<input type="radio" name="status" value="Inactive">Inactive
											</label>
										</div>
								<?php } ?>
								</div>

									<div class="col-md-12">
										<hr>
									    <h3 class="card-title">Employee Documents </h3>
									    <div class="row">
										    <div class="col-md-6">
												<div class="form-group">
													<label class="col-form-label">Adharcard No.<span class="text-danger">*</span></label>
													<input type="text" class="form-control" name="aadharcard" id="aadharcard" value="<?php echo $aadharcard;?>"  minlength="14">
												</div>
											  
												<div class="form-group">
													<label class="col-form-label">UAN Status<span class="text-danger">*</span></label>
													<select name="uanstatus" id="uanstatus" class="form-control">
														<option selected="" disabled="">Please Select</option>
														<option value="applicable" <?php if($uanstatus=="applicable"){ echo "selected";}?>>Applicable</option>
														<option value="notapplicable" <?php if($uanstatus=="notapplicable"){ echo "selected";}?>>Not Applicable</option>
													</select>
												</div>
												<div class="form-group" id='uannumber'>
													<label class="col-form-label">UAN Number<span class="text-danger">*</span></label>
													<input type="text" class="form-control" id="uanno" name="uanno" value="<?php echo $uanno; ?>">
												</div>
                                                <div class="form-group">
													<label class="col-form-label">Professional Tax Status<span class="text-danger">*</span></label>
													<select name="taxstatus" id="taxstatus" class="form-control">
														<option selected="" disabled="">Please Select</option>
														<option value="applicable" <?php if($taxstatus=="applicable"){ echo "selected";}?>>Applicable</option>
														<option value="notapplicable" <?php if($taxstatus=="notapplicable"){ echo "selected"; }?>>Not Applicable</option>
													</select>
												</div>

												<!-- <div class='form-group'>
													<select class="form-control selectpicker" multiple data-live-search="true" data-actions-box="true" name="complianceapply" id="complianceapply" >
																									
													<?php foreach ($compliancelist as $row){ ?>     
														<option value="<?php echo $row->complianceid;?>"><?php echo $row->compliancename; ?></option>
													<?php } ?>
													</select>
												</div> -->
											

											</div>	
											<!-- <div class="col-md-6"> -->
												
											<!-- </div>		 -->									
											<div class="col-md-6">
												<div class="form-group">
													<label class="col-form-label">Pancard No.<span class="text-danger">*</span></label>
													<input type="text" class="form-control" name="pancard" id="pancard" value="<?php echo $pancard;?>">
												</div>

												<div class="form-group">
													<label class="col-form-label">ESIC Status<span class="text-danger">*</span></label>
													<select name="esicstatus" id="esicstatus" class="form-control">
														<option selected="" disabled="">Please Select</option>
														<option value="applicable" <?php if($esicstatus=="applicable"){ echo "selected";}?>>Applicable</option>
														<option value="notapplicable" <?php if($esicstatus=="notapplicable"){ echo "selected";}?>>Not Applicable</option>
													</select>
												</div>
												<div class="form-group" id='esicnumber'>
													<label class="col-form-label">ESIC Number<span class="text-danger">*</span></label>
													<input type="text" class="form-control" id="esicno" name="esicno" value="<?php echo $esicno;?>">
												</div>
												 <div class="form-group">
													<label>Upload Document <span class="text-danger">*</span></label>
													<input type="hidden" class="form-control" name="pre_bank_detail" id="pre_bank_detail" value="<?php echo $bankdetail;?>">
													<input type="file" class="form-control" name="bank_detail" id="bank_detail" onchange="readURLdcox(this);">
													<!-- <span class="form-text text-muted">Recommended image size is 40px x 40px</span> -->
												</div>
												<div class="preview">
												<?php if(($bankdetail!='' && file_exists(base_path().'/upload/empdetail/'.$bankdetail))){ ?>
													<?php
														$filename = $bankdetail;
														$ext = pathinfo($filename, PATHINFO_EXTENSION); 
														if($ext=="pdf"){ ?>
														<a target="_blank" href="<?php echo base_url()?>upload/empdetail/<?php echo $bankdetail;?>"><img id="blahbroch" src="<?php echo base_url()?>upload/no_image/pdfimage.png" class="img-thumbnail border-0" style="display: block;  width: 100px; height: 100px;"></a>
														<?php  }else{  ?>

														<a target="_blank" href="<?php echo base_url()?>upload/empdetail/<?php echo $bankdetail;?>"><img id="blahdocx" src="<?php echo base_url()?>upload/empdetail/<?php echo $bankdetail;?>" class="img-thumbnail border-0" style="display: block;  width: 100px; height: 100px;"></a>
													<?php } ?>

												<?php } else{ ?>

												<img id="blahdocx" src="" class="img-thumbnail border-0" style="display: none;  width: 100px; height: 100px;">
												<?php } ?>
											</div> 
											</div>
											<table class="table">
													<th>Compliance Name</th>
													<th>Compliance Detail</th>
													<th>Able/Not able</th>
													<tbody>
														
														<?php foreach ($compliancelist as $row){ ?> 
														<tr>
															<td><?php echo $row->compliancename; ?></td>
															<td></td>		
															
															<td>
																<input type="checkbox" name="compliancecheck[]" class='checkbtn'>
															</td>
														</tr>
														<?php } ?>		 
													</tbody>
												</table>
										</div>
								
											
									</div>
									<div class="col-md-12">
										<hr>
									    <h3 class="card-title">Employee Leave Detail </h3>
									     <div class="row">									   
                                                <table class="table table-striped table-nowrap custom-table ">
													<thead>
														<!-- <tr>
															<th>Invoice ID</th>
															<th>Client</th>
															<th>Due Date</th>
															<th>Total</th>
															<th>Status</th>
														</tr> -->
													</thead>
													<tbody>

														<?php 
														if(!empty($leavelist)){
											    	 	foreach($leavelist as $leaverow){ //echo "<pre>";print_r($leaverow);
															$empassgindata=getempassginleave($emp_id,$leaverow->leave_id);
														
											    	  ?>   
														<tr>
															<td width="20px"><?php echo $leaverow->leave_name; ?><input type="hidden" name="leavename[]" id="" class="form-control" value="<?php echo $leaverow->leave_id;?>">
															</td>
															<td width="20%">
															<?php if(!empty($empassgindata)){
															if($leaverow->leave_id==$empassgindata['leave_id']){
															?>	
															   <input type="hidden" name="empassignleave_id[]" class="form-control" value="<?php echo $empassgindata['empassignleave_id']?>">
															   <?php if($leaverow->leave_id=='4'){ ?>					
																<input type="text" name="leaveno[]" class="form-control" value="0" readonly="">
																
																	
															<?php } else{ ?> 
															 <input type="text" name="leaveno[]" class="form-control" value="<?php  echo $empassgindata['no_leave'];?>">


															<?php } ?>
															<?php } }else{ if($leaverow->leave_id=='4'){ ?>

																<input type="text" name="leaveno[]" class="form-control" value="0" readonly=""> 
															<?php }else{ ?>
																<input type="text" name="leaveno[]" class="form-control" id="leaveno" 
																 data-id="<?php echo $leaverow->leavedays;?>"> 
																
															 <?php } ?>
															<?php  } ?>
															</td>
														</tr>
														 <?php } }  ?>
													</tbody>
												</table>
										</div>
									</div>
									</div>
									<div class="submit-section">
								<hr>
								<button class="btn btn-primary submit-btn" name="Save" type="submit"><?php echo ($emp_id!='')?'Update':'Submit' ?></button>
								<button type="button" name="cancel" class="btn btn-secondary submit-btn" onClick="location.href='<?php echo base_url(); ?>employee/<?php echo $redirect_page; ?>'">Cancel
								</button>
							</div>
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
	  $.validator.addMethod("email_check", function(value, element) {
	    var response;
	    var user_id=$("#EmailAddress").val();
	    $.ajax({
	      type: "POST",
	      url: "<?php echo site_url('employee/email_check'); ?>",
	      data:{email:value},  
	      async:false,
	      success:function(data) {
	      	console.log(data);
	        response = data;
	      }
	    });
    if(response == 0) {
    	return true;
     
    } else if(response == 1) {
       return false;
    }
  }, "Email address is already exist.");
	   $.validator.addMethod("aadharcard_check", function(value, element) {
	    var response;
	    var aadharcard=$("#aadharcard").val();
	    $.ajax({
	      type: "POST",
	      url: "<?php echo site_url('employee/aadharcard_check'); ?>",
	      data:{aadharcard:value},  
	      async:false,
	      success:function(data) {	      
	      	console.log(data);
	        response = data;
	      }
	    });
    if(response == 0) {
    	return true;
     
    } else if(response == 1) {
       return false;
    }
  }, "Aadharcard Number is already exist.");

	$('#dob').datetimepicker({
				  	format: 'DD/MM/YYYY',
					maxDate: new Date(),
					ignoreReadonly: true,
					icons: {
					    time:'fa fa-clock-o',
					    date:'fa fa-calendar',
					    up:'fa fa-chevron-up',
					    down:'fa fa-chevron-down',
					    previous:'fa fa-chevron-left',
					    next:'fa fa-chevron-right',
					    today:'fa fa-calendar-check-o',
					    clear:'fa fa-delete',
					    close:'fa fa-times'
 	 					},									
				}).val('<?php echo ($Dateofbirth!='0000-00-00')&&($Dateofbirth!='')  ? date('d/m/Y', strtotime($Dateofbirth)) : ''; ?>');
	$('#jod').datetimepicker({					
				  	format: 'DD/MM/YYYY',					
					ignoreReadonly: true,
					icons: {
				    time:'fa fa-clock-o',
				    date:'fa fa-calendar',
				    up:'fa fa-chevron-up',
				    down:'fa fa-chevron-down',
				    previous:'fa fa-chevron-left',
				    next:'fa fa-chevron-right',
				    today:'fa fa-calendar-check-o',
				    clear:'fa fa-delete',
				    close:'fa fa-times'
	 	 			},					
				}).val('<?php echo  ($joiningdate!='0000-00-00')&&($joiningdate!='')  ? date('d/m/Y', strtotime($joiningdate)) : ''; ?>');
	$('#probation_period_day').datetimepicker({				     
				  	format: 'DD/MM/YYYY',					
					ignoreReadonly: true,	
					icons: {
					time:'fa fa-clock-o',
					date:'fa fa-calendar',
					up:'fa fa-chevron-up',
					down:'fa fa-chevron-down',
					previous:'fa fa-chevron-left',
					next:'fa fa-chevron-right',
					today:'fa fa-calendar-check-o',
					clear:'fa fa-delete',
					close:'fa fa-times'
					},				
				}).val('<?php echo  ($probation_period_day!='0000-00-00')&&($probation_period_day!='')  ? date('d/m/Y', strtotime($probation_period_day)) : ''; ?>');

	$.validator.addMethod('filesize', function (value, element, param) {
	return this.optional(element) || (element.files[0].size <= param)
	} ,'File size must be equal to or less then 2MB');
	jQuery.validator.addMethod("pan", function(value, element)
    {
        return this.optional(element) || /^[A-Z]{5}\d{4}[A-Z]{1}$/.test(value);
    }, "Please enter a valid PAN");  
	$("#frm_emp").validate({		
				rules: {
					employee_code:{
						employeecode_check:function(){
							employeecode_check='<?php echo $employee_code; ?>';
							if(employeecode_check==''){
								 return true;
								}
						}, 
						required:true,							
				    },
					department:{
						required:true,
					},		
					desgination:{
						required:true,
					},
					FirstName:{
						required: true,
						maxlength:35,
						minlength:3
					},
					LastName:{
						required: true,
						maxlength:35,
						minlength:3
					},
					EmailAddress:{
						required:true,
						email:true,
						email_check:function(){
							emailcheck='<?php echo $email; ?>';
							if(emailcheck==''){
								return true;								
							}
						}, 

					},
					PhoneNumber:{
						required:true,
						digits:true,
						minlength:10,
						maxlength:10,
					},
					dob:{
					   required:true
					},
					Gender:{
						required:true
					},
					marital_status:{
                        required:true
					},
					pob:{
                        required:true
					},
					jod:{
                        required:true
					},
					qualificationemp:{
						required:true
					},
					bloodgroup:{
						required:true
					},
					salary:{
						required:true
					},
					probation_period_day:{
						required:true
					},
					status:{
						required:true
					},
					physically_challenged:{
						required:true
					},
					Address:{
						required:true
					},
					bank_detail:{
						required:function(){
						bankdetail='<?php echo $bankdetail; ?>';
							if(bankdetail){
						    	return false;
							}else{
								return true;
							}
						},
						extension: "JPG|jpeg|png|bmp|pdf",
						filesize: 2097152,	
					},
				
					aadharcard:{
						required:true,
						aadharcard_check:function(){
							aadharcardcheck='<?php echo $aadharcard; ?>';
							if(aadharcardcheck==''){
								return true;								
							}
						},
						maxlength:14,
						minlength:14										
					
					},
					pancard:{
					required:function(){
					pancarddetail='<?php echo $pancard; ?>';
						if(pancarddetail){
					    	return false;
						}else{
							return true;
						}
					},						 	   
					},					
					ProfileImage:{
						extension: "JPG|jpeg|png|bmp",
						filesize: 2097152,   
					},
                    uanstatus:{
                    	required:true,
                    },
                    uanno:{
                    	required: function(element){
                            return $("#uanstatus option:selected").val() == "applicable";
                        }
                    },
                    esicstatus:{
                    	required:true,
                    },
                    esicno:{
                    	required: function(element){
                            return $("#esicstatus option:selected").val() == "applicable";
                        }
                    },
                    taxstatus:{
                      required:true,
                    }
                   
				},

				messages:{
					errorPlacement: function (error, element) {
					console.log('dd', element.attr("name"))
					if (element.attr("name") == "ProfileImage") {
					error.appendTo("#imgerror");
					} else{
					error.insertAfter(element)
					}
					}							
				}
				
		});
});	
$.validator.addMethod("password_check", function(value, element) {

    var response;
    var user_id=$("#old_password").val();
    $.ajax({
      type: "POST",
      url: "<?php echo site_url('home/oldpassword_check'); ?>",
      data:{password:value},  
      async:false,
      success:function(data) {
      	console.log()
          response = data;
      }
    });
    if(response == 0) {
      return false;
    } else if(response == 1) {
      return true;
    }
  }, "The old password you have entered is incorrect.");
function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#blah').css('display', 'block');
                    $('#blah').attr('src', e.target.result);
                };
             reader.readAsDataURL(input.files[0]);
            }
        }
function readURLdcox(input) {
        var fileName = input.files[0].name;
		URL="<?php echo base_url();?>";		
            if(input.files && input.files[0]) {
              var reader = new FileReader();
               
                reader.onload = function (e) {
                	var ext = fileName.split('.')[1];
                    $('#blahdocx').css('display', 'block');
                    if(ext=="pdf"){
                        $('#blahdocx').attr('src', URL+'upload/no_image/pdfimage.png' );
                    }
                    else{
 						 $('#blahdocx').attr('src', e.target.result);
                    }
                };
             reader.readAsDataURL(input.files[0]);
        }  
}		
$('[name="aadharcard"]').keypress(function(e) {
   var value = $(this).val();
   value = value.replace(/\D/g, "").split(/(?:([\d]{4}))/g).filter(s => s.length > 0).join("-");
   $(this).val(value);
});
<?php if($qualification_emp!='Other'){  ?>
	$("#otherqulification").hide();
<?php }else{  ?>
 	$("#otherqulification").show();
<?php } ?>

$("#qualificationemp").change(function () {	
	 var value = $('#qualificationemp').val();	  
	  if(value=='Other'){
		$("#otherqulification").show();
	  }else{
	  	 $("#otherqulification").hide();
	  }
	 
	 // $("#otherqulification").hide();
});	

$("#uannumber").hide();

$("#uanstatus").change(function () {
	
	var value = $('#uanstatus').val();
	  
	if(value=='applicable'){
	  	
		$("#uannumber").show();
	  }else{
	  	 $("#uannumber").hide();
	}
	 
	 // $("#otherqulification").hide();
});

$("#esicnumber").hide();

$("#esicstatus").change(function () {
	
	var value = $('#esicstatus').val();
	
	if(value=='applicable'){	
	//alert(value);  	
		$("#esicnumber").show();
	  }else{
	  	$("#esicnumber").hide();
	}
	 
	 // $("#otherqulification").hide();
});



$('[name="leaveno[]"]').blur(function() {
    var dInput = this.value;

    leavedays=$(this).attr("data-id");    
    $(this).next("span").remove();   
   // alert($('#errormsg').text());
    $('input[type="submit"]').removeAttr('disabled');  
    if(parseInt(leavedays)<parseInt(dInput)){

	    $(this).after('<span style="color:red;" id="errormsg">The value should be less then or equal to '+leavedays+'</span>');
	    $('[name="Save"]').attr('disabled','disabled');
	    return false; 

    }else{
      //	alert($('#errormsg').text());
      	if($('#errormsg').text()!=''){
      		$('[name="Save"]').attr('disabled','disabled');

      	}else{
      		$('[name="Save"]').removeAttr('disabled');    
      	}
        	
    	$(this).next("span").remove();
    }
});
 	  
$(document).on("click", ".checkbtn", function(){	
        $(this).parents("tr").find("td:nth-child(2)").each(function(){
			
			if($('[name="compliancecheck[]"]').is(':checked')==true){
			 $(this).html('<input type="text" name="compliancetxt[]"  id="compliancetxt" class="form-control" value="' + $.trim($(this).text()) + '">');
		}else{
			 alert(hii);
			$('[name="compliancetxt[]"]').css('display','none');
		}
		});		
		//$(this).parents("tr").find(".add, .checkbtn").toggle();		
		//var checked= $('[name="compliancetxt[]"]').val($(this).is(':checked'));
	
		
    });

</script>
    