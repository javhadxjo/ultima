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

<p> <a href="Registrar.php">REGISTRARSE</a></p>
</div>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">PRODUCTOS AV</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="Tienda.php">INICIO</a></li>
      <li><a href="Quienessomos.php">QUIÉNES SOMOS</a></li>
      <li><a href="Productos.php">TODOS LOS PRODUCTOS</a></li>
      <li><a href="Comocomprar.php">COMO COMPRAR</a></li>
      <li><a href="Contacto.php">CONTACTO</a></li>
    </ul>
  </div>
</nav>

 <div>
    <form method="post" action="Loginadmindb.php">
			 <div class="container">

    <label input="usuario"><b>Correo</b></label>
    <input type="text" placeholder="CORREO" name="usuario" required>
    <br>
    <label input="password"><b>Contraseña</b></label>
    <input type="password" placeholder="CONTRASEÑA" name="password" required>
    
    <button type="submit">iniciar sesion</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> RECORDAR CONTRASEÑA
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
  	<br>
    <button type="button" class="cancelbtn">Cancelar</button>
    <span class="psw">Olvido la <a href="#">contraseña?</a></span>
  </div>
			</form>
  </div>



</body>
</html>
