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
    <style>
        body {
            overflow-x: hidden;
        }
    </style>
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
                                    <span class="caption-subject bold uppercase"> Manage Product</span>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="table-toolbar">
                                    <div class="row">
                                        <div class="col-md-6 col-xs-6">
                                            <div class="btn-group">
                                                <button id="multi_delete" class="btn sbold blue"> <i class="fa fa-trash-o" style="font-size: 18px;"></i> Multiple Delete</button>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-6">
                                            <div class="btn-group pull-right">
                                                <button class="btn red"  onclick="window.location.href='<?php echo base_url('Product/add_new_product'); ?>'"> <i class="glyphicon glyphicon-plus"></i>Add
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="reviews">
                                    <thead>
                                    <tr>
                                        <th>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" id="Select_all" class="group-checkable" data-set="#sample_1 .checkboxes" />
                                                <span></span>
                                            </label>
                                        </th>
                                        <th class="text-center"> Name</th>
                                        <th> Type </th>
                                        <th> Price</th>
                                        <th> Category </th>
                                        <th> Stock</th>
                                        <th> Status</th>
                                        <th> Update</th>
                                        <th> Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
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
<!---my model controller-->
<!-- Trigger the modal with a button -->
<button type="button" id="mo_click" class="btn btn-info btn-lg hide" data-toggle="modal" data-target="#myModal">Open Modal</button>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content" id="mo_body">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 id="mo_title" class="modal-title">Modal Header</h4>
            </div>
            <div id="mo_body" class="modal-body">
                <p>Some text in the modal.</p>
            </div>
            <div id="mo_foot" class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
<!---my model controller end-->




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
    function delete_this_product(id) {
        swal({
                title: "Are you sure want to Delete Product ?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, Delete It!",
                closeOnConfirm: false
            },
            function(){
                //swal("Deleted!", "Your Product is Deleted.", "success");
                $.ajax({
                    'url':'<?php echo base_url('Product/delete_now');?>',
                    'data':{'id':id},
                    'success':function (data) {
                        var abc = $('#reviews').DataTable();
                        abc.ajax.reload();
                        swal("Deleted!", "Your Product is Now Deleted.", "success");
                    }
                });
            });
    }
    $("#Select_all").click(function(){
        $('input:checkbox').not(this).prop('checked', this.checked);
    });
    $('#multi_delete').click(function (){
        var abc = ($('.Checkbox:checked').map(function() {
            return this.value;
        }).get().join(', '));
        swal({
                title: "Are you sure?",
                text: "You will not be able to recover this imaginary file!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: false
            },
            function () {
                swal("Deleted!", "Your imaginary file has been deleted.", "success");
                $.ajax({
                    'url':'<?php echo base_url('Product/mul_del'); ?>',
                    'data':{'id':abc},
                    'method':'get',
                    success: function(result) {

                        var table_review = $('#reviews').DataTable();
                        table_review.ajax.reload(null,false);
                        //alert(result);
                    },
                    async:false
                });

            });
    });
    function publish_push(id) {
        swal({
                title: "Are you sure want to publish Product ?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, Make it Publish!",
                closeOnConfirm: false
            },
            function(){

                $.ajax({
                    'url':'<?php echo base_url('Product/publish_now');?>',
                    'data':{'id':id},
                    'success':function (data) {
                        var abc = $('#reviews').DataTable();
                        abc.ajax.reload();
                        swal("Published!", "Your Product is Now Live .", "success");
                    }
                });
            });
    }
    function product_details(id) {
        $.ajax({
            'url':'<?php echo base_url('Product/sep_pro_get'); ?>',
            'method':'get',
            'data':{'id':id},
            'success':function (data) {
                $('#mo_body').html(data);
                $('#mo_click').trigger('click');
            }
        });
    }
    $(document).ready(function()
    {
        $('#clickmewow').click(function()
        {
            $('#radio1003').attr('checked', 'checked');
        });
    });

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

    });
</script>
<script type="text/javascript" language="javascript" >
    $(document).ready(function() {

        $('#clickmewow').click(function () {
            $('#radio1003').attr('checked', 'checked');
        });
        $('#reviews').DataTable({
            ajax: '<?php echo base_url('Product/get_pro_data'); ?>',
            columns: [
                { data: "cheked"},
                { data: "name" },
                { data: "draft" },
                { data: "price" },
                { data: "Category" },
                { data: "stock" },
                { data: "status" },
                { data: "created_at" },
                { data: "Action" }
            ]
        });
    });
</script>
</body>