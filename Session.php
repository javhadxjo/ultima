<?php
include('conexiondb.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
  // echo $_SESSION['login_user'];
   //$ses_sql = mysqli_query($db,"select username from admin where username = '$user_check' ");
   //$ses_sql = "SELECT * FROM clientes WHERE usuario =  '$user_check'";
   //$row =pg_num_rows($ses_sql);
   //$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   //$login_session = $row['username'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:Tienda.html");
   }
?>
