<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ForgotPasswordC extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		
		$this->load->model("user/ForgotPasswordM","fpm");
		$this->load->library('email');
	}

	public function loadForgetPass()
	{
		$this->load->view('user/forgotpass');
	}

	public function checkEmail()
	{
		
		// $link="http://localhost/blogsia/index.php/user/ForgotPasswordC/loadForgetPass";
		$data=array(
			"email"=>$this->input->post('txtEmail')
		);
		$result=$this->fpm->fetchEmail($data);
		$uid=array("userid"=>$result[0]->userid);
		//echo $this->email->print_debugger();
		if(count($result)>0)
		{
		 $this->load->helper('sendEmail');
	   $error=send_email($uid,$this->input->post('txtEmail'));
          if($error==1)
          {
          	redirect("user/LoginC");
          }
          else
		{
			$this->session->set_flashdata('message',"Not a Registered one");
			$this->session->set_flashdata('msg_class','alert-failure');
			redirect("user/ForgotPasswordC/loadForgetPass");
		}
		}
		else
		{
			$this->session->set_flashdata('message',"Not a Registered one");
			$this->session->set_flashdata('msg_class','alert-failure');
			redirect("user/ForgotPasswordC/loadForgetPass");
		}
		
		
	}

	// public function reset()
	// {
	// 	// $data=array(
	// 	// 	"password"=>$_SESSION['password']
	// 	// );
	// 	// $code=$_SESSION['password'];

	// 	// $fetchCode=$this->input->post('txtCode');
	// 	// print_r($code);
	// 	// if($fetchCode==$code)
	// 	// {
	// 		$new=$this->input->post('txtNewPass');
	// 		$con=$this->input->post('txtConPass');
			
	// 		// $data=array(
	// 		// 	"email"=>$_SESSION['email']
	// 		// );
	// 		// $uinf=$this->fpm->getPassword($data);

	// 		if($new!=$con)
	// 		{
	// 			$temp=array(
	// 				//"userinfo"=>$uinf,
	// 				"loadErrMsg"=>"Password and Confirm Password do not match"
	// 			);
	// 			//print_r($temp);
	// 			$this->load->view('user/forgotpass',$temp);
	// 		}
	// 		else
	// 		{
	// 			$data=array(		
	// 				"password"=>$new
	// 			);

	// 			$this->fpm->updatePassword($data);
	// 			$temp=array(
	// 				//"userinfo"=>$uinf,
	// 				"loadSuccessMsg"=>"Password changed successfully"
	// 			);
	// 				$this->load->view('user/forgotpass',$temp);
	// 		}
		
	// }
}

?>