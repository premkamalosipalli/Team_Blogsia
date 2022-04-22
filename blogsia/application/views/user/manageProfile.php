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

	<title>Manage Profile</title>
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



<!-- ... end Fixed Sidebar Right -->


<!-- Fixed Sidebar Right-Responsive -->

<?php include_once('right-side.php')?>
<!-- ... end Fixed Sidebar Right-Responsive -->


<!-- Header-BP -->

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
    <h6>Manage Profile</h6>
  </div>
  
<?php include_once('userheader.php');?>

</header>


<div class="main-header">
	<div class="content-bg-wrap bg-account"></div>
	<div class="container">
		<div class="row">
			<div class="col col-lg-12 m-auto col-md-8 col-sm-12 col-12">
				<div class="main-header-content">
					<h1>Your Personal Information</h1>
					<p style="font-style: italic;">Make changes in your personal information here and you are good to go !!</p>
				</div>
			</div>
		</div>
	</div>
	<img class="img-bottom" src="<?php echo base_url('resources/user/')?>img/account-bottom.png" alt="friends">
</div>


<div class="container">
	<div class="row">
		<div class="col col-xl-9 order-xl-2 col-lg-9 order-lg-2 col-md-12 order-md-1 col-sm-12 col-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Personal Information</h6>
				</div>
				<div class="ui-block-content">

					
					<!-- Personal Information Form  -->
					
					<form method="post" enctype="multipart/form-data" action="<?php echo site_url('user/ManageProfileC/changeInfo');?>">
						<div class="row">
					
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group with-icon label-floating">
									<label class="control-label">Username</label>
									<input class="form-control" placeholder="" name="txtUsername" type="text" value="<?php echo $userinfo[0]->username?>">
									<i class="fa fa-user-alt" aria-hidden="true"></i>
								</div>
					
								<div class="form-group with-icon label-floating">
									<label class="control-label">Contact</label>
									<input class="form-control" placeholder="" name="txtContact" type="text" value="<?php echo $userinfo[0]->contact?>">
									<i class="fa fa-phone-alt" aria-hidden="true" style="color:seagreen;"></i>
								</div>
							</div>
							
					
					
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group with-icon label-floating">
									<label class="control-label">Email</label>
									<input class="form-control" placeholder="" name="txtEmail" type="email" value="<?php echo $userinfo[0]->email?>">
									<i class="fa fa-envelope" aria-hidden="true" style="color: orange"></i>
								</div>
					
								<div class="form-group with-icon label-floating">
									<label class="control-label">Your Website</label>
									<input class="form-control" placeholder="" name="txtWeb" type="" value="">
									<i class="fa fa-desktop-alt" aria-hidden="true" style="color: greenyellow"></i>
								</div>			
							</div>
			
							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="form-group with-icon label-floating">
									<label class="control-label">Youtube Link</label>
									<input class="form-control" type="text" name="txtYTLink" value="">
									<i class="fab fa-youtube c-youtube" aria-hidden="true" style="color: red;"></i>
								</div>
								<div class="form-group with-icon label-floating">
									<label class="control-label">Facebook Link</label>
									<input class="form-control" type="text" name="txtFBLink" value="">
									<i class="fab fa-facebook-f c-facebook" aria-hidden="true"></i>
								</div>
								<div class="form-group with-icon label-floating">
									<label class="control-label">Instagram Link</label>
									<input class="form-control" type="text" name="txtIGLink" value="">
									<i class="fab fa-instagram c-instagram" aria-hidden="true" style="color: #517fa4;"></i>
								</div>
								<div class="form-group with-icon label-floating is-empty">
									<label class="control-label">Linkedin Link</label>
									<input class="form-control" name="txtLINLink" type="text">
									<i class="fab fa-linkedin c-linkedin" aria-hidden="true" style="color:#007bb6;"></i>
								</div>
							</div>

							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group with-icon label-floating" >
									<label class="control-label">Current Profile Picture</label>
										<img src="<?php echo base_url("upload/user/".$userinfo[0]->profilepic);?>" class="col-sm-5" style="margin-left: 15%; margin-top: 27px;"><br><br><br>
									<i class="fa fa-image" aria-hidden="true" style="color: indigo	;"></i>
								</div>
							</div>
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group with-icon">
									<label class="control-label">Change Profile Picture</label>
									<input class="form-control" type="file"  name="fup" value="">
									<i class="fa fa-camera-alt" aria-hidden="true" style="color:;"></i>
								</div>
							</div>
							<br><br>
							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="form-group with-icon label-floating">
									<label class="control-label">Bio</label>
									<textarea class="form-control" name="txtBio" type="text"><?php echo $userinfo[0]->bio?></textarea>
									<i class="fa fa-sticky-note" aria-hidden="true" style="color: orange;"></i>
								</div>
							</div>

							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group with-icon label-floating">
									<label class="control-label">State</label>
									<!-- <input class="form-control" placeholder="" type="email" value=""> -->
									<select name="txtState" onchange="loadCity(this.value)">
                                            <option value="-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Select State</option>
                                            <?php
                                            foreach($stateinfo as $s) 
                                            {
                                             if($s->statename==$userinfo[0]->statename) 
                                             {         
                                            ?>    
                                            <option value="<?php echo $s->stateid;?>" selected>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $s->statename; ?></option>
                                            <?php 
                                             }
                                             else{
                                             ?>
                                             <option value="<?php echo $s->stateid;?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $s->statename;?></option> 
                                             <?php	
                                             }
                                             }
                                            ?>
                                                                                     
                                        </select>
									<i class="fa fa-flag" aria-hidden="true" style="color:#8B475D"></i>
								</div>
							</div>	

							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group with-icon label-floating">
									<label class="control-label">City</label>
									
									<select name="txtCity" id="city">
                                      <?php
                                            foreach($cityinfo as $c) 
                                            {
                                             if($c->cityid==$userinfo[0]->cityid) 
                                             {         
                                            ?>    
                                            <option value="<?php echo $c->cityid;?>" selected>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $c->cityname; ?></option>
                                            <?php 
                                             }
                                              }
                                            ?>
                                                  
                                    </select>
									<i class="fa fa-city" aria-hidden="true" style="color: #B9758B"></i>
								</div>
							</div>
							<div class="col col-lg-12 col-md-6 col-sm-12 col-12">
								<button class="btn btn-primary btn-lg full-width" type="submit">Save all Changes</button>
							</div>
						</div>
					</form>
					
					<form method="post" enctype="multipart/form-data" action="<?php echo site_url('user/ManageProfileC/loadManageProfile');?>">
					<div class="col col-lg-12 col-md-6 col-sm-12 col-12">
						<a href=""><button class="btn btn-secondary btn-lg full-width" type="submit">Restore all Attributes</button></a>
					</div>
					</form>
							
					
					<!-- ... end Personal Information Form  -->
				</div>
			</div>
		</div>

		<div class="col col-xl-3 order-xl-1 col-lg-3 order-lg-1 col-md-12 order-md-2 col-sm-12 col-12 responsive-display-none">
			<div class="ui-block">

				<!-- Your Profile  -->
				
				<div class="your-profile">
					<div class="ui-block-title ui-block-title-small">
						<h6 class="title">Your PROFILE</h6>
					</div>
				
					<div id="accordion" role="tablist" aria-multiselectable="true">
						<div class="card">
							<div class="card-header" role="tab" id="headingOne">
								<h6 class="mb-0">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										Profile Settings
										<svg class="olymp-dropdown-arrow-icon"><use xlink:href="#olymp-dropdown-arrow-icon"></use></svg>
									</a>
								</h6>
							</div>
				
							<div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
								<ul class="your-profile-menu">
									<li>
										<a href="<?php echo site_url('user/ManageProfileC/loadManageProfile');?>">Personal Information</a>
									</li>

									<li>
										<a href="<?php echo site_url('user/PasswordUserC/loadChangePassword');?>">Change Password</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
    function loadCity(cid) {
        if(cid!=-1)
        {
            $.ajax({
                url:"<?php echo site_url('user/ManageProfileC/loadCityByState/') ?>"+cid,
                success:function(result) 
                {
                    document.getElementById('city').innerHTML=result;
                }
            });
        }
    }
</script>

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