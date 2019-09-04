<?php

class Rights_model extends CI_Model
 {

	function list_rights()
	{
		$this->db->select('*');
		$this->db->from('tblrights');
		$r=$this->db->get();
		$res = $r->result();
		return $res;
	}

	


	


	

}
