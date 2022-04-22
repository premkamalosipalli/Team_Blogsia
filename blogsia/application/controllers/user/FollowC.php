<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FollowC extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
     if(!isset($this->session->userid))
      {
        redirect("user/LoginC");
      }
		$this->load->model("user/FollowM","fm");
	}
     
    public function followuser($id)
    {
      $data=array(
      	"userid"=>$id,
      	"followerid"=>$this->session->userid
      );
     echo $this->fm->FollowUser($data);
    }

    public function unfollowuser($id)
    {
    	$data=array(
      	"userid"=>$id,
      	"followerid"=>$this->session->userid
      );
     echo $this->fm->unFollowUser($data);
    }
}
?>
