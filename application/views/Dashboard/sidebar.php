<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel" style="height: 100px;">
            <div class="pull-left info">
                <p> <?= $this->session->userdata('fullName')?$this->session->userdata('fullName'):''?></p>
                <a href="#"><i class="fa fa-circle text-success"></i>Online</a>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="<?= $active == 'dashboard' ? 'active' : '' ?>">
                <a href="#">
                    <i class="fa fa-th-large"></i> <span>Dashboard</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>

                </a>

            </li>
            <li class="<?= $active == 'customers' ? 'active' : '' ?>">
                <a href="<?php echo site_url('dashboard/customers'); ?>">
                    <i class="fa fa-th-large"></i> <span>Customers</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>

                </a>

            </li>
            <li class="<?= $active == 'booking' ? 'active' : '' ?>">
                <a href="<?php echo site_url('dashboard/booking'); ?>">
                    <i class="fa fa-th-large"></i> <span>Booking</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>

                </a>

            </li>
            <!------- Manage Category --->
            <li class="<?= $active == 'category' ? 'active' : '' ?>">
                <a href="<?php echo site_url('dashboard/category'); ?>">
                    <i class="fa fa-th-large"></i> <span>Category</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>

                </a>

            </li>
        <!--------- Manage Blogs ------>
        <li class="<?= $active == 'blog' ? 'active' : '' ?>">
                <a href="<?php echo site_url('dashboard/blogs'); ?>">
                    <i class="fa fa-th-large"></i> <span>Blogs</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>

                </a>

            </li>
            <!--------- Manage Services ------>
        <li class="<?= $active == 'services' ? 'active' : '' ?>">
                <a href="<?php echo site_url('dashboard/services'); ?>">
                    <i class="fa fa-th-large"></i> <span>Services</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>

                </a>

            </li>
         <!------ Settings ------- -->
         <li class="<?= $active == 'settings' ? 'active' : '' ?> treeview">
                <a href="#">
                    <i class="fa fa-truck"></i> <span>Settings</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                    <ul class="treeview-menu">
                        <li class="<?= $active == 'Logo' ? 'active' : '' ?>"><a href="<?php echo site_url('dashboard/logo'); ?>"><i class="fa fa-circle-o"></i>Logo</a></li>
                         <li class="<?= $active == 'Slider' ? 'active' : '' ?>"><a href="<?php echo site_url('dashboard/slider'); ?>"><i class="fa fa-circle-o"></i>Slider</a></li>
                         <li style="display:none;" class="<?= $active == 'Company Address' ? 'active' : '' ?>"><a href="<?php echo site_url('orders/archiveorders'); ?>"><i class="fa fa-circle-o"></i>Archive Orders</a></li>

                    </ul>
                </a>

            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>