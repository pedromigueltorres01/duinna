<?php
 session_start();

 include('../controlador/validar_sessiones.php');
 verificar_session();
 
?><!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Centro Comunicacional</title>
  <link rel="stylesheet" type="text/css" href="../recursos/css/idena3.css">
    <link rel="stylesheet" type="text/css" href="../recursos/css/menu.css">
  <script type="text/javascript" src="../recursos/js/jquery.js"></script>
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
    </center>
</body>

    
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


<img style= "margin-left: 1%; margin-top: 0%" align="left" src="../recursos/imagenes/Diapositiva2(2).jpg" width="250" height="250" > 
<img style= "margin-left: -31%; margin-top: 78%" align="left" src="../recursos/imagenes/blanco.png" width="250" height="250" > 
</br></br></br>




<div class="contenido">
                   




              <br/>
Con el propósito de
construir espacios de participación para la protección y prevención del infante,
el Ministerio del Poder Popular para la Participación y Protección
Social (MPS), a través del Instituto de
Derecho de Niños, Niñas y Adolescentes<em> <em>(Idena)</em></em>, lleva a cabo
la consolidación de Centros Comunales de Protección Integral para proteger a
niños y niñas en situación de riesgo social, a fin de que puedan ejercer
plenamente sus derechos.
<br/>


<br/>
Tal es el caso de la recién inaugurada Casa Comunal
de Protección Integral "Mi Abuela Rosa Inés" Las Clavellinas, ubicada en el sector
Carapita de la parroquia Antímano de la ciudad de Caracas,&nbsp; casa hogar que consta de tres pisos y que actualmente alberga a 90 niños y niñas de tres
consejos comunales de la parroquia Antímano: El Progreso, Rómulo Gallegos y Las
Clavellinas.
<br/>


<br/>
Explicó la coordinadora del Centro Integral Las
Clavellinas, Deyse Yaneth Peña, que la casa abrigo es un logro del poder
popular, ya que fue la petición encarecida de los tres consejos comunales a la Ministra Erika Farías, durante
una caminata efectuada en el populoso sector, donde se proyectó la petición,
convirtiéndose en realidad en menos de 4 meses, destacando la necesidad de
madres y padres de familia que necesitan y requieren de un espacio digno donde
ubicar a sus hijos.
<br/>


<br/>
En este sentido, destacó que dentro del centro
comunal se desarrollan actividades integrales, garantizando: salud, deporte,
recreación, cultura, reforzamiento escolar, promoción de la lectura,
alimentación balanceada y mucho afecto.
<br/>








<br/>
<strong>Primera
infraestructura inaugurada: &nbsp;&nbsp;</strong>
<br/>


<br/>
Con una inversión de 697.000 Bs.F fue reestructurada
la casa, ubicada en la calle principal Las Clavellinas, adecuándola para tres
áreas. 
<br/>


<br/>
En el primer piso se encuentra el área maternal,
lugar donde atienden a los bebés de 0
a 3 años en horario completo, que va desde la 6:30 a.m
hasta las 6:30 p.m. En esta área hay 10 madres cuidadoras, divididas en dos
turnos, dedicadas durante el día a la alimentación prevista para cada infante
al igual que la asignación de los medicamentos preescritos, entre otras
atenciones.
<br/>


<br/>
En el segundo piso se encuentra el área para los
niños y niñas en edad comprendida entre los 4 y 12 años de edad, quienes
divididos en 2 turnos (en la mañana y la tarde) están bajo la supervisión
continua de 1 docente integral, además de contar con el apoyo de 2 educadores
comunitarios.
<br/>


<br/>
En ésta área se desarrollan las actividades
didácticas, principalmente relacionadas al reforzamiento de la educación
(lectura, comprensión y matemáticas) además de las artes plásticas y
manualidades. Cuenta con una sala de computación dotada, una sala para el ocio,
donde están dispuestas mesas con juegos de ajedrez, y un cuarto de música
dotado con la mayoría de los instrumentos autóctonos de nuestro país.
<br/>


<br/>
Finalmente, en el tercer piso se encuentra el área de
recreación y deportes (cancha de básquet, voleibol y fútbol), donde hay
juguetes (carritos e inflables) para los más pequeños e implementos deportivos para
los más grandes.
<br/>


<br/>
En la casa comunal "Mi abuela Rosa Inés" laboran 2
cocineras; 5&nbsp; educadores comunitarios en
la mañana y 5 en la tarde; 1 docente; 2 educadores comunitarios; y en el área
de cultura están 2 facilitadores cubanos y 3 para los talleres de tambor, que
son impartidos por miembros del grupo Mapire; además de contar con personal
voluntario de la misma comunidad de Las Clavellinas.
<br/>




<br/>
<strong>Entrelazando
las misiones:</strong>
<br/>


<br/>
A menos de 20 metros del Centro Comunal se encuentra
ubicado el módulo de Barrio Adentro, así mismo, dentro de las instalaciones de
la casa integral Las Calvellinas fue ubicado el Pdvalito; también se desarrollan
actividades de la Misión Cultura
"Corazón Adentro". En un proceso de integración comunal, evidenciado en&nbsp; la organización, se destaca el aporte musical
que lleva la Misión Cultura,
establecido en la conformación del grupo musical&nbsp; Mapire, que enaltece nuestra música
afrodescendiente al sonar de los tambores, maracas, furruco, charrasca y
cuatro.
<br/>


<br/>
En este sentido, los integrantes de esta asociación
musical, enseñan a los pequeños de la casa comunal integral a tocar cada uno de
los instrumentos musicales dispuestos en la sala de música.
<br/>




<br/>
<strong>Fomentar
valores</strong>
<br/>


<br/>
Destacó la coordinadora del Centro Integral Las
Clavellinas, Deyse Yaneth Peña, que en la búsqueda a la solución de los
problemas sociales que afectan a la parroquia fue creado el centro, para
prevenir las conductas sociales que dispersaron a muchos jóvenes hacia las
drogas y las calles, entre otros problemas; ahora las madres y padres tendrán
un lugar adecuado donde dejar a sus hijos, conforme a lo expresado en los
artículos 123 y 124 de la Ley Orgánica
de Protección al Niño y Niña y Adolescente (Lopnna).
<br/>


<br/>
Para el educador Eduardo Burdillos, quien ha tenido
experiencia en la educación de infantes y que actualmente trabaja en la casa
hogar, destacó que en la comunidad de Las Clavellinas hay que fomentar los
valores; "...ya que la educación que viene de casa es bastante resquebrajada,
siendo necesario trabajar la conducta del niño, cómo puedo yo, desde mi casa,
cambiar y que eso se refleje en el entorno en el que me estoy desenvolviendo".
<br/>


<br/>
"Inclusive las
mismas actividades pedagógicas están dirigidas a la fomentación de los valores.
Como ejemplo tenemos las actividades numéricas. En este caso, durante el
aprendizaje de las sumas, restas, multiplicaciones o divisiones, debemos
aprender que existe un orden numérico, si nosotros no respetamos ese orden
numérico, el ejercicio no nos va a dar como debe ser, es decir, todo es un
respeto en esta vida", recalcó Burdillos.
<br/>




<br/>
<strong>Integrando a la comunidad</strong>
<br/>


<br/>
Por su parte, la
facilitadora Omaira Ramírez, expresó que la mayoría de las personas del Barrio
Las Clavellinas, en el sector Carapita, se conocían desde hace mucho tiempo,
pero nunca habían tenido que convivir por más de 4 horas juntos, lo que les ha
representado un avance como comunidad organizada y más aún interactuando y
educando a los hijos e hijas de su mismo sector. 
<br/>


<br/>
"Hoy en día nos estamos
integrando cada vez más, aunque nos veíamos, saludábamos y compartíamos en
ciertas actividades programadas para el bienestar de la comunidad. Es
importante el paso que hemos dado... Igualmente estamos integrando a los niños y
niñas, a que se acostumbren a estar en compañía de otros niños y de alguna
manera a que se acostumbren al docente, facilitadoras... Actualmente tengo 5
nietos, me dicen abuela Omaira".
<br/>


<br/>
Igual fue la
apreciación de Carmen González, facilitadora comunitaria, quien se desempeña
como una de las madres cuidadoras de los 30 recién nacidos que alberga el
centro comunal "...a pesar de que siempre nos estábamos viendo y existía una
relación entre vecinos, ahora estamos compartiendo en esta casa comunal, nos
veíamos pero no habíamos llegado a compartir y que mejor manera que en el
cuidado y formación de nuestros niños y niñas del barrio Las Clavellinas". 
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