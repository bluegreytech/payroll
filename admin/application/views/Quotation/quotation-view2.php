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
										<h3 class="text-uppercase">Ref.No-<?php echo $billid;?></h3>
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
												<th class="d-none d-sm-table-cell">particular </th>
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