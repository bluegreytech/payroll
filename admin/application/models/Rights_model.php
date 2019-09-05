<?php

class Rights_model extends CI_Model
 {

	function list_rights()
	{
		$this->db->select('*');
		$this->db->from('tblrights');
		$this->db->where('isactive',1);
		$r=$this->db->get();
		$res = $r->result();
		return $res;
	}

	  

	 function checkid($UserId)
		{
			$this->db->select('*');				
			$this->db->where('UserId',$UserId);
			$this->db->from('tbluser');
			$query = $this->db->get();
			if($query->num_rows()>0)
			{
				return $query->row()->UserId; 
				
			}else{
				return 2;
			}
		}

	// function getdata($UserId)
	// {
	// 	$this->db->select('t1.*,t2.*,t3.*');
	// 	$this->db->from('tbluser as t1');
	// 	$this->db->join('tblrightsuser as t2', 't1.UserId = t2.UserId', 'LEFT');
	// 	$this->db->join('tblrights as t3', 't2.rightsid = t3.rightsid', 'LEFT');
	// 	$this->db->where('t1.UserId',$UserId);
	// 	$r=$this->db->get();
	// 	return $query=$r->result();
	// }


	
	function insertdata()
	{	//echo "<pre>";print_r($_POST);die;	
		//$rightsid=$this->input->post('rightsid');
		$data = array();
		$rightsid = count($this->input->post('rightsid'));
		 for($i=0; $i<$rightsid; $i++)
		 {
			$rightsid=$this->input->post('rightsid');
			$UserId=$this->input->post('UserId');
			$rightsid=$this->input->post('rightsid');
			
			$view=$this->input->post('view');
			$add=$this->input->post('add');
			$update=$this->input->post('update');
			$delete=$this->input->post('delete');
	
			$data=array( 
			'UserId'=>$UserId[$i],
			'rightsid'=>$rightsid[$i],
			'views'=>isset($view[$i]) ? $view[$i] : '0',
			'adds'=>isset($add[$i]) ? $add[$i] : '0',
			'updates'=>isset($update[$i]) ? $update[$i] : '0',
			'deletes'=>isset($delete[$i]) ? $delete[$i] : '0',
			'isactive'=>1,
			'createdby'=>1,
			'createdon'=>date('Y-m-d')
			);
				//echo "<pre>";print_r($data);die;
			$this->db->insert('tblrightsuser',$data);
			
		}
		//return true;	
            
	}

	
	// function update_rights($UserId)
	// {	
	// 		// echo "update";die; 
	// 		$UserId=$this->input->post('UserId')
	// 		$data=array(
	// 			'UserId'=>$UserId,
	// 			'City'=>$this->input->post('City')
	// 				);
	// 		 print_r($data);die;
	// 		$res=$this->db->insert('tblrightsuser',$data);
	// 		return 1;	      
	// }

	

}
