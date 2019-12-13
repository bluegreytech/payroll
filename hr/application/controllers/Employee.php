<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller 
{
	public function __construct() {
        parent::__construct();
		$this->load->model('employee_model');
		$this->load->model('leave_model');
		$this->load->model('attendance_model');
		$this->load->model('Login_model');
		$this->load->model('company_model');
		$this->load->library('excel');
	}
	
	public function emplist()
	{ 		
		if(!check_admin_authentication()){ 
			redirect(base_url());
		}
		$data=array();
		$data['option']='';
		$data['keyword']='';
		$data['redirect_page']='emplist';
		$data['result']=$this->employee_model->emplist();
		$this->load->view('Employee/emplist',$data);
	}
	function addemp(){
		if(!check_admin_authentication()){ 
			redirect(base_url());
		}   
			$data=array();
			$data['activeTab']="addhr";	
			$this->load->library("form_validation");
			$this->form_validation->set_rules('FirstName', 'FirstName', 'required');
			$this->form_validation->set_rules('LastName', 'LastName', 'required');
			$this->form_validation->set_rules('EmailAddress', 'EmailAddress', 'required');		
			$this->form_validation->set_rules('marital_status', 'Marital Status', 'required');	
			$this->form_validation->set_rules('department', 'Departmant', 'required');
			$this->form_validation->set_rules('PhoneNumber', 'Mobileno', 'required');
		    $this->form_validation->set_rules('dob', 'DateofBirth', 'required');
		    $this->form_validation->set_rules('Gender', 'Gender', 'required');
		    $this->form_validation->set_rules('pob', 'Place of Birth', 'required');
		    $this->form_validation->set_rules('jod', 'Joining Date', 'required');
		    $this->form_validation->set_rules('qualificationemp', 'Qualification Employee','required');
		    $this->form_validation->set_rules('bloodgroup', 'Blood Group', 'required');
		    $this->form_validation->set_rules('salary', 'salary', 'required');
		    $this->form_validation->set_rules('salary_amount', 'salary amount', 'required');
		    $this->form_validation->set_rules('probation_period_day', 'Probation Period Day', 'required');
			$this->form_validation->set_rules('physically_challenged', 'Physically Challanged', 'required');
			$this->form_validation->set_rules('probation_period_day', 'Probation Period Day', 'required');
			$this->form_validation->set_rules('status', 'Status', 'required');
			$this->form_validation->set_rules('probation_period_day', 'Probation Period Day', 'required');
		    
		
		if($this->form_validation->run() == FALSE){			
			if(validation_errors())
			{
				$data["error"] = validation_errors();
				echo "<pre>";print_r($data["error"]);die;
			}else{
				$data["error"] = "";
			}
           	$data['redirect_page']="emplist";
			$data['emp_id']=$this->input->post('emp_id');
			$data['employee_code']=$this->input->post('employee_code');
			$data['first_name']=$this->input->post('FirstName');
			$data['last_name']=$this->input->post('LastName');
			$data['department']=$this->input->post('department');
			$data['desgination']=$this->input->post('desgination');
			$data['department']=$this->input->post('department');			
			$data['email']=$this->input->post('EmailAddress');
			$data['Address']=$this->input->post('Address');
			$data['ProfileImage']=$this->input->post('ProfileImage');
			$data['phone']=$this->input->post('PhoneNumber');
			$data['Dateofbirth']=$this->input->post('dob');
			$data['gender']=$this->input->post('Gender');
			$data['religion']=$this->input->post('religion');
			$data['nationality']=$this->input->post('nationality');
			$data['marital_status']=$this->input->post('marital_status');
			$data['Placeofbirth']=$this->input->post('pob');
			$data['joiningdate']=$this->input->post('jod');
			$data['qualification_emp']=$this->input->post('qualificationemp');
			$data['bloodgroup']=$this->input->post('bloodgroup');
			$data['salary']=$this->input->post('salary');
			$data['salaryamt']=$this->input->post('salary_amount');
			$data['probation_period_day']=$this->input->post('probation_period_day');
			$data['physically_challenged']=$this->input->post('physically_challenged');
			$data['status']=$this->input->post('status');
			$data['bankdetail']=$this->input->post('bank_detail');
			$data['passport']=$this->input->post('passport');
			$data['drivinglicense']=$this->input->post('driveinglicence');
			$data['pancard']=$this->input->post('pancard');
			$data['aadharcard']=$this->input->post('aadharcard');
			$data['addressesproof']=$this->input->post('address_proof');
			$data["pre_profile_image"] = $this->input->post('ProfileImage');
			$data['uanstatus']=$this->input->post('uanstatus');
			$data['esicstatus']=$this->input->post('esicstatus');
			$data['esicno']=$this->input->post('esicno');
			$data['uanno']=$this->input->post('uanno');
			$data['taxstatus']=$this->input->post('taxstatus');
			$data['option']='';
			$data['keyword']='';	
		}
		else
		{	

			if($this->input->post("emp_id")!="")
			{	
				//echo "<pre>";print_r($_POST);die;
				$this->employee_model->emp_update();
				$this->session->set_flashdata('success', 'Record has been Updated Succesfully!');
				redirect('employee/emplist');
			
			}
			else
			{ 	
				$this->employee_model->emp_insert();
				$this->session->set_flashdata('success', 'Record has been Inserted Succesfully!');
				redirect('employee/emplist');
			}
		}
		
		 $data['compliancelist']=$this->company_model->compliancelist_deduction();	
		 //echo "<pre>";print_r($data['compliancelist']);die;
		 $data['employee_code']=$this->employee_model->empcodelist();			
		 $data['leavelist']=$this->leave_model->showempleavelist();
		 $this->load->view('Employee/addemp',$data);
		
	}

	function edit_emp($emp_id){
		if(!check_admin_authentication()){ 
			redirect(base_url());
		}else{
			$data=array();
			$data['empassginleave']=$this->employee_model->getempassginleave($emp_id);
			//echo "<pre>";print_r($data['empassginleave']);die;	
			$data['activeTab']="Editemp";	
			$result=$this->employee_model->getdata($emp_id);	
			//echo "<pre>";print_r($result);die;
			$data['emp_id']=$result['emp_id'];
			$data['employee_code']=$result['employee_code'];
			$data['department']=$result['department'];
			$data['desgination']=$result['desgination'];
			$data['first_name']=$result['first_name'];
			$data['last_name']=$result['last_name'];	
			$data['email']=$result['email'];
			$data['phone']=$result['phone'];	
			$data['Address']=$result['Address'];
			$data['gender']=$result['gender'];
			$data['Dateofbirth']=$result['Dateofbirth'];				
			$data['ProfileImage']=$result['ProfileImage'];	
			$data['Placeofbirth']=$result['Placeofbirth'];
			$data['marital_status']=$result['marital_status'];
			$data['religion']=$result['religion'];
			$data['nationality']=$result['nationality'];
			$data['status']=$result['status'];
			$data['qualification_emp']=$result['qualification_emp'];
			$data['otherqulification']=$result['otherqulification'];
			$data['bloodgroup']=$result['bloodgroup'];
			$data['probation_period_day']=$result['probation_preriod_day'];
			$data['physically_challenged']=$result['physically_challenged'];
			$data['joiningdate']=$result['joiningdate'];
			$data['salaryamt']=$result['salaryamt'];
			$data['salary']=$result['salary'];
			$data['aadharcard']=$result['aadharcard'];
			$data['pancard']=$result['pancard'];
			$data['bankdetail']=$result['bankdetail'];
			$data['passport']=$result['passport'];
			$data['drivinglicense']=$result['drivinglicense'];
			$data['addressesproof']=$result['addressesproof'];
			$data['uanstatus']=$result['uan_status'];
			$data['esicstatus']=$result['esic_status'];
			$data['esicno']=$result['esicno'];
			$data['uanno']=$result['uanno'];
			$data['taxstatus']=$result['taxstatus'];			
			$data['redirect_page']="emplist";
			$data['leavelist']=$this->leave_model->showempleavelist();		
			$this->load->view('Employee/addemp',$data);	
		}
	}

	function delete_emp(){
		if(!check_admin_authentication())
		{ 
			redirect(base_url());
		}
		if($this->input->post('emp_image')!='')
		{
				if(file_exists(base_path().'upload/emp/'.$this->input->post('emp_image')))
				{
					$link=base_path().'upload/emp/'.$this->input->post('emp_image');
					unlink($link);
				}
				if(file_exists(base_path().'upload/emp_orig/'.$this->input->post('emp_image')))
				{
					$link=base_path().'upload/emp_orig/'.$this->input->post('emp_image');
					unlink($link);
				}
		}
		$data= array('Is_deleted' =>'1','status'=>'Inactive','ProfileImage'=>'');
		
		$id=$this->input->post('id');
		$this->db->where("emp_id",$id);
		$res=$this->db->update('tblemp',$data);
		echo json_encode($res);
		die;
	}	
	
	function statusdata(){

		if(!check_admin_authentication())
		{ 
			redirect(base_url());
		}
		$action=$this->input->post('status');
		$id=$this->input->post('id');
		if ($action == "Active") {

			$data = array("status" => "Inactive");
			update_record('tblemp', $data, 'emp_id', $id);

			$res = array('status' => 'done', 'msg' => ACTIVE);
			echo json_encode($res);
			die ;
		}else if ($action == "Inactive") {
			
				$data = array("status" => "Active");
				update_record('tblemp', $data, 'emp_id', $id);
			
			$res = array('status' => 'done', 'msg' => ACTIVE);
			echo json_encode($res);
			die ;
		}
	
	}
	function searchemp(){
		if(!check_admin_authentication()){ 
			redirect(base_url());
		}   
		$data=array();
		$data['activeTab']="searchemp";	
			
		if($this->input->post("search")!=''){
		 	$data['option']=$this->input->post('option');
		 	$data['keyword']=$this->input->post('keyword');	
		 	$option=$data['option'];
          	$keyword=$data['keyword'];
			
			$data['result'] = $this->employee_model->search($option,$keyword);
		}else{
		 	$data['option']='';
          	$data['keyword']='';
          	$data['result']=$this->employee_model->emplist();
		}
		 	
		$data['redirect_page']="emplist";
		//echo "<pre>";print_r($data['result']);die;
		$this->load->view('Employee/emplist',$data);
	}
	function email_check() {
		$query = $this->db->query("select email from " . $this->db->dbprefix('tblemp') . " where email= '".$this->input->post('email')."'");
		//echo $this->db->last_query();die;
		if ($query->num_rows() > 0) {
			echo 1;die;
		} else {
			echo 0;die;
		}
	}

	function empcode_check() {
		$query = $this->db->query("select employee_code from " . $this->db->dbprefix('tblemp') . " where employee_code= '".$this->input->post('employee_code')."'");
		//echo $this->db->last_query();die;
		if ($query->num_rows() > 0) {
			echo 1;die;
		} else {
			echo 0;die;
		}
	}

	

	function add_setsalary(){	
			//echo "hggh";die;
			if(!check_admin_authentication()){ 
				redirect(base_url());
			}   
			$data=array();
			$data['activeTab']="addhr";	
			$this->load->library("form_validation");
			$this->form_validation->set_rules('FirstName', 'FirstName', 'required');
			$this->form_validation->set_rules('LastName', 'LastName', 'required');
			$this->form_validation->set_rules('EmailAddress', 'EmailAddress', 'required');		
			$this->form_validation->set_rules('marital_status', 'Marital Status', 'required');	
			$this->form_validation->set_rules('department', 'Departmant', 'required');
			$this->form_validation->set_rules('PhoneNumber', 'Mobileno', 'required');
		    $this->form_validation->set_rules('dob', 'DateofBirth', 'required');
		    $this->form_validation->set_rules('Gender', 'Gender', 'required');
		    $this->form_validation->set_rules('pob', 'Place of Birth', 'required');
		    $this->form_validation->set_rules('jod', 'Joining Date', 'required');
		    $this->form_validation->set_rules('qualificationemp', 'Qualification Employee','required');
		    $this->form_validation->set_rules('bloodgroup', 'Blood Group', 'required');
		    $this->form_validation->set_rules('salary', 'salary', 'required');
		    $this->form_validation->set_rules('salary_amount', 'salary amount', 'required');
		    $this->form_validation->set_rules('probation_period_day', 'Probation Period Day', 'required');
			$this->form_validation->set_rules('physically_challenged', 'Physically Challanged', 'required');
			$this->form_validation->set_rules('probation_period_day', 'Probation Period Day', 'required');
			$this->form_validation->set_rules('status', 'Status', 'required');
			$this->form_validation->set_rules('probation_period_day', 'Probation Period Day', 'required');
		    
		
		if($this->form_validation->run() == FALSE){			
			if(validation_errors())
			{
				$data["error"] = validation_errors();
				echo "<pre>";print_r($data["error"]);die;
			}else{
				$data["error"] = "";
			}
           	$data['redirect_page']="emplist";
			$data['emp_id']=$this->input->post('emp_id');
			$data['employee_code']=$this->input->post('employee_code');
			$data['first_name']=$this->input->post('FirstName');
			$data['last_name']=$this->input->post('LastName');
			$data['department']=$this->input->post('department');
			$data['desgination']=$this->input->post('desgination');
			$data['department']=$this->input->post('department');
			
			$data['email']=$this->input->post('EmailAddress');
			$data['Address']=$this->input->post('Address');
			$data['ProfileImage']=$this->input->post('ProfileImage');
			$data['phone']=$this->input->post('PhoneNumber');
			$data['Dateofbirth']=$this->input->post('dob');
			$data['gender']=$this->input->post('Gender');
			$data['religion']=$this->input->post('religion');
			$data['nationality']=$this->input->post('nationality');

			$data['marital_status']=$this->input->post('marital_status');
			$data['Placeofbirth']=$this->input->post('pob');
			$data['joiningdate']=$this->input->post('jod');
			$data['qualification_emp']=$this->input->post('qualificationemp');
			$data['bloodgroup']=$this->input->post('bloodgroup');
			$data['salary']=$this->input->post('salary');
			$data['salaryamt']=$this->input->post('salary_amount');
			$data['probation_period_day']=$this->input->post('probation_period_day');
			$data['physically_challenged']=$this->input->post('physically_challenged');
			$data['status']=$this->input->post('status');
			$data['bankdetail']=$this->input->post('bank_detail');
			$data['passport']=$this->input->post('passport');
			$data['drivinglicense']=$this->input->post('driveinglicence');
			$data['pancard']=$this->input->post('pancard');
			$data['aadharcard']=$this->input->post('aadharcard');
			$data['addressesproof']=$this->input->post('address_proof');
			$data["pre_profile_image"] = $this->input->post('ProfileImage');
			$data['option']='';
			$data['keyword']='';	
		}
		else
		{	

				if($this->input->post("emp_id")!="")
				{	
					
					$this->employee_model->emp_update();
					$this->session->set_flashdata('success', 'Record has been Updated Succesfully!');
					redirect('employee/emplist');
					
				}
				else
				{ 	
					$this->employee_model->emp_insert();
					$this->session->set_flashdata('success', 'Record has been Inserted Succesfully!');
					redirect('employee/emplist');
				}
		}		
		//$data['leavelist']=$this->leave_model->showempleavelist();
		$data['emplist']=$this->attendance_model->emplist();
		$data['result']=$this->company_model->compliancelist();
	  //   $compliancedetail=get_one_record('tblcompanycompliances','companyid',$this->session->userdata('companyid'));
	   
		 //  $complianceid = explode(',',$compliancedetail->complianceid);
   		//   $com_compliances= array();
			// foreach ($complianceid as $row){					
			// 	$data['companycompliances']=$this->Login_model->getcompliance($row);				
			// 	$com_compliances[]=$data['companycompliances'];
			// }
			// $data['com_compliances']=$com_compliances;

			// $compliancedeductionid = explode(',',$compliancedetail->compliancedeductionid);
			// 	$com_compliancesdeduction= array();
			// 	foreach ($compliancedeductionid as $row){					
			// 		$data['companydeduction']=$this->Login_model->getcompliance($row);				
			// 		$com_compliancesdeduction[]=$data['companydeduction'];
			// 	}
			// 	$data['com_compliancesdeduction']=$com_compliancesdeduction;
			//   // echo "<pre>";print_r($compliancedetail);die;

		$data['leavelist']=$this->leave_model->showempleavelist();
		$result=$this->company_model->getsetsalarymonth();		
		$data['salarymonth']=$result['salary_month'];

		$this->load->view('Employee/add_setsalary',$data);
		//echo "<pre>";print_r($data['result']);die;	

	}
	function viewemp(){
		$id=$this->input->post('id');
		$salarymonth=$this->input->post('salarymonth');
		$data=array();
		$data['complianceresult']=$this->company_model->compliancelist();
		
		$result=$this->employee_model->getdata($id);
		//echo "<pre>";print_r($result);die;
		$empleave=$this->employee_model->getempleavedata($id,$salarymonth);
		
		  if($result['salary']!='monthly'){		  
            $empattendance=$this->employee_model->getempattendancedata($id,$salarymonth);
        	if(!empty($empleave)){
            $totalattendance=($empattendance - $empleave);
        	}else{
        		  $totalattendance=$empattendance;
        	}
			$data['workingdays']= $totalattendance;
		  }else{	
		  	
		      if(!empty($empleave)){
		      	 $totalattendance=(30 - $empleave);
		      }	 else{
		      	$totalattendance='30';
		      } 	
		  	
		  	$data['workingdays']=$totalattendance;
		  }
			$data['compliancepercentage']=
			$data['emp_id']=$result['emp_id'];
			$data['employee_code']=$result['employee_code'];
			$data['department']=$result['department'];
			$data['desgination']=$result['desgination'];
			$data['first_name']=$result['first_name'];
			$data['last_name']=$result['last_name'];	
			$data['email']=$result['email'];
			$data['phone']=$result['phone'];	
			$data['Address']=$result['Address'];
			$data['gender']=$result['gender'];
			$data['Dateofbirth']=$result['Dateofbirth'];				
			$data['ProfileImage']=$result['ProfileImage'];	
			$data['Placeofbirth']=$result['Placeofbirth'];
			$data['marital_status']=$result['marital_status'];
			$data['religion']=$result['religion'];
			$data['nationality']=$result['nationality'];
			$data['status']=$result['status'];
			$data['qualification_emp']=$result['qualification_emp'];
			$data['bloodgroup']=$result['bloodgroup'];
			$data['probation_period_day']=$result['probation_preriod_day'];
			$data['physically_challenged']=$result['physically_challenged'];
			$data['joiningdate']=$result['joiningdate'];
			$data['salaryamt']=$result['salaryamt'];
			$data['salary']=$result['salary'];
			$data['aadharcard']=$result['aadharcard'];
			$data['pancard']=$result['pancard'];
			$data['bankdetail']=$result['bankdetail'];
			$data['passport']=$result['passport'];
			$data['drivinglicense']=$result['drivinglicense'];
			$data['addressesproof']=$result['addressesproof'];
			$data['esic_status']=$result['esic_status'];
			$data['uan_status']=$result['uan_status'];
			$data['taxstatus']=$result['taxstatus'];
			


			// foreach($data['complianceresult'] as $row){
				
			// 	if($row->compliancetypeid=='1'){
   //                 echo "<pre>";print_r($row->compliancepercentage); 
   //                  echo $pf=$row->compliancepercentage;

			// 	}else{

			// 	}
			// }
          
			echo json_encode($data);
			die;

	}
	function aadharcard_check() {
		$query = $this->db->query("select aadharcard from " . $this->db->dbprefix('tblemp') . " where aadharcard= '".$this->input->post('aadharcard')."'");
		//echo $this->db->last_query();die;
		if ($query->num_rows() > 0) {
			echo 1;die;
		} else {
			echo 0;die;
		}
	}
	/*--- start himani ---*/

	function import_emp(){
		

              
  if(isset($_FILES["file"]["name"]))
  {
  	
   $path = $_FILES["file"]["tmp_name"];
   $object = PHPExcel_IOFactory::load($path);
   $i=0;
   foreach($object->getWorksheetIterator() as $worksheet)
   {
   
   
//$employee_code=$this->employee_model->empcodelist();	
//echo $employee_code;
    $highestRow = $worksheet->getHighestRow();

    $highestColumn = $worksheet->getHighestColumn();
    for($row=2; $row<=$highestRow; $row++)
    {

//$code=$ecode[1];
//print_r($code);

//echo $code;

     //echo $row;
     $department = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
     $desgination = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
     $first_name = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
     $last_name = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
     $gender = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
     $Father_name = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
      $Dateofbirth = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
      $Placeofbirth= $worksheet->getCellByColumnAndRow(7, $row)->getValue();
      $marital_status= $worksheet->getCellByColumnAndRow(8, $row)->getValue();
      $Address= $worksheet->getCellByColumnAndRow(9, $row)->getValue();
      $phone= $worksheet->getCellByColumnAndRow(10, $row)->getValue();
      $email= $worksheet->getCellByColumnAndRow(11, $row)->getValue();
       $religion= $worksheet->getCellByColumnAndRow(12, $row)->getValue();
       $nationality= $worksheet->getCellByColumnAndRow(13, $row)->getValue();
       $bloodgroup= $worksheet->getCellByColumnAndRow(14, $row)->getValue();
       
         $probation_preriod_day= $worksheet->getCellByColumnAndRow(15, $row)->getValue();
         $physically_challenged= $worksheet->getCellByColumnAndRow(16, $row)->getValue();
          $joiningdate= $worksheet->getCellByColumnAndRow(17, $row)->getValue();
          $salaryamt= $worksheet->getCellByColumnAndRow(18, $row)->getValue();
          $salary= $worksheet->getCellByColumnAndRow(19, $row)->getValue();
          $aadharcard= $worksheet->getCellByColumnAndRow(20, $row)->getValue();
          $pancard= $worksheet->getCellByColumnAndRow(21, $row)->getValue();
         // $data['employee_code']=$this->employee_model->empcodelist();
         //echo $employee_code[$row];

          $date = str_replace('/', '-', $Dateofbirth);
 $employee_code=$this->employee_model->empcodelist();
 
          $join= str_replace('/', '-', $joiningdate);
     $data[] = array(
      'companyid' =>$this->session->userdata('companyid'),
      'employee_code'=> $employee_code,
       'status' => 'Active',
      'department'  => $department,
      'desgination'   => $desgination,
      'first_name'    => $first_name,
      'last_name'  => $last_name,
      'gender'   => $gender,
      'Father_name'   => $Father_name,
      'Dateofbirth'   =>  date('Y-m-d', strtotime($date)),
      'Placeofbirth'   => $Placeofbirth,
      'marital_status'   => $marital_status,
       'Address'   => $Address,
       'phone'   => $phone,
        'email'   => $email,
        'religion'   => $religion,
        'nationality'   => $nationality,
      
        'bloodgroup' =>$bloodgroup,
        'probation_preriod_day' =>$probation_preriod_day,
        'physically_challenged' =>$physically_challenged,
         'joiningdate' =>date('Y-m-d', strtotime($join)),
         'salaryamt' =>$salaryamt,
         'salary' =>$salary,
          'aadharcard' =>$aadharcard,
          'pancard' =>$pancard,
         'created_date' =>date('Y-m-d')
     );
  
   //echo   $counts = array_count_values($data);
    }

$i++;
       
   }
	print_r($data);
   	exit;
   foreach($data as $val){
   	$email_id=$val['email'];


   	 $select = "SELECT email FROM  tblemp WHERE email = '$email_id'" ;
	    $query = $this->db->query($select);
             $count = $query->num_rows();
if ($count!=0){
   	echo 'The email address '. $email.' is already registered';
   
   }else if($count==0){


    	 
//print_r($employee_code);

// $split = explode("_",$employee_code);		
// 		$val=$split[1]+1;	
	 
//  			if($val<=9){      			
//                  $cde=$split[0].'_0'.$val; 
//       		}else{
// 			    $cde= $split[0].'_'.$val;
//       		}
			//echo  $data;
	
   	echo '1';
   
   	 $this->employee_model->insert_excel($data);
   exit;
   }

}
   
  

  } 
 }


	

}
