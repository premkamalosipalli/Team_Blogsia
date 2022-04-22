<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ManageProfileM extends CI_Model
{
    public function showProfile()
	{
		return $this->db->get('tbluser')->result();
	} 

	

	public function selectUserById($data)
	{
		//$data=array("userid"=>$_SESSION['userid']);
		return $this->db->select("u.*,c.cityname,s.statename,s.stateid")->from("tbluser u")->join("tblcity c","u.cityid=c.cityid")->join("tblstate s","c.stateid=s.stateid")->where($data)->get()->result();
	}

	public function selectState()
	{
		return $this->db->get('tblstate')->result();
	}

    public function selectcity()
	{
		return $this->db->get('tblcity')->result();
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
		$where=array("userid"=>$_SESSION['userid']);
		return $this->db->where($data2)->update('tbluser',$data);
	}
}

?>

