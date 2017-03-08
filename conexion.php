<?php 

	$conexion = new mysqli("localhost", "root", "root", "operaciones");
	if ($conexion) {
		echo "conexion exitosa";
	}
	else{
		echo "conexion no exitosa";
	}
	
 ?> 