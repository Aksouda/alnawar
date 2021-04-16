<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            <li class="sidebar-toggler-wrapper hide">
                <div class="sidebar-toggler">
                    <span></span>
                </div>
            </li>
            <!-- END SIDEBAR TOGGLER BUTTON -->
            <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
            <li class="sidebar-search-wrapper">
                <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
                <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
                <!--                <form class="sidebar-search  " action="page_general_search_3.html" method="POST">-->
                <!--                    <a href="javascript:;" class="remove">-->
                <!--                        <i class="icon-close"></i>-->
                <!--                    </a>-->
                <!--                    <div class="input-group">-->
                <!--                        -->
                <!--                        <span class="input-group-btn">-->
                <!--                                            <a href="javascript:;" class="btn submit">-->
                <!--                                                <i class="icon-magnifier"></i>-->
                <!--                                            </a>-->
                <!--                                        </span>-->
                <!--                    </div>-->
                <!--                </form>-->
                <!-- END RESPONSIVE QUICK SEARCH FORM -->
            </li>
            <?php
            $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $url=base_url().'Dashborad';
            if($actual_link==$url) { ?>
                <li class="nav-item start active">
                    <a href="<?php echo base_url('Dashborad')?>" class="nav-link">
                        <i class="icon-home"></i>
                        <span class="title">Dashboard</span>
                        <span class="selected"></span>
                        <span class="arrow"></span>
                    </a>
                </li>
            <?php }  else { ?>
                <li class="nav-item start">
                    <a href="<?php echo base_url('Dashborad')?>" class="nav-link">
                        <i class="icon-home"></i>
                        <span class="title">Dashboard</span>
                        <span class="selected"></span>
                        <span class="arrow"></span>
                    </a>
                </li>
            <?php }?>

            <li class="heading">
                <h3 class="uppercase">Manage</h3>
            </li>
            <?php
            $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $url1=base_url().'users';
            $url2=base_url().'users?flag=yes';
            if($actual_link==$url1) { ?>
                <li class="nav-item active ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-user"></i>
                        <span class="title">Manage User</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">

                        <li class="nav-item active ">
                            <a href="<?php echo base_url('users'); ?>" class="nav-link ">
                                <span class="title">All Users</span>
                            </a>
                        </li>
                    </ul>
                </li>
            <?php } elseif($actual_link==$url2) {?>
                <li class="nav-item active ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-user"></i>
                        <span class="title">Manage User</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">

                        <li class="nav-item  ">
                            <a href="<?php echo base_url('users'); ?>" class="nav-link ">
                                <span class="title">All Users</span>
                            </a>
                        </li>
                    </ul>
                </li> <?php } else { ?>
                <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-user"></i>
                        <span class="title">Manage User</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">

                        <li class="nav-item  ">
                            <a href="<?php echo base_url('users'); ?>" class="nav-link ">
                                <span class="title">All Users</span>
                            </a>
                        </li>
                    </ul>
                </li>
            <?php }?>
            <?php
            $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $url_size=base_url().'size';
            if($actual_link==$url_size){ ?>
                <li class="nav-item active ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="glyphicon glyphicon-sort-by-attributes-alt"></i>
                        <span class="title">Manage Size</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">

                        <li class="nav-item active ">
                            <a href="<?php echo base_url('size'); ?>" class="nav-link ">
                                <span class="title">All Size</span>
                            </a>
                        </li>
                    </ul>
                </li>
            <?php }
            elseif ($actual_link==base_url().'Add_Size'){
                ?>
                <li class="nav-item active ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="glyphicon glyphicon-sort-by-attributes-alt"></i>
                        <span class="title">Manage Size</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">

                        <li class="nav-item active ">
                            <a href="<?php echo base_url('size'); ?>" class="nav-link ">
                                <span class="title">All Size</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <?php
            }
            else
            { ?>
                <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="glyphicon glyphicon-sort-by-attributes-alt"></i>
                        <span class="title">Manage Size</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">

                        <li class="nav-item  ">
                            <a href="<?php echo base_url('size'); ?>" class="nav-link ">
                                <span class="title">All Size</span>
                            </a>
                        </li>
                    </ul>
                </li>
            <?php }?>
            <?php
            $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $url_size=base_url().'Product_order';
            if($actual_link==$url_size) { ?>
                <li class="nav-item active ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="fa fa-shopping-cart"></i>
                        <span class="title">Manage order</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">

                        <li class="nav-item active ">
                            <a href="<?php echo base_url('Product_order'); ?>" class="nav-link ">
                                <span class="title">Manage order</span>
                            </a>
                        </li>
                    </ul>
                </li>
            <?php }
            else
            { ?>
                <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="fa fa-shopping-cart"></i>
                        <span class="title">Manage order</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">

                        <li class="nav-item  ">
                            <a href="<?php echo base_url('Product_order'); ?>" class="nav-link ">
                                <span class="title">Manage order</span>
                            </a>
                        </li>
                    </ul>
                </li>
            <?php }?>
            <?php
            $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $url_size=base_url().'Manage_Category';
            if($actual_link==$url_size) { ?>
                <li class="nav-item active ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="fa fa-list"></i>
                        <span class="title">Manage category</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">

                        <li class="nav-item active ">
                            <a href="<?php echo base_url('Manage_Category'); ?>" class="nav-link ">
                                <span class="title">Manage category</span>
                            </a>
                        </li>
                    </ul>
                </li>
            <?php }
            else
            { ?>
                <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="fa fa-list"></i>
                        <span class="title">Manage category</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">

                        <li class="nav-item  ">
                            <a href="<?php echo base_url('Manage_Category'); ?>" class="nav-link ">
                                <span class="title">Manage category</span>
                            </a>
                        </li>
                    </ul>
                </li>
            <?php }?>
            <?php
            $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $url_tag=base_url().'Tag';
            if($actual_link==$url_tag) { ?>
                <li class="nav-item active ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-tag"></i>
                        <span class="title">Manage Tag</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">

                        <li class="nav-item active ">
                            <a href="<?php echo base_url('size'); ?>" class="nav-link ">
                                <span class="title">All Tag</span>
                            </a>
                        </li>
                    </ul>
                </li>
            <?php }
            else
            { ?>
                <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-tag"></i>
                        <span class="title">Manage Tag</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">

                        <li class="nav-item  ">
                            <a href="<?php echo base_url('Tag'); ?>" class="nav-link ">
                                <span class="title">All Tag</span>
                            </a>
                        </li>
                    </ul>
                </li>
            <?php }?>
            <?php
            $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $url_brand=base_url().'Brand';
            if($actual_link==$url_brand) { ?>
                <li class="nav-item active ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="glyphicon glyphicon-ok"></i>
                        <span class="title">Manage Brand</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">

                        <li class="nav-item active ">
                            <a href="<?php echo base_url('Brand'); ?>" class="nav-link ">
                                <span class="title">All Brand</span>
                            </a>
                        </li>
                    </ul>
                </li>
            <?php }
            else
            { ?>
                <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="glyphicon glyphicon-ok"></i>
                        <span class="title">Manage Brand</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">

                        <li class="nav-item  ">
                            <a href="<?php echo base_url('Brand'); ?>" class="nav-link ">
                                <span class="title">All Brand</span>
                            </a>
                        </li>
                    </ul>
                </li>
            <?php }?>

            <?php
            $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $url_product=base_url().'Product';
            if($actual_link==$url_product) { ?>
                <li class="nav-item active ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-graph"></i>
                        <span class="title">Manage product</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">

                        <li class="nav-item active ">
                            <a href="<?php echo base_url('Product'); ?>" class="nav-link ">
                                <span class="title">All Product</span>
                            </a>
                        </li>
                    </ul>
                </li>
            <?php }
            else
            { ?>
                <li class="nav-item">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-graph" aria-hidden="true"></i>
                        <span class="title">Manage Product</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">

                        <li class="nav-item  ">
                            <a href="<?php echo base_url('Product'); ?>" class="nav-link ">
                                <span class="title">All Product</span>
                            </a>
                        </li>
                    </ul>
                </li>
            <?php }?>
            <?php
            $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $url_product=base_url().'Reviews';
            if($actual_link==$url_product) { ?>
                <li class="nav-item active ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="fa fa-signal"></i>
                        <span class="title">Mange Testimonial</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">

                        <li class="nav-item active ">
                            <a href="<?php echo base_url('Review'); ?>" class="nav-link ">
                                <span class="title">Testimonial</span>
                            </a>
                        </li>
                    </ul>
                </li>
            <?php }
            else
            { ?>
                <li class="nav-item">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="fa fa-signal"></i>
                        <span class="title">Mange Testimonial</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">

                        <li class="nav-item  ">
                            <a href="<?php echo base_url('Reviews'); ?>" class="nav-link ">
                                <span class="title">Testimonial</span>
                            </a>
                        </li>
                    </ul>
                </li>
            <?php }?>
            <?php
            $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $url_product=base_url().'Questions';
            if($actual_link==$url_product) { ?>
                <li class="nav-item active ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="fa fa-question-circle"></i>
                        <span class="title">Manage FAQ</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">

                        <li class="nav-item active ">
                            <a href="<?php echo base_url('Questions'); ?>" class="nav-link ">
                                <span class="title">FAQ</span>
                            </a>
                        </li>
                    </ul>
                </li>
            <?php }
            else
            { ?>
                <li class="nav-item">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="fa fa-question-circle"></i>
                        <span class="title">Manage FAQ</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">

                        <li class="nav-item  ">
                            <a href="<?php echo base_url('Questions'); ?>" class="nav-link ">
                                <span class="title">FAQ</span>
                            </a>
                        </li>
                    </ul>
                </li>
            <?php }?>
            <?php
            $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $url_product=base_url().'Terms_And_Conditions';
            if($actual_link==$url_product) { ?>
                <li class="nav-item active ">
                    <a href="<?php echo base_url('Terms_And_Conditions'); ?>" class="nav-link nav-toggle">
                        <i class="fa fa-pencil"></i>
                        <span class="title">Terms And Conditions</span>
                    </a>
                </li>
            <?php }
            else
            { ?>
                <li class="nav-item">
                    <a href="<?php echo base_url('Terms_And_Conditions'); ?>" class="nav-link nav-toggle">
                        <i class="fa fa-pencil"></i>
                        <span class="title">Terms And Conditions</span>
                    </a>
                </li>
            <?php }?>
            <?php
            $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $url_product=base_url().'Privacy_policy';
            if($actual_link==$url_product) { ?>
                <li class="nav-item active ">
                    <a href="<?php echo base_url('Privacy_policy'); ?>" class="nav-link nav-toggle">
                        <i class="fa fa-lock"></i>
                        <span class="title">Privacy Policy</span>
                    </a>
                </li>
            <?php }
            else
            { ?>
                <li class="nav-item">
                    <a href="<?php echo base_url('Privacy_policy'); ?>" class="nav-link nav-toggle">
                        <i class="fa fa-lock"></i>
                        <span class="title">Privacy Policy</span>
                    </a>
                </li>
            <?php }?>
            <?php
            $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $url_product=base_url().'Cancel_and_return';
            if($actual_link==$url_product) { ?>
                <li class="nav-item active ">
                    <a href="<?php echo base_url('Cancel_and_return'); ?>" class="nav-link nav-toggle">
                        <i class="glyphicon glyphicon-remove"></i>
                        <span class="title">Cancel And Return</span>
                    </a>
                </li>
            <?php }
            else
            { ?>
                <li class="nav-item">
                    <a href="<?php echo base_url('Cancel_and_return'); ?>" class="nav-link nav-toggle">
                        <i class="glyphicon glyphicon-remove"></i>
                        <span class="title">Cancel and Return</span>

                    </a>
                </li>
            <?php }?>
            <?php
            $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $url_product=base_url().'secure_payment';
            if($actual_link==$url_product) { ?>
                <li class="nav-item active ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="fa fa-credit-card"></i>
                        <span class="title">Secure payment</span>
                    </a>
                </li>
            <?php }
            else
            { ?>
                <li class="nav-item">
                    <a href="<?php echo base_url('Secure_payment'); ?>" class="nav-link nav-toggle">
                        <i class="fa fa-credit-card"></i>
                        <span class="title">Secure payment</span>
                    </a>
                </li>
            <?php }?>
            <?php
            $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $url_product=base_url().'Delivery';
            if($actual_link==$url_product) { ?>
                <li class="nav-item active ">
                    <a href="<?php echo base_url('Delivery'); ?>" class="nav-link nav-toggle">
                        <i class="fa fa-truck"></i>
                        <span class="title">Delivery</span>
                    </a>
                </li>
            <?php }
            else
            { ?>
                <li class="nav-item">
                    <a href="<?php echo base_url('Delivery'); ?>" class="nav-link nav-toggle">
                        <i class="fa fa-truck"></i>
                        <span class="title">Delivery</span>
                    </a>
                </li>
            <?php }?>
            <?php
            $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $url_product=base_url().'Contact_us';
            if($actual_link==$url_product) { ?>
                <li class="nav-item active">
                    <a href="<?php echo base_url('Contact_us'); ?>" class="nav-link nav-toggle">
                        <i class="glyphicon glyphicon-phone-alt"></i>
                        <span class="title">Contact us</span>
                    </a>
                </li>
            <?php }
            else
            { ?>
                <li class="nav-item">
                    <a href="<?php echo base_url('Contact_us'); ?>" class="nav-link nav-toggle">
                        <i class="glyphicon glyphicon-phone-alt"></i>
                        <span class="title">Contact us</span>
                    </a>
                </li>
            <?php }?>
<?php
		$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $url_product=base_url().'About';
            if($actual_link==$url_product) { ?>
                <li class="nav-item active">
                    <a href="<?php echo base_url('About'); ?>" class="nav-link nav-toggle">
                        <i class="fa fa-info-circle"></i>
                        <span class="title">About</span>
                    </a>
                </li>
            <?php }
            else
            { ?>
                <li class="nav-item">
                    <a href="<?php echo base_url('About'); ?>" class="nav-link nav-toggle">
                        <i class="fa fa-info-circle"></i>
                        <span class="title">About</span>
                    </a>
                </li>
            <?php }?>
            <?php
            $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $url_product=base_url().'Setting';
            if($actual_link==$url_product) { ?>
                <li class="nav-item active ">
                    <a href="<?php echo base_url('Setting'); ?>" class="nav-link nav-toggle">
                        <i class="glyphicon glyphicon-wrench"></i>
                        <span class="title">Setting</span>
                    </a>
                </li>
            <?php }
            else
            { ?>
                <li class="nav-item">
                    <a href="<?php echo base_url('Setting'); ?>" class="nav-link nav-toggle">
                        <i class="glyphicon glyphicon-wrench"></i>
                        <span class="title">Setting</span>
                    </a>
                </li>
            <?php }?>
        </ul>
        <!-- END SIDEBAR MENU -->
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
