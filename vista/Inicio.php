<?php
 session_start();

 include('../controlador/validar_sessiones.php');
 verificar_session();
 
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Inicio</title>
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

 <style type="text/css">
     .buscar{
      background-image:url(vista/imagenes/16x16/img_bus.png);
     }
   </style>
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



  




      <P style="background-color:lightgrey; width: 100%;" align="center"><b>Data Única de Incorporación de Niños, Niñas y Adolescentes</b></p>






<!RELOJ EN EL TITTLE PRUEBA(preguntar al gusto)>
<!RELOJ EN EL TITTLE PRUEBA(preguntar al gusto)>
<!RELOJ EN EL TITTLE PRUEBA(preguntar al gusto)>
<!RELOJ EN EL TITTLE PRUEBA(preguntar al gusto)>

<!RELOJ EN EL TITTLE PRUEBA(preguntar al gusto)>




<script language="JavaScript" type="text/javascript">
    function doTheClock() {
       window.setTimeout( "doTheClock()", 1000 );
       var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
       var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");

       t = new Date();
       
       if(document.all || document.getElementById){
          document.title = diasSemana[t.getDay()] + ", " + t.getDate() + " de " + meses[t.getMonth()] + " del " + t.getFullYear() + ' ' + t.getHours()+':'+t.getMinutes()+':'+t.getSeconds();
       }else{   
          self.status = diasSemana[t.getDay()] + ", " + t.getDate() + " de " + meses[t.getMonth()] + " del " + t.getFullYear() + ' ' + t.getHours()+':'+t.getMinutes()+':'+t.getSeconds();
       }
    }

    doTheClock()
</script>

<!RELOJ EN EL TITTLE PRUEBA(preguntar al gusto)>
<!RELOJ EN EL TITTLE PRUEBA(preguntar al gusto)>
<!RELOJ EN EL TITTLE PRUEBA(preguntar al gusto)>
<!RELOJ EN EL TITTLE PRUEBA(preguntar al gusto)>

















  
    
<div style="margin: 1%;" class="p">
  <ul class="menu">
                <li><a href="../vista/preguntadecedulapadre.php">REGISTRO NNA </a></li> 
                <li><a href="#">GESTIONAR NNA </a>
          <ul>
               <li><a href="../vista/inhabilitar_nna.php">INHABILITAR NNA </a></li>
               <li><a href="../vista/habilitar_nna.php">HABILITAR NNA </a></li>
               <li><a href="../vista/modifica_nna.php">MODIFICAR DATOS DEL NNA </a></li>
   
           </ul>
              <li><a href="#">REPORTES </a>
          <ul>
               <li><a href="../vista/Reportes_Estado.php">CONSULTAR DUINNA MENSUAL</a></li>
               <li><a href="../vista/Reporte_General_Estado.php">CONSULTAR DUINNA NACIONAL </a></li>
               
               <li><a href="../vista/Reportes_Programa.php">REPORTES POR PROGRAMAS </a></li>
               <li><a href="../vista/Reportes_General_Programa.php">REPORTES GENERAL POR PROGRAMAS </a></li>
             
           
   
           </ul>
                </li>
                <li><a href="#">REPORTES ESPECIFICO </a>
          <ul>
               <li><a href="../vista/Reporte_Discapacidad.php">DISCAPACIDAD </a></li>
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
                 <li><a href="../vista/cambiar_estatus_usuario.php">ELIMINAR USUARIO </a></li>
                   <li><a href="../vista/consulta_de_usuarios_inactivos.php">COSULTAR USUARIOS ELIMINADOS </a></li>
                     <li><a href="../vista/activar_recuperar_usurios.php">RECUPERAR USUARIOS ELIMINADOS </a></li>
                       

               
           
   
           </ul>
      
      <li><a href="../recursos/pdfs/manual_de_usuario.pdf" download="Manual de Usuario">AYUDA </a></li>
      <li><a href="../vista/confirmar_salida.php">SALIR </a></li>
  </ul>


</div>













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

<h1 style= "font-size: 60px";>
<svg viewBox="-18 140 1368 327">

  <!-- Symbol -->
 <!--<symbol id="s-text">
    <text text-anchor="middle"
          x="50%" y="50%" dy=".35em">
      Bienvenido al Registro DUINNA
    </text>
  </symbol>  -->

  <!-- Duplicate symbols -->
  <use xlink:href="#s-text" class="text"
       ></use>
  <use xlink:href="#s-text" class="text"
       ></use>
  <use xlink:href="#s-text" class="text"
       ></use>
  <use xlink:href="#s-text" class="text"
       ></use>
  <use xlink:href="#s-text" class="text"
       ></use>

</svg></h1>


<!-- Inicio dinaamico,(imagenes en movimientos)-->
<!--
<div class="content-all">
      <div class="content-carrusel">
       <section> 
      <figure ><a href="../vista/centro_comunicacional_de_proteccion_integral.php"><img src="../recursos/imagenes/Diapositiva2.2.JPG" target="2" title="2"></figure></a>
      <figure ><a href="../vista/brigada_comunicacional.php"><img src="../recursos/imagenes/Diapositiva1.1.JPG"></a></figure>
      <figure ><a href="../vista/provinna.php"><img src="../recursos/imagenes/Diapositiva3.JPG"></a></figure>
      <figure ><a href="../vista/semillero.php"><img src="../recursos/imagenes/Diapositiva4(4).jpg"></a></figure>
      <figure ><a href="../vista/sombrerero_dela.php"><img src="../recursos/imagenes/Diapositiva5(5).jpg"></a></figure>
      </div>
      </div>
      
-->
      </section>












<div style="display: inline-block;" >
<center> 
<a href="../vista/centro_comunicacional_de_proteccion_integral.php">
<img style= " margin-top: -18em ;width:400px;height: 400px;" align="right" src="../recursos/imagenes/Diapositiva2.JPG" height="220"></a>
<!--
<a href="../vista/brigada_comunicacional.php">
<img style= "margin-right: 58em; margin-top: -16em" align="right" src="../recursos/imagenes/Diapositiva1.JPG" width="150" height="220"></a>

<a href="../vista/provinna.php">
<img style= "margin-right: 70em; margin-top: -17em" align="right" src="../recursos/imagenes/Diapositiva3.JPG" width="200" height="220" ></a>

<a href="../vista/semillero.php">
<img style= "margin-right: 46em; margin-top: -18em" align="right" src="../recursos/imagenes/Diapositiva4(4).jpg" width="150" height="220" ></a>

<a href="../vista/sombrerero_dela.php">
<img style= "margin-right: 30em; margin-top: -22em" align="right" src="../recursos/imagenes/Diapositiva5(5).jpg" width="150" height="280" ></a>-->
</center>
</div>

</div>






















<div  id="footer2" ">

<footer style=" background-color: #999; height: 20px; width: 96.9%;"> 
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



