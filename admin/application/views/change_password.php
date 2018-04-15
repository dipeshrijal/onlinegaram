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
                    <?php if ($this->session->flashdata('changepassword')) { ?>
                        <div class="alert alert-info">  
                            <button type="button" class="close" data-dismiss="alert">&times;</button>                    
                            <strong><?php echo $this->session->flashdata('changepassword'); ?></strong>
                        </div>  
                    <?php } ?>
                    <div class="form">
                        <?php echo form_open_multipart('home/change_pass', 'id="changepass-form" class="cmxform form-horizontal tasi-form"'); ?>
                        
                        <div class="form-group ">
                            <label for="firstname" class="control-label col-lg-2"><b>Enter Old Password</b></label>
                            <div class="col-xs-4">
                                <input class=" form-control" name="old_pass" id="old_pass"  type="password" />
                                <?php foreach ($user_data as $user_data){?>
                                <input type="hidden" name="user_id" value="<?php echo $user_data->user_id; ?>">
                                <?php } ?>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="firstname" class="control-label col-lg-2"><b>New Password</b></label>
                            <div class="col-xs-4">
                                <input class=" form-control" name="new_pass" id="new_pass"  type="password" />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="firstname" class="control-label col-lg-2"><b>Confirm Password</b></label>
                            <div class="col-xs-4">
                                <input class=" form-control" name="confirm_pass" id="confirm_pass"  type="password" />
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