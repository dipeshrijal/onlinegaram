<td id="mj-right" class="mj-grid16 mj-lspace mj-rspace">

    <div class="leftBoxContainer" id="categories" style="width: 190px">
        <h3 class="leftBoxHeading" id="reviewsHeading">Best Sellers</h3>
        <?php foreach ($get_bestseller as $get_bestseller) { ?>
            <div class="sideBoxContent centeredContent reviewsContent">
                <a href="<?php echo base_url() ?>product/product_details/<?php echo $get_bestseller->product_id; ?>/<?php echo $get_bestseller->sub_cat_id; ?>"><img src="<?php echo base_url(); ?>admin/assets/img/<?php echo $get_bestseller->product_image_path; ?>" style="height:140px; width: 140px;"/></a>
                <br />
                <a href="<?php echo base_url() ?>product/product_details/<?php echo $get_bestseller->product_id; ?>/<?php echo $get_bestseller->sub_cat_id; ?>"><?php echo $get_bestseller->product_name; ?></a>
                <br/>
                <br />                                        
            </div>
        <?php } ?>
    </div>

    <div class="rightBoxContainer" id="twittersidebox">
        <h3 class="rightBoxHeading" id="twittersideboxHeading">Like Us in Facebook</h3>
        
        <div class="fb-like-box" data-href="http://www.facebook.com/onlinegarum" data-width="201px" data-height="250px" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>

    </div>
</td>