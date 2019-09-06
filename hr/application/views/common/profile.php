<?php 
	 $this->load->view('common/header');
	 $this->load->view('common/sidebar');
?>
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
				<!-- Page Content -->
                <div class="content container-fluid">
				<?php if(($this->session->flashdata('successmsg'))){ ?>
                     <div class="alert alert-success" id="successMessage">
                     <strong> <?php echo $this->session->flashdata('successmsg'); ?></strong> 
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
					$hr_id=$this->session->userdata('hr_id');
					?>
					<input type="hidden" name="hr_id" value="<?php echo $hr_id ?>">
					<div class="card-box mb-0">
						<div class="row">
							<div class="col-md-12">
								<div class="profile-view">
									<div class="profile-img-wrap">
										<div class="profile-img">
											<a href="#">
											<?php  
											 if(($ProfileImage!='' && file_exists(base_path().'/upload/hr/'.$ProfileImage))){ ?>
												<img  src="<?php echo base_url(); ?>upload/hr/<?php echo $ProfileImage; ?>" alt="">
												
											<?php
											}
											else
											{
											?>
												<img src="<?php echo base_url(); ?>upload/no_image/user_no_image.png" alt="">
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
													<h3 class="user-name m-t-0 mb-0"><?php echo $full_name;?></h3>
													<!-- <h6 class="text-muted">UI/UX Design Team</h6> -->
													<!-- <small class="text-muted">Web Designer</small> -->
													<div class="staff-id">Company:  <?php //echo $companyname;?></div>
													<div class="small doj text-muted">Date of Join : <?php echo date('d M Y',strtotime($CreatedOn))?></div>
													<div class="staff-msg"><a class="btn btn-custom" href="#">Send Message</a></div>
												</div>
											</div>
											<div class="col-md-7">
												<ul class="personal-info">
													<li>
														<div class="title">Phone:</div>
														<div class="text"><a href=""><?php echo $contact;?></a></div>
													</li>
													<li>
														<div class="title">Email:</div>
														<div class="text"><a href=""><?php echo $EmailAddress;?></a></div>
													</li>
													<li>
														<div class="title">Birthday:</div>
														<div class="text"><?php if($DateofBirth!='0000-00-00'){ echo date('d/m/Y', strtotime($DateofBirth));}else{echo "N/A";  } // echo  $endDate = ; ?></div>
													</li>
													<li>
														<div class="title">Address:</div>
														<div class="text"><?php if($Address){  echo $Address;}else{ echo "N/A";}?></div>
													</li>
													<li>
														<div class="title">Gender:</div>
														<div class="text"><?php if($Gender){echo $Gender;}else{ echo "N/A"; }?></div>
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
								<form method="post" enctype="multipart/form-data" action="<?php echo base_url();?>home/profile" id="frm_profile">
									<div class="row">
										<div class="col-md-12">
										<input type="hidden" name="UserId" value="<?php //echo $UserId ?>">
											<div class="profile-img-wrap edit-img">
											<?php  
											 if(($ProfileImage!='' && file_exists(base_path().'/upload/hr/'.$ProfileImage))){ ?>
												<img class="inline-block" src="<?php echo base_url(); ?>upload/hr/<?php echo $ProfileImage; ?>" alt="" id="blah">
											<?php
											}
											else
											{
											?>
												<img class="inline-block" src="<?php echo base_url(); ?>upload/no_image/user_no_image.png" alt="" id="blah">
											<?php
											}
											?>
												<div class="fileupload btn">
													<span class="btn-text">Upload</span>
														<input type="hidden" name="pre_profile_image" class="form-control" value="<?php echo $ProfileImage; ?>">
													<input  type="file" name="ProfileImage" class="upload" onchange="readURL(this);">
													
												</div>
											</div>
											
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
													
													<label>Full Name</label>
													<input type="text" class="form-control" name="FullName" value="<?php echo $full_name;?>" minlength="2" maxlength="50" Placeholder="Enter your full name">
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
														<input type="text" class="form-control" name="PhoneNumber" id="PhoneNumber" value="<?php echo $contact;?>"  Placeholder="Enter your contact number">
													</div>
												</div>

												<div class="col-md-6">
													<div class="form-group">
													<?php// echo $endDate = date('d/m/Y', strtotime($DateofBirth))?>
														<label>Date of Birth</label>
														<div class="cal-icon">
															<input class="form-control datetimepicker" type="text" name="DateofBirth" id="DateofBirth" value="<?php  if($DateofBirth!='0000-00-00'){ echo date('d/m/Y', strtotime($DateofBirth));} ?>">
														</div>
														
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label>Gender</label>
														<select class="select form-control" name="Gender">
															<option disabled="" selected="">Please Select</option>
														 <option value="Male"<?php if($Gender=='Male'){ echo "selected";} ?>>Male</option>
														  <option value="Female"<?php if($Gender=='Female'){ echo "selected";}?>>Female</option>
														
														</select>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
													<label>Pin Code</label>
													<input type="text" class="form-control" id="PinCode" Placeholder="Enter your pincode" name="PinCode" value="<?php echo $PinCode;?>">
													</div>
												</div>

											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label>Address</label>
												<textarea  class="form-control" Placeholder="Enter your address" name="Address" value=""><?php echo $Address;?></textarea>
											</div>
										</div>
										
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
				
				<!-- Personal Info Modal -->
				<div id="personal_info_modal" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Personal Information</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Passport No</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Passport Expiry Date</label>
												<div class="cal-icon">
													<input class="form-control datetimepicker" type="text">
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Tel</label>
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Nationality <span class="text-danger">*</span></label>
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Religion</label>
												<div class="cal-icon">
													<input class="form-control" type="text">
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Marital status <span class="text-danger">*</span></label>
												<select class="select form-control">
													<option>-</option>
													<option>Single</option>
													<option>Married</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Employment of spouse</label>
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>No. of children </label>
												<input class="form-control" type="text">
											</div>
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
			
				
            </div>
			<!-- /Page Wrapper -->

        </div>
		<!-- /Main Wrapper -->

		<!-- Sidebar Overlay -->
		<div class="sidebar-overlay" data-reff=""></div>
<?php  $this->load->view('common/footer');?>
		<!--   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
		
		<script type="text/javascript">
				$('#DateofBirth').datetimepicker({
				  	 format: 'DD/MM/YYYY',
					 maxDate: moment(),
					 ignoreReadonly: true,
					// setDate: new Date("<?php //echo  ($DateofBirth!='0000-00-00')  ? date('d/m/Y', strtotime($DateofBirth)) : ''; ?>"),
				}).val('<?php echo  ($DateofBirth!='0000-00-00')  ? date('d/m/Y', strtotime($DateofBirth)) : ''; ?>');

		</script>

<script>
$('#profile_info').on('hidden.bs.modal', function () {
    $(this).find('form').trigger('reset');
})

// $("#PhoneNumber").on("input", function(evt) {
// 			var self = $(this);
// 			self.val(self.val().replace(/[^\d].+/, ""));
// 			if ((evt.which < 48 || evt.which > 57)) 
// 			{
// 				evt.preventDefault();
// 			}
// 			});
// 			$("#PinCode").on("input", function(evt) {
// 			var self = $(this);
// 			self.val(self.val().replace(/[^\d].+/, ""));
// 			if ((evt.which < 48 || evt.which > 57)) 
// 			{
// 				evt.preventDefault();
// 			}
// 			});
			
$(document).ready(function()
{
		$("#frm_profile").validate(
		{
					rules: {

						FullName: {
							required: true,
							maxlength:30
								},								
						DateofBirth: {
							required: true,
								},
						Gender: {
							required: true,
								},
						Address: {
							required: true,
							maxlength:100
								},
						PinCode: {
							required: true,
							minlength:6,
							maxlength:6
							//pattern: /^[0-9]+$/,
								},
						PhoneNumber: {
							required: true,
							digits:true,
							minlength:10,
							maxlength:12
								},
					},
		});
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
</script>
