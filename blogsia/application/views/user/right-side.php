
<div class="fixed-sidebar right">
    <div class="fixed-sidebar-right sidebar--small" id="sidebar-right">

        <div class="mCustomScrollbar" data-mcs-theme="dark">
        <ul class="chat-users">
            <?php 
            foreach($followers as $f)
            {
            ?>
                <li class="inline-items js-chat-open">

                    <div class="author-thumb">
                        <img alt="author" src="<?php echo base_url("upload/user/").$f->profilepic?>" style="height: 40px;width:40px"class="avatar">
                        <span class="icon-status online"></span>
                    </div>
                    </li>
                    <?php 

                }
                ?>
                    </ul>    
        </div>

        <div class="search-friend inline-items">
            <a href="#" class="js-sidebar-open">
                <svg class="olymp-menu-icon"><use xlink:href="#olymp-menu-icon"></use></svg>
            </a>
        </div>

        <a href="#" class="olympus-chat inline-items js-chat-open">
            <svg class="olymp-chat---messages-icon"><use xlink:href="#olymp-chat---messages-icon"></use></svg>
        </a>

    </div>

    <div class="fixed-sidebar-right sidebar--large" id="sidebar-right-1">

        
<div class="mCustomScrollbar" data-mcs-theme="dark">
        <ul class="chat-users">
            <?php 
            foreach($followers as $f)
            {
            ?>
                <li class="inline-items js-chat-open">

                    <div class="author-thumb">
                        <img alt="author" src="<?php echo base_url("upload/user/").$f->profilepic?>" style="height: 40px;width:40px"class="avatar"> 
                        <span class="icon-status online"></span>
                    </div>
                    <div style="font-size:15px"> 
<?php echo $f->username?>
                    </div>
                    </li>
                    <?php 

                }
                ?>
                    </ul>    
        </div>

    </div>
</div>



<div class="fixed-sidebar right fixed-sidebar-responsive" id="sidebar-right-responsive">

    <div class="fixed-sidebar-right sidebar--small">
<div class="mCustomScrollbar" data-mcs-theme="dark">
        <ul class="chat-users">
            <?php 
            foreach($followers as $f)
            {
            ?>
                <li class="inline-items js-chat-open">

                    <div class="author-thumb">
                        <img alt="author" src="<?php echo base_url("upload/user/").$f->profilepic?>" style="height: 40px;width:40px"class="avatar">
                        <span class="icon-status online"></span>
                    </div>
                    </li>
                    <?php 

                }
                ?>
                    </ul>    
        </div>

        <a href="#" class="js-sidebar-open">
            <svg class="olymp-menu-icon"><use xlink:href="#olymp-menu-icon"></use></svg>
            <svg class="olymp-close-icon"><use xlink:href="#olymp-close-icon"></use></svg>
        </a>
    </div>

</div>