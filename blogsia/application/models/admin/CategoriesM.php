<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CategoriesM extends CI_Model
{
    public function selectcategories()
    {
    	return $this->db->get("tblcategory")->result();
    }	
    public function insertcategory($data)
    {
    	return $this->db->insert("tblcategory",$data);
    }
    public function deletecat($data)
    {
    	return $this->db->delete("tblcategory",$data);
    }
    public function selectbyid($data)
    {
    	return $this->db->where($data)->get("tblcategory")->result();
    }

    public function updatecat($data,$temp)
    {
    	return $this->db->where($data)->update("tblcategory",$temp);
    }
}

?>