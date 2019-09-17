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
        <link rel="shortcut icon" type="<?php echo base_url(); ?>default/image/x-icon" href="assets\img\favicon.png">
		
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
							<div class="account-logo">
								<a href="index.php"><img src="<?php echo base_url(); ?>default/img/logo2.png" alt="Payroll System"></a>
							</div>
							<!-- /Account Logo -->
							<h3 class="account-title">Login</h3>
							<p class="account-subtitle">Access to our dashboard</p>
							 
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
							<!-- Account Form -->
							<form method="post" id="form_valid">
								<div class="form-group">
									<label>Email Address</label>
									<input class="form-control" type="email" name="EmailAddress" Placeholder="Enter your email address">
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col">
											<label>Password</label>
										</div>
										
									</div>
									<input class="form-control" type="password" name="Password" Placeholder="Enter your password">
								</div>
								<div class="form-group text-center">
									<input type="submit" name="logins" class="btn btn-primary account-btn" value="Login">
								</div>
								<div class="account-footer">
								<a class="text-muted" href="<?php echo base_url();?>Login/forgotpassword">
												Forgot password?
											</a>
								</div>

							</form>
							<!-- /Account Form -->
							
						</div>
					</div>
				</div>
			</div>
        </div>
		<!-- /Main Wrapper -->
		
	<!-- Bootstrap Core JS -->
	<script src="<?php echo base_url(); ?>default/js/jquery-3.2.1.min.js"></script>
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
						Password: {
							required: true,
								},		
					},

				messages:{

						EmailAddress: {
								required: "Please enter your email address",
								},
						Password: {
								required: "Please enter your password",
								},
						
						
			}
				
		});
});					        
</script>
