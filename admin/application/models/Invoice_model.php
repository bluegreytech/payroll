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



	function add_invoice()
	{	
		$this->db->select_max('invoicebillid');
		$this->db->from('tblcompanyinvoice');
		$smtp2 = $this->db->get();
		$result=$smtp2->row_array();
		$invoicebillid = $result['invoicebillid'];
			
		date_default_timezone_set('Asia/Kolkata');
		$resetdate1=date("d-m-Y");
		$resetdate2=date("01-04-Y");
		
				if($resetdate1==$resetdate2)
				{ 
					$n=1;
					for($i = 1; $i<=count($result); $i++) 
					{ 
						$test=str_split($invoicebillid,6);
						if($test[0]!=date('Ym'))
						{					
						  	$k=$i;
						  	$mm=date('Ym'.'-'.$k);
						}else
						{
							$j=str_split($invoicebillid,7);
							$k=$j[1]+1;
							$mm=date('Ym'.'-'.$k);
						}

					   

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
						'invoicebillid'=>$mm,
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
						// echo "aaa";
						// die;
						$this->db->insert('tblcompanyinvoice',$data);
						return 1;

						
						
							
					}die;
							
				}
				else
				{ 
					for($i = 1; $i<=count($result); $i++) 
					{ 
					    $j=str_split($invoicebillid,7);
						$k=$j[1]+1;
						$mm=date('Ym'.'-'.$k);

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
						'invoicebillid'=>$mm,
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
						// echo "bbb";
						// die;
						$this->db->insert('tblcompanyinvoice',$data);
						return 1;

					
					
						
					}
				}
		
	}



	function add_quotation()
	{	
		$this->db->select_max('billid');
		$this->db->from('tblquotation');
		$smtp2 = $this->db->get();
		$result=$smtp2->row_array();
		$billid = $result['billid'];
			
		date_default_timezone_set('Asia/Kolkata');
		$resetdate1=date("d-m-Y");
		$resetdate2=date("01-04-Y");


				if($resetdate1==$resetdate2)
				{
					$n=1;
					for($i = 1; $i<=count($result); $i++) 
					{ 
						$test=str_split($billid,6);
						if($test[0]!=date('Ym'))
						{					
						  	$k=$i;
						  	$mm=date('Ym'.'-'.$k);
						}else
						{
							$j=str_split($billid,7);
							$k=$j[1]+1;
							$mm=date('Ym'.'-'.$k);
						}
							
						$companytypeid=$this->input->post('companytypeid');
						$companyname=$this->input->post('companyname');	
						$companyemail=$this->input->post('companyemail');
						$comcontactnumber=$this->input->post('comcontactnumber');
						$quotationdate=$this->input->post('quotationdate');
						$indate = str_replace('/', '-', $quotationdate );
						$invdate = date("Y-m-d", strtotime($indate));
						$companyaddress=$this->input->post('companyaddress');
						$otherinformation=$this->input->post('otherinformation');
						$totalamount=$this->input->post('totalamount');
				
						$data=array( 
						'billid'=>$mm,
						'companytypeid'=>$companytypeid,
						'companyname'=>$companyname,
						'companyemail'=>$companyemail,
						'comcontactnumber'=>$comcontactnumber,
						'quotationdate'=>$invdate,
						'companyaddress'=>$companyaddress,
						'otherinformation'=>$otherinformation,
						'totalamount'=>$totalamount
						);

						// print_r($data);
						// echo "aaa";
						// die;
						$this->db->insert('tblquotation',$data);
						//return 1;	
						$insert_id = $this->db->insert_id();
						$quotationdetail=$this->input->post('quotationdetail');
						$quotationrate=$this->input->post('quotationrate');
						$data2 = array();
						$quotationdetails = count(array_filter($this->input->post('quotationdetail')));
						for($i=0; $i<$quotationdetails; $i++)
						{
							if($quotationdetail!='' || $quotationdetail!=null || $quotationdetail!='0')
							{	
								$data2=array( 
								'quotationid'=>$insert_id,
								'quotationdetail'=>isset($quotationdetail[$i]) ? $quotationdetail[$i] : '0',
								'quotationrate'=>isset($quotationrate[$i]) ? $quotationrate[$i] : '0',
								);
								// echo "<pre>";print_r($data2);
								$this->db->insert('tblquotationdetail',$data2);	

							}

						}
						return 1;	
					}
				}
				else
				{
					for($i = 1; $i<=count($result); $i++) 
					{ 
					    $j=str_split($billid,7);
						$k=$j[1]+1;
						$mm=date('Ym'.'-'.$k);
						
						$companytypeid=$this->input->post('companytypeid');
						$companyname=$this->input->post('companyname');	
						$companyemail=$this->input->post('companyemail');
						$comcontactnumber=$this->input->post('comcontactnumber');
						$quotationdate=$this->input->post('quotationdate');
						$indate = str_replace('/', '-', $quotationdate );
						$invdate = date("Y-m-d", strtotime($indate));
						$companyaddress=$this->input->post('companyaddress');
						$otherinformation=$this->input->post('otherinformation');
						$totalamount=$this->input->post('totalamount');
				
						$data=array( 
						'billid'=>$mm,
						'companytypeid'=>$companytypeid,
						'companyname'=>$companyname,
						'companyemail'=>$companyemail,
						'comcontactnumber'=>$comcontactnumber,
						'quotationdate'=>$invdate,
						'companyaddress'=>$companyaddress,
						'otherinformation'=>$otherinformation,
						'totalamount'=>$totalamount
						);

						// print_r($data);
						// echo "bbb";
						// die;
						$this->db->insert('tblquotation',$data);
						//return 1;	
						$insert_id = $this->db->insert_id();
						$quotationdetail=$this->input->post('quotationdetail');
						$quotationrate=$this->input->post('quotationrate');
						$data2 = array();
						$quotationdetails = count(array_filter($this->input->post('quotationdetail')));
						for($i=0; $i<$quotationdetails; $i++)
						{
							if($quotationdetail!='' || $quotationdetail!=null || $quotationdetail!='0')
							{	
								$data2=array( 
								'quotationid'=>$insert_id,
								'quotationdetail'=>isset($quotationdetail[$i]) ? $quotationdetail[$i] : '0',
								'quotationrate'=>isset($quotationrate[$i]) ? $quotationrate[$i] : '0',
								);
								// echo "<pre>";print_r($data2);
								$this->db->insert('tblquotationdetail',$data2);	

							}

						}
						return 1;
					}
				}
	}




	
	
	function get_quotation($quotationid)
	{
		$this->db->select('t1.*,t2.*,t3.*');
		$this->db->from('tblquotation as t1');
		$this->db->join('tblcompanytype as t2', 't1.companytypeid = t2.companytypeid', 'LEFT');
		$this->db->join('tblquotationdetail as t3', $quotationid.'= t3.quotationid', 'LEFT');
		$this->db->where('t1.quotationid',$quotationid);
		$query=$this->db->get();
		return $query->row_array();
	}

	function list_quotationdetail($quotationid)
	{
		$where = array('t2.isdelete' =>'0','t2.quotationid'=>$quotationid);
		$this->db->select('t1.*,t2.*');
		$this->db->from('tblquotation as t1');
		$this->db->join('tblquotationdetail as t2', 't1.quotationid = t2.quotationid', 'LEFT');	
		// $this->db->where('t1.quotationid',$quotationid);
		$this->db->where($where);
		$r=$this->db->get();
		$res = $r->result();
		return $res;
	}

	function update_quotation()
	{
		$quotationid=$this->input->post('quotationid');
		$quotationdetailid=$this->input->post('quotationdetailid');

		$quotationdate=$this->input->post('quotationdate');
		$indate = str_replace('/', '-', $quotationdate );
		$invdate = date("Y-m-d", strtotime($indate));
		$data=array(
			'quotationid'=>$this->input->post('quotationid'),
			'companytypeid'=>$this->input->post('companytypeid'),
			'companyname'=>$this->input->post('companyname'),
			'companyemail'=>$this->input->post('companyemail'),
			'comcontactnumber'=>$this->input->post('comcontactnumber'),
			'quotationdate'=>$invdate,
			'companyaddress'=>$this->input->post('companyaddress'),
			'otherinformation'=>$this->input->post('otherinformation'),
			'totalamount'=>$this->input->post('totalamount'),
			'updateddate'=>$this->input->post('Y-m-d h:h:i')
				);
			//print_r($data);die;
			$this->db->where("quotationid",$quotationid);
			$this->db->update('tblquotation',$data);	
			//return 1;

		
			$data2 = array();
            $quotationdetails = count(array_filter($this->input->post('quotationdetail')));
			for($i=0; $i<$quotationdetails; $i++)
			{
				$quotationdetail=$this->input->post('quotationdetail');
				$quotationrate=$this->input->post('quotationrate');
				$data2=array( 
				'quotationdetailid'=>$quotationdetailid[$i],
				'quotationid'=>$quotationid,
				'quotationdetail'=>isset($quotationdetail[$i]) ? $quotationdetail[$i] : '0',
				'quotationrate'=>isset($quotationrate[$i]) ? $quotationrate[$i] : '0',
				);
				//echo "<pre>";print_r($data2);
				$this->db->where("quotationdetailid",$quotationdetailid[$i]);
				$this->db->update('tblquotationdetail',$data2);	
			}	
			//die;
				return 1;
	}


	public function get_companyquotation($quotationid)
	{
		$this->db->select('quotation.*,comptype.*,adminbank.*');
		$this->db->from('tblquotation as quotation');
		//$this->db->join('tblquotationdetail as t2', 't1.quotationid = t2.quotationid', 'LEFT');
		$this->db->join('tblcompanytype as comptype', 'quotation.companytypeid = comptype.companytypeid', 'LEFT');
		$this->db->join('tblsitesetting as adminbank','RoleId= adminbank.RoleId', 'LEFT');
		$this->db->where('quotation.quotationid',$quotationid);
		$query=$this->db->get();
			// echo $this->db->last_query();
			// 	echo "<pre>";print_r($query->result());die;
		return $query->row_array();

	}

	public function list_companyquotation($quotationid)
	{
		$this->db->select('t1.*');
		$this->db->from('tblquotationdetail as t1');
		$this->db->where('t1.quotationid',$quotationid);
		// $query=$this->db->get();
		// return $query->row_array();
		$r=$this->db->get();
		$res = $r->result();
		return $res;

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
		//$RoleId=$this->session->userdata('RoleId');
		$this->db->select('compinvoice.*,comp.*,hr.*,bankcompany.*,adminbank.*');
		$this->db->from('tblcompanyinvoice as compinvoice');
		$this->db->join('tblcompany as comp', 'compinvoice.companyid = comp.companyid', 'LEFT');
		$this->db->join('tblhr as hr', 'compinvoice.hr_id = hr.hr_id', 'LEFT');
		$this->db->join('tblcompanybankdetail as bankcompany', 'comp.companyid = bankcompany.companyid', 'LEFT');
		$this->db->join('tblsitesetting as adminbank','RoleId= adminbank.RoleId', 'LEFT');
		//$this->db->join('tbladmin as admin', $AdminId.'= adminbank.AdminId', 'LEFT');
		$this->db->where('compinvoice.Companyinvoiceid',$Companyinvoiceid);
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


	function searchquot_com($option,$keyword1)
	{
			$where=array('t1.isdelete'=>'0');
			$keyword = str_replace('-', ' ', $keyword1);
			$this->db->select('t1.*,t2.*');
			$this->db->from('tblquotation as t1');
			$this->db->join('tblcompanytype as t2', 't1.companytypeid = t2.companytypeid', 'LEFT');
			$this->db->where($where);
			if($option == 'companytype')
			{
				$this->db->like('companytype',$keyword);
			}
			else if($option == 'companyname')
			{
				$this->db->like('companyname',$keyword);
			}
			else if($option == 'companyemail')
			{
				$this->db->like('companyemail',$keyword);
			}
			else if($option == 'comcontactnumber')
			{
				$this->db->like('comcontactnumber',$keyword);
			} 
			
			$query = $this->db->get();

			// echo $this->db->last_query();
			// echo "<pre>";print_r($query->result());die;
			if($query->num_rows() > 0)
			{
				return $query->result();
			}        

	}

	

	function searchby_quo_date($option,$keyword2,$keyword3)
		{
			$keywordinvone = str_replace('/', '-', $keyword2);
			$keywordinvtwo = str_replace('/', '-', $keyword3);
			$this->db->select('t1.*,t2.*');
			$this->db->from('tblquotation as t1');
			$this->db->join('tblcompanytype as t2', 't1.companytypeid = t2.companytypeid', 'LEFT');
			$this->db->where('quotationdate BETWEEN "'. date('Y-m-d', strtotime($keywordinvone)). '" and "'. date('Y-m-d', strtotime($keywordinvtwo)).'"');	
			$query = $this->db->get();
			// echo $this->db->last_query();
			// echo "<pre>";print_r($query->result());die;
			if($query->num_rows() > 0)
			{
				return $query->result();
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

	function list_quotation()
	{
		$this->db->select('t1.*,t2.*');
		$this->db->from('tblquotation as t1');
		$this->db->join('tblcompanytype as t2', 't1.companytypeid = t2.companytypeid', 'LEFT');
		$this->db->where('t1.isdelete','0');
		$this->db->order_by('t1.quotationid','desc');
		$r=$this->db->get();
		$res = $r->result();
		return $res;

	}


}

