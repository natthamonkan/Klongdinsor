<?php include 'header.php'; ?>  
<script type="text/javascript" src="http://maps.google.com/maps/api/js?v=3.5&sensor=false"></script>
<script type="text/javascript" src="js/markermanager.js"></script>
<script type="text/javascript" src="js/StyledMarker.js"></script>
<script type="text/javascript" src="js/jquery.metadata.js"></script>
<script type="text/javascript" src="js/jquery.jmapping.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery("#subMenuKD4").addClass("active");
        jQuery("#subMenuKD2").removeClass("active");
        jQuery("#subMenuKD").removeClass("active");
        jQuery("#subMenuKD3").removeClass("active");
        jQuery('#map').jMapping({
            force_zoom_level: 11,
            default_zoom_level: 11
        });
    });
</script>
<div class="BoxProduct">
    <div id="txtGreenHD">Contact Info:</div>
    <div  id="vdoProduct"> <div id="colurTxtGreen">
            <p>Klongdinsor Co., Ltd.<br />
                63/2 Mittaphan Road,<br />
                Pomplab, Bangkok,<br />
                Thailand, 10100</p>
            <p><br />

                Tel: (+66)2 623 3701<br />
                Email: <a href="mailto:info@Klongdinsor.com">info@Klongdinsor.com</a><br />
            </p>
            </p>
        </div>

    </div>
    <div  id="txtProduct">
        <div id="map"></div>
        <div id="map-side-bar">
            <div class="map-location" data-jmapping="{id: 8, point: {lat: 13.74411, lng: 100.509926}, category: 'Food'}">
                <div class="info-box">
                    <p>Klongdinsor co, Ltd.
                        63/2 Mittaphan Road,
                        Pomplab, Bangkok,
                        Thailand, 10100</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>