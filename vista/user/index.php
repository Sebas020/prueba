<!DOCTYPE html>
<html>
<head>
	<title>Prueba</title>
</head>
<body>
	<a href="crear-usuario.php">Crear</a>
	<a href="../../controlador/UserController.php?function=consultar">buscar usurios</a>
	<br><br>
	<h1>Usuarios</h1>
	<table>
		<thead>
			<tr>
				<td>Id</td>
				<td>Nombres</td>
				<td>Apellidos</td>
			</tr>
		</thead>
		<?php while($buscar){?>
		<tbody>
			<tr>
				<td><?php echo $buscarUsuario[0]; ?></td>
				<td><?php echo $buscarUsuario[1]; ?></td>
				<td><?php echo $buscarUsuario[2]; ?></td>
			</tr>
		</tbody>
	<?php } ?>
	</table>
</body>
</html>