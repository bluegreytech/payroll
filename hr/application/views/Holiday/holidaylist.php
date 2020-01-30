<?php 
	 $this->load->view('common/header');
	 $this->load->view('common/sidebar');
?>			<!-- Page Wrapper -->
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
		<div class="col-sm-5 col-5">
		<h4 class="page-title">Holidays <?php echo date('Y');?></h4>
		</div>
		<div class="col-sm-7 col-7 text-right m-b-30">
		<?php if((isset($this->hrRights['Holiday']) && $this->hrRights['Holiday']->rights_add==1) || checkSuperHr()){ ?>   
		<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_holiday"><i class="fa fa-plus"></i> Add Holiday</a>
		<?php } ?>
		</div>
	</div>
	<!-- /Page Title -->

	<div class="row">
		<div class="col-md-12">
			<div class="table-responsive">
				<table class="table table-striped custom-table mb-0 datatable">
					<thead>
						<tr>
							<th>#</th>
							<th>Title </th>
							<th>Holiday Date</th>
							<th>Day</th>
							<?php if((isset($this->hrRights['Holiday']) && ($this->hrRights['Holiday']->rights_update==1 || $this->hrRights['Holiday']->rights_delete==1)) || checkSuperHr()){ ?>
							<th class="text-center">Action</th>
							<?php } ?>
						</tr>
					</thead>
					<tbody>
						<?php
						$i=1;
						if($result){  
						foreach($result as $row)
						{
							// $date = new date($row->holidaydate);
							// $now = new date();

							$date = $row->holidaydate;
							$now = date('Y-m-d');
                          
							
						//echo "<pre>";print_r($row);          
						?>
						<tr class="<?php if($date < $now) { echo 'holiday-completed';} else{echo'holiday-upcoming';} ?>">
							<td><?php echo $i;?></td>
							<td><?php echo ucfirst($row->holidayname);?></td>
							<td><?php echo date("d M Y",strtotime($row->holidaydate));?></td>
							<td><?php echo $row->holidayday;?></td>
							<?php if((isset($this->hrRights['Holiday']) && ($this->hrRights['Holiday']->rights_update==1 || $this->hrRights['Holiday']->rights_delete==1)) || checkSuperHr()){ ?>
							<td class="text-center">
								<?php if($date < $now) { ?>
								<?php }else{ ?>
                                  <?php if((isset($this->hrRights['Holiday']) && ($this->hrRights['Holiday']->rights_update==1 )) || checkSuperHr()){ ?>
								 <a  href="javascript:void(0)" onclick="editdata('<?php echo $row->holiday_id; ?>')" data-toggle="modal" data-target="#add_holiday"><i class="fa fa-pencil fa-lg"></i></a>
								<?php } ?>
								<?php } ?>
                                <?php if((isset($this->hrRights['Holiday']) && ($this->hrRights['Holiday']->rights_delete==1 )) || checkSuperHr()){?>
								<a  href="javascript:void(0)" data-toggle="modal" data-target="#delete_holiday" onclick="deletedata('<?php echo $row->holiday_id; ?>')"><i class="fa fa-trash-o fa-lg"></i></a>
								<?php } ?>
							</td>
							<?php } ?>
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

<!-- Add Holiday Modal -->
<div class="modal custom-modal fade" id="add_holiday" role="dialog">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add Holiday</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="<?php echo base_url()?>holiday/holidaylist/" id="frm_holiday" method="POST">
					<div class="form-group">
						<input class="form-control" type="hidden" name="holidayid" id="holidayid">
						<label>Holiday Name <span class="text-danger">*</span></label>
						<input class="form-control" type="text" name="holidayname" id="holidayname">
					</div>
					<div class="form-group">
						<label>Holiday Date <span class="text-danger">*</span></label>
						<div class="cal-icon"><input class="form-control datetimepicker" type="text" name="holidaydate" id="holidaydate"></div>
					</div>
					<div class="form-group">
						<label>Holiday Day <span class="text-danger">*</span></label>
						<input class="form-control" type="text" name="holidayday" id="holidayday"  readonly="">
					</div>
					<div class="submit-section">
					<button class="btn btn-primary submit-btn">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- /Add Holiday Modal -->

<!-- Delete Holiday Modal -->
<div class="modal custom-modal fade" id="delete_holiday" role="dialog">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-body">
					<div class="form-header">
						<h3>Delete Holiday</h3>
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

<!-- /Delete Holiday Modal -->

</div>
<!-- /Page Wrapper -->


<!-- /Main Wrapper -->

<!-- Sidebar Overlay -->
<div class="sidebar-overlay" data-reff=""></div>
		
<?php $this->load->view('common/footer');?>
<script type="text/javascript">
$('#holidaydate').datetimepicker({
				format: 'DD/MM/YYYY'
				}).on('dp.change', function(e){
   
    $('#holidayday').val(e.date.format('dddd'));
});
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


	$('#add_holiday').on('hidden.bs.modal', function () {
		$(this).find('form').trigger('reset');
		
		//$('#blah').attr('src', url+'upload/no_image/user_no_image.png');
	});
$("#frm_holiday").validate(
{
	rules: {
		holidayname: {
			required: true,
		},
		holidaydate: {
			required: true,
		},
	},
});
});


function deletedata(id){  
 
    $('#delete_approve').modal('show');
   
        $('#yes_btn').click(function(){
        	//alert('dfdsf');
           
                url="<?php echo base_url();?>"
                $.ajax({
                url: url+"/holiday/deletedata/",
                type: "post",
                data: {id:id} ,
                success: function (response) {  
                //console.log(response);           
                document.location.href = url+'holiday/holidaylist';                  

            },
            error: function(jqXHR, textStatus, errorThrown) {
                 console.log(textStatus, errorThrown);
            }
            })
           

        });
}

function editdata(holiday_id)
{
	url="<?php echo base_url();?>"
	//alert(hr_id);
	$.ajax({
         url: url+'holiday/editholiday',
         type: 'post',
		 data:{id:holiday_id},
         success:function(response){
			var response = JSON.parse(response);
                console.log(response);
			//    console.log(response.DateofBirth);
			//alert($('#DateofBirth').val($.datetimepicker.formatDate('dd M yy', response.DateofBirth)));
            $('#holidayid').val(response.holiday_id);
			$('#holidayname').val(response.holidayname);
			$('#holidayday').val(response.holidayday);
			$('#EmailAddress').val(response.EmailAddress);
			$('#holidaydate').val( myDateFormatter(response.holidaydate));
            
           
			
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
</script>

