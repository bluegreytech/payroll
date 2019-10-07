<?php 
	 $this->load->view('common/header.php');
	 $this->load->view('common/sidebar.php');
?>

			<!-- Page Wrapper -->
            <div class="page-wrapper">

				<!-- Page Content -->
                <div class="content container-fluid">
					<!-- Page Title -->
					<div class="row">
						<div class="col-sm-4 col-5">
							<h4 class="page-title">Add Menu Access</h4>
						</div>
						<!-- <div class="col-sm-8 col-7 text-right m-b-30">
							<a href="#" class="btn add-btn"><i class="fa fa-plus"></i> Back to Access Menu List
							</a>
						</div> -->
					
					</div>
					<!-- /Page Title -->
					
				
					
					
                </div>
				<!-- /Page Content -->
				
				<!-- Add Salary Modal -->
				
									<div class="modal-body">
										<form method="post" action="<?php echo base_url();?>Rights/addrit">	
										<input type="hidden" name="UserId" value="<?php echo $UserId;?>">	
										<div class="table-responsive m-t-15">
										<table class="table table-striped custom-table">
											<thead>
												<tr>
													<th>Main Module Permission</th>
													<th>Sub Module Name</th>
													<th class="text-center">View</th>
													<th class="text-center">Add</th>
													<th class="text-center">Update</th>
													<th class="text-center">Delete</th>
												</tr>
											</thead>
											<tbody>
											<?php
												if($rightsData){                             
												foreach($rightsData as $ritdata)
												{
											?>
												<tr>
													<td>
													<input name="rightsid[]" type="checkbox" value="<?php echo $ritdata->rightsid ;?>">	<?php echo $ritdata->rightsname ;?>
													</td>
													
													<td>
													 <?php echo $ritdata->rightskey ;?>
													</td>
													
													<td class="text-center">
														<input name="view[]" type="checkbox" value="<?php echo $ritdata->view ;?>">
													</td>
													<td class="text-center">
														<input name="add[]" type="checkbox" value="<?php echo $ritdata->add ;?>">
													</td>
													<td class="text-center">
														<input name="update[]" type="checkbox" value="<?php echo $ritdata->update ;?>">
													</td>
													<td class="text-center">
														<input name="delete[]" type="checkbox" value="<?php echo $ritdata->delete ;?>">
													</td>
													
												</tr>
												<?php
										
											} }
										?>   
											</tbody>
										</table>
									</div>
									<div class="submit-section">
										<input type="submit" name="submit" class="btn btn-primary submit-btn" value="Submit">
									</div>
										</form>
									</div>
					
				<!-- /Add Salary Modal -->
				
				
				
			

				
            </div>
			<!-- /Page Wrapper -->

        </div>
		<!-- /Main Wrapper -->

		<!-- Sidebar Overlay -->
		<div class="sidebar-overlay" data-reff=""></div>

		<!-- jQuery -->
        <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="<?php echo base_url(); ?>default/js/jquery-3.2.1.min.js"></script>

		<!-- Bootstrap Core JS -->
        <script src="<?php echo base_url(); ?>default/js/popper.min.js"></script>
        <script src="<?php echo base_url(); ?>default/js/bootstrap.min.js"></script>

		<!-- Slimscroll JS -->
		<script src="<?php echo base_url(); ?>default/js/jquery.slimscroll.min.js"></script>
		
		<!-- Select2 JS -->
		<script src="<?php echo base_url(); ?>default/js/select2.min.js"></script>
		
		<!-- Datetimepicker JS -->
		<script src="<?php echo base_url(); ?>default/js/moment.min.js"></script>
		<script src="<?php echo base_url(); ?>default/js/bootstrap-datetimepicker.min.js"></script>
		
		<!-- Datatable JS -->
		 <script src="<?php echo base_url(); ?>default/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url(); ?>default/js/dataTables.bootstrap4.min.js"></script>		 


		<!-- Custom JS -->
		<script src="<?php echo base_url(); ?>default/js/app.js"></script>
		<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.js" type="text/javascript" ></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </body>
</html>
<script>
		 
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
				        
</script>


