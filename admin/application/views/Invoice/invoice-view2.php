<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <meta name="description" content="">

		<meta name="robots" content="noindex, nofollow">

        <title>Payroll System</title>



		<!-- Favicon -->

        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>default/img/Company/companylogo/logo.jpg">



		<!-- Bootstrap CSS -->

        <link rel="stylesheet" href="<?php echo base_url(); ?>default/css/bootstrap.min.css">



		<!-- Fontawesome CSS -->

        <link rel="stylesheet" href="<?php echo base_url(); ?>default/css/font-awesome.min.css">

		

		<!-- Lineawesome CSS -->

        <link rel="stylesheet" href="<?php echo base_url(); ?>default/css/line-awesome.min.css">



		<!-- Chart CSS -->

		<link rel="stylesheet" href="<?php echo base_url(); ?>default/plugins/morris/morris.css">



		<!-- Main CSS -->

        <link rel="stylesheet" href="<?php echo base_url(); ?>default/css/style.css">



        <!-- Select2 CSS -->

		<link rel="stylesheet" href="<?php echo base_url(); ?>default/css/select2.min.css">



		<!-- Datetimepicker CSS -->

		<link rel="stylesheet" href="<?php echo base_url(); ?>default/css/bootstrap-datetimepicker.min.css">



		<!-- Datatable CSS -->

		<link rel="stylesheet" href="<?php echo base_url(); ?>default/css/dataTables.bootstrap4.min.css">



		<!-- Calendar CSS -->

		<link rel="stylesheet" href="<?php echo base_url(); ?>default/css/fullcalendar.min.css">

		<!-- External -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>default/css/bootstrap-select.css" />

		<!-- Tagsinput CSS -->

		<link rel="stylesheet" href="<?php echo base_url(); ?>default/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">

		<script src="<?php echo base_url(); ?>default/ckeditor/ckeditor.js" type="text/javascript"></script>

	

        <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> -->

		<!-- External -->

		<!-- <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.5/css/fixedHeader.bootstrap.min.css">

		<link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.5/css/fixedHeader.bootstrap.min.css">

		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

		<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css"> -->

		
		
		

</head>









			<!-- Page Wrapper -->



            <div class="page-wrapper">



			



				<!-- Page Content -->



                <div class="content container-fluid">



				

				

				<form methos="post">	

				

					<div class="row">

						<div class="col-md-12">

							<div class="table-responsive">

								<table class="display" style="width:100%">
								
									<div class="card">

											<div class="card-body">
												<center><h2>Payroll System</h2></center>
												<div class="row">
												<div class="col-sm-6 m-b-20">

												<img src="<?php echo base_url();?>default/img/Company/companylogo/logo.jpg" class="inv-logo" alt="Logo">

												<h5><strong>Invoice From:</strong></h5>

												<ul class="list-unstyled">

													<li><?php echo $Address; ?></li>

													<li>GST No:  <?php echo $gstnumber;?></li>

												</ul>

											</div>
												

													<div class="col-sm-6 m-b-20">

														<div class="invoice-details">

															<h3 class="text-uppercase">#P<?php echo date('Ym')?>-<?php echo $invoicebillid;?></h3>

															<ul class="list-unstyled">

													

																<li>Date: <span><?php 	$originalDate = $invoicedate;

																echo $newDate = date("M d, Y", strtotime($originalDate));?></span></li>

																<li>Due Date: <span><?php 	$originalDate = $duedate;

																echo $newDate = date("M d, Y", strtotime($originalDate));?></span></li>

															</ul>

														</div>

													</div>

												</div>

												<div class="row">

													<div class="col-sm-6 col-lg-7 col-xl-8 m-b-20">

														<h5><strong>Invoice to:</strong></h5>

														<ul class="list-unstyled">

															<li><span><?php echo $companyname; ?></span></li>

															<li><?php echo $companyaddress; ?></li>

															<li> <?php echo $companycity; ?></li>

															<li> <?php echo $comcontactnumber; ?></li>

														

														</ul>

													</div>

													<div class="col-sm-6 col-lg-5 col-xl-4 m-b-20">
														<span class="text-muted">Payment Details:</span>
														<ul class="list-unstyled invoice-payment-details">
															<li><h5>Total Due: <span class="text-right"><?php echo $netamount; ?></span></h5></li>
															<li>Bank name: <span><?php echo $Bankname; ?></span></li>
															<li>IFSC code: <span><?php echo $Ifsccode; ?></span></li>
														</ul>
													</div>
												</div>



											

											<div>

												<div class="row invoice-payment">

													<div class="col-sm-7">

													</div>



													<div class="col-sm-5">

														<div class="m-b-20">

														

															<div class="table-responsive no-border">

																<table class="table mb-0">

																	<tbody>

																		<tr>

																			<th>Subtotal:</th>

																			<td class="text-right"><?php echo $totalamount; ?></td>

																		</tr>

																		<tr>

																			<th>Total Tax: <span class="text-regular"></span></th>

																			<td class="text-right"><?php echo $addtax; ?>%</td>

																		</tr>
																		<tr>

																			<th>GST Tax Amount:</th>

																			<td class="text-right text-primary"><h5><?php echo $taxamount; ?></h5></td>

																		</tr>
																		<tr>

																			<th>CGST Tax Amount:</th>

																			<td class="text-right text-primary"><h5><?php echo $cgstamount; ?></h5></td>

																		</tr>

																		<tr>

																			<th>Net Amount:</th>

																			<td class="text-right text-primary"><h5><?php echo $netamount; ?></h5></td>

																		</tr>

																	</tbody>

																</table>

															

															</div>

															

														</div>



													</div>



												</div>



												

											</div>



										</div>



									</div>

								<table>

							</div>

						</div>

					</div>

				<form>	

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