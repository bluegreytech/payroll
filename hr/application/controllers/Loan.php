<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Loan extends CI_Controller 
{
	public function __construct() {
        parent::__construct();
		 $this->load->model('loan_model');
	}
	function loan_det(){
		$data['result']=$this->loan_model->getloan();
		$this->load->view('loan/loan_list',$data);
	}
	function loanlist(){
		$data['employename']='';
		$data['result']=$this->loan_model->getemployee();
		$this->load->view('loan/loan_add',$data);
	}
	function employeeselect(){
		$employename=$this->input->post('employename');
		$data['employename']=$this->input->post('employename');
        $data['result']=$this->loan_model->getemployee();
        $data['loan_det']=$this->loan_model->getloandet($employename);
        $this->load->view('loan/loan_add',$data);

	}
	function insert_loan(){
		$select_date=$this->input->post('select_date');
		$date = str_replace('/', '-', $select_date);
//echo date('Y-m-d', strtotime($date));
		$sel_date=date('Y-m-d', strtotime($date));
		
		$data['loan_select_date']=$sel_date;
		$data['created_date']=$this->input->post('create_date');
		$data['date_of_loan']=$sel_date;
		$data['deduct_from']=$sel_date;

		$data['company_id']=$this->input->post('company_id');
		$data['emp_id']=$this->input->post('employename');

		$this->loan_model->insert_loan($data);
		//$this->load->view('loan/loan_add',$data);




	}
	function edit_loan(){
		$loan_id =$this->input->post('loan_id');
	$select_date=$this->input->post('select_date');
		$sel_date=date('Y-m-d',strtotime($select_date));
			$data['loan_select_date']=$sel_date;
			$data['emp_id']=$this->input->post('emp_id');
			$data['company_id']=$this->input->post('company_id');
			$date_of_loan=$this->input->post('date_of_loan');
			$dol=date('Y-m-d',strtotime($date_of_loan));

			$data['date_of_loan']=$dol;
			$deduct_from=$this->input->post('deduct_from');
		    $deduct=date('Y-m-d',strtotime($deduct_from));
			$data['deduct_from']=$deduct;

			$created_date=$this->input->post('create_date');
		    $cr_date=date('Y-m-d',strtotime($created_date));
			$data['created_date']=$cr_date;
			$data['loan_type']=$this->input->post('loan_type');
			$data['loan_amnt']=$this->input->post('amount');
			$data['interest_rate']=$this->input->post('rate');
			$data['no_of_installment']=$this->input->post('no_installment');
			$data['loan_accnt_no']=$this->input->post('loan_accnt_no');
			$data['monthly_installment']=$this->input->post('monthly_installment');
			$data['principal_balance']=$this->input->post('principal_balance');
			$data['interest_balance']=$this->input->post('interest_bal');
			$loan_complete=$this->input->post('loan_complete');
			if(!empty($loan_complete)){
				$loan_complete=$this->input->post('loan_complete');
			}else{
				$loan_complete='No';
			}
			$data['loan_completed']=$loan_complete;

        $completed_date=$this->input->post('completed_date');
        if(!empty($completed_date)){
		$complete_dt=date('Y-m-d',strtotime($completed_date));
			$data['completed_date']=$complete_dt;
		}else{
			$data['completed_date']='';
		}
			$data['remark']=$this->input->post('remark');

			$this->loan_model->update_loan($data,$loan_id);
			redirect('Loan/loan_det');

	}
	function delete_loan(){
		if(!check_admin_authentication()){ 

			redirect(base_url('Login'));

		}

		$loan_id=$this->input->post('loan_id');

		$data=array(

			'Is_deleted'=>'1'

			

				);

		$this->db->where("loan_id",$loan_id);

		$result=$this->db->update('tblloan',$data);

		

	}
}