<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class TagsC extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model("admin/TagsM","tm");
	if(!isset($this->session->aid))
		{
			redirect("admin/LoginC");
		}
	}

	public function index($data)
	{
      $id=array("t.subcatid"=>$data);
		$temp=array("tagsinfo"=>$this->tm->gettags($id),"subcatid"=>$data);
	    $this->load->view("admin/tags",$temp);
	}
	public function loadaddtags($data)
	{
     	$id=array("subcatid"=>$data);
		$this->load->view("admin/addtags",$id);
	}
	public function addtags($data)
	{
		$flag=0;
		$data1=array("sc.subcatid"=>$data);
		$tagnm=$this->input->post('tag');
		$tag=$this->tm->gettags($data1);
		foreach ($tag as $t) 
		{
			if(strcmp($t->tagname,$tagnm)==0)
			{
				$flag=1;
				break;
			}
		}
		if($flag==0)
		{
			//echo "True";
			$temp=array(
				"tagname"=>$this->input->post('tag'),
      			"subcatid"=>$data
			);
			$this->tm->inserttag($temp);
			redirect("admin/TagsC/index/$data");
		}
		else
		{
			//echo "False";
			echo "<script>";
			echo "alert('Tag already added')";
			echo "</script>";
			redirect("admin/TagsC/index/$data");
		}
	}
	public function removetags($id,$sid)
	{
		$data=array("tagid"=>$id);
		$this->tm->deletetag($data);
	    redirect("admin/TagsC/index/$sid");	
	}
	public function loadedittags($id)
	{
		$data=array("tagid"=>$id);
		$temp=array("taginfo"=>$this->tm->selecttags($data),
        "subcat"=>$this->tm->getsubcat() 
		);
		$this->load->view("admin/edittags",$temp);

	}
	public function edittag($id)
	{
		$data=array("tagid"=>$id);
		$temp=array("tagname"=>$this->input->post('tag'),
        "subcatid"=>$this->input->post('subcat') 
	  );
		$this->tm->updatetag($data,$temp);
		$sid=$this->input->post('subcat');
	redirect("admin/TagsC/index/$sid");
	}
}


?>