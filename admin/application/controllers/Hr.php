<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Hr extends CI_Controller 
{ 
	public function __construct() {
        parent::__construct();
		$this->load->model('Hr_model');
	}
	public function dashboard()
	{
		$this->load->view('hr/dashboard');
	}
	
	function index()
	{	
		if($_POST!='')
		{
			$option=$this->input->post('option');
			$keyword=$this->input->post('keyword2');	
			$data['hrData'] = $this->Hr_model->search($option,$keyword);
			// echo "<pre>";print_r($data['adminmasterData']);die;
		}	
		else
		{
			$data['hrData']=$this->Hr_model->hr_list();
		}
		$data['companyData']=$this->Hr_model->list_company();
		//echo "<pre>";print_r($data['companyData']);die;
		$this->load->view('hr/hrlist',$data);
	}


	public function addhr()
	{	
		 if($_POST){
			
			if($this->input->post('UserId')!='')
			{	
				$result=$this->Hr_model->updatehr();	
				if($result==1)
				{
					$this->session->set_flashdata('success', 'Record has been Updated Succesfully!');
					redirect('Hr');
				}
				else
				{
					$this->session->set_flashdata('success', 'Record was not Updated!');
					redirect('Hr');
				}
			}
			else
			{	
				
				$result=$this->Hr_model->insertdata();
				if($result==1)
				{
					$this->session->set_flashdata('success', 'Record has been Inserted Succesfully!');
					redirect('Hr');
				}
				else if($result==2)
				{
					$this->session->set_flashdata('error', 'Record was not Inserted!');
					redirect('Hr');
				}	
				else if($result==3)
				{
					$this->session->set_flashdata('warning', 'This email address already registered!');
					redirect('Hr');
				}	
			}
		}
	}

	function deletehr(){
		$UserId=$this->input->post('UserId');
		$this->db->where("UserId",$UserId);
		$result=$this->db->delete('tbluser');
		if($result)
		{
			$this->session->set_flashdata('success', 'Hr was delete suucessfully!');
			redirect('adminmaster/adminlist');
		}
		else
		{
			$this->session->set_flashdata('error', 'Hr was not deleted!');
			redirect('adminmaster/adminlist');
		}
	}

	function edithr()
	{
		$data=array();
		$result=$this->Hr_model->getdata($this->input->post('UserId'));	
		//echo "<br>";print_r($result);die;
		$data['UserId']=$result['UserId'];
		$data['FirstName']=$result['FirstName'];	
		$data['LastName']=$result['LastName'];	
		$data['EmailAddress']=$result['EmailAddress'];
		$data['DateofBirth']=$result['DateofBirth'];
		$data['PhoneNumber']=$result['PhoneNumber'];
		$data['Gender']=$result['Gender'];
		$data['Address']=$result['Address'];
		$data['PinCode']=$result['PinCode'];
		$data['City']=$result['City'];
		$data['IsActive']=$result['IsActive'];
		$data['hrid']=$result['hrid'];
		$data['companyid']=$result['companyid'];
		$data['companyname']=$result['companyname'];
		$data['companyData']=$this->Hr_model->list_company();
		echo json_encode($data);
	}



	


	
	

}

