<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FeedM extends CI_Model
{
      public function getarticles($data)
      {

   
         $this->db->select("a.*,u.userid,u.profilepic as uimg,u.username,COUNT(l.likeid) as total");
         $this->db->from("tblfollow f");
         $this->db->join("tblarticle a","f.userid=a.userid");
         $this->db->where($data);
          $this->db->join("tbluser u","u.userid=f.userid");
         $this->db->join("tbllike l","a.articleid=l.articleid", "left outer");
           $this->db->group_by("l.articleid");
         return $this->db->get()->result();
            
      }

      public function chngbio($id,$data)
      {
            return $this->db->where($id)->update('tbluser',$data);
      }
      public function like($data)
      {
            return $this->db->insert("tbllike",$data);
      }
      
      public function unlike($data)
      {
            return $this->db->delete("tbllike",$data);
      }

      public function chkarticle($data)
      {
            return $this->db->where($data)->get('tbllike')->num_rows();
      }
      public function countlikes($data)
      {
         $this->db->select("COUNT(likeid) as total");
         return $this->db->where($data)->get('tbllike')->result();
      }
       public function chksavearticle($data)
      
      {
            return $this->db->where($data)->get('tblarticlesave')->num_rows();
      }
       public function save($data)
      {
            return $this->db->insert("tblarticlesave",$data);
      }
        public function unsave($data)
      {
            return $this->db->delete("tblarticlesave",$data);
      }
       public function followers($data)
       {
      $this->db->select("f.*,u.profilepic,u.username");
      $this->db->from("tblfollow f");
      $this->db->join("tbluser u","u.userid=f.followerid");
      $this->db->where($data);
      return $this->db->get()->result();

        }       

}

?>