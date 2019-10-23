<?php 
	 $this->load->view('common/header.php');
	 $this->load->view('common/sidebar.php');
?>



			<!-- Page Wrapper -->



            <div class="page-wrapper">



			<input type="hidden" name="RoleId" value="<?php echo $roleid=$this->session->userdata('RoleId');?>">



				<!-- Page Content -->



                <div class="content container-fluid">



				



					<!-- Page Title -->



					<div class="row">

						<div class="col">

							<h4 class="page-title">List of Employee  </h4>

						</div>	

					</div>



					<!-- /Page Title -->



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



					



					<!-- Search Filter -->



					<form method="post" action="<?php echo base_url();?>Employee">



						<div class="row filter-row">



							<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  

									<div class="form-group form-focus select-focus">

										<select class="select floating" name="option" id="purpose"> 

											<option value=""> -- Select -- </option>

											<option value="companyname">Company Name</option>

											<option value="first_name">Employee Name</option>

											<option value="email">Email Address</option>

											<option value="phone">Contact Number</option>

											<option value="department">Department</option>

											<option value="desgination">Designation</option>

										</select>

									</div>

							</div>



						<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12" >  
									<div class="form-group form-focus box" id='business'>
										<input type="text" name="keyword1" class="form-control floating">
										<label class="focus-label">Search</label>
									</div>

									<div class="form-group form-focus box" id='business3' style="display: none;">
										<input type="text" name="keyword3" class="form-control floating">
										<label class="focus-label">Search</label>
									</div>

									<div class="form-group form-focus box" id='business4' style="display: none;">
										<input type="text" name="keyword4" class="form-control floating">
										<label class="focus-label">Search</label>
									</div>

									<div class="form-group form-focus box" id='business5' style="display: none;">
										<input type="text" name="keyword5" class="form-control floating">
										<label class="focus-label">Search</label>
									</div>

									<div class="form-group form-focus box" id='business6' style="display: none;">
										<input type="text" name="keyword6" class="form-control floating">
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

							</div>

							<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  

								<input type="submit" value="Search" class="btn btn-success btn-block">

							</div>    

							<div class="col-md-3"> 

								<a href="<?php echo base_url()?>Employee" class="btn btn-info"><i class="fa fa-refresh"></i></a> 

							</div> 

						</div> 



					</form>



					



					<!-- Search Filter -->



					



					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">

								 <!-- <table class="table table-striped custom-table datatable" class="display" style="width:100%"> -->

								<table id="example" class="display table table-striped custom-table" style="width:100%">
									<thead>
										<tr>
											<th>No</th>
											<th>Name</th>
											<th>Contact Number</th>
											<th>Email Address</th>
											<th>From Company</th>
											<th>Department</th>
											<th>Designation</th>
											<!-- <th class="text-right">Action</th> -->
										</tr>
									</thead>
									<tbody>
										<?php
											$i=1;
											if($employeeData){                             
											foreach($employeeData as $empData)
											{
										?>
										
										<tr>

											<td><?php echo $i;?></td>
											<td>
													<span  class="table-avatar">
													<?php 
													if($empData->ProfileImage!='')
													{
														?>
														<a href="<?php echo base_url();?>Employee/profile/<?php echo $empData->emp_id;?>" title="show employee profile" class="avatar"><img src="http://payroll.bluegreytech.co.in/hr/upload/emp/<?php echo $empData->ProfileImage;?>"></a>
														<a href="<?php echo base_url();?>Employee/profile/<?php echo $empData->emp_id;?>" title="show employee profile"><?php echo $empData->first_name;?></a>
														<?php
													}
													else
													{
														?>
														<a href="<?php echo base_url();?>Employee/profile/<?php echo $empData->emp_id;?>" title="show employee profile" class="avatar"><img src="<?php echo base_url();?>upload/default/avtar.jpg"></a>
														<a href="<?php echo base_url();?>Employee/profile/<?php echo $empData->emp_id;?>" title="show employee profile"><?php echo $empData->first_name;?></a>
														<?php
													}
													?>
													</h2>
											</td>
											<td><?php echo $empData->phone ;?></td>
											<td><?php echo $empData->email ;?></td>
											<td><?php echo $empData->companyname ;?></td>
											<td><?php echo $empData->department ;?></td>
											<td><?php echo $empData->desgination ;?></td>

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



				<div class="modal custom-modal fade" id="delete_employee" role="dialog">



					<div class="modal-dialog modal-dialog-centered">



						<div class="modal-content">



							<div class="modal-body">



								<div class="form-header">



									<h3>Delete Employee</h3>



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
		columns: [0,1,2,3,4,5,6]
		}
	 },
	 {
		extend: 'excelHtml5',
		text:'<i class="fa fa-file-excel-o"></i> Excel',
		exportOptions: {
		columns: [0,1,2,3,4,5,6]
		}
	 },
	 {
		extend: 'csvHtml5',
		download: 'open',
	    text:'<i class="fa fa-file-text-o"></i> CSV',
		exportOptions: {
		columns: [0,1,2,3,4,5,6]
		},
		
	 },
	 {
		extend: 'pdfHtml5',
		text:'<i class="fa fa-file-pdf-o"></i> PDF',
		title: "List of Hr",
		filename:"List_of_Employee",
		orientation: 'landscape', 
		pageSize: 'A4',		
		exportOptions: {
		columns: [0,1,2,3,4,5,6],
		
		},
		
	        customize : function(doc){ 
				doc.content[1].margin = [ 50, 0, 100, 0 ];
				doc.defaultStyle.fontSize = 10; //2, 3, 4,etc
	            doc.styles.tableHeader.fontSize = 12; //2, 3, 4, etc
				doc.defaultStyle.alignment = 'center';
				doc.styles.tableHeader.alignment = 'center';
				doc.content[1].table.widths = [ '3%', '12%','15%','25%','20%','17%','15%'];
	         
	       },
	 },
	  {
		extend: 'print',
		orientation: 'landscape', 
		pageSize: 'A4',
		text:'<i class="fa fa-print"></i> Print',
		exportOptions: {
			columns: [0,1,2,3,4,5,6],
			 		
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

  if(this.value == 'first_name')
  {
	$("#business").show();
	$("#business2").hide();
	$("#business3").hide();
	$("#business4").hide();
	$("#business5").hide();
	$("#business6").hide();
  }
  else if(this.value == 'companyname')
  {
	$("#business").hide();
	$("#business2").show();
	$("#business3").hide();
	$("#business4").hide();
	$("#business5").hide();
	$("#business6").hide();
  }
  else if(this.value == 'email')
  {
	$("#business").hide();
	$("#business2").hide();
	$("#business3").show();
	$("#business4").hide();
	$("#business5").hide();
	$("#business6").hide();
  }
  else if(this.value == 'phone')
  {
	$("#business").hide();
	$("#business2").hide();
	$("#business3").hide();
	$("#business4").show();
	$("#business5").hide();
	$("#business6").hide();
  }
  else if(this.value == 'department')
  {
	$("#business").hide();
	$("#business2").hide();
	$("#business3").hide();
	$("#business4").hide();
	$("#business5").show();
	$("#business6").hide();
  }
  else if(this.value == 'desgination')
  {
	$("#business").hide();
	$("#business2").hide();
	$("#business3").hide();
	$("#business4").hide();
	$("#business5").hide();
	$("#business6").show();
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







function deletedata(emp_id){  

			$('#delete_employee').modal('show')

				$('#yes_btn').click(function(){

						Url="<?php echo base_url();?>"

						$.ajax({

						url: Url+'/Employee/delete_employee/',

						type: "post",

						data: {emp_id:emp_id} ,

						success: function (response) {             

					// document.location.href = url+'adminmaster/adminlist/';          

					},



					})



				});



		}			







</script>