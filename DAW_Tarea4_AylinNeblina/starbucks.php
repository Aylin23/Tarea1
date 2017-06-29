<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Starbucks</title>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
 </head>

<body>
<div id="pagina">
<header class="encabezado">
	
	<table>
	<td><img src="imagenes/logo.png" alt="">
	<td>
	<a href="">INICIO</a>
	<a href="">EMPRESA</a>
	<a href="">DISTRIBUIDORAS</a>
	<a href="">PRODUCTOS</a>
	<a href="">STARBUCKS</a>
	<a href="">NOVEDADES</a>
	<a href="">CONOCENOS</a>
	
	</td>
	
	
	</table>
</header>


<div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3560882.9572730483!2d-111.7388895808314!3d29.357849695601303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x678a36a6232ee39d!2sStarbucks+Cafe!5e0!3m2!1ses!2smx!4v1464806796486" style="width: 1350px; height: 300px;margin-top:15px;" ></iframe>
</div>
<h1>¿QUIENES SOMOS?</h1>
<h2>STARBUCKS es una cadena internacional de café fundada en Seattle, Washington. Somos la compañía de café más grande del mundo, con aproximadamente 17 800 locales en 50 países.</h2>
<br>

<table id="informacion">
	<td><img src="imagenes/localizacion.png" alt="localizacion" style="width: 140px;height: 140px;"></td>
	<td><strong>Direccion</strong><br>
	Luis Donaldo Colosio<br>
	Blvd 2963<br>
	Nogales.Son
	</td>
	
	<td><img src="imagenes/telefono.png" alt="telefono" style="width: 140px;height: 140px;margin-left:20px;"></td>
	<td>
	<strong>From Nogales</strong ><br>
	(651-101-32-62)<br>
	(651-101-32-62)<br>
	(651-101-32-62)</td>
	<td style="padding-left: 60px;">
	<strong>From USA</strong><br>
	(651-101-32-62)<br>
	(651-101-32-62)<br>
	(651-101-32-62)<br>
	</td>
</table>

<form action="resultado.php" method="POST">


<input type="text" placeholder="Nombre" name="Nombre" required size="50">
<input type="text" placeholder="Empresa" name="Empresa" required size="50"><br><br>
<input type="text" placeholder="E-mail" name="Email" required size="50">
<input type="text" placeholder="Asunto" name="Asunto" required size="50"><br><br>
<textarea name="Mensaje"cols="107" rows="10"></textarea><br>


<div id="enviar">	
<button name="Enviar" type="submit" >ENVIAR</button>
</div>

</div>
</form>
</body>

</html>
