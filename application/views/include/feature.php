<div id="mj-featured1">
    <div class="mj-subcontainer">
        <div class="mj-grid96">
            <div class="mj-grid16 mj-rspace mj-lspace">Shopping</div>
            <div class="mj-grid80 mj-rspace mj-lspace">Enjoy your shopping at OnlineGarum.Com</div>
        </div>
    </div>
</div>
<div id="mj-maincontent">
    <div class="mj-subcontainer">
        <table  class="mj-grid96">
            <tbody>
                <tr id="shopping_items">
                    <td  id="mj-contentarea" class="mj-grid64 mj-lspace">
                        <script type="text/javascript">
                            $(document).ready(function() {
                                $('a.moduleBox').click(function() { // show selected module(s)
                                    // variables
                                    var popID = $(this).attr('rel');
                                    var popNAV = $(this).attr('class');
                                    // clear out menu styles and apply active
                                    $('a.moduleBox').css('background', '');
                                    $(this).css('background', '');
                                    // hide all wrappers and display the one selected
                                    $('.centerBoxWrapper').hide();
                                    // check if all or single selection
                                    if (popID != 'viewAll') {
                                        $('#' + popID).show();
                                    } else {
                                        $('.centerBoxWrapper').show();
                                    }
                                });
      
                                $('a.navOne').click(function() {
                                    $('a.navOne').addClass('active');
                                    $('a.navTwo').removeClass('active');
                                    $('a.navThree').removeClass('active');
                                });
      
                                $('a.navTwo').click(function() {
                                    $('a.navOne').removeClass('active');
                                    $('a.navTwo').addClass('active');
                                    $('a.navThree').removeClass('active');
                                });
      
                                $('a.navThree').click(function() {
                                    $('a.navOne').removeClass('active');
                                    $('a.navTwo').removeClass('active');
                                    $('a.navThree').addClass('active');
                                });
      
                            });
                        </script>