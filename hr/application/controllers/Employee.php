<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller 
{
	public function __construct() {
        parent::__construct();
		 $this->load->model('employee_model');
	}
	
	public function emplist()
	{ 
		
		if(!check_admin_authentication()){ 
			redirect(base_url());
		}
		$data=array();
		$data['option']='';
		$data['keyword']='';
		$data['redirect_page']='emplist';

		 $data['result']=$this->employee_model->emplist();

		$this->load->view('Employee/emplist',$data);
	}
	function addemp(){

		if(!check_admin_authentication()){ 
			redirect(base_url());
		}   
			$data=array();
			$data['activeTab']="addhr";	
			$this->load->library("form_validation");
			$this->form_validation->set_rules('FirstName', 'FirstName', 'required');
			$this->form_validation->set_rules('LastName', 'LastName', 'required');
			$this->form_validation->set_rules('EmailAddress', 'EmailAddress', 'required');		
			$this->form_validation->set_rules('marital_status', 'Marital Status', 'required');	
			$this->form_validation->set_rules('department', 'Departmant', 'required');
			$this->form_validation->set_rules('PhoneNumber', 'Mobileno', 'required');
		    $this->form_validation->set_rules('dob', 'DateofBirth', 'required');
		    $this->form_validation->set_rules('Gender', 'Gender', 'required');
		    $this->form_validation->set_rules('pob', 'Place of Birth', 'required');
		    $this->form_validation->set_rules('jod', 'Joining Date', 'required');
		    $this->form_validation->set_rules('qualificationemp', 'Qualification Employee','required');
		    $this->form_validation->set_rules('bloodgroup', 'Blood Group', 'required');
		    $this->form_validation->set_rules('salary', 'salary', 'required');
		    $this->form_validation->set_rules('salary_amount', 'salary amount', 'required');
		    $this->form_validation->set_rules('probation_period_day', 'Probation Period Day', 'required');
			$this->form_validation->set_rules('physically_challenged', 'Physically Challanged', 'required');
			$this->form_validation->set_rules('probation_period_day', 'Probation Period Day', 'required');
			$this->form_validation->set_rules('status', 'Status', 'required');
			$this->form_validation->set_rules('probation_period_day', 'Probation Period Day', 'required');
		    
		
		if($this->form_validation->run() == FALSE){			
			if(validation_errors())
			{
				$data["error"] = validation_errors();
				echo "<pre>";print_r($data["error"]);die;
			}else{
				$data["error"] = "";
			}
           	$data['redirect_page']="emplist";
			$data['emp_id']=$this->input->post('emp_id');
			$data['employee_code']=$this->input->post('employee_code');
			$data['first_name']=$this->input->post('FirstName');
			$data['last_name']=$this->input->post('LastName');
			$data['department']=$this->input->post('department');
			$data['desgination']=$this->input->post('desgination');
			$data['department']=$this->input->post('department');
			
			$data['email']=$this->input->post('EmailAddress');
			$data['Address']=$this->input->post('Address');
			$data['ProfileImage']=$this->input->post('ProfileImage');
			$data['phone']=$this->input->post('PhoneNumber');
			$data['Dateofbirth']=$this->input->post('dob');
			$data['gender']=$this->input->post('Gender');
			$data['religion']=$this->input->post('religion');
			$data['nationality']=$this->input->post('nationality');

			$data['marital_status']=$this->input->post('marital_status');
			$data['Placeofbirth']=$this->input->post('pob');
			$data['joiningdate']=$this->input->post('jod');
			$data['qualification_emp']=$this->input->post('qualificationemp');
			$data['bloodgroup']=$this->input->post('bloodgroup');
			$data['salary']=$this->input->post('salary');
			$data['salaryamt']=$this->input->post('salary_amount');
			$data['probation_period_day']=$this->input->post('probation_period_day');
			$data['physically_challenged']=$this->input->post('physically_challenged');
			$data['status']=$this->input->post('status');
			$data['bankdetail']=$this->input->post('bank_detail');
			$data['passport']=$this->input->post('passport');
			$data['drivinglicense']=$this->input->post('driveinglicence');
			$data['pancard']=$this->input->post('pancard');
			$data['aadharcard']=$this->input->post('aadharcard');
			$data['addressesproof']=$this->input->post('address_proof');
			$data["pre_profile_image"] = $this->input->post('ProfileImage');
			$data['option']='';
			$data['keyword']='';	
		}
		else
		{

				if($this->input->post("emp_id")!="")
				{	
					
					$this->employee_model->emp_update();
					$this->session->set_flashdata('success', 'Record has been Updated Succesfully!');
					redirect('employee/emplist');
					
				}
				else
				{ 	
					$this->employee_model->emp_insert();
					$this->session->set_flashdata('success', 'Record has been Inserted Succesfully!');
					redirect('employee/emplist');
				}
		}
		
		// $data['result']=$this->hr_model->hrlist();
		 $this->load->view('Employee/addemp',$data);
		//echo "<pre>";print_r($data['result']);die;
	}

	function edit_emp($emp_id){
		if(!check_admin_authentication()){ 
			redirect(base_url());
		}else{
			$data=array();
			$data['activeTab']="Editemp";	
			$result=$this->employee_model->getdata($emp_id);	
			//echo "<pre>";print_r($result);die;
			$data['emp_id']=$result['emp_id'];
			$data['employee_code']=$result['employee_code'];
			$data['department']=$result['department'];
			$data['desgination']=$result['desgination'];
			$data['first_name']=$result['first_name'];
			$data['last_name']=$result['last_name'];	
			$data['email']=$result['email'];
			$data['phone']=$result['phone'];	
			$data['Address']=$result['Address'];
			$data['gender']=$result['gender'];
			$data['Dateofbirth']=$result['Dateofbirth'];				
			$data['ProfileImage']=$result['ProfileImage'];	
			$data['Placeofbirth']=$result['Placeofbirth'];
			$data['marital_status']=$result['marital_status'];
			$data['religion']=$result['religion'];
			$data['nationality']=$result['nationality'];
			$data['status']=$result['status'];
			$data['qualification_emp']=$result['qualification_emp'];
			$data['bloodgroup']=$result['bloodgroup'];
			$data['probation_period_day']=$result['probation_preriod_day'];
			$data['physically_challenged']=$result['physically_challenged'];
			$data['joiningdate']=$result['joiningdate'];
			$data['salaryamt']=$result['salaryamt'];
			$data['salary']=$result['salary'];
			$data['aadharcard']=$result['aadharcard'];
			$data['pancard']=$result['pancard'];
			$data['bankdetail']=$result['bankdetail'];
			$data['passport']=$result['passport'];
			$data['drivinglicense']=$result['drivinglicense'];
			$data['addressesproof']=$result['addressesproof'];
			$data['redirect_page']="emplist";		
			$this->load->view('Employee/addemp',$data);	
		}
	}

	function delete_emp(){
		if(!check_admin_authentication())
		{ 
			redirect(base_url());
		}
		if($this->input->post('emp_image')!='')
		{
				if(file_exists(base_path().'upload/emp/'.$this->input->post('emp_image')))
				{
					$link=base_path().'upload/emp/'.$this->input->post('emp_image');
					unlink($link);
				}
				if(file_exists(base_path().'upload/emp_orig/'.$this->input->post('emp_image')))
				{
					$link=base_path().'upload/emp_orig/'.$this->input->post('emp_image');
					unlink($link);
				}
		}
		$data= array('Is_deleted' =>'1','status'=>'Inactive','ProfileImage'=>'');
		
		$id=$this->input->post('id');
		$this->db->where("emp_id",$id);
		$res=$this->db->update('tblemp',$data);
		echo json_encode($res);
		die;
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
			update_record('tblemp', $data, 'emp_id', $id);

			$res = array('status' => 'done', 'msg' => ACTIVE);
			echo json_encode($res);
			die ;
		}else if ($action == "Inactive") {
			
				$data = array("status" => "Active");
				update_record('tblemp', $data, 'emp_id', $id);
			
			$res = array('status' => 'done', 'msg' => ACTIVE);
			echo json_encode($res);
			die ;
		}
	
	}
	public	function searchemp(){
		if(!check_admin_authentication()){ 
			redirect(base_url());
		}   
		$data=array();
		$data['activeTab']="searchemp";	
			
		if($this->input->post("search")!=''){
		 	$data['option']=$this->input->post('option');
		 	$data['keyword']=$this->input->post('keyword');	
		 	$option=$data['option'];
          	$keyword=$data['keyword'];
			
			$data['result'] = $this->employee_model->search($option,$keyword);
		}else{
		 	$data['option']='';
          	$data['keyword']='';
          	$data['result']=$this->employee_model->emplist();
		}
		 	
		$data['redirect_page']="emplist";
		//echo "<pre>";print_r($data['result']);die;
		$this->load->view('Employee/emplist',$data);
	}
	 function email_check() {
		$query = $this->db->query("select email from " . $this->db->dbprefix('tblemp') . " where email= '".$this->input->post('email')."'");
		//echo $this->db->last_query();die;
		if ($query->num_rows() > 0) {
			echo 1;die;
		} else {
			echo 0;die;
		}
	}

	 function empcode_check() {
		$query = $this->db->query("select employee_code from " . $this->db->dbprefix('tblemp') . " where employee_code= '".$this->input->post('employee_code')."'");
		//echo $this->db->last_query();die;
		if ($query->num_rows() > 0) {
			echo 1;die;
		} else {
			echo 0;die;
		}
	}
}
