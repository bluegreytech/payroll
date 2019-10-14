<?php 
	 $this->load->view('common/header.php');
	 $this->load->view('common/sidebar.php');
?>	

<script>

	function m1()
	{
		var sum = 0;
		var inps = document.getElementsByName('quotationrate[]');
		for (var i = 0; i <inps.length; i++)
		{
			var inp=inps[i]; 
			sum += +inp.value;
			//   alert(sum);
			// alert("quotationrate["+i+"].value="+inp.value);
			document.getElementById("total").value=sum;
		}
		
	}

	</script>			
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
							<h4 class="page-title">
							<?php
							if($quotationid!='')
							{
								echo "Edit Company Quotation";
							}else{
								echo "Add Company Quotation";
							}
							?></h4>
							</div>
							<div class="col-sm-7 col-7 text-right m-b-30">
								<a href="<?php echo base_url();?>Invoice/quotation_list" class="btn add-btn">Back to List of Company Quotation</a>
							</div>
					</div>
					<!-- /Page Title -->
					
					

					<div class="row">
						<div class="col-md-12">
						<form method="post" id="form_valid" action="<?php echo base_url();?>Invoice/add_quotation">
								<div class="row">
									<div class="col-sm-6 col-md-3">
										<input type="hidden" name="quotationid" value="<?php echo $quotationid;?>">
										<input type="hidden" name="quotationdetailid" value="<?php echo $quotationdetailid;?>">
										<div class="form-group">
										<label>Company Type <span class="text-danger">*</span></label>
										<select class="form-control" name="companytypeid"> 
											<option disabled value="">Please select company type</option>
											<?php
											if($companytypeData){
												foreach($companytypeData as $comptype)
												{
											?>
													<option value="<?php echo $comptype->companytypeid; ?>" <?php if($companytypeid==$comptype->companytypeid){echo "selected" ;}?>><?php echo $comptype->companytype;?></option>
											<?php
											}}
											?>
										</select>
										</div>
									</div>
									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Company Name<span class="text-danger">*</span></label>
												<input class="form-control" type="text" name="companyname" value="<?php echo $companyname;?>" placeholder="Enter company name">
										</div>
									</div>
									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Company Email<span class="text-danger">*</span></label>
												<input class="form-control" type="email" name="companyemail"  value="<?php echo $companyemail;?>" placeholder="Enter company email address">
										</div>
									</div>
									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Contact Number <span class="text-danger">*</span></label>
												<input class="form-control" type="text" name="comcontactnumber" id="comcontactnumber" value="<?php echo $comcontactnumber;?>" placeholder="Enter contact number">
										</div>
									</div>
									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Company Address</label>
											<textarea class="form-control" rows="3" placeholder="Enter company address" name="companyaddress">  <?php echo $companyaddress;?></textarea>
										</div>
									</div>
									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Quotation Date<span class="text-danger">*</span></label>
											<div class="cal-icon">
												<input class="form-control datetimepicker" type="text" name="quotationdate" value="<?php echo $quotationdate;?>" id="quotationdate" readOnly>
											</div>
										</div>
									</div>
								</div>
								<?php
								if($quotationdetailid=='')
								{
								?>
									<div class="row">
										<div class="col-md-12 col-sm-12">
											<div class="table-responsive">
												<table class="table order-list table-hover table-white">
													<thead>
														<tr>
															<!-- <th style="width: 20px">#</th> -->
															<th class="col-sm-2">Particular </th>
															<th class="col-md-6">Rate (Rs.)</th>
															<!-- <th style="width:100px;">Unit Cost</th>
															<th style="width:80px;">Qty</th>
															<th>Amount</th>
															<th> </th> -->
														</tr>
													</thead>
													<tbody>
													<tr>
														<!-- <td>1</td> -->
														<td>
															<input class="form-control" type="text" style="min-width:150px" name="quotationdetail[]" required>
														</td>
														<td>
															<input class="form-control" type="text" style="min-width:150px" name="quotationrate[]" id="txt" onChange="m1()" required>
														</td>
														<!-- <td>
															<input class="form-control" style="width:100px" type="text">
														</td>
														<td>
															<input class="form-control" style="width:80px" type="text">
														</td>
														<td>
															<input class="form-control" readonly="" style="width:120px" type="text">
														</td> -->
														<td><a href="javascript:void(0)" id="addrow" class="text-success font-18" title="Add"><i class="fa fa-plus"></i></a></td>
													</tr>
													
													</tbody>
												</table>
											</div>
											<!-- <div class="table-responsive">
												<table class="table table-hover table-white">
													<tbody>
														<tr>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td colspan="5" style="text-align: right; font-weight: bold">Total</td>
															<td style="text-align: right; padding-right: 30px;width: 230px"><input class="form-control" name="totalamount" type="text" id="total" onChange="m1()" readOnly></td>
														</tr>
													</tbody>
												</table>                               
											</div> -->
											<div class="row">
												<div class="col-md-12">
												<div class="form-group">
												<label>Other Information</label>
												<textarea id="editor1" rows="5" class="form-control"  name="otherinformation" placeholder="Other Information"> <?php echo $otherinformation?></textarea>
												<script>
													CKEDITOR.replace('editor1');
												</script>
											</div>
										</div>
									</div>
								<?php
								}
								?>

								<?php
									if($quotationdetailid!='')
									{
										?>
									<div class="row">
										<div class="col-md-12 col-sm-12">
											<div class="table-responsive">
												<table class="table order-list table-hover table-white">
													<thead>
														<tr>
															<!-- <th style="width: 20px">#</th> -->
															<th class="col-sm-2">Particuler </th>
															<th class="col-md-6">Rate (Rs.)</th>
															<!-- <th style="width:100px;">Unit Cost</th>
															<th style="width:80px;">Qty</th>
															<th>Amount</th>-->
															<th>Action </th> 
														</tr>
													</thead>
													<tbody>
													<tr>
													<?php
													$i=1;
													foreach($quotationdetailData as $detailData)
													{ 
													?>
														<!-- <td><?php //echo $i;?></td> -->
														<td>
															<input type="hidden" class="form-control" name="quotationdetailid[]" value="<?php echo $detailData->quotationdetailid;?>">
															<input class="form-control" type="text" style="min-width:150px" 
															name="quotationdetail[]" value="<?php echo $detailData->quotationdetail;?>">
														</td>
														<td>
															<input class="form-control" type="text" style="min-width:150px" name="quotationrate[]" value="<?php echo $detailData->quotationrate;?>" id="txt" onChange="m1()">
														</td>
														<!-- <td>
															<input class="form-control" style="width:100px" type="text">
														</td>
														<td>
															<input class="form-control" style="width:80px" type="text">
														</td>
														<td>
															<input class="form-control" readonly="" style="width:120px" type="text">
														</td> -->
														<td colspan="2"><a href="javascript:void(0)" id="addrow" class="text-success font-18" title="Add"><i class="fa fa-plus"></i></a>
												
														<a onclick="deletedata(<?php echo $detailData->quotationdetailid;?>)" data-toggle="modal" class="text-danger font-18" data-target="#delete_client" title="Delete"><i class="fa fa-trash-o"></i></a></td>
													</tr>
													<?php
													//$i++;
													} 
													?>
													</tbody>
												</table>
											</div>
											<!-- <div class="table-responsive">
												<table class="table table-hover table-white">
													<tbody>
														<tr>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td colspan="5" style="text-align: right; font-weight: bold">Total</td>
															<td style="text-align: right; padding-right: 30px;width: 230px"><input class="form-control" name="totalamount" type="text" value="<?php// echo $totalamount;;?>"  id="total" onChange="m1()" readonly></td>
														</tr>
													</tbody>
												</table>                               
											</div> -->
											<div class="row">
												<div class="col-md-12">
												<div class="form-group">
												<label>Other Information</label>
												<textarea id="editor1" rows="5" class="form-control"  name="otherinformation" placeholder="Other Information"> <?php echo $otherinformation?></textarea>
												<script>
													CKEDITOR.replace('editor1');
												</script>
											</div>
											
										</div>
									</div>				
										<?php
									}
								?>
								
								<div class="submit-section">
								<button class="btn btn-primary submit-btn">Submit</button>

								</div>
							</form>
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
									<h3>Delete Quotation</h3>
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
		
		<script type="text/javascript">
		$('#quotationdate').datetimepicker({
				defaultDate: new Date(),
				format: 'DD/MM/YYYY',
				ignoreReadonly: true,					
		}).val('<?php echo  ($quotationdate!='0000-00-00')&&($quotationdate!='')  ? date('d/m/Y', strtotime($quotationdate)) : ''; ?>');

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

		$("#comcontactnumber").on("input", function(evt) {
		var self = $(this);
		self.val(self.val().replace(/[^\d].+/, ""));
		if ((evt.which < 48 || evt.which > 57)) 
		{
			evt.preventDefault();
		}
		});


		$("#txt").on("input", function(evt) {
		var self = $(this);
		self.val(self.val().replace(/[^\d].[^\d]+/, ""));
		if ((evt.which < 48 || evt.which > 57)) 
		{
			evt.preventDefault();
		}
		});

		$("#txt1").on("input", function(evt) {
		var self = $(this);
		self.val(self.val().replace(/[^\d].[^\d]+/, ""));
		if ((evt.which < 48 || evt.which > 57)) 
		{
			evt.preventDefault();
		}
		});

		$("#txt2").on("input", function(evt) {
		var self = $(this);
		self.val(self.val().replace(/[^\d].[^\d]+/, ""));
		if ((evt.which < 48 || evt.which > 57)) 
		{
			evt.preventDefault();
		}
		});

		$("#txt3").on("input", function(evt) {
		var self = $(this);
		self.val(self.val().replace(/[^\d].[^\d]+/, ""));
		if ((evt.which < 48 || evt.which > 57)) 
		{
			evt.preventDefault();
		}
		});

		$("#txt4").on("input", function(evt) {
		var self = $(this);
		self.val(self.val().replace(/[^\d].[^\d]+/, ""));
		if ((evt.which < 48 || evt.which > 57)) 
		{
			evt.preventDefault();
		}
		});

		function deletedata(quotationdetailid){  
			$('#delete_client').modal('show')
				$('#yes_btn').click(function(){
						url="<?php echo base_url();?>"
						$.ajax({
						url: url+'/Invoice/delete_quotaiondetail/',
						type: "post",
						data: {quotationdetailid:quotationdetailid} ,
						success: function (response) {                      
					},
					})
				});
		}		

	$(document).ready(function () {
    var counter = 1;

    $("#addrow").on("click", function () {
		//alert(counter);
        var newRow = $("<tr>");
        var cols = "";
        // cols += '<td><input type="text" class="form-control" name="name' + counter + '"/></td>';
        cols += '<td><input type="text" class="form-control" required name="quotationdetail[]"' + counter + '"/></td>';
        cols += '<td><input type="text" class="form-control" id="txt'+ counter +'" onClick="m1()" required name="quotationrate[]"' + counter + '"/></td>';
        // cols += '<td><input type="text" class="form-control" name="phone' + counter + '"/></td>';
        // cols += '<td><input type="text" class="form-control" name="phone' + counter + '"/></td>';
        // cols += '<td><input type="text" class="form-control" readonly="" name="phone' + counter + '"/></td>';

        cols += '<td><a href="javascript:void(0)" class="ibtnDel text-danger font-18" title="Remove"><i class="fa fa-trash-o"></i></a></td>';
        newRow.append(cols);
        $("table.order-list").append(newRow);
        counter++;
    });



    $("table.order-list").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
    });


});


function calculateRow(row) {
    var price = +row.find('input[name^="price"]').val();

}

function calculateGrandTotal() {
    var grandTotal = 0;
    $("table.order-list").find('input[name^="price"]').each(function () {
        grandTotal += +$(this).val();
    });
    $("#grandtotal").text(grandTotal.toFixed(2));
}
		</script>
		<script>
		$(document).ready(function()
		{
			$("#form_valid").validate(
			{
				rules: {
					companytypeid: {
						required: true,
							},
					companyname: {
						required: true,
							},
					companyemail: {
						required: true,
							},
					comcontactnumber: {
						required: true,
							},		
					quotationdate: {
						required: true,
							},
					companyaddress: {
						required: true,
							},
					quotationdetail: {
						required: true,
							},
					quotationrate: {
						required: true,
							},
					},
				messages:{
					companytypeid: {
						required: "Please select type of company",
						},	
					companyname: {
						required: "Please enter a company name",
						},	
					companyemail: {
						required: "Please enter a email address",
						},
					comcontactnumber: {
						required: "Please enter a contact number",
						},
					quotationdate: {
						required: "Please select date",
						},
					companyaddress: {
						required: "Please enter a company address",
						},
					quotationdetail: {
						required: "Please enter quotation description",
						},
					quotationrate: {
						required: "Please enter a quotation rate",
						},	
				},					
			});		
		});


		</script>
	


    </body>
</html>