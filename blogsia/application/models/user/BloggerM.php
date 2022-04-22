<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BloggerM extends CI_Model
{

public function getuseraticle($id)
    {
      $this->db->select("a.*,u.username,u.profilepic as uimg,sc.subcatname,c.categoryname,u.bio");
		$this->db->from("tblarticle a");
		$this->db->where($id);
		$this->db->join("tbluser u","u.userid = a.userid");
	    $this->db->join("tblsubcategory sc","sc.subcatid = a.subcatid");
		$this->db->join("tblcategory c","c.categoryid = sc.categoryid");
		return $this->db->get()->result();
    }



    public function fetchfollowers($id)
    {
    	$this->db->select("f.*,u.profilepic,u.username");
    	$this->db->from("tblfollow f");
    	$this->db->join("tbluser u","u.userid=f.followerid");
    	$this->db->where($id);
    	return $this->db->get()->result();
    }
    public function fetchfollowing($id)
    {
    	$this->db->select("f.*,u.profilepic,u.username");
    	$this->db->from("tblfollow f");
    	$this->db->join("tbluser u","u.userid=f.userid");
    	$this->db->where($id);
    	return $this->db->get()->result();
    }

    public function fetchdata($data)
    {
        return $this->db->where($data)->get("tblfollow")->num_rows();
    }
     public function brandcollabs($uid)
    {
      $this->db->select("r.*,o.*,c.companytitle");
      $this->db->from("tblpatnershipresponse r");
      $this->db->join("tblpartnershipoffer o","o.offerid=r.offerid");
     $this->db->join("tblcompany c","c.companyid=o.companyid");
      $this->db->where($uid);
      return $this->db->get()->result();
    }
}

?>