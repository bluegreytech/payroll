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
			$typeofleave=$this->input->post('typeofleave'); 
			if($this->input->post('leavedays')=='halfday'){
				$leaveslot=$this->input->post('leavetime');
				 $leaveto = $this->input->post('leavefrom');
				$date = str_replace('/', '-', $leaveto );
				$leavetodt = date("Y-m-d", strtotime($date));
         
			}
			//echo $leavetimein=$this->input->post('leavetimein');
			//echo $leavetimeout=$this->input->post('leavetimeout');

		  //echo  $leaveslot;
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
					'leavetimein'=>$this->input->post('leavetimein') ? date('H:i:s',strtotime($this->input->post('leavetimein'))):'',				
					'leavetimeout'=>$this->input->post('leavetimeout')?date('H:i:s',strtotime($this->input->post('leavetimeout'))):'',
					'leavereason'=>trim($this->input->post('leavereason')),
					'leaveslot'=>trim($leaveslot ? $leaveslot :''),
					'company_id' =>$this->session->userdata('companyid'),
					'leavestatus' =>'Approve',
					'created_date'=>date('Y-m-d')		
				);
				//echo "<pre>";print_r($data); die;
        		$res=$this->db->insert('tblempleave',$data);	
			}
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
					'leavetimein'=>$this->input->post('leavetimein')?date('H:i:s',strtotime($this->input->post('leavetimein'))):'',				
					'leavetimeout'=>$this->input->post('leavetimeout')?date('H:i:s',strtotime($this->input->post('leavetimeout'))):'',
					'leavereason'=>trim($this->input->post('leavereason')),
					'leaveslot'=>trim($leaveslot ? $leaveslot :''),
					'company_id' =>$this->session->userdata('companyid'),
					'leavestatus' =>'Approve',
					'created_date'=>date('Y-m-d')		
				);
				//echo "<pre>";print_r($data); die;
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
			$this->db->where('em.Is_deleted','0');
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
			//echo $this->db->last_query();die;
			if($query->num_rows() > 0)
			{ 
				//echo $this->db->last_query();die;
				//echo "<pre>";print_r($query->result());die;
			
				return $query->result();
			}  
	}
}
