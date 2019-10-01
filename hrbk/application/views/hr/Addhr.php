

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
