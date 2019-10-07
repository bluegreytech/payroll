<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <meta name="description" content="#">

		<meta name="keywords" content="">

        <meta name="author" content="">

        <meta name="robots" content="noindex, nofollow">

        <title>Payroll System - Login</title>

		

		<!-- Favicon -->

        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>default/img/favicon.png">

		

		<!-- Bootstrap CSS -->

        <link rel="stylesheet" href="<?php echo base_url(); ?>default/css/bootstrap.min.css">

		

		<!-- Fontawesome CSS -->

        <link rel="stylesheet" href="<?php echo base_url(); ?>default/css/font-awesome.min.css">

		

		<!-- Main CSS -->

        <link rel="stylesheet" href="<?php echo base_url(); ?>default/css/style.css">

		

		

    </head>

    <body class="account-page">

	

		<!-- Main Wrapper -->

        <div class="main-wrapper">

		

			<div class="account-content">

				<div class="container">

				

					

					<div class="account-box">

						<div class="account-wrapper">

							<!-- Account Logo -->

							<!--div class="account-logo">

								<a href="index.php"><img src="assets\img\logo2.png" alt="Payroll System"></a>

							</div-->

							<!-- /Account Logo -->

							<?php if(($this->session->flashdata('error'))){ ?>

									<div class="alert alert-danger" id="errorMessage">

									<strong> <?php echo $this->session->flashdata('error'); ?></strong> 

									</div>

							<?php } ?>

							<?php if(($this->session->flashdata('warning'))){ ?>

									<div class="alert alert-warning" id="errorMessage">

									<strong> <?php echo $this->session->flashdata('warning'); ?></strong> 

									</div>

							<?php } ?>

							<?php if(($this->session->flashdata('success'))){ ?>

									<div class="alert alert-success" id="successMessage">

									<strong> <?php echo $this->session->flashdata('success'); ?></strong> 

									</div>

							<?php } ?>

							

							<h3 class="account-title">Forgot Password?</h3>

							<p class="account-subtitle">Enter your email to get a password reset link</p>

							

							<!-- Account Form -->

							<form method="post" action="<?php echo base_url();?>Login/forgotpassword" id="form_valid">

								<div class="form-group">

									<label>Email Address</label>

									<input class="form-control" type="text" name="EmailAddress"  placeholder="Enter your email address">

								</div>

								<div class="form-group text-center">

									<input type="submit" name="logins" class="btn btn-primary account-btn" value="Reset Password">

								</div>

								<div class="account-footer">

									<p>Remember your password? <a href="<?php echo base_url();?>Login">Login</a></p>

								</div>

							</form>

							<!-- /Account Form -->

							

						</div>

					</div>

				</div>

			</div>

        </div>

		<!-- /Main Wrapper -->

		
		<?php $this->load->view('common/footer');?>
    </body>

</html>



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

						EmailAddress: {

							required: true,

								},

						

					},



				messages:{



						EmailAddress: {

								required: "Please enter your email address",

								},		

			}

				

		});

});					        

</script>

