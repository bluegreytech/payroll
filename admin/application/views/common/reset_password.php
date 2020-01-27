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



        <link rel="shortcut icon" type="default/image/x-icon" href="<?php echo base_url(); ?>default/img/Company/companylogo/favicon.png">


		



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
						<?php if(($this->session->flashdata('error'))){ ?>
								<div class="alert alert-danger" id="errorMessage">
									<strong> <?php echo $this->session->flashdata('error'); ?></strong> 
								</div>
							<?php } ?>
							<?php if(($this->session->flashdata('warning'))){ ?>
								<div class="alert alert-warning" id="warningMessage">
									<strong> <?php echo $this->session->flashdata('warning'); ?></strong> 
								</div>
							<?php } ?>
							<?php if(($this->session->flashdata('success'))){ ?>
								<div class="alert alert-success" id="successMessage">
									<strong> <?php echo $this->session->flashdata('success'); ?></strong> 
								</div>
							<?php } ?>

							<!-- Account Logo -->

							<div class="account-logo">
								<a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>default/img/Company/companylogo/favicon.png" height="100px" width="100px" alt="Payroll System"></a>
							</div>

							<!-- /Account Logo -->

							<h3 class="account-title">Reset Password</h3>
							<p class="account-subtitle">Access for your account</p>

						



							



							<!-- Account Form -->



							<form method="post" action="<?php echo base_url();?>Login/resetpassword/<?php echo $ResetPasswordCode;?>" id="form_valid">



							<div class="form-group">



									<label>New password</label>



									<input type="hidden" name="ResetPasswordCode" value="<?php echo $ResetPasswordCode ?>">



									<input type="hidden" name="AdminId" value="<?php echo $AdminId ?>">	



									<input type="password" class="form-control" name="Password"  id="Password"  minlength="8" maxlength="15" placeholder="Enter new password">



								</div>



								<div class="form-group">



									<label>Retype password</label>



									<input type="password" class="form-control" name="ConfirmPassword" minlength="8" maxlength="15" placeholder="Enter confirm new password">



								</div>



							



								<div class="form-group text-center">



									<input type="submit" name="Reset" class="btn btn-primary account-btn" value="Reset Password">



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







						Password: {



							required: true,



								},	



						ConfirmPassword: {



							required: true,



							equalTo:"#Password",



								},



					},







				messages:{







						Password: {



								required: "Please enter your new password",



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



