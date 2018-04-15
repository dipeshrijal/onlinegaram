<?php include 'include/header.php'; ?>
<?php include 'include/sidebar.php'; ?>

<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <h2> <legend class="label label-primary"> Edit Sub-Category</legend></h2>
                </header>

                <div class="panel-body">
                    <div class="form">
                        <?php echo form_open('subcategory/update_subcategory', 'id="addSubCategory" class="cmxform form-horizontal tasi-form"'); ?>
                         <?php foreach ($get_subcategory as $get_subcategory) { ?>
                        <div class="form-group ">
                            <label for="firstname" class="control-label col-lg-2"><b>Category Name</b></label>
                            <div class="col-xs-4">                                   
                                <select class="form-control" name="category_name">
                                    <?php foreach ($category as $category) { ?>
                                    <option <?php if($get_subcategory->cat_id == $category->cat_id){echo "selected='selected'";}?> value="<?php echo $category->cat_id; ?>"><?php echo $category->cat_name; ?></option>
                                    <?php } ?>
                                </select>                                    
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="firstname" class="control-label col-lg-2"><b>Sub-Category Name</b></label>
                            <div class="col-xs-4">
                                    <input class=" form-control" name="subCategory" id="subCategory" type="text" value="<?php echo $get_subcategory->sub_cat_name; ?>" />
                                    <input type="hidden" name="sub_categoryid" value="<?php echo $get_subcategory->sub_cat_id; ?>">
                                <?php } ?>
                            </div>
                        </div>                       
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-xs-4">
                                <button class="btn btn-success btn-lg btn-block" type="submit">Update</button>
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