<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ResponseOfferC extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
			if(!isset($this->session->companyid))
		{
			redirect("company/CompanyC");
		}
		$this->load->model("company/ResponseOfferM","rom");
	}

	public function index()
	{
		$data=array(
			"respoffer"=>$this->rom->selectResponseOffer()
		);
		 $this->load->view("company/responseoffer",$data);
	}

	public function statusChange($id)
	{
		$this->rom->statusChange($id);
		echo $this->db->last_query();
	 
	}

	public function acceptoffer($id)
	{
		$data=array("r.responseid"=>$id);
		$data1=$this->rom->accept($data);
        $mail= $data1[0]->email;
         $title=$data1[0]->title;

        $this->load->helper('sendResponse');
        $result=send_email($mail,$title);
        if($result==1)
        {
        	$this->rom->statusChange($id);
        	redirect("company/OfferC");
        } 
        else
        	{
        		echo "Error generated";
        	}
	}
}
?>