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



						<div class="col-sm-5 col-5">



							<h4 class="page-title">List of Company</h4>



						</div>



						<div class="col-sm-7 col-7 text-right m-b-30">



							<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_policy"><i class="fa fa-plus"></i> Add Compliance</a> 



						</div>



					</div>



					<!-- /Page Title -->



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











					<div class="row">



						<div class="col-md-12">



							<div class="table-responsive">



								<table class="table table-striped custom-table mb-0 datatable">



									<thead>



										<tr>



											<th style="width: 30px;">#</th>



											<th>Company Name</th>

                                           <th class="text-right">Action</th>



										</tr>



									</thead>



									<tbody>



									<?php 



										$i=1;                          



										foreach($company as $comp)



										{



									?>



										<tr>



											<td><?php echo $i;?></td>

											<td><?php echo $comp->companyname;?></td>
                                              <td class="text-center">

														<a href="<?php echo base_url()?>Company/compliance/<?php echo $comp->companyid?>"><i class="fa fa-list m-r-5"></i> Compliance list</a>
			

											</td>



										</tr>



										<?php	



										$i++;		



											}



										?>   



									



									</tbody>



								</table>



							</div>



						</div>



					</div>







					



                </div>



				<!-- /Page Content -->







				<!-- Add Policy Modal -->



				<div id="add_policy" class="modal custom-modal fade" role="dialog">



					<div class="modal-dialog modal-dialog-centered" role="document">



						<div class="modal-content">



							<div class="modal-header">



								<h5 class="modal-title">Add Compliance</h5>



								<button type="button" class="close" data-dismiss="modal" aria-label="Close">



									<span aria-hidden="true">&times;</span>



								</button>



							</div>



							<div class="modal-body">



								<form method="post" id="form_valid" action="<?php echo base_url()?>Company/compliance">

                                 <div class="form-group">
											<label>Select company</label>
											<select class="form-control selectpicker" multiple   data-live-search="true" data-actions-box="true" name="companyid[]"> 
												<?php
												foreach($company as $val){

													?>
												<option  value="<?php echo $val->companyid?>"><?php echo $val->companyname?></option>
												<?php
											}
											?>
											</select>
									</div>


									<div class="form-group">
											<label>Type of Compliances</label>
											<select class="form-control" name="compliancetypeid"> 
												<option desabled>Please select type</option>
												<option desabled value="1">Ernnings Compliance</option>
												<option desabled value="2">Deduction Compliance</option>
											</select>
									</div>

								

									<div class="form-group">



										<label>Compliance Name <span class="text-danger">*</span></label>



										<input class="form-control" type="text" name="compliancename" placeholder="Enter a compliance " minlength="2" maxlength="30" style="text-transform: capitalize;">



									</div>



									



									<div class="form-group">



										<label>Compliance Percentage <span class="text-danger">*</span></label>



										<input class="form-control" type="text" name="compliancepercentage" placeholder="Enter a compliance percentage : 12" minlength="2" maxlength="6" id="compliancepercentages">



									</div>


                                	<div class="form-group">



										<label>ER Percentage <span class="text-danger">*</span></label>



										<input class="form-control" type="text" name="er_percentage" placeholder="Enter a ER percentage : 12" minlength="1" maxlength="6" id="er_percentage">



									</div>




									<div class="col-md-6">



											<div class="form-group">



											<label class="col-form-label">Isactive<span class="text-danger">*</span></label><br>



											<label class="radio-inline">



												<input type="radio" name="isactive" checked value="1">Active



											</label>



											<label class="radio-inline">



												<input type="radio" name="isactive" value="0">Inactive



											</label>



											</div>



										</div>

                                    	<div class="col-md-6">
											<div class="form-group">
											<label class="col-form-label">Is editable ?<span class="text-danger">*</span></label><br>
											<label class="radio-inline">
													<input type="radio" name="is_editable"   checked value="0">Yes
													<input type="radio" name="isactive"  value="1">No 
											</label>
											</div>
									</div>

								



									<div class="submit-section">



										<button class="btn btn-primary submit-btn">Submit</button>



									</div>



								</form>



							</div>



						</div>



					</div>



				</div>



				<!-- /Add Policy Modal -->



				



            </div>



			<!-- /Page Wrapper -->







        </div>



		<!-- /Main Wrapper -->



		



		<!-- Sidebar Overlay -->



		<div class="sidebar-overlay" data-reff=""></div>



		



		<!-- jQuery -->



        <script src="<?php echo base_url(); ?>default/js/jquery-3.2.1.min.js"></script>



		



		<!-- Bootstrap Core JS -->



        <script src="<?php echo base_url(); ?>default/js/popper.min.js"></script>



        <script src="<?php echo base_url(); ?>default/js/bootstrap.min.js"></script>



		



		<!-- Slimscroll JS -->



		<script src="<?php echo base_url(); ?>default/js/jquery.slimscroll.min.js"></script>



				



		<!-- Select2 JS -->



		<script src="<?php echo base_url(); ?>default/js/select2.min.js"></script>



		



		<!-- Datatable JS -->



		<script src="<?php echo base_url(); ?>default/js/jquery.dataTables.min.js"></script>



		<script src="<?php echo base_url(); ?>default/js/dataTables.bootstrap4.min.js"></script>



		



		<!-- Custom JS -->



		<script src="<?php echo base_url(); ?>default/js/app.js"></script>



		<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>

<script src="http://localhost/payroll/admin/default/js/bootstrap-select.min.js"></script>

    </body>



</html>




<script>









		$('#add_policy').on('hidden.bs.modal', function () {



			$(this).find('form').trigger('reset');



		})







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







		$("#compliancepercentages").on("input", function(evt) {



			var self = $(this);



			self.val(self.val().replace(/[^\d]+/, "."));



			if ((evt.which < 48 || evt.which > 57)) 



			{



				evt.preventDefault();



			}



			});







			$("#compliancepercentage").on("input", function(evt) {



			var self = $(this);



			self.val(self.val().replace(/[^\d]+/, "."));



			if ((evt.which < 48 || evt.which > 57)) 



			{



				evt.preventDefault();



			}



			});







		jQuery.validator.addMethod("noSpace", function(value, element)   { //Code used for blank space Validation 



    return value.indexOf(" ") < 0 && value != ""; 



    }, "Please no space allowed and don't leave it empty"); 

		$(document).ready(function()
		{
			$('select').selectpicker({
		noneSelectedText : 'Please Select',
	});
				$("#form_valid").validate(
				{
						rules: {
							compliancetypeid: {
									required: true,
										},
							compliancename: {
									required: true,
										},
							compliancepercentage: {
									required: true,
									noSpace: true,
										},
							},

						messages:{
							compliancetypeid: {
									required: "Please select compliance type",
										},	
							compliancename: {
									required: "Please enter a compliance name",
										},	
							compliancepercentage: {
									required: "Please enter a compliance percentage",
										},	
					}					



				});	











				$("#form_edit").validate(
				{
						rules: {
							compliancetypeid: {
									required: true,
										},
							compliancename: {
									required: true,
										},
							compliancepercentage: {
									required: true,
									noSpace: true,
										},
							},

						messages:{
							compliancetypeid: {
									required: "Please select compliance type",
										},
							compliancename: {
									required: "Please enter a compliance name",
										},	
							compliancepercentage: {
									required: "Please enter a compliance percentage",
										},		



					}					



				});		



		});







		function editcompliance(complianceid)
		{
			Url="<?php echo base_url() ?>";
			//alert(complianceid);
			$.ajax({
				url: Url+'Company/editcompliance',
				type: 'post',
				data:{complianceid:complianceid},
				success:function(response){
					var response = JSON.parse(response);
					    console.log(response.companyid);
					$('#complianceid').val(response.complianceid);
					//$('#companyid').val(response.companyid);
					$('#compliancetypeid').val(response.compliancetypeid);
				
                   $("#companyid [value=" + response.companyid + "]").attr('selected', 'true');


					$("option[id=compliancetypeid][value=" + response.compliancetypeid=='1' + "]").attr('selected', 'selected');
					$("option[id=compliancetypeid][value=" + response.compliancetypeid=='2' + "]").attr('selected', 'selected');

					$('#compliancename').val(response.compliancename);
					$('#compliancepercentage').val(response.compliancepercentage);
					//$('#isactive').val(response.isactive);
					$("input[name=isactive][value=" + response.isactive + "]").attr('checked', 'checked');
				}
			});	
		}







	function deletedata(complianceid){  



			$('#delete_policy').modal('show')



				$('#yes_btn').click(function(){



				



						Url="<?php echo base_url();?>"



						$.ajax({



						url: Url+'/Company/delete_compliance/',



						type: "post",



						data: {complianceid:complianceid} ,



						success: function (response) {             



					// document.location.href = url+'adminmaster/adminlist/';          



					},



					})



				});



		}			

function statusdata(id,status){  

  

    $('#status_approve').modal('show');



    if(status=="0"){

    	 $('#statustxt').text('Active');

    	}else{

    		 $('#statustxt').text("Inactive");

    	}

   

        $('#ok_btn').click(function(){



                url="<?php echo base_url();?>"

                $.ajax({

                url: url+"/Company/statusdata/",

                type: "post",

                data: {id:id,status:status} ,

                success: function (response) { 



                //console.log(response);           

                document.location.href = url+'Company/compliance';                  



            },

            error: function(jqXHR, textStatus, errorThrown) {

                 console.log(textStatus, errorThrown);

            }

            })

           



        });

    

   



}



</script>