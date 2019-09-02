<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Hr extends CI_Controller 
{ 
	public function __construct() {
        parent::__construct();
		$this->load->model('Hr_model');
		$this->load->model('Company_model');
	}
	
	function index()
	{	
		if($_POST!='')
		{
			$option=$this->input->post('option');
			$keyword=$this->input->post('keyword2');	
			$data['hrData'] = $this->Hr_model->search($option,$keyword);
			// echo "<pre>";print_r($data['adminmasterData']);die;
		}	
		else
		{
			$data['hrData']=$this->Hr_model->hr_list();
		}
		//echo "<pre>";print_r($data['hrData']);die;
		$data['companyData']=$this->Company_model->list_company();
		$this->load->view('hr/hrlist',$data);
	}


	public function addhr()
	{	
		 if($_POST){
			
			if($this->input->post('UserId')!='')
			{	
				$result=$this->Hr_model->updatehr();	
				if($result==1)
				{
					$this->session->set_flashdata('success', 'Record has been Updated Succesfully!');
					redirect('Hr');
				}
				else
				{
					$this->session->set_flashdata('success', 'Record was not Updated!');
					redirect('Hr');
				}
			}
			else
			{	
				
				$result=$this->Hr_model->insertdata();
				if($result==1)
				{
					$this->session->set_flashdata('success', 'Record has been Inserted Succesfully!');
					redirect('Hr');
				}
				else if($result==2)
				{
					$this->session->set_flashdata('error', 'Record was not Inserted!');
					redirect('Hr');
				}	
				else if($result==3)
				{
					$this->session->set_flashdata('warning', 'This email address already registered!');
					redirect('Hr');
				}	
			}
		}
	}

	function deletehr(){
		$UserId=$this->input->post('UserId');
		$this->db->where("UserId",$UserId);
		$result=$this->db->delete('tbluser');
		if($result)
		{
			$this->session->set_flashdata('success', 'Hr was delete suucessfully!');
			redirect('adminmaster/adminlist');
		}
		else
		{
			$this->session->set_flashdata('error', 'Hr was not deleted!');
			redirect('adminmaster/adminlist');
		}
	}

	function edithr()
	{
		$data=array();
		$result=$this->Hr_model->getdata($this->input->post('id'));	
		//echo "<br>";print_r($result);die;
		$data['UserId']=$result['UserId'];
		$data['FirstName']=$result['FirstName'];	
		$data['LastName']=$result['LastName'];	
		$data['EmailAddress']=$result['EmailAddress'];
		$data['DateofBirth']=$result['DateofBirth'];
		$data['PhoneNumber']=$result['PhoneNumber'];
		$data['Gender']=$result['Gender'];
		$data['Address']=$result['Address'];
		$data['PinCode']=$result['PinCode'];
		$data['City']=$result['City'];
		$data['IsActive']=$result['IsActive'];
		echo json_encode($data);
	}


	public function admin_master_profile($UserId)
	{
		$data=array();
		$result=$this->Hr_model->getdata($UserId);
		//echo "<pre>";print_r($result);die;
		$data['UserId']=$result['UserId'];
		$data['FirstName']=$result['FirstName'];
		$data['LastName']=$result['LastName'];	
		$data['EmailAddress']=$result['EmailAddress'];
		$data['DateofBirth']= $result['DateofBirth'];	
		$data['PhoneNumber']= $result['PhoneNumber'];	 
		$data['Address']= $result['Address'];
		$data['PinCode']= $result['PinCode'];	 
		$data['Gender']= $result['Gender'];
		$data['ProfileImage']= $result['ProfileImage'];
		$this->load->view('dashboard/profile',$data);
	}
	
	public function admin_master_profile_update()     
	{      	
				$data=array();
				$data['UserId']=$this->input->post('UserId');
				$data['FirstName']=$this->input->post('FirstName');
				$data['LastName']=$this->input->post('LastName');
			//	$data['EmailAddress']=$this->input->post('EmailAddress');
				$data['DateofBirth']=$this->input->post('DateofBirth');
				$data['PhoneNumber']=$this->input->post('PhoneNumber');
				$data['Gender']=$this->input->post('Gender');
				//$data['ProfileImage']=$this->input->post('ProfileImage');
				$data['Address']=$this->input->post('Address');
				$data['PinCode']=$this->input->post('PinCode');
				if($_POST){
					if($this->input->post('UserId')!=''){
						$result=$this->Hr_model->updatedata();
						if($result)
						{   
							$UserId =$data['UserId']; 
							$session= array(
								'FirstName'=> $data['FirstName'],
								'LastName'=> $data['LastName'],
							);
							$this->session->set_userdata($session); 
							$this->session->set_flashdata('success', 'Record has been Updated Succesfully!');
							redirect('Adminmaster/admin_master_profile/'.$UserId);
						}
					}
				
				}
				$this->load->view('Adminmaster/admin_master_profile',$data);			

	}


	public function change_password($UserId)
	{	
		$data=array();
		$data['UserId']=$this->input->post('UserId');
		if($_POST){
			$UserId=$this->input->post('UserId');
			if($this->input->post('UserId')!='')
			{
				$result=$this->Hr_model->changepass($UserId);
				if($result==1)
				{   
					 $this->session->set_flashdata('success', 'Your password has been Updated Succesfully!');
					 redirect('Adminmaster/change_password/'.$UserId);
				}
				else
				{ 
					$result=$this->Hr_model->changepass($UserId);
					if($result==2)
					{
						$UserId=$data['UserId']; 
						$this->session->set_flashdata('error','Your old password was not match please try again!');  
						redirect('Adminmaster/change_password/'.$UserId);
					}
				}
			}
		
		}
			$this->load->view('common/changepassword');
	}

	

}

