<?php
	 $this->load->view('common/header.php');
	 $this->load->view('common/sidebar.php');
?>
<script>

function m1()
{
		var a=document.getElementById("txt1").value;
		//var b=document.getElementById("txt2").value;
		//var c=document.getElementById("txt3").value;

		var h=a;
		//alert(h);
		document.getElementById("total").value=h;
	
}

</script>	

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
					<div class="col-sm-5 col-4">
						<h4 class="page-title">Quotation</h4>
					</div>
					<div class="col-sm-7 col-8 text-right m-b-30">
						
						
						<div class="btn-group btn-group-sm">
							<a href="<?php echo base_url();?>Invoice/sendquotation/<?php echo $quotationid;?>" class="btn add-btn">Send Email</a>
						</div>

						<div class="btn-group btn-group-sm">
									<a class="btn add-btn" id="btnExport"> Generate PDF</a>	
						</div>

						<div class="btn-group btn-group-sm">
									<a href="<?php echo base_url();?>Invoice/quotation_list" class="btn add-btn"> Back to Quotation List</a>	
						</div>
					</div>
				</div>
				<!-- /Page Title -->

				
				
				<div class="row" id="tblCustomers">
					<div class="col-md-12">
						<div class="card">
							<div class="card-body">
							<!-- <center><h2>Payroll System</h2></center> -->
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
												<th class="d-none d-sm-table-cell">Particular </th>
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
												<td><?php echo $companyname ;?></td>
												<td class="d-none d-sm-table-cell"><?php echo $quot->quotationdetail;?></td>
												<td>
													<?php echo $quot->quotationrate; ?>
												</td>	
											</tr>
											
										<?php
										$i++;
											} }
										?>   
											
										</tbody>
									</table>
									
								</div>

								<!-- <div class="table-responsive">
												<table class="table table-hover table-white">
													<tbody>
														<tr>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td colspan="5" style="text-align: right; font-weight: bold">Total</td>
															<td style="text-align: right; padding-right: 30px;width: 230px"><input class="form-control" type="text" id="total" onChange="m1()"></td>
														</tr>
													</tbody>
												</table>                               
								</div> -->

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
																<th><?php echo $Adminname;?></th>
															</tr>
															<tr>
																<th>M <?php echo $Mobilenumber;?></th>
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

                    pdfMake.createPdf(docDefinition).download('Quotation.pdf');

                }

            });

        });




    </script>


</html>