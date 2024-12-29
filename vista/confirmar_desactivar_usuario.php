<?php
 session_start();

 include('../controlador/validar_sessiones.php');
 verificar_session();
 
?>
<!DOCTYPE html>
<html lang="es">
<link rel="shortcut icon" type="image/x-icon" href="../recursos/imagenes/favicon.ico">    <!icono de DUINNA en la pestaña (tittle)>

<head>
	<meta charset="utf-8">
	<title>Eliminar</title>
</head>
<body> 
	<center>
	<table>
		<tr><td><form action="../vista/Inicio.php">
			<input type="submit" name="inicio" value="INICIO">
		</form></td><td><form action="../controlador/desactivar_usuario.php" method="POST">
			<input type="submit" name="Eliminar" value="Eliminar">
		</form></td></tr>
	</table>
	</center>


</body>
</html>