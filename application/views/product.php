<?php include 'include/header.php'; ?>

<div id="mj-slidetitle">
    <div class="mj-subcontainer"> <span class="mj-title"></span>
        <div class="moduletable mj-grid96 breadcrumb">

        </div>
    </div>
</div>
<div id="mj-maincontent">
    <div class="mj-subcontainer">
        <table class="mj-grid96">
            <tbody>
                <tr id="shopping_items">
                    <td id="mj-contentarea" class="mj-grid64 mj-lspace">
                            <h1 class="product_head">
                                <?php
                                foreach ($product_list as $pl) {
                                    echo $pl->sub_cat_name;
                                    break;
                                }
                                ?>
                            </h1>
                            <div class="product-list">
                                <table>
                                    <tbody>
                                        <?php foreach ($product_list as $product_list) { ?>
                                            <tr style="float: left; width: 245px; margin-left: 10px; margin-top: 10px;">                            
                                                <td>
                                                    <div class="centerBoxContentsNew centeredContent">
                                                        <div class="imagename">
                                                            <div class="product_image"><a href="<?php echo base_url() ?>product/product_details/<?php echo $product_list->product_id; ?>/<?php echo $product_list->sub_cat_id; ?>"><img src="<?php echo base_url(); ?>admin/assets/img/<?php echo $product_list->product_image_path; ?>" alt="<?php echo $product_list->product_image_name; ?>" style="height: 140px;width: 140px;" /></a></div>
                                                            <div class="product_name"><a href="<?php echo base_url() ?>product/product_details/<?php echo $product_list->product_id; ?>/<?php echo $product_list->sub_cat_id; ?>"><?php echo $product_list->product_name; ?></a></div>
                                                        </div>
                                                        <div class="propricemain" style="width: 245px;">
                                                            <div class="prodprice">
                                                                <div>
                                                                    <span class="normalprice"><?php echo $product_list->product_price; ?></span> 
                                                                    <span class="productSpecialPrice"><?php echo $product_list->product_discount_price; ?></span>
                                                                </div>
                                                            </div>
                                                            <div class="productbtn">
                                                                <div class="mj-productdetailimage"> 
                                                                    <a href="<?php echo base_url() ?>product/product_details/<?php echo $product_list->product_id; ?>/<?php echo $product_list->sub_cat_id; ?>"></a> 
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
                            <?php echo $pages; ?>
                    </td>
                    <?php include 'include/sidebar.php'; ?>
                    <?php include 'include/rightbar.php'; ?>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?php include 'include/footer.php'; ?>