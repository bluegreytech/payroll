<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Adminmaster extends CI_Controller 
{ 
	public function __construct() {
        parent::__construct();
		$this->load->model('Adminmaster_model');
	}
	
	function adminlist()
	{	
		if($_POST!='')
		{
			$option=$this->input->post('option');
			$keyword=$this->input->post('keyword2');	
			$data['adminmasterData'] = $this->Adminmaster_model->search($option,$keyword);
			// echo "<pre>";print_r($data['adminmasterData']);die;
		}	
		else
		{
			$data['adminmasterData']=$this->Adminmaster_model->getuser();
		}
		
		$this->load->view('dashboard/adminlist',$data);
	}




	public function addadmin()
	{	
		 if($_POST){
			
			if($this->input->post('UserId')!='')
			{	
				$result=$this->Adminmaster_model->updateadmin();	
				if($result==1)
				{
					$this->session->set_flashdata('success', 'Record has been Updated Succesfully!');
					redirect('adminmaster/adminlist');
				}
				else
				{
					$this->session->set_flashdata('success', 'Record was not Updated!');
					redirect('adminmaster/adminlist');
				}
			}
			else
			{	
				
				$result=$this->Adminmaster_model->insertdata();
				if($result==1)
				{
					$this->session->set_flashdata('success', 'Record has been Inserted Succesfully!');
					redirect('adminmaster/adminlist');
				}
				else if($result==2)
				{
					$this->session->set_flashdata('error', 'Record was not Inserted!');
					redirect('adminmaster/adminlist');
				}	
				else if($result==3)
				{
					$this->session->set_flashdata('warning', 'This email address already registered!');
					redirect('adminmaster/adminlist');
				}	
			}
		}
	}

	function deleteadmin(){
		$UserId=$this->input->post('UserId');
		$this->db->where("UserId",$UserId);
		$result=$this->db->delete('tbluser');
		if($result)
		{
			$this->session->set_flashdata('success', 'Admin was delete suucessfully!');
			redirect('adminmaster/adminlist');
		}
		else
		{
			$this->session->set_flashdata('error', 'Admin was not deleted!');
			redirect('adminmaster/adminlist');
		}
	}

	function editadminmaster()
	{
		$data=array();
		$result=$this->Adminmaster_model->getdata($this->input->post('id'));	
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
		$result=$this->Adminmaster_model->getdata($UserId);
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
						$result=$this->Adminmaster_model->updatedata();
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
				$result=$this->Adminmaster_model->changepass($UserId);
				if($result==1)
				{   
					 $this->session->set_flashdata('success', 'Your password has been Updated Succesfully!');
					 redirect('Adminmaster/change_password/'.$UserId);
				}
				else
				{ 
					$result=$this->Adminmaster_model->changepass($UserId);
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

