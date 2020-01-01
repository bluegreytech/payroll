<?php 
	 $this->load->view('common/header');
	 $this->load->view('common/sidebar');
?>
<style type="text/css">
input:disabled{
	border:none;
	background-color: transparent!important;
	cursor: default!important;
}
textarea:disabled{

	border:none;
	background-color: transparent!important;
	cursor: default!important;
}
select:disabled{
	border:none;
	background-color: transparent!important;
	cursor: default!important;
}
#salary_amount{
	height: 44px !important;
}
.form-control{
   height: 36px!important;
}
.title .btn,.text .btn{
	min-width: auto;
	width: 100%;
}
.personal-info li .title{
	width: 50%!important;
	padding: 6px 0;
}
</style>
<!-- Page Wrapper -->
<div class="page-wrapper">
<!-- Page Content -->
<div class="content container-fluid">
	<!-- Page Title -->
	<div class="row">
		<div class="col-sm-12">
			<h4 class="page-title">My Profile</h4>
		</div>
	</div>
	<!-- /Page Title -->
	
	<div class="card-box mb-0">
		<div class="row">
			<div class="col-md-12">
				<form action="#" method="post">
				<div class="profile-view">
					<div class="profile-img-wrap editimg">
									<?php 
									if(($ProfileImage!='' && file_exists(base_path().'/upload/emp/'.$ProfileImage))){ ?>
										<img class="inline-block" src="<?php echo base_url(); ?>upload/emp/<?php echo $ProfileImage; ?>" alt="" id="blah">
									<?php
									}else{ ?>
										<img class="inline-block" src="<?php echo base_url(); ?>upload/no_image/user_no_image.png" alt="" id="blah">
									<?php
									}
									?>
									<div class="fileupload btn">
											<span class="btn-text">Upload</span>
												<input type="hidden" name="pre_profile_image" class="form-control" value="<?php echo $ProfileImage;?>" id="pre_profile_image">
											<input type="file" name="ProfileImage" class="upload" onchange="readURL(this);">
												<span id="imgerror"></span>
									</div>
					</div>
					<div class="profile-basic">
						<div class="row">
							<div class="col-md-5 profile-info-left">
								<!-- <div class="profile-info-left"> -->
									<h3 class="user-name m-t-0 mb-0"><?php echo ucfirst($first_name).' '.$last_name; ?></h3>
									<h6 class="text-muted"><?php echo $department ? $department :'';?></h6>
									<small class="text-muted"><?php echo $desgination; ?></small>
									<div class="staff-id">Employee ID :<?php echo $employee_code;?></div>
									<div class="small doj text-muted">Date of Join : <?php echo date('jS M Y',strtotime($joiningdate)); ?></div>
									<!-- <div class="staff-msg"></div> -->
								<!-- </div> -->
							</div>
							<div class="col-md-7">
								
								<ul class="personal-info basic-info">
										<li>
											<div class="title">Phone:</div>
											<div class="text"><input class="form-control" id="input" type="text" value="<?php echo $phone; ?>" disabled=""></div>
										</li>
										<li>
											<div class="title">Email:</div>
											<div class="text"><input class="form-control" id="input" type="text" value="<?php echo $email; ?>" disabled=""></div>
										</li>
										<li>
											<div class="title">Birthday:</div>
											<div class="text"><input class="form-control" id="input" type="text" value="<?php echo date('jS F',strtotime($Dateofbirth)); ?>" disabled=""></div>
										</li>
										<li>
											<div class="title">Address:</div>
											<div class="text"><textarea name="address" class="form-control" id="input" disabled=""><?php echo $Address; ?></textarea></div>
										</li>
										<li>
											<div class="title">Gender:</div>
											<div class="text"><input class="form-control" id="input" type="text" value="<?php echo ucfirst($gender); ?>" disabled=""></div>
										</li>
										<li>
											<div class="title">
												<input class="btn btn-primary submit-btn" id="basicbtn" type="submit" name="btn" value="Submit" style="display: none;" /> 
											</div>
											<div class="text">
												<input class="btn btn-primary submit-btn" id="basicbtn1" type="reset" name="btn" value="Reset" style="display: none;" onclick="resetform()" /> 
											</div>
										</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="pro-edit"><a onclick="basicinfo()" class="edit-icon"><i class="fa fa-pencil"></i></a></div>
				</div>
				</form>
			</div>
		</div>
	</div>
	
	<div class="card-box tab-box">
		<div class="row user-tabs">
			<div class="col-lg-12 col-md-12 col-sm-12 line-tabs">
				<ul class="nav nav-tabs nav-tabs-bottom">
					<li class="nav-item"><a href="#emp_profile" data-toggle="tab" class="nav-link active">Profile</a></li>
					<li class="nav-item"><a href="#emp_projects" data-toggle="tab" class="nav-link">Projects</a></li>
					<li class="nav-item"><a href="#bank_statutory" data-toggle="tab" class="nav-link">Bank & Statutory <small class="text-danger">(Admin Only)</small></a></li>
				</ul>
			</div>
		</div>
	</div>
	
	<div class="tab-content">
	
		<!-- Profile Info Tab -->
		<div id="emp_profile" class="pro-overview tab-pane fade show active">
							<div class="row">
								<div class="col-md-6">
									<div class="card-box profile-box ">
										<h3 class="card-title">Personal Informations <a class="edit-icon"  onclick="enable_disable()"><i class="fa fa-pencil"></i></a></h3>
										<ul class="personal-info">
										<form action="#" method="post" class="personal-data">
											<li>
												<div class="title">First name</div>
												<div class="text"><input class="form-control" id ="input" type="text" name="input" value="<?php echo $first_name;?>" disabled required="" />  </div>
											</li>
											<li>
												<div class="title">Last name</div>
												<div class="text"><input class="form-control" id= "input" type="text" name="input" value="<?php echo $last_name;?>" disabled required="" /> </div>
											</li>
											<li>
												<div class="title">Desgination</div>
												<div class="text"><input class="form-control" id="input" type="text" name="input" value="<?php echo $desgination;?>" disabled required="" /></div>
											</li>
											<li>
												<div class="title">Department</div>
												<div class="text"><input class="form-control" id="input" type="text" name="input" value="<?php echo $department; ?>" disabled required="" /></div>
											</li>
											<li>
												<div class="title">Religion</div>
												<div class="text"><input class="form-control" id ="input" type="text" name="input" value="<?php echo $religion; ?>" disabled required="" /></div>
											</li>
											<li>
												<div class="title">Marital status</div>
												<div class="text"><select class="form-control" name="marital_status"  id="maritalstatus" disabled="">
												<option disabled="" selected="">Please Select</option>
												<option value="single" <?php if($marital_status=='single'){ echo "selected";} ?>>Single</option>
												<option value="married" <?php if($marital_status=='married'){ echo "selected"; }?>>Married</option>
												</select></div>
											</li>
											<!-- <li>
												<div class="title">Employment of spouse</div>
												<div class="text"><input class="form-control" id="input" type="text" name="input" value="No" disabled required="" /></div>
											</li>
											<li>
												<div class="title">No. of children</div>
												<div class="text"><input class="form-control" id="input" type="text" name="input" value="2" disabled required="" /></div>
											</li> -->
											<li>
												<div class="title">
													<input class="btn btn-primary submit-btn" id="btn" type="submit" name="btn" value="Submit" style="display: none;" /> 
												</div>
												<div class="text">
													<input class="btn btn-primary submit-btn" id="btn1" type="reset" name="btn" value="Reset" style="display: none;" onclick="resetform()" /> 
												</div>
											</li>
										</form>
										</ul>
									</div>
								</div>
								<div class="col-md-6">
									<div class="card-box profile-box">
										<h3 class="card-title">Emergency Contact <a href="#" class="edit-icon" data-toggle="modal" data-target="#emergency_contact_modal"><i class="fa fa-pencil"></i></a></h3>
										<h5 class="section-title">Primary</h5>
										<ul class="personal-info">
											<li>
												<div class="title">Name</div>
												<div class="text">John Doe</div>
											</li>
											<li>
												<div class="title">Relationship</div>
												<div class="text">Father</div>
											</li>
											<li>
												<div class="title">Phone </div>
												<div class="text">9876543210, 9876543210</div>
											</li>
										</ul>
										<hr>
										<h5 class="section-title">Secondary</h5>
										<ul class="personal-info">
											<li>
												<div class="title">Name</div>
												<div class="text">Karen Wills</div>
											</li>
											<li>
												<div class="title">Relationship</div>
												<div class="text">Brother</div>
											</li>
											<li>
												<div class="title">Phone </div>
												<div class="text">9876543210, 9876543210</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="card-box profile-box">
										<h3 class="card-title">Bank information</h3>
									
										<ul class="personal-info">
											<li>
												<div class="title">Bank name</div>
												<div class="text"><?php echo $bank_name?$bank_name:'N/A'; ?></div>
											</li>
											<li>
												<div class="title">Bank account No.</div>
												<div class="text"><?php echo $account_no ? $account_no:'N/A';?></div>
											</li>
											<li>
												<div class="title">Bank Branch</div>
												<div class="text"><?php echo $bank_branch?$bank_branch:'N/A';?></div>
											</li>
											<li>
												<div class="title">PAN No</div>
												<div class="text"><?php echo $pancard?$pancard:'N/A';?></div>
											</li>
										</ul>
									</div>
								</div>
								<div class="col-md-6">
									<div class="card-box profile-box">
										<h3 class="card-title">Family Informations <a href="#" class="edit-icon" data-toggle="modal" data-target="#family_info_modal"><i class="fa fa-pencil"></i></a></h3>
										<div class="table-responsive">
											<table class="table table-nowrap">
												<thead>
													<tr>
														<th>Name</th>
														<th>Relationship</th>
														<th>Date of Birth</th>
														<th>Phone</th>
														<th></th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Leo</td>
														<td>Brother</td>
														<td>Feb 16th, 2019</td>
														<td>9876543210</td>
														<td class="text-right">
															<div class="dropdown dropdown-action">
																<a aria-expanded="false" data-toggle="dropdown" class="action-icon dropdown-toggle" href="#"><i class="material-icons">more_vert</i></a>
																<div class="dropdown-menu dropdown-menu-right">
																	<a href="#" class="dropdown-item"><i class="fa fa-pencil m-r-5"></i> Edit</a>
																	<a href="#" class="dropdown-item"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
																</div>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="card-box profile-box">
										<h3 class="card-title">Education Informations <a href="#" class="edit-icon" data-toggle="modal" data-target="#education_info"><i class="fa fa-pencil"></i></a></h3>
										<div class="experience-box">
											<ul class="experience-list">
												<li>
													<div class="experience-user">
														<div class="before-circle"></div>
													</div>
													<div class="experience-content">
														<div class="timeline-content">
															<a href="#/" class="name">International College of Arts and Science (UG)</a>
															<div>Bsc Computer Science</div>
															<span class="time">2000 - 2003</span>
														</div>
													</div>
												</li>
												<li>
													<div class="experience-user">
														<div class="before-circle"></div>
													</div>
													<div class="experience-content">
														<div class="timeline-content">
															<a href="#/" class="name">International College of Arts and Science (PG)</a>
															<div>Msc Computer Science</div>
															<span class="time">2000 - 2003</span>
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="card-box profile-box">
										<h3 class="card-title">Experience <a href="#" class="edit-icon" data-toggle="modal" data-target="#experience_info"><i class="fa fa-pencil"></i></a></h3>
										<div class="experience-box">
											<ul class="experience-list">
												<li>
													<div class="experience-user">
														<div class="before-circle"></div>
													</div>
													<div class="experience-content">
														<div class="timeline-content">
															<a href="#/" class="name">Web Designer at Zen Corporation</a>
															<span class="time">Jan 2013 - Present (5 years 2 months)</span>
														</div>
													</div>
												</li>
												<li>
													<div class="experience-user">
														<div class="before-circle"></div>
													</div>
													<div class="experience-content">
														<div class="timeline-content">
															<a href="#/" class="name">Web Designer at Ron-tech</a>
															<span class="time">Jan 2013 - Present (5 years 2 months)</span>
														</div>
													</div>
												</li>
												<li>
													<div class="experience-user">
														<div class="before-circle"></div>
													</div>
													<div class="experience-content">
														<div class="timeline-content">
															<a href="#/" class="name">Web Designer at Dalt Technology</a>
															<span class="time">Jan 2013 - Present (5 years 2 months)</span>
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
		<!-- /Profile Info Tab -->
		
		<!-- Projects Tab -->
		<div class="tab-pane fade" id="emp_projects">
			<div class="row">
				<div class="col-lg-4 col-sm-6 col-md-4 col-xl-3">
					<div class="card-box project-box">
						<div class="dropdown profile-action">
							<a aria-expanded="false" data-toggle="dropdown" class="action-icon dropdown-toggle" href="#"><i class="material-icons">more_vert</i></a>
							<div class="dropdown-menu dropdown-menu-right">
								<a data-target="#edit_project" data-toggle="modal" href="#" class="dropdown-item"><i class="fa fa-pencil m-r-5"></i> Edit</a>
								<a data-target="#delete_project" data-toggle="modal" href="#" class="dropdown-item"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
							</div>
						</div>
						<h4 class="project-title"><a href="project-view.html">Office Management</a></h4>
						<small class="block text-ellipsis m-b-15">
							<span class="text-xs">1</span> <span class="text-muted">open tasks, </span>
							<span class="text-xs">9</span> <span class="text-muted">tasks completed</span>
						</small>
						<p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
							typesetting industry. When an unknown printer took a galley of type and
							scrambled it...
						</p>
						<div class="pro-deadline m-b-15">
							<div class="sub-title">
								Deadline:
							</div>
							<div class="text-muted">
								17 Apr 2019
							</div>
						</div>
						<div class="project-members m-b-15">
							<div>Project Leader :</div>
							<ul class="team-members">
								<li>
									<a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img alt="" src="assets\img\profiles\avatar-16.jpg"></a>
								</li>
							</ul>
						</div>
						<div class="project-members m-b-15">
							<div>Team :</div>
							<ul class="team-members">
								<li>
									<a href="#" data-toggle="tooltip" title="John Doe"><img alt="" src="assets\img\profiles\avatar-02.jpg"></a>
								</li>
								<li>
									<a href="#" data-toggle="tooltip" title="Richard Miles"><img alt="" src="assets\img\profiles\avatar-09.jpg"></a>
								</li>
								<li>
									<a href="#" data-toggle="tooltip" title="John Smith"><img alt="" src="assets\img\profiles\avatar-10.jpg"></a>
								</li>
								<li>
									<a href="#" data-toggle="tooltip" title="Mike Litorus"><img alt="" src="assets\img\profiles\avatar-05.jpg"></a>
								</li>
								<li>
									<a href="#" class="all-users">+15</a>
								</li>
							</ul>
						</div>
						<p class="m-b-5">Progress <span class="text-success float-right">40%</span></p>
						<div class="progress progress-xs mb-0">
							<div style="width: 40%" title="" data-toggle="tooltip" role="progressbar" class="progress-bar bg-success" data-original-title="40%"></div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 col-md-4 col-xl-3">
					<div class="card-box project-box">
						<div class="dropdown profile-action">
							<a aria-expanded="false" data-toggle="dropdown" class="action-icon dropdown-toggle" href="#"><i class="material-icons">more_vert</i></a>
							<div class="dropdown-menu dropdown-menu-right">
								<a data-target="#edit_project" data-toggle="modal" href="#" class="dropdown-item"><i class="fa fa-pencil m-r-5"></i> Edit</a>
								<a data-target="#delete_project" data-toggle="modal" href="#" class="dropdown-item"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
							</div>
						</div>
						<h4 class="project-title"><a href="project-view.html">Project Management</a></h4>
						<small class="block text-ellipsis m-b-15">
							<span class="text-xs">2</span> <span class="text-muted">open tasks, </span>
							<span class="text-xs">5</span> <span class="text-muted">tasks completed</span>
						</small>
						<p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
							typesetting industry. When an unknown printer took a galley of type and
							scrambled it...
						</p>
						<div class="pro-deadline m-b-15">
							<div class="sub-title">
								Deadline:
							</div>
							<div class="text-muted">
								17 Apr 2019
							</div>
						</div>
						<div class="project-members m-b-15">
							<div>Project Leader :</div>
							<ul class="team-members">
								<li>
									<a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img alt="" src="assets\img\profiles\avatar-16.jpg"></a>
								</li>
							</ul>
						</div>
						<div class="project-members m-b-15">
							<div>Team :</div>
							<ul class="team-members">
								<li>
									<a href="#" data-toggle="tooltip" title="John Doe"><img alt="" src="assets\img\profiles\avatar-02.jpg"></a>
								</li>
								<li>
									<a href="#" data-toggle="tooltip" title="Richard Miles"><img alt="" src="assets\img\profiles\avatar-09.jpg"></a>
								</li>
								<li>
									<a href="#" data-toggle="tooltip" title="John Smith"><img alt="" src="assets\img\profiles\avatar-10.jpg"></a>
								</li>
								<li>
									<a href="#" data-toggle="tooltip" title="Mike Litorus"><img alt="" src="assets\img\profiles\avatar-05.jpg"></a>
								</li>
								<li>
									<a href="#" class="all-users">+15</a>
								</li>
							</ul>
						</div>
						<p class="m-b-5">Progress <span class="text-success float-right">40%</span></p>
						<div class="progress progress-xs mb-0">
							<div style="width: 40%" title="" data-toggle="tooltip" role="progressbar" class="progress-bar bg-success" data-original-title="40%"></div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 col-md-4 col-xl-3">
					<div class="card-box project-box">
						<div class="dropdown profile-action">
							<a aria-expanded="false" data-toggle="dropdown" class="action-icon dropdown-toggle" href="#"><i class="material-icons">more_vert</i></a>
							<div class="dropdown-menu dropdown-menu-right">
								<a data-target="#edit_project" data-toggle="modal" href="#" class="dropdown-item"><i class="fa fa-pencil m-r-5"></i> Edit</a>
								<a data-target="#delete_project" data-toggle="modal" href="#" class="dropdown-item"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
							</div>
						</div>
						<h4 class="project-title"><a href="project-view.html">Video Calling App</a></h4>
						<small class="block text-ellipsis m-b-15">
							<span class="text-xs">3</span> <span class="text-muted">open tasks, </span>
							<span class="text-xs">3</span> <span class="text-muted">tasks completed</span>
						</small>
						<p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
							typesetting industry. When an unknown printer took a galley of type and
							scrambled it...
						</p>
						<div class="pro-deadline m-b-15">
							<div class="sub-title">
								Deadline:
							</div>
							<div class="text-muted">
								17 Apr 2019
							</div>
						</div>
						<div class="project-members m-b-15">
							<div>Project Leader :</div>
							<ul class="team-members">
								<li>
									<a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img alt="" src="assets\img\profiles\avatar-16.jpg"></a>
								</li>
							</ul>
						</div>
						<div class="project-members m-b-15">
							<div>Team :</div>
							<ul class="team-members">
								<li>
									<a href="#" data-toggle="tooltip" title="John Doe"><img alt="" src="assets\img\profiles\avatar-02.jpg"></a>
								</li>
								<li>
									<a href="#" data-toggle="tooltip" title="Richard Miles"><img alt="" src="assets\img\profiles\avatar-09.jpg"></a>
								</li>
								<li>
									<a href="#" data-toggle="tooltip" title="John Smith"><img alt="" src="assets\img\profiles\avatar-10.jpg"></a>
								</li>
								<li>
									<a href="#" data-toggle="tooltip" title="Mike Litorus"><img alt="" src="assets\img\profiles\avatar-05.jpg"></a>
								</li>
								<li>
									<a href="#" class="all-users">+15</a>
								</li>
							</ul>
						</div>
						<p class="m-b-5">Progress <span class="text-success float-right">40%</span></p>
						<div class="progress progress-xs mb-0">
							<div style="width: 40%" title="" data-toggle="tooltip" role="progressbar" class="progress-bar bg-success" data-original-title="40%"></div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 col-md-4 col-xl-3">
					<div class="card-box project-box">
						<div class="dropdown profile-action">
							<a aria-expanded="false" data-toggle="dropdown" class="action-icon dropdown-toggle" href="#"><i class="material-icons">more_vert</i></a>
							<div class="dropdown-menu dropdown-menu-right">
								<a data-target="#edit_project" data-toggle="modal" href="#" class="dropdown-item"><i class="fa fa-pencil m-r-5"></i> Edit</a>
								<a data-target="#delete_project" data-toggle="modal" href="#" class="dropdown-item"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
							</div>
						</div>
						<h4 class="project-title"><a href="project-view.html">Hospital Administration</a></h4>
						<small class="block text-ellipsis m-b-15">
							<span class="text-xs">12</span> <span class="text-muted">open tasks, </span>
							<span class="text-xs">4</span> <span class="text-muted">tasks completed</span>
						</small>
						<p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
							typesetting industry. When an unknown printer took a galley of type and
							scrambled it...
						</p>
						<div class="pro-deadline m-b-15">
							<div class="sub-title">
								Deadline:
							</div>
							<div class="text-muted">
								17 Apr 2019
							</div>
						</div>
						<div class="project-members m-b-15">
							<div>Project Leader :</div>
							<ul class="team-members">
								<li>
									<a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img alt="" src="assets\img\profiles\avatar-16.jpg"></a>
								</li>
							</ul>
						</div>
						<div class="project-members m-b-15">
							<div>Team :</div>
							<ul class="team-members">
								<li>
									<a href="#" data-toggle="tooltip" title="John Doe"><img alt="" src="assets\img\profiles\avatar-02.jpg"></a>
								</li>
								<li>
									<a href="#" data-toggle="tooltip" title="Richard Miles"><img alt="" src="assets\img\profiles\avatar-09.jpg"></a>
								</li>
								<li>
									<a href="#" data-toggle="tooltip" title="John Smith"><img alt="" src="assets\img\profiles\avatar-10.jpg"></a>
								</li>
								<li>
									<a href="#" data-toggle="tooltip" title="Mike Litorus"><img alt="" src="assets\img\profiles\avatar-05.jpg"></a>
								</li>
								<li>
									<a href="#" class="all-users">+15</a>
								</li>
							</ul>
						</div>
						<p class="m-b-5">Progress <span class="text-success float-right">40%</span></p>
						<div class="progress progress-xs mb-0">
							<div style="width: 40%" title="" data-toggle="tooltip" role="progressbar" class="progress-bar bg-success" data-original-title="40%"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Projects Tab -->
		
		<!-- Bank Statutory Tab -->
		<div class="tab-pane fade" id="bank_statutory">
			<div class="card">
				<div class="card-body">
					<h3 class="card-title"> Basic Salary Information</h3>
					<form method="post" enctype="multipart/form-data" action="<?php echo base_url();?>employee/addempbankdetial" id="frm_empbank">
							<input class=" form-control" type="hidden" name="emp_id" id="emp_id" Placeholder="Employee Code" value="<?php echo $emp_id;?>">
						<div class="row">
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Salary basis <span class="text-danger">*</span></label>
									 <select class="form-control select" name="salary" id="salary">
											<option disabled="" selected="">Please Select</option>
											<option value="monthly" <?php if($salary=='monthly'){echo "selected";}?>>Monthly</option>
											<option value="per_day_wages" <?php if($salary=='per_day_wages'){echo "selected";}?>>Per Day Wages</option>
										</select>
							   </div>
							   <div class="form-group" id='bankname' style="display:none;">
							   	<label class="col-form-label">Bank Name <span class="text-danger">*</span></label>
							   	<input type="text" name="bank_name" id="bank_name" class="form-control" value="<?php echo $bank_name; ?>">
							   </div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Salary amount <small class="text-muted"><?php if($salary=='monthly'){echo "per month";}else { echo "per day wages";} ?> </small></label>
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class='fa fa-inr'></i></span>
										</div>
										   <input type="text" class="form-control" name="salary_amount" id="salary_amount" value="<?php echo $salaryamt;?>">
									</div>
								</div>
								<div class="form-group" id='bankbranch' style="display:none;">
							   		<label class="col-form-label">Bank Branch <span class="text-danger">*</span></label>
							  		<input type="text" name="bank_branch" id="bank_branch" class="form-control" value="<?php echo $bank_branch; ?>">
							   	</div>
							   	<div class="form-group" id='dd_payable' style="display:none;">
							   		<label class="col-form-label">DD payable at <span class="text-danger">*</span></label>
							  		<input type="text" name="ddpayable" id="ddpayable" class="form-control" value="<?php echo $dd_payable_at; ?>">
							   	</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Payment type</label>
									<select class="select" name="emppaymenttype" id='emppaymenttype'>
										<option>Select payment type</option>
										<option value="bank_transfer" <?php if($paymenttype=="bank_transfer"){ echo "selected"; } ?>>Bank Transfer</option>
										<option value="cheque" <?php if($paymenttype=="cheque"){ echo "selected"; } ?>>Cheque</option>
										<option value="cash"  <?php if($paymenttype=="cash"){ echo "selected"; } ?> >Cash</option>
										<option value="demand_draff" <?php if($paymenttype=="demand_draff"){ echo "selected"; } ?>>Demand Draff</option>
									</select>
							   </div>
							    <div class="form-group" id='accountno' style="display:none;">
							   	<label class="col-form-label">Account Number <span class="text-danger">*</span></label>
							   	<input type="text" name="account_no" id="account_no" class="form-control" value="<?php echo $account_no; ?>" >
							   </div>
							</div>
						</div>
						<hr>
						<h3 class="card-title">PF Information</h3>
						<div class="row">
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Employee PF applicable / Not applicable </label>
									<select class="select">
										<option>Select PF contribution</option>
										<option value="applicable">Yes</option>
										<option value="not_appicable">No</option>
									</select>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">UAN Number<span class="text-danger">*</span></label>
									<input type="text" class="form-control" name="uan_number">
								</div>
							</div>

						</div>
						<div class="row">
													
					   </div>
						<div class="row">
							
							<div class="col-sm-12">
								<div class="form-group">
									<label class="col-form-label">PF contribution</label>
									<div class="radio">
									<input type="radio" name="optradio" checked>Employee & Employer contribution - 12% with in wage ceiling (Max Rs.1800)
									</div>
									<div class="radio">
									<input type="radio" name="optradio" checked>Employee contribution - 12% over and above wage ceiling (In excess to Rs.1800)
									</div>
									
								</div>
							</div>
						</div>						
						<hr>
						<h3 class="card-title"> ESI Information</h3>
						<div class="row">
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">ESI Contribution</label>
									<select class="select">
										<option>Select ESI contribution</option>
										<option value="applicable">Yes</option>
										<option value="not_appicable">No</option>
									</select>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">LWF</label>
									<select class="select">
										<option>Select LWF contribution</option>
										<option value="applicable">Yes</option>
										<option value="not_applicable">No</option>
									</select>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">PT </label>
									<select class="select">
										<option>Select PT contribution</option>
										<option value="applicable">Yes</option>
										<option value="not_applicable">No</option>
									</select>
								</div>
							</div>
						
						</div>
						<div class="row">
								<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">ESI No. <span class="text-danger">*</span></label>
									<input type="text"name="esic_no" value="" class="form-control">
								</div>
							</div>
							
						
					   </div>
						<div class="submit-section">
							<button class="btn btn-primary submit-btn" type="submit">Save</button>
						</div>
					</form>
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
				<form>
					<div class="row">
						<div class="col-md-12">
							<div class="profile-img-wrap edit-img">
								<img class="inline-block" src="assets\img\profiles\avatar-02.jpg" alt="user">
								<div class="fileupload btn">
									<span class="btn-text">edit</span>
									<input class="upload" type="file">
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>First Name</label>
										<input type="text" class="form-control" value="John">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Last Name</label>
										<input type="text" class="form-control" value="Doe">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Birth Date</label>
										<div class="cal-icon">
											<input class="form-control datetimepicker" type="text" value="05/06/1985">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Gender</label>
										<select class="select form-control">
											<option value="male selected">Male</option>
											<option value="female">Female</option>
										</select>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Address</label>
								<input type="text" class="form-control" value="4487 Snowbird Lane">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>State</label>
								<input type="text" class="form-control" value="New York">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Country</label>
								<input type="text" class="form-control" value="United States">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Pin Code</label>
								<input type="text" class="form-control" value="10523">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Phone Number</label>
								<input type="text" class="form-control" value="631-889-3206">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Department <span class="text-danger">*</span></label>
								<select class="select">
									<option>Select Department</option>
									<option>Web Development</option>
									<option>IT Management</option>
									<option>Marketing</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Designation <span class="text-danger">*</span></label>
								<select class="select">
									<option>Select Designation</option>
									<option>Web Designer</option>
									<option>Web Developer</option>
									<option>Android Developer</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Reports To <span class="text-danger">*</span></label>
								<select class="select">
									<option>-</option>
									<option>Wilmer Deluna</option>
									<option>Lesley Grauer</option>
									<option>Jeffery Lalor</option>
								</select>
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
<!-- /Personal Info Modal -->

<!-- Family Info Modal -->
<div id="family_info_modal" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title"> Family Informations</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-scroll">
						<div class="card-box">
							<h3 class="card-title">Family Member <a href="javascript:void(0);" class="delete-icon"><i class="fa fa-trash-o"></i></a></h3>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Name <span class="text-danger">*</span></label>
										<input class="form-control" type="text">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Relationship <span class="text-danger">*</span></label>
										<input class="form-control" type="text">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Date of birth <span class="text-danger">*</span></label>
										<input class="form-control" type="text">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Phone <span class="text-danger">*</span></label>
										<input class="form-control" type="text">
									</div>
								</div>
							</div>
						</div>
						<div class="card-box">
							<h3 class="card-title">Education Informations <a href="javascript:void(0);" class="delete-icon"><i class="fa fa-trash-o"></i></a></h3>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Name <span class="text-danger">*</span></label>
										<input class="form-control" type="text">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Relationship <span class="text-danger">*</span></label>
										<input class="form-control" type="text">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Date of birth <span class="text-danger">*</span></label>
										<input class="form-control" type="text">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Phone <span class="text-danger">*</span></label>
										<input class="form-control" type="text">
									</div>
								</div>
							</div>
							<div class="add-more">
								<a href="javascript:void(0);"><i class="fa fa-plus-circle"></i> Add More</a>
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
<!-- /Family Info Modal -->

<!-- Emergency Contact Modal -->
<div id="emergency_contact_modal" class="modal custom-modal fade" role="dialog">
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
					<div class="card-box">
						<h3 class="card-title">Primary Contact</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Name <span class="text-danger">*</span></label>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Relationship <span class="text-danger">*</span></label>
									<input class="form-control" type="text">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Phone <span class="text-danger">*</span></label>
									<input class="form-control" type="text">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Phone 2</label>
									<input class="form-control" type="text">
								</div>
							</div>
						</div>
					</div>
					<div class="card-box">
						<h3 class="card-title">Primary Contact</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Name <span class="text-danger">*</span></label>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Relationship <span class="text-danger">*</span></label>
									<input class="form-control" type="text">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Phone <span class="text-danger">*</span></label>
									<input class="form-control" type="text">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Phone 2</label>
									<input class="form-control" type="text">
								</div>
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
<!-- /Emergency Contact Modal -->

<!-- Education Modal -->
<div id="education_info" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title"> Education Informations</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-scroll">
						<div class="card-box">
							<h3 class="card-title">Education Informations <a href="javascript:void(0);" class="delete-icon"><i class="fa fa-trash-o"></i></a></h3>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group form-focus focused">
										<input type="text" value="Oxford University" class="form-control floating">
										<label class="focus-label">Institution</label>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-focus focused">
										<input type="text" value="Computer Science" class="form-control floating">
										<label class="focus-label">Subject</label>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-focus focused">
										<div class="cal-icon">
											<input type="text" value="01/06/2002" class="form-control floating datetimepicker">
										</div>
										<label class="focus-label">Starting Date</label>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-focus focused">
										<div class="cal-icon">
											<input type="text" value="31/05/2006" class="form-control floating datetimepicker">
										</div>
										<label class="focus-label">Complete Date</label>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-focus focused">
										<input type="text" value="BE Computer Science" class="form-control floating">
										<label class="focus-label">Degree</label>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-focus focused">
										<input type="text" value="Grade A" class="form-control floating">
										<label class="focus-label">Grade</label>
									</div>
								</div>
							</div>
						</div>
						<div class="card-box">
							<h3 class="card-title">Education Informations <a href="javascript:void(0);" class="delete-icon"><i class="fa fa-trash-o"></i></a></h3>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group form-focus focused">
										<input type="text" value="Oxford University" class="form-control floating">
										<label class="focus-label">Institution</label>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-focus focused">
										<input type="text" value="Computer Science" class="form-control floating">
										<label class="focus-label">Subject</label>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-focus focused">
										<div class="cal-icon">
											<input type="text" value="01/06/2002" class="form-control floating datetimepicker">
										</div>
										<label class="focus-label">Starting Date</label>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-focus focused">
										<div class="cal-icon">
											<input type="text" value="31/05/2006" class="form-control floating datetimepicker">
										</div>
										<label class="focus-label">Complete Date</label>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-focus focused">
										<input type="text" value="BE Computer Science" class="form-control floating">
										<label class="focus-label">Degree</label>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-focus focused">
										<input type="text" value="Grade A" class="form-control floating">
										<label class="focus-label">Grade</label>
									</div>
								</div>
							</div>
							<div class="add-more">
								<a href="javascript:void(0);"><i class="fa fa-plus-circle"></i> Add More</a>
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
<!-- /Education Modal -->

<!-- Experience Modal -->
<div id="experience_info" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Experience Informations</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-scroll">
						<div class="card-box">
							<h3 class="card-title">Experience Informations <a href="javascript:void(0);" class="delete-icon"><i class="fa fa-trash-o"></i></a></h3>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group form-focus">
										<input type="text" class="form-control floating" value="Digital Devlopment Inc">
										<label class="focus-label">Company Name</label>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-focus">
										<input type="text" class="form-control floating" value="United States">
										<label class="focus-label">Location</label>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-focus">
										<input type="text" class="form-control floating" value="Web Developer">
										<label class="focus-label">Job Position</label>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-focus">
										<div class="cal-icon">
											<input type="text" class="form-control floating datetimepicker" value="01/07/2007">
										</div>
										<label class="focus-label">Period From</label>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-focus">
										<div class="cal-icon">
											<input type="text" class="form-control floating datetimepicker" value="08/06/2018">
										</div>
										<label class="focus-label">Period To</label>
									</div>
								</div>
							</div>
						</div>
						<div class="card-box">
							<h3 class="card-title">Experience Informations <a href="javascript:void(0);" class="delete-icon"><i class="fa fa-trash-o"></i></a></h3>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group form-focus">
										<input type="text" class="form-control floating" value="Digital Devlopment Inc">
										<label class="focus-label">Company Name</label>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-focus">
										<input type="text" class="form-control floating" value="United States">
										<label class="focus-label">Location</label>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-focus">
										<input type="text" class="form-control floating" value="Web Developer">
										<label class="focus-label">Job Position</label>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-focus">
										<div class="cal-icon">
											<input type="text" class="form-control floating datetimepicker" value="01/07/2007">
										</div>
										<label class="focus-label">Period From</label>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-focus">
										<div class="cal-icon">
											<input type="text" class="form-control floating datetimepicker" value="08/06/2018">
										</div>
										<label class="focus-label">Period To</label>
									</div>
								</div>
							</div>
							<div class="add-more">
								<a href="javascript:void(0);"><i class="fa fa-plus-circle"></i> Add More</a>
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
<!-- /Experience Modal -->

</div>
<!-- /Page Wrapper -->

</div>
<!-- /Main Wrapper -->

<!-- Sidebar Overlay -->
<div class="sidebar-overlay" data-reff=""></div>

<!-- jQuery -->
       
<?php  $this->load->view('common/footer'); ?>

<script type="text/javascript">
$(document).ready(function()
{
	paymenttype="<?php echo $paymenttype ?>";
	
	if(paymenttype=='bank_transfer'){	  	
		$("#bankname").show();
		$("#bankbranch").show();
		$("#accountno").show();
	    $("#dd_payable").hide();
	}else if(paymenttype=='demand_draff'){	
		$("#bankbranch").hide();
		$("#accountno").hide(); 
		$("#bankname").show();
		$("#dd_payable").show();
	}else if(paymenttype=='cash'){	
		$("#bankbranch").hide();
		$("#accountno").hide(); 
		$("#bankname").hide();
		$("#dd_payable").hide();
	}else if(paymenttype=='check'){	
		$("#bankbranch").hide();
		$("#accountno").hide(); 
		$("#bankname").hide();
		$("#dd_payable").hide();

	}

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

$("#emppaymenttype").change(function () {	
var value = $('#emppaymenttype').val();	  
if(value=='bank_transfer'){	  	
	$("#bankname").show();
	$("#bankbranch").show();
	$("#accountno").show();
    $("#dd_payable").hide();
  }else if(value=='demand_draff'){	
  	$("#bankbranch").hide();
	$("#accountno").hide(); 
  	$("#bankname").show();
  	$("#dd_payable").show();
 }else if(value=='cash'){	
 	$("#bankbranch").hide();
	$("#accountno").hide(); 
  	$("#bankname").hide();
  	$("#dd_payable").hide();
 }else if(value=='cheque'){	
 	$("#bankbranch").hide();
	$("#accountno").hide(); 
  	$("#bankname").hide();
  	$("#dd_payable").hide();
}
});


function enable_disable() { 
    $(".personal-data input").prop('disabled', false); 
    $(".personal-data select").prop('disabled', false); 
    document.getElementById("btn").style.display  = "block";
    document.getElementById("btn1").style.display  = "block";
}
function basicinfo() { 
    $(".basic-info input").prop('disabled', false); 
    $(".basic-info textarea").prop('disabled', false); 
    document.getElementById("basicbtn").style.display = "block";
    document.getElementById("basicbtn1").style.display = "block";
} 
       
function resetform(){ 
    $(".basic-info input").prop('disabled', true); 
    $(".basic-info textarea").prop('disabled', true); 
    $(".personal-data input").prop('disabled', true); 
    $(".personal-data select").prop('disabled', true); 
    document.getElementById("basicbtn").style.display  = "none";
    document.getElementById("basicbtn1").style.display  = "none";
     document.getElementById("btn").style.display  = "none";
    document.getElementById("btn1").style.display  = "none";
} 
</script>