<?php 

	 $this->load->view('common/header.php');

	 $this->load->view('common/sidebar.php');

?>

			<!-- Page Wrapper -->

            <div class="page-wrapper">

			<?php 

					$UserId=$this->session->userdata('UserId');

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

								action="<?php echo base_url();?>Adminmaster/change_password/<?php echo $UserId;?>">

								<div class="form-group">

									<label>Old password</label>

									<input type="hidden" name="UserId" value="<?php echo $UserId ?>">	

									<input type="text" class="form-control" name="Password"  minlength="8" maxlength="15" placeholder="Enter your old password">

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



		<!-- jQuery -->

        <script data-cfasync="false" src="<?php echo base_url(); ?>default/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="<?php echo base_url(); ?>default/js/jquery-3.2.1.min.js"></script>



		<!-- Bootstrap Core JS -->

        <script src="<?php echo base_url(); ?>default/js/popper.min.js"></script>

        <script src="<?php echo base_url(); ?>default/js/bootstrap.min.js"></script>



		<!-- Slimscroll JS -->

		<script src="<?php echo base_url(); ?>default/js/jquery.slimscroll.min.js"></script>

		

		<!-- Select2 JS -->

		<script src="<?php echo base_url(); ?>default/js/select2.min.js"></script>

		

		<!-- Datetimepicker JS -->

		<script src="<?php echo base_url(); ?>default/js/moment.min.js"></script>

		<script src="<?php echo base_url(); ?>default/js/bootstrap-datetimepicker.min.js"></script>

		

		<!-- Tagsinput JS -->

		<script src="<?php echo base_url(); ?>default/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>



		<!-- Custom JS -->

		<script src="<?php echo base_url(); ?>default/js/app.js"></script>

		<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.js" type="text/javascript" ></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>

		

		



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