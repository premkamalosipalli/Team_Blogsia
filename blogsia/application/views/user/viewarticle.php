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


<!-- Fixed Sidebar Left -->

<?php include_once('left-side.php');?>

<!-- ... end Fixed Sidebar Left -->


<!-- Fixed Sidebar Right -->

<?php include_once('right-side.php');?>

<!-- ... end Fixed Sidebar Right-Responsive -->


<!-- Header-BP -->

<?php include_once("userheader.php")?>
<!-- ... end Header-BP -->

<div class="header-spacer"></div>


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
							<form>
								<div class="author-thumb">
									<img src="<?php echo base_url('resources/shared/'.$_SESSION['profilepic']);?>" style="height: 40px;" alt="author">
								</div> <br>
								<div class="form-group with-icon label-floating is-empty">
									<label class="control-label"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Share what you are thinking here...</label>
									<textarea class="form-control" placeholder=""></textarea>
								</div>
								<div class="add-options-message">
									<a href="#" class="options-message" data-toggle="tooltip" data-placement="top"   data-original-title="ADD PHOTOS">
										<svg class="olymp-camera-icon" data-toggle="modal" data-target="#update-header-photo"><use xlink:href="#olymp-camera-icon"></use></svg>
									</a>
									<a href="#" class="options-message" data-toggle="tooltip" data-placement="top"   data-original-title="TAG YOUR FRIENDS">
										<svg class="olymp-computer-icon"><use xlink:href="#olymp-computer-icon"></use></svg>
									</a>
				
									<a href="#" class="options-message" data-toggle="tooltip" data-placement="top"   data-original-title="ADD LOCATION">
										<svg class="olymp-small-pin-icon"><use xlink:href="#olymp-small-pin-icon"></use></svg>
									</a>
				
									<button class="btn btn-primary btn-md-2">Post Status</button>
									<button   class="btn btn-md-2 btn-border-think btn-transparent c-grey">Preview</button>
								</div>
							</form>
						</div>
				
					</div>
				</div>
				
				<!-- ... end News Feed Form  -->			
			
			</div>
			<div id="newsfeed-items-grid" >
				<?php
						foreach ($articles as $a) 
						{
					?>
					<div class="ui-block">
					
					<article class="hentry post has-post-thumbnail">
					
						<div class="post__author author vcard inline-items">
							<img src="<?php echo base_url('resources/shared/'.$a->uimg);?>" alt="author">
							
							<div class="author-date">
								<a class="h6 post__author-name fn" href="#"><?php echo $a->username?></a>
								<div class="post__date">
									<time class="published" datetime="2004-07-24T18:18">
										<?php echo $a->createdt?>
									</time>
								</div>
							</div><br>
							<p style="color: black; font-weight: bold;"><br> <?php echo $a->articletitle;?></p>
							<!-- <div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>
								<ul class="more-dropdown">
									<li>
										<a href="<?php echo site_url("user/ArticleC/edtArticle/").$a->articleid?>">Edit Post</a>
									</li>
									<li>
										<a href="<?php echo site_url('user/ArticleC/removeArticle/'.$a->articleid);?>">Delete Post</a>
									</li>
									<li>
										<a href="<?php echo site_url('user/ArticleC/loadImage/'.$a->articleid);?>">Edit Image</a>
									</li>
								</ul>
							</div>
					 -->
						</div>
					
						<p><?php echo $a->description?></p>
			
						<div class="post-thumb">
							<img src="<?php echo base_url('resources/shared/'.$a->featuredimage);?>" alt="photo">
						</div>
					
						<div class="post-additional-info inline-items">
					
					
						</div><br><br>

						<div class="col-md-12">
							<table>
								<tr>
									<td style="color: black; font-weight: bold;">Category</td>
									<td style="color: black; font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sub Category</td>
								</tr>
								<tr>
									<td><?php echo $a->categoryname;?></td>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $a->subcatname;?></td>
								</tr>
								
							</table>
							<div class="post-additional-info inline-items">
							
							<button class="btn btn-primary btn-md-2"><a href="<?php echo site_url("user/ArticleC/viewArticles/$a->articleid")?>" class="post-add-icon inline-items" style="color: white">View More
							</a></button>
						</div>
							
							
						</div>
					
						<div class="control-block-button post-control-button">
					
							<a href="<?php echo site_url('user/ArticleC/viewArticles/'.$a->articleid);?>" class="btn btn-control">
								<svg class="olymp-like-post-icon"><use xlink:href="#olymp-like-post-icon"></use></svg>
							</a>
					
							<a href="<?php echo site_url('user/ArticleC/viewArticles/'.$a->articleid);?>" class="btn btn-control">
								<svg class="olymp-comments-post-icon"><use xlink:href="#olymp-comments-post-icon"></use></svg>
							</a>
					
							<a href="#" class="btn btn-control">
								<svg class="olymp-shoppping-bag-icon"><use xlink:href="#olymp-shopping-bag-icon"></use></svg>
							</a>
					
						</div>
					
					</article>
				</div>
					<?php
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

</body>

<!-- Mirrored from html.crumina.net/html-olympus/03-Newsfeed.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Apr 2020 15:36:36 GMT -->
</html>