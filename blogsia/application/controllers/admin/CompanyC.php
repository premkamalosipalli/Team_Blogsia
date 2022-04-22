<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CompanyC extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("admin/CompanyM","cm");
		if(!isset($this->session->aid))
		{
			redirect("admin/LoginC");
		}
	}

	public function index()
	{
		$data=array("company"=>$this->cm->allcompany());
		$this->load->view("admin/allcompanies",$data);
	}

	public function searchcompany($id)
	{
      $cid=array("companyid"=>$id);
      $data=array("cinfo"=>$this->cm->fetchcompany($cid));
      $this->load->view("admin/companyview",$data);
	}
}

?>