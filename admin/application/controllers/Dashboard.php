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

		if(!check_admin_authentication()){ 

			redirect(base_url('Login'));

		}

		

		$data['empData']=$this->Dashboard_model->list_employee();

		$data['adminData']=$this->Dashboard_model->list_admin();

		$data['hrData']=$this->Dashboard_model->list_hr();

		$data['companyData']=$this->Dashboard_model->list_company();

		//echo "<pre>";print_r($data['companyData']);die;

		$this->load->view('dashboard/dashboard',$data);		

    }

	

	

}

