<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SearchM extends CI_Model
{
	public function getCat()
	{
		return $this->db->get('tblcategory')->result();
	}
	public function getArticleData($id)
	{	
		$this->db->select("a.*,u.username,u.profilepic as uimg,sc.subcatname,c.categoryname,COUNT(l.likeid) as total");
		$this->db->from("tblarticle a");
		$this->db->join("tbluser u","u.userid = a.userid");
	    $this->db->join("tblsubcategory sc","sc.subcatid = a.subcatid");
		$this->db->join("tblcategory c","c.categoryid = sc.categoryid");
		$this->db->join("tbllike l","a.articleid=l.articleid", "left outer");
           $this->db->group_by("l.articleid");
		$this->db->where($id);
		return $this->db->get()->result();
	}

	public function showAllArticles($data)
	{$this->db->select("a.*,u.username,u.profilepic as uimg,sc.subcatname,c.categoryname,COUNT(l.likeid) as total");
		$this->db->from("tblarticle a");
		$this->db->join("tbluser u","u.userid = a.userid");
	    $this->db->join("tblsubcategory sc","sc.subcatid = a.subcatid");
		$this->db->join("tblcategory c","c.categoryid = sc.categoryid");
		$this->db->join("tbllike l","a.articleid=l.articleid", "left outer");
           $this->db->group_by("l.articleid");
		$this->db->like($data);
		return $this->db->get()->result();
	}

	public function getArticleDataByTag($id)
	{	
		$this->db->select("a.*,u.username,u.profilepic as uimg,sc.subcatname,c.categoryname,t.*");
		$this->db->from("tblarticle a");
		$this->db->join("tbluser u","u.userid = a.userid");
	    $this->db->join("tblsubcategory sc","sc.subcatid = a.subcatid");
		$this->db->join("tblcategory c","c.categoryid = sc.categoryid");
		$this->db->join("tbltag t","t.subcatid = a.subcatid");
		$this->db->where($id);
		return $this->db->get()->result();
	}

	public function getSubCatById($id)
	{
		$this->db->select("c.*,sc.*");
		$this->db->from("tblsubcategory sc");
		$this->db->join("tblcategory c","c.categoryid=sc.categoryid");
		return $this->db->where($id)->get()->result();
	}

	public function getSubCat()
	{
		$this->db->select("c.*,sc.*");
		$this->db->from("tblsubcategory sc");
		$this->db->join("tblcategory c","c.categoryid=sc.categoryid");
		return $this->db->get()->result();
	}

	// public function getTagsById($id)
	// {
	// 	$this->db->select("t.*,sc.*");
	// 	$this->db->from("tbltag t");
	// 	$this->db->join("tblsubcategory sc","sc.subcatid=t.subcatid");
	// 	$this->db->join("tblcategory c","c.categoryid=sc.categoryid");
	// 	return $this->db->where($id)->get()->result();
	// }
}
?>