<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegM extends CI_Model
{
	public function insertUser($data)
	{
		return $this->db->insert('tbluser',$data);
	}

	
	public function selectCityByState($data)
	{
		return $this->db->where($data)->get('tblcity')->result();
	}
    
    public function checkusername($data)
    {
    	return $this->db->where($data)->get('tbluser')->num_rows();
    }
    public function checkemail($data)
    {
    	return $this->db->where($data)->get('tbluser')->num_rows();
    }
}

?>