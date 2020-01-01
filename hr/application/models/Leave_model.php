<?php

class Leave_model extends CI_Model
 {
	function leavelist()
	{
		$this->db->select('*');
		$this->db->from('tblcmpleave');
		$this->db->where('Is_deleted','0');		
		$this->db->where('companyid',$this->session->userdata('companyid'));
		$this->db->order_by('leave_id','Desc');
		$query=$this->db->get();
		$res=$query->result();
		return $res;
	}

	function showempleavelist()
	{
		$this->db->select('*');
		$this->db->from('tblcmpleave');
		$this->db->where('Is_deleted','0');	
		$this->db->where('status','Active');		
		$this->db->where('companyid',$this->session->userdata('companyid'));
		$this->db->order_by('leave_id','Desc');
		$query=$this->db->get();
		$res=$query->result();
		return $res;
	}	

    function leave_insert()
	{
			
        $data = array(
		'leavedays' => trim($this->input->post('leavedays')),		
		'leave_name'=>trim($this->input->post('leavename')),
		'status'=>trim($this->input->post('leavestatus')),
		'companyid' =>$this->session->userdata('companyid'),
		'created_date'=>date('Y-m-d')		
		);
		//echo "<pre>";print_r($data);die;
        $res=$this->db->insert('tblcmpleave',$data);	
		return $res;
			
	}

	function getleavedata($leave_id){		
		$this->db->select("*");
		$this->db->from("tblcmpleave");
		$this->db->where("Is_deleted",'0');
		$this->db->where("leave_id",$leave_id);
		$query=$this->db->get();	
		return $query->row_array();

	}

	function getempleavedata($empleave_id){
		$this->db->select("*");
		$this->db->from("tblempleave");
		$this->db->where("Is_deleted",'0');
		$this->db->where("empleave_id",$empleave_id);
		$query=$this->db->get();	
		return $query->row_array();

	}
	 function leave_update()
	{		
			
        $data = array(
		'leavedays' => trim($this->input->post('leavedays')),		
		'status'=>trim($this->input->post('leavestatus')),
		'leave_name'=>$this->input->post('leavename'),
		'companyid' =>$this->session->userdata('companyid'),
		'update_date'=>date('Y-m-d')		
		);
		//echo "<pre>";print_r($data);die;	
		//echo $this->input->post('holidayid'); die;
        $this->db->where('leave_id',$this->input->post('leave_id'));       
        $res=$this->db->update('tblcmpleave',$data);	
		return $res;
	
	}

	function empleave_insert(){
        	
      		$query = $this->db->get_where('tblcompany',array('companyid'=>$this->session->userdata('companyid')));
    		
		    if($query->num_rows()>0)
		    {
		      $row = $query->row();
		     
		    }  
 			$typeofleavedata=get_one_record('tblcmpleave','leave_id',$this->input->post('typeofleave')); 
 			//echo "<pre>";print_r($typeofleavedata->leave_name);die;
		    $leaveslot='';
		    $leaveto='';
			$leaveto = $this->input->post('leaveto');			
			$todate = str_replace('/', '-', $leaveto );
			$leavetodt = date("Y-m-d", strtotime($todate));
		   	$leavefrom = $this->input->post('leavefrom');
			$fromdate = str_replace('/', '-', $leavefrom );
			$leavefromdt = date("Y-m-d", strtotime($fromdate));
			$empcount=$this->input->post('employename');
			$typeofleave=$this->input->post('typeofleave'); 
			if($this->input->post('leavedays')=='halfday'){
				$leaveslot=$this->input->post('leavetime');
				$leaveto = $this->input->post('leavefrom');
				$date = str_replace('/', '-', $leaveto );
				$leavetodt = date("Y-m-d", strtotime($date));
         
			}elseif ($this->input->post('leavedays')=='earlyleave') {
				
				$leaveto = $this->input->post('leavefrom');
				$date = str_replace('/', '-', $leaveto );
				$leavetodt = date("Y-m-d", strtotime($date));
				# code...
			}
			
        	//for($j=0;$j<count($empcount);$j++){
                $empid=$this->input->post('employename')?$this->input->post('employename'):'';
                $emp_id=get_one_record('tblemp','emp_id',$empid); 
                //echo "<pre>";print_r($emp_id->first_name.''.$emp_id->last_name);die;              
                $noofdays=$this->input->post('noofdays');
                $totalannauleave=$emp_id->annualleave-$noofdays;
                $updata = array('annualleave' => $totalannauleave);               
                $this->db->where('emp_id',$empid);
                $this->db->update('tblemp',$updata);
				$data = array(
					'emp_id' =>$this->input->post('employename')?$this->input->post('employename'):'',        
					'leaveto' =>$leavetodt,
					'leavefrom' =>$leavefromdt,
					'noofdays' =>trim($this->input->post('noofdays')),	
					'typeofleave' =>trim($this->input->post('typeofleave')),
					'leavedays'=>$this->input->post('leavedays'),
					'leavetimein'=>$this->input->post('leavetimein') ? date('H:i:s',strtotime($this->input->post('leavetimein'))):'',				
					'leavetimeout'=>$this->input->post('leavetimeout')?date('H:i:s',strtotime($this->input->post('leavetimeout'))):'',
					'leavereason'=>trim($this->input->post('leavereason')),
					'leaveslot'=>trim($leaveslot ? $leaveslot :''),
					'company_id' =>$this->session->userdata('companyid'),
					'leavestatus' =>'Pending',
					'created_date'=>date('Y-m-d')		
				);

      //          $this->db->select('*');
      //          $this->db->from('tblattendance');
      //          $this->db->where('emp_id',$this->input->post('employename'));              
			   // $this->db->where('attendance_date >=',$leavefromdt);
			   // $this->db->where('attendance_date <=', $leavetodt);
			   // $query=$this->db->get(); 			 
      //  		   $res=$query->result();
      //           foreach($res as $rowdata) {
                  	
      //             	$updatedata=array(
      //             	 	'attendance_status'=>'Absent',
      //             	);
      //             	$this->db->where('attendance_id',$rowdata->attendance_id);       
      //    			$res=$this->db->update('tblattendance',$updatedata);                  

      //           }

				//echo "<pre>";print_r($res); die;
        	   	$res=$this->db->insert('tblempleave',$data);	
     //    		if($res){

     // 				$email_template=$this->db->query("select * from ".$this->db->dbprefix('tblemail_template')." where task='Leave assign by employee'");
					// $email_temp=$email_template->row();
					// $email_address_from=$email_temp->from_address;
					// $email_address_reply=$email_temp->reply_address;
					// $email_subject=$email_temp->subject;        
					// $email_message=$email_temp->message;
					// $username =$emp_id->first_name.' '.$emp_id->last_name;					
					// $email = $emp_id->email;
					// $email_to=$email;
					// $reason=trim($this->input->post('leavereason'));
                   
     //               	if($this->input->post('leavedays')=='fullday' ){
     //               		$noofdays=trim($this->input->post('noofdays')).' '."Day";
     //               	}elseif($this->input->post('leavedays')=='halfday'){
					// 	$noofdays=trim($this->input->post('noofdays')).' '."Day";
     //               	}else{
					// 	$noofdays=trim($this->input->post('noofdays'));
     //               	}
     //               	$typeofleave=$typeofleavedata->leave_name;	
     //               	$leavedays=trim($this->input->post('leavedays'));
     //               	$leavefrom=$leavefromdt;
     //                $leaveto=$leavetodt;
     //                $leavestatus='Approve';
     //                $companyname=$row->companyname;
     //                $base_url=base_url();
     //                $currentyear=date('Y');                   
     //                $email_message=str_replace('{break}','<br/>',$email_message);                 
     //                $email_message=str_replace('{base_url}',$base_url,$email_message);
     //                $email_message=str_replace('{year}',$currentyear,$email_message);
     //                $email_message=str_replace('{username}',$username,$email_message);
					// $email_message=str_replace('{reason}',$reason,$email_message);
					// $email_message=str_replace('{noofdays}',$noofdays,$email_message);
					// $email_message=str_replace('{typeofleave}',$typeofleave,$email_message);
					// $email_message=str_replace('{leavedays}',$leavedays,$email_message);
					// $email_message=str_replace('{leavefrom}',$leavefrom,$email_message);
					// $email_message=str_replace('{leaveto}',$leaveto,$email_message);
					// $email_message=str_replace('{leavestatus}',$leavestatus,$email_message);
					// $email_message=str_replace('{companyname}',$companyname,$email_message);
                    
     //                $str=$email_message; //die;
     //             //   echo "<pre>";print_r($str);die;
                   
     //                $email_config = Array(
	    //                 'protocol'  => 'smtp',
	    //                 // 'smtp_host' => 'relay-hosting.secureserver.net',
	    //                 // 'smtp_port' => '465',
	    //                 // 'smtp_user' => 'binny@bluegreytech.co.in',
	    //                 // 'smtp_pass' => 'Binny@123',
	    //                 'smtp_host' => 'ssl://smtp.googlemail.com',
	    //                 'smtp_port' => '465',
	    //                 'smtp_user' => 'bluegreyindia@gmail.com',
	    //                 'smtp_pass' => 'Test@123',
	    //                 'mailtype'  => 'html',
	    //                 'starttls'  => true,
	    //                 'newline'   => "\r\n",
	    //                 'charset'=>'utf-8',
	    //                 'header'=> 'MIME-Version: 1.0',
	    //                 'header'=> 'Content-type:text/html;charset=UTF-8',
     //                ); 
     //               	 $this->email->initialize($email_config);                       
     //                // $this->load->library('email', $email_config);                   
     //                 $this->email->from("siya@yopmail.com", "siya");
     //                 $this->email->to('siya@yopmail.com');
     //                 $this->email->subject($email_subject);
     //                 $this->email->message($str);                    
	    //                 if($this->email->send()){ 	                   
	    //                   // echo "send"; die;
	    //                    return '1';
	    //                 }else{
	    //                 echo $this->email->print_debugger();die;
	    //                 }
     //    		}
			//}
		//die;
		return $res;
	}

	function empleavelist()
	{
		$this->db->select('*');
		$this->db->from('tblempleave as el');
		$this->db->join('tblemp as em','em.emp_id=el.emp_id');
		$this->db->where('el.Is_deleted','0');
		$this->db->where('el.company_id',$this->session->userdata('companyid'));
		$this->db->order_by('el.empleave_id','Desc');
		$query=$this->db->get();
		$res=$query->result();
		//echo $this->db->last_query();die;
		return $res;
	}
    
    function empleave_update(){
          	// echo "<pre>";print_r($_POST);die;
    	 	$leaveslot='';    	 	
		    $leaveto='';
			$leaveto = $this->input->post('leaveto');			
			$todate = str_replace('/', '-', $leaveto );
			$leavetodt = date("Y-m-d", strtotime($todate));
		   	$leavefrom = $this->input->post('leavefrom');
			$fromdate = str_replace('/', '-', $leavefrom );
			$leavefromdt = date("Y-m-d", strtotime($fromdate));

			$empcount=$this->input->post('employename');
			if($this->input->post('leavedays')=='halfday'){
				$leaveslot=$this->input->post('leavetime');
				$leaveto = $this->input->post('leavefrom');
				$date = str_replace('/', '-', $leaveto );
				$leavetodt = date("Y-m-d", strtotime($date));         
			}elseif($this->input->post('leavedays')=='earlyleave') {				
				$leaveto = $this->input->post('leavefrom');
				$date = str_replace('/', '-', $leaveto );
				$leavetodt = date("Y-m-d", strtotime($date));
				
			}
			// echo $leavetimein=$this->input->post('leavetimein');
			// echo $leavetimeout=$this->input->post('leavetimeout');
		
        	for($j=0;$j<count($empcount);$j++){
                $empid=$this->input->post('employename')[$j] ?$this->input->post('employename')[$j]:'';
                $emp_id=get_one_record('tblemp','emp_id',$empid);               
                $noofdays=$this->input->post('noofdays');
                $totalannauleave=$emp_id->annualleave-$noofdays;
                $updata = array('annualleave' => $totalannauleave);               
                $this->db->where('emp_id',$empid);
                $this->db->update('tblemp',$updata);

				$data = array(
					'emp_id' =>$this->input->post('employename')[$j]?$this->input->post('employename')[$j]:'',        
					'leaveto' =>$leavetodt,
					'leavefrom' =>$leavefromdt,
					'noofdays' =>trim($this->input->post('noofdays')),	
					'typeofleave' =>trim($this->input->post('typeofleave')),	
					'leavedays'=>$this->input->post('leavedays'),			
					'leavetimein'=>$this->input->post('leavetimein')?date('H:i:s',strtotime($this->input->post('leavetimein'))):'',				
					'leavetimeout'=>$this->input->post('leavetimeout')?date('H:i:s',strtotime($this->input->post('leavetimeout'))):'',
					'leavereason'=>trim($this->input->post('leavereason')),
					'leaveslot'=>trim($leaveslot ? $leaveslot :''),
					'company_id' =>$this->session->userdata('companyid'),
					'leavestatus' =>'Pending',
					'created_date'=>date('Y-m-d')		
				);
				// $this->db->select('*');
				// $this->db->from('tblattendance');
				// $this->db->where('emp_id',$this->input->post('employename'));              
				// $this->db->where('attendance_date >=',$leavefromdt);
				// $this->db->where('attendance_date <=', $leavetodt);
				// $query=$this->db->get(); 			 
				// $res=$query->result();

    //             foreach($res as $rowdata){                  	
    //               	$updatedata=array(
    //               	 	'attendance_status'=>'Absent',
    //               	);
    //               	$this->db->where('attendance_id',$rowdata->attendance_id);       
    //      			$res=$this->db->update('tblattendance',$updatedata); 
    //             }

				$this->db->where('empleave_id',$this->input->post('empleave_id'));
        		$res=$this->db->update('tblempleave',$data);	
			}
		//die;
		return $res;
	}
    function searchempleave()
	{
			//echo "<pre>";print_r($_POST);die;	
			$empname=$this->input->post('empname');
			$fromdate=$this->input->post('fromdate');
			$todate=$this->input->post('todate');
			$leave_type=$this->input->post('leave_type');
			$leave_status=$this->input->post('leave_status');			
			//$keyword = str_replace('-', ' ', $keyword);			
			$this->db->select('*');
			$this->db->from('tblempleave el');	
			$this->db->join('tblemp as em','em.emp_id=el.emp_id' );	
			//$this->db->join('tblcmpleave as cl','cl.leave_id=el.typeofleave' );	
			$this->db->where('el.Is_deleted','0');
			// echo $leave_type;die;

			$fromdate = $this->input->post('fromdate');
			$fdate = str_replace('/', '-', $fromdate );
			$fdate = date("Y-m-d", strtotime($fdate));

			$todate = $this->input->post('todate');
			$tdate = str_replace('/','-',$todate);
			$tdate = date("Y-m-d", strtotime($tdate));	
			//echo "<pre>";print_r($_POST);die;
			if($empname !=='' && $leave_type!=='' && $leave_status!=='' && $fromdate!== '' && $todate!=='')
			{	
				echo "<pre>";print_r($_POST);die;
			  	//echo "hghh". $empname;die;			 
				$this->db->like('CONCAT(first_name," ",last_name)',$empname);
				$this->db->like('el.typeofleave',$leave_type);
				$this->db->like('el.leavestatus',$leave_status);
				$this->db->where('el.leavefrom >= ',$fdate);
				$this->db->where('el.leaveto <= ',$tdate);
				//$this->db->like('cl.leave_type',$leave_type);
			}
			else if($empname !=='' && $empname!==NULL && $leave_type==NULL && $leave_status==NULL && $fromdate==NULL && $todate==NULL)
			{ 
				//echo "hjkjk 1";die; 
				$this->db->like('CONCAT(first_name," ",last_name)',$empname);
			}			
			else if($leave_type !== '' && $leave_type!==NULL && $leave_status=='' && $fromdate== '' && $todate=='' && $empname =='' )
			{ 
				//echo "hjkjk 2";die; 
				$this->db->like('el.typeofleave',$leave_type);
			}
			else if($leave_status !== '' && $leave_status!==NULL && $empname=='' && $leave_type=='' && $fromdate== '' && $todate=='' )
			{
				//echo "hjkjk 3";die; 
				$this->db->where('el.leavestatus',$leave_status);
			}
			else if($fromdate !== '' && $fromdate!==NULL && $leave_status=='' && $empname =='' && $leave_type==''  && $todate=='')
			{	
				//echo "hjkjk 4";die; 			
				$this->db->like('el.leavefrom',$fdate);

			}else if($todate !== '' && $todate!==NULL && $leave_status=='' && $empname =='' && $leave_type==''  && $fromdate=='' )
			{			
				//echo "hjkjk 5";die; 
				$this->db->like('el.leaveto',$tdate);
			}else if($todate !== '' && $todate!==NULL && $fromdate !== '' && $fromdate!==NULL){
              	$this->db->where('el.leavefrom >= ',$fdate);
				$this->db->where('el.leaveto <= ',$tdate);
			}
			else if($empname !=='' && $empname!==NULL && $leave_type!==NULL){
				//echo "hjkjk 6";die; 
              	$this->db->like('CONCAT(first_name," ",last_name)',$empname);
				$this->db->like('el.typeofleave',$leave_type);
				
			}else if($empname !=='' && $empname!==NULL && $leave_status!==NULL){
			 // echo "hjkjk 7";die; 
              	$this->db->like('CONCAT(first_name," ",last_name)',$empname);
				$this->db->like('el.leavestatus',$leave_status);
				
			}
			else if($empname !=='' && $empname!==NULL && $fromdate !== '' && $fromdate!==NULL){
			// echo "hjkjk 8";die; 
              	$this->db->like('CONCAT(first_name," ",last_name)',$empname);
				$this->db->like('el.leavefrom',$fdate);
				
			}
			else if($empname !=='' && $empname!==NULL && $todate !== '' && $todate!==NULL){			
              	$this->db->like('CONCAT(first_name," ",last_name)',$empname);
				$this->db->like('el.leaveto',$tdate);				
			}
			else if($leave_type !== '' && $leave_type!==NULL && $leave_status!==NULL){	
			    //echo "hjh";die;		
              	$this->db->like('el.typeofleave',$leave_type);
				$this->db->where('el.leavestatus',$leave_status);			
			}
			else if($leave_type !== '' && $leave_type!==NULL && $fromdate!==''&& $fromdate!==NULL){	
			//	echo $fromdate;die;		
              	$this->db->like('el.typeofleave',$leave_type);
				$this->db->like('el.leavefrom',$fdate);			
			}
			else if($leave_type !== '' && $leave_type!==NULL && $todate!==NULL && $todate!==''){	
					//  echo "hkjh";die;
              	$this->db->like('el.typeofleave',$leave_type);
				$this->db->like('el.leaveto',$tdate);	
			}
			else if($leave_status !== '' && $leave_status!==NULL && $todate!==NULL && $todate!==''){	
				    //echo "hkjh 1";die;
              	$this->db->like('el.leavestatus',$leave_status);
				$this->db->like('el.leaveto',$tdate);	
			}else if($leave_status !== '' && $leave_status!==NULL && $fromdate!==NULL && $fromdate!==''){	
				 // echo "hkjh gfgfg 2";die;
              	$this->db->like('el.leavestatus',$leave_status);
				$this->db->like('el.leavefrom',$fdate);		
			}
			$query = $this->db->get();
			
			if($query->num_rows() > 0)
			{ 
				return $query->result();
			}  
	}

	function getemplevdata($id){
      	$this->db->select('asl.leave_id,asl.no_leave,cl.leave_name');
		$this->db->from('tblempassignleave as asl');
		$this->db->join('tblcmpleave as cl','cl.leave_id=asl.leave_id');		
		$this->db->where('asl.Is_deleted','0');		
		$this->db->where('asl.no_leave!=','0');			
		$this->db->where('asl.companyid',$this->session->userdata('companyid'));
		$this->db->where('asl.emp_id',$id);
		$this->db->order_by('asl.empassignleave_id','Desc');
		$query=$this->db->get();		
		$res=$query->result();
		
	//	echo $this->db->last_query();
		return $res;
		
	}
	function getempleavedataupper($id){
		$this->db->select('asl.leave_id,asl.no_leave,cl.leave_name');
		$this->db->from('tblempassignleave as asl');
		$this->db->join('tblcmpleave as cl','cl.leave_id=asl.leave_id');		
		$this->db->where('asl.Is_deleted','0');
			
		$this->db->where('asl.companyid',$this->session->userdata('companyid'));
		$this->db->where('asl.emp_id',$id);
		$this->db->order_by('asl.empassignleave_id','ASC');
		$query=$this->db->get();		
		
		return $query->result_array();
		//echo $this->db->last_query();
		}
}
