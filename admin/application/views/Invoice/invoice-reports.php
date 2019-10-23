<?php 

	 $this->load->view('common/header.php');

	 $this->load->view('common/sidebar.php');

?>


		<!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.0/css/buttons.dataTables.min.css"> -->

	
  <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> -->

		<!-- External -->

		<!-- <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.5/css/fixedHeader.bootstrap.min.css">

		<link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.5/css/fixedHeader.bootstrap.min.css">

		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

		<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css"> -->


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

						<form method="post" action="<?php echo base_url();?>Invoice">
							<div class="row filter-row">



								<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  

										<div class="form-group form-focus select-focus">

											<select class="select floating" name="option" id="purpose"> 
												<option value=""> -- Select -- </option>
												<option value="companyname">Company Name</option>
												<option value="status">Paymeny Status</option>
												<option value="invoicedate">Created Date From to To</option>
											</select>

										</div>

								</div>



								<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  

										<div class="form-group form-focus box" id='business'>

											<input type="text" name="keyword2" class="form-control floating">

											<label class="focus-label">Search</label>

										</div>



										<div class="form-group form-focus box2" id='business2' style="display: none;">

											<div class="form-group">

												<select class="form-control" name="keyword"> 

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

												<input class="form-control floating datetimepicker" type="text" name="keyword3" id="invoicedate" readonly>

											</div>

											<label class="focus-label">From</label>

										</div>
 
								

										<div class="form-group form-focus" id='business4' style="display: none;">

											<div class="cal-icon">

												<input class="form-control floating datetimepicker" type="text" name="keyword4" id="invoicedate2" readonly>

											</div>

											<label class="focus-label">To</label>

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
								<!-- <table  id="example" class="display nowrap" style="width:100%"> -->

								<!-- <table class="table table-striped custom-table mb-0 datatable"> -->

								<table id="example" class="display table table-striped custom-table" style="width:100%">

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

										<td>		

											<?php if($compInvoice->status=='Paid'){ 

												echo "<span class='badge badge-success-border'>$compInvoice->status</span>";

												}?>

											<?php if($compInvoice->status=='Pending'){

													echo "<span class='badge badge-danger-border'>$compInvoice->status</span>";

													}?>

										</td>

										<!-- <td>		
											<?php echo $compInvoice->status;?>

										</td> -->

										<td class="text-right">

												<a  href="<?php echo base_url();?>Invoice/invoice_view/<?php echo $compInvoice->Companyinvoiceid;?>"  title="View"><i class="fa fa-eye m-r-5"></i></a>

												<a  href="<?php echo base_url();?>Invoice/edit_invoice/<?php echo $compInvoice->Companyinvoiceid;?>" title="Edit"><i class="fa fa-pencil m-r-5"></i></a>

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
	$(document).ready(function() {
	 $('#example').DataTable( {
		aaSorting: [[0, 'asc']],
		searching: false,
		dom: 'Blfrtip',
		responsive: true,
	 buttons: [
	 {
		extend: 'copyHtml5',
		download: 'open',
		text:'<i class="fa fa-files-o"></i> Copy',
		exportOptions: {
		columns: [0,1,2,3,4,5]
		}
	 },
	 {
		extend: 'excelHtml5',
		text:'<i class="fa fa-file-excel-o"></i> Excel',
		exportOptions: {
		columns: [0,1,2,3,4,5]
		}
	 },
	 {
		extend: 'csvHtml5',
		download: 'open',
	    text:'<i class="fa fa-file-text-o"></i> CSV',
		exportOptions: {
		columns: [0,1,2,3,4,5]
		},
		
	 },
	 {
		extend: 'pdfHtml5',
		text:'<i class="fa fa-file-pdf-o"></i> PDF',
		title: "List of Company Invoice",
		filename:"List_of_Company_Invoice",
		orientation: 'landscape', 
		pageSize: 'A4',		
		exportOptions: {
		columns: [0,1,2,3,4,5],
		
		},
		
	        customize : function(doc){ 
				doc.content[1].margin = [ 50, 0, 100, 0 ];
				doc.defaultStyle.fontSize = 10; //2, 3, 4,etc
	            doc.styles.tableHeader.fontSize = 12; //2, 3, 4, etc
				doc.defaultStyle.alignment = 'center';
				doc.styles.tableHeader.alignment = 'center';
				doc.content[1].table.widths = [ '5%',  '35%', '30%', '14%','14%', '14%'];
	         
	       },
	 },
	  {
		extend: 'print',
		orientation: 'landscape', 
		pageSize: 'A4',
		text:'<i class="fa fa-print"></i> Print',
		exportOptions: {
			columns: [0,1,2,3,4,5],
			 		
		},
		 
		

	 },
	 ]

 });
  var styles ={
	   "margin-bottom": '0.5em',
       float: "right"	
	 };
	  $("div#example_wrapper").find($(".dt-buttons")).css(styles);

} );



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
		

		$('#invoicedate').datetimepicker({
			defaultDate: new Date(),
			format: 'DD/MM/YYYY',
			ignoreReadonly: true,					
		});


		
		$('#invoicedate2').datetimepicker({
			defaultDate: new Date(),
			format: 'DD/MM/YYYY',
			ignoreReadonly: true,					
		});





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

	  else if(this.value == 'invoicedate')
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