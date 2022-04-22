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
            <h2>Edit Category</h2>
            
        </div>
        
        <div class="row clearfix top-report">
            
            <div class="col-lg-3 col-sm-6 col-md-6">
        
             <div class="card">
                    
                    <div class="body">
                        <form method=post action="<?php echo site_url("admin/CategoriesC/editcategory/").$catinfo[0]->categoryid;?>" name="editform">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" id="email_address" class="form-control" name=cat value="<?php echo $catinfo[0]->categoryname;?>">
                                    
                                </div>
                            </div>
                            <button type="submit" class="btn btn-raised btn-primary m-t-15 waves-effect" name=add>Edit</button>
                        </form>
                    </div>
                </div>
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
<script type="text/javascript">
     $(document).ready(function(){
    $("form[name='editform']").validate({
      rules:{
       cat:"required"
      },
      messages:{
       cat:"category name should be entered"
      },
        submitHandler:function(form){
                form.submit();
                }
    });
     }); 
</script>