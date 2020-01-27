<?php 
	 $this->load->view('common/header');
	 $this->load->view('common/sidebar');
?>
			<!-- Page Wrapper -->
 <div class="page-wrapper">			
   <div class="content container-fluid">
		<div class="row">
			<div class="col-md-12">
				<?php if(($this->session->flashdata('error'))){ ?>
				<div class="alert alert-danger" id="errorMessage">
				<strong><?php echo $this->session->flashdata('error'); ?></strong> 
				</div>
				<?php } ?>
				<?php if(($this->session->flashdata('success'))){ ?>
				<div class="alert alert-success" id="successMessage">
				<strong> <?php echo $this->session->flashdata('success'); ?></strong> 
				</div>
				<?php } ?>
				<h4 class="page-title">Company Setting</h4>
				<div class="card-box mb-0">
					<div class="row">
						<div class="col-md-12">
							<form method="post" id="form_valid" action="<?php echo base_url();?>home/change_password/">
								<div class="form-group">
									<label>Company Name</label>
									<input type="text" class="form-control" name="old_password"   placeholder="Company name" value="<?php echo $companyname; ?>" readonly>
								</div>
								<div class="form-group">
									<label>Company Type</label>
									<?php $companytypename=get_companytype_name($companytypeid);?>
									<input type="text" class="form-control" name="old_password"   placeholder="Company name" value="<?php echo $companytypename; ?>" readonly>
								</div>
								<div class="form-group">
									<label>Company EmailAddress</label>
									<input type="text" class="form-control" name="password" id="NewPassword"  placeholder="Company Address" value="<?php echo $comemailaddress; ?>" readonly >
								</div>
								<div class="form-group">
									<label>Company Contact</label>
									<input type="text" class="form-control" name="cpassword"  placeholder="Company Contact" value="<?php echo $comcontactnumber; ?>" readonly>
								</div>
								<div class="form-group">
									<label>Company GST Number</label>
									<input type="text" class="form-control" name="cpassword"   placeholder="Company GST Number" value="<?php echo $gstnumber; ?>" readonly> 
								</div>
								<div class="form-group">
									<label>Company Digital signature</label>
									<input type="text" class="form-control" name="cpassword"   placeholder="Company Digital signature" value="<?php echo date('d/m/Y',strtotime($digitalsignaturedate)); ?>" readonly> 
								</div>
								<div class="submit-section">
										<input type="button" value="Submit" class="btn btn-primary submit-btn" readonly>
								</div>
							</form>
						</div>
					</div>
				</div>
				<br>
				<div class="card-box mb-0">
					<div class="row">
						

						<div class="col-md-12">
							<h4 class="page-title">Deductions 
								<button type="button" class="btn btn-primary add-new pull-right" data-toggle="modal" data-target="#add_deductions"><i class="fa fa-plus"></i> Add Deductions</button>
							</h4>
							
							  <div class="table-responsive m-t-15">
										<table class="table table-striped custom-table">
											<thead>
												<tr>
													<th>Type of Compliance</th>
													<th>Percentage of Compliance</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
											<?php       
												foreach($com_compliances as $compdata)
												 {
											?>
												<tr>
													<td><?php echo $compdata['compliancename'];?></td>
													<td><?php echo $compdata['compliancepercentage'].' '.'%'; ?>		
													</td>
													<td>
														<i class="fa fa-pencil comedit" style="display:block;"></i>
														<i class="fa fa-times comadd " style="display:none; color: red;"></i>
													</td>
												</tr>
											<?php } ?>
											</tbody>
										</table>
									</div>
									
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
								<hr>
								<h4 class="page-title">Earnings
								<button type="button" class="btn btn-primary add-new pull-right" data-toggle="modal" data-target="#add_earnings" ><i class="fa fa-plus"></i> Add Earning</button>
								</h4>
							  <div class="table-responsive m-t-15">
										<table class="table table-striped custom-table">
											<thead>
												<tr>
													<th>Type of Compliance</th>
													<th>Percentage of Compliance</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
											<?php  
												foreach($com_compliancesdeduction as $compdeducdata)
												 { ?>											
												<tr>
													<td><?php echo $compdeducdata['compliancename'];?></td>
													<td><?php echo $compdeducdata['compliancepercentage'].' '.'%';?>													
													</td>
													<td>
														<i class="fa fa-pencil edit" style="display:block"></i>
														<i class="fa fa-times add" style="display:none;color: red;"></i>
													</td>
												</tr>
											<?php
												}
											?>
											</tbody>
										</table>
									</div>
						</div>
					</div>
				</div>


				</div>
			</div>
		</div>
	</div>
<!-- /Page Wrapper -->
</div>
		<!-- /Main Wrapper -->

			<!-- Add Earning Modal -->
<div id="add_earnings" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-md" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add Earning</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="post" id="form_earnings" action="<?php echo base_url();?>company/addcompanycompliance">
				<input type="hidden" class="form-control" name="compliancetypeid" id="compliancetypeid" value="2">										
					<div class="row"> 
						<div class="col-sm-6"> 
							<div class="form-group">
								<label>Compliance Name</label>	
								<input class="form-control" type="text" name="compliancename" Placeholder="Compliance Name"  id="compliancename">
							</div>
						</div>
						<div class="col-sm-6">  
							<div class="form-group">
								<label>Percentage of Compliance</label>
								<input class="form-control" type="text" name="percentageofcompliance" Placeholder="Percentage of Compliance"  id="percentageofcompliance">
							</div> 
						</div>
					</div>
					<div class="submit-section">
						<hr>
						<input type="submit" name="submit" class="btn btn-primary account-btn" value="Add">
					</div>
				</form>
			</div>
		</div>
	</div>
</div> 
           <!----END Earning Model--->
           <!-- Add Earning Modal -->
				<div id="add_deductions" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-md" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add Deductions</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form method="post" id="form_deduction" action="<?php echo base_url();?>home/addcompanycompliance">
								<input type="hidden" class="form-control" name="compliancetypeid" id="compliancetypeid" value="1">									
									<div class="row"> 
										<div class="col-sm-6"> 
											<div class="form-group">
												<label>Type of Compliance</label>	
												<input class="form-control" type="text" name="typeofcompliance" Placeholder="Type of Compliance" minlength="2" maxlength="50" id="typeofcompliance">
											</div>
										</div>
										<div class="col-sm-6">  
											<div class="form-group">
												<label>Percentage of Compliance</label>
												<input class="form-control" type="text" name="percentageofcompliance" Placeholder="Percentage of Compliance" minlength="2" maxlength="50" id="percentageofcompliance">
											</div> 
										</div>
									</div>
									<div class="submit-section">
										<hr>
										<input type="submit" name="submit" class="btn btn-primary account-btn" value="Add">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div> 
           <!----END Earning Model--->
		<!-- jQuery -->
<?php  $this->load->view('common/footer'); ?>
<script>
	$(function() { 
    setTimeout(function() {
  $('#errorMessage').fadeOut('fast');
}, 5000);  
});

$(function() { 
    setTimeout(function() {
  $('#successMessage').fadeOut('fast');
}, 5000);  
});

$(function() { 
    setTimeout(function() {
  $('#warningMessage').fadeOut('fast');
}, 5000);  
});
$(document).ready(function(){
	$(document).on("click", ".comadd", function(){
		var empty = false;
		var input = $(this).parents("tr").find('input[type="text"]');
        input.each(function(){
			if(!$(this).val()){
				$(this).addClass("error");
				empty = true;
			} else{
                $(this).removeClass("error");
            }
		});
		$(this).parents("tr").find(".error").first().focus();
		if(!empty){
			input.each(function(){
				$(this).parent("td").html($(this).val());
			});			
			$(this).parents("tr").find(".comadd, .comedit").toggle();
			$(".add-new").removeAttr("disabled");
		}		
    });
	// Edit row on edit button click
	$(document).on("click", ".comedit", function(){		
        $(this).parents("tr").find("td:not(:last-child)").each(function(){
			$(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
		});		
		$(this).parents("tr").find(".comadd, .comedit").toggle();
		$(".add-new").attr("disabled", "disabled");
    });
	// Delete row on delete button click
	$(document).on("click", ".delete", function(){
        $(this).parents("tr").remove();
		$(".add-new").removeAttr("disabled");
    });
		
});	


  $(document).ready(function(){
	$(document).on("click", ".add", function(){
		var empty = false;
		var input = $(this).parents("tr").find('input[type="text"]');
        input.each(function(){
			if(!$(this).val()){
				$(this).addClass("error");
				empty = true;
			} else{
                $(this).removeClass("error");
            }
		});
		$(this).parents("tr").find(".error").first().focus();
		if(!empty){
			input.each(function(){
				$(this).parent("td").html($(this).val());
			});			
			$(this).parents("tr").find(".add, .edit").toggle();
			$(".add-new").removeAttr("disabled");
		}		
    });
	// Edit row on edit button click
	$(document).on("click", ".edit", function(){		
        $(this).parents("tr").find("td:not(:last-child)").each(function(){
			$(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
		});		
		$(this).parents("tr").find(".add, .edit").toggle();
		$(".add-new").attr("disabled", "disabled");
    });
	// Delete row on delete button click
	$(document).on("click", ".delete", function(){
        $(this).parents("tr").remove();
		$(".add-new").removeAttr("disabled");
    });
		
		$("#form_deduction").validate(
		{
					rules: {
						'typeofcompliance':{
							required: true,
						},
						'percentageofcompliance':{
							required: true,
						},
					},
				messages:{
												
				}
				
		});
		$("#form_earnings").validate(
		{
				rules:{
					'compliancename':{
						required: true,
					},
					'percentageofcompliance':{
						required: true,
					},
				},
				messages:{
												
				}
				
		});
 });
	

			        
</script>
