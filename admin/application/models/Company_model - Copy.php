<?php
class Company_model extends CI_Model
{

	function get_id()
	{	

		$insert_id=1;
		$cmpnotification=get_one_record('tblcompanynotification','Companynotificationid',$insert_id);
		$this->db->select('*');
		$this->db->from('tblcomnotdocument');	
		$this->db->where('Companynotificationid',$insert_id);
		$documentdata=$this->db->get();	
		$documentdata->result();
		
	    
			// echo "<pre>";print_r($docarr);die;
			$companyid=explode(",",$cmpnotification->companyid);
			$companyarr=array();
			foreach($companyid as $cnpid)
			{  
				$companydata=get_one_record('tblcompany','companyid',$cnpid);
				$companyarr[]=$companydata->comemailaddress;
			
			}
			$emailto=implode(",",$companyarr);

			$str='Test'; 
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
			$this->email->to($emailto);		
			$this->email->subject('Important notification to company');
			$this->email->message($body);
			foreach($documentdata->result() as $docrow){		
				$atch=base_url().'upload/company_orig/Document_orig/'.$docrow->Documentfile;	
				$this->email->attach($atch);
			
			}
			
	  		if($this->email->send())
			{
				//return 1;
			}else
			{
				return 2;
			}
			
		    
	
	}





	function get_docfile()
	{	

			$insert_id='1';

			$this->db->select('t1.*,t2.*');

			$this->db->from('tblcompanynotification as t1');

			$this->db->join('tblcomnotdocument as t2', 't1.Companynotificationid = t2.Companynotificationid', 'LEFT');

			$this->db->where('t1.Companynotificationid',3);

			$smtp2 = $this->db->get();	

			foreach($smtp2->result() as $rows) {
				$Documentfile = $rows->Documentfile;

			}

		
		$email_message='hiiiiiiii testing';

		$str=$email_message; 

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

		$this->email->to('bluegreyindia@gmail.com');		

		$this->email->subject('Important notification to company');

		$this->email->message($body);

		$this->db->select('t1.*,t2.*');

		$this->db->from('tblcompanynotification as t1');

		$this->db->join('tblcomnotdocument as t2', 't1.Companynotificationid = t2.Companynotificationid', 'LEFT');

		$this->db->where('t1.Companynotificationid',1);

		$smtp3 = $this->db->get();	

		foreach($smtp3->result() as $rows) {

			echo $Documentfile = $rows->Documentfile;

			$atch=base_url().'upload/company/Document/'.$Documentfile;	

			$this->email->attach($atch);

		}

		//die;	

		if($this->email->send())

		{

			return 1;

		}else

		{

			return 2;

		}

	}


	public function send_company_notification()
	{
		$companyid=implode(',',$this->input->post('companyid'));
		$Documenttitle=$this->input->post('Documenttitle');
		$Notificationdescription=$this->input->post('Notificationdescription');	

		$Enddate=$this->input->post('Enddate');
		$bdate = str_replace('/', '-', $Enddate );
		$birth = date("Y-m-d", strtotime($bdate));

		$data=array( 
		'companyid'=>$companyid,
		'Documenttitle'=>$Documenttitle,
		'Notificationdescription'=>$Notificationdescription,
		'Enddate'=>$birth,
		'Isactive'=>'Active',
		'Createdby'=>1,
		'Createdon'=>date("Y-m-d h:i:s")
		);

		$this->db->insert('tblcompanynotification',$data);
		$insert_id = $this->db->insert_id();
		$data = array();
		$user_image='';



		$cpt = count($_FILES['Documentfile']['name']);
		for($i=0; $i<$cpt; $i++)
		{ 

			if(isset($_FILES['Documentfile']) &&  $_FILES['Documentfile']['name']!='')
			{      
				$this->load->library('upload');
				$rand=rand(0,100000); 
				$_FILES['userfile']['name']     =   $_FILES['Documentfile']['name'][$i];
				$_FILES['userfile']['type']     =   $_FILES['Documentfile']['type'][$i];
				$_FILES['userfile']['tmp_name'] =   $_FILES['Documentfile']['tmp_name'][$i];
				$_FILES['userfile']['error']    =   $_FILES['Documentfile']['error'][$i];
				$_FILES['userfile']['size']     =   $_FILES['Documentfile']['size'][$i];
				$config['file_name'] = $rand.'Document';			
				$config['upload_path'] = base_path().'upload/company_orig/Document_orig/';		
				$config['allowed_types'] = 'bmp|jpg|jpeg|png|pdf|doc|docx|ppt|pptx|xls|xlsx';  
				$this->upload->initialize($config);
				if (!$this->upload->do_upload())
				{

					$error =  $this->upload->display_errors();

					echo "<pre>";print_r($error);die;

				} 

				$picture = $this->upload->data();	   
				$this->load->library('image_lib');		   
				$this->image_lib->clear();
				$gd_var='gd2';
			 	$this->image_lib->initialize(array(
					'image_library' => $gd_var,
					'source_image' => base_path().'upload/company_orig/Document_orig/'.$picture['file_name'],
					'new_image' => base_path().'upload/company/Document/'.$picture['file_name'],
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

			}

	

		if($user_image!='')
		{
			$Documentfile[$i]=$user_image;
		}
		else
		{
			$Documentfile[$i]='';
		}


		$data2=array( 
			'Companynotificationid'=>$insert_id,
			'Documentfile'=>$Documentfile[$i],
			'Isactive'=>'Active',
			'Createdby'=>1,
			'Createdon'=>date("Y-m-d h:i:s")
			);
			//print_r($data2); die;
			$this->db->insert('tblcomnotdocument',$data2);	
			$insert_idss = $this->db->insert_id();

		 } 
		 //return 1;

		if($insert_id!='')
		{
			$cmpnotification=get_one_record('tblcompanynotification','Companynotificationid',$insert_id);
			$this->db->select('*');
			$this->db->from('tblcomnotdocument');	
			$this->db->where('Companynotificationid',$insert_id);
			$documentdata=$this->db->get();	
			$documentdata->result();
		
	    
			// echo "<pre>";print_r($docarr);die;
			$companyid=explode(",",$cmpnotification->companyid);
			$companyarr=array();
			foreach($companyid as $cnpid)
			{  
				$companydata=get_one_record('tblcompany','companyid',$cnpid);
				$companyarr[]=$companydata->comemailaddress;
			
			}
			$emailto=implode(",",$companyarr);



					$email_template=$this->db->query("select * from ".$this->db->dbprefix('tblemail_template')." where task='Send notification to Company'");	

					$email_temp=$email_template->row();
					$email_address_from=$email_temp->from_address;
					$email_address_reply=$email_temp->reply_address;
					$email_subject=$email_temp->subject;        
					$email_message=$email_temp->message;
                   
					$base_url=base_url();
					$login_link=  '<a href="'.site_url('Login').'">Click Here</a>';	
                    $currentyear=date('Y');
                    $email_message=str_replace('{break}','<br/>',$email_message);
                  //  $email_message=str_replace('{base_url}',$base_url,$email_message);
                    $email_message=str_replace('{year}',$currentyear,$email_message);
                  //  $email_message=str_replace('{username}',$username,$email_message);
					$email_message=str_replace('{emailto}',$emailto,$email_message);
					$email_message=str_replace('{Notificationdescription}',$Notificationdescription,$email_message);
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
					$this->email->to($emailto);		
					$this->email->subject('Important notification to company');
					$this->email->message($body);
					foreach($documentdata->result() as $docrow){		
						$atch=base_url().'upload/company_orig/Document_orig/'.$docrow->Documentfile;	
						$this->email->attach($atch);
					
					}
					//print_r($this->email->message($body));die;
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



	





	



	function list_company_notification($Companynotificationid)
	{

		$where = array('t1.Companynotificationid' =>$Companynotificationid);

		$this->db->select('t1.*');
		$this->db->from('tblcompanynotification as t1');
		$this->db->where($where);
		$query=$this->db->get();

		// $res = $query->result_array();
		// echo "<pre>";print_r($res);die;

		$array=array();
		foreach($query->result() as $rows) {
			$Companynotificationid = $rows->Companynotificationid;	
			$Enddate = $rows->Enddate;				
			$today = date('Y-m-d');
			$datetime1 = date_create($today);
			$datetime2 = date_create($Enddate);
		
			if($datetime2<=$datetime1)
			{
				$data=array(
					'Companynotificationid'=>$Companynotificationid,
					'Status'=>'Expired'
					);

					//print_r($data);die;
					$this->db->where("Companynotificationid",$Companynotificationid);
					$res=$this->db->update('tblcompanynotification',$data);
					if($res)
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

	}



	function list_companytype()
	{

		$this->db->select('*');
		$this->db->from('tblcompanytype');
		$this->db->where('Is_deleted','0');
		$r=$this->db->get();
		$res = $r->result();
		return $res;

	}



	function list_companyto()
	{
		$where = array('IsActive' =>'Active', 'Is_deleted' =>'0');
		$this->db->select('*');
		$this->db->from('tblcompanytype');
		$this->db->where($where);
		$r=$this->db->get();
		$res = $r->result();
		return $res;
	}


	function list_complianceto()
	{
		$where = array('isdelete' =>'0','compliancetypeid'=>'1');
		$this->db->select('*');
		$this->db->from('tblcompliances');
		$this->db->where($where);
		$r=$this->db->get();
		$res = $r->result();
		return $res;
	}

	function list_compliancededuction()
	{
		$where = array('isdelete' =>'0','compliancetypeid'=>'2');
		$this->db->select('*');
		$this->db->from('tblcompliances');
		$this->db->where($where);
		$r=$this->db->get();
		$res = $r->result();
		return $res;
	}
	





	function list_compliance()
	{
		$this->db->select('*');
		$this->db->from('tblcompliances');
		$this->db->where('isactive!=','0');
		$this->db->or_where('isdelete','0');
		$this->db->order_by('complianceid','desc');
		$r=$this->db->get();
		$res = $r->result();
		return $res;

	}

	function list_state(){
		$r=$this->db->select('*')
					->from('tblstate')
					->where('statename','Gujarat')
					->get();
		$res = $r->result();
		return $res;
	}

	function list_companynotification_detail($Companynotificationid)
	{

			$this->db->select('t1.Companynotificationid,t1.companyid');
			$this->db->from('tblcompanynotification as t1');
			$this->db->join('tblcompany as t2', 't1.companyid = t2.companyid', 'LEFT');
			$this->db->where('t1.Companynotificationid',$Companynotificationid);
			$smtp2 = $this->db->get();
			foreach($smtp2->result() as $rows)
			{
				$companyid= $rows->companyid;
				$userid=explode(",",$rows->companyid);
				$res = array();
				foreach($userid as $usid)
				{
					//echo $usid;
					$this->db->select('t1.*');
					$this->db->from('tblcompany as t1');
					$this->db->where_in('t1.companyid',$usid);
					$query = $this->db->get();
					$res[]=$query->result();
					
				}
				//print_r();die;
				return $res;
		
			}
			
			
			
	}

	function list_companynotification()
	{
			$where = array('t1.Isdelete' =>'0');
			$this->db->select('t1.*,t2.companyname');
			$this->db->from('tblcompanynotification as t1');
			$this->db->join('tblcompany as t2', 't1.companyid = t2.companyid', 'LEFT');
			//$this->db->join('tblcomnotdocument as t3', 't1.Companynotificationid = t3.Companynotificationid', 'LEFT');
			//$this->db->join('tblcompany as t3', 't1.companyid = t3.companyid', 'LEFT');
			$this->db->where($where);
			$this->db->order_by('Companynotificationid','desc');
			$r=$this->db->get();
		
			$res = $r->result();
			return $res;
	}


	function search_company_notification($option,$keyword)
	{
		$where = array('t1.Isdelete' =>'0');
		$keyword2 = str_replace('-', ' ', $keyword);
		$this->db->select('t1.*,t2.companyname');
		$this->db->from('tblcompanynotification as t1');
		$this->db->join('tblcompany as t2', 't1.companyid = t2.companyid', 'LEFT');
		$this->db->where($where);
		if($option == 'companyname')
		{
			$this->db->like('companyname',$keyword2);
		}
		$query = $this->db->get();
		if($query->num_rows() > 0)
		{
		return $query->result();
		}        
	}

	
	function search_title_notification($option,$keyword2)
	{
		$where = array('t1.Isdelete' =>'0');
		$keyword = str_replace('-', ' ', $keyword2);
		$this->db->select('t1.*,t2.companyname');
		$this->db->from('tblcompanynotification as t1');
		$this->db->join('tblcompany as t2', 't1.companyid = t2.companyid', 'LEFT');
		$this->db->where($where);
		if($option == 'Documenttitle')
		{
			$this->db->like('Documenttitle',$keyword);
		}
		$query = $this->db->get();
		if($query->num_rows() > 0)
		{
		return $query->result();
		}        
	}

	
	function search_status_notification($option,$keyword3)
	{
		$where = array('t1.Isdelete' =>'0');
		$keyword = str_replace('-', ' ', $keyword3);
		$this->db->select('t1.*,t2.companyname');
		$this->db->from('tblcompanynotification as t1');
		$this->db->join('tblcompany as t2', 't1.companyid = t2.companyid', 'LEFT');
		$this->db->where($where);
		if($option == 'Status')
		{
			$this->db->like('Status',$keyword);
		}
		$query = $this->db->get();
		if($query->num_rows() > 0)
		{
		return $query->result();
		}        
	}

	
	function search_createdate_notification($option,$keyword4,$keyword5)
	{
		$keywordstaone = str_replace('/', '-', $keyword4);
		$keywordstatwo = str_replace('/', '-', $keyword5);
		$this->db->select('t1.*,t2.companyname');
		$this->db->from('tblcompanynotification as t1');
		$this->db->join('tblcompany as t2', 't1.companyid = t2.companyid', 'LEFT');
		$this->db->where('t1.Enddate BETWEEN "'. date('Y-m-d', strtotime($keywordstaone)). '" and "'. date('Y-m-d', strtotime($keywordstatwo)).'"');	
		$query = $this->db->get();
		if($query->num_rows() > 0)
		{
		return $query->result();
		}        
	}

	function list_company()
	{
		    $where = array('t1.isdelete' =>'0');
			$this->db->select('t1.*,t2.companytype');
			$this->db->from('tblcompany as t1');
			$this->db->join('tblcompanytype as t2', 't1.companytypeid = t2.companytypeid', 'LEFT');
			$this->db->where($where);
			$r=$this->db->get();
			$res = $r->result();
			return $res;
	}

	
	function search_companytype($option,$keyword2)
	{
			$where = array('t1.isdelete' =>'0');
			$keyword = str_replace('-', ' ', $keyword2);
			$this->db->select('t1.*,t2.companytype');
			$this->db->from('tblcompany as t1');
			$this->db->join('tblcompanytype as t2', 't1.companytypeid = t2.companytypeid', 'LEFT');
			$this->db->or_where('t1.isdelete','0');
			$this->db->where($where);
			if($option == 'companyname')
			{
				$this->db->like('companyname',$keyword);
			}
			
			$this->db->order_by('companyid','desc');	
			$query = $this->db->get();	
			if($query->num_rows() > 0)
			{
				return $query->result();
			} 

		}

		
	function search($option,$keyword1)
	{
			$where = array('t1.isdelete' =>'0');
			$keyword = str_replace('-', ' ', $keyword1);
			$this->db->select('t1.*,t2.companytype');
			$this->db->from('tblcompany as t1');
			$this->db->join('tblcompanytype as t2', 't1.companytypeid = t2.companytypeid', 'LEFT');
			$this->db->or_where('t1.isdelete','0');
			$this->db->where($where);
			if($option == 'companytype')
			{
				$this->db->like('companytype',$keyword);
			}
			else if($option == 'comemailaddress')
			{
				$this->db->like('comemailaddress',$keyword);
			}
			else if($option == 'comcontactnumber')
			{
				$this->db->like('comcontactnumber',$keyword);
			}
			else if($option == 'emailverifystatus')
			{
				$this->db->where('emailverifystatus',$keyword);
			}  
			
			$this->db->order_by('companyid','desc');	
			$query = $this->db->get();	
			if($query->num_rows() > 0)
			{
				return $query->result();
			} 

	}


	function search_companyemail($option,$keyword3)
	{
			$where = array('t1.isdelete' =>'0');
			$keyword = str_replace('-', ' ', $keyword3);
			$this->db->select('t1.*,t2.companytype');
			$this->db->from('tblcompany as t1');
			$this->db->join('tblcompanytype as t2', 't1.companytypeid = t2.companytypeid', 'LEFT');
			$this->db->or_where('t1.isdelete','0');
			$this->db->where($where);
			if($option == 'comemailaddress')
			{
				$this->db->like('comemailaddress',$keyword);
			}
			
			$this->db->order_by('companyid','desc');	
			$query = $this->db->get();	
			if($query->num_rows() > 0)
			{
				return $query->result();
			} 

	}

	function search_companycontact($option,$keyword4)
	{
			$where = array('t1.isdelete' =>'0');
			$keyword = str_replace('-', ' ', $keyword4);
			$this->db->select('t1.*,t2.companytype');
			$this->db->from('tblcompany as t1');
			$this->db->join('tblcompanytype as t2', 't1.companytypeid = t2.companytypeid', 'LEFT');
			$this->db->or_where('t1.isdelete','0');
			$this->db->where($where);
			if($option == 'comcontactnumber')
			{
				$this->db->like('comcontactnumber',$keyword);
			}
			
			$this->db->order_by('companyid','desc');	
			$query = $this->db->get();	
			if($query->num_rows() > 0)
			{
				return $query->result();
			} 

	}

	function search_companystatus($option,$keyword5)
	{
			$where = array('t1.isdelete' =>'0');
			$keyword = str_replace('-', ' ', $keyword5);
			$this->db->select('t1.*,t2.companytype');
			$this->db->from('tblcompany as t1');
			$this->db->join('tblcompanytype as t2', 't1.companytypeid = t2.companytypeid', 'LEFT');
			$this->db->or_where('t1.isdelete','0');
			$this->db->where($where);
			if($option == 'emailverifystatus')
			{
				$this->db->like('emailverifystatus',$keyword);
			}
			
			$this->db->order_by('companyid','desc');	
			$query = $this->db->get();	
			if($query->num_rows() > 0)
			{
				return $query->result();
			} 

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
				$verification_link=  '<a href="'.base_url('Login').'">Click Here</a>';
				$currentyear=date('Y');
				$email_message=str_replace('{break}','<br/>',$email_message);
				$email_message=str_replace('{base_url}',$base_url,$email_message);
				$email_message=str_replace('{year}',$currentyear,$email_message);
				$email_message=str_replace('{username}',$companyname,$email_message);
				$email_message=str_replace('{comemailaddress}',$comemailaddress,$email_message);
				$email_message=str_replace('{verification_link}',$verification_link,$email_message);
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



		$this->db->select('*');

		$this->db->where('gstnumber',$this->input->post('gstnumber'));

		$query=$this->db->get('tblcompany');

		if($query->num_rows() > 0)

		{

				return 4;

		}



		$user_image='';

	//$image_settings=image_setting();

	 if(isset($_FILES['companyimage']) &&  $_FILES['companyimage']['name']!='')

	{

		$this->load->library('upload');

		$rand=rand(0,100000); 

		 

	   $_FILES['userfile']['name']     =   $_FILES['companyimage']['name'];

	   $_FILES['userfile']['type']     =   $_FILES['companyimage']['type'];

	   $_FILES['userfile']['tmp_name'] =   $_FILES['companyimage']['tmp_name'];

	   $_FILES['userfile']['error']    =   $_FILES['companyimage']['error'];

	   $_FILES['userfile']['size']     =   $_FILES['companyimage']['size'];



	   $config['file_name'] = $rand.'Company';			

	   $config['upload_path'] = base_path().'upload/company_orig/';		

	   $config['allowed_types'] = 'jpg|jpeg|gif|png|bmp';  



		$this->upload->initialize($config);



		 if (!$this->upload->do_upload())

		 {

		   $error =  $this->upload->display_errors();

		   echo "<pre>";print_r($error);die;

		 } 

		$picture = $this->upload->data();	   

		 $this->load->library('image_lib');		   

		 $this->image_lib->clear();

		 $gd_var='gd2';



		 $this->image_lib->initialize(array(

		   'image_library' => $gd_var,

		   'source_image' => base_path().'upload/company_orig/'.$picture['file_name'],

		   'new_image' => base_path().'upload/company/'.$picture['file_name'],

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

   

	   if($this->input->post('pre_profile_image')!='')

		   {

			   if(file_exists(base_path().'upload/company/'.$this->input->post('pre_profile_image')))

			   {

				   $link=base_path().'upload/company/'.$this->input->post('pre_profile_image');

				   unlink($link);

			   }

			   

			   if(file_exists(base_path().'upload/company_orig/'.$this->input->post('pre_profile_image')))

			   {

				   $link2=base_path().'upload/company_orig/'.$this->input->post('pre_profile_image');

				   unlink($link2);

			   }

		   }

	   } else {

		   if($this->input->post('pre_profile_image')!='')

		   {

			   $user_image=$this->input->post('pre_profile_image');

		   }

	   }

	   if($user_image!='')

	   {

			$companyimage=$user_image;

	   }

	   else

	   {

			$companyimage='';

	   }



			$code=rand(12,123456789);

			$companytypeid=$this->input->post('companytypeid');

			$companyname=$this->input->post('companyname');
			$companycode=strtoupper($this->input->post('companycode'));

			$comemailaddress=$this->input->post('comemailaddress');

			$comcontactnumber=$this->input->post('comcontactnumber');
			$comcontactnumber2=$this->input->post('comcontactnumber2');
			$comlandlinenumber=$this->input->post('comlandlinenumber');
			
			
			$gstnumber=$this->input->post('gstnumber');	
			$companylogo=$this->input->post('companylogo');
			$digitalsignaturedate=$this->input->post('digitalsignaturedate');
			$bdate = str_replace('/', '-', $digitalsignaturedate );
			$birth = date("Y-m-d", strtotime($bdate));
			$companyaddress=$this->input->post('companyaddress');
			$stateid=$this->input->post('stateid');
			$companycity=$this->input->post('companycity');
			$pincode=$this->input->post('pincode');	
			$isactive=$this->input->post('isactive');

			

			$data=array( 
			'companytypeid'=>$companytypeid,
			'companyname'=>$companyname,
			'companycode'=>$companycode,
			'comemailaddress'=>$comemailaddress,
			'comcontactnumber'=>$comcontactnumber,
			'comcontactnumber2'=>$comcontactnumber2,
			'comlandlinenumber'=>$comlandlinenumber,
			'gstnumber'=>$gstnumber, 
			'digitalsignaturedate'=>$birth,
			'companyaddress'=>$companyaddress,
			'stateid'=>$stateid,
			'companycity'=>$companycity,
			'pincode'=>$pincode,
			'verificationcode'=>$code,
			'isactive'=>$isactive,
			'createdby'=>1,
			'createdon'=>date("Y-m-d h:i:s")
			);

			//print_r($data); die;

			$this->db->insert('tblcompany',$data);
			$insert_id = $this->db->insert_id();
			$Shifthours=$this->input->post('Shifthours');
			$Shiftname=$this->input->post('Shiftname');
			$Shiftintime=$this->input->post('Shiftintime');
			$Shiftouttime=$this->input->post('Shiftouttime');

			$data3 = array();
			//$Shiftnames = count($this->input->post('Shiftname'));
        	$Shiftnames = count(array_filter($this->input->post('Shiftname')));

			for($i=0; $i<$Shiftnames; $i++)
			 {
				if($Shiftname!='' || $Shiftname!=null || $Shiftname!='0')
				{	
					$data3=array( 
					'companyid'=>$insert_id,
					'Shifthours'=>$Shifthours,
					'Shiftname'=>isset($Shiftname[$i]) ? $Shiftname[$i] : '0',
					'Shiftintime'=>isset($Shiftintime[$i]) ? $Shiftintime[$i] : '0',
					'Shiftouttime'=>isset($Shiftouttime[$i]) ? $Shiftouttime[$i] : '0',
					);
					 //echo "<pre>";print_r($data3);
					$this->db->insert('tblcompanyshift',$data3);	

				}

			 }	

												 	

				$complianceid=implode(',',$this->input->post('complianceid'));
				$compliancedeductionid=implode(',',$this->input->post('compliancedeductionid'));
				$data2=array( 
					'companyid'=>$insert_id,
					'complianceid'=>$complianceid,
					'compliancedeductionid'=>$compliancedeductionid,
					'isactive'=>$isactive,
					'createdby'=>1,
					'createdon'=>date("Y-m-d h:i:s")
					);

				$this->db->insert('tblcompanycompliances',$data2);	
				$Accountnumber=$this->input->post('Accountnumber');
				$Branch=$this->input->post('Branch');	
				$Bankname=$this->input->post('Bankname');
				$Ifsccode=$this->input->post('Ifsccode');
				$data4=array( 
					'companyid'=>$insert_id,
					'Accountnumber'=>$Accountnumber,
					'Branch'=>$Branch,
					'Bankname'=>$Bankname,
					'Ifsccode'=>$Ifsccode
					);
				$this->db->insert('tblcompanybankdetail',$data4);	
				return 1;

	

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

						$this->email->to($comemailaddress);		

						$this->email->subject('Company verification To Payroll System');

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

	

				return $res;

												 

	

	}





	

	function list_companydocument($companyid)

	{

		$this->db->select('t1.*,t2.*');

		$this->db->from('tblcompanynotification as t1');

		$this->db->join('tblcomnotdocument as t2', 't1.Companynotificationid = t2.Companynotificationid', 'LEFT');

		$this->db->where('companyid',$companyid);

		$r=$this->db->get();

		$res = $r->result();

		return $res;

	}



	function get_companyprofile($companyid)

	{

		$this->db->select('t1.*,t2.*,t3.*,t4.*,t5.*,t6.*');

		$this->db->from('tblcompany as t1');

		$this->db->join('tblcompanytype as t2', 't1.companytypeid = t2.companytypeid', 'LEFT');

		$this->db->join('tblcompanycompliances as t3', 't1.companyid = '.$companyid, 'LEFT');

		$this->db->join('tblstate as t4', 't1.stateid = t4.stateid', 'LEFT');

		$this->db->join('tblcompanynotification as t5', 't1.companyid = t5.companyid', 'LEFT');

		$this->db->join('tblcomnotdocument as t6', 't5.Companynotificationid = t6.Companynotificationid', 'LEFT');

		$this->db->where('t1.companyid',$companyid);

		$query=$this->db->get();

		return $query->row_array();

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
		$this->db->select('t1.*,t2.*,t3.*,t4.*,t5.*,t6.*');
		$this->db->from('tblcompany as t1');
		$this->db->join('tblcompanytype as t2', 't1.companytypeid = t2.companytypeid', 'LEFT');
		$this->db->join('tblcompanycompliances as t3','t1.companyid = t3.companyid', 'LEFT');
		$this->db->join('tblstate as t4', 't1.stateid = t4.stateid', 'LEFT');
		$this->db->join('tblcompanyshift as t5', $companyid.'= t5.companyid', 'LEFT');
		$this->db->join('tblcompanybankdetail as t6', $companyid.'= t6.companyid', 'LEFT');
		$this->db->where('t1.companyid',$companyid);
		$query=$this->db->get();
		return $query->row_array();
	}


	function get_companynotification($Companynotificationid)
	{
		$this->db->select('t1.*,t1.companyid,t2.companyname,t3.*');
		$this->db->from('tblcompanynotification as t1');
		$this->db->join('tblcompany as t2', 't1.companyid = t2.companyid', 'LEFT');
		$this->db->join('tblcomnotdocument as t3', 't1.Companynotificationid = t3.Companynotificationid', 'LEFT');
		$this->db->where('t1.Companynotificationid',$Companynotificationid);
		$query=$this->db->get();
		//echo $this->db->last_query();
		//die;
		return $query->row_array();
	}

	 function list_companydocument_noti($Companynotificationid)
	{
		$this->db->select('t1.*,t3.*');
		$this->db->from('tblcompanynotification as t1');
		$this->db->join('tblcomnotdocument as t3', $Companynotificationid.'= t3.Companynotificationid', 'LEFT');
		$this->db->where('t1.Companynotificationid',$Companynotificationid);
		$query=$this->db->get();
		return $query->row_array();
	}

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


	 function getcompliance($row)
	 {

		$query=$this->db->select('complianceid as compliance_id')
			->from('tblcompliances')
			->where('complianceid',$row)
			->get();
			return $query->row_array();

	 }


	function add_compliance()
	{	
			$compliancetypeid=$this->input->post('compliancetypeid');
			$compliancename=$this->input->post('compliancename');
			$compliancepercentage=$this->input->post('compliancepercentage');
			$isactive=$this->input->post('isactive');
			$data=array( 
			'compliancetypeid'=>$compliancetypeid,
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



	function list_companyshift($companyid)
	{
		$this->db->select('*');
		$this->db->from('tblcompanyshift');	
		$this->db->where('companyid',$companyid);
		$r=$this->db->get();
		$res = $r->result();
		return $res;
	}



	function update_company()
	{	
		$companyid=$this->input->post('companyid');
		$companycomplianceid=$this->input->post('companycomplianceid');
		$Companyshiftid=$this->input->post('Companyshiftid');
		$Bankdetailid=$this->input->post('Bankdetailid');
		//echo "<pre>";print_r($_FILES);die;

		$user_image='';
		//$image_settings=image_setting();
		if(isset($_FILES['companyimage']) &&  $_FILES['companyimage']['name']!='')
		{
			$this->load->library('upload');
			$rand=rand(0,100000);  

		   $_FILES['userfile']['name']     =   $_FILES['companyimage']['name'];

		   $_FILES['userfile']['type']     =   $_FILES['companyimage']['type'];

		   $_FILES['userfile']['tmp_name'] =   $_FILES['companyimage']['tmp_name'];

		   $_FILES['userfile']['error']    =   $_FILES['companyimage']['error'];

		   $_FILES['userfile']['size']     =   $_FILES['companyimage']['size'];

  

		   $config['file_name'] = $rand.'Company';			

		   $config['upload_path'] = base_path().'upload/company_orig/';		

		   $config['allowed_types'] = 'jpg|jpeg|gif|png|bmp';  



			$this->upload->initialize($config);
			 if (!$this->upload->do_upload())
			 {
			   $error =  $this->upload->display_errors();
			   echo "<pre>";print_r($error);die;
			 } 

			 $picture = $this->upload->data();	   
			 $this->load->library('image_lib');		   
			 $this->image_lib->clear();
			 $gd_var='gd2';



			 $this->image_lib->initialize(array(
			   'image_library' => $gd_var,
			   'source_image' => base_path().'upload/company_orig/'.$picture['file_name'],
			   'new_image' => base_path().'upload/company/'.$picture['file_name'],
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
		   if($this->input->post('pre_profile_image')!='')
			   {
				   if(file_exists(base_path().'upload/company/'.$this->input->post('pre_profile_image')))
				   {
					   $link=base_path().'upload/company/'.$this->input->post('pre_profile_image');
					   unlink($link);
				   }
				   if(file_exists(base_path().'upload/company_orig/'.$this->input->post('pre_profile_image')))
				   {
					   $link2=base_path().'upload/company_orig/'.$this->input->post('pre_profile_image');
					   unlink($link2);
				   }
			   }
		   } else {
			   if($this->input->post('pre_profile_image')!='')
			   {
				   $user_image=$this->input->post('pre_profile_image');
			   }
		   }

		   //print_r($user_image);die;

		   $digitalsignaturedate=$this->input->post('digitalsignaturedate');
		   $bdate = str_replace('/', '-', $digitalsignaturedate );
		   $birth = date("Y-m-d", strtotime($bdate));

		$data=array(
			'companyid'=>$this->input->post('companyid'),
			'companytypeid'=>$this->input->post('companytypeid'),
			'companyname'=>$this->input->post('companyname'),
			'companycode'=>$this->input->post('companycode'),
			'comemailaddress'=>$this->input->post('comemailaddress'),
			'comcontactnumber'=>$this->input->post('comcontactnumber'),
			'comcontactnumber2'=>$this->input->post('comcontactnumber2'),
			'comlandlinenumber'=>$this->input->post('comlandlinenumber'),
			'gstnumber'=>$this->input->post('gstnumber'),
			'digitalsignaturedate'=>$birth,
			'companyimage'=>$user_image,
			'companyaddress'=>$this->input->post('companyaddress'),
			'stateid'=>$this->input->post('stateid'),
			'companycity'=>$this->input->post('companycity'),
			'pincode'=>$this->input->post('pincode'),
			'isactive'=>$this->input->post('isactive'),
			'updatedby'=>1,
			'updatedon'=>date("Y-m-d h:i:s")
				);

			//print_r($data);die;
			$this->db->where("companyid",$companyid);
			$this->db->update('tblcompany',$data);	
			if($companycomplianceid!='')
			{
				$complianceid=implode(',',$this->input->post('complianceid'));
				$compliancedeductionid=implode(',',$this->input->post('compliancedeductionid'));
				$data2=array( 
					'companycomplianceid'=>$companycomplianceid,
					'companyid'=>$companyid,
					'compliancedeductionid'=>$compliancedeductionid,
					'complianceid'=>$complianceid,
					'isactive'=>$this->input->post('isactive'),
					'updatedby'=>1,
					'updatedon'=>date("Y-m-d h:i:s")
					);
				$this->db->where("companycomplianceid",$companycomplianceid);
				$this->db->update('tblcompanycompliances',$data2);	
			} 

		

				$data3 = array();
				$Shiftnames = count(array_filter($this->input->post('Shiftname')));
				for($i=0; $i<$Shiftnames; $i++)
				 {
					$Shifthours=$this->input->post('Shifthours');
					$Shiftname=$this->input->post('Shiftname');
					$Shiftintime=$this->input->post('Shiftintime');
					$Shiftouttime=$this->input->post('Shiftouttime');
					$data3=array( 
					'Companyshiftid'=>$Companyshiftid[$i],
					'companyid'=>$companyid,
					'Shifthours'=>$Shifthours,
					'Shiftname'=>isset($Shiftname[$i]) ? $Shiftname[$i] : '0',
					'Shiftintime'=>isset($Shiftintime[$i]) ? $Shiftintime[$i] : '0',
					'Shiftouttime'=>isset($Shiftouttime[$i]) ? $Shiftouttime[$i] : '0',
					);
					//echo "<pre>";print_r($data3);
					$this->db->where("Companyshiftid",$Companyshiftid[$i]);
					$this->db->update('tblcompanyshift',$data3);	
				 }	

		
				if($Bankdetailid!='')
				{
					$Accountnumber=$this->input->post('Accountnumber');
					$Branch=$this->input->post('Branch');	
					$Bankname=$this->input->post('Bankname');
					$Ifsccode=$this->input->post('Ifsccode');


				$data4=array( 
					'Accountnumber'=>$Accountnumber,
					'Branch'=>$Branch,
					'Bankname'=>$Bankname,
					'Ifsccode'=>$Ifsccode
					);
				//	print_r($data4);
					$this->db->where("Bankdetailid",$Bankdetailid);
					$this->db->update('tblcompanybankdetail',$data4);
					return 1;
				}

	}


	function update_companynotification()
	{	
		$Companynotificationid=$this->input->post('Companynotificationid');
		$companyid=implode(',',$this->input->post('companyid'));

		$Enddate=$this->input->post('Enddate');
		$bdate = str_replace('/', '-', $Enddate );
		$birth = date("Y-m-d", strtotime($bdate));

		$data=array(
			'Companynotificationid'=>$this->input->post('Companynotificationid'),
			'companyid'=>$companyid,
			'Documenttitle'=>$this->input->post('Documenttitle'),
			'Notificationdescription'=>$this->input->post('Notificationdescription'),
			'Enddate'=>$birth
				);

			//print_r($data);die;
			$this->db->where("Companynotificationid",$Companynotificationid);
			$this->db->update('tblcompanynotification',$data);	
			return 1;
	}







	function update_companytype()
	{

		$companytypeid=$this->input->post('companytypeid');
		$data=array(
			'companytypeid'=>$this->input->post('companytypeid'),
			'companytype'=>$this->input->post('companytype'),
			'IsActive'=>$this->input->post('IsActive')
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
			'compliancetypeid'=>$this->input->post('compliancetypeid'),
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



