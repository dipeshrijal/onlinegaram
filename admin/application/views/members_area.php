<?php include 'include/header.php'; ?>
<?php include 'include/sidebar.php'; ?>

<section id="main-content">
    <section class="wrapper">
        <?php if ($this->session->flashdata('welcome')) { ?>
            <div class="alert alert-success">  
                <button type="button" class="close" data-dismiss="alert">&times;</button>                    
                <strong><?php echo $this->session->flashdata('welcome'); ?></strong>
            </div>  
        <?php } ?>  
        
        <img src="<?php echo base_url(); ?>assets/img/logo.png" style="height:520px; width: 400px; margin-left: 300px;">
        



    </section>
</section>

<?php include 'include/footer.php'; ?>