<?php echo form_open_multipart('upload');  ?>
<p>
    <?php echo form_label('File 1', 'userfile') ?>
    <?php echo form_upload('userfile') ?>
</p>
<p>
    <?php echo form_label('File 2', 'userfile1') ?>
    <?php echo form_upload('userfile1') ?>
</p>

<p>
    <?php echo form_label('File 3', 'userfile2') ?>
    <?php echo form_upload('userfile2') ?>
</p>
<p><?php echo form_submit('submit', 'Upload them files!') ?></p>
<?php form_close() ?>