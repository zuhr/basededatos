<?php 

include("conexion.php");

	$nombre= $_POST['nombre'];							
	$apellido= $_POST['apellido'];	
	$correo= $_POST['correo'];

	$query="INSERT INTO usuarios(nombre,apellido,correo) VALUES('$nombre','$apellido','$correo')";
	$resultado= $conexion->query($query);

	if($resultado){
		echo "insercion exitosa";
	}
	else{
		echo "insercion no exitosa";
	}
		
 ?>