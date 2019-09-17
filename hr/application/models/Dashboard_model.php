<?php

class Dashboard_model extends CI_Model
 {
		
		
	function hr_list(){
		$this->db->select('*');
		$this->db->from('tblhr');
		$this->db->where('Is_deleted','0');
		$this->db->where('hr_type!=','1');
		$this->db->order_by('hr_id','Desc');
		$query=$this->db->get();
		$res=$query->result();
		//echo "<pre>";print_r($res);die;
		return $res;
	}


	function list_company()
	{
		$this->db->select('*');
		$this->db->from('tblcompany');
		$r = $this->db->get();
		return $query= $r->num_rows();
	}

	
}
