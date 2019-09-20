<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Leave extends CI_Controller 
{
	public function __construct() {
        parent::__construct();
	    $this->load->model('Leave_model');
	}
	
	

	public function leavelist()
	{	
		if(!check_admin_authentication()){ 
			redirect(base_url());
		}      
		if($_POST!='')
		{
			$option=$this->input->post('option');
			$keyword=$this->input->post('keyword2');	
			$data['result'] = $this->Leave_model->search($option,$keyword);
		}	
		else
		{	
			$data['result']=$this->Leave_model->leavelist();
		} 
		$data['companyData'] = $this->Leave_model->list_company();
		//echo "<pre>";print_r($data['result']);die;
		$this->load->view('Leave/leavelist',$data);
      
	}

	

	

	function statusdata(){
		if(!check_admin_authentication())
		{ 
			redirect(base_url());
		}
		$action=$this->input->post('status');
		$id=$this->input->post('id');
		if ($action == "Active") {

			$data = array("status" => "Inactive");
			update_record('tblcmpleave', $data, 'leave_id', $id);

			$res = array('status' => 'done', 'msg' => ACTIVE);
			echo json_encode($res);
			die ;
		}else if ($action == "Inactive") {
			
				$data = array("status" => "Active");
				update_record('tblcmpleave', $data, 'leave_id', $id);
			
			$res = array('status' => 'done', 'msg' => ACTIVE);
			echo json_encode($res);
			die ;
		}
	
	}

	
	
}
