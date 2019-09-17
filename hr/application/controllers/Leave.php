<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Leave extends CI_Controller 
{
	public function __construct() {
        parent::__construct();
	    $this->load->model('leave_model');
	}
	
	

	public function leavelist()
	{
		//echo "jhjhg";die;
		if(!check_admin_authentication()){ 
			redirect(base_url());
		}   
			$data=array();
			$data['activeTab']="leavelist";	
			$this->load->library("form_validation");
			$this->form_validation->set_rules('leavename', 'leave Name', 'required');
		
			$this->form_validation->set_rules('leavedays', 'leave Days', 'required');
		   
		   
		   
		
		if($this->form_validation->run() == FALSE){			
			if(validation_errors())
			{
				$data["error"] = validation_errors();
				echo "<pre>";print_r($data["error"]);die;
			}else{
				$data["error"] = "";
			}
           	$data['redirect_page']="leavelist";
			$data['leave_id']=$this->input->post('leave_id');
			$data['leavename']=$this->input->post('leavename');
			$data['leavedays']=$this->input->post('leavedays');
			$data['leavestatus']=$this->input->post('leavestatus');
			
			$data['option']='';
			$data['keyword']='';	
			}
			else
			{

				if($this->input->post("leave_id")!="")
				{	
					//echo "dsfdf if";die;
					$this->leave_model->leave_update();
					$this->session->set_flashdata('success', 'Record has been Updated Succesfully!');
					redirect('leave/leavelist');
				}
				else
				{  //echo "jhjhg";die;
					$this->leave_model->leave_insert();
					$this->session->set_flashdata('success', 'Record has been Inserted Succesfully!');
					redirect('leave/leavelist');
				}				
			}
		
		 $data['result']=$this->leave_model->leavelist();
		//echo "<pre>";print_r($data['result']);die;
		$this->load->view('Leave/leavelist',$data);
      
	}

	function deletedata(){
		if(!check_admin_authentication())
		{ 
			redirect(base_url());
		}
		
		$data= array('Is_deleted' =>'1','status'=>'Inactive');
		$id=$this->input->post('id');
		$this->db->where("leave_id",$id);
		$res=$this->db->update('tblcmpleave',$data);
		echo json_encode($res);
		die;
	}

	function editleave()
	{
		//echo $id;die;
		$id=$this->input->post('id');
		$data=array();
		$result=$this->leave_model->getleavedata($id);
		//echo "<pre>";print_r($result);die;
		$data['leave_id']=$result['leave_id'];
		$data['leavedays']=$result['leavedays'];
		$data['leavename']=$result['leave_name'];
		$data['leavestatus']=$result['status'];
		
		echo json_encode($data);
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
