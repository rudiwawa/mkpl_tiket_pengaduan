<div class="page-sidebar-wrapper">
                <!-- BEGIN SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="100" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed="100" to adjust the sub menu slide up/down speed -->
                    <ul class="page-sidebar-menu   " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="100">
                        <li class="nav-item start <?php echo ($this->uri->segment(1) == 'C_admin' && $this->uri->segment(2)=='admin_view')||(($this->uri->segment(1) == 'C_admin') && ($this->uri->segment(2) == '')) ? 'active open' : '' ?>">
                        <a href="<?php echo site_url('C_admin') ?>">
                                <i class="fa fa-home"></i>
                                <span class="title">Home</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                        <li class="nav-item <?php echo $this->uri->segment(2) == 'category' || $this->uri->segment(2) == 'client'|| $this->uri->segment(2) == 'edit_category' || $this->uri->segment(2) == 'edit_context'|| $this->uri->segment(2) == 'new_context' ? 'active open' : '' ?>">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-settings"></i>
                                <span class="title">Context Management</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                            <li class="nav-item  <?php echo $this->uri->segment(2) == 'category' || $this->uri->segment(2) == 'edit_category' ? 'active open' : '' ?>">
                                    <a href="<?php echo site_url('C_admin/category') ?>" class="nav-link ">
                                        <span class="title">Edit Category</span>
                                    </a>
                                </li>
                                <li class="nav-item  <?php echo $this->uri->segment(2) == 'client' || $this->uri->segment(2) == 'edit_context' || $this->uri->segment(2) == 'new_context'? 'active open' : '' ?>"">
                                    <a href="<?php echo site_url('C_admin/client') ?>" class="nav-link ">
                                        <span class="title"> Client Page</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item <?php echo $this->uri->segment(1) == 'C_tiket_admin' ? 'active open' : '' ?>">
                            <a href="<?php echo site_url('C_tiket_admin') ?>">
                                <i class="fa fa-ticket"></i>
                                <span class="title">Ticket</span>
                            </a>
                        </li>
                        <li class="nav-item <?php echo $this->uri->segment(1) == 'C_user_admin' ? 'active open' : '' ?>">
                        <a href="<?php echo site_url('C_user_admin') ?>">
                                <i class="fa fa-users"></i>
                                <span class="title">Users</span>
                            </a>
                        </li>
                        <li class="nav-item <?php echo $this->uri->segment(1) == 'C_department_admin' ? 'active open' : '' ?>">
                        <a href="<?php echo site_url('C_department_admin') ?>">
                                <i class="fa fa-building"></i>
                                <span class="title">Departments</span>
                            </a>
                        </li>
                        <li class="nav-item <?php echo $this->uri->segment(1) == 'C_news_admin' ? 'active open' : '' ?>">
                            <a href="<?php echo site_url('C_news_admin') ?>" class="nav-link nav-toggle">
                                <i class="fa fa-newspaper-o"></i>
                                <span class="title">News</span>
                            </a>
                        </li>
                        <li class="nav-item <?php echo $this->uri->segment(1) == 'C_performa' ? 'active open' : '' ?>">
                            <a href="<?php echo site_url('C_performa') ?>" class="nav-link nav-toggle">
                                <i class="fa fa-line-chart"></i>
                                <span class="title">Peformance</span>
                            </a>
                        </li>   
                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>