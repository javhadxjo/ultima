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
	<?php
		session_start();
			echo $_SESSION['login_user'];
		echo "<form method= 'post' action='Tienda.php'><br><input type='submit' name='enviar' value='cerrar_sesion'/></form>";
		echo "<form method= 'post' action='carrito.php'><br><input type='submit' name='enviarcarrito' value='carrito'/></form>";

	?>
<!--<p> <a href="Login.php">INICIAR SESION</a></p>
<p> <a href="Registrar.php">REGISTRARSE</a></p>-->
</div>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">PRODUCTOS AV</a>
    </div>
    <ul class="nav navbar-nav">
     <li><a href="#">INICIO</a></li>
      <li><a href="#">QUIÉNES SOMOS</a></li>
      <li><a href="#">TODOS LOS PRODUCTOS</a></li>
      <li><a href="#">COMO COMPRAR</a></li>
      <li><a href="#">CONTACTO</a></li>
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
					
					if(isset($_SESSION['login_user'])){
						echo "<form method= 'post' action=''><input type='submit' name='p1' value='agregar carrito'/><br><label input='cantidad'><b>Cant.</b></label><input type=number name ='cantidad' min='1' max='500'/></form>";
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
						echo "<form method= 'post' action=''><input type='submit' name='p2' value='agregar carrito'/><br><label input='cantidad'><b>Cant.</b></label><input type=number name ='cantidad' min='1' max='500'/></form>";

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
						echo "<form method= 'post' action=''><input type='submit' name='p3' value='agregar carrito'/><br><label input='cantidad'><b>Cant.</b></label><input type=number name ='cantidad' min='1' max='500'/></form>";

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
						echo "<form method= 'post' action=''><input type='submit' name='p4' value='agregar carrito'/><br><label input='cantidad'><b>Cant.</b></label><input type=number name ='cantidad' min='1' max='500'/></form>";

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
						echo "<form method= 'post' action=''><input type='submit' name='p5' value='agregar carrito'/><br><label input='cantidad'><b>Cant.</b></label><input type=number name ='cantidad' min='1' max='500'/></form>";

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
						echo "<form method= 'post' action=''><input type='submit' name='p6' value='agregar carrito'/><br><label input='cantidad'><b>Cant.</b></label><input type=number name ='cantidad' min='1' max='500'/></form>";

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
						echo "<form method= 'post' action=''><input type='submit' name='p7' value='agregar carrito'/><br><label input='cantidad'><b>Cant.</b></label><input type=number name ='cantidad' min='1' max='500'/></form>";

					}
						?>
					<H2> $37.00 </H2>
			</td>
</table>




<br><br><br>
</body>
</html>


<?php
	
	if(isset($_POST['p1'])){
		require_once ('conexiondb.php');
		$conectar=conectarBD();


		$query="INSERT INTO carrito(total,cantidad, nombre) VALUES(28, " . ((int)$_POST['cantidad']) . ", 'ELITE');";
    $result = pg_query($conectar, $query) or die ("error en la consulta");
	}

	if(isset($_POST['p2'])){
		require_once ('conexiondb.php');
		$conectar=conectarBD();


		$query="INSERT INTO carrito(total,cantidad, nombre) VALUES(35, " . ((int)$_POST['cantidad']) . ", 'BACHOCO');";
    $result = pg_query($conectar, $query) or die ("error en la consulta");
	}

	if(isset($_POST['p3'])){
		require_once ('conexiondb.php');
		$conectar=conectarBD();


		$query="INSERT INTO carrito(total,cantidad, nombre) VALUES(45, " . ((int)$_POST['cantidad']) . ", 'COCOROCO');";
    $result = pg_query($conectar, $query) or die ("error en la consulta");
	}

	if(isset($_POST['p4'])){
		require_once ('conexiondb.php');
		$conectar=conectarBD();


		$query="INSERT INTO carrito(total,cantidad, nombre) VALUES(350, " . ((int)$_POST['cantidad']) . ", 'SANJUAN');";
    $result = pg_query($conectar, $query) or die ("error en la consulta");
	}


	if(isset($_POST['p5'])){
		require_once ('conexiondb.php');
		$conectar=conectarBD();


		$query="INSERT INTO carrito(total,cantidad, nombre) VALUES(38, " . ((int)$_POST['cantidad']) . ", '18HERMANOS');";
    $result = pg_query($conectar, $query) or die ("error en la consulta");
	}

	if(isset($_POST['p6'])){
		require_once ('conexiondb.php');
		$conectar=conectarBD();


		$query="INSERT INTO carrito(total,cantidad, nombre) VALUES(42, " . ((int)$_POST['cantidad']) . ", 'CALVARIO');";
    $result = pg_query($conectar, $query) or die ("error en la consulta");
	}

	if(isset($_POST['p7'])){
		require_once ('conexiondb.php');
		$conectar=conectarBD();


		$query="INSERT INTO carrito(total,cantidad, nombre) VALUES(37, " . ((int)$_POST['cantidad']) . ", 'AVIVEL');";
    $result = pg_query($conectar, $query) or die ("error en la consulta");
	}

?>