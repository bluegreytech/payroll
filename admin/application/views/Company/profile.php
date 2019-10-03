

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

							<?php if(($this->session->flashdata('warnin'))){ ?>

							<div class="alert alert-danger" id="warningMessage">

							<strong> <?php echo $this->session->flashdata('warnin'); ?></strong> 

							</div>

							<?php } ?>

				<!-- Page Content -->

               

				<div class="content container-fluid">

						<!-- Page Title -->



						<div class="row">

							<div class="col-sm-5 col-5">

							<h4 class="page-title">Profile of Company  </h4>

							</div>

							<div class="col-sm-7 col-7 text-right m-b-30">

							<a href="<?php echo base_url();?>Company" class="btn add-btn">Back to List of Company</a>	

							</div>

						</div>

					<!-- /Page Title -->

						<div class="row">

							<div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">

								<div class="dash-widget clearfix card-box">						



								<?php

								if($Enddate!='')

								{

									

								?>		

								<div class="row">

								<input type="hidden" class="form-control" name="Companydocumentid" value="<?php echo $Companydocumentid;?>">

								<input type="hidden" class="form-control" name="Companynotificationid" value="<?php echo $Companynotificationid;?>">

								

										<div class="col-md-6">

												<div class="form-group">

													<label class="col-form-label">Notification End Date<span class="text-danger">*</span></label>

													<input class="form-control" id="Enddate" name="Enddate"  type="text" 

															value="<?php														

																echo date('Y-m-d',strtotime($Enddate));												

															?>" disabled>

												</div>

											</div>

										<div class="col-md-6">	

												<div class="form-group">

													<label class="col-form-label">Document Title  <span class="text-danger">*</span></label>

													<input class="form-control"  maxlength="200" name="Documenttitle" value="<?php echo $Documenttitle; ?>" readOnly>

												</div>

										</div>



								



										<div class="col-md-12">	

											<div class="form-group">

												<label>Notification Description</label>

												<textarea id="editor1" readOnly rows="5" class="form-control" name="Documenttitle"><?php echo $Documenttitle; ?>

												</textarea>

												<script>

													CKEDITOR.replace('editor1');

												</script>

											</div>		

										</div>

										<?php

								if($documentData){
									foreach($documentData as $doc)
									{
								?>

										<div class="col-md-6">

											<div class="form-group">

												<label class="col-form-label">Important Document <span class="text-danger">*</span></label>

												<br><a href="<?php echo base_url();?>upload/company_orig/Document_orig/<?php echo $doc->Documentfile; ?>" target="_blank"><?php echo $doc->Documentfile; ?></a>

											</div>

										</div>

									

										

										<?php

								}}

								?>	    	

								</div>	

										

								<?php

								}

								?>



								<br><br>

								<form method="post" enctype="multipart/form-data"  id="form_valid" action="<?php echo base_url();?>Company/companyadd">

								<input type="hidden" class="form-control" name="companyid" value="<?php echo $companyid;?>">

								<input type="hidden" class="form-control" name="companycomplianceid" value="<?php echo $companycomplianceid;?>">

								

									

									<div class="profile-img-wrap edit-img">

											<?php  

											 if(($companyimage!='' && file_exists(base_path().'/upload/company/'.$companyimage))){ ?>

												<img class="inline-block" src="<?php echo base_url(); ?>upload/company/<?php echo $companyimage; ?>" alt="" id="blah">

											<?php

											}

											else

											{

											?>

												<img class="inline-block" src="<?php echo base_url(); ?>upload/default/avtar.jpg" alt="" id="blah">

											<?php

											}

											?>

												<div class="fileupload btn">

														<input type="hidden" name="pre_profile_image" class="form-control" value="<?php echo $companyimage; ?>" onchange="readURL(this);">				

												</div>

											</div>





									<div class="row">

										<div class="col-md-6">

											<div class="form-group">

													<label>Type of Company</label>

													<select class="select" name="companytypeid" disabled> 

														<option desabled value="">Please select type of company</option>

														<?php

														 if($companytypeData){

															foreach($companytypeData as $typecompany)

															{

														?>

															<option value="<?php echo $typecompany->companytypeid; ?>" <?php if($companytypeid==$typecompany->companytypeid){echo "selected" ;}?>><?php echo $typecompany->companytype;?></option>

														<?php

														}}

														?>

													</select>

											</div>

										</div>

										<div class="col-md-6">

											<div class="form-group">

												<label class="col-form-label">Company Name <span class="text-danger">*</span></label>

												<input class="form-control" type="text" minlength="2" maxlength="100" name="companyname" placeholder="Enter company name" value="<?php echo $companyname; ?>" readOnly>

											</div>

										</div>

										<div class="col-md-6">

											<div class="form-group">

												<label class="col-form-label">Email Address</label><span class="text-danger">*</span></label>

												<input class="form-control" minlength="2" maxlength="50" type="email" name="comemailaddress" placeholder="Enter email address" value="<?php echo $comemailaddress; ?>" readOnly>

											</div>

										</div>

										<div class="col-md-6">

											<div class="form-group">

												<label class="col-form-label">Contact Number <span class="text-danger">*</span></label>

												<input class="form-control" minlength="10" maxlength="10" type="text" name="comcontactnumber" id="comcontactnumber" placeholder="Enter contact number"  

												value="<?php echo $comcontactnumber; ?>" readOnly>

											</div>

										</div>

										<div class="col-md-6">

											<div class="form-group">

												<label class="col-form-label">GST Number <span class="text-danger">*</span></label>

												<input class="form-control floating" minlength="05" maxlength="20" type="text" name="gstnumber" id="gstnumber" placeholder="Enter gst number" value="<?php echo $gstnumber; ?>" readOnly>

											</div>

										</div>	

										<div class="col-md-6">

													<div class="form-group">

														<label>Digital Signature Date</label>

														<div class="cal-icon">

															<input class="form-control datetimepicker" type="text" name="digitalsignaturedate" id="digitalsignaturedate" value="<?php if($digitalsignaturedate!='0000-00-00'){ echo date('d/m/Y', strtotime($digitalsignaturedate));} ?>" disabled>

														</div>

													</div>

										</div>

										<div class="col-md-6">

											<div class="form-group">

												<label class="col-form-label">Address<span class="text-danger">*</span></label>

												<input class="form-control"  type="text" name="companyaddress" id="companyaddress" placeholder="Enter company address"  

												value="<?php echo $companyaddress; ?>" readOnly>

											</div>

										</div>

										<div class="col-md-6">

											<div class="form-group">

													<label>State</label>

													<select class="select" name="stateid" disabled> 

														<option desabled value="">Please select state</option>

														<?php

														 if($stateData){

															foreach($stateData as $state)

															{

														?>

															<option value="<?php echo $state->stateid; ?>" <?php if($stateid==$state->stateid){echo "selected" ;}?>><?php echo $state->statename;?></option>



														<?php

														}}

														?>

													</select>

											</div>

										</div>

										<div class="col-md-6">

											<div class="form-group">

												<label class="col-form-label">City</label><span class="text-danger">*</span></label>

												<input class="form-control" minlength="2" maxlength="50" type="text" name="companycity" placeholder="Enter city" value="<?php echo $companycity; ?>" readOnly>

											</div>

										</div>

										<div class="col-md-6">

											<div class="form-group">

												<label class="col-form-label">Pincode</label><span class="text-danger">*</span></label>

												<input class="form-control" minlength="06" maxlength="06" type="text" name="pincode" id="pincode" placeholder="Enter pincode" value="<?php echo $pincode; ?>" readOnly>

											</div>

										</div>

										<?php

										if($companyid=='')

										{ 

											?>

												<div class="col-md-6">

													<div class="form-group">

													<label class="col-form-label">Isactive<span class="text-danger">*</span></label><br>

													<label class="radio-inline">

														<input type="radio" name="isactive" disabled  checked value="1">Active

													</label>

													<label class="radio-inline">

														<input type="radio" name="isactive" disabled value="0">Deactive

													</label>

													</div>

												</div>

											<?php

										}

										else

										{

											

												?>

													<div class="col-md-6">

														<div class="form-group">

														<label class="col-form-label">Isactive<span class="text-danger">*</span></label><br>

														<label class="radio-inline">

															<input type="radio" name="isactive" disabled <?php if($isactive==1){echo "checked";}?> 

																 value="1">Active

															

														</label>

														<label class="radio-inline">

															<input type="radio" name="isactive" disabled <?php if($isactive==0){echo "checked";}?>value="0">Inactive

															

														</label>

														</div>

													</div>

												<?php

											}

										

										

										?>

									

									</div>

										

									<div class="table-responsive m-t-15">

										<table class="table table-striped custom-table">

											<thead>

												<tr>

													<th>Type of Compliance</th>

													<th >Percentage of Compliance</th>

													<th class="text-center">Add on Compliance</th>

												</tr>

											</thead>

											<tbody>

											<?php  

											if($companyid!='')

											{

												$comid=$complianceid;

												$compliance_idarr = explode(",",$complianceid);

											}

											  	

												foreach($complianceData as $compdata)

												 {

													if($companyid!='')

													{  

												 		$comid=$compdata->complianceid;

														$checkedStatus = "";		

													}

											?>

												<tr>

													<td><?php echo $compdata->compliancename;?></td>

													<td><?php echo $compdata->compliancepercentage;?></td>

													<td class="text-center">

														<input type="checkbox" name="complianceid[]" disabled  value="<?php echo $compdata->complianceid; ?>" 

														 <?php 	if($companyid!='')

																{	if(in_array($comid,$compliance_idarr)) { echo "checked"; }}?> >

													</td>

												</tr>

											<?php

												}

											?>

											</tbody>

										</table>

									</div>

									

								

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

					 format: 'YYYY/MM/DD',

					 maxDate: moment(),

					 ignoreReadonly: true,

				}).val('<?php echo  ($Enddate!='0000-00-00')  ? date('d/m/Y', strtotime($Enddate)) : ''; ?>');





					$('#digitalsignaturedate').datetimepicker({

					 format: 'YYYY/MM/DD',

					 maxDate: moment(),

					 ignoreReadonly: true,

				}).val('<?php echo  ($digitalsignaturedate!='0000-00-00')  ? date('d/m/Y', strtotime($digitalsignaturedate)) : ''; ?>');



				



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

	        

</script>

