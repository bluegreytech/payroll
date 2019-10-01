<?php

class Holiday_model extends CI_Model
 {
	function holidaylist()
	{
		$this->db->select('*');
		$this->db->from('tblcmpholiday');
		$this->db->where('Is_deleted','0');
		$this->db->where('company_id',$this->session->userdata('companyid'));
		$this->db->order_by('holiday_id','Desc');
		$query=$this->db->get();
		$res=$query->result();
		return $res;
	}

	

    function holiday_insert()
	{
		$origDate = $this->input->post('holidaydate');
		$date = str_replace('/', '-', $origDate );
		$holidaydate = date("Y-m-d", strtotime($date));		
        $data = array(
		'holidayday' => trim($this->input->post('holidayday')),		
		'holidaydate' =>$holidaydate,
		'holidayname'=>$this->input->post('holidayname'),
		'company_id' =>$this->session->userdata('companyid'),
		'created_date'=>date('Y-m-d')		
		);
		
        $res=$this->db->insert('tblcmpholiday',$data);	
		return $res;
			
	}

	function getholidaydata($holidayid){

		$this->db->select("*");
		$this->db->from("tblcmpholiday");
		$this->db->where("Is_deleted",'0');
		$this->db->where("holiday_id",$holidayid);
		$query=$this->db->get();	
		return $query->row_array();
	

	}
	 function holiday_update()
	{		
		
            $origDate = $this->input->post('holidaydate');
			$date = str_replace('/', '-', $origDate );
			$holidaydate = date("Y-m-d", strtotime($date));
			
            $data = array(
			'holidayday' => trim($this->input->post('holidayday')),		
			'holidaydate' =>$holidaydate,
			'holidayname'=>$this->input->post('holidayname'),
			'company_id' =>$this->session->userdata('companyid'),
			'update_date'=>date('Y-m-d')		
			);
			//echo "<pre>";print_r($data);die;	
			//echo $this->input->post('holidayid'); die;
            $this->db->where('holiday_id',$this->input->post('holidayid'));       
            $res=$this->db->update('tblcmpholiday',$data);	
			return $res;
	
	}

}
