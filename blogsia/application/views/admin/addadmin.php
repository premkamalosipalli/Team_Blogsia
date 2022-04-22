<!DOCTYPE html>
<html>

<title>Blogsia</title>
<link rel="icon" href="<?php echo base_url('resources/user/')?>blogsia_logo.jpg">
<?php include_once('topscripts.php');?>


    <!-- Dropzone -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>resources/dropzone/dropzone1/dist/dropzone.css"> 

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
    <div class="container-fluid">
        <div class="block-header">
            <h2>Add Admin</h2>
            <small class="text-muted">Welcome to Blogsia</small>
        </div>
        
        <div class="row clearfix top-report">
            
            <div class="col-lg-12 col-sm-6 col-md-6">
                <form enctype="multipart/form-data" method="post" action="<?php echo site_url("admin/AdminC/addadmin"); ?>" name="form-validation">
                    
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="uname" class="form-control" placeholder="Username" required aria-required="true" aria-invalid="true">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-line">
                            <input type="password" name="password" class="form-control" placeholder="Password" >
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-line">
                            <input type="email" name="email" class="form-control" placeholder="Email" >
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="contactNo" class="form-control" placeholder="Contact-No" >
                        </div>
                    </div>

                    <div id="drop">
                        <div class="dropzone" id="photo_upload">
                            <div class="dz-default dz-message">
                                <span>Drop files here to upload</span>
                            </div> 
                            <input type="hidden" name="img" id="img">         
                        </div>
                    </div>   
        
                    <button type="submit" class="btn btn-raised btn-primary m-t-15 waves-effect error">Add</button>
                </form>    
	       </div>
        </div>
    </div>
</section>
<!-- main content -->

<div class="color-bg"></div>
 <?php include_once('bottomscripts.php');?>

<!-- <script src="assets/js/pages/forms/form-validation.js"></script> -->
<!-- Jquery Core Js --> 
</body>

<!-- Mirrored from thememakker.com/templates/swift/university/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Apr 2019 09:37:46 GMT -->
</html>

<script type="text/javascript">
    Dropzone.autoDiscover = false;
    $(document).ready(function(){
        var base64 = '';
        $("#photo_upload").dropzone({
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

        $("form[name='form-validation']").validate({
            rules:{
                uname:"required",
                contactNo:"required",
                email:{
                    required:true,
                    email:true
                      },
                password:{
                    required:true,
                    minlength:5
                     },
                img:"required"
                },
            messages:{
                uname: "Username cannot be empty",
                contactNo: "Contact Number cannot be empty",
                email: "Email ID cannot be empty",
                password: {
                    required:"Please provide a password",
                    minlength:"Your password must be atleast 5 characters long"
                      },
                img: "Image is required"
                    },
            submitHandler:function(form){
                form.submit();
                }
            });
        }); 
</script>