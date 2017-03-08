<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tabla</title>
</head>
<body>
	<center>
		<table border="5">
			<thead>
				<tr>
					<th colspan="1"><a href="formulario.php">Nuevo</a></th>
					<th colspan="5">Lista de usuarios</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Id</td>
					<td>Nombre</td>
					<td>Apellido</td>
					<td>Correo</td>
					<td colspan="2">Operaciones</td>
				</tr>
			<?php 
				include('conexion.php');
				$query = "SELECT * FROM Usuarios";
				$resultado = $conexion->query($query);
				while ($row=$resultado->fetch_assoc()) {
			 ?>
			 	<tr>
			 		<td><?php echo $row['id']; ?></td>
			 		<td><?php echo $row['nombre']; ?></td>
			 		<td><?php echo $row['apellido']; ?></td>
			 		<td><?php echo $row['correo']; ?></td>
			 		<td><a href="modificar.php?id=<?php echo $row['id']; ?>">Modificar</a></td>
			 		<td><a href="eliminar.php?id=<?php echo $row['id']; ?>">Eliminar</a></td>
			 	</tr>
			 	<?php 
					}
			 	?>
			</tbody>
		</table>
	</center>
</body>
</html>