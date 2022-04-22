<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class SearchC extends CI_Controller
{
     function __construct()
     {
        parent::__construct();
        if(!isset($_SESSION['userid']))
        {
            redirect("user/LoginC");
        }
        $this->load->model("user/SearchM","sm");
        $this->load->model("user/ArticleM","am");
        $this->load->model("user/FeedM","fm");
    }

    public function index()
    {
        $temp1=array("f.userid"=>$this->session->userid);
        $data1=array('cinfo'=>$this->sm->getcat(),
               'articles'=>$this->am->showAllArticles(),
               "followers"=>$this->fm->followers($temp1) 
            );
         $this->load->view("user/search",$data1);
    }

    public function showCatArticles($id)
    {
        $temp=array("c.categoryid"=>$id);
          $temp1=array("f.userid"=>$this->session->userid);
        $data1=array(
            'scinfo'=>$this->sm->getSubCatById($temp),
            'articles'=>$this->sm->getArticleData($temp),
            "followers"=>$this->fm->followers($temp1)
            );
         $this->load->view("user/search_scat",$data1);
    }

    public function showSubCatArticles($id,$catid)
    {
        $temp=array("sc.subcatid"=>$id);
        $temp1=array("f.userid"=>$this->session->userid);
        $cid=array("c.categoryid"=>$catid);
        $data1=array(
            'scinfo'=>$this->sm->getSubCatById($cid),
            'articles'=>$this->sm->getArticleData($temp),
            "followers"=>$this->fm->followers($temp1)
        );
         $this->load->view("user/search_scat",$data1);
    }

    

    
}
?>