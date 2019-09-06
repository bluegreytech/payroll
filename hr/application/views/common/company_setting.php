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
				<h4 class="page-title">Company Setting</h4>
				<div class="card-box mb-0">
					<div class="row">
						<div class="col-md-12">
							<form method="post" id="form_valid" action="<?php echo base_url();?>home/change_password/">
								<div class="form-group">
									<label>Company Name</label>
									<input type="text" class="form-control" name="old_password"   placeholder="Company name" value="<?php echo $companyname; ?>" readonly>
								</div>
								<div class="form-group">
									<label>Company Type</label>
									<?php $companytypename=get_companytype_name($companytypeid);?>
									<input type="text" class="form-control" name="old_password"   placeholder="Company name" value="<?php echo $companytypename; ?>" readonly>
								</div>
								<div class="form-group">
									<label>Company EmailAddress</label>
									<input type="text" class="form-control" name="password" id="NewPassword"  placeholder="Company Address" value="<?php echo $comemailaddress; ?>" readonly >
								</div>
								<div class="form-group">
									<label>Company Contact</label>
									<input type="text" class="form-control" name="cpassword"  placeholder="Company Contact" value="<?php echo $comcontactnumber; ?>" readonly>
								</div>
								<div class="form-group">
									<label>Company GST Number</label>
									<input type="text" class="form-control" name="cpassword"   placeholder="Company GST Number" value="<?php echo $gstnumber; ?>" readonly> 
								</div>
								<div class="form-group">
									<label>Company Digital signature</label>
									<input type="text" class="form-control" name="cpassword"   placeholder="Company Digital signature" value="<?php echo date('d/m/Y',strtotime($digitalsignaturedate)); ?>" readonly> 
								</div>
								<div class="submit-section">
										<input type="submit" value="Submit" class="btn btn-primary submit-btn" readonly>
								</div>
							</form>
						</div>
					</div>
				</div>
				<br>
				<div class="card-box mb-0">
					<div class="row">
						<h4 class="page-title">Compliances</h4>

						<div class="col-md-12">
							  <div class="table-responsive m-t-15">
										<table class="table table-striped custom-table">
											<thead>
												<tr>
													<th>Type of Compliance</th>
													<th>Percentage of Compliance</th>
												</tr>
											</thead>
											<tbody>
											<?php 
											   // echo "<pre>";print_r($com_compliances);die;            
												foreach($com_compliances as $compdata)
												 { //echo "<pre>";print_r($compdata['compliancename']); 

											?>
												<tr>
													<td><?php echo $compdata['compliancename'];?></td>
													<td><?php echo $compdata['compliancepercentage'] ?></td>
													
												</tr>
											<?php
												}
											?>
											</tbody>
										</table>
									</div>
									
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
		$("#frm_copmany").validate(
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