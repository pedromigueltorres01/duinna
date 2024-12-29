<?php
 session_start();

 include('../controlador/validar_sessiones.php');
 verificar_session();
 
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>DUINNA</title>
  <script type="text/javascript" src="../recursos/js/jquery.js"></script>
  <link rel="stylesheet" type="text/css" href="../recursos/css/idena3.css" >
  <link rel="stylesheet" type="text/css" href="../recursos/css/buscador.css" >
  <link rel="stylesheet" type="text/css" href="../recursos/css/prueba.css" >
  <link rel="stylesheet" type="text/css" href="../recursos/css/menu.css">
  <link rel="stylesheet" type="text/css" href="../recursos/css/tablas.css">
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




<div style="color: #0489B1; font-size: 1.1em;"><b><script> document.write(new Date())</script></b></div> <!muestra la fecha y la hora>

<div style="position: relative;margin-top: -1%; margin-left: 80%; color: #04B404; font-size: 18px;"> <p  " class="nombreUsuario"  ><B>Bienvenid@ <?php echo $_SESSION['username'];?> &nbsp;<?php    
 echo$_SESSION['apellido']?></B></p></div>

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


</center>



</header>

  
</head>

<body><form action="../vista/ficheroExcel.php" method="post" target="_blank"  style="margin-top: -2%;" id="FormularioExportacion" id="exportar">
<p  style="margin-left: 61%;"><B> Exportar a Excel </B>  <img id="exportar" src="../vista/export_to_excel.gif" class="botonExcel" /></p>
<input type="hidden" id="datos_a_enviar" name="datos_a_enviar" />
</form>

  <table  style="margin-left: 0%;" width="100%" border="1" cellpadding="34" cellspacing="0" bordercolor="#2E2E2E" id="Exportar_a_Excel" style="border-collapse:collapse; margin: 0px; padding: 30px;">
        <tr>                
                              <td colspan="34"><h2><p style="color: #01DFD7; font-size: 150%; margin: 0px; f; " ba>DUINNA </p></h2></td>
        </tr> 
        
        <tr bgcolor="#913B3B" id="fija" > 
                          <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;"><b>Nº</b></td>
                          <td style="color: white; font-family: arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;"><b>Código del NNA </b></td>
                          <td style="color: white;  font-family:arial, Times New Roman, helvetica;font-size: 75%; padding: 15px;"><b>Estado</b></td>
                          <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;"><b>Municipio </b></td>
                          <td style="color: white; font-family:  arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;"><b>Parroquia</b></td>
                          <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;"><b>Asignar Programa</b></td>
                          <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;"><b>Fecha de Incorporación</b></td>
                          <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;"><b>Nombre del CCPI Grupo, Código o Brigada</b></td>
                          <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;"><b>Nacionalidad</b></td>
                          <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;"><b>Nº Cédula o Pasaperte</b></td>
                          <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;"><b>Nombre</b></td>
                          <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;"><b>Apellido</b></td>
                          <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;"><b>Fecha de nacimiento </b></td>
                          <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;"><b>Edad</b></td>
                          <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;"><b>Sexo</b></td>
                          <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;"><b>¿Está Escolarizado?</b></td>
                          <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;"><b>Nivel Educativo</b></td>
                          <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;"><b>Turno</b></td>
                          <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;"><b>¿Pertenece a alguna etnia indígena? De ser afirmativo indique a cuál.</b></td>
                          <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;"><b>¿Posee rasgos y color de piel netamente afrodescendientes?</b></td>
                          <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;"><b>¿Padece alguna discapacidad? De ser afirmativo indique cuál</b></td>
                          <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;"><b>¿Sufre de alguna enfermedad? De ser afirmativo indique cuál.</b></td>
                          <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;"><b>¿Trabaja?De ser afirmativo indique en qué.</b></td>
                          <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;"><b>Practica o tiene algún interés en: el deporte, la cultura, la ecología o la ciencia. Especificar respuesta.</b></td>
                          <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px  "><b>Estatus del NNA</b></td>
                          <td bgcolor="#013ADF" style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;" ><b>Nombres del Representante</b></td>
                          <td bgcolor="#013ADF" style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 70%; padding: 15px;" ><b>Apellido del Representante</b></td>
                          <td bgcolor="#013ADF" style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;" ><b>Parentesco</b></td>
                          <td bgcolor="#013ADF" style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;" ><b>Nacionalidad</b></td>
                          <td bgcolor="#013ADF" style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;" ><b>Nº Cédula o pasaporte</b></td>
                          <td bgcolor="#013ADF" style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;"><b>Nº Teléfono</b></td>
                          <td bgcolor="#013ADF" style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;"><b>Correo electrónico</b></td>
                          <td bgcolor="#013ADF" style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 75%; padding: 15px;"><b>Trabaja Actualmente</b></td>
                        
                          
                          
                            
         </tr>
    

                  <?php
                  $i=1;
                  while($consulta=pg_fetch_array($consul_general)) {
                  ?>
                  <tr class="codigo" style=":hover:background: #610B21;" >
                           <td style="padding: 15px;"><?php echo "$i"." "; ?> </td>
                             
                            <td style="padding: 15px;"> <?php echo $consulta['0']." "; ?> </td>
                            <td style="padding: 15px;"><?php echo $consulta['1']." "; ?> </td>
                            <td style="padding: 15px;"><?php echo $consulta['2']." "; ?> </td>
                            <td style="padding: 15px;"><?php echo $consulta['3']." "; ?> </td>
                            <td style="padding: 15px;"><?php echo $consulta['5']." "; ?> </td>
                            <td style="padding: 15px;"><?php echo $consulta['6']." "; ?> </td>
                            <td style="padding: 15px;"><?php echo $consulta['7']." "; ?> </td>
                            <td style="padding: 15px;"><?php echo $consulta['8']." "; ?> </td>
                            <td style="padding: 15px;"><?php echo $consulta['9']." "; ?> </td>
                            <td style="padding: 15px;"><?php echo $consulta['10']." "; ?> </td>                          
                            <td style="padding: 15px;"><?php echo $consulta['11']." "; ?> </td>
                            <td style="padding: 15px;"><?php echo $consulta['12']." "; ?> </td>
                            <td style="padding: 15px;"><?php echo $consulta['13']." "; ?> </td>
                            <td style="padding: 15px;"><?php echo $consulta['14']." "; ?> </td>
                            <td style="padding: 15px;"><?php echo $consulta['15']." "; ?> </td>
                            <td style="padding: 15px;"><?php echo $consulta['16']." "; ?> </td>
                            <td style="padding: 15px;"><?php echo $consulta['17']." "; ?> </td>
                            <td style="padding: 15px;"><?php echo $consulta['18']." "; ?> </td>
                            <td style="padding: 15px;"><?php echo $consulta['19']." "; ?> </td>
                            <td style="padding: 15px;"><?php echo $consulta['20']." "; ?> </td>
                            <td style="padding: 15px;"><?php echo $consulta['21']." "; ?> </td>
                            <td style="padding: 15px;"><?php echo $consulta['22']." "; ?> </td>

                            <td style="padding: 15px;"><?php echo $consulta['23']." "; ?> </td>
                            <td style="padding: 15px;"><?php echo $consulta['24']." "; ?> </td>
                            
                            
                            <td style="padding: 15px;"><?php echo $consulta['25']." "; ?> </td>
                            
                            <td style="padding: 15px;"><?php echo $consulta['26']." "; ?> </td>
                            <td style="padding: 15px;"><?php echo $consulta['27']." "; ?> </td>
                            
                            
                            
                            
      
                            <td style="padding: 15px;"><?php echo $consulta['28']." "; ?> </td>
                            <td style="padding: 15px;"><?php echo $consulta['29']." "; ?> </td>
                              <td style="padding: 15px;"><?php echo $consulta['30']." "; ?> </td>
                               <td style="padding: 15px;"><?php echo $consulta['31']." "; ?> </td>
                            <td style="padding: 15px;"><?php echo $consulta['32']." "."<br>"; $i++; ?></td>
                           
                         
                            
                  </tr>
    


    <?php
  }

  ?>



</table>
<br><br><br><br><br><br>
</body>
</html>


