<?php 
	 $this->load->view('common/header');
	 $this->load->view('common/sidebar');
?>
			<!-- Page Wrapper -->
<div class="page-wrapper">
    <div class="content container-fluid">
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
	<?php if(($this->session->flashdata('warning'))){ ?>
	<div class="alert alert-warning" id="warningMessage">
		<strong> <?php echo $this->session->flashdata('warning'); ?></strong> 
	</div>
	<?php } ?>
<div class="row">
	<div class="col-sm-8 col-5">
	<h4 class="page-title">List of Attendance : <?php if($attmonth==''){echo $cmonth = date('F',strtotime('last month')); }else{echo $cmonth=date('F',strtotime($attmonth));} ?></h4>
	</div>
	<div class="col-sm-4 col-7 text-right m-b-30">
	<!-- <a href="<?php echo base_url()?>attendance/addattendance" class="btn add-btn" ><i class="fa fa-plus"></i> Add Attendance
	</a> -->
	</div>
</div>

<!-- Search Filter -->
<form method="post" action="<?php echo base_url();?>attendance/searchattendancelist/<?php echo $sid?>" id="frm_search">
<div class="row filter-row">
	
	<div class="col-sm-4"> 
		<div class="form-group form-focus">
				<input type="text" class="form-control floating" name="empname" value="<?php echo $empname;?>">
			<label class="focus-label">Employee Name</label>
		</div>
	</div>
	<div class="col-sm-4"> 
		<div class="form-group form-focus">
			<input type="text" name="attmonth" class="form-control floating" id="attmonth" value="<?php echo $attmonth;?>">
			<label class="focus-label">Select Month</label>
		</div>
	</div>
	<!-- <div class="col-sm-3"> 
		<div class="form-group form-focus select-focus">

			<input type="text" name="attyear" class="form-control" id="attyear">
				<label class="focus-label">Select Year</label>
		</div>
	</div> -->
	<div class="col-sm-3">  
		<input type="submit" class="btn btn-success btn-block" name="search" id="btnsearch" value="Search">  
	</div>
	<div class="col-md-1"> 
		<a href="<?php echo base_url()?>attendance/<?php echo $redirect_page;?>" class="btn btn-info"><i class="fa fa-refresh"></i></a> 	
		</div>     
	   
</div>
</form>  	
<!-- /Search Filter -->
	 <?php //$data = array('days' => array(), 'attendance_id' => array(),'attendancename'=> array());
	// 					foreach ($result as $row) {
	// 						//echo "<pre>";print_r($row);
	// 					$data['days'][]  = $row->attendance_date;
	// 					$data['attendance_id'][] = $row->attendance_id;
	// 					$data['attendancename'][] = $row->first_name;


	// 					}
					?>
<div class="row">
    <div class="col-lg-12">
		<div class="table-responsive">
			<?php
			if(!empty($result)){
				?>
			
			<table class="table table-nowrap display nowrap">
				<thead>
					<tr>
						<th>Employee</th>
						<?php  
							if($attmonth==''){
							$cmonth= date('m',strtotime('last month')); 
							$cyear=date('Y');
							$totalmonth=cal_days_in_month(CAL_GREGORIAN, date('m',strtotime('last month')),date('Y'));
							}else{	
								 $cmonth=  date('m',strtotime($attmonth));
								$cyear=date('Y',strtotime($attmonth));	   	
								 $totalmonth=cal_days_in_month(CAL_GREGORIAN,date('m',strtotime($attmonth)),date('Y',strtotime($attmonth))); 
							// cal_days_in_month(CAL_GREGORIAN, date('m',$at_month,$at_year));
							}
						
                    	//echo $totalmonth;die;
						for($i=1;$i<=$totalmonth;$i++){ 
						 $monthdate= date($cyear.'-'.$cmonth.'-'.$i);
		       			   $days = date("D", strtotime($monthdate));
		       			  if($days=='Sun'){ ?>
                           <th style="color: red;"><?php echo  $days.' '. $i;?></th>
						<?php }else{ ?>
                          <th ><?php echo  $days.' '. $i;?></th>
						<?php } } ?>						
					</tr>
				</thead>
				<tbody>

				<?php 
					
					// if($attmonth!=''){
     //                  $at_month=date('m',strtotime($attmonth)); 
					//   $at_year=date('Y',strtotime($attmonth));
				 //    }
				if(!empty($result)){					
                 // print_r($result);

                    if($attmonth==''){
				   	   $totalmonth=cal_days_in_month(CAL_GREGORIAN, date('m',strtotime('last month')),date('Y'));
				   }else{
				  				   	
				   	  $totalmonth=cal_days_in_month(CAL_GREGORIAN,date('m',strtotime($attmonth)),date('Y',strtotime($attmonth))); 
				   	// cal_days_in_month(CAL_GREGORIAN, date('m',$at_month,$at_year));
				   }
				foreach($result as $row){ 
                   // echo "<pre>";print_r($row);
				?>
					<tr>
						<td>
							<h2 class="table-avatar">
							<?php 
							if(($row->ProfileImage!='' && file_exists(base_path().'/upload/emp/'.$row->ProfileImage))){  ?>

							<img src="<?php echo base_url();?>upload/emp/<?php echo $row->ProfileImage;?>" alt="" class="avatar avatar-xs">
							<?php echo ucfirst($row->firstlast);?>
							<?php
							}
							else
							{ 
							?>
							<img src="<?php echo base_url();?>upload/no_image/user_no_image.png" alt="" class="avatar avatar-xs">
							<?php echo ucfirst($row->firstlast);?>

							<?php
							}
							?>
							</h2>
						</td>
						<?php for($i=1;$i<=$totalmonth;$i++){ 
						    $attid=$row->{'abc'.$i};
						   
							  ?>
						<td><a href="javascript:void(0);" <?php if($attid!='0'){ ?>  onclick='editatt(<?php echo $attid; ?>)'<?php } ?>>
							<?php
							   if($attid!='0'){
							     $present=checkattedancestatus($attid); 
							 }
							    else{ echo $present='-'; }
								   
									if($present=="Present"){
										echo "<B class='text-success'>P</B>";
									}else if($present=="Absent"){                          
			                          	echo "<B class='text-red'>A</B>";
									}else if($present=="HalfDay"){
			                          	echo "<B class='text-warning'>HD</B>";
									}else if($present=="Earlyleave"){                         	
			                         	echo "<B class='text-primary'>EL</B>";
									}else if($present=="Overtime"){                         
			                         	echo "<B class='text-purple'>OT</B>";
									}
								?>
							
						</a></td>
						<?php } ?>	
						
					
						</tr>
					<?php }  } ?>
				</tbody>
			</table>
			<?php
		}else if(!empty($result1)){
			?>
		

			<table class="table table-striped custom-table mb-0 datatable">
									<thead>
										<tr>
											<th>#</th>
											<th>Date </th>
											<th>Punch In</th>
											<th>Punch Out</th>
											<th>Production</th>
											<th>Attendance status</th>
											
										</tr>
									</thead>
									<tbody>
										<?php
										$i=1;
										foreach($result1 as $val){
											$time_out  = date("g:i a", strtotime( $val->time_out));
											$time_in  = date("g:i a", strtotime( $val->time_in));
											 $diff = (strtotime($val->time_out) - strtotime($val->time_in));
                                      $total = $diff/60;
                                     
                                     
											?>
										
										<tr>
											<td><?php echo $i ?></td>
											<td><?php echo $val->attendance_date?></td>
											<td><?php echo $time_in?></td>
											<td><?php echo $time_out?></td>
											<td><?php echo sprintf("%2dhrs", floor($total/60), $total%60); ?></td>
											<td><?php echo $val->attendance_status?></td>
											
										</tr>
										<?php
										$i++;
									}
									?>
									</tbody>
								</table>
								<?php
							}
							?>
		</div>
    </div>
</div>
</div>
<!-- /Page Content -->
<!-- Attendance Modal -->
<div class="modal custom-modal fade" id="attendance_info" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Attendance Info</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<div class="card punch-status">
							<div class="card-body">
								<h5 class="card-title">Timesheet Date <small class="text" id="attendancedate"></small></h5>
								<form method="post" enctype="multipart/form-data" action="<?php echo base_url();?>attendance/addattendance" id="frm_emp">
								<div class="row"> 
									<div class="col-sm-6">
										<div class="form-group">
											<input type="hidden" class="form-control" name="attendance_id" id="attendance_id" >
											<input type="hidden" class="form-control" name="attendance_date" id="attendance_date" >
											<label>Employee Name<span class="text-danger">*</span>
											</label>										
											<select  class=" form-control" data-live-search="true" data-actions-box="true" name="attendancestatus" id="attendancestatus">
												<option disabled="" value="">Please select</option>
												<option value="Present">Present</option>	
												<option value="Absent">Absent</option>
												<option value="HalfDay">Half Day</option>
												<option value="Earlyleave">Early Leave</option>
												<option value="Overtime">Over Time</option>
											</select>
										</div>
										<div class="form-group">
											<label>Attedance Month<span class="text-danger">*</span>
											</label>
											<div class="cal-icon">
									  			<input type="text" class="form-control" name="attendancemonth" id="attendancemonth">
											</div>											
										</div>									
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>Attedance Time In<span class="text-danger">*</span>
											</label>
											<div class="clock-icon">
										  		<input type="text" class="form-control" name="time_in" id="time_in">
											</div>
										</div>
										<div class="form-group">
											<label>Attedance Time out<span class="text-danger">*</span>
											</label>
											<div class="clock-icon">
										  		<input type="text" class="form-control" name="time_out" id="time_out">
											</div>
										</div>
									</div>
								</div>							
								<div class="submit-section">
									<hr>
									<button class="btn btn-primary submit-btn" name="Save" type="submit">Submit</button>
									<button type="button" name="cancel" class="btn btn-secondary submit-btn" onClick="location.href='<?php echo base_url();?>attendance/attendancelist'">Cancel
									</button>
								</div>
							</form>								
							</div>
						</div>
					</div>					
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /Attendance Modal -->

</div>
<!-- Page Wrapper -->

</div>
<!-- /Main Wrapper -->

<!-- Sidebar Overlay -->
<div class="sidebar-overlay" data-reff=""></div>
		
<?php $this->load->view('common/footer');?>
<script>
	$(document).ready(function() {
    $('#example').DataTable( {
        "scrollX": true,
        "searching": false
    } );
} );
	$(function() { 
    setTimeout(function() {
  $('#errorMessage').fadeOut('fast');
}, 10000);  
});

$(function() { 
    setTimeout(function() {
  $('#successMessage').fadeOut('fast');
}, 10000);  
});

$(function() { 
    setTimeout(function() {
  $('#warningMessage').fadeOut('fast');
}, 10000);  
});
$(function() {
    $('#time_in').datetimepicker({
		format: 'LT',
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
 	  ignoreReadonly: true,

    });
      $('#time_out').datetimepicker({
		format: 'LT',
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
 	  ignoreReadonly: true,

    });
  });
 var today = new Date();
 //   var past = today.setMonth(today.getMonth() -1);
 // alert(past);
$("#attendancemonth").datetimepicker({
       		  viewMode: 'months',       		 
              format: 'YYYY-MM',
          	  maxDate: today,
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
    	});


function myDateFormatter (dobdate) {

 dArr = dobdate.split("-");  // ex input "2010-01-18"

  return dArr[2]+ "/" +dArr[1]+ "/" +dArr[0]; //ex out: "18/01/10"
       
    }; 

$("#attmonth").datetimepicker({
       		  viewMode: 'months',       		 
              format: 'YYYY-MM',
          	  maxDate: today,
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
    	}).val('<?php echo ($attmonth!='0000-00')&&($attmonth!='')  ? date('Y-m', strtotime($attmonth)) : ''; ?>');

</script>
