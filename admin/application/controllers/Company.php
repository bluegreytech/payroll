<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller 
{
	public function __construct() {
        parent::__construct();
		$this->load->model('Company_model');
	}

	public function checkcode($code='')
	{	
		$result=$this->Company_model->checkResetCode($code);
		if($result==1)
		{
			$this->session->set_flashdata('success', 'Your company verification has been Successfully!');
			//redirect('Company');
		}
		elseif($result==2)
		{
			//$this->session->set_flashdata('error', 'Your company verification link has been expired!');
			echo "link expired";
		}
	
	
	}

	public function company_licence()
	{	
		$result=$this->Company_model->list_licence_company();
		//echo "<pre>";print_r($result);die;
		if($result)
		{
			echo "success";
		}
		else
		{
			echo "fail";
		}
	
	
	}

	public function index()
	{   

		if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
		}
		if($_POST!='')
		{

			$option=$this->input->post('option');
			$keyword=$this->input->post('keyword2');	
			$data['companyData'] = $this->Company_model->search($option,$keyword);
		}	
		else
		{
			echo "jkjh";die;
			$data['companyData']=$this->Company_model->list_company();
		} 
		$this->load->view('Company/companylist',$data);			
	}


	function companyadd()
	{
		if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
		}
		$data=array();
			$data['companyid']=$this->input->post('companyid');
			$data['companytypeid']=$this->input->post('companytypeid');
			$data['companyname']=$this->input->post('companyname');
			$data['comemailaddress']=$this->input->post('comemailaddress');
			$data['comcontactnumber']=$this->input->post('comcontactnumber');
			$data['gstnumber']=$this->input->post('gstnumber');
			$data['digitalsignaturedate']=$this->input->post('digitalsignaturedate');
			$data['companyaddress']=$this->input->post('companyaddress');
			$data['stateid']=$this->input->post('stateid');
			$data['companycity']=$this->input->post('companycity');	
			$data['pincode']=$this->input->post('pincode');		
			$data['isactive']=$this->input->post('isactive');
			$data['companycomplianceid']=$this->input->post('companycomplianceid');
			if($_POST){
				
				if($this->input->post('companyid')==''){
							
					$result=$this->Company_model->add_company();	
					if($result==1)
					{
						$this->session->set_flashdata('success', 'Your data has been Inserted Successfully!');
						redirect('Company');
					}
					else if($result==2)
					{
						$this->session->set_flashdata('warning', 'Your data has been Inserted Successfully and Your email function was not work!');
						redirect('Company');
					}
					else if($result==3)
					{
						//$this->session->set_flashdata('error', 'Your data was not Insert!');
						$this->session->set_flashdata('warning', 'This email address already registered!');
						redirect('Company');
					}
				}
				else
				{
					$result=$this->Company_model->update_company();
					if($result==1)
					{
						$this->session->set_flashdata('success', 'Record has been Updated Successfully!');
						redirect('Company');
					}
					else if($result==2)
					{
						$this->session->set_flashdata('warning', 'Your data has been Inserted Successfully and Your email function was not work!');
						redirect('Company');
					}
					else if($result==3)
					{
						$this->session->set_flashdata('error', 'Your data was not Insert!');
						redirect('Company');
					}

				}
		} 
		$data['stateData']=$this->Company_model->list_state();
		$data['complianceData']=$this->Company_model->list_complianceto();
		$data['companytypeData']=$this->Company_model->list_companyto();
		//print_r($data['stateData']);die;
		$this->load->view('Company/companyadd',$data);	
	}

	function delete_company(){
		if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
		}
			$companyid=$this->input->post('companyid');
			$data=array(
				'isdelete'=>1,
				'isactive'=>0
					);
			$this->db->where("companyid",$companyid);
			$result=$this->db->update('tblcompany',$data);
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
		if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
		}
		$data=array();
		
		$result=$this->Company_model->get_company($companyid);	
		//echo "<br>";print_r($result);die;
		$data['companyid']=$result['companyid'];
		$data['companytypeid']=$result['companytypeid'];
		$data['companytype']=$result['companytype'];
		$data['companyname']=$result['companyname'];
		$data['comemailaddress']=$result['comemailaddress'];
		$data['comcontactnumber']=$result['comcontactnumber'];
		$data['gstnumber']=$result['gstnumber'];
		$data['digitalsignaturedate']=$result['digitalsignaturedate'];
		$data['companyaddress']=$result['companyaddress'];
		$data['stateid']=$result['stateid'];
		$data['statename']=$result['statename'];
		$data['companycity']=$result['companycity'];
		$data['pincode']=$result['pincode'];
		$data['isactive']=$result['isactive'];
		$data['companycomplianceid']=$result['companycomplianceid'];
		$data['complianceid']=$result['complianceid'];
		$data['stateData']=$this->Company_model->list_state();
		$data['complianceData']=$this->Company_model->list_compliance();
		//echo "<pre>";print_r($data['complianceData']);die;
		$data['companytypeData']=$this->Company_model->list_companytype();
		$this->load->view('Company/companyadd',$data);	
	}

	

	function companytype()
	{	
		if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
		}
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
		if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
		}
		$data=array();
			$data['complianceid']=$this->input->post('complianceid');
			$data['compliancename']=$this->input->post('compliancename');
			$data['compliancepercentage']=$this->input->post('compliancepercentage');	
			$data['isactive']=$this->input->post('isactive');
			if($_POST){
				if($this->input->post('complianceid')==''){
							
					$result=$this->Company_model->add_compliance();	
					if($result)
					{
						$this->session->set_flashdata('success', 'Record has been Inserted Succesfully!');
						redirect('Company/compliance');
					}
				}
				else
				{
					$result=$this->Company_model->update_compliance();
					if($result)
					{
						$this->session->set_flashdata('success', 'Record has been Updated Succesfully!');
						redirect('Company/compliance');
					} 

				}
		} 
		$data['complianceData']=$this->Company_model->list_compliance();
		$this->load->view('compliance/compliance',$data);	
	}

	function delete_compliance(){
		if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
		}
		$complianceid=$this->input->post('complianceid');
		$data=array(
			'IsDelete'=>1,
			'IsActive'=>0
				);
		$this->db->where("complianceid",$complianceid);
		$result=$this->db->update('tblcompliances',$data);
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
		if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
		}
		$companytypeid=$this->input->post('companytypeid');
		$data=array(
			'isdelete'=>1,
			'isactive'=>0
				);
		$this->db->where("companytypeid",$companytypeid);
		$result=$this->db->update('tblcompanytype',$data);
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

	function editcompanytype()
	{
		if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
		}
		$data=array();
		$result=$this->Company_model->get_companytype($this->input->post('companytypeid'));	
		//echo "<br>";print_r($result);die;
		$data['companytypeid']=$result['companytypeid'];
		$data['companytype']=$result['companytype'];
		$data['isactive']=$result['isactive'];
		echo json_encode($data);
	    //$this->load->view('Company/companytypelist',$data);		
	}

	function editcompliance()
	{
		if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
		}
		$data=array();
		$result=$this->Company_model->get_compliance($this->input->post('complianceid'));	
		//echo "<br>";print_r($result);die;
		$data['complianceid']=$result['complianceid'];
		$data['compliancename']=$result['compliancename'];
		$data['compliancepercentage']=$result['compliancepercentage'];
		$data['isactive']=$result['isactive'];
		echo json_encode($data);
		//$this->load->view('Company/companytypelist',$data);		
	}

	
	
}
