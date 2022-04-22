<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CheckC extends CI_Controller
{
	function __construct()
	{
        parent::__construct();
        
        $this->load->model("company/CompanyM","cm");
	} 
	
	public function checkuser($uname1)
	{
	$uname=array("username"=>$uname1);
		$result=$this->cm->checkusername($uname);
		if($result>0)
		{
          echo "Enter unique username";
	    }
	    else
	    {
	    	echo "Valid Username";
	    }
	}
	public function checkemail()
	{
	$uname=array("email"=>$this->input->post('usMail'));
		$result=$this->cm->checkemail($uname);
		if($result>0)
		{
          echo "Enter unique email";
	    }
	    else
	    {
	    	echo "Valid Email";
	    }
	}

}

?>