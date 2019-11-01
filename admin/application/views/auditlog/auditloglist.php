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

							<h4 class="page-title">List of Audit Log   </h4>

							</div>

							<div class="col-sm-7 col-7 text-right m-b-30">

							<!-- <a href="<?php //echo base_url();?>Company/companyadd" class="btn add-btn"><i class="fa fa-plus">
							</i> Add Company</a> -->

							</div>

						</div>



					



					<!-- /Page Title -->




					<!-- Search Filter -->

						<form method="post" action="<?php echo base_url();?>Auditlog">
							<div class="row filter-row">



								<div class="col-sm-6 col-md-3 col-lg-3 col-xl-3 col-12">  

										<div class="form-group form-focus select-focus">

											<select class="select floating" name="option" id="purpose"> 
												<option value=""> -- Select -- </option>
												<option value="FirstName">Created By</option>
												<option value="Module">Module</option>
												<option value="Activity">Activity</option>
												<option value="CreatedOn">Created Date From to To</option>
											</select>

										</div>

								</div>



								<div class="col-sm-6 col-md-3 col-lg-3 col-xl-3 col-12">  

										<div class="form-group form-focus box" id='business1'>
											<input type="text" name="keyword1" class="form-control floating">
											<label class="focus-label">Search</label>
										</div>




										 <div class="form-group form-focus" id='business2' style="display: none;">
											<div class="cal-icon">
												<input class="form-control floating datetimepicker" type="text" name="keyword2" id="invoicedate" readonly>
											</div>
											<label class="focus-label">From</label>
										</div>
 
								

										<div class="form-group form-focus" id='business3' style="display: none;">
											<div class="cal-icon">
												<input class="form-control floating datetimepicker" type="text" name="keyword3" id="invoicedate2" readonly>
											</div>
											<label class="focus-label">To</label>
										</div>

								</div>

								

								<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  

									<input type="submit" value="Search" class="btn btn-success btn-block">

								</div>    

								<div class="col-md-3"> 

									<a href="<?php echo base_url()?>Auditlog" class="btn btn-info"><i class="fa fa-refresh"></i></a> 

								</div> 

							</div> 
						</form>

					<!-- /Search Filter -->

					
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								 <table id="example" class="display table table-striped custom-table" style="width:100%">
									<thead>
										<tr>
											<th>No</th>
											<th>Created By</th>
											<th>Module </th>
											<th>Activity </th>
											<th>Created Date </th>
										</tr>
									</thead>
									<tbody>
									<?php
										$i=1;
										if($auditlogData){                             
										foreach($auditlogData as $logs)
										{
									?>
										<tr>
											<td><?php echo $i;?></td>
											<td><?php echo $logs->FirstName.' '.$logs->LastName;?></td>
											<td><?php echo $logs->Module;?></td>
											<td><?php echo $logs->Activity;?></td>
											<td>
												<?php echo $invdate = date("d-m-Y H:i:s", strtotime($logs->CreatedOn));?>
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



									<h3>Delete Company</h3>



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
		columns: [0,1,2,3,4]
		}
	 },
	 {
		extend: 'excelHtml5',
		text:'<i class="fa fa-file-excel-o"></i> Excel',
		exportOptions: {
		columns: [0,1,2,3,4]
		}
	 },
	 {
		extend: 'csvHtml5',
		download: 'open',
	    text:'<i class="fa fa-file-text-o"></i> CSV',
		exportOptions: {
		columns: [0,1,2,3,4]
		},
		
	 },
	 {
		extend: 'pdfHtml5',
		text:'<i class="fa fa-file-pdf-o"></i> PDF',
		title: "List of Audit Log",
		filename:"List_of_Audit_Log",
		orientation: 'landscape', 
		pageSize: 'A4',		
		exportOptions: {
		columns: [0,1,2,3,4],
		
		},
		
	        customize : function(doc){ 
				doc.content[1].margin = [ 50, 0, 100, 0 ];
				doc.defaultStyle.fontSize = 10; //2, 3, 4,etc
	            doc.styles.tableHeader.fontSize = 12; //2, 3, 4, etc
				doc.defaultStyle.alignment = 'center';
				doc.styles.tableHeader.alignment = 'center';
				doc.content[1].table.widths = [ '5%',  '25%', '10%', '25%','25%'];
	         
	       },
	 },
	  {
		extend: 'print',
		orientation: 'landscape', 
		pageSize: 'A4',
		text:'<i class="fa fa-print"></i> Print',
		exportOptions: {
			columns: [0,1,2,3,4],
			 		
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

$(document).ready(function()
{
$('#purpose').on('change', function() 
{
  if(this.value == 'FirstName')
  {
	$("#business1").show();
	$("#business2").hide();
	$("#business3").hide();

  }
  else if(this.value == 'Module')
  {
	$("#business1").show();
	$("#business2").hide();
	$("#business3").hide();
  }
  else if(this.value == 'Activity')
  {
	$("#business1").show();
	$("#business2").hide();
	$("#business3").hide();
  }
  else if(this.value == 'CreatedOn')
  {
	$("#business1").hide();
	$("#business2").show();
	$("#business3").show();
  }
});

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







function deletedata(companyid){  
			$('#delete_client').modal('show')
				$('#yes_btn').click(function(){
						Url="<?php echo base_url();?>"
						$.ajax({
						url: Url+'/Company/delete_company/',
						type: "post",
						data: {companyid:companyid} ,
						success: function (response) {             
					// document.location.href = url+'adminmaster/adminlist/';          
					},
					})
				});
		}			
</script>