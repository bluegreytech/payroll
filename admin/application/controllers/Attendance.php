<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Attendance extends CI_Controller 

{

	// public function __construct() {

    //     parent::__construct();

	// 	// $this->load->model('Adminmaster_model');

	// }
public function __construct() {
        parent::__construct();
	 $this->load->model('attendance_model');
	}
	

	public function index()

	{
      if(!check_admin_authentication()){ 
			redirect(base_url());
		} 
        $data= array();
        $data['companyname']='';
		$data['attmonth']='';
		$data['redirect_page']="index";
        $data['result']=$this->attendance_model->attendancelist();
		$this->load->view('Attendance/attendance',$data);

	}
    public function searchattendance(){
    if(!check_admin_authentication()){ 
			redirect(base_url());
		}   
		$data=array();
		$data['activeTab']="searchattendance";	
			
		if($this->input->post("search")!=''){
			//echo "<pre>";print_r($_POST);die;
		 	$data['companyname']=$this->input->post('companyname');
			
			
			$data['result'] = $this->attendance_model->searchcompany();
		}else{
		     $data= array();
        $data['companyname']='';
		$data['attmonth']='';
          	 $data['result']=$this->attendance_model->attendancelist();
		}
		 	
		$data['redirect_page']="index";
		//echo "<pre>";print_r($data);die;
		$this->load->view('Attendance/attendance',$data);	
    }
	public function attandance_list($id){

if(!check_admin_authentication()){ 
			redirect(base_url());
		} 
		

        $data= array();
        $data['sid']=$id;
        $data['companyname']='';
        $data['empname']='';
		$data['attmonth']='';
		$data['redirect_page']="index";
        $data['result']=$this->attendance_model->attendancelistbycompanyid($id);
		$this->load->view('Attendance/attendance_list',$data);


	}
	public function searchattendancelist($id){
		if(!check_admin_authentication()){ 
			redirect(base_url());
		}   
		$data=array();
		 $data['sid']=$id;
		$data['activeTab']="searchattendance";	
			
		if($this->input->post("search")!=''){
			//echo "<pre>";print_r($_POST);die;
		 	
			
			$data['empname']=$this->input->post('empname');
			$data['attmonth']=$this->input->post('attmonth');
			$data['result'] = $this->attendance_model->searchemployee();
			print_r($data['result'] );

		}else{
		     $data= array();
       $data['empname']='';
		$data['attmonth']='';
          	 $data['result']=$this->attendance_model->attendancelistbycompanyid();
		}
		 	
		$data['redirect_page']="attandance_list/".$id;
		//echo "<pre>";print_r($data);die;
		$this->load->view('Attendance/attendance_list',$data);	
	}

}

