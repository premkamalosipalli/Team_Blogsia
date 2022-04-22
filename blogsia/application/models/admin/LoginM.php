<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginM extends CI_Model
{
	public function getuser($data)
	{
		return $this->db->where($data)->get("tbladmin")->result();
	}
}

?>