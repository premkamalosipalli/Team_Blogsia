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

	<title>View Company Offers</title>
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
    <h6>Company Offers</h6>
  </div>

 <?php include_once("userheader.php")?>

</header>

<div class="main-header">
	<div class="content-bg-wrap bg-account"></div>
	<div class="container">
		<div class="row">
			<div class="col col-lg-12 m-auto col-md-12 col-sm-12 col-12">
				<div class="main-header-content">
					<h1>Glimpse of Offers by Different Companies</h1>
					<p>Welcome to offers dashboard ! Here you’ll find offers addes by different companies ! Have fun!</p>
					<p>
						Click on the photo to view more details...!!
						<img src="<?php echo base_url("resources/emoji/")?>icon-chat2.png" alt="icon">
					</p>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="container">
	<div class="row">
	
	    <?php 
         foreach ($offers as $o) {
         
        ?>
			<div class="col col-xl-3 offset-xl-1 col-lg-3 col-md-6 col-sm-6 col-12">
				<div class="landing-item">
					<div class="landing-item-thumb">
						<img src="<?php echo base_url("upload/company/").$o->logo?>" alt="page">
						<div class="overlay overlay-dark"></div>
						<button class="btn btn-breez btn-sm view_offer" data-id="<?php echo $o->offerid?>">Open offer</button>
					</div>
					<div class="title"><?php echo $o->title?></div>
				</div>
			</div>	
			<?php 
		}
		?>
      
	</div>
</div>

<div  class="modal fade" id="create-photo-album" tabindex="-1" role="dialog" aria-labelledby="create-photo-album" aria-hidden="true">
	<div class="modal-dialog window-popup create-photo-album" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h6 class="title">Company Offers</h6>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<div class="modal-body" id="offerdetails">
				 <ul class="nav nav-tabs flex-column flex-md-row" role="tablist">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#offer">Offer</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#response">Offer Response</a></li>
                        </ul>
                <div class="tab-content">
	<div class="tab-pane active" id="offer" role="tabpanel">
	</div>
	<div class="tab-pane " id="response" role="tabpanel">
   	<form class="needs-validation" method="post" novalidate>
						
						<div class="row">
							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label" style="font-weight: bold;">Offer Price</label>
									<input class="form-control" type="text" placeholder="" name="txtPrice" value="" required>
									<span class="invalid-feedback">
										<span class="error-box">
											Price is required
										</span>
									</span>
								</div>
							</div>

							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label" style="font-weight: bold;">Total followers</label>
									<input class="form-control" type="text" placeholder="" name="txtfollowers" value="" style="height: 100px;"required>
									<span class="invalid-feedback">
										<span class="error-box">
											Total Followers are required
										</span>
									</span>
								</div>
							</div>

                             <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label" style="font-weight: bold;">Message</label>
									<input class="form-control" type="text" placeholder="" name="txtmsg" value="" style="height: 100px;"required>
									<span class="invalid-feedback">
										<span class="error-box">
											Message is required
										</span>
									</span>
								</div>
							</div> 
							<button type="submit" class="btn btn-default btn-md-2 btn-secondary add">Add</button>							

	</div>
	</form>
	</div>        
             </div>
             <div class="modal-footer">
			<button type="button" class="btn btn-default btn-md-2 btn-secondary" data-dismiss="modal">Close</button>
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

<!-- Mirrored from html.crumina.net/html-olympus/03-Newsfeed.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Apr 2020 15:36:36 GMT -->
</html>

<script>
	var offerid;
	$(".view_offer").click(function(){
		 offerid=$(this).data("id");
		$.ajax({
			url:"<?php echo site_url("user/OfferC/loadDataById/")?>"+offerid,
			success:function(result){
				$("#offer").html(result);
				$("#create-photo-album").modal("show");
				$
			
			}

		});

      
	});
	$(".add").click(function(){
        $(".modal-content form").attr("action","<?php echo site_url("user/OfferC/response/");?>"+offerid);  
       
        
    });
</script>