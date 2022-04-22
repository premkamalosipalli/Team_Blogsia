<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PostArtM extends CI_Model 
{
	public function selectAllCategories()
	{
		return $this->db->get('tblcategory')->result();
	}

	public function selectAllSubCatByCatId($data)
	{
		return $this->db->where($data)->get('tblsubcategory')->result();
	}

	public function selectTagBySubCat($data)
	{
		return $this->db->where($data)->get('tbltag')->result();
	}

	public function insertArticle($data)
	{
		return $this->db->insert('tblarticle',$data);
	}

	public function insertArticleTag($data)
	{
		return $this->db->insert('tblarticletag',$data);
	}
}
?>