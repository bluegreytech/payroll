<?php 

	 $this->load->view('common/header.php');

	 $this->load->view('common/sidebar.php');

?>

			

			<!-- Page Wrapper -->

            <div class="page-wrapper">

						

				<!-- Page Content -->

               

				<div class="content container-fluid">

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

						<!-- Page Title -->

						<div class="row">

							<div class="col-sm-5 col-5">

							<h4 class="page-title">Send Company notification</h4>

							</div>

							<div class="col-sm-7 col-7 text-right m-b-30">

							<a href="<?php echo base_url();?>Company/companynotification_list" class="btn add-btn">Back to List of Company Notification</a>

							</div>

						</div>



					<!-- /Page Title -->

						<div class="row">

							<div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">

								<div class="dash-widget clearfix card-box">						

								<form method="post" enctype="multipart/form-data"  id="form_valid" action="<?php echo base_url();?>Company/Sendnotification">
								<!-- <input type="hidden" class="form-control" name="Companynotificationid" value="<?php //echo $Companynotificationid;?>"> -->
								<div class="row">

										<div class="col-md-6">
					
											<div class="form-group">
											
												<label>Type of Company<span class="text-danger">*</span>
												</label>
												
												<select  class=" form-control selectpicker" multiple data-live-search="true" data-actions-box="true" multiple name="companyid[]" id="companyid">
													<?php 
													if(!empty($companyData)){
														foreach($companyData as $company) { 
														 ?>
											<option value="<?php echo $company->companyid; ?>"><?php echo $company->companyname;?></option>
														<?php  } } ?>
												</select>

											</div>

										</div>

								

										<div class="col-md-6">

												<div class="form-group">

													<label>Notification End Date <span class="text-danger">*</span></label>

													<div class="cal-icon">

														<input  class="form-control datetimepicker" type="text" id="Enddate" name="Enddate"
														 readonly>
													</div>

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
												<label class="col-form-label">Upload File</label>
												<input class="upload" type="file" name="Documentfile[]"  id="Documentfile" placeholder="Upload document file" multiple="multiple">
											</div>
											<h6>Uplopad only jpg,jpeg,png,pdf,doc,docx,ppt,pptx,xls,xlsx,bmp file</h6>
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

		<?php $this->load->view('common/footer');?>

		

    </body>

</html>



<script type="text/javascript">

						
				$('#Enddate').datetimepicker({
					 defaultDate: new Date(),
				  	 format: 'DD/MM/YYYY',
					 ignoreReadonly: true,					
				});

				$.validator.addMethod('filesize', function (value, element, param) {

return this.optional(element) || (element.files[0].size <= param)

} ,'File size must be equal to or less then 2MB');	



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

	$('select').selectpicker({
		noneSelectedText : 'Please Select',
	});
				$("#form_valid").validate(
				{

						rules: {
							'companyid[]':{
									required: true,
											},
							Documenttitle: {
									required: true,
										},
							'Notificationdescription': {
									required: true,
										},
							'Documentfile[]': {
									//required: true,
									extension:'bmp|jpg|jpeg|png|pdf|doc|docx|ppt|pptx|xls|xlsx',
									filesize : 2000000,	
									},
							},

						messages:{
						
							Documenttitle: {
									required: "Please enter a ducument title",
										},	
								errorPlacement: function (error, element) 
								{
									console.log('dd', element.attr("name"))
									if (element.attr("name") == "companyid[]") {
									error.appendTo("#companyiderror");
									} else{
									error.insertAfter(element)
									}
								},
								'Notificationdescription': {
								required: "Please enter a notification message",
								},	
								'Documentfile[]': {
									extension: "Please upload a valid file",
								},


					},
				
				});		

		});	



</script>