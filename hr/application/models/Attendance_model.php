<?php

class Attendance_model extends CI_Model
 {
	

	function attendancelist()
	{
        
     	$companyid=$this->session->userdata('companyid');
	     $totalmonth=cal_days_in_month(CAL_GREGORIAN, date('m',strtotime('last month')),date('Y'));	
		
		     $str2='';
		     $monthdate=array();
		        $str1="SELECT att.attendance_id as attendanceid,CONCAT(U.first_name, ' ', U.last_name) as firstlast,U.ProfileImage as ProfileImage,";
	      	  for($i=1;$i<=$totalmonth;$i++){
		       	if($i<=9){
		       		
		       		 $monthdate= date('Y-m-'.'0'.$i,strtotime('last month'));
		       		 $str2.="SUM(IF(DATE(att.attendance_date) ='$monthdate',att.attendance_id,0)) AS 'abc$i'";
		       	}else{
		       		$monthdate= date('Y-m-'.$i,strtotime('last month'));
		       		 $str2.="SUM(IF(DATE(att.attendance_date) ='$monthdate',att.attendance_id,0)) AS 'abc$i'";
		       	} 
		       	if($i<$totalmonth){
                    $str2.=",";
		       	}
		        
		       }
		       $str3="FROM tblattendance att LEFT JOIN tblemp U ON U.emp_id = att.emp_id   WHERE YEAR(attendance_date) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(attendance_date) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH) AND att.company_id=$companyid GROUP BY U.first_name ORDER BY  att.attendance_id DESC";
		        $query=$this->db->query($str1.''.$str2.''.$str3);
			//echo $this->db->last_query();die;
			return $query->result();
    
		
	}
	function emplist(){
	    $this->db->select("*");
		$this->db->from("tblemp");
		$this->db->where("Is_deleted",'0');
		$this->db->where('status','Active');
		$this->db->where("companyid",$this->session->userdata('companyid'));
		$query=$this->db->get();	
		return $query->result();
	}

	function search()
	{
			$companyid=$this->session->userdata('companyid');
			$empname=$this->input->post('empname');
			$attmonth=$this->input->post('attmonth'); 
			if($this->input->post('attmonth')!=''){
            $attmonth=$this->input->post('attmonth');	

				//$att
				//echo $attmonth=date('Y-m',strtotime('last month'));
			}else{
				 $attmonth=date('Y-m',strtotime('last month'));
			}
			 
			
			//$attyear=$this->input->post('attyear');

			if($empname!='' && $attmonth!='')
			{	
			  //echo " if fgfdg";die;
			  $totalmonth=cal_days_in_month(CAL_GREGORIAN,date('m',strtotime($this->input->post('attmonth'))),date('Y',strtotime($this->input->post('attmonth'))));  
		     
		
		  		$str2='';
		     	$monthdate=array();
		     
		       $str1="SELECT att.attendance_id as attendanceid,CONCAT(U.first_name, ' ', U.last_name) as firstlast,U.ProfileImage as ProfileImage,";
	      	  for($i=1;$i<=$totalmonth;$i++){
		       	if($i<=9){
		       		
		       		 $monthdate= date($attmonth.'-'.'0'.$i,strtotime('last month'));
		       		 $str2.="SUM(IF(DATE(att.attendance_date) ='$monthdate',att.attendance_id,0)) AS 'abc$i'";
		       	}else{
		       		$monthdate= date($attmonth.'-'.$i,strtotime('last month'));
		       		 $str2.="SUM(IF(DATE(att.attendance_date) ='$monthdate',att.attendance_id,0)) AS 'abc$i'";
		       	} 
		       	if($i<$totalmonth){
                    $str2.=",";
		       	}
		        
		       }
		     
		        $str3=" FROM tblattendance att LEFT JOIN tblemp U ON U.emp_id = att.emp_id WHERE att.company_id=$companyid AND CONCAT(U.first_name,' ',U.last_name) LIKE '%$empname%' AND attendance_month LIKE '%$attmonth%' GROUP BY U.first_name";
		        //echo $str1.''.$str2.''.$str3;
		    	$query=$this->db->query($str1.''.$str2.''.$str3);	
			
			}else if($empname=='' && $attmonth!=''){

             	$totalmonth=cal_days_in_month(CAL_GREGORIAN,date('m',strtotime($this->input->post('attmonth'))),date('Y',strtotime($this->input->post('attmonth')))); 
		     
		
		  		 $str2='';
		     	$monthdate=array();		     
		       $str1="SELECT att.attendance_id as attendanceid,CONCAT(U.first_name, ' ', U.last_name) as firstlast,U.ProfileImage as ProfileImage,";
		      	  for($i=1;$i<=$totalmonth;$i++){
			       	if($i<=9){
			       		
			       		 $monthdate= date($attmonth.'-'.'0'.$i,strtotime('last month'));
			       		 $str2.="SUM(IF(DATE(att.attendance_date) ='$monthdate',att.attendance_id,0)) AS 'abc$i'";
			       	}else{
			       		$monthdate= date($attmonth.'-'.$i,strtotime('last month'));
			       		 $str2.="SUM(IF(DATE(att.attendance_date) ='$monthdate',att.attendance_id,0)) AS 'abc$i'";
			       	} 
			       	if($i<$totalmonth){
	                    $str2.=",";
			       	}
			        
			       }
		     
		       $str3=" FROM tblattendance att LEFT JOIN tblemp U ON U.emp_id = att.emp_id WHERE  att.company_id=$companyid AND attendance_month LIKE '%$attmonth%' GROUP BY U.first_name";
		      //  echo $str1.''.$str2.''.$str3; die;
		    $query=$this->db->query($str1.''.$str2.''.$str3);	
			}
		
			    
			 if($query->num_rows() > 0)
			 { 
			 // echo $this->db->last_query();die;
				return $query->result();
			 }        
	}

		


	function getdata($emp_id){
	    $this->db->select("*");
		$this->db->from("tblemp");
		$this->db->where("Is_deleted",'0');
		$this->db->where("emp_id",$emp_id);
		$query=$this->db->get();	
		return $query->row_array();
	}
    function attendance_insert()
	{	
		$attendancemonth = $this->input->post('attendancemonth'); 	
		$allholiday=getallholiday($attendancemonth);
		//echo "<pre>";print_r($allholiday);die;
		$allholidayarry= array();
		if(!empty($allholiday)){
           	foreach ($allholiday as $holidayrow) {
          
       		array_push($allholidayarry,array('holidaydate' =>$holidayrow['holidaydate']));
           
       	}		
		}
      
		
		$time_in=date('H:i',strtotime($this->input->post('time_in')));
		$time_out=date('H:i',strtotime($this->input->post('time_out')));
		//echo "<pre>";print_r($_POST);die;
		$cmonth = date("m",strtotime($attendancemonth));
		$cyear = date("Y",strtotime($attendancemonth));

	    $totalmonth=cal_days_in_month(CAL_GREGORIAN, $cmonth,$cyear); 
		$empcount=$this->input->post('employename');
		
        for($j=0;$j<count($empcount);$j++){
	        for($i=1;$i<=$totalmonth;$i++){
	        		
		       	if($i<=9){
		       		$monthdate= date($cyear.'-'.$cmonth.'-'.'0'.$i);
				     
		       	}else{
       			   	  $monthdate= date($cyear.'-'.$cmonth.'-'.$i);
		       		 
		       	}
		       	   $result = date("l", strtotime($monthdate));
                     if(!empty($allholiday)){
		       	  for($k=0;$k<count($allholiday);$k++){
		       	  	
		       	  	  	if($result == "Sunday"||strtotime($allholiday[$k]['holidaydate'])==strtotime($monthdate)){
								 $attendance_status="Absent";
								//echo date("Y-m-d", strtotime($monthdate)). " ".$result."<br>";;
							    break;
							}else{
                                  $attendance_status="Present";   
							}
		       	  }
		       	}else{
		       		 if($result == "Sunday"){
								 $attendance_status="Absent";
								//echo date("Y-m-d", strtotime($monthdate)). " ".$result."<br>";;
							    
							}else{
                                  $attendance_status="Present";   
					}
		       	}
			
		        $data = array(
			    'emp_id' => $this->input->post('employename')[$j] ? $this->input->post('employename')[$j]:'',
				'company_id' =>$this->session->userdata('companyid'),
				'attendance_date' =>$monthdate,	
				'attendance_month' =>$this->input->post('attendancemonth'),
				'time_in' =>$time_in,
				'time_out' =>$time_out,
				'attendance_status'=>$attendance_status,
				'created_date'=>date('Y-m-d')		
				);
				//echo "<pre>";print_r($data);
				$res=$this->db->insert('tblattendance',$data);
	       	}
	       	//die;	     
        }       
		return $res;		
	}
	function getattendancedata($attid){
		$this->db->select("*");
		$this->db->from("tblattendance");		
		$this->db->where("attendance_id",$attid);
		$query=$this->db->get();	
		return $query->row_array();

	}
	 function attendance_update()
	{		
		//echo "<pre>";print_r($_POST);die;
	    $id=$this->input->post('attendance_id');
		$time_in=date('H:i',strtotime($this->input->post('time_in')));
		$time_out=date('H:i',strtotime($this->input->post('time_out')));
          $data = array(
				'attendance_date' =>$this->input->post('attendance_date'),	
				'attendance_month' =>$this->input->post('attendancemonth'),
				'time_in' =>$time_in,
				'time_out' =>$time_out,
				'attendance_status'=>$this->input->post('attendancestatus'),
				'updated_date'=>date('Y-m-d')		
				);
				
		
			//echo "<pre>";print_r($data);die;	
        $this->db->where('attendance_id',$id);       
        $res=$this->db->update('tblattendance',$data);	
		return $res;
			
	}
	function emppersentmonthlist($month){
	    $this->db->select("*");
		$this->db->from("tblemp as em");
		$this->db->join('tblattendance as ae','ae.emp_id=em.emp_id');
		$this->db->where("em.Is_deleted",'0');
		$this->db->where('em.status','Active');
		$this->db->where('ae.attendance_month',$month);
		$this->db->where("em.companyid",$this->session->userdata('companyid'));
		$this->db->group_by("em.emp_id");
		$query=$this->db->get();	
		//echo $this->db->last_query();die;
		return $query->result();
	}

	function getempleavedata($id,$attendancedate){
		$this->db->select('*');
		$this->db->from('tblempleave');
		$this->db->where('emp_id',$id);              
		$this->db->where('leavefrom <=',$attendancedate);
		$this->db->where('leaveto >=', $attendancedate);

		$query1=$this->db->get(); 	
		//echo $this->db->last_query();die;
		//echo "<pre>";print_r($query1);die;		 
		$res1=$query1->row();
		return  $res1;
		// echo "<pre>";print_r($res1->typeofleave);die;	

	}

	
}
