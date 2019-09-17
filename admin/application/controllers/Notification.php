<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Notification extends CI_Controller 
{

	public function __construct() {

        parent::__construct();
		$this->load->model('Notification_model');

	}

	

	public function index()
	{
		$data['notificationData']=$this->Notification_model->list_notification();
		//print_r($data['notificationData']);die;
		$this->load->view('notification/notiificaltionlist',$data);
	}

	

	

}

