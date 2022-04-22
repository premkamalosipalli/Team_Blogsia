<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PasswordUserM extends CI_Model
{
	
	public function getPassword($data)
	{
		return $this->db->select('password')->from('tbluser')->where($data)->get()->result();
	}

	public function updateProfile($data)
	{
		$where=array("userid"=>$_SESSION['userid']);
		return $this->db->where($where)->update('tbluser',$data);
	}
}

?>