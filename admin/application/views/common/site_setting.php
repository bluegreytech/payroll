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
				<h4 class="page-title">Site Setting</h4>
				<div class="card-box mb-0">
					<div class="row">
						<div class="col-md-12">
							<form method="post" id="form_valid" action="<?php echo base_url();?>Adminmaster/site_setting">
							<?php $this->session->userdata('AdminId');?>
							<div class="form-group">
									<label class="col-form-label">Full Name <span class="text-danger">*</span></label>
									<input class="form-control" minlength="02" maxlength="50" type="text" name="Adminname" value="<?php echo $Adminname; ?>" placeholder="Enter full name">
								</div>

								<div class="form-group">
									<label class="col-form-label">Email Address <span class="text-danger">*</span></label>
									<input class="form-control" minlength="02" maxlength="40" type="email" name="Emailaddress" value="<?php echo $Emailaddress; ?>" placeholder="Enter email address">
								</div>
								<div class="form-group">
									<label class="col-form-label">Mobile Number <span class="text-danger">*</span></label>
									<input class="form-control" minlength="02" maxlength="40" type="text" id="Mobilenumber" name="Mobilenumber" value="<?php echo $Mobilenumber; ?>" placeholder="Enter mobile number">
								</div>

								<div class="form-group">
									<label class="col-form-label">Office Address <span class="text-danger">*</span></label>
									<input class="form-control" minlength="02" maxlength="300" type="text" name="Officeaddress" value="<?php echo $Officeaddress; ?>" placeholder="Enter office address ">
								</div>

								<div class="form-group">
									<label class="col-form-label">Working Days <span class="text-danger">*</span></label>
									<input class="form-control" minlength="02" maxlength="300" type="text" name="WorkingDays" value="<?php echo $WorkingDays; ?>" placeholder="Enter office working days">
								</div>

								<div class="form-group">
									<label class="col-form-label">Week Off Days <span class="text-danger">*</span></label>
									<input class="form-control" minlength="02" maxlength="300" type="text" name="WeekOff" value="<?php echo $WeekOff; ?>" placeholder="Enter week off days">
								</div>

								<div class="form-group">
									<label class="col-form-label">Gst Number  <span class="text-danger">*</span></label>
									<input class="form-control" minlength="02" maxlength="16" type="text" id="Gstnumber" name="Gstnumber" value="<?php echo $Gstnumber; ?>" placeholder="Enter gst number">
								</div>
								
								<div class="form-group">
									<label class="col-form-label">Branch Name <span class="text-danger">*</span></label>
									<input class="form-control" minlength="02" maxlength="40" type="text" name="Branch" value="<?php echo $Branch; ?>" placeholder="Enter branch name">
								</div>

								<div class="form-group">
									<label class="col-form-label">Bank Name <span class="text-danger">*</span></label>
									<input class="form-control" minlength="02" maxlength="40" type="text" name="Bankname" value="<?php echo $Bankname; ?>" placeholder="Enter bank name">
								</div>

								<div class="form-group">
									<label class="col-form-label">Account Number <span class="text-danger">*</span></label>
									<input class="form-control" minlength="1" maxlength="20" type="text" id="Accountnumber" name="Accountnumber" value="<?php echo $Accountnumber; ?>" id="Accountnumber" placeholder="Enter bank account number">
								</div>

								<div class="form-group">
									<label class="col-form-label">IFSC Code <span class="text-danger">*</span></label>
									<input class="form-control" minlength="6" maxlength="20" type="text" name="Ifsccode" value="<?php echo $Ifsccode; ?>" placeholder="Enter IFSC code">
								</div>

								<div class="submit-section">
										<button class="btn btn-primary submit-btn">Update</button>
								</div>

							</form>
						</div>
					</div>
				</div>
				<br>
			

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

$("#PhoneNumber").on("input", function(evt) {

var self = $(this);

self.val(self.val().replace(/[^\d].+/, ""));

if ((evt.which < 48 || evt.which > 57)) 

{

	evt.preventDefault();

}

});

		$("#Accountnumber").on("input", function(evt) {
		var self = $(this);
		self.val(self.val().replace(/[^\d].+/, ""));
		if ((evt.which < 48 || evt.which > 57)) 
		{
			evt.preventDefault();
		}
		});

		$("#Mobilenumber").on("input", function(evt) {
		var self = $(this);
		self.val(self.val().replace(/[^\d].+/, ""));
		if ((evt.which < 48 || evt.which > 57)) 
		{
			evt.preventDefault();
		}
		});

		$("#Gstnumber").on("input", function(evt) {
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
						Accountnumber: {
							required: true,
								},
						Branch: {
							required: true,
								},
						Bankname: {
							required: true,
								},		
						Ifsccode: {
							required: true,
								},
						Adminname: {
							required: true,
								},
						Emailaddress: {
							required: true,
								},
						Mobilenumber: {
							required: true,
								},		
						Officeaddress: {
							required: true,
								},
						WorkingDays: {
							required: true,
								},
						WeekOff: {
							required: true,
								},
						Gstnumber: {
							required: true,
								},
							},
					messages:{		
	
						Accountnumber: {
								required: "Please enter a bank account number",	
									},
						Branch: {
								required: "Please enter a branch name",
								},
						Bankname: {
							required: "Please enter a bank name",
								},
						Ifsccode: {
							required: "Please enter a ifsc code",
								},
						Adminname: {
							required: "Please enter a full name",	
							},
						Emailaddress: {
								required: "Please enter a email address",
								},
						Mobilenumber: {
							required: "Please enter a mobile number",
								},
						Officeaddress: {
							required: "Please enter a office address",
								},
						WorkingDays: {
							required: "Please enter a office working days",
								},
						WeekOff: {
							required: "Please enter a office week off days",
								},
						Gstnumber: {
							required: "Please enter a gst number",
								},
					}					



				});	


		});	


</script>

    </body>
</html>