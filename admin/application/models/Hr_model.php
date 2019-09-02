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
				$this->db->where('t1.UserId',28);
				$smtp2 = $this->db->get('tbluser');	
				foreach($smtp2->result() as $rows) {
					$UserId = $rows->UserId;
					$FirstName = $rows->FirstName;
					$LastName = $rows->LastName;
					$EmailAddress = $rows->EmailAddress;
					$Password = $rows->Password;
					$companyid = $rows->companyid;
					$companyname = $rows->companyname;
				//die;
				}

				$config['protocol']='smtp';
				$config['smtp_host']='ssl://smtp.googlemail.com';
				$config['smtp_port']='465';
				$config['smtp_user']='bluegreyindia@gmail.com';
				$config['smtp_pass']='Test@123';
				$config['charset']='utf-8';
				$config['newline']="\r\n";
				$config['mailtype'] = 'html';								
				$this->email->initialize($config);
				$body ="Hello $FirstName $LastName, <br> Your email is : $EmailAddress<br> Your password is : $code 
				<br>Login with this Email Address and Password.";	
				//$body='reset_password.php?tokencode='.$rnd;
				$this->email->from('bluegreyindia@gmail.com');
				$this->email->to($EmailAddress);		
				$this->email->subject('Payroll system to You are register complete');
				$this->email->message($body);
				if($this->email->send())
				{
					//return 1;
					return 1;
				}else
				{
					return 2;
				}	
			}
			
	}


	function hr_list(){
		$this->db->select('UserId,RoleId,CONCAT(FirstName ,LastName) AS FirstName,EmailAddress,DateofBirth,PhoneNumber,ProfileImage,Gender,Address,PinCode,CountryId,StateId,City,IsActive');
		$this->db->from('tbluser');
		$this->db->where('RoleId',3);
		$r=$this->db->get();
		$res = $r->result();
		return $res;

	}

	

	function search($option,$keyword)
	{
			$keyword = str_replace('-', ' ', $keyword);
			$this->db->select('UserId,RoleId,CONCAT(FirstName ,LastName) AS FirstName,EmailAddress,DateofBirth,PhoneNumber,ProfileImage,Gender,Address,PinCode,CountryId,StateId,City,IsActive');
			$this->db->from('tbluser');
			$this->db->where('RoleId',3);
			//$this->db->select('*');
	
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
			    $query = $this->db->get();
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
			->from('tbluser')
			//->join('tblhr as t2', 't1.UserId = t2.UserId', 'LEFT')
			//->join('tblcompany as t3', 't2.companyid = t3.companyid', 'LEFT')
			->where('UserId',$id)
			->get();
			return $query->row_array();

			// $this->db->select('t1.*,t2.*,t3.*');
			// $this->db->from('tbluser as t1');
			// $this->db->join('tblhr as t2', 't1.UserId = t2.UserId', 'LEFT');
			// $this->db->join('tblcompany as t3', 't2.companyid = t3.companyid', 'LEFT');
			// $this->db->where('t1.UserId',$id);
			// $query = $this->db->get();	
			//return $query->row_array();
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
			'City'=>$this->input->post('City')
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


}
