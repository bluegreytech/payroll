<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller 
{
	public function __construct() {
        parent::__construct();
		$this->load->model('company_model');
		$this->load->model('Login_model');
		
	}
    public function company_setting($msg='')
    {  //echo "fdsf";die;
            
		if(!check_admin_authentication())
		{
			redirect('login');
		}
                
		$data = array();
		$oneCompany=get_one_record('tblcompany','companyid',$this->session->userdata('companyid'));
			//print_r($oneCompany);die;
			$data["companyid"] 	= $oneCompany->companyid;
			$data["companyname"] 		= $oneCompany->companyname;				
			$data["comemailaddress"]   = $oneCompany->comemailaddress;			
			$data['comcontactnumber']=$oneCompany->comcontactnumber;
			$data['gstnumber']=$oneCompany->gstnumber;
			$data['digitalsignaturedate']=$oneCompany->digitalsignaturedate;
			$data['companytypeid']=$oneCompany->companytypeid;
			$data['result']=$this->company_model->compliancelist();

        $this->load->view('common/company_setting',$data);    
            
    }
	
  	function addcompanycompliance(){
    	//echo "<pre>";print_r($_POST);die;
    	if(!check_admin_authentication())
		{
			redirect('login');
		}
		$data=array();
		$data['activeTab']="addcompanycompliance";	
		$this->load->library("form_validation");
		$this->form_validation->set_rules('compliancename', 'compliancename', 'required');
		$this->form_validation->set_rules('percentageofcompliance', 'percentageofcompliance', 'required');
		$this->form_validation->set_rules('compliancetypeid', 'compliancetypeid', 'required');	
		  		
		if($this->form_validation->run() == FALSE){			
			if(validation_errors())
			{
				$data["error"] = validation_errors();
				echo "<pre>";print_r($data["error"]);die;
			}else{
				$data["error"] = "";
			}
           	$data['redirect_page']="company_setting";
			$data['attendance_id']=$this->input->post('attendance_id');		
		}
		else
		{

			$this->company_model->companycompliance_insert();
			$this->session->set_flashdata('success', 'Record has been Inserted Succesfully!');
			redirect('company/company_setting');
		
		}
	
		$this->load->view('common/company_setting',$data);  


    }
    function complianceedit(){
       	if(!check_admin_authentication())
		{ 
			redirect(base_url());
		}
		//echo "<pre>";print_r($_POST);die;
		
		
		$data= array('compliancepercentage'=>trim(str_replace("%","",$this->input->post('compliancevalue'))));
		$id=$this->input->post('id');
		$this->db->where("complianceid",$id);
		$res=$this->db->update('tblcompliances',$data);
		echo json_encode($res);
		die;
    }
	function deletedata(){
		if(!check_admin_authentication())
		{ 
			redirect(base_url());
		}
		$data= array('isdelete' =>'1','IsActive'=>'Inactive');
		 $id=$this->input->post('id'); 
		$this->db->where("complianceid",$id);
		$res=$this->db->update('tblcompliances',$data);
		echo json_encode($res);
		die;

    }
    function setsalarymonth(){
	    	if(!check_admin_authentication())
			{ 
				redirect(base_url());
			}
			$data=array();
			$data['activeTab']="setsalarymonth";	
			$this->load->library("form_validation");
			$this->form_validation->set_rules('salary_month', 'Salary_Month', 'required');
			
			
		    
		
		if($this->form_validation->run() == FALSE){			
			if(validation_errors())
			{
				$data["error"] = validation_errors();
				echo "<pre>";print_r($data["error"]);die;
			}else{
				$data["error"] = "";
			}
           	$data['redirect_page']="setsalarymonth";
			$data['setsalarymonth_id']=$this->input->post('setsalarymonth_id');
			$data['salary_month']=$this->input->post('salary_month');
			
			
			$data['option']='';
			$data['keyword']='';	
		}
		else
		{	

			if($this->input->post("setsalarymonth_id")!="")
			{	
				//echo "<pre>";print_r($_POST);die;
				$this->company_model->setsalarymonth_update();
				$this->session->set_flashdata('success', 'Record has been Updated Succesfully!');
				redirect('company/setsalarymonth');
			
			}
			else
			{ 	
				$this->company_model->setsalarymonth_insert();
				$this->session->set_flashdata('success', 'Record has been Inserted Succesfully!');
				redirect('company/setsalarymonth');
			}
		}
		
		$result=$this->company_model->getsetsalarymonth();
		$data['setsalarymonth_id']=$result['setsalarymonth_id'];	
      	$data['salary_month']=$result['salary_month'];
        $data['salary_year']=$result['salary_year'];
		//echo "<pre>";print_r($result);die;
		$this->load->view('salarysetting/addsalarysetting',$data);


    }
	
	
}
