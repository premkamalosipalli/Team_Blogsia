<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SubcatC  extends CI_Controller
{
	
	function __construct()
	{
		parent ::__construct();
		$this->load->model("admin/SubcatM","sm");
		if(!isset($this->session->aid))
		{
			redirect("admin/LoginC");
		}
	}
	public function index($data)
	{
		$id=array("sc.categoryid"=>$data);
		$temp=array("subcatinfo"=>$this->sm->selectsubcat($id),"categoryid"=>$data);
	    $this->load->view("admin/subcategory",$temp);

	}
	public function loadaddsubcategory($id)
	{
		$data=array("categoryid"=>$id);
		$this->load->view("admin/addsubcategory",$data);

	}
	public function addsubcat($id)
	{
		$flag=0;
		$data=array("sc.categoryid"=>$id);
		$subcatnm=$this->input->post('subcat');
		$subcat=$this->sm->selectsubcat($data);
		foreach ($subcat as $sc) 
		{
			if(strcmp($sc->subcatname,$subcatnm)==0)
			{
				$flag=1;
				break;
			}
		}
		if($flag==0)
		{
			//echo "True";
			$data=array(
				"subcatname"=>$this->input->post('subcat'),
		 		"categoryid"=>$id
		 	);
			$this->sm->addsubcat($data);
			redirect("admin/SubcatC/index/$id");
		}
		else
		{
			//echo "False";
			echo "<script>";
			echo "alert('Sub Category already added')";
			echo "</script>";
			redirect("admin/SubcatC/index/$id");
		}
	}
	public function removesubcat($id,$sid)
	{
        $data=array("subcatid"=>$sid);
        $this->sm->deletesubcat($data);
        redirect("admin/SubcatC/index/$id");

	}
	public function loadeditsubcat($id)
	{
	$data=array("subcatid"=>$id);
    $temp=array("subcatinfo"=>$this->sm->selectbyid($data),
           "catinfo"=>$this->sm->allcat());
        $this->load->view("admin/editsubcat",$temp);      
	}
	public function editsubcat($data)
	{
     $id=array("subcatid"=>$data);
     $temp=array("subcatname"=>$this->input->post('subcat'),
    "categoryid"=>$this->input->post('cat')
     );
     $catid=$this->input->post('cat');
     $this->sm->updatesubcat($id,$temp);
     redirect("admin/SubcatC/index/$catid");  
    }
}


?>