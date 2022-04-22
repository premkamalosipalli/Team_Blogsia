   <aside id="leftsidebar" class="sidebar"> 
        <!-- User Info -->
        <div class="user-info">
            <div class="admin-image"> <img src="<?php echo base_url("upload/admin/").$_SESSION['pic'];?>" alt=""> </div>
            <div class="admin-action-info"> <span>Welcome</span>
                <h3><?php echo $_SESSION['aname']; ?></h3>
                <ul>
                    
                    <li><a data-placement="bottom" title="Edit profile" href="<?php echo site_url('admin/AdminC/editprofile'); ?>"><i class="zmdi zmdi-account"></i></a></li>                    
                    <li><a href="javascript:void(0);" title="Settings" class="js-right-sidebar" data-close="true"><i class="zmdi zmdi-settings"></i></a></li>
                    <li><a data-placement="bottom" title="Logout" href="<?php echo site_url("admin/LogoutC");?>" ><i class="zmdi zmdi-sign-in"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- #User Info --> 
        <!-- Menu -->
     
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                <li class="active open"><a href="<?php echo site_url("admin/AdminC/loadDashboard")?>"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account"></i><span>Admin</span> </a>
                    <ul class="ml-menu">
                        <li><a href="<?php echo site_url('admin/AdminC')?>">All Admin</a></li>
                        <li><a href="<?php echo site_url('admin/AdminC/loadaddadmin')?>">Add Admin</a></li>                       
                        
                    </ul>
                </li>                
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-accounts-outline"></i><span>Users</span> </a>
                    <ul class="ml-menu">
                        <li><a href="<?php echo site_url('admin/UserC')?>">All Users</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-graduation-cap"></i><span>Categories</span> </a>
                    <ul class="ml-menu">
                        <li><a href="<?php echo site_url('admin/CategoriesC')?>">All Categories</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-book"></i><span>Companies</span> </a>
                    <ul class="ml-menu">
                        <li><a href="<?php echo site_url('admin/CompanyC')?>">All Companies</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-city-alt"></i><span>Blogs</span> </a>
                    <ul class="ml-menu">
                        <li><a href="<?php echo site_url('admin/BlogC')?>">All Blogs</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-mood"></i><span>Partnership</span> </a>
                    <ul class="ml-menu">
                        <li><a href="<?php echo site_url('admin/PartnershipC')?>">Partnership Offers</a></li>
                        <li><a href="<?php echo site_url('admin/PartnershipResponseC')?>">Partnership Response</a></li>                       
                    </ul>
                </li>
            </ul>
        </div>       
        <!-- #Menu -->
    </aside>