<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="icon" href="img/favicon.png" type="image/png">	
<title>Yoo Sports para iPhone - Pide Yoo</title>

<?php 
	include('inc/meta.html');
	include('inc/libs.html');
?>

</head>
<body id="landing">

	<header>
		<a href="/pideyoo/index.php" id="logo" title="Pide YOO">
			<img src="img/logo.png" id="logo-yoo" alt="Pide YOO" />
		</a>
	</header>
	
	<div class="wrap row">
		<div class="app-desc">
			<h1>YOO Sports para iPhone</h1>
			<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque et cursus sapien. Integer id odio quis metus dignissim fermentum at ac urna. Ut ultrices, erat non hendrerit varius, nulla nisl gravida diam, non convallis tellus elit at enim.</p>
			<p>Phasellus aliquam tempus volutpat. Cras nec nulla eget risus sagittis tincidunt pulvinar lobortis metus. Morbi eu ante at metus venenatis scelerisque vitae eget eros. Morbi sagittis arcu in nisi sagittis dapibus. Phasellus elementum bibendum dolor at imperdiet. Etiam vulputate dolor ac dolor laoreet congue. Mauris ac imperdiet est. Duis a mauris elit. Aenean ut velit eu nisl congue porttitor.</p>
			<a class="button go-button">Descarga la aplicación</a>
			<img class="store" src="img/appstore.png" alt="Disponible en la app store" />
		</div>
 		
		<div class="iphone-bg">
			<div class="app-container">
			<div class="iphone-wrap column">
				<ul class="column app royalSlidesContainer">
					<li class="first royalSlide">
						<img src="http://www.placehold.it/252x378" />
					</li>
					<li class="royalSlide">
						<img src="http://www.placehold.it/252x378" />
					</li>
				</ul>
			</div>
			</div>
		</div>
	</div>
	
	<footer>
			<div class="footer-info">
				<p>
				¿Todavía no tienes tu paquete YOO? Cable + Teléfono + Internet a un precio increíblemente bajo. Pídelo hoy y empieza a disfrutar de los increibles beneficios, con grandes ahorros.
				</p>
			</div>
			<div id="contact-data">
				<small>Llámanos al</small>
				<h1>01 800 7433 966</h1>
			</div>
			<div class="icons-cable">
				<img src="img/logo.png" class="yoo-footer" alt="Yoo" />
				<img src="img/megacable-w.png" alt="Megacable" />
				<img src="img/cablemas-w.png" alt="Cablemás" />
				<img src="img/cablevision-w.png" alt="Cablevisión" />
				<img src="img/cablemty-w.png" alt="Cablevisión Monterrey" />
			</div>
			<a id="powered" href="" title="Pide Yoo">www.pideyoo.com</a>
		</footer>
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>
	<script defer src="js/scripts/jquery.easing.1.3.min.js"></script>
	
	<script defer src="js/scripts/jquery.royal-slider.min.js"></script>
	
	<script>
		$(document).ready(function() {
			$(".iphone-wrap").royalSlider({
				controlNavEnabled: false,
				directionNavEnabled: false,
				directionNavAutoHide: false,
				welcomeScreenEnabled:false,
				slideshowEnabled: true,
				slideshowDelay:6000,
				slideshowAutoStart:true,  
				imageAlignCenter:true,
				imageScaleMode:"fit",
				minSlideOffset: 20,
				blockLinksOnDrag: true,
				slideTransitionEasing:"easeInOutElastic"			
			}); 
		});
	</script>

</body>
</html>