
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
							<h4 class="page-title">Profile of hr  </h4>
							</div>
							<div class="col-sm-7 col-7 text-right m-b-30">
							<a href="<?php echo base_url();?>Hr" class="btn add-btn">Back to List of hr</a>	
							</div>
						</div>
					<!-- /Page Title -->
						<div class="row">
							<div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
								<div class="dash-widget clearfix card-box">						

							
								<form method="post" enctype="multipart/form-data"  id="form_valid" >
								<input type="hidden" class="form-control" name="hr_id" value="<?php echo $hr_id;?>">
											
									<div class="profile-img-wrap edit-img">
											<?php  
											 if(($ProfileImage!='' && file_exists(base_path().'/upload/hr/'.$ProfileImage))){ ?>
												<img class="inline-block" src="<?php echo base_url(); ?>upload/hr/<?php echo $ProfileImage; ?>"  id="blah">
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
												<label class="col-form-label">Hr Type</label>
												<input class="form-control" type="text" name="hr_type"  value="<?php if($hr_type==1){echo "Super Hr";}else{echo "Sub Hr";} ?>" readOnly>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Full Name</label></label>
												<input class="form-control"  type="text" name="FullName"  value="<?php echo $FullName; ?>" readOnly>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Email Address</label>
												<input class="form-control" type="text" name="EmailAddress" 
												value="<?php echo $EmailAddress; ?>" readOnly>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Gender</label></label>
												<input class="form-control" type="text" name="Gender"  value="<?php echo $Gender; ?>" readOnly>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Address</label>
												<input class="form-control floating"  type="text" name="Address"   value="<?php echo $Address; ?>" readOnly>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Contact Number </label>
												<input class="form-control floating" type="text" name="Contact"   value="<?php echo $Contact; ?>" readOnly>
											</div>
										</div>

					
										<div class="col-md-6">
													<div class="form-group">
														<label>Date of Birth</label>
														<div class="cal-icon">
															<input class="form-control datetimepicker" type="text" name="Dateofbirth" id="Dateofbirth" value="<?php if($DateofBirth!='0000-00-00'){ echo date('d/m/Y', strtotime($DateofBirth));}else{echo "Not Available";} ?>" disabled>
														</div>
													</div>
										</div>
									
										
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">City</label></label>
												<input class="form-control" type="text" name="City"  value="<?php echo $City; ?>" readOnly>
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
												<label class="col-form-label">PinCode</label></label>
												<input class="form-control" type="text" name="PinCode"  value="<?php echo $PinCode; ?>" readOnly>
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


					$('#DateofBirth').datetimepicker({
					 format: 'YYYY/MM/DD',
					 maxDate: moment(),
					 ignoreReadonly: true,
				}).val('<?php echo  ($DateofBirth!='0000-00-00')  ? date('d/m/Y', strtotime($DateofBirth)) : ''; ?>');

				

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
