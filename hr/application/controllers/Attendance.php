<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Attendance extends CI_Controller 
{
	public function __construct() {
        parent::__construct();
		$this->load->model('attendance_model');
		$this->hrRights=getRights();
	
		if(count($this->hrRights)==0 && !checkSuperHr())
		{
			$this->session->set_flashdata('msg', 'no_rights');
			//redirect('home/dashboard/noRights');
		}
	}
	
	public function attendancelist()
	{
		if(!check_admin_authentication()){ 
			redirect(base_url());
		} 
        $data= array();
        $data['empname']='';
		$data['attmonth']='';
		$data['redirect_page']="attendancelist";
       	$data['selectdatedata']=getSelectdate($this->session->userdata('companyid'));
        $salarymonth=$data['selectdatedata']->selecteddate;
        $data['salarymonth']=$data['selectdatedata']->selecteddate;  
	    $data['result']=$this->attendance_model->attendancelist($salarymonth); 
        $data['selectdatedata']= getSelectdate($this->session->userdata('companyid'));  
        if((isset($this->hrRights['Attendance']) && $this->hrRights['Attendance']->rights_view==1) || checkSuperHr()){
          	    $this->load->view('Attendance/attendancelist',$data);				
			}else{
               	$this->load->view('common/noRights',$data);
		}  
	
	}

	public function addattendance()
	{

		if(!check_admin_authentication()){ 
			redirect(base_url());
		}   
			$data=array();
			$data['activeTab']="addattendance";	
			$this->load->library("form_validation");
			$this->form_validation->set_rules('attendancemonth', 'attendancemonth', 'required');
		
		  		
		if($this->form_validation->run() == FALSE){			
			if(validation_errors())
			{
				$data["error"] = validation_errors();
				echo "<pre>";print_r($data["error"]);die;
			}else{
				$data["error"] = "";
			}
           	$data['redirect_page']="attendancelist";
			$data['attendance_id']=$this->input->post('attendance_id');
			
			$data['option']='';
			$data['keyword']='';	
		}
		else
		{
			if($this->input->post("attendance_id")!="")
			{
				//echo "fgff";die;
				$this->attendance_model->attendance_update();
				$this->session->set_flashdata('success', 'Record has been Updated Succesfully!');
				redirect('Attendance/attendancelist');
			}
			else
			{ 	
				$this->attendance_model->attendance_insert();
				$this->session->set_flashdata('success', 'Record has been Inserted Succesfully!');
				redirect('Attendance/attendancelist');
			}
		}
	    $data['emplist']=$this->attendance_model->emplist();
	    $data['selectdatedata']= getSelectdate($this->session->userdata('companyid'));
		$this->load->view('Attendance/addattendance',$data);
	}
	

	function editattendance()
	{
		//echo $id;die;
		$id=$this->input->post('id');
		$data=array();
		$result=$this->attendance_model->getattendancedata($id);
		$leavedata=$this->attendance_model->getempleavedata($result['emp_id'],$result['attendance_date']);
		if($leavedata){
			$leavetypedata=get_one_record('tblcmpleave','leave_id',$leavedata->typeofleave);
			$data['typeofleave']=$leavetypedata->leave_name;
		}
		
		//echo "<pre>";print_r($leavetypedata->leave_name);die;
		$data['attendance_id']=$result['attendance_id'];
		$data['company_id']=$result['company_id'];			
		$data['emp_id']=$result['emp_id'];
		$data['attendance_status']=$result['attendance_status'];
		$data['attendance_month']=$result['attendance_month'];
		$data['attendance_date']=$result['attendance_date'];
		$data['time_in']=$result['time_in'];
		$data['time_out']=$result['time_out'];
		


		
		echo json_encode($data);
	}

	public	function searchattendance(){
		if(!check_admin_authentication()){ 
			redirect(base_url());
		}   
		$data=array();
		$data['activeTab']="searchattendance";	
			
		if($this->input->post("search")!=''){
			//echo "<pre>";print_r($_POST);die;
		 	$data['empname']=$this->input->post('empname');
			$data['attmonth']=$this->input->post('attmonth');
			
			$data['result'] = $this->attendance_model->search();
		}else{
		    $data['empname']='';
			$data['attmonth']='';
			$data['selectdatedata']=getSelectdate($this->session->userdata('companyid'));
	        $salarymonth=$data['selectdatedata']->selecteddate;
	        $data['salarymonth']=$data['selectdatedata']->selecteddate;  
		    $data['result']=$this->attendance_model->attendancelist($salarymonth);           	
          	$data['selectdatedata']= getSelectdate($this->session->userdata('companyid'));
		}
		 	
		$data['redirect_page']="attendancelist";
		//echo "<pre>";print_r($data);die;
		$this->load->view('Attendance/attendancelist',$data);
	}

}
