<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PasswordM extends CI_Model
{
	
	public function getPassword($data)
	{
		return $this->db->select('password')->from('tblcompany')->where($data)->get()->result();
	}

	public function updateProfile($data)
	{
		$where=array("companyid"=>$_SESSION['companyid']);
		return $this->db->where($where)->update('tblcompany',$data);
	}
}

?>