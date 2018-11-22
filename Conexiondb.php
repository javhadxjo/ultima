<?php

function conectarBD(){
	$db_host="host=ec2-50-19-249-121.compute-1.amazonaws.com";
	$db_port="port=5432";
	$db_name="dbname=d6ugddf7gjch98";
	$db_user="user=dnyciiodvjrwwc";
	$db_password="password=b499d0c820ee30a80e7269c77a42599d6be5ce4e935f10b52dbf42f1be43894a";
	$db = pg_connect(connection_string: "host=".$db_host." dbname=".$db_name." user=".$db_user." password=".$db_password);

	if(!$db){
		
		echo "error ".pg_last_error;
	}else{
		
		echo "conexion exitosa";
		return $db;
	}

}
	
?>
