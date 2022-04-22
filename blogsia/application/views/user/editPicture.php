
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

	<title>Edit Pictures</title>
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

	<!--JQuery-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

</head>
<body class="page-has-left-panels page-has-right-panels" style="background-color:#ffebcc">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TKGD7NP" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php include_once('left-side.php')?>
<?php include_once('right-side.php')?>

<!-- ... end Header-BP -->

<header class="header" id="site-header">
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TKGD7NP');</script>
<!-- End Google Tag Manager -->

  <div class="page-title">
    <h6>Edit Image</h6>
  </div>

 <?php include_once("userheader.php")?>

</header>

<div class="main-header">
	<div class="content-bg-wrap bg-account"></div>
	<div class="container">
		<div class="row">
			<div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
				<div class="main-header-content">
					<h1>Change your Blog Image</h1>
					<p style="font-style: italic;">Change image of your blog here and you are good to go !!</p>
				</div>
			</div>
		</div>
	</div>
	<img src="<?php echo base_url('resources/user/');?>">
</div>

<div class="container">
	<div class="row">

		<!-- Main Content -->
		<aside class="col col-xl-3 order-xl-1 col-lg-6 order-lg-2 col-md-6 col-sm-6 col-12">
			
		</aside>

		
		<main class="col col-xl-6 order-xl-2 col-lg-2 order-lg-1 col-md-12 col-sm-12 col-12">
			
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title"></h6>
				</div>
				<div class="ui-block-content">
					<form class="needs-validation" method="post" enctype="multipart/form-data" action="<?php echo site_url("user/ArticleC/editImage/".$arts[0]->articleid);?>" novalidate>
						<div class="crumina-module crumina-heading with-title-decoration">
							<h5 class="heading-title">Edit Picture</h5>
						</div>

						<div class="row">
							<div class="col col-xl-12 col-lg-6 col-md-12 col-sm-12 col-12">
								<label class="control-label" style="font-weight: bold;">Current Image</label>
									<div class="col-sm-5">
										<img src="<?php echo base_url("upload/blogs/".$arts[0]->featuredimage);?>">
										<span class="invalid-feedback">
											<span class="error-box">
												Image is required
											</span>
										</span>
									</div>
							</div>
						</div><br>

						<div class="row">
							<div class="col col-xl-12 col-lg-6 col-md-12 col-sm-12 col-12">
								<div class="form-group ">
									<label class="control-label" style="font-weight: bold;">Featured Image</label>
									<div class="col-md-6">
										<input class="form-control" type="file" name="fup" required>
									
										<span class="invalid-feedback">
											<span class="error-box">
												Image is required
											</span>
										</span>
									</div>
								</div>
							</div>
						</div>

							
							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<button class="btn btn-md btn-primary full-width" type="submit">Edit and Save Changes</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</main>
	</div>
</div>



<!-- Window-popup-CHAT for responsive min-width: 768px -->

<div class="ui-block popup-chat popup-chat-responsive" tabindex="-1" role="dialog" aria-labelledby="popup-chat-responsive" aria-hidden="true">
</div>

<!-- ... end Window-popup-CHAT for responsive min-width: 768px -->

<!-- JS Scripts -->
<?php include_once("userbottomscripts.php");?>
<!-- /SVG icons loader -->

</body>

<!-- Mirrored from html.crumina.net/html-olympus/03-Newsfeed.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Apr 2020 15:36:36 GMT -->
</html>