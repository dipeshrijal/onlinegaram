<?php include 'include/header.php'; ?>

<div id="mj-slidetitle">
    <div class="mj-subcontainer"> <span class="mj-title"></span>

    </div>
</div>
<div id="mj-maincontent">
    <div class="mj-subcontainer">
        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="mj-grid96">
            <tbody>
                <tr id="shopping_items">
                    <td valign="top" id="mj-contentarea" class="mj-grid80 mj-lspace" style="right:-1%">
                        <?php foreach ($prod_details as $prod_dtl) { ?>
                            <div class="centerColumn" id="productGeneral"><h1 class="product_head"><?php echo $prod_dtl->product_name ?></h1>
                                <div class="product-info">
                                    <div class="product_container">
                                        <div class="product_info_left">
                                            <div class="product_image">
                                                <div id="productMainImage" class="centeredContent back"> <a href="<?php echo base_url(); ?>admin/assets/img/<?php echo $prod_dtl->product_image_path; ?>" class="cloud-zoom" id='zoom1' rel="adjustX: 10, adjustY:-1, zoomWidth:360"> <img src="<?php echo base_url(); ?>admin/assets/img/<?php echo $prod_dtl->product_image_path; ?>" style="width:400px;height:350px;" id="image" /></a> </div>
                                            </div>                                        
                                            <div class="image-additional">
                                                <div id="carousel" class="flexslider">   
                                                    <ul class="slides">
                                                        <?php foreach ($get_image as $get_image) { ?>
                                                            <li> <a href="<?php echo base_url(); ?>admin/assets/img/<?php echo $get_image->product_image_path; ?>" class="cloud-zoom-gallery colorbox" rel="useZoom: 'zoom1', smallImage: '<?php echo base_url(); ?>admin/assets/img/<?php echo $get_image->product_image_path; ?>' "><img src="<?php echo base_url(); ?>admin/assets/img/<?php echo $get_image->product_image_path; ?>" style="width:140px;height:140px;" /></a> </li>
                                                        <?php } ?>
                                                    </ul>
                                                </div>
                                            </div>                                       
                                        </div>                                     
                                        <div class="product_info_right">                           
                                            <div class="description">
                                                <div id="fb-root"></div>
                                                <script>(function(d, s, id) {
                                                    var js, fjs = d.getElementsByTagName(s)[0];
                                                    if (d.getElementById(id)) return;
                                                    js = d.createElement(s); js.id = id;
                                                    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=531987403523462";
                                                    fjs.parentNode.insertBefore(js, fjs);
                                                }(document, 'script', 'facebook-jssdk'));</script>
                                                <div class="fb-like" data-href="<?php current_url(); ?>" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div><br/>
                                                <span class="product_label">Product Name:</span> <span class="product_value"> <?php echo $get_image->product_name; ?></span><br />
                                                <span class="product_label">Product Code:</span> <span class="product_value"> <?php echo $get_image->product_code; ?></span><br />
                                                <span class="product_label">Availability:</span> <span class="product_value"> <?php echo $get_image->product_availability; ?></span><br />
                                                <span class="product_label">Color:</span> <span class="product_value"> <?php echo $get_image->product_color; ?></span><br />
                                                <span class="product_label">Size:</span> <span class="product_value"> <?php echo $get_image->product_size; ?></span>
                                            </div>
                                            <div class="product_price" style="opacity:0.75;"> <strong>Price:</strong>
                                                <span class="price_amount"> <span class="normalprice"><?php echo $get_image->product_price; ?></span> <span class="productSpecialPrice"><?php echo $get_image->product_discount_price; ?></span></span>
                                                <br />
                                            </div>

                                            <style type="text/css">
                                                .modalWindow-example-text-modal-window { background: #adadad; padding: 8px; width: 900px;}
                                                .modalWindow-example-text-modal-window .modalWindow-title { background: #215473; color: #ededed; }
                                                .modalWindow-example-text-modal-window .modalWindow-content { background: #fff; color: #333; }
                                                .modalWindow-example-text-modal-window,
                                                .modalWindow-example-text-modal-window .modalWindow-boxInner {

                                                    -webkit-border-radius: 8px;
                                                    -moz-border-radius: 8px;
                                                    border-radius: 8px;
                                                }
                                                .modalWindow-example-text-modal-window .modalWindow-title {
                                                    -webkit-border-radius: 8px 8px 0 0;
                                                    -moz-border-radius: 8px 8px 0 0;
                                                    border-radius: 8px 8px 0 0;
                                                }
                                                .modalWindow-example-text-modal-window .modalWindow-content {
                                                    height: 450px; overflow-y: scroll;
                                                    -webkit-border-radius: 0 0 8px 8px;
                                                    -moz-border-radius: 0 0 8px 8px;
                                                    border-radius: 0 0 8px 8px;
                                                }
                                            </style>
                                            <script type="text/javascript">
                                            //<![CDATA[
                                            jQuery(function($){

                                                $("#example-text-modal-window-modal").modalWindow({
                                                    position:	"fixed",
                                                    width:		900,
                                                    trans:		0.9,
                                                    opacity:	0.8,
                                                    close:		true,
                                                    speed:		600,
                                                    className:		"modalWindow-example-text-modal-window",
                                                    borderWidth: 8
                					
                                                });
                                            }); // end jquery(function($))
                                            //]]&gt; 
                                            </script>
                                            <div id="example-text-modal-window" class="modalWindow-container">
                                                <h3 class="modalWindow-title"><?php echo $prod_dtl->product_name ?></h3>
                                                <div class="modalWindow-content"><div class="modal-inner">
                                                        <form action="<?php echo base_url(); ?>home/sendEmail" method="post" enctype="multipart/form-data" id="buy-form">
                                                            <div class="content">
                                                                <b>Product Name:</b><br />
                                                                <input type="text" name="pName" value="<?php echo $prod_dtl->product_name; ?>" />
                                                                <br />
                                                                <br />
                                                                <b>Product Code:</b><br />
                                                                <input type="text" name="pCode" value="<?php echo $prod_dtl->product_code; ?>" />
                                                                <br />
                                                                <br />
                                                                <b>Product Size:</b><br />
                                                                <input type="text" name="pSize" />                                                                    
                                                                <br />
                                                                <b>Available Size : <?php echo $prod_dtl->product_size; ?></b>
                                                                <br />
                                                                <?php
                                                                $redirect = current_url();
                                                                ?>
                                                                <input type="hidden" name="redirect" value="<?php echo $redirect; ?>">
                                                                <br />
                                                                <b>Product Color:</b><br />
                                                                <input type="text" name="pColor"/>
                                                                <br />
                                                                <b>Available Color : <?php echo $prod_dtl->product_color; ?></b>
                                                                <br />
                                                                <br />
                                                                <b><u>Personal Description</u></b><br />
                                                                <b>Name:</b><br />
                                                                <input type="text" name="name" id="name" required="required" />
                                                                <br />
                                                                <br />
                                                                <b>Delivery Location:</b><br />
                                                                <input type="text" name="dLocation" id="dLocation" required="required" />
                                                                <br />
                                                                <br />
                                                                <b>E-Mail Address:</b><br />
                                                                <input type="text" name="email" id="email" required="required" />
                                                                <br />
                                                                <br />
                                                                <b>Phone:</b><br />
                                                                <input type="text" name="phone" id="phone" required="required" />
                                                                <br />
                                                                <br />
                                                                <b>Message:</b><br />
                                                                <textarea name="message" cols="40" rows="10" style="width: 99%;"></textarea>
                                                                <br />
                                                                <br />                                
                                                            </div>
                                                            <div class="buttons">
                                                                <div class="right">
                                                                    <input type="submit" value="Submit" name="Submit" class="mj-button" /></div>
                                                            </div>
                                                        </form>

                                                    </div>
                                                </div>
                                            </div>
                                            <a id="example-text-modal-window-modal" href="#example-text-modal-window">
                                                <div class="modal-button button-size-default button-color-default"><span>Buy Product</span></div></a>
                                            <br />                                     

                                            <div class="review">
                                                <div><a onclick="$('a[href=\'#tab-review\']').trigger('click');"><b>Write a review</b></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tabs" class="htabs"><a href="#tab-related">Related Product</a>
                                    <a href="#tab-description">Description</a>
                                    <a href="#tab-review">Reviews</a>                                    
                                    <a href="#tab-share">Share</a> 
                                </div>
                                <div id="tab-description" class="tab-content">
                                    <p><span style="color: rgb(64, 64, 64); font-family: 'PT Sans', sans-serif; font-size: 14px; line-height: normal;"><?php echo $get_image->product_desc; ?></span></p>
                                </div>
                                <div id="tab-review" class="tab-content">   
                                    <?php $url = current_url(); ?>
                                    <div class="fb-comments" data-href="<?php echo $url; ?>" data-numposts="5" data-colorscheme="light"></div>
                                </div>
                                <div id="tab-share" class="tab-content">
                                    <div class="share"><!-- AddThis Button BEGIN -->
                                        <div class="addthis_default_style"><a class="addthis_button_compact">Share</a> <a class="addthis_button_email"></a><a class="addthis_button_print"></a> <a class="addthis_button_facebook"></a> <a class="addthis_button_twitter"></a></div>
                                        <script type="text/javascript" src="<?php echo base_url(); ?>assets/view/javascript/addthis.js"></script> 
                                        <!-- AddThis Button END --> 
                                    </div>
                                </div>
                                <div id="tab-related" class="tab-content">
                                    <div class="box-product">
                                        <table id="table_related">
                                            <tbody>
                                                <?php foreach ($related_news as $related_news) { ?>
                                                    <tr style="width: 220px; float: left; border: 1px solid #dddddd; margin-left: 18px;">
                                                        <td class="productListing-data" align="center">
                                                            <div class="image"><a href="<?php echo base_url() . 'product/product_details' . '/' . $related_news->product_id . '/' . $related_news->sub_cat_id; ?>"><img src="<?php echo base_url(); ?>admin/assets/img/<?php echo $related_news->product_image_path; ?>" style="height: 140px; width: 140px;"  /></a>
                                                            </div>
                                                        </td>
                                                        <td class="productListing-data" align="center">
                                                            <div class="product_name"><a href="i<?php echo base_url() . 'product/product_details' . '/' . $related_news->product_id . '/' . $related_news->sub_cat_id; ?>"><?php echo $related_news->product_name; ?></a>
                                                            </div>
                                                        </td>
                                                        <td class="productListing-data" align="center">
                                                            <div class="propricemain">
                                                                <div class="prodprice">                                                                    
                                                                    <span class="productSpecialPrice"> <span class="normalprice"><?php echo $related_news->product_price; ?></span> <span class="productSpecialPrice"><?php echo $related_news->product_discount_price; ?></span> </span>                                                                    
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <script type="text/javascript">
                        $('#tabs a').tabs();
                        </script> 
                    </td>
                    <?php include 'include/sidebar.php'; ?>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?php include 'include/footer.php'; ?>