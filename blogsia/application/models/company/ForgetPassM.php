<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ForgetPassM extends CI_Model
{
	public function fetchEmail($email)
	{
	
		return $this->db->where($email)->get('tblcompany')->result();
	}
	public function updatePassword($data)
	{
	
		return $this->db->update('tblcompany',$data);
	}
}

?>