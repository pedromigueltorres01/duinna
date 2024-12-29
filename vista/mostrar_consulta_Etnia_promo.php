<?php
 session_start();

 include('../controlador/validar_sessiones.php');
 verificar_session();
 
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Reporte por Estado</title>
   <link rel="stylesheet" type="text/css" href="../recursos/css/tablas.css">
  <script type="text/javascript" src="../recursos/js/jquery.js"></script>
  <link rel="stylesheet" type="text/css" href="../recursos/css/idena3.css" >
 <link rel="stylesheet" type="text/css" href="../recursos/css/tablas.css">
  <link rel="stylesheet" type="text/css" href="../recursos/css/buscador.css" >
  <link rel="stylesheet" type="text/css" href="../recursos/css/prueba.css" >
  <link rel="stylesheet" type="text/css" href="../recursos/css/menu.css">
   <link rel="shortcut icon" type="image/x-icon" href="../recursos/imagenes/favicon.ico">    <!icono de DUINNA en la pestaña (tittle)>
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
      <head>
        <div id="fijoo"><img class="duin"  align="center" src="../vista/piedepagina.jpg" width="1330" height="80">
       <img class="dui" id="fijooo" src="../vista/DUINNA.jpg" style="width: 50%;
    height: 189px;">
  </div></head>


  





</body>


<head>
<html><div id="fijoo">
<section class="webdesigntuts-workshop">
   <form style= "margin-right: -77%; margin-top: -5%" id="searchform" action="../controlador/Con_Buscar_nna.php" method="POST">        
    <input type="search" name="NNA" placeholder="Buscar NNA..." required="complete este campo">         <!buscador>
    <button>Buscar</button>
  </form>
</section>
</div>
</html>

</head>






      <P style="background-color:lightgrey; width: 100%;" align="center"><b>Data única de incorporación de niños, niñas y adolescentes</b></p>





    </center>
  </br>
     <center>
      <div id="fijo">
<ul  class="menu">
    <li><a href="../vista/Inicio_Promotor.php">INICIO </a></li>
    <li><a href="../vista/preguntadecedulapadre.php">REGISTRO NNA </a></li> 
    <li><a href="#">GESTIONAR NNA </a>
        <ul>
             <li><a href="../vista/inhabilitar_promo_nna.php">INHABILITAR NNA </a></li>
             <li><a href="../vista/habilitar_nna_Promo_.php">HABILITAR NNA </a></li>
             <li><a href="../vista/modifica_promo_nna.php">MODIFICAR DATOS DEL NNA </a></li>
 
         </ul>
     <li><a href="#">REPORTES </a>
        <ul>
             <li><a href="../vista/Reportes_Estado_promo.php">CONSULTA DE ESTADOS </a></li>
             <li><a href="../vista/Reporte_General_Estado_promo.php">CONSULTA NACIONAL </a></li>           
             <li><a href="../vista/Reportes_Programa_promo.php">REPORTES POR PROGRAMAS </a></li>
             <li><a href="../vista/Reportes_General_Programa_promo.php">REPORTES GENERAL POR PROGRAMAS </a></li>
           
         
 
         </ul>
    </li>
    <li><a href="#">REPORTES ESPECIFICO </a>
        <ul>
             <li><a href="../vista/Reporte_Discapacidad_promo.php">DISCAPACIDAD </a></li>
             <li><a href="../vista/Repore_Etnia_promo.php">PUEBLOS INDIGENAS </a></li>
             <li><a href="../vista/reporte_Escolarizado_promo.php">ESCOLARIZADO </a></li>
              <li><a href="../vista/buscar_familiares_promo.php">FAMILIAR </a></li>
             
         
 </li>
         
             
         
 
         </ul>
    
    <li><a href="../recursos/pdfs/manual_de_usuario.pdf" download="Manual de Usuario">AYUDA </a></li>
    <li><a href="../vista/confirmar_salida.php">SALIR </a></li>
</ul></br></br>

</div>
</center>


  
</head>

<body><form action="../vista/ficheroExcel.php" method="post" target="_blank"  style="margin-top: -2%" id="FormularioExportacion">
<p  style="margin-left: 56%"  ><B>Exportar a Excel</B>  <img src="../vista/export_to_excel.gif" class="botonExcel" /></p>
<input type="hidden" id="datos_a_enviar" name="datos_a_enviar" />
</form>

  <table  style="margin-left: 0%" width="100%" border="1" cellpadding="15" cellspacing="0" bordercolor="#666666" id="Exportar_a_Excel" style="border-collapse:collapse;"><center>
   <div>
    <tr id="fijoog"><td colspan="15"><h2><p style="color: #01DFD7; font-size: 150%; margin: 0px; " >Reporte por Etnia</p></h2></td></tr>
    </div>
    <div>
<tr bgcolor="#088A29"> 
  <td  style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;">Nº</td>
  <td  style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;">Código del Nna</td>
  <td  style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;">Nacionalidad</td>
  <td  style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;">Cedula</td> 
  <td  style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;">Nombre</td>
  <td  style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;">Apellido</td>
  <td  style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;">Fecha de nacimiento</td>
  <td  style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;">Edad </td>
  <td  style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;">Sexo</td>
  <td  style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;">Estado Civil</td>
  <td  style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;">Telefono</td>
  <td  style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;">Grupo Etnico</td>
  <td  style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;">Estatus</td>
  <td  style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;">Registrado por</td>
  <td  style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;">Cedula</td>  
</tr>
 </div>   

<?php
$i=1;
  while($consulta=pg_fetch_assoc($consul_general)) {
     
    ?><tr id="selec">
            <td style="padding: 15px;"><?php echo "$i"." "; ?> </td>
            <td  style="padding: 15px;"> <?php   echo $consulta['codigo'];?>  </td>
            <td  style="padding: 15px;"><?php echo $consulta['nacionalidad']; ?></td>
            <td  style="padding: 15px;"><?php echo $consulta['cedula']; ?></td>    
            <td  style="padding: 15px;"> <?php echo $consulta['primer_nombre']; ?> </td>   
            <td  style="padding: 15px;"><?php echo $consulta['primer_apellido']; ?> </td>
            <td  style="padding: 15px;"><?php  echo $consulta['fecha_naci']; ?></td>
            <td  style="padding: 15px;"><?php echo $consulta['edad'];?> </td>
            <td  style="padding: 15px;"><?php  echo $consulta['sexo']; ?> </td>
            <td  style="padding: 15px;"><?php echo $consulta['estado_civil']; ?> </td>
            <td  style="padding: 15px;"><?php echo $consulta['telefono']; ?> </td>
            <td  style="padding: 15px;"><?php  echo $consulta['rasgos_etnicos']; ?> </td>           
            <td  style="padding: 15px;"><?php echo $consulta['estatus'];?> </td>
            <td  style="padding: 15px;"><?php echo $consulta['promotor']; ?> </td>
            <td  style="padding: 15px;"><?php echo $consulta['cedulapromotor']."\n"; ?> </td> 
    </tr>
                 
    <?php
          $i++;        
        }
          


?>

<h1></h1>
</center>

</table>
<div  id="footer2" style="margin-top:115%;">

<footer style=" margin: 0px; padding: 0px; position: absolute;margin-top: 1%; background-color: #999; height: 60px; width: 100%;"> 
  <address style="margin-left: 0%;"> <font color="white">
    <center></b> Intranet Idena - Copyletf2015 Instituto Anonimo Consejo Nacional de Derechos de Niñas, Niños y Adolescentes &copy; <br>
  Todos los derechos reservados &copy; </b>
    </center>
                              </font> <br> 
  </address> 
</footer>
</div>
</body>
</html>

