<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salarysetting extends CI_Controller 
{
	public function __construct() {
        parent::__construct();
		$this->load->model('salary_model');
		$this->load->model('employee_model');
		$this->load->model('leave_model');
		$this->load->model('company_model');
		$this->load->model('attendance_model');
		   
	}
	
	function setsalary(){			
		if(!check_admin_authentication()){ 
			redirect(base_url());
		}   
		$data=array();
		$data['activeTab']="setsalary";	
		$this->load->library("form_validation");
		$salarymonthresult=$this->company_model->getsetsalarymonth();
		$data['selectdatedata']=getSelectdate($this->session->userdata('companyid'));
		$salarymonth=$data['selectdatedata']->selecteddate;			
		$data['result']=$this->salary_model->empsetsalary_list($salarymonth);     
		$this->load->view('salarysetting/emp_setsalary',$data);
	
	}
	function viewsetsalary(){
		if(!check_admin_authentication()){ 
			redirect(base_url());
		}   
		$data=array();
		//echo "<pre>";print_r($_POST);die;
		
		$salarymonth=$this->input->post('selecteddate')	;
		$result=$this->salary_model->empsetsalary_list($salarymonth);       
		echo json_encode($result);
	
	}

	function add_setsalary(){ 
    	if(!check_admin_authentication())
		{
			redirect('login');
		}
		$data=array();
		$data['activeTab']="addempsalary";	
		$this->load->library("form_validation");
		$this->form_validation->set_rules('emp_id', 'Employee ID ', 'required');
		$this->form_validation->set_rules('complianceid[]', 'compliance id', 'required');
		$this->form_validation->set_rules('compliancevalue[]', 'compliance name', 'required');	
		  		
		if($this->form_validation->run() == FALSE){			
			if(validation_errors())
			{
				$data["error"] = validation_errors();
				echo "<pre>";print_r($data["error"]);die;
			}else{
				$data["error"] = "";
			}
           	$data['redirect_page']="setsalary";
			$data['emp_id']=$this->input->post('emp_id');
			$data['employee_code']=$this->input->post('employee_code');
			$data['first_name']=$this->input->post('FirstName');
			$data['last_name']=$this->input->post('LastName');
			$data['department']=$this->input->post('department');
			$data['desgination']=$this->input->post('desgination');
			$data['department']=$this->input->post('department');
			
		}
		else
		{	
			if($this->input->post("empsetsalary_id")!="")
			{	
				//echo "fgfg";die;
				$this->salary_model->empsetsalary_update();
				$this->session->set_flashdata('success', 'Record has been Updated Succesfully!');
				redirect('salarysetting/setsalary');			
			}
			else
			{ 	//echo "else";die;
				$this->salary_model->empsetsalary_insert();
				$this->session->set_flashdata('success', 'Record has been Inserted Succesfully!');
				redirect('salarysetting/setsalary');
			}
		}
		$salarymonthresult=$this->company_model->getsetsalarymonth();
		$data['selectdatedata']=getSelectdate($this->session->userdata('companyid'));	
	
	   	$salarymonth=$data['selectdatedata']->selecteddate;
	    $data['salarymonth']=$salarymonthresult['salary_month']; 
		$data['result']=$this->company_model->compliancelist();
		$data['otherdeductionname']="";
        $data['otherdeductionvalue']='';
        $data['totaldeduction']='';
        $data['empsetsalary_id']='';
        
      
		$data['empid']='';		
		$this->load->view('salarysetting/add_setsalary',$data);	
    }

    function salary_view($empsetsalary_id){
    	if(!check_admin_authentication()){ 
			redirect(base_url());
		} 
		$result=$this->salary_model->get_salarydata($empsetsalary_id);
        $data['empsetsalary_id']=$result['empsetsalary_id'];
		$data['emp_id']=$result['emp_id'];
		$data['employee_code']=$result['employee_code'];
		$data['department']=$result['department'];
		$data['desgination']=$result['desgination'];
		$data['first_name']=$result['first_name'];
		$data['last_name']=$result['last_name'];
		$data['joiningdate']=$result['joiningdate'];
		$data['salary_month']=$result['salary_month'];
		$data['salary_month']=$result['salary_month'];
		$data['gross_earning']=$result['gross_earning'];		
		$data['netpay']=$result['netpay'];
		$data['payword']=$result['payword'];
		$data['totaldeduction']=$result['totaldeduction'];
		$data['complianceid']=$result['complianceid'];
		$data['compliancevalue']=$result['compliancevalue'];
		$data['otherdeductionname']=$result['otherdeductionname'];
		$data['otherdeductionvalue']=$result['otherdeductionvalue'];
	    $data['otherearningname']=$result['otherearningname'];
		$data['otherearningvalue']=$result['otherearningvalue'];  
		$data['created_date']=$result['createddate']; 
		$data['result']=$this->company_model->compliancelist();       
		$this->load->view('salarysetting/salary_view',$data);
    }

    function salaryslip_mail($empsetsalary_id){
    	if(!check_admin_authentication()){ 
			redirect(base_url());
		} 

			    $result=$this->salary_model->get_salarydata($empsetsalary_id);
			 
		        $data['empsetsalary_id']=$result['empsetsalary_id'];
				$data['emp_id']=$result['emp_id'];
				$data['email']=$result['email'];
				$data['employee_code']=$result['employee_code'];
				$data['department']=$result['department'];
				$data['desgination']=$result['desgination'];
				$data['first_name']=$result['first_name'];
				$data['last_name']=$result['last_name'];
				$data['joiningdate']=$result['joiningdate'];
				$data['salary_month']=$result['salary_month'];
				
				$data['gross_earning']=$result['gross_earning'];		
				$data['netpay']=$result['netpay'];
				$data['payword']=$result['payword'];
				$data['totaldeduction']=$result['totaldeduction'];
				$data['complianceid']=$result['complianceid'];
				$data['compliancevalue']=$result['compliancevalue'];
				$data['otherdeductionname']=$result['otherdeductionname'];
				$data['otherdeductionvalue']=$result['otherdeductionvalue'];
			    $data['otherearningname']=$result['otherearningname'];
				$data['otherearningvalue']=$result['otherearningvalue'];  
				$data['created_date']=$result['createddate']; 
				$data['result']=$this->company_model->compliancelist();   
               	$cmpdetail= getOneCompany($this->session->userdata('companyid')); 

				$file_name=$data['salary_month'].'.pdf';
				//$result['quotationtData']=$this->Invoice_model->list_companyquotation($quotationid);
				//$this->load->view('salarysetting/salaryslip',$data);

				$this->load->view('salarysetting/salarypdf',$data);
				$html = $this->output->get_output();

				//echo "<pre>";print_r($html);die;
				$this->load->library('dompdf_gen');
				$this->dompdf->load_html($html);
				$this->dompdf->render();
				$file=$this->dompdf->output();
				file_put_contents($file_name,$file);
					
				$email_template=$this->db->query("select * from ".$this->db->dbprefix('tblemail_template')." where task='Salaryslip'");
				$email_temp=$email_template->row();
				$email_address_from=$email_temp->from_address;
				$email_address_reply=$email_temp->reply_address;
				$email_subject=$email_temp->subject;        
				$email_message=$email_temp->message;	

				$base_url=base_url();
				$image_url=base_url().'default/img/logo2.png';
				$username=$data['first_name'].$data['last_name'];
				$companyname= $cmpdetail->companyname;
				$currentyear=date('Y');
				$email_message=str_replace('{break}','<br/>',$email_message);
				$email_message=str_replace('{base_url}',$base_url,$email_message);
				$email_message=str_replace('{year}',$currentyear,$email_message);
				$email_message=str_replace('{companyname}',$companyname,$email_message);
				$email_message=str_replace('{image_url}',$image_url,$email_message);
				$email_message=str_replace('{username}',$username,$email_message);
				//$email_message=str_replace('{companyname}',$companyname,$email_message);
				//$email_message=str_replace('{otherinformation}',$otherinformation,$email_message);
				$str=$email_message; 
				

				$email_config = Array(
					'protocol'  => 'smtp',
					'smtp_host' => 'ssl://smtp.googlemail.com',
					'smtp_port' => '465',
					'smtp_user' => 'bluegreyindia@gmail.com',
					'smtp_pass' => 'Test@123',
					'mailtype'  => 'html',
					'starttls'  => true,
					'newline'   => "\r\n",
					'charset'=>'utf-8',
					
					);
				//$this->load->library('email', $email_config);
                   $this->email->initialize($email_config);
				// $config['protocol']='smtp';
				// $config['smtp_host']='ssl://smtp.googlemail.com';
				// $config['smtp_port']='465';
				// $config['smtp_user']='bluegreyindia@gmail.com';
				// $config['smtp_pass']='Test@123';
				// $config['charset']='utf-8';
				// $config['newline']="\r\n";
				// $config['mailtype'] = 'html';								
				// $this->email->initialize($config);
				
				$body =$str;
				$this->email->from('binny@bluegreytech.co.in'); 
				//$this->email->to($companyemail);	
				$this->email->to($data['email']);		
				$this->email->subject('Payslip Send');
				$this->email->message($body);
				$this->email->attach($file_name);
				if($this->email->send())
				{
				
					$this->session->set_flashdata('success','Email send Successfully!');	
					redirect('Salarysetting/salary_view/'.$empsetsalary_id);
				}else
				{
					
					$this->session->set_flashdata('error', 'Email funaction was not working!');	
					redirect('Salarysetting/salary_view/'.$empsetsalary_id);
				}

    }
    function edit_setsalary($id){   
    	if(!check_admin_authentication()){ 
			redirect(base_url());
		} 
    	
		$data=array();
	    $data['redirect_page']="setsalary";
	 
	    $salarymonthresult=$this->company_model->getsetsalarymonth();
		$data['selectdatedata']=getSelectdate($this->session->userdata('companyid'));	
		
	   	$salarymonth=$data['selectdatedata']->selecteddate;
	    $data['salarymonth']=$salarymonthresult['salary_month']; 
		
		$data['result']=$this->company_model->compliancelist();
		$empsalarylist=$this->salary_model->getsetsalarybyemp($id); 
		//	echo "<pre>";print_r($salarymonthresult); die;
		
        $data['empid']=$empsalarylist->emp_id;
        $data['otherdeductionname']=$empsalarylist->otherdeductionname;
        $data['otherdeductionvalue']=$empsalarylist->otherdeductionvalue;
        $data['totaldeduction']=$empsalarylist->totaldeduction;
        $data['empsetsalary_id']=$empsalarylist->empsetsalary_id;
      

		$this->load->view('salarysetting/add_setsalary',$data);	
    }

    
    function empsalarmonth(){    	
    	$salarymonth=$this->input->post('selecteddate');
    	$emplist=$this->employee_model->emplist();    
        echo json_encode($emplist);
        die;
    }

   function reportsalary(){
	if(!check_admin_authentication()){ 
	redirect(base_url());
	}	
	$data=array();
	$data['result']=$this->salary_model->empsetsalary_list();
	$data['tot_earn']=$this->salary_model->emptotearn();
	$data['tot_deduction']=$this->salary_model->emptotdeduction();
	$data['tot_netpay']=$this->salary_model->emptotpay();
	
	$this->load->view('salarysetting/report_salary',$data);
   }
   function empchequelist(){
   		if(!check_admin_authentication()){ 
			redirect(base_url());
		} 
    	
		$data=array();
		$data['result']=$this->salary_model->empchequelist();	
	//	echo "<pre>";print_r($data);die;
       	$this->load->view('salarysetting/emppaymenttype',$data);

   }
    function empbanklist(){
   		if(!check_admin_authentication()){ 
			redirect(base_url());
		} 
    	
		$data=array();
		$data['result']=$this->salary_model->empbanklist();		
       	$this->load->view('salarysetting/emppaymenttypebank',$data);

   }

}
