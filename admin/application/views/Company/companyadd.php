<?php 

	 $this->load->view('common/header.php');

	 $this->load->view('common/sidebar.php');

?>

			<!-- Page Wrapper -->

            <div class="page-wrapper">

			

				<!-- Page Content -->

                <div class="content container-fluid">

				

					<!-- Page Title -->

					<div class="row">

						<div class="col">

							<h4 class="page-title">

							<?php 

								if($companyid)

								{

									?>

									Edit Company

									<?php

								}	

								else

								{

									?>

									Add Company

									<?php

								}

							?>

							

							</h4>

						</div>

						<div class="col-12 text-right m-b-30">

							<a href="<?php echo base_url();?>Company" class="btn add-btn"><i class="fa fa-plus"></i> Back to Company List</a>

							

						</div>

					</div>

					<!-- /Page Title -->

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



                </div>

				<!-- /Page Content -->
						
							<div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
								<div class="dash-widget clearfix card-box">		

							<div class="modal-body">

								<form method="post" id="form_valid" action="<?php echo base_url();?>Company/companyadd" enctype="multipart/form-data">
								<input type="hidden" class="form-control" name="companyid" value="<?php echo $companyid;?>">
								<input type="hidden" class="form-control" name="companycomplianceid" value="<?php echo $companycomplianceid;?>">
								<input type="hidden" class="form-control" name="Companyshiftid" value="<?php echo $Companyshiftid;?>">
								<input type="hidden" class="form-control" name="Bankdetailid" value="<?php echo $Bankdetailid;?>">

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
													<span class="btn-text">Upload</span>
														<input type="hidden" name="pre_profile_image" class="form-control" value="<?php echo $companyimage; ?>">
													<input  type="file" name="companyimage" class="upload" onchange="readURL(this);" >
													<p id="profileerror"></p>	
												</div>
											</div>

									<div class="row">

										<div class="col-md-6">
											<div class="form-group">
													<label>Type of Company</label>
													<select class="form-control" name="companytypeid"> 
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
												<input class="form-control" type="text" minlength="2" maxlength="100" name="companyname" placeholder="Enter company name" value="<?php echo $companyname; ?>">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Email Address</label><span class="text-danger">*</span></label>
												<input class="form-control" minlength="2" maxlength="50" type="email" name="comemailaddress" placeholder="Enter email address" value="<?php echo $comemailaddress; ?>">
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Contact Number <span class="text-danger">*</span></label>
												<input class="form-control" minlength="10" maxlength="10" type="text" name="comcontactnumber" id="comcontactnumber" placeholder="Enter contact number"  
												value="<?php echo $comcontactnumber; ?>">
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">GST Number <span class="text-danger">*</span></label>
												<input class="form-control floating" minlength="05" maxlength="20" type="text" name="gstnumber" id="gstnumber" placeholder="Enter gst number" value="<?php echo $gstnumber; ?>">
											</div>
										</div>

										<div class="col-md-6">
										<div class="form-group">
														<label>Licence Expired Date</label>
														<div class="cal-icon">
															<input  class="form-control datetimepicker" type="text" name="digitalsignaturedate" id="digitalsignaturedate" value="<?php  if($digitalsignaturedate!='0000-00-00'){ echo date('Y/m/d', strtotime($digitalsignaturedate));} ?>" readonly>
														</div>
													</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Address<span class="text-danger">*</span></label>
												<input class="form-control"  type="text" name="companyaddress" id="companyaddress" placeholder="Enter company address"  
												value="<?php echo $companyaddress; ?>">
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
													<label>State</label>
													<select class="form-control" name="stateid"> 
														<option desabled value="">Please select state</option>
														<?php
														 if($stateData){
															foreach($stateData as $state)
															{
														?>
															<option value="<?php echo $state->stateid; ?>" <?php if($stateid==$state->stateid){echo "selected" ;}?>><?php echo $state->statename;?></option>

															<!-- <option value="<?php //echo $state->stateid; ?>">

															<?php //echo $state->statename;?></option> -->
														<?php
														}}
														?>
													</select>
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">City</label><span class="text-danger">*</span></label>
												<input class="form-control" minlength="2" maxlength="50" type="text" name="companycity" placeholder="Enter city" value="<?php echo $companycity; ?>">
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Pincode</label><span class="text-danger">*</span></label>
												<input class="form-control" minlength="06" maxlength="06" type="text" name="pincode" id="pincode" placeholder="Enter pincode" value="<?php echo $pincode; ?>">
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
														<input type="radio" name="isactive"  checked value="1">Active
													</label>

													<label class="radio-inline">
														<input type="radio" name="isactive" value="0">Deactive
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
															<input type="radio" name="isactive" <?php if($isactive==1){echo "checked";}?> 
																 value="1">Active
														</label>
														<label class="radio-inline">
															<input type="radio" name="isactive" <?php if($isactive==0){echo "checked";}?>value="0">Inactive
														</label>
														</div>
													</div>
												<?php
											}
										?>

										<?php if($Companyshiftid==''){?>
										<div class="col-md-6">
											<div class="form-group">
													<label>Company Shift Hours</label>
													<select class="form-control" name="Shifthours"  id="purpose"> 
														<option desabled value="">Please select hours</option>
														<option  value="8" >08 Hours</option>
														<option  value="16">16 Hours</option>
														<option  value="24">24 Hours</option>
													</select>
											</div>
										</div>
										<?php }?>

										<?php if($Companyshiftid!=''){?>
										<div class="col-md-6">
											<div class="form-group">
													<label>Company Shift Hours</label>
													<select class="form-control" name="Shifthours"  id="purpose"> 
														
													<?php	
													if($Companyshiftid!='')		
													{		if($Shifthours=='8')
															{
																?>
																<option value="8" selected>08 Hours</option>
																<option value="16" >16 Hours</option>
																<option value="24">24 Hours</option>

																<?php

															}

															else if($Shifthours=='16')
															{
																?>
																<option value="8">08 Hours</option>
																<option value="16" selected>16 Hours</option>
																<option value="24">24 Hours</option>
																<?php
															}
															else if($Shifthours=='24')
															{
																?>
															<option value="8">08 Hours</option>
															<option value="16">16 Hours</option>
															<option value="24" selected>24 Hours</option>
																<?php
															}
														}
															?>
														</select>
											</div>
										</div>
										<?php }?>

									</div>

							
													
								<div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
									<fieldset  id='business'>
									<legend>Shift</legend>
										<div class="dash-widget clearfix card-box">	
											<div class="row">
												<div class="col-md-12">
															<div class="form-group">
																<label class="col-form-label">Shift Name <span class="text-danger">*</span></label>
																<input class="form-control" minlength="02" maxlength="20" type="text" name="Shiftname"   placeholder="Enter shift name">
															</div>
												</div>

												<div class="col-md-6">
															<div class="form-group">
																<label class="col-form-label">Shift In Time <span class="text-danger">*</span></label>
																<input class="form-control" type="time" name="Shiftintime"   placeholder="Enter shift in time number">
																
															</div>
												</div>

												<div class="col-md-6">
															<div class="form-group">
																<label class="col-form-label"> Shift Out Time <span class="text-danger">*</span></label>
																<input class="form-control" type="time" name="Shiftouttime"   placeholder="Enter shift out time number">
															</div>
												</div>		
											</div>
										</div>
									</fieldset>

									<!-- <fieldset id='business2' style="display: none;">
									<legend>Shift</legend>
										<div class="dash-widget clearfix card-box" >	
											<div class="row">
												<div class="col-md-12">
															<div class="form-group">
																<label class="col-form-label">Shift Name <span class="text-danger">*</span></label>
																<input class="form-control" minlength="02" maxlength="30" type="text" name="Shiftname"  value="<?php echo $Shiftname;?>" placeholder="Enter shift name">
															</div>
												</div>

												<div class="col-md-6">
															<div class="form-group">
																<label class="col-form-label">Shift In Time <span class="text-danger">*</span></label>
																<input class="form-control"  type="text" name="Shiftintime"  placeholder="Enter shift in time number" >
																
															</div>
												</div>

												<div class="col-md-6">
															<div class="form-group">
																<label class="col-form-label">Shift Out Time <span class="text-danger">*</span></label>
																<input class="form-control"  type="text" name="Shiftouttime" placeholder="Enter shift out time number">
																
															</div>
												</div>		
											</div>
											<legend>Shift 2</legend>
											<div class="row">
												<div class="col-md-12">
															<div class="form-group">
																<label class="col-form-label">Shift Name <span class="text-danger">*</span></label>
																<input class="form-control" minlength="02" maxlength="30" type="text" name="Shiftname"  value="<?php echo $Shiftname;?>"  placeholder="Enter shift name">
															</div>
												</div>

												<div class="col-md-6">
															<div class="form-group">
																<label class="col-form-label">Shift In Time <span class="text-danger">*</span></label>
																<input class="form-control"  type="time" name="Shiftintime"  placeholder="Enter shift in time number" >
																
															</div>
												</div>

												<div class="col-md-6">
															<div class="form-group">
																<label class="col-form-label"> Shift Out Time <span class="text-danger">*</span></label>
																<input class="form-control"  type="time" name="Shiftouttime" placeholder="Enter shift out time number"  >
																
															</div>
												</div>		
											</div>
										</div>
									</fieldset> -->

									<!-- <fieldset id='business3' style="display: none;">
									<legend>Shift </legend>
										<div class="dash-widget clearfix card-box" >	
											<div class="row">
												<div class="col-md-12">
															<div class="form-group">
																<label class="col-form-label">Shift Name <span class="text-danger">*</span></label>
																<input class="form-control" minlength="02" maxlength="30" type="text" name="Shiftname" value="<?php //echo $Shiftname;?>"  placeholder="Enter shift name">
															</div>
												</div>

												<div class="col-md-6">
															<div class="form-group">
																<label class="col-form-label">Shift In Time <span class="text-danger">*</span></label>
																<input class="form-control"  type="time" name="Shiftintime"  placeholder="Enter shift in time number">
																
															</div>
												</div>

												<div class="col-md-6">
															<div class="form-group">
																<label class="col-form-label"> Shift Out Time <span class="text-danger">*</span></label>
																<input class="form-control" type="time" name="Shiftouttime" placeholder="Enter shift out time number">
																
															</div>
												</div>		
											</div>
											<legend>Shift 2</legend>
											<div class="row">
												<div class="col-md-12">
															<div class="form-group">
																<label class="col-form-label">Shift Name <span class="text-danger">*</span></label>
																<input class="form-control" minlength="02" maxlength="30" type="text" value="<?php// echo $Shiftname;?>" name="Shiftname"  placeholder="Enter shift name">
															</div>
												</div>

												<div class="col-md-6">
															<div class="form-group">
																<label class="col-form-label">Shift In Time <span class="text-danger">*</span></label>
																<input class="form-control"  type="time" name="Shiftintime"  placeholder="Enter shift in time number">
																
															</div>
												</div>

												<div class="col-md-6">
															<div class="form-group">
																<label class="col-form-label"> Shift Out Time <span class="text-danger">*</span></label>
																<input class="form-control" type="time" name="Shiftouttime" placeholder="Enter shift out time number">
																
															</div>
												</div>		
											</div>
											<legend>Shift 3</legend>
											<div class="row">
												<div class="col-md-12">
															<div class="form-group">
																<label class="col-form-label">Shift Name <span class="text-danger">*</span></label>
																<input class="form-control"  minlength="02" maxlength="30" type="text" name="Shiftname" value="<?php //echo $Shiftname;?>"  placeholder="Enter shift name">
															</div>
												</div>

												<div class="col-md-6">
															<div class="form-group">
																<label class="col-form-label">Shift In Time <span class="text-danger">*</span></label>
																<input class="form-control"  type="time" name="Shiftintime"  placeholder="Enter shift in time number">
																
															</div>
												</div>

												<div class="col-md-6">
															<div class="form-group">
																<label class="col-form-label"> Shift Out Time <span class="text-danger">*</span></label>
																<input class="form-control" type="time" name="Shiftouttime" placeholder="Enter shift out time number">
																
															</div>
												</div>		
											</div>
										</div>
									</fieldset>  -->

									<?php 
									if($Companyshiftid!=''){
										$i=1;
										foreach($shiftData as $shift)
										{
										?>
										<fieldset>
									<legend>Shift <?php echo $i;?></legend>
										<div class="dash-widget clearfix card-box">	
											<div class="row">
												<div class="col-md-12">
															<div class="form-group">
																<label class="col-form-label">Shift Name <span class="text-danger">*</span></label>
																<input class="form-control" minlength="02" maxlength="20" type="text" name="Shiftname" value="<?php echo $shift->Shiftname;?>"  placeholder="Enter shift name">
															</div>
												</div>

												<div class="col-md-6">
															<div class="form-group">
																<label class="col-form-label">Shift In Time <span class="text-danger">*</span></label>
																<input class="form-control" type="time" name="Shiftintime" value="<?php echo $shift->Shiftintime;?>"   placeholder="Enter shift in time number">
																
															</div>
												</div>

												<div class="col-md-6">
															<div class="form-group">
																<label class="col-form-label"> Shift Out Time <span class="text-danger">*</span></label>
																<input class="form-control" type="time" name="Shiftouttime" value="<?php echo $shift->Shiftouttime;?>"  placeholder="Enter shift out time number">
															</div>
												</div>		
											</div>
										</div>
									</fieldset>
									<?php
									$i++;
										}
									}
									?>
								</div>
								<br>
								<div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
									<fieldset>
									<legend>Add Company of Bank Detail</legend>
										<div class="dash-widget clearfix card-box">	
											<div class="row">
												<div class="col-md-6">
															<div class="form-group">
																<label class="col-form-label">Branch Name <span class="text-danger">*</span></label>
																<input class="form-control" minlength="02" maxlength="40" type="text" name="Branch" value="<?php echo $Branch; ?>" placeholder="Enter branch name">
															</div>
												</div>

												<div class="col-md-6">
															<div class="form-group">
																<label class="col-form-label">Bank Name <span class="text-danger">*</span></label>
																<input class="form-control" minlength="02" maxlength="40" type="text" name="Bankname" value="<?php echo $Bankname; ?>" placeholder="Enter bank name">
															</div>
												</div>

												<div class="col-md-6">
															<div class="form-group">
																<label class="col-form-label">Account Number <span class="text-danger">*</span></label>
																<input class="form-control" minlength="14" maxlength="20" type="text" name="Accountnumber" value="<?php echo $Accountnumber; ?>" id="Accountnumber" placeholder="Enter account number">
															</div>
												</div>

												<div class="col-md-6">
															<div class="form-group">
																<label class="col-form-label">IBAN Number <span class="text-danger">*</span></label>
																<input class="form-control" minlength="14" maxlength="20" type="text" name="Ibannumber" value="<?php echo $Ibannumber; ?>" placeholder="Enter IBAN number">
															</div>
												</div>

												<div class="col-md-6">
															<div class="form-group">
																<label class="col-form-label">SWIFT Code<span class="text-danger">*</span></label>
																<input class="form-control" minlength="05" maxlength="05" type="text" name="Swiftcode" value="<?php echo $Swiftcode; ?>" placeholder="Enter SWIFT code">
															</div>
												</div>
		
											</div>
										</div>
									</fieldset>

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
														<input type="checkbox" name="complianceid[]"   value="<?php echo $compdata->complianceid; ?>" 
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

									

									<div class="submit-section">

									<?php 

										if($companyid)

										{

											?>

												<button class="btn btn-primary submit-btn">Update</button>

											<?php

										}	

										else

										{

											?>

												<button class="btn btn-primary submit-btn">Submit</button>

											<?php

										}

									?>

									

									</div>

								</form>

							</div>

							</div></div>

				<!-- /Add Client Modal -->
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
				$('#digitalsignaturedate').datetimepicker({
				  	// format: 'DD/MM/YYYY',
					  format: 'YYYY/MM/DD',
					 ignoreReadonly: true,
				}).val('<?php echo  ($digitalsignaturedate!='0000-00-00')  ? date('Y/m/d', strtotime($digitalsignaturedate)) : ''; ?>');


				// $('#Shiftintime').datetimepicker({
				//   	// format: 'DD/MM/YYYY',
				// 	  format: 'h:i',
				// 	 //maxDate: moment(),
				// 	 ignoreReadonly: true,
				// }).val('<?php //echo  ($Shiftintime!='00-00')  ? date('h:i', strtotime($Shiftintime)) : ''; ?>');

				// $('#Shiftouttime').datetimepicker({
				//   	// format: 'DD/MM/YYYY',
				// 	  format: 'h:i',
				// 	 //maxDate: moment(),
				// 	 ignoreReadonly: true,
				// }).val('<?php// echo  ($Shiftouttime!='00-00')  ? date('h:i', strtotime($Shiftouttime)) : ''; ?>');
</script>

<script>
$(document).ready(function(){
    $('#purpose').on('change', function() {
      if(this.value==8)
      {
        $("#business").show();
		$("#business2").hide();
		$("#business3").hide();	
      }
      else if(this.value==16)
      {
        $("#business").hide();
		$("#business2").show();
		$("#business3").hide();
      }
	  else if(this.value==24)
	  {
		$("#business").hide();
		$("#business2").hide();
		$("#business3").show();
	  }
    });
});

function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#blah').css('display', 'block');
                    $('#blah').attr('src', e.target.result);
                };
             reader.readAsDataURL(input.files[0]);
            }
        }	
		
		$(function() { 
			setTimeout(function() {
		$('#errorMessage').fadeOut('fast');
		}, 10000);  
		});

		$(function() { 
			setTimeout(function() {
		$('#successMessage').fadeOut('fast');
		}, 10000);  
		});

		$(function() { 
			setTimeout(function() {
		$('#warningMessage').fadeOut('fast');
		}, 10000);  
		});

		$("#comcontactnumber").on("input", function(evt) {
		var self = $(this);
		self.val(self.val().replace(/[^\d].+/, ""));
		if ((evt.which < 48 || evt.which > 57)) 
		{
			evt.preventDefault();
		}
		});
		$("#gstnumber").on("input", function(evt) {
		var self = $(this);
		self.val(self.val().replace(/[^\d].+/, ""));
		if ((evt.which < 48 || evt.which > 57)) 
		{
		evt.preventDefault();
		}
		});
		$("#pincode").on("input", function(evt) {
		var self = $(this);
		self.val(self.val().replace(/[^\d].+/, ""));
		if ((evt.which < 48 || evt.which > 57)) 
		{
			evt.preventDefault();
		}
		});
		$("#Accountnumber").on("input", function(evt) {
		var self = $(this);
		self.val(self.val().replace(/[^\d].+/, ""));
		if ((evt.which < 48 || evt.which > 57)) 
		{
			evt.preventDefault();
		}
		});
		$.validator.addMethod('filesize', function (value, element, param) {
		return this.optional(element) || (element.files[0].size <= param)
		} ,'File size must be equal to or less then 2MB');


$(document).ready(function()
		{
				$("#form_valid").validate(
				{
						rules: {
							companytypeid: {
									required: true,
										},
							companyname: {
									required: true,
										},
							comemailaddress: {
									required: true,
										},
							comcontactnumber: {
									required: true,
										},
							gstnumber: {
									required: true,
										},
							digitalsignaturedate: {
									required: true,
										},	
							companyimage: {
									extension: "JPG|jpeg|png|bmp",
									filesize : 2000000,	
											},
							companyaddress: {
									required: true,
										},
							stateid: {
									required: true,
										},
							companycity: {
									required: true,
										},
							pincode:{
									required: true,
							},
							Shifthours:{
									required: true,
							},
							Shiftname:{
									required: true,
							},
							Shiftintime:{
									required: true,
							},
							Shiftouttime:{
									required: true,
							},
							Accountnumber:{
									required: true,
							},
							Branch:{
									required: true,
							},
							Bankname:{
									required: true,
							},
							Ibannumber:{
									required: true,
							},
							Swiftcode:{
									required: true,
							},
							
						},
						messages:{
							companytypeid: {
									required: "Please select type of company",
										},
							companyname: {
									required: "Please enter a company name",
										},	
							comemailaddress: {
									required: "Please enter a company email address",
										},	
							comcontactnumber: {
									required: "Please enter a company contact number",
										},	
							gstnumber: {
									required: "Please enter a company gst number",
										},
							digitalsignaturedate: {
									required: "Please select company signature expire date",
										},	
							companyimage: {
									extension: "Only jpg,jpeg,png file allowed",
											},
							companyaddress: {
									required: "Please enter a company address",
										},	
							stateid: {
									required: "Please select state",
										},
							companycity: {
									required: "Please enter a city",
										},	
							pincode: {
									required: "Please enter a pincode",
										},	
							Shifthours: {
									required: "Please select shift hours",
										},			
							Shiftname: {
									required: "Please enter shift name",
										},
							Shiftintime: {
									required: "Please enter shift in time",
										},			
							Shiftouttime: {
									required: "Please enter shift out time",
										},	
							Accountnumber: {
									required: "Please enter bank account number",
										},
							Branch: {
									required: "Please enter branch city",
										},
							Bankname: {
									required: "Please enter bank name",
										},	
							Ibannumber: {
									required: "Please enter bank iban number",
										},
							Swiftcode: {
									required: "Please enter bank swift code",
										},
					},
					errorPlacement: function (error, element)
					{
						//console.log('dd', element.attr("name"))
						if (element.attr("name") == "companyimage") {
							error.appendTo("#profileerror");
						} else {
							error.insertAfter(element)
						}
					},					

				});		

		});	



</script>