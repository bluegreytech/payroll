<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends CI_Controller 
{
	public function __construct() {
        parent::__construct();
		$this->load->model('salary_model');
		$this->load->model('employee_model');
		$this->load->model('leave_model');
		$this->load->model('company_model');
		$this->load->model('attendance_model');
		   
	}
	function reportsalary(){

	if(!check_admin_authentication()){ 
			redirect(base_url());
		} 
    	
		$data=array();
        $data['empname']='';
		$data['attmonth']='';
		$data['selectdatedata']=getSelectdate($this->session->userdata('companyid'));
    		$salarymonth=$data['selectdatedata']->selecteddate;
		$data['redirect_page']="reportsalary";
		$data['result']=$this->salary_model->empsetsalary_list($salarymonth);
	    $data['tot_earn']=$this->salary_model->emptotearn();
	//$data['tot_deduction']=$this->salary_model->emptotdeduction();
	//$data['tot_netpay']=$this->salary_model->emptotpay();
		//print_r($data['tot_earn']) ; die;
		$this->load->view('report/report_salary_earn',$data);
   }
   function searchearn(){
   	if(!check_admin_authentication()){ 
			redirect(base_url());
		}   
		$data=array();
		$data['activeTab']="searchearn";	
			
		if($this->input->post("search")!=''){
			//echo "<pre>";print_r($_POST);die;
		 	$data['empname']=$this->input->post('empname');
			$data['attmonth']=$this->input->post('attmonth');
			
			$data['result'] = $this->salary_model->search();
			$data['tot_earn']=$this->salary_model->emptotearnsearch();

		}else{
		    $data['empname']='';
			$data['attmonth']='';
          	$data['result']=$this->salary_model->empsetsalary_list();
	    $data['tot_earn']=$this->salary_model->emptotearn();
		}
		 	
		$data['redirect_page']="reportsalary";
		//echo "<pre>";print_r($data);die;
		$this->load->view('report/report_salary_earn',$data);
   }
function reportnetpaysalary(){

	if(!check_admin_authentication()){ 
			redirect(base_url());
		} 
    	
		$data=array();
        $data['empname']='';
		$data['attmonth']='';
		$data['redirect_page']="reportnetpaysalary";
		$data['result']=$this->salary_model->empsetsalary_list();
	    $data['tot_netpay']=$this->salary_model->emptotpay();
	//$data['tot_deduction']=$this->salary_model->emptotdeduction();
	//$data['tot_netpay']=$this->salary_model->emptotpay();
		//print_r( $data['tot_netpay']) ; die;
		$this->load->view('report/report_netpay',$data);
   }
 function searchnetpay(){
   	if(!check_admin_authentication()){ 
			redirect(base_url());
		}   
		$data=array();
		$data['activeTab']="searchnetpay";	
			
		if($this->input->post("search")!=''){
			//echo "<pre>";print_r($_POST);die;
		 	$data['empname']=$this->input->post('empname');
			$data['attmonth']=$this->input->post('attmonth');
			
			$data['result'] = $this->salary_model->search();
			$data['tot_netpay']=$this->salary_model->emptotpaysearch();

		}else{
		    $data['empname']='';
			$data['attmonth']='';
          $data['result']=$this->salary_model->empsetsalary_list();
	    $data['tot_netpay']=$this->salary_model->emptotpay();
		}
		 	
		$data['redirect_page']="reportnetpaysalary";
		//echo "<pre>";print_r($data);die;
		$this->load->view('report/report_netpay',$data);
   }
   function empsalaryreport(){
if(!check_admin_authentication()){ 
			redirect(base_url());
		} 
    	
		$data=array();
        $data['empname']='';
		$data['attmonth']='';
		$data['redirect_page']="empsalaryreport";
		$data['result']=$this->salary_model->empsetsalary_list();
	    $data['tot_earn']=$this->salary_model->emptotearn();
	$data['tot_deduction']=$this->salary_model->emptotdeduction();
	$data['tot_netpay']=$this->salary_model->emptotpay();
		//print_r( $data['tot_netpay']) ; die;
		$this->load->view('report/report_empsalary',$data);
   }
   function searchempsalary(){
   	if(!check_admin_authentication()){ 
			redirect(base_url());
		}   
		$data=array();
		$data['activeTab']="empsalaryreport";	
			
		if($this->input->post("search")!=''){
			//echo "<pre>";print_r($_POST);die;
		 	$data['empname']=$this->input->post('empname');
			$data['attmonth']=$this->input->post('attmonth');
			
			$data['result'] = $this->salary_model->search();
			$data['tot_netpay']=$this->salary_model->emptotpaysearch();
	        $data['tot_earn']=$this->salary_model->emptotearnsearch();
	        $data['tot_deduction']=$this->salary_model->emptotdeductionsearch();
		}else{
		    $data['empname']='';
			$data['attmonth']='';
         $data['result']=$this->salary_model->empsetsalary_list();
	    $data['tot_earn']=$this->salary_model->emptotearn();
	$data['tot_deduction']=$this->salary_model->emptotdeduction();
	$data['tot_netpay']=$this->salary_model->emptotpay();
		}
		 	
		$data['redirect_page']="empsalaryreport";
		//echo "<pre>";print_r($data);die;
		$this->load->view('report/report_empsalary',$data);
   }

}