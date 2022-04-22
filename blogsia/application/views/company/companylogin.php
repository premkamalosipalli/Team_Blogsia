<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.crumina.net/html-olympus/01-LandingPage.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Apr 2020 15:26:52 GMT -->
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TKGD7NP');</script>
<!-- End Google Tag Manager -->

    <title>Blogsia | Company Login</title>
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

    <!-- Dropzone CSS JQuery-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="<?php echo base_url();?>resources/dropzone/dropzone1/dist/dropzone.css" rel="stylesheet">
    <script type="text/javascript" src="<?php echo base_url();?>resources/dropzone/dropzone1/dist/dropzone.js"></script>
 <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body class="landing-page" >
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TKGD7NP" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- ... end Preloader -->
<div class="content-bg-wrap"></div>


<!-- Header Standard Landing  -->
<div class="header--standard header--standard-landing" id="header--standard">
    <div class="container">
        <header class="header" id="site-header">
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TKGD7NP');</script>
<!-- End Google Tag Manager --> 
    <div class="header-content-wrapper">
        <div class="control-block">

            <div class="control-icon more has-items">
                <a href="<?php echo site_url('user/LoginC')?>">User Login</a>
            </div>

            <div class="control-icon more has-items">
               <a href="<?php echo site_url('company/CompanyC')?>">Company Login</a>
            </div>
        </div>
    </div>
        </header>
    </div>
</div>

<!-- ... end Header Standard Landing  -->
<div class="header-spacer--standard"></div>

<div class="container">
    <div class="row display-flex">
        <div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="landing-content">
               
            </div>
        </div>

        <div class="col col-xl-5 col-lg-6 col-md-12 col-sm-12 col-12">
            
            <!-- Login-Registration Form  -->

            <div class=tab-content>
            <div class="registration-login-form">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#company" role="tab">
                            <svg class="olymp-login-icon"><use xlink:href="#olymp-login-icon"></use></svg>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#reg" role="tab">
                            <svg class="olymp-register-icon"><use xlink:href="#olymp-register-icon"></use></svg>
                        </a>
                    </li>
                </ul>
            
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="company" role="tabpanel" data-mh="log-tab">
                         <div class="title h6" style="color: #FF5E3A;text-align: center;font-size: 20px;font-family: cursive;">Company Login</div>
                        <form class="needs-validation" action="<?php echo site_url('company/CompanyC/checkLogin');?>" method="post" novalidate>
                            <div class="row">
                                <div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label" style="font-weight: bold;">Company Name</label>
                                        <input class="form-control" placeholder="" type="text" name="txtcname" id="cid" required>
                                        <span class="invalid-feedback">
                                        <span class="error-box">
                                           Company name required;
                                        </span>
                                    </span>  
                                    </div>
                                    <div class="form-group label-floating">
                                        <label class="control-label" style="font-weight: bold;"> Password</label>
                                        <input class="form-control" placeholder="" type="password" name="txtPass" id="cpass" required>
                                    <span class="invalid-feedback">
                                        <span class="error-box">
                                            Password is required
                                        </span>
                                    </span>
                                    </div>
                                    <div class="form-group label-floating">
                                        <?php
                                            if(isset($LoginErrMsg))
                                            {
                                            ?>
                                            <p style="color:red; font-weight: bold; text-align: center;"><?php echo $LoginErrMsg;?></p>
                                            <?php
                                            }
                                            ?>
                                    </div>
            
                                    <button type="submit" class="btn btn-lg btn-primary full-width">Login</button>
            
                                     <center>
                                        <a href="<?php echo site_url('company/ComForgetPasswordC/loadForgetPass');?>" class="forgot">Forgot my Password</a>
                                    </center> 
            
                                    
            
                                   
                                </div>
                            </div>
                        </form>
                    </div>

                     <div class="tab-pane" id="reg" role="tabpanel" data-mh="log-tab">
                        <div class="title h6" style="font-family:serif;font-size: xx-large; color:#FF5E3A ; border:2px bold solid #7A5AC2; text-align:center;">  Register to Blogsia</div>
                        <form class="needs-validation" enctype="multipart/form-data" method="post" id="drop"  action="<?php echo site_url('company/CompanyC/addCompany');?>" novalidate name="form-validation">
                            <div class="row">
                                <div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label" style="font-weight: bold;">Company Name</label>
                                        <input class="form-control" placeholder="" type="text" name="txtcname" id="txtcname" required>
                                         <span id="error" class="text-danger"></span>
                                        <span class="invalid-feedback">
                                        <span class="error-box">
                                            Enter company name
                                        </span>
                                    </span>
                                    </div>
                                </div>
                                <div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label" style="font-weight: bold;">Password</label>
                                        <input class="form-control" placeholder="" type="password" name="txtpass" required>
                                         <span class="invalid-feedback">
                                        <span class="error-box">
                                            Enter Password
                                        </span>
                                    </span>
                                    </div>
                                </div>


                                <div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label" style="font-weight: bold;">Company Title</label>
                                        <input class="form-control" placeholder="" type="text" name="txttitle" required>
                                        <span class="invalid-feedback">
                                        <span class="error-box">
                                            Enter Company's title 
                                        </span>
                                    </span>
                                    </div>
                                </div>


                                <div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label" style="font-weight: bold;">Company Logo</label>
                                        <div class="dropzone" id="drop">
                                        <div class="dropzone" id="myDropzone">
                                            <div class="dz-default dz-message">
                                                <span>Drop files here to upload</span>
                                            </div> 
                                            <input type="hidden" name="img" id="img" required>
                                        <span class="invalid-feedback">
                                        <span class="error-box">
                                            Logo is required
                                        </span>
                                    </span>
                                        </div>
                                    </div>
                                    </div>
                                </div>

                                 <div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label" style="font-weight: bold;">Email</label>
                                        <input class="form-control" placeholder="" type="text" style="height: 100px;" name="txtemail" id="txtemail" required>
                                         <span id="emailerror" class="text-danger"></span>
                                         <span class="invalid-feedback">
                                        <span class="error-box">
                                            Enter your Mail
                                        </span>
                                    </span>
                                    </div>
                                </div>    
                     

                                 <div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label" style="font-weight: bold;">Bio</label>
                                        <input class="form-control" placeholder="" type="text" style="height: 100px;" name="txtdesp" required>
                                         <span class="invalid-feedback">
                                        <span class="error-box">
                                            Enter your bio
                                        </span>
                                    </span>
                                    </div>
                                </div>                             
                                    
                                   
                                <div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group label-floating">
                                        <div class="g-recaptcha" data-sitekey="6LdEHrsZAAAAAFFTpPKRZD7Ng61KZxnQnNxi_-Hs" name="txtCaptcha"></div>
                                        <span id="captcha_error" class="text-danger"></span>
                                    </div>
                                </div>
                                    
                       <button type=submit class="btn btn-purple btn-lg full-width ">Complete Registration!</button>
                                
                            </div>
                        </form>
                    </div> 
                </div>
            </div>
            </div>
        </div>
    </div>
</div>

<!-- <script type="text/javascript">
    function validate()
    {
            swal("Thank You!", "You are next to login in!", "success");
    }
</script> -->

<!-- Window-popup Restore Password -->

<div class="modal fade" id="restore-password" tabindex="-1" role="dialog" aria-labelledby="restore-password" aria-hidden="true">
    <div class="modal-dialog window-popup restore-password-popup" role="document">
        <div class="modal-content">
            <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                <svg class="olymp-close-icon"><use xlink:href="#olymp-close-icon"></use></svg>
            </a>

            <div class="modal-header">
                <h6 class="title">Restore your Password</h6>
            </div>

            <div class="modal-body">
                <form  method="get">
                    <p>Enter your email and click the send code button. You’ll receive a code in your email. Please use that
                        code below to change the old password for a new one.
                    </p>
                    <div class="form-group label-floating">
                        <label class="control-label">Your Email</label>
                        <input class="form-control" placeholder="" type="email" value="james-spiegel@yourmail.com">
                    </div>
                    <button class="btn btn-purple btn-lg full-width">Send me the Code</button>
                    <div class="form-group label-floating">
                        <label class="control-label">Enter the Code</label>
                        <input class="form-control" placeholder="" type="text" value="">
                    </div>
                    <div class="form-group label-floating">
                        <label class="control-label">Your New Password</label>
                        <input class="form-control" placeholder="" type="password" value="olympus">
                    </div>
                    <button class="btn btn-primary btn-lg full-width">Change your Password!</button>
                </form>

            </div>
        </div>
    </div>
</div>

<!-- ... end Window-popup Restore Password -->


<!-- Window Popup Main Search -->

<div class="modal fade" id="main-popup-search" tabindex="-1" role="dialog" aria-labelledby="main-popup-search" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered window-popup main-popup-search" role="document">
        <div class="modal-content">
            <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                <svg class="olymp-close-icon"><use xlink:href="#olymp-close-icon"></use></svg>
            </a>
            <div class="modal-body">
                <form class="form-inline search-form" method="post">
                    <div class="form-group label-floating">
                        <label class="control-label">What are you looking for?</label>
                        <input class="form-control bg-white" placeholder="" type="text" value="">
                    </div>

                    <button class="btn btn-purple btn-lg">Search</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- ... end Window Popup Main Search -->

<!-- JS Scripts -->
<?php include_once("userbottomscripts.php")?><!-- SVG icons loader -->
<script src="<?php echo base_url('resources/user/');?>js/svg-loader.js"></script>
<!-- /SVG icons loader -->

</body>

<!-- Mirrored from html.crumina.net/html-olympus/01-LandingPage.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Apr 2020 15:26:58 GMT -->
</html>
<script type="text/javascript">
        $("#txtcname").blur(function(){
      var userNm = $("#txtcname").val();
      $.ajax({
        url : "<?=site_url('company/CheckC/checkuser/')?>"+userNm,
        success : function(result){
          if(result=='Enter unique Companyname')
          {
            $('#error').text(result);
          }
          else
          {
            $('#error').text(result);
          }
        }
      });
    });
    $("#txtemail").blur(function(){
      var userNm = $("#txtemail").val();
      $.ajax({
         type : "POST",
        data : {usMail : userNm},
        url : "<?=site_url('company/CheckC/checkemail/')?>",
        success : function(result){
          if(result=='Enter unique email')
          {
            $('#emailerror').text(result);
          }
          else
          {
            $('#emailerror').text(result);
          }
        }
      });
    });
</script>
<script type="text/javascript">
    Dropzone.autoDiscover = false;
  $(document).ready(function(){
        var base64 = '';
        $("#myDropzone").dropzone({
            url: "<?= base_url("upload")?>",       
            addRemoveLinks: true,
            maxFiles: 1,
            maxFileSize: 1,
            init: function() {
                this.on("addedfile", function (file) {
                    var reader = new FileReader();
                    reader.onload = function(event) {
                        // event.target.result contains base64 encoded image                    
                        var base64String = event.target.result;

                        $("#img").val(base64String);
                        handlePictureDropUpload(base64String ,fileName );
                    };
                    reader.readAsDataURL(file);
                });
            },
        });
            $("form[name='form-validation']").submit(function(){
            var $captcha = $('#recaptcha'),
            response = grecaptcha.getResponse();
            if (response.length === 0) 
            {
              $( '#captcha_error').text( "reCAPTCHA is mandatory" );
              if( !$captcha.hasClass( "error" ) ){
                $captcha.addClass( "error" );
              }
              return false;
            } 
            else 
            {
              $( '#captcha_error' ).text('');
              $captcha.removeClass( "error" );
              return true;
            }
          });    
});
</script>
