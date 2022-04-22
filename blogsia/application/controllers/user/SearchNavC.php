<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class SearchNavC extends CI_Controller
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
        if(isset($_POST['search']))
        {
            $data=$_POST['search'];
            $search=array("a.articletitle"=>$data);
            $data1=array(
                "articles"=>$this->sm->showAllArticles($search),
                "followers"=>$this->fm->followers($temp1)
            );
           
             $this->load->view("user/searchnav",$data1);
        }
        else
        {
            echo "die";
            die();
        }
         
    }
}
?>