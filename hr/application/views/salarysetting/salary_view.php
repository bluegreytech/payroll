<?php 
	 $this->load->view('common/header');
	 $this->load->view('common/sidebar');
?>

<!-- Page Wrapper -->
<div class="page-wrapper">
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
	<!-- Page Content -->
    <div class="content container-fluid">
	
		<!-- Page Title -->
		<div class="row pg-title">
			<div class="col-sm-5 col-4">
				<h4 class="page-title">Payslip</h4>
			</div>
			<div class="col-sm-7 col-8 text-right m-b-30">
				<div class="btn-group btn-group-sm">
					<!-- <button class="btn btn-white"><i class="fa fa-envelope-o fa-lg"></i> Send Mail</button> -->
					 <a href="<?php echo base_url().'salarysetting/salaryslip_mail/'. $empsetsalary_id;?>" class="btn btn-white" ><i class="fa fa-envelope-o fa-lg"></i> Send Email</a> 
					<button class="btn btn-white" onclick="salaryslip()"><i class="fa fa-print fa-lg"></i> Print</button>
				</div>
			</div>
		</div>
		<!-- /Page Title -->
		
		<div class="row">
			<div class="col-md-12">
				<div class="card-box" id="salaryslip">
					<?php 
					  $salary_month = date("F Y", strtotime($salary_month));
					?>	
					<h4 class="payslip-title">Payslip for the month of <?php echo $salary_month; ?></h4>
					<div class="row">
						<div class="col-sm-6 m-b-20">
							<img src="assets\img\logo.png" class="inv-logo" alt="">
							<ul class="list-unstyled mb-0">
								<?php $cmpdetail= getOneCompany($this->session->userdata('companyid')); 
								
								?>
							<?php  //echo adminfront_base_url();
                		if(!empty($cmpdetail)){  
                			   if(($cmpdetail->companyimage!='' && file_exists(adminbase_path().'/upload/company/'.$cmpdetail->companyimage))){
                			?>
                      
                       		<a href="<?php echo base_url(); ?>home/dashboard" class="logo">
                         		<img src="<?php echo adminfront_base_url().'upload/company/'.$cmpdetail->companyimage; ?>"  alt="" width="50" height="50">
                     		</a>
                	<?php }else{ ?> 
                		<a href="<?php echo base_url(); ?>home/dashboard" class="logo">
							<img src="<?php echo base_url(); ?>default/img/logo2.png"  style='width:auto;height: 50px;' alt="Payroll System">
						</a>
                	 <?php } } ?>
                	 			<li><strong><?php echo $cmpdetail->companyname; ?></strong> </li>
								<li><?php echo $cmpdetail->companyaddress; ?> </li>
								
							</ul>
						</div>
						<div class="col-sm-6 m-b-20">
							<div class="invoice-details">
								<!-- <h3 class="text-uppercase">Payslip #49029</h3> -->
								<ul class="list-unstyled">
									<li>Salary Month: <span><?php echo  date("F, Y", strtotime($created_date)); ?></span></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 m-b-20">
							<ul class="list-unstyled">
								<li><h5 class="mb-0"><strong><span><?php echo ucfirst($first_name.' '.$last_name); ?></strong></h5></li>
								<li><span><?php echo ucfirst($department.' '.$desgination); ?></span></li>
								<li>Employee ID: <?php echo $employee_code; ?></li>
								<li>Joining Date: <?php  echo date("d F Y", strtotime($joiningdate));  ?></li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div>
								<h4 class="m-b-10"><strong>Earnings</strong></h4>
								<table class="table table-bordered">
									<tbody>
                                      	<?php  $compliance_value=explode(',', $compliancevalue);
                                      	   $compliance_id=explode(',', $complianceid);
                                      	  //echo "<pre>";print_r($compliance_id);
                                      	?>
                                    	<?php 
                                    	 for($i=0;$i<count($compliance_id);$i++){
                                    	 	//echo ' '.$compliance_id[$i].'='.$compliance_value[$i];
                                    	
                                    	  $compliancedata=getcompliancename($compliance_id[$i]);
                                         //echo "<pre>";print_r($compliancedata);
                                    	  if($compliancedata->compliancetypeid=='2'){
                                     	?>
                                   	 
										<tr>
											<td><strong><?php echo $compliancedata->compliancename; ?></strong> <span class="float-right"><i class='fa fa-inr'></i> <?php echo $compliance_value[$i]; ?></span></td>
										</tr>
										
										 <?php } }
											 if(!empty($otherearningname)&&(!empty($otherearningvalue))){  
										  	 $otherearning_name=explode(',', $otherearningname); 
										    //echo "<pre>";print_r(count($otherearning_name));die;
											 $otherearning_value=explode(',', $otherearningvalue);
											

											for($i=0;$i<count($otherearning_name);$i++){
										 ?>
										 <tr>
											<td><strong><?php echo $otherearning_name[$i]; ?></strong> <span class="float-right"><i class='fa fa-inr'></i> <?php echo $otherearning_value[$i]; ?></span></td>
										</tr>

										 <?php  
										 	} } 
										 ?>
										<tr>
											<td><strong>Total Earnings</strong> <span class="float-right"><strong><i class='fa fa-inr'></i> <?php echo $gross_earning; ?></strong></span></td>
										</tr>
										
									</tbody>
								</table>
							</div>
						</div>
						<div class="col-sm-6">
							<div>
								<h4 class="m-b-10"><strong>Deductions</strong></h4>
								<table class="table table-bordered">
									<tbody>
										<?php 
                                    	 for($i=0;$i<count($compliance_id);$i++){
                                    	  $compliancedata=getcompliancename($compliance_id[$i]);
                                    	  if($compliancedata->compliancetypeid=='1'){
                                     	?>                                   	 
										<tr>
											<td><strong><?php echo $compliancedata->compliancename; ?></strong> <span class="float-right"><i class='fa fa-inr'></i> <?php echo $compliance_value[$i]; ?></span></td>
										</tr>										
										 <?php } } ?>

										 <?php
										  if(!empty($otherdeductionname)&&(!empty($otherdeductionvalue))){  
										  $otherdeduction_name=explode(',', $otherdeductionname); 
										 $otherdeduction_value=explode(',', $otherdeductionvalue);
									//	 echo "<pre>";print_r($otherdeduction_value);die;
										 for($i=0;$i<count($otherdeduction_name);$i++){
										 ?>
										 <tr>
											<td><strong><?php echo $otherdeduction_name[$i]; ?></strong> <span class="float-right"><i class='fa fa-inr'></i> <?php echo $otherdeduction_value[$i]; ?></span></td>
										</tr>

										 <?php  
										 	} }
										 ?>
									
										<tr>
											<td><strong>Total Deductions</strong> <span class="float-right"><strong><i class='fa fa-inr'></i> <?php echo $totaldeduction; ?></strong></span></td>
										</tr>

									</tbody>
								</table>
							</div>
						</div>
						<div class="col-sm-12">
							<p><strong>Net Salary: <i class='fa fa-inr'></i> <?php echo $netpay; ?></strong> (<?php echo trim($payword).'.';?>)</p>
							<p style="font-size: 13px;">This salary slip  generated by computer, So no need signature.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
	<!-- /Page Content -->
	
</div>
<!-- /Page Wrapper -->

</div>
<!-- /Main Wrapper -->

  <?php  $this->load->view('common/footer'); ?>

<script type="text/javascript">

function salaryslip(){
  window.print();
}
</script>
   