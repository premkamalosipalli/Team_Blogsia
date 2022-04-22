<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.crumina.net/html-olympus/03-Newsfeed-Masonry.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Apr 2020 15:29:14 GMT -->
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;
// j.src=
// '../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TKGD7NP');</script>
<!-- End Google Tag Manager -->

	<title>Search</title>
	<link rel="icon" href="<?php echo base_url('resources/user/')?>blogsia_logo.jpg">
	<!-- Required meta tags always come first -->
	<?php include_once("usertopscripts.php")?>


</head>
<body class="page-has-left-panels page-has-right-panels" style="background-color:#ffebcc">

<!-- Fixed Sidebar Left -->

<?php include_once("left-side.php")?>

<!-- ... end Fixed Sidebar Left -->


<!-- Fixed Sidebar Right -->
<?php include_once("right-side.php")?>


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
    <h6>Live Search</h6>
  </div>
   	<form class="search-bar w-search" autocomplete="off" id="form">
			<div class="form-group with-button">
				<input class="form-control" placeholder="Search here by title.." type="text" id="navsearch">
				<button id="search_text">
					<svg class="olymp--icon"><use xlink:href="#olymp-magnifying-glass-icon"></use></svg>
				</button>
			</div>
		</form>
 <?php include_once("userheader.php")?>

</header>

<!-- ... end Header-BP -->


<!-- Responsive Header-BP -->


<!-- ... end Responsive Header-BP -->
<div class="header-spacer"></div>

<div class="container">
	<div class="row">
		<div class="col col-lg-12 col-md-12 col-sm-12 col-12">
				<form action="<?php echo site_url("user/SearchC")?>" method="post">
				<center><button class="btn btn-primary white" data-filter="*">All Blogs</button></center></form>
				<div class="clients-grid" id="searchlive">
				<ul class="cat-list-bg-style align-center sorting-menu">
					
					<?php 
						foreach($cinfo as $c)
						{
					?>
					<li class="cat-list__item active" data-filter="*"><a href="#" class="searchcat" data-id="<?= $c->categoryid?>"><?php echo $c->categoryname?></a>
					</li>
					</li>
					<?php 
						}
					?>
				</ul>

				<div class="row sorting-container" data-layout="masonry" id="searchshow">

				<?php 
					foreach ($articles as $a) {
						if($a->status==0)
						{
				?>
					<div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 sorting-item" >

						<div class="ui-block">
							
							<!-- Post -->
							
							<article class="hentry post video" >
							
									<article class="hentry post video" >
							
									<div class="post__author author vcard inline-items">
										<div><img src="<?= base_url("upload/user/".$a->uimg)?>" alt="author"></div>
							
										<div class="author-date">
											<a class="h6 post__author-name fn" href="<?php echo site_url("user/BloggerC/loadblogger/").$a->userid?>"><?= $a->username?></a> 
											<div class="post__date">
												<time class="published" datetime="2017-03-24T18:18">
													<?= $a->createdt?>
												</time>
											</div>
										</div>							
									</div>

									<p><?= $a->articletitle?></p>
							
							
									<div class="post-video">
										<div class="video-thumb">
											<img src="<?= base_url("upload/blogs/".$a->featuredimage)?>" alt="photo"style="height:456px;width:800px">
										</div>
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
							
							<!-- .. end Post -->						
						</div>
					</div>
				<?php }} ?>
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
	$("#navsearch").keyup(function(){
		var searchnav=$(this).val();
		$.ajax({
			type:"post",
			data:{search:searchnav},
			url:"<?= site_url("user/SearchNavC")?>",
			success:function(result){
				$("#searchlive").html(result);
			},
		});
	});

	$("#searchall").click(function(){
		$.ajax({
			url:"<?= site_url("user/SearchC")?>",
			success:function(result){
				$("#searchshow").html(result);
			}
		});
	});
	
	$(".searchcat").click(function(){
		var cid=$(this).data("id");
		 $.ajax({
		 	url:"<?= site_url("user/SearchC/showCatArticles/")?>"+cid,
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