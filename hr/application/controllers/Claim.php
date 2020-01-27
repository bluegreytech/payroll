<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Claim extends CI_Controller 
{
	public function __construct() {
        parent::__construct();
		 $this->load->model('claim_model');
	}
	public function claim_det(){
		$data['result']=$this->claim_model->getclaimdet();
		$this->load->view('claim/claim_list',$data);
	}
	public function delete_claim(){
		if(!check_admin_authentication()){ 

			redirect(base_url('Login'));

		}

		$id=$this->input->post('id');

		$data=array(

			'Is_deleted'=>'1'

			

				);

		$this->db->where("claim_id",$id);

		$result=$this->db->update('tblclaim',$data);

		

	}
	public function addclaim(){
		if(!check_admin_authentication()){ 
			redirect(base_url());
		}   
			$data=array();
			$data['activeTab']="addclaim";	
			$this->load->library("form_validation");
			$this->form_validation->set_rules('claim_type', 'Type of claim ', 'required');		
			
		   
		   
		if($this->form_validation->run() == FALSE){			
			if(validation_errors())
			{
				$data["error"] = validation_errors();
				echo "<pre>";print_r($data["error"]);die;
			}else{
				$data["error"] = "";
			}
           	$data['redirect_page']="claim_det";
           	$data['claim_id']=$this->input->post('claim_id');	
			$data['claim_type']=$this->input->post('claim_type');	
			$data['upload_proof']=$this->input->post('upload_proof');				
			$data['from_date']=$this->input->post('from_date');
			$data['month_year']=$this->input->post('month_year');
			$data['reimb_type']=$this->input->post('reimb_type');
			$data['amount']=$this->input->post('amount');
			$data['reimb_satus']=$this->input->post('reimb_satus');			
			$data['remarks']=$this->input->post('remarks');
			$data['emp_id']=$this->input->post('emp_id');
			$data['company_id']=$this->input->post('company_id');
			
			}
			else
			{
				if($this->input->post("claim_id")!="")
				{	
					
					$this->claim_model->claim_update();
					$this->session->set_flashdata('success', 'Record has been Updated Succesfully!');
					redirect('Claim/claim_det');
				}
				else
				{   
					$this->claim_model->claim_insert();
					$this->session->set_flashdata('success', 'Record has been Inserted Succesfully!');
					redirect('Claim/claim_det');
				}				
			}		
		
		$data['emplist']=$this->claim_model->emplist();
		$this->load->view('claim/addclaim',$data);
	}
	function edit_claim($cid){
	if(!check_admin_authentication()){ 
			redirect(base_url());
		}else{
			$data=array();
			$data['emplist']=$this->claim_model->emplist();		  
			//$data['activeTab']="Editemp";	
			$result=$this->claim_model->getdata($cid);
			//print_r($result);				
			$data['claim_id']=$result['claim_id'];
			$data['claim_type']=$result['claim_type'];
			$data['upload_proof']=$result['upload_proof'];
			$data['from_date']=$result['from_date'];
			$data['month_year']=$result['month_year'];
			$data['reimb_type']=$result['reimb_type'];	
			$data['amount']=$result['amount'];
			$data['reimb_satus']=$result['reimb_satus'];	
			$data['remarks']=$result['remarks'];
			$data['emp_id']=$result['emp_id'];
			$data['company_id']=$result['company_id'];				
			
					
			$data['redirect_page']="claim_det";
			

			$this->load->view('claim/addclaim',$data);
	}
}
}