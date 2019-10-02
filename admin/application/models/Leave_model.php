<?php

class Leave_model extends CI_Model
 {
	function leavelist()
	{
		$this->db->select('*');
		$this->db->from('tblcmpleave');
		$this->db->where('Is_deleted','0');
		$this->db->order_by('leave_id','Desc');
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



	function search($keyword)
	{  
			$where=array('t1.companyid'=>$keyword,'t2.Is_deleted'=>'0');
			$this->db->select('t1.*,t2.*');
			$this->db->from('tblcompany as t1');
			$this->db->join('tblcmpleave as t2','t1.companyid = t2.companyid', 'LEFT');
			$this->db->where($where);	
			$query = $this->db->get();	
			if($query->num_rows() > 0)
			{
				return $query->result();
			} 
		
		}

}
