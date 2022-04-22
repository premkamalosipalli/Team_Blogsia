
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

	<title>Trending Articles</title>
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

<!-- <style type="text/css">
	body{
		background-image: ;
	}
</style> -->

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
    <h6>Trending Articles</h6>
  </div>

 <?php include_once("userheader.php")?>

</header>

<div class="main-header">
	<div class="content-bg-wrap bg-account"></div>
	<div class="container">
		<div class="row">
			<div class="col col-lg-12 m-auto col-md-12 col-sm-12 col-12">
				<div class="main-header-content">
					<h1>Glimpse of Some Trending Articles</h1>
					<p>Welcome to Trending articles dashboard ! Have fun !</p>
					
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="ui-block responsive-flex">
				<div class="ui-block-title">
					<div class="h6 title">Trending Posts</div>

					<div class="block-btn align-right">
						<a href="#" data-toggle="modal" data-target="#update-header-photo" class="btn btn-md-2"></a>
					</div>

					<ul class="nav nav-tabs photo-gallery" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#photo-page" role="tab">
								<svg class="olymp-photos-icon"><use xlink:href="#olymp-photos-icon"></use></svg>
							</a>
						</li>
						
					</ul>
					
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<!-- Tab panes -->
			<div class="tab-content">
				<div class="tab-pane active" id="photo-page" role="tabpanel">

					<div class="photo-album-wrapper">
						<?php
						foreach ($top as $t) 
						{
							if($t->status==0)
							{
							?>
							<div class="photo-item col-xl-4 offset-xl-1" style="margin-top: 20px">
							<img src="<?php echo base_url("upload/blogs/".$t->fimg)?>" alt="photo">
							<div class="overlay overlay-dark"></div>
							
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-heart-icon"><use xlink:href="#olymp-heart-icon"></use></svg>
								<span><?php echo $t->totallikes;?></span>
							</a>
							<a href="#" data-toggle="modal"data-id="<?php echo $t->articleid?>" class="full-block view_article"></a>
							<div class="content">
								<p class="h6 title"><?php echo $t->articletitle;?></p>
								<time class="published" datetime="2017-03-24T18:18"><?php echo $t->createdt?></time>
							</div>
						</div>
							<?php
						}
					}
						?>
						

					</div>

				</div>
			</div>
		</div>
	</div>
</div>



<div class="modal fade modal-has-swiper" id="open-photo-popup-v2" tabindex="-1" role="dialog" aria-labelledby="open-photo-popup-v2" aria-hidden="true">
	<div class="modal-dialog window-popup open-photo-popup open-photo-popup-v2" role="document">
		<div class="modal-content">
			<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="#olymp-close-icon"></use></svg>
			</a>

			<div class="modal-body" id="details">
			
					

			</div>

				
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
</html>
<script>
	$(".view_article").click(function(){
		 var articleid=$(this).data("id");
		$.ajax({
			url:"<?php echo site_url("user/TrendingC/loadDataById/")?>"+articleid,
			success:function(result){
			$("#details").html(result);
			$("#open-photo-popup-v2").modal("show");
			}

		});
	});
</script>