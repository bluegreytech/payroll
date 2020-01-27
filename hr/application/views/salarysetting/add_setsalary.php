<?php 
	 $this->load->view('common/header');
	 $this->load->view('common/sidebar');
?>
<style type="text/css">
	.form-control {   
    height: auto !important;
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
				<h4 class="page-title">Add Salary</h4>
				<div class="card-box mb-0">
						<div class="col-md-12">
							<form method="POST" action="<?php echo base_url();?>salarysetting/add_setsalary" id="frm_empsalary">
								<div class="row">
									<div class="col-md-6">					
											   <input type="hidden" class="form-control" name="salary_month" id="salary_month" value="<?php echo $selectdatedata->selecteddate;?>">	
											    <input type="hidden" class="form-control" name="empsetsalary_id" id="empsetsalary_id" value="<?php echo $empsetsalary_id;?>">							
										<div class="form-group">
												<label>Employee Code<span class="text-danger">*</span></label>
												<input class=" form-control" type="hidden" name="emp_id" id="emp_id" Placeholder="Employee Code" value="">
												<input class=" form-control" type="text" name="employee_code" id="employee_code" Placeholder="Employee Code" value=""  readonly="">
										</div>
										<div class="form-group">
											<label>Employee Name <span class="text-danger">*</span>
											</label>	
											<?php if(empty($empid)){ ?>																			
											<select  class=" form-control selectpicker" data-live-search="true" data-actions-box="true"  name="employename" id="employename">
												 <option selected="" value="" disabled="" >Please Select</option> 
											
											</select>
										<?php }else{?>
											<input type="text" name="" id="empname" readonly="" value="" class="form-control">
										 <?php } ?>		
											<span id="emperror"></span>
										</div>
										<div class="form-group" id='paymentmode'>
												<label>Payment Mode</label>										
												<input class=" form-control" type="text" name="paymenttype" id="paymenttype" Placeholder="" value=""  readonly="">
										</div>
										
										
									</div>
								
									<div class="col-md-6">
										<div class="form-group">
											<label>Joining Date<span class="text-danger">*</span></label>
											<div class="cal-icon">
											<input class="form-control" type="text" name="jod" id="jod" Placeholder="Joining Date"  value="" readonly>
											</div>
										</div>
										<div class="form-group">
												<label>Gender</label>
												<input type="text" name="Gender" id="Gender" readonly="" class="form-control">
										</div>
										<div class="form-group">
											<label>Pancard No.</label>
											<input class="form-control" type="text" name="pancard" id="pancard" Placeholder="pancard no"  value="" readonly>
											
										</div>
										<div class="form-group">
											<label>Days worked</label>
											<input class="form-control" type="text" name="worked " id="worked"   value="" readonly >
											
										</div>
									</div>

									<div class="col-md-12">
										<hr>
										<div class="row">
 
										<div class="col-sm-6"> 
											<h4 class="text-primary">Earnings</h4>
												<?php 
											  //  echo "<pre>";print_r($result);die;            
												foreach($result as $row)
												{
												if($row->compliancetypeid=='2'){
											?>
											<div class="form-group">
												<label><?php  if($row->compliancename=='PT'){
													echo "Prof. Tax"; 
												}else{
													echo $row->compliancename;
												}
												?></label>
												<input class="form-control" type="text" id="<?php echo "compliance_".$row->complianceid; ?>" name="compliancevalue[]" readonly>
												<input class="form-control" type="hidden" name="complianceid[]" value="<?php echo $row->complianceid; ?>">
												
											</div>												
											<?php } } ?>
											<div class='form-group' id="claimsection">
												<label>Claim or Reimbursement</label>
												<input class='form-control' type='text' name='empclaim' value="" id='empclaim' readonly>
											</div>
										</div>
										<div class="col-sm-6">  
											<h4 class="text-primary">Deductions</h4>
										    <?php 
											  foreach($result as $row)
												{												
											?>
											
											<?php if($row->compliancetypeid=='1'){ ?>
											<div class="form-group">
												<label><?php  if($row->compliancename=='PT'){
													echo "Prof. Tax"; 
												}else{
													echo $row->compliancename;
												}
												?></label>
												<input class="form-control" type="text" id="<?php echo "compliance_".$row->complianceid; ?>" name="compliancevalue[]" readonly >
												<input class="form-control" type="hidden" name="complianceid[]" value="<?php echo $row->complianceid; ?>">
											</div>
												
											<?php
											} }
											?>
											<div class='form-group' id="loansection">
												<label>Loan</label>
												<input class='form-control' type='text' name='emploan' value="" id='emploan' readonly>
											</div>
											<div class="add-more">
												<label><a href="javascript:void(0)" id='addmore'><i class="fa fa-plus-circle"></i> Add More</a></label>
											</div>
											<div id="adddeduction">
												
											</div>



										</div>
                                         	
										</div>
										<div class="row">
											<div class="col-sm-6">
												<div class="form-group">
													<label>Gross Earning</label>
													<input class="form-control" type="text"   id="gross_earning" readonly name="gross_earning">
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label>Total Deduction</label>
													<input class="form-control" type="text" name="totaldeduction" id="totaldeduction" readonly>

													<input class="form-control" type="hidden" name="othertotaldeduction" id="othertotaldeduction" readonly>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label>Net Pay</label>
											<!-- <input class="form-control" type="text" name="netpay" id="netpay" onkeyup="payword.value=convertNumberToWords(this.value)" style=""> -->
											<input class="form-control" type="text" name="netpay" id="netpay" style="" readonly>
											<input class="form-control" type="hidden" name="finaltotalamt" id="finaltotalamt" style="" readonly>
											
											
										</div>
										<div class="form-group">
											<label><i class="fa fa-inr" aria-hidden="true"></i> in Words</label>
											<input class="form-control" type="text" id="payword" name="payword" style="color: red" readonly>
										</div>
									</div>
								</div>	
								<!-- 	<div class="col-md-12">
										<hr>
									    <h3 class="card-title">Employee Leave Detail </h3>
									     <div class="row">
                                                <table class="table table-striped table-nowrap custom-table table-bordered">
													<thead>
														<tr>
														<th width="20%">Opening balance</th>
														<?php if(!empty($leavelist)){
											    	 	foreach($leavelist as $leaverow){ //echo "<pre>";print_r($leaverow); ?>   
														
														<td><?php echo $leaverow->leave_name.': '.$leaverow->leavedays; ?></td>
														 <?php } } ?>
														</tr>
														<tr>
														<th width="20%">Available</th>
														<td>1</td>
														<td>2</td>
														<td>3</td>
														<td>4</td>
														</tr>
														<tr>
														<th width="20%">Closing Balance</th>
														<td>1</td>
														<td>2</td>
														<td>3</td>
														<td>4</td>
														</tr>			
													</thead>	
												</table>
										</div>
									</div> -->						
								
									<div class="submit-section">
									<hr>
									<button class="btn btn-primary submit-btn" name="Save" type="submit" id="btnsave"><?php //echo ($empleave_id!='')?'Update':'Submit' ?>Submit</button>
									<button type="button" name="cancel" class="btn btn-secondary submit-btn" onClick="location.href='<?php echo base_url(); ?>salarysetting/<?php echo 
									$redirect_page; ?>'">Cancel
									</button>
								</div>
							</form>
						</div>					
				</div>
				
				</div>
			</div>
		</div>
	</div>
<!-- /Page Wrapper -->
</div>
	<!-- /Main Wrapper -->

	<!-- Sidebar Overlay -->
	<div class="sidebar-overlay" data-reff=""></div>

	<!-- jQuery -->
 <?php  $this->load->view('common/footer'); ?>
		
<script>
	
$(document).ready(function(){

	var end = this.value;
	var id = '<?php echo $empid; ?>';
	var salary_month = $('#salary_month').val();	
	url="<?php echo base_url();?>";
	if(id.length!=''){
		$.ajax({
         url: url+'employee/viewemp',
         type: 'post',
		 data:{id:id,salarymonth:salary_month},
         success:function(response){
			var response = JSON.parse(response);
          	  console.log(response.paymenttype);
            $('#empname').val(response.first_name+' '+response.last_name);
            $('#emp_id').val(response.emp_id);
			$('#employee_code').val(response.employee_code);			
			$('#jod').val(response.joiningdate);			
            $('#pancard').val(response.pancard);
            $('#Gender').val(response.gender);
            $('#worked').val(response.workingdays);
            $('#paymenttype').val(response.paymenttype);    
                  
			var deductiontotal = 0;
			var earningtotal = 0;
			var deductionamount=0;
			var m =response.complianceresult.length;
          	n1=response.complianceallowid.length;
          	//console.log(response.complianceresult);
			var myarray = [];
			for (var j=0; j< m;j++) {
			//console.log(response);  
			compliancetypeid=response.complianceresult[j].compliancetypeid;
			compliance_id=response.complianceresult[j].complianceid;
			compliancepercentage=response.complianceresult[j].compliancepercentage;
			compliance_name=response.complianceresult[j].compliancename;
         	 // console.log(compliance_id);
         	  if(response.salary=='monthly'){
					monthlyamt=parseFloat(response.salaryamt)/12;
				}else{
					monthlyamt=parseFloat(response.salaryamt)*30;				
				}
				
				totalamount=monthlyamt.toFixed();
				//console.log(totalamount);
				compliance_percentage = parseFloat(compliancepercentage);
				if(response.salary=='monthly'){					
				 	if(compliancetypeid=='1'){
           				
						for(var k=0; k<n1;k++ ){
						if(response.complianceallowid[k]==compliance_id){
							if(compliance_name=="PF"){
								deducthraamount=(totalamount * response.hrapercentage[j])/100;
								finaltotalamt=parseFloat(monthlyamt-deducthraamount);
							
                                if(response.pfcelingprice!=''){								
									if(finaltotalamt > response.pfcelingprice){
										 deductionamount=parseFloat('1800.00');
										 deductiontotal += deductionamount; 
										console.log("fdfd"+deductionamount); 
										
									}else{
										deductionamount=(finaltotalamt * compliance_percentage)/100; 
										deductiontotal += deductionamount;
										console.log("gfg"+deductionamount);

									}
                                  
								}
								
							}else if(compliance_name=="ESIC"){
                                   if(parseInt(totalamount)<parseInt(21000)){
										deductionamount=(totalamount * compliance_percentage)/100; 
										deductiontotal += deductionamount; 
										
                                   }else{
                                   		deductionamount=parseFloat('0.00'); 
										deductiontotal += deductionamount; 
										
                                   }
							}else if(compliance_name=="PT"){
								console.log(totalamount);
                               	if(parseInt(totalamount)<parseInt(6000)){
                               		deductionamount=parseInt('00');
								    deductiontotal += deductionamount; 
								
                               	}else if(parseInt(totalamount)>=parseInt(6000) && parseInt(totalamount)<parseInt(9000)){ 
                               		deductionamount=parseInt('80');
								    deductiontotal += deductionamount;

                               	}else if(parseInt(totalamount)>=parseInt(9000) && parseInt(totalamount)<parseInt(12000) ){
                               		 deductionamount=parseInt('150');
								    deductiontotal += deductionamount;
                               	}else{
                               		deductionamount=parseInt('200');
								    deductiontotal += deductionamount;
                               	}                              
							}else{
								deductionamount=(totalamount * compliance_percentage)/100; 
								deductiontotal += deductionamount;								
							}
							break;
						}else{		
				 			 deductionamount=parseFloat('0.00'); 
				 			 deductiontotal +=deductionamount; 
				 			 	
						}
							  
						}
					  	var othertotaldeduction="<?php echo $totaldeduction?>";
					  	if(othertotaldeduction){
								$('#totaldeduction').val(othertotaldeduction); 
							}else{
								$('#totaldeduction').val(deductiontotal.toFixed(2));
							}
						//$('#totaldeduction').val(deductiontotal.toFixed(2));
                        $('#othertotaldeduction').val(deductiontotal.toFixed(2));
                        $('#compliance_'+compliance_id).val(deductionamount.toFixed(2));
                       
				 	}else{
				 		//console.log("gfgfg"+finaltamt);
				 		earningamount=(totalamount * compliance_percentage)/100; 
                        earningtotal += earningamount;
                   	 	$('#gross_earning').val(earningtotal.toFixed(2));
                    	$('#compliance_'+compliance_id).val(earningamount);
				 	}
				}else{
					if(compliancetypeid=='2'){
						if(compliance_name=='Basic'){							 
	                   	 	$('#gross_earning').val(totalamount);
	                    	$('#compliance_'+compliance_id).val(totalamount);	
						}else{
							earningamount=0.00; 
	                        earningtotal += 0.00;	                   	 	
	                    	$('#compliance_'+compliance_id).val(earningtotal.toFixed(2));	
						}
            		}else{
            			deductionamount=0.00; 
			 			deductiontotal += 0.00; 

			 			if(othertotaldeduction){
								$('#totaldeduction').val(othertotaldeduction); 
							}else{
								$('#totaldeduction').val(deductiontotal.toFixed(2));
							}
				 		//$('#totaldeduction').val(deductiontotal.toFixed(2));
                        $('#othertotaldeduction').val(deductiontotal.toFixed(2));
                        $('#compliance_'+compliance_id).val(deductionamount.toFixed(2));
            		}
				}			
			}
			if(response.claimamount){
                    $("#claimsection").show();
					$("#empclaim").val(response.claimamount); 
	                earningtotal +=parseFloat(response.claimamount);
	               // alert(earningtotal);
	                $('#gross_earning').val(earningtotal.toFixed(2));
			                	
				}else{
				    $("#claimsection").hide();
				}
  
			netpay=(parseFloat($('#gross_earning').val())-parseFloat($('#totaldeduction').val()));
			
			$('#netpay').val(netpay.toFixed(2));
			$('#payword').val(convertNumberToWords(netpay));
        
         }
      });
	}
		
	//});
});
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
$(document).ready(function()
{ 
	$("#frm_addleave").validate(
	{
		ignore: "input[type='text']:hidden"	,		 
			rules: {
				'employename[]':{
					required:true,						
			    },
				typeofleave:{
					required:true,
				},		
				leavefrom:{
					required:true,
				},
				leaveto:{				
					required: true,
				},
				leavedays:{
					required: true,
				},
				noofdays:{
					required: true,
				},
				
			},
		
			errorPlacement: function (error, element) {
				console.log('dd', element.attr("name"));
				if(element.attr("name") == "employename[]") {
					error.appendTo("#emperror");
				} else{
				error.insertAfter(element)
				}
			}
	});
});
function convertNumberToWords(amount) {

    var words = new Array();
    words[0] = '';
    words[1] = 'One';
    words[2] = 'Two';
    words[3] = 'Three';
    words[4] = 'Four';
    words[5] = 'Five';
    words[6] = 'Six';
    words[7] = 'Seven';
    words[8] = 'Eight';
    words[9] = 'Nine';
    words[10] = 'Ten';
    words[11] = 'Eleven';
    words[12] = 'Twelve';
    words[13] = 'Thirteen';
    words[14] = 'Fourteen';
    words[15] = 'Fifteen';
    words[16] = 'Sixteen';
    words[17] = 'Seventeen';
    words[18] = 'Eighteen';
    words[19] = 'Nineteen';
    words[20] = 'Twenty';
    words[30] = 'Thirty';
    words[40] = 'Forty';
    words[50] = 'Fifty';
    words[60] = 'Sixty';
    words[70] = 'Seventy';
    words[80] = 'Eighty';
    words[90] = 'Ninety';
    amount = amount.toString();
    var atemp = amount.split(".");
    var number = atemp[0].split(",").join("");
    var n_length = number.length;
    var words_string = "";
    if (n_length <= 9) {
        var n_array = new Array(0, 0, 0, 0, 0, 0, 0, 0, 0);
        var received_n_array = new Array();
        for (var i = 0; i < n_length; i++) {
            received_n_array[i] = number.substr(i, 1);
        }
        for (var i = 9 - n_length, j = 0; i < 9; i++, j++) {
            n_array[i] = received_n_array[j];
        }
        for (var i = 0, j = 1; i < 9; i++, j++) {
            if (i == 0 || i == 2 || i == 4 || i == 7) {
                if (n_array[i] == 1) {
                    n_array[j] = 10 + parseInt(n_array[j]);
                    n_array[i] = 0;
                }
            }
        }
        value = "";
        for (var i = 0; i < 9; i++) {
            if (i == 0 || i == 2 || i == 4 || i == 7) {
                value = n_array[i] * 10;
            } else {
                value = n_array[i];
            }
            if (value != 0) {
                words_string += words[value] + " ";
            }
            if ((i == 1 && value != 0) || (i == 0 && value != 0 && n_array[i + 1] == 0)) {
                words_string += "Crores ";
            }
            if ((i == 3 && value != 0) || (i == 2 && value != 0 && n_array[i + 1] == 0)) {
                words_string += "Lakhs ";
            }
            if ((i == 5 && value != 0) || (i == 4 && value != 0 && n_array[i + 1] == 0)) {
                words_string += "Thousand ";
            }
            if (i == 6 && value != 0 && (n_array[i + 1] != 0 && n_array[i + 2] != 0)) {
                words_string += "Hundred and ";
            } else if (i == 6 && value != 0) {
                words_string += "Hundred ";
            }
        }
        words_string = words_string.split("  ").join(" ");
       
    }

    return words_string;
}  
$("#loansection").hide();
$("#claimsection").hide();

$("#employename").change(function () {
	var end = this.value;
	var id = $('#employename').val();
	var salary_month = $('#salary_month').val();	
	url="<?php echo base_url();?>";
	
	$.ajax({
         url: url+'employee/viewemp',
         type: 'post',
		 data:{id:id,salarymonth:salary_month},
         success:function(response){
			var response = JSON.parse(response);
           
            $('#emp_id').val(response.emp_id);
			$('#employee_code').val(response.employee_code);			
			$('#jod').val(response.joiningdate);			
            $('#pancard').val(response.pancard);
            $('#Gender').val(response.gender);
            $('#worked').val(response.workingdays); 
   
          
            if(response.paymenttype=="bank_transfer"){
            	 $('#paymenttype').val("Bank Transfer"); 
            }else if(response.paymenttype=="cheque"){
                 $('#paymenttype').val("Cheque");  
            }else if(response.paymenttype=="cash"){
                 $('#paymenttype').val("Cash");  
            }else if(response.paymenttype=="demand_draff"){
                 $('#paymenttype').val("Demand Draff");  
            }

			var deductiontotal = 0;
			var earningtotal = 0;
			var deductionamount=0;
			var m =response.complianceresult.length;
          	n1=response.complianceallowid.length;
          	console.log(response.complianceresult);
			var myarray = [];
			for (var j=0; j< m;j++){
			
				compliancetypeid=response.complianceresult[j].compliancetypeid;
				compliance_id=response.complianceresult[j].complianceid;
				compliancepercentage=response.complianceresult[j].compliancepercentage;
				compliance_name=response.complianceresult[j].compliancename;
         	 // console.log(compliance_id);
         	  if(response.salary=='monthly'){
					monthlyamt=parseFloat(response.salaryamt)/12;
				}else{
					monthlyamt=parseFloat(response.salaryamt)*30;				
				}
				totalamount=monthlyamt.toFixed();
				//console.log(totalamount);
				compliance_percentage = parseFloat(compliancepercentage);
				if(response.salary=='monthly'){					
				 	if(compliancetypeid=='1'){
						for(var k=0; k<n1;k++){
						if(response.complianceallowid[k]==compliance_id){
							if(compliance_name=="PF"){
								//deducthraamount=(totalamount * response.hrapercentage[j])/100;
								if(response.pftotaldeduct!=null){
									finaltotalamt=parseFloat(monthlyamt-response.pftotaldeduct);
								}else{
                                    finaltotalamt=parseFloat(monthlyamt); 
								}
                                if(response.pfcelingprice!=''){								
									if(finaltotalamt > response.pfcelingprice){
										 deductionamount=parseFloat('1800.00');
										 deductiontotal += deductionamount;
									}else{
										deductionamount=(finaltotalamt * compliance_percentage)/100; 
										deductiontotal += deductionamount;
									}
								}
							}else if(compliance_name=="ESIC"){
                                   if(parseInt(totalamount)<parseInt(21000)){
										deductionamount=(totalamount * compliance_percentage)/100; 
										deductiontotal += deductionamount; 
										
                                   }else{
                                   		deductionamount=parseFloat('0.00'); 
										deductiontotal += deductionamount; 
										
                                   }
							}else if(compliance_name=="PT"){
							
                               	if(parseInt(totalamount)<parseInt(6000)){
                               		deductionamount=parseInt('00');
								    deductiontotal += deductionamount; 
								
                               	}else if(parseInt(totalamount)>=parseInt(6000) && parseInt(totalamount)<parseInt(9000)){ 
                               		deductionamount=parseInt('80');
								    deductiontotal += deductionamount;

                               	}else if(parseInt(totalamount)>=parseInt(9000) && parseInt(totalamount)<parseInt(12000) ){
                               		 deductionamount=parseInt('150');
								    deductiontotal += deductionamount; 
									

                               	}else{
                               		deductionamount=parseInt('200');
								    deductiontotal += deductionamount; 
									
                               	}
                              
							}else{
								deductionamount=(totalamount * compliance_percentage)/100; 
								deductiontotal += deductionamount;
								
							}
							break;
						}else{		
				 			 deductionamount=parseFloat('0.00'); 
				 			 deductiontotal +=deductionamount; 
				 			
				 			 	
						}
						    
						}
						   
                            //deductiontotal +=parseFloat(response.loan_amnt); 
                          //	alert("total=="+deductiontotal);
                          

						$('#totaldeduction').val(deductiontotal.toFixed(2));
                        $('#othertotaldeduction').val(deductiontotal.toFixed(2));
                        $('#compliance_'+compliance_id).val(deductionamount.toFixed(2));
                       
				 	}else{
				 		
				 		earningamount=(totalamount * compliance_percentage)/100; 
                        earningtotal += earningamount;
                   	 	$('#gross_earning').val(earningtotal.toFixed(2));
                    	$('#compliance_'+compliance_id).val(earningamount);
				 	}


				}else{
					if(compliancetypeid=='2'){
						if(compliance_name=='Basic'){							 
	                   	 	$('#gross_earning').val(totalamount);
	                    	$('#compliance_'+compliance_id).val(totalamount);	
						}else{
							earningamount=0.00; 
	                        earningtotal += 0.00;	                   	 	
	                    	$('#compliance_'+compliance_id).val(earningtotal.toFixed(2));	
						}
            		}else{
            			deductionamount=0.00; 
			 			deductiontotal += 0.00; 

				 		$('#totaldeduction').val(deductiontotal.toFixed(2));
                        $('#othertotaldeduction').val(deductiontotal.toFixed(2));
                        $('#compliance_'+compliance_id).val(deductionamount.toFixed(2));
            		}
				}			
			} 
			   if(response.no_of_installment!=null && response.no_of_installment!='0'){
					$("#loansection").show();
					$("#emploan").val(response.loan_amnt); 
	                 deductiontotal +=parseFloat(response.loan_amnt);
					}else{
						$("#loansection").hide();
				}

				if(response.claimamount){
                    $("#claimsection").show();
					$("#empclaim").val(response.claimamount); 
	                earningtotal +=parseFloat(response.claimamount);
	               // alert(earningtotal);
	                $('#gross_earning').val(earningtotal.toFixed(2));
			                	
				}else{
				    $("#claimsection").hide();
				}


			$('#totaldeduction').val(deductiontotal.toFixed(2));
            $('#othertotaldeduction').val(deductiontotal.toFixed(2));
			netpay=(parseFloat($('#gross_earning').val())-parseFloat($('#totaldeduction').val()));
			
			$('#netpay').val(netpay.toFixed(2));
			$('#payword').val(convertNumberToWords(netpay));
        
         }
      });	
});

$(document).ready(function() {
	var max_fields      = 2; //maximum input boxes allowed
	var wrapper   		= $("#adddeduction"); //Fields wrapper
	var add_button      = $("#addmore"); //Add button ID
	
	var x = 1; //initlal text box count
	$(add_button).click(function(e){ //on add input button click
		e.preventDefault();
		if(x < max_fields){ //max input box allowed
			x++; //text box increment
			$(wrapper).append("<div class='form-group'><div class='row'><div class='col-md-6'><input class='form-control' type='text' name='otherdeductionname[]'></div><div class='col-md-5'><input class='form-control' type='text' name='otherdeductionvalue[]' onkeyup='deductioncalculate(this.value)'></div><span style='margin-top:12px;color:red;' class='remove_field'><i class='fa fa-trash fa-lg'></i></span></div>"); 
		}
	});
	
	$(wrapper).on("click",".remove_field", function(e){ //user click on remove text
		e.preventDefault(); $(this).parent('div').remove(); x--;
		 $('#totaldeduction').val($('#othertotaldeduction').val());
	});

    var otherdeductionname="<?php echo $otherdeductionname ?>";
    var otherdeductionvalue="<?php echo $otherdeductionvalue ?>";

  if(otherdeductionname!='' && otherdeductionvalue!='' ){


   
		
		 //max input box allowed
			x++; //text box increment
			$(wrapper).append("<div class='form-group'><div class='row'><div class='col-md-6'><input class='form-control' type='text' name='otherdeductionname[]' value='"+otherdeductionname+"'></div><div class='col-md-5'><input class='form-control' type='text' name='otherdeductionvalue[]' onkeyup='deductioncalculate(this.value)' value='"+otherdeductionvalue+"'></div><span style='margin-top:12px;color:red;' class='remove_field'><i class='fa fa-trash fa-lg'></i></span></div>"); 
		
	
 	}
    

});
	
function deductioncalculate(){
    
	var othertotaldeduction=$('#othertotaldeduction').val();
	var otherdeductionvalue=$('input[name="otherdeductionvalue[]"]').val();
	deductionvaluecount=$('input[name="otherdeductionvalue[]"]').length;
	
	var totaldeduction = 0;
	var subtotal=0 ;
	for(var i = 0; i < deductionvaluecount; i++) {
     toralcharcter=$('input[name="otherdeductionvalue[]"]').val().length;
   
     	if(toralcharcter!='0'){
	     	totaldeduction+=parseFloat(otherdeductionvalue); 		
	     	subtotal=(parseFloat(othertotaldeduction)+totaldeduction);
	     	$('#totaldeduction').val(subtotal); 

			grossearning=$('#gross_earning').val();	 	
		 	totalnetpay=(parseFloat(grossearning)-parseFloat(subtotal));
	        $('#netpay').val(totalnetpay);
	        $('#payword').val(convertNumberToWords(totalnetpay));
     	}else{
	       	 $('#totaldeduction').val(othertotaldeduction); 
	         grossearning=$('#gross_earning').val();	 	
		 	 totalnetpay=(parseFloat(grossearning)-parseFloat(othertotaldeduction));
	        $('#netpay').val(totalnetpay);
	        $('#payword').val(convertNumberToWords(totalnetpay));
	        return false;
     	}     	
	}
 	
}

$("#alldate").on("dp.change", function() {
	selecteddate=$("#alldate").val();
	$('#salary_month').val(selecteddate);
   	url="<?php echo base_url(); ?>";
   
	$.ajax({
		url: url+'salarysetting/empsalarmonth',
		type:'post',
		data:{selecteddate:selecteddate},
		success:function(response){
		 $('#employename').empty();	
		 //$('#employename').selectpicker();
		 
		var response = JSON.parse(response);
		console.log(response);
			$('#employename').append($('<option value="" disabled="" selected="">Please Select</option>')).selectpicker('refresh');
		$.each(response, function (index, el) {
			console.log(el.emp_id);
			
        	$('#employename').append(
        	 	$('<option></option>').val(el.emp_id).html(el.first_name+' '+el.last_name+' '+'['+ el.employee_code +']')).selectpicker('refresh');     
        	 //$('#employename').selectpicker('val', '249');
        	
    	});
    	
    	 $('#employename').selectpicker('render');
		}
	});		
});

	selecteddate=$("#alldate").val();
	$('#salary_month').val(selecteddate);
	url="<?php echo base_url(); ?>";

	$.ajax({
		url: url+'salarysetting/empsalarmonth',
		type:'post',
		data:{selecteddate:selecteddate},
		success:function(response){
			$('#employename').empty();			
			var response = JSON.parse(response);
			$('#employename').append($('<option value="" disabled="" selected="">Please Select</option>')).selectpicker('refresh');
		$.each(response, function (index, el) {			
        	$('#employename').append(
        	 	$('<option></option>').val(el.emp_id).html(el.first_name+' '+el.last_name+' '+'['+ el.employee_code +']')).selectpicker('refresh');        	
    	});    	
    	 $('#employename').selectpicker('render');
		}
	});		
</script>
    