  <div class="header-content-wrapper">

    <div class="control-block">

      <div class="author-page author vcard inline-items more">
        <div class="author-thumb">
          <img alt="author" src="<?php echo base_url("upload/user/").$_SESSION['profilepic']?>" style="height: 50px;width: 50px" class="avatar">
         
          <div class="more-dropdown more-with-triangle">
            <div class="mCustomScrollbar" data-mcs-theme="dark">
              <div class="ui-block-title ui-block-title-small">
                <h6 class="title">Your Account</h6>
              </div>

              <ul class="account-settings">
                <li>
                    <a href="<?php echo site_url("user/ManageProfileC/loadManageProfile")?>">
                      <svg><use xlink:href="#olymp-happy-face-icon"></use></svg>
                      <span class="left-menu-title">Manage Profile</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo site_url('user/LogoutC');?>">
                        <svg><use xlink:href="#olymp-logout-icon"></use></svg>
                        <span class="left-menu-title">Log Out</span>
                    </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <a class="author-name fn">
          <div class="author-title">
            <?php echo $this->session->username?> <svg class="olymp-dropdown-arrow-icon"><use xlink:href="#olymp-dropdown-arrow-icon"></use></svg>
          </div>
          
        </a>
      </div>
    </div>
  </div>
