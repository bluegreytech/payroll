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
						<div class="col-sm-8 col-5">
							<h4 class="page-title">Leave Type</h4>
						</div>
						<div class="col-sm-4 col-7 text-right m-b-30">
							<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_leavetype"><i class="fa fa-plus"></i> Add Leave Type</a>
						</div>
					</div>
					<!-- /Page Title -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table datatable">
									<thead>
										<tr>
											<th>No</th>
											<th>Leave Type</th>
											<th>Leave Days</th>
											<th>Status</th>
											<th class="text-center">Action</th>
										</tr>
									</thead>
									<tbody>
									<?php
										$i=1;
										if($result){  
										foreach($result as $row)
										{
									        
									?>	
										<tr>
											<td><?php echo $i;?></td>
											<td><?php echo ucfirst($row->leave_name);?></td>
											<td><?php echo ucfirst($row->leavedays);?></td>
											<td>	
												<div class="action-label">
												<a class="btn btn-white btn-sm btn-rounded" href="javascript:void(0);"  onclick="statusdata('<?php echo $row->leave_id; ?>','<?php echo $row->status ;?>')">
												<i class="fa fa-dot-circle-o <?php if($row->status=='Active'){ echo "text-success";}else{ echo "text-danger";}?>"></i><?php echo $row->status;?>
												</a>
												</div>
											</td>
											<td class="text-center"> 
												<a  href="javascript:void(0)" onclick="editdata('<?php echo $row->leave_id; ?>')" data-toggle="modal" data-target="#add_leavetype"><i class="fa fa-pencil fa-lg"></i></a>
								
												<a  href="javascript:void(0)" data-toggle="modal" data-target="#delete_holiday" onclick="deletedata('<?php echo $row->leave_id; ?>')"><i class="fa fa-trash-o fa-lg"></i></a></td>
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
				
<!-- Add Leavetype Modal -->
<div id="add_leavetype" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add Leave Type</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form  action="<?php echo base_url()?>leave/leavelist/" id="frm_leave" method="POST">
					<div class="form-group">
						<label>Leave Type <span class="text-danger">*</span></label>
						<input class="form-control" type="hidden" name="leave_id"id="leave_id">
						<input class="form-control" type="text" name="leavename"id="leavename">
					</div>
					<div class="form-group">
						<label>Number of days <span class="text-danger">*</span></label>
						<input class="form-control" type="text" name="leavedays" id="leavedays">
					</div>
					<div class="form-group">
						<label>Status<span class="text-danger">*</span></label>
						<select name="leavestatus"  id="leavestatus" class="form-control">
							<option  disabled="" selected="" value="">Please Select</option>
							<option value="Active">Active</option>
							<option value="Inactive">Inactive</option>
						</select>
					</div>

					<div class="submit-section">
						<hr>
						<div class="row">
							<div class="col-6">
								<button class="btn btn-primary submit-btn" name="Save" type="submit">Submit</button>
							</div>
							<div class="col-6">	
								<a  class="btn btn-primary cancel-btn" href="<?php echo base_url(); ?>leave/<?php echo $redirect_page; ?>">Cancel
								</a>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- /Add Leavetype Modal -->
<!--- STATUS LEAVE Model-->
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
<!---Status LEave model--> 				
				
				
<!-- Delete Leavetype Modal -->
<div class="modal custom-modal fade" id="delete_leave" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
			<div class="form-header">
				<h3>Delete Leavetype</h3>
				<p>Are you sure want to delete?</p>
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
<!-- /Delete Leavetype Modal -->
				
            </div>
			<!-- /Page Wrapper -->

        </div>
		<!-- /Main Wrapper -->

		<!-- Sidebar Overlay -->
<?php $this->load->view('common/footer');?>
<script type="text/javascript">
$(function(){ 
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


	$('#add_leavetype').on('hidden.bs.modal', function () {
		$(this).find('form').trigger('reset');
		
		//$('#blah').attr('src', url+'upload/no_image/user_no_image.png');
	});
	$("#frm_leave").validate(
	{
		rules: {
			leavename: {
				required: true,
			},
			leavedays: {
				required: true,
			},
			leavestatus: {
				required: true,
			},
		},
	});
});


function deletedata(id){  
 
    $('#delete_leave').modal('show');
   
        $('#yes_btn').click(function(){
        	//alert('dfdsf');
           
                url="<?php echo base_url();?>"
                $.ajax({
                url: url+"/leave/deletedata/",
                type: "post",
                data: {id:id} ,
                success: function (response) {  
                //console.log(response);           
                document.location.href = url+'leave/leavelist';                  

            },
            error: function(jqXHR, textStatus, errorThrown) {
                 console.log(textStatus, errorThrown);
            }
            })
           

        });
}

function editdata(leave_id)
{
	url="<?php echo base_url();?>"
	//alert(hr_id);
	$.ajax({
         url: url+'leave/editleave',
         type: 'post',
		 data:{id:leave_id},
         success:function(response){
			var response = JSON.parse(response);
            console.log(response);
            $('#leave_id').val(response.leave_id);
			$('#leavename').val(response.leavename);
			$('#leavedays').val(response.leavedays);
			
			$("#leavestatus [value=" + response.leavestatus + "]").attr('selected', 'true');
         }
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
                url: url+"leave/leave_status/",
                type: "post",
                data: {id:id,status:status} ,
                success: function (response) {  
                //console.log(response);           
                document.location.href = url+'leave/leavelist';                  

            },
            error: function(jqXHR, textStatus, errorThrown) {
                 console.log(textStatus, errorThrown);
            }
            })
           

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
</script>