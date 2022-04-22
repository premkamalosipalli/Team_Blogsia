
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

	<title>Company View</title>
	<link rel="icon" href="<?php echo base_url('resources/user/')?>blogsia_logo.jpg">
	<!-- Required meta tags always come first -->
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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--JQuery-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">



</head>
 <body class="page-has-left-panels page-has-right-panels" style="background-color:#ecffe6">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TKGD7NP" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- Header-BP -->
<div class="fixed-sidebar">
 
      <div style="background-color:black;">
        
      </div>
    </a>
</div>


<header class="header" id="site-header">
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TKGD7NP');</script>
<!-- End Google Tag Manager -->
  <div class="page-title">
    <h6>Company Profile</h6>
  </div>
<?php include_once('companyheader.php')?>
</header>





<div class="container">
	<div class="row">
		<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="ui-block">
				<div class="top-header top-header-favorit">
					<div class="top-header-thumb">
						<img src="<?php echo base_url("resources/user/")?>img/top-header2.jpg" alt="nature">
						<div class="top-header-author">
							<div class="author-thumb">
								<img src="<?php echo base_url("upload/company/").$companyinfo->logo?>" alt="author">
							</div>
							<div class="author-content">
								<a href="#" class="h3 author-name"><?php echo $this->session->companytitle?></a>
								
							</div>
						</div>
					</div>
					<div class="profile-section with-social-menu-tabs">
						<div class="row">
							<div class="col col-xl-8 m-auto col-lg-8 col-md-12">
								<ul class="nav nav-tabs social-menu-tabs" role="tablist">

									<li class="nav-item">
										<a class="nav-link active" data-toggle="tab" href="#about" role="tab">
											<i class="fa fa-th"> </i>
											About
										</a>
									</li>

									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#offers" role="tab">
										<i class="fa fa-book"></i>
											Partnership Offers
										</a>
									</li>

									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#responses" role="tab">
										<i class="material-icons">people_outline</i>
										Partnership Responses
										</a>
									</li>

								</ul>
							</div>
						</div>
		            <div class="control-block-button">
							<a href="<?php echo site_url("company/OfferC/loadaddoffer")?>" >
								<button type="button" class="btn btn-primary" style="font-size:20px;">Add Offer</button>
							</a>
						</div>
		
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="tab-content">
	<div class="tab-pane active" id="about" role="tabpanel">
	<div class="container" >
	<div class="row">
			<aside class="col col-xl-2 order-xl-1 col-lg-6 order-lg-2 col-md-6 col-sm-6 col-12"></aside>
		<!-- Main Content -->

		<main class="col col-xl-12  order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12">
			<div id="newsfeed-items-grid" >

				<div class="ui-block" style="background-color:#F5F5DC">
					
					<article class="hentry post video">
					
						<div class="post__author author vcard inline-items">
					
							<div class="author-date">
								<center><a class="h4 title" href="#"><?php echo $companyinfo->username?></a> </center>
							</div>
					
						</div>
					
						<div class="post-video">
							<div class="video-thumb">
								<img src="<?php echo base_url("upload/company/".$companyinfo->logo)?>" alt="photo" style="border: 5px solid black">
							</div>
					
							<div class="video-content">
								<p style="font-size:40px" ><?php echo $companyinfo->companytitle?></p>
                                 <br> <br>
								<p style="font-size:20px"><?php echo $companyinfo->Description?>
								</p>
								<br>
								<p style="font-size:20px">Website:&nbsp;&nbsp;<?php echo $companyinfo->website?> 	
								</p>
								<br>
							     <p style="font-size:21px;">Total Offers:&nbsp;&nbsp;<?php echo count($offers)?></p>
							</div>
						</div>
					
	
					
					</article>
				</div>
			</div>
		</main>
	</div>
</div>
	</div>

	<div class="tab-pane" id="offers" role="tabpanel">
<div class="container">
	<div class="row">

		<!-- Main Content -->
	<aside class="col col-xl-2 order-xl-1 col-lg-6 order-lg-2 col-md-6 col-sm-6 col-12">
		</aside>
		<main class="col col-xl-12  col-lg-2 order-lg-1 col-md-12 col-sm-12 col-12">
			<div id="newsfeed-items-grid" style="background-color: white">
				<table class="table table-striped table-hover">
				<thead style="color:black;font-size:large;font-family:serif;text-decoration:unset; ">
						<tr>
						<th>Offer Id</th>
						<th>Company Name</th>
						<th>Offer Title</th>
						<th >Offer Description</th>
						<th>Minimum Followers</th>
						<th>Maximun Followers</th>
						<th>Minimum Price</th>
						<th>Maximum Price</th>
						<th>Delete</th>
					</tr>
					</thead>
					<tbody style="color:black;font-size:20px;font-family:serif;">
					<?php
						foreach ($offers as $o) 
						{
					?>
					<tr>
					<td><?php echo $o->offerid?></td>
					<td><?php echo $o->username?></td>
					<td><?php echo $o->title?></td>
					<td><?php echo $o->description?></td>
					<td><?php echo $o->minfollowers?></td>
					<td><?php echo $o->maxfollowers?></td>
					<td><?php echo $o->minprice?></td>
					<td><?php echo $o->maxprice?></td>
					<td><button type="button" class="btn btn-info btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Delete</button></td>
					</tr>
					<?php
				    }
				?>
				</tbody>
				</table>	
			</div>
		</main>
	</div>
</div>
</div>
<div id="myModal" class="modal fade" role="dialog" tabindex="-1">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
    	<form method=post> 
      <div class="modal-header">
 
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to Delete the offer ?</p>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-default btn-secondary" id="delete">Yes</button>
        <button type="button" class="btn btn-default btn-secondary" data-dismiss="modal">No</button>
      </div>
      </form>
    </div>
		
  </div>
</div>


	<div class="tab-pane" id="responses" role="tabpanel">
<div class="container">
	<div class="row">

		<!-- Main Content -->
		<aside class="col col-xl-2 order-xl-1 col-lg-6 order-lg-2 col-md-6 col-sm-6 col-12">
		</aside>

		<main class="col col-xl-12 order-xl-2 col-lg-2 order-lg-1 col-md-12 col-sm-12 col-12">
			<div id="newsfeed-items-grid" style="background-color: white">
				<table class="table table-striped table-hover">
					<thead style="color:grey;font-size:22px;font-family:serif;text-decoration:unset; ">
					 <tr>
						<th>Partnership Id</th>
						<th>Offer Title</th>
						<th>Blogger</th>
						<th>Finalized Price</th>
						<th>Total Followers</th>
						<th>Message</th>
						<th>Status</th>
					</tr>
					</thead>
					<tbody style="color:black;font-size:20px;font-family:serif;">
					<?php
						foreach ($respoffer as $rsp) 
						{
					?>
					<tr>
					<td><?php echo $rsp->responseid?></td>
					<td><?php echo $rsp->title?></td>
					<td><?php echo $rsp->username?></td>
					<td><?php echo $rsp->offerprice?></td>
					<td><?php echo $rsp->totalfollowers?></td>
					<td><?php echo $rsp->message?></td>
						<td>

					    <a  href="<?php echo site_url("company/ResponseOfferC/acceptoffer/").$rsp->responseid?>">     
					  <button class="btn btn-outline-primary" style="color: red" >Accept Offer</button> </a>        


                        </td>
					</tr>
				
					<?php
				}
				?>
				</tbody>
				</table>	
			</div>
		</main>
	</div>
</div>
	</div>
</div>
<!-- Modal -->


<a class="back-to-top" href="#">
	<img src="<?php echo base_url("resources/user/")?>svg-icons/back-to-top.svg" alt="arrow" class="back-icon">
</a>
<!-- Window-popup-CHAT for responsive min-width: 768px -->

<!-- ... end Window-popup-CHAT for responsive min-width: 768px -->
<?php include_once('userbottomscripts.php');?>
</body>
</html>
<script type="text/javascript">
	$("#delete").click(function(){
		$(".modal-content form").attr("action","<?php echo site_url("company/OfferC/removeOffer/".$o->offerid)?>");
	});


	 // $(".custom-control-input").change(function(){
  //       var id=$(this).data("id");
  //       $.ajax({
  //           url : "<?= site_url("company/ResponseOfferC/statusChange/")?>"+id,
  //           success: function(result){ 

  //           }
  //       });

  //   });

 
</script>
