<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller 
{
	// public function __construct() {
    //     parent::__construct();
	// 	// $this->load->model('Adminmaster_model');
	// }
	
	public function index()
	{
		$this->load->view('Client/clients');
	}

	public function clientprofile()
	{
		$this->load->view('Client/client-profile');
	}
	
	
}
