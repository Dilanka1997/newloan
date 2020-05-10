<?php
class App_Model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	function deleteOne($nic){

			$this->db->where('nic', $nic);
			$this->db->delete('tbldetails');
			return $nic;

	}

	function deleteTwo($nic){

		$this->db->where('nic', $nic);
		$this->db->delete('tblloantwo');
		return $nic;

	}


	function getSelectDataOne($id){

		$condition = "nic =" . "'" . $id . "'";
		$this->db->select('*');
		$this->db->from('tbldetails');
		$this->db->where($condition);
		$query = $this->db->get();

		$resul = $query->result_array();

		return $resul;




	}

	function getSelectDataTwo($id){

		$condition = "nic =" . "'" . $id . "'";
		$this->db->select('*');
		$this->db->from('tblloantwo');
		$this->db->where($condition);
		$query = $this->db->get();

		$resul = $query->result_array();

		return $resul;




	}

	function getLoanOneData(){


		$this->db->select('*');
		$this->db->from('tbldetails');
		$query = $this->db->get();
		$rowcount = $query->result_array();
		return $rowcount;

	}

	function getLoanTwoData(){


		$this->db->select('*');
		$this->db->from('tblloantwo');
		$query = $this->db->get();
		$rowcount = $query->result_array();
		return $rowcount;

	}


	function SaveFullDataLoanOne($fname,$lname,$nic,$birthday,$dictric,$city,$lane,$jobType,$jobTelNo,$jobAddress,$telOne,$telTwo,$loanAmount,$bankUName,$bankName,$branch,$bankAccNo,$photo,$nicOne,$nicTwo,$aApply,$code,$duration,$address,$acceptAmount){

		$this->db->where('nic', $nic);
		$query = $this->db->get('tbldetails');

		if ($query->num_rows() < 1) {


			$data = array(
				'firstname' => $fname,
				'lastname' => $lname,
				'nic' => $nic,
				'birthday' => $birthday,
				'dictric' => $dictric,
				'city' => $city,
				'lane' => $lane,
				'jobType' => $jobType,
				'jobTelNo' => $jobTelNo,
				'jobAddress' => $jobAddress,
				'telone' => $telOne,
				'teltwo' => $telTwo,
				'loanAmount' => $loanAmount,
				'bankUserName' => $bankUName,
				'bankName' => $bankName,
				'branch' => $branch,
				'bankAccNo' => $bankAccNo,
				'photo' => $photo,
				'nicSideone' => $nicOne,
				'nicSidetwo' => $nicTwo,
				'againApply' => $aApply,
				'code' => $code,
				'staus' => $duration,
				'address' => $address,
				'accAmount' => $acceptAmount
			);
			$this->db->insert('tbldetails', $data);
			return $this->db->insert_id();
		}else {
			return 0;
		}

	}

	function SaveFullDataLoanTwo($fname,$lname,$nic,$birthday,$dictric,$city,$lane,$jobType,$jobTelNo,$jobAddress,$telOne,$telTwo,$loanAmount,$bankUName,$bankName,$branch,$bankAccNo,$photo,$nicOne,$nicTwo,$aApply,$code,$duration,$address,$acceptAmount){

		$this->db->where('nic', $nic);
		$query = $this->db->get('tblloantwo');

		if ($query->num_rows() < 1) {


			$data = array(
				'firstname' => $fname,
				'lastname' => $lname,
				'nic' => $nic,
				'birthday' => $birthday,
				'dictric' => $dictric,
				'city' => $city,
				'lane' => $lane,
				'jobType' => $jobType,
				'jobTelNo' => $jobTelNo,
				'jobAddress' => $jobAddress,
				'telone' => $telOne,
				'teltwo' => $telTwo,
				'loanAmount' => $loanAmount,
				'bankUserName' => $bankUName,
				'bankName' => $bankName,
				'branch' => $branch,
				'bankAccNo' => $bankAccNo,
				'photo' => $photo,
				'nicSideone' => $nicOne,
				'nicSidetwo' => $nicTwo,
				'againApply' => $aApply,
				'code' => $code,
				'staus' => $duration,
				'address' => $address,
				'accAmount' => $acceptAmount
			);
			$this->db->insert('tblloantwo', $data);
			return $this->db->insert_id();
		}else {
			return 0;
		}

	}

	public function validate($uName,$password){

		$this->db->where('username', $uName);
		$this->db->where('password', $password);

		$query = $this->db->get('tbluser');
		if($query->num_rows() == 1)
		{
			$row = $query->row();
			$data = array(
				'userName' => $row->userName,
				'validated' => true
			);
			$this->session->set_userdata($data);
			return true;
		}
		return false;
	}




}
