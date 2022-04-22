<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OfferM extends CI_Model
{
	
	public function getoffers()
	{
		$this->db->select("o.*,c.logo");
		$this->db->from("tblpartnershipoffer o");
		$this->db->join("tblcompany c","c.companyid=o.companyid");
		return $this->db->get()->result();
	}
		public function selectofferDetails($data)
	{
		$this->db->select("o.*,c.companytitle");
		$this->db->from("tblpartnershipoffer o");
		$this->db->join("tblcompany c","c.companyid=o.companyid");
		return $this->db->where($data)->get()->result();
	}
	public function addresponse($data)
	{
		return $this->db->insert('tblpatnershipresponse',$data);
	}
}

?>