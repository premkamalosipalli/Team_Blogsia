<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserM extends CI_Model
{
	public function alluser()
	{
	return $this->db->get('tbluser')->result();
   	}
   	public function searchuser($id)
   	{
   		$this->db->select("t.*,c.cityname,s.statename");
   		$this->db->from("tbluser t");
   		$this->db->join("tblcity c","c.cityid=t.cityid");
   		$this->db->join("tblstate s","s.stateid=c.stateid");
   		 $this->db->where($id);
   		return $this->db->get()->result();
   	}
	
}


?>