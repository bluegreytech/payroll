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
				<h4 class="page-title">List of Hr </h4>
			</div>
			<div class="col-sm-8 col-7 text-right m-b-30">
				<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_salary"><i class="fa fa-plus"></i> Add Hr
				</a>
			</div>

		</div>
		<!-- /Page Title -->

		<!-- Search Filter -->
		<form method="post" action="<?php echo base_url();?>hr/searchhr" id="frm_search">
		<div class="row filter-row">

		<div class="col-md-3">  
		<div class="form-group form-focus select-focus">
		<select class="select floating" name="option" > 
		<option value="" disabled="">Please Select</option>
		<option value="FullName" <?php if($option=='FullName'){echo 'selected';} ?> >Hr Name</option>
		<option value="EmailAddress" <?php if($option=='EmailAddress'){echo 'selected';} ?>>Email Address</option>
		<option value="PhoneNumber" <?php if($option=='PhoneNumber'){echo 'selected';} ?>>Contact Number</option>
		<option value="IsActive" <?php if($option=='IsActive'){echo 'selected';} ?>>Status</option>
		</select>
		<!-- <label class="focus-label">Role</label> -->
		</div>
		</div>
		<div class="col-md-3">  
		<div class="form-group form-focus">
		<input type="text" name="keyword" class="form-control floating" value="<?php echo $keyword;?>">
		<label class="focus-label">Hr Search</label>
		</div>
		</div>
		<div class="col-md-3">  
		<input type="submit" value="Search" name="search" class="btn btn-success btn-block">
		</div> 
		<div class="col-md-3"> 
		<a href="<?php echo base_url()?>/hr/<?php echo $redirect_page;?>" class="btn btn-info"><i class="fa fa-refresh"></i></a> 
	
		</div>     
		</div> 
		</form>
		<!-- /Search Filter -->

		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
					<table class="table table-striped custom-table datatable" >
						<thead>
						<tr>
							<th>No.</th>
							<th>Full Name</th>
							<th>Email Address</th>
							<th>Contact Number</th>
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
							
							 if(($row->ProfileImage!='' && file_exists(base_path().'/upload/hr/'.$row->ProfileImage))){  ?>
							
								
								<img src="<?php echo base_url();?>upload/hr/<?php echo $row->ProfileImage;?>" alt="" class="avatar">
								<?php echo ucfirst($row->FullName);?> 
							
							<?php
							}
							else
							{ 
								?>
								<img src="<?php echo base_url();?>upload/no_image/user_no_image.png" alt="" class="avatar">
								<?php echo $row->FullName;?> 
							
							<?php
							}
							?>
						</h2>

						</td>
						<td><?php echo $row->EmailAddress ;?></td>
						<td><?php echo $row->Contact ;?></td>
						<td>
							<div class="action-label">
							<a class="btn btn-white btn-sm btn-rounded" href="javascript:void(0);"  onclick="statusdata('<?php echo $row->hr_id; ?>','<?php echo $row->IsActive ;?>')">
								<i class="fa fa-dot-circle-o <?php if($row->IsActive=='Active'){echo "text-success";}else{ echo "text-danger";}?>"></i><?php echo $row->IsActive ;?>
							</a>
						</div>
							</td>
						<?php

						?>
						<td class="text-center">
						<a  onclick="editdata('<?php echo $row->hr_id; ?>')" data-toggle="modal" data-target="#add_salary" >
								<i class="fa fa-pencil fa-lg"></i></a>
						<a  onclick="deletedata('<?php echo $row->hr_id; ?>','<?php echo $row->ProfileImage ;?>')" data-toggle="modal" data-target="#delete_admin"><i class="fa fa-trash-o fa-lg"></i></a>
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
		<div id="add_salary" class="modal custom-modal fade" role="dialog">
			<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Add Hr</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form method="post" enctype="multipart/form-data" action="<?php echo base_url();?>hr/hrlist" id="frm_hr">
							<div class="profile-img-wrap edit-img">
									<?php  

									 //if(($ProfileImage!='' && file_exists(base_path().'/upload/hr/'.$ProfileImage))){ ?>
										<!-- <img class="inline-block" src="<?php //echo base_url(); ?>upload/hr/<?php //echo $ProfileImage; ?>" alt="" id="blah"> -->
									<?php
									//}else{
									?>
										<img class="inline-block" src="<?php echo base_url(); ?>upload/no_image/user_no_image.png" alt="" id="blah">
									<?php
									//}
									?>
										<div class="fileupload btn">
											<span class="btn-text">Upload</span>
												<input type="hidden" name="pre_profile_image" class="form-control" value="" id="pre_profile_image">
											<input type="file" name="ProfileImage" class="upload" onchange="readURL(this);">
										</div>
									</div>
							
							<div class="row"> 
								<div class="col-sm-6">
									
									<div class="form-group">
										<label>Full Name</label>
										<input type="hidden" name="hr_id" id="hr_id">	
										<input class="form-control" type="text" name="FullName" Placeholder="Full Name" id="FullName">
									</div>
									<div class="form-group">
										<label>Email Address</label>
										<input class="form-control" type="text" name="EmailAddress" Placeholder="EmailAddress"  id="EmailAddress" >
									</div>
									<div class="form-group">
										<label>Phone</label>
										<input class="form-control" type="text" name="PhoneNumber" Placeholder="Phone" minlength="10" maxlength="10" id="PhoneNumber" >
									</div>
									<div class="form-group">
										<label>Date of Birth</label>
										<div class="cal-icon">
										<input class="form-control datetimepicker" type="text" name="DateofBirth"  id="DateofBirth" Placeholder="Date of Birth" >
										</div>

									</div>
								
								</div>
								<div class="col-sm-6"> 
									<div class="form-group">
										<label>Gender</label>
										<select class="form-control" name="Gender"  id="Gender">
											<option disabled="" selected="">Please Select</option>
											<option value="Male">Male</option>
											<option value="Female">Female</option>
										</select>
									</div>
									<div class="form-group">
										<label>City</label>
										<input class="form-control" type="text" name="City" Placeholder="City" id="City">
									</div>
									<div class="form-group">
										<label>Pincode</label>
										<input class=" form-control" type="text" name="PinCode" id="Pincode" Placeholder="Pincode">
									</div>
										<div class="form-group">
												<label class="col-form-label">IsActive<span class="text-danger">*</span></label><br>
												<label class="radio-inline">
													<input type="radio" name="IsActive" checked  value="Active">Active
												</label>
												<label class="radio-inline">
													<input type="radio" name="IsActive" value="Inactive">Inactive
												</label>
									</div>
								
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label>Address</label>
										<textarea class="form-control" name="Address" id="Address"></textarea>
										</div>
									</div>
							</div>
							<div class="submit-section">
								<input type="submit" name="Save" class="btn btn-primary submit-btn" value="Submit">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- End Add Hr Modal -->


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
						<h3>Delete HR</h3>
						<p>Are you sure want to hr?</p>
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
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'excelHtml5',
                title: 'Data export'
            },
            {
                extend: 'pdfHtml5',
                title: 'Data export'
            },
			{
                extend: 'print',
                title: 'Data export'
            },
        ]
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
					
					EmailAddress:{
						required: true,
							},		
					DateofBirth:{
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
					City: {
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
   // alert(id);
    $('#delete_approve').modal('show');
   
        $('#yes_btn').click(function(){
        	//alert('dfdsf');
           
                url="<?php echo base_url();?>"
                $.ajax({
                url: url+"/hr/deletedata/",
                type: "post",
                data: {id:id,hr_image:image} ,
                success: function (response) {  
                //console.log(response);           
                document.location.href = url+'hr/hrlist';                  

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
                url: url+"/hr/statusdata/",
                type: "post",
                data: {id:id,status:status} ,
                success: function (response) {  
                //console.log(response);           
                document.location.href = url+'hr/hrlist';                  

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
               console.log(response.ProfileImage);
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
			
			  $('#blah').attr('src', url+'upload/no_image/user_no_image.png');
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