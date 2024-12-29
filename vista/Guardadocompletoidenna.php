<?php
 session_start();

 include('../controlador/validar_sessiones.php');
 verificar_session();
 
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
   <title>Registro Guardado</title>
    <link rel="stylesheet" type="text/css" href="../recursos/css/idena3.css">
  <script type="text/javascript" src="../recursos/js/jquery.js"></script>
  <link rel="stylesheet" type="text/css" href="../recursos/css/idena4.css">
  <link rel="stylesheet" type="text/css" href="../recursos/css/buscador.css" >
  <link rel="stylesheet" type="text/css" href="../recursos/css/prueba.css" >
  <link rel="stylesheet" type="text/css" href="../recursos/css/estilosdenombredeusuario.css" >
    <link rel="stylesheet" type="text/css" href="../recursos/css/reloj.css">
    <link rel="shortcut icon" type="image/x-icon" href="../recursos/imagenes/favicon.ico">    <!icono de DUINNA en la pestaña (tittle)>
   <script type="text/javascript" src="../recursos/js/reloj.js"></script>
   <link rel="stylesheet" type="text/css" href="../recursos/css/estilo7.css">
   <link rel="stylesheet" type="text/css" href="../recursos/css/menu.css">
       <link rel="stylesheet" type="text/css" href="">

  

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
      <head><img align="center" src="../recursos/imagenes/piedepagina.jpg" width="1330" height="80">
       <img src="DUINNA.jpg" style="width: 50%;
    height: 189px;"></head>


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









      <P style="background-color:lightgrey" align="center"><b>Data única de incorporación de niños, niñas y adolescentes</b></p>

      
      
    </center>

  

    </center>
    
<center>
  <br>
  <div ">
<ul style="margin-left: 35%;" class="menu">
    
    <li><a href="../vista/preguntadecedulapadre.php">REGISTRO NNA </a></li>
     <li><a href="#">REPORTES </a>
        <ul>
             <li><a href="../vista/Reportes_Estado.php">CONSULTA DE ESTADOS </a></li>
             <li><a href="../vista/Reporte_General_Estado.php">CONSULTA NACIONAL </a></li>
             
             <li><a href="../vista/Reportes_Programa.php">REPORTES POR PROGRAMAS </a></li>
             <li><a href="../vista/Reportes_General_Programa.php">REPORTES GENERAL POR PROGRAMAS </a></li>
           
         
 
         </ul>
    </li>
    <li><a href="#">REPORTE ESPECIFICO </a>
        <ul>
             <li><a href="../vista/Reporte_Discapacidad.php">DISCAPACIDAD </a></li>
             <li><a href="../vista/Repore_Etnia.php">PUEBLOS INDIGENAS </a></li>
             <li><a href="../vista/Reporte_Escolarizado.php">ESCOLARIZADO </a></li>
              <li><a href="../vista/buscar_familiares.php">FAMILIAR </a></li>
             
         
 </li>
         </ul>

      
    
    <li><a href="../recursos/pdfs/manual_de_usuario.pdf" download="Manual de Usuario">AYUDA </a></li>
    <li><a href="../vista/confirmar_salida.php">SALIR </a></li>
</ul></br></br>


</center>

    </div>












<body>
  <br>  <br>                                            

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










<body>
</br>
<div>
<h2 style= "margin-left: 42%;font-size: 37px;margin-top: 9%;font-family:arial"><font color="red">Registro Completo</font></h2>

</div>
<div>

<form action="../controlador/validar_perfil.php" method="post">
<input class='btn btn-lg btn-primary btn-block btn-signin' style="margin-left: 48%; margin-top: 4%" size="40" type="submit" name="validar_perfil" value="Inicio">   <!ATRAS>
</form>
</div>

</body>
<br><br></br></br></br></br></br></br></br></br></br></br></br></br></br>
<footer id="footer2" style="background-color: #999"> <address style="margin-left: 30%;"> <font color="white"><center></b> Intranet Idena - Copyletf2015 Instituto Anonimo Consejo Nacional de Derechos de Niñas, Niños y Adolescentes &copy; <br>
  Todos los derechos reservados &copy; </b></font> <br> </address> </footer>



</body>
</html>


