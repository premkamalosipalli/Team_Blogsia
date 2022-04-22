<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ManageProfileM extends CI_Model
{
    public function showProfile()
	{
		return $this->db->get('tbluser')->result();
	} 

	public function selectStateById($data)
	{
		return $this->db->select("s.*,c.cityname")->from("tblstate s")->join("tblcity c","c.stateid=s.stateid")->get()->result();
	}

	public function selectcompanyById($data)
	{
		//$data=array("userid"=>$_SESSION['userid']);
		return $this->db->select("c.*")->from("tblcompany c")->where($data)->get()->result();
	}

	public function selectState()
	{
		return $this->db->get('tblstate')->result();
	}

	public function updateState($id,$data)
    {
     	return $this->db->where($id)->update('tblstate',$data);
    }

    public function selectCityByState($data)
	{
		return $this->db->where($data)->get('tblcity')->result();
	}

	public function updateUserInfo($data,$data2)
	{

		return $this->db->where($data2)->update('tblcompany',$data);
	}
}

?>

