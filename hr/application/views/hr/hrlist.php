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
							<strong> <?php echo $this->session->flashdata('warning'); ?></strong> 
							</div>
							<?php } ?>
					<!-- Page Title -->
					<div class="row">
						<div class="col-sm-4 col-5">
							<h4 class="page-title">List of Hr </h4>
						</div>
						<div class="col-sm-8 col-7 text-right m-b-30">
							<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_salary"><i class="fa fa-plus"></i> Add Hr
							</a>
						</div>
					
					</div>
					<!-- /Page Title -->
					
					<!-- Search Filter -->
					<form method="post" action="<?php echo base_url();?>Hr">
						<div class="row filter-row">
						
							<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
									<div class="form-group form-focus select-focus">
										<select class="select floating" name="option"> 
											<option value=""> -- Select -- </option>
											<option value="FirstName">Hr Name</option>
											<option value="companyname">Company Name</option>
											<option value="EmailAddress">Email Address</option>
											<option value="PhoneNumber">Contact Number</option>
										</select>
										<!-- <label class="focus-label">Role</label> -->
									</div>
							</div>
							<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
									<div class="form-group form-focus">
										<input type="text" name="keyword2" class="form-control floating">
										<label class="focus-label">Hr Search</label>
									</div>
							</div>
							<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
								<input type="submit" value="Search" class="btn btn-success btn-block">
							</div>     
						</div> 
					</form>
					<!-- /Search Filter -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<!-- <table class="display" style="width:100%" id="example"> -->
								 <table class="table table-striped custom-table datatable" class="display" style="width:100%">
									<thead>
										<tr>
											<th>No</th>
											<th>User Name</th>
											<th>Email Address</th>
											<th>Contact Number</th>
											<th>From Company</th>
											<?php
											if($this->session->userdata('RoleId')==1 || $this->session->userdata('RoleId')==2){
											?>		
												<th class="text-right">Action</th>
											<?php
											}
											?>		
										</tr>
									</thead>
									<tbody>
									<?php
										$i=1;
										if($hrData){                             
										foreach($hrData as $hr)
										{
									?>
										<tr>
										<td><?php echo $i;?></td>
											<td>
												<h2 class="table-avatar">
												<?php 
												if($hr->ProfileImage!='')
												{
													?>
													<a href="" class="avatar"><img src="<?php echo base_url();?>uploads/UserProfile/<?php echo $hr->ProfileImage;?>" alt=""></a>
													<a href="profile.html"><?php echo $hr->FirstName;?> 
													<!-- <?php echo $hr->LastName ;?> <span>Android Developer</span></a> -->
													<?php
												}
												else
												{
													?>
													<a href="" class="avatar"><img src="<?php echo base_url();?>uploads/default/avtar.jpg" alt=""></a>
													<a href="profile.html"><?php echo $hr->FirstName;?> 
													<!-- <?php //echo $hr->LastName ;?> <span>Android Developer</span></a> -->
													<?php
												}
												?>
												</h2>
												
											</td>
											<td><?php echo $hr->EmailAddress ;?></td>
											<td><?php echo $hr->PhoneNumber ;?></td>
											<td><?php echo $hr->companyname ;?></td>
											<?php
										
											?>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" onClick="edithrs(<?php echo $hr->UserId;?>)" data-toggle="modal" data-target="#edit_salary" role="button">
														<i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" onclick="deletedata(<?php echo $hr->UserId; ?>)"  data-toggle="modal" data-target="#delete_admin"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
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
				
				<!-- Add Salary Modal -->
				<div id="add_salary" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add Hr</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form method="post" enctype="multipart/form-data" action="<?php echo base_url();?>Hr/addhr" id="form_valid">
									<!-- <div class="row"> 
										<div class="col-sm-6"> 
											<div class="form-group">
												<label>Select Staff</label>
												<select class="select"> 
													<option>John Doe</option>
													<option>Richard Miles</option>
												</select>
											</div>
										</div>
										<div class="col-sm-6"> 
											<label>Net Salary</label>
											<input class="form-control" type="text">
										</div>
									</div> -->
									<div class="row"> 
										<div class="col-sm-6">
											<!-- <div class="form-group">
												<label>Upload profile</label>
												
												<input class="form-control" type="file" name="ProfileImage">
											</div>  -->
											<div class="form-group">
												<label>First Name</label>	
												<input class="form-control" type="text" name="FirstName" Placeholder="Enter your first name" minlength="2" maxlength="50">
											</div>
											<div class="form-group">
												<label>Email Address</label>
												<input class="form-control" type="text" name="EmailAddress" Placeholder="Enter your email address" minlength="2" maxlength="50">
											</div>
											<div class="form-group">
												<label>Date of Birth</label>
												<input class="form-control" type="date" name="DateofBirth" Placeholder="Enter your date of birth">
												<!-- <input class="form-control" id="datepicker1" type="text" name="DateofBirth" Placeholder="Enter your date of birth" readonly> -->
											</div>
											<div class="form-group">
												<label>Address</label>
												<input class="form-control" type="text" name="Address" Placeholder="Enter your address" minlength="5" maxlength="500">
											</div>
											<div class="form-group">
												<label>City</label>
												<input class="form-control" type="text" name="City" Placeholder="Enter your city" minlength="2" maxlength="50">
											</div>
											<div class="form-group">
														<label class="col-form-label">IsActive<span class="text-danger">*</span></label><br>
														<label class="radio-inline">
															<input type="radio" name="IsActive" checked  value="1">Active
														</label>
														<label class="radio-inline">
															<input type="radio" name="IsActive" value="0">Deactive
														</label>
											</div>
										</div>
										<div class="col-sm-6">  
											<div class="form-group">
												<label>Last Name</label>
												<input class="form-control" type="text" name="LastName" Placeholder="Enter your last name" minlength="2" maxlength="50">
											</div> 
											<div class="form-group">
												<label>Contact Number</label>
												<input class="form-control" type="text" name="PhoneNumber" Placeholder="Enter your contact number" minlength="10" maxlength="10" id="PhoneNumbers">
											</div>
											<div class="form-group">
												<label>Gender</label>
												<select class="select" name="Gender"> 
													<option value="Male">Male</option>
													<option value="Female">Female</option>
												</select>
											</div>
											<div class="form-group">
												<label>Pin-Code</label>
												<input class="form-control" type="text" name="PinCode" id="PinCodes" Placeholder="Enter your pin-code"  minlength="6" maxlength="6">
											</div>
											
											<div class="form-group">
													<label>Company</label>
													<select class="select" name="companyid"> 
														<option desabled value="">Please select company</option>
														<?php
														 if($companyData){
															foreach($companyData as $comp)
															{
														?>
															

															<option value="<?php echo $comp->companyid; ?>">
															<?php echo $comp->companyname;?></option>

														<?php
														}}
														?>
													</select>
											</div>
										
										</div>
									</div>
									<div class="submit-section">
										<input type="submit" name="Save" class="btn btn-primary account-btn" value="Submit">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Add Salary Modal -->
				
				<!-- Edit Salary Modal -->
				<div id="edit_salary" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-md" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Edit Hr</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form method="post" id="form_valid2" action="<?php echo base_url();?>Hr/addhr">
								<input type="hidden" class="form-control" name="UserId" id="UserId" value="<?php $UserId?>">
									
									<div class="row"> 
										<div class="col-sm-6"> 
											<div class="form-group">
												<label>First Name</label>
												
												<input class="form-control" type="text" name="FirstName" Placeholder="Enter your first name" minlength="2" maxlength="50" id="FirstName">
											</div>
											<div class="form-group">
												<label>Email Address</label>
												<input class="form-control" type="text" name="EmailAddress" Placeholder="Enter your email address" minlength="2" maxlength="50" id="EmailAddress">
											</div>
											<div class="form-group">
												<label>Date of Birth</label>
												<input class="form-control" type="date" name="DateofBirth" Placeholder="Enter your date of birth" id="DateofBirth">
											</div>
											<div class="form-group">
												<label>Address</label>
												<input class="form-control" type="text" name="Address" Placeholder="Enter your address" minlength="5" maxlength="500" id="Address">
											</div>
											<div class="form-group">
												<label>City</label>
												<input class="form-control" type="text" name="City" Placeholder="Enter your city" minlength="2" maxlength="50" id="City">
											</div>
											
										</div>
										<div class="col-sm-6">  
											<div class="form-group">
												<label>Last Name</label>
												<input class="form-control" type="text" name="LastName" Placeholder="Enter your last name" minlength="2" maxlength="50" id="LastName">
											</div> 
											<div class="form-group">
												<label>Contact Number</label>
												<input class="form-control" type="text" name="PhoneNumber" Placeholder="Enter your contact number" minlength="10" maxlength="10" id="PhoneNumber">
											</div>
											<div class="form-group">
												<label>Gender</label>
												<select class="select" name="Gender"> 
													<option value="Male" id="Male">Male</option>
													<option value="Female" id="Female">Female</option>
												</select>
											</div>
											<div class="form-group">
												<label>Pincode Number</label>
												<input class="form-control" type="text" name="PinCode" Placeholder="Enter your pincode number" minlength="06" maxlength="06" id="PinCode">
											</div>

											<div class="form-group">
												<label class="col-form-label">IsActive<span class="text-danger">*</span></label><br>
												<label class="radio-inline">
													<input type="radio" name="IsActive"  value="1">Active
												</label>
												<label class="radio-inline">
													<input type="radio" name="IsActive"  value="0">Inactive
												</label>
											</div>

											
										</div>
									</div>
									<div class="submit-section">
										<input type="submit" name="submit" class="btn btn-primary account-btn" value="Update">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Edit Salary Modal -->
				
				<!-- Delete Salary Modal -->
				<!-- <div class="modal custom-modal fade" id="delete_admin" role="dialog">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-body">
								<div class="form-header">
									<h3>Delete Admin</h3>
									<p>Are you sure want to delete?</p>
								</div>
								
								<div class="modal-btn delete-action">
									<div class="row">
										<div class="col-6">
											<a href="javascript:void(0);" id="yes_btn" ><a href="" id="deleteYes" value="Yes" class="btn btn-primary continue-btn">Delete</a>
										</div>
										<div class="col-6">
											<a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> -->
				<!-- /Delete Salary Modal -->

				
			<div class="modal fade bs-example-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog modal-sm" role="document" style="margin:20% auto;">
					<div class="modal-content">
						<div class="modal-body" >
							<p>Are you sure you want to delete this record?</p>
						</div>
						<div class="modal-footer text-center">
							<!--<button type="button" class="next_btn" id="yes_btn" name="update">Yes</button>-->
							<center><button type="button" class="btn-md btn-icon btn-link p4" id="yes_btn" ><a href="" id="deleteYes" value="Yes"  class="btn btn-success">Yes</a></button>
							<button type="button" class="btn btn-danger" data-dismiss="modal">No</button></center>
						</div>
					</div>
				</div>
			</div>

				
            </div>
			<!-- /Page Wrapper -->

        </div>
		<!-- /Main Wrapper -->

		<!-- Sidebar Overlay -->
		<div class="sidebar-overlay" data-reff=""></div>

		<!-- jQuery -->
        <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="<?php echo base_url(); ?>default/js/jquery-3.2.1.min.js"></script>

		<!-- Bootstrap Core JS -->
        <script src="<?php echo base_url(); ?>default/js/popper.min.js"></script>
        <script src="<?php echo base_url(); ?>default/js/bootstrap.min.js"></script>

		<!-- Slimscroll JS -->
		<script src="<?php echo base_url(); ?>default/js/jquery.slimscroll.min.js"></script>
		
		<!-- Select2 JS -->
		<script src="<?php echo base_url(); ?>default/js/select2.min.js"></script>
		
		<!-- Datetimepicker JS -->
		<script src="<?php echo base_url(); ?>default/js/moment.min.js"></script>
		<script src="<?php echo base_url(); ?>default/js/bootstrap-datetimepicker.min.js"></script>
		
		<!-- Datatable JS -->
		 <script src="<?php echo base_url(); ?>default/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url(); ?>default/js/dataTables.bootstrap4.min.js"></script>		 


		<!-- External -->
		<!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
		<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>	
		<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>	

		<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>		
		<script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>		
		<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>		
		<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>		 -->
		


	
		<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script> -->

		


		<!-- Custom JS -->
		<script src="<?php echo base_url(); ?>default/js/app.js"></script>
		<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.js" type="text/javascript" ></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </body>
</html>
<script>

			$('#datepicker1').datepicker();
				 dateFormat: 'dd/mm/yy'  

$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'excelHtml5',
                title: 'Data export'
            },
            {
                extend: 'pdfHtml5',
                title: 'Data export'
            },
			{
                extend: 'print',
                title: 'Data export'
            },
        ]
    } );
} );

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

	
    // var table = $('#example').DataTable( {
    //     responsive: true
    // } );
 
	// $('#example').DataTable( {
    //     dom: 'Bfrtip',
    //     buttons: [
    //         {
    //             extend: 'excelHtml5',
    //             title: 'Data export'
    //         },
    //         {
    //             extend: 'pdfHtml5',
    //             title: 'Data export'
    //         }
    //     ]
    // } );
	
			$("#PhoneNumbers").on("input", function(evt) {
			var self = $(this);
			self.val(self.val().replace(/[^\d].+/, ""));
			if ((evt.which < 48 || evt.which > 57)) 
			{
				evt.preventDefault();
			}
			});

			$("#PhoneNumber").on("input", function(evt) {
			var self = $(this);
			self.val(self.val().replace(/[^\d].+/, ""));
			if ((evt.which < 48 || evt.which > 57)) 
			{
				evt.preventDefault();
			}
			});

			$("#PinCode").on("input", function(evt) {
			var self = $(this);
			self.val(self.val().replace(/[^\d].+/, ""));
			if ((evt.which < 48 || evt.which > 57)) 
			{
				evt.preventDefault();
			}
			});

			$("#PinCodes").on("input", function(evt) {
			var self = $(this);
			self.val(self.val().replace(/[^\d].+/, ""));
			if ((evt.which < 48 || evt.which > 57)) 
			{
				evt.preventDefault();
			}
			});

			$('#add_salary').on('hidden.bs.modal', function () {
    			$(this).find('form').trigger('reset');
			})

		$("#form_valid").validate(
		{
					rules: {

						FirstName: {
							required: true,
								},
						LastName: {
							required: true,
								},
						EmailAddress: {
							required: true,
								},		
						DateofBirth: {
							required: true,
								},
						Gender: {
							required: true,
								},
						Address: {
							required: true,
								},
						PinCode: {
							required: true,
								},
						PhoneNumber: {
							required: true,
							digits: true,
								},
						City: {
							required: true,
								},
						companyid: {
							required: true,
								},
					},

				messages:{

						FirstName: {
							required: "Please enter a first name",
								pattern : "Enter only characters and numbers and \"space , \" -",
								minlength: "Please enter at least 2 and maximum 50 letters!",
								},
						LastName: {
							required: "Please enter a last name",
								pattern : "Enter only characters and numbers and \"space , \" -",
								minlength: "Please enter at least 2 and maximum 50 letters!",
								},
						EmailAddress: {
							required: "Please enter a email address",
								},
						DateofBirth: {
							required: "Please enter a date of birth",
								},
						Gender: {
							required: "Please enter a gender",
								},
						Address: {
							required: "Please enter a address",
							minlength: "Please enter at least 5 and maximum 500 letters!",
								},	
						PinCode: {
							required: "Please enter a your area pincode number",
							pattern : "Enter only numbers",
							minlength: "Please enter at least 6 and maximum 6 numbers!",
								},
						PhoneNumber: {
							required: "Please enter a contact number",
							minlength: "Please enter at least 10 and maximum 13 numbers!",
								},
						City: {
							required: "Please enter a city",
							minlength: "Please enter at least 3 and maximum to 50 numbers!",
								},
						companyid: {
							required: "Please select company",
								},	
			}
				
		});


		$("#form_valid2").validate(
		{
					rules: {

						FirstName: {
							required: true,
								},
						LastName: {
							required: true,
								},
						EmailAddress: {
							required: true,
								},		
						DateofBirth: {
							required: true,
								},
						Gender: {
							required: true,
								},
						Address: {
							required: true,
								},
						PhoneNumber: {
							required: true,
							digits: true,
								},
						PinCode: {
							required: true,
							digits: true,
								},
						City: {
							required: true,
								},
					},

				messages:{

						FirstName: {
							required: "Please enter a first name",
								pattern : "Enter only characters and numbers and \"space , \" -",
								minlength: "Please enter at least 2 and maximum 50 letters!",
								},
						LastName: {
							required: "Please enter a last name",
								pattern : "Enter only characters and numbers and \"space , \" -",
								minlength: "Please enter at least 2 and maximum 50 letters!",
								},
						EmailAddress: {
							required: "Please enter a email address",
								},
						DateofBirth: {
							required: "Please enter a date of birth",
								},
						Gender: {
							required: "Please enter a gender",
								},
						'Address': {
							required: "Please enter a address",
							minlength: "Please enter at least 5 and maximum 500 letters!",
								},	
						PhoneNumber: {
							required: "Please enter a contact number",
							minlength: "Please enter at least 10 and maximum 13 numbers!",
								},
						PinCode: {
							required: "Please enter a your area pincode number",
							minlength: "Please enter at least 6 and maximum 6 numbers!",
								},
						City: {
							required: "Please enter a city",
							minlength: "Please enter at least 3 and maximum 50 numbers!",
								},	
			}
				
		});
});					        
</script>


<SCRIPT>

function edithrs(UserId)
{
	Url="<?php echo base_url() ?>";
//	alert(AdminId);
	$.ajax({
         url: Url+'hr/edithr',
         type: 'post',
		 data:{UserId:UserId},
         success:function(response){
			var response = JSON.parse(response);
            //    console.log(response.UserId);
			//    console.log(response.DateofBirth);
            $('#UserId').val(response.UserId);
			$('#FirstName').val(response.FirstName);
			$('#LastName').val(response.LastName);
			$('#EmailAddress').val(response.EmailAddress);
			$('#DateofBirth').val(response.DateofBirth);
			$('#PhoneNumber').val(response.PhoneNumber);
			$('#Gender').val(response.Gender);
			$('#Address').val(response.Address);
			$('#PinCode').val(response.PinCode);
			$('#City').val(response.City);
			$("input[name=IsActive][value=" + response.IsActive + "]").attr('checked', 'checked');
			// $('#companyid').val(response.companyid);
			// $('#companyname').val(response.companyname);
         }
      });	
}


function deletedata(UserId){  
    $('#myModal').modal('show')
        $('#yes_btn').click(function(){
           
                Url="<?php echo base_url();?>"
                $.ajax({
                url: Url+'/Hr/deletehr/',
                type: "post",
                data: {UserId:UserId} ,
                success: function (response) {             
               // document.location.href = url+'adminmaster/adminlist/';          
            },
            })
        });
}

</script>