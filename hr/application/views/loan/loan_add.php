<?php 
	 $this->load->view('common/header');
	 $this->load->view('common/sidebar');
?>
<div class="page-wrapper">			
   <div class="content container-fluid">
		<div class="row">
			<div class="col-md-12">
				<h4 class="page-title">Loan </h4>
				<div class="card-box mb-0">
				
					<form class="form-inline" method="post" action="<?php echo base_url()?>loan/employeeselect">
  <div class="form-group">
     <select class=" form-control selectpicker"  data-live-search="true" data-actions-box="true" name="employename" id="employename">
    <option value="">Select employee...</option>
    <?php
    foreach ($result as $val) {
    	?>
<option value="<?php echo $val->emp_id ?>" <?php if($val->emp_id==$employename){ echo "selected"; } ?>><?php echo ucfirst($val->first_name. " "  .$val->last_name); ?></option>
    	<?php
    }
    ?>
    
    
  </select>
  </div>
  
 
  <button type="submit" class="btn btn-info" style="margin-left: 20px;">Submit</button>
</form>			
</div>
<?php
$selectdatedata= getSelectdate($this->session->userdata('companyid'));
//echo $selectdatedata->selecteddate;
$selectdate=(isset($selectdatedata->selecteddate)!='')? $selectdatedata->selecteddate:"";
//print_r($selectdatedata);
$selected_date= date('d/m/Y', strtotime($selectdate));
$loan_select_date=(isset($loan_det['0']->loan_select_date)!='')?$loan_det['0']->loan_select_date:"";
$date_of_loan=(isset($loan_det['0']->date_of_loan)!='')?$loan_det['0']->date_of_loan:"";
$deduct_from=(isset($loan_det['0']->deduct_from)!='')?$loan_det['0']->deduct_from:"";
$created_date=(isset($loan_det['0']->created_date)!='')?$loan_det['0']->created_date:"";
$loan_type=(isset($loan_det['0']->loan_type)!='')?$loan_det['0']->loan_type:"";
$loan_amnt=(isset($loan_det['0']->loan_amnt)!='')?$loan_det['0']->loan_amnt:"";
$interest_rate=(isset($loan_det['0']->interest_rate)!='')?$loan_det['0']->interest_rate:"";
$no_of_installment=(isset($loan_det['0']->no_of_installment)!='')?$loan_det['0']->no_of_installment:"";
$loan_accnt_no=(isset($loan_det['0']->loan_accnt_no)!='')?$loan_det['0']->loan_accnt_no:"";
$monthly_installment=(isset($loan_det['0']->monthly_installment)!='')?$loan_det['0']->monthly_installment:"";
$principal_balance=(isset($loan_det['0']->principal_balance)!='')?$loan_det['0']->principal_balance:"";
$interest_balance=(isset($loan_det['0']->interest_balance)!='')?$loan_det['0']->interest_balance:"";
$loan_completed=(isset($loan_det['0']->loan_completed)!='')?$loan_det['0']->loan_completed:"";
$completed_date=(isset($loan_det['0']->completed_date)!='')?$loan_det['0']->completed_date:"";
$remark=(isset($loan_det['0']->remark)!='')?$loan_det['0']->remark:"";
$loan_id=(isset($loan_det['0']->loan_id)!='')?$loan_det['0']->loan_id:"";
//echo date('d-m-Y',$selectdate);
?>
				<div class="card-box mb-0">
				 <div class="row">
					<form class="form-inline" method="post" action="<?php echo base_url()?>loan/insert_loan">
						<div class="form-group">
							<input type="hidden" name="select_date" id="select_date" value="<?php echo $selected_date ?>">
							<input type="hidden" name="emp_id" id="employee_id" value="<?php echo $employename ?>">
							<input type="hidden"  id="company_id" name="company_id" value="<?php echo $this->session->userdata('companyid')?>">

							<input type="hidden"  id="loan_id" name="loan_id" value="<?php echo $loan_id?>">

								<label class="control-label">Loan as on</label>
								<div class="col-md-4">
									<input type="text" name="loan_select" id="loan_select" class="form-control" value="<?php
									if(!empty($loan_select_date)){
										 echo date('d-m-Y',strtotime($loan_select_date));
										 }
										 ?>">
								</div>
							</div>
							<div class="form-group">
								<div class='col-md-4'>
								<?php 
									if(!empty($loan_id)){
										?>
									<button type="button" class="btn add-btn" disabled style="float:none;">Create</button>
									
									<?php
								}else{
									?>
									<button type="button" class="btn add-btn" id="create_loan" style="float:none;">Create</button>
									<?php
								}
								?>
									
								</div>
								</div>
								<div class="form-group">
								<div class='col-md-4'>
									<button type="button" class="btn add-btn" id="remove_loan"  style="float:none;">Remove</button>
									
								</div>
								</div>
								</form>	
							</div>
								<!--  <button type="submit" class="btn btn-info" style="margin-left: 20px;">Submit</button> -->
								<form method="post" action="<?php echo base_url()?>loan/edit_loan">
                          <input type="hidden" name="select_date" id="select_date" value="<?php echo $selected_date ?>">
							<input type="hidden" name="emp_id" id="employee_id" value="<?php echo $employename ?>">
							<input type="hidden"  id="company_id" name="company_id" value="<?php echo $this->session->userdata('companyid')?>">

							<input type="hidden"  id="loan_id" name="loan_id" value="<?php echo $loan_id?>">
                             <div class="row" style="margin-top:30px">
                             	<div class="col-md-6">
                             		<h4 class="text-primary">Loan Details</h4>
                             		<div class="form-group">
												<label>Date of Loan</label>
												<input class="form-control" type="text" id="date_of_loan" name="date_of_loan" value="<?php
									if(!empty($date_of_loan)){
										 echo date('d-m-Y',strtotime($date_of_loan));
										 }
										 ?>">
												
												
											</div>
											<div class="form-group">
												<label>Deduct from</label>
												<input class="form-control" type="text" id="deduct_from" name="deduct_from" value="<?php
									if(!empty($deduct_from)){
										 echo date('d-m-Y',strtotime($deduct_from));
										 }
										 ?>">
												
												
											</div>
											<div class="form-group">
												<label>Created date</label>
												<input class="form-control" type="text" id="create_date"  readonly="" name="create_date" value="<?php
									if(!empty($created_date)){
										 echo date('d-m-Y',strtotime($created_date));
										 }
										 ?>">
												
												
											</div>
											<div class="form-group">
												<label>Loan type</label>
												<select class="form-control" name="loan_type">
													<option value="Flat Interest" <?php if($loan_type=='Flat Interest'){echo "selected" ;}?> >Flat Interest</option>
													<option value="Flat Interest EMI" <?php if($loan_type=='Flat Interest EMI'){echo "selected" ;}?> >Flat Interest EMI</option>
													<option value="Reducing Interest" <?php if($loan_type=='Reducing Interest'){echo "selected" ;}?>>Reducing Interest</option>
													<option value="Reducing Interest 365" <?php if($loan_type=='Reducing Interest 365'){echo "selected" ;}?>>Reducing Interest 365</option>
													
													
												</select>
												
												
											</div>
                             	</div>

                             	<div class="col-md-6"  style="margin-top:30px">
                             		<div class="form-group">
												<label>Amount</label>
												<input class="form-control" type="number" id="amount" name="amount" min=0 value="<?php echo $loan_amnt?>">
												
												
											</div>
											<div class="form-group">
												<label>Interest Rate (%p.a)</label>
												<input class="form-control" type="number" id="rate" name="rate" min=0 value="<?php echo $interest_rate?>">
												
												
											</div>
											<div class="form-group">
												<label>No of Installments (in Months)</label>
												<input class="form-control" type="number" id="no_installment" name="no_installment" min=0 value="<?php echo $no_of_installment?>">
												
												
											</div>
											<div class="form-group">
												<label>Loan Account No</label>
												<input class="form-control" type="text" id="loan_accnt_no"  value="<?php echo $loan_accnt_no?>" name="loan_accnt_no">
												
												
											</div>
                             	</div>
                             </div>

                             <div class="row">
                             	<div class="col-md-6">
                             		<h4 class="text-primary">Installment Details</h4>
                             		<div class="form-group">
												<label>Monthly Installment</label>
												<input class="form-control" type="text" id="monthly_installment" name="monthly_installment" value="<?php echo $monthly_installment?>"  readonly="">
											</div>
											
											<div class="form-group">
												<label>Interest Balance</label>
												<input class="form-control" type="text" id="interest_bal" value="<?php echo $interest_balance?>" name="interest_bal" readonly="">
											</div>
                             	</div>
                             	<div class="col-md-6" style="margin-top:30px">
                              <div class="form-group">
												<label>Principal Balance</label>
												<input class="form-control" type="text" id="principal_balance" name="principal_balance" value="<?php echo $principal_balance?>"  readonly="">
											</div>
                             </div>

                             </div>

                          <div class="row">
                             	<div class="col-md-6">
                             		<h4 class="text-primary">Other Information</h4>
                             		<div class="form-group">
												<label>Loan Completed</label>
												<input  type="checkbox" id="loan_complete" name="loan_complete"   <?php if($loan_completed=='Yes'){echo "checked" ;}?> value="Yes">
											</div>
											<div class="form-group">
												<label>Complete date</label>
												<input class="form-control" type="text" id="completed_date" name="completed_date" value="<?php
									if(!empty($completed_date)){
										 echo date('d-m-Y',strtotime($completed_date));
										 }
										 ?>">
											</div>
											
                             	</div>
                             	<div class="col-md-6" style="margin-top:30px">
                          
												<div class="form-group">
												<label>Remarks</label>
												<textarea class="form-control" name="remark" rows="4" cols="4"><?php echo $remark?></textarea>
												
											</div>
                             	</div>
                             </div>
                             <button type="submit" class="btn btn-info">Save</button>
                         </form>
							</div>
						
  
 
 
		
				</div>
				
				</div>
			</div>
		</div>
	</div>
<?php  $this->load->view('common/footer'); ?>

<script>
$( "#create_loan" ).click(function() {
 var select_date=$('#select_date').val();
 
  var loan_select  =$('#select_date').val();
  var create_date= '<?php echo date('Y-m-d');?>';
  var date_of_loan =$('#select_date').val();
 var company_id =$('#company_id').val();
 var employename=$('#employee_id').val();
 url="<?php echo base_url();?>";
 
 	$.ajax({
         url: url+'loan/insert_loan',
         type: 'post',
		 data:{select_date:select_date,loan_select:loan_select,create_date:create_date,date_of_loan:date_of_loan,company_id:company_id,employename:employename},
         success:function(response){

         
          window.location.href=url+'loan/employeeselect';

       		
            
         }
      });
 	 });
 $('#remove_loan').click(function() {
var loan_id=$('#loan_id').val();
url="<?php echo base_url();?>";
 
 	$.ajax({
         url: url+'loan/delete_loan',
         type: 'post',
		 data:{loan_id:loan_id},
         success:function(response){

         

         window.location.href=url+'loan/employeeselect';
       		
            
         }
      });

 });
function delay(callback, ms) {
  var timer = 0;
  return function() {
    var context = this, args = arguments;
    clearTimeout(timer);
    timer = setTimeout(function () {
      callback.apply(context, args);
    }, ms || 0);
  };
}

$('#amount,#no_installment,#rate').keyup(delay(function (e) {
	var amount=$('#amount').val();
	var no_installment=$('#no_installment').val();
	var rate=$('#rate').val();
	
	if((no_installment!='') && (rate=='')){
		 var pbal=amount/no_installment;
	$('#principal_balance').val(amount);
	$('#monthly_installment').val(pbal);
var dte=$('#date_of_loan').val();
	 var dt = new Date(dte);
         dt.setMonth( dt.getMonth() + no_installment );
	// var date=$('#date_of_loan').val();
	//  var dt = new Date("01-01-2020");
 //         dt.setMonth( dt.getMonth() + no_installment );
 formatted_date = dt.getDate() + "-" + (dt.getMonth() + 1) + "-" + dt.getFullYear()
     $('#completed_date').val(formatted_date);
	

}else if((rate!='') && (no_installment!='')){
	 var pbal=amount/no_installment;
	 var final=(pbal/100)*rate;
	 var mon=pbal+final
	 $('#monthly_installment').val(mon);
	 var interst=(amount/100)*rate;
	 $('#interest_bal').val(interst);
	 $('#principal_balance').val(amount);
	 var dte=$('#date_of_loan').val();
	 var dt = new Date(dte);
         dt.setMonth( dt.getMonth() + no_installment );
	// var date=$('#date_of_loan').val();
	//  var dt = new Date("01-01-2020");
 //         dt.setMonth( dt.getMonth() + no_installment );
     formatted_date = dt.getDate() + "-" + (dt.getMonth() + 1) + "-" + dt.getFullYear()
     $('#completed_date').val(formatted_date);
}
else if((no_installment=='') && (rate=='')){
	 
	 $('#monthly_installment').val('');
	 
	 $('#interest_bal').val('');
	 $('#principal_balance').val(amount);

}else{
	$('#principal_balance').val(amount);
}


}, 500));
// $('#no_installment').keyup(delay(function (e) {
// 	var amount=$('#amount').val();
// 	 var no_installment=$('#no_installment').val();
// 	 var pbal=amount/no_installment;
// 	$('#principal_balance').val(pbal);

// }, 500));

$(document).ready(function () {
      // $('select').selectize({
      //     sortField: 'text'
      // });
      $('#date_of_loan').datetimepicker({					
				  	format: 'DD/MM/YYYY',					
					ignoreReadonly: true,
					icons: {
				    time:'fa fa-clock-o',
				    date:'fa fa-calendar',
				    up:'fa fa-chevron-up',
				    down:'fa fa-chevron-down',
				    previous:'fa fa-chevron-left',
				    next:'fa fa-chevron-right',
				    today:'fa fa-calendar-check-o',
				    clear:'fa fa-delete',
				    close:'fa fa-times'
	 	 			},					
				}).val('<?php if(!empty($date_of_loan)){
										 echo date('d-m-Y',strtotime($date_of_loan));
										 }
										 ?>');

         $('#deduct_from').datetimepicker({					
				  	format: 'DD/MM/YYYY',					
					ignoreReadonly: true,
					icons: {
				    time:'fa fa-clock-o',
				    date:'fa fa-calendar',
				    up:'fa fa-chevron-up',
				    down:'fa fa-chevron-down',
				    previous:'fa fa-chevron-left',
				    next:'fa fa-chevron-right',
				    today:'fa fa-calendar-check-o',
				    clear:'fa fa-delete',
				    close:'fa fa-times'
	 	 			},					
				}).val('<?php if(!empty($deduct_from)){
										 echo date('d-m-Y',strtotime($deduct_from));
										 }
										 ?>');
         $('#completed_date').datetimepicker({					
				  	format: 'DD/MM/YYYY',					
					ignoreReadonly: true,
					icons: {
				    time:'fa fa-clock-o',
				    date:'fa fa-calendar',
				    up:'fa fa-chevron-up',
				    down:'fa fa-chevron-down',
				    previous:'fa fa-chevron-left',
				    next:'fa fa-chevron-right',
				    today:'fa fa-calendar-check-o',
				    clear:'fa fa-delete',
				    close:'fa fa-times'
	 	 			},					
				}).val('<?php
									if(!empty($completed_date)){
										 echo date('d-m-Y',strtotime($completed_date));
										 }
										 ?>');
  });
</script>