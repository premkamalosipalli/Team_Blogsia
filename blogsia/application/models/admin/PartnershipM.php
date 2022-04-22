<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PartnershipM extends CI_Model
{
     public function getoffers()
     {
     	$this->db->select("o.*,c.companytitle");
     	$this->db->from("tblpartnershipoffer o");
     	$this->db->join("tblcompany c","c.companyid=o.companyid");
     	return $this->db->get()->result();
     }	

}



?>