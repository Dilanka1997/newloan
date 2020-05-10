<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
//		$this->check_isvalidated();
		$this->load->model('App_Model');

	}

	public function index($msg = null)
	{
		$data['msg'] = $msg;
		$this->load->view('Login', $data);
	}

	function Admin(){

		if(! $this->session->userdata('validated')){
			redirect('Login');
		}


		$AllLoanOne = $this->App_Model->getLoanOneData();
		$data['AllLoanOne'] = $AllLoanOne;

		$AllLoanTwo = $this->App_Model->getLoanTwoData();
		$data['AllLoanTwo'] = $AllLoanTwo;

		$this->load->view('adminPanel', $data);
	}

	function ViewOne(){

		$U_id = $this->uri->segment(3);


		$AllLoanOne = $this->App_Model->getSelectDataOne($U_id);
		$data['AllLoanOne'] = $AllLoanOne;

		$this->load->view('ViewPage', $data);
	}

	function ViewTwo(){

		$U_id = $this->uri->segment(3);


		$AllLoanOne = $this->App_Model->getSelectDataTwo($U_id);
		$data['AllLoanOne'] = $AllLoanOne;

		$this->load->view('ViewPageTwo', $data);
	}

	function DeleteFirst(){

		$status = "";
		$msg = "";
		$id = $this->security->xss_clean($this->input->post('idPH'));

		$file_id = $this->App_Model->deleteOne($id);

		if ($file_id !== null) {
			$status = "success";
			$msg = "successfully deleted";
		} else {
			$status = "error";
			$msg = "Something went wrong when deleting the center, please try again.";
		}
		echo json_encode(array('status' => $status, 'msg' => $msg));

	}

	function DeleteSecond(){

		$status = "";
		$msg = "";
		$id = $this->security->xss_clean($this->input->post('idPH'));

		$file_id = $this->App_Model->deleteTwo($id);

		if ($file_id !== null) {
			$status = "success";
			$msg = "successfully deleted";
		} else {
			$status = "error";
			$msg = "Something went wrong when deleting the center, please try again.";
		}
		echo json_encode(array('status' => $status, 'msg' => $msg));

	}
	public function process(){
		// Load the model


		$uName = $this->security->xss_clean($this->input->post('username'));
		$password = $this->security->xss_clean($this->input->post('password'));


		// Validate the user can login
		$result = $this->App_Model->validate($uName,$password);

		// Now we verify the result
		if(! $result){
			// If user did not validate, then show them login page again
			$msg = '<font color=red>Invalid username and/or password.</font><br />';

			// $data['msg'] = $msg;
			$this->index($msg);

		}else{
			// If user did validate,
			// Send them to members area
			redirect('Login/Admin');
		}
	}
}
