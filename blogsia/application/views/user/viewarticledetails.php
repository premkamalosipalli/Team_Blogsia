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

<?php include_once("left-side.php");?>
<?php include_once("right-side.php");?>

<header class="header" id="site-header">
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TKGD7NP');</script>
<!-- End Google Tag Manager -->

  <div class="page-title">
    <h6>View Blog</h6>
  </div>

 <?php include_once("userheader.php")?>

</header>


<div class="main-header">
	<div class="content-bg-wrap bg-account"></div>
	<div class="container">
		<div class="row">
			<div class="col col-lg-12 m-auto col-md-8 col-sm-12 col-12">
				<div class="main-header-content">
					<h1>Blogs</h1>
					<p style="font-style: italic;">View exciting blogs !!</p>
				</div>
			</div>
		</div>
	</div>
	<img class="img-bottom" src="<?php echo base_url('resources/user/')?>img/account-bottom.png" alt="friends">
</div>
<!-- ... end Header-BP -->

<div class="header-spacer"></div>


<div class="container">
	<div class="row">

		<!-- Main Content -->

		<main class="col col-xl-8 offset-xl-2 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12">
							
			<div id="newsfeed-items-grid"> 
				<div class="ui-block">
					
					<article class="hentry post has-post-thumbnail">
					
						<div class="post__author author vcard inline-items">
							<img src="<?php echo base_url("upload/user/").$articledetails->uimg?>" alt="author">
					
							<div class="author-date">
								<a class="h6 post__author-name fn" href="#"><?php echo $articledetails->username?></a>
								<div class="post__date">
									<?php echo $articledetails->createdt?>
								</div>

							</div>
							<br>
					       <p><?php echo $articledetails->description?></p>
					
					
						</div>

						<center>
							<img src="<?php echo base_url("upload/blogs/".$articledetails->featuredimage)?>" style="height:80%;width:80%">
						</center>
						<div class="post-additional-info inline-items ">
					     <div class="likes">
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-heart-icon"><use xlink:href="#olymp-heart-icon"></use></svg>
								<span><?php echo count($totlikes)?></span>
							</a>							
					</div>
							
							<div class="comments-shared">
								<a href="#" class="post-add-icon inline-items">
									<svg class="olymp-speech-balloon-icon"><use xlink:href="#olymp-speech-balloon-icon"></use></svg>
									<span><?php echo count($comments)?></span>
								</a>
							</div>
						</div>
					
						<?php
							foreach ($comments as $c) {
						?>

						<ul class="comments-list">
						<li class="comment-item">
							<div class="post__author author vcard inline-items ">
								<img src="<?php echo base_url("upload/user/".$c->profilepic)?>" alt="author">
					
								<div class="author-date">
									<a class="h6 post__author-name fn" href="02-ProfilePage.html"><?php echo $c->username?></a>
									<p><?php echo $c->createdt?></p>
									<div class="post__date">
										<time class="published" datetime="<?php echo $c->createdt?>">
										</time>
									</div>
								</div>
								<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>
								<ul class="more-dropdown">
									<li>
									<a href="<?php echo site_url("user/ArticleC/removeComment/$c->commentid/$c->articleid");?>">Delete Comment</a>
									</li>
								</ul>
							</div>
							</div>
								<h1><p><?php echo $c->comment?></p></h1>
						</li>
					</ul>
					<?php
					 }
					?>
					<form class="comment-form inline-items" method="post" action="<?php echo site_url("user/ArticleC/addComments/$articledetails->articleid")?>">
						<div class="post__author author vcard inline-items">
							<img src="<?php echo base_url("upload/user/".$articledetails->uimg)?>" alt="author">
					
							<div class="form-group with-icon-right ">
								<textarea class="form-control" name="txtcomment"placeholder="Post a Comment"></textarea>
								<div class="add-options-message">
									<a href="#" class="options-message" data-toggle="modal" data-target="#update-header-photo">
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
							 <a class="btn btn-control like"  data-id="<?php echo $articledetails->articleid?>">
								<svg class="olymp-like-post-icon"><use xlink:href="#olymp-like-post-icon"></use></svg>
							</a> 
						
						</div>
			
					</article>
				</div>
			</div>
		</main>
	</div>
</div>

<script type="text/javascript">

</script>

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


<script>
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