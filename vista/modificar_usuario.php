<?php
 session_start();

 include('../controlador/validar_sessiones.php');
 verificar_session();
 
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Modificar Usuario</title>
  <link rel="stylesheet" type="text/css" href="../recursos/css/idena3.css">
  <script type="text/javascript" src="../recursos/js/jquery.js"></script>
  <link rel="stylesheet" type="text/css" href="../recursos/css/idena4.css">
  <link rel="stylesheet" type="text/css" href="../recursos/css/buscador.css" >
  <link rel="stylesheet" type="text/css" href="../recursos/css/prueba.css" >
  <link rel="stylesheet" type="text/css" href="../recursos/css/estilosdenombredeusuario.css" >
    <link rel="stylesheet" type="text/css" href="../recursos/css/reloj.css">
   <script type="text/javascript" src="../recursos/js/reloj.js"></script>
   <link rel="stylesheet" type="text/css" href="../recursos/css/estilo7.css">
   <link rel="stylesheet" type="text/css" href="../recursos/css/menu.css">
   <link rel="shortcut icon" type="image/x-icon" href="../recursos/imagenes/favicon.ico">

  


   <script type="text/javascript">
$(document).ready(function() {
    $('ul li:has(ul)').hover(function(e) {
         $(this).find('ul').css({display: "block"});
     },
     function(e) {
         $(this).find('ul').css({display: "none"});
     });
});
 </script>





	<!--<script type="text/javascript">

		 alert('POR FAVOR COMPLETE TODO EL FORMULARIO');
	</script>-->


<!--<p style="text-alig:center;">     <iframe width="200" height="200"
scrolling="no"
src="http://pagina-del-dia.euroresidentes.es/gadget-dia-de-hoy.php?fondo=rojo.png&amp;texto=FFFFFF" frameborder="0"></iframe></p>--><!para colocar la fecha exacta en la web(solo funciona con internet)>



<p  style="margin-left: 80%"  ><B>Bienvenid@&nbsp; <?php echo $_SESSION['username'];?>&nbsp;<?php    
 echo$_SESSION['apellido']?></B></p>
</head>
<body>
	<header>
    <center>
    	<head><img align="center" src="../vista/piedepagina.jpg" width="1330" height="80">
       <img src="../vista/DUINNA.jpg" style="width: 50%;
    height: 189px;"></head>


  





</body>








      <P style="background-color:lightgrey; width: 100%;" align="center"><b>Data única de incorporación de niños, niñas y adolescentes</b></p>





    </center>
  </br>
    <center>
<ul class="menu">
   <li><a href="../vista/Inicio.php">INICIO</a></li>
    <li><a href="../vista/preguntadecedulapadre.php">REGISTRO NNA</a></li> <li><a href="#">GESTIONAR NNA</a>
        <ul>
             <li><a href="../vista/inhabilitar_nna.php">INHABILITAR NNA</a></li>
             <li><a href="../vista/habilitar_nna.php">HABILITAR NNA</a></li>
             <li><a href="../vista/modifica_nna.php">MODIFICAR DATOS DEL NNA</a></li>
 
         </ul>
     <li><a href="#">REPORTES</a>
        <ul>
             <li><a href="../vista/Reportes_Estado.php">CONSULTA DE ESTADOS</a></li>
             <li><a href="../vista/Reporte_General_Estado.php">CONSULTA NACIONAL</a></li>
             
             <li><a href="../vista/Reportes_Programa.php">REPORTES POR PROGRAMAS</a></li>
             <li><a href="../vista/Reportes_General_Programa.php">REPORTES GENERAL POR PROGRAMAS</a></li>
           
         
 
         </ul>
    </li>
    <li><a href="#">REPORTES ESPECIFICO </a>
        <ul>
             <li><a href="../vista/Reporte_Discapacidad.php">DISCAPACIDAD</a></li>
             <li><a href="../vista/Repore_Etnia.php">PUEBLOS INDIGENAS</a></li>
             <li><a href="../vista/Reporte_Escolarizado.php">ESCOLARIZADO</a></li>
              <li><a href="../vista/buscar_familiares.php">FAMILIAR</a></li>
             
         
 </li>
         </ul>

         <li><a href="#">PRIVILEGIOS</a>
        <ul>
             <li><a href="../vista/crear_usu_login.html.php">CREAR USUARIO</a></li>
             <li><a href="../vista/consul_usuario.php">CONSULTAR USUARIO</a></li>
             <li><a href="../vista/buscar_usuario_modificar.php">MODIFICAR USUARIO</a></li>
               <li><a href="../vista/cambiar_estatus_usuario.php">ELIMINAR USUARIO</a></li>
                 <li><a href="../vista/consulta_de_usuarios_inactivos.php">COSULTAR USUARIOS ELIMINADOS</a></li>
                   <li><a href="../vista/activar_recuperar_usurios.php">RECUPERAR USUARIOS ELIMINADOS</a></li>
                     

             
         
 
         </ul>
    
    <li><a href="../recursos/pdfs/manual_de_usuario.pdf" download="Manual de Usuario">AYUDA</a></li>
    <li><a href="../vista/confirmar_salida.php">SALIR</a></li>
</ul></br></br>


</center></header>
<body>
	<center><h1>Modificar Usuario</h1></center></br>
	<center><table>
    

		<form action="../controlador/validar_usuario_modificar.php" method="POST">




      <?php while ($row = pg_fetch_row($consulta) )  {

       ?> 
         
      
			 Usuario a modificar &nbsp;  <input type="text" name="usuario" value="<?php echo"$row[0]"; ?>"  type="number" placeholder="Cédula"    size="20" maxlength="100"><br><br>

        Nuevo Nombre &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;  <input type="text" name="nombre" value="<?php echo"$row[1]"; ?>"  type="number" placeholder="Cédula"    size="20" maxlength="100"><br><br>

         Nuevo Apellido &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="text" value="<?php echo"$row[2]"; ?> " name="Apellido"  placeholder="Apellido"    size="20" maxlength="100"><br><br>

       Nuevo Perfil&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <select  style="margin-left: 6%" name="Perfil">
         <option value="">Seleccione</option>
         <option value="ADMINISTRADOR">Administrador</option>
         <option value="COORDINADOR">Coordinador</option>
         <option value="PROMOTOR">Promotor</option>
       </select><br><br>

       Nuevo Estado&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <select style="margin-left: 6%" name="estado">
  <option value="">Selecione</option>
  <option value="AMAZONAS">Amazonas</option>
  <option value="ANZOÁTEGUI">Anzoátegui</option>
  <option value="APURE">Apure</option>
  <option value="ARAGUA"> Aragua</option>
  <option value="BARINAS">Barinas</option>
  <option value="BOLÍVAR">Bolívar</option>
  <option value="CARABOBO">Carabobo</option>
  <option value="COJEDES">Cojedes</option>
  <option value="DELTA AMACURO">Delta Amacuro</option>
  <option value="DISTRITO CAPITAL">Distrito Capital</option>
  <option value="FALCÓN">Falcón</option>
  <option value="GUÁRICO">Guárico</option>
  <option value="LARA">Lara</option>
  <option value="MÉRIDA">Mérida</option>
  <option value="MIRANDA">Miranda</option>
  <option value="MONAGAS">Monagas</option>
  <option value="NUEVA ESPARTA">Nueva Esparta</option>
  <option value="PORTUGUESA">Portuguesa</option>
  <option value="SUCRE">Sucre</option>
  <option value="TÁCHIRA">Táchira</option>
  <option value="TRUJILLO">Trujillo</option>
  <option value="YARACUY">Yaracuy</option>
  <option value="VARGAS">Vargas</option>
  <option  value="ZULIA"> Zulia</option>
</select><br><br>

			 Nueva Contraseña&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="password" value="<?php echo"$row[5]"; ?>"  type="number" placeholder="Cédula"    size="20" maxlength="100"><br><br>
				<input  class='btn btn-lg btn-primary btn-block btn-signin' type="submit" name="modifiar" value="Modificar">
			<?php	}?>
			</form>
		

	</table></center>
	
			



</body>
</html>