<?php

class Dashboard_model extends CI_Model
 {
		
		
	function hr_list(){
		$this->db->select('*');
		$this->db->from('tblhr');
		$this->db->where('Is_deleted','0');
		$this->db->where('hr_type!=','1');
		$this->db->where('IsActive','Active');
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
		
		$query=$this->db->get();
		$res=$query->result();
		//echo "<pre>";print_r($res);die;
		return $res;
	}
	function getcountrevenue(){
		
           $query =  $this->db->query("SELECT SUM(gross_earning) as earn ,SUM(totaldeduction) as deduction,Month(created_date) as month FROM tblempsetsalary 
		GROUP BY YEAR(created_date),MONTH(created_date)"); 
		$record = $query->result();
		echo $this->db->last_query();
		return $record;
	}
	
}
