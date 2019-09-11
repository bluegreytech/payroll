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

							<h4 class="page-title">List of Company  </h4>

						</div>	

									<div class="col-12 text-right m-b-30">

										<a href="<?php echo base_url();?>Company/companyadd" class="btn add-btn"><i class="fa fa-plus">

										</i> Add Company</a>			

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

					<form method="post" action="<?php echo base_url();?>Company">

						<div class="row filter-row">

						

							<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  

									<div class="form-group form-focus select-focus">

										<select class="select floating" name="option" id="colorselector"> 
											<option value=""> -- Select -- </option>
											<option value="companytype">Company Type</option>
											<option value="companyname">Company Name</option>
											<option value="comemailaddress" >Email Address</option>
											<option value="comcontactnumber">Contact Number</option>
											<option value="emailverifystatus">Verification Status</option>

										</select>
									</div>

							</div>

							<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12 colors">  
									<div class="form-group form-focus">
										<input type="text" name="keyword2" class="form-control floating">
										<label class="focus-label">Search</label>
									</div>
							</div>

							

							<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
								<input type="submit" value="Search" class="btn btn-success btn-block">
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
											<!-- <th>Company Name</th> -->
											<th>Notification Name</th>
											<th>Email Address</th>
											<th>Company Type</th>
											<th>Email Address </th>

				

											<th class="text-right">Action</th>

											

										</tr>

									</thead>

									<tbody>

									<?php

										$i=1;

										if($notificationData){                             

										foreach($notificationData as $notcomp)

										{

									?>

										<tr>

										<td><?php echo $i;?></td>
										<td><?php //echo $notcomp->companyname ;?></td>
										<td><?php echo $notcomp->notificationname ;?></td>
										<td><?php echo $notcomp->notificationdescription ;?></td>
										<td><?php echo $notcomp->notificationdate ;?></td>
					

										

											

										



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

				<div class="modal custom-modal fade" id="delete_client" role="dialog">

					<div class="modal-dialog modal-dialog-centered">

						<div class="modal-content">

							<div class="modal-body">

								<div class="form-header">

									<h3>Delete Company</h3>

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

		

		<!-- jQuery -->

        <script src="<?php echo base_url(); ?>default/js/jquery-3.2.1.min.js"></script>

		

		<!-- Bootstrap Core JS -->

        <script src="<?php echo base_url(); ?>default/js/popper.min.js"></script>

        <script src="<?php echo base_url(); ?>default/js/bootstrap.min.js"></script>

		

		<!-- Slimscroll JS -->

		<script src="<?php echo base_url(); ?>default/js/jquery.slimscroll.min.js"></script>

		

		<!-- Select2 JS -->

		<script src="<?php echo base_url(); ?>default/js/select2.min.js"></script>

		<script src="<?php echo base_url(); ?>default/js/jquery.dataTables.min.js"></script>

		<script src="<?php echo base_url(); ?>default/js/dataTables.bootstrap4.min.js"></script>

		<!-- Custom JS -->

		<script src="<?php echo base_url(); ?>default/js/app.js"></script>

		<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>

    </body>

</html>



<script>

$(function() {
        $('#colorselector').change(function(){
            $('.colors').hide();
           // $('#' + $(this).val('companyname')).show();
        });
    });

// $(document).ready(function(){
//   $("#red").click(function(){
//     $("#yellow1").hide();
//   });
//   $("#yellow").click(function(){
//     $("#red1").show();
//   });
// });

// $(function() {
//   $('#red').change(function(){
//     $('#yellow1').hide();
//     $('#red1').show();
//   });
//   $('#yellow').change(function(){
//     $('#red1').hide();
//     $('#yellow1').show();
//   });
// });


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



function deletedata(companyid){  

			$('#delete_client').modal('show')

				$('#yes_btn').click(function(){

				

						Url="<?php echo base_url();?>"

						$.ajax({

						url: Url+'/Company/delete_company/',

						type: "post",

						data: {companyid:companyid} ,

						success: function (response) {             

					// document.location.href = url+'adminmaster/adminlist/';          

					},

					})

				});

		}			



</script>