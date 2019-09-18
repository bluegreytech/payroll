<?php 
	 $this->load->view('common/header');
	 $this->load->view('common/sidebar');
?>
			<!-- Page Wrapper -->
 <div class="page-wrapper">			
   <div class="content container-fluid">
		<div class="row">
			<div class="col-md-12">
				<?php if(($this->session->flashdata('error'))){ ?>
				<div class="alert alert-danger" id="errorMessage">
				<strong><?php echo $this->session->flashdata('error'); ?></strong> 
				</div>
				<?php } ?>
				<?php if(($this->session->flashdata('success'))){ ?>
				<div class="alert alert-success" id="successMessage">
				<strong> <?php echo $this->session->flashdata('success'); ?></strong> 
				</div>
				<?php } ?>
				<h4 class="page-title">Add Employee</h4>
				<div class="card-box mb-0">
					<div class="row">
						<div class="col-md-12">
							<form method="post" enctype="multipart/form-data" action="<?php echo base_url();?>employee/addemp" id="frm_emp">
							<div class="row"> 
								<div class="col-sm-6">
									<div class="form-group">
										<label>Employee Name<span class="text-danger">*</span>
										</label>
										
										<select class="form-control" name="employename">
											<option disabled="" value="" selected="">Please select</option>
											<?php if(!empty($emplist)){
												foreach($emplist as $row) { //echo "<pre>";print_r($row); ?>
													<option value="<?php echo $emp_id; ?>"><?php echo $row->first_name." ".$row->last_name;?></option>
												<?php  }
											}?>
										</select>
									</div>
									<div class="form-group">
										<label>Attedance Month<span class="text-danger">*</span>
										</label>
											<select class="form-control" name="attendancemonth">
												<option selected="" disabled="">Please Select</option>
												<?php  for ($i = 1; $i <= 12; $i++)
									            {
									                $month_name = date('F', mktime(0, 0, 0, $i, 1, 2011));  ?>
									               <option value="<?php echo $i; ?>"><?php echo $month_name; ?></option>
									       		<?php } ?>
											
											</select>
									</div>									
								</div>
								<div class="col-sm-6">
										<label>Time in<span class="text-danger">*</span>
										</label>
									<div class="clock-icon">
								  <input type="text" class="form-control datetimepicker" name="time_in" id="time_in">
								</div>
								</div>
							</div>
							
							<div class="submit-section">
								<hr>
								<button class="btn btn-primary submit-btn" name="Save" type="submit">Submit</button>
								<button type="button" name="cancel" class="btn btn-secondary submit-btn" onClick="location.href='<?php echo base_url(); ?>attendance/<?php echo $redirect_page; ?>'">Cancel
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
<!-- /Page Wrapper -->
</div>
		<!-- /Main Wrapper -->

		<!-- Sidebar Overlay -->
		<div class="sidebar-overlay" data-reff=""></div>

		<!-- jQuery -->
 <?php  $this->load->view('common/footer'); ?>

<script>
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
$(function() {
    $('#time_in').datetimepicker({
      language: 'en',
      pick12HourFormat: true
    });
  });
$(document).ready(function()
{ 
	
		$("#Month").datetimepicker({
           format: "MMMM-YYYY"  
        
    });

		
	
		$("#frm_emp").validate(
		{
					rules: {
						employename:{
							required: true,
						},
						
						


					},

				messages:{
					errorPlacement: function (error, element) {
					console.log('dd', element.attr("name"))
					if (element.attr("name") == "ProfileImage") {
					error.appendTo("#imgerror");
					} else{
					error.insertAfter(element)
					}
					}

												
			}
				
		});
});	

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
    