<script src="<?php echo base_url("assets/global/plugins/respond.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/global/plugins/excanvas.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/global/plugins/ie8.fix.min.js"); ?>"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="<?php echo base_url("assets/global/plugins/jquery.min.js"); ?>" type="text/javascript"></script>
<script src="<?php echo base_url("assets/global/plugins/bootstrap/js/bootstrap.min.js"); ?>" type="text/javascript"); ?>"></script>
<script src="<?php echo base_url("assets/global/plugins/js.cookie.min.js"); ?>" type="text/javascript"></script>
<script src="<?php echo base_url("assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"); ?>" type="text/javascript"></script>
<script src="<?php echo base_url("assets/global/plugins/jquery.blockui.min.js"); ?>" type="text/javascript"></script>
<script src="<?php echo base_url("assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" ); ?>" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<!--<script src="--><?php //echo base_url("assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" ); ?><!--" type="text/javascript"></script>-->
<script src="<?php echo base_url("assets/global/plugins/moment.min.js" ); ?>" type="text/javascript"></script>
<script src="<?php echo base_url("assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js"); ?>" type="text/javascript"></script>
<!--Side Penal-->
<script src="<?php echo base_url("assets/global/plugins/morris/morris.min.js"); ?>" type="text/javascript"></script>
<script src="<?php echo base_url("assets/global/plugins/morris/raphael-min.js"); ?>" type="text/javascript"></script>
<script src="<?php echo base_url("assets/global/plugins/amcharts/ammap/ammap.js"); ?>" type="text/javascript"></script>
<!--Animation Counter-->
<script src="<?php echo base_url("assets/global/plugins/counterup/jquery.waypoints.min.js"); ?>" type="text/javascript"></script>
<script src="<?php echo base_url("assets/global/plugins/counterup/jquery.counterup.min.js"); ?>" type="text/javascript"></script>
<!--Graph / Chart-->
<script src="<?php echo base_url("assets/global/plugins/flot/jquery.flot.min.js"); ?>" type="text/javascript"></script>
<script src="<?php echo base_url("assets/global/plugins/flot/jquery.flot.resize.min.js"); ?>" type="text/javascript"></script>
<script src="<?php echo base_url("assets/global/plugins/flot/jquery.flot.categories.min.js"); ?>" type="text/javascript"></script>
<!--General state-->
<script src="<?php echo base_url("assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js"); ?>" type="text/javascript"></script>
<!--server state-->
<script src="<?php echo base_url("assets/global/plugins/jquery.sparkline.min.js"); ?>" type="text/javascript"></script>




<!--<script src="--><?php //echo base_url("assets/global/scripts/datatable.js") ?><!--" type="text/javascript"></script>-->
<script src="<?php  echo base_url( "assets/global/plugins/datatables/datatables.min.js") ?>" type="text/javascript"></script>
<script src="<?php  echo base_url("assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js") ?>" type="text/javascript"></script>
<script src="<?php  echo base_url("assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js") ?>" type="text/javascript"></script>
<script src="<?php echo base_url("assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js") ?>" type="text/javascript"></script>
<!--<script src="--><?php //echo base_url( "assets/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js") ?><!--" type="text/javascript"></script>-->




<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="<?php echo base_url("assets/global/scripts/app.min.js"); ?>" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->

<script src="<?php echo base_url("assets/pages/scripts/profile.min.js"); ?>" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="<?php echo base_url("assets/layouts/layout/scripts/layout.min.js"); ?>" type="text/javascript"></script>
<script src="<?php echo base_url("assets/layouts/layout/scripts/demo.min.js"); ?>" type="text/javascript"></script>
<script src="<?php echo base_url("assets/layouts/global/scripts/quick-sidebar.min.js"); ?>" type="text/javascript"></script>
<script src="<?php echo base_url("assets/layouts/global/scripts/quick-nav.min.js"); ?>" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->
<script>
    $(document).ready(function()
    {
        $('#clickmewow').click(function()
        {
            $('#radio1003').attr('checked', 'checked');
        });
    })

    $(document).ready(function() {

        setTimeout(function(){
            $('body').addClass('loaded');
//$('h1').css('color','#222222');
        }, 1000);

    });
</script>
