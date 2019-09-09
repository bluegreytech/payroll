<?php

class Dashboard_model extends CI_Model
 {
		
		
	function hr_list(){
		$this->db->select('UserId,RoleId,CONCAT(FirstName ,LastName) AS FirstName,EmailAddress,DateofBirth,PhoneNumber,ProfileImage,Gender,Address,PinCode,CountryId,StateId,City,IsActive');
		$this->db->from('tbluser');
		$this->db->where('RoleId',3);
		$r=$this->db->get();
		$res = $r->result();
		return $res;

	}
	
	

	function list_employee()
	{
		$this->db->select('*');
		$this->db->from('tblemployee');
		$this->db->where('isdelete!=','1');
		$r = $this->db->get();
		return $query= $r->num_rows();
	}

	function list_admin()
	{
		$this->db->select('*');
		$this->db->from('tbladmin');
		$this->db->where('IsDelete!=',1);
		$r = $this->db->get();
		return $query= $r->num_rows();
	}

	function list_company()
	{
		$this->db->select('*');
		$this->db->from('tblcompany');
		$this->db->where('isdelete!=','1');
		$r = $this->db->get();
		return $query= $r->num_rows();
	}

	function list_hr()
	{
		$this->db->select('*');
		$this->db->from('tblhr');
		$this->db->where('Is_deleted!=','1');
		$r = $this->db->get();
		return $query= $r->num_rows();
	}

	function getdata($UserId){
			$this->db->select('t1.*,t2.*,t3.*');
			$this->db->from('tbluser as t1');
			$this->db->join('tblhr as t2', 't1.UserId = t2.UserId', 'LEFT');
			$this->db->join('tblcompany as t3', 't2.companyid = t2.companyid', 'LEFT');
			$this->db->where('t1.UserId',32);
			$query = $this->db->get();
			return $query->row_array();
	}

	


}
