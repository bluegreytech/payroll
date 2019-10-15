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



							<h4 class="page-title">List of Master Admin</h4>



						</div>



						<div class="col-sm-8 col-7 text-right m-b-30">



							<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_salary"><i class="fa fa-plus"></i> Add Admin



							</a>



						</div>



					



					</div>



					<!-- /Page Title -->



					



					<!-- Search Filter -->



					<form method="post" action="<?php echo base_url();?>Adminmaster/adminlist">

					<?php $AdminId=$this->session->userdata('AdminId');?>

						<div class="row filter-row">



						



							<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  



									<div class="form-group form-focus select-focus">



										<select class="select floating" name="option"> 



											<option value=""> -- Select -- </option>



											<option value="FirstName">Admin Name</option>



											<option value="EmailAddress">Email Address</option>



											<option value="PhoneNumber">Contact Number</option>



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

							<div class="col-md-3"> 

								<a href="<?php echo base_url()?>adminmaster/adminlist" class="btn btn-info"><i class="fa fa-refresh"></i></a> 

						

							</div>  

						</div> 



					</form>



					<!-- /Search Filter -->



					



					<div class="row">



						<div class="col-md-12">



							<div class="table-responsive">

								 <!-- <table class="table table-striped custom-table datatable" class="display" style="width:100%"> -->

								 <table id="example" class="display table table-striped custom-table" style="width:100%">

									<thead>
										<tr>
											<th>No</th>
											<th>Name</th>
											<th>Email Address</th>
											<th>Contact Number</th>
											<th>Type Role</th>
											<th>Status</th>
											<?php 

											if($this->session->userdata('RoleId')==1)
											{
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
										if($adminmasterData){                             
										foreach($adminmasterData as $adminlist)
										{
									?>

										<tr>
										<td><?php echo $i;?></td>
										<td>
											<span  class="table-avatar">
											<?php 
											if($adminlist->ProfileImage!='')
											{
												?>
												<a class="avatar"><img src="<?php echo base_url();?>upload/admin/<?php echo $adminlist->ProfileImage;?>"></a>
												<?php echo $adminlist->FirstName;?> <?php echo $adminlist->LastName;?>
												<?php

											}
											else
											{
												?>
												<a class="avatar"><img src="<?php echo base_url();?>upload/default/avtar.jpg"></a>
												<?php echo $adminlist->FirstName;?> <?php echo $adminlist->LastName;?>
												<?php
											}
											?>
											</h2>
											</td>



											<td><?php echo $adminlist->EmailAddress ;?></td>
											<td><?php echo $adminlist->PhoneNumber ;?></td>
											<td>
											<?php 

											if($adminlist->RoleId=='1')
											{
												echo "<span class='btn btn-white btn-sm btn-rounded'>Super Admin<span>";
											}
											else
											{
												echo "<span class='btn btn-white btn-sm btn-rounded'>Admin<span>";
											}
											?></td>
                                            <td>

							<div class="action-label">
							<a class="btn btn-white btn-sm btn-rounded" href="javascript:void(0);"  onclick="statusdata('<?php echo $adminlist->AdminId; ?>','<?php echo $adminlist->IsActive ;?>')">
								<?php if($adminlist->IsActive=='1')
								{
									?>
                   <i class="fa fa-dot-circle-o text-success"></i>Active
									<?php
								}else
								{
									?>
									<i class="fa fa-dot-circle-o text-danger"></i>Inactive
									<?php
								}
								?>
							</a>
						</div>

							</td>



											<?php 

											if($this->session->userdata('RoleId')==1)

											{

											?>

							<td class="text-center">

								<a  onClick="editadmin(<?php echo $adminlist->AdminId;?>)" data-toggle="modal" data-target="#edit_salary" role="button" title="Edit"><i class="fa fa-pencil m-r-5"></i></a>

								<a  onclick="deletedata(<?php echo $adminlist->AdminId; ?>)"  data-toggle="modal" data-target="#delete_admin" title="Delete"><i class="fa fa-trash-o m-r-5"></i> </a>



							</td>



											<?php 



											}



											?>



											



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

								<h5 class="modal-title">Add Admin</h5>

								<button type="button" class="close" data-dismiss="modal" aria-label="Close">

									<span aria-hidden="true">&times;</span>

								</button>

							</div>

							<div class="modal-body">

								<form method="post" enctype="multipart/form-data" action="<?php echo base_url();?>Adminmaster/addadmin" id="form_valid">

								<div class="profile-img-wrap edit-img">

											<img class="inline-block" src="<?php echo base_url(); ?>upload/default/avtar.jpg" alt="" id="blah">

											<div class="fileupload btn">

												<span class="btn-text">Upload</span>

												<input  type="file" name="ProfileImage" class="upload" onchange="readURL(this);">	

											</div>

										</div>
									<center><h6>Uplopad only jpeg,jpg,png,bmp image file</h6></center>
									<div class="row"> 

										<div class="col-sm-6">

											<div class="form-group">

												<label>First Name</label>	

												<input class="form-control" tabindex="1" type="text" name="FirstName" Placeholder="Enter your first name" minlength="2" maxlength="50">

											</div>



											<div class="form-group">

												<label>Email Address</label>

												<input class="form-control" tabindex="3" type="email" name="EmailAddress" Placeholder="Enter your email address" minlength="2" maxlength="50">

											</div>

	

										

											<div class="form-group">

												<label>Birth Date <span class="text-danger">*</span></label>

												<div class="cal-icon">

													<input  class="form-control datetimepicker" type="text" id="DateofBirth2" name="DateofBirth"

													readonly>

												</div>

											</div>

									

											

											<div class="form-group">

												<label>Address</label>

												<input class="form-control" tabindex="7" type="text" name="Address" Placeholder="Enter your address" minlength="5" maxlength="500">

											</div>



											<div class="form-group">

												<label>City</label>

												<input class="form-control" tabindex="9" type="text" name="City" Placeholder="Enter your city" minlength="2" maxlength="50">

											</div>







											<div class="form-group">

												<label>Isactive</label><br>

												<label class="radio-inline" tabindex="12">

													<input type="radio" name="isactive" checked value="1">Active

												</label>

												<label class="radio-inline" tabindex="13">

													<input type="radio" name="isactive" value="0">Inactive

												</label>

											</div>



											



										</div>



										<div class="col-sm-6">  

											<div class="form-group">

												<label>Last Name</label>

												<input class="form-control" tabindex="2" type="text" name="LastName" Placeholder="Enter your last name" minlength="2" maxlength="50">

											</div> 



											<div class="form-group">

												<label>Contact Number</label>

												<input class="form-control" tabindex="4" type="text" name="PhoneNumber" Placeholder="Enter your contact number" minlength="10" maxlength="10" id="PhoneNumbers">

											</div>



											<div class="form-group">

												<label>Gender</label>

												<select class="form-control" name="Gender" tabindex="4">

													<option value="">Please select gender</option>

													<option value="Male">Male</option>

													<option value="Female">Female</option>

												</select>

											</div>



											<div class="form-group">

												<label>Pin-Code</label>

												<input class="form-control" tabindex="8" type="text" name="PinCode" id="PinCodeadd" Placeholder="Enter your pin-code"  minlength="6" maxlength="6">

											</div>







											<div class="form-group">

												<label>Role</label>

												<select class="form-control" name="RoleId" tabindex="4">

													<option value="">Select role</option>

													<option value="1">Super Admin</option>

													<option value="2">Admin</option>

												</select>



											</div>



											



												



										</div>



									</div>



									<div class="submit-section">

										<input type="submit" name="logins" class="btn btn-primary account-btn" value="Submit">

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

								<h5 class="modal-title">Edit Master Admin </h5>

								<button type="button" class="close" data-dismiss="modal" aria-label="Close">

									<span aria-hidden="true">&times;</span>

								</button>



							</div>



							<div class="modal-body">

								<form method="post" id="form_valid2" action="<?php echo base_url();?>Adminmaster/addadmin"  enctype="multipart/form-data">

								<input type="hidden" class="form-control" name="AdminId" id="AdminId" value="<?php $AdminId?>">





								<div class="profile-img-wrap edit-img">





									<?php  



									 //if(($ProfileImage!='' && file_exists(base_path().'/upload/hr/'.$ProfileImage))){ ?>

										<!-- <img class="inline-block" src="<?php //echo base_url(); ?>upload/hr/<?php //echo $ProfileImage; ?>" alt="" id="blah"> -->

									<?php

									//}else{

									?>

										<img class="inline-block" src="<?php echo base_url(); ?>upload/default/avtar.jpg" alt="" id="blah1">

									<?php

									//}

									?>

										<div class="fileupload btn">

											<span class="btn-text">Upload</span>

												<input type="hidden" name="pre_profile_image" class="form-control" id="pre_profile_image">

											<input type="file" name="ProfileImage" class="upload" onchange="readURL1(this);">

										</div>

									</div>
									<center><h6>Uplopad only jpeg,jpg,png,bmp image file</h6></center>



									<div class="row"> 

										<div class="col-sm-6"> 

											<div class="form-group">

												<label>First Name</label>

												<input class="form-control" tabindex="1" type="text" name="FirstName" Placeholder="Enter your first name" minlength="2" maxlength="50" id="FirstName">

											</div>



											<div class="form-group">

												<label>Email Address</label>

												<input class="form-control" tabindex="3" type="email" name="EmailAddress" Placeholder="Enter your email address" minlength="2" maxlength="50" id="EmailAddress">

											</div>





										



											<div class="form-group">

												<label>Birth Date<span class="text-danger">*</span></label>

												<div class="cal-icon">

													<input  class="form-control datetimepicker" type="text" id="DateofBirth" name="DateofBirth"

												  readonly>

												</div>

											</div>







											<div class="form-group">

												<label>Address</label>

												<input class="form-control" tabindex="7" type="text" name="Address" Placeholder="Enter your address" minlength="5" maxlength="500" id="Address">

											</div>







											<div class="form-group">

												<label>City</label>

												<input class="form-control" tabindex="9" type="text" name="City" Placeholder="Enter your city" minlength="2" maxlength="50" id="City">

											</div>







											<div class="form-group">

												<label class="col-form-label">IsActive</label><br>

												<label class="radio-inline" tabindex="11">

													<input type="radio" name="IsActive" value="1">Active

												</label>

												<label class="radio-inline" tabindex="12">

													<input type="radio" name="IsActive"  value="0">Inactive

												</label>	

											</div>



											



										</div>



										<div class="col-sm-6">  

											<div class="form-group">

												<label>Last Name</label>

												<input class="form-control" tabindex="2" type="text" name="LastName" Placeholder="Enter your last name" minlength="2" maxlength="50" id="LastName">

											</div> 







											<div class="form-group">

												<label>Contact Number</label>

												<input class="form-control" tabindex="4" type="text" name="PhoneNumber" Placeholder="Enter your contact number" minlength="10" maxlength="10" id="PhoneNumber">

											</div>







											<div class="form-group">

												<label>Gender</label>

												<select class="form-control" id="Gender" name="Gender" tabindex="4">

													<option value="">Select gender</option>

													<option value="Male">Male</option>

													<option value="Female">Female</option>

												</select>



											</div>







											<div class="form-group">

												<label>Pincode Number</label>

												<input class="form-control" tabindex="8" type="text" name="PinCode" Placeholder="Enter your pincode number" minlength="06" maxlength="06" id="PinCode">

											</div>







											<div class="form-group">

												<label>Role</label>

												<select class="form-control" id="RoleId" name="RoleId" tabindex="4">

													<option value="">Select role</option>

													<option value="1">Super Admin</option>

													<option value="2">Admin</option>

												</select>



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



				<div class="modal custom-modal fade" id="delete_admin" role="dialog">



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



				<!-- /Delete Salary Modal -->







				



		







				



            </div>



			<!-- /Page Wrapper -->







        </div>



		<!-- /Main Wrapper -->







		<!-- Sidebar Overlay -->



		<div class="sidebar-overlay" data-reff=""></div>
		<?php $this->load->view('common/footer');?>


<script>
	$(document).ready(function() {
	 $('#example').DataTable( {
		aaSorting: [[0, 'asc']],
		searching: false,
		dom: 'Blfrtip',
		responsive: true,
	 buttons: [
	 {
		extend: 'copyHtml5',
		download: 'open',
		text:'<i class="fa fa-files-o"></i> Copy',
		exportOptions: {
		columns: [0,1,2,3,4,5]
		}
	 },
	 {
		extend: 'excelHtml5',
		text:'<i class="fa fa-file-excel-o"></i> Excel',
		exportOptions: {
		columns: [0,1,2,3,4,5]
		}
	 },
	 {
		extend: 'csvHtml5',
		download: 'open',
	    text:'<i class="fa fa-file-text-o"></i> CSV',
		exportOptions: {
		columns: [0,1,2,3,4,5]
		},
		
	 },
	 {
		extend: 'pdfHtml5',
		text:'<i class="fa fa-file-pdf-o"></i> PDF',
		title: "List of Admin",
		filename:"List_of_Admin",
		orientation: 'landscape', 
		pageSize: 'A4',		
		exportOptions: {
		columns: [0,1,2,3,4,5],
		
		},
		
	        customize : function(doc){ 
				doc.content[1].margin = [ 50, 0, 100, 0 ];
				doc.defaultStyle.fontSize = 10; //2, 3, 4,etc
	            doc.styles.tableHeader.fontSize = 12; //2, 3, 4, etc
				doc.defaultStyle.alignment = 'center';
				doc.styles.tableHeader.alignment = 'center';
				doc.content[1].table.widths = [ '5%',  '35%', '30%', '14%','14%', '14%'];
	         
	       },
	 },
	  {
		extend: 'print',
		orientation: 'landscape', 
		pageSize: 'A4',
		text:'<i class="fa fa-print"></i> Print',
		exportOptions: {
			columns: [0,1,2,3,4,5],
			 		
		},
		 
		

	 },
	 ]

 });
  var styles ={
	   "margin-bottom": '0.5em',
       float: "right"	
	 };
	  $("div#example_wrapper").find($(".dt-buttons")).css(styles);

} );

</script>


										



	


		









    </body>



</html>



	<div class="modal custom-modal fade" id="status_approve" role="dialog">

		<div class="modal-dialog modal-dialog-centered">

			<div class="modal-content">

				<div class="modal-body">

					<div class="form-header">

						<h3>Status</h3>

						<p>Are you sure, you want to <span id="statustxt"></span> selected record?</p>

					</div>

					<div class="modal-btn delete-action">

						<div class="row">

							<div class="col-6">

								<a href="javascript:void(0);" id="ok_btn" class="btn btn-primary continue-btn">Ok</a>

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



<script>

				$('#DateofBirth2').datetimepicker({

					defaultDate: new Date(),

				  	format: 'DD/MM/YYYY',

					maxDate: moment(),

					ignoreReadonly: true,

				});

				$('#DateofBirth').datetimepicker({

					 format: 'DD/MM/YYYY',

					 maxDate: moment(),

					 ignoreReadonly: true,

				}).val('#DateofBirth');



				



		

</script>







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



			$("#PinCodeadd").on("input", function(evt) {

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



			$('#add_salary').on('hidden.bs.modal', function () {

    			$(this).find('form').trigger('reset');

			});

			

					        



</script>







<script>



$(document).ready(function()



{



				$("#form_valid").validate(
				{
					rules: {
						ProfileImage: {
							//required: true,
							extension:'jpg|jpeg|bmp|png'
								},
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



						RoleId: {



							required: true,



								},



							},



						messages:{		

							
						ProfileImage: {
								required: "Please upload a file type only jpg,jpeg,png,bit",
									
									},
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



						RoleId: {



							required: "Please select type of role",



								},	



								



					}					



				});	



















					$("#form_valid2").validate(
					{
								rules: {
									ProfileImage: {
										//required: true,
										extension:'jpg|jpeg|bmp|png'
									},
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



									RoleId: {



										required: true,



											},



								},







						messages:{

							ProfileImage: {
								required: "Please upload a file type only jpg,jpeg,png,bit",
									
									},

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



								RoleId: {



									required: "Please select type of role",



										},	



							}



								



						});























		});	







</script>















<SCRIPT>



function editadmin(AdminId)

{

	Url="<?php echo base_url() ?>";

//	alert(AdminId);

	$.ajax({

         url: Url+'adminmaster/editadminmaster',

         type: 'post',

		 data:{id:AdminId},

         success:function(response){

			var response = JSON.parse(response);

          //console.log(response);

               console.log(response.AdminId);

			   console.log(response.ProfileImage);

            $('#AdminId').val(response.AdminId);

			$('#FirstName').val(response.FirstName);

			$('#LastName').val(response.LastName);

			$('#EmailAddress').val(response.EmailAddress);

			//$('#DateofBirth').val(response.DateofBirth);

			$('#DateofBirth').val( myDateFormatter(response.DateofBirth));

			$('#PhoneNumber').val(response.PhoneNumber);

			$('#Gender').val(response.Gender);

			$("option[id=Gender][value=" + response.Gender=='Male' + "]").attr('selected', 'selected');

			$("option[id=Gender][value=" + response.Gender=='Female' + "]").attr('selected', 'selected');

			$('#Address').val(response.Address);

			$('#PinCode').val(response.PinCode);

			$('#City').val(response.City);

			$('#RoleId').val(response.RoleId);

			$("option[id=RoleId][value=" + response.RoleId==1 + "]").attr('selected', 'selected');

			$("option[id=RoleId][value=" + response.RoleId==2 + "]").attr('selected', 'selected');

			$("input[name=IsActive][value=" + response.IsActive + "]").attr('checked', 'checked');



			if(response.ProfileImage!=''){

				$('#blah1').attr('src', Url+'upload/admin/'+response.ProfileImage);

				$('#pre_profile_image').val(response.ProfileImage);

			   }else if(response.ProfileImage == ''){

				 $('#blah1').attr('src', Url+'upload/default/avtar.jpg');

			   }



         }



      });	



}





function myDateFormatter (dobdate) 

			{

			var d = new Date(dobdate);

			var day = d.getDate();

			var month = d.getMonth() + 1;

			var year = d.getFullYear();

			if (day < 10) {

				day = "0" + day;

			}

			if (month < 10) {

				month = "0" + month;

			}

			var date = day + "/" + month + "/" + year;

			return date;

			}; 





function deletedata(AdminId){  



    $('#delete_admin').modal('show')

        $('#yes_btn').click(function(){     

                url="<?php echo base_url();?>"

                $.ajax({

                url: url+'/Adminmaster/deleteadmin/',

                type: "post",

                data: {AdminId:AdminId} ,

                success: function (response) {             

               // document.location.href = url+'adminmaster/adminlist/';          

            },



            })



        });



};





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

function readURL1(input) {

            if (input.files && input.files[0]) {

                var reader = new FileReader();

                reader.onload = function (e) {

                    $('#blah1').css('display', 'block');

                    $('#blah1').attr('src', e.target.result);

                };

             reader.readAsDataURL(input.files[0]);

            }

        }

function statusdata(id,status){  

  

    $('#status_approve').modal('show');



    if(status=="0"){

    	 $('#statustxt').text('Active');

    	}else{

    		 $('#statustxt').text("Inactive");

    	}

   

        $('#ok_btn').click(function(){



                url="<?php echo base_url();?>"

                $.ajax({

                url: url+"/adminmaster/statusdata/",

                type: "post",

                data: {id:id,status:status} ,

                success: function (response) { 



                //console.log(response);           

                document.location.href = url+'adminmaster/adminlist';                  



            },

            error: function(jqXHR, textStatus, errorThrown) {

                 console.log(textStatus, errorThrown);

            }

            })

           



        });

    

   



}





</script>