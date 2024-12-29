<?php
 session_start();

 include('../controlador/validar_sessiones.php');
 verificar_session();
 
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Brigada</title>
  <!--<link rel="stylesheet" type="text/css" href="../recursos/css/idena3.css">-->
 <!-- <link rel="stylesheet" type="text/css" href="../recursos/css/stilo_brigadas.css">-->
  <link rel="stylesheet" type="text/css" href="../recursos/css/menu.css">
  <script type="text/javascript" src="../recursos/js/jquery.js"></script>
   <link rel="shortcut icon" type="image/x-icon" href="../recursos/imagenes/favicon.ico">    <!icono de DUINNA en la pestaña (tittle)>

  <!--<script type="text/javascript">

     alert('POR FAVOR COMPLETE TODO EL FORMULARIO');
  </script>-->
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
<div style="color: #0489B1; font-size: 1.1em; "><b style="margin-left: 4%; "><script> document.write(new Date())</script></b></div> <!muestra la fecha y la hora>

<div style="position: relative;margin-top: -1.2%; margin-left: 75%; color: #04B404; font-size: 18px;"> <p  " class="nombreUsuario"  ><B>Bienvenid@ <?php echo $_SESSION['username'];?> &nbsp;<?php    
 echo$_SESSION['apellido']?></B></p></div>



</head>
<body>
  <header>
    <center>
       <head><img align="center" src="../recursos/imagenes/piedepagina.jpg" width="1330" height="80">
       <img src="DUINNA.jpg" style="width: 50%;
    height: 189px;"></head>


<P style="background-color:lightgrey; width: 100%;" align="center"><b>Data única de incorporación de niños, niñas y adolescentes</b></p>
<center>
  <br>
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


</center>s

<div style="clear: both; ">
<img  style=" margin-top: 7%;  margin: 0%; padding: 0%;"  src="../recursos/imagenes/Diapositiva1.1.JPG" width="250" height="250" > 

</div>




<div class="contenido">
                   




              
<p style="margin-right: 100%; width: 100%;"><b >1.- ¿Qué son las brigadas comunicacionales?</b></br>

Somos un grupo de mujeres y hombres, articulados y organizados para la acción comunicacional. Las brigadas están integradas por organizaciones sociales, miembros de comunidades organizadas, facilitadores y facilitadoras de infocentro, quienes promueven la creación colectiva de mensajes revolucionarios operando desde el terrirorio de su comunidad Los y las brigadistas hacen de su práctica un proceso endógeno de formación emancipadora. En ellas se promueve la acción colectiva en el terreno mediático y comunicacional, donde cada sujeto u organización que se incorpora a la propuesta, aporta desde su referente y capacidades al proceso de producción y distribución de contenidos.

</p>


<b>2.- Cómo se organizan las brigadas: Articulación efectiva</b>
        <p>
          Esta perspectiva de trabajo pasa por la unión de fuerzas desde los haceres, teniendo como condición esencial el respeto y el reconocimiento del otro como           sujeto político con una historia común a la nuestra y por lo tanto con los mismos padecimientos que los nuestros, frente a los cuales nos organizamos para dar batalla, en este caso, en el terreno de la comunicación. Apostamos a la suma de esfuerzos e identidades para la dar batalla en la Guerra de 4ta Generación. A esta forma organiza
        </p>




<p><b> 3.- Metodología de producción de las brigadas</b>
</p>

<p>     1.-Nos organizarnos en equipos de producción alrededor de un territorio específico.</p>


<p>
        2.- Realizamos el diagnóstico comunicacional del equipo y de la comunidad: en este momento aplicamos los pasos del manual de comunicación popular Barrio Galaxia editado por el Centro Nueva Tierra de Argentina.</p>


<p>3.- Decidimos qué vamos a hacer: realización de una tormenta de ideas.</p>


<p>4.- Decidimos cómo lo vamos a hacer: revisión de géneros y formatos.</p>


<p>5.- Producción: definición de las responsabilidades de cada miembro del equipo.</p>



<p>6.- Postproducción con software libre.</p>


<p>7.- Planificamos una estrategia de distribución: nos apoyamos en la identificación que hicimos de los circuitos y espacios de la comunidad.</p>


 
<p>4.- Equipo de Acompañamiento y Contactos.</p>
       </div>
      
      
  

         
<body>
 
</body>
</br></br></br></br></br>
<footer id="footer2" style="background-color: #999"> <address style="margin-left: 30%;"> <font color="white"><center></b> Intranet Idena - Copyletf2015 Instituto Anonimo Consejo Nacional de Derechos de Niñas, Niños y Adolescentes &copy; <br>
  Todos los derechos reservados &copy; </b></font> <br> </address> </footer>
</html>


