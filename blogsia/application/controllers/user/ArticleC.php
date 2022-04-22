<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class ArticleC extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	    if(!isset($this->session->userid))
	    {
	    	redirect("user/LoginC");
	    }
		$this->load->model("user/ArticleM","am");
		$this->load->model("user/FeedM","fm");

	}
	public function removeArticle($aid)
	{
		$data=array("articleid"=>$aid);
		$this->am->deleteArticle($data);
		redirect('user/USerC');
	}

	public function edtArticle($aid)
	{
		$data=array(
			"articleid"=>$aid
		);
$temp1=array("f.userid"=>$this->session->userid);
		$temp=array(
			"aid"=>$aid,
			"articleinfo"=>$this->am->selectArticleById($data),
			"catinfo"=>$this->am->selectCategory(),
			"subcatinfo"=>$this->am->selectsubCategory(),
	         "followers"=>$this->fm->followers($temp1) 
		);

		$this->load->view('user/editArticle',$temp);
	}

	public function loadEditCat($cat)
	{
		$data=array(
			"categoryid"=>$cat
		);
		$temp=array(
			"catinfo"=>$this->am->selectCategoryById($data)
		);
        $this->load->view("user/ArticleC/editCategory",$temp);       
	}

	public function editCategory($id)
	{
         $data=array(
         	"categoryid"=>$id
         );
         $temp=array(
         	"categoryname"=>$this->input->post('txtCat')
         );
         $this->am->updateCategory($data,$temp);
         redirect("user/ArticleC");
	}

	public function loadEditSubcat($id)
	{
		$data=array(
			"categoryid"=>$id
		);

		$subcat=$this->am->selectsubcatBycat($data);
		foreach ($subcat as $c) 
		{
			?>
			<option value="<?php echo $c->subcatid?>"><?php echo $c->subcatname?></option>
			<?php
		}
	}

	public function editSubcat($data)
	{
     $id=array(
     	"subcatid"=>$data
     );
     $temp=array(
     	"subcatname"=>$this->input->post('txtSubCat'),
    	"categoryid"=>$this->input->post('txtCat')
     );
     $catid=$this->input->post('txtCat');
     $this->am->updateSubcat($id,$temp);
     redirect("user/ArticleC/loadEditSubcat/$catid");  
    }

    public function changeInfo($aid)
    {
    	$data2=array(
    		"articleid"=>$aid
    	);
    	$data=array(
    		"articletitle"=>$this->input->post('txtTitle'),
    		"description"=>$this->input->post('txtDesc'),
    		"createdt"=>$this->input->post('txtDt'),
    		"userid"=>$_SESSION['userid'],
    		"subcatid"=>$this->input->post('txtSubCat'),
    	);	
    
     	$this->am->updateArticleInfo($data,$data2);
 
		redirect("user/UserC");
    }

	public function loadImage($aid)
	{
		$data2=array(
    		"articleid"=>$aid	
    	);
    	$result=array(
    		"arts"=>$this->am->selectArticleById($data2)
    	);    	
    	$this->load->view('user/editPicture',$result);
	}

	public function editImage($aid)
	{  
		$data2=array(
    		"articleid"=>$aid	
    	);
		if(!empty($_FILES['fup']['name']))
		{
			$image=$_FILES['fup']['name'];
			copy($_FILES['fup']['tmp_name'],"C:/xampp/htdocs/Blogsia/upload/blogs/".$image) or die("Cannot upload image");

		 	$data=array("featuredimage"=>$image);
			$this->am->updateArticleInfo($data,$data2);
		}

        redirect("user/UserC");		

	}

	public function viewArticles($aid)
	{
		
		$temp=array(
			"articleid"=>$aid
		);

		$like=array(
			"articleid"=>$aid,
			"userid"=>$_SESSION['userid']
		);
		$count=count($this->am->checkArticle($like));
		if($count==0)
			$status="no";
		else
			$status="yes";
		$totlikes=array("articleid"=>$aid);
		$temp1=array("f.userid"=>$this->session->userid);
		$data=array(
			"articledetails"=>$this->am->selectArticleById($temp)[0],
			"comments"=>$this->am->loadCommentByArticleId($temp),
			"like"=>$status,
			"totlikes"=>$this->am->articleTotalLikes($totlikes),
            "followers"=>$this->fm->followers($temp1)
		);

		$this->load->view("user/viewarticledetails",$data);
	}

	public function addComments($aid)
	{
		$data=array(
			"articleid"=>$aid,
			"userid"=>$_SESSION['userid'],
			"comment"=>$this->input->post('txtcomment'),
			"createdt"=>date("Y-m-d")
		);

		$this->am->insertComment($data);
		redirect("user/ArticleC/viewArticles/$aid");
	}

	public function removeComment($id,$aid)
	{
		$data=array(
			"commentid"=>$id
		);

		$this->am->deleteComment($data);
		redirect("user/ArticleC/viewArticles/$aid");
	}
}
?>