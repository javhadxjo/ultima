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
    

  ?>
</div>

<script type="text/javascript" src="script.js"></script>
<script type="text/javascript" src="lib/jquery/jquery.min.js"></script>
  <script type="text/javascript" src="lib/jquery/jquery-migrate.min.js"></script>
  <button method="POST" onclick="enviar()">Click me</button>
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

<input type="submit" name="" value="Buscar" id="boton1" onclick = "enviar();">
<?php
$monto=0;
  require_once ('conexiondb.php');
    $conectar=conectarBD();
    $query= "SELECT * FROM carrito";
    $resultado=pg_query($conectar, $query) or die ("error en la consulta");
    $contador =pg_num_rows($resultado);
    if($contador>0){
      echo "<table border=1 WIDTH=50%  HEIGHT=50%>
            <tr><td>PRECIO</td><td>CANTIDAD</td><td>NOMBRE</td></tr>";
            while ($filas=pg_fetch_array($resultado)){
              echo "<tr><td>".$filas["total"]."</td>";
              echo "<td>".$filas["cantidad"]."</td>";
              echo "<td>".$filas["nombre"]."</td></tr>";
              $monto=$monto+($filas["total"]*$filas["cantidad"]);
            }echo "</table>";
    }else{
      echo"no hay datos";
    }

    //echo "<form method= 'post' action=''><input type='submit' name='comprar' value='comprar'/></form>";//comprar
    echo "<form method= 'post' action='productos.php'><input type='submit' name='regresar' value='regresar'/></form>";//regresar a comprar mas
    echo "<form method= 'post' action=''><input type='submit' name='eliminar' value='eliminar'/></form>";//eliminar carrito

    echo "<form method= 'post'><input type='submit' name='comprar' value='comprar'/><br><label input='cantidad'><b>Tarjeta</b></label><input type=number name ='tarjeta' /></form>";//numero de tarjeta
echo $monto;
if(isset($_POST['eliminar'])){
    require_once ('conexiondb.php');
    $conectar=conectarBD();


    $query="DELETE FROM carrito";
    $result = pg_query($conectar, $query) or die ("error en la consulta");

    if(!$result){

    }else{
      header("Location: carrito.php");
    } 

  }






if(isset($_POST['comprar'])){
  require_once ('conexiondb.php');
    $conectar=conectarBD();
    echo $_POST['tarjeta'];
  $query="INSERT INTO venta(nombre,monto, numero_t) VALUES('" . pg_escape_string($_SESSION['login_user']) . "', " . ((int)$monto) . "," . ((int)$_POST['tarjeta']) . ");";
    $result = pg_query($conectar, $query) or die ("error en la consulta");

}

?>





</body>
</html>
