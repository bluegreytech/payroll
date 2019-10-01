<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Attendance extends CI_Controller 
{
	public function __construct() {
        parent::__construct();
		 $this->load->model('employee_model');
	}
	
	public function attendancelist()
	{
		if(!check_admin_authentication()){ 
			redirect(base_url());
		} 
        $data= array();
         $data['emplist']=$this->employee_model->emplist();
		$this->load->view('Attendance/attendancelist',$data);
	}

	public function addattendance()
	{

		if(!check_admin_authentication()){ 
			redirect(base_url());
		}   
			$data=array();
			$data['activeTab']="addattendance";	
			$this->load->library("form_validation");
			$this->form_validation->set_rules('employeeid', 'EmpName', 'required');
		
		    
		
		if($this->form_validation->run() == FALSE){			
			if(validation_errors())
			{
				$data["error"] = validation_errors();
				echo "<pre>";print_r($data["error"]);die;
			}else{
				$data["error"] = "";
			}
           	$data['redirect_page']="attendancelist";
			$data['emp_id']=$this->input->post('emp_id');
			
			$data['option']='';
			$data['keyword']='';	
		}
		else
		{

				if($this->input->post("emp_id")!="")
				{	
					
					$this->employee_model->emp_update();
					$this->session->set_flashdata('success', 'Record has been Updated Succesfully!');
					redirect('employee/emplist');
					
				}
				else
				{ 	
					$this->employee_model->emp_insert();
					$this->session->set_flashdata('success', 'Record has been Inserted Succesfully!');
					redirect('employee/emplist');
				}
		}
	    $data['emplist']=$this->employee_model->emplist();
		
		//echo "<pre>";print_r($data['emplist']);die;
		$this->load->view('Attendance/addattendance',$data);
	}
	
}
