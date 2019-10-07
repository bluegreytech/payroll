<?php
class Attendance_model extends CI_Model
 {
   function attendancelist(){

	     $totalmonth=cal_days_in_month(CAL_GREGORIAN, date('m',strtotime('last month')),date('Y')); 
		
		
		     $str2='';
		     $monthdate=array();
		        $str1="SELECT  C.companyname, C.companyid";
	      	 
		       $str3=" FROM tblcompany C  INNER JOIN tblattendance att  ON C.companyid = att.company_id      GROUP BY C.companyname ORDER BY  att.attendance_id DESC";
		        $query=$this->db->query($str1.''.$str3);
			//echo $this->db->last_query();die;
			return $query->result();
   }
   function attendancelistbycompanyid($cid){
 	
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
		       $str3="FROM tblattendance att LEFT JOIN tblemp U ON U.emp_id = att.emp_id   WHERE YEAR(attendance_date) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(attendance_date) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH) and companyid= $cid GROUP BY U.first_name ORDER BY  att.attendance_id DESC";
		        $query=$this->db->query($str1.''.$str2.''.$str3);
			//echo $this->db->last_query();die;
			return $query->result();
   }
   function searchcompany(){
   	$companyname = $this->input->post('companyname');
   	if($companyname!=''){

   	 $str1="SELECT  C.companyname, C.companyid";
	      	 
		       $str3=" FROM tblcompany C  INNER JOIN tblattendance att  ON C.companyid = att.company_id    AND companyname LIKE '%$companyname%'   GROUP BY C.companyname ORDER BY  att.attendance_id DESC";
		        $query=$this->db->query($str1.''.$str3);
			//echo $this->db->last_query();die;
			return $query->result();
		}
   	}
   	function searchemployee($id){
   		$empname = $this->input->post('empname');
   		$attmonth = $this->input->post('attmonth');
   		if($empname!='' && $attmonth!='')
			{	
			 
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

		        $str3=" FROM tblattendance att LEFT JOIN tblemp U ON U.emp_id = att.emp_id WHERE U.first_name LIKE '%$empname%' AND attendance_month LIKE '%$attmonth%' GROUP BY U.first_name";

		    	$query=$this->db->query($str1.''.$str2.''.$str3);	
                // echo $this->db->last_query();
		    	return $query->result();
			
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
		     
		       $str3=" FROM tblattendance att LEFT JOIN tblemp U ON U.emp_id = att.emp_id LEFT JOIN tblcompany C ON C.companyid = att.company_id WHERE attendance_month LIKE '%$attmonth%'   GROUP BY U.first_name";
		      //  echo $str1.''.$str2.''.$str3; die;
		    $query=$this->db->query($str1.''.$str2.''.$str3);	
           // echo $this->db->last_query();
		    return $query->result();
			}else if($empname!='' && $attmonth==''){
                 
		   	   /*$str1="SELECT att.attendance_id as attendanceid,CONCAT(U.first_name, ' ', U.last_name) as firstlast,U.ProfileImage as ProfileImage,";
		        for($month=1;$month<=12;$month++){ 
		        	 	if($month<=9){
                           $mn ='0'.$month;
		        	 	}else{
		        	 		 $mn =$month;
		        	 	}
		        	 	//echo 'month=='.$mn."<br>";
		        	 
		        	 $totalmonth=cal_days_in_month(CAL_GREGORIAN,date($mn),date('Y')); 
		        	// echo 'daysmonth=='.$totalmonth."<br>";
		          
			  		$str2='';
			     	$monthdate=array();
		      	  for($i=1;$i<=$totalmonth;$i++){		      	     
			       	if($i<=9){
			       		
			       		 $monthdate= date('Y'.'-'.$mn.'-'.'0'.$i,strtotime('last month'));
			       		 $str2.="SUM(IF(DATE(att.attendance_date) ='$monthdate',att.attendance_id,0)) AS 'abc$i'";
			       	}else{
			       		 $monthdate= date('Y'.'-'.$mn.'-'.$i,strtotime('last month'));
			       		 $str2.="SUM(IF(DATE(att.attendance_date) ='$monthdate',att.attendance_id,0)) AS 'abc$i'";
			       	} 
			       	if($i<$totalmonth){
	                    $str2.=",";
			       	}
			        //echo $monthdate."<br>";
			       }
			        
		       }
		        $str3=" FROM tblattendance att LEFT JOIN tblemp U ON U.emp_id = att.emp_id WHERE CONCAT(U.first_name,' ',U.last_name) LIKE '%$empname%' AND YEAR(attendance_month) = YEAR(CURDATE())  and  att.company_id = $id  GROUP BY U.first_name";
		        	//echo $str1.'<br>'.$str2.''.$str3."</br>";
		       
		    	$query=$this->db->query($str1.''.$str2.''.$str3);	
		    	echo $this->db->last_query();
		    	return $query->result();*/

                $str3="SELECT attendance_id,time_in,time_out,attendance_status,attendance_date FROM tblattendance att LEFT JOIN tblemp E ON att.emp_id = E.emp_id WHERE CONCAT( E.first_name, ' ', E.last_name) LIKE '%$empname%'";
               
$query=$this->db->query($str3);
//echo $this->db->last_query();
		    	return $query->result();
		    	// $this->db->select('attendance_id,time_in,time_out,attendance_status,attendance_date');
		    	// $this->db->from('tblattendance');
		    	// $this->db->join('tblemp', 'tblemp.emp_id = tblattendance.emp_id');
		    	// $this->db->like(CONCAT(U.first_name,' ',U.last_name) , '%$empname%');
		    	// $query=$this->db->get();
		    	// return $query->result();

			}
			
   	}
   
 }
 ?>