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
    <?php $this->load->view('css');?>
    <meta charset="utf-8" />
    <title>Metronic Admin Theme #1 | Managed Datatables</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Preview page of Metronic Admin Theme #1 for managed datatable samples" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <!--    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />-->
    <!--    <link href="assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />-->
    <!--    <link href="assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />-->
    <!--    <link href="assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />-->
    <!--    <link href="assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />-->
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="<?php echo base_url("assets/global/plugins/datatables/datatables.min.css"); ?> rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url("assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css"); ?> rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url("assets/global/plugins/bootstrap-sweetalert/sweetalert.css"); ?> rel="stylesheet" type="text/css"
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="<?php echo base_url("assets/global/css/components-md.min.css"); ?>" rel="stylesheet" id="style_components" type="text/css" />
    <link href="<?php echo base_url("assets/global/css/plugins-md.min.css"); ?>" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->

    <link href="<?php echo base_url("assets/global/plugins/datatables/datatables.min.css"); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url("assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css"); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url("assets/global/plugins/bootstrap-sweetalert/sweetalert.css"); ?>" rel="stylesheet" type="text/css"
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="<?php echo base_url("assets/global/css/components-md.min.css"); ?>" rel="stylesheet" id="style_components" type="text/css" />
    <link href="<?php echo base_url("assets/global/css/plugins-md.min.css"); ?>" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->

    <!-- END THEME LAYOUT STYLES -->
</head>
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
                <div class="theme-panel hidden-xs hidden-sm" style="display: none;">
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
                    </ul>

                </div>
                <!-- END PAGE BAR -->
                <!-- BEGIN PAGE TITLE-->
                <h1 class="page-title"></h1>
                <!-- END PAGE TITLE-->
                <!-- END PAGE HEADER-->
                <div class="row">
                    <div class="col-md-12">
                        <!-- BEGIN EXAMPLE TABLE PORTLET-->
                        <div class="portlet light bordered">
                            <div class="portlet-title">
                                <div class="caption font-dark">
                                    <i class="icon-tag font-dark"></i>
                                    <span class="caption-subject bold uppercase"> ADMIN PROFILE</span>
                                </div>
                            </div>
                            <div>
                                <div class="portlet-body">

                                    <div class="tab-pane active" id="tab_1">
                                        <form role="form" method="post" action="<?php echo base_url('Admin_profile/submit_now'); ?>" enctype="multipart/form-data" id="myform" novalidate="novalidate">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group form-md-line-input form-md-floating-label">
                                                            <input type="text" class="form-control edited" name="name" id="name" value="<?php echo is_null($data)?'':$data->name; ?>">
                                                            <label for="form_control_pickup_address"> Name :</label>
                                                            <span class="help-block " id="name_validate"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group form-md-radios">
                                                            <label>Gender : </label>
                                                            <div class="md-radio-inline">
                                                                <div class="md-radio">
                                                                    <input type="radio" id="radio1" name="gender" value="male" class="md-radiobtn" <?php echo $data->gender == 'male'?'checked':''; ?>>
                                                                    <label for="radio1">
                                                                        <span></span>
                                                                        <span class="check"></span>
                                                                        <span class="box"></span>Male </label>
                                                                </div>
                                                                <div class="md-radio">
                                                                    <input type="radio" id="radio2" name="gender" value="female" class="md-radiobtn" <?php echo $data->gender == 'female'?'checked':''; ?> >
                                                                    <label for="radio2">
                                                                        <span></span>
                                                                        <span class="check"></span>
                                                                        <span class="box"></span> Female </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">

                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group form-md-line-input form-md-floating-label   coupon_code">
                                                            <input type="text" class="form-control edited" name="username" id="username" value="<?php echo $data->username; ?>">
                                                            <label for="form_control_coupon_code">Username : </label>
                                                            <span class="help-block" id="username_validate"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group form-md-line-input form-md-floating-label   coupon_code">
                                                            <input type="email" class="form-control edited" name="email" id="email" value="<?php echo $data->email; ?>">
                                                            <label for="form_control_coupon_code">Email : </label>
                                                            <span class="help-block" id="email_validate"></span>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">

                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group form-md-line-input form-md-floating-label">
                                                            <input type="text" class="form-control edited" name="mobile" id="mobile" value="<?php echo $data->mobile; ?>">
                                                            <label for="form_control_amount">Mobile : </label>
                                                            <span class="help-block" id="mobile_validate"></span>
                                                        </div>
                                                    </div>

                                                </div>
                                                <br>
                                                <div class="file-upload">
                                                    <label for="inputLicense" style="color: #999999 !important; font-size: 16px;">
                                                        Profile Image
                                                        <span> ( Upload Profile Image ) </span>
                                                    </label>
                                                    <div class="fileinput fileinput-new full-width" data-provides="fileinput">
                                                        <div class="fileinput-preview thumbnail click" data-trigger="fileinput" style="width: 100%; height: 150px; line-height: 150px;">
                                                            <img src="adminimage/<?php echo $data->image; ?>"  style="max-height: 150px; line-height: 150px;" id="image" >
                                                        </div><script> var NO_back = 'adminimage/<?php echo $data->image; ?>'; </script>
                                                        <span class="btn red btn-file" ><span class="fileinput-new click">Select image</span>
                                                                <span class="fileinput-exists click">Change</span>
                                                                <input type="file" class="hidden" id="fileinput" name="profile_img">
                                                            </span>
                                                        <a class="btn dark RemoveBtn pull-right" id="remove">Remove</a>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 clearfix">
                                                        <div class="form-actions pull-right">
                                                            <div class="btn-set">
                                                                <button type="submit" class="btn red">Save / Submit</button>
                                                                <button type="button" class="btn blue">Reset</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END EXAMPLE TABLE PORTLET-->
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
    <input type="hidden" name="filter_col" id="filter_col" value=""/>
    <?php $this->load->view('footer'); ?>
    <!-- END FOOTER -->
</div>
<div class="modal modal-alert modal-danger fade" id="uidemo-modals-alerts-delete-user">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <i style="font-size:35px;" class="glyphicon glyphicon-trash"></i>
            </div>
            <div class="modal-title">Are you sure to delete this tag?</div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <button id="confirm-delete-button" onclick="delete_single_user_action()" data-dismiss="modal" class="btn btn-primary" type="button">Ok</button>
                <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <input type="hidden" value="" id="bookedid" name="bookedid">
                <button id="cancel-delete-button" data-dismiss="modal" class="btn btn-primary" type="button">Cancel</button>
            </div>
        </div> <!-- / .modal-content -->
    </div> <!-- / .modal-dialog -->
</div>
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


<!-- BEGIN PAGE LEVEL PLUGINS -->
<?php $this->load->view('js'); ?>
<script src="<?php echo base_url("assets/global/plugins/datatables/datatables.min.js"); ?>" type="text/javascript"></script>
<script src="<?php echo base_url("assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js"); ?>" type="text/javascript"></script>
<script src="<?php echo base_url("assets/global/plugins/bootstrap-sweetalert/sweetalert.min.js"); ?>" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url("assets/pages/scripts/table-datatables-managed.min.js"); ?>" type="text/javascript"></script>
<script src="<?php echo base_url("assets/pages/scripts/ui-sweetalert.min.js"); ?>" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->

<!-- END THEME LAYOUT SCRIPTS -->
<script>
    $(document).ready(function()
    {
        $('#clickmewow').click(function()
        {
            $('#radio1003').attr('checked', 'checked');
        });
    })

    $(document).ready(function () {
        $('body').on('click','.sweetAlt',function ()
        {
            swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this record!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: 'btn-danger',
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: "No, cancel plx!",
                    closeOnConfirm: false,
                    closeOnCancel: false
                },
                function (isConfirm) {
                    if (isConfirm) {
                        delete_user();
                        swal("Deleted!", "Your record has been deleted!", "success");
                    } else {
                        swal("Cancelled", "Your record is safe :)", "error");
                    }
                });
        });
        $('.click').click(function () {
            $('#fileinput').trigger('click');
        });
        document.getElementById("fileinput").onchange = function () {
            var reader = new FileReader();

            reader.onload = function (e) {
                // get loaded data and render thumbnail.
                document.getElementById("image").src = e.target.result;
            };

            // read the image file as a data URL.
            reader.readAsDataURL(this.files[0]);
        };
        $('#remove').click(function () {
            document.getElementById("image").src = NO_back;
        });
    });
</script>
</body>