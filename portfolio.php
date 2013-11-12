<?php
    include 'header.php';
?>        
<!-- Add jQuery library -->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox -->
<link rel="stylesheet" href="/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

<!-- Optionally add helpers - button, thumbnail and/or media -->
<link rel="stylesheet" href="/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
<script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

<link rel="stylesheet" href="/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
<script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

<script type="text/javascript">
    document.getElementById("tavlingar").className = "current";
</script>
        <h2>Tävlingar</h2> 
	<div style="display:none;" class="fancybox"><div id="myform" width="auto" height="auto"><p>En grym man ifrån skogen som kan sjunga lika bra som Amandus själv. På natten är han en häst men om han ramlar fyller han år 7 gånger per årljus.</p></div></div>
	<a href="#myform" class="fancybox" style="font-size: 700%;">Herr Westin</a>
<script type="text/javascript">
        $(document).ready(function() {
                $(".fancybox").fancybox();
        });
</script>
<?php
    include 'footer.php';
?>
