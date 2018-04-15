<style type="text/css">
            .modalWindow-example-text-modal-window { background: #adadad; padding: 8px; width: 600px; }
            .modalWindow-example-text-modal-window .modalWindow-title { background: #215473; color: #ededed; }
            .modalWindow-example-text-modal-window .modalWindow-content { background: #fff; color: #333; }
            .modalWindow-example-text-modal-window,
            .modalWindow-example-text-modal-window .modalWindow-boxInner {

                -webkit-border-radius: 8px;
                -moz-border-radius: 8px;
                border-radius: 8px;
            }
            .modalWindow-example-text-modal-window .modalWindow-title {
                -webkit-border-radius: 8px 8px 0 0;
                -moz-border-radius: 8px 8px 0 0;
                border-radius: 8px 8px 0 0;
            }
            .modalWindow-example-text-modal-window .modalWindow-content {
                height: 300px; overflow-y: scroll;
                -webkit-border-radius: 0 0 8px 8px;
                -moz-border-radius: 0 0 8px 8px;
                border-radius: 0 0 8px 8px;
            }
        </style>
        <script type="text/javascript">
            //<![CDATA[
            jQuery(function($){

                $("#example-text-modal-window-modal").modalWindow({
                    position:	"fixed",
                    width:		600,
                    trans:		0.9,
                    opacity:	0.8,
                    close:		true,
                    speed:		600,
                    className:		"modalWindow-example-text-modal-window",
                    borderWidth: 8
					
                });
            }); // end jquery(function($))
            //]]&gt; 
        </script>
        <div id="example-text-modal-window" class="modalWindow-container">
            <h3 class="modalWindow-title">Example Text Modal Window</h3>
            <div class="modalWindow-content"><div class="modal-inner">
                    <p>Adipiscing hac auctor lacus ac purus hac phasellus turpis tincidunt tincidunt porta massa, mus augue, in. Ultricies lundium, mus, rhoncus urna et natoque! Ac. Porttitor augue etiam mattis augue! Amet urna nunc, placerat aliquet nascetur placerat, tristique aliquet. Platea elementum augue nisi cum facilisis sit, ac arcu eros? Sociis ac.</p>
                    <p>Aliquam natoque integer! Natoque! Placerat? Augue nunc enim nisi? Lacus porta, pulvinar, urna parturient, quis cras et habitasse dolor enim lundium. Aliquet adipiscing hac, a odio ridiculus mattis ut et turpis! Magnis cum dis dapibus mid ultricies phasellus etiam in a elit et in nunc. Et tincidunt elit, aliquet.</p>
                    <p>Porttitor magna magna, dictumst a pellentesque egestas, turpis ultrices. In urna placerat pulvinar pid pellentesque egestas, purus ac integer, placerat, augue ac lorem, facilisis turpis, tempor platea? Porta parturient, sociis, et? Massa auctor vel pellentesque sed ut? Dictumst tempor! Pulvinar, elementum turpis, purus? Aliquet urna adipiscing porta ultricies amet.</p>
                </div>
            </div>
        </div>
        <a id="example-text-modal-window-modal" href="#example-text-modal-window">
            <div class="modal-button button-size-default button-color-default"><span>Text Modal</span></div></a>