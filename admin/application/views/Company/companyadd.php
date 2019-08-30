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
			
				<!-- Add Client Modal -->
				<!-- <div id="add_client" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content"> -->
							

							<div class="modal-body">
								<form method="post" id="form_valid" action="<?php echo base_url();?>Company/companyadd">
								<input type="hidden" class="form-control" name="companyid" value="<?php echo $companyid;?>">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
													<label>Company Type</label>
													<select class="select" name="companytypeid"> 
														<option desabled value="">Please select company type</option>
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
												<input class="form-control" minlength="10" maxlength="10" type="text" name="comcontactnumber" id="comcontactnumber" placeholder="Enter email address"  
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
											<label class="col-form-label">Isactive<span class="text-danger">*</span></label><br>
											<label class="radio-inline">
												<input type="radio" name="isactive" checked value="1">Active
											</label>
											<label class="radio-inline">
												<input type="radio" name="isactive" value="0">Deactive
											</label>
											</div>
										</div>
										<!-- <div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Password</label><span class="text-danger">*</span></label>
												<input class="form-control" type="password" name="password" placeholder="Enter password">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Confirm Password</label><span class="text-danger">*</span></label>
												<input class="form-control" type="password" name="confirm_password" placeholder="Enter confirm new password">
											</div>
										</div> -->
										<!-- <div class="col-md-12">  
											<div class="form-group">
												<label>Company Address <span class="text-danger">*</span></label>
												<textarea class="form-control" rows="4" name="companyaddress"></textarea>
											</div>
										</div> -->
										<!-- <div class="col-md-6">  
											<div class="form-group">
												<label class="col-form-label">Client ID <span class="text-danger">*</span></label>
												<input class="form-control floating" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Phone </label>
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Company Name</label>
												<input class="form-control" type="text">
											</div>
										</div> -->
									</div>
									<!-- <div class="table-responsive m-t-15">
										<table class="table table-striped custom-table">
											<thead>
												<tr>
													<th>Module Permission</th>
													<th class="text-center">Read</th>
													<th class="text-center">Write</th>
													<th class="text-center">Create</th>
													<th class="text-center">Delete</th>
													<th class="text-center">Import</th>
													<th class="text-center">Export</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Projects</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
												</tr>
												<tr>
													<td>Tasks</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
												</tr>
												<tr>
													<td>Chat</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
												</tr>
												<tr>
													<td>Estimates</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
												</tr>
												<tr>
													<td>Invoices</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
												</tr>
												<tr>
													<td>Timing Sheets</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
												</tr>
											</tbody>
										</table>
									</div> -->
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

						<!-- </div>
					</div>
				</div> -->
				<!-- /Add Client Modal -->
				
			
			
            </div>
			<!-- /Page Wrapper -->
			
        </div>
		<!-- /Main Wrapper -->
		
		<!-- Sidebar Overlay -->
		<div class="sidebar-overlay" data-reff=""></div>
		
		<!-- jQuery -->
        <script src="<?php echo base_url(); ?>default/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="<?php echo base_url(); ?>default/js/popper.min.js"></script>
        <script src="<?php echo base_url(); ?>default/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
		<script src="<?php echo base_url(); ?>default/js/jquery.slimscroll.min.js"></script>
		
		<!-- Select2 JS -->
		<script src="<?php echo base_url(); ?>default/js/select2.min.js"></script>
		
		<!-- Custom JS -->
		<script src="<?php echo base_url(); ?>default/js/app.js"></script>
		<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
    </body>
</html>

<script>
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
							},
						messages:{
							
							companytypeid: {
									required: "Please select company type",
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
					}					
				});		
		});	

</script>