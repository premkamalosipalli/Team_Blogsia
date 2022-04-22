<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegC extends CI_Controller
{

	function __construct()
	{
        parent::__construct();
        
        $this->load->model("user/RegM","rm");
	} 
	
	public function addUser()
	{	    	
		$data=array(
			"username"=>$this->input->post('txtUname'),
			"password"=>$this->input->post('txtPass'),
			"email"=>$this->input->post('txtEmail'),
			"contact"=>$this->input->post('txtContact'),
			"website"=>$this->input->post('txtWeb'),
			"ytlink"=>$this->input->post('txtYT'),
			"fblink"=>$this->input->post('txtFB'),
			"instalink"=>$this->input->post('txtIG'),
			"linkedinlink"=>$this->input->post('txtLI'),
			"profilepic"=>"",
			"bio"=>$this->input->post('txtBio'),
	        "cityid"=>$this->input->post('txtCity')	
	     );
		$img=$this->input->post('img');
		$image_array_1=explode(";",$img);
		$image_array_2=explode(",",$image_array_1[1]);
		$img1=base64_decode($image_array_2[1]);
		$imagename=$this->input->post('txtUname').".jpg";
		file_put_contents("upload/user/".$imagename,$img1);
		$data['profilepic']=$imagename;
        
		$this->rm->insertUser($data);
		redirect("user/LoginC");	

	
	}

	public function loadCityByState($sid)
	{
		$data=array("stateid"=>$sid);
		$city=$this->rm->selectCityByState($data);
		foreach ($city as $c) 
		{
			?>
			<option value="<?php echo $c->cityid?>"><?php echo $c->cityname?></option>
			<?php
		}
		
	}
}


?>