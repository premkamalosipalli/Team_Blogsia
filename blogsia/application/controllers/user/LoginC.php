<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginC extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("user/LoginM","lm");
		$this->load->model("user/FeedM","fm");
        if($this->session->userid)
        {
        	redirect("user/FeedC");
        }  
	}

	public function index()
	{
		$sinfo=$this->lm->selectAllState();
		$data=array(
			"allstate"=>$sinfo
		);
		$this->load->view('user/login',$data); 
	}
		public function checkLogin()
	{
		$data=array(
			"email"=>$this->input->post('txtEmail'),
			"password"=>$this->input->post('txtPass')
		);

		
		$loggedData=$this->lm->selectLogIn($data);

		if(count($loggedData)>0)
		{
			$_SESSION['userid']=$loggedData[0]->userid;
			$_SESSION['email']=$loggedData[0]->email;
			$_SESSION['profilepic']=$loggedData[0]->profilepic;
			$_SESSION['username']=$loggedData[0]->username;
			$_SESSION['bio']=$loggedData[0]->bio;
			// redirect("user/ArticleC");
			redirect("user/FeedC");
		}
		else
		{
			$temp=array(
				"LoginErrMsg"=>"Invalid Username or Password"
			);
			$this->load->view('user/login',$temp);
		}
	}


		
}

?>