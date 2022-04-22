<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from uxart.io/downloads/openlist-html/all-template/get-started.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 May 2020 13:32:38 GMT -->
<head>
    <style type="text/css">
        #btn:hover{
            background-color: #FFF1A9;
            color: #FF7043;
        }
        *{
            background-color: wheat;

        }

    </style>
    <title>Register</title>
    <link rel="icon" href="<?php echo base_url('resources/user/')?>blogsia_logo.jpg">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    
    <!-- Favicon -->
    <link rel="icon" href="<?php echo base_url('resources/user/');?>images/favicon.png" type="image/x-icon" />
    <!-- Materialize CSS --> 
    <link rel="stylesheet" href="<?php echo base_url('resources/user/');?>css/materialize.min.css">
    <!-- Tooltip CSS --> 
    <link rel="stylesheet" href="<?php echo base_url('resources/user/');?>vendors/tooltip/balloon.min.css">
    <!-- Icon CSS-->  
    <link rel="stylesheet" href="<?php echo base_url('resources/user/');?>vendors/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url('resources/user/');?>vendors/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Calendar CSS-->  
    <link rel="stylesheet" href="<?php echo base_url('resources/user/');?>vendors/calendar/dcalendar.picker.css"> 
    
    <!--Theme Styles CSS-->
	<link rel="stylesheet" href="<?php echo base_url('resources/user/');?>css/style.css" media="all" /> 


   <!--  <link rel="stylesheet" type="text/css" href="dropzone/dropzone1/dist/min/dropzone.min.css">
    < <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="dropzone/dropzone1/dist/min/dropzone.min.js"></script>  -->

    <link href="assets/plugins/dropzone/dropzone.css" rel="stylesheet">
</head>
 <body class="page-has-left-panels page-has-right-panels" style="background-color:#ffebcc">   
   
    <!-- Header_Area --> 
    <nav class="header_area header_2">
        <div class="nav-wrapper">
            
            <a href="#modal1" class="waves-effect btn post_btn sm_post_btn modal-trigger">Get started</a>
            
            <ul class="right right_menu hide-on-med-and-down">
                <li><a href="#modal1" class="waves-effect btn post_btn modal-trigger">Get started</a></li>   
            </ul>
        </div>
    </nav>
    <!-- End  Header_Area --> 
    
    <!-- Tranding-select and banner Area -->  
    
    <!-- End Tranding Area -->   
    
    <!-- Min Container area -->
    <section class="min_container min_pages"></section>
    <!-- End Min Container area -->  
    
    <!-- Footer area -->
    <footer class="footer_area">
        <div class="copy_right">
            © 2020 <a href="#">Blogsia</a>. All rights reserved.
        </div>
    </footer> 
    <!-- End Footer area --> 
    
        
    <!-- Popup area --> 
    <div id="modal2" class="login_popup_aera modal">
        <div class="login_popup_row">
            <img src="images/login-logo.png" alt="">
            <h4>Create a new account with Blogsia or<br> <a href="#modal1" class="modal-trigger modal-close">Sign in</a></h4> 
            <form class="input_group" method="post"> 
                

                <div class="input-field">
                    <label style="font-size: 20px;font-weight: bold;">User Name</label><br>
                    <input  type="text" class="validate" placeholder="User Name" style="border-radius: 25px;"> 
                </div>
                <div class="input-field">
                    <label style="font-size: 20px;font-weight: bold;">Email</label><br>
                    <input  type="email" class="validate" placeholder="Email" style="border-radius: 25px;">
                </div> 
                <div class="input-field">
                    <label style="font-size: 20px;font-weight: bold;">Password</label><br>
                    <input type="password" class="validate" placeholder="Password" style="border-radius: 25px;"> 
                </div><br>

                <div class="dropzone" id="myDropzone" style="height:100px;">
                <div class="dz-default dz-message">
                    <script type="text/javascript">
                          Dropzone.autoDiscover = false;
                          $("#myDropzone").dropzone({
                            url: "<?= base_url("upload")?>",       
                            addRemoveLinks: true,
                            maxFiles: 1,
                            maxFileSize: 1,
                            acceptedFiles: "image/jpeg,image/png,image/jpg",
                            removedfile:function(file){
                                var name=file.name;

                                $.ajax({
                                    type: 'post',
                                    data: {name:name,request:1},
                                    success: function(response){
                                        console.log("Success"+response);
                                    }
                                });

                                var ref;
                                return(ref=file.previewElement) !=null ? ref.parentNode.removeChild(file.previewElement) : void 0;
                            }
                          });
                    </script>
                  <span>Upload your Profile Photo</span>
                </div> 
                <input type="hidden" name="img" id="img">         
              </div>
               
                
                <button class="waves-effect" style="border-radius: 25px;" id="btn">Sign in</button>
            </form> 
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat"><i class="ion-close-round"></i></a>
        </div>
    </div>   
    <!-- Log In Popup --> 
    <div id="modal1" class="login_popup_aera modal">
        <div class="login_popup_row">
            <img src="images/login-logo.png" alt="">
            <h4>Log in to Blogsia or <a href="#modal2" class="modal-trigger modal-close">create an account</a></h4>
            
            
            <form class="input_group"> 
                <div class="input-field">
                    <input  type="email" class="validate" placeholder="Email"> 
                    <input type="password" class="validate" placeholder="Password"> 
                </div>
                
                <button class="waves-effect">Sign in</button>
            </form> 
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat"><i class="ion-close-round"></i></a>
        </div>
    </div>  
    <!-- End Popup area -->   
    
    <!-- jQuery JS -->
    <script src="<?php echo base_url('resources/user/');?>js/jquery-3.3.1.min.js"></script>  
    <!-- Materialize JS -->
    <script src="<?php echo base_url('resources/user/');?>js/materialize.min.js"></script>  
    <!-- Calendar JS -->
    <script src="<?php echo base_url('resources/user/');?>vendors/calendar/dcalendar.picker.js"></script>  
    <!-- Load JS -->
    <script src="<?php echo base_url('resources/user/');?>vendors/infinite-scroll/jquery.jscroll.js"></script>  
    <!-- Theme JS -->
    <script src="<?php echo base_url('resources/user/');?>js/theme.js"></script>
</body>

<!-- Mirrored from uxart.io/downloads/openlist-html/all-template/get-started.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 May 2020 13:32:38 GMT -->
</html>
