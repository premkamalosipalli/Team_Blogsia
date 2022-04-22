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
            <h2>Categories</h2>
            <small class="text-muted">Welcome to Blogsia</small>
        </div>
  <button type="button" class="btn bg-blush waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal"><i class="zmdi zmdi-plus"> </i>Tags</button>
        <div class="row clearfix top-report">
                   <div class="body table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable" style="background-color: white">
                            <thead>
                                <tr>
                                    <th>TagName</th>
                                    <th>SubCategoryName</th>
                                    <th> </th>
                                    <th> </th>
                                </tr>
                            </thead>                            
                            <tbody>
                             <?php 
                             foreach ($tagsinfo as $t) {
                             ?>
                             <tr>
                               <td><?php echo $t->tagname;?></td>
                               <td><?php echo $t->subcatname;?></td>  
                               <td><a href="<?php echo site_url("admin/TagsC/removetags/$t->tagid/$t->subcatid"); ?>"><i class="material-icons"> delete</i> 
                               </a></td>
                               <td><a href="<?php echo site_url("admin/TagsC/loadedittags/$t->tagid/$t->subcatid");?>"><i class="material-icons"> edit</i> 
                               </a></td>
                               
                             </tr>
                             <?php
                             }
                             ?>                                
                            </tbody>
                        </table>
                    </div>
             </div>
              
        

  </div>

</section>
<!-- main content -->
<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
    
        <div class="modal-content">
        <form method=post name="tag-form"> 
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Add Tag</h4>
            </div>
            <div class="modal-body"> 
            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" id="email_address" class="form-control" name=tag>
                                    <label class="form-label">Tags</label>
                                </div>
            </div>
            </div>
            <div class="modal-footer">
                <button type="submit" id="add" class="btn btn-link waves-effect" onclick="add()">Add</button>
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
    $(document).ready(function(){
    $("#add").click(function(){
        $(".modal-content form").attr("action","<?php echo site_url("admin/TagsC/addtags/").$subcatid;?>");    
    });

    $("form[name='tag-form']").validate({
      rules:{
       tag:"required"
      },
      messages:{
       tag:"Tag should be entered"
      },
        submitHandler:function(form){
                form.submit();
                }
    });
 });

</script>