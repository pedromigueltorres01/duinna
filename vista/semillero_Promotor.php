<?php
 session_start();

 include('../controlador/validar_sessiones.php');
 verificar_session();
 
?><!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Consulta Especifica</title>
  <link rel="stylesheet" type="text/css" href="../recursos/css/idena3.css">
  <link rel="stylesheet" type="text/css" href="../recursos/css/menu.css">
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
 
<div style="color: #0489B1; font-size: 1.1em;"><b><script> document.write(new Date())</script></b></div> <!muestra la fecha y la hora>

<div style="position: relative;margin-top: -1%; margin-left: 80%; color: #04B404; font-size: 18px;"> <p  " class="nombreUsuario"  ><B>Bienvenid@ <?php echo $_SESSION['username'];?> &nbsp;<?php    
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


<img style= "margin-left: 1%; margin-top: 0%" align="left" src="../recursos/imagenes/Diapositiva4.jpg" width="250" height="250" > 
<img style= "margin-left: -31%; margin-top: 65%" align="left" src="../recursos/imagenes/blanco.png" width="250" height="250" > 
</br></br></br>




<div class="contenido">
                   




              </br>
<b>Organización Semillero de la Patria “Simón Bolívar”</b></br></br>

Nace el 24 de julio de 2005, en el marco del natalicio de nuestro Libertador Simón Bolívar, con el objetivo de contribuir a la formación de una generación impregnada de amor a la patria, de interés por el estudio y de responsabilidad con la obra de la revolución, concebido como el espacio donde se promueve los principios de solidaridad y fraternidad contribuyendo a la formación del hombre y la mujer nueva, como sujetos plenos de derechos, estableciendo como meta estratégica la integración de los niños, niñas y adolescentes de escuelas, centros deportivos, comunidades organizadas y movimientos sociales.</br></br>

<b>Objetivos de la Organización</b></br></br>

    Desarrollar en los niños, niñas, adolescentes y jóvenes el amor a la Revolución Bolivariana, basado en valores de respeto y admiración hacia los próceres y las tradiciones de nuestro pueblo.</br></br>

    Fomentar el amor al trabajo mediante la participación consciente, contribuyendo con su formación integral en la construcción de la nueva sociedad.</br></br>

    Orientar a los niños, niñas, adolescentes y jóvenes en la construcción de su plan de vida, detectando y potenciando sus habilidades, hacia las especialidades o ramas que el desarrollo económico y social demande, combinando adecuadamente sus intereses personales con los sociales.</br></br>

    Contribuir al rescate y conservación de las expresiones culturales, cuidando de la naturaleza y el medio ambiente, fortaleciendo la identidad local, regional y nacional.</br></br>

<b>La Organización se divide en:</b></br></br>

Pregoneros y Pregoneras: partiendo de su concepto difundir- divulgar el pensamiento Bolivariano, esta etapa está conformada por los niños y niñas en edades comprendidas entre 5 y 11 años ya que desempeñan actividades en común y poseen los mismos intereses. A su vez esta etapa se divide en dos niveles: I Nivel, para las edades comprendidas de 6 a 8 años y II Nivel, para las edades comprendidas de 9 a 11 años.</br></br>

Precursores y precursoras: capaces de emprender una agrupación que tendrá una aceptación en el futuro a través de la enseñanza y disciplina. Esta etapa agrupa a los niños, niñas y adolescentes en edades entre 12 y 14 años.</br></br>

Propulsores y Propulsoras: tendrán la tarea de activar la Organización con una nueva forma de ver el proceso revolucionario y le dará el empuje necesario para consolidar el Semillero de la Patria “Simón Bolívar”. Conformado por adolescentes y jóvenes en edades comprendidas entre 15 y 25 años.</br></br>

<b>Activación en las Brigadas:</b></br></br>

Formación: Elevar la actitud ante el estudio y el desarrollo de conocimientos, demostrar el interés por la investigación y generar el debate, la orientación vocacional y el conocimiento de la historia.</br></br>

Cultura: Disposición e interés para fomentar el compañerismo, el trabajo en equipo, el rescate de tradiciones y fortalecer, desde este espacio, las actividades culturales, artísticas y circenses.</br></br>

Deporte y Recreación: Intereses, habilidades y destrezas deportivas que tengan los niños, niñas y adolescentes, fomentando el compañerismo, el trabajo en equipo, fortaleciendo el deporte participativo, la recreación y el rescate de juegos tradicionales.</br></br>

Servicio Comunitario y Preventivo: Acciones de ayuda social, trabajo socialmente útil y otras, según las necesidades de cada comunidad para cooperar con su participación al cumplimiento de los fines del bienestar social, ademas de contribuir a la conformación de brigadas de primeros auxilios dentro de las comunidades.</br></br>

Protección y Exploración Ambiental: Amor hacia la naturaleza y el ambiente, asimismo, prepara a los niños, niñas y adolescentes para la vida en campaña, incentivando la conciencia ecológica.</br></br>


<br/>
<br/>

<br/>
<br/>
&nbsp;
<br/>       </div>
       <div class="video">          
                         </div>
       <div class="relaciones">          
                         </div>
       
      
    </div>

         
<body>
	<center>	
               	   
				</center>
</body>
</br></br></br></br></br>
<footer id="footer2" style="background-color: #999"> <address style="margin-left: 30%;"> <font color="white"><center></b> Intranet Idena - Copyletf2015 Instituto Anonimo Consejo Nacional de Derechos de Niñas, Niños y Adolescentes &copy; <br>
  Todos los derechos reservados &copy; </b></font> <br> </address> </footer>
</html>



