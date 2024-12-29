<?php
 session_start();

 include('../controlador/validar_sessiones.php');
 verificar_session();
 
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Sombrerero</title>
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


<img style= "margin-left: 1%; margin-top: 0%" align="left" src="../recursos/imagenes/Diapositiva5.jpg" width="250" height="250" > 
<img style= "margin-left: -31%; margin-top: 78%" align="left" src="../recursos/imagenes/blanco.png" width="250" height="250" > 
</br></br></br>




<div class="contenido">
                   



El Estado venezolano mediante el Instituto Autónomo Consejo Nacional de Derechos de Niños, Niñas y Adolescentes (Idenna) impulsa el hábito de la literatura y escritura como hecho recreativo, a través del programa “El Sombrero de la Ñ”, el cual garantizará la sensibilización y acercamiento de niños, niñas y adolescentes hacia la lectura y la escritura creativa, siendo esta un instrumento transformador de realidades, donde no sólo se abordarán espacios tradicionales de lectura como escuelas y bibliotecas, sino que se aproximarán a comunidades y hospitales, comunas y nuevos urbanismos.<br/></br>

Promover y consolidar la lectura, por medio de distintas actividades, como una práctica preventiva y recreativa en la población de niños, niñas y adolescentes para contribuir al desarrollo de las capacidades creativas, afectivas, espirituales y cognitivas que permitan su formación en principios y valores enmarcados en la libertad, la tolerancia y la universalidad, garantizando con ello sus derechos ciudadanos.</br></br>

<b>Principios y valores fundamentales que rigen el programa</b></br></br>

Interés Superior del Niño, Niña y Adolescente: Es un principio de obligatorio cumplimiento en la toma de todas las decisiones concernientes a niños, niñas y adolescentes, y busca asegurar su desarrollo integral, así como el disfrute pleno y efectivo de sus derechos y garantías.</br></br>

<b>Prioridad Absoluta:</b> La prioridad absoluta es imperativa para todos y debe ser asegurada por el Estado, la Familia y la Sociedad en aras de la garantía de todos los derechos de los niños, niñas y adolescentes. Comprende la preferencia y atención en la formulación y ejecución de todas las políticas públicas y programas de protección integral, asignación privilegiada y preferente en el presupuesto de los recursos públicos para las áreas relacionadas con los derechos y garantías, precedencia de los niños, niñas y adolescentes en el acceso y atención a los servicios públicos, y primacía en la protección y socorro de los mismos en cualquier circunstancia.</br></br>

Principio de Igualdad y no discriminación: La participación de los niños, niñas y adolescentes en el programa se realizará sin discriminación alguna, atendiendo a lo establecido en el Artículo 3 de la LOPNNA.</br></br>

<b>Principio de Corresponsabilidad:</b> Este principio asigna al Estado, las Familias y la Sociedad la responsabilidad conjunta para la defensa y garantía de los derechos de los niños, niñas y adolescentes por lo que asegurarán con prioridad absoluta su protección integral, considerando su interés superior en las decisiones y acciones que le conciernan.</br></br>

<b>Solidaridad y ayuda mutua:</b> Estos valores fomentan la cooperación, el compañerismo y la ayuda mutua, promoviendo la resolución de las diferencias entre los adolescentes trabajadores, las familias e integrantes del poder popular, mediante el diálogo, el respeto por el otro y la compresión.</br></br>

<b>Igualdad y equidad:</b> Este valor conduce a satisfacer de manera equilibrada, equitativa y justa los intereses de todos (as) los (as) protagonistas interesados (as) por las actividades de la Unidad de Producción Social. El mismo es fundamental para emprender los proyectos socio-productivos, a fin de que los beneficiarios tomen en cuenta no solo los aportes sino también las necesidades de todos sus integrantes.</br></br>

<b>Ámbitos de acción</b>
</br></br>
Comunidad, Escuelas y Liceos, Centros Comunales de Protección Integral (CCPI), Unidades de Protección Integral (UPI), Unidades de Protección Integral Especializado (UPIE), Escuelas Especiales, Centros Hospitalarios, Misiones y Grandes Misiones, Bases de Misiones, Nuevos Urbanismos, parques, entre otros.</br></br>

<b>Acciones a desarrollar por el Sombrero de la Ñ</b>
</br></br>
Las siguientes acciones que se reseñan a continuación contribuirán de manera permanente a las actividades planificadas de cada Cuentonauta, y son sin duda el cuerpo, alma y espíritu de este programa, estos proyectos se potenciarán en la medida en que nos familiaricemos con la fantasía: cesto de estrategias, técnicas y herramientas de promoción y encantamiento a la lectura con los 6 sentidos.</br></br><b>

    La casa de la Ñ:</b></br></br>

Es un lugar inolvidable, conducido por la magia de los libros, el arte y la creatividad, como una especie de biblioteca encantada, donde los niños, niñas, adolescentes y la familia se encuentran para recrear el mundo, cada casa de los cuentos tendrá la identidad de cada región, como una vaca, un mango, un peñero, entre otros.</br></br><b>

    Cuentos Rodantes (lecturas ida y vuelta)</b>
</br></br>
Se trata de una biblioteca sobre ruedas, en forma de un fascinante camión, dotada con más de 250 títulos de literatura infantil y juvenil, así como de juegos teatrales, tarimas, minibibliotecas móviles, sonido, audiovisuales, esta experiencia viajera llegará a los rincones más lejanos del país.
</br></br>
    <b>Sanalectura, el poder de los cuentos (Cuentoterapia)</b></br></br>

Es un plan de atención hospitalaria, tiene como misión llevar alegría, magia y recreación a los niños, niñas y adolescentes con salud disminuida, así mismo a sus familiares, a partir de lecturas dramatizadas de cuentos, entre otras actividades artísticas, como los títeres y la música, que contribuyan a fortalecer el ánimo y la esperanza ante la enfermedad.
</br></br>
    <b>Enredados (red de Cuentonautas)</b></br></br>

Son la estructura organizada de promotores y promotoras de lectura, valientes y entusiastas habitantes del país de la ñ, quienes se encargan de fomentar el desarrollo de actividades de sensibilización, formación y activación del libro y la lectura, tales como las fiestas del libro, maratones de lectura, festivales de la historieta, lectura con los 6 sentidos, círculos y triángulos de lectura, entre otras.</br></br>

    <b>Libros Ambulantes</b></br></br>

Son bibliotecas móviles de ingeniosos diseños con múltiples funciones recreativas y formativas, diseñadas especialmente para el desempeño comunitario, por ejemplo tomas culturales por la paz y la vida, ferias del libro, maratones de lectura, sanalectura, tu comunidad cuenta, lecturas ida y vuelta.</br></br>

    <b>El zorrillo luminoso</b></br></br>

Es la bitácora del Cuentonauta escolar y comunitario con efectos especiales (BHFX) donde los niños, niñas y adolescentes se expresarán libremente en estos formatos y nos contarán lo que sienten, lo que piensan, y lo que hacen (contenidos) a través de los audiocuentos, la pinta de murales, radio pacífica, campañas ecológicas, publicaciones de libros artesanales y la Ñ TV.
</br></br><b>
    La Ñ Cartonera</b></br></br>

Nuestro gran amigo “El Librote” es el responsable de llevar a cabo el proyecto de la Ñ Cartonera, que trata de consolidar una editorial alternativa ecológica con fines socio productivos, donde de alguna manera se puedan registrar en formato de libros artesanales, periódicos, revistas y catálogos la suma de todos los ejercicios de promoción y encantamiento a la lectura realizados con los niños, niñas y adolescentes visitantes de la Ñ en las diferentes actividades propuestas por el Sombrero Mágico. Estudiaremos la gran variedad de libros hechos a mano que existen hasta la actualidad, e inventaremos los que están por venir, los formatos y soportes, materiales, diagramación, diseño, papel, entre otros elementos, son en principio el tema de estudio.
</br></br><b>
    Héctor Lector</b>
</br></br>
Es la historia de un niño que se enfrenta a una realidad alegre pero también confusa, con serios problemas como el exceso de basura, el maltrato infantil, el consumo de sustancias psicoactivas, la comida chatarra, la falta de conciencia ciudadana, la intolerancia, el egoísmo, entre otros por menores y por mayores. Es por eso que decide refugiarse en los libros y las historias fantásticas que ellos guardan. Así emprende viajes maravillosos que lo llevan a parajes insospechados, y es de estos lugares de donde logra traer elementos mágicos con los que transforma su realidad de una manera sorprendente, este cuento necesita que lo construyan a manera de historietas nuestros niños, niñas y adolescentes, a partir de un conjunto de actividades de promoción de la lectura, la escritura creativa y la ilustración, con la finalidad de realizar exposiciones y recitales de libros artesanales.

<br/>


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


