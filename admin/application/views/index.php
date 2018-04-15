<?php
header('cache-control: no-cache,no-store,must-revalidate'); // HTTP 1.1.
header('pragma: no-cache'); // HTTP 1.0.
header('expires: 0'); // Proxies.
?>  
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/favicon.ico">

        <title>OnlineGarum</title>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-reset.css" rel="stylesheet">
        <!--external css-->
        <link href="<?php echo base_url(); ?>assets/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom styles for this template -->
        <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/style-responsive.css" rel="stylesheet" />

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
        <!--[if lt IE 9]>
        <script src="<?php echo base_url(); ?>assets/js/html5shiv.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="login-body">
        <div class="container">            
            <?php echo form_open('home/validate', 'id="login-form" class="form-signin"'); ?>            
            <h2 class="form-signin-heading">sign in now</h2>
            
            <?php if ($this->session->flashdata('login')) { ?>
                <div class="alert alert-danger">  
                    <button type="button" class="close" data-dismiss="alert">&times;</button>                    
                    <strong><?php echo $this->session->flashdata('login'); ?></strong>
                </div>  
            <?php } ?>               
            <div class="login-wrap">
                <input type="text" class="form-control" placeholder="Username" name="username" autofocus>
                <input type="password" class="form-control" placeholder="Password" name="password">
                <label class="checkbox">
                    <span class="pull-right">
                        <!-- <a data-toggle="modal" href="#myModal"> Forgot Password?</a>-->
                    </span>
                </label>
                <button class="btn btn-lg btn-login btn-block" type="submit">Sign in</button>
            </div>
            <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Forgot Password ?</h4>
                        </div>
                        <div class="modal-body">
                            <p>Enter your e-mail address below to reset your password.</p>
                            <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                        </div>
                        <div class="modal-footer">
                            <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                            <button class="btn btn-success" type="button">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/form-validation-script.js"></script>
</body>
</html>
