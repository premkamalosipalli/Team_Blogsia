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

	<title>Profile Page</title>
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
 <body class="page-has-left-panels page-has-right-panels" style="background-color:#ffebcc">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TKGD7NP" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- Header-BP -->
<div class="fixed-sidebar">
 <a href="02-ProfilePage.html" class="logo">
      <div style="background-color:black;">
        <img src="<?php echo base_url("resources/user/")?>img/logo.png" alt="Olympus">
      </div>
    </a>
</div>
<?php include_once('left-side.php');?>
<?php include_once('right-side.php');?>

<header class="header" id="site-header">
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TKGD7NP');</script>
<!-- End Google Tag Manager -->
  <div class="page-title">
    <h6>User Profile</h6>
  </div>
<?php include_once('userheader.php');?>
</header>

<header class="header header-responsive" id="site-header-responsive">
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TKGD7NP');</script>
<!-- End Google Tag Manager -->

</header>
<!-- ... end Responsive Header-BP -->
<div class="header-spacer"></div>
<!-- Top Header-Profile -->
<!-- ... end Top Header-Profile -->



<div class="container">
	<div class="row">
		<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="ui-block">
				<div class="top-header top-header-favorit">
					<div class="top-header-thumb">
						<img src="<?php echo base_url("resources/user/")?>img/top-header2.jpg" alt="nature">
						<div class="top-header-author">
							<div class="author-thumb">
								<img src="<?php echo base_url("upload/user/").$userdata[0]->profilepic?>" alt="author">
							</div>
							<div class="author-content">
								<a href="#" class="h3 author-name"><?php echo $this->session->username?></a>
								<div class="country"><?php echo $userdata[0]->bio?></div>
							</div>
						</div>
					</div>
					<div class="profile-section with-social-menu-tabs">
						<div class="row">
							<div class="col col-xl-8 m-auto col-lg-8 col-md-12">
								<ul class="nav nav-tabs social-menu-tabs" role="tablist">

									<li class="nav-item">
										<a class="nav-link active" data-toggle="tab" href="#post" role="tab">
											<i class="fa fa-th"> </i>
											Posts
										</a>
									</li>

									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#followers" role="tab">
										<i class="material-icons">people_outline</i>
											Followers
										</a>
									</li>

									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#following" role="tab">
										<i class="material-icons">person</i>
											Following
										</a>
									</li>

									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#events" role="tab">
										<i class="fas fa-bold"></i>
											Brand Collaborations
										</a>
									</li>
								</ul>
							</div>
						</div>
			           
				</div>
			</div>
		</div>
	</div>
</div>
<div class="tab-content">
	<div class="tab-pane active" id="post" role="tabpanel">
	<div class="container">
	<div class="row">

		<!-- Main Content -->
<?php 
foreach ($article as $a ) {
	if($a->status==0)
	{
?>
		<div class="col col-xl-6 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12">
			<div id="newsfeed-items-grid">

     		<div class="ui-block">
					<!-- Post -->
					
					<article class="hentry post">
					
							<div class="post__author author vcard inline-items">
								<img src="<?php echo base_url("upload/user/").$a->uimg?>" alt="author">
					
								<div class="author-date">
									<a class="h6 post__author-name fn" href="02-ProfilePage.html"><?php echo $a->username?></a>
									<div class="post__date">
										<time class="published" datetime="2017-03-24T18:18">
											<?php echo $a->createdt?>
										</time>
									</div>
								</div>											
									<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>
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
					
					
							</div>
					
							<p style="font-weight: bold;color:black"><?php echo $a->articletitle?></p>
					        <p style="color:black;font-size: 15px"> <?php echo $a->description?></p>
					        <div class="post-thumb">
								<img src="<?php echo base_url("upload/blogs/").$a->featuredimage?>" alt="photo">
							</div>
							<div class="post-additional-info inline-items">		
						<div   class="likes">
						<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-heart-icon"><use xlink:href="#olymp-heart-icon"></use></svg>
								<span style="color:black"><?php echo $a->total?> Likes</span>
							</a>
					  </div>
					  	<div class="comments-shared">
								<a href="<?php echo site_url("user/ArticleC/viewArticles/$a->articleid")?>" class="post-add-icon inline-items">
									<i class="fa fa-comments" style="font-size:26px;color:black"> </i>
									<span style="color: black">View all Comments</span>
								</a>
							</div>
							
							</div>
					
							<div class="control-block-button post-control-button">
					
						
					
								 <a class="btn btn-control like"  data-id="<?php echo $a->articleid?>">
								<svg class="olymp-like-post-icon"><use xlink:href="#olymp-like-post-icon"></use></svg>
							</a> 
							
							</div>
					
						</article>
					
					</div>

			</div>

			
		</div>
<?php
}
}
?>


	</div>
</div>
	</div>

	<div class="tab-pane" id="followers" role="tabpanel">
	<div class="container">
	<div class="row">

		<!-- Main Content -->

		<div class="col col-xl-8 offset-xl-2 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12">
			<div id="newsfeed-items-grid">

     		<div class="ui-block">
<center>             
 <table>
 <?php 
foreach ($followers as $f ) {
	
?> 

 <tbody style="padding:10px 10px 10px 10px">
 	<tr style="padding: 20px 20px 20px 20px">
 	<td style="padding: 20px 20px 20px 20px"><img src="<?php echo base_url("upload/user/").$f->profilepic?>" style="border:2px solid black;border-radius:500px;height:50px"> </td>
 	<td style="padding: 20px 20px 20px 20px"></td>
 	<td style="padding: 20px 20px 20px 20px"></td>
 	<td style="padding: 20px 20px 20px 20px;color: black;font-size:20px" align="center"><?php echo $f->username?></td>	
 	</tr>
 </tbody>	
        		
<?php
}
?>
 </table>
 </center>
</div>
			</div>

			
		</div>



	</div>
</div>
	</div>

	<div class="tab-pane" id="following" role="tabpanel">
	<div class="container">
	<div class="row">

		<!-- Main Content -->

		<div class="col col-xl-8 offset-xl-2 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12">
			<div id="newsfeed-items-grid">

     		<div class="ui-block">
<center>             
 <table style="width: 50%">
 <?php 
foreach ($followings as $f ) {
	
?> 

 <tbody style="padding:10px 10px 10px 10px">
 	<tr style="padding: 20px 20px 20px 20px">
 	<td style="padding: 20px 20px 20px 20px"><img src="<?php echo base_url("upload/user/").$f->profilepic?>" style="border:2px solid black;border-radius:500px;height:50px"> </td>
 	<td style="padding: 20px 20px 20px 20px;color: black;font-size: 20px" align="center"><?php echo $f->username?></td>	
 	</tr>
 </tbody>	
        		
<?php
}
?>
 </table>
 </center>
</div>
			</div>

			
		</div>



	</div>
</div>
	</div>

	<div class="tab-pane" id="events" role="tabpanel">
		<div class="container">
	<div class="row">
   
		<div class="col col-xl-8 offset-xl-2 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12">
			<div id="newsfeed-items-grid">

     		<div class="ui-block">
    <center>
    <table style="background-color: white;border: 2px solid black ;width:100%;font-family: bold" >
 <?php 
foreach ($brands as $b) {	
?> 

 <tbody style="padding:10px 10px 10px 10px">
 	<tr style="padding: 20px 20px 20px 20px">
 	<td style="padding: 20px 20px 20px 20px;font-size:20px;color: black" ><?php echo $b->companytitle?></td>
 	<td style="padding: 20px 20px 20px 20px;font-size:20px;color: black" ><?php echo $b->title?></td>
 	<td style="padding: 20px 20px 20px 20px;font-size:20px;color: black" ><?php echo $b->description?></td>	
 	</tr>
 </tbody>	
        		
<?php
}
?>
 </table>
</center>
</div>
			</div>

			
		</div>



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