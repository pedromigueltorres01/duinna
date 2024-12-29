<?php
 session_start();

 include('../controlador/validar_sessiones.php');
 verificar_session();
 
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Reporte por NNA</title>
  <link rel="stylesheet" type="text/css" href="idena3.css">
  <link rel="stylesheet" type="text/css" href="../recursos/css/idena4.css" >
  <script type="text/javascript" src="../recursos/js/jquery.js"></script>
  <link rel="stylesheet" type="text/css" href="../recursos/css/idena3.css" >
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





</head>
<body>
  <header>
    <div style="color: #0489B1; font-size: 1.1em;"><b><script> document.write(new Date())</script></b></div> <!muestra la fecha y la hora>

<div style="position: relative;margin-top: -1%; margin-left: 80%; color: #04B404; font-size: 18px;"> <p  " class="nombreUsuario"  ><B>Bienvenid@ <?php echo $_SESSION['username'];?> &nbsp;<?php    
 echo$_SESSION['apellido']?></B></p></div>
    <center>
      <head><img align="center" src="../vista/piedepagina.jpg" width="1330" height="80">
       <img src="../vista/DUINNA.jpg" style="width: 50%;
    height: 189px;"></head>


  





</body>


<head>
<html>
<section class="webdesigntuts-workshop">
  <form style= "margin-right: -77%; margin-top: -5%" id="searchform" action="../controlador/buscar_usuario.php" method="POST">        
    <input type="search" name="usuario" placeholder="Buscar NNA..." required="complete este campo">         <!buscador>
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


</center></header>

  
</head>

<body>
       <table  style="margin-left: 0%" width="100%" border="1" cellpadding="29" cellspacing="0" bordercolor="#666666" id="Exportar_a_Excel" style="border-collapse:collapse;">
                    <tr><td colspan="29" style="color:#04B4AE; margin: 1px;"><h2>Consulta Específica</h2></td>
                    </tr>
                  <tr  bgcolor="#913B3B"> 
                    <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Código </td> 
                    <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Nacionalidad </td>
                    <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Cédula </td>
                    <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Nombre </td>
                    <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Apellido </td>
                    <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Fecha de Nacimiento </td>
                    <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Edad en la que ingresó al programa </td>
                    <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;"> Sexo </td>
                    <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;"> Estado civil </td>
                    <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Telefono </td>
                    <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Correo </td>
                    <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Trabajo </td>
                    <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Estado </td>
                    <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Municipio </td>
                    <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;"> Parroquia </td>
                    <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Dirección </td>
                    <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Programa </td>
                    <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Fecha de incorporación </td>
                    <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Nombre del Ccpi/Código/Grupo </td>
                    <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Lugar de funcionamiemto </td>
                    <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Escolarizado </td>
                    <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Sabe leer </td>
                    <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Institución </td>
                    <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Útimo grado aprobado </td>
                    <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Turno </td>
                    <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Nivel educativo </td>
                    <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Estatus </td>  
                    <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Registrado por</td>
                    <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Cedula</td>
                    <tr>

                     <?php  $bus_nna=$_SESSION['bus_nna']; ?>
                     <td style="padding: 15px;"><?php echo $bus_nna["0"] ; ?></td> 
                     <td style="padding: 15px;"><?php echo $bus_nna["1"]." &nbsp; "; ?></td>
                     <td style="padding: 15px;"><?php echo $bus_nna["2"]; ?></td>
                     <td style="padding: 15px;"><?php echo $bus_nna["3"]; ?> </td>
                     <td style="padding: 15px;"><?php echo $bus_nna["4"]; ?> </td>
                     <td style="padding: 15px;"><?php echo $bus_nna["5"]; ?></td>
                     <td style="padding: 15px;"><?php echo $bus_nna["6"]; ?></td>
                     <td style="padding: 15px;"><?php echo $bus_nna["7"]; ?></td>
                     <td style="padding: 15px;"><?php echo $bus_nna["8"]; ?></td>
                     <td style="padding: 15px;"><?php echo $bus_nna["9"]; ?></td>
                     <td style="padding: 15px;"><?php echo $bus_nna["10"]; ?></td>
                     <td style="padding: 15px;"><?php echo $bus_nna["11"]; ?></td>
                     <td style="padding: 15px;"><?php echo $bus_nna["12"]; ?></td>
                     <td style="padding: 15px;"><?php echo $bus_nna["13"]; ?></td>
                     <td style="padding: 15px;"><?php echo $bus_nna["14"]; ?></td>
                     <td style="padding: 15px;"><?php echo $bus_nna["15"]; ?></td>
                     <td style="padding: 15px;"><?php echo $bus_nna["16"]; ?></td>
                     <td style="padding: 15px;"><?php echo $bus_nna["17"]; ?></td>
                     <td style="padding: 15px;"><?php echo $bus_nna["18"]; ?></td>
                     <td style="padding: 15px;"><?php echo $bus_nna["19"]; ?></td>
                     <td style="padding: 15px;"><?php echo $bus_nna["20"]; ?></td>
                     <td style="padding: 15px;"><?php echo $bus_nna["21"]; ?></td>
                     <td style="padding: 15px;"><?php echo $bus_nna["22"]; ?></td>
                     <td style="padding: 15px;"><?php echo $bus_nna["23"]; ?></td>
                     <td style="padding: 15px;"><?php echo $bus_nna["24"]; ?></td>
                     <td style="padding: 15px;"><?php echo $bus_nna["25"]; ?></td>
                     <td style="padding: 15px;"><?php echo $bus_nna["26"]."\n"; ?></td>
                     <td style="padding: 15px;"><?php echo $bus_nna["27"]; ?></td>
                     <td style="padding: 15px;"><?php echo $bus_nna["28"]."\n"; ?></td>
                         <?php  //$_SESSION['bus_nna']="";?>




                   
                    </tr>
</table>
        <div style="margin-top: 0em;width:  #2E9AFE;  ">
            <form action="../vista/MODIFICAR_DATOS_coor_NNA.php" method="post">
                      <input class='btn btn-lg btn-primary btn-block btn-signin' style="margin-left: 30px; margin-top: 4%; margin-left: 40em;" size="40" type="submit" name="modificarNna" value="Modificar Ubicación">   
            </form>
        </div>
        <div style="position: relative; margin-top: -2.8em;width: 10%;  margin-left: 45em;">
            <form action="../vista/modificar_coor_programa.php" method="post">
                      <input class='btn btn-lg btn-primary btn-block btn-signin' style="margin-left: 30px; margin-top: 4%" size="40" type="submit" name="ModificarNna" value="Modificar Programa">   
            </form>
        </div>
        <div style="margin-top: 3em; margin-top: -2.8em; width: 10%; margin-left: 60em;">
            <form action="../vista/ingresar_cedula_coor.php" method="post">
                      <input class='btn btn-lg btn-primary btn-block btn-signin' style="margin-left: 30px; margin-top: 4%" size="40" type="submit" name="ModificarNna" value="Modificar Asignar Cédula">  
            </form>
        </div>
        <div style="margin-top: 3em; margin-top: -2.8em; width: 10%; margin-left: 80em;">
            <form action="../vista/modificar_datoEducativos_coor.php" method="post">
                      <input class='btn btn-lg btn-primary btn-block btn-signin' style="margin-left: 30px; margin-top: 4%" size="40" type="submit" name="ModificarNna" value="Modificar Datos Educativos">   
            </form>
</div>



  

</body>
</html>
    
    
</body>
