<?php
function GenerateStars($number)
{
    if ($number == '0') {
        echo '-----';
    } elseif ($number == '0.5') {
        echo '<i class="fa fa-star-half-empty"></i>';
    } elseif ($number == '1') {
        echo '<i class="fa fa-star"></i>';
    } elseif ($number == '1.5') {
        echo '<i class="fa fa-star"></i><i class="fa fa-star-half-empty"></i>';
    } elseif ($number == '2') {
        echo '<i class="fa fa-star"></i><i class="fa fa-star"></i>';
    } elseif ($number == '2.5') {
        echo '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-empty"></i>';
    } elseif ($number == '3') {
        echo '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>';
    } elseif ($number == '3.5') {
        echo '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-empty"></i>';
    } elseif ($number == '4') {
        echo '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>';
    } elseif ($number == '4.5') {
        echo '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-empty"></i>';
    } elseif ($number == '5.0') {
        echo '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>';
    } else {
        echo 'Incorrect Info';
    }

}

?>
<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7
Version: 4.7.5
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>enter title</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Preview page of Metronic Admin Theme #1 for statistics, charts, recent events and reports" name="description" />
    <meta content="" name="author" />
<?php  $this->load->view('css'); ?>
    <link href="<?php echo base_url("assets/global/plugins/bootstrap-sweetalert/sweetalert.css"); ?>" rel="stylesheet" type="text/css"

<!-- END HEAD -->

<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white page-md">
<div class="page-wrapper">
    <!-- BEGIN HEADER -->
<?php $this->load->view('header'); ?>
    <!-- END HEADER -->
    <!-- BEGIN HEADER & CONTENT DIVIDER -->
    <div class="clearfix"> </div>
    <!-- END HEADER & CONTENT DIVIDER -->
    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        <!-- BEGIN SIDEBAR -->
<?php $this->load->view('sidebar'); ?>
        <!-- END SIDEBAR -->
        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <!-- BEGIN CONTENT BODY -->
            <div class="page-content">
                <!-- BEGIN PAGE HEADER-->
                <!-- BEGIN THEME PANEL -->
                <div class="theme-panel hidden-xs hidden-sm">
                    <div class="toggler"> </div>
                    <div class="toggler-close"> </div>
                    <div class="theme-options">
                        <div class="theme-option theme-colors clearfix">
                            <span> THEME COLOR </span>
                            <ul>
                                <li class="color-default current tooltips" data-style="default" data-container="body" data-original-title="Default"> </li>
                                <li class="color-darkblue tooltips" data-style="darkblue" data-container="body" data-original-title="Dark Blue"> </li>
                                <li class="color-blue tooltips" data-style="blue" data-container="body" data-original-title="Blue"> </li>
                                <li class="color-grey tooltips" data-style="grey" data-container="body" data-original-title="Grey"> </li>
                                <li class="color-light tooltips" data-style="light" data-container="body" data-original-title="Light"> </li>
                                <li class="color-light2 tooltips" data-style="light2" data-container="body" data-html="true" data-original-title="Light 2"> </li>
                            </ul>
                        </div>
                        <div class="theme-option">
                            <span> Layout </span>
                            <select class="layout-option form-control input-sm">
                                <option value="fluid" selected="selected">Fluid</option>
                                <option value="boxed">Boxed</option>
                            </select>
                        </div>
                        <div class="theme-option">
                            <span> Header </span>
                            <select class="page-header-option form-control input-sm">
                                <option value="fixed" selected="selected">Fixed</option>
                                <option value="default">Default</option>
                            </select>
                        </div>
                        <div class="theme-option">
                            <span> Top Menu Dropdown</span>
                            <select class="page-header-top-dropdown-style-option form-control input-sm">
                                <option value="light" selected="selected">Light</option>
                                <option value="dark">Dark</option>
                            </select>
                        </div>
                        <div class="theme-option">
                            <span> Sidebar Mode</span>
                            <select class="sidebar-option form-control input-sm">
                                <option value="fixed" selected="selected">Fixed</option>
                                <option value="default">Default</option>
                            </select>
                        </div>
                        <div class="theme-option">
                            <span> Sidebar Menu </span>
                            <select class="sidebar-menu-option form-control input-sm">
                                <option value="accordion" selected="selected">Accordion</option>
                                <option value="hover">Hover</option>
                            </select>
                        </div>
                        <div class="theme-option">
                            <span> Sidebar Style </span>
                            <select class="sidebar-style-option form-control input-sm">
                                <option value="default" selected="selected">Default</option>
                                <option value="light">Light</option>
                            </select>
                        </div>
                        <div class="theme-option">
                            <span> Sidebar Position </span>
                            <select class="sidebar-pos-option form-control input-sm">
                                <option value="left" selected="selected">Left</option>
                                <option value="right">Right</option>
                            </select>
                        </div>
                        <div class="theme-option">
                            <span> Footer </span>
                            <select class="page-footer-option form-control input-sm">
                                <option value="fixed">Fixed</option>
                                <option value="default" selected="selected">Default</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- END THEME PANEL -->
                <!-- BEGIN PAGE BAR -->
                <div class="page-bar">
                    <ul class="page-breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <span>Dashboard</span>
                        </li>
                    </ul>
                  
                </div>
                <!-- END PAGE BAR -->
                <!-- BEGIN PAGE TITLE-->
                <h1 class="page-title"> Admin Dashboard
                    <small>statistics, charts, recent events and reports</small>
                </h1>
                <h4>Product Order</h4>
                <!-- END PAGE TITLE-->
                <!-- END PAGE HEADER-->
                <!-- BEGIN DASHBOARD STATS 1-->

                <!-- ADDED TO THIS PAGE-->
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="dashboard-stat2 ">
                            <div class="display">
                                <div class="number">
                                    <h3 class="font-green-sharp">
                                        <?php
                                        $this->db->where('status','WAITING');
                                        $result = $this->db->count_all("product_order");
                                        echo $this->db->last_query();
                                        echo $result;exit;
                                        $this->db->where('status','WAITING');
                                        $count = $this->db->count_all_results();
                                        ?>
                                        <span data-counter="counterup" data-value="<?php echo $this->db->where('status','WAITING')->count_all("product_order"); ?>"></span>
                                        <small class="font-green-sharp">$</small>
                                    </h3>
                                    <small>Waiting</small>
                                </div>
                                <div class="icon">
                                    <i class="icon-pie-chart"></i>
                                </div>
                            </div>
                            <div class="progress-info">
                                <div class="progress">
                                            <span style="width: 76%;" class="progress-bar progress-bar-success green-sharp">
                                                <span class="sr-only">76% progress</span>
                                            </span>
                                </div>
                                <div class="status">
                                    <div class="status-title"> progress </div>
                                    <div class="status-number"> 76% </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="dashboard-stat2 ">
                            <div class="display">
                                <div class="number">
                                    <h3 class="font-red-haze">
                                        <span data-counter="counterup" data-value="<?php echo $driverCount; ?>"><?php echo $driverCount; ?></span>
                                    </h3>
                                    <small>TOTAL DRIVERS</small>
                                </div>
                                <div class="icon">
                                    <i class="icon-users"></i>
                                </div>
                            </div>
                            <div class="progress-info">
                                <div class="progress">
                                            <span style="width: 85%;" class="progress-bar progress-bar-success red-haze">
                                                <span class="sr-only">85% joining</span>
                                            </span>
                                </div>
                                <div class="status">
                                    <div class="status-title"> driver joining </div>
                                    <div class="status-number"> 85% </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="dashboard-stat2 ">
                            <div class="display">
                                <div class="number">
                                    <h3 class="font-blue-sharp">
                                        <span data-counter="counterup" data-value="<?php echo $ridesCount; ?>"><?php echo $ridesCount; ?></span>
                                    </h3>
                                    <small>TOTAL RIDES</small>
                                </div>
                                <div class="icon">
                                    <i class="icon-speedometer"></i>
                                </div>
                            </div>
                            <div class="progress-info">
                                <div class="progress">
                                            <span style="width: 45%;" class="progress-bar progress-bar-success blue-sharp">
                                                <span class="sr-only">45% grow</span>
                                            </span>
                                </div>
                                <div class="status">
                                    <div class="status-title"> grow </div>
                                    <div class="status-number"> 45% </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="dashboard-stat2 ">
                            <div class="display">
                                <div class="number">
                                    <h3 class="font-purple-soft">
                                        <span data-counter="counterup" data-value="<?php echo $userCount; ?>"><?php echo $userCount; ?></span>
                                    </h3>
                                    <small>NEW USERS</small>
                                </div>
                                <div class="icon">
                                    <i class="icon-user"></i>
                                </div>
                            </div>
                            <div class="progress-info">
                                <div class="progress">
                                            <span style="width: 57%;" class="progress-bar progress-bar-success purple-soft">
                                                <span class="sr-only">56% change</span>
                                            </span>
                                </div>
                                <div class="status">
                                    <div class="status-title"> change </div>
                                    <div class="status-number"> 57% </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ADDED TO THIS PAGE-->
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
                            <div class="visual">
                                <i class="fa fa-thumbs-up"></i>
                            </div>
                            <div class="details">
                                <div class="number">
                                    <span data-counter="counterup" data-value="<?php echo $successfullRideCount; ?>"><?php echo $successfullRideCount; ?></span>
                                </div>
                                <div class="desc"> Successful Booking </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a class="dashboard-stat dashboard-stat-v2 red" href="#">
                            <div class="visual">
                                <i class="fa fa-close"></i>
                            </div>
                            <div class="details">
                                <div class="number">
                                    <span data-counter="counterup" data-value="125">0</span></div>
                                <div class="desc"> Driver Canceled Booking </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a class="dashboard-stat dashboard-stat-v2 green" href="#">
                            <div class="visual">
                                <i class="fa fa-hand-stop-o"></i>
                            </div>
                            <div class="details">
                                <div class="number">
                                    <span data-counter="counterup" data-value="<?php echo $pendingRideCount; ?>"><?php echo $pendingRideCount; ?></span>
                                </div>
                                <div class="desc"> Pending Booking </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a class="dashboard-stat dashboard-stat-v2 purple" href="#">
                            <div class="visual">
                                <i class="fa fa-close"></i>
                            </div>
                            <div class="details">
                                <div class="number">
                                    <span data-counter="counterup" data-value="<?php echo $userCancelCount; ?>"><?php echo $userCancelCount; ?></span></div>
                                <div class="desc"> User Canceled Booking </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="clearfix"></div>
                <!-- END DASHBOARD STATS 1-->
                <div class="row">
                    <div class="col-lg-6 col-xs-12 col-sm-12">
                        <!-- BEGIN PORTLET-->
                        <div class="portlet light bordered">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-bar-chart font-dark hide"></i>
                                    <span class="caption-subject font-dark bold uppercase">Site Visits</span>
                                    <span class="caption-helper">weekly stats...</span>
                                </div>
                                <div class="actions">
                                    <div class="btn-group">
                                        <a href="" class="btn dark btn-outline btn-circle btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Filter Range
                                            <span class="fa fa-angle-down"> </span>
                                        </a>
                                        <ul class="dropdown-menu pull-right">
                                            <li>
                                                <a href="javascript:;" data-val="2017" class="uservisit"> 2017
                                                    <span class="label label-sm label-success"> current </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-val="2018" class="uservisit"> 2018
                                                    <span class="label label-sm label-default"> upcoming </span>
                                                </a>
                                            </li>
                                            <li class="active">
                                                <a href="javascript:;" data-val="2019" class="uservisit"> 2019
                                                    <span class="label label-sm label-warning"> upcoming </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-val="2020" class="uservisit"> 2020
                                                    <span class="label label-sm label-warning"> upcoming </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-val="2021" class="uservisit"> 2021
                                                    <span class="label label-sm label-warning"> upcoming </span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="javascript:;" data-val="2022" class="uservisit"> 2022
                                                    <span class="label label-sm label-warning"> upcoming </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-val="2023" class="uservisit"> 2023
                                                    <span class="label label-sm label-warning"> upcoming </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" > 2024
                                                    <span class="label label-sm label-warning"> upcoming </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" > 2025
                                                    <span class="label label-sm label-warning"> upcoming </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" > 2026
                                                    <span class="label label-sm label-warning"> upcoming </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" > 2027
                                                    <span class="label label-sm label-warning"> upcoming </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;"> 2028
                                                    <span class="label label-sm label-warning"> upcoming </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;"> 2029
                                                    <span class="label label-sm label-warning"> upcoming </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;"> 2030
                                                    <span class="label label-sm label-warning"> upcoming </span>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div id="site_statistics_loading">
                                    <img src="<?php echo base_url("assets/global/img/loading.gif"); ?>" alt="loading" /> </div>
                                <div id="site_statistics_content" class="display-none">
                                    <div id="site_statistics" class="chart"> </div>
                                </div>
                            </div>
                        </div>
                        <!-- END PORTLET-->
                    </div>
                    <div class="col-lg-6 col-xs-12 col-sm-12">
                        <!-- BEGIN PORTLET-->
                        <div class="portlet light bordered">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-share font-red-sunglo hide"></i>
                                    <span class="caption-subject font-dark bold uppercase">Revenue</span>
                                    <span class="caption-helper">monthly stats...</span>
                                </div>
                                <div class="actions">
                                    <div class="btn-group">
                                        <a href="" class="btn dark btn-outline btn-circle btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Filter Range
                                            <span class="fa fa-angle-down"> </span>
                                        </a>
                                        <ul class="dropdown-menu pull-right">
                                            <li>
                                                <a href="javascript:;" data-val="2017" class="graph"> 2017
                                                    <span class="label label-sm label-success"> current </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-val="2018" class="graph"> 2018
                                                    <span class="label label-sm label-default"> upcoming </span>
                                                </a>
                                            </li>
                                            <li class="active">
                                                <a href="javascript:;" data-val="2019" class="graph"> 2019
                                                    <span class="label label-sm label-warning"> upcoming </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-val="2020" class="graph"> 2020
                                                    <span class="label label-sm label-warning"> upcoming </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-val="2021" class="graph"> 2021
                                                    <span class="label label-sm label-warning"> upcoming </span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="javascript:;" data-val="2022" class="graph"> 2022
                                                    <span class="label label-sm label-warning"> upcoming </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-val="2023" class="graph"> 2023
                                                    <span class="label label-sm label-warning"> upcoming </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" > 2024
                                                    <span class="label label-sm label-warning"> upcoming </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" > 2025
                                                    <span class="label label-sm label-warning"> upcoming </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" > 2026
                                                    <span class="label label-sm label-warning"> upcoming </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" > 2027
                                                    <span class="label label-sm label-warning"> upcoming </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;"> 2028
                                                    <span class="label label-sm label-warning"> upcoming </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;"> 2029
                                                    <span class="label label-sm label-warning"> upcoming </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;"> 2030
                                                    <span class="label label-sm label-warning"> upcoming </span>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div id="site_activities_loading">
                                    <img src="<?php echo base_url("assets/global/img/loading.gif"); ?>" alt="loading" /> </div>
                                <div id="site_activities_content" class="display-none">
                                    <div id="site_activities" style="height: 228px;"> </div>
                                </div>
                                <div style="margin: 20px 0 10px 30px">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                            <span class="label label-sm label-success"> Revenue: </span>
                                            <h3>$<?php echo $sums[0]['revenue']?></h3>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                            <span class="label label-sm label-info"> Tax: </span>
                                            <h3>$<?php echo $sums[0]['tax']?></h3>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                            <span class="label label-sm label-danger"> Driver: </span>
                                            <h3>$<?php echo $sums[0]['driver']?></h3>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                            <span class="label label-sm label-warning"> Rides: </span>
                                            <h3>$<?php echo $sums[0]['website']?></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END PORTLET-->
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-xs-12 col-sm-12">
                        <div class="portlet light bordered">
                            <div class="portlet-title tabbable-line">
                                <div class="caption">
                                    <i class="icon-bubbles font-dark hide"></i>
                                    <span class="caption-subject font-dark bold uppercase">Comments</span>
                                </div>
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#portlet_comments_1" data-toggle="tab"> Driver Comments </a>
                                    </li>
                                    <li>
                                        <a href="#portlet_comments_2" data-toggle="tab"> User  Comments </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="portlet-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="portlet_comments_1">
                                        <!-- BEGIN: Comments -->

                                        <div class="mt-comments">

                                            <?php
                                            if(count($driverComments)>0) {
                                            foreach($driverComments as $comments) {
                                                $image=($comments['image']!='' && $comments['image']!=NULL) ? 'driverimages/'.$comments['image'] : 'upload/no-image-icon.png';

                                             ?>
                                            <div class="mt-comment">
                                                <div class="mt-comment-img">

                                                    <img src="<?php echo base_url($image); ?>" height="30" width="30"/> </div>
                                                <div class="mt-comment-body">
                                                    <div class="mt-comment-info">
                                                        <span class="mt-comment-author"><?php echo $comments['name'];?></span>
                                                        <span class="mt-comment-date"><?php echo date('d M,h:i a',strtotime($comments['create_date']));?></span>
                                                    </div>
                                                    <div class="mt-comment-text"> <?php echo $comments['driver_comment'] ?> </div>
                                                    <div class="mt-comment-details">
                                                        <span class="mt-comment-status mt-comment-status-pending"><?php echo GenerateStars($comments['user_rate']); ?></span>
                                                        <ul class="mt-comment-actions">
                                                            <li>
                                                                <a href="#">Quick Edit</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">View</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php } }
                                            else
                                            {
                                                echo '<div class="mt-comment"><div class="mt-comment-body">
<div class="mt-comment-info">
No new comments.
</div>
</div>
</div>';
                                            }?>

                                        </div>
                                        <!-- END: Comments -->
                                    </div>
                                    <div class="tab-pane" id="portlet_comments_2">
                                        <!-- BEGIN: Comments -->
                                        <div class="mt-comments">

                                            <?php
                                            if(count($userComments)>0) {


                                            foreach($userComments as $comments) {
                                                $image=($comments['image']!='' && $comments['image']!=NULL) ? 'user_image/'.$comments['image'] : 'upload/no-image-icon.png';
                                                ?>
                                            <div class="mt-comment">
                                                <div class="mt-comment-img">
                                                    <img src="<?php echo base_url($image); ?>"  width='30' height='30' /> </div>
                                                <div class="mt-comment-body">
                                                    <div class="mt-comment-info">
                                                        <span class="mt-comment-author"><?php echo  $comments['name']; ?></span>
                                                        <span class="mt-comment-date"><?php echo date('d M,h:i a',strtotime($comments['create_date']));?></span>
                                                    </div>
                                                    <div class="mt-comment-text"><?php echo $comments['user_comment']; ?>. </div>
                                                    <div class="mt-comment-details">
                                                        <span class="mt-comment-status mt-comment-status-approved"><?php echo GenerateStars($comments['driver_rate']); ?></span>
                                                        <ul class="mt-comment-actions">
                                                            <li>
                                                                <a href="#">Quick Edit</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">View</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php } }
                                            else {
                                                echo '<div class="mt-comment"><div class="mt-comment-body">
<div class="mt-comment-info">
No new comments.
</div>
</div>
</div>';
                                            }?>

                                        <!-- END: Comments -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div></div>
                    <div class="col-lg-6 col-xs-12 col-sm-12">
                        <!-- BEGIN PORTLET-->
                        <div class="portlet light bordered">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-bubble font-hide hide"></i>
                                    <span class="caption-subject font-hide bold uppercase">Latest Trips</span>
                                </div>

                            </div>


                            <div class="portlet-body" id="chats">
                                <div class="scroller" style="height: 810px;" data-always-visible="1" data-rail-visible1="1">
                                    <ul class="chats">

                                        <?php
                                        $arr1=array('4','5','6');
                                        $arr2=array('1','2');
                                        $arr3=array('3');
                                        $arr4=array('7');
                                        $arr5=array('8');
                                        $arr6=array('9');
                                        foreach($latestRides as $latestRides ) {
                                            $image=($latestRides['image']!='' && $latestRides['image']!=NULL) ? "user_image/".$latestRides['image'] : 'upload/no-image-icon.png';
                                           if (array_key_exists('status',$latestRides) &&  in_array($latestRides['status'],$arr1)) { ?>

                                        <li class="out">

                                            <img class="avatar" alt="" src="<?php echo base_url($image); ?>" />
                                            <div class="message">
                                                <span class="date"><b> <?php echo date('d M Y',strtotime($latestRides['pickup_date_time'])); ?></b></span>
                                                <span class="arrow"> </span>
                                                <a href="javascript:;" class="name"> <?php echo $latestRides['username']; ?> </a>
                                                <span class="datetime">at  <?php echo date('h:i a',strtotime($latestRides['pickup_date_time'])); ?> </span>
                                                <div class="addresses">
                                                    <div class="from-address">
                                                        <p class="job-address"><span>- From</span><br /><i class="fa fa-map-marker"></i><?php echo $latestRides['pickup_area']; ?></p>
                                                    </div>
                                                    <div class="to-address">
                                                        <p class="job-address"><span>- To</span><br /><i class="fa fa-map-marker"></i><?php echo $latestRides['drop_area']; ?></p>
                                                    </div>
                                                    <a href="<?php echo base_url('view_booking/'.$latestRides['id']); ?>">Read More</a>
                                                </div>
                                            </div>
                                        </li>
                                               <?php }  else {

                                               if (array_key_exists('status',$latestRides) &&  in_array($latestRides['status'],$arr2)) {


                                               ?>


                                        <li class="in">
                                            <img class="avatar" alt="" src="<?php echo base_url($image); ?>" />
                                            <div class="message pendingBorder">
                                                <span class="date"><b><?php echo date('d M Y',strtotime($latestRides['pickup_date_time'])); ?></b></span>
                                                <span class="arrow pendingArrow"> </span>
                                                <a href="javascript:;" class="name"> <?php echo $latestRides['username']; ?> </a>
                                                <span class="datetime"> at  <?php echo date('h:i a',strtotime($latestRides['pickup_date_time'])); ?> </span>
                                                <div class="addresses">
                                                    <div class="from-address">
                                                        <p class="job-address"><span>- From</span><br /><i class="fa fa-map-marker pendingColor"></i><?php echo $latestRides['pickup_area']; ?></p>
                                                    </div>
                                                    <div class="to-address">
                                                        <p class="job-address"><span>- To</span><br /><i class="fa fa-map-marker pendingColor"></i><?php echo $latestRides['drop_area']; ?></p>
                                                    </div>
                                                    <a href="<?php echo base_url('view_booking/'.$latestRides['id']); ?>">Read More</a>

                                                </div>
                                            </div>
                                        </li>
                                               <?php }
                                           elseif(array_key_exists('status',$latestRides) &&  in_array($latestRides['status'],$arr3)) { ?>
                                               <li class="in">
                                                   <img class="avatar" alt="" src="<?php echo base_url($image); ?>" />
                                                   <div class="message acceptedBorder">
                                                       <span class="date"><b><?php echo date('d M Y',strtotime($latestRides['pickup_date_time'])); ?></b></span>
                                                       <span class="arrow acceptedArrow"> </span>
                                                       <a href="javascript:;" class="name"> <?php echo $latestRides['username']; ?> </a>
                                                       <span class="datetime"> at  <?php echo date('h:i a',strtotime($latestRides['pickup_date_time'])); ?> </span>
                                                       <div class="addresses">
                                                           <div class="from-address">
                                                               <p class="job-address"><span>- From</span><br /><i class="fa fa-map-marker acceptedColor"></i><?php echo $latestRides['pickup_area']; ?></p>
                                                           </div>
                                                           <div class="to-address">
                                                               <p class="job-address"><span>- To</span><br /><i class="fa fa-map-marker acceptedColor"></i><?php echo $latestRides['drop_area']; ?></p>
                                                           </div>
                                                           <a href="<?php echo base_url('view_booking/'.$latestRides['id']); ?>">Read More</a>

                                                       </div>
                                                   </div>
                                               </li>
                                          <?php  }
                                               elseif(array_key_exists('status',$latestRides) &&  in_array($latestRides['status'],$arr4)) { ?>
                                                   <li class="in">
                                                       <img class="avatar" alt="" src="<?php echo base_url($image); ?>" />
                                                       <div class="message arrivedBorder">
                                                           <span class="date"><b><?php echo date('d M Y',strtotime($latestRides['pickup_date_time'])); ?></b></span>
                                                           <span class="arrow arrivedArrow"> </span>
                                                           <a href="javascript:;" class="name"> <?php echo $latestRides['username']; ?> </a>
                                                           <span class="datetime"> at  <?php echo date('h:i a',strtotime($latestRides['pickup_date_time'])); ?> </span>
                                                           <div class="addresses">
                                                               <div class="from-address">
                                                                   <p class="job-address"><span>- From</span><br /><i class="fa fa-map-marker arrivedColor"></i><?php echo $latestRides['pickup_area']; ?></p>
                                                               </div>
                                                               <div class="to-address">
                                                                   <p class="job-address"><span>- To</span><br /><i class="fa fa-map-marker arrivedColor"></i><?php echo $latestRides['drop_area']; ?></p>
                                                               </div>
                                                               <a href="<?php echo base_url('view_booking/'.$latestRides['id']); ?>">Read More</a>

                                                           </div>
                                                       </div>
                                                   </li>
                                                   <?php }

                                               elseif(array_key_exists('status',$latestRides) &&  in_array($latestRides['status'],$arr5)) { ?>
                                                   <li class="in">
                                                       <img class="avatar" alt="" src="<?php echo base_url($image); ?>" />
                                                       <div class="message ontripBorder" >
                                                           <span class="date"><b><?php echo date('d M Y',strtotime($latestRides['pickup_date_time'])); ?></b></span>
                                                           <span class="arrow ontripArrow"> </span>
                                                           <a href="javascript:;" class="name"> <?php echo $latestRides['username']; ?> </a>
                                                           <span class="datetime"> at  <?php echo date('h:i a',strtotime($latestRides['pickup_date_time'])); ?> </span>
                                                           <div class="addresses">
                                                               <div class="from-address">
                                                                   <p class="job-address"><span>- From</span><br /><i class="fa fa-map-marker ontripColor"></i><?php echo $latestRides['pickup_area']; ?></p>
                                                               </div>
                                                               <div class="to-address">
                                                                   <p class="job-address"><span>- To</span><br /><i class="fa fa-map-marker ontripColor"></i><?php echo $latestRides['drop_area']; ?></p>
                                                               </div>
                                                               <a href="<?php echo base_url('view_booking/'.$latestRides['id']); ?>">Read More</a>

                                                           </div>
                                                       </div>
                                                   </li>
                                          <?php }
                                               elseif(array_key_exists('status',$latestRides) &&  in_array($latestRides['status'],$arr6)) { ?>
                                                   <li class="in">
                                                       <img class="avatar" alt="" src="<?php echo base_url($image); ?>" />
                                                       <div class="message" style="border-right:yellow">
                                                           <span class="date"><b><?php echo date('d M Y',strtotime($latestRides['pickup_date_time'])); ?></b> </span>
                                                           <span class="arrow"> </span>
                                                           <a href="javascript:;" class="name"> <?php echo $latestRides['username']; ?> </a>
                                                           <span class="datetime"> at  <?php echo date('h:i a',strtotime($latestRides['pickup_date_time'])); ?> </span>
                                                           <div class="addresses">
                                                               <div class="from-address">
                                                                   <p class="job-address"><span>- From</span><br /><i class="fa fa-map-marker"></i><?php echo $latestRides['pickup_area']; ?></p>
                                                               </div>
                                                               <div class="to-address">
                                                                   <p class="job-address"><span>- To</span><br /><i class="fa fa-map-marker"></i><?php echo $latestRides['drop_area']; ?></p>
                                                               </div>
                                                               <a href="<?php echo base_url('view_booking/'.$latestRides['id']); ?>">Read More</a>

                                                           </div>

                                                       </div>

                                                   </li>
                                          <?php } } ?>

                                        <?php } ?>
                                    </ul>
                                    <a href="<?php echo base_url('bookings'); ?>">Read More</a>
                                </div>

                            </div>
                        </div>
                        <!-- END PORTLET-->
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-xs-12 col-sm-12">
                        <div class="portlet light bordered">
                            <div class="portlet-title tabbable-line">
                                <div class="caption">
                                    <i class=" icon-social-twitter font-dark hide"></i>
                                    <span class="caption-subject font-dark bold uppercase">Payment Request</span>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="row">
<?php if (count($transaction)>0) {
foreach ($transaction as $transaction) {


 ?>
                                    <div class="col-lg-6 parent">
                                        <div class="panel panel-primary">
                                            <!-- Default panel contents -->
                                            <div class="panel-heading payment-request-head">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                        <img alt="" class="img-circle" src="<?php echo base_url('driverimages/'.$transaction["image"]); ?>" width="70px;">
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 requster-info">

                                                        <h3 class="panel-title"><b><?php echo $transaction['name']; ?></b></h3>
                                                        <span class="requster-status">Driver</span>
                                                        <span class="request-time">2 hours ago</span>
                                                    </div>

                                                </div>

                                            </div>

                                            <!-- List group -->
                                            <ul class="list-group">
                                                <li class="list-group-item"><i class="fa fa-money"></i> Amount Requested
                                                    <span class="badge label label-sm label-primary"> $<?php echo $transaction['amount']; ?> </span>
                                                </li>
                                                <li class="list-group-item"><i class="fa fa-money"></i> Current Balance
                                                    <span class="badge label  label-sm label-success"> $<?php echo $transaction['current_balance']; ?></span>
                                                </li>
                                                <li class="list-group-item"><i class="fa fa-money"></i> Amount Remains
                                                    <span class="badge label label-sm label-danger"> $<?php echo ($transaction['current_balance']-$transaction['amount']); ?> </span>
                                                </li>
                                                <li class="list-group-item text-center">
                                                    <div class="Proceed" id="Proceed">
                                                        <button type="button" class="btn red-mint" onClick="showProceedForm(this);">&nbsp;PROCEED WITH TRANSFER&nbsp;</button>
                                                    </div>
                                                    <div class="proceedForm" id="proceedForm">
                                                        <form role="form" action="javascript:void(0)">
                                                            <div class="row">
                                                                <div class="col-lg-9">
                                                                    <input type="text" placeholder="Enter transaction ID" data-val="<?php echo $transaction['id']; ?>" class="transactionId" class="form-control">
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <button class="btn red-mint payRequest" type="submit" style="margin-left:-18px;">Pay</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php } } else {
    echo '<div class="col-lg-6">
                                        <div class="panel panel-primary">
                                            <!-- Default panel contents -->
                                            <div class="panel-heading payment-request-head">
                                            No data Found </div></div></div>';
} ?>


                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-6 col-xs-12 col-sm-12">
                        <div class="portlet light bordered">
                            <div class="portlet-title tabbable-line">
                                <div class="caption">
                                    <i class=" icon-social-twitter font-dark hide"></i>
                                    <span class="caption-subject font-dark bold uppercase">Quick Actions</span>
                                </div>
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#tab_actions_users" data-toggle="tab"> Users </a>
                                    </li>
                                    <li>
                                        <a href="#tab_actions_drivers" data-toggle="tab"> Drivers </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="portlet-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_actions_users">
                                        <!-- BEGIN: Actions -->
                                        <div class="mt-actions">
                                            <?php foreach ($usersStatus as $users) { ?>
                                            <div class="mt-action">
                                                <div class="mt-action-img">
                                                    <?php $image=($users['image']!='' && $users['image']!=NULL ) ? "user_image/".$users['image'] : 'upload/no-image-icon.png';  ?>
                                                    <img src="<?php echo base_url($image); ?>" width="30" height="30"/> </div>
                                                <div class="mt-action-body">
                                                    <div class="mt-action-row">
                                                        <div class="mt-action-info ">

                                                            <div class="mt-action-details ">
                                                                <span class="mt-action-author"><?php echo $users['name'] ?></span>
                                                                <p class="mt-action-desc" style="word-break: break-all;"><?php echo $users['email'] ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="mt-action-datetime ">
                                                            <span class="mt-action-date"><?php echo date('d M',strtotime($users['created_at'])); ?></span>
                                                            <?php if($users['user_status']=='Active') {?>
                                                            <span class="mt-action-dot bg-green"></span>
                                                            <?php }?>
                                                            <?php if($users['user_status']=='Inactive') {?>
                                                                <span class="mt-action-dot bg-red"></span>
                                                            <?php }?>

                                                        </div>
                                                        <div class="mt-action-buttons ">
                                                            <div class="btn-group btn-group-circle">
                                                                <?php $Active=($users['user_status']=='Active') ? 'active' : ''; ?>
                                                                <?php $Inactive=($users['user_status']=='Inactive') ? 'active' : ''; ?>
                                                                <button type="button" class="btn btn-outline green btn-sm  AcptRjct <?php echo $Active; ?>" style="padding: 8px 14px 7px;" data-val="users" data-id="<?php echo $users['id']; ?>" value="Active">Approve</button>
                                                                <button type="button" class="btn btn-outline red btn-sm AcptRjct <?php echo $Inactive; ?>" style="padding: 8px 14px 7px;" data-val="users" data-id="<?php echo $users['id']; ?>" value="Inactive">Reject</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php } ?>


                                        </div>
                                        <!-- END: Actions -->
                                    </div>
                                    <div class="tab-pane" id="tab_actions_drivers">
                                        <!-- BEGIN:Completed-->
                                        <div class="mt-actions">
                                            <?php foreach($driverStatus as $drivers) {

                                             ?>
                                            <div class="mt-action">
                                                <div class="mt-action-img">
                                                    <img src="<?php echo base_url("driverimages/".$drivers['image']); ?>" width="30" height="30"/> </div>
                                                <div class="mt-action-body">
                                                    <div class="mt-action-row">
                                                        <div class="mt-action-info ">

                                                            <div class="mt-action-details ">
                                                                <span class="mt-action-author"><?php echo $drivers['name']; ?> </span>
                                                                <p class="mt-action-desc" style="word-break: break-all"><?php echo $drivers['email']; ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="mt-action-datetime ">
                                                            <span class="mt-action-date"><?php echo date('d M',strtotime($drivers['created_at'])); ?></span>
                                                            <?php if($drivers['status'] == 'Active') {?>
                                                            <span class="mt-action-dot bg-green"></span>
                                                            <?php } ?>
                                                            <?php if($drivers['status'] == 'Inactive') {?>
                                                                <span class="mt-action-dot bg-red"></span>
                                                            <?php } ?>

                                                        </div>
                                                        <?php $Active=($drivers['status']=='Active') ? 'active' : ''; ?>
                                                        <?php $Inactive=($drivers['status']=='Inactive') ? 'active' : ''; ?>
                                                        <div class="mt-action-buttons ">
                                                            <div class="btn-group btn-group-circle">
                                                                <button type="button" class="btn btn-outline green btn-sm AcptRjct <?php echo $Active; ?>" data-val="drivers" style="padding: 8px 14px 7px;" data-id="<?php echo $drivers['id']; ?>" value="Active">Approve</button>
                                                                <button type="button" class="btn btn-outline red btn-sm AcptRjct <?php echo $Inactive; ?>" data-val="drivers" style="padding: 8px 14px 7px;" data-id="<?php echo $drivers['id']; ?>" value="Inactive">Reject</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php } ?>


                                            <!-- END: Completed -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>





            </div>
        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
    <!-- BEGIN QUICK SIDEBAR -->
    <?php //$this->load->view('quick_sidebar'); ?>

    <input type="hidden" id="rides" value='<?php echo $userChart; ?>'/>
    <input type="hidden" id="revenue" value='<?php echo $revenueChart; ?>'/>
    <!-- END QUICK SIDEBAR -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<?php $this->load->view('footer'); ?>
<!-- END FOOTER -->

<!-- BEGIN QUICK NAV -->
<nav class="quick-nav hidden">
    <a class="quick-nav-trigger" href="#0">
        <span aria-hidden="true"></span>
    </a>
    <ul>
        <li>
            <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" target="_blank" class="active">
                <span>Purchase Metronic</span>
                <i class="icon-basket"></i>
            </a>
        </li>
        <li>
            <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/reviews/4021469?ref=keenthemes" target="_blank">
                <span>Customer Reviews</span>
                <i class="icon-users"></i>
            </a>
        </li>
        <li>
            <a href="http://keenthemes.com/showcast/" target="_blank">
                <span>Showcase</span>
                <i class="icon-user"></i>
            </a>
        </li>
        <li>
            <a href="http://keenthemes.com/metronic-theme/changelog/" target="_blank">
                <span>Changelog</span>
                <i class="icon-graph"></i>
            </a>
        </li>
    </ul>
    <span aria-hidden="true" class="quick-nav-bg"></span>
</nav>
<div class="quick-nav-overlay"></div>
<!-- END QUICK NAV -->
<!--[if lt IE 9] -->

<?php $this->load->view('js'); ?>

<script src="<?php echo base_url("assets/pages/scripts/dashboard.js"); ?>" type="text/javascript"></script>
<script src="<?php echo base_url("assets/global/plugins/bootstrap-sweetalert/sweetalert.min.js"); ?>" type="text/javascript"></script>
<script src="<?php echo base_url("assets/pages/scripts/ui-sweetalert.min.js"); ?>" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>

    $(document).ready(function () {
        $('body').on('click','.sweetAlt',function () {

        });

    });

    $("#proceedForm").hide();
    function showProceedForm(element){
        $(element).parent().parent().find(".proceedForm").slideDown().show();
        $(element).parent().parent().find(".Proceed").slideDown().hide();
    }

$(document).on('click','.payRequest',function(){
   // var confirmDialog=confirm('Are you sure to payout this request?');
    var t_id=$(this).parent().parent().parent().parent().find('.transactionId').val();
    var id=$(this).parent().parent().parent().parent().find('.transactionId').attr('data-val');
    var parent=findParent(this);
        swal({
                title: "Are you sure to payout this request?",
                text: "You will not be able to undo this request...",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: 'btn-danger',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: "No, cancel !",
                closeOnConfirm: false,
                closeOnCancel: false
            },
            function (isConfirm) {
                if (isConfirm) {
                    $.post('dashboard/update_transaction',{transaction:t_id,id:id},function(response){
                        $(parent).addClass('hidden');
                    });
                    swal("Done!", "Payout request successfully done", "success");
                } else {
                    $(parent).find(".proceedForm").slideDown().hide();
                    $(parent).find(".Proceed").slideDown().show();
                    $(parent).find('.transactionId').val('');
                    swal("Cancelled", "You cancelled last payout request :)", "error");
                }
            });




});


    $('.AcptRjct').click(function(){
        var val=$(this).val();



        var id=$(this).attr('data-id');
        var param=$(this).attr('data-val');
        var element=$(this).parent().parent().parent().find('.mt-action-dot');
        var btn=$(this).parent().find('.AcptRjct');
        var btnAct=$(this);

        $.post('<?php echo base_url(); ?>/Dashboard/ActDeactStatus/',{status:val,id:id,param:param},function(response){

            sweetAlert("Done...", response, "success");
            if(val=='Active')
            {
                $(element).removeClass('bg-red');

                $(element).addClass('bg-green');
                if($(btn).hasClass('active'))
                    $(btn).removeClass('active');
                $(btnAct).addClass('active');

            }
            else
            {
                $(element).removeClass('bg-green');

                $(element).addClass('bg-red');
                if($(btn).hasClass('active'))
                    $(btn).removeClass('active');
                $(btnAct).addClass('active');
            }

        });
    });

    function findParent(element) {
        var parentElement = $(element).parent();
        if ($(parentElement).hasClass("parent"))
            return parentElement;
        else {
            for (var i = 0; i < 12; i++) {
                parentElement = $(parentElement).parent();
                if ($(parentElement).hasClass("parent"))
                    return parentElement;
            }
        }
    }
</script>
</body>

</html>
