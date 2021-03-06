﻿<?php 
	 $this->load->view('common/header.php');
	 $this->load->view('common/sidebar.php');
?>
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			<input type="hidden" name="RoleId" value="<?php echo $roleid=$this->session->userdata('RoleId');?>">
				<!-- Page Content -->
                <div class="content container-fluid">
					<?php if($rightsData)
					{                             
						foreach($rightsData as $ritdata)
						{ ?>
					<!-- Page Title -->
					<div class="row">
						<div class="col">
							<h4 class="page-title">List of Company  </h4>
						</div>
						<?php 
								 if($ritdata->add==1)
								 {
									 ?>
									<div class="col-12 text-right m-b-30">
										<a href="<?php echo base_url();?>Company/companyadd" class="btn add-btn"><i class="fa fa-plus">
										</i> Add Company</a>			
									</div>
						<?php
								 }
						?>
						
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
					<form method="post" action="<?php echo base_url();?>Company">
						<div class="row filter-row">
						
							<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
									<div class="form-group form-focus select-focus">
										<select class="select floating" name="option"> 
											<option value=""> -- Select -- </option>
											<option value="companytype">Company Type</option>
											<option value="companyname">Company Name</option>
											<option value="comemailaddress">Email Address</option>
											<option value="comcontactnumber">Contact Number</option>
										</select>
										<!-- <label class="focus-label">Role</label> -->
									</div>
							</div>
							<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
									<div class="form-group form-focus">
										<input type="text" name="keyword2" class="form-control floating">
										<label class="focus-label">Company Search</label>
									</div>
							</div>
							<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
								<input type="submit" value="Search" class="btn btn-success btn-block">
							</div>     
						</div> 
					</form>
					
					<!-- Search Filter -->
					

					<div class="row staff-grid-row">
						<?php                           
							foreach($companyData as $comp)
							{
						?>
						
							<div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
								<div class="profile-widget">
									<div class="profile-img">
										<a href="client-profile.php" class="avatar">
										<?php
										if($comp->companylogo!='')
										{
											?>
												<img alt="" src="<?php echo base_url(); ?>default/img/profiles/avatar-19.jpg">
											<?php
										}
										else
										{
											?>
												<img alt="" src="<?php echo base_url(); ?>uploads/default/user_image.png">
											<?php
										}
										?>
										
										</a>
									</div>
									<?php
									if($ritdata->update==1)
								 	{
									 ?>
									<div class="dropdown profile-action">
										<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="<?php echo base_url();?>Company/editcompany/<?php echo $comp->companyid;?>"><i class="fa fa-pencil m-r-5"></i> Edit</a>
											<a class="dropdown-item" onclick="deletedata(<?php echo $comp->companyid; ?>)" data-toggle="modal" data-target="#delete_client"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
										</div>
									</div>
									<?php
									 }
									?>
									<h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="client-profile.php">
									<?php echo $comp->companyname;?></a></h4>
									<h5 class="user-name m-t-10 mb-0 text-ellipsis"><a href="client-profile.php">Barry Cuda</a></h5>

									<div class="small text-muted">
									<?php 
										if($comp->verificationcode!='')
										{
											echo "Verification Pending";
										}
										else
										{
											echo "Verification complete";
										}
									?>
									</div>
									<a href="#" class="btn btn-white btn-sm m-t-10">Message</a>
									<a href="<?php echo base_url();?>Client/clientprofile" class="btn btn-white btn-sm m-t-10">View Profile</a>
								</div>
							</div>

							
						<?php			
							}
						?>    

<?php }}?>				
					</div>


                </div>
				<!-- /Page Content -->
			
			
				
				
				
				<!-- Delete Client Modal -->
				<div class="modal custom-modal fade" id="delete_client" role="dialog">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-body">
								<div class="form-header">
									<h3>Delete Client</h3>
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

function deletedata(companyid){  
			$('#delete_client').modal('show')
				$('#yes_btn').click(function(){
				
						Url="<?php echo base_url();?>"
						$.ajax({
						url: Url+'/Company/delete_company/',
						type: "post",
						data: {companyid:companyid} ,
						success: function (response) {             
					// document.location.href = url+'adminmaster/adminlist/';          
					},
					})
				});
		}			

</script>