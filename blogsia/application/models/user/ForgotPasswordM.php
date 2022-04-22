<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ForgotPasswordM extends CI_Model
{
	public function fetchEmail($email)
	{
	
		return $this->db->where($email)->get('tbluser')->result();
	}

	// public function getPassword($data)
	// {
	// 	return $this->db->select('password')->from('tbluser')->where($data)->get()->result();
	// }

	public function updatePassword($data)
	{
		//$where=$_SESSION['email'];
		return $this->db->update('tbluser',$data);
	}
}

?>