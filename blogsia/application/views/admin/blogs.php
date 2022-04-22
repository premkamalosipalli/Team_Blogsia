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
            <h2>Blogs</h2>
            <small class="text-muted">Welcome to Blogsia</small>
        </div>
<!--         <a href="<?php echo site_url("admin/CategoriesC/loadaddcategory");?>"><button class="btn btn-raised btn-primary m-t-15 waves-effect"><i class="zmdi zmdi-plus"> </i> Category</button> </a>  -->

        <div class="row clearfix top-report">
        <?php 
         foreach ($binfo as $b) {
                ?>
                   <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="card">
                    <div class="body">
                        <div class="member-card row">                           
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="member-thumb m-b-20">
                                    <img src="<?php echo base_url("upload/blogs/").$b->featuredimage?>" alt="profile-image" style="height: 90px;width:80px;border:5px solid black;border-radius: 500px" >                                    
                                </div>

                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-12">
                                <div class="s-profile">
                                    <h4 class="m-b-0"><?php echo $b->articletitle?></h4>
                                    <br>
                                    <p class="">Created on : <?php echo $b->createdt?></p>
                                    <p class="m-b-0">Created By : <?php echo $b->username?></p> 
                                    <br>                          
                                    <div class="panel-group" id="accordion_1" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading" role="tab" id="headingOne_1">
                                            <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapse<?php echo $b->articleid?>" aria-expanded="true" aria-controls="collapse<?php echo $b->articleid?>" class="" align="center"> View More </a> </h4>
                                        </div>
                                        <div id="collapse<?php echo $b->articleid?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_1">
                                        <center>     
                                        <div class="panel-body"><?php echo $b->description ?> </div>
                                        <p>Category : <?php echo $b->categoryname ?> </p>
                                        <p>SubCategory : <?php echo $b->subcatname ?> </p>
                                        <div class="switch">
                                                <label>
                                                    <input type="checkbox" class="status-group" data-id="<?php echo $b->articleid ?>" <?php 
                                                    if($b->status == 1)
                                                        echo "checked";
                                                    ?>>
                                                    <span class="lever"></span>
                                                </label>
                                            </div                                        
                                        </center>
                                        </div>

                                    </div>
                        </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
               <?php
            }   
        ?>
        

</div>

</div>

</section>

<div class="color-bg"></div>
<?php include_once('bottomscripts.php');?>
<!-- Jquery Core Js --> 
</body>

<!-- Mirrored from thememakker.com/templates/swift/university/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Apr 2019 09:37:46 GMT -->
</html>
<script type="text/javascript">
    $(".status-group").change(function(){
        var id=$(this).data("id");
        $.ajax({
            url : "<?= site_url("admin/BlogC/statusChange/")?>"+id,
            success: function(result){              
            }
        });
    });
</script>