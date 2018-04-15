<div id="mj-slideshow">
    <div class="mj-subcontainer">    <!-- yaslider -->
        <div class="yaslider ys-style-default ys-color-blue">
            <div id="yaslider-0" class="yaslider-box" >
                <?php foreach ($get_banner as $get_banner) { ?>
                    <div class="ys-slide ys-clear"> 
                        <!--Caption text-->
                        <div class="caption_text">
                            <div class="ys-p-name"> <a href="<?php echo base_url() ?>product/product_details/<?php echo $get_banner->product_id; ?>/<?php echo $get_banner->sub_cat_id; ?>" class="flex-caption"><?php echo $get_banner->product_name; ?></a>
                                <span class="slide-description"><?php echo $get_banner->product_desc; ?></span>
                            </div>
                            <div class="a-btn"> 
                                <a href="<?php echo base_url() ?>product/product_details/<?php echo $get_banner->product_id; ?>/<?php echo $get_banner->sub_cat_id; ?>"> 
                                    <span class="a-btn-text">Details</span>
                                </a>
                                <span class="a-btn-slide-text"> Shop Now !</span>
                                <span class="a-btn-icon-right"><span></span></span> </div>
                        </div>
                        <!--Caption text end-->
                        <a href="<?php echo base_url() ?>product/product_details/<?php echo $get_banner->product_id; ?>/<?php echo $get_banner->sub_cat_id; ?>">
                        <div class="slide_img">
                            <div class="ys-p-price">
                                <span class="tag">Special</span> 
                                <span class="ys-p-price-old"><?php echo $get_banner->product_price; ?></span> 
                                <span class="ys-p-price-new"><?php echo $get_banner->product_discount_price; ?></span>
                            </div>
                            <div class="ys-p-image"> <a href="<?php echo base_url() ?>product/product_details/<?php echo $get_banner->product_id; ?>/<?php echo $get_banner->sub_cat_id; ?>"><img src="<?php echo base_url(); ?>admin/assets/img/<?php echo $get_banner->product_image_path; ?>" style="height: 400px; width: 500px;" /></a> </div>
                        </div></a>
                    </div>
                <?php } ?>
            </div>
            <a href="javascript: void(0);" id="yaslider-0-larr" class="ys-larr"></a> 
            <a href="javascript: void(0);" id="yaslider-0-rarr" class="ys-rarr"></a>
            <div class="ys-badge ys-badge-no"></div>
        </div>
        <script type="text/javascript">
            $(document).ready(function(){
                var ys_slider = $('#yaslider-'+0);
                var larr = $('#yaslider-'+0+'-larr');
                var rarr = $('#yaslider-'+0+'-rarr');
                var img_w = 500+60;
                var img_h = 400/2;
                var sl_w = 100;
                var sl_h = 100;
                ys_slider.css({'width': sl_w+'%'});
                ys_slider.parent().css({'width': sl_w+'%'});
                $('.ys-slide', ys_slider).css({'width': sl_w+'%'});

                ys_slider.cycle({
                    fx:      'scrollHorz', 
                    timeout: 3500,
                    random:  1,
                    pause:   true,
                    next:    rarr,
                    prev:    larr
                });
  
                larr.add(rarr).hide();
                ys_slider.closest('.yaslider').hover(function(){
                    larr.add(rarr).show();
                }, function(){
                    larr.add(rarr).hide();
                });
            });
        </script> 
        <!-- /yaslider --> </div>
</div>