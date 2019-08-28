<?php

class Adminmaster_model extends CI_Model
 {
	function insertdata()
	{		
		    //print_r($_FILES);die;
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
			
			// $ProfileImage=$this->input->post('ProfileImage');
			
			// $config['upload_path']=base_path().'uploads/UserProfile/';
			// $config['allowed_types']='jpg|jpeg|png';
			// $config['max_size']='10000000';
			// $this->load->library('upload',$config);
			// if($this->upload->do_upload('ProfileImage'))
			// {
			// 	$s=$this->upload->data();	
			// 	$filename=$s['file_name'];
			// }

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
			print_r($data);die;
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
				$this->email->subject('You are register complete');
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


	function getuser(){
		//$r=$this->db->select('*')
		$r=$this->db->select('UserId,RoleId,CONCAT(FirstName ,LastName) AS FirstName,EmailAddress,DateofBirth,PhoneNumber,ProfileImage,Gender,Address,PinCode,CountryId,StateId,City,IsActive')
					->from('tbluser')
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
			'Address'=>$this->input->post('Address'),
			'PinCode'=>$this->input->post('PinCode'),
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
