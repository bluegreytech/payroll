<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Holiday extends CI_Controller 
{
	public function __construct() {
        parent::__construct();
		$this->load->model('holiday_model');
	}
	
	public function holidaylist()
	{
		//echo "jhjhg";die;
		if(!check_admin_authentication()){ 
			redirect(base_url());
		}   
			$data=array();
			$data['activeTab']="holidaylist";	
			$this->load->library("form_validation");
			$this->form_validation->set_rules('holidayname', 'Holiday Name', 'required');
			$this->form_validation->set_rules('holidaydate', 'Holiday Date', 'required');
			$this->form_validation->set_rules('holidayday', 'Holiday Day', 'required');
		   
		   
		   
		
		if($this->form_validation->run() == FALSE){			
			if(validation_errors())
			{
				$data["error"] = validation_errors();
				echo "<pre>";print_r($data["error"]);die;
			}else{
				$data["error"] = "";
			}
           	$data['redirect_page']="userlist";
			$data['holiday_id']=$this->input->post('holiday_id');
			$data['holidayname']=$this->input->post('holidayname');
			$data['holidaydate']=$this->input->post('holidaydate');
			
			$data['option']='';
			$data['keyword']='';	
			}
			else
			{

				if($this->input->post("holidayid")!="")
				{	
					//echo "dsfdf if";die;
					$this->holiday_model->holiday_update();
					$this->session->set_flashdata('success', 'Record has been Updated Succesfully!');
					redirect('holiday/holidaylist');
				}
				else
				{  
					$this->holiday_model->holiday_insert();
					$this->session->set_flashdata('success', 'Record has been Inserted Succesfully!');
					redirect('holiday/holidaylist');
				}				
			}
		
		 $data['result']=$this->holiday_model->holidaylist();
		//echo "<pre>";print_r($data['result']);die;
		$this->load->view('Holiday/holidaylist',$data);
       
	}

	function deletedata(){
		if(!check_admin_authentication())
		{ 
			redirect(base_url());
		}
		
		$data= array('Is_deleted' =>'1');
		$id=$this->input->post('id');
		$this->db->where("holiday_id",$id);
		$res=$this->db->update('tblcmpholiday',$data);
		echo json_encode($res);
		die;
	}

	function editholiday()
	{
		//echo $id;die;
		$id=$this->input->post('id');
		$data=array();
		$result=$this->holiday_model->getholidaydata($id);
		
		$data['holiday_id']=$result['holiday_id'];
		$data['holidaydate']=$result['holidaydate'];			
		$data['holidayday']=$result['holidayday'];
		$data['holidayname']=$result['holidayname'];
		
		echo json_encode($data);
	}

	
	
	
}
