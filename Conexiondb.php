<?php

function conectarBD(){
	$host="host=localhost";
	$port="port=5432";
	$name="dbname=ejemplo";
	$user="user=postgres";
	$password="password=barragantijerina";
	$db = pg_connect("$host $port $name $user $password");

	if(!$db){
		
		echo "error ".pg_last_error;
	}else{
		
		//echo "conexion exitosa";
		return $db;
	}

}
	
?>
