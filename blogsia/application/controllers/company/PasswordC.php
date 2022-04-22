<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PasswordC extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
			if(!isset($this->session->companyid))
		{
			redirect("company/CompanyC");
		}
		$this->load->model('company/PasswordM','pum');
	}

	public function loadChangePassword()
	{
		$this->load->view('company/changepassword');
	}

	public function checkPassword()
	{
		$old=$this->input->post('txtOldPass');
		$new=$this->input->post('txtNewPass');
		$con=$this->input->post('txtConPass');

		$data=array(
			"companyid"=>$_SESSION['companyid']
		);
		$uinf=$this->pum->getPassword($data);

		if($new!=$con)
		{
			$temp=array(
				"companyinfo"=>$uinf,
				"loadErrMsg"=>"Password and Confirm Password do not match"
			);
			$this->load->view('company/changepassword',$temp);
		}
		else
		{	
			if($old!=$uinf[0]->password)
			{
				$temp=array(
					"companyinfo"=>$uinf,
					"loadErrMsg"=>"Invalid Old Password"
				);
				$this->load->view('company/changepassword',$temp);
			}

			else
			{
				$data=array(		
					"password"=>$new
				);

				$this->pum->updateProfile($data);
				$temp=array(
					"companyinfo"=>$uinf,
					"loadSuccessMsg"=>"Password changed successfully"
				);
					$this->load->view('company/changepassword',$temp);
					//redirect('user/ManageProfileC/loadManageProfile');
			}
		}
	}
}

?>