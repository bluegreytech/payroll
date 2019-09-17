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

	function getleavedata($leaveid){

		$this->db->select("*");
		$this->db->from("tblcmpleave");
		$this->db->where("Is_deleted",'0');
		$this->db->where("leave_id",$leaveid);
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

}
