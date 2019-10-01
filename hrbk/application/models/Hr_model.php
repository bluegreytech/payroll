<?php

class Hr_model extends CI_Model
 {
	function hrlist()
	{
		
		$this->db->select('*');
		$this->db->from('tblhr');
		$this->db->where('Is_deleted','0');
		$this->db->where('hr_type!=','1');
		$this->db->order_by('hr_id','Desc');
		$query=$this->db->get();
		$res=$query->result();
		//echo "<pre>";print_r($res);die;
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

            $DateofBirth = $this->input->post('DateofBirth');
			$date = str_replace('/', '-', $DateofBirth );
			$dob = date("Y-m-d", strtotime($date));

            $data = array(
			'EmailAddress' => trim($this->input->post('EmailAddress')),		
			'FullName' => trim($this->input->post('FullName')),
			'ProfileImage'=>$hr_image,
			'Address'=>$this->input->post('Address'), 
			'Contact'=>$this->input->post('PhoneNumber'), 		
			'Gender' => $this->input->post('Gender'),	
			'DateofBirth' =>$dob,	
			'City' => $this->input->post('City'),
			'IsActive'=>$this->input->post('IsActive'),	
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
			'IsActive'=>$this->input->post('IsActive'),		
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
