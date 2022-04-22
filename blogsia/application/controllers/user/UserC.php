<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class UserC extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if(!isset($this->session->userid))
	    {
	    	redirect("user/LoginC");
	    }
		$this->load->model("user/UserM","um");
	}
	
	public function index()
	{
		$id1=array("userid"=>$this->session->userid);
		$id=array("a.userid"=>$this->session->userid);
		$uid=array("r.userid"=>$this->session->userid,
	    "status"=>1);
		$fid=array("f.userid"=>$this->session->userid);
		$ffid=array("f.followerid"=>$this->session->userid);
	 $data=array("article"=>$this->um->getuseraticle($id),
	 	"followers"=>$this->um->fetchfollowers($fid),
	 	 "followings"=>$this->um->fetchfollowing($ffid),
	 	 "brands"=>$this->um->brandcollabs($uid),
	 	 "userdata"=>$this->um->getuserdata($id1)
	       );
	//print_r($data);
				 $this->load->view("user/userprofile",$data);
	  
	}



	// public function loadArticle()
	// {
	// 	$data=$this->um->showAllArticles();
	// 	$temp=array(
	// 		"articles"=>$data
	// 	);
	// 	$this->load->view('user/viewarticle',$temp);
	// }
	// public function uploadImgDrop()
	// {
	//    if(!empty($_FILES['file']['name']))
	//    {
	// 	// Set preference
	//      $config['upload_path'] = 'upload/'; 
	//      $config['allowed_types'] = 'jpg|jpeg|png|gif';
	//      $config['max_size'] = '1024'; // max_size in kb
	//      $config['file_name'] = $_FILES['file']['name'];

	//      //Load upload library
	//      $this->load->library('upload',$config); 

	//      // File upload
	//      if($this->upload->do_upload('file'))
	//      {
	//        // Get data about the file
	//        $uploadData = $this->upload->data();
	//      }
	//    }
	// }
}
?>



