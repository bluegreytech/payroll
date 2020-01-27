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
	<h4 class="page-title" id="crtattndmonth">List of Attendance : <?php if($attmonth==''){echo $cmonth = date('F',strtotime('last month')); }else{echo $cmonth=date('F',strtotime($attmonth));} ?></h4>
	</div>
	<div class="col-sm-4 col-7 text-right m-b-30">
	<a href="<?php echo base_url()?>attendance/addattendance" class="btn add-btn" ><i class="fa fa-plus"></i> Add Attendance
	</a>
	</div>
</div>

<!-- Search Filter -->
<form method="post" action="<?php echo base_url();?>attendance/searchattendance" id="frm_search">
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
			<table id="example" class="display table table-striped custom-table mb-0">
				<thead>
					<tr>
						<th>Employee</th>
						<?php  
							if($attmonth==''){								
							$cmonth= date('m',strtotime($salarymonth)); 
							$cyear=date('Y',strtotime($salarymonth));
							$totalmonth=cal_days_in_month(CAL_GREGORIAN, date('m',strtotime($salarymonth)),date('Y',strtotime($salarymonth)));
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
                           <th style="color: red;"><p style="writing-mode: vertical-lr;	text-orientation: upright;margin: 0;display: inline-grid;"><?php echo  $days.' ';?><span style="margin-top: 16px;writing-mode: horizontal-tb;"><?php echo $i; ?></span></p></th>
						<?php }else{ ?>
                          <th ><p style="writing-mode: vertical-lr; text-orientation: upright; margin: 0;display: inline-grid;"><?php echo  $days.' '?><span style="margin-top: 16px;writing-mode: horizontal-tb;"><?php echo $i; ?></span></p></th>
						<?php } } ?>	
						<th>Working days</th>
						<th>Holidays</th>
						<th>Week day</th>	
						<th>Absent</th>
					</tr>
				</thead>
				<tbody>
				<?php 				
				if(!empty($result)){
                    if($attmonth==''){
				   	   $totalmonth=cal_days_in_month(CAL_GREGORIAN, date('m',strtotime('last month')),date('Y'));
				   }else{
				  				   	
				   	  $totalmonth=cal_days_in_month(CAL_GREGORIAN,date('m',strtotime($attmonth)),date('Y',strtotime($attmonth))); 
				   	// cal_days_in_month(CAL_GREGORIAN, date('m',$at_month,$at_year));
				   }
				foreach($result as $row){ 
                   //echo "<pre>";print_r($row);
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

							<?php } ?>
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
										echo "<b class='text-success'>P</b>";
									}else if($present=="Absent"){                          
			                          	echo "<b class='text-red'>A</b>";
			                        }else if($present=="Weekoff"){                          
			                          	echo "<b class='text-red'>WO</b>";
			                        }else if($present=="Holiday"){                          
			                          	echo "<b class='text-red'>H</b>";
									}else if($present=="HalfDay"){
			                          	echo "<b class='text-warning'>HD</b>";
									}else if($present=="Earlyleave"){                         	
			                         	echo "<b class='text-primary'>EL</b>";
									}else if($present=="Overtime"){                         
			                         	echo "<b class='text-purple'>OT</b>";
									}else if($present=="Leave"){                         
			                         	echo "<b class='text-red'>L</b>";
									}
								?>
							
						</a></td>
						<?php } ?>
						<td><?php echo $row->workingdays?$row->workingdays:'';?></td>
						<td><?php echo $row->holiday?$row->holiday:'';?></td>
						<td><?php echo $row->weekoffday?$row->weekoffday:'';?></td>
						<td><?php  $HalfDay=$row->halfday/2;
						  echo $row->leaveday+$HalfDay;	
						 ?></td>						
						</tr>
					<?php }  } ?>
				</tbody>
			</table>
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
								<div class="row">
								<span class="col-md-6 card-title" >Timesheet Date <small class="text" id="attendancedate"></small></span>
							    <span class="col-md-6 card-title" id='typeleave'></span>
								</div>
								<form method="post" enctype="multipart/form-data" action="<?php echo base_url();?>attendance/addattendance" id="frm_emp">
								<div class="row"> 
									<div class="col-sm-6">
										<div class="form-group">
											<input type="hidden" class="form-control" name="attendance_id" id="attendance_id" >
											<input type="hidden" class="form-control" name="attendance_date" id="attendance_date" >
											<label>Attendance Status<span class="text-danger">*</span>
											</label>										
											<select  class=" form-control" data-live-search="true" data-actions-box="true" name="attendancestatus" id="attendancestatus">
												<option disabled="" value="">Please select</option>
												<option value="Present">Present</option>	
												<option value="Absent">Absent</option>
												<option value="HalfDay">Half Day</option>
												<option value="Earlyleave">Early Leave</option>
												<option value="Overtime">Over Time</option>
												<option value="Leave">Leave</option>
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
									<button type="button" name="cancel" class="btn btn-secondary submit-btn" data-dismiss="modal">Cancel
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
    // $('#example').DataTable( {
    //     "scrollX": true,
    //     "searching": false
    // } );
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

function editatt(att_id)
{
	 $('#attendance_info').modal('show');
	url="<?php echo base_url();?>"
	//alert(hr_id);
	$.ajax({
         url: url+'attendance/editattendance',
         type: 'post',
		 data:{id:att_id},
         success:function(response){
			var response = JSON.parse(response);
              $('#typeleave').empty();
               if(response.attendance_status=='Absent'){
                    $('#typeleave').append('Leave Type <small class="text" id="attendancedate">'+response.typeofleave+'</small>');
               }
		
			attendancedt=new Date(myDateFormatter(response.attendance_date));			
			 
			dtArr=attendancedt.toDateString('ddd dd MMMM yyyy').split(' ');
			//console.log(moment(attendancedt, 'MMMM D YYYY'));
            $('#attendance_id').val(response.attendance_id);

			
			//$('#attendancedate').text(dtArr[0]+ ", " +dtArr[2]+ " " +dtArr[1]+ ", " +dtArr[3]);
			$('#attendancedate').text(myDateFormatter(response.attendance_date));
			$('#attendance_date').val(response.attendance_date);
			$('#attendancemonth').val(response.attendance_month);
			$('#time_in').val(response.time_in);
			$('#time_out').val(response.time_out);
			$("#attendancestatus [value=" + response.attendance_status + "]").attr('selected', 'true');
         }
      });	
}
function myDateFormatter (dobdate) {

 dArr = dobdate.split("-");  // ex input "2010-01-18"

  return dArr[2]+ "/" +dArr[1]+ "/" +dArr[0]; //ex out: "18/01/10"
       
    }; 
 //var today = new Date();
$("#attmonth").datetimepicker({
       		  viewMode: 'months',       		 
              format: 'YYYY-MM',
          	  maxDate: today,
          	//  defaultDate: today,
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
    	}).val('<?php echo ($attmonth!='0000-00')&&($attmonth!='')  ? date('Y-m', strtotime($attmonth)) :$selectdatedata->selecteddate; ?>');

$(document).ready(function() {
	 $('#example').DataTable( {
		aaSorting: [[0, 'asc']],
		searching: false,
		"scrollX": true,
		dom: 'Blfrtip',
		responsive: true,
	 buttons: [
	 {
		extend: 'copyHtml5',
		download: 'open',
		text:'<i class="fa fa-files-o"></i> Copy',
		// exportOptions: {
		// columns: [0,1,2,3,4,5]
		// }
	 },
	 {
		extend: 'excelHtml5',
		text:'<i class="fa fa-file-excel-o"></i> Excel',
		// exportOptions: {
		// columns: [0,1,2,3,4,5]
		// }
	 },
	 {
		extend: 'csvHtml5',
		download: 'open',
	    text:'<i class="fa fa-file-text-o"></i> CSV',
		// exportOptions: {
		// columns: [0,1,2,3,4,5]
		// },
		
	 },
	 {
		extend: 'pdfHtml5',
		 //download: 'open',
		 text:'<i class="fa fa-file-pdf-o"></i> PDF',
		 title: "List of Attendance",
		 filename:"List_of_Attendance",
		  orientation: 'landscape', 
		  pageSize: 'A3',
		
		// exportOptions: {
		// columns: [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30],
		
		// },
		
	        customize : function(doc){ 
				doc.content[1].margin = [ 5, 0, 100, 5 ];
				doc.defaultStyle.fontSize = 10; //2, 3, 4,etc
	            doc.styles.tableHeader.fontSize = 12; //2, 3, 4, etc
				// doc.defaultStyle.alignment = 'center';
				// doc.styles.tableHeader.alignment = 'center';
				  doc.styles.table = {
                                  alignment: 'center',
                                  width: 'auto',
                              }
				// doc.styles['table'] =  width:100% ;
				//doc.content[1].table.widths=(optWidth + 60).toString() + "px";
				 // doc.content[1].table.widths = [ '30%','2%', '2%', '2%', 
	    //                                                         '2%', '2%','2%','2%', '2%','2%','2%', '2%','2%','2%', '2%','2%','2%', '2%','2%','2%','2%','2%', '2%','2%','2%','2%','2%', '2%','2%','2%'];
	         
	       },
	 },
	  {
		extend: 'print',
		orientation: 'landscape', 
		pageSize: 'A4',
		text:'<i class="fa fa-print"></i> Print',
		// exportOptions: {
		// 	columns: [0,1,2,3,4,5],
			 		
		// },
		 // customize: function (win) {
		 // 		//	win.defaultStyle.font = 'Times New Roman';
	  //               $(win.document.body).find('table').addClass('display').css('font-size', '12pt','font-family','Times New Roman');
	  //               $(win.document.body).find('tr:nth-child(odd) td').each(function(index){
	  //                   $(this).css('background-color','#D0D0D0');
	  //               });
	  //               $(win.document.body).find('h1').css('text-align','center');
	  //           }
		

	 },
	 //'colvis'
	 ]

 });
  var styles ={
	   "margin-bottom": '0.5em',
       float: "right"	
	 };
	  $("div#example_wrapper").find($(".dt-buttons")).css(styles);

} );

$("#alldate").on("dp.change", function() {
	selecteddate=$("#alldate").val();
	$('#attmonth').val(selecteddate);
   	url="<?php echo base_url(); ?>";
   
  var month = new Array();
  month[0] = "January";
  month[1] = "February";
  month[2] = "March";
  month[3] = "April";
  month[4] = "May";
  month[5] = "June";
  month[6] = "July";
  month[7] = "August";
  month[8] = "September";
  month[9] = "October";
  month[10] = "November";
  month[11] = "December";
  var pieces = selecteddate.split("-");
  var d = new Date(pieces[1]); 
  var n = month[d.getMonth()];
  
   $('#crtattndmonth').text("List of Attendance :"+ n);
	
});

</script>
