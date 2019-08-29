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
							<h4 class="page-title">Policies</h4>
						</div>
						<div class="col-sm-7 col-7 text-right m-b-30">
							<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_policy"><i class="fa fa-plus"></i> Add Policy</a>
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
											<th>isactive </th>
											<th>Created </th>
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
											<td><?php echo $comp->compliancepercentage;?></td>
											<td><?php echo $comp->isactive;?></td>
											<td>19 Feb 2019</td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#"><i class="fa fa-download m-r-5"></i> Download</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_policy"><i class="fa fa-pencil m-r-5"></i> Edit</a>
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
								<h5 class="modal-title">Add Policy</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form method="post" id="form_valid">
									<div class="form-group">
										<label>Policy Name <span class="text-danger">*</span></label>
										<input class="form-control" type="text" name="compliancename">
									</div>
									<div class="form-group">
										<label>Description <span class="text-danger">*</span></label>
										<textarea class="form-control" rows="4"></textarea>
									</div>
									<div class="form-group">
										<label class="col-form-label">Department</label>
										<select class="select">
											<option>All Departments</option>
											<option>Web Development</option>
											<option>Marketing</option>
											<option>IT Management</option>
										</select>
									</div>
									<div class="form-group">
										<label>Upload Policy <span class="text-danger">*</span></label>
										<div class="custom-file">
											<input type="file" class="custom-file-input" id="policy_upload">
											<label class="custom-file-label" for="policy_upload">Choose file</label>
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
								<h5 class="modal-title">Edit Policy</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="form-group">
										<label>Policy Name <span class="text-danger">*</span></label>
										<input class="form-control" type="text" value="Leave Policy">
									</div>
									<div class="form-group">
										<label>Description <span class="text-danger">*</span></label>
										<textarea class="form-control" rows="4"></textarea>
									</div>
									<div class="form-group">
										<label class="col-form-label">Department</label>
										<select class="select">
											<option>All Departments</option>
											<option>Web Development</option>
											<option>Marketing</option>
											<option>IT Management</option>
										</select>
									</div>
									<div class="form-group">
										<label>Upload Policy <span class="text-danger">*</span></label>
										<div class="custom-file">
											<input type="file" class="custom-file-input" id="edit_policy_upload">
											<label class="custom-file-label" for="edit_policy_upload">Choose file</label>
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
									<h3>Delete Policy</h3>
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

		$(document).ready(function()
		{
				$("#form_valid").validate(
				{
						rules: {
							compliancename: {
									required: true,
										},
							},
						messages:{

							compliancename: {
									required: "Please enter a company type",
										},	
					}					
				});	


				$("#form_edit").validate(
				{
						rules: {
							companytype: {
									required: true,
										},
							},
						messages:{

							companytype: {
									required: "Please enter a company type",
										},	
					}					
				});		
		});

		function editcompanytype(companytypeid)
		{
			Url="<?php echo base_url() ?>";
			//alert(companytypeid);
			$.ajax({
				url: Url+'Company/editcompanytype',
				type: 'post',
				data:{id:companytypeid},
				success:function(response){
					var response = JSON.parse(response);
					    console.log(response.companytypeid);
					$('#companytypeid').val(response.companytypeid);
					$('#companytype').val(response.companytype);
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