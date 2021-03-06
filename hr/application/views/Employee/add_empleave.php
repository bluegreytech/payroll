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

				<!-- Page Title -->
<?php
if(!empty($leavelist)){
?> 
<div class="row"> 
<div class="col-sm-8 col-6">
<h4 class="page-title">Leaves</h4>
</div>
<div class="col-sm-4 col-6 text-right m-b-30">
</div>
</div>
<!-- /Page Title -->
<!-- Leave Statistics -->
<div class="row" id="listing_leave">
<?php
foreach($leavelist as $val){
	//echo "<pre>";print_r($val);
?> 
<div class="col-md-3"> 
	<div class="stats-info" >
	    <span id='leaveid_<?php echo $val->leave_id; ?>' style="display:none;"><?php echo $val->leave_id; ?></span> 
		<h6 id="leave_name_<?php echo $val->leave_id; ?>"><?php echo $val->leave_name; ?></h6> 
		<h4 id="leave_day_<?php echo $val->leave_id; ?>"><?php  echo '0'; ?></h4> 
	</div>
</div>
<?php } ?>
</div>
<?php } ?>
<h4 class="page-title">Add Leave</h4>
				<div class="card-box mb-0">
					<div class="row">
						<div class="offset-md-1 col-md-10 offset-md-1">
							<form method="POST" action="<?php echo base_url();?>leave/addempleave" id="frm_addleave">
								<div class="form-group">
									<input type="hidden" name="empleave_id" value="<?php echo $empleave_id;?>">
											<label>Employee Name <span class="text-danger">*</span>
											</label>											
											<select  class=" form-control selectpicker"  data-live-search="true" data-actions-box="true" name="employename" id="employename">
											 <option selected="" value="">Please select</option> 
												<?php if(!empty($emplist)){
													foreach($emplist as $row) { ?>
													<option value="<?php echo $row->emp_id; ?>" <?php if($row->emp_id==$emp_id){ echo "selected"; } ?> ><?php echo ucfirst($row->first_name." ".$row->last_name);?></option>
													<?php  } } ?>
											</select>
											<span id="emperror"></span>
										</div>
								<div class="form-group">
									<label>Leave Type <span class="text-danger">*</span></label>
									<select class="form-control" name='typeofleave' id='typeofleave'>
										<option selected="" value="" disabled="">Please select</option>	
									</select>

									<input type="hidden" id="noleave">
									<input type="hidden" id="leavename">
									
								</div>
								<div class="form-group">
									<label>Leave<span class="text-danger">*</span></label>
									<select class="form-control" name='leavedays' id='leavedays'>
										<option selected="" value="" disabled="">Please select</option>
									  	<option value="halfday" <?php if($leavedays=='halfday'){ echo "selected"; }?>>Half Day</option>
									  	<option value="fullday" <?php if($leavedays=='fullday'){ echo "selected"; }?>>Full Day</option>	
									  	<option value="earlyleave" <?php if($leavedays=='earlyleave'){ echo "selected"; }?>>Early Leave</option>								
									</select>
									<p id="errorleave" style="display:none; color:red;">Choose valid leave option</p>
								</div>
								<div class="form-group" id="leavetym" style="display:none;">
									<label>Leave Time<span class="text-danger">*</span></label>
									<select class="form-control" name='leavetime' id='leavetime' style="display:none;">
										<option selected="" value="" disabled="">Please select</option>
									  	<option value="firsthalf" <?php if($leaveslot=='firsthalf'){ echo "selected"; } ?> >First Half</option>
									  	<option value="secondhalf" <?php if($leaveslot=='secondhalf'){ echo "selected"; } ?> >Second Half</option>	
									  						
									</select>
								</div>
								
								<div class="form-group" >
									<label>From <span class="text-danger">*</span></label>
									<div class="cal-icon">
									<input class="form-control" type="text" name="leavefrom" id="leavefrom" readonly="">
									</div>
									<!-- <div class="form-group">
                                        <label>From <span class="text-danger">*</span></label>
                                        <div class="input-group date cal-icon" id="id_0">
                                            <input type="text"  class="form-control timing" required/>
                                        </div>
                                    </div> -->
										
								</div>
								<div class="form-group" id="dateto">
									<label>To <span class="text-danger">*</span></label>
									<div class="cal-icon">
									<input class="form-control" type="text" name="leaveto" id="leaveto" readonly="">
									</div>
								</div>
								<div class="form-group" id="timein" style="display:none;">
									<label>Time out  <span class="text-danger">*</span></label>
									<div class="clock-icon">
									<input class="form-control" type="text" name="leavetimein" id="leavetimein" readonly="">
									</div>
								</div>
								<div class="form-group"  id="timeout" style="display:none;">
									<label>Time in <span class="text-danger">*</span></label>
									<div class="cal-icon">
									<input class="form-control" type="text" name="leavetimeout" id="leavetimeout" readonly="">
									</div>
								</div>
								<div class="form-group" id="totaldays">
									<label id="labeltotaldays">Number of days <span class="text-danger">*</span></label>
									<input class="form-control" type="text" name="noofdays" id="noofdays"  readonly="" value="<?php echo $noofdays; ?>">
								</div>
							
								<div class="form-group">
									<label>Leave Reason <span class="text-danger">*</span></label>
									<textarea rows="4" class="form-control" name="leavereason" id="leavereason"><?php echo $leavereason; ?></textarea>
								</div>
									<div class="submit-section">
									<hr>
									<button class="btn btn-primary submit-btn" name="Save" type="submit" id="btnsave"><?php echo ($empleave_id!='')?'Update':'Submit' ?></button>
									<button type="button" name="cancel" class="btn btn-secondary submit-btn" onClick="location.href='<?php echo base_url(); ?>leave/<?php echo 
									$redirect_page; ?>'">Cancel
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
$(document).ready(function()
{
  // var leavedata= '<?php //echo $salarymonth; ?>';
  // alert(leavedata);
  	$('#leavefrom').datetimepicker({
            "allowInputToggle": true,
            "showClose": true,
            "showClear": true,
            "showTodayButton": true,
            ignoreReadonly: true,		
            "format": "DD/MM/YYYY",
        }).val('<?php echo ($leavefrom!='0000-00-00') && ($leavefrom!='')  ? date('d/m/Y', strtotime($leavefrom)) : date('d/m/Y', strtotime($salarymonth)); ?>'); 
  
	$('#leaveto').datetimepicker({	
				"allowInputToggle": true,
	            "showClose": true,
	            "showClear": true,
	            "showTodayButton": true,
	             ignoreReadonly: true,		
        		 "format": "DD/MM/YYYY",
	}).val('<?php echo ($leaveto!='0000-00-00') && ($leaveto!='')  ? date('d/m/Y', strtotime($leaveto)) : date('d/m/Y', strtotime($salarymonth)); ?>');	
	
		
    $('#leavetimein').datetimepicker({					
				   format: "hh:mm:ss A",			
					ignoreReadonly: true,
	}).val('<?php echo ($leavetimein!='00:00:00')&&($leavetimein!='')  ? date('h:i:s A', strtotime($leavetimein)) :''; ?>');

   $('#leavetimeout').datetimepicker({					
				format: "hh:mm:ss A",			
				ignoreReadonly: true,
	}).val('<?php echo ($leavetimeout!='00:00:00')&&($leavetimeout!='')  ? date('h:i:s A', strtotime($leavetimeout)) :''; ?>');

//$.validator.setDefaults({ ignore: ":hidden:not(select#leavetime)" });
	$("#frm_addleave").validate(
	{
		
		ignore: "input[type='text']:hidden"	,
		 //for all select
			rules: {
				'employename':{
					required:true,						
			    },
				typeofleave:{
					required:true,
				},		
				leavefrom:{
					required:true,
				},
				leaveto:{				
					required: true,
				},
				leavedays:{
					required: true,
				},
				noofdays:{
					required: true,
				},
				// leavetime:{
				// 	required:true,
				// }						
			
			},
		
			errorPlacement: function (error, element) {
				console.log('dd', element.attr("name"));
				if(element.attr("name") == "employename") {
					error.appendTo("#emperror");
				} else{
				error.insertAfter(element)
				}
			}											
			
			
	});

$("#leavedays").change(function () {
	var end = this.value;
	var leavedays = $('#leavedays').val();
	if(leavedays=='halfday'){		
		$('#dateto').css('display','none');
	   	$('#leavetym').css('display','block');
	   	$('#leavetime').css('display','block');
		var leavefrom = $('#leavefrom').val();		
		if(leavefrom!==''){
			//callformdate();
			total="0.5";	    
			$('#noofdays').val(total);
		}	
	    $("#labeltotaldays").empty();
       	$('#labeltotaldays').append('<label>Number of days<span class="text-danger">*</span></label>');
		$('#timein').css('display','none');
		$('#timeout').css('display','none');
		
	}else if(leavedays=='earlyleave'){ 
		$('#dateto').css('display','none');   	
       	$('#leavetym').css('display','none');
        $('#leavetime').css('display','none');
       	$('#leavehours').css('display','block');
       	$('#errorleave').css('display','none');
       	$("#labeltotaldays").empty();
       	$('#labeltotaldays').append('<label>Number of Hours<span class="text-danger">*</span></label>');
       	$('#timein').css('display','block');
		$('#timeout').css('display','block');
	}else{
		
		$('#totaldays').show();
		$('#dateto').css('display','block');
	    var leavefrom = $('#leavefrom').val();
	   	if(leavefrom!=''){
	   	 var leaveto = $('#leaveto').val();		
		 	$('#noofdays').val('');
		}
	    $("#labeltotaldays").empty();
		$('#labeltotaldays').append('<label>Number of days<span class="text-danger">*</span></label>');	    
		$('#leavetym').css('display','none');
		$('#leavetime').css('display','none');
		$('#leavehours').css('display','none');
		$('#errorleave').css('display','none');
		$('#timein').css('display','none');
		$('#timeout').css('display','none');
		
	}  
	});
});	
 
   
  var leavedays = $("select#leavedays option:selected").attr('value');
  
  if(leavedays=='halfday'){	
  		$('#dateto').css('display','none');	
  		 $('#leavetym').css('display','block');
  		  $('#leavetime').css('display','block');
		$('#timein').css('display','block');
		$('#timeout').css('display','block');
		$("#labeltotaldays").empty();
       	$('#labeltotaldays').append('<label>Number of days<span class="text-danger">*</span></label>');
		$('#timein').css('display','none');
		$('#timeout').css('display','none');		
	}else if(leavedays=='earlyleave'){
    	
		$('#dateto').css('display','none');   	
       	$('#leavetym').css('display','none');
       	$('#leavehours').css('display','block');
       	$('#errorleave').css('display','none');
       	$("#labeltotaldays").empty();
       	$('#labeltotaldays').append('<label>Number of Hours<span class="text-danger">*</span></label>');
       	$('#timein').css('display','block');
		$('#timeout').css('display','block');    
	}else{		
		$('#timein').css('display','none');
		$('#timeout').css('display','none');
	}


$(document).ready(function() {
   	$('#leaveto').focusout(function(){

        total='';
		var fromDate = $('#leavefrom').val(); 			
		var toDate = $('#leaveto').val();
		var dateFirst = new Date(myDateFormatter(fromDate));
		var dateSecond = new Date(myDateFormatter(toDate));    
		// time difference
		var timeDiff = Math.abs((dateSecond.getTime()) - dateFirst.getTime());
		var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));

		leaveday=$("select#leavedays option:selected").attr('value');	 
		if(leaveday=="halfday"){			
			total="0.5";
		}else{			
			$('#errorleave').css('display','none');			
			total=diffDays+1;
		}

       	var noleave=$('#noleave').val();
       	var leavename=$('#leavename').val();
   
       	if(noleave<total){   
       		$.alert({ title: 'Alert !', content: 'you can not select more then '+noleave+' '+leavename, type: 'red', typeAnimated: true, });

       		//alert('you can not select more then '+noleave+' '+leavename);       	 
       	    $('#btnsave').attr('disabled','disabled');
       	    $('#leaveto').val('');
       	    $('#noofdays').val('');	
       	    return false; 
       	      
       	}else{
     	 $('#noofdays').val(total);	       
         $('#btnsave').removeAttr('disabled');
          return false; 
       	}
       
			
    });  
   
        // leaveday=$("select#leavedays option:selected").attr('value');
        // alert(leaveday);
     	$('#leavefrom').focusout(function(){  
        total='';
		leaveday=$("select#leavedays option:selected").attr('value');
	   
		if(leaveday=="halfday"){			
			total="0.5";
		}else if(leaveday=="earlyleave"){			
			$('#errorleave').css('display','none');			
			//total=diffDays+1;
		}	

		

		$('#noofdays').val(total);		
    });  
    $('#leavetimeout').focusout(function(){  

       	 calculate();	
    });  
});
 	
//leaveday=$("select#leavedays option:selected").attr('value');
	
	
	
function myDateFormatter (dobdate) {
 dArr = dobdate.split("/");  // ex input "18/01/2010"
//console.log(dArr);
  return dArr[1]+ "/" +dArr[0]+ "/" +dArr[2]; //ex out: "18/01/10"       
};

function calculate(){
   		//alert($("#leavetimeout").val());
   		var timeout = $("#leavetimeout").val();
   		var timein = $("#leavetimein").val();
   		stime = ConvertToSeconds(timeout);
		etime = ConvertToSeconds(timein);
		diff = Math.abs( etime - stime ) ;
		hours=secondsTohhmmss(diff);
		
         $("#noofdays").val(hours);

         //console.log( 'time difference is : ' + secondsTohhmmss(hours) );
    }

	function ConvertToSeconds(time) {
		var splitTime = time.split(":");
		return splitTime[0] * 3600 + splitTime[1] * 60;
	}

    // $(".Time1,.Time2").change(calculate);
     
function secondsTohhmmss(secs) {
    var hours = parseInt(secs / 3600);
    var seconds = parseInt(secs % 3600);
    var minutes = parseInt(seconds / 60) ;
    return hours+ "." +minutes + " hours";
  }
	
	
$("#employename").change(function () {
	var end = this.value;
	var id = $('#employename').val();
	url="<?php echo base_url();?>";
	
	$.ajax({
		url: url+'leave/viwempleavelist',
		type: 'post',
		data:{id:id},
        success:function(response){
			var response = JSON.parse(response);
			//console.log(response.result);
			$('#typeofleave').empty();
			$('#typeofleave').append($('<option value="" disabled="" selected="">Please Select</option>'));
			$.each(response.result, function(key, value) {					 
			   $('#typeofleave').append(
              $('<option></option>').val(value.leave_id).html(value.leave_name));
			});
        }
		});  
	$.ajax({
		url: url+'leave/viwempleave',
		type: 'post',
		data:{id:id},
        success:function(result){
			var res1 = JSON.parse(result);          
			$('#listing_leave').empty();
			$.each(res1.result, function(key, value) {
				if(value.no_leave=='-1'){
					leaveno='0';
				}else{
					leaveno=value.no_leave;
				}
			  $('#listing_leave').append('<div class="col-md-3"><div class="stats-info"><span id="leaveid_'+value.leave_id+'" style="display:none;">'+value.leave_id+'</span><h6 id="leave_name_'+value.leave_id+'">'+ value.leave_name +'</h6><h4 id="leave_day_'+value.leave_id+'">'+ leaveno  +'</h4></div></div>');
			});
			
        }
		});
	});    

$("#typeofleave").change(function () {
	var id = this.value;	
	var leaveid=$('#leaveid_'+id).text();
		//alert(leaveid);
	 if(id==leaveid){

 		var noleavedays=$('#leave_day_'+id).text();
 		var leavename=$('#leave_name_'+id).text();
      	$('#noleave').val(noleavedays);
        $('#leavename').val(leavename);
         
	 }
});

// $("#typeofleave").load(function () {

// 	var id = this.value;	
// 	var leaveid=$('#leaveid_'+id).text();
// 	 if(id==leaveid){
//  		var noleavedays=$('#leave_day_'+id).text();
//  		var leavename=$('#leave_name_'+id).text();
//       	$('#noleave').val(noleavedays);
//         $('#leavename').val(leavename);
         
// 	 }
// });
///onload event call in edit data


emp_id="<?php echo $emp_id;?>";
typeofleave="<?php echo $typeofleave;?>";

url="<?php echo base_url();?>";	
	$.ajax({
		url: url+'leave/viwempleavelist',
		type: 'post',
		data:{id:emp_id},
        success:function(response){
			var response = JSON.parse(response);
			console.log(response.result);
			$('#typeofleave').empty();
			$('#typeofleave').append($('<option value="" disabled="" selected="">Please Select</option>'));
			$.each(response.result, function(key, value) {
				if(value.leave_id == typeofleave){
					$('#typeofleave').append('<option value="' + value.leave_id + '" selected="selected">' + value.leave_name + '</option>');
				}else{
				 	$('#typeofleave').append(
      			   	$('<option></option>').val(value.leave_id).html(value.leave_name));
				}  
			
			});
        }
	}); 
if(emp_id){
	$.ajax({
		url: url+'leave/viwempleave',
		type:'post',
		data:{id:emp_id},
        success:function(result){
			var res1 = JSON.parse(result);   
			console.log(res1);       
			$('#listing_leave').empty();
			$.each(res1.result, function(key, value) {
				if(value.no_leave=='-1'){
					leaveno='0';
				}else{
					leaveno=value.no_leave;
				}
			  	$('#listing_leave').append('<div class="col-md-3"><div class="stats-info"><span id="leaveid_'+value.leave_id+'" style="display:none;">'+value.leave_id+'</span><h6 id="leave_name_'+value.leave_id+'">'+ value.leave_name +'</h6><h4 id="leave_day_'+value.leave_id+'">'+ leaveno  +'</h4></div></div>');
				var id = typeofleave;	
				var leaveid=$('#leaveid_'+id).text();	
				//alert(leaveid);
				if(id==leaveid){
				var noleavedays=$('#leave_day_'+id).text();
				console.log(noleavedays);
				var leavename=$('#leave_name_'+id).text();
				$('#noleave').val(noleavedays);
				$('#leavename').val(leavename);

				}
			});
        }
	});
}

	

</script>
    