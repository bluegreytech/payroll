<?php 

	 $this->load->view('common/header.php');

	 $this->load->view('common/sidebar.php');

?>

			<!-- Page Wrapper -->

            <div class="page-wrapper">

                <div class="content container-fluid">

					<div class="row">

						<div class="col-sm-8">

							<h4 class="page-title">Attendance</h4>

						</div>

					</div>

					

					<!-- Search Filter -->
<form method="post" action="<?php echo base_url();?>attendance/searchattendance" id="frm_search">
					<div class="row filter-row">

						<div class="col-sm-3">  

							<div class="form-group form-focus">

								<input type="text"  name="companyname" class="form-control floating" value="<?php echo $companyname;?>" >

								<label class="focus-label">Company Name</label>

							</div>

						</div>

						<div class="col-sm-3"> 

						<!-- <div class="form-group form-focus">
			<input type="text" name="attmonth" class="form-control floating" id="attmonth" value="<?php echo $attmonth;?>">
			<label class="focus-label">Select Month</label>
		</div>
 -->
						</div>

						<!--<div class="col-sm-3"> 

							<div class="form-group form-focus select-focus">

								<select class="select floating"> 

									<option>-</option>

									<option>2019</option>

									<option>2018</option>

									<option>2017</option>

									<option>2016</option>

									<option>2015</option>

								</select>

								<label class="focus-label">Select Year</label>

							</div>

						</div>-->

						<div class="col-sm-3">  

							  
<input type="submit" class="btn btn-success btn-block" name="search" id="btnsearch" value="Search"> 
						</div>     

                   
                    	<div class="col-sm-3"> 
		<a href="<?php echo base_url()?>attendance/<?php echo $redirect_page;?>" class="btn btn-info"><i class="fa fa-refresh"></i></a> 	
		</div>  
		</div> 
</form>
					<!-- /Search Filter -->

					

                    <div class="row">

                        <div class="col-lg-12">

							<div class="table-responsive">

								<table class="table table-striped custom-table table-nowrap mb-0">

									<thead>

										<tr>

											<th>Company </th>

											<th>Employee attendance</th>
										</tr>

									</thead>

									<tbody>
										<?php
                                     if(!empty($result)){
                                     	foreach($result as $row){ 
                                     ?>	
										<tr>
                                               
											<td>

												<h2 class="table-avatar">

													

													<a href=""><?php echo $row->companyname?></a>

												</h2>

											</td>
                                              <td>

												<a href="<?php echo base_url()?>attendance/attandance_list/<?php echo $row->companyid ?>" role="button">
													<i class="fa fa-eye m-r-5"></i> </a>

											</td>

										

										</tr>

								<?php }  } ?>
							

									</tbody>

								</table>

							</div>

                        </div>

                    </div>

                </div>

				<!-- /Page Content -->

				

				<!-- Attendance Modal -->

				<div class="modal custom-modal fade" id="attendance_info" role="dialog">

					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">

						<div class="modal-content">

							<div class="modal-header">

								<h5 class="modal-title">Attendance Info</h5>

								<button type="button" class="close" data-dismiss="modal" aria-label="Close">

									<span aria-hidden="true">&times;</span>

								</button>

							</div>

							<div class="modal-body">

								<div class="row">

									<div class="col-md-6">

										<div class="card punch-status">

											<div class="card-body">

												<h5 class="card-title">Timesheet <small class="text-muted">11 Mar 2019</small></h5>

												<div class="punch-det">

													<h6>Punch In at</h6>

													<p>Wed, 11th Mar 2019 10.00 AM</p>

												</div>

												<div class="punch-info">

													<div class="punch-hours">

														<span>3.45 hrs</span>

													</div>

												</div>

												<div class="punch-det">

													<h6>Punch Out at</h6>

													<p>Wed, 20th Feb 2019 9.00 PM</p>

												</div>

												<div class="statistics">

													<div class="row">

														<div class="col-md-6 col-6 text-center">

															<div class="stats-box">

																<p>Break</p>

																<h6>1.21 hrs</h6>

															</div>

														</div>

														<div class="col-md-6 col-6 text-center">

															<div class="stats-box">

																<p>Overtime</p>

																<h6>3 hrs</h6>

															</div>

														</div>

													</div>

												</div>

											</div>

										</div>

									</div>

									<div class="col-md-6">

										<div class="card recent-activity">

											<div class="card-body">

												<h5 class="card-title">Activity</h5>

												<ul class="res-activity-list">

													<li>

														<p class="mb-0">Punch In at</p>

														<p class="res-activity-time">

															<i class="fa fa-clock-o"></i>

															10.00 AM.

														</p>

													</li>

													<li>

														<p class="mb-0">Punch Out at</p>

														<p class="res-activity-time">

															<i class="fa fa-clock-o"></i>

															11.00 AM.

														</p>

													</li>

													<li>

														<p class="mb-0">Punch In at</p>

														<p class="res-activity-time">

															<i class="fa fa-clock-o"></i>

															11.15 AM.

														</p>

													</li>

													<li>

														<p class="mb-0">Punch Out at</p>

														<p class="res-activity-time">

															<i class="fa fa-clock-o"></i>

															1.30 PM.

														</p>

													</li>

													<li>

														<p class="mb-0">Punch In at</p>

														<p class="res-activity-time">

															<i class="fa fa-clock-o"></i>

															2.00 PM.

														</p>

													</li>

													<li>

														<p class="mb-0">Punch Out at</p>

														<p class="res-activity-time">

															<i class="fa fa-clock-o"></i>

															7.30 PM.

														</p>

													</li>

												</ul>

											</div>

										</div>

									</div>

								</div>

							</div>

						</div>

					</div>

				</div>

				<!-- /Attendance Modal -->

				

            </div>

			<!-- Page Wrapper -->

			

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

		

		<!-- Datetimepicker JS -->

		<script src="<?php echo base_url(); ?>default/js/moment.min.js"></script>

		<script src="<?php echo base_url(); ?>default/js/bootstrap-datetimepicker.min.js"></script>

		

		<!-- Custom JS -->

		<script src="<?php echo base_url(); ?>default/js/app.js"></script>

		

    </body>

</html>