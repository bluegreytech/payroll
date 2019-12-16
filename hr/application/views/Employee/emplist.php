<?php 
	 $this->load->view('common/header');
	 $this->load->view('common/sidebar');
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
				<h4 class="page-title">List of Employee </h4>
				
			</div>
			<div class="col-sm-8 col-7 text-right m-b-30">
				<form class="form-inline"method="post" id="import_form" enctype="multipart/form-data">
				  <div class="form-group">
				    <label for="file">Select Excel File:</label>
				   <input type="file" name="file" id="file" required accept=".xls, .xlsx" /></p>
				  </div>
				  
				  <input type="submit" name="import" value="Import" class="btn add-btn" />
				</form>

				<a href="<?php echo base_url()?>employee/addemp" class="btn add-btn" ><i class="fa fa-plus"></i> Add Employee
				</a>
			</div>

		</div>
		<!-- /Page Title -->

		<!-- Search Filter -->
		<form method="post" action="<?php echo base_url();?>employee/searchemp" id="frm_search">
		<div class="row filter-row">

		<div class="col-md-3">  
		<div class="form-group form-focus select-focus">
		<select class="select floating" name="option" > 
		<option value="" disabled="">Please Select</option>
		<option value="first_name" <?php if($option=='first_name'){echo 'selected';} ?> >Employee Name</option>
		<option value="EmailAddress" <?php if($option=='EmailAddress'){echo 'selected';} ?>>Email Address</option>
		<option value="PhoneNumber" <?php if($option=='PhoneNumber'){echo 'selected';} ?>>Contact Number</option>
		<option value="status" <?php if($option=='status'){echo 'selected';} ?>>Status</option>
		</select>
		<!-- <label class="focus-label">Role</label> -->
		</div>
		</div>
		<div class="col-md-3">  
		<div class="form-group form-focus">
		<input type="text" name="keyword" class="form-control floating" value="<?php echo $keyword;?>">
		<label class="focus-label">Employee Search</label>
		</div>
		</div>
		<div class="col-md-3">  
		<input type="submit" value="Search" name="search" class="btn btn-success btn-block">
		</div> 
		<div class="col-md-3"> 
		<a href="<?php echo base_url()?>employee/<?php echo $redirect_page;?>" class="btn btn-info"><i class="fa fa-refresh"></i></a> 
	
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
							<th>No</th>
							<th>Full Name</th>
							<th>Email Address</th>
							<th>Contact No.</th>
							<th>Join Date</th>
							<th>Status</th>		
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
						<h2 class="table-avatar">
							<?php 	
							
							 if(($row->ProfileImage!='' && file_exists(base_path().'/upload/emp/'.$row->ProfileImage))){  ?>
								
								<img src="<?php echo base_url();?>upload/emp/<?php echo $row->ProfileImage;?>" alt="" class="avatar">
								<?php echo ucfirst($row->first_name.' '.$row->last_name);?> 
							<?php
							}
							else
							{ 
							?>
								<img src="<?php echo base_url();?>upload/no_image/user_no_image.png" alt="" class="avatar">
								<?php echo ucfirst($row->first_name.' '.$row->last_name);?> 
							
							<?php
							}
							?>
						</h2>

						</td>
						<td><?php echo $row->email;?></td>
						<td><?php echo $row->phone;?></td>
						<td><?php echo date("d M Y",strtotime($row->joiningdate));?></td>
						<td>
							<div class="action-label">
							<a class="btn btn-white btn-sm btn-rounded" href="javascript:void(0);"  onclick="statusdata('<?php echo $row->emp_id; ?>','<?php echo $row->status ;?>')">
								<i class="fa fa-dot-circle-o <?php if($row->status=='Active'){echo "text-success";}else{ echo "text-danger";}?>"></i><?php echo $row->status ;?>
							</a>
						</div>
							</td>
						<?php

						?>
						<td class="text-center">
							<?php echo anchor('employee/edit_emp/'.$row->emp_id,'<i class="fa fa-pencil fa-lg" ></i>'); ?>
						    <a href="javascript:void(0)"  onclick="deletedata('<?php echo $row->emp_id; ?>','<?php echo $row->ProfileImage ;?>')" ><i class="fa fa-trash-o fa-lg"></i></a>
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
		<!--Start Add Hr Modal -->
		
		<!-- End Add Hr Modal -->

	<div class="modal custom-modal fade" id="delete_approve" role="dialog">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-body">
					<div class="form-header">
						<h3>Delete Employee</h3>
						<p>Are you sure want to delete this employee?</p>
					</div>
					<div class="modal-btn delete-action">
						<div class="row">
							<div class="col-6">
								<a href="javascript:void(0);"  id="yes_btn" class="btn btn-primary continue-btn">Ok</a>
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

	<div class="modal custom-modal fade" id="status_approve" role="dialog">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-body">
					<div class="form-header">
						<h3>Status</h3>
						<p>Are you sure, you want to <span id="statustxt"></span> selected record?</p>
					</div>
					<div class="modal-btn delete-action">
						<div class="row">
							<div class="col-6">
								<a href="javascript:void(0);" id="ok_btn" class="btn btn-primary continue-btn">Ok</a>
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

	<div class="modal custom-modal fade" id="emp_import" role="dialog">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-body">
					<div class="form-header">
						<h3>Delete Employee</h3>
						<p>Are you sure want to delete this employee?</p>
					</div>
					<div class="modal-btn delete-action">
						<div class="row">
							<div class="col-6">
								<a href="javascript:void(0);"  id="yes_btn" class="btn btn-primary continue-btn">Ok</a>
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
		//	download: 'open',
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

				 doc.content[1].table.widths = [ '5%',  '35%', '30%', '14%', 
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


$(document).ready(function()
{

			$('#add_salary').on('hidden.bs.modal', function () {
    			$(this).find('form').trigger('reset');
    			
    			$('#blah').attr('src', url+'upload/no_image/user_no_image.png');
			});

		$("#frm_hr").validate(
		{
				rules: {
					FullName: {
						required: true,
							},					
					EmailAddress: {
						required: true,
							},		
					DateofBirth: {
						required: true,
							},
					Gender: {
						required: true,
							},
					Address: {
						required: true,
							},
					PinCode: {
						required: true,
							},
					PhoneNumber: {
						required: true,
						digits: true,
							},
					City:{
						required: true,
					    },
				
				},

			
				
		});
		$("#frm_search").validate(
		{
				rules: {

					FullName: {
						required: true,
							},
					
					EmailAddress: {
						required: true,
							},		
					DateofBirth: {
						required: true,
							},
					IsActive:{
						required: true,
					}
				
				},
				
		});
});					        

function deletedata(id,image){  
   // alert(image);
    $('#delete_approve').modal('show');
   
        $('#yes_btn').click(function(){
        	
                url="<?php echo base_url();?>"
                $.ajax({
                url:url+"/employee/delete_emp/",
                type:"post",
                data:{id:id,emp_image:image} ,
                success: function (response) {  
                	//alert(response);
               // console.log(response);  
                //return false;         
                document.location.href = url+'employee/emplist';                  

            },
            error: function(jqXHR, textStatus, errorThrown) {
                 console.log(textStatus, errorThrown);
            }
            })
           

        });
    
   

}

function statusdata(id,status){  
  
    $('#status_approve').modal('show');

    if(status=="Inactive"){
    	 $('#statustxt').text('Active');
    	}else{
    		 $('#statustxt').text("Inactive");
    	}
   
        $('#ok_btn').click(function(){
           
                url="<?php echo base_url();?>"
                $.ajax({
                url: url+"/employee/statusdata/",
                type: "post",
                data: {id:id,status:status} ,
                success: function (response) {  
                //console.log(response); 
               // return false;          
                document.location.href = url+'employee/emplist';                  

            },
            error: function(jqXHR, textStatus, errorThrown) {
                 console.log(textStatus, errorThrown);
            }
            })
           

        });
    
   

}

function editdata(hr_id)
{
	url="<?php echo base_url();?>"
	//alert(hr_id);
	$.ajax({
         url: url+'hr/edithr',
         type: 'post',
		 data:{id:hr_id},
         success:function(response){
			var response = JSON.parse(response);
            //    console.log(response.hr_id);
			//    console.log(response.DateofBirth);
//alert($('#DateofBirth').val($.datetimepicker.formatDate('dd M yy', response.DateofBirth)));
            $('#hr_id').val(response.hr_id);
			$('#companyid').val(response.companyid);
			$('#FullName').val(response.FullName);
			$('#EmailAddress').val(response.EmailAddress);
			$('#DateofBirth').val( myDateFormatter(response.DateofBirth));
            
            $('#pre_profile_image').val(response.ProfileImage);
			$('#PhoneNumber').val(response.Contact);
			//$('#Gender').val(response.Gender);
			$('#Address').val(response.Address);
			$('#Pincode').val(response.PinCode);
			$('#City').val(response.City);
			$('#Address').text(response.Address);
			
			$("#Gender [value=" + response.Gender + "]").attr('selected', 'true');
			$("input[name=IsActive][value=" + response.IsActive + "]").attr('checked', 'checked');

			if(response.ProfileImage!=''){
				
			 $('#blah').attr('src', url+'upload/hr/'+response.ProfileImage);
			}else{
			
			  $('#blah').attr('src', url+'upload/hr/no_image/user_no_image.png');
			}
			//$("option[name=companyid][value=" + response.companyid + "]").attr('selected', 'selected');
			//$("option[name=companyname][value=" + response.companyname + "]").attr('selected', 'selected');
			
			//$('#companyname').val(response.companyname);
         }
      });	
}

function myDateFormatter (dobdate) {

        var d = new Date(dobdate);
        var day = d.getDate();
        var month = d.getMonth() + 1;
        var year = d.getFullYear();
        if (day < 10) {
            day = "0" + day;
        }
        if (month < 10) {
            month = "0" + month;
        }
        var date = day + "/" + month + "/" + year;

        return date;
    }; 


function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#blah').css('display', 'block');
                    $('#blah').attr('src', e.target.result);
                };
             reader.readAsDataURL(input.files[0]);
            }
        }

</script>
<script>
$(document).ready(function(){

 $('#import_form').on('submit', function(event){
  event.preventDefault();
  $.ajax({
	url:"<?php echo base_url(); ?>employee/import_emp",
	method:"POST",
	data:new FormData(this),
	contentType:false,
	cache:false,
	processData:false,
	success:function(data){  
		console.log(data);
		
		if(data==1){
		alert('Data imported successfully');
		$('#file').val('');
			window.location.href="<?php echo base_url(); ?>employee/emplist";

		}else{
		alert(data);
		$('#file').val('');
			window.location.href="<?php echo base_url(); ?>employee/emplist";
		}
	}
  })
 });

});
</script>
