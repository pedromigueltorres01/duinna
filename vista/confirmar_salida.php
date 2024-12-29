<?php
 session_start();

 include('../controlador/validar_sessiones.php');
 verificar_session();
 
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Salir</title>
	<link rel="stylesheet" type="text/css" href="../recursos/css/idena3.css">
	   <link rel="shortcut icon" type="image/x-icon" href="../recursos/imagenes/favicon.ico">    <!icono de DUINNA en la pestaña (tittle)>

	<!--<script type="text/javascript">

		 alert('POR FAVOR COMPLETE TODO EL FORMULARIO');
	</script>-->

</head>
<body>
	
<div style="color: #0489B1; font-size: 1.1em; "><b style="margin-left: 4%; "><script> document.write(new Date())</script></b></div> <!muestra la fecha y la hora>

<div style="position: relative;margin-top: -1.2%; margin-left: 75%; color: #04B404; font-size: 18px;"> <p  " class="nombreUsuario"  ><B>Bienvenid@ <?php echo $_SESSION['username'];?> &nbsp;<?php    
 echo$_SESSION['apellido']?></B></p></div>


	<header>
    <center>
    	 <head><img align="center" src="../vista/piedepagina.jpg" width="1330" height="80">
       <img src="DUINNA.jpg" style="width: 50%;
    height: 189px;"></head>


<P style="background-color:lightgrey; width: 100%;" align="center"><b>Data única de incorporación de niños, niñas y adolescentes</b></p>
    </center>
</body>



	
	<center>
<table>
	<div style="margin-top: 5%;">
<h1 style="color: #FF8000; ">Confirmar Salida</h1>
	
	</div>  
		
			<form action="../controlador/validar_perfil.php" method="POST">

				<input style="margin-right: -25%; margin-top: 5%;" type="submit" name="atras" value="Atras">
		 	</form>
	 
 
    

    <form action="../controlador/salir.php" method="POST">
		<input  style="margin-left: 40%" type="submit" name="salir" value="Salir">
	</form>

  
	
	
	

</table>
</center>

</body>
</html>
</html>