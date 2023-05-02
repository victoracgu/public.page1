<!DOCTYPE html>
<html>
<head>
	<title>Procesar formulario</title>
</head>
<body>
	<?php
		if (isset($_POST['nombre']) && isset($_POST['email'])) {
			$nombre = $_POST['nombre'];
			$email = $_POST['email'];
			echo "<h1>Bienvenido $nombre</h1>";
			echo "<p>Tu correo electrónico es: $email</p>";
		} else {
			echo "<h1>Error en el envío del formulario</h1>";
		}
	?>
</body>
</html>
