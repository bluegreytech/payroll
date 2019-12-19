<?php

class Login_model extends CI_Model
 {
   

    function updatePassword()
    {  //echo "<pre>";print_r($_POST);die;
        $code=$this->input->post('code');
        $query=$this->db->get_where('tblhr',array('PasswordResetCode'=>$code));
        if($query->num_rows()>0)
        {
          $data=array('Password'=>md5(trim($this->input->post('Password'))),'PasswordResetCode'=>'');
            $this->db->where(array('hr_id'=>$this->input->post('hr_id'),'PasswordResetCode'=>trim($this->input->post('code'))));
          // print_r($data);die;
            $d=$this->db->update('tblhr',$data);
            return $d;          
        }else
        {
          return '';
        }
      }

    function forgotpass_check()
    {
         $EmailAddress=$this->input->post('EmailAddress'); 
         $query = $this->db->get_where('tbladmin',array('EmailAddress'=>$EmailAddress));
         if($query->num_rows()>0)
         {
            $row = $query->row();
            $admin_status=$row->IsActive;
            if($admin_status =='Inactive')
            {
              return "3"; 
            }
            else if($admin_status =='Active')
            {
                if(!empty($row) && $row->EmailAddress!="")
                {
                    $rpass= randomCode();
                    $passdata=array(
                      'PasswordResetCode'=>$rpass
                    );
                    $this->db->where('AdminId',$row->AdminId);
                    $this->db->update('tbladmin',$passdata);            
                  
                    $config['protocol']  = 'smtp';
                    $config['smtp_host'] = 'ssl://smtp.googlemail.com';
                    $config['smtp_port'] = '465';
                    $config['smtp_user']='bluegreyindia@gmail.com';
                    $config['smtp_pass']='Test@123'; 
                    $config['charset']='utf-8';
                    $config['newline']="\r\n";
                    $config['mailtype'] = 'html';	
                    $body = base_url().'Home/Resetpassword/'.$rpass;
                    //$body = str_replace(BASE_URL.'/user/edit/'.$rpass);						
                    $this->email->initialize($config);
                    $this->email->from('bluegreyindia@gmail.com', 'Admin');
                    $this->email->to($EmailAddress);		
                    $this->email->subject('FG Password');
                    $this->email->message($body);
                    if($this->email->send())
                    {
                      return '1';
                    
                    }
                             
                }
                else
                {
                  return '0';
                }
            }
        }
        else
        {
          return 2;
        }

    }

		function login_where($table,$where)
		{
			$r = $this->db->get_where($table,$where);
			$res = $r->row();
			return $res;
		}
		function updateProfile(){

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
        $config['file_name'] = $rand.'hr';      
        $config['upload_path'] = base_path().'upload/hr_orig/';      
        $config['allowed_types'] = 'jpg|jpeg|gif|png|bmp';
        $this->upload->initialize($config);

        if (!$this->upload->do_upload())
        {
        $error =  $this->upload->display_errors();
      	echo "<pre>"; print_r($error);die; 
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

        $user_image=$picture['file_name'];
        $this->input->post('prev_user_image');
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
      }else{
        if($this->input->post('pre_profile_image')!='')
        {
        $user_image=$this->input->post('pre_profile_image');
        }
      }
       
        $data = array(
        //'EmailAddress' =>trim($this->input->post('EmailAddress')),
        'FullName' =>trim($this->input->post('FullName')),			
        'Contact' => trim($this->input->post('PhoneNumber')),
        'Gender' => trim($this->input->post('Gender')),	
        'PinCode' => trim($this->input->post('PinCode')),  
        'Address' => trim($this->input->post('Address')),
        'DateofBirth' => date("Y-m-d",strtotime($this->input->post('DateofBirth'))),
        'ProfileImage'=>$user_image,
        ); 
            //echo "<pre>";print_r($data);die; 
          $this->db->where('hr_id',$this->session->userdata('hr_id'));
          $this->db->update('tblhr',$data);
       
    }

     function check_login()
    {
       //echo "vfcgcv";die;
         //$this->load->helper('cookie');
        
    $EmailAddress = trim($this->input->post('EmailAddress'));
    $password = $this->input->post('Password');
            
    $query = $this->db->get_where('tblhr',array('EmailAddress'=>$EmailAddress,'password'=>md5($password)));

   
    $hr = $query->row_array();
   

     
    if($query->num_rows()>0)
    {
      $hr_type=$hr['hr_type'];
      $hr_status=$hr['IsActive'];

      if($hr_status !='Active')
      {
      return "3"; 
      }                
      if($hr_type == 1)
      {
          $hr_id = $hr['hr_id'];      
      
        $data = array(
            'hr_id' => $hr_id,
            'FullName' => $hr['FullName'],
            'companyid' => $hr['companyid'],
            'EmailAddress' => $hr['EmailAddress'],            
            'Address' => $hr['Address'],
            'hr_type'=>$hr_type,
            );  
        // echo "<pre>";print_r($data);die;
        $this->session->set_userdata($data);
                           
        
        /*$data1=array(
            'hr_id'=>$hr_id,
            'login_date'=> date('Y-m-d H:i:s'),
            'login_ip'=>$_SERVER['REMOTE_ADDR']
            ); 
        $this->db->insert('hr_login',$data1);*/
          
        
        return "1";
      
      }
      elseif($query->num_rows() > 0)
      {
        //$hr_type=$hr['hr_type'];
      if($hr_type == 2)
      {
        $hr_id   = $hr['hr_id'];
       
        $data = array(
              'hr_id' => $hr_id,
              'FullName' => $hr['FullName'],
              'companyid' => $hr['companyid'],
              'EmailAddress' => $hr['EmailAddress'],
              'Address' => $hr['Address'],
              'hr_type'=>$hr_type,         
            );  
          
        $this->session->set_userdata($data);

        /*$data1=array(
            'admin_id'=>$admin_id,
            'login_date'=> date('Y-m-d H:i:s'),
            'login_ip'=>$_SERVER['REMOTE_ADDR']
            ); 
        $this->db->insert('admin_login',$data1);*/
        return "2";
      }
      }
    }
    else
    {
      return "0";
    }
    }

    // forget password
    function forgot_email()
    {
      $email = trim($this->input->post('EmailAddress'));
      $rnd=randomCode();
    
       $query = $this->db->get_where('tblhr',array('EmailAddress'=>$email));
      //echo $this->db->last_query(); die;
    if($query->num_rows()>0)
    {
      $row = $query->row();
      $hr_status=$row->IsActive;
     // echo $hr_status;die;
       if($hr_status =='Inactive')
      {
         return "3"; 
      }elseif($hr_status =='Active'){

                  if(!empty($row) && $row->EmailAddress != "")
                  {
                    $rpass= randomCode();
                    $ud=array('PasswordResetCode'=>$rnd,
                      //s'password' => MD5($rpass)
                    );
                    $this->db->where('hr_id',$row->hr_id);
                    $this->db->update('tblhr',$ud);
                    
                    $email_template=$this->db->query("select * from ".$this->db->dbprefix('tblemail_template')." where task='Forgot Password by admin'");
                          $email_temp=$email_template->row();
                          $email_address_from=$email_temp->from_address;
                          $email_address_reply=$email_temp->reply_address;
                          $email_subject=$email_temp->subject;        
                          $email_message=$email_temp->message;
                          $username =$row->FullName;
                          $password = $rpass;
                          $email = $row->EmailAddress;
                          $email_to=$email;
                          $login_link= '<a href="'.site_url('home/reset_password/'.$rnd).'">Click Here</a>';
                   
                    $base_url=front_base_url();
                    $currentyear=date('Y');
                   
                    $email_message=str_replace('{break}','<br/>',$email_message);
                 
                    $email_message=str_replace('{base_url}',$base_url,$email_message);
                    $email_message=str_replace('{year}',$currentyear,$email_message);

                    $email_message=str_replace('{username}',$username,$email_message);
                    // $email_message=str_replace('{password}',$password,$email_message);
                    $email_message=str_replace('{email}',$email,$email_message);
                    $email_message=str_replace('{reset_link}',$login_link,$email_message);
                    $str=$email_message; //die;
                    echo "<pre>";print_r($str);die;
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
                   
                     $this->email->from("siya@yopmail.com", "siya");
                     $this->email->to('binny@bluegreytech.co.in');
                     $this->email->subject($email_subject);
                     $this->email->message($str);

                    
                    if($this->email->send()){ 
                   
                    // echo "send"; die;
                       return '1';
                    }else{
                    echo $this->email->print_debugger();die;
                    }
                    // echo $str;die;
                    /** custom_helper email function **/
                    
                   // email_send($email_address_from,$email_address_reply,$email_to,$email_subject,$str);
                    
                     
                  }
                  else{
                    return '0';
                  }
        }
    }else{
      return 2;
    }
    }
    //reset password
    function checkResetCode($code='')
  {
    $query=$this->db->get_where('tblhr',array('PasswordResetCode'=>$code));
    if($query->num_rows()>0)
    {
      return $query->row()->hr_id; 
      
    }else{
      return '';
    }
  }
        
 

  function updateHrPassword(){
    $id=$this->session->userdata('hr_id'); 

    $data = array('Password' => md5($this->input->post('password')));
    $query=$this->db->where(array('hr_id'=>$id))->get_where('tblhr');
    if($query->num_rows()>0){
      $this->db->where(array('hr_id'=>$id));
      $this->db->update('tblhr',$data);
      $query2 = $this->db->get_where('tblhr',array('hr_id'=>$id));
      $row = $query2->row();
      return true;
    }else{
      return false;
    }
  } 


    function updatePages(){
        $data = array(
        'PageTitle' =>trim($this->input->post('PageTitle')),
        'PageDescription' =>trim($this->input->post('PageDescription')),
        'Isactive' => trim($this->input->post('IsActive')), 
        );  
          $this->db->where('page_id',$this->input->post('page_id'));
          $this->db->update('tblpage',$data);
       
    } 
    function getcompliance($id){
    $this->db->select("*");
    $this->db->from("tblcompliances");
    $this->db->where("complianceid",$id);
    $query=$this->db->get();
    return $query->row_array();
  }

}
