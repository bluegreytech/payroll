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
		$data['hrData']=$this->Dashboard_model->hr_list();
		$data['empdata']=$this->Dashboard_model->list_emp();
		$data['leave']=$this->Dashboard_model->list_leave();
		$data['holiday']=$this->Dashboard_model->list_holiday();
		$data['revenue']=$this->Dashboard_model->getcountrevenue();
		echo "<pre>";print_r($data['revenue']);die;
		$this->load->view('dashboard/dashboard',$data);		
    }
	
	
}
