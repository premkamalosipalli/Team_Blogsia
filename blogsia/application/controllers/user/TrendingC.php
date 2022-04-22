<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class TrendingC extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if(!isset($this->session->userid))
	    {
	    	redirect("user/LoginC");
	    }
		$this->load->model("user/TrendingM","tlm");
		$this->load->model("user/FeedM","fm");		
	}

	public function index()
	{	
		$temp1=array("f.userid"=>$this->session->userid);
		$temp=array(
			"top"=>$this->tlm->showTop10(),
			"followers"=>$this->fm->followers($temp1) 

		);

		$this->load->view('user/trending',$temp);
	
	}
	public function loadDataById($id)
	{
		$adata=array("a.articleid"=>$id);
		$data=$this->tlm->articledetails($adata);
		?>
				
		<?php
		foreach ($data as $t)
		 {
		 	if($t->status==0)
		 	{
			?>
					<div class="open-photo-thumb">
					<div class="swiper-container" data-slide="fade">
						<div class="swiper-wrapper">

							<div class="swiper-slide">
								<div class="photo-item">
									<img src="<?php echo base_url("upload/blogs/").$t->featuredimage?>" alt="photo">
									<div class="overlay"></div>
									

									<div class="content">
										<a href="#" class="h6 title"><?php $t->articletitle?></a>
										<time class="published" datetime="2017-03-24T18:18"><?php echo $t->createdt?></time>
									</div>
								</div>
							</div>

							


						</div>

					
					</div>
				</div>
				<div class="open-photo-content">

					<article class="hentry post">

						<div class="post__author author vcard inline-items">
							<img src="<?php echo base_url("upload/user/").$t->uimg?>" alt="author">

							<div class="author-date">
								<a class="h6 post__author-name fn"><?php echo $t->username?></a>
								<div class="post__date">
									<time class="published" datetime="2017-03-24T18:18">
										<?php echo $t->createdt?>
									</time>
								</div>
							</div>

							

						</div>

						<p><?php echo $t->description?></p>

						

						<div class="post-additional-info inline-items">

							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-heart-icon"><use xlink:href="#olymp-heart-icon"></use></svg>
								<span><?php echo $t->total?></span>
							</a>
						</div>

						
					</article>


					

				</div>

<?php
		}
		}

	}
}

?>