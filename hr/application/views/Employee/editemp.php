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
			<form method="post" enctype="multipart/form-data" action="<?php echo base_url();?>employee/edit_emp/<?php echo $emp_id; ?>" id="frm_emp">
					<input  type="hidden" id="emp_id" class="form-control" value="<?php echo $emp_id;?>"name="emp_id">
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
											<div class="text"><input class="form-control" id="PhoneNumber" type="text" value="<?php echo $phone; ?>" disabled="" name="PhoneNumber"></div>
										</li>
										<li>
											<div class="title">Email:</div>
											<div class="text"><input class="form-control" id="EmailAddress" type="text" value="<?php echo $email; ?>" disabled="" name="EmailAddress"></div>
										</li>
										<li>
											<div class="title">Birthday:</div>
											<div class="text"><input class="form-control" id="dob" type="text" value="<?php //echo date('jS F',strtotime($Dateofbirth)); ?>" disabled="" name="dob"></div>
										</li>
										<li>
											<div class="title">Address:</div>
											<div class="text"><textarea name="Address" class="form-control" id="address" disabled=""><?php echo $Address; ?></textarea></div>
										</li>
										<li>
											<div class="title">Gender:</div>
											<div class="text"><input class="form-control" id="Gender" type="text" value="<?php echo ucfirst($gender); ?>" disabled="" name="Gender"></div>
										</li>
										<li>
											<div class="title">
												<input class="btn btn-primary submit-btn" id="basicbtn" type="submit" name="submit" value="Submit" style="display: none;" /> 
											</div>
											<div class="text">
												<input class="btn btn-primary submit-btn" id="basicbtn1" type="reset" name="btn" value="Cancel" style="display: none;" onclick="resetform()" /> 
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
					<li class="nav-item"><a href="#emp_projects" data-toggle="tab" class="nav-link">Leave</a></li>
					<li class="nav-item"><a href="#bank_statutory" data-toggle="tab" class="nav-link ">Bank & Statutory <small class="text-danger">(Admin Only)</small></a></li>
				

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
											<form method="post" enctype="multipart/form-data" action="<?php echo base_url();?>employee/persionalinfo_empedit" id="frm_emppersonalinfo" class="personal-data">
									               	<input type="hidden" name="empid" value="<?php echo $emp_id;?>" id='empid'>
											<li>
												<div class="title">First name</div>
												<div class="text"><input class="form-control" id ="input" type="text" name="first_name" value="<?php echo $first_name;?>" disabled required="" />  </div>
											</li>
											<li>
												<div class="title">Last name</div>
												<div class="text"><input class="form-control" id= "input" type="text" name="last_name" value="<?php echo $last_name;?>" disabled required="" /> </div>
											</li>
											<li>
												<div class="title">Desgination</div>
												<div class="text"><input class="form-control" id="input" type="text" name="desgination" value="<?php echo $desgination;?>" disabled required="" /></div>
											</li>
											<li>
												<div class="title">Department</div>
												<div class="text"><input class="form-control" id="input" type="text" name="department" value="<?php echo $department; ?>" disabled required="" /></div>
											</li>
											<li>
												<div class="title">Religion</div>
												<div class="text"><input class="form-control" id ="" type="text" name="religion" value="<?php echo $religion; ?>" disabled required="" /></div>
											</li>
											<li>
												<div class="title">Marital status</div>
												<div class="text"><?php //echo $marital_status; ?><select class="form-control" name="marital_status"  id="maritalstatus" disabled="">
												<option disabled="" selected="">Please Select</option>
												<option value="single" <?php if($marital_status=='single'){ echo "selected";} ?>>Single</option>
												<option value="married" <?php if($marital_status=='married'){ echo "selected"; }?>>Married</option>
												</select></div>
											</li>											
											<li>
												<div class="title">
													<input class="btn btn-primary submit-btn" id="btn" type="submit" name="btn" value="Submit" style="display: none;" /> 
												</div>
												<div class="text">
													<input class="btn btn-primary submit-btn" id="btn1" type="reset" name="btn" value="Cancel" style="display: none;" onclick="resetform()" /> 
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
				<div class="col-md-12">
					<div class="card-box project-box">
						<div class="dropdown profile-action">
							<a aria-expanded="false" data-toggle="dropdown" class="action-icon dropdown-toggle" href="#"><i class="material-icons">more_vert</i></a>
							<div class="dropdown-menu dropdown-menu-right">
								<a data-target="#edit_project" data-toggle="modal" href="#" class="dropdown-item"><i class="fa fa-pencil m-r-5"></i> Edit</a>
								<a data-target="#delete_project" data-toggle="modal" href="#" class="dropdown-item"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
							</div>
						</div>
						<h4 class="project-title"><a href="project-view.html">Leave Management</a></h4>
						<hr>
						<form method="post" enctype="multipart/form-data" action="<?php echo base_url();?>employee/addempleave" id="frm_emp">
							<div class="row">
								<?php
								if(!empty($leavelist)){
								foreach($leavelist as $leaverow){
								$empassgindata=getempassginleave($emp_id,$leaverow->leave_id);
								?>
								<div class="col-md-3">
									<div class="form-group">
										<label><?php echo $leaverow->leave_name; ?></label>
										<input type="hidden" name="leavename[]" id="" class="form-control" value="<?php echo $leaverow->leave_id;?>">
										<input type="hidden" name="emp_id" id="emp_id" class="form-control" value="<?php echo $emp_id; ?>">
		                               <?php if(!empty($empassgindata)){
										   if($leaverow->leave_id==$empassgindata['leave_id']){
										?>	
										<input type="hidden" name="empassignleave_id[]" class="form-control" value="<?php echo $empassgindata['empassignleave_id']?>">
										<?php if($leaverow->leave_id=='4'){ ?>	

											<input type="text" name="leaveno[]" class="form-control" value="N/A" readonly="">
										<?php } else{ ?> 
											<input type="text" name="leaveno[]" class="form-control" value="<?php  echo $empassgindata['no_leave'];?>">
										<?php } ?>
										<?php } }else{ if($leaverow->leave_id=='4'){ ?>
											<input type="text" name="leaveno[]" class="form-control" value="N/A" readonly=""> 
										<?php }else{ ?>
											<input type="text" name="leaveno[]" class="form-control" id="leaveno" data-id="<?php echo $leaverow->leavedays;?>">			
										<?php } } ?>
									</div>
								</div>
								<?php } } ?>
							</div>							
							<hr>
							<div class="form-group">
								<input type="submit" value="Add" class="btn btn-primary" >
							</div>
							</form>
						
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
							    <div class="form-group" id='pancardno' style="display:none;">
							   	<label class="col-form-label">Pancard no.<span class="text-danger">*</span></label>
							   	<input type="text" name="pancard_no" id="pancard_no" class="form-control" value="<?php echo $pancard; ?>">
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
                        <h3 class="card-title">Eraning Compliance Information</h3>                       
						<div class="row">
							<?php 
						 	$earningallow_id=explode(',', $earningallowid);
							foreach($earninglist as $row){ 
								//echo "<pre>";print_r($row);
								if($row->compliancetypeid=='2'){
									//echo "<pre>";print_r($row);

							?>
							<div class="col-sm-4">
								<div class="form-group">
									<label><input type="checkbox" name="earningcheck[]" class="	" value="<?php echo $row->complianceid; ?>"  <?php echo in_array($row->complianceid, $earningallow_id)?'checked="checked"':'' ?>> <?php echo $row->compliancename; ?></label>
							   </div>							  
							</div>
						<?php } }  ?>
						</div>
						<?php 
						 $complianceallow_id=explode(',', $complianceallowid);
							foreach($compliancelist as $row){ 
							//	echo "<pre>";print_r($row);
								if($row->compliancename=="PF"){

							?>
						<hr>
						<h3 class="card-title">PF Information <input type="checkbox" name="compliancecheck[]" class='checkbtn' value="<?php echo $row->complianceid; ?>" <?php echo in_array($row->complianceid, $complianceallow_id)?'checked="checked"':'' ?>></h3>
						<div class="row">
							<div class="col-sm-4">
								<div class="form-group" id="showpfsection">
									<label class="col-form-label">Employee PF applicable / Not applicable </label>								
									<select class="select" id='uanstatus' name="uanstatus">
										<option>Select PF contribution</option>
										<option value="applicable" <?php if($uanstatus=='applicable'){ echo "selected"; } ?>> Yes</option>
										<option value="not_appicable" <?php if($uanstatus=='not_appicable'){ echo "selected"; } ?>>No</option>
									</select>
								</div>
							</div>
							
							<div class="col-sm-4">
								<div class="form-group"  id="uannumber">
									<label class="col-form-label">UAN Number<span class="text-danger">*</span></label>
									<input type="text" class="form-control" name="uan_number" value="<?php echo $uannumber; ?>">
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group"  id="pfcelingprice">
									<label class="col-form-label">PF ceiling price<span class="text-danger">*</span></label>
									<input type="text" class="form-control" name="pfcelingprice" value="<?php echo $pfcelingprice; ?>">
								</div>
							</div>
						</div>						
						<div class="row">							
							<div class="col-sm-12">
								<!-- <div class="form-group">
									<label class="col-form-label">PF contribution</label>
									<div class="radio">
									<input type="radio" name="optradio" checked>Employee & Employer contribution - 12% with in wage ceiling (Max Rs.1800)
									</div>
									<div class="radio">
									<input type="radio" name="optradio" checked>Employee contribution - 12% over and above wage ceiling (In excess to Rs.1800)
									</div>
									
								</div> -->
							</div>
						</div>	
						<?php } }  ?>
						<?php 
							$complianceallow_id=explode(',', $complianceallowid);
							foreach($compliancelist as $row){ 								
							?>
							<?php if($row->compliancename=="ESIC"){ ?>
							<hr>
							<h3 class="card-title"> ESI Information <input type="checkbox" name="compliancecheck[]" class='checkbtn1' value="<?php echo $row->complianceid; ?>" <?php echo in_array($row->complianceid, $complianceallow_id)?'checked="checked"':'' ?>></h3>
							<div class="row">
							<div class="col-sm-4">
								<div class="form-group" id='showesicsection'>
									<label class="col-form-label">ESI Contribution</label>
									<select class="select" id='esicstatus' name="esicstatus">
										<option>Select ESI contribution</option>
										<option value="applicable" <?php if($esicstatus=='applicable'){ echo "selected"; } ?>>Yes</option>
										<option value="not_appicable" <?php if($esicstatus=='not_appicable'){ echo "selected"; } ?>>No</option>
									</select>
								</div>								
							</div>
							<div class="col-sm-4">
								<div class="form-group" id="esicnumber">
									<label class="col-form-label">ESI No. <span class="text-danger">*</span></label>
									<input type="text"name="esic_no" class="form-control" value="<?php echo $esicnumber; ?>">
								</div>
				   			 </div>
				   			 <div class="col-sm-4">
								<div class="form-group" id="esicceling_price">
									<label class="col-form-label">ESIC Celing Price <span class="text-danger">*</span></label>
									<input type="text" name="esiccelingprice" class="form-control" value="<?php echo $esiccelingprice;?> " id="esiccelingprice">
								</div>
				   			 </div>													
						<?php } } ?>
						</div>
						<hr>
                        <h3 class="card-title">Other deduction Information </h3>
						<?php
						 $complianceallow_id=explode(',', $complianceallowid); 
							foreach($compliancelist as $row){ 
							 if ($row->compliancename=="LWF") {
						?>
						<hr>
						<div class="row">							
							<div class="col-sm-4">
								<input type="hidden" name="lwfcomplianceallowid" id="lwfcomplianceallowid" value="<?php echo $row->complianceid; ?>" <?php echo in_array($row->complianceid, $complianceallow_id)?'checked="checked"':'' ?>>
								<div class="form-group">
									<label class="col-form-label">LWF</label>
									<select class="select" name='lwfstatus'>
										<option>Select LWF contribution</option>
										<option value="applicable">Yes</option>
										<option value="not_applicable">No</option>
									</select>
								</div>
							</div>								
							<?php }elseif($row->compliancename=="PT"){ ?>							
							<div class="col-sm-4">	
								<div class="form-group">								
									<div class="checkbox" style="margin:10px;">
									<label><input type="checkbox" name="compliancecheck[]" class='	' value="<?php echo $row->complianceid;  ?>" <?php echo in_array($row->complianceid, $complianceallow_id)?'checked="checked"':'' ?> > Professional Tax </label>
									</div>
								</div>
							</div>
					  
							<?php } } ?>
					    </div>
                       <hr>
                        
					<div class="form-group">
						<div class="submit-section">
							<button class="btn btn-primary submit-btn" type="submit">Save</button>
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Bank Statutory Tab -->
		
	</div>
</div>
<!-- /Page Content -->


</div>
<!-- /Page Wrapper -->

</div>
<!-- /Main Wrapper -->

<!-- Sidebar Overlay -->
<div class="sidebar-overlay" data-reff=""></div>

<!-- jQuery -->
       
<?php  $this->load->view('common/footer'); ?>

<script type="text/javascript">
	$('#dob').datetimepicker({
	  	format: 'DD-MM-YYYY',
		maxDate: new Date(),
		ignoreReadonly: true,
		icons: {
		    time:'fa fa-clock-o',
		    date:'fa fa-calendar',
		    up:'fa fa-chevron-up',
		    down:'fa fa-chevron-down',
		    previous:'fa fa-chevron-left',
		    next:'fa fa-chevron-right',
		    today:'fa fa-calendar-check-o',
		    clear:'fa fa-delete',
		    close:'fa fa-times'
			},									
	}).val('<?php echo ($Dateofbirth!='0000-00-00')&&($Dateofbirth!='')  ? date('d-m-Y', strtotime($Dateofbirth)) : ''; ?>');
$(document).ready(function()
{
   
    uanstatus='<?php echo $uanstatus; ?>';
	if(uanstatus=='applicable'){
		$("#uannumber").show();
		$("#pfcelingprice").show();
		$('#showpfsection').show();
	} 
	esicstatus='<?php echo $esicstatus; ?>';
	if(esicstatus=='applicable'){
		$("#esicnumber").show();
		$("#esicceling_price").show();
		$('#showesicsection').show();
		
	} 

	paymenttype="<?php echo $paymenttype ?>";	
	if(paymenttype=='bank_transfer'){	  	
		$("#bankname").show();
		$("#bankbranch").show();
		$("#accountno").show();
	    $("#dd_payable").hide();
	    $("#pancardno").show();

	    
	}else if(paymenttype=='demand_draff'){	
		$("#bankbranch").hide();
		$("#accountno").hide(); 
		$("#bankname").show();
		$("#dd_payable").show();
		$("#pancardno").hide();
	}else if(paymenttype=='cash'){	
		$("#bankbranch").hide();
		$("#accountno").hide(); 
		$("#bankname").hide();
		$("#dd_payable").hide();
		$("#pancardno").hide();
	}else if(paymenttype=='cheque'){		
		$("#bankbranch").hide();
		$("#accountno").hide(); 
		$("#bankname").hide();
		$("#dd_payable").hide();
		$("#pancardno").hide();
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
    $("#pancardno").show();
  }else if(value=='demand_draff'){	
  	$("#bankbranch").hide();
	$("#accountno").hide(); 
  	$("#bankname").show();
  	$("#dd_payable").show();
  	$("#pancardno").hide();
 }else if(value=='cash'){	
 	$("#bankbranch").hide();
	$("#accountno").hide(); 
  	$("#bankname").hide();
  	$("#dd_payable").hide();
  	$("#pancardno").hide();
 }else if(value=='cheque'){	
 	$("#bankbranch").hide();
	$("#accountno").hide(); 
  	$("#bankname").hide();
  	$("#dd_payable").hide();
  	$("#pancardno").hide();
}
});

 //$('#maritalstatus').hide();
function enable_disable() { 
    $(".personal-data input").prop('disabled', false); 
    $(".personal-data select").prop('disabled', false); 
  //  $('#maritalstatus').show();
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
$("#uannumber").hide();
$("#pfcelingprice").hide();
$("#esicceling_price").hide();
 
$("#uanstatus").change(function () {	
	var value = $('#uanstatus').val();	  
	if(value=='applicable'){	  	
		$("#uannumber").show();
		$("#pfcelingprice").show();
		pf=$("#pfcomplianceallowid").val();	
		$("input[name='complianceallowid[]']").val(pf);
		console.log($("input[name='complianceallowid[]']").val());
	}else{
	  	 $("#uannumber").hide();
	  	 $("#pfcelingprice").hide();

	}
	 
	 // $("#otherqulification").hide();
});

$("#esicnumber").hide();
$("#esicstatus").change(function () {	
	var value = $('#esicstatus').val();	
	if(value=='applicable'){
		$("#esicnumber").show();
		$("#esicceling_price").show();
		esic=$("#esiccomplianceallowid").val();
		$("input[name='complianceallowid[]']").val(esic);
		//console.log($("input[name='complianceallowid[]']").val());
	
	}else{
	  	$("#esicnumber").hide();
	  	$("#esicceling_price").hide();
	}	
});

$("#ptstatus").change(function(){	
	var value = $('#ptstatus').val();	
	if(value=='applicable'){
		pt=$("#ptcomplianceallowid").val();		
		$("input[name='complianceallowid[]']").val(pt);
		//console.log($("input[name='complianceallowid[]']").val());
	} 
	
});

 $('#showpfsection').hide();
 $(document).on("click", ".checkbtn", function(){	   		
	  if($(this).is(":checked")){
	  	$('#showpfsection').show();
	  }else{
	  	$('#showpfsection').hide();
	  	
	  }	   
});

 $('#showesicsection').hide();
$(document).on("click", ".checkbtn1", function(){	   		
	if($(this).is(":checked")){
		$('#showesicsection').show();
	}else{
		$('#showesicsection').hide();
		
	}

	   
});

</script>