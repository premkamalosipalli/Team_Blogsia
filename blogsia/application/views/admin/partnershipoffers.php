<!DOCTYPE html>
<html>

<!-- Mirrored from thememakker.com/templates/swift/university/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Apr 2019 09:37:14 GMT -->
<head>
<title>Blogsia</title>
<link rel="icon" href="<?php echo base_url('resources/user/')?>blogsia_logo.jpg">
<?php include_once('topscripts.php');?>
<!-- JQuery DataTable Css -->
<link href="<?php echo base_url("resources/admin/");?>assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
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
           
            <small class="text-muted">Welcome to Blogsia</small>
        </div> 
        
                        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                      <h2>Partnership Offers</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                                <tr>
                                     
                                    <th>Offer ID</th>
                                    <th>Company Name</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Minimum Price</th>
                                    <th>Maximum Price</th>
                                    <th>Minimum Followers</th>
                                    <th>Maximum Followers</th>
                                </tr>
                            </thead>                            
                            <tbody>
                                <?php 
                             foreach ($offers as $o) {
                             ?>
                             <tr>
                               <td><?php echo $o->offerid;?></td>
                               <td><?php echo $o->companytitle;?></td>
                               <td><?php echo $o->title;?></td>
                               <td><?php echo $o->description;?></td>
                               <td><?php echo $o->minprice;?></td>
                               <td><?php echo $o->maxprice;?></td>
                               <td><?php echo $o->minfollowers;?></td>
                               <td><?php echo $o->maxfollowers;?></td>
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

</section>
<!-- main content -->

<div class="color-bg"></div>
<!-- Jquery Core Js --> 
<script src="<?php echo base_url("resources/admin/"); ?>assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="<?php echo base_url("resources/admin/"); ?>assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="<?php echo base_url("resources/admin/"); ?>assets/bundles/morphingsearchscripts.bundle.js"></script> <!-- Main top morphing search --> 

<!-- Jquery DataTable Plugin Js --> 
<script src="<?php echo base_url("resources/admin/"); ?>assets/bundles/datatablescripts.bundle.js"></script>
<script src="<?php echo base_url("resources/admin/"); ?>assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url("resources/admin/"); ?>assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url("resources/admin/"); ?>assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js"></script>
<script src="<?php echo base_url("resources/admin/"); ?>assets/plugins/jquery-datatable/buttons/buttons.flash.min.js"></script>
<script src="<?php echo base_url("resources/admin/"); ?>assets/plugins/jquery-datatable/buttons/buttons.html5.min.js"></script>
<script src="<?php echo base_url("resources/admin/"); ?>assets/plugins/jquery-datatable/buttons/buttons.print.min.js"></script> 

<script src="<?php echo base_url("resources/admin/"); ?>assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 
<script src="<?php echo base_url("resources/admin/"); ?>assets/js/pages/tables/jquery-datatable.js"></script>
</body>

<!-- Mirrored from thememakker.com/templates/swift/university/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Apr 2019 09:37:46 GMT -->
</html>