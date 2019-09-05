<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="#">
		<meta name="keywords" content="">
        <meta name="author" content="">
        <meta name="robots" content="noindex, nofollow">
        <title>Payroll System - Reset Password</title>
		
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
							<h3 class="account-title">Reset Password</h3>
						
							
							<!-- Account Form -->
							 <?php $attributes = array('name'=>'frm_reset','id'=>'frm_restpwd','class'=>'reset-form');
                       			 echo form_open('home/reset_password/'.$code,$attributes); ?>
							<div class="form-group">
									<label>New password</label>
								
									<input type="hidden" name="hr_id" value="<?php echo $hr_id ?>">	
									 <input type="hidden"   value="<?php echo $code; ?>" name="code">
									<input type="password" class="form-control" name="Password"  id="Password"   placeholder="Enter new password">
								</div>
								<div class="form-group">
									<label>Retype password</label>
									<input type="password" class="form-control" name="ConfirmPassword" placeholder="Enter confirm new password">
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
		$("#frm_restpwd").validate(
		{
					rules: {

						Password:{
							required: true,
								},	
						ConfirmPassword: {
							required: true,
							equalTo:"#Password",
								},
					},

				messages:{

					
						
			}
				
		});
});					        
</script>
