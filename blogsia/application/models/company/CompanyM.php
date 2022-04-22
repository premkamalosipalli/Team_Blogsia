<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CompanyM extends CI_Model
{
	public function insertData($data)
	{
		return $this->db->insert("tblcompany",$data);
	}

	public function selectData($data)
	{
		return $this->db->where($data)->get("tblcompany")->result();
	}
	
		public function chngpass($id,$pass)
	{
	   return $this->db->where($id)->update('tblcompany',array("password"=>$pass));	
	}
	public function checkusername($data)
    {
    	return $this->db->where($data)->get('tblcompany')->num_rows();
    }
    public function checkemail($data)
    {
    	return $this->db->where($data)->get('tblcompany')->num_rows();
    }

}

?>