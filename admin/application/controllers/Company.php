<?php



defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller 

{

	public function __construct() {

        parent::__construct();

		$this->load->model('Company_model');

	}

	public function getcompanyid(){
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



	public function Sendnotification()

	{
		
		if($_POST)
		{

			$result=$this->Company_model->send_company_notification();
			if($result==1)
			{
				$this->session->set_flashdata('success', 'Notification has been send Successfully!');
				redirect('Company/Sendnotification');
			}
			else if($result==2)
			{
				$this->session->set_flashdata('error', 'Your was not Inserted!');
				redirect('Company/Sendnotification');
			}	

		}
		$data['companyData']=$this->Company_model->list_company();
        $this->load->view('Company/sendnotification',$data);

	}



	public function company_notification_expired($companyid)
	{	
		$result=$this->Company_model->list_company_notification($companyid);
		//echo "<pre>";print_r($result);die;
		if($result==1)
		{
			$this->session->set_flashdata('success', 'Notification has been expired Successfully!');
			redirect('Company');
		}
		// else if($result==2)
		// {
		// 	$this->session->set_flashdata('error', 'Notification has been Available!');
		// 	redirect('Company');
		// }	
		// else if($result==3)
		// {
		// 	$this->session->set_flashdata('warning', 'Notification was not Available!');
		// 	redirect('Company');
		// }	

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

			$data['comemailaddress']=$this->input->post('comemailaddress');

			$data['comcontactnumber']=$this->input->post('comcontactnumber');

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

			$data['Ibannumber']=$this->input->post('Ibannumber');

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

		$data['comemailaddress']=$result['comemailaddress'];

		$data['comcontactnumber']=$result['comcontactnumber'];

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



