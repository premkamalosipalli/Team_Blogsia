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
            <h2>Dashboard</h2>
            <small class="text-muted">Welcome to Blogsia</small>
        </div>
        
        <div class="row clearfix top-report">
            
            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="card">
                    <div class="body">
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="<?= base_url("resources/admin/user.png")?>" height="70px" width="50px">
                                </div>
                                <div class="col-md-9" style="font-size: 24px; margin-top: 20px;"><b>Total Users</b></div>
                            </div>

                            <center>
                            <h1 style="color:#4682B4;font-size:42px;"><?php echo $countUsers?></h1>
                        </center>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="card">
                    <div class="body">
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="<?= base_url("resources/admin/blog.jpg")?>" height="70px" width="50px">
                                </div>
                                <div class="col-md-9" style="font-size: 24px; margin-top: 20px;"><b>Total Blogs</b></div>
                            </div>

                            <center>
                            <h1 style="color:#4682B4;font-size:42px;"><?php echo $countBlogs?></h1>
                        </center>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="card">
                    <div class="body">
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="<?= base_url("resources/admin/category.jpg")?>" height="70px" width="50px">
                                </div>
                                <div class="col-md-9" style="font-size: 24px; margin-top: 20px;"><b>Total Categories</b></div>
                            </div>

                            <center>
                                <h1 style="color:#4682B4;font-size:42px;"><?php echo $countCategories?></h1>
                            </center>
                        </div>
                    </div>
                </div>

            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="card">
                    <div class="body">
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="<?= base_url("resources/admin/company.jpg")?>" height="70px" width="50px">
                                </div>
                                <div class="col-md-9" style="font-size: 24px; margin-top: 20px;"><b>Total Companies</b></div>
                            </div>

                            <center>
                            <h1 style="color:#4682B4;font-size:42px;"><?php echo $countCompanies?></h1>
                        </center>
                    </div>
                </div>
            </div>
            </div>           
        </div>                

          <div class="row clearfix"> 
            <!-- Task Info -->
            <div class="col-sm-12 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2><b>BLOG INFOS</b></h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover dashboard-task-infos">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Blog</th>
                                        <th>User</th>
                                        <th>Posted On</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $cnt=0;
                                    foreach ($blog as $key) 
                                    {
                                        $cnt++;
                                        ?>
                                        <tr>
                                            <td><?=$cnt;?></td>
                                            <td><?=$key->articletitle;?></td>
                                            <td><span class="label bg-green" style="font-size: 13px;"><?=$key->username;?></span></td>
                                            <td><?=$key->createdt;?></td>
                                            <!-- <td><?=$key->cdata1->price;?></td> -->
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Task Info --> 
        </div>


        <div class="row clearfix">
            <div class="col-sm-12 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2><b>CATEGORY WISE BLOGS INFO</b></h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover dashboard-task-infos">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Category</th>
                                        <th>Sub Category</th>
                                        <th>Blog</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $cnt=0;
                                    foreach ($category as $key) 
                                    {
                                        $cnt++;
                                        ?>
                                        <tr>
                                            <td><?=$cnt;?></td>
                                            <td><?=$key->categoryname;?></td>
                                            <td><?=$key->subcatname;?></td>
                                            <td><?=$key->articletitle;?></td>
                                            <!-- <td><?=$key->cdata1->price;?></td> -->
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
</section>
<!-- main content -->

<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
    
        <div class="modal-content">
        <form method=post> 
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Add Category</h4>
            </div>
            <div class="modal-body"> 
            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" id="email_address" class="form-control" name=cat>
                                    <label class="form-label">Category</label>
                                </div>
            </div>
            </div>
            <div class="modal-footer">
                <button type="submit" id="add" class="btn btn-link waves-effect">Add</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </form>
        </div>
        
    </div>
</div>
<div class="color-bg"></div>
<?php include_once('bottomscripts.php');?>
<!-- Jquery Core Js --> 
</body>

<!-- Mirrored from thememakker.com/templates/swift/university/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Apr 2019 09:37:46 GMT -->
</html>
<script type="text/javascript">
    $("#add").click(function(){
        $(".modal-content form").attr("action","<?php echo site_url("admin/CategoriesC/addcategory");?>");    
    });

</script>