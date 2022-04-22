<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OfferC extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
			if(!isset($this->session->companyid))
		{
			redirect("company/CompanyC");
		}
		$this->load->model("company/OfferM","om");
		$this->load->model("company/CompanyM","cm");
		$this->load->model("company/CompanyDetailsM","cdm");
		$this->load->model("company/ResponseOfferM","rom");

	}
	public function index()
	{
		$temp1=array("companyid"=>$_SESSION['companyid']);
		 $temp2=array("c.companyid"=>$_SESSION['companyid']);
		 $temp3=array("o.companyid"=>$_SESSION['companyid']);
		 $data=array(
		 	"companyinfo"=>$this->cdm->showCompanyData($temp1)[0],
		    	"respoffer"=>$this->rom->selectResponseOffer($temp3),
		 	"offers"=>$this->cdm->selectOfferDetails($temp2)
		 );

		$this->load->view("company/CompanyView",$data);
	}
	
	public function loadaddoffer()
	{
		$this->load->view("company/addoffer");
	}

	public function addOffer()
	{
		$data=array(
			"companyid"=>$_SESSION['companyid'],
			"title"=>$this->input->post('txtTitle'),
			"description"=>$this->input->post('txtDesc'),
			"minfollowers"=>$this->input->post('txtMinFoll'),
			"maxfollowers"=>$this->input->post('txtMaxFoll'),
			"minprice"=>$this->input->post('txtMinPrice'),
			"maxprice"=>$this->input->post('txtMaxPrice')
		);

		//print_r($data);
		 $this->om->insertOffer($data);
		 redirect("company/OfferC");
	}

	public function loaddeleteoffer()
	{
		$data=array(
			"offers"=>$this->om->selectOfferDetails()
		);
		$this->load->view("company/deleteoffer.php",$data);
	}

	public function removeOffer($id)
	{
		$data=array(
			"offerid"=>$id
		);

		$this->om->deleteOffer($data);
		redirect("company/OfferC");
	}
}
?>