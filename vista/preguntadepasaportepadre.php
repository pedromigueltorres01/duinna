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



<form action="../controlador/validar_existencia_repre.php" method="post">    <!INCLUIR>

<font FACE="arial">

      <table bgcolor="#999" style="margin-left: 250px" width="60%">

        <tr>
            <td> <font style="margin-left: 15px" size="4"><b>Datos del representante</b></font> </td>
        </tr>


     </table> <!franja gris>

</br>

      <br>
       
<font style="margin-left: 250px" size="4"><b>Número de pasaporte</b></font>
<input style="margin-left: 97px" size="40" type="tex" placeholder="Indique el Pasaporte"  name="pasaporte" required pattern="[0-9]{6,}" title="Solo números min. 6 digitos" required="complete este campo" >










<br><br>


 
     <br>



</br>
<br>
<br>
<input class='btn btn-lg btn-primary btn-block btn-signin' style="margin-left: 300px" type="button" onclick="history.back()" name="Atrás" value="Atrás">
<input class='btn btn-lg btn-primary btn-block btn-signin' style="margin-left: 300px" size="40" type="submit" name="incluir" value="Enviar">


</form>


</font>
 


<!--<script><div class="n"><div class="n">
<a href="#" title="Ir arriba"><img alt="Ir arriba" border="0"
src="file:///C:/Users/1234/Desktop/Nueva%20carpeta/IDENNA(formulario)/formularioidena.html"
style=position:fixed;botttom:0;right:0;/></a></div></script>*/-->

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


</body>

</html>
