
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">
        <link rel="shortcut icon" href="<?php echo base_url(); ?>img/shortcut.png">
        <title>RTLH Jepara | GIS</title>
        <link href="<?php echo base_url(); ?>backadmin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>backadmin/assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>backadmin/assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>backadmin/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>backadmin/assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>backadmin/assets/css/responsive.css" rel="stylesheet" type="text/css" />
        <script src="<?php echo base_url(); ?>backadmin/assets/js/modernizr.min.js"></script>
    </head>
    <body>
        <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">
            <div class=" card-box">
                <div class="panel-heading"> 
                    <h3 class="text-center"> Login <strong class="text-custom">Admin</strong> </h3>
                </div> 
                <div class="panel-body">
                    Masukkan Username dan Password :
                    <form class="form-horizontal m-t-20" action="<?php echo site_url('administrator/validasi'); ?>" method="post">
                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" placeholder="Username" name="username" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$" title="Jangan Gunakan SPASI, Max. 20 Karakter" autocomplete="off" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" placeholder="Password" name="password" autocomplete="off" required>
                            </div>
                        </div>                        
                        <div class="form-group text-center m-t-40">
                            <div class="col-xs-12">
                                <button class="btn btn-pink btn-block waves-effect waves-light" type="submit">Log In</button>
                            </div>
                        </div>
                    </form>
                    <?php
                    if ($this->session->flashdata('notification')) {
                    ?>
                    <div class="alert alert-block alert-danger fade in" align="center">
                        <?php echo $this->session->flashdata('notification'); ?>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>

        <script>
            var resizefunc = [];
        </script>
        <!-- jQuery  -->
        <script src="<?php echo base_url(); ?>backadmin/assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>backadmin/assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>backadmin/assets/js/detect.js"></script>
        <script src="<?php echo base_url(); ?>backadmin/assets/js/fastclick.js"></script>
        <script src="<?php echo base_url(); ?>backadmin/assets/js/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url(); ?>backadmin/assets/js/jquery.blockUI.js"></script>
        <script src="<?php echo base_url(); ?>backadmin/assets/js/waves.js"></script>
        <script src="<?php echo base_url(); ?>backadmin/assets/js/wow.min.js"></script>
        <script src="<?php echo base_url(); ?>backadmin/assets/js/jquery.nicescroll.js"></script>
        <script src="<?php echo base_url(); ?>backadmin/assets/js/jquery.scrollTo.min.js"></script>
        <script src="<?php echo base_url(); ?>backadmin/assets/js/jquery.core.js"></script>
        <script src="<?php echo base_url(); ?>backadmin/assets/js/jquery.app.js"></script>    
    </body>
</html>