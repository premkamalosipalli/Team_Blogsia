<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LikeC extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		 if(!isset($this->session->userid))
	    {
	    	redirect("user/LoginC");
	    }
		$this->load->model("user/LikeM","lm");
		$this->load->model("user/FeedM","fm");
	}

	public function index()
	{
		$temp1=array("f.userid"=>$this->session->userid);
		$data=array("l.userid"=>$_SESSION['userid']);
		$temp=array(
			"articleinfo"=>$this->lm->selectLikedArticles($data),
			"followers"=>$this->fm->followers($temp1)      
		);
		$this->load->view("user/likedarticles",$temp);
	}

	public function loadDataById($id)
	{
		$adata=array("a.articleid"=>$id);
		$data=$this->lm->selectLikedDetails($adata);
		?>
		<div class="table-responseive">
		
			
		<?php
		foreach ($data as $a)
		 {
			?>

					<article class="hentry post has-post-thumbnail thumb-full-width">

					<div class="post__author author vcard inline-items">
						<img src="<?php echo base_url("upload/user/").$a->profilepic?>" alt="author">

						<div class="author-date">
							<a class="h6 post__author-name fn"><?php echo $a->username?></a> wrote a
							<a href="#">blog post</a>
							<div class="post__date">
								<time class="published" datetime="2017-03-24T18:18">
									<?php echo $a->createdt?>
								</time>
							</div>
						</div>

				
					</div>

					<div class="post-thumb">
						<img src="<?php echo base_url("upload/blogs/").$a->featuredimage?>" alt="photo">
						<h2 class="h1 post-title"><?php echo $a->articletitle?></h2>
						<div class="overlay"></div>
					</div>


					<p><?php echo $a->description?>
					</p>

				</article>
		<?php
		}

	}
}

?>