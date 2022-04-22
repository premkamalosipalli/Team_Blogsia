<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TestC extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if(!isset($this->session->userid))
	    {
	    	redirect("user/LoginC");
	    }
		$this->load->model("user/TestM","tm");
		$this->load->model("user/FeedM","fm");
		$this->load->model("user/ArticleM","am");
	}

	public function index()
	{
		 $data=array("f.followerid"=>$this->session->userid);
      $temp=array("articles"=>$this->fm->getarticles($data));
      $this->load->view("user/test",$temp);  
	}
	public function checkArticle($aid)
	{
       $data=array(
			"articleid"=>$aid,
			"userid"=>$_SESSION['userid']
		);
		echo $this->fm->chkarticle($data);   
	}
	public function likeArticle($aid)
	{
		$data=array(
			"articleid"=>$aid,
			"userid"=>$_SESSION['userid']
		);
		$aid=array("articleid"=>$aid,
        );
		 $this->fm->like($data);
	    echo count($this->fm->countlikes($aid));   
	}
	public function unlikeArticle($aid)
	{
		$data=array(
			"articleid"=>$aid,
			"userid"=>$_SESSION['userid']
		);
		$aid=array("articleid"=>$aid,
        );

		 $this->fm->unlike($data);
		echo count($this->fm->countlikes($aid)); 

	}
	
 }




?>