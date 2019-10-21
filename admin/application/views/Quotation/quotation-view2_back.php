<!DOCTYPE html>
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
									<td style="width:100%;text-align:center">
										<h1 style="font-size: 1.875rem;  font-weight: 600;color: #000;padding: 10px 0px;margin:0;">Payroll System</h1>	
								  </td>
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
																						<img src="<?php echo base_url();?>default/img/Company/companylogo/logo.jpg" style="width:100%">
																					</td>
																					<td align="right" width="50%" valign="top">
																						<h3 style="text-transform: uppercase;color:#000;font-size: 1.5rem;margin:10px 0px;">Ref.No-<?php echo $billid;?></h3>
																						<p style="font-size: .9375rem;color: #1f1f1f;margin:0;margin-bottom: 10px;">Created Date: <span style="font-weight:500;"><?php $originalDate = $quotationdate;
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
																					<td align="left" width="100%">
																						<h3 style="text-transform: uppercase;font-size: .9375rem;margin:10px 0px;">QUOTATION TO:</h3>
																						<p style="font-size: .9375rem;color: #1f1f1f;margin:0;margin-bottom: 10px;"><?php echo $companyname; ?></p>
																						<p style="font-size: .9375rem;color: #1f1f1f;margin:0;margin-bottom: 10px;"><?php echo $companyaddress; ?></p>
																						<p style="font-size: .9375rem;color: #1f1f1f;margin:0;margin-bottom: 10px;"><?php echo $companyemail; ?></p>
																						<p style="font-size: .9375rem;color: #1f1f1f;margin:0;margin-bottom: 10px;"><?php echo $comcontactnumber; ?></p>
																						<p style="font-size: .9375rem;color: #1f1f1f;margin:0;margin-bottom: 30px;"></p>
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
								
							

							<!-- Header -->
							<table width="100%" border="0" cellspacing="0" cellpadding="0">	
								<tr>
									<td>
										<table width="100%" border="0" cellspacing="0" cellpadding="0" style="padding: 0px 10px;">
											<tr>
												<th class="column-top" width="100%">
													<table width="100%" border="0" cellspacing="0" cellpadding="0" width="100%">
														<tr>
															<td>
																<table border="0" cellspacing="0" cellpadding="0" width="100%">
																	<tr>
																		<td align="center" width="100%">
																			<h5 style="font-size: 1.5rem;margin:14px 0px;text-decoration: underline;">Quotation
																		</td>
																	</tr>
																</table>
															</td>
														</tr>
														<tr>
															<td style="border-top: 1px solid #dee2e6;background-color: #eee;padding: 0px 8px;">
																<table border="0" cellspacing="0" cellpadding="0" width="100%">
																	<tr>
																		<td align="left" width="10%">
																			<h5 style="font-size: 0.875rem;margin:10px 0px;">Sr. No</h5>
																		</td>
																		<td align="left" width="25%">
																			<h5 style="font-size: 0.875rem;margin:10px 0px;">Work</h5>
																		</td>
																		<td align="left" width="60%">
																			<h5 style="font-size: 0.875rem;margin:10px 0px;">Particular</h5>
																		</td>
																		<td align="left" width="5%">
																			<h5 style="font-size: 0.875rem;margin:10px 0px;">Rate (Rs.)</h5>
																		</td>
																	</tr>
																</table>
															</td>
														</tr>
														<tr>
															<td style="border-top: 1px solid #dee2e6;padding: 0px 8px;">
																<table border="0" cellspacing="0" cellpadding="0" width="100%">
																<?php
																	$i=1;
																	if($quotationtData){                             
																	foreach($quotationtData as $quot)
																	{
																?>
																	<tr>
																		<td align="left" width="10%">
																			<h5 style="font-size: 0.875rem;margin:10px 0px;"><?php echo $i;?></h5>
																		</td>
																		<td align="left" width="25%">
																			<h5 style="font-size: 0.875rem;margin:10px 0px;"><span><?php echo $companytype ;?></span></h5>
																		</td>
																		<td align="left" width="60%">
																			<h5 style="font-size: 0.875rem;margin:10px 0px;"><?php echo $quot->quotationdetail;?></h5>
																		</td>
																		<td align="left" width="5%">
																			<h5 style="font-size: 0.875rem;margin:10px 0px;"><span><?php echo $quot->quotationrate;?></span></h5>
																		</td>
																	</tr>
																	<?php
																	$i++;
																		} }
																	?>  
																</table>
															</td>
														</tr>
														<tr>
															<td style="border-top: 1px solid #dee2e6;padding: 0px 8px;">
																<table border="0" cellspacing="0" cellpadding="0" width="100%">
																	<tr>
																		<td align="left" width="100%">
																			<p style="font-weight: 500;font-size: 0.875rem;line-height: 18px;"><strong>Thanking you,</strong></p>
																			<p style="font-size: 0.875rem;line-height: 18px;">Yours sincerely,</p>
																			<p style="font-weight: 500;font-size: 0.875rem;line-height: 18px;"><strong>Prashant Parmar</strong></p>
																			<p style="font-weight: 500;font-size: 0.875rem;line-height: 18px;"><strong>M 9099912602</strong></p>
																		</td>
																	</tr>
																</table>
															</td>
														</tr>
														<tr>
															<td style="border-top: 1px solid #dee2e6;padding: 0px 8px;">
																<table border="0" cellspacing="0" cellpadding="0" width="100%">
																	<tr>
																		<td align="left">
																			<h5 style="font-size: 0.875rem;margin:10px 0px;">Other Information</h5>
																			<h5 style="font-weight:500;font-size: .9375rem;color: #1f1f1f;margin:10px 0px;"><?php echo $otherinformation; ?></h5>
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
							
					</td>
					</tr>
				</table>
				<!-- END Main -->

			</td>
		</tr>
	</table>
</body>
</html>
