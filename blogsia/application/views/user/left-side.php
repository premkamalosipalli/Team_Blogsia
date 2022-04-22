<div class="fixed-sidebar">
  <div class="fixed-sidebar-left sidebar--small" id="sidebar-left">

    <a href="02-ProfilePage.html" class="logo">
      <div class="img-wrap">
       <img src="<?php echo base_url('resources/user/')?>blogsia_logo.jpg"alt="logo">
      </div>
    </a>

    <div class="mCustomScrollbar" data-mcs-theme="dark">
      <ul class="left-menu">
        <li>
          <a href="#" class="js-sidebar-open">
            <svg class="olymp-menu-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="OPEN MENU"><use xlink:href="#olymp-menu-icon"></use></svg>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('user/FeedC');?>">
            <svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip" data-placement="right"   data-original-title="ARTICLES">Articles<use xlink:href="#olymp-newsfeed-icon"></use></svg>
          </a>
        </li>
        <li>
                    <a href="<?php echo site_url('user/UserC');?>">
                        <svg class="olymp-happy-faces-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="User PROFILE">User Profile<use xlink:href="#olymp-happy-faces-icon">User Profile</use></svg>
                    </a>
                </li>
                   <li>
                    <a href="<?php echo site_url('user/LikeC');?>">
                        <svg class="olymp-star-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Liked articles"><use xlink:href="#olymp-star-icon">Liked Articles</use></svg>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('user/SaveC');?>">
                        <svg class="olymp-badge-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Saved Articles"><use xlink:href="#olymp-badge-icon">Saved Articles</use></svg>
                    </a>
                </li>
              <li>
                  <a href="<?php echo site_url('user/SearchC');?>">
                    <svg class="olymp-magnifying-glass-icon left-menu-icon"data-toggle="tooltip" data-placement="right" data-original-title="Search Blogs"><use xlink:href="#olymp-magnifying-glass-icon"></use>Search Blogs</svg>
                  </a>
                </li>
                <li>
              <a href="<?php echo site_url('user/TrendingC');?>">
                  <svg class="olymp-albums-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Trending Articles"><use xlink:href="#olymp-albums-icon">Trending Articles</use></svg>
              </a>
            </li>
                   <li>
                  <a href="<?php echo site_url('user/OfferC');?>">
                    <svg class="olymp-stats-icon left-menu-icon"data-toggle="tooltip" data-placement="right" data-original-title="Company Offers"><use xlink:href="#olymp-stats-icon"></use>Company Offers</svg>
                  </a>
                </li>
      </ul>
    </div>
  </div>

  <div class="fixed-sidebar-left sidebar--large" id="sidebar-left-1">
    <a href="02-ProfilePage.html" class="logo">
      <div class="img-wrap">
        <img src="<?php echo base_url('resources/user/')?>blogsia_logo.jpg"alt="logo" height="60px" width="60px">
      </div>
      <div class="title-block">
        <h6 class="logo-title">Blogsia</h6>
      </div>
    </a>

    <div class="mCustomScrollbar" data-mcs-theme="dark">
      <ul class="left-menu">
                  <li>
                    <a href="#" class="js-sidebar-open">
                      <svg class="olymp-close-icon left-menu-icon"><use xlink:href="#olymp-close-icon"></use></svg>
                      <span class="left-menu-title">Collapse Menu</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo site_url("user/FeedC");?>">
                      <svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip" data-placement="right"   data-original-title="ARTICLES"><use xlink:href="#olymp-newsfeed-icon"></use></svg>
                      <span class="left-menu-title">Articles</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo site_url('user/UserC/');?>">
                        <svg class="olymp-happy-faces-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="EDIT PROFILE"><use xlink:href="#olymp-happy-faces-icon"></use></svg>
                        <span class="left-menu-title">User Profile</span>
                    </a>
                </li>
                   <li>
                    <a href="<?php echo site_url('user/LikeC');?>">
                        <svg class="olymp-star-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Liked Articles"><use xlink:href="#olymp-star-icon"></use></svg>
                         <span class="left-menu-title">Liked Articles</span>
                    </a>
                </li>
                  <li>
                    <a href="<?php echo site_url('user/SaveC');?>">
                        <svg class="olymp-badge-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Saved Articles"><use xlink:href="#olymp-badge-icon"></use></svg>
                       <span class="left-menu-title">Saved Articles</span>
                    </a>
                </li>
                 <li>
                  <a href="<?php echo site_url('user/SearchC');?>">
                    <svg class="olymp-magnifying-glass-icon left-menu-icon"data-toggle="tooltip" data-placement="right" data-original-title="Search Blogs"><use xlink:href="#olymp-magnifying-glass-icon"></use></svg>
                     <span class="left-menu-title">Search Blogs</span>
                  </a>
                </li>
            <li>
              <a href="<?php echo site_url('user/TrendingC');?>">
                  <svg class="olymp-albums-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Trending Articles"><use xlink:href="#olymp-albums-icon"></use></svg>
              <span class="left-menu-title">Trending Articles</span>
              </a>
            </li>
                 <li>
                  <a href="<?php echo site_url('user/OfferC');?>">
                    <svg class="olymp-stats-icon left-menu-icon"data-toggle="tooltip" data-placement="right" data-original-title="Company Offers"><use xlink:href="#olymp-stats-icon"></use></svg>
                      <span class="left-menu-title">Company Offers</span>
                  </a>
            </li>
      </ul>
    </div>
  </div>
</div>

<!-- ... end Fixed Sidebar Left -->

