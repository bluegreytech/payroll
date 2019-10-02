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

											<option value="companyname">Company Name</option>

											<option value="FullName">Hr Name</option>

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
								<a href="<?php echo base_url()?>Hr" class="btn btn-info"><i class="fa fa-refresh"></i></a> 
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

											<th>In Company</th>
                                            <th>Status</th>
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
													<a href="<?php echo base_url();?>Hr/profile/<?php echo $hr->hr_id;?>" title="show hr profile" class="avatar"><img src="<?php echo base_url();?>upload/hr/<?php echo $hr->ProfileImage;?>" ></a>
													<a href="<?php echo base_url();?>Hr/profile/<?php echo $hr->hr_id;?>" title="show hr profile"><?php echo $hr->FullName;?> 
												<?php
												}
												else
												{
													?>
												<a href="<?php echo base_url();?>Hr/profile/<?php echo $hr->hr_id;?>" title="show hr profile" class="avatar"><img src="<?php echo base_url();?>upload/default/avtar.jpg"></a>
												<a href="<?php echo base_url();?>Hr/profile/<?php echo $hr->hr_id;?>" title="show hr profile"><?php echo $hr->FullName;?> 
													<?php
												}
												?>
												</h2>
											</td>
											<td><?php echo $hr->EmailAddress ;?></td>

											<td><?php echo $hr->Contact ;?></td>

											<td><?php echo $hr->companyname ;?></td>

							                <td>
							<div class="action-label">
							<a class="btn btn-white btn-sm btn-rounded" href="javascript:void(0);"  onclick="statusdata('<?php echo $hr->hr_id; ?>','<?php echo $hr->IsActive ;?>')">
								<i class="fa fa-dot-circle-o <?php if($hr->IsActive=='Active'){echo "text-success";}else{ echo "text-danger";}?>"></i><?php echo $hr->IsActive ;?>
							</a>
						</div>
							</td>

											<?php
											if($this->session->userdata('RoleId')==1 || $this->session->userdata('RoleId')==2){
											?>
											<td class="text-center">
														<a  onClick="edithrs(<?php echo $hr->hr_id;?>)" data-toggle="modal" data-target="#edit_salary" role="button">
														<i class="fa fa-pencil m-r-5"></i></a>
														<a  onclick="deletedata(<?php echo $hr->hr_id; ?>)"  data-toggle="modal" data-target="#delete_admin"><i class="fa fa-trash-o m-r-5"></i> </a>
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

								<h5 class="modal-title">Add Hr</h5>

								<button type="button" class="close" data-dismiss="modal" aria-label="Close">

									<span aria-hidden="true">&times;</span>

								</button>

							</div>

							<div class="modal-body">
								<form method="post" enctype="multipart/form-data" action="<?php echo base_url();?>Hr/addhr" id="form_valid">
										<div class="profile-img-wrap edit-img">
											<img class="inline-block" src="<?php echo base_url(); ?>upload/default/avtar.jpg" alt="" id="blah">
											<div class="fileupload btn">
												<span class="btn-text">Upload</span>
												<input  type="file" name="ProfileImage" class="upload" onchange="readURL(this);">
											</div>
										</div>

										<div class="row"> 
										<div class="col-sm-6">
											<div class="form-group">

												<label>Full Name</label>	

												<input class="form-control" tabindex="1" type="text" name="FullName" Placeholder="Enter your full name" minlength="2" maxlength="50">

											</div>

											<div class="form-group">

												<label>Contact Number</label>

												<input class="form-control" tabindex="3" type="text" name="Contact" Placeholder="Enter your contact number" minlength="10" maxlength="10" id="PhoneNumbers">

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

													<label>Company</label>

													<select class="form-control" name="companyid" tabindex="8"> 

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

										<div class="col-sm-6">  

											<div class="form-group">

												<label>Email Address</label>

												<input class="form-control" tabindex="2" type="text" name="EmailAddress" Placeholder="Enter your email address" minlength="2" maxlength="50">

											</div>

											

											<div class="form-group">

												<label>Gender</label>

												<select class="form-control" name="Gender" tabindex="4">

													<option value="">Select gender</option>

													<option value="Male">Male</option>

													<option value="Female">Female</option>

												</select>

											</div>

											<div class="form-group">

												<label>Pin-Code</label>

												<input class="form-control" tabindex="6" type="text" name="PinCode" id="PinCodes" Placeholder="Enter your pin-code"  minlength="6" maxlength="6">

											</div>



											<div class="form-group">

												<label>City</label>

												<input class="form-control" tabindex="8" type="text" name="City" Placeholder="Enter your city" minlength="2" maxlength="50">

											</div>



											<div class="form-group">

														<label class="col-form-label">Isactive</label><br>

														<label class="radio-inline" tabindex="10">

															<input type="radio" name="IsActive" checked  value="Active">Active

														</label>

														<label class="radio-inline" tabindex="11">

															<input type="radio" name="IsActive" value="Inactive">Inactive

														</label>

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
								<form method="post" id="form_valid2" action="<?php echo base_url();?>Hr/addhr" enctype="multipart/form-data">
								<input type="hidden" class="form-control" name="hr_id" id="hr_id">


								<div class="profile-img-wrap edit-img">
									<?php  

									 //if(($ProfileImage!='' && file_exists(base_path().'/upload/hr/'.$ProfileImage))){ ?>
										<!-- <img class="inline-block" src="<?php //echo base_url(); ?>upload/hr/<?php //echo $ProfileImage; ?>" alt="" id="blah"> -->
									<?php
									//}else{
									?>
										<img class="inline-block" src="<?php echo base_url(); ?>upload/default/avtar.jpg" alt="" id="blah">
									<?php
									//}
									?>
										<div class="fileupload btn">
											<span class="btn-text">Upload</span>
												<input type="hidden" name="pre_profile_image" class="form-control" id="pre_profile_image">
											<input type="file" name="ProfileImage" class="upload" onchange="readURL(this);">
										</div>
									</div>

									<div class="row"> 

										<div class="col-sm-6"> 

											<div class="form-group">

												<label>Full Name</label>										

												<input class="form-control" type="text" name="FullName" Placeholder="Enter your full name" minlength="1" maxlength="50" id="FullName" tabindex="1">

											</div>

											<div class="form-group">

												<label>Contact Number</label>

												<input class="form-control" type="text" name="Contact" tabindex="3" Placeholder="Enter your contact number" minlength="10" maxlength="10" id="PhoneNumber">

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

												<input class="form-control" type="text" name="Address" tabindex="7" Placeholder="Enter your address" minlength="5" maxlength="500" id="Address">

											</div>

											<div class="form-group">

													<label>Company</label>

													<select class="form-control" id="companyid" name="companyid" tabindex="9"> 

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

										<div class="col-sm-6">  

										<div class="form-group">

												<label>Email Address</label>

												<input class="form-control" type="text" name="EmailAddress" Placeholder="Enter your email address" minlength="2" maxlength="50" id="EmailAddress" tabindex="2">

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

												<input class="form-control" type="text" name="PinCode" tabindex="6" Placeholder="Enter your pincode number" minlength="06" maxlength="06" id="PinCode">

											</div>



											



											<div class="form-group">

												<label>City</label>

												<input class="form-control" type="text" name="City" Placeholder="Enter your city" minlength="2" maxlength="50" id="City" tabindex="8">

											</div>

									

											<div class="form-group">

												<label class="col-form-label">IsActive</label><br>

												<label class="radio-inline" tabindex="10">

													<input type="radio" name="IsActive"  value="Active">Active

												</label>

												<label class="radio-inline" tabindex="11">

													<input type="radio" name="IsActive"  value="Inactive">Inactive

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

				<div class="modal custom-modal fade" id="delete_admin" role="dialog">

					<div class="modal-dialog modal-dialog-centered">

						<div class="modal-content">

							<div class="modal-body">

								<div class="form-header">

									<h3>Delete Hr</h3>

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

<script type="text/javascript">

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

$(document).ready(function()

{

	

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



						FullName: {

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

						Contact: {

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



						FullName: {

							required: "Please enter a your full name",

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

						Contact: {

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



function edithrs(hr_id)

{

	Url="<?php echo base_url() ?>";

	//alert(hr_id);

	$.ajax({

         url: Url+'hr/edithr',

         type: 'post',

		 data:{hr_id:hr_id},

         success:function(response){

			var response = JSON.parse(response);
                console.log(response.hr_id);
				console.log(response.ProfileImage);
			$('#hr_id').val(response.hr_id);
			$('#companyid').val(response.companyid);
			$('#FullName').val(response.FullName);
			$('#EmailAddress').val(response.EmailAddress);
			//$('#DateofBirth').val(response.DateofBirth);
			$('#DateofBirth').val( myDateFormatter(response.DateofBirth));
			$('#PhoneNumber').val(response.PhoneNumber);
			$('#PhoneNumber').val(response.Contact);
			$('#Gender').val(response.Gender);
			$("option[id=Gender][value=" + response.Gender=='Male' + "]").attr('selected', 'selected');
			$("option[id=Gender][value=" + response.Gender=='Female' + "]").attr('selected', 'selected');
			$('#Address').val(response.Address);
			$('#PinCode').val(response.PinCode);
			$('#City').val(response.City);
			$("input[name=IsActive][value=" + response.IsActive + "]").attr('checked', 'checked');
			$('#companyname').val(response.companyname);
			$("option[id=companyid][value=" + response.companyid=='#companyid' + "]").attr('selected', 'selected');
			if(response.ProfileImage!=''){
				$('#blah').attr('src', url+'upload/hr/'+response.ProfileImage);
			   }else{
				 $('#blah').attr('src', url+'upload/default/avtar.jpg');
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



function deletedata(hr_id){  

    $('#delete_admin').modal('show')

        $('#yes_btn').click(function(){

           

                Url="<?php echo base_url();?>"

                $.ajax({

                url: Url+'/Hr/deletehr/',

                type: "post",

                data: {hr_id:hr_id} ,

                success: function (response) {             

               // document.location.href = url+'adminmaster/adminlist/';          

            },

            })

        });

}

function statusdata(id,status){  
  
    $('#status_approve').modal('show');

    if(status=="Inactive"){
    	 $('#statustxt').text('Active');
    	}else{
    		 $('#statustxt').text("Inactive");
    	}
   
        $('#ok_btn').click(function(){
           
                url="<?php echo base_url();?>"
                $.ajax({
                url: url+"/hr/statusdata/",
                type: "post",
                data: {id:id,status:status} ,
                success: function (response) {  
                //console.log(response);           
                document.location.href = url+'hr';                  

            },
            error: function(jqXHR, textStatus, errorThrown) {
                 console.log(textStatus, errorThrown);
            }
            })
           

        });
    
   

}

</script>