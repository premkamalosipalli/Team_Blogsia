<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginM extends CI_Model
{
	public function selectLogIn($data)
	{
		return $this->db->where($data)->get('tbluser')->result();
	}

	public function selectAllState()
	{
		return $this->db->get('tblstate')->result();
	}
	public function chngpass($id,$pass)
	{
	   return $this->db->where($id)->update('tbluser',array("password"=>$pass));	
	}


}


?>