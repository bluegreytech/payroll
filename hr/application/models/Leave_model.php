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
		'company_id' =>$this->session->userdata('companyid'),
		'created_date'=>date('Y-m-d')		
		);
		//echo "<pre>";print_r($data);die;
        $res=$this->db->insert('tblcmpleave',$data);	
		return $res;
			
	}

	function getleavedata($empleave_id){

		// $this->db->select("*,el.emp_id as empid");
		// $this->db->from("tblempleave as el");
		// $this->db->join("tblemp as em",'el.emp_id=em.emp_id');
		// $this->db->where("el.Is_deleted",'0');
		// $this->db->where("el.empleave_id",$empleave_id);
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
			'company_id' =>$this->session->userdata('companyid'),
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
			$leaveto = $this->input->post('leaveto');
			$date = str_replace('/', '-', $leaveto );
			$leavetodt = date("Y-m-d", strtotime($date));

		   	$leavefrom = $this->input->post('leavefrom');
			$date = str_replace('/', '-', $leavefrom );
			$leavefromdt = date("Y-m-d", strtotime($date));
			$empcount=$this->input->post('employename');
		
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
					'noofdays' => trim($this->input->post('noofdays')),	
					'typeofleave' => trim($this->input->post('typeofleave')),
					'leavetimein'=>date('H:i:s',strtotime($this->input->post('leavetimein'))),					
					'leavetimeout'=>date('H:i:s',strtotime($this->input->post('leavetimeout'))),
					'leavereason'=>trim($this->input->post('leavereason')),
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
         //  echo "<pre>";print_r($_POST);die;
			$leaveto = $this->input->post('leaveto');
			$date = str_replace('/', '-', $leaveto );
			$leavetodt = date("Y-m-d", strtotime($date));
			
		   	$leavefrom = $this->input->post('leavefrom');
			$date = str_replace('/', '-', $leavefrom );
			$leavefromdt = date("Y-m-d", strtotime($date));
			$empcount=$this->input->post('employename');
		
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
					'noofdays' => trim($this->input->post('noofdays')),	
					'typeofleave' => trim($this->input->post('typeofleave')),				
					'leavetimein'=>date('H:i:s',strtotime($this->input->post('leavetimein'))),					
					'leavetimeout'=>date('H:i:s',strtotime($this->input->post('leavetimeout'))),
					'leavereason'=>trim($this->input->post('leavereason')),
					'company_id' =>$this->session->userdata('companyid'),
					'leavestatus' =>'Approve',
					'created_date'=>date('Y-m-d')		
				);
				//echo "<pre>";print_r($data);
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
			
			if($empname !=='' && $leave_type!=='' && $leave_status!=='' && $fromdate!== '' && $todate!=='')
			{	
			  	//echo "hghh". $empname;die;			 
				$this->db->like('CONCAT(first_name," ",last_name)',$empname);
				$this->db->like('el.typeofleave',$leave_type);
				$this->db->like('el.leavestatus',$leave_status);
				$this->db->where('date BETWEEN "'. date('Y-m-d', strtotime($start_date)). '" and "'. date('Y-m-d', strtotime($end_date)).'"');
				//$this->db->like('cl.leave_type',$leave_type);
			}
			else if($empname !=='' && $empname!==NULL)
			{   
			   // echo "kjkjhk".$empname;die;	
				$this->db->like('CONCAT(first_name," ",last_name)',$empname);
			}			
			else if($leave_type !== '' && $leave_type!==NULL)
			{  
				$this->db->like('el.typeofleave',$leave_type);
			}
			else if($leave_status !== ''&& $leave_status!==NULL)
			{ 	
				$this->db->like('el.leavestatus',$leave_status);
			}
			else if($fromdate !== '' && $fromdate!==NULL)
			{ 
				//echo "ghjhgj";die;
				$fromdate = $this->input->post('fromdate');
				$fdate = str_replace('/', '-', $fromdate );
				$fdate = date("Y-m-d", strtotime($fdate));	
				$this->db->like('el.leavefrom',$fdate);

			}else if($todate !== '' && $todate!==NULL)
			{ 
				//echo "gfgfdg";die;
				$todate = $this->input->post('todate');
				$tdate = str_replace('/','-',$todate);
				$tdate = date("Y-m-d", strtotime($tdate));	
				$this->db->like('el.leaveto',$tdate);
			}

			// else if($todate == 'leaveto')
			// {
			// 	$this->db->like('leaveto',$keyword);
			// }
			// else if($leave_type == 'leavestatus')
			// {
			// 	$this->db->where('leavestatus',$keyword);
			// }  
			// else if($leave_status == 'typeofleave')
			// {
			// 	$this->db->where('typeofleave',$keyword);
			// }  
			// echo $this->db->last_query();die;
			$query = $this->db->get();
			if($query->num_rows() > 0)
			{ 
				//echo $this->db->last_query();die;
				//echo "<pre>";print_r($query->result());die;
			
				return $query->result();
			}  
	}
}
