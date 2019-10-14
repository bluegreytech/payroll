﻿<?php 
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

				<form method="post" action="<?php echo base_url();?>Invoice/quotation_list">
							<div class="row filter-row">



								<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  

										<div class="form-group form-focus select-focus">

											<select class="select floating" name="option" id="purpose"> 
												<option value=""> -- Select -- </option>
												<option value="companytype">Company type</option>
												<option value="companyname">Company Name</option>
												<option value="companyemail">Email Address</option>
												<option value="comcontactnumber">Contact Number</option>
												<option value="quotationdate">Date From to To</option>
											</select>

										</div>

								</div>



								<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  

										<div class="form-group form-focus box" id='business'>
											<input type="text" name="keyword2" class="form-control floating">
											<label class="focus-label">Search</label>
										</div>

										 <div class="form-group form-focus box" id='business5' style="display: none;">
											<input type="text" name="keyword3" class="form-control floating">
											<label class="focus-label">Search</label>
										</div>

										<div class="form-group form-focus box" id='business6' style="display: none;">
											<input type="text" name="keyword4" class="form-control floating">
											<label class="focus-label">Search</label>
										</div>

										<div class="form-group form-focus box2" id='business2' style="display: none;">
											<div class="form-group">
												<select class="form-control" name="keyword"> 
													<option desabled value="">Please select company type</option>
													<?php
													if($companytypeData){
														foreach($companytypeData as $comp)
														{
													?>
														<option value="<?php echo $comp->companytype; ?>"><?php echo $comp->companytype;?></option>
													<?php
													}}
													?>
												</select>
											</div>
										</div>


										<div class="form-group form-focus" id='business3' style="display: none;">
											<div class="cal-icon">
												<input class="form-control floating datetimepicker" type="text" name="keyword5" id="keyword5" readonly>
											</div>
											<label class="focus-label">From</label>
										</div>
 
								
										<div class="form-group form-focus" id='business4' style="display: none;">
											<div class="cal-icon">
												<input class="form-control floating datetimepicker" type="text" name="keyword6" id="keyword6" readonly>
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
								<!-- <table class="display" style="width:100%" id="example"> -->
								 <table class="table table-striped custom-table datatable" class="display" style="width:100%">
									<thead>
										<tr>
											<th>No</th>
											<th>Company Type</th>
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
											<td><?php echo $quota->companytype ;?></td>
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
    </body>
</html>

<script>

$(document).ready(function(){
$('#purpose').on('change', function() {
  if(this.value == 'companytype')
  {
	$("#business2").show();
	$("#business").hide();
	$("#business3").hide();
	$("#business4").hide();
	$("#business5").hide();
	$("#business6").hide();
  }
  else if(this.value == 'companyname')
  {
	$("#business").show();
	$("#business2").hide();
	$("#business3").hide();
	$("#business4").hide();
	$("#business5").hide();
	$("#business6").hide();
  }
  else if(this.value == 'companyemail')
  {
	$("#business").hide();
	$("#business2").hide();
	$("#business3").hide();
	$("#business4").hide();
	$("#business5").show();
	$("#business6").hide();
  }
  else if(this.value == 'comcontactnumber')
  {
	$("#business").hide();
	$("#business2").hide();
	$("#business3").hide();
	$("#business4").hide();
	$("#business5").hide();
	$("#business6").show();
  }
  else if(this.value == 'quotationdate')
  {
	$("#business").hide();
	$("#business2").hide();
	$("#business3").show();
	$("#business4").show();
	$("#business5").hide();
	$("#business6").hide();
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