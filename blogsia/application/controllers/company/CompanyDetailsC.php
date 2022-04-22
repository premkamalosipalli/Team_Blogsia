<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CompanyDetailsC extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		if(!isset($this->session->companyid))
		{
			redirect("company/CompanyC");
		}
		$this->load->model("company/CompanyDetailsM","cdm");
	
	}

	public function index()
	{
		$temp1=array("companyid"=>$_SESSION['companyid']);
		 $data=array(
		 	"companyinfo"=>$this->cdm->showCompanyData($temp1)[0],
		 	"offers"=>$this->cdm->selectOfferDetails($temp1)
		 );

		 $this->load->view("company/viewcompdetails",$data);
	}
}
?>