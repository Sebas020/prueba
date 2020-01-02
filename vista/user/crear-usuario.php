<!DOCTYPE html>
<html>
<head>
	<title>Crear</title>
</head>
<body>
	<form action="../../controlador/UserController.php" method="POST">
		<input type="hidden" name="function" value="crear">
		<input type="text" name="codigo">
		<label>Nombres</label>
		<input type="text" name="nombres">
		<br>
		<label>Apellidos</label>
		<input type="text" name="apellidos">
		<br>
		<input type="submit" value="Enviar">
	</form>
</body>
</html>