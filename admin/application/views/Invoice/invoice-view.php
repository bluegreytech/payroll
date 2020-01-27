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
					<?php if(($this->session->flashdata('warning'))){ ?>
					<div class="alert alert-warning" id="warningMessage">
					<strong> <?php echo $this->session->flashdata('warning'); ?></strong> 
					</div>
					<?php } ?>

				

					<!-- Page Title -->

					<div class="row">

						<div class="col-sm-6 col-3">

							<h4 class="page-title">Invoice</h4>

						</div>

					
						
							<div class="col-sm-6 col-8 text-right m-b-30">
							
								<div class="btn-group btn-group-sm">
									<a href="<?php echo base_url();?>Invoice/sendinvoice/<?php echo $Companyinvoiceid;?>" class="btn add-btn">Send Email</a>	
								</div>
							
								<div class="btn-group btn-group-sm">
									<a class="btn add-btn" id="btnExport">Generate PDF</a>	
								</div>

								<div class="btn-group btn-group-sm">
									<a href="<?php echo base_url();?>Invoice" class="btn add-btn">Back to Invoice List</a>	
								</div>

							</div>
						
					</div>



					<!-- /Page Title -->



				<form methos="post">	

					<?php

						//$RoleId=$this->session->userdata('RoleId');

					?>

					<div class="row" id="tblCustomers">

						<div class="col-md-12">

							<div class="table-responsive">

								<table class="display" style="width:100%">
								
									<div class="card">

											<div class="card-body">
												<!-- <center><h2>Payroll System</h2></center> -->
												<div class="row">

													<div class="col-sm-6 m-b-20">

														<img src="<?php echo base_url();?>default/img/Company/companylogo/logo.jpg" class="inv-logo" alt="Logo">

														<h5><strong>Invoice From:</strong></h5>

														<ul class="list-unstyled">

															<li><strong>Name:</strong>  <?php echo $Adminname; ?></li>

															<li><strong>Email: </strong> <?php echo $Emailaddress;?></li>
															<li><strong>Mobile: </strong> <?php echo $Mobilenumber;?></li>
															<li><strong>Address: </strong> <?php echo $Officeaddress;?></li>
															<li><strong>GST Number: </strong> <?php echo $Gstnumber;?></li>

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

															<li><span><?php echo $comemailaddress; ?></span></li>

														</ul>

													</div>

													<div class="col-sm-6 col-lg-5 col-xl-4 m-b-20">

														<span class="text-muted">Payment Details:</span>

														<ul class="list-unstyled invoice-payment-details">

															<li><h5><strong>Total Due:</strong> <span class="text-right"><?php echo $netamount; ?></span></h5></li>

															<li><strong>Bank name: </strong><span><?php echo $Bankname; ?></span></li>

															<li><strong>Account Number:</strong> <span><?php echo $Accountnumber; ?></span></li>

															<li><strong>Branch: </strong><span><?php echo $Branch; ?></span></li>
															<li><strong>IFSC code:</strong> <span><?php echo $Ifsccode; ?></span></li>

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

																		<tr>

																			<th>Net Amount in Words:</th>
										<?php
											$number = $netamount;
											$no = floor($number);
											$point = round($number - $no, 2) * 100;
											$hundred = null;
											$digits_1 = strlen($no);
											$i = 0;
											$str = array();
											$words = array('0' => '', '1' => 'one', '2' => 'two',
											'3' => 'three', '4' => 'four', '5' => 'five', '6' => 'six',
											'7' => 'seven', '8' => 'eight', '9' => 'nine',
											'10' => 'ten', '11' => 'eleven', '12' => 'twelve',
											'13' => 'thirteen', '14' => 'fourteen',
											'15' => 'fifteen', '16' => 'sixteen', '17' => 'seventeen',
											'18' => 'eighteen', '19' =>'nineteen', '20' => 'twenty',
											'30' => 'thirty', '40' => 'forty', '50' => 'fifty',
											'60' => 'sixty', '70' => 'seventy',
											'80' => 'eighty', '90' => 'ninety');
											$digits = array('', 'hundred', 'thousand', 'lakh', 'crore');
											while ($i < $digits_1) {
											$divider = ($i == 2) ? 10 : 100;
											$number = floor($no % $divider);
											$no = floor($no / $divider);
											$i += ($divider == 10) ? 1 : 2;
											if ($number) {
												$plural = (($counter = count($str)) && $number > 9) ? 's' : null;
												$hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
												$str [] = ($number < 21) ? $words[$number] .
													" " . $digits[$counter] . $plural . " " . $hundred
													:
													$words[floor($number / 10) * 10]
													. " " . $words[$number % 10] . " "
													. $digits[$counter] . $plural . " " . $hundred;
											} else $str[] = null;
											}
											$str = array_reverse($str);
											$result = implode('', $str);
											$points = ($point) ?
											"." . $words[$point / 10] . " " . 
												$words[$point = $point % 10] : '';
											
										?> 

									
																			<td class="text-right text-primary"><h5><?php echo $result . "Rupees  " . $points . " Paise"; ?></h5></td>

																		</tr>

																	</tbody>

																</table>

																<table class="table mb-0">
																	<tbody>
																		<tr>
																			<th>Other Information</th>
																			<center><td><?php echo $Otherinformation; ?></td></center>
																		</tr>
																	</tbody>

																</table>

																<table class="table mb-0">

																	<tbody>

																		<tr>

																			<center><td>This invoice is generated by Computer, So no need sign.</td></center>

																			

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

	

		<!-- Custom PDF JS -->
		<script src="<?php echo base_url(); ?>default/js/pdfjs/html2canvas.min.js"></script>
		<script src="<?php echo base_url(); ?>default/js/pdfjs/pdfmake.min.js"></script>

	



    </body>

	<script type="text/javascript">

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

                    pdfMake.createPdf(docDefinition).download('Company_invoice.pdf');

                }

            });

        });



    </script>


</html>