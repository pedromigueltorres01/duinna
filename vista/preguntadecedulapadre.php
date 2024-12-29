<?php
 session_start();

 include('../controlador/validar_sessiones.php');
 verificar_session();
 
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Datos del Representante</title>
  <link rel="stylesheet" type="text/css" href="../recursos/css/idena3.css">
    <link rel="stylesheet" type="text/css" href="../recursos/css/idena4.css">
  <link rel="stylesheet" href="../recursos/css/estilos.ccs">
  <script type="text/javascript" src="../recursos/js/jquery.js"></script>
  <script type="text/javascript" src="../recursos/js/formularioidena.js"></script>
       <link rel="stylesheet" type="text/css" href="">
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



<font FACE="arial">


      <table bgcolor="#999" style="margin-left: 250px" width="60%">

        <tr>
            <td> <font style="margin-left: 15px" size="4"><b>Datos del representante</b></font> </td>
        </tr>


     </table> <!franja gris>



















</br>

<div>
 <font style="margin-left: 14em" size="4"> <b>Seleccione documento de identidad</b> </font>
    <select style="margin-left: 10em" id="status" name="status" required="complete este campo" onchange="location = this.value">
        <option value="" required="complete este campo" >Seleccione</option>
        <option value="preguntaconfirmadecedulapadre.php" required="complete este campo" >Cédula</option>
        <option value="preguntadepasaportepadre.php" required="complete este campo" >Pasaporte</option>
    
     </select>
</div>
</br></br>








<br><br>


 
     <br>

<input class='btn btn-lg btn-primary btn-block btn-signin' style="margin-left: 30em" type="button" onclick="history.back('vista/Inicio.php')" name="Atrás" value="Atrás">

</br>
<br>
<br>




</font>

 


<!--<script><div class="n"><div class="n">
<a href="#" title="Ir arriba"><img alt="Ir arriba" border="0"
src="file:///C:/Users/1234/Desktop/Nueva%20carpeta/IDENNA(formulario)/formularioidena.html"
style=position:fixed;botttom:0;right:0;/></a></div></script>*/-->
<br></br>
<br>
<br></br>
<br>
<br>

<footer id="footer2"  style="background-color: #999"> <address style="margin-left: 0%;"> <font color="white"><center></b> Intranet Idena - Copyletf2015 Instituto Anonimo Consejo Nacional de Derechos de Niñas, Niños y Adolescentes &copy; <br>
  Todos los derechos reservados &copy; </b></font> <br> </address> </footer>



</body>

</html>


<style>
ul.menu {
 float:left;
 display:block;
 margin-top: 38px;
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