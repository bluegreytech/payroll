<?php
class Employee_model extends CI_Model
 {

	function emp_list()
	{
		if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
		}
		$where = array('t1.Is_deleted' =>'0');
		$this->db->select('t1.*,t2.companyname');
		$this->db->from('tblemp as t1');
		$this->db->join('tblcompany as t2', 't1.companyid = t2.companyid', 'LEFT');
		$this->db->where($where);
		$r=$this->db->get();
		$res = $r->result();
		return $res;	

	}


	function search($option,$keyword)
	{
		if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
		}
			//$where = array('t1.Is_deleted' =>'0');
			$keyword = str_replace('-', ' ', $keyword);
			$this->db->select('t1.*,t2.companyname');
			$this->db->from('tblemp as t1');
			$this->db->join('tblcompany as t2', 't1.companyid = t2.companyid', 'LEFT');
			//$this->db->where($where);
			if($option == 'first_name')
			{
				$this->db->like('first_name',$keyword);
			}
			else if($option == 'companyname')
			{
				$this->db->like('companyname',$keyword);
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
			// 	$this->db->order_by('UserId','desc');
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
	

		

	



	

 }

