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
<title>Contacto - Pide Yoo</title>

<?php 
	include('inc/meta.html');
	include('inc/libs.html');
?>

</head>
<body class="inside">
	<?php 
		include('inc/old.html');
		include('inc/header.html');
	?>
	
	<figure id="eyecatcher">
        <img class="fullscreen" src="img/eye/1.jpg" alt="Cinelli">
        <div class="caption">
    	<figcaption>
			<h2>Contacto</h2>
			<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a nisi sapien. In faucibus dolor non justo congue viverra non sit amet nisl. In quis ornare nibh. Aliquam tincidunt lorem ut nunc dictum elementum.
			</p>
		</figcaption>
		</div>
	</figure>
	
	<div id="content">
		<div class="info contact">
			<h2>Contacto</h2>
			<div class="description">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec mattis lectus nec justo imperdiet eleifend. Suspendisse pharetra diam vitae tortor commodo fermentum. Maecenas quam nisl, dignissim et volutpat ut, tincidunt nec purus. Fusce id accumsan enim. Donec et scelerisque orci. Sed placerat fermentum magna vel vestibulum. Nunc eget orci justo, a condimentum urna.</p>
				<p>Mauris quis massa vel odio iaculis aliquam a nec ante. Mauris vulputate ullamcorper tortor, id mattis quam pulvinar eget. Maecenas purus magna, luctus ornare dapibus sit amet, blandit a felis. </p>
			</div>
			<form id="contact" class="column grid-8">
				<fieldset>
					<label>Nombre</label>
					<input required type="text" name="" value="" />
					<label>Correo Electrónico</label>
					<input required type="email" name="" value="" />
					<label>Ciudad</label>
					<input required type="text" name="" value="" />
					<label>Estado</label>
					<input type="text" name="" value="" />
					<label>Teléfono de contacto</label>
					<input type="tel" name="" value="" />
				</fieldset>
				<fieldset>
					<label>Asunto</label>
					<input required type="text" name="" value="" />
					<label>Comentarios</label>
					<textarea></textarea>
					<input required type="submit" name="" value="Enviar" />
				</fieldset>
			</form>
		</div>
	</div><!-- end wrap -->
	
	<?php 
		include('inc/footer.html');
		include('inc/scripts.html');
	?>
</body>
</html>