<?php

class Adminmaster_model extends CI_Model
 {
	function insertdata()
	{		
			$this->db->select('*');
			$this->db->where('EmailAddress',$this->input->post('EmailAddress'));
			$query=$this->db->get('tbladmin');
			if($query->num_rows() > 0)
			{
					return 3;
			}
			$code=rand(12,123456789);
			$RoleId=$this->input->post('RoleId');
			$FirstName=$this->input->post('FirstName');
			$LastName=$this->input->post('LastName');
			$EmailAddress=$this->input->post('EmailAddress');
			$DateofBirth=$this->input->post('DateofBirth');
			$PhoneNumber=$this->input->post('PhoneNumber');
			$Gender=$this->input->post('Gender');
			$Address=$this->input->post('Address');
			$PinCode=$this->input->post('PinCode');
			$City=$this->input->post('City');
			$data=array( 
			'RoleId'=>$RoleId,
			'FirstName'=>$FirstName,
			'LastName'=>$LastName,
			'EmailAddress'=>$EmailAddress, 
			'DateofBirth'=>$DateofBirth, 
			'Password'=>md5($code),
			'PhoneNumber'=>$PhoneNumber,
			'Gender'=>$Gender,
			'Address'=>$Address,
			'PinCode'=>$PinCode,
			'City'=>$City,
			'IsActive'=>1,
			'CreatedOn'=>date('Y-m-d')
			);
			//print_r($data);die;
			$this->db->insert('tbladmin',$data);
			return 1;
			$insert_id = $this->db->insert_id();

				$this->db->select('*');
				$this->db->where('AdminId',$insert_id);
				$smtp2 = $this->db->get('tbladmin');	
				foreach($smtp2->result() as $rows) {
					$AdminId = $rows->AdminId;
					$FirstName = $rows->FirstName;
					$LastName = $rows->LastName;
					$EmailAddress = $rows->EmailAddress;
					$Password = $rows->Password;
				}


				$email_template=$this->db->query("select * from ".$this->db->dbprefix('tblemail_template')." where task='Admin registration'");
                            $email_temp=$email_template->row();
                            $email_address_from=$email_temp->from_address;
                            $email_address_reply=$email_temp->reply_address;
                            $email_subject=$email_temp->subject;        
							$email_message=$email_temp->message;
							
                            $username =$rows->FirstName.''.$LastName;
                            $Password = $rows->Password;
                            $EmailAddress = $rows->EmailAddress;
                           // $email_to= $EmailAddress;
                   
                    $base_url=base_url();
                    $currentyear=date('Y');
                   
                    $email_message=str_replace('{break}','<br/>',$email_message);
                    $email_message=str_replace('{base_url}',$base_url,$email_message);
                    $email_message=str_replace('{year}',$currentyear,$email_message);
                    $email_message=str_replace('{username}',$username,$email_message);
					$email_message=str_replace('{EmailAddress}',$EmailAddress,$email_message);
					$email_message=str_replace('{Password}',$code,$email_message);
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
					$this->email->subject('You are register complete');
					$this->email->message($body);
                    if($this->email->send())
					{	
						return 1;
					}else
					{
						return 2;
					}	
                  
            
	}


	function getuser(){
		$r=$this->db->select('*')
		// $r=$this->db->select('AdminId,RoleId,CONCAT(FirstName ,LastName) AS FirstName,EmailAddress,DateofBirth,PhoneNumber,ProfileImage,Gender,Address,PinCode,CountryId,StateId,City,IsActive')
					->from('tbladmin')
					->where_in('RoleId="1" AND RoleId="2"')
					->or_where('IsDelete!=',1)
					->get();
		$res = $r->result();
		return $res;
	}

	

	function search($option,$keyword)
	{
			$keyword = str_replace('-', ' ', $keyword);
			// $this->db->select('AdminId,RoleId,CONCAT(FirstName ,LastName) AS FirstName,EmailAddress,DateofBirth,PhoneNumber,ProfileImage,Gender,Address,PinCode,CountryId,StateId,City,IsActive');
			$this->db->select('*');
			$this->db->from('tbladmin');
			$this->db->where('RoleId="1" AND RoleId="2"');
			$this->db->or_where('IsDelete!=',1);
				if($option == 'FirstName')
				{
				// echo $keyword; 
					$this->db->like('FirstName',$keyword);
				}
				else if($option == 'EmailAddress')
				{
						$this->db->like('EmailAddress',$keyword);
				}
				else if($option == 'PhoneNumber')
				{
					$this->db->where('PhoneNumber',$keyword);
				} 
			   	$this->db->order_by('AdminId','desc');
				// if($type == "result")
				// {
				// 	$this->db->limit($limit,$offset);
				// }
			    $query = $this->db->get();
				// echo $this->db->last_query();
				// echo "<pre>";print_r($query->result());die;
			 if($query->num_rows() > 0)
			 {
				//    if($type == "count"){
				//  // echo "hello count";
				// 	 return $query->num_rows();
				//  }else{
				// 	return $query->result();
				//  } 
				return $query->result();
			 }        
		}


	function getdata($id){
		$query=$this->db->select('*')
			->from('tbladmin')
			->where('AdminId',$id)
			->get();
			return $query->row_array();
	}

	function updateadmin()
	{	
		     
		$AdminId=$this->input->post('AdminId');
		$data=array(
			'AdminId'=>$this->input->post('AdminId'),
			'RoleId'=>$this->input->post('RoleId'),
			'FirstName'=>$this->input->post('FirstName'),
			'LastName'=>$this->input->post('LastName'),
			'EmailAddress'=>$this->input->post('EmailAddress'),
			'DateofBirth'=>$this->input->post('DateofBirth'),
			'PhoneNumber'=>$this->input->post('PhoneNumber'),
			'ProfileImage'=>$this->input->post('ProfileImage'),
			'Gender'=>$this->input->post('Gender'),
			'Address'=>$this->input->post('Address'),
			'PinCode'=>$this->input->post('PinCode'),
			'City'=>$this->input->post('City'),
			'IsActive'=>$this->input->post('IsActive')
				);
			 //print_r($data);die;
			$this->db->where("AdminId",$AdminId);
			$this->db->update('tbladmin',$data);	
			return 1;	      
	}


	


	function updatedata()
	{
		//echo "<pre>";print_r($_FILES);die;
		 $user_image='';
         //$image_settings=image_setting();
		  if(isset($_FILES['ProfileImage']) &&  $_FILES['ProfileImage']['name']!='')
         {
             $this->load->library('upload');
             $rand=rand(0,100000); 
			  
			$_FILES['userfile']['name']     =   $_FILES['ProfileImage']['name'];
			$_FILES['userfile']['type']     =   $_FILES['ProfileImage']['type'];
			$_FILES['userfile']['tmp_name'] =   $_FILES['ProfileImage']['tmp_name'];
			$_FILES['userfile']['error']    =   $_FILES['ProfileImage']['error'];
			$_FILES['userfile']['size']     =   $_FILES['ProfileImage']['size'];
   
			$config['file_name'] = $rand.'Admin';			
			$config['upload_path'] = base_path().'upload/admin_orig/';		
			$config['allowed_types'] = 'jpg|jpeg|gif|png|bmp';  
 
             $this->upload->initialize($config);
 
              if (!$this->upload->do_upload())
			  {
				$error =  $this->upload->display_errors();
				echo "<pre>";print_r($error);die;
			  } 
           	  $picture = $this->upload->data();	   
              $this->load->library('image_lib');		   
              $this->image_lib->clear();
			  $gd_var='gd2';

              $this->image_lib->initialize(array(
				'image_library' => $gd_var,
				'source_image' => base_path().'upload/admin_orig/'.$picture['file_name'],
				'new_image' => base_path().'upload/admin/'.$picture['file_name'],
				'maintain_ratio' => FALSE,
				'quality' => '100%',
				'width' => 300,
				'height' => 300
			 ));
			
			
			if(!$this->image_lib->resize())
			{
				$error = $this->image_lib->display_errors();
			}
			
			$user_image=$picture['file_name'];
		
			
		
			if($this->input->post('pre_profile_image')!='')
				{
					if(file_exists(base_path().'upload/admin/'.$this->input->post('pre_profile_image')))
					{
						$link=base_path().'upload/admin/'.$this->input->post('pre_profile_image');
						unlink($link);
					}
					
					if(file_exists(base_path().'upload/admin_orig/'.$this->input->post('pre_profile_image')))
					{
						$link2=base_path().'upload/admin_orig/'.$this->input->post('pre_profile_image');
						unlink($link2);
					}
				}
			} else {
				if($this->input->post('pre_profile_image')!='')
				{
					$user_image=$this->input->post('pre_profile_image');
				}
			}
			//print_r($user_image);die;
		$data=array(
			'FirstName'=>$this->input->post('FirstName'),
			'LastName'=>$this->input->post('LastName'),
			'DateofBirth'=>$this->input->post('DateofBirth'),
			'PhoneNumber'=>$this->input->post('PhoneNumber'),
			'Gender'=>$this->input->post('Gender'),
		    'ProfileImage'=>$user_image,
			'Address'=>$this->input->post('Address'),
			'PinCode'=>$this->input->post('PinCode')
				);
			//echo "<pre>"; print_r($data);die;
			$this->db->where("AdminId",$this->session->userdata('AdminId'));
			$this->db->update('tbladmin',$data);	
			//echo $this->db->last_query();die;
			return 1;	      
	}

	public function changepass($AdminId) 
	{
		$this->db->select('*');				
		$this->db->where('AdminId',$AdminId);
		$this->db->where('Password',md5($this->input->post('Password')));
		$this->db->from('tbladmin');
		$query = $this->db->get();
		if ($query->num_rows() == 1) 
		{
			$pass_data = array(	
				'Password'=>md5($this->input->post('NewPassword')),	
			);
			$this->db->where('AdminId',$AdminId);
			$res = $this->db->update('tbladmin',$pass_data);
					$this->db->select('*');
					$this->db->where('AdminId',$AdminId);
					$smtp2 = $this->db->get('tbladmin');	
					foreach($smtp2->result() as $rows) {
						$AdminId = $rows->AdminId;
						$FirstName = $rows->FirstName;
						$LastName = $rows->LastName;
						$EmailAddress = $rows->EmailAddress;
					}

								$email_template=$this->db->query("select * from ".$this->db->dbprefix('tblemail_template')." where task='Change Password to admin'");
								$email_temp=$email_template->row();
								$email_address_from=$email_temp->from_address;
								$email_address_reply=$email_temp->reply_address;
								$email_subject=$email_temp->subject;        
								$email_message=$email_temp->message;
								
								$username =$rows->FirstName.' '.$LastName;
								$EmailAddress = $rows->EmailAddress;
					   
								$base_url=base_url();
								$currentyear=date('Y');
								$email_message=str_replace('{break}','<br/>',$email_message);
								$email_message=str_replace('{base_url}',$base_url,$email_message);
								$email_message=str_replace('{year}',$currentyear,$email_message);
								$email_message=str_replace('{username}',$username,$email_message);
								$email_message=str_replace('{EmailAddress}',$EmailAddress,$email_message);
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
								$this->email->subject('Change Password Admin To Payroll System');
								$this->email->message($body);
								if($this->email->send())
								{
									return 1;
								}else
								{
									return 2;
								}
		}
		else
		{
			return 2;
		}
 	}


}
