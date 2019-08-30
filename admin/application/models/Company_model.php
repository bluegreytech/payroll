<?php

class Company_model extends CI_Model
{

	function list_company(){
		$r=$this->db->select('*')
					->from('tblcompany')
					->get();
		$res = $r->result();
		return $res;

	}

	
	function list_companytype(){
		$r=$this->db->select('*')
					->from('tblcompanytype')
					->get();
		$res = $r->result();
		return $res;

	}

	function list_compliance(){
		$r=$this->db->select('*')
					->from('tblcompliances')
					->get();
		$res = $r->result();
		return $res;

	}
	

	function search($option,$keyword)
	{
			$keyword = str_replace('-', ' ', $keyword);
			$this->db->select('*');
			$this->db->from('tblcompany');
	
				if($option == 'companyname')
				{
				// echo $keyword; 
					$this->db->like('companyname',$keyword);
				}
				else if($option == 'comemailaddress')
				{
						$this->db->like('comemailaddress',$keyword);
				}
				else if($option == 'comcontactnumber')
				{
					$this->db->where('comcontactnumber',$keyword);
				} 
			   	$this->db->order_by('companyid','desc');
				// if($type == "result")
				// {
				// 	$this->db->limit($limit,$offset);
				// }
			    $query = $this->db->get();
				// echo $this->db->last_query();
				// echo "<pre>";print_r($query->result());die;
				if($query->num_rows() > 0)
				{
					//    if($type == "count"){
					//  // echo "hello count";
					// 	 return $query->num_rows();
					//  }else{
					// 	return $query->result();
					//  } 
					return $query->result();
				} 
				    
		}

	function add_company()
	{	
		
			$companytypeid=$this->input->post('companytypeid');
			$companyname=$this->input->post('companyname');
			$comemailaddress=$this->input->post('comemailaddress');
			$comcontactnumber=$this->input->post('comcontactnumber');
			$gstnumber=$this->input->post('gstnumber');	
			$companylogo=$this->input->post('companylogo');
			$isactive=$this->input->post('isactive');
			$data=array( 
			'companytypeid'=>$companytypeid,
			'companyname'=>$companyname,
			'comemailaddress'=>$comemailaddress,
			'comcontactnumber'=>$comcontactnumber,
			'gstnumber'=>$gstnumber, 
			//'companylogo'=>$companylogo,
			//'isactive'=>$isactive,
			'createdby'=>1,
			'createdon'=>date("Y-m-d h:i:s")
			);
			// print_r($data);
			// die;
			$res=$this->db->insert('tblcompany',$data);	
			return $res;
	}

	function add_companytype()
	{	
			$companytype=$this->input->post('companytype');
			$isactive=$this->input->post('isactive');
			$comcontactnumber=$this->input->post('comcontactnumber');
			$gstnumber=$this->input->post('gstnumber');	
			$isactive=$this->input->post('isactive');
			$data=array( 
			'companytype'=>$companytype,
			'isactive'=>$isactive,
			'createdby'=>1,
			'createdon'=>date("Y-m-d h:i:s")
			);
			// print_r($data);
			// die;
			$res=$this->db->insert('tblcompanytype',$data);	
			return $res;
	}

	function get_company($companyid)
	{
		$this->db->select('t1.*,t2.*');
		$this->db->from('tblcompany as t1');
		$this->db->join('tblcompanytype as t2', 't1.companytypeid = t2.companytypeid', 'LEFT');
		$this->db->where('t1.companyid',$companyid);
		$query=$this->db->get();
		return $query->row_array();
	}

	// function get_company($companyid)
	// {
	// 	$query=$this->db->select('*')
	// 		->from('tblcompany')
	// 		->where('companyid',$companyid)
	// 		->get();
	// 		return $query->row_array();
	// }

	function get_companytype($companytypeid)
	{
		$query=$this->db->select('*')
			->from('tblcompanytype')
			->where('companytypeid',$companytypeid)
			->get();
			return $query->row_array();
	}

	
	function get_compliance($complianceid)
	{
		$query=$this->db->select('*')
			->from('tblcompliances')
			->where('complianceid',$complianceid)
			->get();
			return $query->row_array();
	}

	function add_compliance()
	{	
			$compliancename=$this->input->post('compliancename');
			$compliancepercentage=$this->input->post('compliancepercentage');
			$isactive=$this->input->post('isactive');
			$data=array( 
			'compliancename'=>$compliancename,
			'compliancepercentage'=>$compliancepercentage,
			'isactive'=>$isactive,
			'createdby'=>1,
			'createdon'=>date("Y-m-d h:i:s")
			);
			// print_r($data);
			// die;
			$res=$this->db->insert('tblcompliances',$data);	
			return $res;
	}

	function update_company()
	{	
		     
		$companyid=$this->input->post('companyid');
		$data=array(
			'companyid'=>$this->input->post('companyid'),
			'companytypeid'=>$this->input->post('companytypeid'),
			'companyname'=>$this->input->post('companyname'),
			'comemailaddress'=>$this->input->post('comemailaddress'),
			'comcontactnumber'=>$this->input->post('comcontactnumber'),
			'gstnumber'=>$this->input->post('gstnumber')
				);
			//print_r($data);die;
			$this->db->where("companyid",$companyid);
			$this->db->update('tblcompany',$data);	
			return 1;	      
	}

	function update_companytype()
	{
		$companytypeid=$this->input->post('companytypeid');
		$data=array(
			'companytypeid'=>$this->input->post('companytypeid'),
			'companytype'=>$this->input->post('companytype'),
			'isactive'=>$this->input->post('isactive')
				);
			//print_r($data);die;
			$this->db->where("companytypeid",$companytypeid);
			$this->db->update('tblcompanytype',$data);	
			return 1;
	}

	function update_compliance()
	{	
		     
		$complianceid=$this->input->post('complianceid');
		$data=array(
			'complianceid'=>$this->input->post('complianceid'),
			'compliancename'=>$this->input->post('compliancename'),
			'compliancepercentage'=>$this->input->post('compliancepercentage'),
			'isactive'=>$this->input->post('isactive')
				);
			//print_r($data);die;
			$this->db->where("complianceid",$complianceid);
			$this->db->update('tblcompliances',$data);	
			return 1;	      
	}


}
