<?php
 session_start();

 include('../controlador/validar_sessiones.php');
 verificar_session();


?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <title>INHABILITAR</title>
   
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
   <link rel="shortcut icon" type="image/x-icon" href="../recursos/imagenes/favicon.ico">    <!icono de DUINNA en la pestaña (tittle)>


<script src="jquery-1.4.2.minjs"></script>
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


<P style="background-color:lightgrey; width: 100%;" align="center"><b>Data única de incorporación de niños, niñas y adolescentes</b></p>
    </center>
</body>
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
<html>
<div style="">
      <div style="">
            <h1 style="color: #2ECCFA; margin-left: 38%;font-size: 3em; margin-top:1.5%; ">Inhabilitar NNA</h1>
      </div>
      <div style= "margin-top: 0%; margin: 0%; padding: 0%; ">
          <section class="webdesigntuts-workshop">
        
             <form style="margin-left: 39%; "  id="searchform" action="../controlador/con_gestionar_nna.php" method="POST">      
                <input type="search" name="NNA" placeholder="Buscar NNA..." required="complete este campo" >         <!buscador>
                <button>Buscar</button>
             </form>
          </section>
     </div>
  
</div>
</body>
<div  id="footer2" style="margin-top: 20%;">

<footer style=" margin: 0px; padding: 0px; position: absolute;margin-top: 1%; background-color: #999; height: 60px; width: 100%;"> 
  <address style="margin-left: 0%;"> <font color="white">
    <center></b> Intranet Idena - Copyletf2015 Instituto Anonimo Consejo Nacional de Derechos de Niñas, Niños y Adolescentes &copy; <br>
  Todos los derechos reservados &copy; </b>
    </center>
                              </font> <br> 
  </address> 
</footer>
</div>
</html>









