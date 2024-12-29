<?php
 session_start();

 include('../controlador/validar_sessiones.php');
 verificar_session();
 
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Datos Educativos</title>
	<link rel="stylesheet" type="text/css" href="../recursos/css/idena3.css">
  <link rel="stylesheet" type="text/css" href="../recursos/css/idena4.css">
  <link rel="shortcut icon" type="image/x-icon" href="../recursos/imagenes/favicon.ico">    <!icono de DUINNA en la pestaña (tittle)>
  <script type="text/javascript" src="../recursos/js/jquery.js"></script>
  


</head>
<body>
   <div style="color: #0489B1; font-size: 1.1em; ">
  <b style="margin-left: 4%; "><script> document.write(new Date())</script></b>
</div> <!muestra la fecha y la hora>
<div style="position: relative;margin-top: -1.2%; margin-left: 75%; color: #04B404; font-size: 18px;"> 
  <p  " class="nombreUsuario"  ><B>Bienvenid@ <?php echo $_SESSION['username'];?> &nbsp;<?php    
 echo$_SESSION['apellido']?></B></p
 ></div>


	<header>
    <center>
    	 <head><img align="center" src="piedepagina.jpg" width="1330" height="80">
       <img src="DUINNA.jpg" style="width: 50%;
    height: 189px;"></head>


      <!--<body onload= "alert('Bienvenido al registro de DUINNA');"
      onUnLoad="confirm(Gracias por realizar el registro');">-->


      <P style="background-color:lightgrey; width: 77%;" align="center"><b>Data Única de Incorporación de Niños, Niñas y Adolescentes</b></p>
    </center>

   
    
<font FACE="arial">

     <table bgcolor="#999" style="margin-left: 13.1%;x" width="60%">

        <tr>
            <td> <font style="margin-left: 10px" size="4"><b>Datos Educativos</b></font> </td>
        </tr>

     </table>
     <br>

     <form action="../controlador/con_datos_educativos.php" method="POST">   <!INCLUIR>






<script>

var mostrarValor = function(x){
document.getElementById('institucion').value=x;
}
</script>



 <font style="margin-left: 13.1%;" size="4"> <b>Escolarizado</b> </font>
    <select style="margin-left: 20em;" id="escolarizado1" name="escolarizado" required="complete este campo" onChange="muestra(this.value);">
        <option value="" required="complete este campo" >Seleccione</option>
        <option value="Si escolarizado" required="complete este campo" >Si</option>
        <option value="No escolarizado" required="complete este campo" >No</option>
    
     </select>

</br>




        <br>
       <font style="margin-left: 13.1%;" size="4"><b>Sabe Leer</font>
      <select style="margin-left: 21.6em;" name="sabeleer" required="complete este campo" required="complete este campo">

<option value="" required="complete este campo">Seleccione</option>

<option value="Si sabe Leer" required="complete este campo">Si</option>

<option value="No sabe leer" required="complete este campo">No</option>


</select>
    




</br>

  <br>
<font style="margin-left: 13.1%;" size="4">Nombre la Institución donde estudia</font>
<input style="margin-left: 4.5em;" size="40" type="text"placeholder="Nombre de la institución" name="institucion" id="institucion" value="" required="complete este campo" pattern="{2,}" >

<select name="noestudiaeninstitucion" onchange="mostrarValor(this.value);">
<option value="">Seleccione</option>
<option value="No Aplica">No Aplica</option>

</select>

<br><br>
<font style="margin-left: 13.1%;" size="4">Nivel Educativo</font>
      <select style="margin-left: 18em;" name="niveleducativo" required="complete este campo">

<option value="" required="complete este campo">Seleccione</option>

<option value="preescolar" required="complete este campo">Pre-escolar aprobado</option>

<option value="primaria" required="complete este campo">Primaria aprobado</option>

<option value="bachillerato" required="complete este campo">Bachillerato aprobado</option>

<option value="TSU" required="complete este campo">Tecnico superior universitario aprobado</option>

<option value="No Aplica" required="complete este campo">No Aplica</option>

</select>



<br><br>



<font style="margin-left: 13.1%;" size="4">Ultimo Grado Aprobado</font>              <!Cambio de valor>
<input style="margin-left: 12.5em;" size="40" type="text"placeholder="Indique el grado aprobado" name="ultimogradoaprobado" id="ultimogradoaprobado" value="" required="complete este campo" " >



<br><br>

<font style="margin-left: 13.1%;" size="4">Turno</font>
      <select style="margin-left: 24.3em;" name="turno" required="complete este campo">

<option value="" required="complete este campo">Seleccione</option>

<option value="Mañana" required="complete este campo">Mañana</option>

<option value="Tarde" required="complete este campo">Tarde</option>

<option value="Noche" required="complete este campo">Noche</option>

<option value="Mixto" required="complete este campo">Mixto</option>

<option value="No Aplica" required="complete este campo">No Aplica</option>


</select>




</br></br>






<br><br>






<br>
<br>
</form>
<input onSubmit="terceraparteidena.php" class='btn btn-lg btn-primary btn-block btn-signin' style="margin-left: 250px" size="40" type="submit" name="incluir" value="Enviar">


</font>



<footer id="footer2" style="background-color: #999"> <address style="margin-left: 30%;"> <font color="white"><center></b> Intranet Idena - Copyletf2015 Instituto Anonimo Consejo Nacional de Derechos de Niñas, Niños y Adolescentes &copy; <br>
  Todos los derechos reservados &copy; </b></font> <br> </address> </footer>

</body>

</html>
