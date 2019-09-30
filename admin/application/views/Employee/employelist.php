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
						<div class="col">
							<h4 class="page-title">List of Employee  </h4>
						</div>	
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

					<form method="post" action="<?php echo base_url();?>Employee">

						<div class="row filter-row">

							<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
									<div class="form-group form-focus select-focus">
										<select class="select floating" name="option" id="purpose"> 
											<option value=""> -- Select -- </option>
											<option value="companyname">Company Name</option>
											<option value="first_name">Employee Name</option>
											<option value="email">Email Address</option>
											<option value="phone">Contact Number</option>
											<option value="department">Department</option>
											<option value="desgination">Designation</option>
										</select>
									</div>
							</div>

						<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12" >  
									<div class="form-group form-focus box" id='business'>
										<input type="text" name="keyword2" class="form-control floating">
										<label class="focus-label">Search</label>
									</div>

									<!-- <div class="form-group form-focus box2" id='business2' style="display: none;">
										<div class="form-group">
											<select class="form-control" name="keyword2"> 
												<option desabled value="">Please select company</option>
												<?php
												// if($companyData){
												// 	foreach($companyData as $comp)
												// 	{
												?>
													<option value="<?php //echo $comp->companyname; ?>"><?php// echo $comp->companyname;?></option>
												<?php
												//}}
												?>
											</select>
										</div>
									</div> -->
							</div>
							<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
								<input type="submit" value="Search" class="btn btn-success btn-block">
							</div>    
							<div class="col-md-3"> 
								<a href="<?php echo base_url()?>Employee" class="btn btn-info"><i class="fa fa-refresh"></i></a> 
							</div> 
						</div> 

					</form>

					

					<!-- Search Filter -->

					

					<div class="row">

						<div class="col-md-12">

							<div class="table-responsive">

								<!-- <table class="display" style="width:100%" id="example"> -->

								 <table class="table table-striped custom-table datatable" class="display" style="width:100%">

									<thead>

										<tr>

											<th>No</th>
											<th>First Name</th>
											<th>Contact Number</th>
											<th>Email Address</th>
											<th>From Company</th>
											<th>Department</th>
											<th>Designation</th>
											<!-- <th class="text-right">Action</th> -->

											

										</tr>

									</thead>

									<tbody>
									<?php
										$i=1;
										if($employeeData){                             
										foreach($employeeData as $empData)
										{
									?>

										<tr>
										<td><?php echo $i;?></td>
										<td>
											<span  class="table-avatar">
											<?php 
											if($empData->ProfileImage!='')
											{
												?>
												<a href="<?php echo base_url();?>Employee/profile/<?php echo $empData->emp_id;?>" title="show employee profile" class="avatar"><img src="http://localhost/payroll/hr/upload/emp/<?php echo $empData->ProfileImage;?>"></a>
												<a href="<?php echo base_url();?>Employee/profile/<?php echo $empData->emp_id;?>" title="show employee profile"><?php echo $empData->first_name;?></a>
												<?php

											}
											else
											{
												?>
												<a href="<?php echo base_url();?>Employee/profile/<?php echo $empData->emp_id;?>" title="show employee profile" class="avatar"><img src="<?php echo base_url();?>upload/default/avtar.jpg"></a>
												<a href="<?php echo base_url();?>Employee/profile/<?php echo $empData->emp_id;?>" title="show employee profile"><?php echo $empData->first_name;?></a>
												<?php
											}
											?>
											</h2>
											</td>
										<td><?php echo $empData->phone ;?></td>
										<td><?php echo $empData->email ;?></td>
										<td><?php echo $empData->companyname ;?></td>
										<td><?php echo $empData->department ;?></td>
										<td><?php echo $empData->desgination ;?></td>

											<td class="text-right">
													<!-- <a class="dropdown-item" href="<?php //echo base_url();?><?php //echo $empData->emp_id;?>" role="button">Show Profile </a> -->
														<!-- <a class="dropdown-item" onclick="deletedata(<?php// echo $empData->emp_id; ?>)" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a> -->
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

			

			

				

				

				

				<!-- Delete Client Modal -->

				<div class="modal custom-modal fade" id="delete_employee" role="dialog">

					<div class="modal-dialog modal-dialog-centered">

						<div class="modal-content">

							<div class="modal-body">

								<div class="form-header">

									<h3>Delete Employee</h3>

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

				<!-- /Delete Client Modal -->

				

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

$(document).ready(function(){
    $('#purpose').on('change', function() {
      if(this.value == 'companyname')
      {
        $("#business2").show();
		$("#business").hide();
		$(".box").hide();
      }
      else
      {
        $("#business2").hide();
		$("#business").show();
		$(".box2").hide();
      }
    });
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



function deletedata(emp_id){  
			$('#delete_employee').modal('show')
				$('#yes_btn').click(function(){
						Url="<?php echo base_url();?>"
						$.ajax({
						url: Url+'/Employee/delete_employee/',
						type: "post",
						data: {emp_id:emp_id} ,
						success: function (response) {             
					// document.location.href = url+'adminmaster/adminlist/';          
					},

					})

				});

		}			



</script>