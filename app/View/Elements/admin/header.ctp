<style>
    #header{background:#cecece !important}
</style><div id="header">
    <a href="javascript:void(0)"><img style="width:20%" src="<?php echo $this->webroot; ?>img/logo.png"></a>
    <div id="head_lt">
        <!--Logo Start from Here-->
        <span class="floatleft logo">

        </span>
        <!--Logo end  Here-->
    </div>
    <?php
    if (!empty($SESS_ADMIN_USERID)) {
        ?>
        <div id="head_rt">Welcome <span><?php echo $SESS_ADMIN_USERNAME; ?></span>&nbsp;&nbsp;|&nbsp;&nbsp;<?php echo date('d M, Y H:i A'); ?></div>
        <?php
    }
    ?>
</div>

<?php
if (!empty($SESS_ADMIN_USERID)) {
    ?>
    <div class="menubg">
        <div class="nav">
            <ul id="navigation">
                <li onmouseout="this.className = ''" onmouseover="this.className = 'hov'">
    <?php echo $this->Html->link('Dashboard', '/admin/'); ?>
                </li>
                <li onmouseover="this.className = 'hov'" onmouseout="this.className = ''">
    <?php echo $this->Html->link('Manage', array('controller' => 'users', 'action' => 'manage', 'admin' => true), array('title' => 'Users Listing')); ?>
                    <div class="sub">
                        <ul>
                            <li><?php echo $this->Html->link('Manage Users', array('controller' => 'users', 'action' => 'manage', 'admin' => true), array('title' => 'Users Listing')); ?></a></li>
                            <!--<li><?php echo $this->Html->link('Manage News', array('controller' => 'news', 'action' => 'manage', 'admin' => true), array('title' => 'Users Listing')); ?></a></li>-->
                            <li><?php echo $this->Html->link('Manage Breeds', array('controller' => 'breeds', 'action' => 'manage', 'admin' => true), array('title' => 'Manage Breeds')); ?></a></li>	
                            <li><?php echo $this->Html->link('Manage Shop', array('controller' => 'shop', 'action' => 'manage', 'admin' => true), array('title' => 'Manage Shop')); ?></a></li>					
                            <li><?php echo $this->Html->link('Manage Shows', array('controller' => 'shows', 'action' => 'manage', 'admin' => true), array('title' => 'Manage Shows')); ?></a></li>
                            <li><?php echo $this->Html->link('Manage News/Forum', array('controller' => 'forums', 'action' => 'manage', 'admin' => true), array('title' => 'Manage Forums')); ?></a></li>
                            <li><?php echo $this->Html->link('MANAGE BANNERS', array('controller' => 'users', 'action' => 'banners', 'admin' => true), array('title' => 'Manage Forums')); ?></a></li>
                        </ul>
                    </div>
                </li>

                <li onmouseout="this.className = ''" onmouseover="this.className = 'hov'">
    <?php echo $this->Html->link('Settings', 'javascript:void(0)'); ?>
                    <div class="sub">
                        <ul>
                            <li><?php echo $this->Html->link('Change Password', array('controller' => 'users', 'action' => 'change_password', 'admin' => true), array('title' => 'Change Password')); ?></a></li>
                        </ul>
                    </div>
                </li>
              <!--  <li onmouseout="this.className = ''" onmouseover="this.className = 'hov'">
                    <a href="../../../Messages">Messages</a> -->
                </li>					
            </ul>
        </div>
        <div class="logout"><?php echo $this->Html->link($this->Html->image(ADMIN_IMAGES_PATH . 'logout.gif'), array('controller' => 'users', 'action' => 'admin_logout'), array('escape' => false)); ?></div>
    </div>
    <?php
}
?>
