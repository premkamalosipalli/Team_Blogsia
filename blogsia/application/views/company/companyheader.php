<div class="fixed-sidebar">
 <a href="<?php echo site_url("company/OfferC/")?>" class="logo">
      <div style="background-color:black;">
        <img src="<?php echo base_url('resources/user/')?>blogsia_logo.jpg"alt="logo">
      <link rel="icon" href=>
      </div>

    </a>
</div>
 

  <div class="header-content-wrapper">
    <div class="control-block">
       <div class="author-page author vcard inline-items more">
      </div>

      <div class="author-page author vcard inline-items more">
        <div class="author-thumb">
          <i class="fab fa-artstation" style="font-size:30px"> </i>
          <div class="more-dropdown more-with-triangle">
            <div class="mCustomScrollbar" data-mcs-theme="dark">
              <div class="ui-block-title ui-block-title-small">
                <h6 class="title">Your Account</h6>
              </div>
                <ul class="account-settings">
                                  <li>                 
                  <a href="<?php echo site_url('company/ManageProfileC/loadManageProfile');?>">
                    <svg><use xlink:href="#olymp-happy-faces-icon"></use></svg>
                        <span class="left-menu-title">ManageProfile</span>
                  </a>
                </li>
                <li>                 
                  <a href="<?php echo site_url('company/LogoutC');?>">
                    <svg><use xlink:href="#olymp-logout-icon"></use></svg>
                        <span class="left-menu-title">Log Out</span>
                  </a>
                </li>

              </ul>
            </div>
          </div>
        </div>
        <a class="author-name fn">
          <div class="author-content">
            <p class="h6 author-name" style="color:white;"><?php echo $this->session->companyname?></p>
              
            </div>
        </a>
      </div>
    </div>
  </div>
