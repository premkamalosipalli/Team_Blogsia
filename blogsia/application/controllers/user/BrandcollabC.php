<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BrandcollabC extends CI_Controller
{
	
	function __construct()
	{
		$this->load->model("user/BrandcollabM","bm");
	}

	
}

?>