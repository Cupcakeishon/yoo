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
<title>Compara - Pide Yoo</title>

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
			<h2>Caption para slide 1</h2>
			<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a nisi sapien. In faucibus dolor non justo congue viverra non sit amet nisl. In quis ornare nibh. Aliquam tincidunt lorem ut nunc dictum elementum.
			</p>
		</figcaption>
		</div>
	</figure>
	
	<div id="content">
		<div class="info">
			<article>
				<h1>Compara YOO</h1>
				<section class="mid">
					<p>Ut venenatis laoreet fermentum. Nunc suscipit purus et nisi posuere ac ornare quam ornare. Morbi porttitor orci non nibh facilisis hendrerit. Mauris ut leo erat. Nullam sit amet tincidunt ligula. Sed adipiscing feugiat iaculis. Curabitur aliquam risus at eros scelerisque pharetra quis in massa. In hac habitasse platea dictumst. Praesent nibh felis, sodales sed egestas ac, tincidunt nec lacus. </p>
				</section>
				
				<form class="compara" method="post" action="">
					<label for="">Ingresa tu código postal para consultar las ventajas que te proporciona YOO con base a tu cablera</label>
					<input type="number" required pattern="[0-9]{5}" name="" value="" />
					<input class="button" type="submit" name="" value="Compara" />
				</form>
			</article>
		</div>
		
		<div class="tabbed-content">
			<ul class='controls'>
				<li><a href="#compara-cable">Cable</a></li>
				<li><a href="#compara-telefono">Teléfono</a></li>
				<li><a href="#compara-internet">Internet</a></li>
			</ul>
			
			<div id="compara-cable" class="tab">
				<table>
					<thead>
						<tr>
							<td>Característica</td>
							<td class="table-yoo"><span class="yoo-b">Yoo</span></td>
							<td class="table-comp">Otras compañias con paquetes similares</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Característica 1</td>
							<td>Si</td>
							<td>No</td>
						</tr>
						<tr>
							<td>Característica 1</td>
							<td>Si</td>
							<td>No</td>
						</tr>
						<tr>
							<td>Característica 1</td>
							<td>Si</td>
							<td>No</td>
						</tr>
						<tr>
							<td>Característica 1</td>
							<td>Si</td>
							<td>No</td>
						</tr>
						<tr>
							<td>Característica 1</td>
							<td>Si</td>
							<td>No</td>
						</tr>
						<tr>
							<td>Característica 1</td>
							<td>Si</td>
							<td>No</td>
						</tr>
					</tbody>
				</table>
			</div>
			
			<div id="compara-telefono" class="tab">
				<table>
					<thead>
						<tr>
							<td>Característica</td>
							<td class="table-yoo"><span class="yoo-b">Yoo</span></td>
							<td class="table-comp">Otras compañias con paquetes similares</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Característica 1</td>
							<td>Si</td>
							<td>No</td>
						</tr>
						<tr>
							<td>Característica 1</td>
							<td>Si</td>
							<td>No</td>
						</tr>
						<tr>
							<td>Característica 1</td>
							<td>Si</td>
							<td>No</td>
						</tr>
						<tr>
							<td>Característica 1</td>
							<td>Si</td>
							<td>No</td>
						</tr>
						<tr>
							<td>Característica 1</td>
							<td>Si</td>
							<td>No</td>
						</tr>
						<tr>
							<td>Característica 1</td>
							<td>Si</td>
							<td>No</td>
						</tr>
					</tbody>
				</table>
			</div>
			
			<div id="compara-internet" class="tab">
				<table>
					<thead>
						<tr>
							<td>Característica</td>
							<td class="table-yoo"><span class="yoo-b">Yoo</span></td>
							<td class="table-comp">Otras compañias con paquetes similares</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Característica 1</td>
							<td>Si</td>
							<td>No</td>
						</tr>
						<tr>
							<td>Característica 1</td>
							<td>Si</td>
							<td>No</td>
						</tr>
						<tr>
							<td>Característica 1</td>
							<td>Si</td>
							<td>No</td>
						</tr>
						<tr>
							<td>Característica 1</td>
							<td>Si</td>
							<td>No</td>
						</tr>
						<tr>
							<td>Característica 1</td>
							<td>Si</td>
							<td>No</td>
						</tr>
						<tr>
							<td>Característica 1</td>
							<td>Si</td>
							<td>No</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
			
	</div><!-- end wrap -->
	
	<?php 
		include('inc/footer.html');
		include('inc/scripts.html');
	?>
</body>
</html>