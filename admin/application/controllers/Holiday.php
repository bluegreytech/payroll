<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Holiday extends CI_Controller 
{
	public function __construct() {
        parent::__construct();
		$this->load->model('Holiday_model');
	}
	
	public function holidaylist()
	{
		
		if(!check_admin_authentication()){ 
			redirect(base_url());
		}   

		if($_POST!='')
		{
			$option=$this->input->post('option');
			$keyword=$this->input->post('keyword2');	
			$data['result'] = $this->Holiday_model->search($option,$keyword);
		}	
		else
		{
			
		    $data['result']=$this->Holiday_model->holidaylist();
		} 
		//echo "<pre>";print_r($data['companyData']);die;
		$data['companyData'] = $this->Holiday_model->list_company();
		$this->load->view('Holiday/holidaylist',$data);
       
	}

	

	

	
	
	
}
