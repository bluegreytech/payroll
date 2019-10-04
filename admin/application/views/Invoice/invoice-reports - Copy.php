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

						<div class="col-sm-5 col-5">

							<h4 class="page-title">List of Invoice Report</h4>

						</div>

						<div class="col-sm-7 col-7 text-right m-b-30">

						<a href="<?php echo base_url();?>Invoice/createinvoice" class="btn add-btn"><i class="fa fa-plus"></i>Add Invoice</a>

						</div>

					</div>

					<!-- /Page Title -->



					<!-- Search Filter -->

					<!-- <div class="row filter-row">

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

                    </div> -->



						<!-- Search Filter -->



						<form method="post" action="<?php echo base_url();?>Invoice">



							<div class="row filter-row">



								<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  

										<div class="form-group form-focus select-focus">

											<select class="select floating" name="option" id="purpose"> 

												<option value=""> -- Select -- </option>

												<option value="companyname">Company Name</option>

												<option value="status">Paymeny Status</option>

												<option value="datefromto">Date From to To</option>

													<!-- <option value="phone">Contact Number</option>

												<option value="department">Department</option>

												<option value="desgination">Designation</option> -->

											</select>

										</div>

								</div>



							<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12" >  

										<div class="form-group form-focus box" id='business'>

											<input type="text" name="keyword2" class="form-control floating">

											<label class="focus-label">Search</label>

										</div>



										<div class="form-group form-focus box2" id='business2' style="display: none;">

											<div class="form-group">

												<select class="form-control" name="keyword2"> 

													<option desabled value="">Please select company</option>

													<?php

													if($companyData){

														foreach($companyData as $comp)

														{

													?>

														<option value="<?php echo $comp->companyname; ?>"><?php echo $comp->companyname;?></option>

													<?php

													}}

													?>

												</select>

											</div>

										</div>



										

										<div class="form-group form-focus" id='business3' style="display: none;">

											<div class="cal-icon">

												<input class="form-control floating datetimepicker" type="text">

											</div>

											<label class="focus-label">From</label>

										</div>

								

										<div class="form-group form-focus" id='business4' style="display: none;">

											<div class="cal-icon">

												<input class="form-control floating datetimepicker" type="text">

											</div>

											<label class="focus-label">From</label>

										</div>

										

									

								</div>

								<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  

									<input type="submit" value="Search" class="btn btn-success btn-block">

								</div>    

								<div class="col-md-3"> 

									<a href="<?php echo base_url()?>Invoice" class="btn btn-info"><i class="fa fa-refresh"></i></a> 

								</div> 

							</div> 



							</form>











					<!-- /Search Filter -->



					



					<div class="row">



						<div class="col-md-12">

							<div class="table-responsive">

								<table class="table table-striped custom-table mb-0 datatable">

									<thead>

										<tr>

											<th>No</th>

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

										<td><?php 

											echo 	$invdate = date("d-m-Y", strtotime($compInvoice->invoicedate));?></td>

										

										<td><?php	echo 	$invdate = date("d-m-Y", strtotime($compInvoice->duedate));?></td>

										<td><?php echo $compInvoice->netamount ;?></td>		

										<!-- <td>		

											<?php //if($compInvoice->status=='Paid'){ 

												//echo "<span class='badge badge-success-border'>$compInvoice->status</span>";

												//}?>

											<?php //if($compInvoice->status=='Pending'){

													//echo "<span class='badge badge-danger-border'>$compInvoice->status</span>";

													//}?>

										</td> -->

										<td>		
											<?php echo $compInvoice->status;?>

										</td>

										<td class="text-right">

										

												<a  href="<?php echo base_url();?>Invoice/edit_invoice/<?php echo $compInvoice->Companyinvoiceid;?>" title="Edit"><i class="fa fa-pencil m-r-5"></i></a>

												<a  href="<?php echo base_url();?>Invoice/invoice_view/<?php echo $compInvoice->Companyinvoiceid;?>"  title="View"><i class="fa fa-eye m-r-5"></i></a>

												<a  onclick="deletedata(<?php echo $compInvoice->Companyinvoiceid; ?>)" data-toggle="modal" data-target="#delete_client"><i class="fa fa-trash-o m-r-5" title="Delete"></i> </a>

												



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



				<!-- Delete Client Modal -->



				<div class="modal custom-modal fade" id="delete_client" role="dialog">



					<div class="modal-dialog modal-dialog-centered">



						<div class="modal-content">



							<div class="modal-body">



								<div class="form-header">



									<h3>Delete Invoice</h3>



									<p>Are you sure want to delete?</p>



								</div>



								<div class="modal-btn delete-action">



									<div class="row">



										<div class="col-6">



											<button type="button" class="btn btn-primary continue-btn" id="yes_btn" ><a href="" id="deleteYes" value="Yes">Delete</a></button>







										</div>



										<div class="col-6">



											<a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>



										</div>



									</div>



								</div>



							</div>



						</div>



					</div>



				</div>



				<!-- /Delete Client Modal -->



            </div>



			<!-- /Page Wrapper -->







        </div>



		<!-- /Main Wrapper -->







		<!-- Sidebar Overlay -->



		<div class="sidebar-overlay" data-reff=""></div>

		<?php $this->load->view('common/footer');?>

		<script>

		function deletedata(Companyinvoiceid){  

		$('#delete_client').modal('show')

			$('#yes_btn').click(function(){

					Url="<?php echo base_url();?>"

					$.ajax({

					url: Url+'/Invoice/delete_invoice/',

					type: "post",

					data: {Companyinvoiceid:Companyinvoiceid} ,

					success: function (response) {             

				// document.location.href = url+'adminmaster/adminlist/';          

				},

				})

			});

		}	



		$(document).ready(function(){

    $('#purpose').on('change', function() {

      if(this.value == 'companyname')

      {

        $("#business2").show();

		$("#business").hide();

		$("#business3").hide();

		$("#business4").hide();

      }

      else if(this.value == 'status')

      {

        $("#business").show();

		$("#business2").hide();

		$("#business3").hide();

		$("#business4").hide();

      }

	  else if(this.value == 'datefromto')

      {

		$("#business").hide();

		$("#business2").hide();

		$("#business3").show();

		$("#business4").show();

      }

    });

});

		

		</script>

		

    </body>



</html>