<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OfferM extends CI_Model
{
	public function selectOfferDetails($id)
	{
		$this->db->select("po.*,c.username");
		$this->db->from("tblpartnershipoffer po");
		$this->db->join("tblcompany c","c.companyid=po.companyid");
        $this->db->where($id);
		return $this->db->get()->result();
	}

	public function insertOffer($data)
	{
		return $this->db->insert('tblpartnershipoffer',$data);
	}

	public function deleteOffer($data)
	{
		return $this->db->delete('tblpartnershipoffer',$data);
	}
}
?>