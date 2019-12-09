<?php
class Salary_model extends CI_Model
{
	public function __construct() {
        parent::__construct();
		$this->load->dbforge();
	}

	function empsetsalary_insert(){
        //echo "<pre>";print_r($_POST);
        $this->db->select('*');
        $this->db->from('tblcompliances');
        $this->db->where('companyid',$this->session->userdata('companyid'));
        $query=$this->db->get();		
        $res=$query->result();


        // foreach ($res as $row) {
        //   	echo "<pre>";print_r($row);
          	
          
		//for($i=0;$i<count($this->input->post('complianceid'));$i++){
    	    
         	 // echo   $this->input->post('complianceid')[$i].'='.$this->input->post('compliancevalue')[$i]."<br>";

         	  $complianceid =implode(",", $this->input->post('complianceid'));         	
         	  $compliancevalue =implode(",", $this->input->post('compliancevalue')); 
              if($this->input->post('otherdeductionname')){
                 $otherdeductionname=implode(",", $this->input->post('otherdeductionname')); 
             }else{
                $otherdeductionname='';
             }
             if($this->input->post('otherdeductionvalue')){
                 $otherdeductionvalue=implode(",", $this->input->post('otherdeductionvalue')); 
             }else{
                $otherdeductionvalue='';
             }
         	 
         	 // $otherdeductionvalue=implode(",", $this->input->post('otherdeductionvalue')); 


         	    $data=array(
         	     	'company_id'=>$this->session->userdata('companyid'),         	     
         	     	'emp_id'=>$this->input->post('emp_id'),
         	     	'salary_month'=>$this->input->post('salary_month'),
					'netpay'=>$this->input->post('netpay'),
					'payword'=>$this->input->post('payword'),
					'totaldeduction'=>$this->input->post('totaldeduction'),
                    'gross_earning'=>$this->input->post('gross_earning'),
					'otherdeductionname'=>$otherdeductionname,
					'otherdeductionvalue'=>$otherdeductionvalue,
         	     	'compliancevalue'=> $compliancevalue,
         	        'complianceid'=> $complianceid,
         	     	'created_date'=>date('Y-m-d H:i:s'),
         	    );
            
         	 
         	    $res=$this->db->insert('tblempsetsalary',$data);
 
	}

    function empsetsalary_list(){
        $this->db->select('*');
        $this->db->from('tblempsetsalary as st');
        $this->db->join('tblemp as emp','emp.emp_id=st.emp_id','left');
        $this->db->where('st.Is_deleted','0');
        $this->db->where('companyid',$this->session->userdata('companyid'));
        $this->db->order_by('empsetsalary_id','Desc');
        $query=$this->db->get();
        $res=$query->result();
        return $res;
    }

    function get_salarydata($id){
        $this->db->select('*,st.created_date as createddate');
        $this->db->from('tblempsetsalary as st');
        $this->db->join('tblemp as emp','emp.emp_id=st.emp_id','left');
        $this->db->where('st.Is_deleted','0');
        $this->db->where('companyid',$this->session->userdata('companyid'));
        $this->db->where('empsetsalary_id',$id);
        $this->db->order_by('empsetsalary_id','Desc');
        $query=$this->db->get();
        $res=$query->row_array();
        return $res;
    }
	
}
