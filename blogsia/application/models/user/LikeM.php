<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LikeM extends CI_Model
{
	public function selectLikedArticles($data)
	{
		 $this->db->select("a.*,u.username,u.profilepic as uimg");
	    $this->db->from("tbllike l");
	    $this->db->join("tblarticle a","a.articleid=l.articleid");
	    $this->db->join("tbluser u","u.userid=a.userid");	
	    $this->db->where($data);
	    return $this->db->get()->result();
	}

	public function selectLikedDetails($data)
	{
		$this->db->select("a.*,u.*");
		$this->db->from("tblarticle a");
		$this->db->join("tbluser u","u.userid=a.userid");
		return $this->db->where($data)->get()->result();
	}
}
?>