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
    <title>enter title</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="Preview page of Metronic Admin Theme #1 for managed datatable samples" name="description"/>
    <meta content="" name="author"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <?php $this->load->view('css'); ?>
    <link href="<?php echo base_url('assets/css/imgareaselect-default.css'); ?>" rel="stylesheet" >
    <link href="<?php echo base_url("assets/global/plugins/bootstrap-sweetalert/sweetalert.css"); ?>" rel="stylesheet" type="text/css"
    <!-- include summernote css/js-->
    <link rel="stylesheet" type="text/css" href="https://rawgit.com/nobleclem/jQuery-MultiSelect/master/jquery.multiselect.css" />
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
                            <span>Product</span>
                        </li>
                    </ul>

                </div>
                <!-- END PAGE BAR -->
                <div style="background-color: white;padding: 25px;padding-top: 0px;" >
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <div style="background-color: white;padding: 25px;">
                        <h1 class="page-title">Add Product</h1>
                        <form method="post" action="<?php echo base_url('Product/submit_now'); ?>" id="product" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group form-md-line-input form-md-floating-label">
                                        <input type="text" class="form-control" id="name" name="name" >
                                        <label for="form_control_pickup_address"> Name :</label>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group form-md-line-input form-md-floating-label">
                                        <input type="text" class="form-control" id="name_ar" name="name_ar" >
                                        <label for="form_control_pickup_address"> Name Arabic :</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group form-md-line-input form-md-floating-label">
                                        <input type="text" class="form-control" id="price" name="price">
                                        <label for="form_control_pickup_address"> Price:</label>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group form-md-line-input form-md-floating-label">
                                        <input type="hidden" class="form-control" id="time_loop" name="time_loop">
                                        <input type="text" class="form-control" id="stock" name="stock">
                                        <label for="form_control_pickup_address"> Stock:</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group form-md-line-input form-md-floating-label">
                                        <input type="text" class="form-control" id="oldprice" name="oldprice">
                                        <label for="form_control_pickup_address"> Old Price:</label>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group form-md-line-input form-md-floating-label">
                                        <input type="text" class="form-control" id="pro_code" name="pro_code">
                                        <label for="form_control_pickup_address"> Product Code:</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group form-md-line-input form-md-floating-label">
                                        <select name="product_status" class="form-control edited">
                                            <option value="READY STOCK">AVAILABLE</option>
                                            <option value="OUT OF STOCK">OUT OF STOCK</option>
                                            <option value="SUSPEND">INACTIVE</option>
                                        </select>
                                        <label for="form_control_pickup_address"> Product Status :</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <label for="form_control_no_of_token">Product Customizable</label><br>
                                    <input type="radio" name="isProductCustomizable" value="1">Yes<br>
                                    <input type="radio" name="isProductCustomizable" value="0" checked> No
                                </div>
                            </div>
                            <div class="row">
                                <style>
                                    fieldset.scheduler-border {
                                        border: 1px groove #ddd !important;
                                        padding: 0 1.4em 1.4em 1.4em !important;
                                        margin: 0 0 1.5em 0 !important;
                                        -webkit-box-shadow:  0px 0px 0px 0px #000;
                                        box-shadow:  0px 0px 0px 0px #000;
                                    }

                                    legend.scheduler-border {
                                        font-size: 1.2em !important;
                                        font-weight: bold !important;
                                        text-align: left !important;
                                        width:auto;
                                        padding:0 10px;
                                        border-bottom:none;
                                    }
                                </style>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <fieldset class="scheduler-border">
                                            <legend class="scheduler-border">Image Primary</legend>
                                            <div class="control-group">
                                                <div class="row">
                                                    <input type="file" name="new_primary_image" id="new_primary_image" style="margin-left: 3%;">
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <fieldset class="scheduler-border">
                                            <legend class="scheduler-border">Image Optional</legend>
                                            <div class="control-group">
                                                <div class="row">
                                                    <input type="file" name="primary_image_e[]" style="margin-left: 3%;"><br>
                                                    <input type="file" name="primary_image_e[]" style="margin-left: 3%;"><br>
                                                    <input type="file" name="primary_image_e[]" style="margin-left: 3%;"><br>
                                                    <input type="file" name="primary_image_e[]" style="margin-left: 3%;"><br>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 clearfix" style="margin-top: 25px;" >
                                    <fieldset class="scheduler-border" style="margin-top: 50px;">
                                        <legend class="scheduler-border" >Category <span class="glyphicon glyphicon-chevron-down caret_dis" data-toggle="collapse" data-target="#cat_li" ></span></legend>
                                        <div class="collapse" id="cat_li">
                                        <?php
                                        function buildTree(Array $data, $parent = 0) {
                                            $tree = array();
                                            foreach ($data as $d) {
                                                if ($d['parent_id'] == $parent) {
                                                    $children = buildTree($data, $d['id']);
                                                    // set a trivial key
                                                    if (!empty($children)) {
                                                        $d['_children'] = $children;
                                                    }
                                                    $tree[] = $d;
                                                }
                                            }
                                            return $tree;
                                        }
                                        $tree = buildTree($rows_cat);
                                        // print_r($tree);
                                        function printTree($tree, $r = 0, $p = null)
                                        {
                                            foreach ($tree as $i => $t)
                                            {
                                                $value = "{{ category.parent_id}}";
                                                $id=$t['id'];
                                                $dash = ($t['parent_id'] == 0) ? '' : str_repeat('&nbsp;&nbsp;&nbsp;', $r) .' ';
                                                printf("\t<input type='radio' class='%d checkboxs cat checkbox12' name='cat[]' value='%d' >&nbsp;&nbsp;<span value='%d' >%s%s</span>\n<br>",$t['id'], $t['id'],$t['id'], $dash, $t['name']);
                                                if ($t['parent_id'] == $p)
                                                {
                                                    $r = 0;
                                                }
                                                if (isset($t['_children']))
                                                {
                                                    printTree($t['_children'], ++$r, $t['parent_id']);
                                                }
                                            }
                                        }
                                        print("<ul class='form-control-ta' name='parent_id' id='parent_id' ng-model='category.parent_id'>\n");
                                        printTree($tree);
                                        print("</ul>");
                                        ?>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12" >
                                    <fieldset class="scheduler-border" style="margin-top: 50px;">
                                        <legend class="scheduler-border">Size</legend>
                                        <div id="size" class="group" >
                                        Choose Category First
                                        </div>
                                        <a class="btn red hide" id="btnAdd-6">Add</a>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group form-md-line-input form-md-floating-label">
                                        <label for="form_control_pickup_address"> Description :</label>
                                        <textarea id="dis" name="dis" ></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group form-md-line-input form-md-floating-label">
                                        <label for="form_control_coupon_code">Attribute </label>
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <div class="col-sm-4 nopadding">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="attribute_name" name="attribute_name[]" value="" placeholder="name" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 nopadding">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="attribute_value" name="attribute_value[]" value="" placeholder="value">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 nopadding">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <div class="input-group-btn">
                                                                <button class="btn btn-success" type="button"  onclick="education_fields();"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="padding-left: 15px;padding-right: 15px;" id="education_fields" ></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="facilities">
                                    <span class="container">Select Tag</span>
                                    <span class="input container">
                                        <select id="tag" name="tag[]" multiple>
                                        </select>
                                    </span>
                                </div>
                            </div>
                            <div class="row" id="brand_row">
                                <div class="col-lg-12 col-md-12">
                                    <label for="form_control_no_of_token">Brand</label><br>
                                    <br>
                                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="brand">
                                        <thead>
                                        <tr>
                                            <th class="text-center">Select Brand</th>
                                            <th class="text-center"> Brand Name </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
			<div class="row hide">
                                <div class="form-group form-md-line-input form-md-floating-label">
                                    <label for="form_control_pickup_address"> Color:</label>
                                    <select class="form-control product_color edited" style="overflow: scroll;" id="product_color" name="product_color_to_product" onchange="product_colors(this);" >
                                        <option value="null" style="background-color: black; color: white;">Select</option>
                                        <option value="#000000" style="background-color: black; color: white;">Black</option>
                                        <option value="#FF00FF" style="background-color: rgba(255, 0, 0, 0.4);; color: white;">Multicolor</option>
                                        <option value="#FF0000" style="background-color: red; color: white;">Red</option>
                                        <option value="#FFFFFF" style="background-color: white; color: black;">White</option>
                                        <option value="#A52A2A" style="background-color: brown; color: white;">Brown</option>
                                        <option value="#808080" style="background-color: grey; color: white;">Grey</option>
                                        <option value="#FFC0CB" style="background-color: pink; color: white;">Pink</option>
                                        <option value="#0000FF" style="background-color: blue; color: white;">Blue</option>
                                        <option value="#4B0082" style="background-color: indigo; color: white;">Indigo</option>
                                        <option value="#800000" style="background-color: maroon; color: white;">Maroon</option>
                                        <option value="#EE82EE" style="background-color: violet; color: white;">Violet</option>
                                        <option value="#FFFF00" style="background-color: yellow; color: white;">Yellow</option>
                                        <option value="#000080" style="background-color: navy; color: white;">Navy</option>
                                        <option value="#008000" style="background-color: green; color: white;">Green</option>
                                        <option value="#90EE90" style="background-color: lightgreen; color: white;">LightGreen</option>
                                        <option value="#FFA500" style="background-color: orange; color: white;">Orange</option>
                                        <option value="#F5F5DC" style="background-color: beige; color: black;">Beige</option>
                                    </select>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-1">
                                    <input type="checkbox" id="draft" class="checkbox" name="draft" value="1" >
                                </div>
                                <div class="col-xs-4">Save As Draft</div>
                            </div>
                            <label><b>When you checked Save As draft the data will not display at user device.</b></label>
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group form-md-line-input form-md-floating-label">
                                        <input type="submit" class="btn red subnow" id="form_control_pickup_address" name="submit_des" value="submit" onclick="return valid_form();" >
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- END PAGE TITLE-->
                </div>
                <!-- END PAGE TITLE-->
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
                <i class="icon-graph" ></i>
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
<script src="https://rawgit.com/nobleclem/jQuery-MultiSelect/master/jquery.multiselect.js"></script>
<!-- END THEME LAYOUT SCRIPTS -->
<script src="<?php echo base_url('assets/scripts/jquery.imgareaselect.pack.js'); ?>"></script>
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
    var Check_name_pro_ver;
    $('#name').keyup(function () {
        $.ajax({
                url: '<?php echo base_url('Product/check_username/'); ?>',
                method: 'post',
                data: {'name': $(this).val()},
                success: function (data) {
                    if (data == 1) {
                        sweetAlert("Oops...", "Name is Already Exits!", "error");
                        Check_name_pro_ver = 1;
                        return false;
                    }
                    else {
                        Check_name_pro_ver = 0;
                    }
                }
            });
    });
    $(document).ready(function()
    {
        $('#clickmewow').click(function()
        {
            $('#radio1003').attr('checked', 'checked');
        });
    });
    var html;
    var category_brand_id = 0;
    $('.cat').change(function(){
        var cat = $(this).val();
        $.ajax({
            'url':'<?php echo base_url('Product/cat_size'); ?>',
            'method':'GET',
            'data':{'cat':cat},
            'success':function (data) {
                $('#size').html(data);
                html= $("#size").html();
            }
        });
        $('.ABC'+cat).removeClass('hide');
        $.ajax({
            'url':'<?php echo base_url('Product/tga_meter'); ?>',
            'method':'GET',
            'data':{'cat':cat},
            'success':function (data) {
                $('#tag').html(data);
                $('select[multiple]').multiselect('reload');
            }
        });
        $('#brand').DataTable().ajax.url("<?php echo base_url('brand/brand_for_cat/'); ?>"+cat);
        $('#brand').DataTable().ajax.reload();
        $('#brand_row').show();
    });

    $('.caret_dis').trigger('click');
    $(document).ready(function() {
        var time_loop = 0;
        $("#btnAdd-6").click(function(){
            $("#size").append(html);
            time_loop++;
        });
    $('.subnow').click(function () {
            $('#time_loop').attr('value',time_loop);
    });
    });
    $(document).ready(function() {
        $('#dis').summernote();
    });
    var room = 1;
    function education_fields() {

        room++;
        var objTo = document.getElementById('education_fields')
        var divtest = document.createElement("div");
        divtest.setAttribute("class", "form-group removeclass"+room);
        var rdiv = 'removeclass'+room;
        divtest.innerHTML = '<div class="row"><div class="col-sm-4 nopadding">' +
            '<div class="form-group">' +
            '<input type="text" class="form-control" id="attribute_name" name="attribute_name[]" value="" placeholder="name" required>' +
            '</div>' +
            '</div>' +
            '<div class="col-sm-4 nopadding">' +
            '<div class="form-group">' +
            '<input type="text" class="form-control" id="attribute_value" name="attribute_value[]" value="" placeholder="value">' +
            '</div>' +
            '</div><div class="col-sm-1 nopadding">' +
            '<div class="form-group">' +
            '<div class="input-group"> ' +
            '<div class="input-group-btn"> <button class="btn btn-danger" type="button" onclick="remove_education_fields('+ room +');"> <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </button></div>' +
            '</div></div></div></div>';

        objTo.appendChild(divtest)
    }
    function remove_education_fields(rid) {
        $('.removeclass'+rid).remove();
    }
    $(function() {
        // from http://stackoverflow.com/questions/45888/what-is-the-most-efficient-way-to-sort-an-html-selects-options-by-value-while
        var my_options = $('.facilities select option');
        var selected = $('.facilities').find('select').val();

        my_options.sort(function(a,b) {
            if (a.text > b.text) return 1;
            if (a.text < b.text) return -1;
            return 0
        })

        $('.facilities').find('select').empty().append( my_options );
        $('.facilities').find('select').val(selected);

        // set it to multiple
        $('.facilities').find('select').attr('multiple', true);

        // remove all option
        $('.facilities').find('select option[value=""]').remove();
        // add multiple select checkbox feature.
        $('.facilities').find('select').multiselect();
    });

    function valid_form() {
        if($('#name').val() === ''){
            sweetAlert("Oops...", "Product Name is Required!", "error");
            return false;
        }
        if($('#name_ar').val() === ''){
            sweetAlert("Oops...", "Product Name Arabic is Required!", "error");
            return false;
        }
        if($('#price').val() === ''){
            sweetAlert("Oops...", "Product Price is Required!", "error");
            return false;
        }
        if($('#oldprice').val() === ''){
            sweetAlert("Oops...", "Stock is Required!", "error");
            return false;
        }
        if($('#new_primary_image').val() === ''){
            sweetAlert("Oops...", "primary image is Required!", "error");
            return false;
        }else{
            //move_my_crop_img();
        }
        var arr = document.getElementsByClassName('stock_ke');
        var tot=0;
        for(var i=0;i<arr.length;i++){
            if(parseInt(arr[i].value))
                tot += parseInt(arr[i].value);
        }
        var total_stock = $('#stock').val();
        if(arr.length != 0){
            if(tot != total_stock){
                sweetAlert("Oops...", "Stock is Not Matching!", "error");
                return false;
            }
        }
        if($('#summernote').val() == ''){
            sweetAlert("Oops...", "Description is Required!", "error");
            return false;
        }
        if ($(".checkbox12:checked").length < 1){
            sweetAlert("Oops...", "Plz Select Atleast One Category!", "error");
            return false;
        }
        if(Check_name_pro_ver == 1 ){
            sweetAlert("Oops...", "Name is Already Exits!", "error");
            return false;
        }
    }
    $(document).ready(function(){
        $('#tag').multiselect();
        var Brand_table = $('#brand').DataTable( {
            "ajax": '<?php echo base_url('brand/brand_for_cat/'); ?>'+category_brand_id,
            "serverSide": true,
            "columns": [
                { "data": "check" },
                { "data": "brand_name" }]
        } );
        $('#brand_row').hide();
    });
</script>

</body>

</html>
