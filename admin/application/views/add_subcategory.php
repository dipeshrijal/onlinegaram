<?php include 'include/header.php'; ?>
<?php include 'include/sidebar.php'; ?>

<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <h2> <legend class="label label-primary"> Add Sub-Category</legend></h2>
                </header>
                <div class="panel-body">
                    <div class="form">
                            <?php echo form_open('subcategory/insert_subCategory', 'id="addSubCategory" class="cmxform form-horizontal tasi-form"');?>

                            <div class="form-group ">
                                <label for="firstname" class="control-label col-lg-2"><b>Category Name</b></label>
                                <div class="col-xs-4">                                   
                                    <select class="form-control" name="category_name">
                                         <?php foreach ($category as $category){?>
                                        <option value="<?php echo $category->cat_id;?>"><?php echo $category->cat_name;?></option>
                                        <?php }?>
                                    </select>                                    
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="firstname" class="control-label col-lg-2"><b>Sub-Category Name</b></label>
                                <div class="col-xs-4">
                                    <input class=" form-control" name="subCategory" id="subCategory" type="text" />
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