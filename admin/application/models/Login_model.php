<?php
class Login_model extends CI_Model
{
		function login_where($table,$where)
		{
			$r = $this->db->get_where($table,$where);
			$res = $r->row();
			return $res;
		}



		public function changepass($AdminId) 
		{
			$this->db->select('AdminId,Password');				
			$this->db->where('AdminId',$AdminId);
			$this->db->where('Password',md5($this->input->post('Password')));
			$this->db->from('tbladmin');
			$query = $this->db->get();
			if ($query->num_rows() == 1) 
			{
				$pass_data = array(	
					'Password'=>md5($this->input->post('NewPassword')),	
				);



				//print_r($pass_data);die;



				$this->db->where('AdminId',$AdminId);



				$res = $this->db->update('tbladmin',$pass_data);



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
			$this->db->from('tbladmin');
			$query = $this->db->get();
			if($query->num_rows()>0)
			{
				return $query->row()->AdminId; 
			}else{
				return 2;
			}

		}







		function updatePassword($AdminId)
		{
			$ResetPasswordCode=$this->input->post('ResetPasswordCode');
			$this->db->select('*');				
			$this->db->where('AdminId',$AdminId);
			$this->db->where('ResetPasswordCode',$ResetPasswordCode);
			$this->db->from('tbladmin');
			$query = $this->db->get();
			if($query->num_rows()>0)
			{
			    $data=array('Password'=>md5(trim($this->input->post('Password'))),'ResetPasswordCode'=>'');
				$this->db->where(array('AdminId'=>$this->input->post('AdminId'),'ResetPasswordCode'=>trim($this->input->post('ResetPasswordCode'))));
				$d=$this->db->update('tbladmin',$data);
				if($d)
				{
					$log_data = array(
						'AdminId' => $AdminId,
						'Module' => 'Admin',
						'Activity' =>'Reset password self record id: '.$AdminId
					);
					$log = $this->db->insert('tblactivitylog',$log_data);
					return 1;
				}
				//return 1;

								$this->db->select('*');
								$this->db->where('AdminId',$AdminId);
								$smtp2 = $this->db->get('tbladmin');	
								foreach($smtp2->result() as $rows) {
									$AdminId = $rows->AdminId;
									$FirstName = $rows->FirstName;
									$LastName = $rows->LastName;
									$EmailAddress = $rows->EmailAddress;
								}


								$email_template=$this->db->query("select * from ".$this->db->dbprefix('tblemail_template')." where task='Reset Password to admin'");
								$email_temp=$email_template->row();
								$email_address_from=$email_temp->from_address;
								$email_address_reply=$email_temp->reply_address;
								$email_subject=$email_temp->subject;        
								$email_message=$email_temp->message;
								$username =$rows->FirstName.' '.$LastName;
								$EmailAddress = $rows->EmailAddress;
								$base_url=base_url();
								$login_link= '<a href="'.base_url('Login').'">Click Here</a>';
							
								$currentyear=date('Y');
								$email_message=str_replace('{break}','<br/>',$email_message);
								$email_message=str_replace('{base_url}',$base_url,$email_message);
								$email_message=str_replace('{year}',$currentyear,$email_message);
								$email_message=str_replace('{username}',$username,$email_message);
								$email_message=str_replace('{EmailAddress}',$EmailAddress,$email_message);
								$email_message=str_replace('{login_link}',$login_link,$email_message);
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
								$this->email->subject('Reset Password Admin To Payroll System');
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
			$query = $this->db->get_where('tbladmin',array('EmailAddress'=>$email));
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
								$this->db->where('AdminId',$row->AdminId);
								$res=$this->db->update('tbladmin',$ud);
								if($res)
								{
									$log_data = array(
										'AdminId' => $row->AdminId,
										'Module' => 'Admin',
										'Activity' =>'Forgot password self record id: '.$row->AdminId
									);
									$log = $this->db->insert('tblactivitylog',$log_data);
									//return 3;
								}
								$this->db->select('*');
								$this->db->where('AdminId',$row->AdminId);
								$smtp2 = $this->db->get('tbladmin');	

								foreach($smtp2->result() as $rows) {
									$AdminId = $rows->AdminId;
									$FirstName = $rows->FirstName;
									$LastName = $rows->LastName;
									$EmailAddress = $rows->EmailAddress;
									$ResetPasswordCode = $rows->ResetPasswordCode;
								}


								$email_template=$this->db->query("select * from ".$this->db->dbprefix('tblemail_template')." where task='Forgot Password by admin'");
								$email_temp=$email_template->row();
								$email_address_from=$email_temp->from_address;
								$email_address_reply=$email_temp->reply_address;
								$email_subject=$email_temp->subject;        
								$email_message=$email_temp->message;
								$username =$rows->FirstName.' '.$LastName;
								$EmailAddress = $rows->EmailAddress;
							   // $email_to= $EmailAddress;
								$base_url=base_url();
								$forgot_link= '<a href="'.base_url('Login/resetpassword/'.$ResetPasswordCode).'">Click Here</a>';
								$currentyear=date('Y');
								$email_message=str_replace('{break}','<br/>',$email_message);
								$email_message=str_replace('{base_url}',$base_url,$email_message);
								$email_message=str_replace('{year}',$currentyear,$email_message);
								$email_message=str_replace('{username}',$username,$email_message);
								$email_message=str_replace('{EmailAddress}',$EmailAddress,$email_message);
								$email_message=str_replace('{forgot_link}',$forgot_link,$email_message);
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
								$this->email->subject('Forgot Password Admin To Payroll System');
								$this->email->message($body);
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







		







	







}



