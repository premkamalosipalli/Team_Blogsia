<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PartnershipC extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("admin/PartnershipM","pm");
	if(!isset($this->session->aid))
		{
			redirect("admin/LoginC");
		}
	}

	public function index()
	{
		$data=array("offers"=>$this->pm->getoffers());
		$this->load->view("admin/partnershipoffers",$data);
	}
}

?>