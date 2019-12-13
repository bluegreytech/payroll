<!DOCTYPE html>
<html>
<head>
<style type="text/css">
	p{
		font-weight: 100;
	}
</style>
</head>
<body>
	<table style="width:100%;max-width: 1000px;" align="center">
		<tr>
			<td valign="top">
				<!-- Main -->
				<table style="width: 100%">
					<tr>
						<td>
							<!-- Header -->
							<table style="width:100%">
								<?php 
					  $salary_month = date("F Y", strtotime($salary_month));
					?>
								<!-- Logo -->
								<tr>
									<td style="width:100%;text-align:center">
										<h1 style="font-size: 1.2rem;  font-weight: 600;color: #000;padding: 10px 0px;margin:0;text-transform: uppercase;">PAYSLIP FOR THE MONTH OF <?php echo $salary_month; ?></h1>
									</td>
								</tr>
								<tr>
									<td style="padding-bottom:10px;background-color: #fff;">
										<table width="100%" border="0" cellspacing="0" cellpadding="0">
					<tr>
				<th class="column-top" width="100%">
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td>
				<table border="0" cellspacing="0" cellpadding="0" style="width:100%">
				<tr>
			<td align="left" width="50%">
				<?php $cmpdetail= getOneCompany($this->session->userdata('companyid')); 
								
								?>
							<?php  //echo adminfront_base_url();
                		if(!empty($cmpdetail)){  
                			   if(($cmpdetail->companyimage!='' && file_exists(adminbase_path().'/upload/company/'.$cmpdetail->companyimage))){
                			?>
				<img src="<?php echo adminfront_base_url().'upload/company/'.$cmpdetail->companyimage; ?>" style="height: 90px;">

				<?php }else{ ?> 
             <img src="<?php echo base_url(); ?>default/img/logo2.png" style="height: 90px;">
				<?php } } ?>
		<h3 style="font-size: .9375rem;color: #1f1f1f;margin:0;margin-bottom: 10px;"><?php echo $cmpdetail->companyname; ?></h3>
			<p style="font-size: .9375rem;color: #1f1f1f;margin:0;margin-bottom: 10px;"><?php echo $cmpdetail->companyaddress; ?></p>
		</td>
	<td align="right" width="50%" valign="top">
<!-- <p style="font-size: .9375rem;color: #1f1f1f;margin:0;margin-bottom: 10px;">Salary Month: <span style="font-weight:500;"> <?php echo  date("F, Y", strtotime($created_date)); ?></span></p> -->
							</tr>
										</table>
																		</td>
																	</tr>
																</table>
															</th>
														</tr>
													</table>
												</td>
											</tr>
								<!-- END Logo -->
								<!-- Nav -->

							
							</table>
							<!-- END Header -->

							
								<!-- Header -->
<table width="100%" border="0" cellspacing="0" cellpadding="0">
								
			<tr>
		<td class="pb30" style="padding-bottom:10px;background-color: #fff;">
					<table width="100%" border="0" cellspacing="0" cellpadding="0">
										<tr>
								<th class="column-top" width="100%">
								<table width="100%" border="0" cellspacing="0" cellpadding="0">
									<tr>
								<td>
							<table border="0" cellspacing="0" cellpadding="0" width="100%">
						<tr>
						<td align="left" width="100%">
					<h3 style="font-size: .9375rem;margin:10px 0px;"><?php echo ucfirst($first_name.' '.$last_name); ?></h3>
				<p style="font-size: .9375rem;color: #1f1f1f;margin:0;margin-bottom: 10px;"><?php echo ucfirst($department.' '.$desgination); ?></p>
			<p style="font-size: .9375rem;color: #1f1f1f;margin:0;margin-bottom: 10px;">Employee ID: <?php echo $employee_code; ?></p>
		<p style="font-size: .9375rem;color: #1f1f1f;margin:0;margin-bottom: 10px;">Joining Date:<span><?php  echo date("d F Y", strtotime($joiningdate));  ?></span></p>
			</td>
			</tr>
	</table>
	</td>
	</tr>
</table>
	</th>
		</tr>
			</table>
	</td></tr>
								<!-- END Logo -->
								<!-- Nav -->

							
							</table>
							<!-- END Header -->
								
							

							<!-- Header -->

<table width="100%" border="0" cellspacing="0" cellpadding="0">
								
								<tbody><tr>
									<td valign="top">
										<table width="100%" border="0" cellspacing="0" cellpadding="0" style="padding: 0px 6px;">
											<tbody><tr>
												<th class="column-top" width="100%">
													<table width="100%" border="0" cellspacing="0" cellpadding="0">
														<tbody><tr>
															<td>
																<table border="0" cellspacing="0" cellpadding="0" width="100%">
																	<tbody><tr>
																		<td align="left" width="100%">
																			<h5 style="font-size: .9375rem;margin:14px 0px;">Earnings</h5>
																		</td>
																	</tr>
																</tbody></table>
															</td>
														</tr>
														<?php  $compliance_value=explode(',', $compliancevalue);
                                      	   $compliance_id=explode(',', $complianceid);
                                      	?>
                                    	<?php 
                                    	 for($i=0;$i<count($compliance_id);$i++){
                                    	 	
                                    	  $compliancedata=getcompliancename($compliance_id[$i]);
                                         //echo "<pre>";print_r($compliancedata);
                                    	  if($compliancedata->compliancetypeid=='2'){
                                     	?>
														<tr>
															<td style="border:1px solid #dee2e6;padding: 0px 8px;">
																<table border="0" cellspacing="0" cellpadding="0" width="100%">
																	<tbody><tr>
																		<td align="left" width="50%">
																			<h3 style="font-size: 0.875rem;margin:10px 0px;"><?php echo $compliancedata->compliancename; ?></h3>
																		</td>
																		<td align="right" width="50%">
																			<p style="font-size: 0.875rem;margin:10px 0px;"><?php echo $compliance_value[$i]; ?></p>
																		</td>
																	</tr>
																</tbody></table>
															</td>
														</tr>
														<?php
										}}
										 if(!empty($otherearningname)&&(!empty($otherearningvalue))){  
										  	 $otherearning_name=explode(',', $otherearningname); 
										    //echo "<pre>";print_r(count($otherearning_name));die;
											 $otherearning_value=explode(',', $otherearningvalue);
											

											for($i=0;$i<count($otherearning_name);$i++){
										?>
															<tr>
															<td style="border:1px solid #dee2e6;padding: 0px 8px;">
																<table border="0" cellspacing="0" cellpadding="0" width="100%">
																	<tbody><tr>
																		<td align="left" width="50%">
																			<h3 style="font-size: 0.875rem;margin:10px 0px;"><?php echo $otherearning_name[$i]; ?></h3>
																		</td>
																		<td align="right" width="50%">
																			<p style="font-size: 0.875rem;margin:10px 0px;"><?php echo $otherearning_value[$i]; ?></p>
																		</td>
																	</tr>
																</tbody></table>
															</td>
														</tr>
													
										 <?php  
										 	} } 
										 ?>
														<tr>
															<td style="border: 1px solid #dee2e6;padding: 0px 8px;">
																<table border="0" cellspacing="0" cellpadding="0" width="100%">
																	<tbody><tr>
																		<td align="left" width="50%">
																			<h3 style="font-size: 0.875rem;margin:10px 0px;">Total Earnings</h3>
																		</td>
																		<td align="right" width="50%">
																			<p style="font-size: 0.875rem;margin:10px 0px;"><?php echo $gross_earning; ?></p>
																		</td>
																	</tr>
																</tbody></table>
															</td>
														</tr>
														
													</tbody></table>
												</th>
											</tr>
										</tbody></table>
									</td>
									<td valign="top">
										<table width="100%" border="0" cellspacing="0" cellpadding="0" style="padding: 0px 6px;">
											<tbody><tr>
												<th class="column-top" width="100%">
													<table width="100%" border="0" cellspacing="0" cellpadding="0">
														<tbody><tr>
															<td>
																<table border="0" cellspacing="0" cellpadding="0" width="100%">
																	<tbody><tr>
																		<td align="left" width="100%">
																			<h5 style="font-size: .9375rem;margin:14px 0px;">Deductions</h5>
																		</td>
																	</tr>
																</tbody></table>
															</td>
														</tr>

														<?php 
                                    	 for($i=0;$i<count($compliance_id);$i++){
                                    	  $compliancedata=getcompliancename($compliance_id[$i]);
                                    	  if($compliancedata->compliancetypeid=='1'){
                                     	?>    
														<tr>
															<td style="border:1px solid #dee2e6;padding: 0px 8px;">
																<table border="0" cellspacing="0" cellpadding="0" width="100%">
																	<tbody>
                                               
																		<tr>
																		<td align="left" width="50%">
																			<h3 style="font-size: 0.875rem;margin:10px 0px;"><?php echo $compliancedata->compliancename; ?></h3>
																		</td>
																		<td align="right" width="50%">
																			<p style="font-size: 0.875rem;margin:10px 0px;"><?php echo $compliance_value[$i]; ?></p>
																		</td>
																	</tr>
																</tbody></table>
															</td>
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
															<td style="border: 1px solid #dee2e6;padding: 0px 8px;">
																<table border="0" cellspacing="0" cellpadding="0" width="100%">
																	<tbody><tr>
																		<td align="left" width="50%">
																			<h3 style="font-size: 0.875rem;margin:10px 0px;"><?php echo $otherdeduction_name[$i]; ?></h3>
																		</td>
																		<td align="right" width="50%">
																			<p style="font-size: 0.875rem;margin:10px 0px;"><?php echo $otherdeduction_value[$i]; ?></p>
																		</td>
																	</tr>
																</tbody></table>
															</td>
														</tr>
														 <?php  
										 	} }
										 ?>
														<tr>
															<td style="border: 1px solid #dee2e6;padding: 0px 8px;">
																<table border="0" cellspacing="0" cellpadding="0" width="100%">
																	<tbody><tr>
																		<td align="left" width="50%">
																			<h3 style="font-size: 0.875rem;margin:10px 0px;">Total Deductions</h3>
																		</td>
																		<td align="right" width="50%">
																			<p style="font-size: 0.875rem;margin:10px 0px;"><?php echo $totaldeduction; ?></p>
																		</td>
																	</tr>
																</tbody></table>
															</td>
														</tr>
													</tbody></table>
												</th>
											</tr>
										</tbody></table>
									</td>
								</tr>

							</tbody></table>


							<table width="100%" border="0" cellspacing="0" cellpadding="0">
								
								<tbody><tr>
									<td class="pb30" style="padding-bottom:30px;background-color: #fff;">
										<table width="100%" border="0" cellspacing="0" cellpadding="0" style="padding: 8px 10px;">
														<tbody><tr>
															<th class="column-top" width="100%">
																<table width="100%" border="0" cellspacing="0" cellpadding="0">
																	<tbody><tr>
															<td>
									<table border="0" cellspacing="0" cellpadding="0" width="100%">
												<tbody><tr>
													<td align="left" width="100%">
											<h3 style="font-size: .9375rem;">Net Salary: <?php echo $netpay; ?> (<?php echo trim($payword).'.';?>)</h3>
													<p style="font-size: .9375rem;color: #1f1f1f;">This salary slip generated by computer, So no need signature.</p>
																					</td>
																				</tr>
																			</tbody></table>
																		</td>
																	</tr>
																</tbody></table>
															</th>
														</tr>
													</tbody></table>
												</td>
											</tr>
								<!-- END Logo -->
								<!-- Nav -->

							
							</tbody></table>
								<!-- Header -->
		
							<!-- END Header -->
					</td>
					</tr>
				</table>
				<!-- END Main -->

			</td>
		</tr>
	</table>
</body>
</html>
