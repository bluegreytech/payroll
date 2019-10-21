<?php



defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller 
{

	public function __construct() {
        parent::__construct();
		$this->load->model('Company_model');

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

		if($_POST!='')
		{
			$option=$this->input->post('option');
			$keyword=$this->input->post('keyword');
			$keyword2=$this->input->post('keyword2');
			$keyword3=$this->input->post('keyword3');
			$keyword4=$this->input->post('keyword4');
			$keyword5=$this->input->post('keyword5');	
			if($option!='' && $keyword!='')
			{	$option=$this->input->post('option');
				$data['notificationData'] = $this->Company_model->search_company_notification($option,$keyword);
			}
			else if($option!='' && $keyword2!='')
			{	$option=$this->input->post('option');
				$data['notificationData'] = $this->Company_model->search_title_notification($option,$keyword2);
			}
			else if($option!='' && $keyword3!='')
			{	$option=$this->input->post('option');
				$data['notificationData'] = $this->Company_model->search_status_notification($option,$keyword3);
			}
			else if($option!='' && $keyword4!='' && $keyword5!='')
			{	$option=$this->input->post('option');
				$data['notificationData'] = $this->Company_model->search_createdate_notification($option,$keyword4,$keyword5);
			}		
			else
			{
				$data['notificationData']=$this->Company_model->list_companynotification();
			}
			$data['companyData']=$this->Company_model->list_company();
		 	//echo "<pre>";print_r($data['notificationData']);die;
		    $this->load->view('Company/notificationlist',$data);

	}

	}


	function delete_companynotification(){
		if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
		}
			$Companynotificationid=$this->input->post('Companynotificationid');
			$data=array(
				'Isdelete'=>'1',
				'Isactive'=>'Inactive'
				);
			$this->db->where("Companynotificationid",$Companynotificationid);
			$result=$this->db->update('tblcompanynotification',$data);
			if($result)
			{
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







	public function index()
	{   
		if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
		}
		if($_POST!='')
		{
			$option=$this->input->post('option');
			$keyword=$this->input->post('keyword2');	
			$data['companyData'] = $this->Company_model->search($option,$keyword);
		}	
		else
		{
			$data['companyData']=$this->Company_model->list_company();
		} 
		$this->load->view('Company/companylist',$data);			
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
			$companyid=$this->input->post('companyid');
			$data=array(
				'isdelete'=>'1',
				'isactive'=>'Inactive'
				);
			$this->db->where("companyid",$companyid);
			$result=$this->db->update('tblcompany',$data);
			if($result)
			{
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
		$data['complianceData']=$this->Company_model->list_compliance();
		$data['companytypeData']=$this->Company_model->list_companytype();
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
		$this->load->view('Company/companytypelist',$data);	



	}











	public function compliance()
	{
		if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
		}

		$data=array();

			$data['complianceid']=$this->input->post('complianceid');
			$data['compliancetypeid']=$this->input->post('compliancetypeid');
			$data['compliancename']=$this->input->post('compliancename');
			$data['compliancepercentage']=$this->input->post('compliancepercentage');	
			$data['isactive']=$this->input->post('isactive');

			if($_POST){
				if($this->input->post('complianceid')==''){
					$result=$this->Company_model->add_compliance();	
					if($result)
					{
						$this->session->set_flashdata('success', 'Record has been Inserted Succesfully!');
						redirect('Company/compliance');
					}

				}
				else
				{
					$result=$this->Company_model->update_compliance();
					if($result)
					{
						$this->session->set_flashdata('success', 'Record has been Updated Succesfully!');
						redirect('Company/compliance');
					} 
				}
		} 

		$data['complianceData']=$this->Company_model->list_compliance();
		$this->load->view('compliance/compliance',$data);	

	}







	function delete_compliance(){

		if(!check_admin_authentication()){ 

			redirect(base_url('Login'));

		}

		$complianceid=$this->input->post('complianceid');

		$data=array(

			'IsDelete'=>1,

			'IsActive'=>0

				);

		$this->db->where("complianceid",$complianceid);

		$result=$this->db->update('tblcompliances',$data);

		if($result)

		{

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

		$companytypeid=$this->input->post('companytypeid');

		$data=array(

			'Is_deleted'=>'1',

			'IsActive'=>'Inactive'

				);

		$this->db->where("companytypeid",$companytypeid);

		$result=$this->db->update('tblcompanytype',$data);

		if($result)

		{

			$this->session->set_flashdata('success', 'Company type was delete successfully!');

			redirect('Company/companytype');

		}

		else

		{

			$this->session->set_flashdata('error', 'Company type was not delete!');

			redirect('Company/companytype');

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
		$data['compliancetypeid']=$result['compliancetypeid'];
		$data['compliancename']=$result['compliancename'];
		$data['compliancepercentage']=$result['compliancepercentage'];
		$data['isactive']=$result['isactive'];
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

	

		if ($action == "1") {



			$data = array("IsActive" => "0");

			update_record('tblcompliances', $data, 'complianceid', $id);



			$res = array('status' => 'done', 'msg' => ACTIVE);

			echo json_encode($res);

			die ;

		}else if ($action == "0") {

			

				$data = array("IsActive" => "1");

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



