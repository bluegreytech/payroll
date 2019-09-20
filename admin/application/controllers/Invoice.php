<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Invoice extends CI_Controller 
{
	public function __construct() {
        parent::__construct();
	    $this->load->model('Invoice_model');
	}

	

	public function index()
	{
		$data['invoiceData']=$this->Invoice_model->list_companyinvoice();
	//echo "<pre>";	print_r($data['invoiceData']);die;
		$this->load->view('Invoice/invoice-reports',$data);
	}


	public function createinvoice()
	{
		if($_POST){	
			if($this->input->post('Companyinvoiceid')==''){			
				$result=$this->Invoice_model->add_invoice();	
				if($result==1)
				{
					$this->session->set_flashdata('success', 'Your data has been Inserted Successfully!');
					redirect('Invoice');
				}
				else if($result==2)
				{
					$this->session->set_flashdata('warning', 'Your data has been Inserted Successfully and Your email function was not work!');
					redirect('Invoice');
				}
				else if($result==3)
				{
					//$this->session->set_flashdata('error', 'Your data was not Insert!');
					$this->session->set_flashdata('warning', 'This email address already registered!');
					redirect('Invoice');
				}
			}
			else
			{
				$result=$this->Invoice_model->update_company();
				if($result==1)
				{
					$this->session->set_flashdata('success', 'Record has been Updated Successfully!');
					redirect('Invoice');
				}
				else if($result==2)
				{
					$this->session->set_flashdata('warning', 'Your data has been Inserted Successfully and Your email function was not work!');
					redirect('Invoice');
				}
				else if($result==3)
				{
					$this->session->set_flashdata('error', 'Your data was not Insert!');
					redirect('Invoice');
				}

			}

	} 
		$data['companyData']=$this->Invoice_model->list_company();
		$data['hrData']=$this->Invoice_model->list_hr();
	//	echo "<pre>";print_r($data['hrData']);die;
		$this->load->view('Invoice/add-invoice',$data);
	}


	public function edit_invoice()
	{
		$data=array();
		// $result=$this->Invoice_model->get_companyprofile($companyid);	
		// //echo "<br>";print_r($result);die;
		// $data['companyid']=$result['companyid'];
		// $data['companytypeid']=$result['companytypeid'];
		// $data['companytype']=$result['companytype'];
		// $data['companyname']=$result['companyname'];
		// $data['comemailaddress']=$result['comemailaddress'];
		// $data['comcontactnumber']=$result['comcontactnumber'];
		// $data['gstnumber']=$result['gstnumber'];
		// $data['digitalsignaturedate']=$result['digitalsignaturedate'];
		// $data['companyimage']= $result['companyimage'];
		// $data['companyaddress']=$result['companyaddress'];
		// $data['stateid']=$result['stateid'];
		// $data['statename']=$result['statename'];
		// $data['companycity']=$result['companycity'];
		// $data['pincode']=$result['pincode'];
		// $data['isactive']=$result['isactive'];
		// $data['companycomplianceid']=$result['companycomplianceid'];
		// $data['complianceid']=$result['complianceid'];
		// $data['Companynotificationid']=$result['Companynotificationid'];
		// $data['Enddate']=$result['Enddate'];
		// $data['Companydocumentid']=$result['Companydocumentid'];
		// $data['Documenttitle']=$result['Documenttitle'];
		// $data['Notificationdescription']=$result['Notificationdescription'];
		// $data['Documentfile']=$result['Documentfile'];
		
	
	    $data['companyData']=$this->Invoice_model->list_company();
	   $this->load->view('Invoice/edit-invoice',$data);
	}



	public function invoice_view($Companyinvoiceid)
	{
		$data=array();
		$result=$this->Invoice_model->get_companyinvoice($Companyinvoiceid);	
	//	echo "<br>";print_r($result);die;
	
		$data['Companyinvoiceid']=$result['Companyinvoiceid'];
		$data['invoicedate']=$result['invoicedate'];
		$data['duedate']=$result['duedate'];
		$data['totalamount']=$result['totalamount'];
		$data['taxamount']=$result['taxamount'];
		$data['discount']=$result['discount'];
		$data['netamount']=$result['netamount'];
		$data['status']=$result['status'];
	
		
		$data['companyid']=$result['companyid'];
		$data['companyname']=$result['companyname'];
		$data['comemailaddress']=$result['comemailaddress'];
		$data['comcontactnumber']=$result['comcontactnumber'];
		$data['gstnumber']=$result['gstnumber'];
		$data['digitalsignaturedate']=$result['digitalsignaturedate'];
		$data['companyimage']= $result['companyimage'];
		$data['companyaddress']=$result['companyaddress'];
		$data['companycity']=$result['companycity'];
		$data['pincode']=$result['pincode'];
		$data['isactive']=$result['isactive'];
		
		$data['hr_id']=$result['hr_id'];
		$data['FullName']=$result['FullName'];
		$data['EmailAddress']=$result['EmailAddress'];
		$this->load->view('Invoice/invoice-view',$data);
	}


	public function gethr($companyid)
	{
		$data=array();
		$result=$this->Invoice_model->getdatahr($companyid);	
		// print_r($result);
		// die;
		$data['hr_id']=$result['hr_id'];
		$data['companyid']=$result['companyid'];
		$data['hr_type']=$result['hr_type'];	
		$data['FullName']=$result['FullName'];	
		$data['EmailAddress']=$result['EmailAddress'];
		$data['DateofBirth']=$result['DateofBirth'];
		$data['Contact']=$result['Contact'];
		$data['DateofBirth']= $result['DateofBirth'];
		echo json_encode($data);
		//$this->load->view('Invoice/add-invoice',$data);
	}
	

	

}

