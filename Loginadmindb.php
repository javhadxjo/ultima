
<?php

    require 'vendor/autoload.php';


	require_once ('conexiondb.php');
   $conectar=conectarBD();
	session_start();
   
      $myusername = pg_escape_string($_POST['usuario']);
      $mypassword = pg_escape_string($_POST['password']);
      $sql = "SELECT * FROM clientes1 WHERE usuario = '$myusername' and password = '$mypassword'";
      $result = pg_query($conectar, $sql) or die ("error en la consulta");
      $registros=pg_num_rows($result);
	
      if($registros > 0) {
          $_SESSION['login_user'] = $myusername;
         header("Location: Reportes.php");
      }else {
         header("Location: Login.php");
         $error = "Your Login Name or Password is invalid";
      }




  

?>

