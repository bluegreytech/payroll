<?php 

	 $this->load->view('common/header.php');

	 $this->load->view('common/sidebar.php');

?>	



<script>

	function m1()

	{

		var a=document.getElementById("txt1").value;
		var b=document.getElementById("txt2").value;
		var c=document.getElementById("txt3").value;

		var z=a*b;		
		var t=z*c/100;
		var cgst=t/2;

		document.getElementById("tax").value=cgst;
		document.getElementById("cgsttax").value=cgst;

		var h= +z;
		document.getElementById("total").value=h;

		

		var x=t+h;
		document.getElementById("nettotal").value=x;

	}

	</script>

		<!-- Page Wrapper -->			

			<!-- Page Wrapper -->

            <div class="page-wrapper">

				<!-- Page Content -->

                <div class="content container-fluid">

					<!-- Page Title -->

					<div class="row">

						<div class="col-sm-5 col-5">

							<h4 class="page-title">Add Invoice</h4>

						</div>

						<div class="col-sm-7 col-7 text-right m-b-30">

						<a href="<?php echo base_url();?>Invoice" class="btn add-btn">Back to List of Invoice</a>

						</div>

					</div>

					<!-- /Page Title -->





					<div class="row">

						<div class="col-md-12">

							<form method="post" action="<?php echo base_url();?>Invoice/createinvoice"  id="form_valid">

								<div class="row">

								<input class="form-control" type="hidden" name="Companyinvoiceid" value="<?php echo $Companyinvoiceid; ?>">

									<div class="col-sm-6 col-md-3">

										<div class="form-group">

											<label>Company <span class="text-danger">*</span></label>

											<select class="form-control" name="companyid"  onChange="gethr(this.value)" id="companyid"> 

												<option desabled value="">Please select company</option>

												<?php

												if($companyData){

													foreach($companyData as $comp)

													{

												?>

													<option value="<?php echo $comp->companyid; ?>"<?php if($companyid==$comp->companyid){echo "selected" ;}?>><?php echo $comp->companyname;?></option>

													

												<?php

												}}

												?>

											</select>

										</div>

									</div>



									<div class="col-sm-6 col-md-3">

										<div class="form-group">

										<label>Select Hr<span class="text-danger">*</span></label>

										<select class="form-control" name="hr_id" id="hr_id"> 

												<option desabled value="">Please select hr</option>

												<?php

												if($hrData){

													foreach($hrData as $hr)

													{

												?>

													<option value="<?php echo $hr->hr_id; ?>"><?php echo $hr->FullName;?></option>

												<?php

												}}

												?>

											</select>

											

										</div>

									</div>



									<div class="col-sm-6 col-md-3">

										<div class="form-group">

											<label>Email</label>

											<input class="form-control" readOnly type="email" name="EmailAddress" id="EmailAddress" >

										</div>

									</div>

									

									<?php if($paymentopt==''){ ?>

									<div class="col-sm-6 col-md-3">

										<div class="form-group">

											<label>Payment option</label>

											<select class="form-control" name="paymentopt" id="txt1">

												<option value="" disabled>Select payment option</option>

												<option value="1">Monthly</option>

												<option value="3">Quarterly</option>

												<option value="6">Halfly</option>

												<option value="12">Yearly</option>

											</select>

										</div>

									</div>

								<?php }?>



								<?php if($paymentopt!=''){ ?>

									<div class="col-sm-6 col-md-3">

										<div class="form-group">

											<label>Payment option</label>

											<select class="form-control" name="paymentopt" id="txt1">

												<option value="" disabled>Select payment option</option>

								<?php if($paymentopt=='1')

								{?>

								<option value="1" selected>Monthly</option>

								<option value="3">Quarterly</option>

								<option value="6">Halfly</option>

								<option value="12">Yearly</option>

								<?php }else if($paymentopt=='3'){?>

								<option value="1">Monthly</option>

								<option value="3" selected>Quarterly</option>

								<option value="6">Halfly</option>

								<option value="12">Yearly</option>

								<?php }else if($paymentopt=='6'){?>

								<option value="1">Monthly</option>

								<option value="3">Quarterly</option>

								<option value="6" selected>Halfly</option>

								<option value="12">Yearly</option>

								<?php }else if($paymentopt=='12'){?>

								<option value="1">Monthly</option>

								<option value="3">Quarterly</option>

								<option value="6">Halfly</option>

								<option value="12" selected>Yearly</option>

								<?php }?>		

											</select>

										</div>

									</div>

								<?php }?>



								<div class="col-sm-6 col-md-3">

										<div class="form-group">

											<label>Invoice date <span class="text-danger">*</span></label>

											<div class="cal-icon">

												<input  class="form-control datetimepicker" type="text" id="invoicedate" name="invoicedate"

												 value="<?php echo $invoicedate; ?>" readonly>

											</div>

										</div>

									</div>



									<div class="col-sm-6 col-md-3">

										<div class="form-group">

											<label>Due Date <span class="text-danger">*</span></label>

											<div class="cal-icon">

												

												<input  class="form-control datetimepicker" type="text" id="duedate" name="duedate"  value="<?php echo $duedate; ?>" readonly>

											</div>

										</div>

									</div>

									

									<!-- <div class="col-sm-6 col-md-3">

										<div class="form-group">

											<label>Tax option</label>

											<select class="form-control" name="taxoption">
												<option value="" disabled>Select tax option</option>
												<option value="GST">GST</option>
												<option value="CGST">CGST</option>
											</select>

										</div>

									</div> -->





								</div>



								<div class="row">

									<div class="col-md-12 col-sm-12">	

										<div class="table-responsive">

											<table class="table table-hover table-white">

												<tbody>

													<tr>

														<td></td><td></td><td></td><td></td>

														<td class="text-right">Monthly Payment</td>

														<td style="text-align: right; width: 230px">

														<input class="form-control" type="text" name="amount" id="txt2" onChange="m1()" value="<?php echo $amount; ?>">

														</td>

													</tr>

													<tr>

														<td colspan="5" style="text-align: right; font-weight: bold">

															Total

														</td>

														<td>
															<?php 
															if($Companyinvoiceid!='')
															{	
															?>

															<input class="form-control"  name="totalamount" value="<?php echo $totalamount; ?>"  type="text" id="total" onChange="m1()" readOnly>

															<?php
															}
															else{
																?>
																<input class="form-control"  name="totalamount"   type="text" id="total" onChange="m1()" readOnly>
																<?php
															}
															?>
														</td>

													</tr>

													<tr>
														<td colspan="5" style="text-align: right">Add Tax %</td>
														<td style="text-align: right;width: 230px">
															<input class="form-control" type="text" name="addtax" id="txt3" onChange="m1()" value="<?php echo $addtax; ?>">
														</td>
													</tr>

													<tr>
															
														<td colspan="5" style="text-align: right"> GST Tax Amount</td>

														<td style="text-align: right;width: 230px">

															<input class="form-control" type="text"  value="<?php echo $taxamount; ?>" name="taxamount" id="tax" onChange="m1()" readOnly>

														</td>
													</tr>

													<tr>
															
															<td colspan="5" style="text-align: right"> CGST Tax Amount</td>
	
															<td style="text-align: right;width: 230px">
	
																<input class="form-control" type="text"  value="<?php echo $cgstamount; ?>"  name="cgstamount" id="cgsttax" onChange="m1()" readOnly>
	
															</td>
													</tr>

													<!-- <tr>
															
															<td colspan="5" style="text-align: right"> Tax Amount</td>
	
															<td style="text-align: right;width: 230px">
	
																<input class="form-control" type="text"  value="<?php //echo $taxamount; ?>" name="taxamount" id="tax" onChange="m1()" readOnly>
	
															</td>
													</tr> -->

													<tr>
														<td colspan="5" style="text-align: right; font-weight: bold">
														Net	Total
														</td>
														<td>
															<input class="form-control" name="netamount"  value="<?php echo $netamount; ?>" type="text" id="nettotal" onChange="m1()" readOnly>
														</td>
													</tr>

													

												</tbody>

											</table>                               

										</div>



										



									</div>



								</div>



								<div class="submit-section">

									<input type="submit" name="submit" class="btn btn-primary account-btn" value="Save">

								</div>

							</form>

						</div>

					</div>

				</div>

				<!-- /Page Content -->





            </div>



			<!-- /Page Wrapper -->

			



        </div>

		<!-- /Main Wrapper -->

		<!-- Sidebar Overlay -->



		<div class="sidebar-overlay" data-reff=""></div>

		<?php $this->load->view('common/footer');?>

    </body>

</html>

<script language="javascript">

	function gethr1() {

	$(document).ready(function() 

	{

	url="<?php echo base_url();?>"

	$.ajax({

        url: url+'Invoice/getedithr/' + $('#companyid').val(),

        success:function(response){

			var response = JSON.parse(response);

			//console.log(response);

             $('#hr_id').val(response.hr_id);

			 $('#FullName').val(response.FullName);

			 $('#EmailAddress').val(response.EmailAddress);

			 $("option[id=hr_id][value=" + response.hr_id=='#hr_id' + "]").attr('selected', 'selected');

         }

      });	

});	

}

window.onload=gethr1;



</script>

<script type="text/javascript">

				$('#invoicedate').datetimepicker({

					 defaultDate: new Date(),

				  	 format: 'DD/MM/YYYY',

					 ignoreReadonly: true,					

				}).val('<?php echo  ($invoicedate!='0000-00-00')&&($invoicedate!='')  ? date('d/m/Y', strtotime($invoicedate)) : ''; ?>');



				$('#duedate').datetimepicker({

					 defaultDate: new Date(),

				  	 format: 'DD/MM/YYYY',

					 ignoreReadonly: true,					

				}).val('<?php echo  ($duedate!='0000-00-00')&&($duedate!='')  ? date('d/m/Y', strtotime($duedate)) : ''; ?>');



				$("#txt2").on("input", function(evt) {

				var self = $(this);

				self.val(self.val().replace(/[^\d].+/, ""));

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

			



				



function gethr(companyid) {

//	alert(companyid);

	url="<?php echo base_url();?>"

	$.ajax({

         url: url+'Invoice/gethr',

         type: 'post',

		 data:{companyid:companyid},

         success:function(response){

			var response = JSON.parse(response);

               console.log(response);

			//   console.log(response.FullName);

            $('#hr_id').val(response.hr_id);

			$('#FullName').val(response.FullName);

			$('#EmailAddress').val(response.EmailAddress);

			$("option[id=hr_id][value=" + response.hr_id=='#hr_id' + "]").attr('selected', 'selected');

         }

      });	

}



</script>

<script>

$(document).ready(function()

{

		$("#form_valid").validate(

		{

				rules: {

						companyid: {

							required: true,

								},

						invoicedate: {

							required: true,

								},

						duedate: {

							required: true,

								},

						amount: {

							required: true,

								},		

						addtax: {

							required: true,

								},		

					},

				messages:{

						companyid: {

							required: "Please select company",

						},

						invoicedate: {

							required: "Please select invoice date",

						},

						duedate: {

							required: "Please select invoice due date",

						},

						amount: {

							required: "Please enter amount",

						},

						addtax: {

							required: "Please select payment option",

								},

					



			}

		});

});					        


$(document).ready(function(){

$('#purpose').on('change', function() {

  if(this.value == 'CGST')

  {

	$("#business").show();

	$("#business2").show();

	

  }

  else if(this.value == 'GST')

  {

	$("#business").show();

	$("#business2").hide();

	

  }

 

});

});


</script>



