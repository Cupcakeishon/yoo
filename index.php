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
<title>Pide Yoo</title>

<?php 
	include('inc/meta.html');
	include('inc/libs.html');
?>

</head>
<body class="home">
	<?php 
		include('inc/old.html');
		include('inc/header.html');
		include('inc/eye-home.html');
	?>
	
	<div id="content">
		<ul id="servicios" class="row">
			<li class="servicio">
				<img src="http://www.placehold.it/310x310" />
				<section>
					<img class="main-icon" src="img/cable.png" alt="Cable" />
					<h2>Cable</h2>
					<p>Los mejores canales, la programación que quieres ver, alta definición, DVR para grabar tus programas favoritos y mucho más.</p>
					<a class="button">Más detalles</a>
				</section>
			</li>
			<li class="servicio">
				<img src="http://www.placehold.it/310x310" />
				<section>
					<img class="main-icon" src="img/telefono.png" alt="Teléfono" />
					<h2>Teléfono</h2>
					<p>Los mejores canales, la programación que quieres ver, alta definición, DVR para grabar tus programas favoritos y mucho más.</p>
					<a class="button">Más detalles</a>
				</section>
			</li>
			<li class="servicio">
				<img src="http://www.placehold.it/310x310" />
				<section>
					<img class="main-icon" src="img/internet.png" alt="Internet" />
					<h2>Internet</h2>
					<p>Los mejores canales, la programación que quieres ver, alta definición, DVR para grabar tus programas favoritos y mucho más.</p>
					<a class="button">Más detalles</a>
				</section>
			</li>
		</ul>
		
		<div id="mejores-canales" class="row">
			<div class="column grid-12 block g">
				<div id="section-caption">
					<h2>Los mejores canales <strong class="yoo">Yoo</strong></h2>
					<p>Trailers, sinopsis, horarios, información adicional y más de todos tus programas favoritos</p>
					<a class="button go-button">Ir a los mejores canales YOO</a>
				</div>
				<div id="lista-canales">
					<div id="scrollamatic">
						<?php include('inc/canales.html') ?>
					</div>
				</div>
			</div>
		</div>
		
		<div id="yoo-apps" class="row">
			<div id="apps-banners" class="column grid-8 block g">
				<ul class="column royalSlidesContainer b-iphone">
					<li class=" royalSlide">
						<img class="ban-bg" src="img/banner/1a.jpg" />
						<div class="royalCaption">
							<img class="fon royalCaptionItem" data-show-effect="movebottom fade" data-speed="500" data-delay="250" src="img/banner/1b.png" />
						</div>
					</li>
					<li class="noticia royalSlide b-android">
						<img class="ban-bg" src="img/banner/2a.jpg" />
						<div class="royalCaption">
							<img class="fon royalCaptionItem" data-show-effect="movebottom fade" data-speed="500" data-delay="250" src="img/banner/2b.png" />
						</div>
					</li>
				</ul>
			</div>
			<div id="apps-captions">
				<section class="b-iphone">
					<h1 class="yoo-p">Yoo</h1>
					<h2>Toda la programación de YOO en tu iPhone</h2>
					<p>Los mejores canales, la programación que quieres ver, alta definición, DVR para grabar tus programas favoritos y mucho más.</p>
					<a class="button down-button">Descarga YOO Tv en la App Store</a>
				</section>
				<section class="b-android">
					<h1 class="yoo-p">Yoo</h1>
					<h2>Toda la programación de YOO en tu Android</h2>
					<p>Los mejores canales, la programación que quieres ver, alta definición, DVR para grabar tus programas favoritos y mucho más.</p>
					<a class="button down-button">Descarga YOO Tv en Google Play</a>
				</section>
			</div>
		</div>
		
		<div id="beneficios" class="row">
			<div class="column form">
				<section>
					<h2><strong class="yoo">Yoo</strong>en tu ciudad</h2>
					<p>Los mejores canales, la programación que quieres ver, alta definición, DVR para grabar tus programas favoritos y mucho más.</p>
					<form>
						<input type="text" placeholder="Ingresa tu código postal" name="" value="" />
						<input class="simple-button" type="submit" name="" value="Consultar" />
					</form>	
				</section>
			</div>
			<div id="zona-yoo-home" class="column beneficio">
				<img src="http://www.placehold.it/310x310" />
				<section>
					<h2>zona <strong class="yoo">Yoo</strong></h2>
					<p>Los mejores canales, la programación que quieres ver, alta definición, DVR para grabar tus programas favoritos y mucho más.</p>
					<a class="button go-button">Pide YOO y disfruta los beneficios</a>
				</section>
			</div>
			<div class="column beneficio">
				<img src="http://www.placehold.it/310x310" />
				<section>
					<h2><strong class="yoo">Yoo</strong>comunidad</h2>
					<p>Los mejores canales, la programación que quieres ver, alta definición, DVR para grabar tus programas favoritos y mucho más.</p>
					<a class="button go-button">Pide YOO y disfruta los beneficios</a>
				</section>
			</div>
		</div>
		
		<div id="youtube" class="row">
			<div class="column frame">
				<video id="last-video" class="video-js vjs-default-skin" controls preload="none" poster="http://video-js.zencoder.com/oceans-clip.png"
				    data-setup="{}">
				  <source src="http://video-js.zencoder.com/oceans-clip.mp4" type='video/mp4' />
				  <source src="http://video-js.zencoder.com/oceans-clip.webm" type='video/webm' />
				  <source src="http://video-js.zencoder.com/oceans-clip.ogv" type='video/ogg' />
				  <track kind="captions" src="captions.vtt" srclang="en" label="English" />
				</video>
			</div>
			<div class="column description">
				<section>
					<h2><strong class="yoo-p">Yoo</strong>presenta:</h2>
					<h4>"Adiós a la otra"</h4>
					<p>Más Canales (películas, deportes, series, espectáculos), Internet más poderoso (el doble de velocidad), llamadas locales , de larga distancia y a celular.</p>
					<p>También puedes consultar todos nuestros spots en el canal oficial de YouTube</p>
					<a class="button go-button" target="_blank" title="Ir al canal de YOO en YouTube">Ir al canal de YOO en YouTube</a>
				</section>
			</div>
		</div>
		
		<div id="noticias" class="row">
			<div class="column title">
				<section>
					<h2>Noticias</h2>
					<p>Las últimas noticias y novedades alrededor de YOO y las telecomunicaciones</p>
				</section>
			</div>
			<div class="noticias-wrap column">
				<ul class="column noticias royalSlidesContainer">
					<li class="noticia first royalSlide">
						<img src="http://www.placehold.it/310x310" />
						<article>
							<h3><a href="">Nombre del artículo bastante larguito para diferenciarlo</a></h3>
							<section>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nec enim dolor. Vestibulum a elit ac nibh pretium suscipit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.</p>
							</section>
							<div class="navi">
								<div class="fb-share"></div>
								<div class="tw-share"></div>
								<a class="button simple-button" title="Leer noticia">Leer noticia</a>
							</div>
						</article>
					</li>
					<li class="noticia royalSlide">
						<img src="http://www.placehold.it/310x310" />
						<article>
							<h3><a href="">Nombre del artículo bastante larguito para diferenciarlo</a></h3>
							<section>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nec enim dolor. Vestibulum a elit ac nibh pretium suscipit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.</p>
							</section>
							<div class="navi">
								<div class="fb-share"></div>
								<div class="tw-share"></div>
								<a class="button simple-button" title="Leer noticia">Leer noticia</a>
							</div>
						</article>
					</li>
				</ul>
			</div>
			<div class="noticias-wrap column">
				<ul class="column noticias royalSlidesContainer">
					<li class="noticia first royalSlide">
						<img src="http://www.placehold.it/310x310" />
						<article>
							<h3><a href="">Nombre del artículo bastante larguito para diferenciarlo</a></h3>
							<section>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nec enim dolor. Vestibulum a elit ac nibh pretium suscipit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.</p>
							</section>
							<div class="navi">
								<div class="fb-share"></div>
								<div class="tw-share"></div>
								<a class="button simple-button" title="Leer noticia">Leer noticia</a>
							</div>
						</article>
					</li>
					<li class="noticia royalSlide">
						<img src="http://www.placehold.it/310x310" />
						<article>
							<h3><a href="">Nombre del artículo bastante larguito para diferenciarlo</a></h3>
							<section>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nec enim dolor. Vestibulum a elit ac nibh pretium suscipit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.</p>
							</section>
							<div class="navi">
								<div class="fb-share"></div>
								<div class="tw-share"></div>
								<a class="button simple-button" title="Leer noticia">Leer noticia</a>
							</div>
						</article>
					</li>
				</ul>
			</div>
		</div>
	</div>
	
	<?php 
		include('inc/footer.html');
		include('inc/scripts.html');
	?>
</body>
</html>