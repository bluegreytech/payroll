<?php 

	 $this->load->view('common/header.php');

	 $this->load->view('common/sidebar.php');

?>

			<!-- Page Wrapper -->

            <div class="page-wrapper">

			<?php 

					$AdminId=$this->session->userdata('AdminId');

					?>

				<div class="recover-pass content container-fluid">

					<div class="row">

						<div class="col-md-6 offset-md-3">

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

							<h4 class="page-title">Change Password</h4>

							<form method="post" id="form_valid"

								action="<?php echo base_url();?>Adminmaster/change_password/<?php $this->session->userdata('AdminId');?>">

								<div class="form-group">

									<label>Old password</label>

									<input type="hidden" name="AdminId" value="<?php echo $AdminId=$this->session->userdata('AdminId'); ?>">	

									<input type="password" class="form-control" name="Password"  minlength="8" maxlength="15" placeholder="Enter your old password">

								</div>

								<div class="form-group">

									<label>New password</label>

									<input type="password" class="form-control" name="NewPassword" id="NewPassword" minlength="8" maxlength="15" placeholder="Enter your new password">

								</div>

								<div class="form-group">

									<label>Confirm password</label>

									<input type="password" class="form-control" name="ConfirmPassword"  minlength="8" maxlength="15" placeholder="Confirm your new password">

								</div>

								<div class="submit-section">

										<input type="submit" value="Submit" class="btn btn-primary submit-btn">

								</div>

							</form>

						</div>

					</div>

				</div>



				

            </div>

			<!-- /Page Wrapper -->



        </div>

		<!-- /Main Wrapper -->



		<!-- Sidebar Overlay -->

		<div class="sidebar-overlay" data-reff=""></div>



		<?php $this->load->view('common/footer');?>
		

		



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

		$("#form_valid").validate(

		{

					rules: {



						Password: {

							required: true,

								},

						NewPassword: {

							required: true,

								},		

						ConfirmPassword: {

							required: true,

							equalTo:"#NewPassword",

								},

					},



				messages:{



						Password: {

								required: "Please enter your old password",

								},

						NewPassword: {

								required: "Please enter your new password",

								pattern : "Enter only characters and numbers",

								minlength: "Please enter at least 8 and maximum to 15 letters!",

								},

						ConfirmPassword: {

								required: "Please enter confirm new password",

								equalTo:"Your password did not matched",

								pattern : "Enter only characters and numbers",

								minlength: "Please enter at least 8 and maximum to 15 letters!",

								},

						

			}

				

		});

});					        

</script>

    </body>

</html>