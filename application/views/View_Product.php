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
    <link href="<?php echo base_url("assets/global/css/plugins-md.css"); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url("assets/global/plugins/bootstrap-sweetalert/sweetalert.css"); ?>" rel="stylesheet" type="text/css">
    <!-- END HEAD -->
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
    <style>
        .material-switch > input[type="checkbox"] {
            display: none;
        }

        .material-switch > label {
            cursor: pointer;
            height: 0px;
            position: relative;
            width: 40px;
        }

        .material-switch > label::before {
            background: rgb(0, 0, 0);
            box-shadow: inset 0px 0px 10px rgba(0, 0, 0, 0.5);
            border-radius: 8px;
            content: '';
            height: 16px;
            margin-top: -8px;
            position:absolute;
            opacity: 0.3;
            transition: all 0.4s ease-in-out;
            width: 40px;
        }
        .material-switch > label::after {
            background: rgb(255, 255, 255);
            border-radius: 16px;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
            content: '';
            height: 24px;
            left: -4px;
            margin-top: -8px;
            position: absolute;
            top: -4px;
            transition: all 0.3s ease-in-out;
            width: 24px;
        }
        .material-switch > input[type="checkbox"]:checked + label::before {
            background: inherit;
            opacity: 0.5;
        }
        .material-switch > input[type="checkbox"]:checked + label::after {
            background: inherit;
            left: 20px;
        }
    </style>
    <style>
        .multiselect.dropdown-toggle.btn.btn-default {
            margin-right: 5px;
            width: 850px;
            overflow: hidden;
        }
    </style>
    <!--datatable css-->
    <link href="<?php echo base_url("assets/global/plugins/datatables/datatables.min.css"); ?>" rel="stylesheet" type="text/css"
    <link href="<?php echo base_url("assets/global/plugins/bootstrap/datatables.bootstrap.css"); ?>" rel="stylesheet" type="text/css"
    <!--end-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">

<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white page-md">
<button type="button" class="glyphicon glyphicon-asterisk hide
" data-toggle="modal" id="myone" data-target="#myModal"></button>
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
            </div>
        </div>

    </div>
</div>
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
                <!-- BEGIN PAGE TITLE-->
                <h1 class="page-title"> Product Details

                </h1>
                <!-- END PAGE TITLE-->
                <!-- END PAGE HEADER-->
                <?php
                //$id=$_SERVER['PATH_INFO'];
		$id=base_url(uri_string());
                $link_array = explode('View_Product/',$id);
                $product_id = end($link_array);
                $query = $this->db->get_where('product', array('id' => $product_id));
                $row_products = $query->row_array();
                ?>
                <div class="row">
                    <div class="col-md-12">
                        <!-- Begin: life time stats -->
                        <div class="portlet light portlet-fit portlet-datatable bordered">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-settings font-dark"></i>
                                    <span class="caption-subject font-dark sbold uppercase"> Product Details</span>
                                </div>

                            </div>
                            <div class="portlet-body">
                                <div class="tab-pane active" id="tab_1">
                                    <form role="form" method="post" name="valide_size" enctype="multipart/form-data">
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                        <input type="text" class="form-control" name="product_name" required value="<?php echo $row_products['name'];?>">
                                                        <label for="form_control_coupon_code">Product Name </label>
                                                        <span class="help-block">Some help goes here...</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group form-md-line-input form-md-floating-label">
                                                    <input type="number" class="form-control" id="price" name="price" value="<?php echo $row_products['price'];?>" required>
                                                    <label for="form_control_coupon_code">Price </label>
                                                    <span class="help-block">Some help goes here...</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group form-md-line-input form-md-floating-label">
                                                    <input type="number" class="form-control" id="srock" name="stock" value="<?php echo $row_products['stock'];?>" required>
                                                    <label for="form_control_no_of_token">Stock </label>
                                                    <span class="help-block">Some help goes here...</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group form-md-line-input form-md-floating-label">
                                                    <select name="product_status" class="form-control">
                                                        <option value="READY STOCK" <?php if($row_products['status'] == 'READY STOCK'){ echo "selected";} ?>>AVAILABLE</option>
                                                        <option value="OUT OF STOCK" <?php if($row_products['status'] == 'OUT OF STOCK'){ echo "selected";} ?>>OUT OF STOCK</option>
                                                        <option value="SUSPEND" <?php if($row_products['status'] == 'SUSPEND'){ echo "selected";} ?>>INACTIVE</option>
                                                    </select>
                                                    <label for="form_control_coupon_code">Product Status </label>
                                                    <span class="help-block">Some help goes here...</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group form-md-line-input form-md-floating-label">
                                                    <label for="form_control_no_of_token">Product Customizable</label><br>
                                                    &nbsp;&nbsp;<input type="radio" name="isProductCustomizable" value="0" <?php if($row_products['isProductCustomizable'] == '0'){ echo "checked";} ?>>&nbsp;&nbsp;Yes<br>
                                                    &nbsp;&nbsp;<input type="radio" name="isProductCustomizable" value="1" <?php if($row_products['isProductCustomizable'] == '1'){ echo "checked";} ?>>&nbsp;&nbsp;No
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">

                                                    <!--<fieldset class="scheduler-border">
                                                        <legend class="scheduler-border">Category</legend>
                                                        <div class="control-group">
                                                            <div class="row">
                                                                <?php
                                                    $query = $this->db->query("SELECT * FROM category;");

                                                    //  for($i=0;$i<=10;$i++) {
                                                    $i=0;
                                                    foreach ($query->result_array() as $row)
                                                    {

                                                        ?>
                                                                    <div class="col-lg-6 col-md-6">
                                                                        <div class="form-group form-md-line-input form-md-floating-label">
                                                                            <li class="list-group-item">
                                                                               <p style="width: 350px;"><?php echo $row['name']; ?></p>
                                                                                <div class="material-switch pull-right" style="margin-bottom: 20px;">
                                                                                    <input id="someSwitchOptionSuccess<?php echo $i;?>" name="someSwitchOption001[]" type="checkbox"/>
                                                                                    <label for="someSwitchOptionSuccess<?php echo $i;?>" class="label-success"></label>
                                                                                </div>
                                                                            </li>
                                                                        </div>
                                                                    </div>
                                                                    <?php
                                                        $i++;
                                                    }
                                                    ?>
                                                            </div>
                                                        </div>
                                                    </fieldset>-->
                                                    <fieldset class="scheduler-border">
                                                        <legend class="scheduler-border">Category</legend>
                                                        <div class="control-group">
                                                            <div class="row">
                                                                <?php
                                                                $connection = mysqli_connect("localhost","root","Onetoeight30", "marketing");

                                                                $value = "{{ category.parent_id}}";
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

                                                                $query=mysqli_query($connection,"SELECT * FROM `category` ORDER by name DESC");
                                                                $rows=[];
                                                                $i=0;
                                                                while($row=mysqli_fetch_array($query))
                                                                {
                                                                    $rows[$i]['id']=$row['id'];
                                                                    $rows[$i]['name']=$row['name'];
                                                                    $rows[$i]['parent_id']=$row['parent_id'];
// echo json_encode($userdetail);
                                                                    $i++;
                                                                }
                                                                $tree = buildTree($rows);
                                                                // print_r($tree);

                                                                function printTree($tree, $r = 0, $p = null)
                                                                {
                                                                    foreach ($tree as $i => $t)
                                                                    {
                                                                        $value = "{{ category.parent_id}}";
                                                                        $id=$t['id'];
                                                                        $dash = ($t['parent_id'] == 0) ? '' : str_repeat('&nbsp;&nbsp;', $r) .' ';
                                                                        printf("\t&nbsp;&nbsp;<input type='checkbox' name='category_ids[]' value='$id' required>&nbsp;&nbsp;<span value='%d'>%s%s</span>\n<br>", $t['id'], $dash, $t['name']);
                                                                        if ($t['parent_id'] == $p)
                                                                        {
// reset $r
                                                                            $r = 0;
                                                                        }
                                                                        if (isset($t['_children']))
                                                                        {
                                                                            printTree($t['_children'], ++$r, $t['parent_id']);
                                                                        }
                                                                    }
                                                                }


                                                                print("<ul class='form-control-ta' name='parent_id' id='parent_id'>\n");
                                                                printTree($tree);
                                                                print("</ul>");
                                                                ?>

                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <fieldset class="scheduler-border">
                                                        <legend class="scheduler-border">Image Primary</legend>
                                                        <div class="control-group">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                <input type="file" name="primary_image" style="margin-left: 3%;" required>
                                                                    </div>
                                                                <div class="col-lg-1">
                                                                    <a onclick="img_view('<?php echo base_url('uploads/product/'.$row_products['image']); ?>');" ><label class="glyphicon glyphicon-picture"></label></a></div>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <fieldset class="scheduler-border">
                                                        <legend class="scheduler-border">Image Optional</legend>
                                                        <div class="control-group">
                                                            <div class="row">
                                                                <?php
                                                                $this->db->where('product_id',$product_id);
                                                                $query_pro_img = $this->db->get('product_image');
                                                                $result_pro = $query_pro_img->result_array();
                                                                //print_r($result_pro);
                                                                $num_pro = $query_pro_img->num_rows();
                                                                //echo $num_pro;
                                                                ?>
                                                                <div class="col-lg-4">
                                                                <input type="file" name="primary_image1" style="margin-left: 3%;">
                                                                    <?php
                                                                    if($num_pro == 1 OR $num_pro == 2 Or $num_pro == 3 OR $num_pro==4) {
                                                                        ?>
                                                                        <a onclick="img_view('<?php echo base_url('uploads/product/' . $result_pro[0]['name']); ?>');"
                                                                           style="margin-left: 300px; margin-top: -100px;"><label
                                                                                class="glyphicon glyphicon-picture"></label></a>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                    <br>
                                                                <input type="file" name="primary_image2" style="margin-left: 3%;">
                                                                    <?php
                                                                    if($num_pro == 2 OR $num_pro == 3 OR $num_pro == 4) {
                                                                        ?>
                                                                        <a onclick="img_view('<?php echo base_url('uploads/product/' . $result_pro[1]['name']); ?>');"
                                                                           style="margin-left: 300px; margin-top: -100px;"><label
                                                                                class="glyphicon glyphicon-picture"></label></a>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                    <br>
                                                                <input type="file" name="primary_image3" style="margin-left: 3%;">
                                                                    <?php
                                                                    if($num_pro == 3 OR $num_pro == 4)
                                                                    {
                                                                    ?>
                                                                    <a onclick="img_view('<?php echo base_url('uploads/product/'.$result_pro[2]['name']); ?>');" style="margin-left: 300px; margin-top: -100px;"><label class="glyphicon glyphicon-picture"></label></a>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                    <br>
                                                                <input type="file" name="primary_image4" style="margin-left: 3%;">
                                                                    <?php
                                                                    if($num_pro == 4) {
                                                                        ?>
                                                                        <a onclick="img_view('<?php echo base_url('uploads/product/' . $result_pro[3]['name']); ?>');"
                                                                           style="margin-left: 300px; margin-top: -100px;"><label
                                                                                class="glyphicon glyphicon-picture"></label></a>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                    <br>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- include summernote css/js-->
                                        <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.css" rel="stylesheet">
                                        <!-- include summernote css/js-->
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <label for="form_control_no_of_token">Description</label><br>
                                                    <textarea class="form-control" id="summernote" name="product_description" required><?php echo $row_products['description'];?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <label for="form_control_no_of_token">Brand</label><br>
                                                    <br>
                                                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                                        <thead>
                                                        <tr>
                                                            <th class="text-center">Select Brand</th>
                                                            <th class="text-center"> Brand Name </th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        $query = $this->db->get('brand');
                                                        $result = $query->result_array();
                                                        foreach( $result as $key => $row ) {
                                                            ?>
                                                            <tr class="odd gradeX">
                                                                <td>
                                                                    <label
                                                                        class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                        <input type="radio" class="checkboxes" name="brand_id" value="<?php echo $row['brand_id'];?> " <?php if($row_products['product_brand'] == $row['brand_id']){ echo "checked"; } ?>/>
                                                                        <span></span>
                                                                    </label>
                                                                </td>
                                                                <td class="text-center"><?php echo $row['brand_name'];?> </td>
                                                            </tr>
                                                            <?php
                                                        }
                                                        ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <label>Select Tag &nbsp;&nbsp;</label>
                                                    <select id="ddlCars2" multiple="multiple" class="form-control" name="tag_name[]">
                                                        <?php
                                                        $query_tag = $this->db->get('tag');
                                                        $result_tag = $query_tag->result_array();
                                                        foreach( $result_tag as $key_tag => $row_tag ) {
                                                            ?>
                                                            <option value="<?php echo $row_tag['tag_id'];?>">&nbsp;&nbsp;<?php echo $row_tag['tag_name'];?></option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <br>
                                        <div class="form-body">
                                            <div class="row">
                                                <fieldset class="scheduler-border">
                                                    <legend class="scheduler-border">Product Size</legend>
                                                    <?php
                                                    $query_size = $this->db->get('size');
                                                    $result_size = $query_size->result_array();
                                                    $i=0;
                                                    foreach($result_size as $key_size => $row_size ) {
                                                        ?>
                                                        <div class="col-lg-6 col-md-6">
                                                            <div>
                                                                <div class="col-lg-1"><br>
                                                                    <input type="checkbox" name="size_arra_<?php echo $i;?>" value="<?php echo $row_size['size_id'];?>">
                                                                </div>
                                                                <div class="col-lg-2"><br>
                                                                    <label><?php echo $row_size['name'];?></label>
                                                                </div>
                                                                <div class="col-lg-4"><br>
                                                                    <input type="text" name="size_stock_<?php echo $i;?>" value="" placeholder="enter product stock">
                                                                </div>
                                                            </div><br>

                                                        </div>

                                                        <?php
                                                        $i++;
                                                    }
                                                    ?>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                        <label for="form_control_coupon_code">Attribute </label>
                                                        <div class="panel panel-default">
                                                            <div class="panel-body">

                                                                <div id="education_fields">

                                                                </div>
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
                                                                <div class="col-sm-3 nopadding">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" id="attribute_stock" name="attribute_stock[]" value="" placeholder="stock">
                                                                    </div>
                                                                </div>


                                                                <div class="col-sm-1 nopadding">
                                                                    <div class="form-group">
                                                                        <div class="input-group">
                                                                            <div class="input-group-btn">
                                                                                <button class="btn btn-success" type="button"  onclick="education_fields();"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="clear"></div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-lg-5 col-md-5">
                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                        <label for="form_control_coupon_code">Product Color </label>
                                                        <select class="form-control product_color" style="overflow: scroll;" id="product_color" name="product_color" onChange="product_colors(this);">
                                                            <option>Select Color</option>
                                                            <option name="black" style="background-color: black; color: white;">Black</option>
                                                            <option name="multicolor" style="background-color: rgba(255, 0, 0, 0.4);; color: white;">Multicolor</option>
                                                            <option name="red" style="background-color: red; color: white;">Red</option>
                                                            <option name="white" style="background-color: white; color: black;">White</option>
                                                            <option name="brown" style="background-color: brown; color: white;">Brown</option>
                                                            <option name="grey" style="background-color: grey; color: white;">Grey</option>
                                                            <option name="pink" style="background-color: pink; color: white;">Pink</option>
                                                            <option name="blue" style="background-color: blue; color: white;">Blue</option>
                                                            <option name="indigo_blue" style="background-color: indigo; color: white;">Indigo</option>
                                                            <option name="maroon" style="background-color: maroon; color: white;">Maroon</option>
                                                            <option name="violet" style="background-color: violet; color: white;">Violet</option>
                                                            <option name="yellow" style="background-color: yellow; color: white;">Yellow</option>
                                                            <option name="navy_blue" style="background-color: navy; color: white;">Navy</option>
                                                            <option name="green" style="background-color: green; color: white;">Green</option>
                                                            <option name="lightgreen" style="background-color: lightgreen; color: white;">LightGreen</option>
                                                            <option name="orange" style="background-color: orange; color: white;">Orange</option>
                                                            <option name="beige" style="background-color: beige; color: black;">Beige</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-1">
                                                <input type="checkbox" id="draft" name="draft" value="1">
                                            </div>
                                            <div class="col-xs-4">Save As Draft</div>
                                        </div><br>
                                        <label><b>When you checked Save As draft the data will not display at user device.</b></label>

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
            <!-- BEGIN PROFILE CONTENT -->



            <!-- END PROFILE CONTENT -->
        </div>
    </div>
</div>
<!-- END CONTENT BODY -->
</div>

<!-- END CONTENT -->
<!-- BEGIN QUICK SIDEBAR -->
<?php $this->load->view('quick_sidebar'); ?>
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
<script src="<?php echo base_url("assets/pages/scripts/ui-sweetalert.min.js"); ?>" type="text/javascript"></script>

<!-- END THEME LAYOUT SCRIPTS -->

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>

<!-- datatable -->
<script src="<?php echo base_url("assets/global/plugins/datatables/datatables.min.js"); ?>" type="text/javascript"></script>

<script src="<?php echo base_url("assets/global/plugins/datatables/datatables.min.js"); ?>" type="text/javascript"></script>
<script src="<?php echo base_url("assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js"); ?>" type="text/javascript"></script>
<script src="<?php echo base_url("assets/global/scripts/app.min.js"); ?>" type="text/javascript"></script>
<script src="<?php echo base_url("assets/pages/scripts/table-datatables-managed.min.js"); ?>" type="text/javascript"></script>

<!--end-->
<script>
    var room = 1;
    function education_fields() {

        room++;
        var objTo = document.getElementById('education_fields')
        var divtest = document.createElement("div");
        divtest.setAttribute("class", "form-group removeclass"+room);
        var rdiv = 'removeclass'+room;
        divtest.innerHTML = '<div class="col-sm-4 nopadding"><div class="form-group"> <input type="text" class="form-control" id="attribute_name" name="attribute_name[]" value="" placeholder="name" required></div></div><div class="col-sm-4 nopadding"><div class="form-group"> <input type="text" class="form-control" id="attribute_value" name="attribute_value[]" value="" placeholder="value"></div></div><div class="col-sm-3 nopadding"><div class="form-group"> <input type="text" class="form-control" id="attribute_stock" name="attribute_stock[]" value="" placeholder="stock"></div></div><div class="col-sm-1 nopadding"><div class="form-group"><div class="input-group"> <div class="input-group-btn"> <button class="btn btn-danger" type="button" onclick="remove_education_fields('+ room +');"> <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </button></div></div></div></div><div class="clear"></div>';

        objTo.appendChild(divtest)
    }
    function remove_education_fields(rid) {
        $('.removeclass'+rid).remove();
    }
</script>
<script>
    $(document).ready(function() {

        $('#ddlCars2').multiselect({
            includeSelectAllOption: true,
            enableFiltering:true

        });

        $('#ddlCars').multiselect({
            includeSelectAllOption: true,
            enableFiltering:true

        });


    });
</script>
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 150,                 // set editor height
            minHeight: null,             // set minimum height of editor
            maxHeight: null,             // set maximum height of editor
            focus: true                  // set focus to editable area after initializing summernote
        });
    });
</script>
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

<script>
    function product_colors(sel)
    {
        // alert(sel.options[sel.selectedIndex].value);
        var color=sel.options[sel.selectedIndex].value;
        $('select.product_color').css('background', color,'color','white');
    }
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

    /* $(document).ready(function(){
     setColor();
     $('select.product_color').change(function(){
     setColor();
     });
     });

     function setColor12()
     {
     //var color =  $('select.product_color').find('option:selected').attr('value');
     var color =  sel.options[sel.selectedIndex].text;
     alert(color);
     $('select.product_color').css('background', color);
     }*/
</script>
<script>
    function img_view(anb){
        $('.modal-body').html('<img src="'+anb+'" height="300">');
        $('#myone').trigger('click');
    }
</script>
</body>

</html>
