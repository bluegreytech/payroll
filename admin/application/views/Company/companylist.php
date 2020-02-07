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

							<h4 class="page-title">List of Company   </h4>

							</div>

							<div class="col-sm-7 col-7 text-right m-b-30">
                                     <?php if((isset($this->adminRights['Company']) && $this->adminRights['Company']->rights_add==1) || checkSuperAdmin()){ ?>
							<a href="<?php echo base_url();?>Company/companyadd" class="btn add-btn"><i class="fa fa-plus"></i> Add Company</a>
								<?php
							}
							?>

							</div>

						</div>



					



					<!-- /Page Title -->





						<!-- Search Filter -->

						<form method="post" action="<?php echo base_url();?>Company/searchcompany">

						<div class="row filter-row">

						

							<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  

									<div class="form-group form-focus select-focus">

										<select class="select floating" name="option" id="purpose"> 

											<option value=""> -- Select -- </option>

											<option value="companytype" <?php if($option=='companytype'){echo 'selected';} ?>>Company Type</option>

											<option value="companyname" <?php if($option=='companyname'){echo 'selected';} ?>>Company Name</option>

											<option value="comemailaddress" <?php if($option=='comemailaddress'){echo 'selected';} ?>>Email Address</option>

											<option value="comcontactnumber" <?php if($option=='comcontactnumber'){echo 'selected';} ?>>Contact Number</option>

											<option value="emailverifystatus" <?php if($option=='emailverifystatus'){echo 'selected';} ?>>Verification Status</option>

										</select>

										<!-- <label class="focus-label">Role</label> -->

									</div>

							</div>

							<div class="col-sm-6 col-md-3 col-lg-3 col-xl-3 col-12" >  

									<div class="form-group form-focus box" id='business1'>
										<input type="text" name="keyword1" value="<?php echo $keyword1;?>" class="form-control floating">
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

								<a href="<?php echo base_url()?>Company" class="btn btn-info"><i class="fa fa-refresh"></i></a> 

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

											<th>Company Name</th>

											<th>Contact Number</th>

											<th>Company Type</th>

											<th>Email Address </th>

											<th>Verification Status </th>

											<th class="text-right">Action</th>

										</tr>

									</thead>

									<tbody>

									<?php

										$i=1;

										if($companyData){                             

										foreach($companyData as $comp)

										{

									?>

										<tr>

										<td><?php echo $i;?></td>

										<td>

											<h2 class="table-avatar">

											<?php 

											if($comp->companyimage!='')

											{

												?>

												<a href="<?php echo base_url();?>Company/profile/<?php echo $comp->companyid;?>" title="show company profile" class="avatar"><img src="<?php echo base_url();?>upload/company/<?php echo $comp->companyimage;?>"></a>

												<a href="<?php echo base_url();?>Company/profile/<?php echo $comp->companyid;?>" title="show company profile"><?php echo $comp->companyname ;?> </a>

												<?php



											}

											else

											{

												?>

												<a href="<?php echo base_url();?>Company/profile/<?php echo $comp->companyid;?>" title="show company profile" class="avatar"><img src="<?php echo base_url();?>upload/default/avtar.jpg" ></a>

												<a href="<?php echo base_url();?>Company/profile/<?php echo $comp->companyid;?>" title="show company profile"><?php echo $comp->companyname ;?> </a>

												<?php

											}

											?>

											</h2>

											</td>



										

										<td><?php echo $comp->comcontactnumber ;?></td>

										<td><?php echo $comp->companytype ;?></td>

										<td><?php echo $comp->comemailaddress ;?></td>

										

										<td>	

												<div class="action-label">

												<a class="btn btn-white btn-sm btn-rounded">

												<?php if($comp->emailverifystatus=='Verify')

												{?>

													<i class="fa fa-dot-circle-o 

												<?php if($comp->emailverifystatus=='Verify'){ echo "text-success";}?>"></i>Verify

												<?php

												}

												else

												{

													?>

													<i class="fa fa-dot-circle-o 

												<?php if($comp->emailverifystatus=='Pending'){ echo "text-danger";}?>"></i>Pending

												<?php



												}

												?>

												</a>

												</div>

											</td>



										<td class="text-center">
                                                 <?php if((isset($this->adminRights['Company']) && $this->adminRights['Company']->rights_update==1) || checkSuperAdmin()){ ?>
											<a href="<?php echo base_url();?>Company/editcompany/<?php echo $comp->companyid;?>" role="button" title="Edit">

													<i class="fa fa-pencil m-r-5"></i> </a>
													<?php
												}
												?>
                                                 <?php if((isset($this->adminRights['Company']) && $this->adminRights['Company']->rights_delete==1) || checkSuperAdmin()){ ?>
											<a  onclick="deletedata(<?php echo $comp->companyid; ?>)" data-toggle="modal" data-target="#delete_client" title="Delete"><i class="fa fa-trash-o m-r-5"></i> </a>
                                           <?php
												}
												?>
												  <?php if((isset($this->adminRights['Company Notification']) && $this->adminRights['Company Notification']->rights_view==1) || checkSuperAdmin()){ ?>
										    <a  href="<?php echo base_url();?>Company/companynotification_list" role="button"  title="Notification List">
											<i class="fa fa-bell-o" aria-hidden="true"></i></a>
											<?php
										}
										?>
                                          
											<a  href="<?php echo base_url();?>Leave/leavelist" role="button" title="Show Leaves Types">
												<i class="fa fa-calendar-check-o" aria-hidden="true"></i></a>
											<a  href="<?php echo base_url();?>Company/company_dashboard/<?php echo $comp->companyid;?>" role="button" title="Show Company Dashboard">
												<i class="fa fa-tachometer" aria-hidden="true"></i></a>	
														

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
		title: "List of Company",
		filename:"List_of_Company",
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
				doc.content[1].table.widths = [ '5%',  '25%', '10%', '25%','25%', '14%'];
	         
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
        $("#business1").hide();
		$("#business2").show();
	
      }
      else if(this.value == 'companytype')
      {
        $("#business1").show();
		$("#business2").hide();
		
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