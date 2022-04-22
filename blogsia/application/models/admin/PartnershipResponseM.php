<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PartnershipResponseM extends CI_Model
{
	public function getresponse()
	{
		$this->db->select("r.*,u.username");
		$this->db->from("tblpatnershipresponse r");
		$this->db->join("tbluser u","u.userid=r.userid");
		return $this->db->get()->result();
	}
}

?>