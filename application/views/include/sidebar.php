
<td id="mj-left" class="mj-grid16 mj-lspace"><div id="column-left">
        <div class="leftBoxContainer" id="categories" >
            <h3 class="leftBoxHeading" id="categoriesHeading"> Categories</h3>
            <ul class="accordion">
                <?php foreach ($category as $details) { ?>                    
                    <li><a href="#">  <?php echo $details->cat_name; ?></a>                    
                        <ul>
                            <?php
                            $sub_cat = $this->home_model->fetch_subcat($details->cat_id);
                            foreach ($sub_cat as $sub_cat) {
                                ?>
                                <li><a href="<?php echo base_url() . 'product' . '/' . 'list_product' . '/' . $details->cat_id . '/' . $sub_cat->sub_cat_id; ?>"><?php echo $sub_cat->sub_cat_name; ?></a></li>
                            <?php } ?>
                        </ul>
                    </li>   
                <?php } ?>
                <li><a href="#">Quick</a>
                    <ul>
                        <li><a href="<?php echo base_url(); ?>product/all_products">All Products</a></li>
                        <li><a href="<?php echo base_url(); ?>product/getProductstatus/new">Latest</a></li>
                        <li><a href="<?php echo base_url(); ?>product/getProductstatus/Featured">Featured</a></li>
                        <li><a href="<?php echo base_url(); ?>product/getProductstatus/Special">Special</a></li>
                        <li><a href="<?php echo base_url(); ?>product/getProductstatus/Bestsellers">Best Sellers</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="leftBoxContainer" id="reviews" style="width: 190px">
            <h3 class="leftBoxHeading" id="reviewsHeading">Featured Item</h3>
            <?php foreach ($get_feature as $get_feature){?>
            <div class="sideBoxContent centeredContent reviewsContent">
                <a href="<?php echo base_url() ?>product/product_details/<?php echo $get_feature->product_id;?>/<?php echo $get_feature->sub_cat_id;?>"><img src="<?php echo base_url(); ?>admin/assets/img/<?php echo $get_feature->product_image_path;?>" style="height:140px; width: 140px;"/></a>
                <br />
                <a href="<?php echo base_url() ?>product/product_details/<?php echo $get_feature->product_id;?>/<?php echo $get_feature->sub_cat_id;?>"><?php echo $get_feature->product_name; ?></a>
                <br/>
                <br />                                        
            </div>
            <?php }?>
        </div>
</td>