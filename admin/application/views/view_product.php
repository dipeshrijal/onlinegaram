<?php include 'include/header.php'; ?>
<?php include 'include/sidebar.php';?>

<section id="main-content">
    <section class="wrapper site-min-height">
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        <h2> <legend class="label label-primary"> View Product</legend></h2>
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
                                        <th>Product Name</th>
                                        <th>Product Category</th>
                                        <th>Product Sub-Category</th>                                     
                                        <th><span class="badge label-info"> Edit </span></th>
                                        <th><span class="badge label-danger">Delete</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($view_product as $product){?>
                                    
                                    <tr>
                                        <th><?php echo $product->product_name;?></th>
                                        <th><?php echo $product->cat_name;?></th>
                                        <th><?php echo $product->sub_cat_name;?></th>
                                        <th><a href="<?php echo base_url()?>product/edit_product/<?php echo $product->product_id?>" class="badge label-info">Edit</a><br>
                                         <a class="badge label-warning" href="<?php echo base_url()?>product/edit_image/<?php echo $product->product_id?>">Edit Images</a></th>
                                        <th><a class="badge label-danger" href="<?php echo base_url()?>product/delete_product/<?php echo $product->product_id?>">Delete</a></th>
                                    </tr>
                                    <?php }?>
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