<?php 

	 $this->load->view('common/header.php');

	 $this->load->view('common/sidebar.php');

?>

			<!-- Page Wrapper -->

            <div class="page-wrapper">

			

				<!-- Page Content -->

                <div class="content container-fluid">

				<?php if(($this->session->flashdata('success'))){ ?>

                     <div class="alert alert-success" id="successMessage">

                     <strong> <?php echo $this->session->flashdata('success'); ?></strong> 

                     </div>

               <?php } ?>

					<!-- Page Title -->

					<div class="row">

						<div class="col-sm-12">

							<h4 class="page-title">My Profile</h4>	

						</div>

					</div>

					<!-- /Page Title -->

					<?php 

					$AdminId=$this->session->userdata('AdminId');

					?>

					<input type="hidden" name="AdminId" value="<?php echo $AdminId ?>">

					<div class="card-box mb-0">

						<div class="row">

							<div class="col-md-12">

								<div class="profile-view">

									<div class="profile-img-wrap">

										<div class="profile-img">

											<a href="#">

											<?php  

											 if(($ProfileImage!='' && file_exists(base_path().'/upload/admin/'.$ProfileImage))){ ?>

												<img  src="<?php echo base_url(); ?>upload/admin/<?php echo $ProfileImage; ?>" alt="">

												

											<?php

											}

											else

											{

											?>

												<img src="<?php echo base_url(); ?>uploads/default/avtar.jpg" alt="">

											<?php

											}

											?>

											</a>

										</div>

									</div>

									<div class="profile-basic">

										<div class="row">

										

											<div class="col-md-5">

												<div class="profile-info-left">

													<h3 class="user-name m-t-0 mb-0"><?php echo $FirstName.' '.$LastName;?></h3>

													<!-- <h6 class="text-muted">UI/UX Design Team</h6> -->

													<!-- <small class="text-muted">Web Designer</small> -->

													<div class="staff-id">Employee ID : FT-0001</div>

													<div class="small doj text-muted">Date of Join : <?php echo date('d M Y',strtotime($CreatedOn))?></div>

													<div class="staff-msg"><a class="btn btn-custom" href="#">Send Message</a></div>

												</div>

											</div>

											<div class="col-md-7">

												<ul class="personal-info">

													<li>

														<div class="title">Phone:</div>

														<div class="text"><a href=""><?php echo $PhoneNumber;?></a></div>

													</li>

													<li>

														<div class="title">Email:</div>

														<div class="text"><a href=""><?php echo $EmailAddress;?></a></div>

													</li>

													<li>

														<div class="title">Birthday:</div>

														<div class="text"><?php   if($DateofBirth!='0000-00-00'){ echo date('d/m/Y', strtotime($DateofBirth));}else{echo "N/A";  } // echo  $endDate = ; ?></div>

													</li>

													<li>

														<div class="title">Address:</div>

														<div class="text"><?php echo $Address;?></div>

													</li>

													<li>

														<div class="title">Gender:</div>

														<div class="text"><?php echo $Gender;?></div>

													</li>

													

												</ul>

											</div>

										</div>

									</div>

									<div class="pro-edit"><a data-target="#profile_info" data-toggle="modal" class="edit-icon" href="#"><i class="fa fa-pencil"></i></a></div>

								</div>

							</div>

						</div>

					</div>

					

					

						<!-- /Bank Statutory Tab -->

						

					</div>

                </div>

				<!-- /Page Content -->

				

				<!-- Profile Modal -->

				<div id="profile_info" class="modal custom-modal fade" role="dialog">

					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">

						<div class="modal-content">

							<div class="modal-header">

								<h5 class="modal-title">Profile Information</h5>

								<button type="button" class="close" data-dismiss="modal" aria-label="Close">

									<span aria-hidden="true">&times;</span>

								</button>

							</div>

							<div class="modal-body">

								<form method="post" enctype="multipart/form-data" action="<?php echo base_url();?>Adminmaster/admin_master_profile_update" id="form_valid">

									<div class="row">

										<div class="col-md-12">

										<input type="hidden" name="AdminId" value="<?php echo $AdminId ?>">



											<div class="profile-img-wrap edit-img">

												<?php  

												if(($ProfileImage!='' && file_exists(base_path().'/upload/admin/'.$ProfileImage))){ ?>

													<img class="inline-block" src="<?php echo base_url(); ?>upload/admin/<?php echo $ProfileImage; ?>" alt="">

												<?php

												}

												else

												{

												?>

													<img class="inline-block" src="<?php echo base_url(); ?>upload/default/avtar.jpg" alt="">

												<?php

												}

												?>

												<div class="fileupload btn">

													<span class="btn-text">edit</span>

													<input class="upload" type="file" name="ProfileImage">

													<input  type="hidden" name="pre_profile_image" value="<?php echo $ProfileImage; ?>">

												</div>

											</div>



											<div class="row">

												<div class="col-md-6">

													<div class="form-group">

													<label>First Name</label>

													<input type="text" class="form-control" name="FirstName" value="<?php echo $FirstName;?>" minlength="2" maxlength="50" Placeholder="Enter your first name">

													</div>

												</div>

												<div class="col-md-6">

													<div class="form-group">

														<label>Last Name</label>

														<input type="text" class="form-control" name="LastName" value="<?php echo $LastName;?>" minlength="2" maxlength="50" Placeholder="Enter your last name">

													</div>

												</div>

												<div class="col-md-6">

													<div class="form-group">

													<label>Email Address</label>

													<input type="text" class="form-control" disabled value="<?php echo $EmailAddress;?>" minlength="2" maxlength="50" Placeholder="Enter your email address">

													</div>

												</div>

												<div class="col-md-6">

													<div class="form-group">

														<label>Contact Number</label>

														<input type="text" class="form-control" name="PhoneNumber" id="PhoneNumber" value="<?php echo $PhoneNumber;?>" minlength="10" maxlength="10" Placeholder="Enter your contact number">

													</div>

												</div>





												<div class="col-md-6">

													<div class="form-group">

														<label>Birth Date</label>

														<div class="cal-icon">

															<input class="form-control datetimepicker" type="text" name="DateofBirth" id="DateofBirth" value="<?php  if($DateofBirth!='0000-00-00'){ echo date('d/m/Y', strtotime($DateofBirth));} ?>" readonly>

														</div>

													</div>

												</div>



												<div class="col-md-6">

													<div class="form-group">

														<label>Gender</label>

														<select class="select form-control" name="Gender">

														

														<!-- <option value="Female" selected>Female</option>

																<option value="Male">Male</option> -->

															<?php			

																if($Gender=='Male')

															{

																?>

																<option value="Male" selected>Male</option>

																<option value="Female">Female</option>

																<?php

															}

															else if($Gender=='Female')

															{

																?>

																<option value="Female" selected>Female</option>

																<option value="Male">Male</option>

																<?php

															}

															?>

														

														</select>

													</div>

												</div>

												<div class="col-md-6">

													<div class="form-group">

														<label>Address</label>

														<input type="text" class="form-control" Placeholder="Enter your address" name="Address" value="<?php echo $Address;?>" minlength="5" maxlength="500">

													</div>

												</div>

												

												<div class="col-md-6">

													<div class="form-group">

														<label>Pin Code</label>

														<input type="text" class="form-control" id="PinCode" Placeholder="Enter your pin-code" name="PinCode" value="<?php echo $PinCode;?>" minlength="6" maxlength="6">

													</div>

												</div>

											</div>

										</div>

									</div>

									<div class="row">

										

										

										

										

										<!-- <div class="col-md-6">

											<div class="form-group">

												<label>City</label>

												<input type="tel" class="form-control" name="City" value="<?php //echo $City;?>" minlength="2" maxlength="50">

											</div>

										</div> -->

										

										

										

									</div>

									<div class="submit-section">

										<input type="submit" value="Submit" class="btn btn-primary submit-btn">

									</div>

								</form>

							</div>

						</div>

					</div>

				</div>

				<!-- /Profile Modal -->

				

			

				

				

				

				

            </div>

			<!-- /Page Wrapper -->



        </div>

		<!-- /Main Wrapper -->



		<!-- Sidebar Overlay -->

		<div class="sidebar-overlay" data-reff=""></div>


<?php $this->load->view('common/footer');?>



<script type="text/javascript">

				$('#DateofBirth').datetimepicker({
				  	 format: 'DD/MM/YYYY',
					 maxDate: moment(),
					 ignoreReadonly: true,
				}).val('<?php echo  ($DateofBirth!='0000-00-00')  ? date('d/m/Y', strtotime($DateofBirth)) : ''; ?>');



</script>



<script>

$('#profile_info').on('hidden.bs.modal', function () {

    $(this).find('form').trigger('reset');

});



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

			

$(document).ready(function()

{

		$("#form_valid").validate(

		{

					rules: {



						FirstName: {

							required: true,

								},

						LastName: {

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

							//pattern: /^[0-9]+$/,

								},

						PhoneNumber: {

							required: true,

								},

					},



				messages:{



						FirstName: {

							required: "Please enter your first name",

								pattern : "Enter only characters and numbers and \"space , \" -",

								minlength: "Please enter at least 2 and maximum 50 letters!",

								},

						LastName: {

							required: "Please enter your last name",

								pattern : "Enter only characters and numbers and \"space , \" -",

								minlength: "Please enter at least 2 and maximum 50 letters!",

								},

						DateofBirth: {

							required: "Please enter your date of birt",

								},

						Gender: {

							required: "Please enter your gender",

								},

						Address: {

							required: "Please enter your address",

							minlength: "Please enter at least 5 and maximum 500 letters!",

								},	

						PinCode: {

							required: "Please enter your area pincode number",

							pattern : "Enter only numbers",

							minlength: "Please enter at least 6 and maximum 6 numbers!",

								},

						PhoneNumber: {

							required: "Please enter your contact number",

							minlength: "Please enter at least 10 and maximum 13 numbers!",

								},	

			}

				

		});

});					        

</script>

    </body>

</html>