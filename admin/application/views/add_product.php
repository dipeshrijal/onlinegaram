<?php include 'include/header.php'; ?>
<?php include 'include/sidebar.php'; ?>

<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <h2> <legend class="label label-primary"> Add Product</legend></h2>
                </header>
                <div class="panel-body">
                    <div class="form">
                        <?php echo form_open_multipart('product/insert_product', 'id="product-form" class="cmxform form-horizontal tasi-form"'); ?>

                        <div class="form-group ">
                            <label for="firstname" class="control-label col-lg-2"><b>Sub-Category Name</b></label>
                            <div class="col-xs-4">
                                <select class="form-control" name="sName">  
                                    <?php foreach ($subCategory as $subCategory) { ?>
                                        <option value="<?php echo $subCategory->sub_cat_id; ?>"><?php echo $subCategory->cat_name . ' >> ' . $subCategory->sub_cat_name; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="firstname" class="control-label col-lg-2"><b>Product Name</b></label>
                            <div class="col-xs-4">
                                <input class=" form-control" name="productName" id="productName" type="text" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label col-sm-2"><b>Product Description</b></label>
                            <div class="col-sm-4">
                                <textarea class="form-control" name="productDesc" rows="6"></textarea>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="firstname" class="control-label col-lg-2"><b>Product Price</b></label>
                            <div class="col-xs-4">
                                <input class=" form-control" name="productPrice" id="productPrice" type="text" />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="firstname" class="control-label col-lg-2"><b>Product Discount Price</b></label>
                            <div class="col-xs-4">
                                <input class=" form-control" name="productdPrice" id="productdPrice" type="text" />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="firstname" class="control-label col-lg-2"><b>Product Color</b></label>
                            <div class="col-xs-4">
                                <input class=" form-control" name="productColor" id="productColor" type="text" />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="firstname" class="control-label col-lg-2"><b>Product Code</b></label>
                            <div class="col-xs-4">
                                <input class=" form-control" name="productCode" id="productCode" type="text" />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="firstname" class="control-label col-lg-2"><b>Product Size</b></label>
                            <div class="col-xs-4">
                                <input class=" form-control" name="productSize" id="productSize" type="text" />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="firstname" class="control-label col-lg-2"><b>Product Status</b></label>
                            <div class="col-xs-4">
                                <select class="form-control" name="pStatus">                                        
                                    <option></option>
                                    <option>New</option>
                                    <option>Special</option>
                                    <option>Featured</option>
                                    <option>Bestsellers</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="firstname" class="control-label col-lg-2"><b>Product Availability</b></label>
                            <div class="col-xs-4">
                                <select class="form-control" name="pAvailability">
                                    <option></option>
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>
                        </div>
                      <div class="form-group last">
                            <label class="control-label col-lg-2"><b>Featured Image</b></label>
                            <div class="col-xs-10">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                        <span class="btn btn-white btn-file">
                                            <span class="fileupload-new"><i class="icon-paper-clip"></i> Select image</span>
                                            <span class="fileupload-exists"><i class="icon-undo"></i> Change</span>
                                            <input type="file" class="default" name="userfile1" required="required" />
                                        </span>
                                        <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="icon-trash"></i> Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group last">
                            <label class="control-label col-lg-2"><b>Right Image</b></label>
                            <div class="col-xs-10">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                        <span class="btn btn-white btn-file">
                                            <span class="fileupload-new"><i class="icon-paper-clip"></i> Select image</span>
                                            <span class="fileupload-exists"><i class="icon-undo"></i> Change</span>
                                            <input type="file" class="default" name="userfile2" required="required" />
                                        </span>
                                        <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="icon-trash"></i> Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group last">
                            <label class="control-label col-lg-2"><b>Left Image</b></label>
                            <div class="col-xs-10">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                        <span class="btn btn-white btn-file">
                                            <span class="fileupload-new"><i class="icon-paper-clip"></i> Select image</span>
                                            <span class="fileupload-exists"><i class="icon-undo"></i> Change</span>
                                            <input type="file" class="default" name="userfile3" required="required" />
                                        </span>
                                        <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="icon-trash"></i> Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-xs-4">
                                <button class="btn btn-success btn-lg btn-block" type="submit">Save</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>

    </section>
</section>
<!--main content end-->

<?php include 'include/footer.php'; ?>