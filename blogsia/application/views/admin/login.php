<!DOCTYPE html>
<html>

<!-- Mirrored from thememakker.com/templates/swift/university/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Apr 2019 09:37:50 GMT -->
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>Blogsia</title>
<link rel="icon" href="<?php echo base_url('resources/user/')?>blogsia_logo.jpg">
<!-- Favicon-->
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link href="<?php echo base_url('resources/admin/');?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
<!-- Custom Css -->
<link href="<?php echo base_url('resources/admin/');?>assets/css/main.css" rel="stylesheet">
<link href="<?php echo base_url('resources/admin/');?>assets/css/login.css" rel="stylesheet">

<link href="<?php echo base_url('resources/admin/');?>assets/css/themes/all-themes.css" rel="stylesheet" />
</head>
<body class="login-page authentication">

<div class="container">
    <div class="card-top"></div>
    <div class="card">
        <h1 class="title"><span>Blogsia</span>Login <span class="msg">Sign in to start your session</span></h1>
        <div class="col-sm-12">
            <form id="sign_in" method="POST" action="<?php echo site_url("admin/LoginC/checkuser")?>">
                <div class="input-group"> <span class="input-group-addon"> <i class="zmdi zmdi-account"></i> </span>
                    <div class="form-line">
                        <input type="text" class="form-control" name="uname" placeholder="Username" required autofocus>
                    </div>
                </div>
                <div class="input-group"> <span class="input-group-addon"> <i class="zmdi zmdi-lock"></i> </span>
                    <div class="form-line">
                        <input type="password" class="form-control" name="pass" placeholder="Password" required>
                    </div>
                </div>
                <?php
                if(isset($errormsg))
                {
                ?>
                <div class="form-line"> <p style="color: red;align-content: center;" > <?php echo $errormsg;?> </p></div>
                <?php 
                }   
                ?>
                <div class="text-center">
                    <button type=submit class="btn btn-raised waves-effect g-bg-blush2" >SIGN IN</button>
                </div>

            </form>
        </div>
    </div>    
</div>
<div class="theme-bg"></div>
<!-- Jquery Core Js --> 
<script src="<?php echo base_url('resources/admin/');?>assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="<?php echo base_url('resources/admin/');?>assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="<?php echo base_url('resources/admin/');?>assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 
</body>

<!-- Mirrored from thememakker.com/templates/swift/university/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Apr 2019 09:37:50 GMT -->
</html>