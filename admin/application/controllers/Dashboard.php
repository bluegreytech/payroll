<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller {
	public function __construct()
	{
      	parent::__construct();
		$this->load->model('Dashboard_model');
    }
	function index()
    {
		if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
		}
		
		// $query =  $this->db->query("SELECT COUNT(companyid) as count,MONTHNAME(createdon) as month_name FROM tblcompany WHERE YEAR(createdon) = '" . date('Y') . "'
		// GROUP BY YEAR(createdon),MONTH(createdon)"); 
   
		// $record = $query->result();
		// $data = [];
   
		// foreach($record as $row)
		// {
		// 	$data['label'][] = $row->month_name;
		// 	$data['data'][] = (int) $row->count;
		// }
		// $data['chart_data'] = json_encode($data);


		$data['empData']=$this->Dashboard_model->list_employee();
		$data['adminData']=$this->Dashboard_model->list_admin();
		$data['hrData']=$this->Dashboard_model->list_hr();
		$data['companyData']=$this->Dashboard_model->list_company();
		$data['companyDataDetail']=$this->Dashboard_model->list_company_detail();
		$data['hrDataDetail']=$this->Dashboard_model->list_hr_detail();
		$data['invoiceData']=$this->Dashboard_model->list_companyinvoice();
		$data['qutationData']=$this->Dashboard_model->list_quotation();
		$data['invoiceTotal']=$this->Dashboard_model->list_companyinvoicetotal();
		$data['qutationTotal']=$this->Dashboard_model->list_companyqutationtotal();
		
		
		$data['companyDataCount']=$this->Dashboard_model->list_company_count();
		//echo "<pre>";print_r($data['companyDataCount']);die;
		$this->load->view('dashboard/dashboard',$data);		

    }


	
	


}



