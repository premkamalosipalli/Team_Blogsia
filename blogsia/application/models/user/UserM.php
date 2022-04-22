<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserM extends CI_Model
{
	
    public function getuseraticle($id)
    {
         $this->db->select("a.*,u.userid,u.profilepic as uimg,u.username,u.bio,COUNT(l.likeid) as total");
         $this->db->from("tblarticle a");
          $this->db->join("tbluser u","a.userid=u.userid");
          $this->db->join("tbllike l","l.articleid=a.articleid","left outer");
          $this->db->group_by("a.articleid");
           $this->db->where($id);
         return $this->db->get()->result();
    }

     
    public function getuserdata($id)
    {
      $this->db->select("u.*");
      $this->db->from("tbluser u");
      $this->db->where($id);
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