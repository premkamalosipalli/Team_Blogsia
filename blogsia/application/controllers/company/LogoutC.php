<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class LogoutC extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		
		if(!isset($this->session->companyid))
		{
			redirect("company/CompanyC");
		}
	}

	public function index()
	{
		session_destroy();
		redirect("company/CompanyC");
	}
}
?>