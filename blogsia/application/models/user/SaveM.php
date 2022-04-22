<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SaveM extends CI_Model
{
		public function selectSavedArticles($data)
	{
	    $this->db->select("a.*,u.username,u.profilepic as uimg");
	    $this->db->from("tblarticlesave s");
	    $this->db->join("tblarticle a","a.articleid=s.articleid");
	    $this->db->join("tbluser u","u.userid=a.userid");	
	    $this->db->where($data);
	    return $this->db->get()->result();
		
	}



	public function selectSaveDetails($data)
	{
		$this->db->select("a.*,u.*");
		$this->db->from("tblarticle a");
		$this->db->join("tbluser u","u.userid=a.userid");
		return $this->db->where($data)->get()->result();
	}
}

?>