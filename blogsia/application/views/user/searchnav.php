<!DOCTYPE html>
<html lang="en">
<head>
	<title>Search</title>
	<link rel="icon" href="<?php echo base_url('resources/user/')?>blogsia_logo.jpg">
	<?php include_once("usertopscripts.php")?>
</head>
<body class="page-has-left-panels page-has-right-panels" style="background-color:#ffebcc">

<!-- Fixed Sidebar Right -->
<?php include_once("right-side.php")?>
<!-- Header-BP -->

<header class="header" id="site-header">
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TKGD7NP');</script>
<!-- End Google Tag Manager -->

  

 <?php include_once("userheader.php")?>

</header>

<!-- ... end Header-BP -->


<!-- Responsive Header-BP -->

<!-- ... end Responsive Header-BP -->
<div class="header-spacer"></div>

<div class="container">
	<div class="row">
		<div class="col col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="clients-grid">
				<div class="row sorting-container" data-layout="masonry" id="searchshow">

				<?php 
					foreach ($articles as $a) {
						if($a->status==0){
				?>
					<div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 sorting-item" >

						<div class="ui-block">
							
							<!-- Post -->
							
							<article class="hentry post video" >
							
									<article class="hentry post video" >
							
									<div class="post__author author vcard inline-items">
										<div><img src="<?= base_url("upload/user/".$a->uimg)?>" alt="author"></div>
							
										<div class="author-date">
											<a class="h6 post__author-name fn" ><?= $a->username?></a> 
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
							
										<div class="video-content">
											<p><?= $a->description?></p>
										
										
										</div>
									</div>	
									<div class="control-block-button post-control-button">
					
							 <a class="btn btn-control like"  data-id="<?php echo $a->articleid?>">
								<svg class="olymp-like-post-icon"><use xlink:href="#olymp-like-post-icon"></use></svg>
							</a> 

						
							<a class="btn btn-control save" data-id="<?php echo $a->articleid?>" style="color: white">
						      <i class="fa fa-save"> </i> 
							</a>
					
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
								</article>
							
							<!-- .. end Post -->						
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
<!-- <script type="text/javascript">
	$("#navsearch").keyup(function(){
		var searchnav=$(this).val();
		$.ajax({
			type:"post",
			data:{search:searchnav},
			url:"<?= site_url("user/SearchNavC")?>",
			success:function(result){
				$("#searchshow").html(result);
			},
		});
	});
</script> -->

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
</body>
</html>