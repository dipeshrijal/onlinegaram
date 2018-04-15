<?php include 'include/header.php'; ?>
<?php include 'include/sidebar.php'; ?>

<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <h2> <legend class="label label-primary"> Add Image</legend></h2>
                </header>
                <div class="panel-body">
                    <div class="form">
                        <?php echo form_open_multipart('product/insert_image', 'id="product-form" class="cmxform form-horizontal tasi-form"'); ?>

                        <div class="form-group ">
                            <label for="firstname" class="control-label col-lg-2"><b>Product Name</b></label>
                            <div class="col-xs-4">

                                <select name="product_name" class="form-control">
                                    <?php foreach ($list_product as $list_product) { ?>
                                    <option value="<?php echo $list_product->product_id; ?>"><?php echo $list_product->product_name; ?> (<?php echo $list_product->cat_name; ?>>><?php echo $list_product->sub_cat_name; ?>)</option>                                        
                                    <?php } ?>
                                </select>

                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="firstname" class="control-label col-lg-2"><b>Image Type</b></label>
                            <div class="col-xs-4">
                                <input class=" form-control" name="image_type" type="text" required="required" />

                            </div>
                        </div>
                        <div class="form-group last">
                            <label class="control-label col-lg-2"><b>Image</b></label>
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
                                            <input type="file" class="default" name="userfile4" required="required" />
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