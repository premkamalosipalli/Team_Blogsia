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

    <title>Blogsia | Login Register</title>

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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>resources/dropzone/dropzone1/dist/dropzone.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>resources/dropzone/dropzone1/dist/dropzone.js"></script>

</head>

<body class="landing-page">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TKGD7NP" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<!-- Preloader -->

<!-- <div id="hellopreloader">
    <div class="preloader">
        <svg width="45" height="45" stroke="#fff">
            <g fill="none" fill-rule="evenodd" stroke-width="2" transform="translate(1 1)">
                <circle cx="22" cy="22" r="6" stroke="none">
                    <animate attributeName="r" begin="1.5s" calcMode="linear" dur="3s" repeatCount="indefinite" values="6;22"/>
                    <animate attributeName="stroke-opacity" begin="1.5s" calcMode="linear" dur="3s" repeatCount="indefinite" values="1;0"/>
                    <animate attributeName="stroke-width" begin="1.5s" calcMode="linear" dur="3s" repeatCount="indefinite" values="2;0"/>
                </circle>
                <circle cx="22" cy="22" r="6" stroke="none">
                    <animate attributeName="r" begin="3s" calcMode="linear" dur="3s" repeatCount="indefinite" values="6;22"/>
                    <animate attributeName="stroke-opacity" begin="3s" calcMode="linear" dur="3s" repeatCount="indefinite" values="1;0"/>
                    <animate attributeName="stroke-width" begin="3s" calcMode="linear" dur="3s" repeatCount="indefinite" values="2;0"/>
                </circle>
                <circle cx="22" cy="22" r="8">
                    <animate attributeName="r" begin="0s" calcMode="linear" dur="1.5s" repeatCount="indefinite" values="6;1;2;3;4;5;6"/>
                </circle>
            </g>
        </svg>

        <div class="text">Loading ...</div>
    </div>
</div>-->

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
           
        </div>

       <div class="col col-xl-5 col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="modal-content">
          

            <div class="modal-header">
                <h6 class="title">Restore your Password</h6>
            </div>

            <div class="modal-body">
                <form  method="post" enctype="multipart/form-data" id="" action="<?php echo site_url('company/ComForgetPasswordC/checkEmail');?>">
                    <p>Enter your email and click the send code button. You’ll receive a code in your email. Please use that code below to change the old password for a new one.
                    </p>
                    <div class="form-group label-floating">
                        <label class="control-label">Your Email</label>
                        <input class="form-control required email" name="txtEmail" placeholder="" type="email" value="">
                    </div>
                    <div class="form-group label-floating">
                        <?php
                            if($error=$this->session->flashdata('message'))
                            {
                            ?>
                            <p style="color:red; font-weight: bold; text-align: center;"><strong>Email </strong><?php echo $error;?></p>
                            <?php
                            }
                            ?>
                    </div>
                    <button class="btn btn-purple btn-lg full-width forgot_password" type="submit">Send me the Code</button>
                </form>
       

            </div>
        </div> 
        </div>

        
    
       
   
</div>

 
</div>
</div>
   




<!--End of Load City-->

<!-- JS Scripts -->
<script src="<?php echo base_url('resources/user/');?>js/jQuery/jquery-3.4.1.js"></script>
<script src="<?php echo base_url('resources/user/');?>js/libs/jquery.appear.js"></script>
<script src="<?php echo base_url('resources/user/');?>js/libs/jquery.mousewheel.js"></script>
<script src="<?php echo base_url('resources/user/');?>js/libs/perfect-scrollbar.js"></script>
<script src="<?php echo base_url('resources/user/');?>js/libs/jquery.matchHeight.js"></script>
<script src="<?php echo base_url('resources/user/');?>js/libs/svgxuse.js"></script>
<script src="<?php echo base_url('resources/user/');?>js/libs/imagesloaded.pkgd.js"></script>
<script src="<?php echo base_url('resources/user/');?>js/libs/Headroom.js"></script>
<script src="<?php echo base_url('resources/user/');?>js/libs/velocity.js"></script>
<script src="<?php echo base_url('resources/user/');?>js/libs/ScrollMagic.js"></script>
<script src="<?php echo base_url('resources/user/');?>js/libs/jquery.waypoints.js"></script>
<script src="<?php echo base_url('resources/user/');?>js/libs/jquery.countTo.js"></script>
<script src="<?php echo base_url('resources/user/');?>js/libs/popper.min.js"></script>
<script src="<?php echo base_url('resources/user/');?>js/libs/material.min.js"></script>
<script src="<?php echo base_url('resources/user/');?>js/libs/bootstrap-select.js"></script>
<script src="<?php echo base_url('resources/user/');?>js/libs/smooth-scroll.js"></script>
<script src="<?php echo base_url('resources/user/');?>js/libs/selectize.js"></script>
<script src="<?php echo base_url('resources/user/');?>js/libs/swiper.jquery.js"></script>
<script src="<?php echo base_url('resources/user/');?>js/libs/moment.js"></script>
<script src="<?php echo base_url('resources/user/');?>js/libs/daterangepicker.js"></script>
<script src="<?php echo base_url('resources/user/');?>js/libs/fullcalendar.js"></script>
<script src="<?php echo base_url('resources/user/');?>js/libs/isotope.pkgd.js"></script>
<script src="<?php echo base_url('resources/user/');?>js/libs/ajax-pagination.js"></script>
<script src="<?php echo base_url('resources/user/');?>js/libs/Chart.js"></script>
<script src="<?php echo base_url('resources/user/');?>js/libs/chartjs-plugin-deferred.js"></script>
<script src="<?php echo base_url('resources/user/');?>js/libs/circle-progress.js"></script>
<script src="<?php echo base_url('resources/user/');?>js/libs/loader.js"></script>
<script src="<?php echo base_url('resources/user/');?>js/libs/run-chart.js"></script>
<script src="<?php echo base_url('resources/user/');?>js/libs/jquery.magnific-popup.js"></script>
<script src="<?php echo base_url('resources/user/');?>js/libs/jquery.gifplayer.js"></script>
<script src="<?php echo base_url('resources/user/');?>js/libs/mediaelement-and-player.js"></script>
<script src="<?php echo base_url('resources/user/');?>js/libs/mediaelement-playlist-plugin.min.js"></script>
<script src="<?php echo base_url('resources/user/');?>js/libs/ion.rangeSlider.js"></script>
<script src="<?php echo base_url('resources/user/');?>js/libs/leaflet.js"></script>
<script src="<?php echo base_url('resources/user/');?>js/libs/MarkerClusterGroup.js"></script>

<script src="<?php echo base_url('resources/user/');?>main1.js"></script>
<script src="<?php echo base_url('resources/user/');?>js/libs-init/libs-init.js"></script>
<script defer src="<?php echo base_url('resources/user/');?>fonts/fontawesome-all.js"></script>

<script src="<?php echo base_url('resources/user/');?>Bootstrap/dist/js/bootstrap.bundle.js"></script>

<!-- SVG icons loader -->
<script src="<?php echo base_url('resources/user/');?>js/svg-loader.js"></script>
<!-- /SVG icons loader -->

</body>

<!-- Mirrored from html.crumina.net/html-olympus/01-LandingPage.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Apr 2020 15:26:58 GMT -->
</html>


