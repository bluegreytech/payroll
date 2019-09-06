<?php

class Employee_model extends CI_Model
 {
	function insertdata()
	{	
		 
		if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
		}	

			$this->db->select('*');
			$this->db->where('EmailAddress',$this->input->post('EmailAddress'));
			$query=$this->db->get('tbluser');
			if($query->num_rows() > 0)
			{
					return 3;
			}
			$code=rand(12,123456789);
			$FullName=$this->input->post('FullName');
			$EmailAddress=$this->input->post('EmailAddress');
			$DateofBirth=$this->input->post('DateofBirth');
			$Contact=$this->input->post('Contact');
			$Gender=$this->input->post('Gender');
			$Address=$this->input->post('Address');
			$PinCode=$this->input->post('PinCode');
			$City=$this->input->post('City');
			$IsActive=$this->input->post('IsActive');
			$companyid=$this->input->post('companyid');
			$data=array( 
			'hr_type'=>1,
			'FullName'=>$FullName,
			'EmailAddress'=>$EmailAddress, 
			'Password'=>md5($code),
			'Address'=>$Address,
			'Contact'=>$Contact,
			'DateofBirth'=>$DateofBirth, 
			'City'=>$City,
			'PinCode'=>$PinCode,
			'Gender'=>$Gender,
			'IsActive'=>$IsActive,
			'CreatedOn'=>date('Y-m-d')
			);
			//print_r($data);die;
			$this->db->insert('tbluser',$data);
			return 1;
			$insert_id = $this->db->insert_id();
			$data2=array( 
				'hr_id'=>$insert_id,
				'companyid'=>$companyid,
				'isactive'=>$IsActive,
				'createdby'=>1,
				'createdon'=>date("Y-m-d h:i:s")
				);
			$this->db->insert('tblhr',$data2);	
		
			if($insert_id!=''){

				$this->db->select('t1.*,t2.*,t3.*');
				$this->db->from('tbluser as t1');
				$this->db->join('tblhr as t2', 't1.UserId = t2.UserId', 'LEFT');
				$this->db->join('tblcompany as t3', 't2.companyid = t3.companyid', 'LEFT');
				$this->db->where('t1.UserId',$insert_id);
				$smtp2 = $this->db->get();	
				foreach($smtp2->result() as $rows) {
					$UserId = $rows->UserId;
					$FirstName = $rows->FirstName;
					$LastName = $rows->LastName;
					$EmailAddress = $rows->EmailAddress;
					$Password = $rows->Password;
					$companyid = $rows->companyid;
					$companyname = $rows->companyname;
				}


					$email_template=$this->db->query("select * from ".$this->db->dbprefix('tblemail_template')." where task='Hr registration complete'");
					$email_temp=$email_template->row();
					$email_address_from=$email_temp->from_address;
					$email_address_reply=$email_temp->reply_address;
					$email_subject=$email_temp->subject;        
					$email_message=$email_temp->message;
					
					$username =$rows->FirstName.' '.$LastName;
					$EmailAddress = $rows->EmailAddress;
					$companyname =$rows->companyname;
					$comemailaddress = $rows->comemailaddress;
		
					$base_url=base_url();
					$login_link=  '<a href="'.base_url('Login').'">Click Here</a>';
					$currentyear=date('Y');
					$email_message=str_replace('{break}','<br/>',$email_message);
					$email_message=str_replace('{base_url}',$base_url,$email_message);
					$email_message=str_replace('{year}',$currentyear,$email_message);
					$email_message=str_replace('{username}',$username,$email_message);
					$email_message=str_replace('{EmailAddress}',$EmailAddress,$email_message);
					$email_message=str_replace('{Password}',$code,$email_message);
					$email_message=str_replace('{companyname}',$companyname,$email_message);
					$email_message=str_replace('{comemailaddress}',$comemailaddress,$email_message);
					$email_message=str_replace('{login_link}',$login_link,$email_message);
					$str=$email_message; //die;

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
					$this->email->from('bluegreyindia@gmail.com');
					$this->email->to($EmailAddress);		
					$this->email->subject('Hr registration complete To Payroll System');
					$this->email->message($body);
					if($this->email->send())
					{
						return 1;
					}else
					{
						return 2;
					}	
			}
			
	}



	

	function emp_list()
	{
		 
		if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
		}
		$this->db->select('t1.*,t2.companyname');
		$this->db->from('tblemployee as t1');
		$this->db->join('tblcompany as t2', 't1.companyid = t2.companyid', 'LEFT');
		$this->db->where('t1.isdelete!=',1);
		$r=$this->db->get();
		$res = $r->result();
		return $res;	
	}



	function search($option,$keyword)
	{
		 
		if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
		}
			$keyword = str_replace('-', ' ', $keyword);
			$this->db->select('t1.*,t2.companyname');
			$this->db->from('tblemployee as t1');
			$this->db->join('tblcompany as t2', 't1.companyid = t2.companyid', 'LEFT');
			$this->db->where('t1.isdelete!=',1);
			if($option == 'empfirstname')
			{
				$this->db->like('empfirstname',$keyword);
			}
			else if($option == 'companyname')
			{
					$this->db->like('companyname',$keyword);
			}
			else if($option == 'empemailaddress')
			{
					$this->db->like('empemailaddress',$keyword);
			}
			else if($option == 'contactnumber')
			{
				$this->db->where('contactnumber',$keyword);
			} 
			// 	$this->db->order_by('UserId','desc');
			    $query = $this->db->get();
			 if($query->num_rows() > 0)
			 {
				return $query->result();
			 }        
		}

	
	
		
	

	function getdata($hr_id){
		 
		if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
		}
			$this->db->select('t1.*,t2.*');
			$this->db->from('tblhr as t1');
			$this->db->join('tblcompany as t2', 't1.companyid = t2.companyid', 'LEFT');
			$this->db->where('t1.hr_id',$hr_id);
			$query = $this->db->get();
			return $query->row_array();
	}

	function updatehr()
	{		  
		 
		if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
		}   
		$hr_id=$this->input->post('hr_id');
		//  $hrid=$this->input->post('hrid');
		// $companyid=$this->input->post('companyid');
		
		$data=array(
			'hr_id'=>$this->input->post('hr_id'),
			'companyid'=>$this->input->post('companyid'),
			'FullName'=>$this->input->post('FullName'),
			'EmailAddress'=>$this->input->post('EmailAddress'),
			'DateofBirth'=>$this->input->post('DateofBirth'),
			'Contact'=>$this->input->post('Contact'),
			//'ProfileImage'=>$this->input->post('ProfileImage'),
			'Gender'=>$this->input->post('Gender'),
			'Address'=>$this->input->post('Address'),
			'PinCode'=>$this->input->post('PinCode'),
			'City'=>$this->input->post('City'),
			'IsActive'=>$this->input->post('IsActive')
				);
			// print_r($data);die;
			$this->db->where("hr_id",$hr_id);
			$this->db->update('tblhr',$data);	
			return 1;
			
			// if($hrid!=''){
			// 	$data2=array(
			// 		'companyid'=>$this->input->post('companyid')
			// 		  );
			// 		$this->db->where("hrid",$hrid);
			// 		$this->db->update('tblhr',$data2);
			// 		return 1;		
			// 	}
				      
	}


	


	function updatedata()
	{		
		 
		if(!check_admin_authentication()){ 
			redirect(base_url('Login'));
		}
		$UserId=$this->input->post('UserId');
		
		// if(isset($_FILES['ProfileImage']) &&  $_FILES['ProfileImage']['name']!='')
		// {	
		// 	// echo base_path();
		// 	// print_r($_FILES['ProfileImage']);die;
		//   $this->load->library('upload');
		//   $rand=rand(0,100000); 
  
		//   $_FILES['userfile']['name']     =   $_FILES['ProfileImage']['name'];
		//   $_FILES['userfile']['type']     =   $_FILES['ProfileImage']['type'];
		//   $_FILES['userfile']['tmp_name'] =   $_FILES['ProfileImage']['tmp_name'];
		//   $_FILES['userfile']['error']    =   $_FILES['ProfileImage']['error'];
		//   $_FILES['userfile']['size']     =   $_FILES['ProfileImage']['size'];   
		//   $config['file_name'] = $rand;      
		//   $config['upload_path'] = base_path().'upload/UserProfile/';      
		//   $config['allowed_types'] = 'jpg|jpeg|gif|png|bmp';
		//   $this->upload->initialize($config);
  
		//   if (!$this->upload->do_upload())
		//   {
		//   $error =  $this->upload->display_errors();
		// 	echo "<pre>"; print_r($error);die; 
		//   }        
  
		//   echo $picture = $this->upload->data();       
		//   $this->load->library('image_lib');       
		//   $this->image_lib->clear();  
		// }
		// $ProfileImage=$this->input->post('ProfileImage');
		// print_r($ProfileImage);die;
		// $config['upload_path']=base_path().'uploads/UserProfile/';
		// $config['allowed_types']='jpg|jpeg|png';
		// $config['max_size']='10000000';
		// $this->load->library('upload',$config);
		// if($this->upload->do_upload('ProfileImage'))
		// {
		// 	$s=$this->upload->data();	
		// 	$filename=$s['file_name'];
		// }
		// print_r($filename);die;

		$data=array(
			'UserId'=>$this->input->post('UserId'),
			'FirstName'=>$this->input->post('FirstName'),
			'LastName'=>$this->input->post('LastName'),
			//'EmailAddress'=>$this->input->post('EmailAddress'),
			'DateofBirth'=>$this->input->post('DateofBirth'),
			'PhoneNumber'=>$this->input->post('PhoneNumber'),
			'Gender'=>$this->input->post('Gender'),
		//	'ProfileImage'=>$this->input->post('ProfileImage'),
			'Address'=>$this->input->post('Address')
			//'PinCode'=>$this->input->post('PinCode')
				);
				//print_r($data);die;
			$this->db->where("UserId",$UserId);
			$this->db->update('tbluser',$data);	
			return 1;	      
	}




}
