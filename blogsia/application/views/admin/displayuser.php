<!DOCTYPE html>
<html>

<!-- Mirrored from thememakker.com/templates/swift/university/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Apr 2019 09:37:14 GMT -->
<head>
<title>Blogsia</title>
<link rel="icon" href="<?php echo base_url('resources/user/')?>blogsia_logo.jpg">
<?php include_once('topscripts.php');?>
</head>

<body class="theme-blush">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-blush">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Please wait...</p>
    </div>
</div>
<!-- #END# Page Loader --> 

<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<?php include_once('morphsearch.php');?> 



<!-- Top Bar -->
<?php include_once('header.php');?>
<!-- #Top Bar -->

<!--Side menu and right menu -->
<section> 
    <!-- Left Sidebar -->
 <?php include_once('left-bar.php');?>
    <!-- #END# Left Sidebar --> 
    <!-- Right Sidebar -->
 <?php include_once('right-bar.php');?>
    <!-- #END# Right Sidebar --> 
</section>
<!--Side menu and right menu -->

<!-- main content -->
<section class="content home">
    <div class="container-fluid" style="background-color:floralwhite;">
        <div class="block-header">
            <h2>User Information</h2>
            <small class="text-muted">Welcome to Blogsia</small>
        </div>
        
        <div class="row">
                 
                 <div class="col-lg-8 col-md-6 col-sm-12 offset-md-2" style="background-color: white;">
                <center>
                <img src="<?php echo base_url("upload/user/").$userinfo[0]->profilepic; ?>" style="height: 150px; width: 150px; border:5px solid black; border-radius:100px">
                <br> 
                <p><h5 style="font-weight: bold;">Username: <?php echo $userinfo[0]->username;?> </h5></p>
                <p><h5 style="font-weight: bold;">Email: <?php echo $userinfo[0]->email;?> </h5></p>
                <p><h5 style="font-weight: bold;">Contact-No: <?php echo $userinfo[0]->contact;?> </h5></p>
                <p><h5 style="font-weight: bold;">Bio: <?php echo $userinfo[0]->bio;?> </h5></p>
                <p><h5 style="font-weight: bold;">State: <?php echo $userinfo[0]->statename;?> </h5></p>
                <p><h5 style="font-weight: bold;">City: <?php echo $userinfo[0]->cityname;?> </h5></p>
                </center>
                </div>
                 
      </div>
	</div>

</section>
<!-- main content -->

<div class="color-bg"></div>
<?php include_once('bottomscripts.php');?>
<!-- Jquery Core Js --> 
</body>

<!-- Mirrored from thememakker.com/templates/swift/university/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Apr 2019 09:37:46 GMT -->
</html>