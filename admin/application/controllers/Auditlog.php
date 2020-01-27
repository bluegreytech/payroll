<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auditlog extends CI_Controller 
{ 
	public function __construct() 
	{
        parent::__construct();
		$this->load->model('Auditlog_model');
	}


	// public function index()
	// {	
	// 	if(!check_admin_authentication()){ 
	// 		redirect(base_url());
	// 	}      
	// 	$data['auditlogData']=$this->Auditlog_model->list_auditlog();
	// 	$this->load->view('auditlog/auditloglist',$data);
	// }


	public function index()
	{
		if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
		}
		if($_POST!='')
		{	
			$option=$this->input->post('option');
			$keyword1=$this->input->post('keyword1');
			$keyword2=$this->input->post('keyword2');
			$keyword3=$this->input->post('keyword3');
			if($option!='' && $keyword1!='')
			{	$option=$this->input->post('option');
				$data['auditlogData'] = $this->Auditlog_model->search($option,$keyword1);
			}
			else if($option!='' && $keyword2!='' && $keyword3!='')
			{	$option=$this->input->post('option');
				$data['auditlogData'] = $this->Auditlog_model->searchbydate($option,$keyword2,$keyword3);
			}	
			else
			{
				$data['auditlogData']=$this->Auditlog_model->list_auditlog();
			}
			//echo "<pre>";	print_r($data['auditlogData']);die;
			$this->load->view('auditlog/auditloglist',$data);

	}

}

}







