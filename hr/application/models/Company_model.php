<?php
class Company_model extends CI_Model
{
	function companycompliance_insert(){		
	  	$data=array(			

			'companyid'=>$this->session->userdata('companyid'),
			'compliancetypeid'=>$this->input->post('compliancetypeid'),		
			'compliancename'=>$this->input->post('compliancename'),					
			'compliancepercentage'=>trim(str_replace("%","",$this->input->post('percentageofcompliance'))),
			'isactive'=>'0',
		);	
		$this->db->insert('tblcompliances',$data);		
	}

	function compliancelist(){
      $this->db->select('*');
      $this->db->from('tblcompliances');
      $this->db->where('Is_deleted','0');
      $this->db->where('companyid',$this->session->userdata('companyid'));
      $query=$this->db->get();
      $res=$query->result();
      return $res;

	}
	function setsalarymonth_insert(){

	    $salary_month = $this->input->post('salary_month');
		$salarymonth = str_replace('/', '-', $salary_month );
		$salary_month = date("Y-m", strtotime($salarymonth)); 
		$salary_year = date("Y", strtotime($salarymonth)); 
        $data = array(
			'salary_month' =>$salary_month,	
			'salary_year' =>$salary_year,
			'company_id'=>$this->session->userdata('companyid'),	
			'created_date'=>date('Y-m-d')		
		);
		//echo "<pre>";print_r($data);die;
        $res=$this->db->insert('tblsetsalarymonth',$data);	
		return $res;
	}
	function getsetsalarymonth(){
	//	echo $this->session->userdata('companyid');
		$this->db->select('*');
		$this->db->from('tblsetsalarymonth');
		$this->db->where('company_id',$this->session->userdata('companyid'));
		$this->db->order_by('setsalarymonth_id','DESC');
	 //	$this->db->limit('1', '0');
		$query=$this->db->get();
		$res=$query->row_array();
		return $res;
      
	}
	function compliancelist_deduction(){
      $this->db->select('*');
      $this->db->from('tblcompliances');
      $this->db->where('Is_deleted','0');
      $this->db->where('compliancetypeid','1');
      $this->db->where('companyid',$this->session->userdata('companyid'));
      $query=$this->db->get();
      $res=$query->result();
      return $res;

	}
}
