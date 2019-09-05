<?php 
	 $this->load->view('common/header');
	 $this->load->view('common/sidebar');
?>
			<!-- Page Wrapper -->
 <div class="page-wrapper">			
   <div class="recover-pass content container-fluid">
		<div class="row">
			<div class="col-md-12">
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
				<div class="card-box mb-0">
					<div class="row">
						<div class="col-md-12">
							<form method="post" id="form_valid" action="<?php echo base_url();?>home/change_password/">
								<div class="form-group">
									<label>Old password</label>
									
									<input type="password" class="form-control" name="old_password"   placeholder="Enter your old password">
								</div>
								<div class="form-group">
									<label>New password</label>
									<input type="password" class="form-control" name="password" id="NewPassword" minlength="8" maxlength="15" placeholder="Enter your new password">
								</div>
								<div class="form-group">
									<label>Confirm password</label>
									<input type="password" class="form-control" name="cpassword"  minlength="8" maxlength="15" placeholder="Confirm your new password">
								</div>
								<div class="submit-section">
										<input type="submit" value="Submit" class="btn btn-primary submit-btn">
								</div>
							</form>
						</div>
					</div>
				</div>
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
$(document).ready(function()
{
		$("#form_valid").validate(
		{
					rules: {
						old_password:{
							required: true,
							password_check:true
								},
						password:{
							required: true,
								},		
						cpassword: {
							required: true,
							equalTo:"#NewPassword",
								},
					},

				messages:{

												
			}
				
		});
});	
$.validator.addMethod("password_check", function(value, element) {

        var response;
        var user_id=$("#old_password").val();
    $.ajax({
      type: "POST",
      url: "<?php echo site_url('home/oldpassword_check'); ?>",
      data:{password:value},  
      async:false,
      success:function(data) {
      	console.log()
          response = data;
      }
    });
    if(response == 0) {
      return false;
    } else if(response == 1) {
      return true;
    }
  }, "The old password you have entered is incorrect.");				        
</script>
    </body>
</html>