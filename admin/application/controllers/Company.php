<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller 
{
	public function __construct() {
        parent::__construct();
		$this->load->model('Company_model');
		$this->load->model('Dashboard_model');
		$this->adminRights=getRights();
		if(count($this->adminRights)==0 && !checkSuperAdmin())
		{
			$this->session->set_flashdata('msg', 'no_rights');
			//redirect('home/dashboard/noRights');
		}
	}

	public function Companynotificationid(){
		$result=$this->Company_model->get_id();	
		echo "<br>";print_r($result);die;
	//	$this->load->view('Company/sendnotification',$data);

	}


	public function getfile(){
		$result=$this->Company_model->get_docfile();	
		echo "<br>";print_r($result);die;
		$this->load->view('Company/sendnotification',$data);

	}

	public function company_dashboard($companyid)
	{
		if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
		}

		$data['invoiceTotal']=$this->Company_model->list_companyinvoicetotal($companyid);
		$data['hrData']=$this->Company_model->list_hr($companyid);
		$data['empData']=$this->Company_model->list_employee($companyid);
		$data['invoiceData']=$this->Company_model->list_companyinvoice($companyid);
		$data['hrDataDetail']=$this->Company_model->list_hr_detail($companyid);
		$data['empDataDetail']=$this->Company_model->list_emp_detail($companyid);
		$data['companyDetail']=$this->Company_model->get_companyprofile($companyid);
	
		$data['cominvoiceDataCount']=$this->Company_model->list_cominvoice_count($companyid);
		//echo "<pre>";print_r($data['hrData']);die;
		$this->load->view('Company/company_dashboard',$data);		
	}

	public function profile($companyid)
	{	
		if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
		}
		$data=array();
		$result=$this->Company_model->get_companyprofile($companyid);	

		//echo "<br>";print_r($result);die;

		$data['companyid']=$result['companyid'];
		$data['companytypeid']=$result['companytypeid'];
		$data['companytype']=$result['companytype'];
		$data['companyname']=$result['companyname'];
		$data['companycode']=$result['companycode'];
		$data['comemailaddress']=$result['comemailaddress'];
		$data['comcontactnumber']=$result['comcontactnumber'];
		$data['gstnumber']=$result['gstnumber'];
		$data['digitalsignaturedate']=$result['digitalsignaturedate'];
		$data['companyimage']= $result['companyimage'];
		$data['companyaddress']=$result['companyaddress'];
		$data['stateid']=$result['stateid'];
		$data['statename']=$result['statename'];
		$data['companycity']=$result['companycity'];
		$data['pincode']=$result['pincode'];
		$data['isactive']=$result['isactive'];
		$data['companycomplianceid']=$result['companycomplianceid'];
		$data['complianceid']=$result['complianceid'];
		$data['Companynotificationid']=$result['Companynotificationid'];
		$data['Enddate']=$result['Enddate'];
		$data['Companydocumentid']=$result['Companydocumentid'];
		$data['Documenttitle']=$result['Documenttitle'];
		$data['Notificationdescription']=$result['Notificationdescription'];
		$data['Documentfile']=$result['Documentfile'];

		$data['stateData']=$this->Company_model->list_state();
		$data['complianceData']=$this->Company_model->list_compliance();
		$data['companytypeData']=$this->Company_model->list_companytype();
		$data['documentData']=$this->Company_model->list_companydocument($companyid);
		//	echo "<pre>";print_r($data['complianceData']);die;
		$this->load->view('Company/profile',$data);	
	}

	public function notification_detail($Companynotificationid)
	{
		if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
		}
		$data['notificationData']=$this->Company_model->list_companynotification_detail($Companynotificationid);
		 //echo "<pre>";print_r($data['notificationData']);die;
		 $this->load->view('Company/notificationdetail',$data);	
	}

	public function Sendnotification()
	{
		if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
		}
		// $data['Companynotificationid']=$this->input->post('Companynotificationid');
		// $data['companyid']=$this->input->post('companyid');
		// $data['companyname']=$this->input->post('companyname');
		// $data['Documenttitle']=$this->input->post('Documenttitle');
		// $data['Notificationdescription']=$this->input->post('Notificationdescription');
		// $data['Enddate']=$this->input->post('Enddate');
		// $data['Companydocumentid']=$this->input->post('Companydocumentid');
		// $data['Documentfile']=$this->input->post('Documentfile');
		if($_POST)
		{
			if($this->input->post('Companynotificationid')=='')
			{
				$result=$this->Company_model->send_company_notification();
				if($result==1)
				{
					$this->session->set_flashdata('success', 'Notification has been send Successfully!');
					redirect('Company/companynotification_list');
				}
				else if($result==2)
				{
					$this->session->set_flashdata('error', 'Record has been inserted Successfully but Email function not work!');
					redirect('Company/companynotification_list');
				}	
			}
			// else
			// {
			// 	$result=$this->Company_model->update_companynotification();
			// 		if($result==1)
			// 		{
			// 			$this->session->set_flashdata('success', 'Record has been Updated Successfully!');
			// 			redirect('Company/companynotification_list');
			// 		}
			// 		// else if($result==2)
			// 		// {
			// 		// 	$this->session->set_flashdata('warning', 'Your data has been Inserted Successfully and Your email function was not work!');
			// 		// 	redirect('Company/companynotification_list');
			// 		// }
			// 		else if($result==2)
			// 		{
			// 			$this->session->set_flashdata('error', 'Your data was not Insert!');
			// 			redirect('Company/companynotification_list');
			// 		}
			// }
		}
		$data['companyData']=$this->Company_model->list_company();
        $this->load->view('Company/sendnotification',$data);

	}





	function companynotification_list()
	{
		if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
		}
		$data=array();
		$data['option']='';
		$data['keyword1']='';
		$data['keyword2']='';
		$data['keyword3']='';
		$data['keyword4']='';
	
		$data['redirect_page']='Company/companynotification_list';
		$data['companyData']=$this->Company_model->list_company();
		$data['notificationData']=$this->Company_model->list_companynotification();
           //echo $this->adminRights['Company Notification']->rights_view;

		 if((isset($this->adminRights['Company Notification']) && $this->adminRights['Company Notification']->rights_view==1) || checkSuperAdmin()){ 
		$this->load->view('Company/notificationlist',$data);
	}else{
				//$this->session->set_flashdata('msg', 'no_rights');
               	$this->load->view('common/noRights',$data);
		} 
	
	}


	
	public function searchnotification()
	{   
		if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
		}
		$data=array();
		$data['activeTab']="searchnotification";	
		if($_POST!='')
		{
				$option=$this->input->post('option');
				$keyword1=$this->input->post('keyword1');
				$keyword2=$this->input->post('keyword2');
				$keyword3=$this->input->post('keyword3');
				$keyword4=$this->input->post('keyword4');
				if($option!='' && $keyword1!='')
				{
					$data['option']=$this->input->post('option');
					$data['keyword1']=$this->input->post('keyword1');
					$data['keyword2']=$this->input->post('keyword2');
					$data['keyword3']=$this->input->post('keyword3');
					$data['keyword4']=$this->input->post('keyword4');
					$option=$data['option'];
					$keyword1=$data['keyword1'];
					$keyword2=$data['keyword2'];
					$keyword3=$data['keyword3'];
					$keyword4=$data['keyword4'];
					$data['notificationData'] = $this->Company_model->search_notification($option,$keyword1);
				}
				else if($option!='' && $keyword2!='')
				{
					$data['option']=$this->input->post('option');
					$data['keyword1']=$this->input->post('keyword1');
					$data['keyword2']=$this->input->post('keyword2');
					$data['keyword3']=$this->input->post('keyword3');
					$data['keyword4']=$this->input->post('keyword4');
					$option=$data['option'];
					$keyword1=$data['keyword1'];
					$keyword2=$data['keyword2'];
					$keyword3=$data['keyword3'];
					$keyword4=$data['keyword4'];
					$data['notificationData'] = $this->Company_model->search_company_notification($option,$keyword2);
				}
				else if($option!='' && $keyword3!='' && $keyword4!='')
				{
					$data['option']=$this->input->post('option');
					$data['keyword1']=$this->input->post('keyword1');
					$data['keyword2']=$this->input->post('keyword2');
					$data['keyword3']=$this->input->post('keyword3');
					$data['keyword4']=$this->input->post('keyword4');
					$option=$data['option'];
					$keyword1=$data['keyword1'];
					$keyword2=$data['keyword2'];
					$keyword3=$data['keyword3'];
					$keyword4=$data['keyword4'];
					$data['notificationData'] = $this->Company_model->search_createdate_notification($option,$keyword3,$keyword4);
				}
				else
				{
					$data['option']='';
					$data['keyword1']='';
					$data['keyword2']='';
					$data['keyword3']='';
					$data['keyword4']='';
					$data['notificationData']=$this->Company_model->list_companynotification();
				}	
				$data['redirect_page']='Company/companynotification_list';
				$this->load->view('Company/notificationlist',$data);
		}		
	}


	function delete_companynotification(){
		if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
		}
			$AdminIdlogin=$this->session->userdata('AdminId');
			$Companynotificationid=$this->input->post('Companynotificationid');
			$data=array(
				'Isdelete'=>'1',
				'Isactive'=>'Inactive'
				);
			$this->db->where("Companynotificationid",$Companynotificationid);
			$result=$this->db->update('tblcompanynotification',$data);
			if($result)
			{
				$log_data = array(
					'AdminId' => $AdminIdlogin,
					'Module' => 'Company Notification',
					'Activity' =>'Delete record id: '.$Companynotificationid

				);
				$log = $this->db->insert('tblactivitylog',$log_data);
				$this->session->set_flashdata('success', 'Company notification was delete successfully!');
				redirect('Company/companynotification_list');
			}
			else
			{
				$this->session->set_flashdata('error', 'Company notification was not delete!');
				redirect('Company/companynotification_list');
			}

	}


	function editcompanynotification($Companynotificationid)
	{
		if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
		}
		$data=array();
		$result=$this->Company_model->get_companynotification($Companynotificationid);	
		//echo "<br>";print_r($result);die;
		
		$data['Companynotificationid']=$result['Companynotificationid'];
		$data['companyid']=$result['companyid'];
		$data['companyname']=$result['companyname'];
		$data['Documenttitle']=$result['Documenttitle'];
		$data['Notificationdescription']=$result['Notificationdescription'];
		$data['Enddate']=$result['Enddate'];
		//echo "<pre>";print_r($data['documentData']);die;
		$data['companyData']=$this->Company_model->list_company();
		$this->load->view('Company/sendnotification',$data);	

	}





	public function company_notification_expired($Companynotificationid)
	{	
		$result=$this->Company_model->list_company_notification($Companynotificationid);
		//echo "<pre>";print_r($result);die;
		if($result==1)
		{
			$this->session->set_flashdata('error', 'Notification has been expired!');
			redirect('Company/companynotification_list');
		}
		if($result==2)
		{
			$this->session->set_flashdata('success', 'Notification Available!');
			redirect('Company/companynotification_list');
		}
		

	}




	public function checkcode($code='')
	{	
		$result=$this->Company_model->checkResetCode($code);
		if($result==1)
		{
			$this->session->set_flashdata('success', 'Your company verification has been Successfully!');
			redirect('Login');
		}
		elseif($result==2)
		{
			$this->session->set_flashdata('error', 'Your company verification link has been expired!');
			redirect('Login');
		}

	}



	public function company_licence()

	{	

		$result=$this->Company_model->list_licence_company();

		//echo "<pre>";print_r($result);die;

		if($result)

		{

			echo "success";

		}

		else

		{

			echo "fail";

		}

	}









	function index()
	{
		if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
		}
		$data=array();
		$data['option']='';
		$data['keyword1']='';
		$data['keyword2']='';
	
		$data['redirect_page']='Company';
		$data['companyData']=$this->Company_model->list_company();

		  if((isset($this->adminRights['Company']) && $this->adminRights['Company']->rights_view==1) || checkSuperAdmin()){ 
		$this->load->view('Company/companylist',$data);	
	}
	else{
				//$this->session->set_flashdata('msg', 'no_rights');
               	$this->load->view('common/noRights',$data);
		} 
	}

	public function searchcompany()
	{   
		if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
		}
		$data=array();
		$data['activeTab']="searchcompany";	
		if($_POST!='')
		{
				$option=$this->input->post('option');
				$keyword1=$this->input->post('keyword1');
				$keyword2=$this->input->post('keyword2');
			if($option!='' && $keyword2!='')
			{	
				$data['option']=$this->input->post('option');
				$data['keyword1']=$this->input->post('keyword1');
				$data['keyword2']=$this->input->post('keyword2');
				
					$option=$data['option'];
					$keyword1=$data['keyword1'];
					$keyword2=$data['keyword2'];
				
				$data['companyData'] = $this->Company_model->search_companytype($option,$keyword2);
			}
			else if($option!='' && $keyword1!='')
			{	
				$data['option']=$this->input->post('option');
				$data['keyword1']=$this->input->post('keyword1');
				$data['keyword2']=$this->input->post('keyword2');
					$option=$data['option'];
					$keyword1=$data['keyword1'];
					$keyword2=$data['keyword2'];
				$data['companyData'] = $this->Company_model->search($option,$keyword1);
			}		
			else
			{
				$data['option']='';
				$data['keyword1']='';
				$data['keyword2']='';
				$data['companyData']=$this->Company_model->list_company();
			} 
			$data['redirect_page']="Company";
			$this->load->view('Company/companylist',$data);	
		}		
	}




	function companyadd()
	{
		if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
		}

			$data=array();
			$data['companyid']=$this->input->post('companyid');
			$data['companytypeid']=$this->input->post('companytypeid');
			$data['companyname']=$this->input->post('companyname');
			$data['companycode']=$this->input->post('companycode');
			$data['comemailaddress']=$this->input->post('comemailaddress');
			$data['comcontactnumber']=$this->input->post('comcontactnumber');
			$data['comcontactnumber2']=$this->input->post('comcontactnumber2');
			$data['comlandlinenumber']=$this->input->post('comlandlinenumber');
			$data['gstnumber']=$this->input->post('gstnumber');
			$data['digitalsignaturedate']=$this->input->post('digitalsignaturedate');
			$data['companyimage']=$this->input->post('companyimage');
			$data['companyaddress']=$this->input->post('companyaddress');
			$data['stateid']=$this->input->post('stateid');
			$data['companycity']=$this->input->post('companycity');	
			$data['pincode']=$this->input->post('pincode');		
			$data['isactive']=$this->input->post('isactive');
			$data['companycomplianceid']=$this->input->post('companycomplianceid');
			$data['compliancedeductionid']=$this->input->post('compliancedeductionid');
			
			$data['Companyshiftid']=$this->input->post('Companyshiftid');

			$data['Shiftname']=$this->input->post('Shiftname');
			$data['Shiftintime']=$this->input->post('Shiftintime');
			$data['Shiftouttime']=$this->input->post('Shiftouttime');

			$data['Bankdetailid']=$this->input->post('Bankdetailid');
			$data['Accountnumber']=$this->input->post('Accountnumber');
			$data['Branch']=$this->input->post('Branch');
			$data['Bankname']=$this->input->post('Bankname');
			$data['Ifsccode']=$this->input->post('Ifsccode');
			$data['Swiftcode']=$this->input->post('Swiftcode');

		
			if($_POST){	
				if($this->input->post('companyid')==''){			
					$result=$this->Company_model->add_company();	
					if($result==1)
					{
						$this->session->set_flashdata('success', 'Your data has been Inserted Successfully!');
						redirect('Company');
					}
					else if($result==2)
					{
						$this->session->set_flashdata('warning', 'Your data has been Inserted Successfully and Your email function was not work!');
						redirect('Company');

					}
					else if($result==3)
					{
						//$this->session->set_flashdata('error', 'Your data was not Insert!');
						$this->session->set_flashdata('warning', 'This email address already registered!');
						redirect('Company');
					}
					else if($result==4)
					{
						$this->session->set_flashdata('warning', 'This GST number already registered!');
						redirect('Company');
					}
				}
				else
				{
					$result=$this->Company_model->update_company();
					if($result==1)
					{
						$this->session->set_flashdata('success', 'Record has been Updated Successfully!');
						redirect('Company');
					}
					else if($result==2)
					{
						$this->session->set_flashdata('warning', 'Your data has been Inserted Successfully and Your email function was not work!');
						redirect('Company');
					}
					else if($result==3)
					{
						$this->session->set_flashdata('error', 'Your data was not Insert!');
						redirect('Company');
					}
				}

		} 

	//	$data['shiftData']=$this->Company_model->list_shift();
		$data['stateData']=$this->Company_model->list_state();
		$data['complianceData']=$this->Company_model->list_complianceto();
		$data['deductionData']=$this->Company_model->list_compliancededuction();
		$data['companytypeData']=$this->Company_model->list_companyto();
		//print_r($data['shiftData']);die;
		$this->load->view('Company/companyadd',$data);	
	}







	function delete_company(){
		if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
		}
			$AdminIdlogin=$this->session->userdata('AdminId');
			$companyid=$this->input->post('companyid');
			$data=array(
				'isdelete'=>'1',
				'isactive'=>'Inactive'
				);
			$this->db->where("companyid",$companyid);
			$result=$this->db->update('tblcompany',$data);
			if($result)
			{
				$log_data = array(
					'AdminId' => $AdminIdlogin,
					'Module' => 'Company',
					'Activity' =>'Delete record id: '.$companyid

				);
				$log = $this->db->insert('tblactivitylog',$log_data);
				$this->session->set_flashdata('success', 'Company was delete successfully!');
				redirect('Company');
			}
			else
			{
				$this->session->set_flashdata('error', 'Company was not delete!');
				redirect('Company');
			}

	}



	function editcompany($companyid)
	{
		if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
		}
		$data=array();
		$result=$this->Company_model->get_company($companyid);	
		//echo "<br>";print_r($result);die;
		$data['companyid']=$result['companyid'];
		$data['companytypeid']=$result['companytypeid'];
		$data['companytype']=$result['companytype'];
		$data['companyname']=$result['companyname'];
		$data['companycode']=$result['companycode'];
		
		$data['comemailaddress']=$result['comemailaddress'];
		$data['comcontactnumber']=$result['comcontactnumber'];
		$data['comcontactnumber2']=$result['comcontactnumber2'];
		$data['comlandlinenumber']=$result['comlandlinenumber'];
		$data['gstnumber']=$result['gstnumber'];
		$data['digitalsignaturedate']=$result['digitalsignaturedate'];
		$data['companyimage']=$result['companyimage'];
		$data['companyaddress']=$result['companyaddress'];
		$data['stateid']=$result['stateid'];
		$data['statename']=$result['statename'];
		$data['companycity']=$result['companycity'];
		$data['pincode']=$result['pincode'];
		$data['isactive']=$result['isactive'];
		$data['companycomplianceid']=$result['companycomplianceid'];
		$data['complianceid']=$result['complianceid'];
		$data['compliancedeductionid']=$result['compliancedeductionid'];

		$data['Companyshiftid']=$result['Companyshiftid'];
		$data['Shifthours']=$result['Shifthours'];
		$data['Shiftname']=$result['Shiftname'];
		$data['Shiftintime']=$result['Shiftintime'];
		$data['Shiftouttime']=$result['Shiftouttime'];

		$data['Bankdetailid']=$result['Bankdetailid'];
		$data['Accountnumber']=$result['Accountnumber'];
		$data['Branch']=$result['Branch'];
		$data['Bankname']=$result['Bankname'];
		$data['Ifsccode']=$result['Ifsccode'];

		$data['shiftData']=$this->Company_model->list_companyshift($companyid);
		$data['stateData']=$this->Company_model->list_state();
		$data['companytypeData']=$this->Company_model->list_companytype();

		$data['complianceData']=$this->Company_model->list_complianceto();
		$data['deductionData']=$this->Company_model->list_compliancededuction();
		//$data['deductionData']=$this->Company_model->list_compliancededuction();
		//	$data['complianceData']=$this->Company_model->list_compliance();
			//echo "<pre>";print_r($data['shiftData']);die;
		$this->load->view('Company/companyadd',$data);	

	}



	function companytype()
	{	

		if(!check_admin_authentication()){ 

			redirect(base_url('Login'));

		}

		$data=array();

			$data['companytypeid']=$this->input->post('companytypeid');

			$data['companytype']=$this->input->post('companytype');

			$data['IsActive']=$this->input->post('IsActive');

			if($_POST){

				if($this->input->post('companytypeid')==''){			
					$result=$this->Company_model->add_companytype();	
					if($result)
					{
						$this->session->set_flashdata('success', 'Record has been Inserted Succesfully!');
						redirect('Company/companytype');
					}
				}
				else
				{

					$result=$this->Company_model->update_companytype();

					if($result)

					{

						$this->session->set_flashdata('success', 'Record has been Updated Succesfully!');

						redirect('Company/companytype');

					} 



				}

		} 
		$data['companytypeData']=$this->Company_model->list_companytype();
  if((isset($this->adminRights['Company Type']) && $this->adminRights['Company Type']->rights_view==1) || checkSuperAdmin()){
          	    $this->load->view('Company/companytypelist',$data);				
			}else{
				//$this->session->set_flashdata('msg', 'no_rights');
               	$this->load->view('common/noRights',$data);
		} 
		
		//$this->load->view('Company/companytypelist',$data);	



	}




public function compliance_list(){
	if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
		}

		$data['company']=$this->Company_model->getcompany();

		if((isset($this->adminRights['Compliance']) && $this->adminRights['Compliance']->rights_view==1) || checkSuperAdmin()){
          	    $this->load->view('compliance/compliance_list',$data);				
			}else{
				//$this->session->set_flashdata('msg', 'no_rights');
               	$this->load->view('common/noRights',$data);
		}
		
}






	public function compliance($id='')
	{
		if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
		}

		$data=array();

			$data['complianceid']=$this->input->post('complianceid');
			$data['compliancetypeid']=$this->input->post('compliancetypeid');
			$data['er_percentage']=$this->input->post('er_percentage');
			$data['compliancename']=$this->input->post('compliancename');
			$data['compliancepercentage']=$this->input->post('compliancepercentage');	
			$data['isactive']=$this->input->post('isactive');
			$data['companyid']=$this->input->post('companyid');
            $data['is_editable']=$this->input->post('is_editable');
			if($_POST){
				if($this->input->post('complianceid')==''){
					$result=$this->Company_model->add_compliance();	
					if($result)
					{
						$this->session->set_flashdata('success', 'Record has been Inserted Succesfully!');
						redirect('Company/compliance_list');
					}

				}
				else
				{
					$result=$this->Company_model->update_compliance();
					if($result)
					{
						$this->session->set_flashdata('success', 'Record has been Updated Succesfully!');
						redirect('Company/compliance_list');
					} 
				}
		} 
        $data['company']=$this->Company_model->getcompany();
		$data['complianceData']=$this->Company_model->list_compliance($id);
		$this->load->view('compliance/compliance',$data);	

	}







	function delete_compliance(){
		if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
		}
		$AdminIdlogin=$this->session->userdata('AdminId');
		$complianceid=$this->input->post('complianceid');
		
		$data=array(
			'Is_deleted'=>'1',
			'IsActive'=>Inactive
				);

		$this->db->where("complianceid",$complianceid);
		$result=$this->db->update('tblcompliances',$data);
		if($result)
		{
			$log_data = array(
				'AdminId' => $AdminIdlogin,
				'Module' => 'Compliance',
				'Activity' =>'Delete record id: '.$complianceid

			);
			$log = $this->db->insert('tblactivitylog',$log_data);
			$this->session->set_flashdata('success', 'Compliance was delete successfully!');
			redirect('compliance');
		}
		else
		{
			$this->session->set_flashdata('error', 'Compliance was not delete!');
			redirect('compliance');
		}







	}







	function delete_companytype(){
		if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
		}

		$AdminIdlogin=$this->session->userdata('AdminId');
		$companytypeid=$this->input->post('companytypeid');
		$data=array(
			'Is_deleted'=>'1',
			'IsActive'=>'Inactive'
				);

		$this->db->where("companytypeid",$companytypeid);
		$result=$this->db->update('tblcompanytype',$data);
		if($result)
		{
			
			$log_data = array(
				'AdminId' => $AdminIdlogin,
				'Module' => 'Company Type',
				'Activity' =>'Delete record id: '.$companytypeid

			);
			$log = $this->db->insert('tblactivitylog',$log_data);
			$this->session->set_flashdata('success', 'Company type was delete successfully!');
			redirect('company/companytype');
			
		}
		else
		{
			$this->session->set_flashdata('error', 'Company type was not delete!');
			redirect('company/companytype');
		}


	}







	function editcompanytype()

	{

		if(!check_admin_authentication()){ 

			redirect(base_url('Login'));

		}

		$data=array();

		$result=$this->Company_model->get_companytype($this->input->post('companytypeid'));	

		//echo "<br>";print_r($result);die;

		$data['companytypeid']=$result['companytypeid'];

		$data['companytype']=$result['companytype'];

		$data['IsActive']=$result['IsActive'];

		echo json_encode($data);

	    //$this->load->view('Company/companytypelist',$data);		



	}







	function editcompliance()
	{
		if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
		}

		$data=array();
		$result=$this->Company_model->get_compliance($this->input->post('complianceid'));	
		//echo "<br>";print_r($result);die;
		$data['complianceid']=$result['complianceid'];
		$data['companyid']=$result['companyid'];
		$data['compliancetypeid']=$result['compliancetypeid'];
		$data['compliancename']=$result['compliancename'];
		$data['compliancepercentage']=$result['compliancepercentage'];
		$data['er_percentage']=$result['er_percentage'];
		$data['IsActive']=$result['IsActive'];
		$data['is_editable']=$result['is_editable'];
		echo json_encode($data);

		//$this->load->view('Company/companytypelist',$data);		

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

			update_record('tblcompliances', $data, 'complianceid', $id);



			$res = array('status' => 'done', 'msg' => ACTIVE);

			echo json_encode($res);

			die ;

		}else if ($action == "Inactive") {

			

				$data = array("IsActive" => "Active");

				update_record('tblcompliances', $data, 'complianceid', $id);

			

			$res = array('status' => 'done', 'msg' => ACTIVE);

			echo json_encode($res);

			die ;

		}

}

function statusdata_type(){

	if(!check_admin_authentication())

		{ 

			redirect(base_url());

		}

		$action=$this->input->post('status');

		

		$id=$this->input->post('id');

	

		if ($action == "Active") {



			$data = array("IsActive" => "Inactive");

			update_record('tblcompanytype', $data, 'companytypeid', $id);



			$res = array('status' => 'done', 'msg' => ACTIVE);

			echo json_encode($res);

			die ;

		}else if ($action == "Inactive") {

			

				$data = array("IsActive" => "Active");

				update_record('tblcompanytype', $data, 'companytypeid', $id);

			

			$res = array('status' => 'done', 'msg' => ACTIVE);

			echo json_encode($res);

			die ;

		}

}

	



	



}



