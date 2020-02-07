<?php

class Adminmaster_model extends CI_Model
 {
	function insertdata()
	{		
			$this->db->select('*');
			$this->db->where('EmailAddress',$this->input->post('EmailAddress'));
			$query=$this->db->get('tbluser');
			if($query->num_rows() > 0)
			{
					return 3;
			}
			$code=rand(12,123456789);
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
			'RoleId'=>1,
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
			$this->db->insert('tbluser',$data);
			$insert_id = $this->db->insert_id();

				$this->db->select('*');
				$this->db->where('UserId',$insert_id);
				$smtp2 = $this->db->get('tbluser');	
				foreach($smtp2->result() as $rows) {
					$UserId = $rows->UserId;
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
		//$r=$this->db->select('*')
		$r=$this->db->select('UserId,RoleId,CONCAT(FirstName ,LastName) AS FirstName,EmailAddress,DateofBirth,PhoneNumber,ProfileImage,Gender,Address,PinCode,CountryId,StateId,City,IsActive')
					->from('tbluser')
					->where('RoleId',2)
					//->or_where('RoleId',2)
					->get();
		$res = $r->result();
		return $res;
	}

	

	function search($option,$keyword)
	{
			$keyword = str_replace('-', ' ', $keyword);
			$this->db->select('UserId,RoleId,CONCAT(FirstName ,LastName) AS FirstName,EmailAddress,DateofBirth,PhoneNumber,ProfileImage,Gender,Address,PinCode,CountryId,StateId,City,IsActive');
			$this->db->from('tbluser');
			//$this->db->select('*');
			$this->db->where('RoleId', 2);
			//$this->db->or_where('RoleId', 2);
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
			   	$this->db->order_by('UserId','desc');
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
	// function getdata($id){
	// 	$this->db->select('t1.UserId,t1.RoleId,t1.StreamTypeId,t1.FirstName,t1.LastName,t1.EmailAddress,t1.DateofBirth,t1.PhoneNumber,t1.Address,t1.ProfileImage,t1.Gender,t1.City,t1.IsActive,t2.EducationId,t2.EducationName,t2.UnivesityName,t2.BoardName,t2.ClassStream,t2.Course,t2.YearofGraduation,t3.UserFamilyId,t3.FatherName,t3.FatherProfession,t3.MotherName,t3.MotherProfession,t4.EducationSubjectId,t4.EducationSubjectName,t4.SubjectCgpa,t4.MarksheetImage,t5.GraduateScoreId,t5.ClassX,t5.ClassXII,t5.College,t6.StreamName');
	// 		$this->db->from('tbluser as t1');
	// 		$this->db->join('tblgraduation as t2', 't1.UserId = t2.UserId', 'LEFT');
	// 		$this->db->join('tbluserfamilydetail as t3', 't1.UserId = t3.UserId', 'LEFT');
	// 		$this->db->join('tblgraduationsubject as t4', 't1.UserId = t4.UserId', 'LEFT');
	// 		$this->db->join('tblgraduatescore as t5', 't1.UserId = t5.UserId', 'LEFT');
	// 		$this->db->join('tblstreamtype as t6', 't1.StreamTypeId = t6.StreamTypeId', 'LEFT');
	// 		$this->db->where('t1.UserId',$id);
	// 		$query=$this->db->get();
	// 		return $query->row_array();
	// }

	function getdata($id){
		$query=$this->db->select('*')
			->from('tbluser')
			->where('UserId',$id)
			->get();
			return $query->row_array();
	}

	function updateadmin()
	{	
		     
		$UserId=$this->input->post('UserId');
		$data=array(
			'UserId'=>$this->input->post('UserId'),
			'FirstName'=>$this->input->post('FirstName'),
			'LastName'=>$this->input->post('LastName'),
			'EmailAddress'=>$this->input->post('EmailAddress'),
			'DateofBirth'=>$this->input->post('DateofBirth'),
			'PhoneNumber'=>$this->input->post('PhoneNumber'),
			'ProfileImage'=>$this->input->post('ProfileImage'),
			'Gender'=>$this->input->post('Gender'),
			'Address'=>$this->input->post('Address'),
			'PinCode'=>$this->input->post('PinCode'),
			'City'=>$this->input->post('City')
				);
			// print_r($data);die;
			$this->db->where("UserId",$UserId);
			$this->db->update('tbluser',$data);	
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
				//	echo $this->session->userdata('UserId');die;
		$data=array(
			
			'FirstName'=>$this->input->post('FirstName'),
			'LastName'=>$this->input->post('LastName'),
			//'EmailAddress'=>$this->input->post('EmailAddress'),
			'DateofBirth'=>$this->input->post('DateofBirth'),
			'PhoneNumber'=>$this->input->post('PhoneNumber'),
			'Gender'=>$this->input->post('Gender'),
		    'ProfileImage'=>$user_image,
			'Address'=>$this->input->post('Address')
			//'PinCode'=>$this->input->post('PinCode')
				);
			//echo "<pre>"; print_r($data);die;
			$this->db->where("UserId",$this->session->userdata('UserId'));
			$this->db->update('tbluser',$data);	
			//echo $this->db->last_query();die;
			return 1;	      
	}

	public function changepass($UserId) 
	{
		$this->db->select('UserId,Password');				
		$this->db->where('UserId',$UserId);
		$this->db->where('Password',md5($this->input->post('Password')));
		$this->db->from('tbluser');
		$query = $this->db->get();
		if ($query->num_rows() == 1) 
		{
			$pass_data = array(	
				'Password'=>md5($this->input->post('NewPassword')),	
			);
			//print_r($pass_data);die;
			$this->db->where('UserId',$UserId);
			$res = $this->db->update('tbluser',$pass_data);

			$this->db->select('*');
					$this->db->where('UserId',$UserId);
					$smtp2 = $this->db->get('tbluser');	
					foreach($smtp2->result() as $rows) {
						$UserId = $rows->UserId;
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
