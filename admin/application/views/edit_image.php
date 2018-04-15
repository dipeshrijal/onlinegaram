<?php include 'include/header.php'; ?>
<?php include 'include/sidebar.php'; 




?>
<section id="main-content">
    <section class="wrapper site-min-height">
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                         <h2> <legend class="label label-primary"> Edit Image</legend></h2>
                    </header>
                    <div class="panel-body">
                        <div class="adv-table">
                            <table  class="display table table-bordered table-striped" id="example">
                                <thead>
                                    <tr>
                                        <th>Image Name</th>
                                        <th>Image Type</th>
                                        <th><span class="badge label-info">View</span></th>
                                        <th><span class="badge label-danger">Delete</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $i = 1;
                                    foreach ($edit_product as $product) { ?>

                                        <tr>
                                            <th><img src="<?php echo base_url(); ?>assets/img/<?php echo $product->product_image_path; ?>" style="width: 140px; height: 140px;"></th>
                                            <th><?php echo $product->product_image_type; ?></th>
                                            <th><a class="badge label-info" data-toggle="modal" href="#myModal<?php echo $i ?>">View</a></th>
                                            <th><a class="badge label-danger" href="<?php echo base_url(); ?>product/delete_image/<?php echo $product->product_image_id ?>/<?php echo $product->product_image_name;?>/">Delete</a></th>
                                        </tr>
                                   <div class="modal fade" id="myModal<?php echo $i ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title">View Image</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <?php echo form_open_multipart('#', 'class="form-horizontal"'); ?>
                                                    <div class="form-group">
                                                        <label for="firstname" class="control-label col-sm-4"><b>Image Type</b></label>
                                                        <div class="col-sm-6">
                                                            <input class=" form-control" name="image_type" id="productName" type="text" value="<?php echo $product->product_image_type; ?>" disabled="disabled" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="firstname" class="control-label col-sm-4"><b>Image</b></label>
                                                        <div class="col-sm-6">
                                                            <img src="<?php echo base_url(); ?>assets/img/<?php echo $product->product_image_path; ?>" style="height: 240px; width: 240px;" >
                                                            <input type="hidden" name="old_file_name" value="<?php echo $product->product_image_name; ?>">
                                                            <input type="hidden" name="image_id" value="<?php echo $product->product_image_id; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>

                                <?php 
                                $i++;
                                } ?>
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