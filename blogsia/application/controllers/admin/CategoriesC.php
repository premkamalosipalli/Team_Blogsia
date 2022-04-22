<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CategoriesC extends CI_Controller
{
	function __construct()
	{
		parent:: __construct();
		$this->load->model("admin/CategoriesM","cm");
		if(!isset($this->session->aid))
		{
			redirect("admin/LoginC");
		}
	}
	public function index()
	{
	$data=array("catinfo"=>$this->cm->selectcategories());
        
     $this->load->view("admin/categories",$data);
	}
	// public function loadaddcategory()
	// {
 //        $this->load->view("admin/addcategory");
	// }
	public function addcategory()
	{
		// $data=array("categoryname"=>$this->input->post('cat'));
		// $this->cm->insertcategory($data);
		// redirect("admin/CategoriesC");
		$flag=0;
		$catnm=$this->input->post('cat');
		$cat=$this->cm->selectcategories();
		foreach ($cat as $c) 
		{
			if(strcmp($c->categoryname,$catnm)==0)
			{
				$flag=1;
				break;
			}
		}
		if($flag==0)
		{
			$data=array("categoryname"=>$this->input->post('cat'));
			$this->cm->insertcategory($data);
			redirect("admin/CategoriesC");
		}
		else
		{
			echo "<script>";
			echo "alert('Category already added')";
			echo "</script>";
			redirect("admin/CategoriesC");
		}
	 
	}
	public function removecat($cat)
	{
		$data=array("categoryid"=>$cat);
		$this->cm->deletecat($data);
		redirect('admin/CategoriesC');
	}
	public function loadeditcat($cat)
	{
		$data=array("categoryid"=>$cat);
		$temp=array("catinfo"=>$this->cm->selectbyid($data));
        $this->load->view("admin/editcategory",$temp);    
	}
	public function editcategory($id)
	{
         $data=array("categoryid"=>$id);
         $temp=array("categoryname"=>$this->input->post('cat'));
         $this->cm->updatecat($data,$temp);
         redirect("admin/CategoriesC");
	}

}

?>