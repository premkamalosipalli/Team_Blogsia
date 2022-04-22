<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TagsM extends CI_Model
{
	public function gettags($data)
	{
        return $this->db->where($data)->from("tbltag t")->join("tblsubcategory sc","t.subcatid=sc.subcatid")->get()->result();
	}
	public function inserttag($data)
	{
      return $this->db->insert("tbltag",$data);
	}
	public function deletetag($data)
	{
		return $this->db->delete("tbltag",$data);
	}
	public function selecttags($data)
	{
		return $this->db->where($data)->get("tbltag")->result();
	}
	public function getsubcat()
	{
		return $this->db->get("tblsubcategory")->result();
	}
	public function updatetag($data,$temp)
	{
		return $this->db->where($data)->update("tbltag",$temp);
	}
	
}
?>