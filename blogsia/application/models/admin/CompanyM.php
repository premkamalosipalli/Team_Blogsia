<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CompanyM extends CI_Model
{
	public function allcompany()
	{
		return $this->db->get('tblcompany')->result();
	}
	public function fetchcompany($id)
	{
        return $this->db->where($id)->get('tblcompany')->result();
	}
}

?>