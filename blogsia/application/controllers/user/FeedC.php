<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FeedC extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		 if(!isset($this->session->userid))
	    {
	    	redirect("user/LoginC");
	    }
		$this->load->model("user/FeedM","fm");
		$this->load->model("user/ArticleM","am");
	}

	public function index()
	{
		
		$temp1=array("f.userid"=>$this->session->userid);
      $data=array("f.followerid"=>$this->session->userid);
      $temp=array("articles"=>$this->fm->getarticles($data),
        "followers"=>$this->fm->followers($temp1));
      
      $this->load->view("user/feedview",$temp);    		
	}
	public function changebio()
	{
	   $data=array("bio"=>$this->input->post('txtbio'));
	   $id=array("userid"=>$this->session->userid);
	   $this->fm->chngbio($id,$data);
	   redirect("user/UserC");


	}

	public function checkArticle($aid)
	{
       $data=array(
			"articleid"=>$aid,
			"userid"=>$_SESSION['userid']
		);
         $aid=array(
			"articleid"=>$aid,
		);
		$count=$this->fm->chkarticle($data);
		if($count==1)
		{
			 $this->fm->unlike($data);
		}   
		else
		{
			 $this->fm->like($data);
		}
		$data1=$this->fm->countlikes($aid);
		$tot=array("total"=>$data1);
		echo json_encode($tot);

	}
	
	public function addComments($aid)
	{
		$data=array(
			"articleid"=>$aid,
			"userid"=>$_SESSION['userid'],
			"comment"=>$this->input->post('txtcomment'),
			"createdt"=>date("Y-m-d")
		);

		$this->am->insertComment($data);
		redirect("user/ArticleC/viewArticles/$aid");
	}
	public function checksaveArticle($aid)
	{
       $data=array(
			"articleid"=>$aid,
			"userid"=>$_SESSION['userid']
		);
		$count=$this->fm->chksavearticle($data); 
        if($count==0)
        {
         $this->fm->save($data);
         redirect("user/SaveC");
        }
        if($count==1)
        {
        $this->fm->unsave($data);
        redirect("user/SaveC");
        }

	}
	
}


?>