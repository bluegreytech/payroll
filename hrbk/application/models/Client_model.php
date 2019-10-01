<?php

class Client_model extends CI_Model
{
	public function __construct() {
        parent::__construct();
		// $this->load->model('Adminmaster_model');
	}
	
	public function index()
	{
		$this->load->view('Client/client');
	}

}
