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
                <h6 class="page-title ">Edit Product</h6>
                <div style="background-color: white;padding: 25px;padding-top: 0px;" >
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <div style="background-color: white;padding: 25px;">
                        <form method="post" action="<?php echo base_url('Product/Update_now/').$up_data->id; ?>" id="product" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group form-md-line-input form-md-floating-label">
                                        <input type="text" class="form-control" id="name" name="name" value="<?php print_r(trim($up_data->name));  ?>" >
                                        <label for="form_control_pickup_address"> Name :</label>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group form-md-line-input form-md-floating-label">
                                        <input type="text" class="form-control" id="name_ar" name="name_ar" value="<?php print_r(trim($up_data->name_ar));  ?>" >
                                        <label for="form_control_pickup_address"> Name Arabic :</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group form-md-line-input form-md-floating-label">
                                        <input type="text" class="form-control" id="price" name="price" value="<?php print_r($up_data->price);  ?> "  >
                                        <label for="form_control_pickup_address"> Price:</label>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group form-md-line-input form-md-floating-label">
                                        <input type="hidden" class="form-control" id="time_loop" name="time_loop" value="">
                                        <input type="text" class="form-control" id="stock" name="stock" value="<?php print_r($up_data->stock);  ?>"  >
                                        <label for="form_control_pickup_address"> Stock:</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group form-md-line-input form-md-floating-label">
                                        <input type="text" class="form-control" id="oldprice" name="oldprice" value="<?php print_r($up_data->old_price);  ?> "  >
                                        <label for="form_control_pickup_address"> Old Price:</label>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group form-md-line-input form-md-floating-label">
                                        <input type="text" class="form-control" id="pro_code" name="pro_code" value="<?php print_r($up_data->product_code);  ?> "  >
                                        <label for="form_control_pickup_address"> Product Code:</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group form-md-line-input form-md-floating-label">
                                        <select name="product_status" class="form-control edited">
                                            <option value="READY STOCK" <?php echo $up_data->status == "READY STOCK"?'selected':''; ?>>AVAILABLE</option>
                                            <option value="OUT OF STOCK" <?php echo $up_data->status == "OUT OF STOCK"?'selected':''; ?>>OUT OF STOCK</option>
                                            <option value="SUSPEND" <?php echo $up_data->status == "SUSPEND"?'selected':''; ?>>INACTIVE</option>
                                        </select>
                                        <label for="form_control_pickup_address"> Product Status :</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <label for="form_control_no_of_token">Product Customizable</label><br>
                                    <input type="radio" name="isProductCustomizable" value="1" <?php echo $up_data->isProductCustomizable == 1?'checked':''; ?>>Yes<br>
                                    <input type="radio" name="isProductCustomizable" value="0" <?php echo $up_data->isProductCustomizable == 0?'checked':''; ?>> No
                                </div>
                            </div>
                            <div class="row">
                                <div class="delete_action">
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
                                                    <div class="col-md-6">
                                                        <input type="file" name="new_primary_image" id="new_primary_image" style="margin-left: 3%;">
                                                        <input type="hidden" id="primary_image" name="primary_image" value="<?php echo $up_data->image;?>" >
                                                    </div>
                                                    <div class="col-md-6">
                                                        <a onclick="img_view('<?php echo base_url('uploads/product/'.$up_data->image); ?>');" ><label class="glyphicon glyphicon-picture"></label></a>
                                                    </div>
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
                                                <?php for($i=0;$i<4;$i++): ?>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <input type="file" name="primary_image_e[]" style="margin-left: 3%;"><br>
                                                    </div>
                                                    <?php if(isset($img->result_array()[$i]['name'])): ?>
                                                    <div class="col-md-6">
                                                        <a onclick="img_view('<?php echo base_url('uploads/product/'.$img->result_array()[$i]['name']); ?>');" ><label class="glyphicon glyphicon-picture"></label></a>
                                                    </div>
                                                    <?php else: ?>
                                                        <div class="col-md-6">

                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                                <?php endfor; ?>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 clearfix" style="margin-top: 25px;" >
                                    <fieldset class="scheduler-border" style="margin-top: 50px;">
                                        <legend class="scheduler-border" >Category <span class="glyphicon glyphicon-chevron-down caret_dis" data-toggle="collapse" data-target="#cat_li" ></span></legend>
                                        <div class="" id="cat_li">
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

                                        </div>
                                        <a class="btn red " id="btnAdd-6">Add</a>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group form-md-line-input form-md-floating-label">
                                        <label for="form_control_pickup_address"> Description :</label>
                                        <textarea id="dis" name="dis" ><?php echo $up_data->description; ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group form-md-line-input form-md-floating-label">
                                        <label for="form_control_coupon_code">Attribute </label>
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <?php $xYzZ = 0;foreach ($attr as $at ): ?>
                                                    <div class="row <?php echo $xYzZ . 'ok'; ?>">
                                                        <div class="col-sm-4 nopadding">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" id="attribute_name" name="attribute_name[]" value="<?php echo $at['attribute_name']; ?>" placeholder="name" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4 nopadding">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" id="attribute_value" name="attribute_value[]" value="<?php echo $at['attribute_value']; ?>" placeholder="value">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4 nopadding">
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <div class="input-group-btn">
                                                                        <?php if($xYzZ == 0): ?>
                                                                            <button class="btn btn-success" type="button"  onclick="education_fields();"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
                                                                        <?php else: ?>
                                                                            <button class="btn btn-danger" type="button" onclick="remove_education_ok('<?php echo $xYzZ; ?>');"> <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </button>
                                                                        <?php endif; ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php $xYzZ++; endforeach; ?>
                                            </div>
                                            <div style="padding-left: 15px;padding-top:-15px;padding-right: 15px;" id="education_fields" ></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php $tags_all = explode(',',$up_data->product_tag); ?>
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
                                    <select class="form-control product_color edited" style="overflow: scroll;" id="product_color_to_product" name="product_color_to_product" onchange="product_colors(this);" required >
                                        <option value="null" <?php echo $up_data->product_color==''?'selected':'' ?>>Select Color</option>
                                        <option value="#000000" style="background-color: black; color: white;" <?php echo $up_data->product_color=='#000000'?'selected':'' ?>>Black</option>
                                        <option value="#FF00FF" style="background-color: rgba(255, 0, 0, 0.4);; color: white;" <?php echo $up_data->product_color=='#FF00FF'?'selected':'' ?>>Multicolor</option>
                                        <option value="#FF0000" style="background-color: red; color: white;" <?php echo $up_data->product_color=='#FF0000'?'selected':'' ?>>Red</option>
                                        <option value="#FFFFFF" style="background-color: white; color: black;" <?php echo $up_data->product_color=='#FFFFFF'?'selected':'' ?>>White</option>
                                        <option value="#A52A2A" style="background-color: brown; color: white;" <?php echo $up_data->product_color=='#A52A2A'?'selected':'' ?>>Brown</option>
                                        <option value="#808080" style="background-color: grey; color: white;" <?php echo $up_data->product_color=='#808080'?'selected':'' ?>>Grey</option>
                                        <option value="#FFC0CB" style="background-color: pink; color: white;" <?php echo $up_data->product_color=='#FFC0CB'?'selected':'' ?>>Pink</option>
                                        <option value="#0000FF" style="background-color: blue; color: white;" <?php echo $up_data->product_color=='#0000FF'?'selected':'' ?>>Blue</option>
                                        <option value="#4B0082" style="background-color: indigo; color: white;" <?php echo $up_data->product_color=='#4B0082'?'selected':'' ?>>Indigo</option>
                                        <option value="#800000" style="background-color: maroon; color: white;" <?php echo $up_data->product_color=='#800000'?'selected':'' ?>>Maroon</option>
                                        <option value="#EE82EE" style="background-color: violet; color: white;" <?php echo $up_data->product_color=='#EE82EE'?'selected':'' ?>>Violet</option>
                                        <option value="#FFFF00" style="background-color: yellow; color: white;" <?php echo $up_data->product_color=='#FFFF00'?'selected':'' ?>>Yellow</option>
                                        <option value="#000080" style="background-color: navy; color: white;" <?php echo $up_data->product_color=='#000080'?'selected':'' ?>>Navy</option>
                                        <option value="#008000" style="background-color: green; color: white;" <?php echo $up_data->product_color=='#008000'?'selected':'' ?>>Green</option>
                                        <option value="#90EE90" style="background-color: lightgreen; color: white;" <?php echo $up_data->product_color=='#90EE90'?'selected':'' ?>>LightGreen</option>
                                        <option value="#FFA500" style="background-color: orange; color: white;" <?php echo $up_data->product_color=='#FFA500'?'selected':'' ?>>Orange</option>
                                        <option value="#F5F5DC" style="background-color: beige; color: black;" <?php echo $up_data->product_color=='#F5F5DC'?'selected':'' ?>>Beige</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-1">
                                    <input type="checkbox" id="draft" class="checkbox" name="draft" value="1" <?php echo $up_data->draft == 1?'checked':''; ?>>
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
            <!-- END PROFILE CONTENT -->
        </div>
    </div>
</div>
<!-- Trigger the modal with a button -->
<button type="button" class="hide" data-toggle="modal" id="clicker" data-target="#myModal">Open Modal</button>
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Image Preview</h4>
            </div>
            <div class="modal-body" id="model_body">
                <img class="img-responsive" >
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
<?php $this->load->view('js'); ?>
<script src="<?php echo base_url("assets/global/plugins/bootstrap-sweetalert/sweetalert.min.js"); ?>" type="text/javascript"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.js"></script>
<script src="<?php echo base_url("assets/pages/scripts/ui-sweetalert.min.js"); ?>" type="text/javascript"></script>
<script src="https://rawgit.com/nobleclem/jQuery-MultiSelect/master/jquery.multiselect.js"></script>
<!-- END THEME LAYOUT SCRIPTS -->
<script src="<?php echo base_url('assets/scripts/jquery.imgareaselect.pack.js'); ?>"></script>
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
    $('#name').change(function () {
        if($(this).val() != "<?php echo $up_data->name; ?>") {
            $.ajax({
                url: '<?php echo base_url('Product/check_username/'); ?>',
                method: 'post',
                data: {'name': $(this).val()},
                success: function (data) {
                    if (data == 1) {
                        sweetAlert("Oops...", "Name is Already Exits!", "error");
                        Check_name_pro_ver = 1;
                    }
                    else {
                        Check_name_pro_ver = 0;
                    }
                }
            });
        }
        else{
            Check_name_pro_ver = 0;
        }
    });
    $(document).ready(function()
    {
        $('#sample_1').DataTable();
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
    $.ajax({
        'url':'<?php echo base_url('Product/tga_meter'); ?>',
        'method':'GET',
        'data':{'cat':<?php echo $cat; ?>},
        'success':function (data) {
            $('#tag').html(data);
            $('select[multiple]').multiselect('reload');
            <?php foreach ($tags_all as $ech_tag): ?>
            $('li label input[type="checkbox"][value="<?php echo $ech_tag; ?>"]').trigger('click');
            <?php endforeach; ?>
        }
    });
    var html;
    var category_brand_id = <?php echo isset($cat)?$cat:'0';?>;
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
        var cat = <?php echo $cat; ?>;
        $.ajax({
                'url':'<?php echo base_url('Product/cat_size'); ?>',
                'method':'GET',
                'data':{'cat':cat},
                'success':function (data) {
                    html= data;
                }
        });
        $("#btnAdd-6").click(function(){
            $("#size").append(html);
            time_loop++;
            $('#time_loop').attr('value',time_loop);
        });
        $('.subnow').click(function () {
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
        $('.removeclass'+rid).detach();
    }
    $(function() {
        // from http://stackoverflow.com/questions/45888/what-is-the-most-efficient-way-to-sort-an-html-selects-options-by-value-while
        var my_options = $('.facilities select option');
        var selected = $('.facilities').find('select').val();

        my_options.sort(function(a,b) {
            if (a.text > b.text) return 1;
            if (a.text < b.text) return -1;
            return 0
        });

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
        if($('#price').val() === ''){
            sweetAlert("Oops...", "Product Price is Required!", "error");
            return false;
        }
        if($('#oldprice').val() === ''){
            sweetAlert("Oops...", "Stock is Required!", "error");
            return false;
        }
        var arr = document.getElementsByClassName('stock_ke');
        var tot=0;
        for(var i=0;i<arr.length;i++){
            if(parseInt(arr[i].value))
                tot += parseInt(arr[i].value);
        }
        var totla_stock = $('#stock').val();
        if(arr.length != 0){
            if(tot != totla_stock){
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
    function img_view(id){
        $('#model_body img').attr('src',id);
        $('#clicker').trigger('click');
    }
    $(".<?php echo $cat; ?>").attr('checked', true);
    var cat = <?php echo $cat; ?>;
    <?php $x=0;
    $repete_no = array();
    foreach ($colors as $cl):
    if(in_array($cl['product_stock_color'],$repete_no)){
        continue;
    }
    array_push($repete_no,$cl['product_stock_color']);
    ?>
    $.ajax({
        'url':'<?php echo base_url('Product/get_size_stock'); ?>',
        'method':'GET',
        'data':{'cat':cat,'color':'<?php echo $cl['product_stock_color']; ?>','pid':'<?php echo $up_data->id ; ?>','image_of_size':'<?php echo $cl['image'];?>'},
        'success':function (data) {
            $('#size').append(data);
        }
    });
    <?php $x++; endforeach;?>
    function remove_my_att(id){
        $('.Attr_re'+id).remove();
    }
    function immg_view_size_view(id) {
        $('#model_body img').attr('src',id);
        $('#clicker').trigger('click');
    }
    function remove_education_ok(id) {
            $('.'+id+'ok').remove();
    }
    var time_loop = <?php echo count($repete_no); ?>;
    $('#time_loop').attr('value',time_loop);


    $(document).ready(function(){
        $('#brand').DataTable( {
            "ajax": '<?php echo base_url('brand/brand_for_cat/'); ?>'+category_brand_id,
            "serverSide": true,
            "columns": [
                { "data": "check" },
                { "data": "brand_name" }],
            "initComplete":function () {
                $('#brand_row input[value="<?php echo $up_data->product_brand;?>"]').trigger('click');
            }
        } );
    });

</script>

</body>
</html>
