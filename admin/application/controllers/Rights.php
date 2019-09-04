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
		//echo "<pre>";print_r($data['rightsData']);die;
		$this->load->view('rights/rightslist',$data);
	}

	// function rightsadd()
	// {	
	// 	$data['rightsData']=$this->Rights_model->list_rights();
	// 	//echo "<pre>";print_r($data['rightsData']);die;
	// 	$this->load->view('rights/rightsadd',$data);
	// }

	function rightsadd($UserId='')
	{
		$UserId=$this->Rights_model->checkid($UserId);
		//print_r($UserId);die;
		$data=array();
		$data['UserId']=$UserId;
		$data['rightsData']=$this->Rights_model->getdata($UserId);	
		//$data['rightsData']=$this->Rights_model->list_rights();
		echo "<pre>";print_r($data['rightsData']);die;
		$this->load->view('rights/rightsadd',$data);
	}

	

	public function addrit()
	{	
		 if($_POST)
		 {
				$this->input->post('UserId');
				$result=$this->Rights_model->insertdata($this->input->post('UserId'));
				if($result)
				{
					$this->session->set_flashdata('success', 'Record has been Inserted Succesfully!');
					redirect('adminmaster/adminlist');
				}
			
			
		}
	}



	

}

