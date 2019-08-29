<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller 
{
	public function __construct() {
        parent::__construct();
		$this->load->model('Company_model');
	}
	

	public function index()
	{   
		if($_POST!='')
		{
			$option=$this->input->post('option');
			$keyword=$this->input->post('keyword2');	
			$data['companyData'] = $this->Company_model->search($option,$keyword);
			// echo "<pre>";print_r($data['adminmasterData']);die;
		}	
		else
		{
			$data['companyData']=$this->Company_model->list_company();
		}    
		//print_r($data['companyData']);die;
		$this->load->view('Company/companylist',$data);			
	}


	function companyadd()
	{
		$data=array();
			$data['companyid']=$this->input->post('companyid');
			$data['companyname']=$this->input->post('companyname');
			$data['comemailaddress']=$this->input->post('comemailaddress');
			$data['comcontactnumber']=$this->input->post('comcontactnumber');
			$data['gstnumber']=$this->input->post('gstnumber');
			$data['isactive']=$this->input->post('isactive');
			if($_POST){
				
				if($this->input->post('companyid')==''){
							
					$result=$this->Company_model->add_company();	
					if($result)
					{
						$this->session->set_flashdata('success', 'Record has been Inserted Succesfully!');
						redirect('Company');
					}
				}
				else
				{
					$result=$this->Company_model->update_company();
					if($result)
					{
						$this->session->set_flashdata('success', 'Record has been Updated Succesfully!');
						redirect('Company');
					} 

				}
		} 
		
		///$data['companyData']=$this->Company_model->list_company();
		//print_r($data['companyData']);die;
		$this->load->view('Company/companyadd',$data);	
	}

	function delete_company(){
			$companyid=$this->input->post('companyid');
			$this->db->where("companyid",$companyid);
			$result=$this->db->delete('tblcompany');
			if($result)
			{
				$this->session->set_flashdata('success', 'Company was delete successfully!');
				redirect('Company');
			}
			else
			{
				$this->session->set_flashdata('error', 'Company was not delete!');
				redirect('Company');
			}
	
	}


	function editcompany($companyid)
	{
		$data=array();
		$result=$this->Company_model->get_company($companyid);	
		//echo "<br>";print_r($result);die;
		$data['companyid']=$result['companyid'];
		$data['companyname']=$result['companyname'];
		$data['comemailaddress']=$result['comemailaddress'];
		$data['comcontactnumber']=$result['comcontactnumber'];
		$data['gstnumber']=$result['gstnumber'];
		//echo json_encode($data);
		$this->load->view('Company/companyadd',$data);	
	}

	

	function companytype()
	{	
		$data=array();
			$data['companytypeid']=$this->input->post('companytypeid');
			$data['companytype']=$this->input->post('companytype');
			$data['isactive']=$this->input->post('isactive');
			if($_POST){
				
				if($this->input->post('companytypeid')==''){
							
					$result=$this->Company_model->add_companytype();	
					if($result)
					{
						$this->session->set_flashdata('success', 'Record has been Inserted Succesfully!');
						redirect('Company/companytype');
					}
				}
				else
				{
					$result=$this->Company_model->update_companytype();
					if($result)
					{
						$this->session->set_flashdata('success', 'Record has been Updated Succesfully!');
						redirect('Company/companytype');
					} 

				}
		} 
		$data['companytypeData']=$this->Company_model->list_companytype();
		$this->load->view('Company/companytypelist',$data);	
	}


	public function compliance()
	{
		$data['complianceData']=$this->Company_model->list_compliance();
		$this->load->view('compliance/compliance',$data);	
	}

	function delete_compliance(){
		$complianceid=$this->input->post('complianceid');
		$this->db->where("complianceid",$complianceid);
		$result=$this->db->delete('tblcompliances');
		if($result)
		{
			$this->session->set_flashdata('success', 'Compliance was delete successfully!');
			redirect('compliance');
		}
		else
		{
			$this->session->set_flashdata('error', 'Compliance was not delete!');
			redirect('compliance');
		}

	}

	function delete_companytype(){
		$companytypeid=$this->input->post('companytypeid');
		$this->db->where("companytypeid",$companytypeid);
		$result=$this->db->delete('tblcompanytype');
		if($result)
		{
			$this->session->set_flashdata('success', 'Company type was delete successfully!');
			redirect('Company/companytype');
		}
		else
		{
			$this->session->set_flashdata('error', 'Company type was not delete!');
			redirect('Company/companytype');
		}

	}

	function editcompanytype($companytypeid)
	{
		$data=array();
		$result=$this->Company_model->get_companytype($companytypeid);	
		//echo "<br>";print_r($result);die;
		$data['companytypeid']=$result['companytypeid'];
		$data['companytype']=$result['companytype'];
		$data['isactive']=$result['isactive'];
		//echo json_encode($data);
		$this->load->view('Company/companytypelist',$data);		
	}

	
	
}
