<!DOCTYPE html>
<html>
	<head>
		<title>Guardar</title>
	</head>
	<body>
		<center>
			<?php 

			 	 $id=$_REQUEST['id'];

				include("conexion.php");

				$query = "SELECT * FROM Usuarios WHERE id='$id'";
				$resultado= $conexion->query($query);
				$row=$resultado->fetch_assoc();
			 ?>
			<form action="modificar_proceso.php?id=<?php echo $row['id']; ?>" method="POST">
			  
			<br/><br/><br/>
				<input type="text" REQUIRED name="nombre" placeholder="Nombre..." value="<?php echo $row['nombre']; ?>"/><br/><br/>
				<input type="text" REQUIRED name="apellido" placeholder="Apellido..." value="<?php echo $row['apellido']; ?>"/><br/><br/>
				<input type="text" REQUIRED name="correo" placeholder="Correo..." value="<?php echo $row['correo']; ?>"/><br/><br/>
				<input type="submit" value="Aceptar">
			</form>
		</center>
	</body>
</html>