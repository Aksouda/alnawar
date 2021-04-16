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
                            <span>Setting</span>
                        </li>
                    </ul>

                </div>
                <!-- END PAGE BAR -->
                <div style="background-color: white;padding: 25px;padding-top: 0p">
                    <!-- BEGIN PAGE TITLE-->
                    <div style="background-color: white;padding: 20px;" >
                        <h3 class="page-title">Application Setting</h3>
                        <form id="app_form" role="form" method="post">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group form-md-line-input form-md-floating-label">
                                            <select class="form-control edited" name="currency" id="currency" onfocus='this.size=10;' onblur='this.size=1;' onchange='this.size=1; this.blur();'>
                                                <?php foreach ($currency as $cr){ ?>
                                                    <option name="currency" value="<?php echo $cr['code'];?>" <?php echo ($cr['code'] == $other_appli[1]['value'])?'selected':''; ?>><?php echo $cr['code'].' - '.$cr['name']; ?></option>
                                                <?php } ?>
                                            </select>
                                            <label for="form_control_1">currency</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2 col-md-2">
                                        <div class="form-group form-md-line-input form-md-floating-label">
                                            <input type="text" class="form-control" id="tax" name="tax" value="<?php echo $other_appli[4]['value']; ?>" >
                                            <label for="form_control_pickup_address"> TAX (%)</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2" style="display: none;">
                                        <div class="form-group form-md-line-input form-md-floating-label">
                                            <input type="number" class="form-control" id="f_news" value="<?php echo $other_appli[2]['value']; ?>" name="f_news" >
                                            <label for="form_control_pickup_address"> Featured News</label>
                                        </div>
                                    </div>
                                </div>
                                <hr>
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
                                <span class="help-block">
                                        <div class="row" style="margin-top:30px;">
                                        <b>TAX </b>: Value Added Tax (VAT) or Goods and Services Tax (GST).This tax will be added in every purchase transaction.<br>
                                        <b>Feature News </b>: Maximum News Info display on home android app. Recommended value is 5</span>
                                <div class="col-lg-12 col-md-12 col-sm-12 clearfix" style="margin-top: 25px;" >
                                    <fieldset class="scheduler-border" style="margin-top: 50px;">
                                        <legend class="scheduler-border">Category</legend>
                                        <?php
                                        //                                                function abc($new_cat,$child = null)
                                        //                                                {
                                        //                                                    foreach ($new_cat as $sim_cat) {
                                        //                                                        if($child == 1 ){}
                                        //                                                        else{ print_r($sim_cat['name']);echo '<br>'; }
                                        //                                                        if (!empty($sim_cat['nodes'])) {
                                        //                                                            foreach ($sim_cat['nodes'] as $nodes){
                                        //                                                                if (!empty($sim_cat['nodes'])) {
                                        //                                                                    echo '--' . $nodes['name'] . '<br>';
                                        //                                                                    abc($nodes,1);
                                        //                                                                }
                                        //                                                            }
                                        //                                                            abc($nodes,1);
                                        //                                                    }
                                        //                                                    }
                                        //                                                }
                                        //                                                abc($new_cat);
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
                                                printf("\t<input type='checkbox' class='%d' name='cat[]' value='%d' >&nbsp;&nbsp;<span value='%d' >%s%s</span>\n<br>",$t['id'], $t['id'],$t['id'], $dash, $t['name']);
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
                                    </fieldset>
                                </div>
                            </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 clearfix">
                            <div class="form-actions pull-right">
                                <div class="btn-set">
                                    <input type="submit" class="btn red" value="Save / Submit" name="submit">
                                    <input type="reset" class="btn blue" value="Reset">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
                <div style="background-color: white;padding-left: 25px;padding-right: 25px;padding-bottom: 25px;">
                    <h3 class="page-title" style="padding-top:25px;">User Panel Setting</h3>
                    <form id="user_form" role="form" method="post">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group form-md-line-input form-md-floating-label">
                                        <input type="text" class="form-control" id="name" name="name" value="<?php print_r($user[0]['name']); ?>" >
                                        <label for="form_control_pickup_address"> Name</label>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group form-md-line-input form-md-floating-label">
                                        <input type="Email" class="form-control" id="Email" name="Email" value="<?php print_r($user[0]['email']); ?>" >
                                        <label for="form_control_pickup_address"> Email</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group form-md-line-input form-md-floating-label">
                                        <input type="text" class="form-control" id="username" name="username" value="<?php print_r($user[0]['username']); ?>" >
                                        <label for="form_control_pickup_address"> username</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group form-md-line-input form-md-floating-label">
                                        <input type="password" class="form-control" id="Password" name="password" value="<?php print_r($user[0]['password']); ?>" >
                                        <label for="form_control_pickup_address" > Password</label>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group form-md-line-input form-md-floating-label">
                                        <input type="password" class="form-control" id="rPassword" value="<?php print_r($user[0]['password']); ?>" >
                                        <label for="form_control_pickup_address"> RE-Type Password</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 clearfix">
                                    <div class="form-actions pull-right">
                                        <div class="btn-set">
                                            <input type="submit" class="btn red hide" name="submit1" value="Add New" disabled>
                                            <input type="submit" class="btn blue" name="update" value="Update">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
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
    });
    $("#proceedForm").hide();
    function showProceedForm(){
        $("#proceedForm").slideDown().show();
        $("#Proceed").slideDown().hide();
    }
    function showProceed(){
        $("#proceedForm").slideDown().hide();
        $("#Proceed").slideDown().show();
    }
    $('#user_form').on('submit',function () {
        if($('#name').val() == ''){
            sweetAlert("Oops...", "Please Required ALL Fields!", "error");
            return false;
        }
        if($('#Email').val() == ''){
            sweetAlert("Oops...", "Please Required ALL Fields!", "error");
            return false;
        }
        if($('#username').val() == ''){
            sweetAlert("Oops...", "Please Required ALL Fields!", "error");
            return false;
        }
        if($('#Password').val() == ''){
            sweetAlert("Oops...", "Please Required ALL Fields!", "error");
            return false;
        }
        if($('#Password').val() != $('#rPassword').val()){
            sweetAlert("Oops...", "Password Do Not Match!", "error");
            return false;
        }
    });
    $('#app_form').on('submit',function () {
        if($('#currency').val() == ''){
            sweetAlert("Oops...", "Please Required ALL Fields!", "error");
            return false;
        }
        if($('#tax').val() == ''){
            sweetAlert("Oops...", "Please Required ALL Fields!", "error");
            return false;
        }
        if($('#f_news').val() == ''){
            sweetAlert("Oops...", "Please Required ALL Fields!", "error");
            return false;
        }
    });
    var limit = 3;
    $(':checkbox').on('change', function(evt) {
        if($(this).siblings(':checked').length >= limit) {
            this.checked = false;
        }
    });
    <?php
    $ret_cat = explode(',',$other_appli[0]['value']);
    foreach ($ret_cat as $e_cat){
    ?>
    $(".<?php echo $e_cat; ?>").attr('checked', true);
    <?php
    }
    ?>
</script>
</body>

</html>
