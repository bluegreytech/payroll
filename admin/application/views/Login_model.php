<?php



class Login_model extends CI_Model

 {

		function login_where($table,$where)

		{

			$r = $this->db->get_where($table,$where);

			$res = $r->row();

			return $res;

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

	



		function checkResetCode($ResetPasswordCode)

		{

			$this->db->select('*');				

			$this->db->where('ResetPasswordCode',$ResetPasswordCode);

			$this->db->from('tbluser');

			$query = $this->db->get();

			if($query->num_rows()>0)

			{

				return $query->row()->UserId; 

			}else{

				return 2;

			}

		}



		function updatePassword($UserId)

		{

			$ResetPasswordCode=$this->input->post('ResetPasswordCode');

			$this->db->select('*');				

			$this->db->where('UserId',$UserId);

			$this->db->where('ResetPasswordCode',$ResetPasswordCode);

			$this->db->from('tbluser');

			$query = $this->db->get();

			if($query->num_rows()>0)

			{

			    $data=array('Password'=>md5(trim($this->input->post('Password'))),'ResetPasswordCode'=>'');

				$this->db->where(array('UserId'=>$this->input->post('UserId'),'ResetPasswordCode'=>trim($this->input->post('ResetPasswordCode'))));

				$d=$this->db->update('tbluser',$data);



								$this->db->select('*');

								$this->db->where('UserId',$UserId);

								$smtp2 = $this->db->get('tbluser');	

								foreach($smtp2->result() as $rows) {

									$UserId = $rows->UserId;

									$FirstName = $rows->FirstName;

									$LastName = $rows->LastName;

									$EmailAddress = $rows->EmailAddress;

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

								$body =" Hello $FirstName $LastName, <br>Your password request has been change successfully";	

								//$body='reset_password.php?tokencode='.$rnd;

								$this->email->from('bluegreyindia@gmail.com');

								$this->email->to($EmailAddress);		

								$this->email->subject('Forgot Password');

								$this->email->message($body);

								if($this->email->send())

								{

									return 1;

								}else

								{

									return 4;

								}

					  

				

			  

			}else

			{

			  return 2;

			}

		  }



		function forgotpass_check()

		{

			//echo site_url();die;

			$email = trim($this->input->post('EmailAddress'));

			$rnd=randomCode();

			$query = $this->db->get_where('tbluser',array('EmailAddress'=>$email));

		//	echo $this->db->last_query(); die;

			if($query->num_rows()>0)

			{

				$row = $query->row();

				$admin_status=$row->IsActive;	

				if($admin_status==0)

				{

					return 2; 

				}

				else if($admin_status==1)
				{
							if(!empty($row) && $row->EmailAddress != "")
							{
								$rpass= randomCode();
								$ud=array(
									'ResetPasswordCode'=>$rnd,
								);	
								$this->db->where('UserId',$row->UserId);
								$this->db->update('tbluser',$ud);
								$this->db->select('*');
								$this->db->where('UserId',$row->UserId);
								$smtp2 = $this->db->get('tbluser');	
								foreach($smtp2->result() as $rows) {
									$UserId = $rows->UserId;
									$FirstName = $rows->FirstName;
									$LastName = $rows->LastName;
									$EmailAddress = $rows->EmailAddress;
									$ResetPasswordCode = $rows->ResetPasswordCode;
								}

								$config['protocol']='smtp';
								//$config['smtp_host']='ssl://smtp.googlemail.com';
								$config['smtp_host'] = 'tls://smtp.gmail.com';
								$config['smtp_port']='465';
								//$config['smtp_port']='587';
								$config['smtp_user']='bluegreyindia@gmail.com';
								$config['smtp_pass']='Test@123';
								$config['charset']='utf-8';
								$config['newline']="\r\n";
								$config['mailtype'] = 'html';								
								$this->email->initialize($config);
								// $body ='<a href="http://localhost/payroll/admin/Login/resetpassword/'.$ResetPasswordCode.'">Click Here</a>';	
								// //$body='reset_password.php?tokencode='.$rnd;

								// $this->email->from('bluegreyindia@gmail.com');
								// $this->email->to($EmailAddress);		
								// $this->email->subject('Forgot Password');
								// $this->email->message($body);
												
								$this->email->initialize($config);

								$this->email->from('bluegreyindia@gmail.com');
								$this->email->to('bluegreyindia@gmail.com');
								$this->email->subject('Forgot Password');
								$this->email->message('sending mail recive.....');
								if($this->email->send())
								{
									return 3;
								}else
								{
									return 4;
								}
															
							}

							

					}

			}

			else

			{

				return 1;

			}

	

		}



		// function forgotpass_check()

		// {

		// 	//echo site_url();die;

		// 	$email = trim($this->input->post('EmailAddress'));

		// 	$rnd=randomCode();

		// 	$query = $this->db->get_where('tbluser',array('EmailAddress'=>$email));

		// //	echo $this->db->last_query(); die;

		// 	if($query->num_rows()>0)

		// 	{

		// 		$row = $query->row();

		// 		$admin_status=$row->IsActive;	

		// 		if($admin_status==0)

		// 		{

		// 			return 2; 

		// 		}

		// 		else if($admin_status==1)

		// 		{// echo "hjhgj";die;

		// 					if(!empty($row) && $row->EmailAddress != "")

		// 					{

		// 						$rpass= randomCode();

		// 						$ud=array(

		// 							'ResetPasswordCode'=>$rnd,

		// 						);	

		// 						$this->db->where('UserId',$row->UserId);

		// 						$this->db->update('tbluser',$ud);

							 



		// 						$email_template=$this->db->query("select * from ".$this->db->dbprefix('tblemail_template')." where task='Forgot Password by admin'");

		// 						//echo $this->db->last_query();die;

		// 					   //print_r($email_template); die;

		// 								$email_temp=$email_template->row();

		// 								$email_address_from=$email_temp->from_address;

		// 								$email_address_reply=$email_temp->reply_address;

		// 								$email_subject=$email_temp->subject;        

		// 								$email_message=$email_temp->message;

									

		// 								$username =$row->FirstName.'  '.$row->LastName;

		// 								$password = $rpass;

		// 								$email = $row->EmailAddress;

		// 								$email_to=$email;

		// 								$login_link='<a href="'.site_url('Login/reset_password/'.$rnd).'">Click Here</a>';

		// 								$base_url=front_base_url();

		// 								$currentyear=date('Y');

		// 								$email_message=str_replace('{break}','<br/>',$email_message);

		// 								$email_message=str_replace('{base_url}',$base_url,$email_message);

		// 								$email_message=str_replace('{year}',$currentyear,$email_message);

		// 								$email_message=str_replace('{username}',$username,$email_message);

		// 								$email_message=str_replace('{email}',$email,$email_message);

		// 								$email_message=str_replace('{reset_link}',$login_link,$email_message);

		// 								$str=$email_message;

										

		// 								//echo "<pre>";print_r($str);die;

		// 								email_send($email_address_from,$email_address_reply,$email_to,$email_subject,$str);

		// 								return 3;

		// 					}

		// 					else

		// 					{

		// 						return 4;

		// 					}

		// 			}

		// 	}

		// 	else

		// 	{

		// 		return 1;

		// 	}

	

		// }



	



}

