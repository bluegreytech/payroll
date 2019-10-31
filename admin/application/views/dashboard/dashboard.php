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
									<a href="<?php echo base_url();?>employee" title="Go to Employees list"><span>Employees</span></a>
								</div>
							</div>
						</div>



					</div>
					<br>
					<div class="row">

						<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
							<div class="dash-widget clearfix card-box">
								<span class="dash-widget-icon"><i class="fa fa-cubes"></i></span>
								<div class="dash-widget-info">
									<h3><?php echo $invoiceTotal;?></h3>
									<a href="<?php echo base_url();?>invoice" title="Go to Invoice list"><span>Total Invoice</span></a>
								</div>
							</div>
						</div>



						<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
							<div class="dash-widget clearfix card-box">
								<span class="dash-widget-icon"><i class="fa fa-usd"></i></span>
								<div class="dash-widget-info">
									<h3><?php echo $qutationTotal;?></h3>
									<a href="<?php echo base_url();?>invoice/quotation_list" title="Go to Quotation list"><span> Total Quotation</span></a>
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
										<h3 class="card-title">Monthly Registered Company</h3>
										<div id="bar-chart"></div>
										<!-- <div class="chart-container">
											<div class="bar-chart-container">
											<canvas id="bar-chart"></canvas>
											</div>
										</div> -->
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
									<h3 class="card-title mb-0">Company Invoices</h3>
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

													<?php if($compInvoice->status=='Paid'){ 

														echo "<span class='badge badge-success-border'>$compInvoice->status</span>";

														}?>

													<?php if($compInvoice->status=='Unpaid'){

															echo "<span class='badge badge-danger-border'>$compInvoice->status</span>";

															}?>

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
								<div class="card-footer">
									<a href="<?php echo base_url();?>Invoice">View all invoices</a>
								</div>

							</div>
						</div>



						<div class="col-md-6">
							<div class="card card-table">
								<div class="card-header">
									<h3 class="card-title mb-0"> Company Quotation</h3>
								</div>
								<div class="card-body">
									<div class="table-responsive">	
										<table class="table table-striped custom-table table-nowrap mb-0">
											<thead>
												<tr>
													<th>Invoice ID</th>
													<th>Company Type</th>
													<th>Company Name</th>
													<th>Email Address</th>
													<th>Contact Number</th>
													<th>Quotation Date</th>
												</tr>
											</thead>
											<tbody>
											<?php
												$i=1;
												if($qutationData){                             
												foreach($qutationData as $quota)
												{
											?>
												<tr>
													<td><a href="<?php echo base_url();?>Invoice/quotation_view/<?php echo $quota->quotationid;?>"><?php echo $quota->billid ?></a></td>
													<td>
														<h2><?php echo $quota->companytype ;?></h2>
													</td>
													<td>
														<h2><?php echo $quota->companyname ;?></h2>
													</td>
													<td><?php echo $quota->companyemail ;?></td>
													<td><?php echo $quota->comcontactnumber ;?></td>
													<td><?php echo 	$invdate = date("d-m-Y", strtotime($quota->quotationdate));?></td>
												
												</tr>
												<?php
												$i++;
													} }
												?>     	
											</tbody>
										</table>
									</div>
								</div>

								<div class="card-footer">
									<a href="<?php echo base_url();?>invoice/quotation_list">View all Quotation</a>
								</div>



							</div>



						</div>



					</div>



					<div class="row">
						<div class="col-md-6">

							<div class="card card-table">
								<div class="card-header">
									<h3 class="card-title mb-0">Recent Company</h3>
								</div>

								<div class="card-body">
									<div class="table-responsive">

										<table class="table table-striped custom-table mb-0">
											<thead>
												<tr>
													<th>Name</th>
													<th>Email Address</th>
													<th>Verification Status</th>
													<th>Contact Number</th>
												</tr>
											</thead>
											<tbody>
											<?php
												$i=1;
												if($companyDataDetail){                             
												foreach($companyDataDetail as $company)
												{
											?>
												<tr>
												<td>

													<h2 class="table-avatar">
													<?php 
													if($company->companyimage!='')
													{
														?>
														<a href="<?php echo base_url();?>Company/profile/<?php echo $company->companyid;?>" title="show company profile" class="avatar"><img src="<?php echo base_url();?>upload/company/<?php echo $company->companyimage;?>"></a>
														<a href="<?php echo base_url();?>Company/profile/<?php echo $company->companyid;?>" title="show company profile"><?php echo $company->companyname ;?> </a>
														<?php
													}
													else
													{
														?>
														<a href="<?php echo base_url();?>Company/profile/<?php echo $company->companyid;?>" title="show company profile" class="avatar"><img src="<?php echo base_url();?>upload/default/avtar.jpg" ></a>
														<a href="<?php echo base_url();?>Company/profile/<?php echo $company->companyid;?>" title="show company profile"><?php echo $company->companyname ;?> </a>
														<?php
													}
													?>
													</h2>
													</td>
													<td><?php echo $company->comemailaddress ;?></td>
												
										<td>	
											<div class="action-label">
											<a class="btn btn-white btn-sm btn-rounded">
											<?php if($company->emailverifystatus=='Verify')
											{?>
												<i class="fa fa-dot-circle-o 
											<?php if($company->emailverifystatus=='Verify'){ echo "text-success";}?>"></i>Verify
											<?php
											}
											else
											{
												?>
												<i class="fa fa-dot-circle-o 
											<?php if($company->emailverifystatus=='Pending'){ echo "text-danger";}?>"></i>Pending
											<?php
											}
											?>
											</a>
											</div>
											</td>
											<td><?php echo $company->comcontactnumber ;?></td>
												</tr>
												<?php
												$i++;
													} }
												?>   
											</tbody>
										</table>
									</div>
								</div>

								<div class="card-footer">
									<a href="<?php echo base_url();?>Company">View all Company</a>
								</div>



							</div>



						</div>



						<div class="col-md-6">
							<div class="card card-table">

								<div class="card-header">
									<h3 class="card-title mb-0">Recent Hr</h3>
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
													} }
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
			foreach($companyDataCount as $row)
			{
			?>
				{ y: '<?php echo $row->month_name;?>', a:<?php echo  $row->count;?>},
			<?php	
			};
			?>	
		],
		xkey: ['y'],
		ykeys: ['a'],
		labels: ['Total Company Registered'],
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
			'#3ae1f2',
			'#0093a2',
			'#f8878e',
			'#aaa3db',
			'#abb8db',
		],
		data: [
			{label: "Company", value: <?php echo $companyData;?>},
			{label: "Hr", value: <?php echo $hrData;?>},
			{label: "Employee", value: <?php echo $empData;?>},
			{label: "Company Invoice", value: <?php echo $invoiceTotal;?>},
			{label: "Company Quotation", value: <?php echo $qutationTotal;?>},
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



