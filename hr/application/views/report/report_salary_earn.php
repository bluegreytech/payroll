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
							<h4 class="page-title">Employee Salary Earning Report</h4>
						</div>
						<div class="col-sm-8 col-7 text-right m-b-30">
							
						</div>
					</div>
					<!-- /Page Title -->					
					<!-- Search Filter -->
					<!-- Search Filter -->
<form method="post" action="<?php echo base_url();?>reports/searchearn" id="frm_search">
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
		<a href="<?php echo base_url()?>Reports/<?php echo $redirect_page;?>" class="btn btn-info"><i class="fa fa-refresh"></i></a> 	
		</div>     
	   
</div>
</form> 
					<!-- /Search Filter -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
							   <table id="example" class="display table table-striped custom-table" style="width:100%">
						<thead>
						<tr>
							<th>Employee</th>
							<th>Employee ID</th>
							<th>Total Earning</th>
							
							
							
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
						<td><i class="fa fa-inr"></i> <?php echo $row->gross_earning;?></td>						
						
						
					
						</tr>
						<?php
						$i++;
						} }
						?>   
						 <tr>
      <td>Sum of amount</td>
       <td></td>
        <td><i class="fa fa-inr"></i> <?php echo $tot_earn[0]->gross_earning;?></td>
     
    </tr>  
					</tbody>
					
					</table>
							</div>
						</div>
					</div>
                </div>
				<!-- /Page Content -->
			
				
			
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
		columns: [0,1,2,3,4]
		}
	 },
	 {
		extend: 'excelHtml5',
		text:'<i class="fa fa-file-excel-o"></i> Excel',
		exportOptions: {
		columns: [0,1,2,3,4]
		}
	 },
	 {
		extend: 'csvHtml5',
		download: 'open',
	    text:'<i class="fa fa-file-text-o"></i> CSV',
		exportOptions: {
		columns: [0,1,2,3,4]
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
		columns: [0,1,2,3,4],
		
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
			columns: [0,1,2,3,4],
			 		
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
	var today = new Date();
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
    	}).val('<?php echo ($attmonth!='0000-00')&&($attmonth!='')  ? date('Y-m', strtotime($attmonth)) : date('Y-m'); ?>');
</script>