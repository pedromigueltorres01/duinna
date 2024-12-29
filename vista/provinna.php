<?php
 session_start();

 include('../controlador/validar_sessiones.php');
 verificar_session();
 
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Consulta Especifica</title>
  <link rel="stylesheet" type="text/css" href="../recursos/css/idena3.css">
  <link rel="shortcut icon" type="image/x-icon" href="../recursos/imagenes/favicon.ico">    <!icono de DUINNA en la pestaña (tittle)>
  <script type="text/javascript" src="../recursos/js/jquery.js"></script>

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

</head>
<body>
  <header>
    <center>
       <head><img align="center" src="../recursos/imagenes/piedepagina.jpg" width="1330" height="80">
       <img src="DUINNA.jpg" style="width: 50%;
    height: 189px;"></head>


<P style="background-color:lightgrey; width: 100%;" align="center"><b>Data única de incorporación de niños, niñas y adolescentes</b></p>
   <center>
<ul class="menu">
    <li><a href="Inicio.php">INICIO</a></li>
    <li><a href="../vista/preguntadecedulapadre.php">REGISTRO NNA</a></li> <li><a href="#">GESTIONAR NNA</a>
        <ul>
             <li><a href="../vista/inhabilitar_nna.php">INHABILITAR NNA</a></li>
             <li><a href="../vista/habilitar_nna.php">HABILITAR NNA</a></li>
             <li><a href="../vista/modifica_nna.php">MODIFICAR DATOS DEL NNA</a></li>
 
         </ul>
     <li><a href="#">REPORTES</a>
        <ul>
             <li><a href="../vista/Reportes_Estado.php">CONSULTA DE ESTADOS</a></li>
             <li><a href="../vista/Reporte_General_Estado.php">CONSULTA NACIONAL</a></li>
             
             <li><a href="../vista/Reportes_Programa.php">REPORTES POR PROGRAMAS</a></li>
             <li><a href="../vista/Reportes_General_Programa.php">REPORTES GENERAL POR PROGRAMAS</a></li>
           
         
 
         </ul>
    </li>
    <li><a href="#">REPORTES ESPECIFICO </a>
        <ul>
             <li><a href="../vista/Reporte_Discapacidad.php">DISCAPACIDAD</a></li>
             <li><a href="../vista/Repore_Etnia.php">PUEBLOS INDIGENAS</a></li>
             <li><a href="../vista/Reporte_Escolarizado.php">ESCOLARIZADO</a></li>
              <li><a href="../vista/buscar_familiares.php">FAMILIAR</a></li>
             
         
 </li>
         </ul>

         <li><a href="#">PRIVILEGIOS</a>
        <ul>
             <li><a href="../vista/crear_usu_login.html.php">CREAR USUARIO</a></li>
             <li><a href="../vista/consul_usuario.php">CONSULTAR USUARIO</a></li>
             <li><a href="../vista/buscar_usuario_modificar.php">MODIFICAR USUARIO</a></li>
               <li><a href="../vista/cambiar_estatus_usuario.php">ELIMINAR USUARIO</a></li>
                 <li><a href="../vista/consulta_de_usuarios_inactivos.php">COSULTAR USUARIOS ELIMINADOS</a></li>
                   <li><a href="../vista/activar_recuperar_usurios.php">RECUPERAR USUARIOS ELIMINADOS</a></li>
                     

             
         
 
         </ul>
    
    <li><a href="../recursos/pdfs/manual_de_usuario.pdf" download="Manual de Usuario">AYUDA</a></li>
    <li><a href="../vista/confirmar_salida.php">SALIR</a></li>
</ul></br></br>


</center>


<img style= "margin-left: 1%; margin-top: 0%" align="left" src="../recursos/imagenes/Diapositiva3(3).jpg" width="250" height="250" > 
<img style= "margin-left: -31%; margin-top: 58%" align="left" src="../recursos/imagenes/blanco.png" width="250" height="250" > 
</br></br></br>




<div class="contenido">
                   




              <br/>

<b>Proyecto de Vida para Niños, Niñas y Adolescentes (PROVINNA)</b></br></br>

Es un proyecto preventivo dirigido a niños, niñas y adolescentes que se encuentran en situación de riesgo social o vulneración de sus derechos, a los cuales se les brindan herramientas de formación, capacitación y orientación vocacional para la elaboración de sus proyectos de vida en armonía con la vida familiar y comunitaria.</br></br>
<b>¿Cuál es su objetivo?</b>

</br></br>Contribuir con el desarrollo integral de niños, niñas, adolescentes, familias y comunidades, facilitando herramientas de formación, capacitación y orientación para el desarrollo de proyectos de vida, que les permitan su autorealización y el alcance de metas, promoviendo su organización y participación protagónica en conjunto con la vida familiar, laboral y comunitaria, de forma articulada con las organizaciones de base del poder popular, coadyuvando así con el desarrollo comunal integral.</br></br>

<b>Principios del PROVINNA</b></br></br>

    -Interés Superior del niño, niña y del adolescente.</br>

    -Igualdad y no discriminación.</br>

    -Cooperación.</br>

    -Prioridad absoluta.</br>

    -Solidaridad y ayuda mutua.</br>

    -Corresponsabilidad.</br>

    -Equidad.</br>

-Componentes del PROVINNA</br>

-Formación, Capacitación y Orientación</br>

    -Fortalecer el poder comunitario y transformar la realidad social de los adolescentes.</br>

    -Facilitar la incorporación al sistema educativo formal.</br>

    -Brindar herramientas técnicas de Orientación Vocacional.</br>

-Alianzas Interinstitucionales.</br>

    -Proteger y garantizar los derechos.</br>

    -Prevenir circunstancias de riesgo.</br>

    -Construir un modelo de gestión eficiente con retornabilidad social y económica.</br>

    -Satisfacer necesidades comunitarias.</br>

    -Impulsar bienestar social- económico de los beneficiarios.</br>

 

<b>Ejes a Desarrollar en el Programa</b></br></br>

    -Formación para habilidades para la vida.</br>

   -Formación en liderazgo Pro-positivo.</br>

    -Fortalecimiento de organización ciudadana y expresiones juveniles.</br>

    -Acompañamiento constante a NNA y jóvenes en sus comunidades.</br>

           -establecimiento de alianzas interinstitucionales.</br>

    -Formación, capacitación, orientación e incorporación.</br>

    -Acompañamiento en la prosecución de sus estudios.</br>

    -Acompañamiento a la organización e impulso del nuevo modelo productivo.</br>

    -Asesoría para la conformación de Empresas de Propiedad Social.</br>

-Conformación del PROVINNA</br>

    -Abordaje comunitario.</br>

    -Acompañamiento técnico.</br>

    -Caracterización.</br>

    -Formación y dotación de herramientas.</br>

    -Impulsar la prosecución en el sistema educativo.</br>

   -Evaluación técnica de la propuesta.</br>

    -Articulación institucional.</br>

  -Realización de encuentros comunitarios.</br>



<br/>

<br/>
    
         

</br></br>
<footer id="footer2" style="background-color: #999"> <address style="margin-left: 30%;"> <font color="white"><center></b> Intranet Idena - Copyletf2015 Instituto Anonimo Consejo Nacional de Derechos de Niñas, Niños y Adolescentes &copy; 
  Todos los derechos reservados &copy; </b></font>  </address> </footer>
</html>




<style>



ul.menu {
 float:left;
 display:block;
 margin-top: 0px;
  margin-left: 21%;
 list-style-type:none;
 }
 .menu li {
 line-height:18px;
 font-size:13px;
 position:relative;
 float:left;
 }
 .menu li a {
 color: #000;
 text-transform:uppercase;
 padding: 5px 20px;
 text-decoration:none;
 }
 .menu li a:hover {
 background: #9c0101;
 color: white;
 }
 .menu li ul {
 display:none;
 position:absolute;
 top:20px;
 width: 240px;
 background-color: #f4f4f4;
 padding:0;
 list-style-type:none;
 }
 .menu li ul li {
 width: 200px;
 border: 1px solid #9c0101;
 border-top:none;
 padding: 10px 20px;
 }
 .menu li ul li:first-child {
 border-top: 1px solid #9c0101;
 }
.menu li ul li a {
 width: 240px;
 margin: 0;
 padding:0;
 }
.menu li ul li a:hover {
 width: 240px;
 margin: 0;
 color: #9c0101;
 background:none;
 }
</style>

