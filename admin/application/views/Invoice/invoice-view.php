<?php 
	 $this->load->view('common/header.php');
	 $this->load->view('common/sidebar.php');
?>



			<!-- Page Wrapper -->

            <div class="page-wrapper">

			

				<!-- Page Content -->

                <div class="content container-fluid">

				

					<!-- Page Title -->

					<div class="row">

						<div class="col-sm-5 col-4">

							<h4 class="page-title">Invoice</h4>

						</div>

						<div class="col-sm-7 col-8 text-right m-b-30">

							<div class="btn-group btn-group-sm">
							<input type="button" id="create_pdf" value="Generate PDF">
								<button class="btn btn-white">CSV</button>

								<button class="btn btn-white">PDF</button>

								<button class="btn btn-white"><i class="fa fa-print fa-lg"></i> Print</button>

							</div>

						</div>

					</div>

					<!-- /Page Title -->

					

					<div class="row">

						<div class="col-md-12">

							<div class="card">

								<div class="card-body">

									<div class="row">

										<div class="col-sm-6 m-b-20">
											<img src="<?php echo base_url(); ?>default/img/logo.png" class="inv-logo" alt="">
				 							<ul class="list-unstyled">
												<li><?php echo $companyaddress; ?></li>
												<li>3864 Quiet Valley Lane,</li>
												<li>Sherman Oaks, CA, 91403</li>
												<li>GST No:</li>
											</ul>
										</div>

										<div class="col-sm-6 m-b-20">

											<div class="invoice-details">

												<h3 class="text-uppercase"><?php echo $Companyinvoiceid;?></h3>

												<ul class="list-unstyled">

													<li>Date: <span><?php echo $invoicedate;?></span></li>

													<li>Due date: <span><?php echo $duedate;?></span></li>

												</ul>

											</div>

										</div>

									</div>

									<div class="row">

										<div class="col-sm-6 col-lg-7 col-xl-8 m-b-20">

											<h5>Invoice to:</h5>

				 							<ul class="list-unstyled">

												<li><h5><strong>Barry Cuda</strong></h5></li>

												<li><span>Global Technologies</span></li>

												<li>5754 Airport Rd</li>

												<li>Coosada, AL, 36020</li>

												<li>United States</li>

												<li>888-777-6655</li>

												<li><a href="#"><span class="__cf_email__" data-cfemail="80e2e1f2f2f9e3f5e4e1c0e5f8e1edf0ece5aee3efed">[email&#160;protected]</span></a></li>

											</ul>

										</div>

										<div class="col-sm-6 col-lg-5 col-xl-4 m-b-20">

											<span class="text-muted">Payment Details:</span>

											<ul class="list-unstyled invoice-payment-details">

												<li><h5>Total Due: <span class="text-right"><?php echo $netamount; ?></span></h5></li>

												<li>Bank name: <span>Profit Bank Europe</span></li>

												<li>Country: <span>United Kingdom</span></li>

												<li>City: <span>London E1 8BF</span></li>

												<li>Address: <span>3 Goodman Street</span></li>

												<li>IBAN: <span>KFH37784028476740</span></li>

												<li>SWIFT code: <span>BPT4E</span></li>

											</ul>

										</div>

									</div>

								
									<div>

										<div class="row invoice-payment">

											<div class="col-sm-7">

											</div>

											<div class="col-sm-5">

												<div class="m-b-20">

													<h6>Total due</h6>

													<div class="table-responsive no-border">

														<table class="table mb-0">

															<tbody>

																<tr>

																	<th>Subtotal:</th>

																	<td class="text-right">$7,000</td>

																</tr>

																<tr>

																	<th>Tax: <span class="text-regular">(25%)</span></th>

																	<td class="text-right">$1,750</td>

																</tr>

																<tr>

																	<th>Total:</th>

																	<td class="text-right text-primary"><h5>$8,750</h5></td>

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
	 
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>


    </body>

</html>