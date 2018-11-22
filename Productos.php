<!DOCTYPE html>
<html>
<head>
	<title>TIENDA</title>
</head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css\css.css">
<body style="background-color:#f7f9c9;">
<img src="Imagenes\Logo.png" height="130" width="190">


<div class="a">
<p> <a href="https://productos-av.herokuapp.com/Login.php">INICIAR SESION</a></p>
<p> <a href="https://productos-av.herokuapp.com/Registrar.php">REGISTRARSE</a></p>
</div>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">PRODUCTOS AV</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="https://productos-av.herokuapp.com/Tienda.php">INICIO</a></li>
      <li><a href="https://productos-av.herokuapp.com/Quienessomos.php">QUIÉNES SOMOS</a></li>
      <li><a href="https://productos-av.herokuapp.com/Productos.php">TODOS LOS PRODUCTOS</a></li>
      <li><a href="https://productos-av.herokuapp.com/Comocomprar.php">COMO COMPRAR</a></li>
      <li><a href="https://productos-av.herokuapp.com/Contacto.php">CONTACTO</a></li>
    </ul>
  </div>
</nav>


<table class="tabla">
	<tr>
		<th>PRODUCTO_____________________________________________________</th>
		<th>DESCRIPCION__________________________________________________________________________________________</th>
		<th>PRECIO</th>
	</tr>


</table>

<br>
<table class="tabla">

		<td style="width: 135px;" align="center"> <img  src="Imagenes\producto1.jpg"  style="max-width: 100%"> </td>
		<td> ¡Haz de huevo ELITE el protagonista de tus platillos! Lleva a casa la mejor nutrición para que hagas todas tus recetas con Huevo ELITE de 12 piezas, disfruta de todos los beneficios que puedes obtener del huevo todos los días, además conoce la frescura de cada Huevo ELITE impreso en su cascarón, conoce la fecha de producción y de caducidad en nuestra app o en página web</td>
			<td>
				<?php 
					session_start();
					if(isset($_SESSION['login_user'])){
						echo "<input type='submit' name='Submit' value='agregar carrito'/>";
					}
						?>

				 
					<H2> $28.00 </H2>
			</td>
</table>

<br>

<table class="tabla">

		<td style="width: 135px;" align="center"> <img  src="Imagenes\producto2.jpg"  style="max-width: 100%"> </td>
		<td> ¡Haz de huevo BACHOCO el protagonista de tus platillos! Lleva a casa la mejor nutrición para que hagas todas tus recetas con Huevo BACHOCO de 18 piezas, disfruta de todos los beneficios que puedes obtener del huevo todos los días, además conoce la frescura de cada Huevo BACHOCO impreso en su cascarón, conoce la fecha de producción y de caducidad en nuestra app o en página web</td>
			<td>
				<?php 
					
					if(isset($_SESSION['login_user'])){
						echo "<input type='submit' name='Submit' value='agregar carrito'/>";
					}
						?>
					<H2> $35.00 </H2>
			</td>
</table>

<br>
<table class="tabla">

		<td style="width: 135px;" align="center"> <img  src="Imagenes\producto3.jpg"  style="max-width: 100%"> </td>
		<td> Huevos Cocorocó, los huevos de las Gallinas Libres de la Región de Ñuble.
			Huevos Cocorocó con 30 piezas, además conoce la frescura de cada Huevo BACHOCO impreso en su cascarón, conoce la fecha de producción y de caducidad</td>
			<td>
				<?php 
					
					if(isset($_SESSION['login_user'])){
						echo "<input type='submit' name='Submit' value='agregar carrito'/>";
					}
						?>
					<H2> $45.00 </H2>
			</td>
</table>

<br>
<table class="tabla">

		<td style="width: 135px;" align="center"> <img  src="Imagenes\producto4.jpg"  style="max-width: 100%"> </td>
		<td> ¡Haz de huevo San Juan el protagonista de tus platillos! Lleva a casa la mejor nutrición para que hagas todas tus recetas con Huevo San Juan de 180 piezas, disfruta de todos los beneficios que puedes obtener del huevo todos los días, además conoce la frescura de cada Huevo San Juan impreso en su cascarón, conoce la fecha de producción y de caducidad en nuestra app o en página web.</td>
			<td>
				<?php 
					
					if(isset($_SESSION['login_user'])){
						echo "<input type='submit' name='Submit' value='agregar carrito'/>";
					}
						?>
					<H2> $350.00 </H2>
			</td>
</table>

<br>

<table class="tabla">

		<td style="width: 135px;" align="center"> <img  src="Imagenes\producto5.jpg"  style="max-width: 100%"> </td>
		<td> Lleva a casa la mejor nutrición con Huevos Organicos, para que hagas todas tus recetas con Huevo 18 HERMANOS una de las marcas mas reconocidas con 18 piezas, disfruta de todos los beneficios que puedes obtener del huevo orgánico, además conoce la frescura de cada Huevo orgánico impreso en su cascarón, conoce la fecha de producción y de caducidad en nuestra app o en página web.</td>
			<td>
				<?php 
					
					if(isset($_SESSION['login_user'])){
						echo "<input type='submit' name='Submit' value='agregar carrito'/>";
					}
						?>
					<H2> $38.00 </H2>
			</td>
</table>


<br>

<table class="tabla">

		<td style="width: 135px;" align="center"> <img  src="Imagenes\producto6.jpg"  style="max-width: 100%"> </td>
		<td> Huevos EL CALVARIO es uno de los productos de mayor frescura y alta calidad. Siempre utilizamos empaques nuevos para una mejor higiene y todas nuestras presentaciones tienen fecha de caducidad y/o número de lote para su mejor control y trazabilidad. El huevo es empacado en una presentación de cajas de 30 piezas de huevos.  </td>
			<td>
				<?php 
					
					if(isset($_SESSION['login_user'])){
						echo "<input type='submit' name='Submit' value='agregar carrito'/>";
					}
						?>
					<H2> $42.00 </H2>
			</td>
</table>


<br>

<table class="tabla">

		<td style="width: 135px;" align="center"> <img  src="Imagenes\producto7.jpg"  style="max-width: 100%"> </td>
		<td> Huevos AVIVEL es uno de los productos de mayor frescura y alta calidad. Siempre utilizamos empaques nuevos para una mejor higiene y todas nuestras presentaciones tienen fecha de caducidad y/o número de lote para su mejor control y trazabilidad. El huevo es empacado en una presentación 15 piezas de huevos.  </td>
			<td>
				<?php 
					
					if(isset($_SESSION['login_user'])){
						echo "<input type='submit' name='Submit' value='agregar carrito'/>";
					}
						?>
					<H2> $37.00 </H2>
			</td>
</table>




<br><br><br>
</body>
</html>
