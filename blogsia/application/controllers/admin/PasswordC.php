<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PasswordC extends CI_Controller
{  
	function __construct()
	{
		parent::__construct();
		$this->load->model("admin/PasswordM","pm");
		$this->load->model("admin/AdminM","am");
		if(!isset($this->session->aid))
		{
			redirect("admin/LoginC");
		}
	}
	
	public function chkpassword()
	{
		// $cpass=$this->input->post('cpass');
		// $data=array("adminid"=>$_SESSION['aid']);
		// $pass=$this->pm->getpass($data);
  //       $password=$pass[0]->password;   
  //       $id=array("adminid"=>$_SESSION['aid']);
  //       $npass=$this->input->post('npass');
  //          $cnpass=$this->input->post('cnpass');
  //       if($cpass==$password)
  //       {
          
  //          if($npass!=$cnpass)
  //          {
  //           $data=array("ainfo"=>$this->am->fetchadmin($id),
  //       "errmsg"=>"Passsword and Confirm password are not same" 
	 //       );
		// $this->load->view("admin/editprofile",$data);   	
  //          }  
  //          else{
  //          	$data=array("password"=>$npass);
  //          	 $this->am->updateadmin($id,$data);
  //          	 redirect("admin/AdminC");
  //          } 
  //       }
  //       else
  //       {
		// $data=array("ainfo"=>$this->am->fetchadmin($id),
  //       "errmsg"=>"Old passsword is incorrect" 
	 //    );
		// $this->load->view("admin/editprofile",$data);
  //       }
		$data=array("adminid"=>$_SESSION['aid'],
        "password"=>$this->input->post('cpassword')
	    );
     	 echo $this->pm->getadmin($data);
       
	}

	public function changepass()
	{
		$data=array(
      "password"=>$this->input->post('newpass')
	);
	$id=array(
      "adminid"=>$this->session->aid
	);
		echo $this->pm->updatepass($data,$id);
	}
}

?>