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
		if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
		}
		if($_POST!='')
		{
			$option=$this->input->post('option');
			$keyword=$this->input->post('keyword2');	
			$data['invoiceData'] = $this->Invoice_model->search($option,$keyword);
		}	
		else
		{
			$data['invoiceData']=$this->Invoice_model->list_companyinvoice();
		}
		$data['companyData'] = $this->Invoice_model->list_company();
			//echo "<pre>";	print_r($data['invoiceData']);die;
		$this->load->view('Invoice/invoice-reports',$data);
	}


	public function createinvoice()
	{
			$data=array();
			$data['Companyinvoiceid']=$this->input->post('Companyinvoiceid');
			$data['companyid']=$this->input->post('companyid');
			$data['hr_id']=$this->input->post('hr_id');
			$data['paymentopt']=$this->input->post('paymentopt');
			$data['invoicedate']=$this->input->post('invoicedate');
			$data['duedate']=$this->input->post('duedate');
			$data['amount']=$this->input->post('amount');
			$data['totalamount']=$this->input->post('totalamount');
			$data['addtax']=$this->input->post('addtax');
			$data['taxamount']=$this->input->post('taxamount');
			$data['netamount']=$this->input->post('netamount');
		if($_POST)
		{	
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
				$result=$this->Invoice_model->update_invoice();
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


	public function edit_invoice($Companyinvoiceid)
	{
		$data=array();
		$result=$this->Invoice_model->get_invoice($Companyinvoiceid);	
		$data['Companyinvoiceid']=$result['Companyinvoiceid'];
		$data['companyid']=$result['companyid'];
		$data['hr_id']=$result['hr_id'];
		$data['hr_type']=$result['hr_type'];
		$data['FullName']=$result['FullName'];
		$data['EmailAddress']=$result['EmailAddress'];
		$data['paymentopt']=$result['paymentopt'];
		$data['invoicedate']=$result['invoicedate'];
		$data['duedate']=$result['duedate'];
		$data['amount']=$result['amount'];
		$data['totalamount']=$result['totalamount'];
		$data['addtax']=$result['addtax'];
		$data['taxamount']=$result['taxamount'];
		$data['netamount']=$result['netamount'];
		
		$data['hrData']=$this->Invoice_model->list_hr();
	    $data['companyData']=$this->Invoice_model->list_company();
		$this->load->view('Invoice/add-invoice',$data);
	}

	public function getedithr($companyid)
	{
		$data=array();
		$result=$this->Invoice_model->getdatahr($companyid);	
		$data['hr_id']=$result['hr_id'];
		$data['companyid']=$result['companyid'];
		$data['hr_type']=$result['hr_type'];	
		$data['FullName']=$result['FullName'];	
		$data['EmailAddress']=$result['EmailAddress'];
		$data['DateofBirth']=$result['DateofBirth'];
		$data['Contact']=$result['Contact'];
		$data['DateofBirth']= $result['DateofBirth'];
		echo json_encode($data);
	}

	public function invoice_view($Companyinvoiceid)
	{
		$data=array();
		$AdminId=$this->session->userdata('AdminId');
		$result=$this->Invoice_model->get_companyinvoice($Companyinvoiceid);	
	//	echo "<br>";print_r($result);die;
		$data['Companyinvoiceid']=$result['Companyinvoiceid'];
		$data['invoicedate']=$result['invoicedate'];
		$data['duedate']=$result['duedate'];
		$data['totalamount']=$result['totalamount'];
		$data['taxamount']=$result['taxamount'];
		$data['netamount']=$result['netamount'];
		$data['status']=$result['status'];
		$data['companyid']=$result['companyid'];
		$data['companyname']=$result['companyname'];
		$data['comemailaddress']=$result['comemailaddress'];
		$data['comcontactnumber']=$result['comcontactnumber'];
		$data['gstnumber']=$result['gstnumber'];
		$data['digitalsignaturedate']=$result['digitalsignaturedate'];
		$data['companyimage']=$result['companyimage'];
		$data['companyimage']= $result['companyimage'];
		$data['companyaddress']=$result['companyaddress'];
		$data['companycity']=$result['companycity'];
		$data['pincode']=$result['pincode'];
		$data['isactive']=$result['isactive'];
		$data['hr_id']=$result['hr_id'];
		$data['FullName']=$result['FullName'];
		$data['EmailAddress']=$result['EmailAddress'];
		$data['Bankdetailid']=$result['Bankdetailid'];
		$data['Accountnumber']=$result['Accountnumber'];
		$data['Branch']=$result['Branch'];
		$data['Bankname']=$result['Bankname'];
		$data['Ibannumber']=$result['Ibannumber'];
		$data['Swiftcode']=$result['Swiftcode'];
		$data['addtax']=$result['addtax'];
		$data['taxamount']=$result['taxamount'];
		$data['netamount']=$result['netamount'];
		$data['Address']=$result['Address'];
		$this->load->view('Invoice/invoice-view',$data);
	}


	public function gethr()
	{
		$data=array();
		$result=$this->Invoice_model->getdatahr($this->input->post('companyid'));	
		$data['hr_id']=$result['hr_id'];
		$data['companyid']=$result['companyid'];
		$data['hr_type']=$result['hr_type'];	
		$data['FullName']=$result['FullName'];	
		$data['EmailAddress']=$result['EmailAddress'];
		$data['DateofBirth']=$result['DateofBirth'];
		$data['Contact']=$result['Contact'];
		$data['DateofBirth']= $result['DateofBirth'];
		echo json_encode($data);
	}
	

	function delete_invoice(){
		if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
		}
			$Companyinvoiceid=$this->input->post('Companyinvoiceid');
			$data=array(
				'isdelete'=>'1',
				'isactive'=>'Inactive'
					);
			$this->db->where("Companyinvoiceid",$Companyinvoiceid);
			$result=$this->db->update('tblcompanyinvoice',$data);
			if($result)
			{
				$this->session->set_flashdata('success', 'Invoice has been deleted!');
				redirect('Company');
			}
			else
			{
				$this->session->set_flashdata('error', 'Invoice was not delete!');
				redirect('Company');
			}

	

	}


}

