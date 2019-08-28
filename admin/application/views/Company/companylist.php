﻿<?php 
	 $this->load->view('common/header.php');
	 $this->load->view('common/sidebar.php');
?>
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
				<!-- Page Content -->
                <div class="content container-fluid">
				
					<!-- Page Title -->
					<div class="row">
						<div class="col">
							<h4 class="page-title">Company</h4>
						</div>
						<div class="col-12 text-right m-b-30">
							<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_client"><i class="fa fa-plus"></i> Add Company</a>
							
						</div>
					</div>
					<!-- /Page Title -->
					
					<!-- Search Filter -->
					<div class="row filter-row">
						<div class="col-sm-6 col-md-3">  
							<div class="form-group form-focus">
								<input type="text" class="form-control floating">
								<label class="focus-label">Client ID</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">  
							<div class="form-group form-focus">
								<input type="text" class="form-control floating">
								<label class="focus-label">Client Name</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-3"> 
							<div class="form-group form-focus select-focus">
								<select class="select floating"> 
									<option>Select Company</option>
									<option>Global Technologies</option>
									<option>Delta Infotech</option>
								</select>
								<label class="focus-label">Company</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">  
							<a href="#" class="btn btn-success btn-block"> Search </a>  
						</div>     
                    </div>
					<!-- Search Filter -->
					
					<div class="row staff-grid-row">
						<div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
							<div class="profile-widget">
								<div class="profile-img">
									<a href="client-profile.php" class="avatar"><img alt="" src="<?php echo base_url(); ?>default/img/profiles/avatar-19.jpg"></a>
								</div>
								<div class="dropdown profile-action">
									<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                </div>
								</div>
								<h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="client-profile.php">Global Technologies</a></h4>
								<h5 class="user-name m-t-10 mb-0 text-ellipsis"><a href="client-profile.php">Barry Cuda</a></h5>
								<div class="small text-muted">CEO</div>
								<a href="#" class="btn btn-white btn-sm m-t-10">Message</a>
								<a href="<?php echo base_url();?>Client/clientprofile" class="btn btn-white btn-sm m-t-10">View Profile</a>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
							<div class="profile-widget">
								<div class="profile-img">
									<a href="client-profile.php" class="avatar"><img alt="" src="<?php echo base_url(); ?>default/img/profiles/avatar-29.jpg"></a>
								</div>
								<div class="dropdown profile-action">
									<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                </div>
								</div>
								<h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="client-profile.php">Delta Infotech</a></h4>
								<h5 class="user-name m-t-10 mb-0 text-ellipsis"><a href="client-profile.php">Tressa Wexler</a></h5>
								<div class="small text-muted">Manager</div>
								<a href="#" class="btn btn-white btn-sm m-t-10">Message</a>
								<a href="client-profile.php" class="btn btn-white btn-sm m-t-10">View Profile</a>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
							<div class="profile-widget">
								<div class="profile-img">
									<a href="client-profile.php" class="avatar"><img src="assets\img\profiles\avatar-07.jpg" alt=""></a>
								</div>
								<div class="dropdown profile-action">
									<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                </div>
								</div>
								<h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="client-profile.php">Cream Inc</a></h4>
								<h5 class="user-name m-t-10 mb-0 text-ellipsis"><a href="client-profile.php">Ruby Bartlett</a></h5>
								<div class="small text-muted">CEO</div>
								<a href="#" class="btn btn-white btn-sm m-t-10">Message</a>
								<a href="client-profile.php" class="btn btn-white btn-sm m-t-10">View Profile</a>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
							<div class="profile-widget">
								<div class="profile-img">
									<a href="client-profile.php" class="avatar"><img src="assets\img\profiles\avatar-06.jpg" alt=""></a>
								</div>
								<div class="dropdown profile-action">
									<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                </div>
								</div>
								<h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="client-profile.php">Wellware Company</a></h4>
								<h5 class="user-name m-t-10 mb-0 text-ellipsis"><a href="client-profile.php">Misty Tison</a></h5>
								<div class="small text-muted">CEO</div>
								<a href="#" class="btn btn-white btn-sm m-t-10">Message</a>
								<a href="client-profile.php" class="btn btn-white btn-sm m-t-10">View Profile</a>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
							<div class="profile-widget">
								<div class="profile-img">
									<a href="client-profile.php" class="avatar"><img alt="" src="assets\img\profiles\avatar-14.jpg"></a>
								</div>
								<div class="dropdown profile-action">
									<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                </div>
								</div>
								<h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="client-profile.php">Mustang Technologies</a></h4>
								<h5 class="user-name m-t-10 mb-0 text-ellipsis"><a href="client-profile.php">Daniel Deacon</a></h5>
								<div class="small text-muted">CEO</div>
								<a href="#" class="btn btn-white btn-sm m-t-10">Message</a>
								<a href="client-profile.php" class="btn btn-white btn-sm m-t-10">View Profile</a>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
							<div class="profile-widget">
								<div class="profile-img">
									<a href="client-profile.php" class="avatar"><img alt="" src="assets\img\profiles\avatar-18.jpg"></a>
								</div>
								<div class="dropdown profile-action">
									<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                </div>
								</div>
								<h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="client-profile.php">International Software Inc</a></h4>
								<h5 class="user-name m-t-10 mb-0 text-ellipsis"><a href="client-profile.php">Walter Weaver</a></h5>
								<div class="small text-muted">CEO</div>
								<a href="#" class="btn btn-white btn-sm m-t-10">Message</a>
								<a href="client-profile.php" class="btn btn-white btn-sm m-t-10">View Profile</a>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
							<div class="profile-widget">
								<div class="profile-img">
									<a href="client-profile.php" class="avatar"><img alt="" src="assets\img\profiles\avatar-28.jpg"></a>
								</div>
								<div class="dropdown profile-action">
									<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                </div>
								</div>
								<h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="client-profile.php">Mercury Software Inc</a></h4>
								<h5 class="user-name m-t-10 mb-0 text-ellipsis"><a href="client-profile.php">Amanda Warren</a></h5>
								<div class="small text-muted">CEO</div>
								<a href="#" class="btn btn-white btn-sm m-t-10">Message</a>
								<a href="client-profile.php" class="btn btn-white btn-sm m-t-10">View Profile</a>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
							<div class="profile-widget">
								<div class="profile-img">
									<a href="client-profile.php" class="avatar"><img alt="" src="assets\img\profiles\avatar-13.jpg"></a>
								</div>
								<div class="dropdown profile-action">
									<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                </div>
								</div>
								<h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="client-profile.php">Carlson Tech</a></h4>
								<h5 class="user-name m-t-10 mb-0 text-ellipsis"><a href="client-profile.php">Betty Carlson</a></h5>
								<div class="small text-muted">CEO</div>
								<a href="#" class="btn btn-white btn-sm m-t-10">Message</a>
								<a href="client-profile.php" class="btn btn-white btn-sm m-t-10">View Profile</a>
							</div>
						</div>
					</div>
                </div>
				<!-- /Page Content -->
			
				<!-- Add Client Modal -->
				<div id="add_client" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add Company</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form method="post" id="form_valid">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Company Name <span class="text-danger">*</span></label>
												<input class="form-control" type="text" name="CompanyName" placeholder="Enter company name">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Email Address</label><span class="text-danger">*</span></label>
												<input class="form-control" type="text" name="ComEmailAddress" placeholder="Enter email address">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Contact Number <span class="text-danger">*</span></label>
												<input class="form-control" type="text" name="ComContactNumber" id="ComContactNumber" placeholder="Enter email address">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">GST Number <span class="text-danger">*</span></label>
												<input class="form-control floating" type="text" name="GstNumber" id="GstNumber" placeholder="Enter gst number">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Password</label><span class="text-danger">*</span></label>
												<input class="form-control" type="password" name="Password" placeholder="Enter password">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Confirm Password</label><span class="text-danger">*</span></label>
												<input class="form-control" type="password" name="Confirm_Password" placeholder="Enter confirm new password">
											</div>
										</div>
										<div class="col-md-12">  
											<div class="form-group">
												<label>Company Address <span class="text-danger">*</span></label>
												<textarea class="form-control" rows="4" name="CompanyAddress"></textarea>
											</div>
										</div>
										<!-- <div class="col-md-6">  
											<div class="form-group">
												<label class="col-form-label">Client ID <span class="text-danger">*</span></label>
												<input class="form-control floating" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Phone </label>
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Company Name</label>
												<input class="form-control" type="text">
											</div>
										</div> -->
									</div>
									<div class="table-responsive m-t-15">
										<table class="table table-striped custom-table">
											<thead>
												<tr>
													<th>Module Permission</th>
													<th class="text-center">Read</th>
													<th class="text-center">Write</th>
													<th class="text-center">Create</th>
													<th class="text-center">Delete</th>
													<th class="text-center">Import</th>
													<th class="text-center">Export</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Projects</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
												</tr>
												<tr>
													<td>Tasks</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
												</tr>
												<tr>
													<td>Chat</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
												</tr>
												<tr>
													<td>Estimates</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
												</tr>
												<tr>
													<td>Invoices</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
												</tr>
												<tr>
													<td>Timing Sheets</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Add Client Modal -->
				
				<!-- Edit Client Modal -->
				<div id="edit_client" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Edit Client</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">First Name <span class="text-danger">*</span></label>
												<input class="form-control" value="Barry" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Last Name</label>
												<input class="form-control" value="Cuda" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Username <span class="text-danger">*</span></label>
												<input class="form-control" value="barrycuda" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Email <span class="text-danger">*</span></label>
												<input class="form-control floating" value="barrycuda@example.com" type="email">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Password</label>
												<input class="form-control" value="barrycuda" type="password">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Confirm Password</label>
												<input class="form-control" value="barrycuda" type="password">
											</div>
										</div>
										<div class="col-md-6">  
											<div class="form-group">
												<label class="col-form-label">Client ID <span class="text-danger">*</span></label>
												<input class="form-control floating" value="CLT-0001" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Phone </label>
												<input class="form-control" value="9876543210" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Company Name</label>
												<input class="form-control" type="text" value="Global Technologies">
											</div>
										</div>
									</div>
									<div class="table-responsive m-t-15">
										<table class="table table-striped custom-table">
											<thead>
												<tr>
													<th>Module Permission</th>
													<th class="text-center">Read</th>
													<th class="text-center">Write</th>
													<th class="text-center">Create</th>
													<th class="text-center">Delete</th>
													<th class="text-center">Import</th>
													<th class="text-center">Export</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Projects</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
												</tr>
												<tr>
													<td>Tasks</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
												</tr>
												<tr>
													<td>Chat</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
												</tr>
												<tr>
													<td>Estimates</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
												</tr>
												<tr>
													<td>Invoices</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
												</tr>
												<tr>
													<td>Timing Sheets</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
													<td class="text-center">
														<input checked="" type="checkbox">
													</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Save</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Edit Client Modal -->
				
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
											<a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
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
		
    </body>
</html>

<script>
			$('#profile_info').on('hidden.bs.modal', function () {
				$(this).find('form').trigger('reset');
			})

			$("#PhoneNumber").on("input", function(evt) {
			var self = $(this);
			self.val(self.val().replace(/[^\d].+/, ""));
			if ((evt.which < 48 || evt.which > 57)) 
			{
				evt.preventDefault();
			}
			});
			$("#GstNumber").on("input", function(evt) {
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

						CompanyName: {
							required: true,
								},
						ComEmailAddress: {
							required: true,
								},	
						ComContactNumber: {
							required: true,
								},	
						GstNumber: {
							required: true,	
								},
						// 'CompanyAddress': {
						// 	required: true,
						// 		},						
					},

				messages:{

					    CompanyName: {
							required: "Please enter a company name",
								pattern : "Enter only characters and numbers and \"space , \" -",
								minlength: "Please enter at least 2 and maximum 50 letters!",
								},
						ComEmailAddress: {
							required: "Please enter your last name",
								},
						ComContactNumber: {
							required: "Please enter your company contact",
								},
						GstNumber: {
							required: "Please enter your company gst gender",
								},
						// 'CompanyAddress': {
						// 	required: "Please enter your company address",
						// 	minlength: "Please enter at least 5 and maximum 500 letters!",
						// 		},	
					
			}
				
		});
});					        
</script>
