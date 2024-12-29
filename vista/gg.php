<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>	DUINNA</title>
<link rel="stylesheet" href="recursos/css/lo.css">
<link rel="shortcut icon" type="image/x-icon" href="recursos/imagenes/favicon.ico">    <!icono de DUINNA en la pestaña (tittle)>
</head>

<body >
<img src="recursos/imagenes/DUINNA.jpg" style="width: 50%;
    margin-left: 20%;
    height: 190px;">
<SCRIPT  language=JavaScript> 
function go(){
if (document.form.password.value=='CONTRASEÑA' && document.form.login.value=='USUARIO'){ 
        document.form.submit(); 
    } 
    else{ 
         alert("Porfavor ingrese, nombre de usuario y contraseña correctos."); 
    } 
} 
</SCRIPT> 
<div class="contenedor-form">
		<div class="toggle">
		</div>
	<div class="formulario"><center>
			<h2>Iniciar sesión</h2></center>
				<form action="controlador/validar.php" method="POST">
			<select name="perfil" id="usuario"  style=" padding: 1%; width: 50%; margin: 5px; margin-left: 25%;"><option se¿Cuántas veces ulected="">Seleccionar</option>
				<option value="Administrador">Administrador</option>
				<option value="Coordinador">Coordinador</option>
				<option value="Promotor">Promotor</option></select>
		
						<b>Usuario:</b>
						<input type="text" name="usuario" placeholder="Cédula"  required pattern="[0-9]{5,}"  > 
						<b>Contraseña:</b>
						<input type="password" name="password" placeholder="Contraseña" > 
						
					 	<br><input type="submit" value="aceptar" name="aceptar">
					 	<br>
					 	<br>
					 	
			<script>
				function gestionar (accion) {
				if(accion=='recuperar'){

				document.listar.action='../controlador/con_recuperar.php';
				document.listar.method='POST';
				document.listar.submit();
				}
			}
			</script>
			</form>

		</div>
		<!--<center>
					 	<a href="/vista/olvido.html"><p>Olvidó contraseña</p></a>
					 	
	</center>-->

</body>
</html>