<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ComForgetPasswordC extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		
		$this->load->model("company/ForgetPassM","fpm");
		
	}

	public function loadForgetPass()
	{
		$this->load->view('company/forgetpass');
	}

	public function checkEmail()
	{
		
		
		$data=array(
			"email"=>$this->input->post('txtEmail')
		);
		$result=$this->fpm->fetchEmail($data);
		$cid=array("companyid"=>$result[0]->companyid);
		//echo $this->email->print_debugger();
		if(count($result)>0)
		{
		 $this->load->helper('sendCompany');
	   $error=send_email($cid,$this->input->post('txtEmail'));
          if($error==1)
          {
          	redirect("company/CompanyC");
          }
          else
		{
			$this->session->set_flashdata('message',"Not a Registered one");
			$this->session->set_flashdata('msg_class','alert-failure');
			redirect("company/ComForgetPasswordC/loadForgetPass");
		     	
		}
		}
		else
		{
			$this->session->set_flashdata('message',"Not a Registered one");
			$this->session->set_flashdata('msg_class','alert-failure');
			redirect("company/ComForgetPasswordC/loadForgetPass");
			
		}
		
		
	}

	
}

?>