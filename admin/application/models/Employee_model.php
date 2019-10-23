<?php

class Employee_model extends CI_Model

 {



	function emp_list()
	{

		$where = array('t1.Is_deleted'=>'0');
		$this->db->select('t1.*,t2.companyname');
		$this->db->from('tblemp as t1');
		$this->db->join('tblcompany as t2', 't1.companyid = t2.companyid', 'LEFT');
		$this->db->where($where);
		$this->db->order_by('emp_id','desc');
		$r=$this->db->get();
		$res = $r->result();
		return $res;	
	}

	
	function search_list_name($option,$keyword2)
	{
			$where = array('t1.Is_deleted' =>'0');
			$keyword = str_replace('-', ' ', $keyword2);
			$this->db->select('t1.*,t2.companyname');
			$this->db->from('tblemp as t1');
			$this->db->join('tblcompany as t2', 't1.companyid = t2.companyid', 'LEFT');
			$this->db->where($where);
			if($option == 'companyname')
			{
				$this->db->like('companyname',$keyword);
			}
		
			$this->db->order_by('emp_id','desc');

			$query = $this->db->get();
			if($query->num_rows() > 0)
			{
				return $query->result();
			}        

	}

	
	
	function search($option,$keyword1)
	{
			$where = array('t1.Is_deleted' =>'0');
			$keyword = str_replace('-', ' ', $keyword1);
			$this->db->select('t1.*,t2.companyname');
			$this->db->from('tblemp as t1');
			$this->db->join('tblcompany as t2', 't1.companyid = t2.companyid', 'LEFT');
			$this->db->where($where);
			if($option == 'first_name')
			{
				$this->db->like('first_name',$keyword);
			}
			else if($option == 'email')
			{
				$this->db->like('email',$keyword);
			}
			else if($option == 'phone')
			{
				$this->db->like('phone',$keyword);
			}
			else if($option == 'department')
			{
				$this->db->like('department',$keyword);
			} 
			else if($option == 'desgination')
			{
				$this->db->like('desgination',$keyword);
			} 
		
			$this->db->order_by('emp_id','desc');

			$query = $this->db->get();
			if($query->num_rows() > 0)
			{
				return $query->result();
			}        

	}


	






		function list_company()

		{

				$where = array('t1.isdelete' =>'0');

				$this->db->select('t1.*,t2.companytype');

				$this->db->from('tblcompany as t1');

				$this->db->join('tblcompanytype as t2', 't1.companytypeid = t2.companytypeid', 'LEFT');

			//	$this->db->or_where('t1.isdelete','0');

			//	$this->db->where($where);

				$r=$this->db->get();

				$res = $r->result();

				return $res;

		}

	



		

		function get_employeeprofile($emp_id)

	{

		$this->db->select('t1.*');

		$this->db->from('tblemp as t1');

		// $this->db->join('tblcompanytype as t2', 't1.companytypeid = t2.companytypeid', 'LEFT');

		// $this->db->join('tblcompanycompliances as t3', 't1.companyid = '.$companyid, 'LEFT');

		// $this->db->join('tblstate as t4', 't1.stateid = t4.stateid', 'LEFT');

		// $this->db->join('tblcompanynotification as t5', 't1.companyid = t5.companyid', 'LEFT');

		// $this->db->join('tblcomnotdocument as t6', 't5.Companynotificationid = t6.Companynotificationid', 'LEFT');

		$this->db->where('t1.emp_id',$emp_id);

		$query=$this->db->get();

		return $query->row_array();

	}

	







	



 }



