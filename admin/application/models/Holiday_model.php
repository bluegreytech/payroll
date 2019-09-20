<?php

class Holiday_model extends CI_Model
 {
	function holidaylist()
	{
		$this->db->select('*');
		$this->db->from('tblcmpholiday');
		$this->db->where('Is_deleted','0');
		$this->db->order_by('holiday_id','Desc');
		$query=$this->db->get();
		$res=$query->result();
		return $res;
	}


	function list_company()
	{
		    $where = array('isdelete' =>'0');
			$this->db->select('*');
			$this->db->from('tblcompany as t1');
			$this->db->where($where);
			$r=$this->db->get();
			$res = $r->result();
			return $res;
	}

	function search($option,$keyword)
	{
		   
		 	$keyword = str_replace('-', ' ', $keyword);
			$this->db->select('t1.*,t2.*');
			$this->db->from('tblcompany as t1');
			$this->db->join('tblcmpholiday as t2', 't1.companyid = t2.companyid', 'LEFT');
			$this->db->where('Is_deleted','0');
			if($option == 'companyname')
			{
				$this->db->like('companyname',$keyword);
			}	
			$query = $this->db->get();	
			if($query->num_rows() > 0)
			{
				return $query->result();
			} 
		
		}

	

    

	
	

}
