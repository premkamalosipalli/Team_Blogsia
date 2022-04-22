<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginC extends CI_Controller
{
   public function __construct()
	{
	   parent::__construct();
	   
	   $this->load->model("admin/LoginM","lm");
	   if(isset($this->session->aid))
	   {
	   	redirect("admin/AdminC/loadDashboard");
	   }
	}
	public function index()
	{
		$this->load->view("admin/login.php");
	}

	public function checkuser()
	{
		$data=array("username"=>$this->input->post('uname'),
        "password"=>$this->input->post('pass')
	);
		$temp=$this->lm->getuser($data);
		if(count($temp)>0)
		{    
			 $this->session->aid=$temp[0]->adminid;
             $this->session->aname=$temp[0]->username;
             $this->session->pic=$temp[0]->profilepic;
              
             redirect("admin/AdminC/loadDashboard");
		}
		else
		{
			$error=array("errormsg"=>"Invalid credentials");
			$this->load->view("admin/login.php",$error);
		}
	}


}

?>