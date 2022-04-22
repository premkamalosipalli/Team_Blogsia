<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BlogM extends CI_Model
{
     public function fetcharticle()
     {
     	 $this->db->select("a.*,u.username,sc.subcatname,c.categoryname");
     	 $this->db->from("tblarticle a");
     	 $this->db->join("tbluser u","u.userid=a.userid");
     	 $this->db->join("tblsubcategory sc","sc.subcatid=a.subcatid");
         $this->db->join("tblcategory c","c.categoryid=sc.categoryid");
 
     	 return $this->db->get()->result();
     }	
     public function statusChange($id)
	{
		$this->db->set("status","1-status",false)->where("articleid",$id)->update("tblarticle");
	}
}

?>