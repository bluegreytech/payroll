<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Leave extends CI_Controller 
{
	public function __construct() {
        parent::__construct();
	    $this->load->model('leave_model');
	    $this->load->model('attendance_model');
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
		//echo "<pre>";print_r($data);die;
		echo json_encode($data);
	}

	function leave_status(){
		//echo "hjhgj";die;
		if(!check_admin_authentication())
		{ 
			redirect(base_url());
		}
		$action=$this->input->post('status');
			$id=$this->input->post('id'); 
		if($action == "Active") {

			$data = array("status" => "Inactive");
			update_record('tblcmpleave', $data, 'leave_id', $id);

			$res = array('status' => 'done');
			echo json_encode($res);
			die ;
		}else if($action == "Inactive") {
			
				$data = array("status" => "Active");
				update_record('tblcmpleave', $data, 'leave_id', $id);
			
			$res = array('status' => 'done');
			echo json_encode($res);
			die ;
		}
	}

	function statusdata(){
		if(!check_admin_authentication())
		{ 
			redirect(base_url());
		}
		$action=$this->input->post('status');
	    $changestatus=$this->input->post('changestatus');
		$id=$this->input->post('id'); 

			$data = array("leavestatus" => $changestatus);
			update_record('tblempleave', $data, 'empleave_id', $id);			
		    $res = array('status' => 'done');
			echo json_encode($res);
			die ;
		// if($action == "Active") {

		// 	$data = array("status" => "Inactive");
		// 	update_record('tblcmpleave', $data, 'leave_id', $id);

		// 	$res = array('status' => 'done', 'msg' => ACTIVE);
		// 	echo json_encode($res);
		// 	die ;
		// }else if($action == "Inactive") {
			
		// 		$data = array("status" => "Active");
		// 		update_record('tblcmpleave', $data, 'leave_id', $id);
			
		// 	$res = array('status' => 'done', 'msg' => ACTIVE);
		// 	echo json_encode($res);
		// 	die ;
		// }
	
	}

	function empleavelist(){
		//echo "jhjhg";die;
		if(!check_admin_authentication()){ 
			redirect(base_url());
		}   
		$data=array();
		$data['activeTab']="leavelist";	
		$data['empname']=$this->input->post('empname');
		$data['fromdate']=$this->input->post('fromdate');
		$data['todate']=$this->input->post('todate');
		$data['leave_type']=$this->input->post('leave_type');
		$data['leave_status']=$this->input->post('leave_status');
			
		$data['result']=$this->leave_model->empleavelist();
	    $data['leavelist']=$this->leave_model->showempleavelist();	
		$this->load->view('Employee/leaves_employee',$data);
	}

	function addempleave(){
		//echo "jhjhg";die;
		if(!check_admin_authentication()){ 
			redirect(base_url());
		}   
			$data=array();
			$data['activeTab']="empleavelist";	
			$this->load->library("form_validation");
			$this->form_validation->set_rules('typeofleave', 'Type of leave ', 'required');		
			$this->form_validation->set_rules('noofdays', 'leave Days', 'required');
		   
		   
		if($this->form_validation->run() == FALSE){			
			if(validation_errors())
			{
				$data["error"] = validation_errors();
				echo "<pre>";print_r($data["error"]);die;
			}else{
				$data["error"] = "";
			}
           	$data['redirect_page']="empleavelist";
			$data['empleave_id']=$this->input->post('empleave_id');	
			$data['emp_id']=$this->input->post('emp_id');				
			$data['typeofleave']=$this->input->post('typeofleave');
			$data['leavetimein']=$this->input->post('leavetimein');
			$data['leavetimeout']=$this->input->post('leavetimeout');
			$data['leavefrom']=$this->input->post('leavefrom');
			$data['leavedays']=$this->input->post('leavedays');			
			$data['leaveto']=$this->input->post('leaveto');
			$data['noofdays']=$this->input->post('noofdays');
			$data['remainingleave']=$this->input->post('remainingleave');
			$data['leavereason']=$this->input->post('leavereason');
			$data['leaveslot']=$this->input->post('leavetime');			
			$data['option']='';
			$data['keyword']='';	
			}
			else
			{

				if($this->input->post("empleave_id")!="")
				{	
					//echo "dsfdf if";die;
					$this->leave_model->empleave_update();
					$this->session->set_flashdata('success', 'Record has been Updated Succesfully!');
					redirect('leave/empleavelist');
				}
				else
				{   //echo "jh jhg";die;
					$this->leave_model->empleave_insert();
					$this->session->set_flashdata('success', 'Record has been Inserted Succesfully!');
					redirect('leave/empleavelist');
				}				
			}
		
		 $data['leavelist']=$this->leave_model->showempleavelist();
		 $data['emplist']=$this->attendance_model->emplist();
		$this->load->view('Employee/add_empleave',$data);
	}
    
    function edit_empleave($empleave_id){
		if(!check_admin_authentication()){ 
			redirect(base_url());
		}else{
			$data=array();
			$data['activeTab']="editempleave";	
			$result=$this->leave_model->getempleavedata($empleave_id);	
			//echo "<pre>";print_r($result);die;
			$data['emp_id']=$result['emp_id'];
			$data['leavedays']=$result['leavedays'];			
			$data['empleave_id']=$result['empleave_id'];
			$data['typeofleave']=$result['typeofleave'];
			$data['leavefrom']=$result['leavefrom'];
			$data['leaveto']=$result['leaveto'];
			$data['leavetimein']=$result['leavetimein'];
			$data['leavetimeout']=$result['leavetimeout'];
			$data['noofdays']=$result['noofdays'];
			$data['leavereason']=$result['leavereason'];
			$data['leavestatus']=$result['leavestatus'];
			$data['leaveslot']=$result['leaveslot'];
			
			//$data['firstlast']=$result['first_name'].' '.$result['last_name'];
			$data['leaveto']=$result['leaveto'];
			$data['redirect_page']="empleavelist";		
		//echo "<pre>";print_r($data);die;
		}
		$data['leavelist']=$this->leave_model->showempleavelist();
		
		$data['emplist']=$this->attendance_model->emplist();
		$this->load->view('Employee/add_empleave',$data);
	}
	function searchempleave(){
		//echo "jhjhg";die;
		if(!check_admin_authentication()){ 
			redirect(base_url());
		}   
		$data=array();
		$data['activeTab']="searchempleave";	
			
		if($this->input->post("search")!=''){
			//echo "<pre>";print_r($_POST);die;
		 	$data['empname']=$this->input->post('empname');
			$data['fromdate']=$this->input->post('fromdate');
			$data['todate']=$this->input->post('todate');
			$data['leave_type']=$this->input->post('leave_type');
			$data['leave_status']=$this->input->post('leave_status');			
			$data['result'] =$this->leave_model->searchempleave();
		}else{
		    $data['empname']='';
			$data['fromdate']='';
			$data['todate']='';	
			$data['leave_type']='';
			$data['leave_status']='';			
          	$data['result']=$this->leave_model->empleavelist();
		}
		$data['leavelist']=$this->leave_model->showempleavelist();	
		$data['redirect_page']="leavelist";
		//echo "<pre>";print_r($data['leavelist']);die;
		$this->load->view('Employee/leaves_employee',$data);

	}
	function delete_empleave(){
		if(!check_admin_authentication())
		{ 
			redirect(base_url());
		}
		
		$data= array('Is_deleted' =>'1');
		$id=$this->input->post('id');
		$this->db->where("empleave_id",$id);
		$res=$this->db->update('tblempleave',$data);
		echo json_encode($res);
		die;
	}

}
