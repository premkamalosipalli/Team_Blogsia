<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ResponseOfferM extends CI_Model
{
	public function selectResponseOffer($data)
	{
		$this->db->select("u.username,o.title,prsp.*");
		$this->db->from("tblpatnershipresponse prsp");
		$this->db->join("tblpartnershipoffer o","o.offerid=prsp.offerid");
		$this->db->join("tbluser u","u.userid=prsp.userid");
		$this->db->where($data);
		return $this->db->get()->result();
	}

	public function statusChange($id)
	{
		$this->db->set("status","1-status",false)->where("responseid",$id)->update("tblpatnershipresponse");
	}
	public function getmail($data)
	{
		$this->db->select("u.email");
		$this->db->from('tblpatnershipresponse r');
		$this->db->join("tbluser","r.userid=u.userid");
		$this->db->where($data);
		return $this->db->get()->result();
	}
	public function getoffername($data)
	{
		$this->db->select("o.title");
		$this->db->from('tblpatnershipresponse r');
		$this->db->join("tblpartnershipoffer","o.offerid=r.offerid");
		$this->db->where($data);
		return $this->db->get()->result();
	}
	public function accept($data)
	{
		$this->db->select("u.email,o.title");
		$this->db->from('tblpatnershipresponse r');
		$this->db->join("tblpartnershipoffer o","o.offerid=r.offerid");
		$this->db->join("tbluser u","u.userid=r.userid");
		$this->db->where($data);
		return $this->db->get()->result();
	}
}
?>