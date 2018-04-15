<!DOCTYPE html>
<html dir="ltr" lang="en">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width">
        <title>OnlineGarum</title>
        <base  />

        <meta name="description" content="onlinegarum" />
        <link href="<?php echo base_url(); ?>assets/image/favicon.ico" rel="icon" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/view/theme/onlinegarum/stylesheet/stylesheet.css" />
        <link href="<?php echo base_url(); ?>assets/view/theme/onlinegarum/stylesheet/mj-slategray.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets/view/theme/onlinegarum/stylesheet/mj-template.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets/view/theme/onlinegarum/stylesheet/mj-layout.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets/view/theme/onlinegarum/stylesheet/mj-general.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets/view/theme/onlinegarum/stylesheet/mj-tab.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets/view/theme/onlinegarum/stylesheet/mj-mobile.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets/view/theme/onlinegarum/stylesheet/mj-ie.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets/view/theme/onlinegarum/stylesheet/cloud-zoom.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets/view/theme/onlinegarum/stylesheet/flexslider.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets/view/theme/onlinegarum/stylesheet/font-awesome/css/font-awesome.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/view/theme/default/stylesheet/accordion.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/includes/css/modalWindowf43b.css" />        
        <script src="<?php echo base_url(); ?>assets/view/javascript/jquery/jquery.min.js" type="text/javascript"></script>       
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/view/theme/onlinegarum/stylesheet/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/view/theme/onlinegarum/stylesheet/template.css" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/view/theme/onlinegarum/stylesheet/bootstrap-responsive.css" type="text/css">
        <link href="<?php echo base_url(); ?>assets/assets/advanced-datatable/media/css/demo_table.css" rel="stylesheet" />
        <link href="http://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets/view/theme/onlinegarum/stylesheet/homepage.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/view/theme/default/stylesheet/yaslider.css" media="screen" />          
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/view/javascript/jquery/jquery-1.7.1.min.js"></script>        
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/view/javascript/jquery/ui/jquery-ui-1.8.16.custom.min.js"></script>        
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/view/javascript/jquery/ui/themes/ui-lightness/jquery-ui-1.8.16.custom.css" />
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/view/javascript/common.js"></script>
        <script src="<?php echo base_url(); ?>assets/view/theme/onlinegarum/js/jquery.flexslider.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/view/theme/onlinegarum/js/jquery.flexslider-min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/view/theme/onlinegarum/js/cloud-zoom.1.0.3.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/view/theme/onlinegarum/js/bootstrap.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/view/javascript/jquery/scripts.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/includes/js/jquery.modalWindowf43b.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/view/javascript/jquery.validate.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/view/javascript/form-validation-script.js"></script>
        <script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>assets/assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
        <script type="text/javascript">                
            $(function() {
                $(window).scroll(function() {
		
                    if($(this).scrollTop() > 25)
                    {
                        $("#mj-topbar").css('background-color', '#4B5668');
                        $("#mj-topbar").css('background-image','url("<?php echo base_url(); ?>assets/view/theme/onlinegarum/image/topbar-bg.png") repeat scroll 0 0 transparent');
                        $("#mj-topbar a").css('color', '#FFFFFF');
                        $("#mj-topbar div").css('color', '#FFFFFF');
                        $("#mj-topbar li").css('background', 'url("<?php echo base_url(); ?>assets/view/theme/onlinegarum/image/topbar-arrow-white.png") no-repeat scroll right center transparent');
                        $("#mj-topbar li:last-child").css('background', 'none');
                    } 
                    else 
                    {
                        $("#mj-topbar").css('background','url("<?php echo base_url(); ?>assets/view/theme/onlinegarum//image/topbar-bg.png") repeat scroll 0 0 transparent');
                        $("#mj-topbar a").css('color', '#4B5668');
                        $("#mj-topbar div").css('color', '#4B5668');
                        $("#mj-topbar li").css('background', 'url("<?php echo base_url(); ?>assets/view/theme/onlinegarum/image/slategray-arrow.png") no-repeat scroll right center transparent');
                        $("#mj-topbar li:last-child").css('background', 'none');
                    }				
                    if($(this).scrollTop() > 400) {
                        $('#backtotop').fadeIn();	
                    } else {
                        $('#backtotop').fadeOut();
                    }	
                });
 
                $('#backtotop').click(function() {
                    $('body,html').animate({scrollTop:0},800);
                });	
            });
        </script>
        <script>
            $(window).load(function() {
                $('#carousel').flexslider({
                    animation: "slide",
                    controlNav: false,
                    animationLoop: false,
                    slideshow: false,
                    itemWidth: 160,
                    itemMargin: 5,
                    asNavFor: '#slider'
                });
  
                $('#slider').flexslider({
                    animation: "slide",
                    controlNav: false,
                    animationLoop: false,
                    slideshow: false,
                    sync: "#carousel"
                });
            });
        </script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/view/javascript/jquery/tabs.js"></script>
        <script>jQuery('#zoom01, .cloud-zoom-gallery').CloudZoom();</script>

        <script type="text/javascript" src="<?php echo base_url(); ?>assets/view/javascript/jquery/colorbox/jquery.colorbox-min.js"></script>
        <script>jQuery('#zoom01, .cloud-zoom-gallery').CloudZoom();</script>

        <script type="text/javascript" src="<?php echo base_url(); ?>assets/view/javascript/yaslider/jquery.cycle.all.js"></script>
        <script>jQuery('#zoom01, .cloud-zoom-gallery').CloudZoom();</script>        

        <script type="text/javascript" src="<?php echo base_url(); ?>assets/view/javascript/jquery/jquery.total-storage.min.js"></script>
        <script>jQuery('#zoom01, .cloud-zoom-gallery').CloudZoom();</script>


        <!--[if IE 7]> 
        <link rel="stylesheet" type="text/css" href="catalog/view/theme/default/stylesheet/ie7.css" />
        <![endif]-->
        <!--[if lt IE 7]>
        <link rel="stylesheet" type="text/css" href="catalog/view/theme/default/stylesheet/ie6.css" />
        <script type="text/javascript" src="catalog/view/javascript/DD_belatedPNG_0.0.8a-min.js"></script>
        <script type="text/javascript">
        DD_belatedPNG.fix('#logo img');
        </script>
        <![endif]-->

    </head>
    <body>

        <div id="mj-container">
            <div id="mj-topbar">
                <div class="mj-subcontainer">
                    <div class="mj-grid16 mj-lspace"></div>


                </div>
            </div>
            <div id="mj-header">
                <div class="mj-subcontainer">
                    <a href="<?php echo base_url();?>home"><img src="<?php echo base_url(); ?>assets/image/logo.png" title="OnlineGarum" alt="OnlineGarum" style="height: 80px; width: 250px;" /></a>
                    <div class="mj-grid16 mj-rspace mj-lspace"> 
                    </div>
                    <div class="mj-grid32 mj-lspace">
                        <form action="<?php echo base_url(); ?>home/search" id="form-search" method="POST">
                            <div id="search">
                                <button class="button-search12" type="submit"></button>
                                <input type="text" name="search" placeholder="Search" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="mj-righttop">
                <div class="mj-subcontainer">
                    <div id="mj-menubar">
                        <div class="jsn-mainnav navbar">
                            <div  class="jsn-mainnav-inner navbar-inner">
                                <div class="container clearfix">
                                    <div class="mainnav-toggle clearfix">
                                        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span>Main Menu</span></button>
                                    </div>
                                    <div id="jsn-pos-mainnav" class="nav-collapse collapse clearfix">

                                        <ul class="nav">
                                            <li><a href="<?php echo base_url(); ?>home">Home</a></li>                                       

                                            <li id="store"><a href="#">Store</a>
                                                <ul class="nav-child unstyled1">
                                                    <?php foreach ($category as $nav_details) { ?>                    
                                                        <li class="submenu"><a href="#"><?php echo $nav_details->cat_name; ?></a>
                                                            <ul class="nav-child unstyled2">
                                                                <?php
                                                                $sub_cat = $this->home_model->fetch_subcat($nav_details->cat_id);
                                                                foreach ($sub_cat as $sub_cat) {
                                                                    ?>
                                                                    <li><a href="<?php echo base_url() . 'product' . '/' . 'list_product' . '/' . $nav_details->cat_id . '/' . $sub_cat->sub_cat_id; ?>"><?php echo $sub_cat->sub_cat_name; ?></a></li>
                                                                <?php } ?>

                                                            </ul>
                                                        </li>
                                                    <?php } ?>

                                                </ul>
                                            </li>
                                            <!--<li><a href="#">Brands</a>
                                                <ul class="nav-child unstyled1">
                                                    <li><a href="<?php echo base_url(); ?>brand">Duresta</a></li>
                                                    <li><a href="index5b2d.html?route=product/manufacturer/info&amp;manufacturer_id=6">Grange</a></li>
                                                    <li><a href="index98fa.html?route=product/manufacturer/info&amp;manufacturer_id=8">Husta</a></li>
                                                    <li><a href="index74a7.html?route=product/manufacturer/info&amp;manufacturer_id=9">Ligne Roset</a></li>
                                                    <li><a href="index54e6.html?route=product/manufacturer/info&amp;manufacturer_id=5">Vi-spring</a></li>
                                                </ul>
                                            </li>-->
                                            <li id="information"><a href="#">Information</a>
                                                <ul class="nav-child unstyled">

                                                    <li><a href="<?php echo base_url(); ?>home/privacy_policy">Privacy Policy</a></li>
                                                    <li><a href="<?php echo base_url(); ?>home/terms">Conditions of Use</a></li>

                                                </ul>
                                            </li>
                                            <li id="contact_us"><a href="<?php echo base_url(); ?>home/contact">Contact Us</a></li>
                                            <li><a href="<?php echo base_url(); ?>home/our_team">Our Team</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="notification" style="font-size: large; color: #007c00;">
                <?php if ($this->session->flashdata('welcome')) { ?>
                    <div class="alert-success">  
                        <button type="button" class="close" data-dismiss="alert">&times;</button>                    
                        <?php echo $this->session->flashdata('welcome'); ?>
                    </div>  
                <?php } ?>
            </div>  
