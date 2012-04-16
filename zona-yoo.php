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
<title>Zona YOO - Pide Yoo</title>

<?php 
	include('inc/meta.html');
	include('inc/libs.html');
?>

</head>
<body class="zona-yoo">
	<?php 
		include('inc/old.html');
		include('inc/header-zona.html');
	?>
	
	<figure id="eyecatcher">
        <img class="fullscreen" src="img/eye/1.jpg" alt="Cinelli">
        <div class="caption">
    	<figcaption>
    		<h2>Bienvenido a la Zona YOO</h2>
			<p>
			Navega WiFi con la mejor experiencia y velocidad, sin costo adicional para los clientes YOO.
			</p>
			<p>Disfruta Internet WiFi en tus lugares favoritos</p>
		</figcaption>
		</div>
	</figure>
	
	<div id="content">
		<h2 class="title">Selecciona tu compañía</h2>
		<form id="cableras">
			<fieldset id="megacable" class="cablera">
				<div class="step1">
					<img src="img/megacable.png" alt="Megacable" />
				</div>
				<div class="step2">
					<a class="return">Regresar</a>
					<input type="text" name="" placeholder="Usuario" value="" />
					<input type="password" name="" placeholder="Contraseña" value="" />
					<input type="text" name="" placeholder="Localidad" value="" />
					<a class="forgotten" href="">¿Olvidaste tu contraseña?</a>
					<input class="button go-button" type="submit" name="" value="Conéctate" />
				</div>
			</fieldset>
			
			<fieldset id="cablevision" class="cablera">
				<div class="step1">
					<img src="img/cablevision.png" alt="Cablevisión" />
				</div>
				<div class="step2">
					<a class="return">Regresar</a>
					<input type="text" name="" placeholder="Usuario" value="" />
					<input type="password" name="" placeholder="Contraseña" value="" />
					<a class="forgotten" href="">¿Olvidaste tu contraseña?</a>
					<input class="button go-button" type="submit" name="" value="Conéctate" />
				</div>
			</fieldset>
			
			<fieldset id="cablemas" class="cablera">
				<div class="step1">
					<img src="img/cablemas.png" alt="Cablemas" />
				</div>
				<div class="step2">
					<a class="return">Regresar</a>
					<input type="text" name="" placeholder="Usuario" value="" />
					<input type="password" name="" placeholder="Contraseña" value="" />
					<a class="forgotten" href="">¿Olvidaste tu contraseña?</a>
					<input class="button go-button" type="submit" name="" value="Conéctate" />
				</div>
			</fieldset>
			
			
			<fieldset id="cablevision-monterrey" class="cablera">
				<div class="step1">
					<img src="img/cablemty.png" alt="Cablevisión Monterrey" />
				</div>
				<div class="step2">
					<a class="return">Regresar</a>
					<input type="text" name="" placeholder="Usuario" value="" />
					<input type="password" name="" placeholder="Contraseña" value="" />
					<a class="forgotten" href="">¿Olvidaste tu contraseña?</a>
					<input class="button go-button" type="submit" name="" value="Conéctate" />
				</div>
			</fieldset>
		</form>
			
	</div><!-- end wrap -->
	
	<?php 
		include('inc/footer-zona.html');
		include('inc/scripts-zona.html');
	?>
</body>
</html>