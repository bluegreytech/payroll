<?php 
	 $this->load->view('common/header.php');
	 $this->load->view('common/sidebar.php');
?>
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
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
							<?php if(($this->session->flashdata('warnin'))){ ?>
							<div class="alert alert-danger" id="warningMessage">
							<strong> <?php echo $this->session->flashdata('warnin'); ?></strong> 
							</div>
							<?php } ?>
				<!-- Page Content -->
                <div class="content container-fluid">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
							<div class="dash-widget clearfix card-box">
								<span class="dash-widget-icon"><i class="fa fa-user"></i></span>
								<div class="dash-widget-info">
									<h3><?php  echo count($empdata);?></h3>
									<a href="<?php echo base_url()?>employee/emplist"><span>Total Employees</span></a>
								</div>
							</div>
						</div>
					<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
								<div class="dash-widget clearfix card-box">
								<span class="dash-widget-icon"><i class="fa fa-user"></i></span>
								<div class="dash-widget-info">
									<h3><?php echo count($hrData);?></h3>
									<a href="<?php echo base_url()?>hr/hrlist"><span> Total HR</span></a>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
							<div class="dash-widget clearfix card-box">
								<span class="dash-widget-icon"><i class="fa fa-calendar-check-o"></i></span>
								<div class="dash-widget-info">
									<h3><?php echo count($leave);?></h3>
									<a href="<?php echo base_url()?>leave/leavelist"><span> Total Leave Types</span></a>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
							<div class="dash-widget clearfix card-box">
								<span class="dash-widget-icon"><i class="fa fa-calendar-check-o"></i></span>
								<div class="dash-widget-info">
									<h3><?php echo count($holiday);?></h3>
									<a href="<?php echo base_url()?>holiday/holidaylist"><span>Holidays</span></a>
								</div>
							</div>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-6 text-center">
									<div class="card-box">
										<h3 class="card-title">Total Revenue</h3>
										<div id="bar-charts"></div>
									</div>
								</div>
								<div class="col-md-6 text-center">
									<div class="card-box">
										<h3 class="card-title">Sales Overview</h3>
										<div id="line-charts"></div>
									</div>
								</div>
								<!-- <div class="col-md-6 text-center">
									<div class="card-box">
										<h3 class="card-title">Invoice Status</h3>
										<div id="area-charts"></div>
									</div>
								</div>
								<div class="col-md-6 text-center">
									<div class="card-box">
										<h3 class="card-title">Overall Status</h3>
										<div id="pie-charts"></div>
									</div>
								</div> -->
							</div>
						</div>
					</div>
					
					<div class="row" style="margin-top:30px">
						<div class="col-md-6">
							<div class="card card-table">
								<div class="card-header">
									<h3 class="card-title mb-0">Recent Employee</h3>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-striped custom-table mb-0">
											<thead>
												<tr>
													<th>Name</th>
													<th>Email</th>
													<th>Contact Number</th>
													<th>Joining Date</th>
												</tr>
											</thead>
											<tbody>
												<?php
						
						if($employee){  
						foreach($employee as $row)
						{ 
						 //echo "<pre>";print_r($row);          
						?>
												<tr>
													<td>
														<?php 	
							 if(($row->ProfileImage!='' && file_exists(base_path().'/upload/emp/'.$row->ProfileImage))){  ?>
								<h2 class="table-avatar">
								
								<img src="<?php echo base_url();?>upload/emp/<?php echo $row->ProfileImage;?>" alt="" class="avatar">
								<?php echo ucfirst($row->first_name.' '.$row->last_name);?> 
								</h2>
							<?php
							}
							else
							{ 
							?>
								<h2 class="table-avatar">
								
								<img src="<?php echo base_url();?>upload/no_image/user_no_image.png" alt="" class="avatar">
								<?php echo ucfirst($row->first_name.' '.$row->last_name);?> 
							</h2>
							<?php
							}
							?>
													</td>
													<td><?php echo $row->email;?></td>
												<td><?php echo $row->phone;?></td>
												<td><?php echo date("d M Y",strtotime($row->joiningdate));?></td>
												</tr>
											<?php
										}
									}
										?>
											
												
											</tbody>
										</table>
									</div>
								</div>
								<div class="card-footer">
									<a href="<?php echo base_url()?>employee/emplist">View all Employees</a>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="card card-table">
								<div class="card-header">
									<h3 class="card-title mb-0">Recent Leaves</h3>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-striped custom-table mb-0">
											<thead>
												<tr>
											<th>Employee</th>
											<th>Leave Type</th>
											<th>From</th>
											<th>To</th>
												</tr>
											</thead>
											<tbody>
												<?php 

									// if($attmonth!=''){
									//                  $at_month=date('m',strtotime($attmonth)); 
									//   $at_year=date('Y',strtotime($attmonth));
									//    }
									if(!empty($result)){					


									foreach($result as $row){ 
									//echo "<pre>";print_r($row);
									?>
												<tr>
													<td>
														<h2 class="table-avatar">
												<?php 
												if(($row->ProfileImage!='' && file_exists(base_path().'/upload/emp/'.$row->ProfileImage))){  ?>

												<img src="<?php echo base_url();?>upload/emp/<?php echo $row->ProfileImage;?>" alt="" class="avatar avatar-xs">
												<a href="#"><?php echo ucfirst($row->first_name.' '.$row->last_name); ?> <span><?php echo ucfirst($row->desgination);?></span></a>
												<?php
												}
												else
												{ 
												?>
												<img src="<?php echo base_url();?>upload/no_image/user_no_image.png" alt="" class="avatar avatar-xs">
												<a href="<?php echo base_url() ?>/"><?php echo ucfirst($row->first_name.' '.$row->last_name); ?> <span><?php echo ucfirst($row->desgination);?></span></a>
												<?php
												}
												?>													
												</h2>
														
													</td>
													<td>
														<?php echo get_leavetype_name(ucfirst($row->typeofleave));?>
													</td>
													<td class="text-right">
														<?php echo date("d M Y",strtotime($row->leavefrom)); ?>
													</td>

													<td class="text-right">
														<?php echo date("d M Y",strtotime($row->leaveto)); ?>
													</td>
												</tr>
											<?php }  } ?>
											</tbody>
										</table>
									</div>
								</div>
								<div class="card-footer">
									<a href="<?php echo base_url()?>leave/empleavelist">View all Leaves</a>
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
		
		<!-- Sidebar Overlay -->
		<div class="sidebar-overlay" data-reff=""></div>
		
		<!-- jQuery -->
        <!-- <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> -->
        <script src="<?php echo base_url(); ?>default/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="<?php echo base_url(); ?>default/js/popper.min.js"></script>
        <script src="<?php echo base_url(); ?>default/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
		<script src="<?php echo base_url(); ?>default/js/jquery.slimscroll.min.js"></script>
		
		<!-- Chart JS -->
		<script src="<?php echo base_url(); ?>default/plugins/morris/morris.min.js"></script>
		<script src="<?php echo base_url(); ?>default/plugins/raphael/raphael.min.js"></script>
		<script src="<?php echo base_url(); ?>default/js/chart.js"></script>
		
		<!-- Custom JS -->
		<script src="<?php echo base_url(); ?>default/js/app.js"></script>
		<script src="<?php echo base_url(); ?>default/js/moment.min.js"></script>
		<script src="<?php echo base_url(); ?>default/js/bootstrap-datetimepicker.min.js"></script>	
    </body>
</html>


<script>
<?php // echo $selectdatedata->selecteddate; ?>
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

	$('#alldate').datetimepicker({
				   	format: 'YYYY-MM',
					maxDate: new Date(),
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
				}).val('<?php echo ($selectdatedata->selecteddate!='0000-00')&&($selectdatedata->selecteddate!='')  ? date('Y-m', strtotime($selectdatedata->selecteddate)) : ''; ?>');

  $("#alldate").on("dp.change", function() {
        selecteddate=$("#alldate").val();
       // alert($("#alldate").val());
       	url="<?php echo base_url();?>";

       	$.ajax({
		url: url+'dashboard/selecteddate',
		type: 'post',
		data:{selecteddate:selecteddate},
        success:function(response){
			var response = JSON.parse(response);
			
        }
		});
  });
	        
</script>
<script type="text/javascript">
	
	 Morris.Bar({
	 	element: 'bar-charts',
	 	data: [
	 	<?php
	 	foreach($revenue as $val){
	 		$month= $val->salary_month;
	 		$m=explode('-',$month);
	 		
	 		?>
	 	{ y: '<?php echo $m[1]?>', a: <?php echo $val->earn?>, b: <?php echo $val->deduction?> },
	 	
			<?php
		}
		?>
	 	],
	 	xkey: 'y',
	 	ykeys: ['a', 'b'],
	 	labels: ['Total Earning', 'Total Deduction'],
	 	lineColors: ['#3ae1f2','#0093a2'],
	 	lineWidth: '3px',
		barColors: ['#3ae1f2','#0093a2'],
	 	resize: true,
	 	redraw: true
	 });
</script>
		