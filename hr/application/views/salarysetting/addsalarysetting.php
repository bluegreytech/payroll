<?php 
	 $this->load->view('common/header.php');
	 $this->load->view('common/sidebar.php');
?>
			
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
				<!-- Page Content -->
                <div class="content container-fluid">
					<div class="row">
						<div class="col-md-8 offset-md-2">
							<form action="<?php echo base_url();?>company/setsalarymonth" method="POST" id="frmsetsalary">
								<h3 class="page-title">Set Salary Month Settings</h3>
								
								<!-- DA and HRA Settings -->
								<div class="settings-widget">
									
									<div class="row">
										<div class="col-sm-12">
											<input type="hidden" name="setsalarymonth_id" value="<?php echo $setsalarymonth_id;?>">
											<div class="form-group">
												<label>Set Month</label>
												<input type="text" class="form-control" name="salary_month" id="salary_month">
											</div>
										</div>										
									</div>
								</div>
							
								<!-- Submit Button -->
								<div class="submit-section">
									<button type="submit" class="btn btn-primary submit-btn" type="submit">Save</button>
								</div>
								<!-- /Submit Button -->
								
                            </form>
						</div>
					</div>
                </div>
				<!-- /Page Content -->
				
            </div>
			<!-- /Page Wrapper -->

        </div>
		<!-- /Main Wrapper -->

		
		<!-- jQuery -->
     <?php  $this->load->view('common/footer'); ?>
<script type="text/javascript">
	$('#salary_month').datetimepicker({
		"allowInputToggle": true,
		"showClose": true,
		"showClear": true,
		"showTodayButton": true,
		ignoreReadonly: true,		
		viewMode: 'months',       		 
		format: 'YYYY-MM',		
	}).val('<?php echo ($salary_month!='0000-00') && ($salary_month!='')  ? date('Y-m', strtotime($salary_month)) : ''; ?>'); 
</script>