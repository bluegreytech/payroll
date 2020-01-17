<?php

class Loan_model extends CI_Model
 {
 	function getemployee(){
 		$this->db->select('*');
		$this->db->from('tblemp');
		$this->db->where('Is_deleted','0');
		$this->db->where('companyid',$this->session->userdata('companyid'));
		//$this->db->like('CONCAT(first_name," ",last_name)',$emp_nm);
		$this->db->order_by('emp_id','Desc');
		$query=$this->db->get();
		//echo $this->db->last_query();

		$res=$query->result();
		return $res;
 	}

 	function getloandet($emp_id){
      $this->db->select('*');
		$this->db->from('tblloan');
		$this->db->where('loan_completed','No');
		$this->db->where('company_id',$this->session->userdata('companyid'));
		$this->db->where('emp_id',$emp_id);
		$this->db->where('Is_deleted','0');
		//$this->db->like('CONCAT(first_name," ",last_name)',$emp_nm);
		$this->db->order_by('loan_id','Desc');
		$query=$this->db->get();
		//echo $this->db->last_query();

		$res=$query->result();
		return $res;
 	}
 	function insert_loan($data){
 		if(!empty($data)){
 			$this->db->insert('tblloan',$data);
 		}

 	}
 	function update_loan($data,$id){
 		$this->db->where('loan_id',$id);
 		$this->db->update('tblloan',$data);
 	}
 	function getloan(){
 		 $this->db->select('*');
		$this->db->from('tblloan as l');
		$this->db->join('tblemp as em','em.emp_id=l.emp_id');
		$this->db->where('l.loan_amnt!=','0');
		$this->db->where('l.company_id',$this->session->userdata('companyid'));
		
		$this->db->where('l.Is_deleted','0');
		//$this->db->like('CONCAT(first_name," ",last_name)',$emp_nm);
		$this->db->order_by('l.loan_id','Desc');
		$query=$this->db->get();
		//echo $this->db->last_query();

		$res=$query->result();
		return $res;
 	}
 }