<?php
 session_start();

 include('../controlador/validar_sessiones.php');
 verificar_session();
 
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Pueblo Indigena</title>
	<link rel="stylesheet" type="text/css" href="../recursos/css/idena3.css">
  <link rel="stylesheet" type="text/css" href="../recursos/css/idena4.css">
   <link rel="stylesheet" href="../recursos/css/estilosdenombredeusuario.css">
  <script type="text/javascript" src="../recursos/js/jquery.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="../recursos/imagenes/favicon.ico">    <!icono de DUINNA en la pestaña (tittle)>
  <script type="text/javascript" src="../recursos/js/terceraparte.js"></script>
	<!--<script type="text/javascript">

		 alert('POR FAVOR COMPLETE TODO EL FORMULARIO');
	</script>-->
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
       <head>
         <img align="center" src="piedepagina.jpg" width="1330" height="80">
       <img src="DUINNA.jpg" style="width: 50%;
    height: 189px;"></head>


      <!--<body onload= "alert('Bienvenido al registro de DUINNA');"
      onUnLoad="confirm(Gracias por realizar el registro');">-->


      <P style="background-color:lightgrey" align="center"><b>Data única de incorporación de niños, niñas y adolescentes</b></p>
    </center>
    
 
    
<font FACE="arial">
</br>

</header>
   

	
		<!--<header ><center><h1 id="tutu"> Fotos de la institucion y Programas que realiza</h1></center> </header>

  <script type="text/javascript">
  function manejo de flor() {

imangen=document.getElementsByTagName('img')[20];


  imagen.addEventListener("mouseover", crecer,false);



  }

  function crecer() {

    img.width=225;
    img.width=225;


  }

  </script>


  <figure>
	<img  style="width: 200px" src="imagen1.jpg">
	</figure>
	<figure>
	<img style="width: 200px" src="imagen2.jpg">
	</figure>-->
	


     <table bgcolor="#999" style="margin-left: 250px" width="60%">

        <tr>
            <td> <font style="margin-left: 10px" size="4"><b>Pueblo Indigena</b></font> </td>
        </tr>

     </table>
     <br>

     <form action="../controlador/con_informacion_Etnica.php" method="post">   <!INCLUIR>




      

     <table>
      
      
      
      
      

    
       <font style="margin-left: 13.7em;" size="4"><b>Pertenece a alguna etnia indigena</font>
      <select style="margin-left: 13em;" name="etnia"  required="complete este campo">

<option value="" required="complete este campo">Seleccione</option>

<option value="No Aplica" required="complete este campo">No Aplica</option>

<option value="ACAHUAYO" required="complete este campo">ACAHUAYO</option>

<option value="ARAHUAC DEL DELTA AMACURO" required="complete este campo">ARAHUAC DEL DELTA AMACURO</option>

<option value="ARAHUAC DEL RÍO NEGRO" required="complete este campo">ARAHUAC DEL RÍO NEGRO</option>

<option value="ARUTANI" required="complete este campo">ARUTANI</option>

<option value="BARI" required="complete este campo">BARI</option>

<option value="CARIÑA" required="complete este campo">CARIÑA</option>

<option value="GUAJIBO" required="complete este campo">GUAJIBO</option>

<option value="GUAJIRO" required="complete este campo">GUAJIRO</option>

<option value="GUARAO O WARAO" required="complete este campo">GUARAO O WARAO</option>

<option value="GUAYQUERI" required="complete este campo">GUAYQUERI</option>

<option value="MAPOYO O YAHUANA" required="complete este campo">MAPOYO O YAHUANA</option>

<option value="MAQUIRITARE" required="complete este campo">MAQUIRITARE</option>

<option value="PANARE" required="complete este campo">PANARE</option>

<option value="PUINABE" required="complete este campo">PUINABE</option>

<option value="PARAUJANO" required="complete este campo">PARAUJANO</option>

<option value="PEMÓN" required="complete este campo">PEMÓN</option>

<option value="PIAROA" required="complete este campo">PIAROA</option>

<option value="SAPE" required="complete este campo">SAPE</option>

<option value="YANOMAMI" required="complete este campo">YANOMAMI</option>

<option value="YARURO" required="complete este campo">YARURO</option>

<option value="YUCPA" required="complete este campo">YUCPA</option>

</select>
 




</br></br>
      <font style="margin-left: 13.7em;" size="4"><b>Poseé rasgos y color de piel afrodescendientes<b></font>
      <select style="margin-left: 3.6em;" name="afro" required="complete este campo">

 <option value="" required="complete este campo">Seleccione</option>

<option value="Si" required="complete este campo">Si</option>

<option value="No Aplica" required="complete este campo">No</option>


</select>

   </table>
  
   
</br></br>
</br>



<input class='btn btn-lg btn-primary btn-block btn-signin' style="margin-left: 250px" size="40" type="submit" name="incluir" value="Enviar">

</form>

</font>
</br></br>
</br></br></br>
</br></br></br>

</br>

<footer class="fo" id="footer2" style="background-color: #999"> <address style="margin-left: 30%;"> <font color="white"><center></b> Intranet Idena - Copyletf2015 Instituto Anonimo Consejo Nacional de Derechos de Niñas, Niños y Adolescentes &copy; <br>
  Todos los derechos reservados &copy; </b></font> <br> </address> </footer>




</body>
</html>
