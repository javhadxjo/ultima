<?php
    require 'vendor/autoload.php';
  if(isset($_POST['insert'])){
    require_once ('conexiondb.php');

$conectar=conectarBD();

    $nombre = $_POST['Nombre'];
    $apellidop = $_POST['Apellidop'];
    $apellidom = $_POST['Apellidom'];
    $correo = $_POST['Correo'];
    $direccion = $_POST['Direccion'];
    $telefono = $_POST['Telefono'];
    $usuario = $_POST['Usuario'];
    $password = $_POST['Password'];



    $query="INSERT INTO clientes1(nombre, ap, am, correo, direccion, telefono, usuario, password) VALUES('$nombre', '$apellidop', '$apellidom', '$correo','$direccion', '$telefono', '$usuario', '$password');";
    $result = pg_query($conectar, $query) or die ("error en la consulta");
    
    //var_dump($result);

//var_dump($pdoExec);
    if (!$result) {
       echo "<script type=\"text/javascript\">alert(\"SE REGISTRO CORRECTAMENTE\");</script>";
      header("Location: Registrar.php"); 
    }else{
       echo "<script type=\"text/javascript\">alert(\"NO SE REGISTRO\");</script>";
      header ("Location: Tienda.php");
    }
    
  }


?>



<!DOCTYPE html>
<html>
<head>
	<title>TIENDA</title>
</head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css.css">
<body style="background-color:#f7f9c9;">
<img src="Imagenes\Logo.png" height="130" width="190">


<div class="a">

<p> <a href="Login.php">INICIAR SESION</a></p>
</div>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">PRODUCTOS AV</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="Tienda.php">INICIO</a></li>
      <li><a href="Quienessomos.php">QUIÉNES SOMOS</a></li>
      <li><a href="#">TODOS LOS PRODUCTOS</a></li>
      <li><a href="Comocomprar.php">COMO COMPRAR</a></li>
      <li><a href="Contacto.php">CONTACTO</a></li>
    </ul>
  </div>
</nav>

 <div>
    <form action ="" method="POST">
			 <div class="container">

    <label input="Nombre"><b>Nombre</b></label>
    <input type="text" placeholder="Nombre" name="Nombre" required>
    <br>
    <label input="Apellido Paterno"><b>Apellido Paterno</b></label>
    <input type="text" placeholder="Apellido Paterno" name="Apellidop" required>
    <br>
    <label input="Apellido Materno"><b>Apellido Materno</b></label>
    <input type="text" placeholder="Apellido Materno" name="Apellidom" required>
    <br>
    <label input="Correo"><b>Correo</b></label>
    <input type="text" placeholder="Correo" name="Correo" required>
    <br>
    <label input="Direccion"><b>Direccion</b></label>
    <input type="text" placeholder="Direccion" name="Direccion" required>
    <br>
    <label input="Telefono"><b>Telefono</b></label>
    <input type="text" placeholder="Telefono" name="Telefono" required>
    <br>
    <label input="Usuario"><b>Usuario</b></label>
    <input type="text" placeholder="Usuario" name="Usuario" required>
    <br>
    <label input="Contraseña"><b>Contraseña</b></label>
    <input type="Password" placeholder="Contraseña" name="Password" required>


    <button type="submit" name ="insert" value ="crear usuario">Registrar</button>
  
</div>
</form>


</body>
</html>
