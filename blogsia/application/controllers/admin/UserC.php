<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserC extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("admin/UserM","um");
	    if(!isset($this->session->aid))
		{
			redirect("admin/LoginC");
		}
	}
	public function index()
	{
        $data=array("users"=>$this->um->alluser()); 
		$this->load->view('admin/allusers',$data);
	}
	public function searchuser($id)
	{
		$uid=array("userid"=>$id);
		$data=array("userinfo"=>$this->um->searchuser($uid));
        $this->load->view("admin/displayuser",$data);   
 	   // print_r($data);
 	}

}


?>