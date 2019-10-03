<?php







class Hr_model extends CI_Model



 {



	function insertdata()



	{		



			$this->db->select('*');



			$this->db->where('EmailAddress',$this->input->post('EmailAddress'));



			$query=$this->db->get('tblhr');



			if($query->num_rows() > 0)



			{



					return 3;



			}



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



			$code=rand(12,123456789);

			$companyid=$this->input->post('companyid');

			$FullName=$this->input->post('FullName');

			$EmailAddress=$this->input->post('EmailAddress');

			$DateofBirth=$this->input->post('DateofBirth');

			$bdate = str_replace('/', '-', $DateofBirth );

			$birth = date("Y-m-d", strtotime($bdate));



			$Contact=$this->input->post('Contact');

			$Gender=$this->input->post('Gender');

			$Address=$this->input->post('Address');

			$PinCode=$this->input->post('PinCode');

			$City=$this->input->post('City');

			$IsActive=$this->input->post('IsActive');

			$companyid=$this->input->post('companyid');

			$data=array( 

			'hr_type'=>1,

			'companyid'=>$companyid,

			'FullName'=>$FullName,

			'EmailAddress'=>$EmailAddress, 

			'Password'=>md5($code),

			'Address'=>$Address,

			'ProfileImage'=>$hr_image,

			'Contact'=>$Contact,

			'DateofBirth'=>$birth, 

			'City'=>$City,

			'PinCode'=>$PinCode,

			'Gender'=>$Gender,

			'IsActive'=>$IsActive,

			'CreatedOn'=>date('Y-m-d')

			);



			//print_r($data);die;

			$this->db->insert('tblhr',$data);

			$insert_id = $this->db->insert_id();

			if($insert_id!='')

			{

				$this->db->select('t1.*,t2.*,t3.*');

				$this->db->from('tblhr as t1');

				$this->db->join('tblhr as t2', 't1.hr_id = t2.hr_id', 'LEFT');

				$this->db->join('tblcompany as t3', 't2.companyid = t3.companyid', 'LEFT');

				$this->db->where('t1.hr_id',$insert_id);

				$smtp2 = $this->db->get();	

				foreach($smtp2->result() as $rows) {

					$hr_id = $rows->hr_id;

					$FullName = $rows->FullName;

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



					



					$username =$rows->FullName;



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



					//$email_message=str_replace('{login_link}',$login_link,$email_message);



					$str=$email_message; //die;







				

					$email_config = Array(

						'protocol'  => 'smtp',

						'smtp_host' => 'relay-hosting.secureserver.net',

						'smtp_port' => '465',

						'smtp_user' => 'binny@bluegreytech.co.in',

						'smtp_pass' => 'Binny@123',

						'mailtype'  => 'html',

						'starttls'  => true,

						'newline'   => "\r\n",

						'charset'=>'utf-8',

						'header'=> 'MIME-Version: 1.0',

						'header'=> 'Content-type:text/html;charset=UTF-8',

						);

		

						$this->load->library('email', $email_config);

					   



					$body =$str;	



					$this->email->from('binny@bluegreytech.co.in');



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





	function get_hrprofile($hr_id)

	{

		$this->db->select('t1.*,t2.*');

		$this->db->from('tblhr as t1');

		$this->db->join('tblcompany as t2', 't1.companyid = t2.companyid', 'LEFT');

		$this->db->where('t1.hr_id',$hr_id);

		$query=$this->db->get();

		return $query->row_array();

	}







	function hr_list()

	{



		$where = array('t1.Is_deleted' =>'0');



		$this->db->select('t1.*,t2.companyname');



		$this->db->from('tblhr as t1');



		$this->db->join('tblcompany as t2', 't1.companyid = t2.companyid', 'LEFT');



		// $this->db->where('t1.IsActive','Active');



		// $this->db->or_where('t1.Is_deleted','0');



		$this->db->where($where);



		$r=$this->db->get();



		$res = $r->result();



		return $res;	



	}



	



	function search($option,$keyword)
	{
			$where = array('t1.Is_deleted' =>'0');
			$keyword = str_replace('-', ' ', $keyword);
			$this->db->select('t1.*,t2.companyname');
			$this->db->from('tblhr as t1');
			$this->db->join('tblcompany as t2', 't1.companyid = t2.companyid', 'LEFT');
			$this->db->where($where);
			if($option == 'FullName')
			{
				$this->db->like('FullName',$keyword);
			}
			else if($option == 'companyname')
			{
				$this->db->like('companyname',$keyword);
			}
			else if($option == 'EmailAddress')
			{
				$this->db->like('EmailAddress',$keyword);
			}
			else if($option == 'Contact')
			{
				$this->db->like('Contact',$keyword);
			} 

			$query = $this->db->get();
			if($query->num_rows() > 0)
			 {
				return $query->result();
			 }        

	}







	



		



		function list_company(){



			$where = array('isactive' =>'Active', 'isdelete' =>'0');



			$this->db->select('*');



			$this->db->from('tblcompany');



			$this->db->where($where);



			$r = $this->db->get();



			return $query=$r->result();



	}







	function getdata($hr_id){



			$this->db->select('t1.*,t2.*');



			$this->db->from('tblhr as t1');



			$this->db->join('tblcompany as t2', 't1.companyid = t2.companyid', 'LEFT');



			$this->db->where('t1.hr_id',$hr_id);



			$query = $this->db->get();



			return $query->row_array();



	}







	function updatehr()

	{		     

		$hr_id=$this->input->post('hr_id');



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

   

			$config['file_name'] = $rand.'Hr';			
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



			$DateofBirth=$this->input->post('DateofBirth');

			$bdate = str_replace('/', '-', $DateofBirth );

			$birth = date("Y-m-d", strtotime($bdate));



		$data=array(

			'hr_id'=>$this->input->post('hr_id'),

			'companyid'=>$this->input->post('companyid'),

			'FullName'=>$this->input->post('FullName'),

			'EmailAddress'=>$this->input->post('EmailAddress'),

			'DateofBirth'=>$birth, 

			'Contact'=>$this->input->post('Contact'),

			'ProfileImage'=>$hr_image,

			'Gender'=>$this->input->post('Gender'),

			'Address'=>$this->input->post('Address'),

			'PinCode'=>$this->input->post('PinCode'),

			'City'=>$this->input->post('City'),

			'IsActive'=>$this->input->post('IsActive')

				);



			//print_r($data);die;

			$this->db->where("hr_id",$hr_id);

			$this->db->update('tblhr',$data);	

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



















}



