﻿<?php 

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
								<input type="hidden" class="form-control" name="Companynotificationid" value="<?php echo $Companynotificationid;?>">
								<div class="row">

										<div class="col-md-6">
										
											<div class="form-group">
											
												<label>Type of Company<span class="text-danger">*</span>
												</label>
												
												<select  class=" form-control selectpicker" multiple data-live-search="true" data-actions-box="true" multiple name="companyid[]">
													<!-- <option disabled="" value="">Please select</option> -->	
													<?php 
													
			
													
													if(!empty($companyData)){
														foreach($companyData as $company) { 
															

														 ?>
													
											<option value="<?php echo $company->companyid; ?>" 
											<?php if($companyid==$company->companyid){echo "selected" ;}?>><?php echo $company->companyname;?></option>

										
											
														<?php  } } ?>
												</select>
											</div>

										</div>

								

										<div class="col-md-6">

												<div class="form-group">

													<label>Notification End Date <span class="text-danger">*</span></label>

													<div class="cal-icon">

														<input  class="form-control datetimepicker" type="text" id="Enddate" name="Enddate"
														value="<?php echo $Enddate;?>" readonly>
													</div>

												</div>

											</div>

										<div class="col-md-6">	

												<div class="form-group">

													<label class="col-form-label">Document Title  <span class="text-danger">*</span></label>

													<input class="form-control"  maxlength="200" name="Documenttitle" value="<?php echo $Documenttitle;?>">

												</div>

										</div>

										<div class="col-md-12">	

											<div class="form-group">

												<label>Message Description</label>

												<textarea id="editor1" rows="5" class="form-control" name="Notificationdescription" id="Notificationdescription"><?php echo $Notificationdescription;?>

												</textarea>

												<script>

													CKEDITOR.replace('editor1');

												</script>

											</div>

												

										</div>				

									    	

								</div>	

							

									<!-- <div class="row">	

										<div class="col-md-6">

											<div class="form-group">

												<label class="col-form-label">Upload File<span class="text-danger">*</span></label>

												<input class="form-control" type="file" name="Documentfile[]" placeholder="Upload document file" multiple="multiple">

											</div>

										</div>	

									</div> -->



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
				}).val('<?php echo  ($Enddate!='0000-00-00')&&($Enddate!='')  ? date('d/m/Y', strtotime($Enddate)) : ''; ?>');

			

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

	$('select').selectpicker({
		noneSelectedText : 'Please Select',
	});
				$("#form_valid").validate(

				{

						rules: {

							'companyname[]':{
							required: true,
									},
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