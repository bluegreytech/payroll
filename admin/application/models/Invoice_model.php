<?php



class Invoice_model extends CI_Model

 {

	function list_companyinvoice()

	{

		$this->db->select('t1.*,t2.*,t3.*');

		$this->db->from('tblcompanyinvoice as t1');

		$this->db->join('tblcompany as t2', 't1.companyid = t2.companyid', 'LEFT');

		$this->db->join('tblhr as t3', 't1.hr_id = t3.hr_id', 'LEFT');

		$this->db->where('t1.isdelete','0');

	//	$this->db->order_by('t3.hr_type','1');

		$query=$this->db->get();

		$res=$query->result();

		return $res;

	}



	function list_company()

	{

		    $where = array('isdelete' =>'0');

			$this->db->select('*');

			$this->db->from('tblcompany as t1');

			$this->db->where($where);

			$r=$this->db->get();

			$res = $r->result();

			return $res;

	}



	function list_hr()

	{

		$where = array('t1.Is_deleted' =>'0','t1.hr_type'=>'1');

		$this->db->select('t1.*');

		$this->db->from('tblhr as t1');

		$this->db->where($where);

		$r=$this->db->get();

		$res = $r->result();

		return $res;

	}

	function add_email($companyid)
	{
			//echo $companyid;die;
			$this->db->select('t1.*');
			$this->db->from('tblcompany as t1');
			$this->db->where('t1.companyid',$companyid);
			// $r=$this->db->get();
			// $res = $r->result();
			// return $res;
			$smtp2 = $this->db->get();	
			foreach($smtp2->result() as $rows) {
			echo	$companyid = $rows->companyid;
			echo	$companyname = $rows->companyname;
			echo	$comemailaddress = $rows->comemailaddress;
			
			}



				// $email_template=$this->db->query("select * from ".$this->db->dbprefix('tblemail_template')." where task='Company verification'");

				// $email_temp=$email_template->row();

				// $email_address_from=$email_temp->from_address;

				// $email_address_reply=$email_temp->reply_address;

				// $email_subject=$email_temp->subject;        

				// $email_message=$email_temp->message;

				//$email_message=$Notificationdescription;

				$str='Testing'; 
				// $email_config = Array(
				// 	'protocol'  => 'smtp',
				// 	'smtp_host' => 'relay-hosting.secureserver.net',
				// 	'smtp_port' => '465',
				// 	'smtp_user' => 'mitesh@bluegreytech.co.in',
				// 	'smtp_pass' => 'Test@123',
				// 	'mailtype'  => 'html',
				// 	'starttls'  => true,
				// 	'newline'   => "\r\n",
				// 	'charset'=>'utf-8',
				// 	'header'=> 'MIME-Version: 1.0',
				// 	'header'=> 'Content-type:text/html;charset=UTF-8',
				// 	);
				// $this->load->library('email', $email_config);   

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
				$this->email->subject('Invoice send to company');
				$this->email->message($body);
				if($this->email->send())
				{
					return 1;
				}else
				{
					return 2;
				}

	}

	function add_invoice()
	{	
			$companyid=$this->input->post('companyid');
			$hr_id=$this->input->post('hr_id');
			$paymentopt=$this->input->post('paymentopt');
			
			$invoicedate=$this->input->post('invoicedate');
			$indate = str_replace('/', '-', $invoicedate );
			$invdate = date("Y-m-d", strtotime($indate));

			$duedate=$this->input->post('duedate');
			$ddate = str_replace('/', '-', $duedate);
			$dueedate = date("Y-m-d", strtotime($ddate));

			$amount=$this->input->post('amount');	
			$totalamount=$this->input->post('totalamount');	
			$addtax=$this->input->post('addtax');	
			$taxamount=$this->input->post('taxamount');
			$cgstamount=$this->input->post('cgstamount');
			$netamount=$this->input->post('netamount');
			$Otherinformation=$this->input->post('Otherinformation');
			
			$data=array( 
			'companyid'=>$companyid,
			'hr_id'=>$hr_id,
			'paymentopt'=>$paymentopt,
			'invoicedate'=>$invdate,
			'duedate'=>$dueedate,
			'amount'=>$amount, 
			'totalamount'=>$totalamount, 
			'addtax'=>$addtax, 
			'taxamount'=>$taxamount,
			'cgstamount'=>$cgstamount,
			'netamount'=>$netamount,
			'Otherinformation'=>$Otherinformation,
			'status'=>'Pending',
			'Isactive'=>'Aactive'
			);

			// print_r($data);
			// die;

			$this->db->insert('tblcompanyinvoice',$data);

			return 1;		



	}



	public function update_invoice()
	{
		$Companyinvoiceid=$this->input->post('Companyinvoiceid');
		$invoicedate=$this->input->post('invoicedate');

		$indate = str_replace('/', '-', $invoicedate );
		$invdate = date("Y-m-d", strtotime($indate));

		$duedate=$this->input->post('duedate');
		$ddate = str_replace('/', '-', $duedate);
		$dueedate = date("Y-m-d", strtotime($ddate));
		$data=array(
			'companyid'=>$this->input->post('companyid'),
			'hr_id'=>$this->input->post('hr_id'),
			'paymentopt'=>$this->input->post('paymentopt'),
			'invoicedate'=>$invdate,
			'duedate'=>$dueedate,
			'amount'=>$this->input->post('amount'),
			'totalamount'=>$this->input->post('totalamount'),
			'addtax'=>$this->input->post('addtax'),
			'taxamount'=>$this->input->post('taxamount'),
			'cgstamount'=>$this->input->post('cgstamount'),
			'netamount'=>$this->input->post('netamount'),
			'Otherinformation'=>$this->input->post('Otherinformation')
				);

			//print_r($data);die;
			$this->db->where("Companyinvoiceid",$Companyinvoiceid);
			$this->db->update('tblcompanyinvoice',$data);	
			return 1;	 	

		

	}







	public function get_companyinvoice($Companyinvoiceid)
	{
		$AdminId=$this->session->userdata('AdminId');
		$this->db->select('t1.*,t2.*,t3.*,t4.*,t5.*');
		$this->db->from('tblcompanyinvoice as t1');
		$this->db->join('tblcompany as t2', 't1.companyid = t2.companyid', 'LEFT');
		$this->db->join('tblhr as t3', 't1.hr_id = t3.hr_id', 'LEFT');
		$this->db->join('tblcompanybankdetail as t4', 't2.companyid = t4.companyid', 'LEFT');
		$this->db->join('tbladmin as t5', $AdminId.'= t5.AdminId', 'LEFT');
		$this->db->where('t1.Companyinvoiceid',$Companyinvoiceid);
		$query=$this->db->get();
		return $query->row_array();

	}



	function get_invoice($Companyinvoiceid)

	{

		$this->db->select('t1.*,t2.*,t3.*');

		$this->db->from('tblcompanyinvoice as t1');

		$this->db->join('tblcompany as t2', 't1.companyid = t2.companyid', 'LEFT');

		$this->db->join('tblhr as t3', 't1.hr_id = t3.hr_id', 'LEFT');

		$this->db->where('t1.Companyinvoiceid',$Companyinvoiceid);

		$query=$this->db->get();

		return $query->row_array();

	}



	function getdatahr($companyid)

	{

		$where = array('companyid' =>$companyid, 'hr_type' =>'1');

		$this->db->select('*');

		$this->db->from('tblhr');

		$this->db->where($where);

		$query=$this->db->get();

		return $query->row_array();

	}



	function search($option,$keyword)
	{
		
			$where=array('t1.isdelete'=>'0');
			//$where=array('t1.status'=>'Paid');
			$keyword = str_replace('-', ' ', $keyword);
			$this->db->select('t1.*,t2.*,t3.*');
			$this->db->from('tblcompanyinvoice as t1');
			$this->db->join('tblcompany as t2', 't1.companyid = t2.companyid', 'LEFT');
			$this->db->join('tblhr as t3', 't1.hr_id = t3.hr_id', 'LEFT');
			$this->db->where($where);
				if($option == 'companyname')
				{
					$this->db->like('companyname',$keyword);
				}
			    $query = $this->db->get();
				// echo $this->db->last_query();
				// echo "<pre>";print_r($query->result());die;
				if($query->num_rows() > 0)
				{
					return $query->result();
				}        

		}
		function searchbystatus($option,$keyword2)
		{
			
			$where=array('t1.isdelete'=>'0');
			//$where=array('t1.status'=>'Paid');
			$keyword = str_replace('-', ' ', $keyword2);
			$this->db->select('t1.*,t2.*,t3.*');
			$this->db->from('tblcompanyinvoice as t1');
			$this->db->join('tblcompany as t2', 't1.companyid = t2.companyid', 'LEFT');
			$this->db->join('tblhr as t3', 't1.hr_id = t3.hr_id', 'LEFT');
			$this->db->where($where);
			
				if($option == 'status')
				{
				$this->db->like('status',$keyword2);
				}
				
			    $query = $this->db->get();
				// echo $this->db->last_query();
				// echo "<pre>";print_r($query->result());die;
				if($query->num_rows() > 0)
				{
					return $query->result();
				}        

		}

		function searchbydate($option,$keyword3,$keyword4)
		{
			$keywordinvone = str_replace('/', '-', $keyword3);
			$keywordinvtwo = str_replace('/', '-', $keyword4);
			$this->db->select('t1.*,t2.*,t3.*');
			$this->db->from('tblcompanyinvoice as t1');
			$this->db->join('tblcompany as t2', 't1.companyid = t2.companyid', 'LEFT');
			$this->db->join('tblhr as t3', 't1.hr_id = t3.hr_id', 'LEFT');
			$this->db->where('invoicedate BETWEEN "'. date('Y-m-d', strtotime($keywordinvone)). '" and "'. date('Y-m-d', strtotime($keywordinvtwo)).'"');	
			$query = $this->db->get();
			// echo $this->db->last_query();
			// echo "<pre>";print_r($query->result());die;
			if($query->num_rows() > 0)
			{
				return $query->result();
			}        

		}


}

