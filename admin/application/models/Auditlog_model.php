<?php
class Auditlog_model extends CI_Model
 {


	function list_auditlog()
	{
		$this->db->select('audlog.*,admin.*');
		$this->db->from('tblactivitylog as audlog');
		$this->db->join('tbladmin as admin', 'audlog.AdminId = admin.AdminId', 'LEFT');
		$this->db->order_by('ActivityLogId','desc');
		$r=$this->db->get();
		$res = $r->result();
		return $res;

	}


	function search($option,$keyword1)
	{
			$keyword = str_replace('-', ' ', $keyword1);
			$this->db->select('audlog.*,admin.*');
			$this->db->from('tblactivitylog as audlog');
			$this->db->join('tbladmin as admin', 'audlog.AdminId = admin.AdminId', 'LEFT');
			$this->db->order_by('ActivityLogId','desc');
			if($option == 'FirstName')
			{
				$this->db->like('CONCAT(FirstName," ",LastName)',$keyword);
			}
			else if($option == 'Module')
			{
				$this->db->like('Module',$keyword);
			}
			else if($option == 'Activity')
			{
				$this->db->like('Activity',$keyword);
			}
			$this->db->order_by('audlog.ActivityLogId','desc');
			$query = $this->db->get();
			if($query->num_rows() > 0)
			{
				return $query->result();
			}        

	}


	function searchbydate($option,$keyword2,$keyword3)
	{
		$keywordinvone = str_replace('/', '-', $keyword2);
		$keywordinvtwo = str_replace('/', '-', $keyword3);
		$this->db->select('audlog.*,admin.*');
		$this->db->from('tblactivitylog as audlog');
		$this->db->join('tbladmin as admin', 'audlog.AdminId = admin.AdminId', 'LEFT');	
		$this->db->where('audlog.CreatedOn BETWEEN "'. date('Y-m-d', strtotime($keywordinvone)). '" and "'. date('Y-m-d', strtotime($keywordinvtwo)).'"');	
		$this->db->order_by('audlog.ActivityLogId','desc');
		$query = $this->db->get();
		if($query->num_rows() > 0)
		{
			return $query->result();
		}        

	}












}



