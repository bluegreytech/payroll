<?php

class Claim_model extends CI_Model
 {
	function getclaimdet()
	{

		 $this->db->select("*");
		$this->db->from("tblclaim as c");
		$this->db->join('tblemp as e','e.emp_id=c.emp_id');
		$this->db->where("c.Is_deleted",'0');
		$this->db->where("c.company_id",$this->session->userdata('companyid'));
		$this->db->group_by("c.claim_id");
		$query=$this->db->get();	
		//echo $this->db->last_query();die;
		return $query->result();

	}
	function emplist(){
		$this->db->select('*');
		$this->db->from('tblemp');
		$this->db->where('Is_deleted','0');		
		$this->db->where('companyid',$this->session->userdata('companyid'));
		$this->db->order_by('emp_id','Desc');
		$query=$this->db->get();
		$res=$query->result();
		return $res;
	}
	function claim_insert(){
		$upload_proof='';
       
		if(isset($_FILES['upload_proof']) &&  $_FILES['upload_proof']['name']!='')
        {
			$this->load->library('upload');
			$rand=rand(0,100000);			  
			$_FILES['userfile']['name']     =   $_FILES['upload_proof']['name'];
			$_FILES['userfile']['type']     =   $_FILES['upload_proof']['type'];
			$_FILES['userfile']['tmp_name'] =   $_FILES['upload_proof']['tmp_name'];
			$_FILES['userfile']['error']    =   $_FILES['upload_proof']['error'];
			$_FILES['userfile']['size']     =   $_FILES['upload_proof']['size'];
   
			$config['file_name'] = $rand.'proof';			
			$config['upload_path'] = base_path().'upload/claim_proof/';		
			$config['allowed_types'] = 'jpg|jpeg|gif|png|bmp|pdf';  
 
             $this->upload->initialize($config);
 
              if (!$this->upload->do_upload())
			  {
				$error =  $this->upload->display_errors();
				echo "<pre>";print_r($error);
			  } 
           	  $picture = $this->upload->data();	   
             
			
			$upload_proof=$picture['file_name'];		
			if($this->input->post('pre_upload_proof')!='')
				{
					if(file_exists(base_path().'upload/claim_proof/'.$this->input->post('pre_upload_proof')))
					{
						$link=base_path().'upload/claim_proof/'.$this->input->post('pre_upload_proof');
						unlink($link);
					}
					
					
				}
		} else {
			if($this->input->post('pre_upload_proof')!='')
			{
				$upload_proof=$this->input->post('pre_upload_proof');
			}
		}
 $data = array(
	    'claim_type' => trim($this->input->post('claim_type')),	
	     'upload_proof' => $upload_proof,	
	     'from_date' => date('Y-m-d'),
	     'month_year' => $this->input->post('month_year'),
	     'reimb_type' => $this->input->post('reimb_type'),
	     'amount' => $this->input->post('amount'),
	     'reimb_satus' => $this->input->post('reimb_satus'),
	      'emp_id' => $this->input->post('emp_id'),
	       'company_id' => $this->session->userdata('companyid'),
	       'remarks' => $this->input->post('remarks')
			
		);
		//echo "<pre>";print_r($data);die;	
                
        $res=$this->db->insert('tblclaim',$data);
         return $res;	
	}
	function claim_update(){
		
	$upload_proof='';
       
		if(isset($_FILES['upload_proof']) &&  $_FILES['upload_proof']['name']!='')
        {
			$this->load->library('upload');
			$rand=rand(0,100000);			  
			$_FILES['userfile']['name']     =   $_FILES['upload_proof']['name'];
			$_FILES['userfile']['type']     =   $_FILES['upload_proof']['type'];
			$_FILES['userfile']['tmp_name'] =   $_FILES['upload_proof']['tmp_name'];
			$_FILES['userfile']['error']    =   $_FILES['upload_proof']['error'];
			$_FILES['userfile']['size']     =   $_FILES['upload_proof']['size'];
   
			$config['file_name'] = $rand.'proof';			
			$config['upload_path'] = base_path().'upload/claim_proof/';		
			$config['allowed_types'] = 'jpg|jpeg|gif|png|bmp|pdf';  
 
             $this->upload->initialize($config);
 
              if (!$this->upload->do_upload())
			  {
				$error =  $this->upload->display_errors();
				echo "<pre>";print_r($error);
			  } 
           	  $picture = $this->upload->data();	   
             
			
			$upload_proof=$picture['file_name'];		
			if($this->input->post('pre_upload_proof')!='')
				{
					if(file_exists(base_path().'upload/claim_proof/'.$this->input->post('pre_upload_proof')))
					{
						$link=base_path().'upload/claim_proof/'.$this->input->post('pre_upload_proof');
						unlink($link);
					}
					
					
				}
		} else {
			if($this->input->post('pre_upload_proof')!='')
			{
				$upload_proof=$this->input->post('pre_upload_proof');
			}
		}
 $data = array(
	    'claim_type' => trim($this->input->post('claim_type')),	
	     'upload_proof' => $upload_proof,	
	     'from_date' => date('Y-m-d'),
	     'month_year' => $this->input->post('month_year'),
	     'reimb_type' => $this->input->post('reimb_type'),
	     'amount' => $this->input->post('amount'),
	     'reimb_satus' => $this->input->post('reimb_satus'),
	      'emp_id' => $this->input->post('emp_id'),
	       'company_id' => $this->session->userdata('companyid'),
	       'remarks' => $this->input->post('remarks')
			
		);
		//echo "<pre>";print_r($data);die;	
          $this->db->where('claim_id',$this->input->post('claim_id')) ;     
        $res=$this->db->update('tblclaim',$data);
         return $res;
	}
	function getdata($cid){
$this->db->select('*');
		$this->db->from('tblclaim');
		$this->db->where('Is_deleted','0');		
		$this->db->where('company_id',$this->session->userdata('companyid'));
		$this->db->where('claim_id',$cid);
		$this->db->order_by('claim_id','Desc');
		$query=$this->db->get();
		$res=$query->row_array();
		return $res;
	}
}