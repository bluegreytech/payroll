<?php   $selectdatedata= getSelectdate($this->session->userdata('companyid')); ?>
<?php ?>
<!-- jQuery -->
      <!--   <script data-cfasync="false" src="<?php //echo base_url(); ?>default/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> -->
        <script src="<?php echo base_url(); ?>default/js/jquery-3.2.1.min.js"></script>
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
		<!-- Tagsinput JS -->
		<script src="<?php echo base_url(); ?>default/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>		
		<!-- Custom JS -->
		<script src="<?php echo base_url(); ?>default/js/app.js"></script>
		<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
		<script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script> 	
		<script src="<?php echo base_url(); ?>default/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url(); ?>default/js/dataTables.bootstrap4.min.js"></script> 		
        <script src="<?php echo base_url(); ?>default/js/dataTables.buttons.min.js"></script>
        <script src="<?php echo base_url(); ?>default/js/buttons.bootstrap4.min.js"></script>       
        <script src="<?php echo base_url(); ?>default/js/jszip.min.js"></script>
        <script src="<?php echo base_url(); ?>default/js/pdfmake.min.js"></script>
        <script src="<?php echo base_url(); ?>default/js/vfs_fonts.js"></script>
        <script src="<?php echo base_url(); ?>default/js/buttons.html5.min.js"></script>
        <script src="<?php echo base_url(); ?>default/js/buttons.colVis.min.js"></script>
        <script src="<?php echo base_url(); ?>default/js/buttons.print.min.js"></script>		
		<script src="<?php echo base_url(); ?>default/js/bootstrap-select.min.js"></script>

		<script type="text/javascript">
		
				$('#alldate').datetimepicker({
				   	format: 'YYYY-MM',
					maxDate: new Date(),
					ignoreReadonly: true,
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
				}).val('<?php echo ($selectdatedata->selecteddate!='0000-00')&&($selectdatedata->selecteddate!='')  ? date('Y-m', strtotime($selectdatedata->selecteddate)) : ''; ?>');
			$("#alldate").on("dp.change", function() {
				selecteddate=$("#alldate").val();			
				url="<?php echo base_url();?>";
				$.ajax({
				url: url+'dashboard/selecteddate',
				type: 'post',
				data:{selecteddate:selecteddate},
				success:function(response){
				//var response = JSON.parse(response);
				console.log(response);
				}
				});
			});

		</script>

	</body>
</html>