<?php 
	 $this->load->view('common/header');
	 $this->load->view('common/sidebar');
?>
<div class="page-wrapper">			
   <div class="content container-fluid">
		<div class="row">
			<div class="col-md-12">
				<h4 class="page-title">Reimbursement </h4>
				<div class="card-box mb-0">
				
			
				</div>

				<div class="card-box mb-0">
				
							

								<!--  <button type="submit" class="btn btn-info" style="margin-left: 20px;">Submit</button> -->
								<form method="post" action="<?php echo base_url()?>claim/addclaim" enctype="multipart/form-data">
									<input type="hidden" name="claim_id" value="<?php echo $claim_id?>"?>
                         
                             <div class="row" >
                             	<div class="col-md-6">
                             		<div class="form-group">
     <select class=" form-control selectpicker"  data-live-search="true" data-actions-box="true" name="emp_id" id="emp_id">
    <option value="">Select employee...</option>
    <?php
    foreach ($emplist as $val) {
    	?>
<option value="<?php echo $val->emp_id ?>" <?php if($val->emp_id==$emp_id){ echo "selected"; } ?>><?php echo $val->first_name ?> <?php echo $val->last_name ?></option>
    	<?php
    }
    ?>
    
    
  </select>
  </div>
                             		<div class="form-group">
												<label>Claim Type</label>
												<input class="form-control" type="text" id="claim_type" name="claim_type" value="<?php echo $claim_type?>">
												
												
											</div>
											<div class="form-group">
												<label>Upload proof</label>
												<input class="form-control" type="file" id="upload_proof" name="upload_proof">
												<input type="hidden" name="pre_upload_proof" class="form-control" value="<?php echo $upload_proof;?>" id="pre_upload_proof"> 
												<?php  

									 if(($upload_proof!='')){ ?>
										<img class="inline-block" src="<?php echo base_url(); ?>upload/claim_proof/<?php echo $upload_proof; ?>" alt="" id="blah" style="height: 100px;">
									<?php
									}
									?>
											</div>
											<div class="form-group">
												<label>Month-Year</label>
												<input class="form-control" type="text" id="month_year"   name="month_year" value="<?php echo $month_year?>">
												
												
											</div>
										
                             	</div>

                             	<div class="col-md-6">
                             		<div class="form-group">
												<label>Amount</label>
												<input class="form-control" type="number" id="amount" name="amount" min=0 value="<?php echo $amount?>">
												
												
											</div>
											<div class="form-group">
												<label>Reimbursement status</label>
												<select class="form-control" name="reimb_satus">
													<option value="approved" <?php if($reimb_satus=='approved'){echo "selected" ;}?> >approved</option>
													<option value="cancel" <?php if($reimb_type=='cancel'){echo "selected" ;}?> >Disapproved</option>
													
													</select>
												
												
											</div>
											<div class="form-group">
												<label>Remarks</label>
												<textarea class="form-control" name="remarks"><?php echo $remarks?></textarea>
												
												
											</div>
												<div class="form-group">
												<label>Reimbursement type</label>
												<select class="form-control" name="reimb_type">
													<option value="subsidary" <?php if($reimb_type=='subsidary'){echo "selected" ;}?> >Subsidary</option>
													<option value="unclaimed" <?php if($reimb_type=='unclaimed'){echo "selected" ;}?> >Unclaimed</option>
													<option value="regular" <?php if($reimb_type=='regular'){echo "selected" ;}?>>Regular</option>
													
													
													
												</select>
												
												
											</div>
											
                             </div>

                          

                         
                             <button type="submit" class="btn btn-info">Save</button>
                         </form>
							</div>
						
  
 
 
		
				</div>
				
				</div>
			</div>
		</div>
	</div>
<?php  $this->load->view('common/footer'); ?>

<script>


$(document).ready(function () {
      // $('select').selectize({
      //     sortField: 'text'
      // });

      $('#month_year').datetimepicker({
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
				}).val('<?php
				if(!empty($month_year)){

					echo $month_year;
				}?>');

      
  });
</script>