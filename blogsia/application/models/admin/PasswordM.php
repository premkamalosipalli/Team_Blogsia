<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PasswordM extends CI_Model
{
	public function getadmin($data)
	{
		$this->db->where($data);
		return $this->db->get('tbladmin')->num_rows();
	}

	public function updatepass($data,$id)
	{
		return $this->db->where($id)->update('tbladmin',$data);
	}
}

?>