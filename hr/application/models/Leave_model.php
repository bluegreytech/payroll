<?php

class Leave_model extends CI_Model
 {
	function leavelist()
	{
		$this->db->select('*');
		$this->db->from('tblcmpleave');
		$this->db->where('Is_deleted','0');
		$this->db->where('company_id',$this->session->userdata('companyid'));
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

}
