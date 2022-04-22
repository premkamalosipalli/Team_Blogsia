<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PasswordUserC extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		
		 if(!isset($this->session->userid))
	    {
	    	redirect("user/LoginC");
	    }
		$this->load->model('user/PasswordUserM','pum');
		$this->load->model("user/FeedM","fm");
	}

	public function loadChangePassword()
	{
		$temp1=array("f.userid"=>$this->session->userid);
		$data=array("followers"=>$this->fm->followers($temp1));
		$this->load->view('user/changePass',$data);
	}

	public function checkPassword()
	{
		$old=$this->input->post('txtOldPass');
		$new=$this->input->post('txtNewPass');
		$con=$this->input->post('txtConPass');
		$temp1=array("f.userid"=>$this->session->userid);	
		$data=array(
			"userid"=>$_SESSION['userid'],
			 
		);
		$uinf=$this->pum->getPassword($data);

		if($new!=$con)
		{
			$temp=array(
				"userinfo"=>$uinf,
				"loadErrMsg"=>"Password and Confirm Password do not match",
				"followers"=>$this->fm->followers($temp1)
			);
			$this->load->view('user/changePass',$temp);
		}
		else
		{	
			if($old!=$uinf[0]->password)
			{
				$temp=array(
					"userinfo"=>$uinf,
					"loadErrMsg"=>"Invalid Old Password",
					"followers"=>$this->fm->followers($temp1)
				);
				$this->load->view('user/changePass',$temp);
			}

			else
			{
				$data=array(		
					"password"=>$new
				);

				$this->pum->updateProfile($data);
				$temp=array(
					"userinfo"=>$uinf,
					"loadSuccessMsg"=>"Password changed successfully",
					"followers"=>$this->fm->followers($temp1)
				);
					$this->load->view('user/changePass',$temp);
					//redirect('user/ManageProfileC/loadManageProfile');
			}
		}
	}
}

?>