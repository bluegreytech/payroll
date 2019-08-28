<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice extends CI_Controller 
{
	// public function __construct() {
    //     parent::__construct();
	// 	// $this->load->model('Adminmaster_model');
	// }
	
	public function index()
	{
		$this->load->view('Invoice/invoice-reports');
	}

	public function edit_invoice()
	{
		$this->load->view('Invoice/edit-invoice');
	}

	public function invoice_view()
	{
		$this->load->view('Invoice/invoice-view');
	}
	
	
}
