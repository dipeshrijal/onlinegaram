<?php include 'include/header.php'; ?>
<?php include 'include/sidebar.php'; ?>

<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <h2> <legend class="label label-primary"> Add Category</legend></h2>
                </header>
                <div class="panel-body">
                    <div class="form">
                        <?php echo form_open_multipart('category/insert_category', 'id="addCategory" class="cmxform form-horizontal tasi-form"'); ?>
                        <div class="form-group ">
                            <label for="firstname" class="control-label col-lg-2"><b>Category Name</b></label>
                            <div class="col-xs-4">
                                <input class=" form-control" name="category" id="category" type="text" />
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