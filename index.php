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
		startSlide:0, //Set starting Slide (0 index)
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
            <a href="#"><img src="/bilder/dalanalogo.png" alt="00" title="Jimmy" /></a>
            <a href="#"><img src="/bilder/sog.png" alt="01" title="Spel som vara nytt" /></a>
        </div>
</div>
    
<div id="templatemo_fp_services">
    
<div class="fp_services_box">
        <div class="fps_title"><a href="#">Våra lan</a></div>
        <p>När vi arrangerar lan vill vi ge er en så bra upplevelse som möjligt i någon av Orsas lokaler. Detta görs möjligt av våra sponsorer som ni ser på sidan!</p>
</div>

<div class="fp_services_box">
        <div class="fps_title"><a href="#">Vad får ni</a></div>
        <p>För 100kr får ni inträde till våra tvånätters lan, tillträde till våra turneringar och internet. Samt får ni använda våra demo:s av spel, våra retrospel och MTG kort.</p>
</div>

<div class="fp_services_box l_box">
    <div class="fps_title"><a href="#">Säkerhet</a></div>
    <p>Vi sätter säkerhet högt på prioriteringslistan. Vi ger er bra säkerhet med hjälp av ordningsvärdar och minst en arrangör som alltid är vaken. Vi kör även drogfritt och rökning sker bortom lokalen.</p>
</div>
<div class="fp_services_box"  style="margin-right:0">
    <div class="fps_title"><a href="#">Hur betalar ni?</a></div>
    <p>Ni betalar antingen på plats eller genom förbokning som kommer försäkra er en valfri plats. För att veta vad ni ska ha med er så gå in på <a href="#">information</a>.</p>
</div>

    </div> <!-- end of templatemo fp services -->
    
<?php
    include 'footer.php';
?>
