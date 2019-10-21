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
			$keyword=$this->input->post('keyword');
			$keyword2=$this->input->post('keyword2');
			$keyword3=$this->input->post('keyword3');
			$keyword4=$this->input->post('keyword4');
			if($option!='' && $keyword!='')
			{	$option=$this->input->post('option');
				$data['invoiceData'] = $this->Invoice_model->search($option,$keyword);
			}
			else if($option!='' && $keyword2!='')
			{	$option=$this->input->post('option');
				$data['invoiceData'] = $this->Invoice_model->searchbystatus($option,$keyword2);
			}	
			else if($option!='' && $keyword3!='' && $keyword4!='')
			{	$option=$this->input->post('option');
				$data['invoiceData'] = $this->Invoice_model->searchbydate($option,$keyword3,$keyword4);
			}	
			else
			{
				$data['invoiceData']=$this->Invoice_model->list_companyinvoice();
			}
		$data['companyData'] = $this->Invoice_model->list_company();

			//echo "<pre>";	print_r($data['invoiceData']);die;
		$this->load->view('Invoice/invoice-reports',$data);

	}

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
			$data['cgstamount']=$this->input->post('cgstamount');
			$data['netamount']=$this->input->post('netamount');
			$data['Otherinformation']=$this->input->post('Otherinformation');
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
		$data['cgstamount']=$result['cgstamount'];
		$data['netamount']=$result['netamount'];
		$data['Otherinformation']=$result['Otherinformation'];

		
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
				//$AdminId=$this->session->userdata('AdminId');
				$result=$this->Invoice_model->get_companyinvoice($Companyinvoiceid);	
			//	echo "<br>";print_r($result);die;
				$data['Companyinvoiceid']=$result['Companyinvoiceid'];
				$data['invoicebillid']=$result['invoicebillid'];
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
				$data['Ifsccode']=$result['Ifsccode'];
				$data['addtax']=$result['addtax'];
				$data['taxamount']=$result['taxamount'];
				$data['cgstamount']=$result['cgstamount'];
				$data['netamount']=$result['netamount'];
				$data['Otherinformation']=$result['Otherinformation'];
				$data['Address']=$result['Address'];
		$this->load->view('Invoice/invoice-view',$data);
	}


	public function sendinvoice($Companyinvoiceid)
	{
		if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
			}
				$data=array();
				$result=$this->Invoice_model->get_companyinvoice($Companyinvoiceid);	
				if($result)
				{	
					redirect('Invoice/pdf/'.$Companyinvoiceid);
				}
				else
				{
					redirect('Invoice');
				}
				$this->load->view('Invoice/invoice-view2',$data);
	}

	public function pdf($Companyinvoiceid)
	{
		if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
			}
			
				$result=$this->Invoice_model->get_companyinvoice($Companyinvoiceid);
				$Companyinvoiceid=$result['Companyinvoiceid'];
				$comemailaddress=$result['comemailaddress'];
				$companyname = str_replace(' ', '-', $result['companyname']);
				$Otherinformation=$result['Otherinformation'];

                $file_name=$companyname.'.pdf';
			    $this->load->view('Invoice/invoice-view2',$result); 
				$html = $this->output->get_output();
				// die;
				//print_r($result);die;
				$this->load->library('dompdf_gen');
				$this->dompdf->load_html($html);
				$this->dompdf->render();
				$file=$this->dompdf->output();
				file_put_contents($file_name,$file);
					
				$email_template=$this->db->query("select * from ".$this->db->dbprefix('tblemail_template')." where task='Send Company Invoice'");
				$email_temp=$email_template->row();
				$email_address_from=$email_temp->from_address;
				$email_address_reply=$email_temp->reply_address;
				$email_subject=$email_temp->subject;        
				$email_message=$email_temp->message;	

				$base_url=base_url();
				$currentyear=date('Y');
				$email_message=str_replace('{break}','<br/>',$email_message);
				$email_message=str_replace('{base_url}',$base_url,$email_message);
				$email_message=str_replace('{year}',$currentyear,$email_message);
				$email_message=str_replace('{companyname}',$companyname,$email_message);
				$email_message=str_replace('{Otherinformation}',$Otherinformation,$email_message);

				$str=$email_message; //die;
				//print_r($str);die;
				// $email_config = Array(
				// 	'protocol'  => 'smtp',
				// 	'smtp_host' => 'relay-hosting.secureserver.net',
				// 	'smtp_port' => '465',
				// 	'smtp_user' => 'binny@bluegreytech.co.in',
				// 	'smtp_pass' => 'Binny@123',
				// 	'mailtype'  => 'html',
				// 	'starttls'  => true,
				// 	'newline'   => "\r\n",
				// 	'charset'=>'utf-8',
				// 	'header'=> 'MIME-Version: 1.0',
				// 	'header'=> 'Content-type:text/html;charset=UTF-8',
				// 	);
				// $this->load->library('email', $email_config);

				$config['protocol']='smtp';
				$config['smtp_host']='ssl://smtp.googlemail.com';
				$config['smtp_port']='465';
				$config['smtp_user']='bluegreyindia@gmail.com';
				$config['smtp_pass']='Test@123';
				$config['charset']='utf-8';
				$config['newline']="\r\n";
				$config['mailtype'] = 'html';								
				$this->email->initialize($config);
				$body =$str;
				$this->email->from('binny@bluegreytech.co.in'); 
				$this->email->to($comemailaddress);		
				$this->email->subject('Invoice send to company');
				$this->email->message($body);
				$this->email->attach($file_name);
				if($this->email->send())
				{
					$this->session->set_flashdata('success','Email send Successfully!');	
					redirect('Invoice/invoice_view/'.$Companyinvoiceid);
				}else
				{
					$this->session->set_flashdata('error', 'Email funaction was not working!');	
					redirect('Invoice/invoice_view/'.$Companyinvoiceid);
				}
	}

	public function sendquotation($quotationid)
	{
		if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
			}
				$data=array();
				$result=$this->Invoice_model->get_companyquotation($quotationid);	
				//echo "<br>";print_r($result);die;
				$data['quotationid']=$result['quotationid'];
				$companyname = str_replace(' ', '-', $result['companyname']);
				if($result)
				{
					redirect('Invoice/pdfquotation/'.$quotationid);
				}
				else
				{
					redirect('Invoice/pdfquotation'.$quotationid);
				}
				$data['quotationtData']=$this->Invoice_model->list_companyquotation($quotationid);
				$this->load->view('Quotation/quotation_view',$data);
	}

	public function pdfquotation($quotationid)
	{
		if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
			}
				$result=$this->Invoice_model->get_companyquotation($quotationid);
				$quotationid=$result['quotationid'];
				$companyemail=$result['companyemail'];
				$companyname = str_replace(' ', '-', $result['companyname']);
				$otherinformation=$result['otherinformation'];

				$file_name=$companyname.'.pdf';
				$result['quotationtData']=$this->Invoice_model->list_companyquotation($quotationid);
				$this->load->view('Quotation/quotation-view2',$result);
				$html = $this->output->get_output();
				
				print_r($html);die;
				$this->load->library('dompdf_gen');
				$this->dompdf->load_html($html);
			//	print_r($this->dompdf->load_html($html));die;
				$this->dompdf->render();
				$file=$this->dompdf->output();
				file_put_contents($file_name,$file);
					
				$email_template=$this->db->query("select * from ".$this->db->dbprefix('tblemail_template')." where task='Send Company Quotation'");
				$email_temp=$email_template->row();
				$email_address_from=$email_temp->from_address;
				$email_address_reply=$email_temp->reply_address;
				$email_subject=$email_temp->subject;        
				$email_message=$email_temp->message;	

				$base_url=base_url();
				$currentyear=date('Y');
				$email_message=str_replace('{break}','<br/>',$email_message);
				$email_message=str_replace('{base_url}',$base_url,$email_message);
				$email_message=str_replace('{year}',$currentyear,$email_message);
				$email_message=str_replace('{companyname}',$companyname,$email_message);
				$email_message=str_replace('{otherinformation}',$otherinformation,$email_message);
				$str=$email_message; //die;
				//print_r($str);die;
				// $email_config = Array(
				// 	'protocol'  => 'smtp',
				// 	'smtp_host' => 'relay-hosting.secureserver.net',
				// 	'smtp_port' => '465',
				// 	'smtp_user' => 'binny@bluegreytech.co.in',
				// 	'smtp_pass' => 'Binny@123',
				// 	'mailtype'  => 'html',
				// 	'starttls'  => true,
				// 	'newline'   => "\r\n",
				// 	'charset'=>'utf-8',
				// 	'header'=> 'MIME-Version: 1.0',
				// 	'header'=> 'Content-type:text/html;charset=UTF-8',
				// 	);
				// $this->load->library('email', $email_config);

				$config['protocol']='smtp';
				$config['smtp_host']='ssl://smtp.googlemail.com';
				$config['smtp_port']='465';
				$config['smtp_user']='bluegreyindia@gmail.com';
				$config['smtp_pass']='Test@123';
				$config['charset']='utf-8';
				$config['newline']="\r\n";
				$config['mailtype'] = 'html';								
				$this->email->initialize($config);
				
				$body =$str;
				$this->email->from('binny@bluegreytech.co.in'); 
				$this->email->to($companyemail);		
				$this->email->subject('Quotation send to company');
				$this->email->message($body);
				$this->email->attach($file_name);
				if($this->email->send())
				{
					$this->session->set_flashdata('success','Email send Successfully!');	
					redirect('Invoice/quotation_view/'.$quotationid);
				}else
				{
					$this->session->set_flashdata('error', 'Email funaction was not working!');	
					redirect('Invoice/quotation_view/'.$quotationid);
				}
	}

// 	public function index()
// 	{
// 		if(!check_admin_authentication()){ 
// 			redirect(base_url('Login'));
// 		}
// 		if($_POST!='')
// 		{	
// 			$option=$this->input->post('option');
// 			$keyword=$this->input->post('keyword');
// 			$keyword2=$this->input->post('keyword2');
// 			$keyword3=$this->input->post('keyword3');
// 			$keyword4=$this->input->post('keyword4');
// 			if($option!='' && $keyword!='')
// 			{	$option=$this->input->post('option');
// 				$data['invoiceData'] = $this->Invoice_model->search($option,$keyword);
// 			}
// 			else if($option!='' && $keyword2!='')
// 			{	$option=$this->input->post('option');
// 				$data['invoiceData'] = $this->Invoice_model->searchbystatus($option,$keyword2);
// 			}	
// 			else if($option!='' && $keyword3!='' && $keyword4!='')
// 			{	$option=$this->input->post('option');
// 				$data['invoiceData'] = $this->Invoice_model->searchbydate($option,$keyword3,$keyword4);
// 			}	
// 			else
// 			{
// 				$data['invoiceData']=$this->Invoice_model->list_companyinvoice();
// 			}
// 		$data['companyData'] = $this->Invoice_model->list_company();

// 			//echo "<pre>";	print_r($data['invoiceData']);die;
// 		$this->load->view('Invoice/invoice-reports',$data);

// 	}

// }

	public function quotation_list()
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
			$keyword6=$this->input->post('keyword6');
			if($option!='' && $keyword!='')
			{	$option=$this->input->post('option');
				$data['qutationData'] = $this->Invoice_model->searchquot_com_type($option,$keyword);
			}
			else if($option!='' && $keyword2!='')
			{	$option=$this->input->post('option');
				$data['qutationData'] = $this->Invoice_model->searchby_quo_comp($option,$keyword2);
			}
			else if($option!='' && $keyword3!='')
			{	$option=$this->input->post('option');
				$data['qutationData'] = $this->Invoice_model->searchby_quo_email($option,$keyword3);
			}	
			else if($option!='' && $keyword4!='')
			{	$option=$this->input->post('option');
				$data['qutationData'] = $this->Invoice_model->searchby_quo_cont($option,$keyword4);
			}	
			else if($option!='' && $keyword5!='' && $keyword6!='')
			{	$option=$this->input->post('option');
				$data['qutationData'] = $this->Invoice_model->searchby_quo_date($option,$keyword5,$keyword6);
			}	
			else
			{
				$data['qutationData']=$this->Invoice_model->list_quotation();
			}	
			$data['companytypeData'] = $this->Invoice_model->list_companytype();
			$this->load->view('Quotation/quotationlist',$data);
		}
	}

	public function add_quotation()
	{	
		$data=array();
		$data['quotationid']=$this->input->post('quotationid');
		$data['companytypeid']=$this->input->post('companytypeid');
		$data['companytype']=$this->input->post('companytype');
		$data['companyname']=$this->input->post('companyname');
		$data['companyemail']=$this->input->post('companyemail');
		$data['comcontactnumber']=$this->input->post('comcontactnumber');
		$data['quotationdate']=$this->input->post('quotationdate');
		$data['companyaddress']=$this->input->post('companyaddress');
		$data['otherinformation']=$this->input->post('otherinformation');
		$data['totalamount']=$this->input->post('totalamount');
		$data['quotationdetailid']=$this->input->post('quotationdetailid');
		if($_POST){	
			if($this->input->post('quotationid')==''){			
				$result=$this->Invoice_model->add_quotation();	
				if($result==1)
				{
					$this->session->set_flashdata('success', 'Your data has been Inserted Successfully!');
					redirect('Invoice/quotation_list');
				}
				else
				{
					$this->session->set_flashdata('error', 'Your data was not Insert!');
					redirect('Invoice/quotation_list');
				}
			}
			else
			{
				$result=$this->Invoice_model->update_quotation();
				if($result==1)
				{
					$this->session->set_flashdata('success', 'Record has been Updated Successfully!');
					redirect('Invoice/quotation_list');
				}
				else
				{
					$this->session->set_flashdata('error', 'Your data was not Insert!');
					redirect('Invoice/quotation_list');
				}

			}
	} 
		$data['companytypeData']=$this->Invoice_model->list_companytype();
		//$data['companyData'] = $this->Invoice_model->list_company();
		$this->load->view('Quotation/quotation',$data);
	}

	function editquotation($quotationid)
	{
		if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
		}
		$data=array();
		$result=$this->Invoice_model->get_quotation($quotationid);	
		//echo "<br>";print_r($result);die;
		$data['quotationid']=$result['quotationid'];
		$data['companytypeid']=$result['companytypeid'];
		$data['companytype']=$result['companytype'];
		$data['companyname']=$result['companyname'];
		$data['companyemail']=$result['companyemail'];
		$data['comcontactnumber']=$result['comcontactnumber'];
		$data['quotationdate']=$result['quotationdate'];
		$data['companyaddress']=$result['companyaddress'];
		$data['otherinformation']=$result['otherinformation'];
		$data['totalamount']=$result['totalamount'];
		$data['quotationdetailid']=$result['quotationdetailid'];
		$data['companytypeData']=$this->Invoice_model->list_companytype();

		$data['quotationdetailData']=$this->Invoice_model->list_quotationdetail($quotationid);
		//echo "<pre>";print_r($data['quotationdetailData']);die;
		$this->load->view('Quotation/quotation',$data);

	}

	function delete_quotation(){
		if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
		}
			$quotationid=$this->input->post('quotationid');
			$data=array(
				'isdelete'=>'1',
				'isactive'=>'Inactive'
				);
			$this->db->where("quotationid",$quotationid);
			$result=$this->db->update('tblquotation',$data);
			if($result)
			{
				$this->session->set_flashdata('success', 'Qutation was delete successfully!');
				redirect('Invoice/qutation_list');
			}
			else
			{
				$this->session->set_flashdata('error', 'Qutation was not delete!');
				redirect('Invoice/qutation_list');
			}

	}


	function delete_quotaiondetail(){
		if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
		}
			$quotationdetailid=$this->input->post('quotationdetailid');
			$data=array(
				'isdelete'=>'1',
				'isactive'=>'Inactive'
				);
			$this->db->where("quotationdetailid",$quotationdetailid);
			$result=$this->db->update('tblquotationdetail',$data);
			if($result)
			{
				$this->session->set_flashdata('success', 'Qutation was delete successfully!');
				redirect('Invoice/qutation_list');
			}
			else
			{
				$this->session->set_flashdata('error', 'Qutation was not delete!');
				redirect('Invoice/qutation_list');
			}

	}


	public function quotation_view($quotationid)
	{
		$data=array();
		$result=$this->Invoice_model->get_companyquotation($quotationid);	
		//echo "<br>";print_r($result);die;
		$data['quotationid']=$result['quotationid'];
		$data['billid']=$result['billid'];
		
		$data['companytypeid']=$result['companytypeid'];
		$data['companytype']=$result['companytype'];
		$data['companyname']=$result['companyname'];
		$data['companyemail']=$result['companyemail'];
		$data['comcontactnumber']=$result['comcontactnumber'];
		$data['quotationdate']=$result['quotationdate'];
		$data['companyaddress']=$result['companyaddress'];
		$data['otherinformation']=$result['otherinformation'];
		$data['totalamount']=$result['totalamount'];
		
		$data['quotationtData']=$this->Invoice_model->list_companyquotation($quotationid);
		//echo "<br>";print_r($data['quotationtData']);die;
		$this->load->view('Quotation/quotation-view',$data);
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

	function delete_invoice()
	{
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



