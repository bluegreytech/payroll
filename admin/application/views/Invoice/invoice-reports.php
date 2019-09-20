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
						<div class="col-sm-5 col-5">
							<h4 class="page-title">List of Invoice Report</h4>
						</div>
						<div class="col-sm-7 col-7 text-right m-b-30">
						<a href="<?php echo base_url();?>Invoice/createinvoice" class="btn add-btn"><i class="fa fa-plus"></i>Add Invoice</a>
						</div>
					</div>
					<!-- /Page Title -->

					

					<!-- Search Filter -->
					<div class="row filter-row">
						<div class="col-sm-6 col-md-3"> 
							<div class="form-group form-focus select-focus">
								<select class="select floating"> 
									<option>Select Client</option>
									<option>Global Technologies</option>
									<option>Delta Infotech</option>
								</select>
								<label class="focus-label">Client</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">  
							<div class="form-group form-focus">
								<div class="cal-icon">
									<input class="form-control floating datetimepicker" type="text">
								</div>
								<label class="focus-label">From</label>
							</div>
						</div>

						<div class="col-sm-6 col-md-3">  
							<div class="form-group form-focus">
								<div class="cal-icon">
									<input class="form-control floating datetimepicker" type="text">
								</div>
								<label class="focus-label">To</label>
							</div>
						</div>

						<div class="col-sm-6 col-md-3">  
							<a href="#" class="btn btn-success btn-block"> Search </a>  
						</div>     
                    </div>

					<!-- /Search Filter -->

					

					<div class="row">

						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table mb-0 datatable">
									<thead>
										<tr>
											<th>Invoice Number</th>
											<th>Client</th>
											<th>Created Date</th>
											<th>Due Date</th>
											<th>Amount</th>
											<th>Status</th>
											<th class="text-right">Action</th>
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
									
										<td><a href="invoice-view.php"><?php echo $i;?></a></td>
										<td><?php echo $compInvoice->companyname ;?></td>
										<td><?php echo $compInvoice->invoicedate ;?></td>
										<td><?php echo $compInvoice->duedate ;?></td>
										<td><?php echo $compInvoice->netamount ;?></td>	
										<td><span class="badge badge-success-border">Paid</span></td>
										<td class="text-right">
										<div class="dropdown dropdown-action">
											<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="<?php echo base_url();?>Invoice/edit_invoice"><i class="fa fa-pencil m-r-5"></i> Edit</a>
												<a class="dropdown-item" href="<?php echo base_url();?>Invoice/invoice_view/<?php echo $compInvoice->Companyinvoiceid;?>"><i class="fa fa-eye m-r-5"></i> View</a>
												<a class="dropdown-item" href="#"><i class="fa fa-file-pdf-o m-r-5"></i> Download</a>
												<a class="dropdown-item" href="#"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
											</div>
										</div>

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