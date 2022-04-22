<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PartnershipResponseC extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("admin/PartnershipResponseM","rm");
		if(!isset($this->session->aid))
		{
			redirect("admin/LoginC");
		}
	}

	public function index()
	{
		$data=array("response"=>$this->rm->getresponse());
		$this->load->view("admin/partnershipresponse",$data);
	}
}

?>