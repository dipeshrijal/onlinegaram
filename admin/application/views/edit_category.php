<?php include 'include/header.php'; ?>
<?php include 'include/sidebar.php'; ?>

<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <h2> <legend class="label label-primary"> Edit Category</legend></h2>
                </header>
                <div class="panel-body">
                    <div class="form">
                        <?php echo form_open_multipart('category/update_category', 'id="addCategory" class="cmxform form-horizontal tasi-form"'); ?>
                        <?php foreach ($get_category as $edit_category) { ?>
                            <div class="form-group ">
                                <label for="firstname" class="control-label col-lg-2"><b>Category Name</b></label>
                                <div class="col-xs-4">
                                    <input class=" form-control" name="category" id="category" type="text" value="<?php echo $edit_category->cat_name; ?>" />
                                    <input type="hidden" name="cat_id" value="<?php echo $edit_category->cat_id; ?>">
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