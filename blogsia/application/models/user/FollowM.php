<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FollowM extends CI_Model
{
	
	public function FollowUser($data)
	{
		return $this->db->insert("tblfollow",$data);
	}

	public function unFollowUser($data)
   {
   	return $this->db->where($data)->delete('tblfollow');
   }
}
?>