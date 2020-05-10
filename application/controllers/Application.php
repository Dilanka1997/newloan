<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Application extends CI_Controller {

	function __construct(){
            parent::__construct();
            $this->load->library('email');
            $this->load->model('App_Model');

   	}

	public function index()
	{
		$this->load->view('ApplicationView');
	}


	public function SaveOne(){


					$status = "Not set";
        			$msg = "Not set";


					        			$fName = $this->security->xss_clean($this->input->post('txtFirstName'));
                            			$lName = $this->security->xss_clean($this->input->post('txtLastName'));
                            			$nic = $this->security->xss_clean($this->input->post('txtNic'));
                            			$birthday = $this->security->xss_clean($this->input->post('txtBirthDay'));
                            			$distric = $this->security->xss_clean($this->input->post('txtDistric'));
                            			$city = $this->security->xss_clean($this->input->post('txtCity'));
                            			$lane = $this->security->xss_clean($this->input->post('txtLane'));
                            			$jobType = $this->security->xss_clean($this->input->post('txtJobType'));
                            			$jobTel = $this->security->xss_clean($this->input->post('txtJobTel'));
                            			$jobAddress = $this->security->xss_clean($this->input->post('txtJobAddress'));
                            			$TelOne = $this->security->xss_clean($this->input->post('txtTelone'));
                            			$TelTwo = $this->security->xss_clean($this->input->post('txtTelTwo'));
                            			$LoanAmount = $this->security->xss_clean($this->input->post('txtLoanAmount'));
                            			$BankNo = $this->security->xss_clean($this->input->post('txtBankNo'));
                            			$BankName = $this->security->xss_clean($this->input->post('txtBankName'));
                            			$BankBranch = $this->security->xss_clean($this->input->post('txtBranch'));
                            			$AccountNo = $this->security->xss_clean($this->input->post('txtAccountNo'));
                            			$again = $this->security->xss_clean($this->input->post('chkAgain'));
                            			$code = $this->security->xss_clean($this->input->post('txtCode'));
                            			$duration = $this->security->xss_clean($this->input->post('txtDuration'));
                            			$address = $this->security->xss_clean($this->input->post('txtAddress'));
                            			$acceptAmount = $this->security->xss_clean($this->input->post('txtAcceptAmount'));

                            			$config['upload_path'] = './upload';
                            			$config['allowed_types'] = 'gif|jpg|png';
                            			$config['max_size'] = 1024 * 8;

                            			$config['encrypt_name'] = TRUE;

                            			$this->load->library('upload', $config);


                    					if ($this->upload->do_upload("filePhoto")) {

                                        		$config['image_library'] = 'gd2';
                                        		$config['source_image'] = $this->upload->upload_path . $this->upload->file_name;
                                        		$config['create_thumb'] = TRUE;
                                        		$config['maintain_ratio'] = FALSE;

                                        		$this->load->library('image_lib');
                                        		$this->image_lib->initialize($config);

                                        		$this->image_lib->resize();

                                        		$image = $this->upload->file_name;
                                        	    $image = str_ireplace('.', '_thumb.', $image);
                                        		unlink($this->upload->upload_path . $this->upload->file_name);


                                        		$this->load->library('upload', $config);
                                        		$this->upload->do_upload("fileNicFrontImage");
                                        		$nicsideone = $this->upload->file_name;

                                        		$this->load->library('upload', $config);
                                                $this->upload->do_upload("fileNicBackImage");
                                                $nicsidetwo = $this->upload->file_name;


                                        		$data = array('upload_data' => $this->upload->data());



                            			$file_id = $this->App_Model->SaveFullDataLoanOne($fName,$lName,$nic,$birthday,$distric,$city,$lane,$jobType,$jobTel,$jobAddress,$TelOne,$TelTwo,$LoanAmount,$BankNo,$BankName,$BankBranch,$AccountNo,$image,$nicsideone,$nicsidetwo,$again,$code,$duration,$address,$acceptAmount);

                            					if ($file_id !== null) {

                            						if($file_id === 0){
                            							$status = "error";
                                                        $msg = "Already registered";
                            						}else{
                            							$status = "success";
                                                        $msg = "ඔබගේ අයදුම්පත පරීක්ෂා කර හැකි ඉක්මනින් අප විසින්  ඔබට පිලිතුරු සපයනු ඇති.අප හා සම්බන්ද වුනු ඔබට ස්තුතියි!!";
                            						}


                            					} else {
                            							$status = "error";
                            							$msg = "Something went wrong!!, please try again.";
                            					}
                            			} else {
                                                $status = 'error';
                                                $msg = $this->upload->display_errors('', '');
                                        }

        			echo json_encode(array('status' => $status, 'msg' => $msg));

	}

	public function SaveTwo(){


    					$status = "Not set";
            			$msg = "Not set";


    					        			$fName = $this->security->xss_clean($this->input->post('txtFirstName'));
                                			$lName = $this->security->xss_clean($this->input->post('txtLastName'));
                                			$nic = $this->security->xss_clean($this->input->post('txtNic'));
                                			$birthday = $this->security->xss_clean($this->input->post('txtBirthDay'));
                                			$distric = $this->security->xss_clean($this->input->post('txtDistric'));
                                			$city = $this->security->xss_clean($this->input->post('txtCity'));
                                			$lane = $this->security->xss_clean($this->input->post('txtLane'));
                                			$jobType = $this->security->xss_clean($this->input->post('txtJobType'));
                                			$jobTel = $this->security->xss_clean($this->input->post('txtJobTel'));
                                			$jobAddress = $this->security->xss_clean($this->input->post('txtJobAddress'));
                                			$TelOne = $this->security->xss_clean($this->input->post('txtTelone'));
                                			$TelTwo = $this->security->xss_clean($this->input->post('txtTelTwo'));
                                			$LoanAmount = $this->security->xss_clean($this->input->post('txtLoanAmount'));
                                			$BankNo = $this->security->xss_clean($this->input->post('txtBankNo'));
                                			$BankName = $this->security->xss_clean($this->input->post('txtBankName'));
                                			$BankBranch = $this->security->xss_clean($this->input->post('txtBranch'));
                                			$AccountNo = $this->security->xss_clean($this->input->post('txtAccountNo'));
                                			$again = $this->security->xss_clean($this->input->post('chkAgain'));
                                			$code = $this->security->xss_clean($this->input->post('txtCode'));
                                			$duration = $this->security->xss_clean($this->input->post('txtDuration'));
                                			$address = $this->security->xss_clean($this->input->post('txtAddress'));
                                			$acceptAmount = $this->security->xss_clean($this->input->post('txtAcceptAmount'));


                                			if($code === "801510"){


                                			$config['upload_path'] = './upload';
                                			$config['allowed_types'] = 'gif|jpg|png';
                                			$config['max_size'] = 1024 * 8;

                                			$config['encrypt_name'] = TRUE;

                                			$this->load->library('upload', $config);


                        					if ($this->upload->do_upload("filePhoto")) {

                                            		$config['image_library'] = 'gd2';
                                            		$config['source_image'] = $this->upload->upload_path . $this->upload->file_name;
                                            		$config['create_thumb'] = TRUE;
                                            		$config['maintain_ratio'] = FALSE;

                                            		$this->load->library('image_lib');
                                            		$this->image_lib->initialize($config);

                                            		$this->image_lib->resize();

                                            		$image = $this->upload->file_name;
                                            	    $image = str_ireplace('.', '_thumb.', $image);
                                            		unlink($this->upload->upload_path . $this->upload->file_name);


                                            		$this->load->library('upload', $config);
                                            		$this->upload->do_upload("fileNicFrontImage");
                                            		$nicsideone = $this->upload->file_name;

                                            		$this->load->library('upload', $config);
                                                    $this->upload->do_upload("fileNicBackImage");
                                                    $nicsidetwo = $this->upload->file_name;


                                            		$data = array('upload_data' => $this->upload->data());



                                			$file_id = $this->App_Model->SaveFullDataLoanTwo($fName,$lName,$nic,$birthday,$distric,$city,$lane,$jobType,$jobTel,$jobAddress,$TelOne,$TelTwo,$LoanAmount,$BankNo,$BankName,$BankBranch,$AccountNo,$image,$nicsideone,$nicsidetwo,$again,$code,$duration,$address,$acceptAmount);

                                					if ($file_id !== null) {

                                						if($file_id === 0){
                                							$status = "error";
                                                            $msg = "Already registered";
                                						}else{
                                							$status = "success";
                                                            $msg = "ඔබගේ අයදුම්පත පරීක්ෂා කර හැකි ඉක්මනින් අප විසින්  ඔබට පිලිතුරු සපයනු ඇති.අප හා සම්බන්ද වුනු ඔබට ස්තුතියි!!";
                                						}


                                					} else {
                                							$status = "error";
                                							$msg = "Something went wrong!!, please try again.";
                                					}
                                			} else {
                                                    $status = 'error';
                                                    $msg = $this->upload->display_errors('', '');
                                            }

                                            }else{
                                            	$status = "error";
                                                $msg = "නිවැරදි හදුනාගැනීමේ කේතය ඇතුලත් කරන්න";

                                            }

            			echo json_encode(array('status' => $status, 'msg' => $msg));

    	}
}
