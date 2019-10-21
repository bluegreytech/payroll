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

							<h4 class="page-title">List of Company Notification</h4>

							</div>

							<div class="col-sm-7 col-7 text-right m-b-30">

							<a href="<?php echo base_url();?>Company/Sendnotification" class="btn add-btn"><i class="fa fa-plus">						
									</i> Add Company Notification</a>
							</div>

						</div>



					



					<!-- /Page Title -->





						<!-- Search Filter -->

						<form method="post" action="<?php echo base_url();?>Company/companynotification_list">

						<div class="row filter-row">

						

							<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  

									<div class="form-group form-focus select-focus">

										<select class="select floating" name="option" id="purpose"> 

											<option value=""> -- Select -- </option>

											<!-- <option value="companytype">Company Type</option> -->

											<option value="companyname">Company Name</option>

											<option value="comemailaddress">Email Address</option>

											<option value="comcontactnumber">Contact Number</option>

											<option value="emailverifystatus">Verification Status</option>

										</select>

										<!-- <label class="focus-label">Role</label> -->

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

							</div>

							<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  

								<input type="submit" value="Search" class="btn btn-success btn-block">

							</div> 

							<div class="col-md-3"> 

								<a href="<?php echo base_url()?>Company/companynotification_list" class="btn btn-info"><i class="fa fa-refresh"></i></a> 

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

											<th>Notification Title</th>

											<th>Notification Description</th>

											<th>Notification End Date</th>

											<th class="text-right">Action</th>

										</tr>

									</thead>

									<tbody>

									<?php

										$i=1;

										if($notificationData){                             

										foreach($notificationData as $notifi)

										{

									?>

										<tr>

											<td><?php echo $i;?></td>
											<td><?php echo $notifi->companyname ;?></td>
											<td><?php echo $notifi->Documenttitle ;?></td>
											<td><?php  $rr=$notifi->Notificationdescription ; echo substr("$rr",0,60);?>...</td>
											<td><?php  if($notifi->Enddate==null){ echo "Notification Expired";}else{echo $notifi->Enddate;} ;?></td>
											<td class="text-center">

												<a href="<?php echo base_url();?>Company/editcompanynotification/<?php echo $notifi->Companynotificationid;?>" role="button" title="Edit">
														<i class="fa fa-pencil m-r-5"></i> </a>
												<a  onclick="deletedata(<?php echo $notifi->Companynotificationid; ?>)" data-toggle="modal" data-target="#delete_client" title="Delete"><i class="fa fa-trash-o m-r-5"></i> </a>
												<?php 
												if($notifi->Enddate!=NULL)
												{
													?>
														<a  role="button"  title="Notificaion Available"><i class="fa fa-bell-o text-success" aria-hidden="true"></i></a>
													<?php
												}
												else
												{
													?>
														 <a  role="button"  title="Notification Expired"><i class="fa fa-bell-o text-danger" aria-hidden="true"></i></a>
													<?php
												}
												?>
												
												
												<!-- <a  href="<?php //echo base_url();?>Company/company_notification_expired/<?php //echo $comp->Companynotificationid;?>" role="button"  title="Notification">
												<i class="fa fa-bell-o" aria-hidden="true"></i></a> -->
												<!--<a  href="<?php //echo base_url();?>Leave/leavelist" role="button" title="Show Leaves Types">
														<i class="fa fa-calendar-check-o" aria-hidden="true"></i></a>				 -->
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
		title: "List of Company Notification",
		filename:"List_of_Company_Notification",
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
				doc.content[1].table.widths = [ '5%',  '15%', '20%', '40%','20%'];
	         
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



$(document).ready(function(){

    $('#purpose').on('change', function() {

      if(this.value == 'companyname')

      {

        $("#business2").show();

		$("#business").hide();

		$(".box").hide();

      }

      else

      {

        $("#business2").hide();

		$("#business").show();

		$(".box2").hide();

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







function deletedata(Companynotificationid){  
			$('#delete_client').modal('show')
				$('#yes_btn').click(function(){
						Url="<?php echo base_url();?>"
						$.ajax({
						url: Url+'/Company/delete_companynotification/',
						type: "post",
						data: {Companynotificationid:Companynotificationid} ,
						success: function (response) {                     
					},
					})
				});
		}			
</script>