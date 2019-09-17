<?php 
	 $this->load->view('common/header.php');
	 $this->load->view('common/sidebar.php');
?>
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
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
							<strong> <?php echo $this->session->flashdata('warnin'); ?></strong> 
							</div>
							<?php } ?>
				<!-- Page Content -->
               
				<div class="content container-fluid">
						<!-- Page Title -->
						<div class="row">
						<div class="col">
							<h4 class="page-title">Send Notification to Company</h4>
						</div>	
						<div class="col-12 text-right m-b-30">
										<a href="<?php echo base_url();?>Company" class="btn add-btn"><i class="fa fa-plus">
										</i>Back to List of Company</a>			
									</div>			
					</div>
					<!-- /Page Title -->
						<div class="row">
							<div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
								<div class="dash-widget clearfix card-box">						
								<form method="post" enctype="multipart/form-data"  id="form_valid" action="<?php echo base_url();?>Company/Sendnotification">
								<div class="row">
								<div class="col-md-6">
											<div class="form-group">
													<label>Type of Company</label>
													<select class="form-control" name="companyid[]" multiple> 
														<option desabled value="">Please select type of company</option>
														<?php
														 if($companyData){
															foreach($companyData as $company)
															{
														?>
															<option value="<?php echo $company->companyid; ?>"><?php echo $company->companyname;?></option>
														<?php
														}}
														?>
													</select>
											</div>
										</div>
								
										<div class="col-md-6">
												<div class="form-group">
													<label class="col-form-label">Notification End Date<span class="text-danger">*</span></label>
													<input class="form-control" id="Enddate" name="Enddate"  type="text" 
													 readonly>
												</div>
											</div>
										<div class="col-md-6">	
												<div class="form-group">
													<label class="col-form-label">Document Title  <span class="text-danger">*</span></label>
													<input class="form-control"  maxlength="200" name="Documenttitle">
												</div>
										</div>
										<div class="col-md-12">	
											<div class="form-group">
												<label>Message Description</label>
												<textarea id="editor1" rows="5" class="form-control" name="Notificationdescription" id="Notificationdescription">
												</textarea>
												<script>
													CKEDITOR.replace('editor1');
												</script>
											</div>
												
										</div>				
									    	
								</div>	
							
									<div class="row">	
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Upload File<span class="text-danger">*</span></label>
												<input class="form-control" type="file" minlength="2" maxlength="100" name="Documentfile[]" placeholder="Upload document file" multiple="multiple">
											</div>
										</div>	
									</div>

									<center><div class="submit-section">
											<button class="btn btn-primary submit-btn">Submit</button>
										</div></center>
								</form>
							
					
								</div>
								</div>
								</div>
								</div>
				
				</div>
				<!-- /Page Content -->

            </div>
			<!-- /Page Wrapper -->
			
        </div>
		<!-- /Main Wrapper -->
		
		<!-- Sidebar Overlay -->
		<div class="sidebar-overlay" data-reff=""></div>
		
		<!-- jQuery -->
        <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="<?php echo base_url(); ?>default/js/jquery-3.2.1.min.js"></script>
		
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
		
		
		<!-- Chart JS -->
		<script src="<?php echo base_url(); ?>default/plugins/morris/morris.min.js"></script>
		<script src="<?php echo base_url(); ?>default/plugins/raphael/raphael.min.js"></script>
		<script src="<?php echo base_url(); ?>default/js/chart.js"></script>
		
		<!-- Custom JS -->
		<script src="<?php echo base_url(); ?>default/js/app.js"></script>
		
    </body>
</html>

<script type="text/javascript">
				$('#Enddate').datetimepicker({
					 format: 'YYYY/MM/DD',
					 maxDate: moment(),
					 ignoreReadonly: true,
				});			
</script>

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
							companyid: {
									required: true,
										},
							Documenttitle: {
									required: true,
										},
							Notificationdescription: {
									required: true,
										},
							Documentname: {
									required: true,
										}
							},
						messages:{
							
							companyid: {
									required: "Please select company",
										},
							Documenttitle: {
									required: "Please enter a ducument title",
										},	
						    Notificationdescription: {
									required: "Please enter a notification message",
										},	
							Documentname: {
									required: "Please upload a file",
										},	
								
					}					
				});		
		});	

</script>