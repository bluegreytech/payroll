<?php 
	 $this->load->view('common/header');
	 $this->load->view('common/sidebar');
?>
<style type="text/css">
	table.table td .add {
		display: none;
	}
	table.table td .comadd {
		display: none;
	}
</style>
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
								<!-- <button type="button" class="btn btn-primary add-new pull-right" data-toggle="modal" data-target="#add_deductions"><i class="fa fa-plus"></i> Add Deductions</button> -->
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
												foreach($result as $row)
												{
												if($row->compliancetypeid=='1'){
                                               
											?>
												<tr>
													<td><?php echo $row->compliancename;?></td>
													<td><?php echo $row->compliancepercentage.' '.'%'; ?></td>
													<td>
														<?php if($row->is_editable=='0'){ ?>
                                                        <a class="comadd" title="Add" data-toggle="tooltip" onclick="editdata('<?php echo $row->complianceid; ?>','<?php echo $row->compliancepercentage; ?>')"><i class="fa fa-plus" style="color: red;"></i></a>&nbsp;
														<a class="comedit" href="javascript:void(0)"   title="Edit" data-toggle="tooltip"><i class="fa fa-pencil "></i></a>&nbsp;
														<?php } ?>
														 	
													</td>
												</tr>
											<?php 
											} } ?>
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
										<table class="table table-striped custom-table" id="tablearning">
											<thead>
												<tr>
													<th>Type of Compliance</th>
													<th>Percentage of Compliance</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
											<?php  
												foreach($result as $row)
												 { 
												if($row->compliancetypeid=='2'){ 
										    	?>											
												<tr>
													<td><?php echo $row->compliancename;?></td>
													<td><?php echo $row->compliancepercentage.' '.'%';?></td>
													<td>
													  <a  class="add" title="Add" data-toggle="tooltip" onclick="editdata('<?php echo $row->complianceid; ?>','<?php echo $row->compliancepercentage; ?>')"><i class="fa fa-plus" style="color: red;"></i></a>&nbsp;
														<a class="edit" href="javascript:void(0)"   title="Edit" data-toggle="tooltip"><i class="fa fa-pencil "></i></a>&nbsp;			
														<a class="delete" data-id="<?php echo $row->complianceid; ?>"  href="javascript:void(0)"  data-toggle="tooltip"><i class="fa fa-trash-o fa-lg"></i></a>
													</td>

												</tr>
											<?php } } ?>
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
		<form method="post" id="form_deduction" action="<?php echo base_url();?>company/addcompanycompliance">
		<input type="hidden" class="form-control" name="compliancetypeid" id="compliancetypeid" value="1">									
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

<div class="modal custom-modal fade" id="delete_approve" role="dialog">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-body">
					<div class="form-header">
						<h3>Delete </h3>
						<p>Are you sure you want to delete this record?</p>
					</div>
					<div class="modal-btn delete-action">
						<div class="row">
							<div class="col-6">
								<a href="javascript:void(0);"  id="yes_btn" class="btn btn-primary continue-btn">Delete</a>
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
	$('[data-toggle="tooltip"]').tooltip();
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
        $(this).parents("tr").find("td:nth-child(2)").each(function(){
			$(this).html('<input type="text" name="percentageofcompliance"  id="percentageofcompliance" class="form-control" value="' + $(this).text() + '">');
		});		
		$(this).parents("tr").find(".comadd, .comedit").toggle();
		$(".add-new").attr("disabled", "disabled");
    });
	// Delete row on delete button click
	$(document).on("click", ".delete", function(){
       // $(this).parents("tr").remove();
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
        $(this).parents("tr").find("td:nth-child(2)").each(function(){
			$(this).html('<input type="text" name="percentageofcompliance"  id="percentageofcompliance" class="form-control" value="' + $(this).text() + '">');
		});		
		$(this).parents("tr").find(".add, .edit").toggle();		
		$(".add-new").attr("disabled", "disabled");
    });
	// Delete row on delete button click
	$(document).on("click", ".delete", function(){
      // $(this).parents("tr").remove();
 		 var el = this;
     // alert($(this).attr("data-id"));
      var id=$(this).attr("data-id");
      alert(id);
      $('#delete_approve').modal('show');
   
        $('#yes_btn').click(function(){
               	
                url="<?php echo base_url();?>"
                $.ajax({
                url: url+"company/deletedata/",
                type: "post",
                data: {id:id} ,
                success: function (response) {
                    if(response=='true'){                    	  
                     	$('#delete_approve').modal('toggle');
						$(el).closest('tr').fadeOut(800,function(){
						$(el).remove();
						});
                    	
                    }
                  
                    // document.location.href = url+'company/company_setting';       
                   
                  // $(this).parents("tr").remove();
            },
            error: function(jqXHR, textStatus, errorThrown) {
                 console.log(textStatus, errorThrown);
            }
            })
           

        });
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
	
	
function editdata(id){  
   
         var compliancevalue=$('#percentageofcompliance').val();
        
			url="<?php echo base_url();?>"
			$.ajax({
			url: url+"company/complianceedit/",
			type: "post",
			data: {id:id,compliancevalue:compliancevalue},
			success: function (response) { 
			$("#tablearning").load(); 
			},		
            error: function(jqXHR, textStatus, errorThrown) {
                 console.log(textStatus, errorThrown);
            }
            })
}		        
</script>
