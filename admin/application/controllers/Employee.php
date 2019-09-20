<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Employee extends CI_Controller 
{
	public function __construct() {
        parent::__construct();
		$this->load->model('Employee_model');
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
			$data['employeeData']=$this->Employee_model->search($option,$keyword);
		}	
		else
		{
			$data['employeeData']=$this->Employee_model->emp_list();
		}	
		$data['companyData']=$this->Employee_model->list_company();
		$this->load->view('Employee/employelist',$data);
	}


	public function addemployee()
	{
		if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
		}
		$this->load->view('Employee/employeadd');
	}



	function delete_employee()
	{
		if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
		}
		$emp_id=$this->input->post('emp_id');
		$data=array(
			'Is_deleted'=>'1',
			'Isactive'=>'Inactive'
				);
		$this->db->where("emp_id",$emp_id);
		$result=$this->db->update('tblemp',$data);
		if($result)
		{
			$this->session->set_flashdata('success', 'Record has been deleted!');
			redirect('hr');
		}
		else
		{
			$this->session->set_flashdata('error', 'Record was not delete!');
			redirect('hr');
		}

	}

	

}

