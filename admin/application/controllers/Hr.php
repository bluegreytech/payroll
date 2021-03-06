<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Hr extends CI_Controller 
{ 
	public function __construct() 
	{
        parent::__construct();
		$this->load->model('Hr_model');
	}


	public function index()
	{	
		if(!check_admin_authentication()){ 
			redirect(base_url());
		}      
		if($_POST!='')
		{
			$keyword2=$this->input->post('keyword2');	
			$data['hrData'] = $this->Hr_model->searchbyname($keyword2);	
		}	
		$data['companyData']=$this->Hr_model->list_company();

		 if((isset($this->adminRights['Hr']) && $this->adminRights['Hr']->rights_view==1) || checkSuperAdmin()){ 
		$this->load->view('hr/hrlist',$data);
	}
	else{
				//$this->session->set_flashdata('msg', 'no_rights');
               	$this->load->view('common/noRights',$data);
		} 
		
	}




	public function profile($hr_id)

	{	

		if(!check_admin_authentication()){ 

			redirect(base_url('Login'));

		}

		$data=array();

		$result=$this->Hr_model->get_hrprofile($hr_id);	

		//echo "<br>";print_r($result);die;

		$data['hr_id']=$result['hr_id'];

		$data['companyid']=$result['companyid'];	

		$data['hr_type']=$result['hr_type'];

		$data['FullName']=$result['FullName'];

		$data['EmailAddress']=$result['EmailAddress'];

		$data['Address']=$result['Address'];

		$data['ProfileImage']=$result['ProfileImage'];

		$data['Contact']=$result['Contact'];

		$data['DateofBirth']=$result['DateofBirth'];

		$data['City']= $result['City'];

		$data['PinCode']=$result['PinCode'];

		$data['Gender']=$result['Gender'];

		$data['companyname']=$result['companyname'];

	

		$data['companyData']=$this->Hr_model->list_company();

		//	echo "<pre>";print_r($data['complianceData']);die;

		$this->load->view('hr/profile',$data);	



	}







	public function addhr()

	{

		if(!check_admin_authentication()){ 

			redirect(base_url('Login'));

		}

		$data['hr_id']=$this->input->post('companyid');

		$data['companyid']=$this->input->post('companyid');

		$data['FullName']=$this->input->post('FullName');

		$data['EmailAddress']=$this->input->post('EmailAddress');

		$data['DateofBirth']=$this->input->post('DateofBirth');

		$data['Contact']=$this->input->post('Contact');

		$data['Gender']=$this->input->post('Gender');

		$data['Address']=$this->input->post('Address');

		$data['ProfileImage']=$this->input->post('ProfileImage');

		$data['PinCode']=$this->input->post('PinCode');

		$data['City']=$this->input->post('City');

		$data['IsActive']=$this->input->post('IsActive');

		$data['companyname']=$this->input->post('companyname');	

		 if($_POST){

			if($this->input->post('hr_id')!='')

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
				else if($result==3)

				{

					$this->session->set_flashdata('warning', 'This email address already registered!');

					redirect('Hr');

				}	



			}



		}



		$data['companytypeData']=$this->Hr_model->list_company();

		//print_r($data['stateData']);die;

		$this->load->view('hr/hrlist',$data);	

	}







	function deletehr(){
		if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
		}
		$AdminIdlogin=$this->session->userdata('AdminId');
		$hr_id=$this->input->post('hr_id');
		$data=array(
			'Is_deleted'=>'1',
			'IsActive'=>'Inactive'
				);

		$this->db->where("hr_id",$hr_id);
		$result=$this->db->update('tblhr',$data);
		if($result)
		{
			$log_data = array(
				'AdminId' => $AdminIdlogin,
				'Module' => 'Hr',
				'Activity' =>'Delete record id: '.$hr_id
			);
			$log = $this->db->insert('tblactivitylog',$log_data);
			$this->session->set_flashdata('success', 'Rocord has been deleted!');
			redirect('hr');
		}
		else
		{
			$this->session->set_flashdata('error', 'Hr was not deleted!');
			redirect('hr');
		}



	}







	function edithr()

	{

		if(!check_admin_authentication()){ 

			redirect(base_url('Login'));

		}

		$data=array();

		$result=$this->Hr_model->getdata($this->input->post('hr_id'));	

		//echo "<br>";print_r($result);die;

		$data['hr_id']=$result['hr_id'];

		$data['companyid']=$result['companyid'];

		$data['FullName']=$result['FullName'];	

		$data['EmailAddress']=$result['EmailAddress'];

		$data['DateofBirth']=$result['DateofBirth'];

		$data['Contact']=$result['Contact'];

		$data['Gender']=$result['Gender'];

		$data['Address']=$result['Address'];

		$data['ProfileImage']=$result['ProfileImage'];

		$data['PinCode']=$result['PinCode'];

		$data['City']=$result['City'];

		$data['IsActive']=$result['IsActive'];

		$data['companyname']=$result['companyname'];

		$data['companyData']=$this->Hr_model->list_company();

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



			$data = array("IsActive" => "Inactive");

			update_record('tblhr', $data, 'hr_id', $id);



			$res = array('status' => 'done', 'msg' => ACTIVE);

			echo json_encode($res);

			die ;

		}else if ($action == "Inactive") {

			

				$data = array("IsActive" => "Active");

				update_record('tblhr', $data, 'hr_id', $id);

			

			$res = array('status' => 'done', 'msg' => ACTIVE);

			echo json_encode($res);

			die ;

		}

	

	}











	











	



	







}







