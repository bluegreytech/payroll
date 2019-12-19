<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
      	parent::__construct();
		$this->load->model('Dashboard_model');
    }
	function index()
    {
    	$data= array();
		$data['hrData']=$this->Dashboard_model->hr_list();

		$data['companyData']=$this->Dashboard_model->list_company();
		$data['selectdatedata']= getSelectdate($this->session->userdata('companyid'));
		

		$data['empdata']=$this->Dashboard_model->list_emp();
		$data['leave']=$this->Dashboard_model->list_leave();
		$data['holiday']=$this->Dashboard_model->list_holiday();
		$data['revenue']=$this->Dashboard_model->getcountrevenue();
		$data['employee']=$this->Dashboard_model->getrecentemployee();
		$data['result']=$this->Dashboard_model->getrecentleave();
		//echo "<pre>";print_r($data['leave']);die;
		$this->load->view('dashboard/dashboard',$data);		
    }
	function selecteddate(){
    
      $result= get_one_record('tblselectdate','companyid',$this->session->userdata('companyid'));    
       $data=array(
       	'selecteddate'=>date("Y-m",strtotime($this->input->post('selecteddate'))),
       	'companyid'=>$this->session->userdata('companyid'),
       	'created_date'=>date('Y-m-d'),
       );
     
       if($result->companyid){
            $res=update_record('tblselectdate',$data,'selectdate_id',$result->selectdate_id); 
            return 0; 
       }else{
       	  
      		  $res=insert_record('tblselectdate',$data);
            return 1;
       }
     
	}
	
}
