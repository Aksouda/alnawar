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
<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8"/>
    <title>U Cab</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="Preview page of Metronic Admin Theme #1 for managed datatable samples" name="description"/>
    <meta content="" name="author"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <?php $this->load->view('css'); ?>
    <link href="<?php echo base_url("assets/global/plugins/bootstrap-sweetalert/sweetalert.css"); ?>" rel="stylesheet" type="text/css"
    <!-- include summernote css/js-->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.css" rel="stylesheet">
    <!-- END HEAD -->

<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white page-md">
<div class="page-wrapper">
    <!-- BEGIN HEADER -->
    <?php $this->load->view('header'); ?>
    <!-- END HEADER -->
    <!-- BEGIN HEADER & CONTENT DIVIDER -->
    <div class="clearfix"></div>
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
                    <div class="toggler"></div>
                    <div class="toggler-close"></div>
                    <div class="theme-options">
                        <div class="theme-option theme-colors clearfix">
                            <span> THEME COLOR </span>
                            <ul>
                                <li class="color-default current tooltips" data-style="default" data-container="body"
                                    data-original-title="Default"></li>
                                <li class="color-darkblue tooltips" data-style="darkblue" data-container="body"
                                    data-original-title="Dark Blue"></li>
                                <li class="color-blue tooltips" data-style="blue" data-container="body"
                                    data-original-title="Blue"></li>
                                <li class="color-grey tooltips" data-style="grey" data-container="body"
                                    data-original-title="Grey"></li>
                                <li class="color-light tooltips" data-style="light" data-container="body"
                                    data-original-title="Light"></li>
                                <li class="color-light2 tooltips" data-style="light2" data-container="body"
                                    data-html="true" data-original-title="Light 2"></li>
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
                                <option value="fixed">Fixed</option>
                                <option value="default" selected="selected">Default</option>
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
                    <div class="page-toolbar">
                        <div id="dashboard-report-range" class="pull-right tooltips btn btn-sm" data-container="body" data-placement="bottom" data-original-title="Change dashboard date range">
                            <i class="icon-calendar"></i>&nbsp;
                            <span class="thin uppercase hidden-xs">May 29, 2017 - June 27, 2017</span>&nbsp;
                            <i class="fa fa-angle-down"></i>
                        </div>
                    </div>
                </div>
                <h1 class="page-title"> Admin Dashboard
                </h1>
                <h4> Product Order </h4>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="dashboard-stat2">
                            <div class="display">
                                <div class="number">
                                    <h3 class="font-green-sharp">
                                        <span data-counter="counterup" data-value="<?php echo $wait;?>"><?php echo $wait;?></span>
                                    </h3>
                                    <small>Waiting</small>
                                </div>
                                <div class="icon">
                                    <i class="icon-pie-chart"></i>
                                </div>
                            </div>
                            <div class="progress-info">
                                <div class="progress">
                                            <span style="width: 50%;" class="progress-bar progress-bar-success green-sharp">
                                                <span class="sr-only">50% progress</span>
                                            </span>
                                </div>
                                <div class="status">
                                    <div class="status-title"> Waiting </div>
                                    <div class="status-number"> 50% </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="dashboard-stat2 ">
                            <div class="display">
                                <div class="number">
                                    <h3 class="font-blue-sharp">
                                        <span data-counter="counterup" data-value="<?php echo $proceed;?>"><?php echo $proceed;?></span>
                                    </h3>
                                    <small>PROCESSED</small>
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
                                    <h3 class="font-red-haze">
                                        <span data-counter="counterup" data-value="<?php echo $cencel;?>"><?php echo $cencel;?></span>
                                    </h3>
                                    <small>Cencel</small>
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
                                    <h3 class="font-purple-soft">
                                        <span data-counter="counterup" data-value="<?php echo $all;?>"><?php echo $all;?></span>
                                    </h3>
                                    <small>Total Order</small>
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
                <h4> Product Information</h4>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
                            <div class="visual">
                                <i class="fa fa-thumbs-up"></i>
                            </div>
                            <div class="details">
                                <div class="number">
                                    <span data-counter="counterup" data-value="<?php echo $draft;?>"><?php echo $draft;?></span>
                                </div>
                                <div class="desc"> Draft </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <a class="dashboard-stat dashboard-stat-v2 green" href="#">
                            <div class="visual">
                                <i class="fa fa-hand-stop-o"></i>
                            </div>
                            <div class="details">
                                <div class="number">
                                    <span data-counter="counterup" data-value="<?php echo $pub; ?>"><?php echo $pub; ?></span>
                                </div>
                                <div class="desc"> Published  </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <a class="dashboard-stat dashboard-stat-v2 green" href="#">
                            <div class="visual">
                                <i class="fa fa-hand-stop-o"></i>
                            </div>
                            <div class="details">
                                <div class="number">
                                    <span data-counter="counterup" data-value="<?php echo $avail; ?>"><?php echo $avail; ?></span>
                                </div>
                                <div class="desc"> Available  </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <a class="dashboard-stat dashboard-stat-v2 red" href="#">
                            <div class="visual">
                                <i class="fa fa-close"></i>
                            </div>
                            <div class="details">
                                <div class="number">
                                    <span data-counter="counterup" data-value="<?php echo $out;?>"><?php echo $out;?></span></div>
                                <div class="desc">Out of Stock </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <a class="dashboard-stat dashboard-stat-v2 purple" href="#">
                            <div class="visual">
                                <i class="fa fa-close"></i>
                            </div>
                            <div class="details">
                                <div class="number">
                                    <span data-counter="counterup" data-value="<?php echo $inactive;?>"><?php echo $inactive;?></span></div>
                                <div class="desc"> Inactive </div>
                            </div>
                        </a>
                    </div>
                </div>
                <h4> Category Information </h4>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="dashboard-stat2">
                            <div class="display">
                                <div class="number">
                                    <h3 class="font-green-sharp">
                                        <span data-counter="counterup" data-value="<?php echo $cat_draft;?>"><?php echo $cat_draft;?></span>
                                    </h3>
                                    <small>Draft</small>
                                </div>
                                <div class="icon">
                                    <i class="icon-pie-chart"></i>
                                </div>
                            </div>
                            <div class="progress-info">
                                <div class="progress">
                                            <span style="width: 50%;" class="progress-bar progress-bar-success green-sharp">
                                                <span class="sr-only">50% progress</span>
                                            </span>
                                </div>
                                <div class="status">
                                    <div class="status-title"> Waiting </div>
                                    <div class="status-number"> 50% </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="dashboard-stat2">
                            <div class="display">
                                <div class="number">
                                    <h3 class="font-green-sharp">
                                        <span data-counter="counterup" data-value="<?php echo $cat_publish;?>"><?php echo $cat_publish;?></span>
                                    </h3>
                                    <small>Publish</small>
                                </div>
                                <div class="icon">
                                    <i class="icon-pie-chart"></i>
                                </div>
                            </div>
                            <div class="progress-info">
                                <div class="progress">
                                            <span style="width: 50%;" class="progress-bar progress-bar-success green-sharp">
                                                <span class="sr-only">50% progress</span>
                                            </span>
                                </div>
                                <div class="status">
                                    <div class="status-title"> Waiting </div>
                                    <div class="status-number"> 50% </div>
                                </div>
                            </div>
                        </div>
                    </div>


            <!-- END BEGIN PROFILE SIDEBAR -->
            <!-- BEGIN PROFILE CONTENT -->
            <div class="modal modal-alert modal-danger fade" id="uidemo-modals-alerts-delete-user">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            CHANGE PASSWORD
                        </div>
                        <div class="modal-title"></div>
                        <div class="modal-body">
                            <form   class="form-horizontal"  name="change_password">

                                <div class="form-group">
                                    <label class="col-lg-1 control-label" for="name" style="width: 15%;">New Password *</label>
                                    <div id="inputUserName" class="col-lg-11" style="width: 85%;">
                                        <input type="password"  placeholder="New Password" name="new_password" id="new_password" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-1 control-label" for="name" style="width: 15%;">Confirm Password *</label>
                                    <div id="inputUserName" class="col-lg-11" style="width: 85%;">
                                        <input type="password"  placeholder="Confirm Password" name="confirm_password" id="confirm_password" class="form-control">
                                    </div>
                                </div>






                        </div>
                        <div class="modal-footer">
                            <button data-dismiss="" class="btn btn-primary submit" type="button">Change Password</button>
                            <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <input type="hidden" value="" id="bookedid" name="bookedid">
                            <button data-dismiss="modal" class="btn btn-primary cancel" type="button">Cancel</button>
                        </div>
                        </form>
                    </div> <!-- / .modal-content -->
                </div> <!-- / .modal-dialog -->
            </div>


            <!-- END PROFILE CONTENT -->
        </div>

                <h4> Application Setting </h4>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
                            <div class="visual">
                                <i class="fa fa-thumbs-up"></i>
                            </div>
                            <div class="details">
                                <div class="number">
                                    <span data-counter="counterup" data-value="<?php echo $ad_config[1]['value'];?>"><?php echo $ad_config[1]['value'];?></span>
                                </div>
                                <div class="desc">Currency</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <a class="dashboard-stat dashboard-stat-v2 green" href="#">
                            <div class="visual">
                                <i class="fa fa-hand-stop-o"></i>
                            </div>
                            <div class="details">
                                <div class="number">
                                    <span data-counter="counterup" data-value="<?php echo $ad_config[4]['value'];?>"><?php echo $ad_config[4]['value'];?></span>
                                </div>
                                <div class="desc">Tax</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-xs-12 col-sm-12">
                        <!-- BEGIN PORTLET-->
                        <div class="portlet light bordered">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-bar-chart font-dark hide"></i>
                                    <span class="caption-subject font-dark bold uppercase">Orders</span>
                                    <span class="caption-helper">Monthly stats...</span>
                                </div>
                                <div class="actions">
                                    <div class="btn-group open pull-right">
                                        <a href="" id="okclick" class="btn dark btn-outline btn-circle btn-sm dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-close-others="true" aria-expanded="true"> Filter Range
                                            <span class="fa fa-angle-down"> </span>
                                        </a>
                                        <ul class="dropdown-menu pull-right" >
                                            <?php for($i=0;$i<11;$i++): ?>
                                                <li>
                                                    <a onclick="order_lay(<?php echo (date("Y")-$i); ?>);" href="javascript:;"><?php echo date("Y")-$i; ?>   <span class="label label-sm label-<?php if($i == 0){ echo "warning"; }elseif($i == 1){ echo 'success';}else{ echo 'default'; }?>" onclick="onmychangeEVent(<?php echo (date("Y")-$i); ?>);"> <?php if($i == 0){ echo "Current"; }elseif($i == 1){ echo 'Precious';}else{ echo 'Past'; }?></span>
                                                    </a>
                                                </li>
                                            <?php endfor; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div id="" style="display: none;">
                                    <img src="assets/global/img/loading.gif" alt="loading"> </div>
                                <canvas id="order_canvas" ></canvas>
                                <div style="margin: 20px 0 10px 30px">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                            <span class="label label-sm label-success"> Guest: </span>
                                            <h3 id="order" >$13,234</h3>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                            <span class="label label-sm label-info"> Real: </span>
                                            <h3 id="order" >$134,900</h3>
                                        </div>
                                    </div>
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
                                    <span class="caption-subject font-dark bold uppercase">User</span>
                                    <span class="caption-helper">Years stats...</span>
                                </div>
                                <div class="actions">
                                    <div class="btn-group open pull-right">
                                        <a href="" id="okclick" class="btn dark btn-outline btn-circle btn-sm dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-close-others="true" aria-expanded="true"> Filter Range
                                            <span class="fa fa-angle-down"> </span>
                                        </a>
                                        <ul class="dropdown-menu pull-right" >
                                            <?php for($i=0;$i<11;$i++): ?>
                                                <li>
                                                    <a onclick="onmychangeEVent(<?php echo (date("Y")-$i); ?>);" href="javascript:;"><?php echo date("Y")-$i; ?>   <span class="label label-sm label-<?php if($i == 0){ echo "warning"; }elseif($i == 1){ echo 'success';}else{ echo 'default'; }?>" onclick="onmychangeEVent(<?php echo (date("Y")-$i); ?>);"> <?php if($i == 0){ echo "Current"; }elseif($i == 1){ echo 'Precious';}else{ echo 'Past'; }?></span>
                                                    </a>
                                                </li>
                                            <?php endfor; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div id="" style="display: none;">
                                    <img src="assets/global/img/loading.gif" alt="loading"> </div>
                                <canvas id="canvas" ></canvas>
                                <div style="margin: 20px 0 10px 30px">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                            <span class="label label-sm label-success"> Guest: </span>
                                            <h3 id="chart_guest" >$13,234</h3>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                            <span class="label label-sm label-info"> Real: </span>
                                            <h3 id="chart_real" >$134,900</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END PORTLET-->
                    </div>
                </div>
</div>
<!-- END CONTENT BODY -->
</div>

<!-- END CONTENT -->
<!-- BEGIN QUICK SIDEBAR -->
<?php //$this->load->view('quick_sidebar'); ?>
<!-- END QUICK SIDEBAR -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<?php $this->load->view('footer'); ?>
<!-- END FOOTER -->
</div>
<!-- BEGIN QUICK NAV -->
<nav class="quick-nav hidden">
    <a class="quick-nav-trigger" href="#0">
        <span aria-hidden="true"></span>
    </a>
    <ul>
        <li>
            <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes"
               target="_blank" class="active">
                <span>Purchase Metronic</span>
                <i class="icon-basket"></i>
            </a>
        </li>
        <li>
            <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/reviews/4021469?ref=keenthemes"
               target="_blank">
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
<script src="<?php echo base_url("assets/global/plugins/bootstrap-sweetalert/sweetalert.min.js"); ?>" type="text/javascript"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.js"></script>
<script src="<?php echo base_url("assets/pages/scripts/ui-sweetalert.min.js"); ?>" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->
<script>
    $(".submit").click(function () {

        //$("#new_password").val('');
        //$("#confirm_password").val('');
        var password=$("#new_password").val();
        var conpass=$("#confirm_password").val();
        var id='<?php echo $userDet[0]['id'] ?>';
        if(password===conpass)
        {
            if($("#new_password").val().match(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/)){
                $.post('<?php echo base_url('Users/password'); ?>',{password:password,id:id},function(){
                    setTimeout(function(){
                        swal("Done", "Password changed successfully", "success");
                    }, 150);

                    //$('.submit').attr('data-dismiss','modal');

                    $('.cancel').click();
                    $("#new_password").val('');
                    $("#confirm_password").val('');
                });

            } else {
                // swal("Oops", "Password and Confirm password do not match", "error")
                swal("Oops", "Password should be atleast 7-15 characters long and should contain atleast one uppercase,one lowercase and one digit ", "error");
            }
        }
        else
        {

            swal("Oops", "Password and Confirm password do not match", "error");
        }


    });




    $(document).ready(function () {
        $('#clickmewow').click(function () {
            $('#radio1003').attr('checked', 'checked');
        });
    });
    $(document).on('click', '.filter1', function () {
        var page = $(this).attr('data-page');
        var type = 'filter1';
        $(this).parent('li').addClass('active');
        $.post('<?php echo base_url("view_user/" . $data[0]["id"]); ?>', {
            pageNo: page,
            type: type
        }, function (response) {
            if (response) {
                var parseData = JSON.parse(response);
                //alert(parseData.view);
                $('#portlet_comments_1').html("");
                $('#portlet_comments_1').html(parseData.view);
            }
        });
    });
    $(document).on('click', '.filter2', function () {
        var page = $(this).attr('data-page');
        var type = 'filter2';
        $(this).parent().addClass('active');
        $.post('<?php echo base_url("view_user/" . $data[0]["id"]); ?>', {
            pageNo: page,
            type: type
        }, function (response) {
            if (response) {
                var parseData = JSON.parse(response);
                //alert(parseData.view);
                $('#portlet_comments_2').html("");
                $('#portlet_comments_2').html(parseData.view);
            }
        });
    });
    $(document).on('click', '.filter3', function () {
        var page = $(this).attr('data-page');
        var type = 'filter3';
        $(this).parent().addClass('active');
        $.post('<?php echo base_url("view_user/" . $data[0]["id"]); ?>', {
            pageNo: page,
            type: type
        }, function (response) {
            if (response) {
                var parseData = JSON.parse(response);

                $('#portlet_comments_3').html("");
                $('#portlet_comments_3').html(parseData.view);
            }
        });
    });
    $(document).on('click', '.default12', function () {
        var page = $(this).attr('data-page');

        var type = 'default';

        //$(this).parent('li').addClass('active');
        /*$('li').each(function() {
         $(this).removeClass('active');
         $(this).parent('li').addClass('active');
         });*/

        $.post('<?php echo base_url("view_user/" . $data[0]["id"]); ?>', {
            pageNo: page,
            type: type
        }, function (response) {
            if (response) {
                var parseData = JSON.parse(response);
                $('#portlet_comments_4').html("");
                $('#portlet_comments_4').html(parseData.view);
            }
        });
    });
    //        $('.ajaxCall li').click(function(){
    //            var type = 'defaultvar';
    //           $.post('<?php //echo base_url("view_user/".$data[0]["id"]); ?>//',{type:type},function(response){
    //               if (response) {
    //                   var parseData = JSON.parse(response);
    //                    //$('.page-content-white').html("");
    //                    //$('.page-content-white').html(parseData.view);
    //                  // $('#portlet_comments_3').html("");
    //                  // $('#portlet_comments_3').html(parseData.view);
    //               }
    //           }) ;
    //        });
</script>
<style type="text/css">

    .sweet-alert
    {
        z-index: 10050;
    }
    .sweet-overlay
    {
        z-index: 10050;
    }
</style>
<script>
    $(document).ready(function()
    {
        $('#clickmewow').click(function()
        {
            $('#radio1003').attr('checked', 'checked');
        });
    })
    $("#proceedForm").hide();
    function showProceedForm(){
        $("#proceedForm").slideDown().show();
        $("#Proceed").slideDown().hide();
    }
    function showProceed(){
        $("#proceedForm").slideDown().hide();
        $("#Proceed").slideDown().show();
    }
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 300,                 // set editor height
            minHeight: null,             // set minimum height of editor
            maxHeight: null,             // set maximum height of editor
            focus: true                  // set focus to editable area after initializing summernote
        });
    });
    $('#contact').on('submit',function(){
        var abc = $('#summernote').val();
        if(abc == ''){
            sweetAlert("Oops...", "Something went wrong!", "error");
            return false;
        }
    });
</script>
<script src="http://www.chartjs.org/dist/2.6.0/Chart.bundle.js"></script>
<script src="http://www.chartjs.org/samples/latest/utils.js"></script>
<script>
    function tool_nep(){
        alert('ok');
    }
    var config = {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun','Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                label: "Guest User",
                backgroundColor: window.chartColors.red,
                borderColor: window.chartColors.red,
                data: [],
                fill: false,
            }, {
                label: "Real User",
                fill: false,
                backgroundColor: window.chartColors.blue,
                borderColor: window.chartColors.blue,
                data: [],
            }]
        },
        options: {
            responsive: true,
            title:{
                display:true,
                text:'User Chart'
            },
            tooltips: {
                mode: 'index',
                intersect: false,
            },
            hover: {
                mode: 'nearest',
                intersect: true
            },
            scales: {
                xAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Month'
                    }
                }],
                yAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Value'
                    }
                }]
            }
        }
    };

    var config_order = {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun','Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                label: "Order",
                backgroundColor: window.chartColors.fbc5c5,
                borderColor: window.chartColors.blue,
                data: [],
                fill: true,
            }]
        },
        options: {
            responsive: true,
            title:{
                display:false,
                text:'User Chart'
            },
            tooltips: {
                mode: 'index',
                intersect: false,
            },
            hover: {
                mode: 'nearest',
                intersect: true
            },
            scales: {
                xAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Month'
                    }
                }],
                yAxes: [{
                    display: true,
                    scaleLabel: {
                        type: 'linear',
                        display: true,
                        labelString: 'Value'
                    }
                }]
            }
        }
    };
    window.onload = function() {
        var ctx = document.getElementById("canvas").getContext("2d");
        var ctxd = document.getElementById("order_canvas").getContext("2d");
        window.myLine = new Chart(ctx, config);
        window.myLine1 = new Chart(ctxd, config_order);
    };
    function onmychangeEVent(id) {
        $.ajax({
            'url':'<?php echo base_url('Dashborad/Chartjs');?>/'+id,
            'method':'post',
            'success': function (data) {
                obj = JSON.parse(data);
                config.data.datasets[0].data = obj.guest;
                config.data.datasets[1].data = obj.user;
                window.myLine.update();
                $("#chart_guest").html(obj.total_g);
                $("#chart_real").html(obj.total_r);
            }
        });
    }
    function order_lay(id) {
        $.ajax({
            'url':'<?php echo base_url('Dashborad/Order_way');?>/'+id,
            'method':'post',
            'success': function (data) {
                obj_o = JSON.parse(data);
                config_order.data.datasets[0].data = obj_o.order;
                window.myLine1.update();
                $("#chart_guest").html(obj.total_g);
                $("#chart_real").html(obj.total_r);
            }
        });
    }
    $('document').ready(function() {
        $("#okclick").trigger('click');
        $("#order_lay").trigger('click');
        onmychangeEVent(2017);
        order_lay(2017);
    });
</script>
</body>

</html>