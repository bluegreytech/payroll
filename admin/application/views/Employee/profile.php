

<?php 



	 $this->load->view('common/header.php');

	 $this->load->view('common/sidebar.php');

?>

			

			<!-- Page Wrapper -->

            <div class="page-wrapper">

						<?php if(($this->session->flashdata('error'))){ ?>

							<div class="alert alert-danger" id="errorMessage">

							<strong> <?php echo $this->session->flashdata('error'); ?></strong> 

							</div>

							<?php } ?>

							<?php if(($this->session->flashdata('success'))){ ?>

									<div class="alert alert-success" id="successMessage">

									<strong> <?php echo $this->session->flashdata('success'); ?></strong> 

									</div>

							<?php } ?>

							<?php if(($this->session->flashdata('warnin'))){ ?>

							<div class="alert alert-danger" id="warningMessage">

							<strong> <?php echo $this->session->flashdata('warnin'); ?></strong> 

							</div>

							<?php } ?>

				<!-- Page Content -->

               

				<div class="content container-fluid">

						<!-- Page Title -->



						<div class="row">

							<div class="col-sm-5 col-5">

							<h4 class="page-title">Profile of Employee  </h4>

							</div>

							<div class="col-sm-7 col-7 text-right m-b-30">

							<a href="<?php echo base_url();?>Employee" class="btn add-btn">Back to List of Employee</a>	

							</div>

						</div>

					<!-- /Page Title -->

						<div class="row">

							<div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">

								<div class="dash-widget clearfix card-box">						



							

								<form method="post" enctype="multipart/form-data"  id="form_valid" >

								<input type="hidden" class="form-control" name="emp_id" value="<?php echo $emp_id;?>">

											

									<div class="profile-img-wrap edit-img">

											<?php  

											 if(($ProfileImage!='' )){ ?>

												<img class="inline-block" src="<?php echo base_url_hr();?>upload/emp/<?php echo $ProfileImage; ?>"  id="blah">

											<?php

											}

											else

											{

											?>

												<img class="inline-block" src="<?php echo base_url(); ?>upload/default/avtar.jpg" id="blah">

											<?php

											}

											?>

												<div class="fileupload btn">

														<input type="hidden" name="pre_profile_image" class="form-control" value="<?php echo $ProfileImage; ?>" onchange="readURL(this);">				

												</div>

											</div>





									<div class="row">

										<div class="col-md-6">

											<div class="form-group">

													<label>Company</label>

													<select class="select" name="companyid" disabled> 

														<option desabled value="">Please select company</option>

														<?php

														 if($companyData){

															foreach($companyData as $comData)

															{

														?>

															<option value="<?php echo $comData->companyid; ?>" <?php if($companyid==$comData->companyid){echo "selected" ;}?>><?php echo $comData->companyname;?></option>

														<?php

														}}

														?>

													</select>

											</div>

										</div>

										<div class="col-md-6">

											<div class="form-group">

												<label class="col-form-label">Employee Code</label>

												<input class="form-control" type="text" minlength="2" maxlength="100" name="employee_code"  value="<?php echo $employee_code; ?>" readOnly>

											</div>

										</div>

										<div class="col-md-6">

											<div class="form-group">

												<label class="col-form-label">Department</label></label>

												<input class="form-control" minlength="2" maxlength="50" type="text" name="department"  value="<?php echo $department; ?>" readOnly>

											</div>

										</div>

										<div class="col-md-6">

											<div class="form-group">

												<label class="col-form-label">Desgination</label>

												<input class="form-control" minlength="10" maxlength="10" type="text" name="desgination" 

												value="<?php echo $desgination; ?>" readOnly>

											</div>

										</div>

										<div class="col-md-6">

											<div class="form-group">

												<label class="col-form-label">First Name </label>

												<input class="form-control floating" minlength="05" maxlength="20" type="text" name="first_name"   value="<?php echo $first_name; ?>" readOnly>

											</div>

										</div>

										<div class="col-md-6">

											<div class="form-group">

												<label class="col-form-label">Last Name </label>

												<input class="form-control floating" minlength="05" maxlength="20" type="text" name="last_name"   value="<?php echo $last_name; ?>" readOnly>

											</div>

										</div>



										<div class="col-md-6">

											<div class="form-group">

												<label class="col-form-label">gender </label>

												<input class="form-control floating" minlength="05" maxlength="20" type="text" name="gender"   value="<?php echo $gender; ?>" readOnly>

											</div>

										</div>	

										<div class="col-md-6">

											<div class="form-group">

												<label class="col-form-label">Father Name </label>

												<input class="form-control floating" minlength="05" maxlength="20" type="text" name="Father_name"   value="<?php if($Father_name!='') {echo $Father_name;}else{echo "Not Available";} ?>" readOnly>

											</div>

										</div>	

										<div class="col-md-6">

													<div class="form-group">

														<label>Digital Signature Date</label>

														<div class="cal-icon">

															<input class="form-control datetimepicker" type="text" name="Dateofbirth" id="Dateofbirth" value="<?php if($Dateofbirth!='0000-00-00'){ echo date('d/m/Y', strtotime($Dateofbirth));}else{echo "Not Available";} ?>" disabled>

														</div>

													</div>

										</div>

										<div class="col-md-6">

											<div class="form-group">

												<label class="col-form-label">Place of Birth</label>

												<input class="form-control"  type="text" name="Placeofbirth"

												value="<?php echo $Placeofbirth; ?>" readOnly>

											</div>

										</div>

										

										<div class="col-md-6">

											<div class="form-group">

												<label class="col-form-label">Marital Status</label></label>

												<input class="form-control" minlength="2" maxlength="50" type="text" name="marital_status"  value="<?php echo $marital_status; ?>" readOnly>

											</div>

										</div>

										<div class="col-md-6">

											<div class="form-group">

												<label class="col-form-label">Address</label></label>

												<input class="form-control" minlength="06" maxlength="06" type="text" name="Address"  value="<?php echo $Address; ?>" readOnly>

											</div>

										</div>



										<div class="col-md-6">

											<div class="form-group">

												<label class="col-form-label">Phone</label></label>

												<input class="form-control"  type="text" name="phone"  value="<?php echo $phone; ?>" readOnly>

											</div>

										</div>

										

										<div class="col-md-6">

											<div class="form-group">

												<label class="col-form-label">Email Address</label></label>

												<input class="form-control" type="text" name="email"  value="<?php echo $email; ?>" readOnly>

											</div>

										</div>



										<div class="col-md-6">

											<div class="form-group">

												<label class="col-form-label">Religion</label></label>

												<input class="form-control" type="text" name="religion"  value="<?php echo $religion; ?>" readOnly>

											</div>

										</div>

									

										<div class="col-md-6">

											<div class="form-group">

												<label class="col-form-label">Nationality</label></label>

												<input class="form-control"  type="text" name="nationality"  value="<?php echo $nationality; ?>" readOnly>

											</div>

										</div>

										<div class="col-md-6">

											<div class="form-group">

												<label class="col-form-label">Qualification of Employee</label></label>

												<input class="form-control"  type="text" name="qualification_emp"  value="<?php echo $qualification_emp; ?>" readOnly>

											</div>

										</div>

										<div class="col-md-6">

											<div class="form-group">

												<label class="col-form-label">Blood Group</label></label>

												<input class="form-control"  type="text" name="bloodgroup"  value="<?php echo $bloodgroup; ?>" readOnly>

											</div>

										</div>

										<div class="col-md-6">

											<div class="form-group">

												<label class="col-form-label">Probation Days</label></label>

												<input class="form-control" type="text" name="probation_preriod_day"  value="<?php echo $probation_preriod_day; ?>" readOnly>

											</div>

										</div>

										<div class="col-md-6">

											<div class="form-group">

												<label class="col-form-label"> Physically Challenged</label></label>

												<input class="form-control"  type="text" name="physically_challenged"  value="<?php echo $physically_challenged; ?>" readOnly>

											</div>

										</div>

										<div class="col-md-6">

											<div class="form-group">

												<label class="col-form-label"> Joining Date</label></label>

												<div class="cal-icon">

															<input class="form-control datetimepicker" type="text" name="joiningdate" id="joiningdate" value="<?php if($joiningdate!='0000-00-00'){ echo date('d/m/Y', strtotime($joiningdate));}else{echo "Not Available";} ?>" disabled>

														</div>

											</div>

										</div>

										<div class="col-md-6">

											<div class="form-group">

												<label class="col-form-label"> Salary Amount</label></label>

												<input class="form-control"  type="text" name="salaryamt"  value="<?php echo $salaryamt; ?>" readOnly>

											</div>

										</div>

										<div class="col-md-6">

											<div class="form-group">

												<label class="col-form-label"> Salary </label></label>

												<input class="form-control"  type="text" name="salary"  value="<?php echo $salary; ?>" readOnly>

											</div>

										</div>

									</div>

										

									

									

								

								</form>

							

					

								</div>

								</div>

								</div>

								</div>

				

				</div>

				<!-- /Page Content -->



            </div>

			<!-- /Page Wrapper -->

			

        </div>

		<!-- /Main Wrapper -->

		

		<!-- Sidebar Overlay -->

		<div class="sidebar-overlay" data-reff=""></div>

		<?php $this->load->view('common/footer');?>

		

	

		

    </body>

</html>



<script type="text/javascript">

				$('#joiningdate').datetimepicker({

					 format: 'YYYY/MM/DD',

					 maxDate: moment(),

					 ignoreReadonly: true,

				}).val('<?php echo  ($joiningdate!='0000-00-00')  ? date('d/m/Y', strtotime($joiningdate)) : ''; ?>');





					$('#Dateofbirth').datetimepicker({

					 format: 'YYYY/MM/DD',

					 maxDate: moment(),

					 ignoreReadonly: true,

				}).val('<?php echo  ($Dateofbirth!='0000-00-00')  ? date('d/m/Y', strtotime($Dateofbirth)) : ''; ?>');



				



</script>



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

	        

</script>

