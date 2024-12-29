
<?php
 session_start();

 include('../controlador/validar_sessiones.php');
 verificar_session();
 
?> 
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Discapacidad </title>
  <script type="text/javascript" src="../recursos/js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="../recursos/css/idena3.css" >
  <link rel="stylesheet" type="text/css" href="../recursos/css/buscador.css" >
  <link rel="shortcut icon" type="image/x-icon" href="../recursos/imagenes/favicon.ico">    <!icono de DUINNA en la pestaña (tittle)><link rel="stylesheet" type="text/css" href="../recursos/css/tablas.css">
  <link rel="stylesheet" type="text/css" href="../recursos/css/prueba.css" >
  <link rel="stylesheet" type="text/css" href="../recursos/css/menu.css" >
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
    <li><a href="../vista/Inicio_Coordinador.php">INICIO </a></li>
    <li><a href="../vista/preguntadecedulapadre.php">REGISTRO NNA </a></li> 
    <li><a href="#">GESTIONAR NNA </a>
        <ul>
             <li><a href="../vista/inhabilitar_coor_nna.php">INHABILITAR NNA </a></li>
             <li><a href="../vista/habilitar_nna_Coor_.php">HABILITAR NNA </a></li>
             <li><a href="../vista/modifica_coor_nna.php">MODIFICAR DATOS DEL NNA </a></li>
 
         </ul>
     <li><a href="#">REPORTES </a>
        <ul>
             <li><a href="../vista/Reportes_Estado_coor.php">CONSULTA DE ESTADOS </a></li>
             <li><a href="../vista/Reporte_General_Estado_coor.php">CONSULTA NACIONAL </a></li>            
             <li><a href="../vista/Reportes_Programa_coor.php">REPORTES POR PROGRAMAS </a></li>
             <li><a href="../vista/Reportes_General_Programa_coor.php">REPORTES GENERAL POR PROGRAMAS </a></li>
           
         
 
         </ul>
    </li>
    <li><a href="#">REPORTES ESPECIFICO </a>
        <ul>
             <li><a href="../vista/Reporte_Discapacidad_coor.php">DISCAPACIDAD </a></li>
             <li><a href="../vista/Repore_Etnia_coor.php">PUEBLOS INDIGENAS </a></li>
             <li><a href="../vista/reporte_Escolarizado_coor.php">ESCOLARIZADO </a></li>
              <li><a href="../vista/buscar_familiares_coor.php">FAMILIAR </a></li>
             
         
 </li>
         </ul>

         
    
    <li><a href="../recursos/pdfs/manual_de_usuario.pdf" download="Manual de Usuario">AYUDA </a></li>
    <li><a href="../vista/confirmar_salida.php">SALIR </a></li>
</ul></br></br>


</center>

 <form action="../vista/ficheroExcel.php" method="post" target="_blank"  style="margin-top: -2%" id="FormularioExportacion">
<p  style="margin-left: 56%"  ><B>Exportar a Excel</B>  <img src="../vista/export_to_excel.gif" class="botonExcel" /></p>
<input type="hidden" id="datos_a_enviar" name="datos_a_enviar" />

</center></header>

  
</head>

<body>


  <table  style="margin-left: 0%" width="100%" border="1" cellpadding="10" cellspacing="0" bordercolor="#666666" id="Exportar_a_Excel" style="border-collapse:collapse;">
    <tr><td colspan="17"><h2><p style="color: #01DFD7; font-size: 150%; margin: 1px; padding: 1px; margin-left: 1%; " > Reporte por Discapacidad </p></h2></td>
   </tr>
<tr bgcolor="#913B3B"> 
  <td  style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;">Nº</td>
  <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;"> Código del Nna </td>
  <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;"> Programa </td>
  <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;"> Cedula </td>
  <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;"> Nacionalidad </td> 
  <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;"> Nombre </td>
  <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;"> Apellido </td>
  <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;"> Fecha de nacimiento </td>
  <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;"> Edad </td>
  <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;"> Discapacidad </td>
  <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;"> Estado </td>
  <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;"> Municipio </td>
  <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;"> Parroquia </td>
  <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;"> Sector de vivienda </td>
  <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;"> Estatus </td>
  <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;">Registrado por</td>
  <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;">Cedula </td>
   </tr>
    <center> <?php
    $i=1;
       while ($row = pg_fetch_assoc($consul_general)) {
     ?>
      <tr id="selec">
        <td style="padding: 15px;"><?php echo "$i"." "; ?> </td>
        <td style="padding: 15px;"> <?php echo $row['codigo']; ?></td>
        <td style="padding: 15px;"> <?php echo $row['asignar_programa']; ?></td>
        <td style="padding: 15px;"> <?php echo $row['cedula']; ?> </td>
        <td style="padding: 15px;"> <?php echo $row['nacionalidad']; ?></td>
        <td style="padding: 15px;"> <?php echo $row['primer_nombre']; ?> </td> 
        <td style="padding: 15px;"> <?php  echo $row['primer_apellido']; ?> </td> 
        <td style="padding: 15px;"> <?php echo $row['fecha_naci']; ?> </td> 
        <td style="padding: 15px;"> <?php echo $row['edad']; ?> </td>
        <td style="padding: 15px;"><?php echo $row['induque_discapacidad']; ?></td> 
        <td style="padding: 15px;"> <?php echo $row['estado']; ?></td>
        <td style="padding: 15px;"> <?php echo $row['municipio']; ?> </td>
        <td style="padding: 15px;"> <?php echo $row['parroquia']; ?> </td>
        <td style="padding: 15px;"> <?php echo $row['direccion_sector']; ?> </td>
        <td style="padding: 15px;"> <?php echo $row['estatus']; ?></td>
        <td style="padding: 15px;">  <?php echo $row['promotor']; ?></td>
        <td style="padding: 15px;"><?php echo $row['cedulapromotor']."\n"; ?></td>
      </tr><?php
        $i++;             
        }
          ?>

        </center>
  </table><br><br><br><br><br>

    
</form>


</body>
</html>
		
		
</body>
