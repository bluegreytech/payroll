<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
      	parent::__construct();
		$this->load->model('Login_model');
		//$this->load->model('user_model');
      
    }

	public function dashboard()
	{ 
		if(!check_admin_authentication()){
			//  echo "jkjk";die;
			redirect(base_url());
		}		
	  
		$data['activeTab']="dashboard";

		//echo count($data['result']); die;
		$this->load->view('dashboard/dashboard',$data);
	}

	public function profile($msg='')
    {  //echo "fdsf";die;
            
		if(!check_admin_authentication())
		{
		redirect('login');
		}
                
		$data = array();
		$data['activeTab']="profile";
		//echo "<pre>";print_r($_POST);die;
        $this->load->library('form_validation');
	
		$this->form_validation->set_rules('FullName', 'Full Name', 'required');
		$this->form_validation->set_rules('PhoneNumber', 'PhoneNumber', 'required');
		//$this->form_validation->set_rules('EmailAddress', 'Email', 'required');		
		
		if($this->form_validation->run() == FALSE){	
		
			if(validation_errors())
			{
				$data["error"] = validation_errors();
				echo "<pre>";print_r($data);die;
			}else{
				$data["error"] = "";
			}
			if($_POST){			
				$data["EmailAddress"] = $this->input->post('EmailAddress');
				$data["first_name"]   = $this->input->post('first_name');
				$data["last_name"]    = $this->input->post('last_name');
				$data["phone"]        = $this->input->post('phone');
				$data["gender"]       = $this->input->post('gender');
                //$data['pre_profile_image']=$this->input->post('pre_profile_image');
			
			}else{
			$oneHr=get_one_admin(get_authenticateadminID());
			//print_r($oneHr);die;
			$data["EmailAddress"] 	= $oneHr->EmailAddress;
			$data["full_name"] = $oneHr->FullName;				
			$data["contact"]      = $oneHr->Contact;			
           	$data['ProfileImage']=$oneHr->ProfileImage;
           	$data['IsActive']=$oneHr->IsActive;
           	$data['CreatedOn']=$oneHr->CreatedOn;
           	$data['DateofBirth']=$oneHr->DateofBirth;
           	$data['Address']=$oneHr->Address;
           	$data['Gender']=$oneHr->Gender;
           	$data['PinCode']=$oneHr->PinCode;
           	$data['companyid']=$oneHr->companyid;
          // echo //$data['companyname']=get_company_name($oneHr->companyid); die;
 
			}
		}else{
			//echo "else fdf";die;
            $this->session->set_flashdata('successmsg', 'Profile has been updated successfully');				
			$res=$this->Login_model->updateProfile();
			redirect('home/profile/');
		}
		$data['msg'] = $msg; //login success message
		$offset = 0;
		 $limit =10;

        $this->load->view('common/profile',$data);    
            
    }

	function adminmail_check($email)
	{  //echo $email; die;

		$query = $this->db->query("select EmailAddress from ".$this->db->dbprefix('tblhr')." where EmailAddress = '$email' and hr_id!='".get_authenticateadminID()."'");

		if($query->num_rows() == 0)
		{
		return TRUE;
		}
		else
		{
		$this->form_validation->set_message('adminmail_check', 'There is an existing account associated with this Email');
		return FALSE;
		}
	}
   
    
	
	public function Forgotpassword($msg='')
	{
		$this->form_validation->set_rules('EmailAddress', 'Email', 'required|valid_email');

			if($this->form_validation->run() == FALSE){			
				if(validation_errors())
				{
					echo json_encode(array("status"=>"error","msg"=>validation_errors()));
				}
			}
			else
			{ 
			
				$chk_mail=$this->Login_model->forgot_email();
				echo $chk_mail;die;
				if($chk_mail==0)
				{
					$error=EMAIL_NOT_FOUND;
					 $this->session->set_flashdata('error',EMAIL_NOT_FOUND);
	              
				}
				elseif($chk_mail==2)
				{
				 	$error=EMAIL_NOT_FOUND;
					$this->session->set_flashdata('error',EMAIL_NOT_FOUND);   
				}elseif($chk_mail==3)
				{
					$error=ACCOUNT_INACTIVE;
					 $this->session->set_flashdata('error',ACCOUNT_INACTIVE);
					 
				}
				else
				{				
					$forget=FORGET_SUCCESS;
					
					 $this->session->set_flashdata('success','Please check your email for reset the password!');
					redirect('login');

				}
			}
		$this->load->view('common/forgot_password');
	}


	function reset_password($code='')
	{
       // echo ":L:";die;
		if(check_admin_authentication())
			{
				redirect('home/dashbord');
			}
			
			$hr_id=$this->Login_model->checkResetCode($code);
			//print_r($hr_id);die;

			$data = array();
			$data['errorfail']=($code=='' || $hr_id=='')?'fail':'';
			$data['hr_id']=$hr_id;
			$data['code']=$code;
	        
            if($hr_id){
            	if($_POST){
				
				if($this->input->post('hr_id') != ''){
					$this->form_validation->set_rules('Password', 'Password', 'required');
					$this->form_validation->set_rules('ConfirmPassword', 'Re-type Password', 'required|matches[Password]');
				
					if($this->form_validation->run() == FALSE){			
						if(validation_errors()){
							echo json_encode(array("status"=>"error","msg"=>validation_errors()));
						}
					}else{
						
							$up=$this->Login_model->updatePassword();
						if($up>0){
							$this->session->set_flashdata('success',RESET_SUCCESS); 
							redirect('login');
						}elseif($up=='') {
							echo "gfgfdg";die;
							$error = EXPIRED_RESET_LINK;
					      $this->session->set_flashdata('error',EXPIRED_RESET_LINK); die; 
						}
						else{
							echo "gfgfdg";die;
							$error = PASS_RESET_FAIL;
		                    $this->session->set_flashdata('error',PASS_RESET_FAIL); die; 
						}

					
						
					}
				}else{
					
					$error = EXPIRED_RESET_LINK;
				  
	              $this->session->set_flashdata('error',EXPIRED_RESET_LINK); die; 
				}
				 $this->load->view('common/reset_password',$data);
		    }else{
		    	//echo 'dfdfds';die;
		    	$this->load->view('common/reset_password',$data);
		    }

            }else{

        		  //cho "hii";die;
				$error = EXPIRED_RESET_LINK;
				 $this->session->set_flashdata('error',EXPIRED_RESET_LINK); 
				 redirect('login');
		    }
	}

	//change password
    public function change_password()
    {
        
   		if(!check_admin_authentication()){
			redirect('login');
		}
		
		$data = array();
		$data['activeTab']="change_password";
        $this->load->library('form_validation');	
		$this->form_validation->set_rules('password', 'Password', 'required|matches[cpassword]|min_length[8]');
		$this->form_validation->set_rules('cpassword', 'Password Confirm', 'required|min_length[8]');	
	
		if($this->form_validation->run() == FALSE){			
			if(validation_errors())
			{
				$data["error"] = validation_errors();
			}else{
				$data["error"] = "";
			}
			if($_POST){
				
				$data["password"] = $this->input->post('password');
                $data["cpassword"] = $this->input->post('cpassword');
			}else{
				$data["password"] = '';
                $data["cpassword"] = '';
			}
			
		}else{
			//echo "fghg";die;
            $res=$this->Login_model->updateHrPassword();
			if($res){
         		$this->session->set_flashdata('success', 'Your password change successfully');
				redirect('home/change_password');
			}
		}
	
        $this->load->view('common/ChangePassword',$data);    
	}
	function oldpassword_check() {
		$query = $this->db->query("select Password from " . $this->db->dbprefix('tblhr') . " where Password ='".md5($this->input->post('password'))."' and hr_id='" . $this->session->userdata('hr_id') . "'");
		//aecho $this->db->last_query();die;
		if ($query->num_rows() > 0) {
			echo 1;die;
		} else {
			echo 0;die;
		}
	}
   

   public function company_setting($msg='')
    {  //echo "fdsf";die;
            
		if(!check_admin_authentication())
		{
		redirect('login');
		}
                
		$data = array();
		$data['activeTab']="add_pages";	
        $this->load->library('form_validation');
	
		$this->form_validation->set_rules('PageTitle', 'Page Title', 'required');
		$this->form_validation->set_rules('IsActive', 'IsActive', 'required');		
		
		if($this->form_validation->run() == FALSE){	
		
			if(validation_errors())
			{
				$data["error"] = validation_errors();
				//echo "<pre>";print_r($data);die;
			}else{
				$data["error"] = "";
			}
			if($_POST){			
				$data["PageTitle"] = $this->input->post('PageTitle');
				$data["PageDescription"]   = $this->input->post('PageDescription');
				
              
			
			}else{
			$oneCompany=get_one_record('tblcompany','companyid',$this->session->userdata('companyid'));
			//print_r($oneCompany);die;
			$data["companyid"] 	= $oneCompany->companyid;
			$data["companyname"] 		= $oneCompany->companyname;				
			$data["comemailaddress"]   = $oneCompany->comemailaddress;			
			$data['comcontactnumber']=$oneCompany->comcontactnumber;
			$data['gstnumber']=$oneCompany->gstnumber;
			$data['digitalsignaturedate']=$oneCompany->digitalsignaturedate;
			$data['companytypeid']=$oneCompany->companytypeid;
		    $compliancedetail=get_one_record('tblcompanycompliances','companyid',$this->session->userdata('companyid'));
		   
				$complianceid = explode(',',$compliancedetail->complianceid );
              $com_compliances= array();
				foreach ($complianceid as $row){
					
					$data['companycompliances']=$this->Login_model->getcompliance($row);
				
					$com_compliances[]=$data['companycompliances'];
				}
				$data['com_compliances']=$com_compliances;
				//echo "<pre>";print_r($com_compliances);
				//die;
				}
		}else{
			//echo "else fdf";die;
            $this->session->set_flashdata('successmsg', 'Company has been updated successfully');				
			$res=$this->Login_model->updatePages();
			redirect('home/add_pages/');
		}

        $this->load->view('common/company_setting',$data);    
            
    }
}
