<?php 
	 $this->load->view('common/header.php');
	 $this->load->view('common/sidebar.php');
?>			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
				<!-- Page Content -->
                <div class="content container-fluid">
				
					<!-- Page Title -->
					<div class="row">
						<div class="col-sm-5 col-5">
							<h4 class="page-title">Type of Company <?php echo $isactive;?></h4>
						</div>
						<div class="col-sm-7 col-7 text-right m-b-30">
							<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_holiday"><i class="fa fa-plus"></i> Add Type of Company</a>
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
								<table class="table table-striped custom-table mb-0">
									<thead>
										<tr>
											<th>#</th>
											<th>Type Company</th>
											<th>Status</th>
											<th class="text-right">Action</th>
										</tr>
									</thead>
									<tbody>
									<?php 
										$i=1;                          
										foreach($companytypeData as $comp)
										{
									?>
										<tr class="holiday-upcoming">
											<td><?php echo $i;?></td>
											<td><?php echo $comp->companytype;?></td>
											<td>
											<?php
											if($comp->isactive=='1')
											{
												echo "Active";
											}
											else
											{
												echo "Inactive";
											}
											?>
											</td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" onClick="editcompanytype(<?php echo $comp->companytypeid;?>)" data-toggle="modal" data-target="#edit_holiday"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item"  onclick="deletedata(<?php echo $comp->companytypeid; ?>)" data-toggle="modal" data-target="#delete_holiday"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
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
			
				<!-- Add Holiday Modal -->
				<div class="modal custom-modal fade" id="add_holiday" role="dialog">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add Type of Company</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form method="post" id="form_valid">
									<div class="form-group">
										<label>Type Company<span class="text-danger">*</span></label>
										<input class="form-control" type="text" name="companytype" Placeholder="Enter type of company">
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
				<!-- /Add Holiday Modal -->
				
				<!-- Edit Holiday Modal -->
				<div class="modal custom-modal fade" id="edit_holiday" role="dialog">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
							
								<h5 class="modal-title">Edit Type of Company  </h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form method="post" id="form_edit" >
									<div class="form-group">
									<input type="hidden" class="form-control" name="companytypeid" id="companytypeid" 
									value="<?php echo $companytypeid;?>">
										<label>Type Company<span class="text-danger">*</span></label>
										<input class="form-control" type="text" name="companytype" id="companytype" Placeholder="Enter type of company">
									</div>
									<div class="col-md-6">
											<div class="form-group">
											<label class="col-form-label">Isactive<span class="text-danger">*</span></label><br>
											<label class="radio-inline">
												<input type="radio" name="isactive"  value="1">Active
											</label>
											<label class="radio-inline">
												<input type="radio" name="isactive"  value="0">Inactive
											</label>
											</div>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Update</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Edit Holiday Modal -->

				<!-- Delete Holiday Modal -->
				<div class="modal custom-modal fade" id="delete_holiday" role="dialog">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-body">
								<div class="form-header">
									<h3>Delete Type of Company</h3>
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
				<!-- /Delete Holiday Modal -->
				
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
		
		<!-- Datetimepicker JS -->
		<script src="<?php echo base_url(); ?>default/js/moment.min.js"></script>
		<script src="<?php echo base_url(); ?>default/js/bootstrap-datetimepicker.min.js"></script>
		
		<!-- Custom JS -->
		<script src="<?php echo base_url(); ?>default/js/app.js"></script>
		<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
    </body>
</html>

<script>
	$('#edit_holiday').on('hidden.bs.modal', function () {
			$(this).find('form').trigger('reset');
		})

		$('#add_holiday').on('hidden.bs.modal', function () {
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
							companytype: {
									required: true,
										},
							},
						messages:{

							companytype: {
									required: "Please enter a type of company",
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
									required: "Please enter a type of company",
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
				data:{companytypeid:companytypeid},
				success:function(response){
					var response = JSON.parse(response);
					    console.log(response);
					$('#companytypeid').val(response.companytypeid);
					$('#companytype').val(response.companytype);
					$("input[name=isactive][value=" + response.isactive + "]").attr('checked', 'checked');
			
				}
			});	
		}

	function deletedata(companytypeid){  
			$('#delete_holiday').modal('show')
				$('#yes_btn').click(function(){
				
						Url="<?php echo base_url();?>"
						$.ajax({
						url: Url+'/Company/delete_companytype/',
						type: "post",
						data: {companytypeid:companytypeid} ,
						success: function (response) {             
					// document.location.href = url+'adminmaster/adminlist/';          
					},
					})
				});
		}			
</script>