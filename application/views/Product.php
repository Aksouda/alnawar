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
                                    <span class="caption-subject bold uppercase"> Manage Product</span>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="table-toolbar">
                                    <div class="row">
                                        <div class="col-md-6 col-xs-6">
                                            <div class="btn-group">
                                                <button class=" sweetAlt btn sbold red mt-sweetalert"> <i class="fa fa-trash-o" style="font-size: 18px;"></i> Multiple Delete</button>
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
                                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="example">



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

    });
</script>
<script type="text/javascript" language="javascript" >

    $(document).ready(function() {
        $.urlParam=function(name) {
            var results = new RegExp('[\\?&]' + name + '=([^&#]*)').exec(window.location.href);
            if (!results)
            {
                return '';
            }
            return results[1] || '';
        };
        if($('#filter_col').val()=='flag')
        {
            var filter=$.urlParam('flag');
        }
        if(!filter){
            filter='';
        }
        var dataTable = $('#example').DataTable( {
            "processing": true,
            "serverSide": true,
            "bSortable" : true,
            //"oSearch": {"sSearch": filter},
            "aaSorting": [[0, 'desc']],
            "aoColumns": [
                {
                    "targets": [ 0 ],
                    "sTitle":'<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline" style="margin-left: 20%;"><input id="allcheck" type="checkbox" class="deleteRow checkboxes" ><span></span></label>',
                    "visible": true,
                    "searchable": false,
                    "sortable" :false
                }
                ,{
                    "sName" : "name",
                    "sTitle" : "Name",
                    "targets": [ 1 ],
                    "visible": true,
                    "searchable": true,
                    "sortable" :true
                },
                {
                    "sName" : "type",
                    "sTitle" : "Type",
                    "targets": [ 2 ],
                    "visible": true,
                    "searchable": true,
                    "sortable" :true
                },
                {
                    "sName" : "cat",
                    "sTitle" : "Catagory",
                    "targets": [ 3 ],
                    "visible": true,
                    "searchable": true,
                    "sortable" :true

                },
                {
                    "sName" : "price",
                    "sTitle" : "Price",
                    "targets": [ 4 ],
                    "visible": true,
                    "searchable": true,
                    "sortable" :true

                },
                {
                    "sName" : "stock",
                    "sTitle" : "Stock",
                    "targets": [ 5 ],
                    "visible": true,
                    "searchable": true,
                    "sortable" :true

                },
                {
                    "sName" : "status",
                    "sTitle" : "Status",
                    "targets": [ 6 ],
                    "visible": true,
                    "searchable": true,
                    "sortable" :true

                },
                {
                    "sName" : "update",
                    "sTitle" : "Update",
                    "targets": [ 7 ],
                    "visible": true,
                    "searchable": true,
                    "sortable" :true

                },
                {
                    "sName" : "action",
                    "sTitle" : "Action",
                    "targets": [ 8 ],
                    "visible": true,
                    "searchable": false,
                    "sortable" :false

                }

            ],
            "ajax":{
                url : '<?php echo base_url(); ?>Product/get_product_data', // json datasource
                type: "post",  // method  , by default get
                data: {data_id: filter},
                error: function(){  // error handling
                    $(".booking-grid-error").html("");
                    $("#example").append('<tbody class="booking-grid-error"><tr><th colspan="3">No data found in the server</th></tr></tbody>');
                    $("#booking-grid_processing").css("display","none");
                }
            }
        } );


        $("#allcheck").on('click',function() { // bulk checked
            var status = this.checked;
            $(".deleteRow").each( function() {
                $(this).prop("checked",status);
            });
        });
    } );
    function delete_user(){
        if( $('.deleteRow:checked').length > 0 ){  // at-least one checkbox checked
            var ids = [];
            $('.deleteRow').each(function(){
                if($(this).is(':checked')) {
                    ids.push($(this).val());
                }
            });
            var ids_string = ids.toString();  // array to string conversion
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>Product/delete_product_data",
                data: {data_ids:ids_string},
                success: function(result) {
                    var oTable1 = $('#example').DataTable();
                    oTable1.ajax.reload(null, false);
                },
                async:false
            });
        }
    }
    function delete_single_user(single_id){
        $('#bookedid').val(single_id);
    }
    function status(single_id){
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Product/update_user_status",
            data: {data_id: single_id},
            success: function (result) {
                var oTable1 = $('#example').DataTable();
                oTable1.ajax.reload(null, false);
            },
            async: false
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
    function delete_single_user_action(id)
    {
        swal({
                title: "Are you sure?",
                text: "You will not be able to recover this imaginary file!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: false
            },
            function(){
                //var single_id = $('#bookedid').val();
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url(); ?>Product/delete_single_product_data",
                    data: {data_id: id},
                    success: function (result) {
                        //  alert(result);
                        var oTable1 = $('#example').DataTable();
                        oTable1.ajax.reload(null, false);
                    },
                    async: false
                });
                swal("Deleted!", "Your Product has been deleted.", "success");
            });
    }
</script>
</body>
