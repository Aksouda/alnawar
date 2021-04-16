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
    <link href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
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
                <!-- END THEME PANEL -->
                <!-- BEGIN PAGE BAR -->
                <div class="page-bar">
                    <ul class="page-breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <span>Order</span>
                        </li>
                    </ul>

                </div>
                <!-- END PAGE BAR -->
                <div style="background-color: white;padding: 25px;padding-top: 0px;" >
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h1 class="page-title" style="" > View Order </h1>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" name="category_name" id="category_name" value="<?php if(isset($data)){ echo $data['user_name']; } ?>" disabled>
                                <label for="form_control_pickup_address"> Buyer Name*</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="number" class="form-control" name="category_name" id="category_name" value="<?php if(isset($data)){ echo $data['mobile']; } ?>" disabled>
                                <label for="form_control_pickup_address"> Mobile*</label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" name="category_name" id="category_name" value="<?php if(isset($data)){ echo $data['email']; } ?>" disabled>
                                <label for="form_control_pickup_address"> Email*</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <textarea class="form-control" disabled><?php if(isset($data)){ echo $data['address1'].$data['address2']; } ?></textarea>
                                <label for="form_control_pickup_address"> Address*</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <label for="form_control_pickup_address" > Order Status*</label>
                                <?php $status_now = $this->db->get_where('order_product',['order_id'=> $data['order_id']])->row()->status;  ?>
                                <select class="form-control" disabled>
                                    <option class="form-control" <?php if($status_now == 0){echo 'selected';} ?>>
                                        Waiting
                                    </option>
                                    <option class="form-control" <?php if($status_now == 1){echo 'selected';} ?>>
                                        PROCESSED
                                    </option>
                                    <option class="form-control" <?php if($status_now == 2){echo 'selected';} ?>>
                                        Cencel
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!--<div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <textarea class="form-control" disabled><?php /*if(isset($data)){ echo $data['comment']; } */?></textarea>
                                <label for="form_control_pickup_address"> Comment *</label>
                            </div>
                        </div>
                    </div>-->
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" name="category_name" id="category_name" value="<?php if(isset($data)){ echo $data['transaction_id']; } ?>" disabled>
                                <label for="form_control_pickup_address"> Transaction id *</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <label for="form_control_pickup_address" > Payment Status*</label>
                                <select class="form-control" disabled>
                                    <option class="form-control" >
                                        Paid
                                    </option>
                                    <option class="form-control" >
                                        Unpaid
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <h3>List Product Order :</h3>
                    <table class="table table-bordered" id="cartlist">
                        <thead>
                            <tr >
                                <td>No.</td>
                                <td>Product</td>
                                <td>Product Item</td>
                                <td>Amount</td>
                                <td>Price Total</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <td>Total</td>
                            <td id="__make_total" ></td>
                        </tr>
                        </tfoot>
                    </table>
                    <span class="help-block" >* This tax may different with your current tax, this tax calculate when buyer submit order

</span>
                    <!-- END PAGE TITLE-->
                </div>
                <!-- END PAGE TITLE-->
            </div>
            <!-- END BEGIN PROFILE SIDEBAR -->
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
<!-- Modal -->
<button type="button" class="hide" data-backdrop="static" data-keyboard="false" data-toggle="modal" id="process_success" data-target="#mysuccess">Open Modal</button>
<div id="mysuccess" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header label-primary">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title ">Details Order</h4>
            </div>
            <div id="now_click" class="modal-body">
            </div>
            <div class="modal-footer btn">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel </button>
            </div>
        </div>

    </div>
</div>
<div class="quick-nav-overlay"></div>
<!-- END QUICK NAV -->
<!--[if lt IE 9] -->
<?php $this->load->view('js'); ?>
<script src="<?php echo base_url("assets/global/plugins/bootstrap-sweetalert/sweetalert.min.js"); ?>" type="text/javascript"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.js"></script>
<script src="<?php echo base_url("assets/pages/scripts/ui-sweetalert.min.js"); ?>" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/plug-ins/1.10.15/api/sum().js" type="text/javascript" ></script>
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
        var tax_catch = '<?php echo tax_rate_order; ?>';
        $('#clickmewow').click(function()
        {
            $('#radio1003').attr('checked', 'checked');
        });
        var table = $('#cartlist').dataTable({
            ajax: '<?php echo base_url('Product_order/get_sep_order_product/').$data["order_id"]; ?>',
            columns: [
                { data: "index" },
                { data: "name" },
                { data: "quantity" },
                { data: "price" },
                { data: "total" },
                { data: "Actions" }
            ],
            "bPaginate": false,
            'searching': false,
            drawCallback: function () {
                var api = this.api();
                $( api.table().footer() ).html(
                    '<tr><td colspan="4" ><b>Subtotal</b></td>'+api.column(3).data().sum()+'<td> '+api.column( 4, {page:'current'} ).data().sum()+'</td></tr>'+
                    '<tr><td colspan="4" ><b>Tax(<?php echo tax_rate_order; ?>%)</b></td><td> '+ Math.round(api.column( 4, {page:'current'} ).data().sum()*tax_catch/100) +'</td></tr>'+
                     '<tr><td colspan="4" ><b>Total</b></td><td> '+((api.column( 4, {page:'current'} ).data().sum()*tax_catch/100)+api.column( 4, {page:'current'} ).data().sum()) +'</td></tr>'
                );
            }
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
    $('#review').on('submit',function(){
        var abc = $('#summernote').val();
        var xyz = $('#name').val();
        if(abc == ''){
            sweetAlert("Oops...", "Description Fileds Required!", "error");
            return false;
        }
        if(xyz == ''){
            sweetAlert("Oops...", "Name Fields Required!", "error");
            return false;
        }
    });
    function review(id) {
        $.ajax({
            'url':'<?php echo base_url('Product_order/each_product/'); ?>' + id,
            'method':'post',
            'data':{'id':id},
            'success':function (data) {
                $('#now_click').html(data);
                $('#process_success').trigger('click');
            }
        });
    }

</script>
</body>

</html>
