<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminC extends CI_Controller
{ 
    public function __construct()
	{
		parent:: __construct();
		$this->load->model("admin/AdminM","am");
		if(!isset($this->session->aid))
		{
			redirect("admin/LoginC");
		}
	}
	
	public function index()
	{
      $data=array("admin"=>$this->am->getadmin());
      $this->load->view("admin/alladmin",$data);         
	}

	public function loadaddadmin()
	{
		$this->load->view("admin/addadmin");
	}
	public function addadmin()
	{
	
		
		$data=array(
			"username"=>$this->input->post('uname'),
	        "password"=>$this->input->post('password'),
	        "emailid"=>$this->input->post('email'),
	        "contactNo"=>$this->input->post('contactNo'),
	        "profilepic"=>"" 
		);

		$img=$this->input->post('img');
		$image_array_1=explode(";",$img);
		$image_array_2=explode(",",$image_array_1[1]);
		$img1=base64_decode($image_array_2[1]);
		$imagename=$this->input->post('uname').".jpg";
		file_put_contents("upload/admin/".$imagename,$img1);

		$data['profilepic']=$imagename;

		$this->am->insertadmin($data);
		redirect("admin/AdminC");
       
	}
       
	
	public function editprofile()
	{
		$id=array("adminid"=>$_SESSION['aid']);
		
		$data=array("ainfo"=>$this->am->fetchadmin($id));
		$this->load->view("admin/editprofile",$data);
	}
	public function updateprofile()
	{
		

		if(!empty($_FILES['pic']['name']))
		{
		$config['upload_path'] = "./upload/admin/";
		$config['allowed_types'] = "jpg|jpeg|png";
		$config['overwrite'] = true;
		$config['file_name'] =$this->input->post('username') ;
		$this->load->library('upload',$config);	
		if($this->upload->do_upload('pic'))
			{
			
				$img = $this->upload->data();
				$tmpnm = $img['file_name'];
				$uid = $this->session->adminID;
			}
			
		$data=array("username"=>$this->input->post('username'),
        "emailid"=>$this->input->post('email'),
        "contactNo"=>$this->input->post('cn'),
        "profilepic"=>$tmpnm 
		);
	    }
	    else
	    {
		$data=array("username"=>$this->input->post('username'),
        "emailid"=>$this->input->post('email'),
        "contactNo"=>$this->input->post('cn'), 
		);
	    }
	    $id=array("adminid"=>$_SESSION['aid']);
	    //print_r($data);
	    $this->am->updateadmin($id,$data);
	    redirect("admin/AdminC");
	}
	public function loadDashboard()
	{
		$blog=$this->am->getBlog();
		$category=$this->am->getCategory();
		$data = array(
			"blog"=>$blog,
			"category"=>$category,
			"countUsers"=>$this->am->countAllUsers(),
			"countBlogs"=>$this->am->countAllBlogs(),
			"countCategories"=>$this->am->countAllCategories(),
			"countCompanies"=>$this->am->countAllCompanies(),
			"countPostByUser"=>$this->am->countBlogPostedOn()
		);

		$this->load->view("admin/dashboard",$data);
	}
}

?>