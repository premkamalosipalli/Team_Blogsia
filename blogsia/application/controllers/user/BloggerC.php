<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BloggerC extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		 if(!isset($this->session->userid))
	    {
	    	redirect("user/LoginC");
	    }
		$this->load->model("user/BloggerM","bm");
		$this->load->model("user/FeedM","fm");
	}

	public function loadblogger($id)
	{
	$uid=array("a.userid"=>$id);
	$rid=array("r.userid"=>$id,
	    "status"=>1);
	$fid=array("f.userid"=>$id);
	$ffid=array("f.followerid"=>$id);
	$temp1=array("f.userid"=>$this->session->userid);

	$getdata=array("followerid"=>$this->session->userid,
    "userid"=>$id
    );
    $result=$this->bm->fetchdata($getdata);

    $data=array("article"=>$this->bm->getuseraticle($uid),
	 	"followers1"=>$this->bm->fetchfollowers($fid),
	 	 "followings"=>$this->bm->fetchfollowing($ffid),
	     "brands"=>$this->bm->brandcollabs($rid),
	         "followers"=>$this->fm->followers($temp1)
	       );
       if($result==1)
       {
     $this->load->view("user/bloggerview",$data);  	
       }
       else
       {
       $this->load->view("user/follow",$data);  	
       }
	 	
    
	}
}

?>