<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PostArtC extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		 if(!isset($this->session->userid))
	    {
	    	redirect("user/LoginC");
	    }
		$this->load->model('user/PostArtM','pam');
		$this->load->model("user/FeedM","fm");
	}

	public function index()
	{	
		$temp1=array("f.userid"=>$this->session->userid);
		$temp=array(
			"categories"=>$this->pam->selectAllCategories(),
			"followers"=>$this->fm->followers($temp1)
		);
		$this->load->view('user/addPost',$temp);
	}

	public function loadAllSubCatByCatId($id)
	{
		$data=array("categoryid"=>$id);
		$subcat=$this->pam->selectAllSubCatByCatId($data);

		echo "<option value=-1>Select a Sub Category</option>";
		foreach ($subcat as $s) 
		{
			?>
			<option value="<?php echo $s->subcatid?>"><?php echo $s->subcatname?></option>
			<?php
		}
	}

	public function loadAllTagsBySubCat($scatid)
	{
		$data=array("subcatid"=>$scatid);
		$tags=$this->pam->selectTagBySubCat($data);

		foreach ($tags as $t) 
		{
			?>
			<input type="checkbox" name="txtTags[]" value="<?php echo $t->tagid?>"><?php echo $t->tagname?>
			<?php
		}
	}

	public function addArticle()
	{
		
		$data=array(
			"articletitle"=>$this->input->post('txtTitle'),
			"description"=>$this->input->post('txtDesc'),
			"featuredimage"=>"",
			"createdt"=>$this->input->post('txtDt'),
			"userid"=>$_SESSION['userid'],
			"subcatid"=>$this->input->post('txtSubCat'),
		);
	    $img=$this->input->post('img');
		$image_array_1=explode(";",$img);
		$image_array_2=explode(",",$image_array_1[1]);
		$img1=base64_decode($image_array_2[1]);
		$imagename=$this->input->post('txtTitle').".jpg";
		file_put_contents("upload/blogs/".$imagename,$img1);
		$data['featuredimage']=$imagename;
		$this->pam->insertArticle($data);
		redirect("user/UserC");
	}

}
?>
