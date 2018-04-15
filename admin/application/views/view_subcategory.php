<?php include 'include/header.php'; ?>
<?php include 'include/sidebar.php'; ?>

<section id="main-content">
    <section class="wrapper site-min-height">
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        <h2> <legend class="label label-primary"> View Sub-Category</legend></h2>
                        <?php if ($this->session->flashdata('welcome')) { ?>
                            <div class="alert alert-success">  
                                <button type="button" class="close" data-dismiss="alert">&times;</button>                    
                                <strong><?php echo $this->session->flashdata('welcome'); ?></strong>
                            </div>  
                        <?php } ?> 
                    </header>
                    <div class="panel-body">
                        <div class="adv-table">
                            <table  class="display table table-bordered table-striped" id="example">
                                <thead>
                                    <tr>
                                        <th>Category Name</th>  
                                        <th>Sub-category Name</th> 
                                        <th><span class="badge label-info"> Edit </span></th>
                                        <th><span class="badge label-danger">Delete</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($subCategory as $subCategory) { ?>
                                        <tr>                                        
                                            <th><?php echo $subCategory->cat_name; ?></th>   
                                            <th><?php echo $subCategory->sub_cat_name; ?></th>  
                                    <input type="hidden" name="cat_name" value="<?php echo $subCategory->cat_name; ?>">
                                    <th><a href="<?php echo base_url(); ?>subcategory/edit_subcategory/<?php echo $subCategory->sub_cat_id; ?>" class="badge label-info"> Edit </a></th>
                                    <th><a href="<?php echo base_url(); ?>subcategory/deleteSubCategory/<?php echo $subCategory->sub_cat_id; ?>" class="badge label-danger">Delete</a></th>                                        
                                    </tr>
                                <?php } ?>
                                </tbody>                                
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- page end-->
    </section>
</section>
<!--main content end-->
<!--footer start-->
<?php include 'include/footer.php'; ?>