<?php



defined('BASEPATH') OR exit('No direct script access allowed');



class Adminmaster extends CI_Controller 
{ 
	public function __construct() {
        parent::__construct();
		$this->load->model('Adminmaster_model');
	}


	function site_setting()
	{
		if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
		}

		$data=array();
		$result=$this->Adminmaster_model->getdatasite($this->session->userdata('AdminId'));
		//$result=get_one_record('tblsitesetting',$this->session->userdata('AdminId'));
		$data['SettingId']=$result['SettingId'];
		$data["Adminname"] 	= $result['Adminname'];
		$data["Emailaddress"] 		= $result['Emailaddress'];
		$data["Mobilenumber"] 		= $result['Mobilenumber'];				
		$data["Officeaddress"]   = $result['Officeaddress'];			
		$data['Gstnumber']=$result['Gstnumber'];
		$data["Accountnumber"] 	= $result['Accountnumber'];
		$data["Branch"] 		= $result['Branch'];				
		$data["Bankname"]   = $result['Bankname'];			
		$data['Ifsccode']=$result['Ifsccode'];
		if($_POST){	
				$result=$this->Adminmaster_model->update_bank_detail($this->session->userdata('AdminId'));
				if($result==1)
				{
					$this->session->set_flashdata('success', 'Bank detail has been Updated Successfully!');
					redirect('Adminmaster/site_setting');
				}
				else if($result==2)
				{
					$this->session->set_flashdata('error', 'Your data was not Update!');
					redirect('Adminmaster/site_setting');
				}
			

	} 

		$this->load->view('common/site_setting',$data);    
	}
	


	function adminlist()
	{
		if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
		}
		$data=array();
		$data['option']='';
		$data['keyword2']='';
		$data['redirect_page']='adminlist';
		$data['adminmasterData']=$this->Adminmaster_model->getuser();
		$this->load->view('dashboard/adminlist',$data);
	}


	function searchadmin(){
		if(!check_admin_authentication()){ 
			redirect(base_url());
		}   
		$data=array();
		$data['activeTab']="searchadmin";	
		if($this->input->post("search")!='')
		{
		 	$data['option']=$this->input->post('option');
		 	$data['keyword2']=$this->input->post('keyword2');	
		 	$option=$data['option'];
          	$keyword2=$data['keyword2'];
			
			$data['adminmasterData'] = $this->Adminmaster_model->search($option,$keyword2);
		}else{
		 	$data['option']='';
          	$data['keyword2']='';
          	$data['adminmasterData']=$this->Adminmaster_model->getuser();
		}
		 	
		$data['redirect_page']="adminlist";
		//echo "<pre>";print_r($data['result']);die;
		$this->load->view('dashboard/adminlist',$data);
	}


	public function addadmin()
	{	
		if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
		}

		 if($_POST){

			if($this->input->post('AdminId')!='')

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

					$this->session->set_flashdata('error', 'Record has been inserted and email is not working!');

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
		if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
		}

		$AdminIdlogin=$this->session->userdata('AdminId');
		$AdminId=$this->input->post('AdminId');
		$data=array(
			'IsDelete'=>1,
			'IsActive'=>0
				);
		$this->db->where("AdminId",$AdminId);
		$result=$this->db->update('tbladmin',$data);
		if($result)
		{
			$log_data = array(
				'AdminId' => $AdminIdlogin,
				'Module' => 'Admin',
				'Activity' =>'Delete'

			);
			$log = $this->db->insert('tblactivitylog',$log_data);
			$this->session->set_flashdata('success', 'Admin was delete successfully!');
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

		if(!check_admin_authentication()){ 

		redirect(base_url('Login'));

		}

		$data=array();

		$result=$this->Adminmaster_model->getdata($this->input->post('id'));	

		$data['AdminId']=$result['AdminId'];

		$data['RoleId']=$result['RoleId'];

		$data['FirstName']=$result['FirstName'];	

		$data['LastName']=$result['LastName'];	

		$data['EmailAddress']=$result['EmailAddress'];

		$data['DateofBirth']=$result['DateofBirth'];

		$data['PhoneNumber']=$result['PhoneNumber'];

		$data['ProfileImage']= $result['ProfileImage'];

		$data['Gender']=$result['Gender'];

		$data['Address']=$result['Address'];

		$data['PinCode']=$result['PinCode'];

		$data['City']=$result['City'];

		$data['IsActive']=$result['IsActive'];

		echo json_encode($data);



	}











	public function admin_master_profile()
	{
		if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
		}



		$data=array();
		$id=$this->session->userdata('AdminId');
		$result=$this->Adminmaster_model->getdata($id);

		//echo "<pre>";print_r($result);die;
		$data['AdminId']=$result['AdminId'];
		$data['FirstName']=$result['FirstName'];
		$data['LastName']=$result['LastName'];	
		$data['EmailAddress']=$result['EmailAddress'];
		$data['DateofBirth']= $result['DateofBirth'];	
		$data['PhoneNumber']= $result['PhoneNumber'];	 
		$data['Address']= $result['Address'];
		$data['PinCode']= $result['PinCode'];	 
		$data['Gender']= $result['Gender'];
		$data['ProfileImage']= $result['ProfileImage'];
		$data['CreatedOn']= $result['CreatedOn'];
		$this->load->view('dashboard/profile',$data);

	}



	



	public function admin_master_profile_update()     
	{     
		if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
		} 	
				$data=array();
				$data['AdminId']=$this->input->post('AdminId');
				$data['FirstName']=$this->input->post('FirstName');
				$data['LastName']=$this->input->post('LastName');
				$data['DateofBirth']=$this->input->post('DateofBirth');
				$data['PhoneNumber']=$this->input->post('PhoneNumber');
				$data['Gender']=$this->input->post('Gender');
				$data['Address']=$this->input->post('Address');
				$data['PinCode']=$this->input->post('PinCode');
				if($_POST){
					// echo "<pre>";print_r($_POST);die;
					if($this->input->post('AdminId')!=''){
						$result=$this->Adminmaster_model->updatedata();
						if($result)
						{   
							$AdminId =$data['AdminId']; 
							$session= array(
								'FirstName'=> $data['FirstName'],
								'LastName'=> $data['LastName'],
							);
							$this->session->set_userdata($session); 
							$this->session->set_flashdata('success', 'Record has been Updated Succesfully!');
							redirect('Adminmaster/admin_master_profile/');

						}
					}
				}
				$this->load->view('Adminmaster/admin_master_profile',$data);			

	}











	public function change_password()
	{	
		if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
		}
		$data=array();
		//$data['AdminId']=$this->input->post('AdminId');
		if($_POST){
			$AdminId=$this->session->userdata('AdminId');
			if($this->input->post('AdminId')!='')
			{
				$result=$this->Adminmaster_model->changepass($AdminId);
				if($result==1)
				{   
					 $this->session->set_flashdata('success', 'Your password has been changed Successfully!');
					 redirect('Adminmaster/change_password');
				}
				else if($result==2)
				{
					$AdminId=$data['AdminId']; 
					$this->session->set_flashdata('error','Your old password was not match please try again!');  
					redirect('Adminmaster/change_password');
				}
				else if($result==3)
				{
					$AdminId=$data['AdminId']; 
					$this->session->set_flashdata('warning','Your email function not working!');  
					redirect('Adminmaster/change_password');
				}

				
			

			}



		



		}



			$this->load->view('common/changepassword');



	}



function statusdata(){

		if(!check_admin_authentication())

		{ 

			redirect(base_url());

		}

		$action=$this->input->post('status');

		

		$id=$this->input->post('id');

	

		if ($action == "1") {



			$data = array("IsActive" => "0");

			update_record('tbladmin', $data, 'AdminId', $id);



			$res = array('status' => 'done', 'msg' => ACTIVE);

			echo json_encode($res);

			die ;

		}else if ($action == "0") {

			

				$data = array("IsActive" => "1");

				update_record('tbladmin', $data, 'AdminId', $id);

			

			$res = array('status' => 'done', 'msg' => ACTIVE);

			echo json_encode($res);

			die ;

		}

}



	







}







