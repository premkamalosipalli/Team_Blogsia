<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminM extends CI_Model
{
     public function getadmin()
     {
       return $this->db->get("tbladmin")->result();      
     }
     public function insertadmin($data)
     {
     	return $this->db->insert("tbladmin",$data);
     }
     public function fetchadmin($id)
     {
        return $this->db->where($id)->get('tbladmin')->result();
     }

     public function updateadmin($id,$data)
     {
     	return $this->db->where($id)->update('tbladmin',$data);
     }
      public function countAllUsers()
    {
        return $this->db->from("tbluser")->count_all_results();
    }

    public function countAllBlogs()
    {
        return $this->db->from("tblarticle")->count_all_results();
    }

    public function countAllCategories()
    {
        return $this->db->from("tblcategory")->count_all_results();
    }

    public function countAllCompanies()
    {
        return $this->db->from("tblcompany")->count_all_results();
    }

    public function countBlogPostedOn()
    {
        return $this->db->from("tblarticle")->count_all_results();
    }
     public function getBlog()
    {
        return $this->db->select("a.*,u.userid,u.username")->from("tblarticle a")->join("tbluser u","a.userid=u.userid")->get()->result();
    }

    public function getCategory()
    {
        return $this->db->select("a.*,sc.subcatname,c.categoryname")->from("tblarticle a")->join("tblsubcategory sc","a.subcatid=sc.subcatid")->join("tblcategory c","sc.categoryid=c.categoryid")->get()->result();
    }
}


?>