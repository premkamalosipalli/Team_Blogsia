<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LogoutC extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	    if(!$this->session->userid)
		{
			redirect("user/LoginC");
		}
	}

	public function index()
	{
		session_destroy();
		redirect("user/LoginC");
	}
}

?>