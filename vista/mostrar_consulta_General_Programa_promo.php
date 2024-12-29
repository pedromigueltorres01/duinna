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
  <script type="text/javascript" src="../recursos/js/jquery.js"></script>
  <link rel="stylesheet" type="text/css" href="../recursos/css/idena3.css" >
  <link rel="stylesheet" type="text/css" href="../recursos/css/tablas.css">
  <link rel="stylesheet" type="text/css" href="../recursos/css/buscador.css" >
  <link rel="stylesheet" type="text/css" href="../recursos/css/prueba.css" >
  <link rel="stylesheet" type="text/css" href="../recursos/css/menu.css">
     <script type="text/javascript" src="../recursos/js/jquery-1.3.2.min.js"></script>
        <link rel="shortcut icon" type="image/x-icon" href="../recursos/imagenes/favicon.ico">    <!icono de DUINNA en la pestaña (tittle)>
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


</center></header>

  
</head>

<body><body><form action="../vista/ficheroExcel.php" method="post" target="_blank"  style="margin-top: -2.5em" id="FormularioExportacion">
<p  style="margin-left: 73em;"  ><B>Exportar a Excel</B>  <img src="../vista/export_to_excel.gif" class="botonExcel" /></p>
<input type="hidden" id="datos_a_enviar" name="datos_a_enviar" />
</form>

  <table  style="margin-left: 0%" width="100%" border="1" cellpadding="33" cellspacing="0" bordercolor="#666666" id="Exportar_a_Excel" style="border-collapse:collapse;"><center>
    <tr>
      <td colspan="34" style="color: #01DFD7; font-size: 150%; margin: 0px; padding: 10px;"><h2><p> Reporte por Estado </p></h2></td>
    </tr>
<tr bgcolor="#913B3B"> 
         <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;"><b>Nº</b></td>
        <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;"><b>Código del Nna</b></td>
        <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;"><b>Nacionalidad</b></td>
        <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;"><b>Cédula</b></td> 
        <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;"><b>Nombre</b></td>
        <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;"><b>Apellido</b></td>
        <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;"><b>Fecha de nacimiento</b></td>
        <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;"><b>Edad</b></td>
        <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;"><b>Sexo</b></td>
        <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;"><b>Estado civil</b></td>  
        <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;"><b>Teléfono</b></td>
        <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;"><b>Correo</b></td>
        <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;"><b>Trabajo</b></td> 
        <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;"><b>Estado</b></td>
        <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;"><b>Municipio</b></td>
        <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;"><b>Parroquia</b></td>
        <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;"><b>Dirección</b></td>
        <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;"><b>Programa</b></td>
        <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;"><b>Fecha de incorporación</b></td>
        <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;"><b>Nombre del CCPI Grupo o Brigada</b></td>
        <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;"><b>Lugar de funcionamiento</b></td>
        <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;"><b>Discapacidad</b></td>
        <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;"><b>Enfermadad</b></td>
        <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;"><b>Rasgos Etnicos</b></td>
        <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;"><b>Rasgos afroamericanos</b></td>
        <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;"><b>Actividades extra currilares</b></td>
        <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;"><b>Escolarizado</b></td>
        <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;"><b>Sabe leer</b></td>
        <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;"><b>Institución</b></td>
        <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;"><b>Ultimo grado aprobado</b></td>
        <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;"><b>Turno</b></td>
        <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;"><b>Nivel ducativo</b></td>
        <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;"><b>Estatus</b></td>  
</tr>
   
<?php
$i=1; 

  while($consulta=pg_fetch_array($consul)) {
  ?><tr id="selec">
    <td style="padding: 10px;"><?php echo "$i"." "; ?></td>
    <td style="padding: 10px;"><?php echo $consulta['codigo']; ?> </td>
    <td style="padding: 10px;"><?php echo $consulta['nacionalidad']; ?> </td>
    <td style="padding: 10px;"><?php echo $consulta['cedula']; ?> </td>
    <td style="padding: 10px;"><?php echo $consulta['primer_nombre']; ?></td>
    <td style="padding: 10px;"><?php echo $consulta['primer_apellido']; ?></td>
    <td style="padding: 10px;"><?php echo $consulta['fecha_naci']; ?></td>
    <td style="padding: 10px;"><?php echo $consulta['edad']; ?></td>
    <td style="padding: 10px;"><?php echo $consulta['sexo']; ?></td>
    <td style="padding: 10px;"><?php echo $consulta['estado_civil']; ?></td>
    <td style="padding: 10px;"><?php echo $consulta['telefono']; ?></td>
    <td style="padding: 10px;"><?php echo $consulta['correo']; ?></td>
    <td style="padding: 10px;"><?php echo $consulta['indique_trabajo']; ?></td>
    <td style="padding: 10px;"><?php echo $consulta['estado']; ?></td>
    <td style="padding: 10px;"><?php echo $consulta['municipio']; ?></td>
    <td style="padding: 10px;"><?php echo $consulta['parroquia']; ?></td>
    <td style="padding: 10px;"><?php echo $consulta['direccion_sector']; ?></td>
    <td style="padding: 10px;"><?php echo $consulta['asignar_programa']; ?></td>
    <td style="padding: 10px;"><?php echo $consulta['fecha_incorporacion']; ?></td>
    <td style="padding: 10px;"><?php echo $consulta['nombre_ccpi_grupo_codigo']; ?></td>
    <td style="padding: 10px;"><?php echo $consulta['lugar_funcionamiento']; ?></td>
    <td style="padding: 10px;"><?php echo $consulta['induque_discapacidad']; ?></td>
    <td style="padding: 10px;"><?php echo $consulta['indique_enfermedad']; ?></td>
    <td style="padding: 10px;"><?php echo $consulta['rasgos_etnicos']; ?></td>
    <td style="padding: 10px;"><?php echo $consulta['rasgos_afroamericanos']; ?></td>
    <td style="padding: 10px;"><?php echo $consulta['indique_deport']; ?></td>
    <td style="padding: 10px;"><?php echo $consulta['escolarizado']; ?></td>
    <td style="padding: 10px;"><?php echo $consulta['sabe_leer']; ?></td>
    <td style="padding: 10px;"><?php echo $consulta['institucion']; ?></td>
    <td style="padding: 10px;"><?php echo $consulta['ultimo_grado_apro']; ?></td>
    <td style="padding: 10px;"><?php echo $consulta['turno']; ?></td>
    <td style="padding: 10px;"><?php echo $consulta['nivel_educativo']; ?></td>
    <td style="padding: 10px;"><?php echo $consulta['estatus']."<br>";$i++; ?></td>
  </tr>
  


  <?php
}

?>

</center>

</table>
<br><br><br><br><br><br>
</html>


