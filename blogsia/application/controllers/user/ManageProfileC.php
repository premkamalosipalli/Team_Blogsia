<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ManageProfileC extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		 if(!isset($this->session->userid))
	    {
	    	redirect("user/LoginC");
	    }
		$this->load->model("user/ManageProfileM","mpm");
		$this->load->model("user/FeedM","fm");
	}

	public function loadManageProfile()
	{
		$temp1=array("f.userid"=>$this->session->userid);
		$data2=array(
			"userid"=>$_SESSION['userid']
		);

		$temp=array(
			"userinfo"=>$this->mpm->selectUserById($data2),
			"stateinfo"=>$this->mpm->selectState(),
			"cityinfo"=>$this->mpm->selectcity(),
			"followers"=>$this->fm->followers($temp1)
		);
		$this->load->view('user/manageProfile',$temp);
	}

	public function loadCityByState($cid)
	{
		$data=array("stateid"=>$cid);
		$city=$this->mpm->selectCityByState($data);

		foreach ($city as $c) 
		{
			?>
			<option value="<?php echo $c->cityid?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $c->cityname?></option>
			<?php
		}
	}
	
	public function editState($sid)
	{
         $data=array(
         	"stateid"=>$sid
         );
         $temp=array(
         	"statename"=>$this->input->post('txtState')
         );
         $this->mpm->updateState($data,$temp);
         redirect("user/manageProfile");
	}

	public function changeInfo()
	{
		$data2=array(
    		"userid"=>$_SESSION['userid']
    	);
    	if(!empty($_FILES['fup']['name']))
		{
		$config['upload_path'] = "./upload/user/";
		$config['allowed_types'] = "jpg|jpeg|png";
		$config['overwrite'] = true;
		$config['file_name'] =$this->input->post('txtUsername') ;
		$this->load->library('upload',$config);	
		if($this->upload->do_upload('fup'))
			{
				$img = $this->upload->data();
				$tmpnm = $img['file_name'];
				$uid = $this->session->userid;
			}
		
		
    	$data=array(
    		"username"=>$this->input->post('txtUsername'),
    		"email"=>$this->input->post('txtEmail'),
    		"contact"=>$this->input->post('txtContact'),
    		"website"=>$this->input->post('txtWeb'),
    		"ytlink"=>$this->input->post('txtYTLink'),
    		"fblink"=>$this->input->post('txtFBLink'),
    		"instalink"=>$this->input->post('txtIGLink'),
    		"linkedinlink"=>$this->input->post('txtLINLink'),
    		"profilepic"=>$tmpnm,
    		"bio"=>$this->input->post('txtBio'),
    		"cityid"=>$this->input->post('txtCity')
    	);
    	}
    	else{
    		$data=array(
    		"username"=>$this->input->post('txtUsername'),
    		"email"=>$this->input->post('txtEmail'),
    		"contact"=>$this->input->post('txtContact'),
    		"website"=>$this->input->post('txtWeb'),
    		"ytlink"=>$this->input->post('txtYTLink'),
    		"fblink"=>$this->input->post('txtFBLink'),
    		"instalink"=>$this->input->post('txtIGLink'),
    		"linkedinlink"=>$this->input->post('txtLINLink'),
    		"bio"=>$this->input->post('txtBio'),
    		"cityid"=>$this->input->post('txtCity')
    	);
    	}	
     	$this->mpm->updateUserInfo($data,$data2);
     	//print_r($t);
		redirect("user/UserC");
		
	}
}

?>