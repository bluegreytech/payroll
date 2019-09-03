<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Rights extends CI_Controller 
{ 
	public function __construct() {
        parent::__construct();
		$this->load->model('Rights_model');
	}
	
	function index()
	{	
		$data['rightsData']=$this->Rights_model->list_rights();
		echo "<pre>";print_r($data['rightsData']);die;
		$this->load->view('rights/rightslist',$data);
	}


	

	
	

}

