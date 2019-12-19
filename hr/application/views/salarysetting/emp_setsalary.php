<?php 

	 $this->load->view('common/header');
	 $this->load->view('common/sidebar');

?>
<!-- Page Wrapper -->
<div class="page-wrapper">			
				<!-- Page Content -->
                <div class="content container-fluid">				
					<!-- Page Title -->
					<div class="row">
						<div class="col-sm-4 col-5">
							<h4 class="page-title">Employee Salary</h4>
						</div>
						<div class="col-sm-8 col-7 text-right m-b-30">
							<a href="<?php echo base_url(); ?>salarysetting/add_setsalary" class="btn add-btn" ><i class="fa fa-plus"></i>Add Salary</a>
						</div>
					</div>
					<!-- /Page Title -->					
					<!-- Search Filter -->
					<div class="row filter-row">
					   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
							<div class="form-group form-focus">
								<input type="text" class="form-control floating">
								<label class="focus-label">Employee Name</label>
							</div>
					   </div>
					   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
							<div class="form-group form-focus select-focus">
								<select class="select floating"> 
									<option value=""> -- Select -- </option>
									<option value="">Employee</option>
									<option value="1">Manager</option>
								</select>
								<label class="focus-label">Role</label>
							</div>
					   </div>
					   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12"> 
							<div class="form-group form-focus select-focus">
								<select class="select floating"> 
									<option> -- Select -- </option>
									<option> Pending </option>
									<option> Approved </option>
									<option> Rejected </option>
								</select>
								<label class="focus-label">Leave Status</label>
							</div>
					   </div>
					   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
							<div class="form-group form-focus">
								<div class="cal-icon">
									<input class="form-control floating datetimepicker" type="text">
								</div>
								<label class="focus-label">From</label>
							</div>
						</div>
					   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
							<div class="form-group form-focus">
								<div class="cal-icon">
									<input class="form-control floating datetimepicker" type="text">
								</div>
								<label class="focus-label">To</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
							<a href="#" class="btn btn-success btn-block"> Search </a>  
						</div>     
                    </div>
					<!-- /Search Filter -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
							   <table id="example" class="display table table-striped custom-table" style="width:100%">
						<thead>
						<tr>
							<th>Employee</th>
							<th>Employee ID</th>
							<th>Email</th>
							<th>Join Date</th>							
							<th>Salary</th>
							<th>Payslip</th>
							<th class="text-right">Action</th>
						</tr>
						</thead>
					<tbody>
						<?php
						$i=1;
						if($result){  
						foreach($result as $row)
						{ 
						 //echo "<pre>";print_r($row);          
						?>
						<tr>
							
						<td>
						<h2 class="table-avatar">
							<?php 	
							
							 if(($row->ProfileImage!='' && file_exists(base_path().'/upload/emp/'.$row->ProfileImage))){  ?>
								
								<img src="<?php echo base_url();?>upload/emp/<?php echo $row->ProfileImage;?>" alt="" class="avatar">
								 
								<a href="javascript:void(0)"><?php echo ucfirst($row->first_name.' '.$row->last_name);?>  <span><?php echo $row->department.' '.$row->desgination;?></span></a>
							<?php
							}
								else
							{ 
							?>
							<img src="<?php echo base_url();?>upload/no_image/user_no_image.png" alt="" class="avatar">
							<a href="javascript:void(0)"><?php echo ucfirst($row->first_name.' '.$row->last_name);?>  <span><?php echo $row->department.' '.$row->desgination;?></span></a>							
							<?php
							}
							?>
						</h2>

						</td>
						<td><?php echo $row->employee_code; ?></td>
						<td><?php echo $row->email;?></td>						
						<td><?php echo date("d M Y",strtotime($row->joiningdate));?></td>
						<td>
							<i class="fa fa-inr"></i> <?php echo $row->netpay;?>
						</td>
						<td>
						  <a class="btn btn-sm btn-primary" href="<?php echo base_url().'salarysetting/salary_view/'. $row->empsetsalary_id; ?>">Generate Slip
						  </a>
						
						</td>
						
						<td class="text-center">
							<?php echo anchor('salarysetting/edit_setsalary/'.$row->empsetsalary_id,'<i class="fa fa-pencil fa-lg" ></i>'); ?>
						 <!--    <a href="javascript:void(0)"  onclick="deletedata('<?php //echo $row->emp_id; ?>','<?php //echo $row->ProfileImage ;?>')" ><i class="fa fa-trash-o fa-lg"></i></a> -->
						</td>
						</tr>
						<?php
						$i++;
						} }
						?>     
					</tbody>
					</table>
							</div>
						</div>
					</div>
                </div>
				<!-- /Page Content -->
			
				
				<!-- Delete Salary Modal -->
				<div class="modal custom-modal fade" id="delete_salary" role="dialog">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-body">
								<div class="form-header">
									<h3>Delete Salary</h3>
									<p>Are you sure want to delete?</p>
								</div>
								<div class="modal-btn delete-action">
									<div class="row">
										<div class="col-6">
											<a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
										</div>
										<div class="col-6">
											<a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Delete Salary Modal -->
				
            </div>
			<!-- /Page Wrapper -->

        </div>
		<!-- /Main Wrapper -->

		<!-- Sidebar Overlay -->
<?php $this->load->view('common/footer');?>
<script>
	$(document).ready(function() {
	$('#example').DataTable( {
		aaSorting: [[0, 'asc']],
		searching: false,
		dom: 'Blfrtip',
		responsive: true,
	 buttons: [
	 {
		extend: 'copyHtml5',
		download: 'open',
		text:'<i class="fa fa-files-o"></i> Copy',
		exportOptions: {
		columns: [0,1,2,3,4,5]
		}
	 },
	 {
		extend: 'excelHtml5',
		text:'<i class="fa fa-file-excel-o"></i> Excel',
		exportOptions: {
		columns: [0,1,2,3,4,5]
		}
	 },
	 {
		extend: 'csvHtml5',
		download: 'open',
	    text:'<i class="fa fa-file-text-o"></i> CSV',
		exportOptions: {
		columns: [0,1,2,3,4,5]
		},
		
	 },
	 {
		extend: 'pdfHtml5',
		download: 'open',
		text:'<i class="fa fa-file-pdf-o"></i> PDF',
		title: "List of Employee",
		filename:"List_of_Employee",
		orientation: 'landscape', 
		pageSize: 'A4',		
		exportOptions: {
		columns: [0,1,2,3,4,5],
		
		},
		
	        customize : function(doc){ 
				doc.content[1].margin = [ 50, 0, 100, 0 ];
				doc.defaultStyle.fontSize = 10; //2, 3, 4,etc
	            doc.styles.tableHeader.fontSize = 12; //2, 3, 4, etc
				doc.defaultStyle.alignment = 'center';
				doc.styles.tableHeader.alignment = 'center';

				 doc.content[1].table.widths = ['15%','15%','30%','14%', 
	                                                           '14%', '14%'];
	         
	       },
	 },
	  {
		extend: 'print',
		orientation: 'landscape', 
		pageSize: 'A4',
		text:'<i class="fa fa-print"></i> Print',
		exportOptions: {
			columns: [0,1,2,3,4,5],
			 		
		},
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
	$('#salary_month').val(selecteddate);
	url="<?php echo base_url(); ?>";

	$.ajax({
		url: url+'salarysetting/viewsetsalary',
		type:'post',
		data:{selecteddate:selecteddate},
		success:function(response){
		var response = JSON.parse(response);
		console.log(response);
			 var trHTML = '';
        $.each(response, function (key, value) {
        	console.log(capitalize(value.first_name+''+value.last_name));
            trHTML += '<tr><td>' + capitalize(value.first_name+''+value.last_name) + '</td><td>' + value.employee_code + '</td><td>' + value.employee_code + '</td></tr>';
        });
        $('#example').append(trHTML);
    	}
	});
});
function capitalize(str) {
  strVal = '';
  str = str.split(' ');
  for (var chr = 0; chr < str.length; chr++) {
    strVal += str[chr].substring(0, 1).toUpperCase() + str[chr].substring(1, str[chr].length) + ' '
  }
  return strVal
}

</script>