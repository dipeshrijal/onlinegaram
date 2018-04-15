<?php include 'include/header.php'; ?>
<?php include 'include/slider.php'; ?>
<?php include 'include/feature.php'; ?>


<div class="centerColumn" id="indexDefault">
    <div id="moduleMenu-wrapper"> 
        <span class="navTwo moduleSpan"><a href="javascript:void(0)" rel="new" class="navTwo moduleBox active">New</a></span>
        <span class="navThree moduleSpan active_tab"><a href="javascript:void(0)" rel="specialsDefault" class="navThree moduleBox">Special</a></span>
        <span class="navOne moduleSpan"><a href="javascript:void(0)" rel="featuredProducts" class="navOne moduleBox">Featured</a></span>
        <br class="clearBoth">

        <div class="centerBoxWrapper" id="specialsDefault">
            <h2 class="product_head">Specials</h2>
            <div class="centerBoxWrapperContents">
                <table>
                    <tbody>
                        <?php foreach ($get_special as $get_special) { ?>
                            <tr style="float: left; width: 245px; margin-left: 10px; margin-top: 10px;">                            
                                <td>
                                    <div class="centerBoxContentsNew centeredContent">
                                        <div class="imagename">
                                            <div class="product_image"><a href="<?php echo base_url() ?>product/product_details/<?php echo $get_special->product_id; ?>/<?php echo $get_special->sub_cat_id; ?>"><img src="<?php echo base_url(); ?>admin/assets/img/<?php echo $get_special->product_image_path; ?>" alt="<?php echo $get_special->product_image_name; ?>" style="height: 140px;width: 140px;" /></a></div>
                                            <div class="product_name"><a href="<?php echo base_url() ?>product/product_details/<?php echo $get_special->product_id; ?>/<?php echo $get_special->sub_cat_id; ?>"><?php echo $get_special->product_name; ?></a></div>
                                        </div>
                                        <div class="propricemain" style="width: 245px;">
                                            <div class="prodprice">
                                                <div>
                                                    <span class="normalprice"><?php echo $get_special->product_price; ?></span> 
                                                    <span class="productSpecialPrice"><?php echo $get_special->product_discount_price; ?></span>
                                                </div>
                                            </div>
                                            <div class="productbtn">
                                                <div class="mj-productdetailimage"> 
                                                    <a href="<?php echo base_url() ?>product/product_details/<?php echo $get_special->product_id; ?>/<?php echo $get_special->sub_cat_id; ?>"></a> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>                            
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>      



        <div class="centerBoxWrapper" id="featuredProducts">
            <h2 class="product_head">Featured</h2>
            <div class="centerBoxWrapperContents">
                <table>
                    <tbody>
                        <?php foreach ($get_featured as $get_featured) { ?>
                            <tr style="float: left; width: 245px; margin-left: 10px; margin-top: 10px;">                            
                                <td>
                                    <div class="centerBoxContentsNew centeredContent">
                                        <div class="imagename">
                                            <div class="product_image"><a href="<?php echo base_url() ?>product/product_details/<?php echo $get_featured->product_id; ?>/<?php echo $get_featured->sub_cat_id; ?>"><img src="<?php echo base_url(); ?>admin/assets/img/<?php echo $get_featured->product_image_path; ?>" alt="<?php echo $get_featured->product_image_name; ?>" style="height: 140px;width: 140px;" /></a></div>
                                            <div class="product_name"><a href="<?php echo base_url() ?>product/product_details/<?php echo $get_featured->product_id; ?>/<?php echo $get_featured->sub_cat_id; ?>"><?php echo $get_featured->product_name; ?></a></div>
                                        </div>
                                        <div class="propricemain" style="width: 245px;">
                                            <div class="prodprice">
                                                <div>
                                                    <span class="normalprice"><?php echo $get_featured->product_price; ?></span> <span class="productSpecialPrice"><?php echo $get_featured->product_discount_price; ?></span>
                                                </div>
                                            </div>
                                            <div class="productbtn">
                                                <div class="mj-productdetailimage"> 
                                                    <a href="<?php echo base_url() ?>product/product_details/<?php echo $get_featured->product_id; ?>/<?php echo $get_featured->sub_cat_id; ?>"></a> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>                            
                            </tr> 
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="centerBoxWrapper" id="new">
            <h2 class="product_head">Latest</h2>
            <div class="centerBoxWrapperContents">
                <table>
                    <tbody>
                        <?php foreach ($get_latest as $get_latest) { ?>
                            <tr style="float: left; width: 245px; margin-left: 10px; margin-top: 10px;">                            
                                <td>
                                    <div class="centerBoxContentsNew centeredContent">
                                        <div class="imagename">
                                            <div class="product_image"><a href="<?php echo base_url() ?>product/product_details/<?php echo $get_latest->product_id; ?>/<?php echo $get_latest->sub_cat_id; ?>"><img src="<?php echo base_url(); ?>admin/assets/img/<?php echo $get_latest->product_image_path; ?>" alt="<?php echo $get_latest->product_image_name; ?>" style="height: 140px;width: 140px;" /></a></div>
                                            <div class="product_name"><a href="<?php echo base_url() ?>product/product_details/<?php echo $get_latest->product_id; ?>/<?php echo $get_latest->sub_cat_id; ?>"><?php echo $get_latest->product_name; ?></a></div>
                                        </div>
                                        <div class="propricemain" style="width: 245px;">
                                            <div class="prodprice">
                                                <div>
                                                    <span class="normalprice"><?php echo $get_latest->product_price; ?></span> 
                                                    <span class="productSpecialPrice"><?php echo $get_latest->product_discount_price; ?></span>
                                                </div>
                                            </div>
                                            <div class="productbtn">
                                                <div class="mj-productdetailimage"> 
                                                    <a href="<?php echo base_url() ?>product/product_details/<?php echo $get_latest->product_id; ?>/<?php echo $get_latest->sub_cat_id; ?>"></a> 
                                                </div>                                            
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
</div>
</td>
<?php include 'include/sidebar.php'; ?>
<?php include 'include/rightbar.php'; ?>
</tr>
</tbody>
</table>
</div>
</div>

<?php include 'include/footer.php'; ?>
