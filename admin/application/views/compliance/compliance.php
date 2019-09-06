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
						<div class="col-sm-5 col-5">
							<h4 class="page-title">List of Compliance</h4>
						</div>
						<div class="col-sm-7 col-7 text-right m-b-30">
							<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_policy"><i class="fa fa-plus"></i> Add Compliance</a>
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


					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table mb-0 datatable">
									<thead>
										<tr>
											<th style="width: 30px;">#</th>
											<th>Compliance Name</th>
											<th>Percentage </th>
											<th>Status </th>
											<th class="text-right">Action</th>
										</tr>
									</thead>
									<tbody>
									<?php 
										$i=1;                          
										foreach($complianceData as $comp)
										{
									?>
										<tr>
											<td><?php echo $i;?></td>
											<td><?php echo $comp->compliancename;?></td>
											<td><?php echo $comp->compliancepercentage;?>%</td>
											<td>
												<?php 
												if($comp->isactive=='1')
												{
													echo "Active";
												}
												else
												{
													echo "Deactive";
												}
												?>
											</td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" onClick="editcompliance(<?php echo $comp->complianceid;?>)" data-toggle="modal" data-target="#edit_policy"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" onclick="deletedata(<?php echo $comp->complianceid; ?>)" data-toggle="modal" data-target="#delete_policy"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<?php	
										$i++;		
											}
										?>   
									
									</tbody>
								</table>
							</div>
						</div>
					</div>

					
                </div>
				<!-- /Page Content -->

				<!-- Add Policy Modal -->
				<div id="add_policy" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add Compliance</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form method="post" id="form_valid">
									<div class="form-group">
										<label>Compliance Name <span class="text-danger">*</span></label>
										<input class="form-control" type="text" name="compliancename" placeholder="Enter a compliance " minlength="2" maxlength="30">
									</div>
									
									<div class="form-group">
										<label>Compliance Percentage <span class="text-danger">*</span></label>
										<input class="form-control" type="text" name="compliancepercentage" placeholder="Enter a compliance percentage : 12" minlength="2" maxlength="20" id="compliancepercentages">
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
								
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Add Policy Modal -->
				
				<!-- Edit Policy Modal -->
				<div id="edit_policy" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Edit Compliance</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form method="post" action="<?php echo base_url();?>Company/compliance" id="form_edit">
								<div class="form-group">
							<input type="hidden" class="form-control" id="complianceid"  name="complianceid" value="<?php echo $complianceid;?>">
										<label>Compliance Name <span class="text-danger">*</span></label>
										<input class="form-control" type="text" name="compliancename" id="compliancename" placeholder="Enter a compliance" minlength="2" maxlength="30">
									</div>
									
									<div class="form-group">
										<label>Compliance Percentage <span class="text-danger">*</span></label>
										<input class="form-control" type="text" name="compliancepercentage" id="compliancepercentage" placeholder="Enter a compliance percentage : 12" minlength="2" maxlength="20">
									</div>

									<div class="col-md-6">
											<div class="form-group">
											<label class="col-form-label">Isactive<span class="text-danger">*</span></label><br>
											<label class="radio-inline">
												
												<?php
												if($isactive==1)
												{
													?>
													<input type="radio" name="isactive" checked  value="1">Active
													<input type="radio" name="isactive" value="0">Deactive
													<?php
												}
												?>
												
											</label>
											<label class="radio-inline">
												
												<?php
												if($isactive==0)
												{
													?>
													<input type="radio" name="isactive"  value="1">Active
													<input type="radio" name="isactive" checked value="0">Deactive
													<?php
												}
												?>
												 
											</label>
											</div>
										</div>
									
									
									
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Save</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Edit Policy Modal -->
				
				<!-- Delete Policy Modal -->
				<div class="modal custom-modal fade" id="delete_policy" role="dialog">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-body">
								<div class="form-header">
									<h3>Delete Compliance</h3>
									<p>Are you sure want to delete?</p>
								</div>
								<div class="modal-btn delete-action">
									<div class="row">
										<div class="col-6">
										<button type="button" class="btn btn-primary continue-btn" id="yes_btn" ><a href="" id="deleteYes" value="Yes">Delete</a></button>
										</div>
										<div class="col-6">
											<a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Delete Policy Modal -->
			
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
		
		<!-- Datatable JS -->
		<script src="<?php echo base_url(); ?>default/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url(); ?>default/js/dataTables.bootstrap4.min.js"></script>
		
		<!-- Custom JS -->
		<script src="<?php echo base_url(); ?>default/js/app.js"></script>
		<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
    </body>
</html>

<script>
	$('#edit_policy').on('hidden.bs.modal', function () {
			$(this).find('form').trigger('reset');
		})

		$('#add_policy').on('hidden.bs.modal', function () {
			$(this).find('form').trigger('reset');
		})

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

		$("#compliancepercentages").on("input", function(evt) {
			var self = $(this);
			self.val(self.val().replace(/[^\d].+/, ""));
			if ((evt.which < 48 || evt.which > 57)) 
			{
				evt.preventDefault();
			}
			});

			$("#compliancepercentage").on("input", function(evt) {
			var self = $(this);
			self.val(self.val().replace(/[^\d].+/, ""));
			if ((evt.which < 48 || evt.which > 57)) 
			{
				evt.preventDefault();
			}
			});

		jQuery.validator.addMethod("noSpace", function(value, element)   { //Code used for blank space Validation 
    return value.indexOf(" ") < 0 && value != ""; 
    }, "Please no space allowed and don't leave it empty"); 

		$(document).ready(function()
		{
				$("#form_valid").validate(
				{
						rules: {
							compliancename: {
									required: true,
										},
							compliancepercentage: {
									required: true,
									noSpace: true,
										},
							},
						messages:{

							compliancename: {
									required: "Please enter a compliance name",
										},	
							compliancepercentage: {
									required: "Please enter a compliance percentage",
										},	
					}					
				});	


				$("#form_edit").validate(
				{
						rules: {
							compliancename: {
									required: true,
										},
							compliancepercentage: {
									required: true,
									noSpace: true,
										},
							},
						messages:{

							compliancename: {
									required: "Please enter a compliance name",
										},	
							compliancepercentage: {
									required: "Please enter a compliance percentage",
										},		
					}					
				});		
		});

		function editcompliance(complianceid)
		{
			Url="<?php echo base_url() ?>";
			//alert(complianceid);
			$.ajax({
				url: Url+'Company/editcompliance',
				type: 'post',
				data:{complianceid:complianceid},
				success:function(response){
					var response = JSON.parse(response);
					    console.log(response.complianceid);
					$('#complianceid').val(response.complianceid);
					$('#compliancename').val(response.compliancename);
					$('#compliancepercentage').val(response.compliancepercentage);
					$('#isactive').val(response.isactive);
				}
			});	
		}

	function deletedata(complianceid){  
			$('#delete_policy').modal('show')
				$('#yes_btn').click(function(){
				
						Url="<?php echo base_url();?>"
						$.ajax({
						url: Url+'/Company/delete_compliance/',
						type: "post",
						data: {complianceid:complianceid} ,
						success: function (response) {             
					// document.location.href = url+'adminmaster/adminlist/';          
					},
					})
				});
		}			
</script>