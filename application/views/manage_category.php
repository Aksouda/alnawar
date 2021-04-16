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
    <title>enter title</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bttrlazyloading/1.0.8/bttrlazyloading.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css" />

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
                                    <i class="icon-user font-dark"></i>
                                    <span class="caption-subject bold uppercase"> Manage Category</span>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6 col-xs-6">
                                    <div class="btn-group">
                                        <button id="multi_delete" onclick="delete_user();" class="btn sbold red"> <i class="fa fa-trash-o" style="font-size: 18px;"></i> Multiple Delete</button>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-6">
                                    <div class="btn-group pull-right">
                                        <a class="btn red" href="<?php echo base_url('Manage_cat/add_category');  ?>" > <i class="glyphicon glyphicon-plus"></i>Add
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="portlet-body">


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
    <input type="hidden" name="filter_col" id="filter_col" value="<?php echo $query; ?>"/>
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
<div id="imgmodel" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Img View</h4>
            </div>
            <div class="imgmodel">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
<!-- END QUICK NAV -->


<!-- BEGIN PAGE LEVEL PLUGINS -->
<?php $this->load->view('js'); ?>
<script src="<?php echo base_url("assets/global/plugins/datatables/datatables.min.js"); ?>" type="text/javascript"></script>
<script src="<?php echo base_url("assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js"); ?>" type="text/javascript"></script>
<script src="<?php echo base_url("assets/global/plugins/bootstrap-sweetalert/sweetalert.min.js"); ?>" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bttrlazyloading/1.0.8/jquery.bttrlazyloading.min.js"></script>
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url("assets/pages/scripts/table-datatables-managed.min.js"); ?>" type="text/javascript"></script>
<script src="<?php echo base_url("assets/pages/scripts/ui-sweetalert.min.js"); ?>" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bttrlazyloading/1.0.8/jquery.bttrlazyloading.min.js"></script>
<script>

</script>
<!-- BEGIN THEME LAYOUT SCRIPTS -->

<!-- END THEME LAYOUT SCRIPTS -->
<script>
    $(document).ready(function()
    {
        $('#clickmewow').click(function()
        {
            $('#radio1003').attr('checked', 'checked');
        });
    });
    $(document).ready(function () {
        $('body').on('click','.sweetAlt',function () {
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
                    "sTitle":'<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline" style="margin-left: 37%;"><input id="allcheck" type="checkbox" class="deleteRow checkboxes" ><span></span></label>',
                    "visible": true,
                    "searchable": false,
                    "sortable" :false
                }
                ,{
                    "sName" : "icon",
                    "sTitle" : "Icon",

                    "targets": [ 1 ],
                    "visible": true,
                    "searchable": false,
                    "sortable" :false

                },
                {
                    "sName" : "name",
                    "sTitle" : "Name",
                    "targets": [ 2 ],
                    "visible": true,
                    "searchable": true,
                    "sortable" :true

                },
                {
                    "sName" : "color",
                    "sTitle" : "Color",
                    "targets": [ 3 ],
                    "visible": true,
                    "searchable": true,
                    "sortable" :true

                },
                {
                    "sName" : "draft",
                    "sTitle" : "Type",
                    "targets": [ 4 ],
                    "visible": true,
                    "searchable": false,
                    "sortable" :false

                },
                {
                    "sName" : "status",
                    "sTitle" : "Status",
                    "targets": [ 5 ],
                    "visible": true,
                    "searchable": false,
                    "sortable" :false

                },
                {
                    "sName" : "update",
                    "sTitle" : "Update",
                    "targets": [ 6 ],
                    "visible": true,
                    "searchable": false,
                    "sortable" :false

                },
                {
                    "sName" : "action",
                    "sTitle" : "Action",
                    "targets": [ 7 ],
                    "visible": true,
                    "searchable": false,
                    "sortable" :false

                }

            ],
            "ajax":{
                url : '<?php echo base_url(); ?>Manage_Category/get_category_data', // json datasource
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
        swal({
                title: "Are you sure?",
                text: "You will not be able to recover this Category!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: false
            },
            function(){
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
                        url: "<?php echo base_url(); ?>Manage_Category/delete_user_data",
                        data: {data_ids:ids_string},
                        success: function(result) {
                            var oTable1 = $('#example').DataTable();
                            oTable1.ajax.reload(null, false);
                        },
                        async:false
                    });
                }
                swal("Deleted!", "Selected Category is deleted.", "success");
            });
    }
    function delete_single_user(single_id){
        swal({
                title: "Are you sure?",
                text: "You will not be able to recover this Category!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: false
            },
            function(){
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url(); ?>Manage_Category/delete_single_user_data",
                    data: {data_id: single_id},
                    success: function (result) {
                        var oTable1 = $('#example').DataTable();
                        oTable1.ajax.reload(null, false);
                    },
                    async: false
                });
                swal("Deleted!", "Your Category is Deleted.", "success");
            });
    }
    function status(single_id){
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Manage_Category/update_user_status",
            data: {data_id: single_id},
            success: function (result) {
                var oTable1 = $('#example').DataTable();
                oTable1.ajax.reload(null, false);
            },
            async: false
        });
    }
    function delete_single_user_action()
    {
        var single_id = $('#bookedid').val();
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Manage_Category/delete_single_user_data",
            data: {data_id: single_id},
            success: function (result){
                var oTable1 = $('#example').DataTable();
                oTable1.ajax.reload(null, false);
            },
            async: false
        });
    }
    function img_view(id) {
        var src = $('#img_'+id).attr('src');
        $('.imgmodel').html('<img src="'+ src+'" class="img-responsive" />');
        $('#imgmodel').modal();
    }
</script>
</body>
