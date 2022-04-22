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

	<title>Liked Articles</title>
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
<!-- ... end Fixed Sidebar Left -->


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
    <h6>Liked Articles</h6>
  </div>

 <?php include_once("userheader.php")?>

</header>

<div class="main-header">
	<div class="content-bg-wrap bg-account"></div>
	<div class="container">
		<div class="row">
			<div class="col col-lg-12 m-auto col-md-12 col-sm-12 col-12">
				<div class="main-header-content">
					<h1>Glimpse of Articles Liked By You</h1>
					<p>Welcome to your liked articles dashboard ! Here you’ll find everything you have liked till date ! Have fun!</p>
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
	
	<aside class="col col-xl-2 order-xl-1 col-lg-6 order-lg-2 col-md-6 col-sm-6 col-12">
		</aside>
    <?php 
		foreach($articleinfo as $a)
		{
	?>       
		<main class="col col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">

			<div id="newsfeed-items-grid">
				<div class="table-responsive">
				<table class="table table-bordered">
					 
				<div class="ui-block">
					<article class="hentry post has-post-thumbnail thumb-full-width">
					
						<div class="post__author author vcard inline-items">
							<img src="<?php echo base_url('upload/user/'.$a->uimg)?>" alt="author">
					
							<div class="author-date">
								<a class="h6 post__author-name fn" href="#"><?php echo $a->username?></a>
							</div>
						</div>
						<center><h4><?php echo $a->articletitle?></h4>
							<img src="<?php echo base_url("upload/blogs/".$a->featuredimage)?>" style="height:80%;width:80%"  type="button" class="view_article" data-id="<?php echo $a->articleid; ?>">
						</center>
					</article>
				</div>
					
				</table>
			</div>
			</div>
		</main>
		<?php 
			}
		?>
	</div>
</div>

<div id="myModal" class="modal fade" role="dialog" tabindex="-1">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
    	<form method="post">
      <div class="modal-header">
      	<h4 class="modal-title">Blog Details</h4>
      	<button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body" id="articledetails">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-md-2 btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
		
  </div>
</div>

<a class="back-to-top" href="#">
	<img src="<?php echo base_url('resources/user/')?>svg-icons/back-to-top.svg" alt="arrow" class="back-icon">
</a>
<!-- Window-popup-CHAT for responsive min-width: 768px -->

<!-- JS Scripts -->
<?php include_once("userbottomscripts.php");?>
<!-- /SVG icons loader -->

</body>

<!-- Mirrored from html.crumina.net/html-olympus/03-Newsfeed.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Apr 2020 15:36:36 GMT -->
</html>

<script>
	$(".view_article").click(function(){
		 var articleid=$(this).data("id");
		$.ajax({
			url:"<?php echo site_url("user/LikeC/loadDataById/")?>"+articleid,
			success:function(result){
				$("#articledetails").html(result);
				$("#myModal").modal("show");
			
			}

		});
      
	});
</script>
