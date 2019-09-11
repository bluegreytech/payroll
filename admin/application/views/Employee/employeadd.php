<?php 
	 $this->load->view('common/header.php');
	 $this->load->view('common/sidebar.php');
?>
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
				<!-- Page Content -->
                <div class="content container-fluid">
				
					<!-- Page Title -->
					<div class="row">
						<div class="col">
							<h4 class="page-title">
							
									Add Employee
									
							
							
							</h4>
						</div>
						<div class="col-12 text-right m-b-30">
							<a href="<?php echo base_url();?>Employee" class="btn add-btn"><i class="fa fa-plus"></i> Back to Employee List</a>
							
						</div>
					</div>
					<!-- /Page Title -->
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
							<?php if(($this->session->flashdata('warning'))){ ?>
							<div class="alert alert-warning" id="warningMessage">
							<strong> <?php echo $this->session->flashdata('warning'); ?></strong> 
							</div>
							<?php } ?>
				
					

				

                </div>
				<!-- /Page Content -->
			
				<!-- Add Client Modal -->
				<!-- <div id="add_client" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content"> -->
							

							<div class="modal-body">
							<form method="post" enctype="multipart/form-data" action="<?php echo base_url();?>Hr/addhr" id="form_valid">

<div class="profile-img-wrap edit-img">			
			<img class="inline-block" src="<?php echo base_url(); ?>upload/default/avtar.jpg" alt="">
	<div class="fileupload btn">
		<span class="btn-text">edit</span>
		<input class="upload" type="file" name="pre_profile_image">
	</div>
</div>
<div class="row"> 
<div class="col-sm-6">


	<div class="form-group">
		<label>First Name</label>	
		<input class="form-control" tabindex="1" type="text" name="FirstName" Placeholder="Enter first name" minlength="2" maxlength="50">
	</div>
	
	<div class="form-group">
		<label>Email Address</label>
		<input class="form-control" tabindex="2" type="text" name="EmailAddress" Placeholder="Enter your email address" minlength="2" maxlength="50">
	</div>
	
	<div class="form-group">
		<label>Birth Date</label>
		<div class="cal-icon">
			<input class="form-control datetimepicker" type="text" name="DateofBirth" id="DateofBirth2" readonly>
		</div>
	</div>

	<div class="form-group">
		<label>Address</label>
		<input class="form-control" tabindex="7" type="text" name="Address" Placeholder="Enter your address" minlength="5" maxlength="500">
	</div>
	

	<div class="form-group">
			<label>Company</label>
			<select class="form-control" name="companyid" tabindex="8"> 
				<option desabled value="">Please select company</option>
				<?php
				 if($companyData){
					foreach($companyData as $comp)
					{
				?>

					<option value="<?php echo $comp->companyid; ?>">
					<?php echo $comp->companyname;?></option>

				<?php
				}}
				?>
			</select>
	</div>

	
	<div class="form-group">
				<label class="col-form-label">Isactive</label><br>
				<label class="radio-inline" tabindex="10">
					<input type="radio" name="IsActive" checked  value="Active">Active
				</label>
				<label class="radio-inline" tabindex="11">
					<input type="radio" name="IsActive" value="Inactive">Inactive
				</label>
	</div>
	
	
</div>
<div class="col-sm-6">  
	<div class="form-group">
		<label>Last Name</label>	
		<input class="form-control" tabindex="1" type="text" name="LastName" Placeholder="Enter first name" minlength="2" maxlength="50">
	</div>

	<div class="form-group">
		<label>Contact Number</label>
		<input class="form-control" tabindex="3" type="text" name="Contact" Placeholder="Enter contact number" minlength="10" maxlength="10" id="PhoneNumbers">
	</div>
	
	
	<div class="form-group">
		<label>Gender</label>
		<select class="form-control" name="Gender" tabindex="4">
			<option value="">Select gender</option>
			<option value="Male">Male</option>
			<option value="Female">Female</option>
		</select>
	</div>
	<div class="form-group">
		<label>Pin-Code</label>
		<input class="form-control" tabindex="6" type="text" name="PinCode" id="PinCodes" Placeholder="Enter your pin-code"  minlength="6" maxlength="6">
	</div>

	<div class="form-group">
		<label>City</label>
		<input class="form-control" tabindex="8" type="text" name="City" Placeholder="Enter your city" minlength="2" maxlength="50">
	</div>

	

</div>
</div>
<div class="submit-section">
<input type="submit" name="Save" class="btn btn-primary account-btn" value="Submit">
</div>
</form>
							</div>

						<!-- </div>
					</div>
				</div> -->
				<!-- /Add Client Modal -->
				
			
			
            </div>
			<!-- /Page Wrapper -->
			
        </div>
		<!-- /Main Wrapper -->
		
		<!-- Sidebar Overlay -->
		<div class="sidebar-overlay" data-reff=""></div>
		
		<!-- jQuery -->
        <script src="<?php echo base_url(); ?>default/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="<?php echo base_url(); ?>default/js/popper.min.js"></script>
        <script src="<?php echo base_url(); ?>default/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
		<script src="<?php echo base_url(); ?>default/js/jquery.slimscroll.min.js"></script>
		
		<!-- Select2 JS -->
		<script src="<?php echo base_url(); ?>default/js/select2.min.js"></script>
		
		<!-- Custom JS -->
		<script src="<?php echo base_url(); ?>default/js/app.js"></script>
		<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.js" type="text/javascript" ></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </body>
</html>

<script type="text/javascript">
				$('#DateofBirth2').datetimepicker({
					 format: 'YYYY/MM/DD',
					 maxDate: moment(),
					 ignoreReadonly: true,
				});

				$('#DateofBirth').datetimepicker({
				  	// format: 'DD/MM/YYYY',
					 format: 'YYYY/MM/DD',
					 maxDate: moment(),
					 ignoreReadonly: true,
				}).val('#DateofBirth');

</script>

		<!-- <script type="text/javascript">
 				$('#datepicker1').datepicker();
				 dateFormat: 'dd/mm/yy'   		
		</script> -->

<script>
			
		
		$(function() { 
			setTimeout(function() {
		$('#errorMessage').fadeOut('fast');
		}, 10000);  
		});

		$(function() { 
			setTimeout(function() {
		$('#successMessage').fadeOut('fast');
		}, 10000);  
		});

		$(function() { 
			setTimeout(function() {
		$('#warningMessage').fadeOut('fast');
		}, 10000);  
		});

		$("#comcontactnumber").on("input", function(evt) {
		var self = $(this);
		self.val(self.val().replace(/[^\d].+/, ""));
		if ((evt.which < 48 || evt.which > 57)) 
		{
			evt.preventDefault();
		}
		});
		$("#gstnumber").on("input", function(evt) {
		var self = $(this);
		self.val(self.val().replace(/[^\d].+/, ""));
		if ((evt.which < 48 || evt.which > 57)) 
		{
			evt.preventDefault();
		}
		});

		$("#pincode").on("input", function(evt) {
		var self = $(this);
		self.val(self.val().replace(/[^\d].+/, ""));
		if ((evt.which < 48 || evt.which > 57)) 
		{
			evt.preventDefault();
		}
		});

$(document).ready(function()
		{
				$("#form_valid").validate(
				{
						rules: {
							companytypeid: {
									required: true,
										},
							companyname: {
									required: true,
										},
							comemailaddress: {
									required: true,
										},
							comcontactnumber: {
									required: true,
										},
							gstnumber: {
									required: true,
										},
							digitalsignaturedate: {
									required: true,
										},
							companyaddress: {
									required: true,
										},
							stateid: {
									required: true,
										},
							companycity: {
									required: true,
										},
							pincode:{
									required: true,
							}
							},
						messages:{
							
							companytypeid: {
									required: "Please select type of company",
										},
							companyname: {
									required: "Please enter a company name",
										},	
							comemailaddress: {
									required: "Please enter a company email address",
										},	
							comcontactnumber: {
									required: "Please enter a company contact number",
										},	
							gstnumber: {
									required: "Please enter a company gst number",
										},
							digitalsignaturedate: {
									required: "Please select company signature expire date",
										},
							companyaddress: {
									required: "Please enter a company address",
										},	
							stateid: {
									required: "Please select state",
										},
							companycity: {
									required: "Please enter a city",
										},	
							pincode: {
									required: "Please enter a pincode",
										},	
					}					
				});		
		});	

</script>