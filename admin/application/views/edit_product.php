<?php include 'include/header.php'; ?>
<?php include 'include/sidebar.php'; ?>

<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <h2> <legend class="label label-primary"> Edit Product</legend></h2>
                </header>
                <div class="panel-body">
                    <div class="form">
                        <?php echo form_open_multipart('product/update_product', 'id="product-form" class="cmxform form-horizontal tasi-form"'); ?>

                        <?php foreach ($edit_product as $edit_product) { ?>
                            <div class="form-group ">
                                <label for="firstname" class="control-label col-lg-2"><b>Sub-Category Name</b></label>
                                <div class="col-xs-4">
                                    <select class="form-control" name="sName">  
                                        <?php foreach ($subCategory as $subCategory) { ?>
                                            <option <?php
                                    if ($edit_product->sub_cat_id == $subCategory->sub_cat_id) {
                                        echo "selected='selected'";
                                    }
                                            ?> value="<?php echo $subCategory->sub_cat_id; ?>"><?php echo $subCategory->cat_name . ' >> ' . $subCategory->sub_cat_name; ?></option>
                                            <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="firstname" class="control-label col-lg-2"><b>Product Name</b></label>
                                <div class="col-xs-4">
                                    <input class=" form-control" name="productName" id="productName" type="text" value="<?php echo $edit_product->product_name; ?>" />
                                    <input type="hidden" value="<?php echo $edit_product->product_id; ?>" name="product_id">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label col-sm-2"><b>Product Description</b></label>
                                <div class="col-sm-4">
                                    <textarea class="form-control" name="productDesc" rows="6"><?php echo $edit_product->product_desc; ?></textarea>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="firstname" class="control-label col-lg-2"><b>Product Price</b></label>
                                <div class="col-xs-4">
                                    <input class=" form-control" name="productPrice" id="productPrice" type="text" value="<?php echo $edit_product->product_price; ?>" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="firstname" class="control-label col-lg-2"><b>Product Discount Price</b></label>
                                <div class="col-xs-4">
                                    <input class=" form-control" name="productdPrice" id="productdPrice" type="text" value="<?php echo $edit_product->product_discount_price; ?>" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="firstname" class="control-label col-lg-2"><b>Product Color</b></label>
                                <div class="col-xs-4">
                                    <input class=" form-control" name="productColor" id="productColor" type="text" value="<?php echo $edit_product->product_color; ?>" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="firstname" class="control-label col-lg-2"><b>Product Code</b></label>
                                <div class="col-xs-4">
                                    <input class=" form-control" name="productCode" id="productCode" type="text" value="<?php echo $edit_product->product_code; ?>" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="firstname" class="control-label col-lg-2"><b>Product Size</b></label>
                                <div class="col-xs-4">
                                    <input class=" form-control" name="productSize" id="productSize" type="text" value="<?php echo $edit_product->product_size; ?>" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="firstname" class="control-label col-lg-2"><b>Product Status</b></label>
                                <div class="col-xs-4">
                                    <select class="form-control" name="pStatus">                                        
                                        <option></option>
                                        <option <?php
                                        if ($edit_product->product_status == 'New') {
                                            echo "selected='selected'";
                                        }
                                            ?>>New</option>
                                        <option <?php
                                        if ($edit_product->product_status == 'Special') {
                                            echo "selected='selected'";
                                        }
                                            ?>>Special</option>
                                        <option <?php
                                        if ($edit_product->product_status == 'Featured') {
                                            echo "selected='selected'";
                                        }
                                            ?>>Featured</option>
                                        <option <?php
                                        if ($edit_product->product_status == 'Bestsellers') {
                                            echo "selected='selected'";
                                        }
                                            ?>>Bestsellers</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="firstname" class="control-label col-lg-2"><b>Product Availability</b></label>
                                <div class="col-xs-4">
                                    <select class="form-control" name="pAvailability">
                                        <option></option>
                                        <option <?php
                                        if ($edit_product->product_availability == 'Yes') {
                                            echo "selected='selected'";
                                        }
                                            ?>>Yes</option>
                                        <option <?php
                                        if ($edit_product->product_availability == 'No') {
                                            echo "selected='selected'";
                                        }
                                            ?>>No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-xs-4">
                                    <button class="btn btn-success btn-lg btn-block" type="submit">Update</button>
                                </div>
                            </div>
                        <?php } ?>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </section>
</section>
<!--main content end-->

<?php include 'include/footer.php'; ?>