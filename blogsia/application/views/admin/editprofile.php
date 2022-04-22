<!DOCTYPE html>
<html>

<!-- Mirrored from thememakker.com/templates/swift/university/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Apr 2019 09:37:14 GMT -->
<head>
<title>Blogsia</title>
<link rel="icon" href="<?php echo base_url('resources/user/')?>blogsia_logo.jpg">
<link href="<?php echo base_url("resources/admin")?>/assets/plugins/sweetalert/sweetalert.css" rel="stylesheet">
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
            <h2>Dashboard</h2>
            <small class="text-muted">Welcome to Blogsia</small>
        </div>
        
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2> Edit Profile </h2>
                    </div>
                    <div class="body"> 
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs flex-column flex-md-row" role="tablist">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home_with_icon_title"> <i class="material-icons">create</i> Change Password </a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#profile_with_icon_title"><i class="material-icons">person</i>Details </a></li>
                        </ul>
                        

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane in active" id="home_with_icon_title"> 
                         
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="password" name="cpass" class="form-control" placeholder="Current Password" id="cpass" required>
                                </div>
                            </div>
                            <div class="form-group" id=newpassword>
                                <div class="form-line">
                                    <input type="password" name="npass" class="form-control" placeholder="New Password" id="npass" required>
                                </div>
                            </div>
                            <div class="form-group" id=confirmpassword>
                                <div class="form-line">
                                    <input type="password" name="cnpass" class="form-control" placeholder="Confirm Password" id="cnpass" required>
                                </div>
                            </div>
                            <button id="change" type="submit" class="btn btn-raised g-bg-blush2" > Change </button> 
                            <button id="continue" class="btn btn-raised g-bg-blush2"> Continue </button> 
               
                            </div>
                             
                            <div role="tabpanel" class="tab-pane" id="profile_with_icon_title"> <b>Manage Details </b>
                            <form enctype="multipart/form-data" action="<?php echo site_url("admin/AdminC/updateprofile");?>" method="post" name="Validate">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label> Username </label>
                                    <input type="text" name="username" class="form-control" value="<?php echo $ainfo[0]->username ?>" placeholder="Username">
                                    
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label> Email </label>
                                    <input type="text" name="email" class="form-control" value="<?php echo $ainfo[0]->emailid ?>" placeholder="Email">
                                    
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label> Contact Number </label>
                                    <input type="text" name="cn" class="form-control" value="<?php echo $ainfo[0]->contactNo ?>" placeholder="Contact Number">
                                    
                                </div>
                            </div>
                             <div class="form-group form-float">
                                
                                    <label> Current Profile Picture </label>
                                    <br>
                                    <img src="<?php echo base_url("upload/admin/").$ainfo[0]->profilepic?>" style="height: 75px; width:75px; border:2px solid black">
                            </div>
                            <div>
                                
                                    <label> New Profile Picture </label>
                                    <br>
                                    <input type=file name="pic">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-raised btn-primary m-t-15 waves-effect">Edit</button>
                           </form>
 
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- main content -->

<div class="color-bg"></div>

<?php include_once('bottomscripts.php');?>
<script src="<?php echo base_url("resources/admin")?>/assets/plugins/sweetalert/sweetalert.min.js"></script> <!-- sweetalert --> 
    <script src="<?php echo base_url("resources/admin")?>/assets/bundles/mainscripts.bundle.js"></script>
    <script src="<?php echo base_url("resources/admin")?>/assets/plugins/bootstrap-notify/bootstrap-notify.js"></script>
    <script src="<?php echo base_url("resources/admin")?>/assets/js/pages/ui/notifications.js"></script> <!-- Custom Js --> 
    <script src="<?php echo base_url("resources/admin")?>/assets/bundles/mainscripts.bundle.js"></script>
<!-- Jquery Core Js --> 
<script type="text/javascript">
    $(document).ready(function(){
     $("#newpassword").hide();
        $("#confirmpassword").hide();
        $("#change").hide();
        $("#continue").click(function(){
         var cpassword= $("#cpass").val();
            $.ajax({
            url:"<?php echo site_url("admin/PasswordC/chkpassword/")?>",
            type:'post',
            data :{
                cpassword:cpassword,
            },
            success: function(data)
            {
                console.log(data);
                if(data==1)
                {
                    showNotification("alert-success", "old password is correct", "bottom", "left", "", "");
                  $("#newpassword").show();
                  $("#confirmpassword").show();
                  $("#change").show();
                  $("#continue").hide();  
                }

                else
                {
                 showNotification("alert-danger", "old password is incorrect", "bottom", "left", "", ""); 
                $("#cpass").val("");
                  $("#newpassword").hide();
                  $("#confirmpassword").hide();      
                }

            }
                  
         });

      });     

        $("#change").click(function(){
         var newpass= $("#npass").val();
         var cnpass=$("#cnpass").val();
         if(newpass==cnpass)
         {
          $.ajax({
            url:"<?php echo site_url("admin/PasswordC/changepass/")?>",
            type:'post',
            data :{
                newpass:newpass,
            },
            success: function(data)
            {
                console.log(data);
                if(data==1)
                {
                showNotification("alert-success", "Password Changed", "bottom", "left", "", ""); 
                  $("#npass").val("");
                  $("#cnpass").val("");
                  $("#change").hide();
                  $("#continue").show();
                  $("#cpass").val("");
                   $("#newpassword").hide();
                  $("#confirmpassword").hide(); 

                }

                else
                {
                  showNotification("alert-danger", "Error updating password", "bottom", "left", "", "");     
                }

            } 
            }); 
         }
         else{
            showNotification("alert-danger", "Password and confirmpassword are different", "bottom", "left", "", "");
         }   
                  
         
         
         
        });
        $("form[name='Validate']").validate({
            rules:{
                username:"required",
                cn:"required",
                email:{
                    required:true,
                    email:true
                      },
                
                pic:"required"
                },
            messages:{
                username: "Username cannot be empty",
                cn: "Contact Number cannot be empty",
                email: "Email ID cannot be empty",
                pic: "Image is required"
                    },
            submitHandler:function(form){
                form.submit();
                }
            });

     });
  

</script>
</body>

<!-- Mirrored fr"om thememakker.com/templates/swift/university/index.html by HTTrack Website Copier/3".x [XR&CO'2014], Fri, 12 Apr 2019 09:37:46 GMT -->
</html>

