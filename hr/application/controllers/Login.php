<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
      	parent::__construct();
		$this->load->model('Login_model'); 
    }
	function index()
    {
			if($this->input->post('logins'))
			{  
					$EmailAddress = $this->input->post('EmailAddress');
					$Password = md5($this->input->post('Password'));
					$IsActive = 1;
					$where = array(
					"EmailAddress"=>$EmailAddress,
					"Password"=>$Password,
					"IsActive"=>$IsActive
					);
					$log = $this->Login_model->login_where('tbluser',$where);   
					      
					$cnt = count($log);
					if($cnt>0)
					{
						$session= array(
								'UserId'=> $log->UserId,
								'FirstName'=> $log->FirstName,
								'LastName'=> $log->LastName,
								'RoleId'=> $log->RoleId,
								'EmailAddress'=> $log->EmailAddress,
								'ProfileImage'=>$log->ProfileImage,		
							);
							
						$this->session->set_userdata($session);
						$this->session->set_flashdata('success','User Login successfully!');
						redirect('Dashboard');
					}
					else
					{
						$this->session->set_userdata($session);
						$this->session->set_flashdata('error', 'Invalid Username or Password!');
						redirect('Login');	
					} 
				}
				$this->load->view('common/login');
			
    }
	
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Login');
	}


	function resetpassword($ResetPasswordCode='')
	{
			$UserId=$this->Login_model->checkResetCode($ResetPasswordCode);
			$data = array();
			$data['UserId']=$UserId;
			$data['ResetPasswordCode']=$ResetPasswordCode;
			
			if($UserId!='')
			{	
				if($_POST)
				{
					if($this->input->post('UserId')!='')
					{
							$up=$this->Login_model->updatePassword($UserId);
							if($up==1)
							{
								$this->session->set_flashdata('success','Your password change successfully!'); 
								redirect('Login');
							}
							elseif($up==2)
							{
								$this->session->set_flashdata('error','Your link was expired'); 
							}
					}
					else
					{
						$this->session->set_flashdata('success','User login successfully'); 
					}
					
				}
				else
				{
					//$this->load->view('common/reset_password',$data);
		    	}

			}
			$this->load->view('common/reset_password',$data);
	}



	



	public function forgotpassword()
	{
		//echo $_POST['EmailAddress'];die;
			// $this->form_validation->set_rules('EmailAddress', 'Email', 'required|valid_email');
			// if($this->form_validation->run() == FALSE)
			// {			
			// 	if(validation_errors())
			// 	{ 
			// 		echo json_encode(array("status"=>"error","msg"=>validation_errors()));
			// 	}
			// }
			// else
			// { 
		if($_POST)
		{
				$chk_mail=$this->Login_model->forgotpass_check();
				if($chk_mail==1)
				{	
					$this->session->set_flashdata('error','Your email address was not register!');  
				}
				else if($chk_mail==2)
				{
					$this->session->set_flashdata('error','Your email address not activated!');	 
				}
				else if($chk_mail==3)
				{
					$this->session->set_flashdata('success','Please check your email address!');
				}
				else if($chk_mail==4)
				{
					$this->session->set_flashdata('error','Email function is not working!');  
				}
				// else
				// {				
				// 	$this->session->set_flashdata('success','Please check your email for reset the password!');
				// 	redirect('Login');
				// }
		//	}
			
			}
			$this->load->view('common/forgot_password');
	}


	
	
}
