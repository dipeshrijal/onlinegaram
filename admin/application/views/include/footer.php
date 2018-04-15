<!--footer start-->
<footer class="site-footer">
    <div class="text-center">
        2013 &copy; OnlineGarum.com
        <a href="#" class="go-top">
            <i class="icon-angle-up"></i>
        </a>
    </div>
</footer>
<!--footer end-->
</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery-1.8.3.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.scrollTo.min.js"></script>
<script class="include" type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.dcjqaccordion.2.7.js"></script>
<!--common script for all pages-->
<script src="<?php echo base_url(); ?>assets/js/common-scripts.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>assets/assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/form-validation-script.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/assets/bootstrap-fileupload/bootstrap-fileupload.js"></script>
<script type="text/javascript" charset="utf-8">
    $(document).ready(function() {
        $('#example').dataTable( {
            "aaSorting": [[ 4, "desc" ]]
        } );
    } );
</script>
</body>
</html>
