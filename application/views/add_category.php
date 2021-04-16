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
    <link href="<?php echo base_url('assets/css/imgareaselect-default.css'); ?>" rel="stylesheet" >
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
                            <span>category</span>
                        </li>
                    </ul>

                </div>
                <!-- END PAGE BAR -->
                <div class="portlet-body" style="background-color: white;padding: 25px;padding-top:15px;margin-top:15px;" >
                    <h1 class="page-title" style="" >ADD CATEGORY
                    </h1>
                    <div class="tab-pane active" id="tab_1">
                        <form id="myform" enctype="multipart/form-data" method="post" onsubmit="return valid_form();" >
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group form-md-line-input form-md-floating-label">
                                            <input type="text" class="form-control " onchange="<?php if(!isset($check_u)){ echo 'name_checker(this.value);'; } ?>" name="category_name" id="category_name" value="<?php if(isset($check_u)){ echo $up_row[0]['name']; } ?>">
                                            <label for="form_control_pickup_address"> Category Name *</label>
                                            <span class="help-block">Category name Goes here...</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group form-md-line-input form-md-floating-label">
                                            <input type="text" class="form-control " onchange="<?php if(!isset($check_u)){ echo 'name_checker(this.value);'; } ?>" name="category_name_ar" id="category_name_ar" value="<?php if(isset($check_u)){ echo $up_row[0]['name_ar']; } ?>">
                                            <label for="form_control_pickup_address"> Category Name Arabic *</label>
                                            <span class="help-block">Category name arabic Goes here...</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group form-md-line-input form-md-floating-label">
                                            <label for="form_control_pickup_address"> Category Color *</label>
                                            <input class="jscolor" name="color" id="color" value="<?php if(isset($check_u)){ echo $up_row[0]['color']; } ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="theme-option col-xs-3" >
                                        <select name="perent" class="sidebar-option form-control input-sm">
                                            <option value="" >NO PARENT</option>
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
                                                    printf("<option type='checkbox' class='%d' value='%d' >&nbsp;&nbsp<span value='%d' >%s%s</span>\n<br>",$t['id'], $t['id'],$t['id'], $dash, $t['name']);
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
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group form-md-line-input form-md-floating-label">
                                            <textarea type="text" class="form-control" name="cat_de" id="cat_de"  ><?php if(isset($check_u)){ echo $up_row[0]['brief']; } ?></textarea>
                                            <label for="form_control_pickup_address"> Category Discription </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-5 col-md-5">
                                        <div class="form-group form-md-line-input form-md-floating-label">
                                            <label for="form_control_pickup_address">Promo Slider Image</label>
                                            <input type="file" class="form-control" name="slider_img[]" id="slider_img" multiple>
                                        </div>
                                    </div>
                                    <?php if(isset($check_u)){ ?>
                                        <div class="col-lg-5 col-md-5"><div class="row">
                                                <?php
                                                $x = 0;
                                                foreach ($slider as $img){
                                                    $x++;
                                                    ?><div class="col-md-4" id="slider<?php echo $img['id']; ?>"><a class="glyphicon glyphicon-remove" id="remove<?php echo $img['id']; ?>" onclick="remove(<?php echo $img['id']; ?>);" style="margin-left: 100px;"></a><img class='img-responsive' src='<?php echo base_url('uploads/category_slider/').$img['img']; ?>' height='150' width='150'><br></div>
                                                    <?php
                                                    if($x == 3){
                                                        echo "</div><div class='row'>";
                                                    }
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        <input type="checkbox" class="make-switch" data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF" id="display" name="display" value="1" <?php if(isset($check_u)){ if($up_row[0]['slider_display'] == 1){ echo 'checked'; }; } ?> >
                                    </div>
                                    <div class="col-xs-5" >&nbsp;&nbsp;&nbsp;&nbsp;Display Promo Slider</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-5 col-md-5">
                                        <div class="form-group form-md-line-input form-md-floating-label">
                                            <input type="number" class="form-control" min="0" max="10" onkeydown="return false" name="priority" id="priority" value="<?php if(isset($check_u)){ echo $up_row[0]['priority']; } ?>">
                                            <label for="form_control_pickup_address"> Priority *</label>
                                            <span class="help-block" >Priority determines the order of the list of categories in android, order by priority ASCENDING</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-5 col-md-5">
                                        <div class="form-group form-md-line-input form-md-floating-label">
                                            <label for="form_control_pickup_address">Category Image *</label>
                                            <input type="file" class="form-control" onchange="run_img_ever(this.value);" accept="image/*"  name="img" id="img" onclick="<?php if(isset($check_u)){ echo $up_row[0]['icon']; } ?>" value="<?php if(isset($check_u)){ echo $up_row[0]['icon']; } ?>"><br>
                                            <img id="image" src="#" >
                                            <input type="hidden" id="img_name" name="img_name" value="<?php if(isset($check_u)){ echo $up_row[0]['icon']; } ?>">
                                        </div>
                                        <span class="hint" ><ul style="list-style:none;opacity:0.5;" ><li>1. Image Ratio is 1:1,recommended size is W:200px H:200px </li><li>2. Image with single color (Monochrome)</li><li>3. Transparent background</li></ul></span>
                                    </div>
                                    <?php if(isset($check_u)){ ?>
                                        <div class="col-lg-5 col-md-5">
                                            <b onclick="img_view(<?php if(isset($check_u)){ echo $up_row[0]['id']; } ?>);" href="#"> <i class="glyphicon glyphicon-picture"></i></b>
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        <input type="checkbox" class="make-switch" data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF" id="draft" name="draft" value="1" <?php if(isset($check_u)){ if($up_row[0]['draft'] == 1){ echo 'checked'; }} ?> >
                                    </div>
                                    <div class="col-xs-5" >&nbsp;&nbsp;&nbsp;&nbsp;Save As Draft</div>
                                </div>
                                <div class="row">
                                    <br>
                                    <div class="col-xs-12" >(*) required field</div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 ">
															<span class="pull-right">
															<input type="submit" class="btn red " name="submit" value="submit">
															<input type="reset" class="btn blue" style="margin-left:9px;" value="CANCEL">
															</span>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End: life time stats -->
                <!-- END PAGE TITLE-->
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
<a href="#" class="hide" id="pop"></a>
<!-- Creates the bootstrap modal where the image will appear -->
<div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Image preview</h4>
            </div>
            <div class="modal-body">
                <img src="" id="imagepreview" style="width: 400px; height: 264px;" >
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="quick-nav-overlay"></div>
<!-- END QUICK NAV -->
<!--[if lt IE 9] -->
<?php $this->load->view('js'); ?>
<script src="<?php echo base_url('assets/scripts/jquery.imgareaselect.pack.js'); ?>"></script>
<script src="<?php echo base_url("assets/global/plugins/bootstrap-sweetalert/sweetalert.min.js"); ?>" type="text/javascript"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.js"></script>
<script src="<?php echo base_url("assets/pages/scripts/ui-sweetalert.min.js"); ?>" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jscolor/2.0.4/jscolor.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jscolor/2.0.4/jscolor.min.js"></script>
<!-- END THEME LAYOUT SCRIPTS -->
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
    function img_view(id) {
        $.ajax({
            'url':'<?php echo base_url('Manage_cat/get_image'); ?>',
            'method':'post',
            'data':{'id':id},
            'success':function (data) {
                $('#imagepreview').attr('src', data); // here asign the image to the modal when the user click the enlarge link
                $('#imagemodal').modal('show');
            }
        });
    }
    function remove(id){
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
                $.ajax({
                    'url':'<?php echo base_url(); ?>Manage_cat/remove_slide',
                    'method':'post',
                    'data':{'id':id},
                    'success': function(responce){

                    }
                });
                $('#slider'+id).fadeOut();
                swal("Deleted!", "Your imaginary file has been deleted.", "success");
            });
    }
    $('#image').hide();
    var name;
    var x;
    var y;
    var width;
    var height;
    document.getElementById("img").onchange = function () {
        var reader = new FileReader();
        reader.onload = function (e) {
            // get loaded data and render thumbnail.
            document.getElementById("image").src = e.target.result;
            var image = new Image();
            $('#image').hide();
            //Set the Base64 string return from FileReader as source.
            image.src = e.target.result;
            image.onload = function () {
                //Determine the Height and Width.
                var height_a = this.height;
                var width_a = this.width;
                if (height_a > 675|| width_a > 580) {
                    sweetAlert("Oops...", "Please Select 675 x 580 Picture!", "error");
                    return false;
                    $('#image').hide();
                    x = 0;
                }
                else
                {

                    data = new FormData();
                    data.append('img', $('#img')[0].files[0]);
                    $.ajax({
                        'url': "<?php echo base_url('Crop_my_image/do_upload/cat');?>", // Url to which the request is send
                        'type': "POST",             // Type of request to be send, called as method
                        'data': data,
                        contentType: false,       // The content type used when sending data to the server.
                        cache: false,
                        processData:false,
                        'success': function(data)   // A function to be called if request succeeds
                        {
                            name = data;
                            $('#img_name').val('new_'+name);
                            $('#image').show();
                        }
                    });
                }
            }
        };
        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
        $('#image').imgAreaSelect({
            x: 120, y: 90, x2: 280, y2: 210,
            onSelectEnd: function (img,selection) {
                x = selection.x1;
                y = selection.y1;
                width = selection.width;
                height = selection.height;
            }
        });
    };
    function valid_form() {
        if($('#category_name').val() === ''){
            sweetAlert("Oops...", "Name is Required!", "error");
            return false;
        }
        if($('#category_name_ar').val() === ''){
            sweetAlert("Oops...", "Name Arabic is Required!", "error");
            return false;
        }
        if($('#priority').val() === ''){
            sweetAlert("Oops...", "Priority is Required!", "error");
            return false;
        }
        if($('#img_name').val() === ''){
            sweetAlert("Oops...", "Image is Required!", "error");
            return false;
        }
        if(checker == 'ss'){
            sweetAlert("Oops...", "Category Name Already Taken!", "error");
            return false;
        }
        if(x != null) {
            $.ajax({
                'url': "<?php echo base_url('Crop_my_image/crop_and_move/cat');?>",
                'type': "POST",
                'data': {'x': x, 'y': y, 'w': width, 'h': height, 'name': name},
                'success': function (data) {
                   // alert(data);
                }
            });
        }
    }
    var checker = 'sa';
    function name_checker(name) {
        $.ajax({
            'url': "<?php echo base_url('Manage_cat/check_username');?>",
            'type': "POST",
            'data': {'name':name},
            'success': function(data){
                if(data == 's') {
                    sweetAlert("Oops...", "Category Name Already Taken!", "error");
                    checker = 'ss';
                }else{
                    checker = 'sa';
                }
            }
        });
    }
    $('.<?php if(isset($check_u)){ echo $up_row[0]["parent_id"]; } ?>').attr('selected','selected');
</script>
</body>

</html>
