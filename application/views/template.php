<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">
        <link rel="shortcut icon" href="<?php echo base_url(); ?>img/shortcut.png">
        <title>RTLH Jepara | GIS</title>
        <!-- Image Upload -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>backadmin/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.css"
        <!-- Summernote -->
        <link href="<?php echo base_url(); ?>backadmin/assets/plugins/summernote/summernote.css" rel="stylesheet" />
        <!-- Sweet Alert -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>backadmin/assets/plugins/bootstrap-sweetalert/sweetalert2.css">
        <!-- CustomBox -->
        <link href="<?php echo base_url(); ?>backadmin/assets/plugins/custombox/css/custombox.css" rel="stylesheet">
        <!-- DatePicker -->
        <link href="<?php echo base_url(); ?>backadmin/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>backadmin/assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>backadmin/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>backadmin/assets/plugins/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>backadmin/assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
        <!-- Select2 -->
        <link href="<?php echo base_url(); ?>backadmin/assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

        <!-- Core -->
        <link href="<?php echo base_url(); ?>backadmin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>backadmin/assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>backadmin/assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>backadmin/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>backadmin/assets/css/responsive.css" rel="stylesheet" type="text/css" />
        <script src="<?php echo base_url(); ?>backadmin/assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>backadmin/assets/js/modernizr.min.js"></script>
        <script src="<?php echo base_url(); ?>backadmin/assets/plugins/bootstrap-sweetalert/sweetalert2.min.js"></script>
    </head>
    <body class="fixed-left">
        <div id="wrapper">
            <?php echo $_header; ?>
            <?php echo $_sidebar; ?>

            <div class="content-page">
                <?php echo $content; ?>
                <?php echo $_footer; ?>
            </div>
        </div>

        <script>
            var resizefunc = [];
        </script>
        <!-- js  -->        
        <script src="<?php echo base_url(); ?>backadmin/assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>backadmin/assets/js/detect.js"></script>
        <script src="<?php echo base_url(); ?>backadmin/assets/js/fastclick.js"></script>
        <script src="<?php echo base_url(); ?>backadmin/assets/js/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url(); ?>backadmin/assets/js/jquery.blockUI.js"></script>
        <script src="<?php echo base_url(); ?>backadmin/assets/js/waves.js"></script>
        <script src="<?php echo base_url(); ?>backadmin/assets/js/wow.min.js"></script>
        <script src="<?php echo base_url(); ?>backadmin/assets/js/jquery.nicescroll.js"></script>
        <script src="<?php echo base_url(); ?>backadmin/assets/js/jquery.scrollTo.min.js"></script>
        <!-- DatePicker -->
        <script src="<?php echo base_url(); ?>backadmin/assets/plugins/moment/moment.js"></script>
        <script src="<?php echo base_url(); ?>backadmin/assets/plugins/timepicker/bootstrap-timepicker.js"></script>
        <script src="<?php echo base_url(); ?>backadmin/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <script src="<?php echo base_url(); ?>backadmin/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="<?php echo base_url(); ?>backadmin/assets/plugins/clockpicker/js/bootstrap-clockpicker.min.js"></script>
        <script src="<?php echo base_url(); ?>backadmin/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
        <!--Select2 -->
        <script src="<?php echo base_url(); ?>backadmin/assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>
        <!-- Datatables -->
        <script src="<?php echo base_url(); ?>backadmin/assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url(); ?>backadmin/assets/plugins/datatables/dataTables.bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>backadmin/assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="<?php echo base_url(); ?>backadmin/assets/pages/datatables.init.js"></script>
        <!-- Folder Plugins -->        
        <script src="<?php echo base_url(); ?>backadmin/assets/plugins/peity/jquery.peity.min.js"></script>
        <script src="<?php echo base_url(); ?>backadmin/assets/plugins/waypoints/lib/jquery.waypoints.js"></script>
        <script src="<?php echo base_url(); ?>backadmin/assets/plugins/counterup/jquery.counterup.min.js"></script>
        <script src="<?php echo base_url(); ?>backadmin/assets/plugins/raphael/raphael-min.js"></script>
        <script src="<?php echo base_url(); ?>backadmin/assets/plugins/jquery-knob/jquery.knob.js"></script>
        <!-- Picker-->
        <script src="<?php echo base_url(); ?>backadmin/assets/pages/jquery.form-pickers.init.js"></script>
        <!-- Advanced Form -->
        <!--<script type="text/javascript" src="<?php // echo base_url(); ?>backadmin/assets/pages/jquery.form-advanced.init.js"></script> -->
        <!-- js  -->
        <script src="<?php echo base_url(); ?>backadmin/assets/js/jquery.core.js"></script>
        <script src="<?php echo base_url(); ?>backadmin/assets/js/jquery.app.js"></script>
        <!-- Modal-Effect -->
        <script src="<?php echo base_url(); ?>backadmin/assets/plugins/custombox/js/custombox.min.js"></script>
        <script src="<?php echo base_url(); ?>backadmin/assets/plugins/custombox/js/legacy.min.js"></script>
        <!--form validation init-->
        <script src="<?php echo base_url(); ?>backadmin/assets/plugins/summernote/summernote.min.js"></script>
        <!-- FileUpload Image-->
        <script type="text/javascript" src="<?php echo base_url(); ?>backadmin/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.js"></script>

        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
                $(".knob").knob();
            });
        </script>

        <script type="text/javascript">
            $(document).ready(function () {
                $('#datatable').dataTable();
            });
            TableManageButtons.init();
        </script>

        <script>
            jQuery(document).ready(function(){
                $('.summernote').summernote({
                    height: 350,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: false                 // set focus to editable area after initializing summernote
                });
                $('.inline-editor').summernote({
                    airMode: true            
                });
            });
        </script>

        <script type="text/javascript">
            jQuery('#date-range').datepicker({
                format: "dd-mm-yyyy",
                toggleActive: true,
                autoclose: true,
                todayHighlight: true
            });
        </script>
    </body>
</html>
<!-- DataTables -->
<link href="<?php echo base_url(); ?>backadmin/assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>backadmin/assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>backadmin/assets/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>backadmin/assets/css/pages.css" rel="stylesheet" type="text/css" />