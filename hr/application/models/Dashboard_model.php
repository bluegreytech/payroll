<?php

class Dashboard_model extends CI_Model
 {
		
		
	function hr_list(){
		$this->db->select('*');
		$this->db->from('tblhr');
		$this->db->where('Is_deleted','0');
		$this->db->where('hr_type!=','1');
		$this->db->where('IsActive','Active');
		 $this->db->where('companyid',$this->session->userdata('companyid'));
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
    function list_emp(){
    	$this->db->select('*');
		$this->db->from('tblemp');
		$this->db->where('Is_deleted','0');
		$this->db->where('status','Active');
		 $this->db->where('companyid',$this->session->userdata('companyid'));
		$this->db->order_by('emp_id','Desc');
		$query=$this->db->get();
		$res=$query->result();
		//echo "<pre>";print_r($res);die;
		return $res;
    }
    function list_leave(){
    	$this->db->select('*');
		$this->db->from('tblcmpleave');
		$this->db->where('Is_deleted','0');
		 $this->db->where('companyid',$this->session->userdata('companyid'));
		$this->db->where('status','Active');
		$query=$this->db->get();
		$res=$query->result();
		//echo "<pre>";print_r($res);die;
		return $res;
    }
	function list_holiday(){
		$this->db->select('*');
		$this->db->from('tblcmpholiday');
		$this->db->where('Is_deleted','0');
		 $this->db->where('company_id',$this->session->userdata('companyid'));
		$query=$this->db->get();
		$res=$query->result();
		//echo "<pre>";print_r($res);die;
		return $res;
	}
	function getcountrevenue(){
		$cid=$this->session->userdata('companyid');
           $query =  $this->db->query("SELECT SUM(gross_earning) as earn ,SUM(totaldeduction) as deduction,salary_month  FROM tblempsetsalary  
		 where company_id = $cid GROUP BY salary_month "); 
		$record = $query->result();
		//echo $this->db->last_query();
		return $record;
	}
	function getrecentemployee(){
		$this->db->select('*');
		$this->db->from('tblemp');
		$this->db->order_by('emp_id','DESC');
		$this->db->limit(5);
		$this->db->where('Is_deleted','0');
		$this->db->where('status','Active');
       $this->db->where('companyid',$this->session->userdata('companyid'));
		$query=$this->db->get();
		$res=$query->result();
		//echo "<pre>";print_r($res);die;
		return $res;
	}
	function getrecentleave(){
		$this->db->select('*');
		$this->db->from('tblempleave as el');
		$this->db->join('tblemp as em','em.emp_id=el.emp_id');
		$this->db->where('el.Is_deleted','0');
		$this->db->where('el.company_id',$this->session->userdata('companyid'));
		$this->db->order_by('el.empleave_id','Desc');
		$this->db->limit(5);
		$query=$this->db->get();
		$res=$query->result();
		//echo $this->db->last_query();die;
		return $res;
	}
}
