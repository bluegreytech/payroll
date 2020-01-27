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

					<!-- Page Title -->
						<div class="row">
							<div class="col-sm-5 col-5">
							<h4 class="page-title">
								<?php echo $companyDetail['companyname'];?>
							</h4>
							</div>
							<div class="col-sm-7 col-7 text-right m-b-30">
							<a href="<?php echo base_url();?>Company" class="btn add-btn"> Back to List of Company </a>	
							</div>
						</div>
					<!-- /Page Title -->

					<div class="row">

						<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
							<div class="dash-widget clearfix card-box">
								<span class="dash-widget-icon"><i class="fa fa-id-card-o"></i></span>
								<div class="dash-widget-info">
									<h3><?php echo $invoiceTotal;?></h3>
									<a href="<?php echo base_url();?>invoice" title="Go to Invoice list"><span>Total Invoice</span></a>
								</div>
							</div>
						</div>

						<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
							<div class="dash-widget clearfix card-box">
								<span class="dash-widget-icon"><i class="fa fa-user-o"></i></span>
								<div class="dash-widget-info">
									<h3><?php echo $hrData;?></h3>
									<a href="<?php echo base_url();?>hr" title="Go to HR list"><span> Total HR</span></a>
								</div>
							</div>
						</div>

						<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
							<div class="dash-widget clearfix card-box">
								<span class="dash-widget-icon"><i class="fa fa-users"></i></span>
								<div class="dash-widget-info">
									<h3><?php echo $empData;?></h3>
									<a href="<?php echo base_url();?>employee" title="Go to Employees list"><span>Employees</span></a>
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
										<h3 class="card-title">Monthly Invoice of <?php echo $companyDetail['companyname'];?></h3>
										<?php 
										if($cominvoiceDataCount!='' && $cominvoiceDataCount!=null)
										{
											?>
												<div id="bar-chart"></div>	
											<?php
										}
										else
										{
											?>
												<!-- <h4 class="card-title">No data chart available</h4> -->
												<div id="bar-chart"></div>	
											<?php	
										}
										?>
									</div>
								</div>

								

								<!-- <div class="col-md-6 text-center">
									<div class="card-box">
										<h3 class="card-title">Sales Overview</h3>
										<div id="line-charts"></div>
									</div>
								</div> -->



								<!-- <div class="col-md-6 text-center">
									<div class="card-box">
										<h3 class="card-title">Invoice Status</h3>
										<div id="area-charts"></div>
									</div>
								</div> -->



								<div class="col-md-6 text-center">
									<div class="card-box">
										<h3 class="card-title">Overall Status  of <?php echo $companyDetail['companyname'];?></h3>
										
										<?php 
										// if(((($hrData!='' && $hrData!=null) || ($invoiceTotal!='' && $invoiceTotal!=null)) || ($empData!='' && $empData!=null)))
										// {
											?>
												<div id="pie-charts"></div>	
											<?php
										// }
										// else
										// {
											?>
												<!-- <h4 class="card-title">No data available</h4> -->
											<?php	
									//	}
										?>
									</div>
								</div>



							</div>
						</div>
					</div>

					<br>

					<div class="row">
						<div class="col-md-6">
							<div class="card card-table">
								<div class="card-header">
									<h3 class="card-title mb-0">Recent Invoice of <?php echo $companyDetail['companyname'];?></h3>
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
											<?php
												$i=1;
												if($invoiceData){ 	                            
												foreach($invoiceData as $compInvoice)
												{
											?>
												<tr>
													<td><a href="<?php echo base_url();?>Invoice"><?php echo $compInvoice->invoicebillid;?></a></td>
													<td>
														<h2><a href="#"><?php echo $compInvoice->companyname ;?></a></h2>
													</td>
													<td><?php echo 	$invdate = date("d-m-Y", strtotime($compInvoice->invoicedate));?></td>
													<!-- <td><?php	//echo 	$invdate = date("d-m-Y", strtotime($compInvoice->duedate));?></td> -->

													<td><?php echo $compInvoice->netamount ;?></td>
													<td>		
													<?php if($compInvoice->paystatus=='Paid'){ 

														echo "<span class='badge badge-success-border'>$compInvoice->paystatus</span>";

														}?>

													<?php if($compInvoice->paystatus=='Unpaid'){

															echo "<span class='badge badge-danger-border'>$compInvoice->paystatus</span>";

															}?>

												</td>
												</tr>
											
												
											<?php
										$i++;
											} }else{
												?>
												<tr>
													<td>
														<h4>no data available</h4>
													</td>
												</tr>
											
												<?php
											}
											?>
											</tbody>
										</table>
									</div>
								</div>
								<div class="card-footer">
									<a href="<?php echo base_url();?>Invoice">View all invoice</a>
								</div>

							</div>
						</div>

						<div class="col-md-6">
							<div class="card card-table">

								<div class="card-header">
									<h3 class="card-title mb-0">Recent Hr of <?php echo $companyDetail['companyname'];?></h3>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-striped custom-table mb-0">
											<thead>
												<tr>
													<th>Name </th>
													<th>Email Address</th>
													<th>Contact Number</th>
													<th>Company</th>
												</tr>
											</thead>
											<tbody>
											<?php
												$i=1;
												if($hrDataDetail){                             
												foreach($hrDataDetail as $hr)
												{
											?>
												<tr>
													<td>

														<h2 class="table-avatar">

														<?php 

														if($hr->ProfileImage!='')

														{

															?>

															<a href="<?php echo base_url();?>Hr/profile/<?php echo $hr->hr_id;?>" title="show hr profile" class="avatar"><img src="<?php echo base_url_hr();?>upload/hr/<?php echo $hr->ProfileImage;?>"></a>

															<a href="<?php echo base_url();?>Hr/profile/<?php echo $hr->hr_id;?>" title="show hr profile"><?php echo $hr->FullName;?> 

														<?php

														}

														else

														{

															?>

														<a href="<?php echo base_url();?>Hr/profile/<?php echo $hr->hr_id;?>" title="show hr profile" class="avatar"><img src="<?php echo base_url();?>upload/default/avtar.jpg"></a>

														<a href="<?php echo base_url();?>Hr/profile/<?php echo $hr->hr_id;?>" title="show hr profile"><?php echo $hr->FullName;?> 

															<?php

														}

														?>

														</h2>

													</td>
													<td><?php echo $hr->EmailAddress ;?></td>
													<td><?php echo $hr->Contact ;?></td>
													<td><?php echo $hr->companyname ;?></td>
												</tr>
												<?php
												$i++;
													} }else{
														?>
														<tr>
															<td>
																<h4>no data available</h4>
															</td>
														</tr>
													
														<?php
													}
													?> 
											</tbody>
										</table>
									</div>
								</div>

								<div class="card-footer">
								<a href="<?php echo base_url();?>Hr">View all Hr</a>
								</div>



							</div>
						</div>



					</div>
					

					<div class="row">

						<div class="col-md-6">
							<div class="card card-table">

								<div class="card-header">
									<h3 class="card-title mb-0">Recent Employee   of <?php echo $companyDetail['companyname'];?></h3>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-striped custom-table mb-0">
											<thead>
												<tr>
													<th>Name </th>
													<th>Email Address</th>
													<th>Contact Number</th>
													<th>Department</th>
												</tr>
											</thead>
											<tbody>
											<?php
												$i=1;
												if($empDataDetail){                             
												foreach($empDataDetail as $emp)
												{
											?>
												<tr>
													<td>

														<h2 class="table-avatar">

														<?php 

														if($emp->ProfileImage!='')

														{

															?>

															<a href="<?php echo base_url();?>Employee/profile/<?php echo $emp->emp_id;?>" title="show employee profile" class="avatar"><img src="<?php echo base_url_hr();?>upload/emp/<?php echo $emp->ProfileImage;?>"></a>

															<a href="<?php echo base_url();?>Employee/profile/<?php echo $emp->emp_id;?>" title="show employee profile"><?php echo $emp->first_name?> 

														<?php

														}

														else

														{

															?>

														<a href="<?php echo base_url();?>Employee/profile/<?php echo $emp->emp_id;?>" title="show employee profile" class="avatar"><img src="<?php echo base_url();?>upload/default/avtar.jpg"></a>

														<a href="<?php echo base_url();?>Employee/profile/<?php echo $emp->emp_id;?>" title="show employee profile"><?php echo $emp->first_name?> 

															<?php

														}

														?>

														</h2>

													</td>
													<td><?php echo $emp->email ;?></td>
													<td><?php echo $emp->phone ;?></td>
													<td><?php echo $emp->department ;?></td>
												</tr>
												<?php
												$i++;
													} }else{
														?>
														<tr>
															<td>
																<h4>no data available</h4>
															</td>
														</tr>
													
														<?php
													}
													?> 
											</tbody>
										</table>
									</div>
								</div>

								<div class="card-footer">
								<a href="<?php echo base_url();?>employee">View all Employee</a>
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
	
<script>
				Morris.Bar({
					element: 'bar-chart',
					data: [
						<?php 
						if($cominvoiceDataCount)
						{
							foreach($cominvoiceDataCount as $row)
							{
							?>
								{ y: '<?php echo $row->month_name;?>', a:<?php echo  $row->count;?>},
							<?php	
							}
						}
						else
						{
							?>
								{ y: 'Jan', a: 0 },
								{ y: 'Feb', a: 0 },
								{ y: 'March', a: 0 },
								{ y: 'April', a: 0 },
								{ y: 'May', a: 0 },
								{ y: 'Jun', a: 0 },
								{ y: 'July', a: 0 },
								{ y: 'Aug', a: 0 },
								{ y: 'Sep', a: 0 },
								{ y: 'Oct', a: 0 },
								{ y: 'Nov', a: 0 },
								{ y: 'Dec', a: 0 }
							<?php
						}
						?>	
					],
					xkey: ['y'],
					ykeys: ['a'],
					labels: ['Total Invoices'],
					lineColors: ['#3ae1f2'],
					lineWidth: '3px',
					barColors: ['#3ae1f2'],
					resize: true,
					redraw: true
				});

	
</script>

<script>
	Morris.Line({
		element: 'line-charts',
		data: [
			{ y: '2006', a: 50, b: 90 },
			{ y: '2007', a: 75,  b: 65 },
			{ y: '2008', a: 50,  b: 40 },
			{ y: '2009', a: 75,  b: 65 },
			{ y: '2010', a: 50,  b: 40 },
			{ y: '2011', a: 75,  b: 65 },
			{ y: '2012', a: 100, b: 50 }
		],
		xkey: 'y',
		ykeys: ['a', 'b'],
		labels: ['Total Sales', 'Total Revenue'],
		lineColors: ['#3ae1f2','#0093a2'],
		lineWidth: '3px',
		resize: true,
		redraw: true
	});	
</script>

<script>
	 Morris.Area({
		element: 'area-charts',
		data: [
			{ y: '2006', a: 100, b: 90 },
			{ y: '2007', a: 75,  b: 65 },
			{ y: '2008', a: 50,  b: 40 },
			{ y: '2009', a: 75,  b: 65 },
			{ y: '2010', a: 50,  b: 40 },
			{ y: '2011', a: 75,  b: 65 },
			{ y: '2012', a: 100, b: 90 }
		],
		xkey: 'y',
		ykeys: ['a', 'b'],
		labels: ['Total Invoice', 'Pending Invoice'],
		lineColors: ['#3ae1f2','#0093a2'],
		lineWidth: '3px',
		resize: true,
		redraw: true
    });
</script>

<script>
	Morris.Donut({
		element: 'pie-charts',
		colors: [
			//'#3ae1f2',
			'#0093a2',
			'#f8878e',
			'#aaa3db',
			//'#abb8db',
		],
		data: [
			<?php
			if($hrData>0)
			{
				?>
				{label: "Hr", value: <?php echo $hrData;?>},
				<?php
			}
			else
			{
				?>
				{label: "Hr", value: 0},
				<?php
			}
			?>

			<?php
			if($empData>0)
			{
				?>
				{label: "Employee", value: <?php echo $empData;?>},
				<?php
			}
			else
			{
				?>
				{label: "Employee", value: 0},
				<?php
			}
			?>

			<?php
			if($invoiceTotal>0)
			{
				?>
				{label: "Company Invoice", value: <?php echo $invoiceTotal;?>},
				<?php
			}
			else
			{
				?>
				{label: "Company Invoice", value: 0},
				<?php
			}
			?>

			
			
			
		

			
			
			
		],
		resize: true,
		redraw: true
	});
		
</script>
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



