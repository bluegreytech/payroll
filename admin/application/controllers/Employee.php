<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller 
{

	public function __construct() {
        parent::__construct();
		$this->load->model('Employee_model');
	}



	function index()
	{
		if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
		}
		$data=array();
		$data['option']='';
		$data['keyword1']='';
		$data['keyword2']='';
	
		$data['redirect_page']='Employee';
		$data['employeeData']=$this->Employee_model->emp_list();
		$data['companyData']=$this->Employee_model->list_company();
		$this->load->view('Employee/employelist',$data);
	}


	

	

	public function searchemp()
	{   
		if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
		}
		$data=array();
		$data['activeTab']="searchemp";	
		if($_POST!='')
		{
				$option=$this->input->post('option');
				$keyword1=$this->input->post('keyword1');
				$keyword2=$this->input->post('keyword2');
				if($option!='' && $keyword1!='')
				{
					$data['option']=$this->input->post('option');
					$data['keyword1']=$this->input->post('keyword1');
					$data['keyword2']=$this->input->post('keyword2');
					$option=$data['option'];
					$keyword1=$data['keyword1'];
					$keyword2=$data['keyword2'];
					$data['employeeData']=$this->Employee_model->search($option,$keyword1);
				}
				else if($option!='' && $keyword2!='')
				{
					$data['option']=$this->input->post('option');
					$data['keyword1']=$this->input->post('keyword1');
					$data['keyword2']=$this->input->post('keyword2');
					$option=$data['option'];
					$keyword1=$data['keyword1'];
					$keyword2=$data['keyword2'];
					$data['employeeData']=$this->Employee_model->search_list_name($option,$keyword2);
				}
				else
				{
					$data['option']='';
					$data['keyword1']='';
					$data['keyword2']='';
					$data['employeeData']=$this->Employee_model->emp_list();
				}	
			$data['redirect_page']='Employee';
			$data['companyData']=$this->Employee_model->list_company();
			$this->load->view('Employee/employelist',$data);
		}		
	}




	public function addemployee()
	{
		if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
		}

		$this->load->view('Employee/employeadd');

	}





	public function profile($emp_id)

	{	

		if(!check_admin_authentication()){ 

			redirect(base_url('Login'));

		}

		$data=array();

		$result=$this->Employee_model->get_employeeprofile($emp_id);	

		//echo "<br>";print_r($result);die;

		$data['emp_id']=$result['emp_id'];

		$data['companyid']=$result['companyid'];

		$data['employee_code']=$result['employee_code'];

		$data['department']=$result['department'];

		$data['desgination']=$result['desgination'];

		$data['first_name']=$result['first_name'];

		$data['last_name']=$result['last_name'];

	

		$data['ProfileImage']= $result['ProfileImage'];

		$data['gender']=$result['gender'];

		$data['Father_name']=$result['Father_name'];

		$data['Dateofbirth']=$result['Dateofbirth'];

		$data['Placeofbirth']=$result['Placeofbirth'];

		$data['marital_status']=$result['marital_status'];

		$data['Address']=$result['Address'];

		$data['phone']=$result['phone'];

		$data['email']=$result['email'];

		$data['religion']=$result['religion'];

		$data['nationality']=$result['nationality'];

		$data['status']=$result['status'];

		$data['qualification_emp']=$result['qualification_emp'];

		$data['bloodgroup']=$result['bloodgroup'];

		$data['probation_preriod_day']=$result['probation_preriod_day'];

		$data['physically_challenged']=$result['physically_challenged'];

		$data['joiningdate']=$result['joiningdate'];

		$data['salaryamt']=$result['salaryamt'];

		$data['salary']=$result['salary'];

		$data['aadharcard']=$result['aadharcard'];

		$data['pancard']=$result['pancard'];

		$data['bankdetail']=$result['bankdetail'];

		$data['passport']=$result['passport'];	

		$data['companyData']=$this->Employee_model->list_company();

		$this->load->view('Employee/profile',$data);	

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



