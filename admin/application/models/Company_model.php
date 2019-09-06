<?php

class Company_model extends CI_Model
{

	function list_rights()
	{
		$this->db->select('*');
		$this->db->from('tblrights');
		$this->db->where('rightsname','company');
		$r=$this->db->get();
		$res = $r->result();
		return $res;
	}
	function list_company(){
		$r=$this->db->select('*')
					->from('tblcompany')
					->get();
		$res = $r->result();
		return $res;

	}


	function list_companytype()
	{
		$this->db->select('*');
		$this->db->from('tblcompanytype');
		$this->db->where('isactive!=',0);
		$this->db->or_where('isdelete!=',1);
		$r=$this->db->get();
		$res = $r->result();
		return $res;
	}

	function list_companyto()
	{
		$this->db->select('*');
		$this->db->from('tblcompanytype');
		$this->db->where('isactive',1);
		$this->db->or_where('isdelete!=',1);
		$r=$this->db->get();
		$res = $r->result();
		return $res;
	}

	function list_complianceto()
	{
		$this->db->select('*');
		$this->db->from('tblcompliances');
		$this->db->where('isactive',1);
		$r=$this->db->get();
		$res = $r->result();
		return $res;
	}

	function list_compliance()
	{
		$this->db->select('*');
		$this->db->from('tblcompliances');
		$this->db->where('isactive!=',0);
		$this->db->or_where('isdelete!=',1);
		$r=$this->db->get();
		$res = $r->result();
		return $res;

	}

	
	function list_state(){
		$r=$this->db->select('*')
					->from('tblstate')
					->where('statename','Gujarat')
					->or_where('isactive',1)
					->get();
		$res = $r->result();
		return $res;

	}
	
	function search($option,$keyword)
	{
			$keyword = str_replace('-', ' ', $keyword);
			$this->db->select('t1.*,t2.*');
			$this->db->from('tblcompany as t1');
			$this->db->join('tblcompanytype as t2', 't1.companytypeid = t2.companytypeid', 'LEFT');
			$this->db->or_where('t1.isdelete!=',1);
			if($option == 'companytype')
			{
				$this->db->like('companytype',$keyword);
			}
			else if($option == 'companyname')
			{
				$this->db->like('companyname',$keyword);
			}
			else if($option == 'comemailaddress')
			{
				$this->db->like('comemailaddress',$keyword);
			}
			else if($option == 'comcontactnumber')
			{
				$this->db->where('comcontactnumber',$keyword);
			} 
			$this->db->order_by('companyid','desc');	
			$query = $this->db->get();	
			if($query->num_rows() > 0)
			{
				return $query->result();
			} 
			// else
			// {
			// 	return 2;
			// }
				    
		}

		function list_licence_company(){
			$this->db->select('*');
			$this->db->from('tblcompany');
			$query = $this->db->get();
			//$res = $query->result_array();
			//echo "<pre>";print_r($res);die;
			$array=array();
			foreach($query->result() as $rows) {
				$companyid = $rows->companyid;
				$companyname = $rows->companyname;
				$comemailaddress = $rows->comemailaddress;	
				$digitalsignaturedate = $rows->digitalsignaturedate;
							
				$today = date('Y-m-d');
				$datetime1 = date_create($today);
				$datetime2 = date_create($digitalsignaturedate);
				$interval = date_diff($datetime1, $datetime2);
				echo $dd= $interval->format('%R%a');echo "<br>";
				$dd=$interval->format('%R%a');
				if($dd=='+15' || $dd=='+10')
				{


					$email_template=$this->db->query("select * from ".$this->db->dbprefix('tblemail_template')." where task='Company licence notification'");
					$email_temp=$email_template->row();
					$email_address_from=$email_temp->from_address;
					$email_address_reply=$email_temp->reply_address;
					$email_subject=$email_temp->subject;        
					$email_message=$email_temp->message;
					
					$companyname =$rows->companyname;
					$comemailaddress = $rows->comemailaddress;
		
					$base_url=base_url();
					$currentyear=date('Y');
					$email_message=str_replace('{break}','<br/>',$email_message);
					$email_message=str_replace('{base_url}',$base_url,$email_message);
					$email_message=str_replace('{year}',$currentyear,$email_message);
					$email_message=str_replace('{companyname}',$companyname,$email_message);
					$email_message=str_replace('{digitalsignaturedate}',$digitalsignaturedate,$email_message);
					
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
					$this->email->to($comemailaddress);		
					$this->email->subject('Your company licence will be expire notification');
					$this->email->message($body);
					if($this->email->send())
					{
						//return true;
					}else
					{
					//	return false;
					}
				}
						
						
			}
			//die;
			//return $res;
		}

		function checkResetCode($code)
		{
			$query=$this->db->get_where('tblcompany',array('verificationcode'=>$code));
			if($query->num_rows()>0)
			{
				//return $query->row_array();
				$row = $query->row();
				$companyid=$row->companyid;

				$data=array('verificationcode'=>'','emailverifystatus'=>'Verify');
				$this->db->where(array('companyid'=>$companyid,'verificationcode'=>$code));
				$this->db->update('tblcompany',$data);
			
				$this->db->select('t1.*,t2.*');
				$this->db->from('tblcompany as t1');
				$this->db->join('tblcompanytype as t2', 't1.companytypeid = t2.companytypeid', 'LEFT');
				$this->db->where('t1.companyid',$companyid);
				$smtp2 = $this->db->get('tblcompany');	
				foreach($smtp2->result() as $rows) {
					$companyid = $rows->companyid;
					$companytypeid = $rows->companytypeid;
					$companytype = $rows->companytype;
					$companyname = $rows->companyname;
					$comemailaddress = $rows->comemailaddress;	
				}

					$email_template=$this->db->query("select * from ".$this->db->dbprefix('tblemail_template')." where task='Company verification complete'");
				$email_temp=$email_template->row();
				$email_address_from=$email_temp->from_address;
				$email_address_reply=$email_temp->reply_address;
				$email_subject=$email_temp->subject;        
				$email_message=$email_temp->message;
				
				$companyname =$rows->companyname;
				$comemailaddress = $rows->comemailaddress;
	
				$base_url=base_url();
				$currentyear=date('Y');
				$email_message=str_replace('{break}','<br/>',$email_message);
				$email_message=str_replace('{base_url}',$base_url,$email_message);
				$email_message=str_replace('{year}',$currentyear,$email_message);
				$email_message=str_replace('{username}',$companyname,$email_message);
				//$email_message=str_replace('{comemailaddress}',$comemailaddress,$email_message);
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
				$this->email->to($comemailaddress);		
				$this->email->subject('Company verification complete to Payroll System');
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

		

	function add_company()
	{	
			$this->db->select('*');
			$this->db->where('comemailaddress',$this->input->post('comemailaddress'));
			$query=$this->db->get('tblcompany');
			if($query->num_rows() > 0)
			{
					return 3;
			}

			$code=rand(12,123456789);
			$companytypeid=$this->input->post('companytypeid');
			$companyname=$this->input->post('companyname');
			$comemailaddress=$this->input->post('comemailaddress');
			$comcontactnumber=$this->input->post('comcontactnumber');
			$gstnumber=$this->input->post('gstnumber');	
			$companylogo=$this->input->post('companylogo');
			$digitalsignaturedate=$this->input->post('digitalsignaturedate');	
			$companyaddress=$this->input->post('companyaddress');
			$stateid=$this->input->post('stateid');
			$companycity=$this->input->post('companycity');
			$pincode=$this->input->post('pincode');	
			$isactive=$this->input->post('isactive');
			$complianceid=implode(',',$this->input->post('complianceid'));
			$data=array( 
			'companytypeid'=>$companytypeid,
			'companyname'=>$companyname,
			'comemailaddress'=>$comemailaddress,
			'comcontactnumber'=>$comcontactnumber,
			'gstnumber'=>$gstnumber, 
			'digitalsignaturedate'=>$digitalsignaturedate,
			'companyaddress'=>$companyaddress,
			'stateid'=>$stateid,
			//'companylogo'=>$companylogo,
			'companycity'=>$companycity,
			'pincode'=>$pincode,
			'verificationcode'=>$code,
			'isactive'=>$isactive,
			'createdby'=>1,
			'createdon'=>date("Y-m-d h:i:s")
			);
			// print_r($data);
			// die;
			$this->db->insert('tblcompany',$data);	
			$insert_id = $this->db->insert_id();
			$data2=array( 
				'companyid'=>$insert_id,
				'complianceid'=>$complianceid,
				'isactive'=>$isactive,
				'createdby'=>1,
				'createdon'=>date("Y-m-d h:i:s")
				);
			$this->db->insert('tblcompanycompliances',$data2);	
			if($insert_id!=''){
				$this->db->select('t1.*,t2.*');
				$this->db->from('tblcompany as t1');
				$this->db->join('tblcompanytype as t2', 't1.companytypeid = t2.companytypeid', 'LEFT');
				$this->db->where('t1.companyid',$insert_id);
				$smtp2 = $this->db->get('tblcompany');	
				foreach($smtp2->result() as $rows) {
					$companyid = $rows->companyid;
					$companytypeid = $rows->companytypeid;
					$companytype = $rows->companytype;
					$companyname = $rows->companyname;
					$comemailaddress = $rows->comemailaddress;
					$verificationcode = $rows->verificationcode;	
				}

					$email_template=$this->db->query("select * from ".$this->db->dbprefix('tblemail_template')." where task='Company verification'");
					$email_temp=$email_template->row();
					$email_address_from=$email_temp->from_address;
					$email_address_reply=$email_temp->reply_address;
					$email_subject=$email_temp->subject;        
					$email_message=$email_temp->message;
					
					$companyname =$rows->companyname;
					$comemailaddress = $rows->comemailaddress;
		
					$base_url=base_url();
					$verification_link=  '<a href="'.site_url('Company/checkcode/'.$code).'">Click Here</a>';
					
					$currentyear=date('Y');
					$email_message=str_replace('{break}','<br/>',$email_message);
					$email_message=str_replace('{base_url}',$base_url,$email_message);
					$email_message=str_replace('{year}',$currentyear,$email_message);
					$email_message=str_replace('{companyname}',$companyname,$email_message);
					$email_message=str_replace('{comemailaddress}',$comemailaddress,$email_message);
					$email_message=str_replace('{verification_link}',$verification_link,$email_message);
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
					$this->email->to($comemailaddress);		
					$this->email->subject('Forgot Password Admin To Payroll System');
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
			//return $res;
	}

	function add_companytype()
	{	
			$companytype=$this->input->post('companytype');
			$isactive=$this->input->post('isactive');
			$comcontactnumber=$this->input->post('comcontactnumber');
			$gstnumber=$this->input->post('gstnumber');	
			$isactive=$this->input->post('isactive');
			$data=array( 
			'companytype'=>$companytype,
			'isactive'=>$isactive,
			'createdby'=>1,
			'createdon'=>date("Y-m-d h:i:s")
			);
			// print_r($data);
			// die;
			$res=$this->db->insert('tblcompanytype',$data);	
			return $res;
	}

	function get_company($companyid)
	{
		$this->db->select('t1.*,t2.*,t3.*,t4.*');
		$this->db->from('tblcompany as t1');
		$this->db->join('tblcompanytype as t2', 't1.companytypeid = t2.companytypeid', 'LEFT');
		$this->db->join('tblcompanycompliances as t3', 't1.companyid = t3.companyid', 'LEFT');
		$this->db->join('tblstate as t4', 't1.stateid = t4.stateid', 'LEFT');
		$this->db->where('t1.companyid',$companyid);
		$query=$this->db->get();
		return $query->row_array();
	}

	// function get_company($companyid)
	// {
	// 	$query=$this->db->select('*')
	// 		->from('tblcompany')
	// 		->where('companyid',$companyid)
	// 		->get();
	// 		return $query->row_array();
	// }

	function get_companytype($companytypeid)
	{
		$query=$this->db->select('*')
			->from('tblcompanytype')
			->where('companytypeid',$companytypeid)
			->get();
			return $query->row_array();
	}

	
	function get_compliance($complianceid)
	{
		$query=$this->db->select('*')
			->from('tblcompliances')
			->where('complianceid',$complianceid)
			->get();
			return $query->row_array();
	}

	function add_compliance()
	{	
			$compliancename=$this->input->post('compliancename');
			$compliancepercentage=$this->input->post('compliancepercentage');
			$isactive=$this->input->post('isactive');
			$data=array( 
			'compliancename'=>$compliancename,
			'compliancepercentage'=>$compliancepercentage,
			'isactive'=>$isactive,
			'createdby'=>1,
			'createdon'=>date("Y-m-d h:i:s")
			);
			// print_r($data);
			// die;
			$res=$this->db->insert('tblcompliances',$data);	
			return $res;
	}

	function update_company()
	{	
		     
		$companyid=$this->input->post('companyid');
		$companycomplianceid=$this->input->post('companycomplianceid');
		$data=array(
			'companyid'=>$this->input->post('companyid'),
			'companytypeid'=>$this->input->post('companytypeid'),
			'companyname'=>$this->input->post('companyname'),
			'comemailaddress'=>$this->input->post('comemailaddress'),
			'comcontactnumber'=>$this->input->post('comcontactnumber'),
			'gstnumber'=>$this->input->post('gstnumber'),
			'digitalsignaturedate'=>$this->input->post('digitalsignaturedate'),
			'companyaddress'=>$this->input->post('companyaddress'),
			'stateid'=>$this->input->post('stateid'),
			'companycity'=>$this->input->post('companycity'),
			'pincode'=>$this->input->post('pincode'),
			'isactive'=>$this->input->post('isactive'),
				);
			//print_r($data);die;
			$this->db->where("companyid",$companyid);
			$this->db->update('tblcompany',$data);	
			//return 1;	
		if($companycomplianceid!='')
		{
			$complianceid=implode(',',$this->input->post('complianceid'));
			$data2=array( 
				'companycomplianceid'=>$companycomplianceid,
				'companyid'=>$companyid,
				'complianceid'=>$complianceid,
				'isactive'=>$this->input->post('isactive'),
				'createdby'=>1,
				'createdon'=>date("Y-m-d h:i:s")
				);
			$this->db->where("companycomplianceid",$companycomplianceid);
			$this->db->update('tblcompanycompliances',$data2);
			return 1;	 	

		} 
			
	}

	function update_companytype()
	{
		$companytypeid=$this->input->post('companytypeid');
		$data=array(
			'companytypeid'=>$this->input->post('companytypeid'),
			'companytype'=>$this->input->post('companytype'),
			'isactive'=>$this->input->post('isactive')
				);
			//print_r($data);die;
			$this->db->where("companytypeid",$companytypeid);
			$this->db->update('tblcompanytype',$data);	
			return 1;
	}

	function update_compliance()
	{	
		     
		$complianceid=$this->input->post('complianceid');
		$data=array(
			'complianceid'=>$this->input->post('complianceid'),
			'compliancename'=>$this->input->post('compliancename'),
			'compliancepercentage'=>$this->input->post('compliancepercentage'),
			'isactive'=>$this->input->post('isactive')
				);
			//print_r($data);die;
			$this->db->where("complianceid",$complianceid);
			$this->db->update('tblcompliances',$data);	
			return 1;	      
	}


}
