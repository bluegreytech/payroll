<?php
class Notification_model extends CI_Model
 {
	function list_notification()
	{
		if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
		}
		$where = array('t1.isdelete' =>'0');
		$this->db->select('t1.*,t2.*');
		$this->db->from('tblnotificationcompany as t1');
		$this->db->join('tblcompany as t2','t1.companyid = t2.companyid', 'LEFT');
		$this->db->where($where);
		$r=$this->db->get();
		$res = $r->result();
		return $res;	

	}



}

