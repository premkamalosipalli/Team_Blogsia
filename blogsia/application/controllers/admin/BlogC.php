<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class BlogC extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if(!isset($this->session->aid))
		{
			redirect("admin/LoginC");
		}
		$this->load->model("admin/BlogM","bm");
	}

	public function index()
	{
		$data=array("binfo"=>$this->bm->fetcharticle());
		$this->load->view("admin/blogs",$data);
	}
	public function statusChange($id)
	{
		$this->bm->statusChange($id);
		echo $this->db->last_query();
	}
}


?>