<?php

class Employee_model extends CI_Model
 {
	

	function emplist()
	{
		$this->db->select('*');
		$this->db->from('tblemp');
		$this->db->where('Is_deleted','0');
		//$this->db->where('hr_type!=','1');
		$query=$this->db->get();
		$res=$query->result();
		return $res;
		
	}

	function search($option,$keyword)
	{
			$keyword = str_replace('-', ' ', $keyword);			
			$this->db->select('*');
			$this->db->from('tblemp');	
			$this->db->where('Is_deleted','0');
			
			
			if($option == 'first_name')
			{
				 
				$this->db->like('CONCAT(first_name," ",last_name)',$keyword);
			}
			
			else if($option == 'EmailAddress')
			{
				$this->db->like('EmailAddress',$keyword);
			}
			else if($option == 'PhoneNumber')
			{
				$this->db->like('phone',$keyword);
			}
			else if($option == 'status')
			{
				$this->db->where('status',$keyword);
			}  
			
			    $query = $this->db->get();
			 if($query->num_rows() > 0)
			 { 
			 // echo $this->db->last_query();die;
				return $query->result();
			 }        
	}

		


	function getdata($emp_id){
	    $this->db->select("*");
		$this->db->from("tblemp");
		$this->db->where("Is_deleted",'0');
		$this->db->where("emp_id",$emp_id);
		$query=$this->db->get();	
		return $query->row_array();
	}

	

    function emp_insert()
	{		
		//echo "<pre>";print_r($_FILES);die;
		$emp_image='';
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
   
			$config['file_name'] = $rand.'emp';			
			$config['upload_path'] = base_path().'upload/emp_orig/';		
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
				'source_image' => base_path().'upload/emp_orig/'.$picture['file_name'],
				'new_image' => base_path().'upload/emp/'.$picture['file_name'],
				'maintain_ratio' => FALSE,
				'quality' => '100%',
				'width' => 300,
				'height' => 300
			 ));
			if(!$this->image_lib->resize())
			{
				$error = $this->image_lib->display_errors();
			}
			
			$emp_image=$picture['file_name'];		
			if($this->input->post('pre_profile_image')!='')
				{
					if(file_exists(base_path().'upload/emp/'.$this->input->post('pre_profile_image')))
					{
						$link=base_path().'upload/emp/'.$this->input->post('pre_profile_image');
						unlink($link);
					}
					
					if(file_exists(base_path().'upload/emp_orig/'.$this->input->post('pre_profile_image')))
					{
						$link2=base_path().'upload/emp_orig/'.$this->input->post('pre_profile_image');
						unlink($link2);
					}
				}
		} else {
			if($this->input->post('pre_profile_image')!='')
			{
				$emp_image=$this->input->post('pre_profile_image');
			}
		}

		//emp upload doucment //
		$bankdetail_image='';
		if(isset($_FILES['bank_detail']) &&  $_FILES['bank_detail']['name']!='')
        {
			$this->load->library('upload');
			$rand=rand(0,100000);			  
			$_FILES['userfile']['name']     =   $_FILES['bank_detail']['name'];
			$_FILES['userfile']['type']     =   $_FILES['bank_detail']['type'];
			$_FILES['userfile']['tmp_name'] =   $_FILES['bank_detail']['tmp_name'];
			$_FILES['userfile']['error']    =   $_FILES['bank_detail']['error'];
			$_FILES['userfile']['size']     =   $_FILES['bank_detail']['size'];
   
			$config['file_name'] = $rand.'bank_detail';			
			$config['upload_path'] = base_path().'upload/empdetail/';		
			$config['allowed_types'] = 'jpg|jpeg|gif|png|bmp';  
 
             $this->upload->initialize($config);
 
              if (!$this->upload->do_upload())
			  {
				$error =  $this->upload->display_errors();
				echo "<pre>";print_r($error);
			  } 
           	  $picture = $this->upload->data();	   
             
			
			$bankdetail_image=$picture['file_name'];		
			if($this->input->post('pre_bank_detail')!='')
				{
					if(file_exists(base_path().'upload/empdetail/'.$this->input->post('pre_bank_detail')))
					{
						$link=base_path().'upload/empdetail/'.$this->input->post('pre_bank_detail');
						unlink($link);
					}
					
				}
		} else {
			if($this->input->post('pre_bank_detail')!='')
			{
				$bankdetail_image=$this->input->post('pre_bank_detail');
			}
		}

		$passport_image='';
		if(isset($_FILES['passport']) &&  $_FILES['passport']['name']!='')
        {
			$this->load->library('upload');
			$rand=rand(0,100000);			  
			$_FILES['userfile']['name']     =   $_FILES['passport']['name'];
			$_FILES['userfile']['type']     =   $_FILES['passport']['type'];
			$_FILES['userfile']['tmp_name'] =   $_FILES['passport']['tmp_name'];
			$_FILES['userfile']['error']    =   $_FILES['passport']['error'];
			$_FILES['userfile']['size']     =   $_FILES['passport']['size'];
   
			$config['file_name'] = $rand.'passport';			
			$config['upload_path'] = base_path().'upload/empdetail/';		
			$config['allowed_types'] = 'jpg|jpeg|gif|png|bmp';  
 
             $this->upload->initialize($config);
 
              if (!$this->upload->do_upload())
			  {
				$error =  $this->upload->display_errors();
				echo "<pre>";print_r($error);
			  } 
           	  $picture = $this->upload->data();	
			
			$passport_image=$picture['file_name'];		
			if($this->input->post('pre_passport')!='')
				{
					if(file_exists(base_path().'upload/empdetail/'.$this->input->post('pre_passport')))
					{
						$link=base_path().'upload/empdetail/'.$this->input->post('pre_passport');
						unlink($link);
					}
					
				}
		} else {
			if($this->input->post('pre_passport')!='')
			{
				$passport_image=$this->input->post('pre_passport');
			}
		}

		
		$driveinglicence_image='';
		if(isset($_FILES['driveinglicence']) &&  $_FILES['driveinglicence']['name']!='')
        {
			$this->load->library('upload');
			$rand=rand(0,100000);			  
			$_FILES['userfile']['name']     =   $_FILES['driveinglicence']['name'];
			$_FILES['userfile']['type']     =   $_FILES['driveinglicence']['type'];
			$_FILES['userfile']['tmp_name'] =   $_FILES['driveinglicence']['tmp_name'];
			$_FILES['userfile']['error']    =   $_FILES['driveinglicence']['error'];
			$_FILES['userfile']['size']     =   $_FILES['driveinglicence']['size'];
   
			$config['file_name'] = $rand.'driveinglicence';			
			$config['upload_path'] = base_path().'upload/empdetail/';		
			$config['allowed_types'] = 'jpg|jpeg|gif|png|bmp';  
 
             $this->upload->initialize($config);
 
              if (!$this->upload->do_upload())
			  {
				$error =  $this->upload->display_errors();
				echo "<pre>";print_r($error);
			  } 
           	  $picture = $this->upload->data();	
			
			$driveinglicence_image=$picture['file_name'];		
			if($this->input->post('pre_driveinglicence')!='')
				{
					if(file_exists(base_path().'upload/empdetail/'.$this->input->post('pre_driveinglicence')))
					{
						$link=base_path().'upload/empdetail/'.$this->input->post('pre_driveinglicence');
						unlink($link);
					}
					
				}
		} else {
			if($this->input->post('pre_driveinglicence')!='')
			{
				$driveinglicence_image=$this->input->post('pre_driveinglicence');
			}
		}
		$pancard_image='';
		if(isset($_FILES['pancard']) &&  $_FILES['pancard']['name']!='')
        {
			$this->load->library('upload');
			$rand=rand(0,100000);			  
			$_FILES['userfile']['name']     =   $_FILES['pancard']['name'];
			$_FILES['userfile']['type']     =   $_FILES['pancard']['type'];
			$_FILES['userfile']['tmp_name'] =   $_FILES['pancard']['tmp_name'];
			$_FILES['userfile']['error']    =   $_FILES['pancard']['error'];
			$_FILES['userfile']['size']     =   $_FILES['pancard']['size'];
   
			$config['file_name'] = $rand.'pancard';			
			$config['upload_path'] = base_path().'upload/empdetail/';		
			$config['allowed_types'] = 'jpg|jpeg|gif|png|bmp';  
 
             $this->upload->initialize($config);
 
              if (!$this->upload->do_upload())
			  {
				$error =  $this->upload->display_errors();
				echo "<pre>";print_r($error);
			  } 
           	  $picture = $this->upload->data();	
			
			$pancard_image=$picture['file_name'];		
			if($this->input->post('pre_pancard')!='')
				{
					if(file_exists(base_path().'upload/empdetail/'.$this->input->post('pre_pancard')))
					{
						$link=base_path().'upload/empdetail/'.$this->input->post('pre_pancard');
						unlink($link);
					}
					
				}
		} else {
			if($this->input->post('pre_pancard')!='')
			{
				$pancard_image=$this->input->post('pre_pancard');
			}
		}
		$aadharcard_image='';
		if(isset($_FILES['aadharcard']) &&  $_FILES['aadharcard']['name']!='')
        {
			$this->load->library('upload');
			$rand=rand(0,100000);			  
			$_FILES['userfile']['name']     =   $_FILES['aadharcard']['name'];
			$_FILES['userfile']['type']     =   $_FILES['aadharcard']['type'];
			$_FILES['userfile']['tmp_name'] =   $_FILES['aadharcard']['tmp_name'];
			$_FILES['userfile']['error']    =   $_FILES['aadharcard']['error'];
			$_FILES['userfile']['size']     =   $_FILES['aadharcard']['size'];
   
			$config['file_name'] = $rand.'aadharcard';			
			$config['upload_path'] = base_path().'upload/empdetail/';		
			$config['allowed_types'] = 'jpg|jpeg|gif|png|bmp';  
 
             $this->upload->initialize($config);
 
              if (!$this->upload->do_upload())
			  {
				$error =  $this->upload->display_errors();
				echo "<pre>";print_r($error);
			  } 
           	  $picture = $this->upload->data();	
			
			$aadharcard_image=$picture['file_name'];		
			if($this->input->post('pre_aadharcard')!='')
				{
					if(file_exists(base_path().'upload/empdetail/'.$this->input->post('pre_aadharcard')))
					{
						$link=base_path().'upload/empdetail/'.$this->input->post('pre_aadharcard');
						unlink($link);
					}
					
				}
		} else {
			if($this->input->post('pre_aadharcard')!='')
			{
				$aadharcard_image=$this->input->post('pre_aadharcard');
			}
		}
		$addressproof_image='';
		if(isset($_FILES['address_proof']) &&  $_FILES['address_proof']['name']!='')
        {
			$this->load->library('upload');
			$rand=rand(0,100000);			  
			$_FILES['userfile']['name']     =   $_FILES['address_proof']['name'];
			$_FILES['userfile']['type']     =   $_FILES['address_proof']['type'];
			$_FILES['userfile']['tmp_name'] =   $_FILES['address_proof']['tmp_name'];
			$_FILES['userfile']['error']    =   $_FILES['address_proof']['error'];
			$_FILES['userfile']['size']     =   $_FILES['address_proof']['size'];
   
			$config['file_name'] = $rand.'address_proof';			
			$config['upload_path'] = base_path().'upload/empdetail/';		
			$config['allowed_types'] = 'jpg|jpeg|gif|png|bmp';  
 
             $this->upload->initialize($config);
 
              if (!$this->upload->do_upload())
			  {
				$error =  $this->upload->display_errors();
				echo "<pre>";print_r($error);
			  } 
           	  $picture = $this->upload->data();	
			
			$addressproof_image=$picture['file_name'];		
			if($this->input->post('pre_addressproof')!='')
				{
					if(file_exists(base_path().'upload/empdetail/'.$this->input->post('pre_addressproof')))
					{
						$link=base_path().'upload/empdetail/'.$this->input->post('pre_addressproof');
						unlink($link);
					}
					
				}
		} else {
			if($this->input->post('pre_addressproof')!='')
			{
				$addressproof_image=$this->input->post('pre_addressproof');
			}
		}
        $x=8;
   		$rnd=substr(str_shuffle("23456789abcdefghjkmnpqrstvwxyzABCDEFGHJKMNPQRSTVWXYZ"), 0, $x);
        //echo $rnd ;die;

		$DateofBirth = $this->input->post('DateofBirth');
		$boddate = str_replace('/', '-', $DateofBirth );
		$dob = date("Y-m-d", strtotime($boddate));

		$joiningdate = $this->input->post('jod');
		$jdate = str_replace('/', '-', $joiningdate );
		$jod = date("Y-m-d", strtotime($jdate));

		$probation_preriod_day = $this->input->post('probation_preriod_day');
		$pddate = str_replace('/', '-', $probation_preriod_day );
		$probation_preriod_day = date("Y-m-d", strtotime($pddate));
        $data = array(
	    'employee_code' => trim($this->input->post('employee_code')),	
		'first_name' => trim($this->input->post('FirstName')),
		'last_name' => trim($this->input->post('LastName')),
		'email' =>trim($this->input->post('EmailAddress')),
		'department' =>trim($this->input->post('department')),
		'desgination' =>trim($this->input->post('desgination')),
		'Address'=>trim($this->input->post('Address')), 
		'phone'=>trim($this->input->post('PhoneNumber')), 		
		'gender' => $this->input->post('Gender'),
		'marital_status' =>trim($this->input->post('marital_status')),
		'religion' =>trim($this->input->post('religion')),
		'nationality' =>trim($this->input->post('nationality')),
		'qualification_emp' =>trim($this->input->post('qualificationemp')),
		'bloodgroup' =>trim($this->input->post('bloodgroup')),
		'salary' =>trim($this->input->post('salary')),
		'salaryamt' =>trim($this->input->post('salary_amount')),
		'ProfileImage'=>$emp_image,
		'Placeofbirth' => $this->input->post('pob'),
		'Dateofbirth' => $dob,
		'joiningdate' => $jod,	
		'probation_preriod_day' =>$probation_preriod_day,	
		'physically_challenged' =>$this->input->post('physically_challenged'),
		'status' =>$this->input->post('status'),
		'bankdetail' =>$bankdetail_image,
		'passport' =>$passport_image,
		'pancard' =>$pancard_image,		
		'drivinglicense' =>$driveinglicence_image,
		'aadharcard	' =>$aadharcard_image,
		'addressesproof' =>$addressproof_image,
		'employee_code' =>$this->input->post('employee_code'),	
		'companyid' =>$this->session->userdata('companyid'),
		'Password' =>md5($rnd),			
		'created_date'=>date('Y-m-d')		
		);
		//echo "<pre>";print_r($data);die;	
                
        $res=$this->db->insert('tblemp',$data);	
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
	 function emp_update()
	{		
		//echo "<pre>";print_r($_FILES);die;
		$id=$this->input->post('emp_id');
		$emp_image='';
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
   
			$config['file_name'] = $rand.'emp';			
			$config['upload_path'] = base_path().'upload/emp_orig/';		
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
				'source_image' => base_path().'upload/emp_orig/'.$picture['file_name'],
				'new_image' => base_path().'upload/emp/'.$picture['file_name'],
				'maintain_ratio' => FALSE,
				'quality' => '100%',
				'width' => 300,
				'height' => 300
			 ));
			if(!$this->image_lib->resize())
			{
				$error = $this->image_lib->display_errors();
			}
			
			$emp_image=$picture['file_name'];		
			if($this->input->post('pre_profile_image')!='')
				{
					if(file_exists(base_path().'upload/emp/'.$this->input->post('pre_profile_image')))
					{
						$link=base_path().'upload/emp/'.$this->input->post('pre_profile_image');
						unlink($link);
					}
					
					if(file_exists(base_path().'upload/emp_orig/'.$this->input->post('pre_profile_image')))
					{
						$link2=base_path().'upload/emp_orig/'.$this->input->post('pre_profile_image');
						unlink($link2);
					}
				}
		} else {
			if($this->input->post('pre_profile_image')!='')
			{
				$emp_image=$this->input->post('pre_profile_image');
			}
		}

		//emp upload doucment //
		$bankdetail_image='';
		if(isset($_FILES['bank_detail']) &&  $_FILES['bank_detail']['name']!='')
        {
			$this->load->library('upload');
			$rand=rand(0,100000);			  
			$_FILES['userfile']['name']     =   $_FILES['bank_detail']['name'];
			$_FILES['userfile']['type']     =   $_FILES['bank_detail']['type'];
			$_FILES['userfile']['tmp_name'] =   $_FILES['bank_detail']['tmp_name'];
			$_FILES['userfile']['error']    =   $_FILES['bank_detail']['error'];
			$_FILES['userfile']['size']     =   $_FILES['bank_detail']['size'];
   
			$config['file_name'] = $rand.'bank_detail';			
			$config['upload_path'] = base_path().'upload/empdetail/';		
			$config['allowed_types'] = 'jpg|jpeg|gif|png|bmp';  
 
             $this->upload->initialize($config);
 
              if (!$this->upload->do_upload())
			  {
				$error =  $this->upload->display_errors();
				echo "<pre>";print_r($error);
			  } 
           	  $picture = $this->upload->data();	   
             
			
			$bankdetail_image=$picture['file_name'];		
			if($this->input->post('pre_bank_detail')!='')
				{
					if(file_exists(base_path().'upload/empdetail/'.$this->input->post('pre_bank_detail')))
					{
						$link=base_path().'upload/empdetail/'.$this->input->post('pre_bank_detail');
						unlink($link);
					}
					
				}
		} else {
			if($this->input->post('pre_bank_detail')!='')
			{
				$bankdetail_image=$this->input->post('pre_bank_detail');
			}
		}

		$passport_image='';
		if(isset($_FILES['passport']) &&  $_FILES['passport']['name']!='')
        {
			$this->load->library('upload');
			$rand=rand(0,100000);			  
			$_FILES['userfile']['name']     =   $_FILES['passport']['name'];
			$_FILES['userfile']['type']     =   $_FILES['passport']['type'];
			$_FILES['userfile']['tmp_name'] =   $_FILES['passport']['tmp_name'];
			$_FILES['userfile']['error']    =   $_FILES['passport']['error'];
			$_FILES['userfile']['size']     =   $_FILES['passport']['size'];
   
			$config['file_name'] = $rand.'passport';			
			$config['upload_path'] = base_path().'upload/empdetail/';		
			$config['allowed_types'] = 'jpg|jpeg|gif|png|bmp';  
 
             $this->upload->initialize($config);
 
              if (!$this->upload->do_upload())
			  {
				$error =  $this->upload->display_errors();
				echo "<pre>";print_r($error);
			  } 
           	  $picture = $this->upload->data();	
			
			$passport_image=$picture['file_name'];		
			if($this->input->post('pre_passport')!='')
				{
					if(file_exists(base_path().'upload/empdetail/'.$this->input->post('pre_passport')))
					{
						$link=base_path().'upload/empdetail/'.$this->input->post('pre_passport');
						unlink($link);
					}
					
				}
		} else {
			if($this->input->post('pre_passport')!='')
			{
				$passport_image=$this->input->post('pre_passport');
			}
		}

		
		$driveinglicence_image='';
		if(isset($_FILES['driveinglicence']) &&  $_FILES['driveinglicence']['name']!='')
        {
			$this->load->library('upload');
			$rand=rand(0,100000);			  
			$_FILES['userfile']['name']     =   $_FILES['driveinglicence']['name'];
			$_FILES['userfile']['type']     =   $_FILES['driveinglicence']['type'];
			$_FILES['userfile']['tmp_name'] =   $_FILES['driveinglicence']['tmp_name'];
			$_FILES['userfile']['error']    =   $_FILES['driveinglicence']['error'];
			$_FILES['userfile']['size']     =   $_FILES['driveinglicence']['size'];
   
			$config['file_name'] = $rand.'driveinglicence';			
			$config['upload_path'] = base_path().'upload/empdetail/';		
			$config['allowed_types'] = 'jpg|jpeg|gif|png|bmp';  
 
             $this->upload->initialize($config);
 
              if (!$this->upload->do_upload())
			  {
				$error =  $this->upload->display_errors();
				echo "<pre>";print_r($error);
			  } 
           	  $picture = $this->upload->data();	
			
			$driveinglicence_image=$picture['file_name'];		
			if($this->input->post('pre_driveinglicence')!='')
				{
					if(file_exists(base_path().'upload/empdetail/'.$this->input->post('pre_driveinglicence')))
					{
						$link=base_path().'upload/empdetail/'.$this->input->post('pre_driveinglicence');
						unlink($link);
					}
					
				}
		} else {
			if($this->input->post('pre_driveinglicence')!='')
			{
				$driveinglicence_image=$this->input->post('pre_driveinglicence');
			}
		}
		$pancard_image='';
		if(isset($_FILES['pancard']) &&  $_FILES['pancard']['name']!='')
        {
			$this->load->library('upload');
			$rand=rand(0,100000);			  
			$_FILES['userfile']['name']     =   $_FILES['pancard']['name'];
			$_FILES['userfile']['type']     =   $_FILES['pancard']['type'];
			$_FILES['userfile']['tmp_name'] =   $_FILES['pancard']['tmp_name'];
			$_FILES['userfile']['error']    =   $_FILES['pancard']['error'];
			$_FILES['userfile']['size']     =   $_FILES['pancard']['size'];
   
			$config['file_name'] = $rand.'pancard';			
			$config['upload_path'] = base_path().'upload/empdetail/';		
			$config['allowed_types'] = 'jpg|jpeg|gif|png|bmp';  
 
             $this->upload->initialize($config);
 
              if (!$this->upload->do_upload())
			  {
				$error =  $this->upload->display_errors();
				echo "<pre>";print_r($error);
			  } 
           	  $picture = $this->upload->data();	
			
			$pancard_image=$picture['file_name'];		
			if($this->input->post('pre_pancard')!='')
				{
					if(file_exists(base_path().'upload/empdetail/'.$this->input->post('pre_pancard')))
					{
						$link=base_path().'upload/empdetail/'.$this->input->post('pre_pancard');
						unlink($link);
					}
					
				}
		} else {
			if($this->input->post('pre_pancard')!='')
			{
				$pancard_image=$this->input->post('pre_pancard');
			}
		}
		$aadharcard_image='';
		if(isset($_FILES['aadharcard']) &&  $_FILES['aadharcard']['name']!='')
        {
			$this->load->library('upload');
			$rand=rand(0,100000);			  
			$_FILES['userfile']['name']     =   $_FILES['aadharcard']['name'];
			$_FILES['userfile']['type']     =   $_FILES['aadharcard']['type'];
			$_FILES['userfile']['tmp_name'] =   $_FILES['aadharcard']['tmp_name'];
			$_FILES['userfile']['error']    =   $_FILES['aadharcard']['error'];
			$_FILES['userfile']['size']     =   $_FILES['aadharcard']['size'];
   
			$config['file_name'] = $rand.'aadharcard';			
			$config['upload_path'] = base_path().'upload/empdetail/';		
			$config['allowed_types'] = 'jpg|jpeg|gif|png|bmp';  
 
             $this->upload->initialize($config);
 
              if (!$this->upload->do_upload())
			  {
				$error =  $this->upload->display_errors();
				echo "<pre>";print_r($error);
			  } 
           	  $picture = $this->upload->data();	
			
			$aadharcard_image=$picture['file_name'];		
			if($this->input->post('pre_aadharcard')!='')
				{
					if(file_exists(base_path().'upload/empdetail/'.$this->input->post('pre_aadharcard')))
					{
						$link=base_path().'upload/empdetail/'.$this->input->post('pre_aadharcard');
						unlink($link);
					}
					
				}
		} else {
			if($this->input->post('pre_aadharcard')!='')
			{
				$aadharcard_image=$this->input->post('pre_aadharcard');
			}
		}
		$addressproof_image='';
		if(isset($_FILES['address_proof']) &&  $_FILES['address_proof']['name']!='')
        {
			$this->load->library('upload');
			$rand=rand(0,100000);			  
			$_FILES['userfile']['name']     =   $_FILES['address_proof']['name'];
			$_FILES['userfile']['type']     =   $_FILES['address_proof']['type'];
			$_FILES['userfile']['tmp_name'] =   $_FILES['address_proof']['tmp_name'];
			$_FILES['userfile']['error']    =   $_FILES['address_proof']['error'];
			$_FILES['userfile']['size']     =   $_FILES['address_proof']['size'];
   
			$config['file_name'] = $rand.'address_proof';			
			$config['upload_path'] = base_path().'upload/empdetail/';		
			$config['allowed_types'] = 'jpg|jpeg|gif|png|bmp';  
 
             $this->upload->initialize($config);
 
              if (!$this->upload->do_upload())
			  {
				$error =  $this->upload->display_errors();
				echo "<pre>";print_r($error);
			  } 
           	  $picture = $this->upload->data();	
			
			$addressproof_image=$picture['file_name'];		
			if($this->input->post('pre_addressproof')!='')
				{
					if(file_exists(base_path().'upload/empdetail/'.$this->input->post('pre_addressproof')))
					{
						$link=base_path().'upload/empdetail/'.$this->input->post('pre_addressproof');
						unlink($link);
					}
					
				}
		} else {
			if($this->input->post('pre_addressproof')!='')
			{
				$addressproof_image=$this->input->post('pre_addressproof');
			}
		}
        $x=8;
   		$rnd=substr(str_shuffle("23456789abcdefghjkmnpqrstvwxyzABCDEFGHJKMNPQRSTVWXYZ"), 0, $x);
        //echo $rnd ;die;
        $DateofBirth = $this->input->post('dob');
		$boddate = str_replace('/', '-', $DateofBirth );
		 $dob = date("Y-m-d", strtotime($boddate));

		$joiningdate = $this->input->post('jod');
		$jdate = str_replace('/', '-', $joiningdate );
		 $jod = date("Y-m-d", strtotime($jdate));

		$probation_preriod_day = $this->input->post('probation_period_day');
		$pddate = str_replace('/', '-', $probation_preriod_day );
		 $probation_preriod_day = date("Y-m-d", strtotime($pddate));

        $data = array(
	    'employee_code' => trim($this->input->post('employee_code')),	
		'first_name' => trim($this->input->post('FirstName')),
		'last_name' => trim($this->input->post('LastName')),
		'email' =>trim($this->input->post('EmailAddress')),
		'department' =>trim($this->input->post('department')),
		'desgination' =>trim($this->input->post('desgination')),
		'Address'=>trim($this->input->post('Address')), 
		'phone'=>trim($this->input->post('PhoneNumber')), 		
		'gender' => $this->input->post('Gender'),
		'marital_status' =>trim($this->input->post('marital_status')),
		'religion' =>trim($this->input->post('religion')),
		'nationality' =>trim($this->input->post('nationality')),
		'qualification_emp' =>trim($this->input->post('qualificationemp')),
		'bloodgroup' =>trim($this->input->post('bloodgroup')),
		'salary' =>trim($this->input->post('salary')),
		'salaryamt' =>trim($this->input->post('salary_amount')),
		'ProfileImage'=>$emp_image,
		'Placeofbirth' => $this->input->post('pob'),
		'Dateofbirth' =>$dob,
		'joiningdate' => $jod,	
		'probation_preriod_day' =>$probation_preriod_day,	
		'physically_challenged' =>$this->input->post('physically_challenged'),
		'status' =>$this->input->post('status'),
		'bankdetail' =>$bankdetail_image,
		'passport' =>$passport_image,
		'pancard' =>$pancard_image,		
		'drivinglicense' =>$driveinglicence_image,
		'aadharcard	' =>$aadharcard_image,
		'addressesproof' =>$addressproof_image,
		'employee_code' =>$this->input->post('employee_code'),	
		'companyid' =>$this->session->userdata('companyid'),
		'upated_date'=>date('Y-m-d')		
		);
		//echo "<pre>";print_r($data);die;	
         $this->db->where('emp_id',$id);       
        $res=$this->db->update('tblemp',$data);	
		return $res;
			
	}

}
