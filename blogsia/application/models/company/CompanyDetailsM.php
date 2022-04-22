<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CompanyDetailsM extends CI_Model
{
	public function showCompanyData($data)
	{
		return $this->db->where($data)->get("tblcompany")->result();
	}

	public function selectOfferDetails($data)
	{
	$this->db->select("po.*,c.username");
		$this->db->from("tblpartnershipoffer po");
		$this->db->join("tblcompany c","c.companyid=po.companyid");
        $this->db->where($data);
		return $this->db->get()->result();
	}
}

?>