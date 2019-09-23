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
		$where = array('t1.isdelete' =>'0','t1.hr_type'=>'1');
		$this->db->select('t1.*');
		$this->db->from('tblhr as t1');
		$this->db->where($where);
		$r=$this->db->get();
		$res = $r->result();
		return $res;
	}

	function add_invoice()
	{	
			$companyid=$this->input->post('companyid');
			$hr_id=$this->input->post('hr_id');
			$invoicedate=$this->input->post('invoicedate');
			$duedate=$this->input->post('duedate');
			$totalamount=$this->input->post('totalamount');	
			$taxamount=$this->input->post('taxamount');
			$netamount=$this->input->post('netamount');
			$data=array( 
			'companyid'=>$companyid,
			'hr_id'=>$hr_id,
			'invoicedate'=>$invoicedate,
			'duedate'=>$duedate,
			'totalamount'=>$totalamount, 
			'taxamount'=>$taxamount,
			'netamount'=>$netamount,
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

	}

	public function get_companyinvoice($Companyinvoiceid)
	{
		$this->db->select('t1.*,t2.*,t3.*');
		$this->db->from('tblcompanyinvoice as t1');
		$this->db->join('tblcompany as t2', 't1.companyid = t2.companyid', 'LEFT');
		$this->db->join('tblhr as t3', 't1.hr_id = t3.hr_id', 'LEFT');
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
	//	$this->db->or_where('hr_type','1');
		$query=$this->db->get();
		return $query->row_array();
	}

}
