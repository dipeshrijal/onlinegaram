<!DOCTYPE html>
<?php
header('cache-control: no-cache,no-store,must-revalidate'); // HTTP 1.1.
header('pragma: no-cache'); // HTTP 1.0.
header('expires: 0'); // Proxies.

if (!$this->session->userdata('is_logged_in')) {
   $this->session->sess_destroy();
    redirect('home');
    
}

?>  
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/favicon.ico">

        <title>OnlineGarum</title>

        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-reset.css" rel="stylesheet">
        <!--external css-->
        <link href="<?php echo base_url(); ?>assets/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/assets/advanced-datatable/media/css/demo_table.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/assets/bootstrap-fileupload/bootstrap-fileupload.css" />
        <!-- Custom styles for this template -->
        <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/style-responsive.css" rel="stylesheet" />

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
        <!--[if lt IE 9]>
          <script src="<?php echo base_url(); ?>assets/js/html5shiv.js"></script>
          <script src="<?php echo base_url(); ?>assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>


        <section id="container" >
            <!--header start-->
            <header class="header white-bg">
                <div class="sidebar-toggle-box">
                    <div data-original-title="Toggle Navigation" data-placement="right" class="icon-reorder tooltips"></div>
                </div>
                <a href="<?php echo base_url(); ?>home/members_area" class="logo">Online<span>Garum</span></a>
                <div class="top-nav ">
                    <ul class="nav pull-right top-menu">
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <img alt="" src="<?php echo base_url(); ?>assets/img/logo.png" style="height:30px;width: 30px;">
                                <span class="username">Admin</span>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu extended logout">
                                <div class="log-arrow-up"></div>
                                <li><a href="<?php echo base_url(); ?>home/change_password"><i class=" icon-edit"></i>Password</a></li>
                                <li><a href="http://www.onlinegarum.com" target="_blank"><i class=" icon-laptop"></i>Visit Site</a></li>
                                <li><a href="<?php echo base_url(); ?>home/logout"><i class="icon-key"></i> Log Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </header>