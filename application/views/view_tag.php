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
                            <span>Tag</span>
                        </li>
                    </ul>

                </div>
                <!-- END PAGE BAR -->
                <!-- BEGIN PAGE TITLE-->
                <h1 class="page-title"> Tag Details

                </h1>
                <!-- END PAGE TITLE-->
                <!-- END PAGE HEADER-->
                <div class="row">
                    <div class="col-md-12">
                        <!-- Begin: life time stats -->
                        <div class="portlet light portlet-fit portlet-datatable bordered">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-settings font-dark"></i>
                                    <span class="caption-subject font-dark sbold uppercase"> Tag Details</span>
                                </div>

                            </div>
                            <?php
                           // $id=$_SERVER['PATH_INFO'];
			    $id=base_url(uri_string());
                            $link_array = explode('View_Tag/',$id);
                            $size_id = end($link_array);
                            $query = $this->db->get_where('tag', array('tag_id' => $size_id));
                            $row = $query->row_array();
                            $category_id=$row['category_id'];
                            //print_r($row);
                            ?>
                            <div class="portlet-body">
                                <div class="tab-pane active" id="tab_1">
                                    <form role="form" method="post" name="valide_size">
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                        <input type="text" class="form-control" name="tag_name" required value="<?php echo $row['tag_name'];?>">
                                                        <label for="form_control_coupon_code">Tag </label>
                                                        <span class="help-block">Tage Name Goes Here...</span>
                                                        <input type="hidden" name="tag_id" value="<?php echo $row['tag_id'];?>">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                        <input type="text" class="form-control" name="tag_name_ar" required value="<?php echo $row['tag_name_ar'];?>">
                                                        <label for="form_control_coupon_code">Tage Arabic </label>
                                                        <span class="help-block">Tage Name Arabic Goes Here...</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                        <select class="form-control" name="category_id">
                                                            <option>Select Category</option>
                                                            <?php
                                                            $query = $this->db->get('category');
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
                                                            $tree = buildTree($query->result_array());
                                                            // print_r($tree);
                                                            function printTree($tree, $r = 0, $p = null)
                                                            {
                                                                foreach ($tree as $i => $t)
                                                                {
                                                                    $value = "{{ category.parent_id}}";
                                                                    $id=$t['id'];
                                                                    $dash = ($t['parent_id'] == 0) ? '' : str_repeat('&nbsp;&nbsp;', $r) .' ';
                                                                    printf("\t<option type='checkbox' class='%d' name='cat[]' value='%d' >&nbsp;&nbsp<span value='%d' >%s%s</span>\n<br>",$t['id'], $t['id'],$t['id'], $dash, $t['name']);
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
                                                            printTree($tree);

                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                        <input type="submit" class="btn btn-primary" name="save">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- End: life time stats -->
                    </div>
                </div>
            </div>
            <!-- END BEGIN PROFILE SIDEBAR -->

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
<div class="quick-nav-overlay"></div>
<!-- END QUICK NAV -->
<!--[if lt IE 9] -->
<?php $this->load->view('js'); ?>
<script src="<?php echo base_url("assets/global/plugins/bootstrap-sweetalert/sweetalert.min.js"); ?>" type="text/javascript"></script>
<script src="<?php echo base_url("assets/pages/scripts/ui-sweetalert.min.js"); ?>" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->
<script>
    $(document).ready(function(){
        $('.<?php echo trim($row['category_id']); ?>').attr('selected','selected');
    });
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
</body>

</html>
