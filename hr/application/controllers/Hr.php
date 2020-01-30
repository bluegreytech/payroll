<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Hr extends CI_Controller 
{ 
	public function __construct() {
        parent::__construct();
		$this->load->model('hr_model');
		$this->hrRights=getRights();
		if(count($this->hrRights)==0 && !checkSuperHr())
		{
			$this->session->set_flashdata('msg', 'no_rights');
			redirect('home/dashboard/noRights');
		}
	}
	
	function hrlist()
	{	
		if(!check_admin_authentication()){ 
			redirect(base_url());
		}   
			$data=array();
			$data['activeTab']="addhr";	
			$this->load->library("form_validation");
			$this->form_validation->set_rules('FullName', 'Full Name', 'required');
			$this->form_validation->set_rules('PhoneNumber', 'Mobileno', 'required');
		    $this->form_validation->set_rules('DateofBirth', 'DateofBirth', 'required');
		    $this->form_validation->set_rules('Gender', 'Gender', 'required');
		
		if($this->form_validation->run() == FALSE){			
			if(validation_errors())
			{
				$data["error"] = validation_errors();
				echo "<pre>";print_r($data["error"]);die;
			}else{
				$data["error"] = "";
			}
           	$data['redirect_page']="hrlist";
			$data['hr_id']=$this->input->post('hr_id');
			$data['FullName']=$this->input->post('FullName');
			$data['EmailAddress']=$this->input->post('EmailAddress');
			$data['Addresses']=$this->input->post('Addresses');
			$data['ProfileImage']=$this->input->post('ProfileImage');
			$data['Contact']=$this->input->post('Contact');
			$data['DateofBirth']=$this->input->post('DateofBirth');
			$data['Gender']=$this->input->post('Gender');
			$data['PinCode']=$this->input->post('PinCode');
			$data['IsActive']=$this->input->post('IsActive');
			$data["pre_profile_image"] = $this->input->post('ProfileImage');
			$data['option']='';
			$data['keyword']='';	
			}
			else
			{

				if($this->input->post("hr_id")!="")
				{	
					
					$this->hr_model->hr_update();
					$this->session->set_flashdata('success', 'Record has been Updated Succesfully!');
					redirect('hr/hrlist');
					
				}
				else
				{ 	
					$this->hr_model->hr_insert();
					$this->session->set_flashdata('success', 'Record has been Inserted Succesfully!');
					redirect('hr/hrlist');
				
				}
				
			}
		
		 $data['result']=$this->hr_model->hrlist();
		
		 if((isset($this->hrRights['Hr']) && $this->hrRights['Hr']->rights_view==1) || checkSuperHr()){
          		$this->load->view('hr/hrlist',$data);
				
			}else{
               	$this->load->view('common/noRights',$data);
			}
	}

	function deletedata()
	{
		if(!check_admin_authentication())
		{ 
			redirect(base_url());
		}
		if($this->input->post('hr_image')!='')
			{
					if(file_exists(base_path().'upload/hr/'.$this->input->post('hr_image')))
					{
						$link=base_path().'upload/hr/'.$this->input->post('hr_image');
						unlink($link);
					}
					if(file_exists(base_path().'upload/hr_orig/'.$this->input->post('hr_image')))
					{
						$link=base_path().'upload/hr_orig/'.$this->input->post('hr_image');
						unlink($link);
					}
			}
		$data= array('Is_deleted' =>'1','IsActive'=>'Inactive','ProfileImage'=>'');
		$id=$this->input->post('id');
		$this->db->where("hr_id",$id);
		$res=$this->db->update('tblhr',$data);
		echo json_encode($res);
		die;
	}

	function edithr()
	{
		//echo $id;die;
		$id=$this->input->post('id');
		$data=array();
		$result=$this->hr_model->gethrdata($id);
		
		$data['hr_id']=$result['hr_id'];
		$data['FullName']=$result['FullName'];			
		$data['EmailAddress']=$result['EmailAddress'];
		$data['DateofBirth']=$result['DateofBirth'];
		$data['Contact']=$result['Contact'];
		$data['Gender']=$result['Gender'];
		$data['Address']=$result['Address'];
		$data['PinCode']=$result['PinCode'];
		$data['ProfileImage']=$result['ProfileImage'];
		$data['City']=$result['City'];
		$data['IsActive']=$result['IsActive'];
	
		echo json_encode($data);
	}

	function statusdata()
	{
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
							$this->session->set_flashdata('success', 'Record has been Updated Succesfully!');
							redirect('Hr');
						}
					}
				
				}
				$this->load->view('Adminmaster/admin_master_profile',$data);			
	}
	public function searchhr()
	{
		if(!check_admin_authentication()){ 
			redirect(base_url());
		}   
		$data=array();
		$data['activeTab']="searchhr";	
			
		if($this->input->post("search")!=''){
		 	$data['option']=$this->input->post('option');
		 	$data['keyword']=$this->input->post('keyword');	
		 	$option=$data['option'];
          	$keyword=$data['keyword'];
			
			$data['result'] = $this->hr_model->search($option,$keyword);
		}else{
		 	$data['option']='';
          	$data['keyword']='';
          	$data['result']=$this->hr_model->hrlist();
		}
		 	
		$data['redirect_page']="hrlist";
		//echo "<pre>";print_r($data['result']);die;
		$this->load->view('hr/hrlist',$data);
	}

	function assign_rights($hr_id='0')
	{
		
		if(!check_admin_authentication()){ 
			redirect(base_url());
		} 
          
		$this->form_validation->set_rules('viewrightcheck[]', 'View Rights', 'required');		

			if($this->form_validation->run() == FALSE){			
			if(validation_errors())
			{
				$data["error"] = validation_errors();
				echo "<pre>";print_r($data);die;
			}else{
				$data["error"] = "";
			}
			
			$data["hr_id"] = ($this->input->post('hr_id')) ? $this->input->post('hr_id'):$hr_id;		
			//$data['site_setting'] = site_setting();		
			//$data['all_rights']=get_total_count('rights');
                        
            $data['all_rights']=$this->hr_model->get_all_rights();
			$admin_right=$this->hr_model->get_admin_rights($hr_id);
			
			$ad_r=array();
			$rid=array();
			if($admin_right!=''){
			foreach($admin_right as $adr){
				$ad_r[]=$adr->rights_assign_id;
				$rid[]=$adr;
			}}
			  // echo '<pre>';
			  //   print_r($rid);  die;
			$data['ad_r']=$ad_r;
			$data['rid']=$rid;			
		    $data["redirect_page"]="hrlist";
		}
		else
		{	

			if($this->input->post("rights_assign_id")!="")
			{
				$this->hr_model->hr_rights_assignupdate();
				$this->session->set_flashdata('success', 'Record has been Updated Succesfully!');
				redirect('hr/hrlist');			
			}
			else
			{ 	
				
				$this->hr_model->hr_rights_assigninsert($hr_id);
				$this->session->set_flashdata('success', 'Record has been Inserted Succesfully!');
				redirect('hr/hrlist');
			}
		}
		$this->load->view('hr/assign_rights',$data);					
	}



}

