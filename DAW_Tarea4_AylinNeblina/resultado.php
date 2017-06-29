<?php
$Nombre=$_POST["Nombre"]
$Empresa=$_POST["Empresa"]
$Email=$_POST["Email"]
$Mensaje=$_POST["Mensaje"]
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Starbucks</title>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
 </head>

<body>
	
	<div id="logo"> 
	<img src="imagenes/logo.png" alt="">
	</div>

	<nav class="menu">
			
	<a href="">INICIO</a>
	<a href="">EMPRESA</a>
	<a href="">MENU</a>
	<a href="">CONTACTANOS</a>
	<a href="">PRODUCTOS</a>
	<a href="">ACERCA DE</a>
	
	</nav>	


<div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3560882.9572730483!2d-111.7388895808314!3d29.357849695601303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x678a36a6232ee39d!2sStarbucks+Cafe!5e0!3m2!1ses!2smx!4v1464806796486" style="width: 1500px; height: 300px;margin-top:15px;" ></iframe>
</div>
<h1>¿QUIENES SOMOS?</h1>
<h2>STARBUCKS es una cadena internacional de café fundada en Seattle, Washington. Somos la compañía de café más grande del mundo, con aproximadamente 17 800 locales en 50 países.</h2>
<br>
<table>
	<td><img src="imagenes/localizacion.png" alt="localizacion" style="width: 140px;height: 140px;"></td>
	<td>Direccion<br>
	camino int<br>
	calle 6 s/n<br>
	avenida 123
	</td>
	
	<td><img src="imagenes/telefono.png" alt="telefono" style="width: 140px;height: 140px;margin-left:20px;"></td>
	<td>
	From Nogales<br>
	(651-101-32-62)<br>
	(651-101-32-62)<br>
	(651-101-32-62)</td>
	<td style="padding-left: 60px;">From USA<br>
	(651-101-32-62)<br>
	(651-101-32-62)<br>
	(651-101-32-62)<br>
	</td>
</table>
<?php ?>
<div id="Registro">
<H1>REGISTRO CON EXITO</H1>
<h3>
Nombre:<?php echo $Nombre;?>
<br>
Empresa:<?php echo $Empresa;?>
<br>
Email:<?php echo $Email;?>
<br>
Asunto:<?php echo $Asunto;?>
<br>
<label>Mensaje</label>
Mensaje:<?php echo $Mensaje;?>
<br>	
</h3>
</div>
<?php?>

</body>

</html>
