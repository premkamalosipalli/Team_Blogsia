<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SubcatM extends CI_Model
{
	public function selectsubcat($data)
	{
		return  $this->db->where($data)->from("tblsubcategory sc")->join("tblcategory c","sc.categoryid=c.categoryid")->get()->result();
	}
    public function addsubcat($data)
	{
      return $this->db->insert("tblsubcategory",$data);
	}		  
	public function deletesubcat($data)
	{
		return $this->db->delete("tblsubcategory",$data);
	}
	public function selectbyid($data)
	{
		return $this->db->where($data)->get("tblsubcategory")->result();
	}
    public function allcat()
    {
    	return $this->db->get("tblcategory")->result();
    }
    public function updatesubcat($id,$data)
    {
    	return $this->db->where($id)->update("tblsubcategory",$data);
    }
}
?>