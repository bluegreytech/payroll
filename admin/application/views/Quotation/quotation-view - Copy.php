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
						<div class="col-sm-6 col-3">
							<h4 class="page-title">Invoice</h4>
						</div>

					
						
							<div class="col-sm-6 col-8 text-right m-b-30">
								<!-- <div class="btn-group btn-group-sm"> -->
									<!-- <form methos="post" action="<?php //echo base_url();?>Invoice/invoice_view/<?php //echo $companyid;?>"> -->
										<!-- <a href="<?php //echo base_url();?>Invoice/sendinvoice/<?php //echo $Companyinvoiceid;?>"><button class="btn btn-white">Send Email</button></a>	 -->
									<!-- </form> -->
								<!-- </div> -->
							
								<div class="btn-group btn-group-sm">
									<button class="btn btn-white" id="btnExport">Generate PDF</button>	
								</div>

								<div class="btn-group btn-group-sm">
									<a href="<?php echo base_url();?>Invoice/quotation_list" class="btn add-btn">Back to Quotation List</a>	
								</div>

							</div>
						
					</div>



					<!-- /Page Title -->



				<form methos="post">	
					<?php
						$AdminId=$this->session->userdata('AdminId');
					?>

					<div class="row" id="tblCustomers">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="display" style="width:100%">
									<div class="card">
											<div class="card-body">
												<center><h2>Payroll System</h2></center>
												<div class="row">
													<div class="col-sm-6 m-b-20">
														<!-- <h5><strong>Invoice From:</strong></h5> -->
														<ul class="list-unstyled">
															<!-- <li><?php //echo $Address; ?></li>
															<li>GST No:  <?php// echo $gstnumber;?></li> -->
														</ul>
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
														
													</div>
												</div>
											<div>

												<div class="row invoice-payment">
													<div class="col-md-12">
													<center><h4>Qutaiton</h4></center>
														<table class="table">
															<tr>
																<th>Sr. No</th>
																<th>Work</th>
																<th>Particuler </th>
																<th>Rate (Rs.)</th>	
															</tr>
															<?php
																$i=1;
																if($quotationtData){                             
																foreach($quotationtData as $quot)
																{
															?>
															<tr>
																<td><?php echo $i;?></td>
																<td><?php echo $quot->quotationid ;?></td>
																<td><?php echo $quot->quotationdetail ;?> </td>
																<td><?php echo $quot->quotationrate ;?></td>	
															</tr>
															<?php
															$i++;
																} }
															?>    
														</table>
													</div>
												</div>

												<div class="row invoice-payment">
													<div class="col-md-12">
													<center><h4>Qutaiton</h4></center>
														<table class="table">
															<tr>
																<th>Sr. No</th>
																<th>Work</th>
																<th>Particuler </th>
																<th>Rate (Rs.)</th>	
															</tr>
															
															<tr>
																<td>gdfgdfgd</td>
																<td>sdggdg</td>
																<td>dgdgd </td>
																<td>sdggsd</td>	
															</tr>
														 
														</table>
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

	

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>

		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>

	



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

                    pdfMake.createPdf(docDefinition).download('invoice.pdf');

                }

            });

        });



    </script>


</html>