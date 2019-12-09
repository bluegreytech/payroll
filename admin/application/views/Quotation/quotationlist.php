<?php 
	 $this->load->view('common/header.php');
	 $this->load->view('common/sidebar.php');

?>

			<!-- Page Wrapper -->

            <div class="page-wrapper">

			<input type="hidden" name="RoleId" value="<?php echo $roleid=$this->session->userdata('RoleId');?>">

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
							<h4 class="page-title">List of Company Quotation</h4>
							</div>
							<div class="col-sm-7 col-7 text-right m-b-30">
								<a href="<?php echo base_url();?>Invoice/add_quotation" class="btn add-btn"><i class="fa fa-plus">
								</i> Add Company Quotation</a>
							</div>
					</div>

					<!-- /Page Title -->





					<!-- Search Filter -->

				<form method="post" action="<?php echo base_url();?>Invoice/searchquotation">
							<div class="row filter-row">



								<div class="col-sm-6 col-md-3 col-lg-3 col-xl-3 col-12">  

										<div class="form-group form-focus select-focus">

											<select class="select floating" name="option" id="purpose"> 
												<option value=""> -- Select -- </option>
												<!-- <option value="companytype" <?php //if($option=='companytype'){echo 'selected';} ?>>Company type</option> -->
												<option value="companyname" <?php if($option=='companyname'){echo 'selected';} ?>>Company Name</option>
												<option value="companyemail" <?php if($option=='companyemail'){echo 'selected';} ?>>Email Address</option>
												<option value="comcontactnumber" <?php if($option=='comcontactnumber'){echo 'selected';} ?>>Contact Number</option>
												<option value="quotationdate" <?php if($option=='quotationdate'){echo 'selected';} ?>>Created Date From to To</option>
											</select>

										</div>

								</div>



								<div class="col-sm-6 col-md-3 col-lg-3 col-xl-3 col-12">  

										<div class="form-group form-focus box" id='business1'>
											<input type="text" name="keyword1" value="<?php echo $keyword1;?>" class="form-control floating">
											<label class="focus-label">Search</label>
										</div>

										 <!-- <div class="form-group form-focus box" id='business5' style="display: none;">
											<input type="text" name="keyword3" class="form-control floating">
											<label class="focus-label">Search</label>
										</div>

										<div class="form-group form-focus box" id='business6' style="display: none;">
											<input type="text" name="keyword4" class="form-control floating">
											<label class="focus-label">Search</label>
										</div> -->

										<!-- <div class="form-group form-focus box2" id='business2' style="display: none;">
											<div class="form-group">
												<select class="form-control" name="keyword"> 
													<option desabled value="">Please select company type</option>
													<?php
													// if($companytypeData){
													// 	foreach($companytypeData as $comp)
													// 	{
													?>
														<option value="<?php //echo $comp->companytype; ?>"><?php //echo $comp->companytype;?></option>
													<?php
												//	}}
													?>
												</select>
											</div>
										</div> -->


										<div class="form-group form-focus" id='business2' style="display: none;">
											<div class="cal-icon">
												<input class="form-control floating datetimepicker" type="text" name="keyword2" value="<?php echo $keyword2;?>" id="keyword5" readonly>
											</div>
											<label class="focus-label">From</label>
										</div>
 
								
										<div class="form-group form-focus" id='business3' style="display: none;">
											<div class="cal-icon">
												<input class="form-control floating datetimepicker" type="text" name="keyword3" value="<?php echo $keyword3;?>" id="keyword6" readonly>
											</div>
											<label class="focus-label">To</label>
										</div>

												
								</div>

								

								<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
									<input type="submit" value="Search" class="btn btn-success btn-block">
								</div>    

								<div class="col-md-3"> 
									<a href="<?php echo base_url()?>Invoice/quotation_list" class="btn btn-info"><i class="fa fa-refresh"></i></a> 
								</div> 

							</div> 
				</form>

				<!-- /Search Filter -->



					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								 <!-- <table class="table table-striped custom-table datatable" class="display" style="width:100%"> -->
								 <table id="example" class="display table table-striped custom-table" style="width:100%">
									<thead>
										<tr>
											<th>No</th>
											<th>Company Name</th>
											<th>Email Address</th>
											<th> Contact Number </th>
											<th>Created Date</th>
											<th class="text-right">Action</th>
										</tr>
									</thead>
									<tbody>
									<?php
										$i=1;
										if($qutationData){                             
										foreach($qutationData as $quota)
										{
									?>
										<tr>
											<td><?php echo $i;?></td>
											<td><?php echo $quota->companyname ;?></td>
											<td><?php echo $quota->companyemail ;?></td>
											<td><?php echo $quota->comcontactnumber ;?></td>
											<td><?php 
												echo $invdate = date("d-m-Y", strtotime($quota->quotationdate));?></td>

											<td class="text-center">
											<a  href="<?php echo base_url();?>Invoice/quotation_view/<?php echo $quota->quotationid;?>"  title="View"><i class="fa fa-eye m-r-5"></i></a>
												<a href="<?php echo base_url();?>Invoice/editquotation/<?php echo $quota->quotationid;?>" role="button" title="Edit">
															<i class="fa fa-pencil m-r-5"></i> </a>
												<a  onclick="deletedata(<?php echo $quota->quotationid; ?>)" data-toggle="modal" data-target="#delete_client" title="Delete"><i class="fa fa-trash-o m-r-5"></i> </a>
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
									<h3>Delete Qutation</h3>
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
		title: "List of Company Quotation",
		filename:"List_of_Company_Quotation",
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
				doc.content[1].table.widths = [ '5%',  '20%', '25%', '25%','14%', '14%'];
	         
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

</script>
    </body>
</html>

<script>

$(document).ready(function(){
$('#purpose').on('change', function() {
  if(this.value == 'companyname')
  {
	$("#business1").show();
	$("#business2").hide();
	$("#business3").hide();	
  }
  else if(this.value == 'companyemail')
  {
	$("#business1").show();
	$("#business2").hide();
	$("#business3").hide();

  }
  else if(this.value == 'comcontactnumber')
  {
	$("#business1").show();
	$("#business2").hide();
	$("#business3").hide();

  }
  else if(this.value == 'quotationdate')
  {
	$("#business1").hide();
	$("#business2").show();
	$("#business3").show();

  }
});
});

$('#keyword5').datetimepicker({
				defaultDate: new Date(),
				format: 'DD/MM/YYYY',
				ignoreReadonly: true,					
});

$('#keyword6').datetimepicker({
				defaultDate: new Date(),
				format: 'DD/MM/YYYY',
				ignoreReadonly: true,					
});


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

function deletedata(quotationid){  
			$('#delete_client').modal('show')
				$('#yes_btn').click(function(){
						url="<?php echo base_url();?>"
						$.ajax({
						url: url+'/Invoice/delete_quotation/',
						type: "post",
						data: {quotationid:quotationid} ,
						success: function (response) {             
					// document.location.href = url+'adminmaster/adminlist/';          
					},
					})
				});
		}			

</script>