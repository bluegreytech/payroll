<?php

class Hr_model extends CI_Model
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
			$IsActive=$this->input->post('IsActive');
			$companyid=$this->input->post('companyid');
			$data=array( 
			'RoleId'=>3,
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
			'IsActive'=>$IsActive,
			'CreatedOn'=>date('Y-m-d')
			);
			//	print_r($data);die;
			$this->db->insert('tbluser',$data);
			$insert_id = $this->db->insert_id();

			$insert_id = $this->db->insert_id();
			$data2=array( 
				'UserId'=>$insert_id,
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



	

	function hrlist()
	{
		
		$this->db->select('*');
		$this->db->from('tblhr');
		$this->db->where('Is_deleted','0');
		$this->db->where('hr_type!=','1');
		$query=$this->db->get();
		$res=$query->result();
		return $res;
		//echo "<pre>";print_r($res);die;



	}

	function search($option,$keyword)
	{
			$keyword = str_replace('-', ' ', $keyword);
			
			$this->db->select('*');
			$this->db->from('tblhr');	
			$this->db->where('Is_deleted','0');
			$this->db->where('hr_type!=','1');
			
			if($option == 'FullName')
			{
				// echo $keyword; 
				$this->db->like('FullName',$keyword);
			}
			
			else if($option == 'EmailAddress')
			{
					$this->db->like('EmailAddress',$keyword);
			}
			else if($option == 'PhoneNumber')
			{
				$this->db->like('PhoneNumber',$keyword);
			}
			else if($option == 'IsActive')
			{
				$this->db->where('IsActive',$keyword);
			}  
			// 	$this->db->order_by('UserId','desc');
			    $query = $this->db->get();
			 if($query->num_rows() > 0)
			 {  //echo $this->db->last_query();die;
				return $query->result();
			 }        
		}

		
	function list_company(){
		$this->db->select('*');
		$this->db->from('tblcompany');
		$query = $this->db->get();
		return $query->row_array();
	}

	function getdata($UserId){
		$this->db->select('t1.*,t2.*,t3.*');
		$this->db->from('tbluser as t1');
		$this->db->join('tblhr as t2', 't1.UserId = t2.UserId', 'LEFT');
		$this->db->join('tblcompany as t3', 't2.companyid = t2.companyid', 'LEFT');
		$this->db->where('t1.UserId',32);
		$query = $this->db->get();
		return $query->row_array();
	}

	function updatehr()
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
			'City'=>$this->input->post('City'),
			'IsActive'=>$this->input->post('IsActive')
				);
			// print_r($data);die;
			$this->db->where("UserId",$UserId);
			$this->db->update('tbluser',$data);	
			return 1;	      
	}


	


	function updatedata()
	{		
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
			return 1;
		}
		else
		{
			return 2;
		}
 	}

    function hr_insert()
	{		
		//echo "<pre>";print_r($_FILES);die;
		$hr_image='';
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
			$config['upload_path'] = base_path().'upload/hr_orig/';		
			$config['allowed_types'] = 'jpg|jpeg|gif|png|bmp';  
 
             $this->upload->initialize($config);
 
              if (!$this->upload->do_upload())
			  {
				$error =  $this->upload->display_errors();
				echo "<pre>";print_r($error);
			  } 
           	  $picture = $this->upload->data();	   
              $this->load->library('image_lib');		   
              $this->image_lib->clear();
			  $gd_var='gd2';

              $this->image_lib->initialize(array(
				'image_library' => $gd_var,
				'source_image' => base_path().'upload/hr_orig/'.$picture['file_name'],
				'new_image' => base_path().'upload/hr/'.$picture['file_name'],
				'maintain_ratio' => FALSE,
				'quality' => '100%',
				'width' => 300,
				'height' => 300
			 ));
			if(!$this->image_lib->resize())
			{
				$error = $this->image_lib->display_errors();
			}
			
			$hr_image=$picture['file_name'];		
			if($this->input->post('pre_profile_image')!='')
				{
					if(file_exists(base_path().'upload/hr/'.$this->input->post('pre_profile_image')))
					{
						$link=base_path().'upload/hr/'.$this->input->post('pre_profile_image');
						unlink($link);
					}
					
					if(file_exists(base_path().'upload/hr_orig/'.$this->input->post('pre_profile_image')))
					{
						$link2=base_path().'upload/hr_orig/'.$this->input->post('pre_profile_image');
						unlink($link2);
					}
				}
			} else {
				if($this->input->post('pre_profile_image')!='')
				{
					$hr_image=$this->input->post('pre_profile_image');
				}
			}
            $x=8;
       		$rnd=substr(str_shuffle("23456789abcdefghjkmnpqrstvwxyzABCDEFGHJKMNPQRSTVWXYZ"), 0, $x);
            //echo $rnd ;die;
            $data = array(
			'EmailAddress' => trim($this->input->post('EmailAddress')),		
			'FullName' => trim($this->input->post('FullName')),
			'ProfileImage'=>$hr_image,
			'Address'=>$this->input->post('Address'), 
			'Contact'=>$this->input->post('PhoneNumber'), 		
			'Gender' => $this->input->post('Gender'),	
			'DateofBirth' => date('Y-m-d',strtotime($this->input->post('DateofBirth'))),	
			'City' => $this->input->post('City'),	
			'PinCode' => $this->input->post('PinCode'),	
			'companyid' =>$this->session->userdata('companyid'),
			'Password' =>md5($rnd),
			'hr_type'=>'2',			
			'CreatedOn'=>date('Y-m-d')		
			);
			//echo "<pre>";print_r($data);die;	
                    
            $res=$this->db->insert('tblhr',$data);	
			return $res;
			
	}

	function gethrdata($hrid){

		$this->db->select("*");
		$this->db->from("tblhr");
		$this->db->where("Is_deleted",'0');
		$this->db->where("hr_id",$hrid);
		$query=$this->db->get();	
		return $query->row_array();
	

	}
	 function hr_update()
	{		
		//echo "<pre>";print_r($_FILES);die;
		$hr_image='';
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
			$config['upload_path'] = base_path().'upload/hr_orig/';		
			$config['allowed_types'] = 'jpg|jpeg|gif|png|bmp';  
 
             $this->upload->initialize($config);
 
              if (!$this->upload->do_upload())
			  {
				$error =  $this->upload->display_errors();
				echo "<pre>";print_r($error);
			  } 
           	  $picture = $this->upload->data();	   
              $this->load->library('image_lib');		   
              $this->image_lib->clear();
			  $gd_var='gd2';

              $this->image_lib->initialize(array(
				'image_library' => $gd_var,
				'source_image' => base_path().'upload/hr_orig/'.$picture['file_name'],
				'new_image' => base_path().'upload/hr/'.$picture['file_name'],
				'maintain_ratio' => FALSE,
				'quality' => '100%',
				'width' => 300,
				'height' => 300
			 ));
			if(!$this->image_lib->resize())
			{
				$error = $this->image_lib->display_errors();
			}
			
			$hr_image=$picture['file_name'];		
			if($this->input->post('pre_profile_image')!='')
				{
					if(file_exists(base_path().'upload/hr/'.$this->input->post('pre_profile_image')))
					{
						$link=base_path().'upload/hr/'.$this->input->post('pre_profile_image');
						unlink($link);
					}
					
					if(file_exists(base_path().'upload/hr_orig/'.$this->input->post('pre_profile_image')))
					{
						$link2=base_path().'upload/hr_orig/'.$this->input->post('pre_profile_image');
						unlink($link2);
					}
				}
			} else {
				if($this->input->post('pre_profile_image')!='')
				{
					$hr_image=$this->input->post('pre_profile_image');
				}
			}
            $x=8;
       		$rnd=substr(str_shuffle("23456789abcdefghjkmnpqrstvwxyzABCDEFGHJKMNPQRSTVWXYZ"), 0, $x);
            //echo $rnd ;die;
            $data = array(
			//'EmailAddress' => trim($this->input->post('EmailAddress')),		
			'FullName' => trim($this->input->post('FullName')),
			'ProfileImage'=>$hr_image,
			'Address'=>$this->input->post('Address'), 
			'Contact'=>$this->input->post('PhoneNumber'), 		
			'Gender' => $this->input->post('Gender'),	
			'DateofBirth' => date('Y-m-d',strtotime($this->input->post('DateofBirth'))),	
			'City' => $this->input->post('City'),	
			'PinCode' => $this->input->post('PinCode'),	
			'companyid' =>$this->session->userdata('companyid'),
			'UpdatedOn'=>date('Y-m-d')		
			);
			//echo "<pre>";print_r($data);die;
            $this->db->where('hr_id',$this->input->post('hr_id'));       
            $res=$this->db->update('tblhr',$data);	
			return $res;



			
	}

}
