<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class TrendingM extends CI_Model
{
	public function showTop10()
	{
		return $this->db->select("COUNT(l.likeid) as totallikes,a.articletitle,a.description,a.articleid,a.featuredimage as fimg,a.createdt,a.status,u.username ,u.profilepic as uimg")->from("tbllike l")->join("tbluser u","l.userid=u.userid")->join("tblarticle a","l.articleid=a.articleid")->order_by("a.articleid")->group_by("a.articleid")->limit(10)->get()->result();
	}

	public function articleTotalLikes($data)
	{
		return $this->db->from("tbllike")->count_all_results();
	}

	public function articleTotalComments($data)
	{
		return $this->db->from("tblcomment")->count_all_results();
	}

	public function articledetails($data)
	{
		  // $this->db->select("a.*,u.userid,u.profilepic as uimg,u.username,u.bio,COUNT(l.likeid) as totallikes,COUNT(c.commentid) as totcom");
    //      $this->db->from("tblarticle a");
    //       $this->db->join("tbluser u","a.userid=u.userid");
    //       $this->db->join("tbllike l","l.articleid=a.articleid");
    //        $this->db->join("tblcomment c","c.articleid=a.articleid");
    //        $this->db->where($data);
    //        $this->db->group_by("a.articleid");
    //      return $this->db->get()->result();
		  $this->db->select("a.*,u.userid,u.profilepic as uimg,u.username,COUNT(l.likeid) as total");
         $this->db->from("tblarticle a");
          $this->db->join("tbluser u","u.userid=a.userid");
         $this->db->join("tbllike l","a.articleid=l.articleid","left-outer");
          $this->db->where($data);
           $this->db->group_by("a.articleid");    
         return $this->db->get()->result();
	  
	}
}

?>