<?php 
	 $this->load->view('common/header.php');
	 $this->load->view('common/sidebar.php');
?>
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			<input type="hidden" name="RoleId" value="<?php echo $roleid=$this->session->userdata('RoleId');?>">
				<!-- Page Content -->
                <div class="content container-fluid">
				
					<!-- Page Title -->
					<div class="row">
						<div class="col">
							<h4 class="page-title">List of Employee  </h4>
						</div>	
									<div class="col-12 text-right m-b-30">
										<a href="<?php echo base_url();?>Employee/addemployee" class="btn add-btn"><i class="fa fa-plus">
										</i> Add Employee</a>			
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
					
					<!-- Search Filter -->
					<form method="post" action="<?php echo base_url();?>Employee">
						<div class="row filter-row">
						
							<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
									<div class="form-group form-focus select-focus">
										<select class="select floating" name="option"> 
											<option value=""> -- Select -- </option>
											<option value="companyname">Company Name</option>
											<option value="empfirstname">Employee Name</option>
											<option value="empemailaddress">Email Address</option>
											<option value="contactnumber">Contact Number</option>
										</select>
										<!-- <label class="focus-label">Role</label> -->
									</div>
							</div>
							<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
									<div class="form-group form-focus">
										<input type="text" name="keyword2" class="form-control floating">
										<label class="focus-label">Search</label>
									</div>
							</div>
							<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
								<input type="submit" value="Search" class="btn btn-success btn-block">
							</div>     
						</div> 
					</form>
					
					<!-- Search Filter -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<!-- <table class="display" style="width:100%" id="example"> -->
								 <table class="table table-striped custom-table datatable" class="display" style="width:100%">
									<thead>
										<tr>
											<th>No</th>
											<th>First Name</th>
											<th>Contact Number</th>
											<th>Email Address</th>
											<th>From Company</th>
											<th class="text-right">Action</th>
											
										</tr>
									</thead>
									<tbody>
									<?php
										$i=1;
										if($employeeData){                             
										foreach($employeeData as $empData)
										{
									?>
										<tr>
										<td><?php echo $i;?></td>
										<td><?php echo $empData->empfirstname ;?></td>
										<td><?php echo $empData->contactnumber ;?></td>
										<td><?php echo $empData->empemailaddress ;?></td>
										<td><?php echo $empData->companyname ;?></td>
										
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<!-- <a class="dropdown-item" href="<?php //echo base_url();?>empDataany/editempDataany/<?php //echo $empData->employeeid;?>" role="button">
														<i class="fa fa-pencil m-r-5"></i> Edit</a> -->
														<a class="dropdown-item" onclick="deletedata(<?php echo $empData->employeeid; ?>)" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
														
													</div>
												</div>
											</td>
											
										

										</tr>
										<?php
										$i++;
											} }
										?>     
									</tbody>
								</table>
							</div>
						</div>
					</div>


                </div>
				<!-- /Page Content -->
			
			
				
				
				
				<!-- Delete Client Modal -->
				<div class="modal custom-modal fade" id="delete_employee" role="dialog">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-body">
								<div class="form-header">
									<h3>Delete Employee</h3>
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
				<!-- /Delete Client Modal -->
				
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
		<script src="<?php echo base_url(); ?>default/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url(); ?>default/js/dataTables.bootstrap4.min.js"></script>
		<!-- Custom JS -->
		<script src="<?php echo base_url(); ?>default/js/app.js"></script>
		<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
    </body>
</html>

<script>

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

function deletedata(employeeid){  
			$('#delete_employee').modal('show')
				$('#yes_btn').click(function(){
				
						Url="<?php echo base_url();?>"
						$.ajax({
						url: Url+'/Employee/delete_employee/',
						type: "post",
						data: {employeeid:employeeid} ,
						success: function (response) {             
					// document.location.href = url+'adminmaster/adminlist/';          
					},
					})
				});
		}			

</script>