<?php 
	 $this->load->view('common/header');
	 $this->load->view('common/sidebar');
?>
<!-- Page Wrapper -->

<!-- /Page Content -->

   <div class="page-wrapper">
			
				<!-- Page Content -->
                <div class="content container-fluid">
				
					<!-- Page Title -->
					<div class="row">
						<div class="col-sm-8 col-6">
							<h4 class="page-title">Leaves</h4>
						</div>
						<div class="col-sm-4 col-6 text-right m-b-30">
							<a href="<?php echo base_url()?>leave/addempleave" class="btn add-btn" ><i class="fa fa-plus"></i> Add Leave</a>
						</div>
					</div>
					<!-- /Page Title -->
					
					<!-- Leave Statistics -->
					<!-- <div class="row">
						<div class="col-md-3">
							<div class="stats-info">
								<h6>Today Presents</h6>
								<h4>12 / 60</h4>
							</div>
						</div>
						<div class="col-md-3">
							<div class="stats-info">
								<h6>Planned Leaves</h6>
								<h4>8 <span>Today</span></h4>
							</div>
						</div>
						<div class="col-md-3">
							<div class="stats-info">
								<h6>Unplanned Leaves</h6>
								<h4>0 <span>Today</span></h4>
							</div>
						</div>
						<div class="col-md-3">
							<div class="stats-info">
								<h6>Pending Requests</h6>
								<h4>12</h4>
							</div>
						</div>
					</div> -->
					<!-- /Leave Statistics -->
					
					<!-- Search Filter -->
					<!-- <div class="row filter-row">
					   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
							<div class="form-group form-focus">
								<input type="text" class="form-control floating">
								<label class="focus-label">Employee Name</label>
							</div>
					   </div>
					   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
							<div class="form-group form-focus select-focus">
								<select class="select floating"> 
									<option> -- Select -- </option>
									<option>Casual Leave</option>
									<option>Medical Leave</option>
									<option>Loss of Pay</option>
								</select>
								<label class="focus-label">Leave Type</label>
							</div>
					   </div>
					   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12"> 
							<div class="form-group form-focus select-focus">
								<select class="select floating"> 
									<option> -- Select -- </option>
									<option> Pending </option>
									<option> Approved </option>
									<option> Rejected </option>
								</select>
								<label class="focus-label">Leave Status</label>
							</div>
					   </div>
					   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
							<div class="form-group form-focus">
								<div class="cal-icon">
									<input class="form-control floating datetimepicker" type="text">
								</div>
								<label class="focus-label">From</label>
							</div>
						</div>
					   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
							<div class="form-group form-focus">
								<div class="cal-icon">
									<input class="form-control floating datetimepicker" type="text">
								</div>
								<label class="focus-label">To</label>
							</div>
						</div>
					   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
							<a href="#" class="btn btn-success btn-block"> Search </a>  
					   </div>     
                    </div> -->
					<!-- /Search Filter -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table mb-0 datatable">
									<thead>
										<tr>
											<th>Employee</th>
											<th>Leave Type</th>
											<th>From</th>
											<th>To</th>
											<th>No of Days</th>
											<th>Reason</th>
											<th class="text-center">Status</th>
											<th class="text-right">Actions</th>
										</tr>
									</thead>
									<tbody>
									<?php 

									// if($attmonth!=''){
									//                  $at_month=date('m',strtotime($attmonth)); 
									//   $at_year=date('Y',strtotime($attmonth));
									//    }
									if(!empty($result)){					


									foreach($result as $row){ 
									// echo "<pre>";print_r($row);
									?>
										<tr>
											<td>
												<h2 class="table-avatar">
												<?php 
												if(($row->ProfileImage!='' && file_exists(base_path().'/upload/emp/'.$row->ProfileImage))){  ?>

												<img src="<?php echo base_url();?>upload/emp/<?php echo $row->ProfileImage;?>" alt="" class="avatar avatar-xs">
												<a href="#"><?php echo ucfirst($row->first_name.' '.$row->last_name); ?> <span><?php echo ucfirst($row->desgination);?></span></a>
												<?php
												}
												else
												{ 
												?>
												<img src="<?php echo base_url();?>upload/no_image/user_no_image.png" alt="" class="avatar avatar-xs">
												<a href="<?php echo base_url() ?>/"><?php echo ucfirst($row->first_name.' '.$row->last_name); ?> <span><?php echo ucfirst($row->desgination);?></span></a>
												<?php
												}
												?>													
												</h2>
											</td>
											<td><?php echo get_leavetype_name(ucfirst($row->typeofleave));?></td>
											<td><?php echo date("d M Y",strtotime($row->leavefrom)); ?></td>
											<td><?php echo date("d M Y",strtotime($row->leaveto)); ?></td>
											<td><?php  
											     $timein=$row->leavetimein;
											     $timeout=$row->leavetimeout;
													
											     if($timein=='' && $timeout==''){
                                                    echo $row->noofdays.' '.'Days'; 
											     }else{                                                   	
													$timein = date('H:i',strtotime($row->leavetimein));
													$timeout= date('H:i',strtotime($row->leavetimeout));
													
													 $totalleave=sumTime($row->leavetimein,$row->leavetimeout);	 							     	 
													if ($timein <= "09:00" && $totalleave =='4') {
															echo "First Half";
													}else if($timein >= "14" && $totalleave=='4' ){
														echo "Second Half";
													}else if($totalleave <= '2'){
														
                                                        echo "Early leave";
													}else{
														 echo $row->noofdays.' '.'Days'; 
													}
											     }
                                               
												
											//if ($row->leavetimein < "9" && $row->leavetimein < "10"  ) {
											// 		echo "First Half";
											// } else
										
											// if ($row->leavetimein >= "12" && $row->leavetimein< "2") {
											// echo "Second Half";
											// }else{
											// 	 echo $row->noofdays.' '.'Days';
											// }
											
											?></td>
											<td><?php $reason=substr( $row->leavereason, 0,25);
											echo ucfirst($reason).'....'; ?></td>
											<td class="text-center">
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
														<i class="fa fa-dot-circle-o <?php 
														if($row->leavestatus=='Approve'){ echo 'text-success'; 
														}else if($row->leavestatus=='Pending'){ 
														echo 'text-info'; }else{ echo 'text-danger'; }?>"></i>	<?php echo ucfirst($row->leavestatus); ?>
													</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="javascript:void(0);" onclick="statusdata('<?php echo $row->empleave_id; ?>','<?php echo $row->leavestatus ;?>','Pending')">
														<i class="fa fa-dot-circle-o text-info"></i>Pending</a>
														<a class="dropdown-item" href="javascript:void(0);" onclick="statusdata('<?php echo $row->empleave_id; ?>','<?php echo $row->leavestatus ;?>','Approve')" data-id="approve"><i class="fa fa-dot-circle-o text-success"></i>Approved</a>												
														<a class="dropdown-item" href="javascript:void(0);" onclick="statusdata('<?php echo $row->empleave_id; ?>','<?php echo $row->leavestatus ;?>','Rejected')" id="rejected">
															<i class="fa fa-dot-circle-o text-danger"></i> Rejected</a>
													</div>
												</div>
											</td>
											<td class="text-center">
														<?php echo anchor('leave/edit_empleave/'.$row->empleave_id,'<i class="fa fa-pencil fa-lg" ></i>'); ?>
						   								<a href="javascript:void(0)"  onclick="deletedata('<?php echo $row->empleave_id; ?>')" ><i class="fa fa-trash-o fa-lg"></i></a>
											</td>
										</tr>
										<?php }  } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
                </div>
				<!-- /Page Content -->
		

				<!-- Approve Leave Modal -->
				<div class="modal custom-modal fade" id="approve_leave" role="dialog">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-body">
								<div class="form-header">
									<h3>Leave Approve</h3>
									<p>Are you sure want to <span id="statustxt"></span> for this leave?</p>
								</div>
								<div class="modal-btn delete-action">
									<div class="row">
										<div class="col-6">
											<a href="javascript:void(0);" id="ok_btn" class="btn btn-primary continue-btn">Yes</a>
										</div>
										<div class="col-6">
											<a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">No</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Approve Leave Modal -->
				
				<!-- Delete Leave Modal -->
				<div class="modal custom-modal fade" id="delete_approve" role="dialog">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-body">
								<div class="form-header">
									<h3>Delete Leave</h3>
									<p>Are you sure want to delete this leave?</p>
								</div>
								<div class="modal-btn delete-action">
									<div class="row">
										<div class="col-6">
											<a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
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
				<!-- /Delete Leave Modal -->
				
            </div>


<!-- /Page Wrapper -->

<!-- /Main Wrapper -->
<!-- Sidebar Overlay -->


<?php $this->load->view('common/footer');?>

<script type="text/javascript">
	function statusdata(id,status,value){  
		alert(status);		
  
    $('#approve_leave').modal('show');

    if(value=="Pending"){
    	$('#statustxt').text('pending');
    }else if(value=="Approve"){
    	$('#statustxt').text("approve");
    }else{
    	$('#statustxt').text("rejected");
    }
   
        $('#ok_btn').click(function(){
           
                url="<?php echo base_url();?>"
                $.ajax({
                url: url+"/leave/statusdata/",
                type: "post",
                data: {id:id,status:status,changestatus:value} ,
                success: function (response) {  
                	//return false;
                //console.log(response);           
                document.location.href = url+'leave/empleavelist';
            },
            error: function(jqXHR, textStatus, errorThrown) {
                 console.log(textStatus, errorThrown);
            }
            })
        });
    
   

}
</script>
    