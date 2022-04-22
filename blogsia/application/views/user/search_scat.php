<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.crumina.net/html-olympus/03-Newsfeed-Masonry.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Apr 2020 15:29:14 GMT -->
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TKGD7NP');</script>
<!-- End Google Tag Manager -->

	<title>Category</title>
	<link rel="icon" href="<?php echo base_url('resources/user/')?>blogsia_logo.jpg">
	<!-- Required meta tags always come first -->
	<?php include_once("usertopscripts.php")?>


</head>
<body class="page-has-left-panels page-has-right-panels" style="background-color:#ffebcc">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TKGD7NP" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- Fixed Sidebar Right -->
<?php include_once("right-side.php")?>

<header class="header" id="site-header">
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dSearchl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TKGD7NP');</script>
<!-- End Google Tag Manager -->

	<div class="page-title">
		<h6>Search</h6>
	</div>

	<?php include_once('userheader.php')?>

</header>

<!-- ... end Header-BP -->


<!-- Responsive Header-BP -->

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

<div class="container">
	<div class="row">
		<div class="col col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="clients-grid">

				<ul class="cat-list-bg-style align-center sorting-menu">
					<?php 
						foreach($scinfo as $sc)
						{
					?>
					<li class="cat-list__item active" data-filter="*">
						<a href="#" class=" searchsubcat" data-id="<?= $sc->subcatid?>"><?php echo $sc->subcatname?>
						</a>
					</li>
					<?php 
						}
					?>
				</ul>

				<div class="row sorting-container" id="clients-grid-1" data-layout="masonry" id="searchshow">

				<?php 
					foreach ($articles as $a) {
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
								
					
					
							</div>
					
							<p style="font-weight: bold;"><?php echo $a->articletitle?></p>
					        <p> <?php echo $a->description?></p>
					        <div class="post-thumb">
								<img src="<?php echo base_url("upload/blogs/").$a->featuredimage?>" alt="photo">
							</div>
								<div class="post-additional-info inline-items" >

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

							<a class="btn btn-control save" href="<?php echo site_url("user/FeedC/checksaveArticle/").$a->articleid?>"style="color: white">
						      <i class="fa fa-save"> </i> 
							</a>
						</div> 
						</article>
						</div>
			</div>	
		</div>
				<?php } }?>
				</div>

			</div>
		</div>
	</div>
</div>

</div>

<!-- JS Scripts -->
<?php include_once("userbottomscripts.php")?>
<!-- /SVG icons loader -->
 <script type="text/javascript">
	$(".searchsubcat").click(function(){
		var scid=$(this).data("id");
		var cid="<?php echo $sc->categoryid ?>";
		 $.ajax({
		 	url:"<?= site_url("user/SearchC/showSubCatArticles/")?>"+scid + "/" + cid,
		   	success:function(response){
		 		$("#searchshow").html(response);	
		 	}
		 });
	});
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
</html>