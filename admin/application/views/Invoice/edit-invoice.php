<?php 
	 $this->load->view('common/header.php');
	 $this->load->view('common/sidebar.php');
?>	

		<!-- Page Wrapper -->			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
				<!-- Page Content -->
                <div class="content container-fluid">
					<!-- Page Title -->
					<div class="row">
						<div class="col-sm-5 col-5">
							<h4 class="page-title">Edit Invoice</h4>
						</div>
						<div class="col-sm-7 col-7 text-right m-b-30">
						<a href="<?php echo base_url();?>Invoice" class="btn add-btn"><i class="fa fa-plus"></i>Back to List of Invoice</a>
						</div>
					</div>
					<!-- /Page Title -->


					<div class="row">
						<div class="col-md-12">
							<form>
								<div class="row">
									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Company <span class="text-danger">*</span></label>
											<select class="form-control" name="keyword2"> 
												<option desabled value="">Please select company</option>
												<?php
												if($companyData){
													foreach($companyData as $comp)
													{
												?>
													<option value="<?php echo $comp->companyname; ?>"><?php echo $comp->companyname;?></option>
												<?php
												}}
												?>
											</select>
										</div>
									</div>

									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Email</label>
											<input class="form-control" type="email" value="barrycuda@example.com">
										</div>
									</div>

									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Email</label>
											<input class="form-control" type="email" value="barrycuda@example.com">
										</div>
									</div>

									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Tax</label>
											<select class="select">
												<option>Select Tax</option>
												<option>VAT</option>
												<option selected="">GST</option>
												<option>No Tax</option>
											</select>
										</div>
									</div>

									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Client Address</label>
											<textarea class="form-control" rows="3">5754 Airport Rd, Coosada, AL, 36020</textarea>
										</div>
									</div>

									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Billing Address</label>
											<textarea class="form-control" rows="3">5754 Airport Rd, Coosada, AL, 36020</textarea>
										</div>
									</div>

									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Invoice date <span class="text-danger">*</span></label>
											<div class="cal-icon">
												<input class="form-control datetimepicker" type="text" value="2019/05/20">
											</div>
										</div>
									</div>

									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Due Date <span class="text-danger">*</span></label>
											<div class="cal-icon">
												<input class="form-control datetimepicker" type="text" value="2019/05/27">
											</div>
										</div>
									</div>

								</div>

								<div class="row">
									<div class="col-md-12 col-sm-12">
										

										<div class="table-responsive">

											<table class="table table-hover table-white">

												<tbody>

													<tr>

														<td></td>

														<td></td>

														<td></td>

														<td></td>

														<td class="text-right">Total</td>

														<td style="text-align: right; width: 230px">112</td>

													</tr>

													<tr>

														<td colspan="5" style="text-align: right">Tax</td>

														<td style="text-align: right;width: 230px">

															<input class="form-control text-right" value="0" readonly="" type="text">

														</td>

													</tr>

													<tr>

														<td colspan="5" style="text-align: right">

															Discount %

														</td>

														<td style="text-align: right; width: 230px">

															<input class="form-control text-right" value="0" type="text">

														</td>

													</tr>

													<tr>

														<td colspan="5" style="text-align: right; font-weight: bold">

															Grand Total

														</td>

														<td style="text-align: right; font-weight: bold; font-size: 16px;width: 230px">

															$ 112

														</td>

													</tr>

												</tbody>

											</table>                               

										</div>

										<div class="row">

											<div class="col-md-12">

												<div class="form-group">

													<label>Other Information</label>

													<textarea class="form-control" rows="4"></textarea>

												</div>

											</div>

										</div>

									</div>

								</div>

								<div class="submit-section">

									<button class="btn btn-primary submit-btn">Save</button>

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