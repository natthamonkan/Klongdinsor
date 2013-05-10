<?php include 'header.php'; ?>
<link rel="stylesheet" href="/css/nivo-slider.css" type="text/css" media="screen" />
<script src="/js/jquery.nivo.slider.pack.js" type="text/javascript"></script>
<script type="text/javascript">
    jQuery(window).load(function() {
        jQuery('#slider').nivoSlider();
    });
    jQuery(document).ready(function() {
        jQuery("#subMenuKD").addClass("active");
        jQuery("#subMenuKD2").removeClass("active");
        jQuery("#subMenuKD3").removeClass("active");
        jQuery("#subMenuKD4").removeClass("active");
    });
</script>
<div class="slideImg">
    <div class="slider-wrapper">
        <div id="slider" class="nivoSlider">
            <a href="#"><img src="images/banner_home_1.png" alt="" title="KLONGDINSOR DESCRIPTION#1" /></a>
            <a href="#"><img src="images/banner_home_2.png" alt="" title="KLONGDINSOR DESCRIPTION#2" /></a>
            <a href="#"><img src="images/banner_home_3.png" alt="" title="KLONGDINSOR DESCRIPTION#3" /></a>
        </div>
    </div>
    <div id="htmlcaption" class="nivo-html-caption">
        <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>.
    </div>
</div>
<div class="BoxBody">
    <div id="latestNews" style="border:3px dotted #606aa8" >
        <div id="txtLatestNews" style="border:0px;border-bottom:3px dotted #606aa8">LATEST NEWS</div>
        <div id="txtLatestNews2">Introducing Lensen Drawing Kit -- a drawing kit for children with visual impairment</div>
        <div id="VDO_LatestNews">
            <iframe width="455" height="240" src="http://www.youtube.com/embed/eDf2V-i4CR4" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
    <div id="FB" style="border:3px dotted #606aa8">
        <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FKlongdinsor&amp;width=234&amp;height=394&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;border_color&amp;header=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:234px; height:394px;" allowTransparency="true"></iframe>
    </div> 
</div>
<div class="footer" style="border:3px dotted #6bb653">
    <div id="txtFooter">Partners</div>
    <div id="imgFooter"><a href="http://www.dusit.ac.th/sdu2011/" target="_blank"><img src="images/img_footer/footer_f01.png" width="102" height="122" title="Suandusit Rajabhat University" alt="" /></a></div>
    <div id="imgFooter2"><a href="http://imba.bus.tu.ac.th/imba/" target="_blank"><img src="images/img_footer/footer_f02.png" width="110" height="122" title="IMBA Thammasat Business School" alt="IMBA Thammasat Business School" /></a></div>
    <div id="imgFooter2"><a href="http://www.facebook.com/banpuchampions" target="_blank"><img src="images/img_footer/footer_f03.png" width="105" height="122" title="BANPU Champions for Change" alt="BANPU Champions for Change" /></a></div>
</div>
<?php include 'footer.php'; ?>

