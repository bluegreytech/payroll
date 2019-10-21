﻿<!DOCTYPE html>
<html>
<head>

</head>
<body>
	<table style="width:100%">
		<tr>
			<td align="center" valign="top">
				<!-- Main -->
				<table>
					<tr>
						<td>
							<!-- Header -->
							<table style="width:100%">
								
								<!-- Logo -->
								<tr>
									<!-- <td style="width:100%;text-align:center">
										<h1 style="font-size: 1.875rem;  font-weight: 600;color: #000;padding: 10px 0px;margin:0;">Payroll System</h1>
										
								  </td> -->
								</tr>
								<tr>
									<td style="padding-bottom:30px;background-color: #fff;">
										<table width="100%" border="0" cellspacing="0" cellpadding="0">
														<tr>
															<th class="column-top" width="100%">
																<table width="100%" border="0" cellspacing="0" cellpadding="0">
																	<tr>
																		<td>
																			<table border="0" cellspacing="0" cellpadding="0" style="width:100%">
																				<tr>
																					<td align="left" width="50%">
																						<img src="<?php echo base_path(); ?>default/img/Company/companylogo/logo.jpg" style="width:100%;height:200px;width:200px;>
																						<h5 style="font-weight: 500;font-size: .9375rem;margin:10px 0px;"><strong>Invoice From:</strong></h5>
																						<p style="font-size: .9375rem;color: #1f1f1f;margin:0;margin-bottom: 10px;">Name: <span style="font-weight:500;"><?php echo $Adminname; ?></span></p>
																						<p style="font-size: .9375rem;color: #1f1f1f;margin:0;margin-bottom: 10px;">Email: <span style="font-weight:500;"> <?php echo $Emailaddress;?></span></p>
																						<p style="font-size: .9375rem;color: #1f1f1f;margin:0;margin-bottom: 10px;">Mobile:  <span style="font-weight:500;"><?php echo $Mobilenumber; ?></span></p>
																						<p style="font-size: .9375rem;color: #1f1f1f;margin:0;margin-bottom: 10px;">Address:  <span style="font-weight:500;"><?php echo $Officeaddress;?></span></p>
																						<p style="font-size: .9375rem;color: #1f1f1f;margin:0;margin-bottom: 10px;">GST Number:  <span style="font-weight:500;"><?php echo $Gstnumber;?></span></p>
																					</td>
																					<td align="right" width="50%" valign="top">
																						<h3 style="text-transform: uppercase;color:#000;font-size: 1.5rem;margin:10px 0px;">#P<?php echo date('Ym')?>-<?php echo $invoicebillid;?></h3>
																						<p style="font-size: .9375rem;color: #1f1f1f;margin:0;margin-bottom: 10px;">Date:<span style="font-weight:500;"> <?php 	$originalDate = $invoicedate;

echo $newDate = date("M d, Y", strtotime($originalDate));?></span></p>
																						<p style="font-size: .9375rem;color: #1f1f1f;margin:0;margin-bottom: 10px;">Due Date:<span style="font-weight:500;"> <?php 	$originalDate = $duedate;

echo $newDate = date("M d, Y", strtotime($originalDate));?></span></p>

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
									<td class="pb30" style="padding-bottom:30px;background-color: #fff;">
										<table width="100%" border="0" cellspacing="0" cellpadding="0" style="padding: 0px 10px;">
														<tr>
															<th class="column-top" width="100%">
																<table width="100%" border="0" cellspacing="0" cellpadding="0">
																	<tr>
																		<td>
																			<table border="0" cellspacing="0" cellpadding="0" width="100%">
																				<tr>
																					<td align="left" width="60%">
																						<h3 style="text-transform: uppercase;font-size: .9375rem;margin:10px 0px;">Invoice to:</h3>
																						<p style="font-weight: 500;font-size: .9375rem;color: #1f1f1f;margin:0;margin-bottom: 10px;"><?php echo $companyname; ?></p>
																						<p style="font-weight: 500;font-size: .9375rem;color: #1f1f1f;margin:0;margin-bottom: 10px;"><?php echo $companyaddress; ?></p>
																						<p style="font-weight: 500;font-size: .9375rem;color: #1f1f1f;margin:0;margin-bottom: 10px;"><?php echo $companycity; ?></p>
																						<p style="font-weight: 500;font-size: .9375rem;color: #1f1f1f;margin:0;margin-bottom: 10px;"><?php echo $comcontactnumber; ?></p>
																					</td>
																					<td align="left" width="40%">
																						<h3 style="text-transform: uppercase;font-size: .9375rem;margin:10px 0px;">Payment Details:</h3>
																						<p style="font-size: 0.875rem;margin:0;margin-bottom: 10px;">Total Due: <span style="float:right;text-align: right;font-weight:500;"><?php echo $netamount; ?></span></p>
																						<p style="font-size: 0.875rem;margin:0;margin-bottom: 10px;">Bank name: <span style="float:right;text-align: right;font-weight:500;"><?php echo $Bankname; ?></span></p>
																						<p style="font-size: 0.875rem;margin:0;margin-bottom: 10px;">Account Number: <span style="float:right;text-align: right;font-weight:500;"><?php echo $Accountnumber; ?></span></p>
																						<p style="font-size: 0.875rem;margin:0;margin-bottom: 10px;">Branch City: <span style="float:right;text-align: right;font-weight:500;"><?php echo $Branch; ?></span></p>
																						<p style="font-size: 0.875rem;margin:0;margin-bottom: 10px;">IFSC code: <span style="float:right;text-align: right;font-weight:500;"><?php echo $Ifsccode; ?></span></p>
																					</td>
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
									<td>
										<table width="100%" border="0" cellspacing="0" cellpadding="0" style="padding: 0px 10px;">
														<tr>
															<th class="column-top" width="100%">
																<table width="100%" border="0" cellspacing="0" cellpadding="0" width="100%">
																	<tr>
																		<td style="border-top: 1px solid #dee2e6;">
																			<table border="0" cellspacing="0" cellpadding="0" width="100%">
																				<tr>
																					<td align="left">
																						<h5 style="font-size: 0.875rem;margin:10px 0px;"><strong>Subtotal:</strong></h5>
																					</td>
																					<td align="right">
																						<h5 style="font-weight: 500;font-size: 0.875rem;margin:10px 0px;"><span style="font-weight:500;"><?php echo $totalamount; ?></span></h5>
																					</td>
																				</tr>
																			</table>
																		</td>
																	</tr>
																	<tr>
																		<td style="border-top: 1px solid #dee2e6;">
																			<table border="0" cellspacing="0" cellpadding="0" width="100%">
																				<tr>
																					<td align="left">
																						<h5 style="font-size: 0.875rem;margin:10px 0px;"><span>Total Tax:</span></h5>
																					</td>
																					<td align="right">
																						<h5 style="font-weight: 500;font-size: 0.875rem;margin:10px 0px;"><span><?php echo $addtax; ?>%</span></h5>
																					</td>
																				</tr>
																			</table>
																		</td>
																	</tr>
																	<tr>
																		<td style="border-top: 1px solid #dee2e6;">
																			<table border="0" cellspacing="0" cellpadding="0" width="100%">
																				<tr>
																					<td align="left">
																						<h5 style="font-size: 0.875rem;margin:10px 0px;"><span>GST Tax Amount:</span></h5>
																					</td>
																					<td align="right">
																						<h5 style="font-weight: 500;font-size: 0.875rem;margin:10px 0px;"><span><?php echo $taxamount; ?></span></h5>
																					</td>
																				</tr>
																			</table>
																		</td>
																	</tr>
																	<tr>
																		<td style="border-top: 1px solid #dee2e6;">
																			<table border="0" cellspacing="0" cellpadding="0" width="100%">
																				<tr>
																					<td align="left">
																						<h5 style="font-size: 0.875rem;margin:10px 0px;"><span>CGST Tax Amount:</span></h5>
																					</td>
																					<td align="right">
																						<h5 style="font-weight: 500;font-size: 0.875rem;margin:10px 0px;"><span><?php echo $cgstamount; ?></span></h5>
																					</td>
																				</tr>
																			</table>
																		</td>
																	</tr>
																	<tr>
																		<td style="border-top: 1px solid #dee2e6;">
																			<table border="0" cellspacing="0" cellpadding="0" width="100%">
																				<tr>
																					<td align="left">
																						<h5 style="font-size: 0.875rem;margin:10px 0px;"><span>Net Amount:</span></h5>
																					</td>
																					<td align="right">
																						<h5 style="font-weight: 500;font-size: 0.875rem;margin:10px 0px;"><span><?php echo $netamount; ?><span></h5>
																					</td>
																				</tr>
																			</table>
																		</td>
																	</tr>
																	<tr>
																		<td style="border-top: 1px solid #dee2e6;">
																			<table border="0" cellspacing="0" cellpadding="0" width="100%">
																				<tr>
																					<td align="left">
																						<h5 style="font-size: 0.875rem;line-height: 18px;margin:10px 0px;"><span>Other Information</span></h5>
																					</td>
																					<td align="right">
																						<h5 style="padding-left: 20px;text-align: left;font-weight: 500;font-size: 0.875rem;line-height: 18px;margin:10px 0px;"><span><?php echo $Otherinformation; ?> <span></h5>
																					</td>
																				</tr>
																			</table>
																		</td>
																	</tr>
																	<tr>
																		<td style="border-top: 1px solid #dee2e6;">
																			<table border="0" cellspacing="0" cellpadding="0" width="100%">
																				<tr>
																					<td align="left">
																						<h5 style="font-size: .9375rem;color: #1f1f1f;margin:10px 0px;">This invoice is generated by Computer, So no need sign.</h5>
																					</td>
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
										
							</table>
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
