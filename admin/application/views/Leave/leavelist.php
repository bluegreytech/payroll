<?php 

	 $this->load->view('common/header.php');

	 $this->load->view('common/sidebar.php');

?>



			<!-- Page Wrapper -->



            <div class="page-wrapper">



			<input type="hidden" name="RoleId" value="<?php echo $roleid=$this->session->userdata('RoleId');?>">



				<!-- Page Content -->



                <div class="content container-fluid">



				



				<!-- Page Title -->

	<div class="row">

		<div class="col-sm-5 col-5">

			<h4 class="page-title">Leave Type</h4>

		</div>

		<!-- <div class="col-sm-7 col-7 text-right m-b-30">

		<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_holiday"><i class="fa fa-plus"></i> Add Holiday</a>

		</div> -->

	</div>

	<!-- /Page Title -->



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



						<!-- Search Filter -->

						<form method="post" action="<?php echo base_url();?>Leave/leavelist">

						<div class="row filter-row">

						

							<!-- <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  

									<div class="form-group form-focus select-focus">

										<select class="select floating" name="option" > 

											<option value=""> -- Select -- </option>

											<option value="companyname">Company Name</option>

										</select>

								

									</div>

							</div> -->

							<div class="col-sm-6 col-md-3 col-lg-3 col-xl-3 col-12" >  



									<div class="form-group form-focus box2">

										<div class="form-group">

											<select class="form-control" name="keyword2"> 

												<option desabled value="">Please select company</option>

												<?php

												if($companyData){

													foreach($companyData as $comp)

													{

												?>

													<option value="<?php echo $comp->companyid; ?>"><?php echo $comp->companyname;?></option>

												<?php

												}}

												?>

											</select>

										</div>

									</div>

							</div>

							<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  

								<input type="submit" value="Search" class="btn btn-success btn-block">

							</div> 

							<div class="col-md-3"> 

								<a href="<?php echo base_url()?>Leave/leavelist" class="btn btn-info"><i class="fa fa-refresh"></i></a> 

							</div>     

						</div> 

					</form>

					

					<!-- Search Filter -->



					



					<div class="row">



						<div class="col-md-12">



							<div class="table-responsive">



								<!-- <table class="display" style="width:100%" id="example"> -->



							<table class="table table-striped custom-table datatable">

									<thead>

										<tr>

											<th>No</th>

											<th>Leave Type</th>

											<th>Leave Days</th>

											<th>Status</th>	

										</tr>

									</thead>

									<tbody>

									<?php

										$i=1;

										if($result){  

										foreach($result as $row)

										{

									        

									?>	

										<tr>

											<td><?php echo $i;?></td>

											<td><?php echo ucfirst($row->leave_name);?></td>

											<td><?php echo ucfirst($row->leavedays);?></td>

											<td>	

												<div class="action-label">

												<a class="btn btn-white btn-sm btn-rounded" href="javascript:void(0);"  onclick="statusdata('<?php echo $row->leave_id; ?>','<?php echo $row->status ;?>')">

												<i class="fa fa-dot-circle-o <?php if($row->status=='Active'){ echo "text-success";}else{ echo "text-danger";}?>"></i><?php echo $row->status;?>

												</a>

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



			



			



				



				



			<!-- Add Holiday Modal -->

<div class="modal custom-modal fade" id="add_holiday" role="dialog">

	<div class="modal-dialog modal-dialog-centered" role="document">

		<div class="modal-content">

			<div class="modal-header">

				<h5 class="modal-title">Add Holiday</h5>

				<button type="button" class="close" data-dismiss="modal" aria-label="Close">

				<span aria-hidden="true">&times;</span>

				</button>

			</div>

			<div class="modal-body">

				<form action="<?php echo base_url()?>holiday/holidaylist/" id="frm_holiday" method="POST">

					<div class="form-group">

						<input class="form-control" type="hidden" name="holidayid" id="holidayid">

						<label>Holiday Name <span class="text-danger">*</span></label>

						<input class="form-control" type="text" name="holidayname" id="holidayname">

					</div>

					<div class="form-group">

						<label>Holiday Date <span class="text-danger">*</span></label>

						<div class="cal-icon">

							<input class="form-control datetimepicker" type="text" name="holidaydate" id="holidaydate">

						</div>

					</div>

					<div class="form-group">

						<label>Holiday Day <span class="text-danger">*</span></label>

						<input class="form-control" type="text" name="holidayday" id="holidayday"  readonly="">

					</div>

					<div class="submit-section">

					<button class="btn btn-primary submit-btn">Submit</button>

					</div>

				</form>

			</div>

		</div>

	</div>

</div>

<!-- /Add Holiday Modal -->



<!-- Delete Holiday Modal -->

<div class="modal custom-modal fade" id="delete_holiday" role="dialog">

		<div class="modal-dialog modal-dialog-centered">

			<div class="modal-content">

				<div class="modal-body">

					<div class="form-header">

						<h3>Delete Holiday</h3>

						<p>Are you sure want to delete?</p>

					</div>

					<div class="modal-btn delete-action">

						<div class="row">

							<div class="col-6">

								<a href="javascript:void(0);"  id="yes_btn" class="btn btn-primary continue-btn">Delete</a>

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



<!-- /Delete Holiday Modal -->



				



            </div>



			<!-- /Page Wrapper -->



        </div>



		<!-- /Main Wrapper -->



		<!-- Sidebar Overlay -->



		<div class="sidebar-overlay" data-reff=""></div>

        <?php $this->load->view('common/footer');?>

		



    </body>



</html>







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





</script>