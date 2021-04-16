<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="multikart">
    <meta name="keywords" content="multikart">
    <meta name="author" content="multikart">
    <link rel="icon" href="../assets/images/favicon/1.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon/1.png" type="image/x-icon">
    <title>Multikart - Multi-purpopse E-commerce Html Template</title>

 <!--Google font-->
 <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/front/css/vendors/fontawesome.css');?>">
                  
    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/front/css/vendors/slick.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/front/css/vendors/slick-theme.css');?>">

    <!-- Animate icon -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/front/css/vendors/animate.css');?>">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/front/css/vendors/themify-icons.css');?>">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/front/css/vendors/bootstrap.css');?>">

    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/front/css/style.css');?>">
</head>
<!-- test -->
<body class="theme-color-1 <?php if($this->session->userdata('site_lang') == "arabic") { echo "rtl"; } ?>">


    <!-- loader start -->
    <div class="loader_skeleton">
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header-contact">
                            <ul>
                                <li><?php echo $this->lang->line('welcome'); ?></li>
                                <li><i class="fa fa-phone" aria-hidden="true"></i><?php echo $this->lang->line('call_us'); ?>: 123 - 456 - 7890</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 text-end">
                        <ul class="header-dropdown">
                            <li class="mobile-wishlist"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                            </li>
                            <li class="onhover-dropdown mobile-account"> <i class="fa fa-user" aria-hidden="true"></i>
                            <?php echo $this->lang->line('my_account'); ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="main-menu">
                            <div class="menu-left">
                                <div class="navbar">
                                    <a href="javascript:void(0)">
                                        <div class="bar-style"><i class="fa fa-bars sidebar-bar" aria-hidden="true"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="brand-logo">
                                    <a href="<?php echo base_url('');?>"><img src="<?php echo base_url('assets/front/images/icon/logo.png');?>"
                                            class="img-fluid blur-up lazyload" alt=""></a>
                                </div>
                            </div>
                            <div class="menu-right pull-right">
                                <div>
                                    <nav>
                                        <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                                        <ul class="sm pixelstrap sm-horizontal">
                                            <li>
                                                <div class="mobile-back text-end">Back<i class="fa fa-angle-right ps-2"
                                                        aria-hidden="true"></i></div>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url('');?>">Home</a>
                                            </li>
                                            <li>
                                                <a href="#">feature<div class="lable-nav">new</div></a>
                                            </li>
                                            <li>
                                                <a href="#">shop</a>
                                            </li>
                                            <li>
                                                <a href="#">product</a>
                                            </li>
                                            <li>
                                                <a href="#">pages</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div>
                                    <div class="icon-nav d-none d-sm-block">
                                        <ul>
                                            <li class="onhover-div mobile-search">
                                                <div><img src="<?php echo base_url('assets/front/images/icon/search.png');?>" onclick="openSearch()"
                                                        class="img-fluid blur-up lazyload" alt=""> <i class="ti-search"
                                                        onclick="openSearch()"></i></div>
                                            </li>
                                            <li class="onhover-div mobile-setting">
                                                <div><img src="<?php echo base_url('assets/front/images/icon/setting.png');?>"
                                                        class="img-fluid blur-up lazyload" alt=""> <i
                                                        class="ti-settings"></i></div>
                                            </li>
                                            <li class="onhover-div mobile-cart">
                                                <div><img src="<?php echo base_url('assets/front/images/icon/cart.png');?>"
                                                        class="img-fluid blur-up lazyload" alt=""> <i
                                                        class="ti-shopping-cart"></i></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="home-slider">
            <div class="home"></div>
        </div>
        <section class="collection-banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="ldr-bg">
                            <div class="contain-banner">
                                <div>
                                    <h4></h4>
                                    <h2></h2>
                                    <h6></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="ldr-bg">
                            <div class="contain-banner">
                                <div>
                                    <h4></h4>
                                    <h2></h2>
                                    <h6></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container section-b-space">
            <div class="row section-t-space">
                <div class="col-lg-6 offset-lg-3">
                    <div class="product-para">
                        <p class="first"></p>
                        <p class="second"></p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="no-slider row">
                        <div class="product-box">
                            <div class="img-wrapper"></div>
                            <div class="product-detail">
                                <h4></h4>
                                <h5></h5>
                                <h5 class="second"></h5>
                                <h6></h6>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper"></div>
                            <div class="product-detail">
                                <h4></h4>
                                <h5></h5>
                                <h5 class="second"></h5>
                                <h6></h6>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper"></div>
                            <div class="product-detail">
                                <h4></h4>
                                <h5></h5>
                                <h5 class="second"></h5>
                                <h6></h6>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper"></div>
                            <div class="product-detail">
                                <h4></h4>
                                <h5></h5>
                                <h5 class="second"></h5>
                                <h6></h6>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper"></div>
                            <div class="product-detail">
                                <h4></h4>
                                <h5></h5>
                                <h5 class="second"></h5>
                                <h6></h6>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper"></div>
                            <div class="product-detail">
                                <h4></h4>
                                <h5></h5>
                                <h5 class="second"></h5>
                                <h6></h6>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper"></div>
                            <div class="product-detail">
                                <h4></h4>
                                <h5></h5>
                                <h5 class="second"></h5>
                                <h6></h6>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper"></div>
                            <div class="product-detail">
                                <h4></h4>
                                <h5></h5>
                                <h5 class="second"></h5>
                                <h6></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- loader end -->


    <!-- header start -->
    <header>
        <div class="mobile-fix-option"></div>
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header-contact">
                            <ul>
                                <li><?php echo $this->lang->line('welcome'); ?></li>
                                <li><i class="fa fa-phone" aria-hidden="true"></i><?php echo $this->lang->line('call_us'); ?>: 123 - 456 - 7890</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 text-end">
                        <ul class="header-dropdown">
                            <li class="mobile-wishlist"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                            </li>
                            <li class="onhover-dropdown mobile-account"> <i class="fa fa-user" aria-hidden="true"></i>
                                <?php echo $this->lang->line('my_account'); ?>
                                <ul class="onhover-show-div">
                                    <?php
                                    if($this->session->userdata('loggedIn_front'))
                                    {
                                        echo '<li><a href="'.base_url().'front_end/auth/Logout">'.$this->lang->line('logout').'</a></li>';
                                    }
                                    else
                                    {
                                        echo '<li><a href="'.base_url().'front_end/auth/Login">'.$this->lang->line('login').'</a></li>
                                        <li><a href="'.base_url().'front_end/auth/register">'.$this->lang->line('register').'</a></li>';
                                    }
                                    ?>
                                    
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="main-menu">
                        <div class="menu-left">
                            <div class="navbar">
                                <a href="javascript:void(0)" onclick="openNav()">
                                    <div class="bar-style"><i class="fa fa-bars sidebar-bar" aria-hidden="true"></i>
                                    </div>
                                </a>
                                <div id="mySidenav" class="sidenav">
                                    <a href="javascript:void(0)" class="sidebar-overlay" onclick="closeNav()"></a>
                                    <nav>
                                        <div onclick="closeNav()">
                                            <div class="sidebar-back text-start"><i class="fa fa-angle-left pe-2"
                                                    aria-hidden="true"></i> Back</div>
                                        </div>
                                        <ul id="sub-menu" class="sm pixelstrap sm-vertical">
                                            <?php
                                                foreach($categories as $cat1)
                                                {
                                                    if($cat1["parent_id"] == 0)
                                                    {
                                                        echo '<li> <a href="'.base_url().'front_end/Category/products_of_cat/'.$cat1["id"].'">';
                                                        
                                                        if($this->session->userdata('site_lang') == "english")
                                                        {
                                                            echo $cat1["name"];
                                                        }
                                                        else
                                                        {
                                                            echo $cat1["name_ar"];
                                                        }
                                                        echo '</a>
                                                                <ul>';
                                                        foreach ($categories as $key => $cat2) {
                                                            if($cat1["id"] == $cat2["parent_id"])
                                                            {
                                                                echo '<li><a href="'.base_url().'front_end/Category/products_of_cat/'.$cat2["id"].'">';
                                                                if($this->session->userdata('site_lang') == "english")
                                                                {
                                                                    echo $cat2["name"];
                                                                }
                                                                else
                                                                {
                                                                    echo $cat2["name_ar"];
                                                                }
                                                                echo '</a>
                                                                    <ul>';
                                                                    foreach ($categories as $key => $cat3) {
                                                                        
                                                                        if($cat2["id"] == $cat3["parent_id"])
                                                                        {
                                                                            echo '<li><a href="'.base_url().'front_end/Category/products_of_cat/'.$cat3["id"].'">';
                                                                            if($this->session->userdata('site_lang') == "english")
                                                                            {
                                                                                echo $cat3["name"];
                                                                            }
                                                                            else
                                                                            {
                                                                                echo $cat3["name_ar"];
                                                                            }
                                                                            echo '</a></li>';
                                                                            
                                                                        }
                                                                    }
                                                                echo '</ul></li>';
                                                            }
                                                        }
                                                    echo '</ul>
                                                    </li>';
                                                    }
                                                }
                                            ?>                                          
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="brand-logo">
                                <a href="index.html"><img src="<?php echo base_url('assets/front/images/icon/logo.png');?>"
                                        class="img-fluid blur-up lazyload" alt=""></a>
                            </div>
                        </div>
                        <div class="menu-right pull-right">
                            <div>
                                <nav id="main-nav">
                                    <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                                    <ul id="main-menu" class="sm pixelstrap sm-horizontal">
                                        <li>
                                            <div class="mobile-back text-end">Back<i class="fa fa-angle-right ps-2"
                                                    aria-hidden="true"></i></div>
                                        </li>
                                        <li><a href="<?php echo base_url();?>"><?php echo $this->lang->line('home'); ?></a></li>
                                        <li class="mega" id="hover-cls">
                                            <a href="#"><?php echo $this->lang->line('features'); ?> <div class="lable-nav">new</div></a>
                                            <ul class="mega-menu full-mega-menu">
                                                <li>
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>add to cart</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="nursery.html">cart modal
                                                                                    popup</a></li>
                                                                            <li><a href="vegetables.html">qty.
                                                                                    counter
                                                                                    <i class="fa fa-bolt icon-trend"
                                                                                        aria-hidden="true"></i></a>
                                                                            </li>
                                                                            <li><a href="<?php echo base_url('front_end/Bags');?>">cart top</a>
                                                                            </li>
                                                                            <li><a href="<?php echo base_url('front_end/Shoes');?>">cart bottom</a>
                                                                            </li>
                                                                            <li><a href="<?php echo base_url('front_end/Watch');?>">cart left</a>
                                                                            </li>
                                                                            <li><a href="<?php echo base_url('front_end/Tools');?>">cart right</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>model</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="<?php echo base_url('');?>">Newsletter</a>
                                                                            </li>
                                                                            <li><a href="<?php echo base_url('');?>">exit<i
                                                                                        class="ms-2 fa fa-bolt icon-trend"
                                                                                        aria-hidden="true"></i></a>
                                                                            </li>
                                                                            <li><a href="<?php echo base_url('front_end/Christmas');?>">christmas</a>
                                                                            </li>
                                                                            <li><a href="<?php echo base_url('front_end/Furniture');?>">black
                                                                                    friday</a></li>
                                                                            <li><a href="<?php echo base_url('front_end/Fashion/fashion4');?>">cyber
                                                                                    monday</a></li>
                                                                            <li><a href="<?php echo base_url('front_end/Market4');?>">new
                                                                                    year</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>cookie bar</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="<?php echo base_url('');?>">bottom<i
                                                                                        class="ms-2 fa fa-bolt icon-trend"
                                                                                        aria-hidden="true"></i></a>
                                                                            </li>
                                                                            <li><a href="fashion-4.html">bottom
                                                                                    left</a></li>
                                                                            <li><a href="bicycle.html">bottom
                                                                                    right</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="menu-title mt-2">
                                                                        <h5>search</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="marketplace-demo-2.html">ajax
                                                                                    search<i
                                                                                        class="ms-2 fa fa-bolt icon-trend"
                                                                                        aria-hidden="true"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>invoice template</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a target="_blank"
                                                                                    href="<?php echo base_url('front_end/Invoice');?>">invoice
                                                                                    1</a></li>
                                                                            <li><a target="_blank"
                                                                                    href="<?php echo base_url('front_end/Invoice/invoice2');?>">invoice
                                                                                    2</a></li>
                                                                            <li><a target="_blank"
                                                                                    href="<?php echo base_url('front_end/Invoice/invoice3');?>">invoice
                                                                                    3</a></li>
                                                                            <li><a target="_blank"
                                                                                    href="<?php echo base_url('front_end/Invoice/invoice4');?>">invoice
                                                                                    4</a></li>
                                                                            <li><a target="_blank"
                                                                                    href="<?php echo base_url('front_end/Invoice/invoice5');?>">invoice
                                                                                    5</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>email template</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a target="_blank"
                                                                                    href="<?php echo base_url('Front_end/Email_template/email_order_success.php');?>">order
                                                                                    success</a></li>
                                                                            <li><a target="_blank"
                                                                                    href="<?php echo base_url('Front_end/Email_template/email_order_success_two.php');?>">order
                                                                                    success 2</a></li>
                                                                            <li><a target="_blank"
                                                                                    href="<?php echo base_url('Front_end/Email_template/email_template.php');?>">email
                                                                                    template</a></li>
                                                                            <li><a target="_blank"
                                                                                    href="../<?php echo base_url('Front_end/Email_template/email_template_two.php');?>">email
                                                                                    template 2</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="menu-title mt-2">
                                                                        <h5>elements</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="elements.html">
                                                                                    elements page<i
                                                                                        class="ms-2 fa fa-bolt icon-trend"
                                                                                        aria-hidden="true"></i>
                                                                                </a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <img src="<?php echo base_url('assets/front/images/menu-banner.jpg');?>"
                                                                    class="img-fluid mega-img">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><?php echo $this->lang->line('shop'); ?></a>
                                            <ul>
                                                <li><a href="<?php echo base_url('');?>">top filter<span
                                                            class="new-tag">new</span></a></li>
                                                <li><a href="<?php echo base_url('front_end/Category/modern');?>">modern<span
                                                            class="new-tag">new</span></a></li>
                                                <li><a href="<?php echo base_url('front_end/Category');?>">left sidebar</a></li>
                                                <li><a href="<?php echo base_url('front_end/Category/right');?>">right sidebar</a></li>
                                                <li><a href="<?php echo base_url('front_end/Category/no_sidebar');?>">no sidebar</a></li>
                                                <li><a href="<?php echo base_url('front_end/Category/sidebar_popup');?>">sidebar popup</a>
                                                </li>
                                                <li><a href="<?php echo base_url('front_end/Category/metro');?>">metro</a></li>
                                                <li><a href="<?php echo base_url('front_end/Category/full_width');?>">full width</a></li>
                                                <li><a href="<?php echo base_url('front_end/Category/infinite_scroll');?>">infinite
                                                        scroll</a></li>
                                                <li><a href=<?php echo base_url('front_end/Category/3grid');?>>three grid</a></li>
                                                <li><a href="<?php echo base_url('front_end/Category/6grid');?>">six grid</a></li>
                                                <li><a href="<?php echo base_url('front_end/Category/list_view');?>">list view</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><?php echo $this->lang->line('products'); ?></a>
                                            <ul>
                                                <li><a href="<?php echo base_url('front_end/Product/360view');?>">360 view <span
                                                            class="new-tag">new</span></a></li>
                                                <li><a href="<?php echo base_url('front_end/Product/video_thumbnail');?>">video
                                                        thumbnail<span class="new-tag">new</span></a></li>
                                                <li>
                                                    <a href="#">sidebar</a>
                                                    <ul>
                                                        <li><a href="<?php echo base_url('front_end/Product');?>">left sidebar</a></li>
                                                        <li><a href="<?php echo base_url('front_end/Product/right_sidebar');?>">right
                                                                sidebar</a>
                                                        </li>
                                                        <li><a href="<?php echo base_url('front_end/Product/no_sidebar');?>">no sidebar</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#">thumbnail image</a>
                                                    <ul>
                                                        <li><a href="<?php echo base_url('front_end/Product/left_image');?>">left image</a>
                                                        </li>
                                                        <li><a href="<?php echo base_url('front_end/Product/right_image');?>">right image</a>
                                                        </li>
                                                        <li><a href="<?php echo base_url('front_end/Product/image_outside');?>">image
                                                                outside</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#">three column</a>
                                                    <ul>
                                                        <li><a href="<?php echo base_url('front_end/Product/3col_left');?>">thumbnail
                                                                left</a>
                                                        </li>
                                                        <li><a href="<?php echo base_url('front_end/Product/3col_right');?>">thumbnail
                                                                right</a>
                                                        </li>
                                                        <li><a href="<?php echo base_url('front_end/Product/3col');?>">thubnail
                                                                bottom</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="<?php echo base_url('front_end/Product/4image');?>">four image</a></li>
                                                <li><a href="<?php echo base_url('front_end/Product/sticky');?>">sticky</a></li>
                                                <li><a href="<?php echo base_url('front_end/Product/accordian');?>">accordian</a></li>
                                                <li><a href="<?php echo base_url('front_end/Product/bundle');?>">bundle</a></li>
                                                <li><a href="<?php echo base_url('front_end/Product/image_swatch');?>">image swatch </a></li>
                                                <li><a href="<?php echo base_url('front_end/Product/v_tab');?>">vertical tab</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><?php echo $this->lang->line('pages'); ?></a>
                                            <ul>
                                                <li>
                                                    <a href="#">vendor</a>
                                                    <ul>
                                                        <li><a href="<?php echo base_url('front_end/Vendor/dashboard');?>">vendor dashboard</a>
                                                        </li>
                                                        <li><a href="<?php echo base_url('front_end/Vendor/profile');?>">vendor profile</a></li>
                                                        <li><a href="<?php echo base_url('front_end/Vendor/become');?>">become vendor</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#">account</a>
                                                    <ul>
                                                        <li><a href="<?php echo base_url('front_end/Account/wishlist');?>">wishlist</a></li>
                                                        <li><a href="<?php echo base_url('front_end/Account/cart');?>">cart</a></li>
                                                        <li><a href="<?php echo base_url('front_end/Account/dashboard');?>">Dashboard</a></li>
                                                        <li><a href="<?php echo base_url('front_end/Account/');?>">login</a></li>
                                                        <li><a href="<?php echo base_url('front_end/Account/register');?>">register</a></li>
                                                        <li><a href="<?php echo base_url('front_end/Account/contact');?>">contact</a></li>
                                                        <li><a href="<?php echo base_url('front_end/Account/forget_pwd');?>">forget password</a></li>
                                                        <li><a href="<?php echo base_url('front_end/Account/profile');?>">profile</a></li>
                                                        <li><a href="<?php echo base_url('front_end/Account/checkout');?>">checkout</a></li>
                                                        <li><a href="<?php echo base_url('front_end/Account/order_success');?>">order success</a></li>
                                                        <li><a href="<?php echo base_url('front_end/Account/order_tracking');?>">order tracking<span
                                                                    class="new-tag">new</span></a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#">portfolio</a>
                                                    <ul>
                                                        <li><a href="">grid</a>
                                                            <ul>
                                                                <li><a href="<?php echo base_url('front_end/Grid/grid2col');?>">grid
                                                                        2</a></li>
                                                                <li><a href="<?php echo base_url('front_end/Grid/grid3col');?>">grid
                                                                        3</a></li>
                                                                <li><a href="<?php echo base_url('front_end/Grid/grid4col');?>">grid
                                                                        4</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="">masonry</a>
                                                            <ul>
                                                                <li><a href="<?php echo base_url('front_end/Masonary/2grid');?>">grid 2</a></li>
                                                                <li><a href="<?php echo base_url('front_end/Masonary/3grid');?>">grid 3</a></li>
                                                                <li><a href="<?php echo base_url('front_end/Masonary/g4rid');?>">grid 4</a></li>
                                                                <li><a href="<?php echo base_url('front_end/Masonary/fullwidth');?>">full width</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="<?php echo base_url('front_end/About_page');?>">about us</a></li>
                                                <li><a href="<?php echo base_url('front_end/Search');?>">search</a></li>
                                                <li><a href="<?php echo base_url('front_end/Review');?>">review</a>
                                                </li>
                                                <li>
                                                    <a href="#">compare</a>
                                                    <ul>
                                                        <li><a href="<?php echo base_url('front_end/Compare');?>">compare</a></li>
                                                        <li><a href="<?php echo base_url('front_end/Compare/compare2');?>">compare-2</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="<?php echo base_url('front_end/Category');?>">collection</a></li>
                                                <li><a href="<?php echo base_url('front_end/Lookbook');?>">lookbook</a></li>
                                                <li><a href="<?php echo base_url('front_end/Sitemap');?>">site map</a>
                                                </li>
                                                <li><a href="<?php echo base_url('front_end/404');?>">404</a></li>
                                                <li><a href="<?php echo base_url('front_end/Coming_soon');?>">coming soon</a></li>
                                                <li><a href="<?php echo base_url('front_end/Faq');?>">FAQ</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div>
                                <div class="icon-nav">
                                    <ul>
                                        <li class="onhover-div mobile-search">
                                            <div><img src="<?php echo base_url('assets/front/images/icon/search.png');?>" onclick="openSearch()"
                                                    class="img-fluid blur-up lazyload" alt=""> <i class="ti-search"
                                                    onclick="openSearch()"></i></div>
                                            <div id="search-overlay" class="search-overlay">
                                                <div> <span class="closebtn" onclick="closeSearch()"
                                                        title="Close Overlay">×</span>
                                                    <div class="overlay-content">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <form>
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control"
                                                                                id="exampleInputPassword1"
                                                                                placeholder="Search a Product">
                                                                        </div>
                                                                        <button type="submit" class="btn btn-primary"><i
                                                                                class="fa fa-search"></i></button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="onhover-div mobile-setting">
                                            <div><img src="<?php echo base_url('assets/front/images/icon/setting.png');?>"
                                                    class="img-fluid blur-up lazyload" alt=""> <i
                                                    class="ti-settings"></i></div>
                                            <div class="show-div setting">
                                                <h6><?php echo $this->lang->line('language'); ?></h6>
                                                <ul>
                                                    <li><a href="<?=base_url()?>lang/Language/index/en"><?php echo $this->lang->line('english'); ?></a></li>
                                                    <li><a href="<?=base_url()?>lang/Language/index/ar"><?php echo $this->lang->line('arabic'); ?></a></li>
                                                </ul>
                                                <h6><?php echo $this->lang->line('currency'); ?></h6>
                                                <ul class="list-inline">
                                                    <li><a href="#">euro</a></li>
                                                    <li><a href="#">rupees</a></li>
                                                    <li><a href="#">pound</a></li>
                                                    <li><a href="#">doller</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="onhover-div mobile-cart">
                                            <div><img src="<?php echo base_url('assets/front/images/icon/cart.png');?>"
                                                    class="img-fluid blur-up lazyload" alt=""> <i
                                                    class="ti-shopping-cart"></i></div>
                                            <span class="cart_qty_cls">2</span>
                                            <ul class="show-div shopping-cart">
                                                <li>
                                                    <div class="media">
                                                        <a href="#"><img alt="" class="me-3"
                                                                src="<?php echo base_url('/assets/front/images/fashion/product/1.jpg');?>"></a>
                                                        <div class="media-body">
                                                            <a href="#">
                                                                <h4>item name</h4>
                                                            </a>
                                                            <h4><span>1 x $ 299.00</span></h4>
                                                        </div>
                                                    </div>
                                                    <div class="close-circle"><a href="#"><i class="fa fa-times"
                                                                aria-hidden="true"></i></a></div>
                                                </li>
                                                <li>
                                                    <div class="media">
                                                        <a href="#"><img alt="" class="me-3"
                                                                src="<?php echo base_url('assets/front/images/fashion/product/2.jpg');?>"></a>
                                                        <div class="media-body">
                                                            <a href="#">
                                                                <h4>item name</h4>
                                                            </a>
                                                            <h4><span>1 x $ 299.00</span></h4>
                                                        </div>
                                                    </div>
                                                    <div class="close-circle"><a href="#"><i class="fa fa-times"
                                                                aria-hidden="true"></i></a></div>
                                                </li>
                                                <li>
                                                    <div class="media">
                                                        <a href="#"><img alt="" class="me-3"
                                                                src="<?php echo base_url('/assets/front/images/fashion/product/1.jpg');?>"></a>
                                                        <div class="media-body">
                                                            <a href="#">
                                                                <h4>item name</h4>
                                                            </a>
                                                            <h4><span>1 x $ 299.00</span></h4>
                                                        </div>
                                                    </div>
                                                    <div class="close-circle"><a href="#"><i class="fa fa-times"
                                                                aria-hidden="true"></i></a></div>
                                                </li>
                                                <li>
                                                    <div class="media">
                                                        <a href="#"><img alt="" class="me-3"
                                                                src="<?php echo base_url('assets/front/images/fashion/product/2.jpg');?>"></a>
                                                        <div class="media-body">
                                                            <a href="#">
                                                                <h4>item name</h4>
                                                            </a>
                                                            <h4><span>1 x $ 299.00</span></h4>
                                                        </div>
                                                    </div>
                                                    <div class="close-circle"><a href="#"><i class="fa fa-times"
                                                                aria-hidden="true"></i></a></div>
                                                </li>
                                                <li>
                                                    <div class="total">
                                                        <h5>subtotal : <span>$299.00</span></h5>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="buttons"><a href="<?php echo base_url('front_end/Account/Cart');?>" class="view-cart"><?php echo $this->lang->line('view_cart'); ?></a>
                                                     <a href="#" class="checkout"><?php echo $this->lang->line('checkout'); ?></a></div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->