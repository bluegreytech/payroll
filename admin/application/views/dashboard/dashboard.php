<?php 
	 $this->load->view('common/header.php');
	 $this->load->view('common/sidebar.php');

?>

			

			<!-- Page Wrapper -->

            <div class="page-wrapper">
						

				<!-- Page Content -->

                <div class="content container-fluid">

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

					<?php if(($this->session->flashdata('warnin'))){ ?>

					<div class="alert alert-danger" id="warningMessage">

					<strong> <?php echo $this->session->flashdata('warnin'); ?></strong> 

					</div>

					<?php } ?>

					<div class="row">

						<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">

							<div class="dash-widget clearfix card-box">

								<span class="dash-widget-icon"><i class="fa fa-cubes"></i></span>

								<div class="dash-widget-info">

									<h3><?php echo $companyData;?></h3>

									<a href="<?php echo base_url();?>Company" title="Go to Companies list"><span>Total Companies</span></a>

								</div>

							</div>

						</div>

						<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">

							<div class="dash-widget clearfix card-box">

								<span class="dash-widget-icon"><i class="fa fa-usd"></i></span>

								<div class="dash-widget-info">

									<h3><?php echo $hrData;?></h3>

									<a href="<?php echo base_url();?>hr" title="Go to HR list"><span> Total HR</span></a>

								</div>

							</div>

						</div>

						<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">

							<div class="dash-widget clearfix card-box">

								<span class="dash-widget-icon"><i class="fa fa-diamond"></i></span>

								<div class="dash-widget-info">

									<h3><?php echo $adminData;?></h3>

									<a href="<?php echo base_url();?>adminmaster/adminlist" title="Go to Admin list"><span>Total Admin</span></a>

								</div>

							</div>

						</div>

						<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">

							<div class="dash-widget clearfix card-box">

								<span class="dash-widget-icon"><i class="fa fa-user"></i></span>

								<div class="dash-widget-info">

									<h3><?php echo $empData;?></h3>

									<a href="<?php echo base_url();?>employee" title="Go to Admin list"><span>Employees</span></a>

								</div>

							</div>

						</div>

					</div>

					<br>

					<div class="row">

						<div class="col-md-12">

							<div class="row">

								<div class="col-md-6 text-center">

									<div class="card-box">

										<h3 class="card-title">Total Revenue</h3>

										<div id="bar-charts"></div>

									</div>

								</div>

								<div class="col-md-6 text-center">

									<div class="card-box">

										<h3 class="card-title">Sales Overview</h3>

										<div id="line-charts"></div>

									</div>

								</div>

								<div class="col-md-6 text-center">

									<div class="card-box">

										<h3 class="card-title">Invoice Status</h3>

										<div id="area-charts"></div>

									</div>

								</div>

								<div class="col-md-6 text-center">

									<div class="card-box">

										<h3 class="card-title">Overall Status</h3>

										<div id="pie-charts"></div>

									</div>

								</div>

							</div>

						</div>

					</div>

					<div class="row">

						<div class="col-md-6">

							<div class="card card-table">

								<div class="card-header">

									<h3 class="card-title mb-0">Invoices</h3>

								</div>

								<div class="card-body">

									<div class="table-responsive">

										<table class="table table-striped table-nowrap custom-table mb-0">

											<thead>

												<tr>

													<th>Invoice ID</th>

													<th>Client</th>

													<th>Due Date</th>

													<th>Total</th>

													<th>Status</th>

												</tr>

											</thead>

											<tbody>

												<tr>

													<td><a href="invoice-view.php">#INV-0001</a></td>

													<td>

														<h2><a href="#">Global Technologies</a></h2>

													</td>

													<td>11 Mar 2019</td>

													<td>$380</td>

													<td>

														<span class="badge badge-warning-border">Partially Paid</span>

													</td>

												</tr>

												<tr>

													<td><a href="invoice-view.php">#INV-0002</a></td>

													<td>

														<h2><a href="#">Delta Infotech</a></h2>

													</td>

													<td>8 Feb 2019</td>

													<td>$500</td>

													<td>

														<span class="badge badge-success-border">Paid</span>

													</td>

												</tr>

												<tr>

													<td><a href="invoice-view.php">#INV-0003</a></td>

													<td>

														<h2><a href="#">Cream Inc</a></h2>

													</td>

													<td>23 Jan 2019</td>

													<td>$60</td>

													<td>

														<span class="badge badge-danger-border">Unpaid</span>

													</td>

												</tr>

											</tbody>

										</table>

									</div>

								</div>

								<div class="card-footer">

									<a href="#">View all invoices</a>

								</div>

							</div>

						</div>

						<div class="col-md-6">

							<div class="card card-table">

								<div class="card-header">

									<h3 class="card-title mb-0">Payments</h3>

								</div>

								<div class="card-body">

									<div class="table-responsive">	

										<table class="table table-striped custom-table table-nowrap mb-0">

											<thead>

												<tr>

													<th>Invoice ID</th>

													<th>Client</th>

													<th>Payment Type</th>

													<th>Paid Date</th>

													<th>Paid Amount</th>

												</tr>

											</thead>

											<tbody>

												<tr>

													<td><a href="invoice-view.php">#INV-0001</a></td>

													<td>

														<h2><a href="#">Global Technologies</a></h2>

													</td>

													<td>Paypal</td>

													<td>11 Mar 2019</td>

													<td>$380</td>

												</tr>

												<tr>

													<td><a href="invoice-view.php">#INV-0002</a></td>

													<td>

														<h2><a href="#">Delta Infotech</a></h2>

													</td>

													<td>Paypal</td>

													<td>8 Feb 2019</td>

													<td>$500</td>

												</tr>

												<tr>

													<td><a href="invoice-view.php">#INV-0003</a></td>

													<td>

														<h2><a href="#">Cream Inc</a></h2>

													</td>

													<td>Paypal</td>

													<td>23 Jan 2019</td>

													<td>$60</td>

												</tr>

											</tbody>

										</table>

									</div>

								</div>

								<div class="card-footer">

									<a href="payments.php">#</a>

								</div>

							</div>

						</div>

					</div>

					<div class="row">

						<div class="col-md-6">

							<div class="card card-table">

								<div class="card-header">

									<h3 class="card-title mb-0">Clients</h3>

								</div>

								<div class="card-body">

									<div class="table-responsive">

										<table class="table table-striped custom-table mb-0">

											<thead>

												<tr>

													<th>Name</th>

													<th>Email</th>

													<th>Status</th>

													<th class="text-right">Action</th>

												</tr>

											</thead>

											<tbody>

												<tr>

													<td>

														<h2 class="table-avatar">

															<a href="#" class="avatar"><img alt="" src="assets\img\profiles\avatar-19.jpg"></a>

															<a href="client-profile.php">Barry Cuda <span>CEO</span></a>

														</h2>

													</td>

													<td><a href="#" class="__cf_email__" data-cfemail="ed8f8c9f9f948e98898cad88958c809d8188c38e8280">[email&#160;protected]</a></td>

													<td>

														<div class="dropdown action-label">

															<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">

																<i class="fa fa-dot-circle-o text-success"></i> Active

															</a>

															<div class="dropdown-menu dropdown-menu-right">

																<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>

																<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>

															</div>

														</div>

													</td>

													<td class="text-right">

														<div class="dropdown dropdown-action">

															<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>

															<div class="dropdown-menu dropdown-menu-right">

																<a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-pencil m-r-5"></i> Edit</a>

																<a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-trash-o m-r-5"></i> Delete</a>

															</div>

														</div>

													</td>

												</tr>

												<tr>

													<td>

														<h2 class="table-avatar">

															<a href="#" class="avatar"><img alt="" src="assets\img\profiles\avatar-19.jpg"></a>

															<a href="client-profile.php">Tressa Wexler <span>Manager</span></a>

														</h2>

													</td>

													<td><a href="#" class="__cf_email__" data-cfemail="582c2a3d2b2b392f3d20343d2a183d20393528343d763b3735">[email&#160;protected]</a></td>

													<td>

														<div class="dropdown action-label">

															<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">

																<i class="fa fa-dot-circle-o text-danger"></i> Inactive

															</a>

															<div class="dropdown-menu dropdown-menu-right">

																<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>

																<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>

															</div>

														</div>

													</td>

													<td class="text-right">

														<div class="dropdown dropdown-action">

															<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>

															<div class="dropdown-menu dropdown-menu-right">

																<a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-pencil m-r-5"></i> Edit</a>

																<a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-trash-o m-r-5"></i> Delete</a>

															</div>

														</div>

													</td>

												</tr>

												<tr>

													<td>

														<h2 class="table-avatar">

															<a href="client-profile.php" class="avatar"><img alt="" src="assets\img\profiles\avatar-07.jpg"></a>

															<a href="client-profile.php">Ruby Bartlett <span>CEO</span></a>

														</h2>

													</td>

													<td><a href="#" class="__cf_email__" data-cfemail="a4d6d1c6ddc6c5d6d0c8c1d0d0e4c1dcc5c9d4c8c18ac7cbc9">[email&#160;protected]</a></td>

													<td>

														<div class="dropdown action-label">

															<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">

																<i class="fa fa-dot-circle-o text-danger"></i> Inactive

															</a>

															<div class="dropdown-menu dropdown-menu-right">

																<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>

																<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>

															</div>

														</div>

													</td>

													<td class="text-right">

														<div class="dropdown dropdown-action">

															<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>

															<div class="dropdown-menu dropdown-menu-right">

																<a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-pencil m-r-5"></i> Edit</a>

																<a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-trash-o m-r-5"></i> Delete</a>

															</div>

														</div>

													</td>

												</tr>

												<tr>

													<td>

														<h2 class="table-avatar">

															<a href="client-profile.php" class="avatar"><img alt="" src="assets\img\profiles\avatar-06.jpg"></a>

															<a href="client-profile.php"> Misty Tison <span>CEO</span></a>

														</h2>

													</td>

													<td><a href="#" class="__cf_email__" data-cfemail="bdd0d4cec9c4c9d4ced2d3fdd8c5dcd0cdd1d893ded2d0">[email&#160;protected]</a></td>

													<td>

														<div class="dropdown action-label">

															<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">

																<i class="fa fa-dot-circle-o text-success"></i> Active

															</a>

															<div class="dropdown-menu dropdown-menu-right">

																<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>

																<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>

															</div>

														</div>

													</td>

													<td class="text-right">

														<div class="dropdown dropdown-action">

															<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>

															<div class="dropdown-menu dropdown-menu-right">

																<a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-pencil m-r-5"></i> Edit</a>

																<a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-trash-o m-r-5"></i> Delete</a>

															</div>

														</div>

													</td>

												</tr>

												<tr>

													<td>

														<h2 class="table-avatar">

															<a href="client-profile.php" class="avatar"><img alt="" src="assets\img\profiles\avatar-14.jpg"></a>

															<a href="client-profile.php"> Daniel Deacon <span>CEO</span></a>

														</h2>

													</td>

													<td><a href="#" class="__cf_email__" data-cfemail="dabebbb4b3bfb6bebfbbb9b5b49abfa2bbb7aab6bff4b9b5b7">[email&#160;protected]</a></td>

													<td>

														<div class="dropdown action-label">

															<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">

																<i class="fa fa-dot-circle-o text-danger"></i> Inactive

															</a>

															<div class="dropdown-menu dropdown-menu-right">

																<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>

																<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>

															</div>

														</div>

													</td>

													<td class="text-right">

														<div class="dropdown dropdown-action">

															<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>

															<div class="dropdown-menu dropdown-menu-right">

																<a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-pencil m-r-5"></i> Edit</a>

																<a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-trash-o m-r-5"></i> Delete</a>

															</div>

														</div>

													</td>

												</tr>

											</tbody>

										</table>

									</div>

								</div>

								<div class="card-footer">

									<a href="clients.php">View all clients</a>

								</div>

							</div>

						</div>

						<div class="col-md-6">

							<div class="card card-table">

								<div class="card-header">

									<h3 class="card-title mb-0">Recent Projects</h3>

								</div>

								<div class="card-body">

									<div class="table-responsive">

										<table class="table table-striped custom-table mb-0">

											<thead>

												<tr>

													<th>Project Name </th>

													<th>Progress</th>

													<th class="text-right">Action</th>

												</tr>

											</thead>

											<tbody>

												<tr>

													<td>

														<h2><a href="#">Office Management</a></h2>

														<small class="block text-ellipsis">

															<span class="text-xs">1</span> <span class="text-muted">open tasks, </span>

															<span class="text-xs">9</span> <span class="text-muted">tasks completed</span>

														</small>

													</td>

													<td>

														<div class="progress progress-xs progress-striped">

															<div class="progress-bar bg-success" role="progressbar" data-toggle="tooltip" title="65%" style="width: 65%"></div>

														</div>

													</td>

													<td class="text-right">

														<div class="dropdown dropdown-action">

															<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>

															<div class="dropdown-menu dropdown-menu-right">

																<a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-pencil m-r-5"></i> Edit</a>

																<a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-trash-o m-r-5"></i> Delete</a>

															</div>

														</div>

													</td>

												</tr>

												<tr>

													<td>

														<h2><a href="#">Project Management</a></h2>

														<small class="block text-ellipsis">

															<span class="text-xs">2</span> <span class="text-muted">open tasks, </span>

															<span class="text-xs">5</span> <span class="text-muted">tasks completed</span>

														</small>

													</td>

													<td>

														<div class="progress progress-xs progress-striped">

															<div class="progress-bar bg-success" role="progressbar" data-toggle="tooltip" title="15%" style="width: 15%"></div>

														</div>

													</td>

													<td class="text-right">

														<div class="dropdown dropdown-action">

															<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>

															<div class="dropdown-menu dropdown-menu-right">

																<a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-pencil m-r-5"></i> Edit</a>

																<a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-trash-o m-r-5"></i> Delete</a>

															</div>

														</div>

													</td>

												</tr>

												<tr>

													<td>

														<h2><a href="#">Video Calling App</a></h2>

														<small class="block text-ellipsis">

															<span class="text-xs">3</span> <span class="text-muted">open tasks, </span>

															<span class="text-xs">3</span> <span class="text-muted">tasks completed</span>

														</small>

													</td>

													<td>

														<div class="progress progress-xs progress-striped">

															<div class="progress-bar bg-success" role="progressbar" data-toggle="tooltip" title="49%" style="width: 49%"></div>

														</div>

													</td>

													<td class="text-right">

														<div class="dropdown dropdown-action">

															<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>

															<div class="dropdown-menu dropdown-menu-right">

																<a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-pencil m-r-5"></i> Edit</a>

																<a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-trash-o m-r-5"></i> Delete</a>

															</div>

														</div>

													</td>

												</tr>

												<tr>

													<td>

														<h2><a href="#">Hospital Administration</a></h2>

														<small class="block text-ellipsis">

															<span class="text-xs">12</span> <span class="text-muted">open tasks, </span>

															<span class="text-xs">4</span> <span class="text-muted">tasks completed</span>

														</small>

													</td>

													<td>

														<div class="progress progress-xs progress-striped">

															<div class="progress-bar bg-success" role="progressbar" data-toggle="tooltip" title="88%" style="width: 88%"></div>

														</div>

													</td>

													<td class="text-right">

														<div class="dropdown dropdown-action">

															<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>

															<div class="dropdown-menu dropdown-menu-right">

																<a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-pencil m-r-5"></i> Edit</a>

																<a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-trash-o m-r-5"></i> Delete</a>

															</div>

														</div>

													</td>

												</tr>

												<tr>

													<td>

														<h2><a href="#">Digital Marketplace</a></h2>

														<small class="block text-ellipsis">

															<span class="text-xs">7</span> <span class="text-muted">open tasks, </span>

															<span class="text-xs">14</span> <span class="text-muted">tasks completed</span>

														</small>

													</td>

													<td>

														<div class="progress progress-xs progress-striped">

															<div class="progress-bar bg-success" role="progressbar" data-toggle="tooltip" title="100%" style="width: 100%"></div>

														</div>

													</td>

													<td class="text-right">

														<div class="dropdown dropdown-action">

															<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>

															<div class="dropdown-menu dropdown-menu-right">

																<a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-pencil m-r-5"></i> Edit</a>

																<a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-trash-o m-r-5"></i> Delete</a>

															</div>

														</div>

													</td>

												</tr>

											</tbody>

										</table>

									</div>

								</div>

								<div class="card-footer">

									<a href="#">View all projects</a>

								</div>

							</div>

						</div>

					</div>

				</div>

				<!-- /Page Content -->



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

}, 5000);  

});



$(function() { 

    setTimeout(function() {

  $('#successMessage').fadeOut('fast');

}, 5000);  

});



$(function() { 

    setTimeout(function() {

  $('#warningMessage').fadeOut('fast');

}, 5000);  

});

	        

</script>

