<?php include 'include/header.php'; ?>
<div id="mj-slidetitle">
    <div class="mj-subcontainer"> <span class="mj-title"></span>
        <div class="moduletable mj-grid96 breadcrumb">
        </div>
    </div>
</div>

<div id="mj-maincontent">
    <div class="mj-subcontainer">
        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="mj-grid96">
            <tbody>
                <tr id="shopping_items">
                    <td valign="top" id="mj-contentarea" class="mj-grid64 mj-lspace">
                        <h1>Contact Us</h1>
                        <h2>Our Location</h2>
                        <div class="contact-info">
                            <div class="content">
                                <div class="left">
                                    <b>Address:</b><br />
                                    OnlineGarum.com<br />
                                    Ghattekulo, Kathmandu<br />
                                </div>
                                <div class="right">
                                    <b>Telephone:</b><br />
                                    +977 9849681325<br />
                                    +977 9813364348<br />
                                    +977 9813364350<br />
                                    <br />
                                </div>
                            </div>
                        </div>
                        <h2>Contact Form</h2>
                        <form action="<?php echo base_url(); ?>home/contact_us" method="post" enctype="multipart/form-data" id="contact-form">
                            <div class="content">
                                <b>First Name:</b><br />
                                <input type="text" name="name" />
                                <br />
                                <br />
                                <b>E-Mail Address:</b><br />
                                <input type="email" name="email"/>
                                <br />
                                <br />
                                <b>Enquiry:</b><br />
                                <textarea name="enquiry" cols="40" rows="10" style="width: 99%;"></textarea>
                                <br />
                                <br />                                
                            </div>
                            <div class="buttons">
                                <div class="right"><input type="submit" value="Submit" class="mj-button" /></div>
                            </div>
                        </form>
                    </td>
                    <?php include 'include/sidebar.php'; ?>
                    <?php include 'include/rightbar.php'; ?>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
<?php include 'include/footer.php'; ?>