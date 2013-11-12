<?php
    include 'header.php';
?>        
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>

<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
		effect:'fold',
		slices:15,
		animSpeed:500,
		pauseTime:3000,
		startSlide:3, //Set starting Slide (0 index)
		opacity:1,
		directionNav:false, 
		directionNavHide:false, //Only show on ho
		controlNav:true, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:true, //Force manual transitions
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} //Triggers after all slides have been shown
	});
});
</script>
<script type="text/javascript">
    document.getElementById("hem").className = "current";
</script>
    <div id="slider_wrapper">
        <div id="slider">
            <a href="#"><img src="http://i.imgur.com/GHm3LO0.png" alt="01" title="Jimmy" /></a>
            <a href="#"><img src="http://i.imgur.com/qpOGCuX.png" alt="02" title="Till salu 74,36 kr" /></a>
            <a href="#"><img src="http://i.imgur.com/whuFai6.png" alt="03" title="Ossian" /></a>
            <a href="#"><img src="http://i.imgur.com/JeauuRA.png" alt="04" title="Filip och Rasmus" /></a>
            <a href="#"><img src="http://i.imgur.com/RtLFoTb.png" alt="05" title="Amandus" /></a>
        </div>
	</div>
    
    <div id="templatemo_fp_services">
    
<div class="fp_services_box">
            <div class="fps_title"><a href="#">Våra lan</a></div>
            <p>Våra lan sker oftast i Orsaskolans matsal i Orsa. Inträde kostar oftast 100kr och Lanet varar i  3 dygn.</p>
</div>
        
<div class="fp_services_box l_box">
    <div class="fps_title">Zack?</div>
    <p>Vad fan håller du på med? Det går inte att slå upp fisk i ordboken och förvänta sig att man ska få en bild på tre getter som parar sig.</p>
</div>
<div class="fp_services_box">
    <div class="fps_title">Vilka är vi?</div>
    <p>Vi är en grupp killar från orsa som arrangerar lan som bildades år Hösten 2010. Vi går under Orsas ungdoms hus Leif.</p>
</div>
        <div class="fp_services_box l_box" style="margin-right:0">
            <div class="fps_title">
              <p>Är det säkert?</p>
            </div>
            <p>Under våra Lan så finns det alltid någon av arrangörerna vakna och vi släpper inte in någon utomstånde till lanet förut om det är någon förälder.</p>
        </div>
    
    </div> <!-- end of templatemo fp services -->
    
<?php
    include 'footer.php';
?>
