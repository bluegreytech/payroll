<?php
class Dashboard_model extends CI_Model
 {

		
	// function hr_list(){
	// 	$this->db->select('UserId,RoleId,CONCAT(FirstName ,LastName) AS FirstName,EmailAddress,DateofBirth,PhoneNumber,ProfileImage,Gender,Address,PinCode,CountryId,StateId,City,IsActive');
	// 	$this->db->from('tbluser');
	// 	$this->db->where('RoleId',3);
	// 	$r=$this->db->get();
	// 	$res = $r->result();
	// 	return $res;
	// }

	


	function list_employee()
	{
		$this->db->select('*');
		$this->db->from('tblemp');
		$this->db->where('Is_deleted!=','1');
		$r = $this->db->get();
		return $query= $r->num_rows();
	}



	function list_admin()
	{
		$this->db->select('*');
		$this->db->from('tbladmin');
		$this->db->where('IsDelete',0);
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
		$this->db->where('Is_deleted','0');
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


	function list_companyinvoice()
	{
		$this->db->select('t1.*,t2.*,t3.*');
		$this->db->from('tblcompanyinvoice as t1');
		$this->db->join('tblcompany as t2', 't1.companyid = t2.companyid', 'LEFT');
		$this->db->join('tblhr as t3', 't1.hr_id = t3.hr_id', 'LEFT');
		$this->db->where('t1.isdelete','0');
		$this->db->order_by('t1.Companyinvoiceid','DESC');
		$this->db->limit(5);
		$query=$this->db->get();
		$res=$query->result();
		return $res;
	}

	
	function list_companyinvoicetotal()
	{
		$this->db->select('t1.*,t2.*,t3.*');
		$this->db->from('tblcompanyinvoice as t1');
		$this->db->join('tblcompany as t2', 't1.companyid = t2.companyid', 'LEFT');
		$this->db->join('tblhr as t3', 't1.hr_id = t3.hr_id', 'LEFT');
		$this->db->where('t1.isdelete','0');
		$r = $this->db->get();
		return $query= $r->num_rows();
	}


	function list_quotation()
	{
		$this->db->select('t1.*,t2.*');
		$this->db->from('tblquotation as t1');
		$this->db->join('tblcompanytype as t2', 't1.companytypeid = t2.companytypeid', 'LEFT');
		$this->db->where('t1.isdelete','0');
		$this->db->order_by('t1.quotationid','desc');
		$this->db->limit(5);
		$r=$this->db->get();
		$res = $r->result();
		return $res;

	}

	
	function list_companyqutationtotal()
	{
		$this->db->select('t1.*,t2.*');
		$this->db->from('tblquotation as t1');
		$this->db->join('tblcompanytype as t2', 't1.companytypeid = t2.companytypeid', 'LEFT');
		$this->db->where('t1.isdelete','0');
		$r = $this->db->get();
		return $query= $r->num_rows();

	}




}

