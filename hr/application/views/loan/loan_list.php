<?php 
	 $this->load->view('common/header.php');
	 $this->load->view('common/sidebar.php');
?>
<!-- Page Wrapper -->
<div class="page-wrapper">
	<!-- Page Content -->
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
		<!-- Page Title -->
		<div class="row">
			<div class="col-sm-4 col-5">
				<h4 class="page-title">List of Loan Details </h4>
			</div>
			<div class="col-sm-8 col-7 text-right m-b-30">
				<a href="<?php echo base_url()?>loan/loanlist" class="btn add-btn"><i class="fa fa-plus"></i> Add Loan
				</a>
			</div>
		</div>
		<!-- /Page Title -->

	
		<!-- /Search Filter -->

		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
					<table id="example" class="display table table-striped custom-table " style="width:100%">
						<thead>
						<tr>
							<th>No.</th>
							<th>Full Name</th>
							<th>Loan Amount</th>
							<th>Interest Rate</th>
							<th>No of installment</th>
							<th>Monthly Installlment</th>
							<th>Principal balance</th>
							<th>Interest balance</th>
							
							<th>Loan Completed?</th>		
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
							<td><?php echo $i;?></td>
						<td>
						
							<?php ?>
								
								<?php echo $row->first_name;?> <?php echo $row->last_name;?> 
							
							<?php
							
							?>
						

						</td>
						<td><?php echo $row->loan_amnt ;?></td>
						<td><?php echo $row->interest_rate ;?></td>
						<td><?php echo $row->no_of_installment ;?></td>
						<td><?php echo $row->monthly_installment ;?></td>
						<td><?php echo $row->principal_balance ;?></td>
						<td><?php echo $row->interest_balance ;?></td>
						<td><?php echo $row->loan_completed ;?></td>
					
						
						<td class="text-center">
						
						<a  onclick="deletedata('<?php echo $row->loan_id; ?>')" ><i class="fa fa-trash-o fa-lg"></i></a>
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
		


<!--Start Delete model-->
		<!-- <div class="modal fade bs-example-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog modal-sm" role="document" style="margin:20% auto;">
				<div class="modal-content">
					<div class="modal-body" >
						<p>Are you sure you want to delete this record?</p>
					</div>
					<div class="modal-footer text-center">
					<center>
						<button type="button" class="btn-md btn-icon btn-link p4" id="yes_btn" ><a href="" id="deleteYes" value="Yes"  class="btn btn-success">Yes</a></button>
						<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
					</center>
					</div>
				</div>
			</div>
		</div> -->


	<div class="modal custom-modal fade" id="delete_approve" role="dialog">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-body">
					<div class="form-header">
						<h3>Delete Loan</h3>
						<p>Are you sure you want to delete this record?</p>
					</div>
					<div class="modal-btn delete-action">
						<div class="row">
							<div class="col-6">
								<a href="javascript:void(0);"  id="yes_btn" class="btn btn-primary continue-btn">Delete</a>
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




	</div>
	<!-- End Delete model -->

</div>
<!-- /Main Wrapper -->

<!-- Sidebar Overlay -->
<div class="sidebar-overlay" data-reff=""></div>

<?php $this->load->view('common/footer');?>
<script>

	// $('#DateofBirth').datetimepicker({
	// 			  	 format: 'DD/MM/YYYY',
	// 				 maxDate: moment(),
	// 				 ignoreReadonly: true,
	// 				// setDate: new Date("<?php //echo  ($DateofBirth!='0000-00-00')  ? date('d/m/Y', strtotime($DateofBirth)) : ''; ?>"),
	// 			}).val('<?php //echo  ($DateofBirth!='0000-00-00')  ? date('d/m/Y', strtotime($DateofBirth)) : ''; ?>');
		
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
		columns: [0,1,2,3,4,5,6,7,8]
		}
	 },
	 {
		extend: 'excelHtml5',
		title:'List_of_Loan',
		text:'<i class="fa fa-file-excel-o"></i> Excel',
		exportOptions: {
		columns: [0,1,2,3,4,5,6,7,8]
		}
	 },
	 {
		extend: 'csvHtml5',
		title:"List_of_Loan",
		download: 'open',
	    text:'<i class="fa fa-file-text-o"></i> CSV',
		exportOptions: {
		columns: [0,1,2,3,4,5,6,7,8]
		},
		
	 },
	 {
		extend: 'pdfHtml5',
		//download: 'open',
		text:'<i class="fa fa-file-pdf-o"></i> PDF',
		title: "List of Loan",
		filename:"List_of_Loan",
		orientation: 'landscape', 
		pageSize: 'A4',		
		exportOptions: {
		columns: [0,1,2,3,4,5,6,7,8],
		
		},
		
	        customize : function(doc){ 
				doc.content[1].margin = [ 50, 0, 100, 0 ];
				doc.defaultStyle.fontSize = 10; //2, 3, 4,etc
	            doc.styles.tableHeader.fontSize = 12; //2, 3, 4, etc
				doc.defaultStyle.alignment = 'center';
				doc.styles.tableHeader.alignment = 'center';

				 doc.content[1].table.widths = ['5%',  '35%', '30%', '20%', 
	                                                           '14%', ];
	         
	       },
	 },
	  {
		extend: 'print',
		title:'List_of_Loan',
		orientation: 'landscape', 
		pageSize: 'A4',
		text:'<i class="fa fa-print"></i> Print',
		exportOptions: {
			columns: [0,1,2,3,4,5,6,7,8],			 		
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

	
			        

function deletedata(id){  
   // alert(id);
    $('#delete_approve').modal('show');
   
        $('#yes_btn').click(function(){
        	//alert('dfdsf');
           
                url="<?php echo base_url();?>"
                $.ajax({
                url: url+"/loan/delete_loan/",
                type: "post",
                data: {loan_id:id} ,
                success: function (response) {  
                //console.log(response);           
                document.location.href = url+'loan/loan_det';                  

            },
            error: function(jqXHR, textStatus, errorThrown) {
                 console.log(textStatus, errorThrown);
            }
            })
           

        });
    
   

}


</script>