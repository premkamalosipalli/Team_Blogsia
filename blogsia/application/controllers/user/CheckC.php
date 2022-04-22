<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CheckC extends CI_Controller
{
	function __construct()
	{
        parent::__construct();
        
        $this->load->model("user/RegM","rm");
	} 
	
	public function checkuser($uname1)
	{
	$uname=array("username"=>$uname1);
		$result=$this->rm->checkusername($uname);
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
		$result=$this->rm->checkemail($uname);
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