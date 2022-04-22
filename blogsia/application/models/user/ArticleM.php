<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ArticleM extends CI_Model
{
	public function showAllArticles()
	{
		$this->db->select("a.*,u.username,u.profilepic as uimg,sc.subcatname,c.categoryname,COUNT(l.likeid) as total");
		$this->db->from("tblarticle a");
		$this->db->join("tbluser u","u.userid = a.userid");
	    $this->db->join("tblsubcategory sc","sc.subcatid = a.subcatid");
		$this->db->join("tblcategory c","c.categoryid = sc.categoryid");
         $this->db->join("tbllike l","a.articleid=l.articleid", "left outer");
           $this->db->group_by("l.articleid");
		return $this->db->get()->result();

	}

	public function deleteArticle($data)
	{
		return $this->db->delete('tblarticle',$data);
	}

	public function selectArticleInfo($data)
	{
		return $this->db->where($data)->get('tblarticle a')->result()[0];
	}

	public function selectAllCategories()
	{
		return $this->db->get('tblcategory')->result();
	}

	public function selectCategory()
    {
    	return $this->db->get("tblcategory")->result();
    }
    // public function selectsubCategory()
    // {
    //     return $this->db->get("tblsubcategory")->result();	
    // }

    public function updateCategory($data,$temp)
    {
    	return $this->db->where($data)->update("tblcategory",$temp);
    }

	public function selectArticleById($data)
	{
	 	$this->db->select("a.*,u.username,u.profilepic as uimg, s.subcatname,s.categoryid,c.categoryname");
		$this->db->from("tblarticle a");
		$this->db->join("tbluser u","u.userid=a.userid");
		$this->db->join("tblsubcategory s","s.subcatid=a.subcatid");
		//$this->db->join("tbltag t","t.subcatid=s.subcatid");
		$this->db->join("tblcategory c","c.categoryid=s.categoryid");
		return $this->db->where($data)->get()->result();
	 
	 //return $this->db->where($data)->get('tblarticle')->result();

	} 
	public function selectsubcatBycat($data)
	{
		return $this->db->where($data)->get('tblsubcategory')->result();
	}

	// public function selectSubCat($data)
	// {
	// 	return $this->db->where($data)->from("tblsubcategory sc")->join("tblcategory c","sc.categoryid=c.categoryid")->get()->result();
	// }

	public function selectSubCategory()
	{
		return $this->db->get('tblsubcategory')->result();
	}
	
	

	public function updateSubcat($id,$data)
    {
    	return $this->db->where($id)->update("tblsubcategory",$data);
    }

	

	public function updateArticleInfo($data,$data2)
	{
		return $this->db->where($data2)->update('tblarticle',$data);
	}

	public function insertComment($data)
	{
		return $this->db->insert("tblcomment",$data);
	}
	public function deleteComment($data)
	{
		return $this->db->delete("tblcomment",$data);
	}

	public function loadCommentByArticleId($data)
	{
		 $this->db->from("tblcomment c");
		$this->db->join("tbluser u","u.userid=c.userid");
		return  $this->db->where($data)->get()->result();
	}

	public function checkArticle($data)
	{
		return $this->db->where($data)->get("tbllike")->result();
	}

	public function like($data)
	{
		return $this->db->insert("tbllike",$data);
	}

	public function unlike($data)
	{
		return $this->db->delete("tbllike",$data);
	}

	public function articleTotalLikes($data)
	{
		$this->db->from("tbllike l");
		$this->db->join("tbluser u","u.userid=l.userid");
		return $this->db->where($data)->get()->result();
	}
}

?>