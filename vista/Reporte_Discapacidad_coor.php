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
	<link rel="stylesheet" type="text/css" href="../recursos/css/idena3.css">
   <script type="text/javascript" src="../recursos/js/jquery.js"></script>
  <link rel="stylesheet" type="text/css" href="../recursos/css/idena4.css">
  <link rel="stylesheet" type="text/css" href="../recursos/css/prueba.css" >
  <link rel="stylesheet" type="text/css" href="../recursos/css/buscador.css" >
  <link rel="stylesheet" type="text/css" href="../recursos/css/reloj.css">
  <link rel="stylesheet" type="text/css" href="../recursos/css/menu.css" >
   <script type="text/javascript" src="../recursos/js/reloj.js"></script>
  <link rel="stylesheet" href="../recursos/css/estilos.ccs">
  <link rel="shortcut icon" type="image/x-icon" href="../recursos/imagenes/favicon.ico">    <!icono de DUINNA en la pestaña (tittle)>


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
<style type="text/css">
.botonExcel{cursor:pointer;}
</style>

<div style="color: #0489B1; font-size: 1.1em; "><b style="margin-left: 4%; "><script> document.write(new Date())</script></b></div> <!muestra la fecha y la hora>
<div style="position: relative;margin-top: -1.2%; margin-left: 75%; color: #04B404; font-size: 18px;"> <p  " class="nombreUsuario"  ><B>Bienvenid@ <?php echo $_SESSION['username'];?> &nbsp;<?php    
 echo$_SESSION['apellido']?></B></p></div>
  



</head>
<body>
	<header>
    <center>
    	<head><img align="center" src="piedepagina.jpg" width="1330" height="80"> <img src="DUINNA.jpg" style="width: 50%;
    height: 189px;"></head></head>













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


<P style="background-color:lightgrey" align="center"><b>Data única de incorporación de niños, niñas y adolescentes</b></p>
      
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




<body>
  <br>  <br>                                            <!reloj>

  <div class='container'>
 <center> <div id="reloj">IDENNA</div></center> 
  <script src="js/jquery.js"></script>



 
  <script>
      $( document ).ready(function(){
       
      //Evento que actualiza el reloj cada un segundo           //reloj
      setInterval(actualizarReloj,1000);
     
      //Función para actualizar el reloj
      function actualizarReloj(){
        fechaActual = new Date();
        hora = fechaActual.getHours()                       //reloj
        minuto = fechaActual.getMinutes()
        segundo = fechaActual.getSeconds()
       
        $('#reloj').text(hora + ':' + minuto + ':' + segundo);
      }
       
      //Actualizamos al iniciar la página
      actualizarReloj();
    });
 
  </script>


</body>













<body>

<div style="margin-top:12em;">
<h1><center><p style="color: #01A9DB;">Reporte por Discapacidad</p></center></h1>

</div>

<div style="margin-top: 0em;">
<center>
<form action="../controlador/con_reporte_dis.php" method="post">
<select style="padding: 0.3%; width: 20%;  margin: 5px; margin-left: 0%; " name="estado" id= "estado" required="complete este campo" required="complete este campo">

      <option value="" required="complete este campo">Seleccione Estado </option>
      <option value="amazonas" required="complete este campo">Amazonas </option>
      <option value="anzoategui" required="complete este campo">Anzoátegui </option>
      <option value="apure" required="complete este campo">Apure </option>
      <option value="aragua" required="complete este campo">Aragua </option>
      <option value="barinas" required="complete este campo">Barinas </option>
      <option value="bolivar" required="complete este campo">Bolívar </option>
      <option value="carabobo" required="complete este campo">Carabobo </option>
      <option value="cojedes" required="complete este campo">Cojedes </option>
      <option value="delta amacuro" required="complete este campo">Delta Amacuro </option>
      <option value="distrito capital" required="complete este campo">Distrito Capital </option>
      <option value="falcon" required="complete este campo">Falcón </option>
      <option value="guarico" required="complete este campo">Guárico </option>
      <option value="lara" required="complete este campo">Lara </option>
      <option value="merida" required="complete este campo">Mérida </option>
      <option value="miranda" required="complete este campo">Miranda </option>
      <option value="monagas" required="complete este campo">Monagas </option>
      <option value="nueva esparta" required="complete este campo">Nueva Esparta </option>
      <option value="portuguesa" required="complete este campo">Portuguesa </option>
      <option value="sucre" required="complete este campo">Sucre </option>
      <option value="tachira" required="complete este campo">Táchira </option>
      <option value="trujillo" required="complete este campo">Trujillo </option>
      <option value="vargas" required="complete este campo">Vargas </option>
      <option value="yaracuy" required="complete este campo">Yaracuy </option>
      <option value="zulia" required="complete este campo">Zulia </option>
      </select> 



<br>

       <div style="  margin: 3px;padding: 0px; width: 100%; margin-left: 0%; width:100%; ">
         
                <select name="Programa" id="usuario"  style=" padding: 0.3%; width: 20%;  margin: 5px; margin-left: 0%; ">
                        <option value="" required="complete este campo"> Seleccione Programas</option>
                        <option value="Centro Comunitario de Protección Integral" required="complete este campo">Centro Comunitario de Protección Integral </option>
                        <option value="Semillero de la Patria Simón Bolívar" required="complete este campo">Semillero de la Patria Simón Bolívar </option>
                        <option value="Programa Nacional de Lectura Sombrero de la Ñ" required="complete este campo">Programa Nacional de Lectura Sombrero de la Ñ </option>
                        <option value="PROVINNA" required="complete este campo">Provinna </option>
                        <option value="BRIGADA DE FORMACIÓN EN COMUNICACIÓN POPULAR DE NNA" required="complete este campo">Brigada de Formación en Comunicación Popular de NNA </option>
                </select>
        </div>
        <br>


<div style="  margin-top: 2%; width:50%; margin-left: 0%; ">
        <div style=" margin: 0px;  margin-top: 2%; width:50%; margin-right:  50%; ">
                
                        <font style=" margin-right:  19%; color: #04B431; " size="4"><b>Desde</b></font>
                        <input style="margin-left: 0%" size="40" type="date" name="desde"  onblur="edad(this.value)"  step="1" min="1900-01-01" ">
                          </div>
                          <div style=" margin-top: -2.8%; width:50%; margin-left: 50%;  ">
                        <font style="margin-left: 0%; color: #04B431; " size="4"><b>Hasta</b> </font>
                        <input style="margin-left: 20%" size="40" type="date" name="hasta"  onblur="edad(this.value)"  step="1" min="1900-01-01" >

        </div>

<input class='btn btn-lg btn-primary btn-block btn-signin' style=" margin-top: 4%" size="40" type="submit" name="RealizarReporte" value="Realizar reporte">   <!REALIZAR REPORTE>
</form>
</center>
</div>



<div  id="footer2" style="margin-top: 25%;">

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