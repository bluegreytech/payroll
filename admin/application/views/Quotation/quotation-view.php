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
						<h4 class="page-title">Quotation</h4>
					</div>
					<div class="col-sm-7 col-8 text-right m-b-30">
						<div class="btn-group btn-group-sm">
							<button class="btn btn-white" id="btnExport">Generate PDF</button>
							<!-- <button class="btn btn-white"><i class="fa fa-print fa-lg"></i> Print</button> -->
						</div>
					</div>
				</div>
				<!-- /Page Title -->
				
				<div class="row" id="tblCustomers">
					<div class="col-md-12">
						<div class="card">
							<div class="card-body">
							<center><h2>Payroll System</h2></center>
								<div class="row">
									<div class="col-sm-6 m-b-20">
										<img src="<?php echo base_url();?>default/img/Company/companylogo/logo.jpg" class="inv-logo" alt="Logo">
										 <!-- <ul class="list-unstyled">
										
										</ul> -->
									</div>
									<div class="col-sm-6 m-b-20">
										<div class="invoice-details">
										<h3 class="text-uppercase">Ref.No-<?php echo $quotationid;?></h3>
										<ul class="list-unstyled">
											<li>Created Date: <span><?php $originalDate = $quotationdate;
											echo $newDate = date("M d, Y", strtotime($originalDate));?></span></li>
										</ul>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6 col-lg-7 col-xl-8 m-b-20">
									<h5><strong>Quotation to:</strong></h5>
									<ul class="list-unstyled">
															<li><span><?php echo $companyname; ?></span></li>
															<li><?php echo $companyaddress; ?></li>
															<li> <?php echo $companyemail; ?></li>
															<li> <?php echo $comcontactnumber; ?></li>
														</ul>
									</div>
									<div class="col-sm-6 col-lg-5 col-xl-4 m-b-20">
										<!-- <span class="text-muted">Payment Details:</span> -->
										<ul class="list-unstyled invoice-payment-details">
											
										</ul>
									</div>
								</div>
								<div class="table-responsive">
								<center><h4><u>Quotation</u></h4></center>
									<table class="table table-striped table-hover">
										<thead>
											<tr>
												<th>Sr. No</th>
												<th>Work</th>
												<th class="d-none d-sm-table-cell">Particuler</th>
												<th>Rate (Rs.)</th>
											</tr>
										</thead>
										<tbody>
										<?php
											$i=1;
											if($quotationtData){                             
											foreach($quotationtData as $quot)
											{
										?>
											<tr>
												<td><?php echo $i;?></td>
												<td><?php echo $companytype ;?></td>
												<td class="d-none d-sm-table-cell"><?php echo $quot->quotationdetail;?></td>
												<td><?php echo $quot->quotationrate;?></td>
												
											</tr>
											
										<?php
										$i++;
											} }
										?>   
											
										</tbody>
									</table>
								</div>
								<div>
									<div class="row invoice-payment">
										
										<div class="col-sm-5">
											<div class="m-b-20">
											
												<div class="table-responsive no-border">
													<table class="table mb-0">
														<tbody>
															<tr>
																<th>Thanking you,</th>
															</tr>
															<tr>
																<td>Yours sincerely,</td>
															</tr>
															<tr>
																<th>Prashant Parmar</th>
															</tr>
															<tr>
																<th>M 9099912602</th>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
										<div class="col-sm-7">
										</div>
									</div>
									<div class="invoice-info">
										<h5>Other information</h5>
										<p class="text-muted"><?php echo $otherinformation; ?></p>
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







        </div>



		<!-- /Main Wrapper -->







		<!-- Sidebar Overlay -->
		<div class="sidebar-overlay" data-reff=""></div>
        <?php $this->load->view('common/footer');?>

		<!-- Custom PDF JS -->
		<script src="<?php echo base_url(); ?>default/js/pdfjs/html2canvas.min.js"></script>
		<script src="<?php echo base_url(); ?>default/js/pdfjs/pdfmake.min.js"></script>

	

    </body>

	<script type="text/javascript">

        $("body").on("click", "#btnExport", function () {

            html2canvas($('#tblCustomers')[0], {

                onrendered: function (canvas) {

                    var data = canvas.toDataURL();

                    var docDefinition = {

                        content: [{

                            image: data,

                            width: 500

                        }]

                    };

                    pdfMake.createPdf(docDefinition).download('Quotation.pdf');

                }

            });

        });



    </script>


</html>