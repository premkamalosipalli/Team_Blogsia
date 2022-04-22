<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ManageProfileC extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if(!isset($this->session->companyid))
		{
			redirect("company/CompanyC");
		}
		$this->load->model("company/ManageProfileM","mpm");

	}

	public function loadManageProfile()
	{
		
		$data2=array(
			"companyid"=>$this->session->companyid
		);
		$temp=array(
			"company"=>$this->mpm->selectcompanyById($data2)
			
		);
		$this->load->view('company/manageprofile',$temp);
	}

	
	
	

	public function changeInfo()
	{
		$data2=array(
    		"companyid"=>$_SESSION['companyid']
    	);
    	if(!empty($_FILES['img']['name']))
		{
		$config['upload_path'] = "./upload/company/";
		$config['allowed_types'] = "jpg|jpeg|png";
		$config['overwrite'] = true;
		$config['file_name'] =$this->input->post('txtUsername') ;
		$this->load->library('upload',$config);	
		if($this->upload->do_upload('img'))
			{
				$img = $this->upload->data();
				$tmpnm = $img['file_name'];
				$uid = $this->session->userid;
			}
		
    	$data=array(
    		"username"=>$this->input->post('txtUsername'),
    		"website"=>$this->input->post('txtEmail'),
    		"companytitle"=>$this->input->post('txttitle'),
    		"email"=>$this->input->post('txtmail'),
    		"logo"=>$tmpnm,
    		"Description"=>$this->input->post('txtDes'),
    		
    	);
    	}
    	else{
    		$data=array(
    	"username"=>$this->input->post('txtUsername'),
    		"website"=>$this->input->post('txtEmail'),
    		"companytitle"=>$this->input->post('txttitle'),
    		"Description"=>$this->input->post('txtDes'),
    		"email"=>$this->input->post('txtmail')
    	);
    	}	
     	$this->mpm->updateUserInfo($data,$data2);
     	//print_r($t);
		redirect("company/OfferC");
		
	}
}

?>