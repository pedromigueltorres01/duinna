<?php
 session_start();

 include('../controlador/validar_sessiones.php');
 verificar_session();
 
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Consultar General de Usuarios </title>
  <script type="text/javascript" src="../recursos/js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="../recursos/css/idena3.css" >
  <link rel="stylesheet" type="text/css" href="../recursos/css/buscador.css" >
  <link rel="stylesheet" type="text/css" href="../recursos/css/prueba.css" >
  <link rel="shortcut icon" type="image/x-icon" href="../recursos/imagenes/favicon.ico">    <!icono de DUINNA en la pestaña (tittle)><link rel="stylesheet" type="text/css" href="../recursos/css/tablas.css">
  <link rel="stylesheet" type="text/css" href="../recursos/css/menu.css">
  <script type="text/javascript" src="../recursos/js/jquery-1.3.2.min.js"></script>
<script language="javascript">
$(document).ready(function() {
  $(".botonExcel").click(function(event) {
    $("#datos_a_enviar").val( $("<div>").append( $("#Exportar_a_Excel").eq(0).clone()).html());
    $("#FormularioExportacion").submit();
});
});
</script>
<style type="text/css">
.botonExcel{cursor:pointer;}
</style>
  



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
 
<div style="color: #0489B1; font-size: 1.1em; ">
  <b style="margin-left: 4%; "><script> document.write(new Date())</script></b>
</div> <!muestra la fecha y la hora>
<div style="position: relative;margin-top: -1.2%; margin-left: 75%; color: #04B404; font-size: 18px;"> 
  <p  " class="nombreUsuario"  ><B>Bienvenid@ <?php echo $_SESSION['username'];?> &nbsp;<?php    
 echo$_SESSION['apellido']?></B></p
 ></div>

</head>
<body>
	<header>
    <center>
    	<head><img align="center" src="../vista/piedepagina.jpg" width="1330" height="80">
       <img src="../vista/DUINNA.jpg" style="width: 50%;
    height: 189px;"></head>


  





</body>






<head>
<html>
<section class="webdesigntuts-workshop">
   <form style= "margin-right: -77%; margin-top: -5%" id="searchform" action="../controlador/Con_Buscar_nna.php" method="POST">        
    <input type="search" name="NNA" placeholder="Buscar NNA..." required="complete este campo">         <!buscador>
    <button>Buscar</button>
  </form>
</section>
</html>

</head>











      <P style="background-color:lightgrey; width: 100%;" align="center"><b>Data única de incorporación de niños, niñas y adolescentes</b></p>





    </center>
    </br>
   <center>
<ul class="menu">
    <li><a href="../vista/Inicio.php">INICIO </a></li>
    <li><a href="../vista/preguntadecedulapadre.php">REGISTRO NNA </a></li> 
    <li><a href="#">GESTIONAR NNA </a>
        <ul>
             <li><a href="../vista/inhabilitar_nna.php">INHABILITAR NNA </a></li>
             <li><a href="../vista/habilitar_nna.php">HABILITAR NNA </a></li>
             <li><a href="../vista/modifica_nna.php">MODIFICAR DATOS DEL NNA </a></li>
 
         </ul>
     <li><a href="#">REPORTES </a>
        <ul>
             <li><a href="../vista/Reportes_Estado.php">CONSULTA DE ESTADOS </a></li>
             <li><a href="../vista/Reporte_General_Estado.php">CONSULTA NACIONAL </a></li>
             
             <li><a href="../vista/Reportes_Programa.php">REPORTES POR PROGRAMAS </a></li>
             <li><a href="../vista/Reportes_General_Programa.php">REPORTES GENERAL POR PROGRAMAS </a></li>
           
         
 
         </ul>
    </li>
    <li><a href="#">REPORTES ESPECIFICO </a>
        <ul>
             <li><a href="../vista/Reporte_Discapacidad.php">DISCAPACIDAD</a></li>
             <li><a href="../vista/Repore_Etnia.php">PUEBLOS INDIGENAS </a></li>
             <li><a href="../vista/Reporte_Escolarizado.php">ESCOLARIZADO </a></li>
              <li><a href="../vista/buscar_familiares.php">FAMILIAR </a></li>
             
         
 </li>
         </ul>

         <li><a href="#">PRIVILEGIOS </a>
        <ul>
             <li><a href="../vista/crear_usu_login.html.php">CREAR USUARIO </a></li>
             <li><a href="../vista/consul_usuario.php">CONSULTAR USUARIO </a></li>
             <li><a href="../vista/buscar_usuario_modificar.php">MODIFICAR USUARIO </a></li>
               <li><a href="../vista/cambiar_estatus_usuario.php">ELIMINAR USUARIO</a></li>
                 <li><a href="../vista/consulta_de_usuarios_inactivos.php">COSULTAR USUARIOS ELIMINADOS </a></li>
                   <li><a href="../vista/activar_recuperar_usurios.php">RECUPERAR USUARIOS ELIMINADOS </a></li>
                     

             
         
 
         </ul>
    
    <li><a href="../recursos/pdfs/manual_de_usuario.pdf" download="Manual de Usuario">AYUDA </a></li>
    <li><a href="../vista/confirmar_salida.php">SALIR </a></li>
</ul></br></br>


</center></header>
<body>
       <form action="../vista/ficheroExcel.php" method="post" target="_blank"  style="margin-top: -2%" id="FormularioExportacion">
<p  style="margin-left: 61%"  ><B>Exportar a Excel</B>  <img src="../vista/export_to_excel.gif" class="botonExcel" /></p>
<input type="hidden" id="datos_a_enviar" name="datos_a_enviar" />
</form>

	<table  style="margin-left: 27%" width="50%" border="1" cellpadding="10" cellspacing="0" bordercolor="#666666" id="Exportar_a_Excel" style="border-collapse:collapse;">




		<tr bgcolor="#FBEFF2" style="margin: 3px"><td colspan="8"><h2>Consulta General</h2></td></tr>
<tr bgcolor="#380B61"  id="fija">  
   <td style="color: #FFFFFF; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;"><b>Nº</b></td>
  <td style="color: #FFFFFF; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;"><b>Nombre</b></td>
  <td style="color: #FFFFFF; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;"><b>Apellido</b></td>
  <td style="color: #FFFFFF; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;"><b>Usuario</b></td>
  <td style="color: #FFFFFF; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;"><b>Perfil de usario</b></td>
  <td style="color: #FFFFFF; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;"><b>Estado</b></td>
  <td style="color: #FFFFFF; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;"><b>Estatus</b></td>	
  <center> 
    
    <?php	
    $i=1;
     while ($row = pg_fetch_assoc($consul_general)) {
     ?>
			<tr>
        <td style="color: #000000; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;"> <?php echo $i."\n"; ?> </td>
				 <td style="color: #000000; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;"> <?php echo $row['nombre']."\n"; ?> </td>
          <td style="color: #000000; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;"> <?php  
					echo $row['apellido']."\n"; ?> </td>
           <td style="color: #000000; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;"> <?php echo $row['usuario']."\n"; ?> </td>
            <td style="color: #000000; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;"> <?php echo $row['perfil']."\n"; ?> </td>
             <td style="color: #000000; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;"> <?php echo $row['estado']."\n"; ?> </td>
              <td style="color: #000000; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;"> <?php echo $row['estatus']."\n"; $i++; ?></td>
			</tr><?php
               	  
				}
					?>


</center>
</table>
				
			
</body>
</html>


<style type="text/css">
  ul.menu {
 float:left;
 display:block;
 margin-top: 0px;
 margin-left: 18%;
 list-style-type:none;
 }
 .menu li {
 line-height:18px;
 font-size:13px;
 position:relative;
 float:left;
 }
 .menu li a {
 color: #000;
 text-transform:uppercase;
 padding: 5px 20px;
 text-decoration:none;
 }
 .menu li a:hover {
 background: #9c0101;
 color: white;
 }
 .menu li ul {
 display:none;
 position:absolute;
 top:20px;
 width: 240px;
 background-color: #f4f4f4;
 padding:0;
 list-style-type:none;
 }
 .menu li ul li {
 width: 200px;
 border: 1px solid #9c0101;
 border-top:none;
 padding: 10px 20px;
 }
 .menu li ul li:first-child {
 border-top: 1px solid #9c0101;
 }
.menu li ul li a {
 width: 240px;
 margin: 0;
 padding:0;
 }
.menu li ul li a:hover {
 width: 240px;
 margin: 0;
 color: #9c0101;
 background:none;
 }
</style>