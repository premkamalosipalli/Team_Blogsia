<!DOCTYPE html>
<html lang="en">
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TKGD7NP');</script>
<!-- End Google Tag Manager -->

	<title>Article Spot</title>
	<link rel="icon" href="<?php echo base_url('resources/user/')?>blogsia_logo.jpg">
	<style type="text/css">
		.btn-light:hover{
			background-color: white;
			color: #FF5E3A;
		}
	</style>
	<!-- Required meta tags always come first -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<!-- Main Font -->
	<script src="<?php echo base_url('resources/user/');?>js/libs/webfontloader.min.js"></script>
	<script>
		WebFont.load({
			google: {
				families: ['Roboto:300,400,500,700:latin']
			}
		});
	</script>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/user/');?>Bootstrap/dist/css/bootstrap.css">
	<!-- Main Styles CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/user/');?>css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/user/');?>css/fonts.min.css">


</head>
<body class="page-has-left-panels page-has-right-panels" style="background-color:#ffebcc">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TKGD7NP" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php include_once('left-side.php');?>
<?php include_once('right-side.php');?>

<!-- ... end Fixed Sidebar Right-Responsive -->


<!-- Header-BP -->

<header class="header" id="site-header">
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TKGD7NP');</script>
<!-- End Google Tag Manager -->

  <div class="page-title">
    <h6>Articles</h6>
  </div>

 <?php include_once("userheader.php");?>

</header>

<div class="main-header">
	<div class="content-bg-wrap bg-account"></div>
	<div class="container">
		<div class="row">
			<div class="col col-lg-12 m-auto col-md-12 col-sm-12 col-12">
				<div class="main-header-content">
					<h1>Glimpse of Articles </h1>
					<p>Welcome to your Feed !! Here you will find all the blogs by the bloggers you follow</p>
					<p>
						Click on the photo to view more details...!!
						<img src="<?php echo base_url("resources/emoji/")?>icon-chat2.png" alt="icon">
					</p>
				</div>
			</div>
		</div>
	</div>
	<img class="img-bottom" src="<?php echo base_url('resources/user/')?>img/music-bottom.png" alt="friends">
</div>

<div class="container">
	<div class="row">

		<!-- Main Content -->
		<aside class="col col-xl-3 order-xl-2 col-lg-6 order-lg-2 col-md-6 col-sm-6 col-12">
			
		</aside>

		<main class="col col-xl-8 offset-xl-2 col-lg-2 order-lg-1 col-md-12 col-sm-12 col-12">

			
				<div class="ui-block">
				
				<div class="news-feed-form">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link active inline-items" href="#home-1" role="tab" aria-expanded="true">
				
								<svg class="olymp-status-icon"><use xlink:href="#olymp-status-icon"></use></svg>
				
								<span>Status</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link inline-items btn btn-light" href="<?php echo site_url('user/PostArtC');?>" role="tab" aria-expanded="false">
				
								<svg class="olymp-blog-icon"><use xlink:href="#olymp-blog-icon"></use></svg>
				
								<span>Add Post</span>
							</a>
						</li>
					</ul>
				
					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane active" id="home-1" role="tabpanel" aria-expanded="true">
							<form  method="post" action="<?php echo site_url("user/FeedC/changebio")?>">
								<div class="author-thumb">
									<img src="<?php echo base_url('upload/user/'.$_SESSION['profilepic']);?>" style="height: 40px;" alt="author">
								</div> <br>
								<div class="form-group with-icon label-floating is-empty">
									<label class="control-label"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Share what you are thinking here...</label>
									<textarea class="form-control" name="txtbio" placeholder=""></textarea>
								</div>
								<div class="add-options-message">
									<button type="submit" class="btn btn-primary btn-md-2">Post Status</button>
								
								</div>
							</form>
						</div>
				
					</div>
				</div>
				
				<!-- ... end News Feed Form  -->			
			
			</div>
				
				<!-- ... end News Feed Form  -->			
		
     <div id="newsfeed-items-grid" >
				<?php
						foreach ($articles as $a) 
						{
					    if($a->status==0)
					    {
					?>
					<div class="ui-block">
					
					<article class="hentry post has-post-thumbnail">
					
						<div class="post__author author vcard inline-items">
							<img src="<?php echo base_url('upload/user/'.$a->uimg);?>" alt="author">
							
							<div class="author-date">
								<a class="h6 post__author-name fn" href="<?php echo site_url("user/BloggerC/loadblogger/").$a->userid?>"><?php echo $a->username?></a>
								<div class="post__date">
									<time class="published" datetime="2004-07-24T18:18">
										<?php echo $a->createdt?>
									</time>
								</div>
							</div><br>
							<p style="color: black; font-weight: bold;"><br> <?php echo $a->articletitle;?></p>
						
						</div>
					
						<p style="color: black;font-size: 15px"><?php echo $a->description?></p>
			
						<div class="post-thumb">
							<img src="<?php echo base_url('upload/blogs/'.$a->featuredimage);?>" alt="photo">
						</div>
					
						<div class="post-additional-info inline-items" >

					  <div   class="likes">
						<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-heart-icon"><use xlink:href="#olymp-heart-icon"></use></svg>
								<span style="color:black"><?php echo $a->total?> Likes</span>
							</a>
					  </div>		

					<div class="comments-shared">
								<a href="<?php echo site_url("user/ArticleC/viewArticles/").$a->articleid?>" class="post-add-icon inline-items">
									<i class="fa fa-comments" style="font-size:26px;color:black"> </i>
									<span style="color: black">View all Comments</span>
								</a>
							</div>
						</div>
                    
						
					<form class="comment-form inline-items" method="post" action="<?php echo site_url("user/FeedC/addComments/$a->articleid")?>">
						<div class="post__author author vcard inline-items">
							<img src="<?php echo base_url("upload/user/".$a->uimg)?>" alt="author">
					
							<div class="form-group with-icon-right ">
								<textarea class="form-control" name="txtcomment"placeholder="Post a Comment"></textarea>
								<div class="add-options-message">
									<a >
										<!-- <svg class="olymp-camera-icon"> -->
											<use xlink:href="#olymp-camera-icon"></use>
										</svg>
									</a>
								</div>
							</div>
						</div>
					
						<button class="btn btn-md-2 btn-primary" value="Post Comment" name="btnadd">Post Comment</button>
                    </form>

						<div class="control-block-button post-control-button">
					
							 <a class="btn btn-control like"  data-id="<?php echo $a->articleid?>">
								<svg class="olymp-like-post-icon"><use xlink:href="#olymp-like-post-icon"></use></svg>
							</a> 

						
							<a class="btn btn-control save" href="<?php echo site_url("user/FeedC/checksaveArticle/").$a->articleid?>"style="color: white">
						      <i class="fa fa-save"> </i> 
							</a>
					
						</div> 
					
					</article>
				</div>
					<?php
				}
			}
				?>	
			</div>
		</main>

	</div>
</div>



<!-- Window-popup-CHAT for responsive min-width: 768px -->

<div class="ui-block popup-chat popup-chat-responsive" tabindex="-1" role="dialog" aria-labelledby="popup-chat-responsive" aria-hidden="true">
</div>

<!-- ... end Window-popup-CHAT for responsive min-width: 768px -->
<a class="back-to-top" href="#">
	<img src="<?php echo base_url("resources/user/")?>svg-icons/back-to-top.svg" alt="arrow" class="back-icon">
</a>
<!-- JS Scripts -->
<?php include_once("userbottomscripts.php");?>
<!-- /SVG icons loader -->
<script type="text/javascript">
$(".like").click(function()
{
var id=$(this).data("id");	
  var likes='';
   $.ajax({
       url:"<?php echo site_url("user/FeedC/checkArticle/")?>"+id, 
   
       success:function(data){
       	  var likes=JSON.parse(data);
       	  var tot=likes.total;
       	  $('.likes').empty();
       	 
       	 for(data in tot){
       	 	likes='<a href="#" class="post-add-icon inline-items">';
       	 	likes+='<svg class="olymp-heart-icon"><use xlink:href="#olymp-heart-icon"></use></svg>';
            likes+='<span style="color:black">'+tot[data].total+'</span>';
            likes+='</a>'
       	  $('.likes').append(likes);
         
       	 }
       	 
       	  }
   });

});	

	

</script>
</body>

<!-- Mirrored from html.crumina.net/html-olympus/03-Newsfeed.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Apr 2020 15:36:36 GMT -->
</html>