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
			//echo "<pre>";print_r($data['hrData']);die;
		}	
		else
		{
			$data['employeeData']=$this->Employee_model->emp_list();
		}	
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
		$employeeid=$this->input->post('employeeid');
		$data=array(
			'isdelete'=>1,
			'isactive'=>0
				);
		$this->db->where("employeeid",$employeeid);
		$result=$this->db->update('tblemployee',$data);
		if($result)
		{
			$this->session->set_flashdata('success', 'Employee was delete suucessfully!');
			redirect('hr');
		}
		else
		{
			$this->session->set_flashdata('error', 'Employee was not deleted!');
			redirect('hr');
		}
	}
	
}
