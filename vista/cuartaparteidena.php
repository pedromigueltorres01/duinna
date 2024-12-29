<?php
 session_start();

 include('../controlador/validar_sessiones.php');
 verificar_session();
 
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Discapacidad</title>
  <link rel="stylesheet" type="text/css" href="../recursos/css/idena3.css">
  <link rel="stylesheet" type="text/css" href="../recursos/css/idena4.css">
  <link rel="stylesheet" href="../recursos/css/estilosdenombredeusuario.css">
  <script type="text/javascript" src="../recursos/js/jquery.js"></script>
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
       <head>
         <img align="center" src="piedepagina.jpg" width="1330" height="80">
       <img src="DUINNA.jpg" style="width: 50%;
    height: 189px;"></head>


      <!--<body onload= "alert('Bienvenido al registro de DUINNA');"
      onUnLoad="confirm(Gracias por realizar el registro');">-->


      <P style="background-color:lightgrey" align="center"><b>Data única de incorporación de niños, niñas y adolescentes</b></p>
    </center>
    
 

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
  


<font FACE="arial">

     <table bgcolor="#999" style="margin-left: 250px" width="60%">

        <tr>
            <td> <font style="margin-left: 10px" size="4"><b>Discapacidad</b></font> </td>
        </tr>

     </table>
     <br>

     <form action="../controlador/con_discapacidad.php" method="post">   <!INCLUIR>




      
     <script>

var mostrarValor2 = function(x){
document.getElementById('nadiscapacidad').value=x;
}
</script>





<font style="margin-left: 13.7em;" size="4"><b>Padece Alguna discapacidad</font>
<input style="margin-left: 5em;" size="40" type="tex"placeholder="Indique la discapacidad" name="nadiscapacidad" id="nadiscapacidad" value="" required="complete este campo" pattern="{2,}" >

<select name="naenfermedad" onchange="mostrarValor2(this.value);">
<option value="" required="complete este campo">Seleccione</option>
<option value="Visual" required="complete este campo">Visual</option>
<option value="Cognitiva" required="complete este campo">Cognitiva</option>
<option value="Sensorial" required="complete este campo">Sensorial</option>
<option value="Motora" required="complete este campo">Motora</option>
<option value="Baja estarura" required="complete este campo">Baja estatura</option>
<option value="Autismo" required="complete este campo">Autismo</option>
<option value="Peso" required="complete este campo">Peso</option>
<option value="No Aplica" required="complete este campo">No Aplica</option>

</select>




      



      
     <script>

var mostrarValor1 = function(x){
document.getElementById('poseeenfermedad').value=x;
}
</script>




</br></br>
<font style="margin-left: 13.7em;" size="4">Padece Alguna enfermedad</font>
<input style="margin-left: 5.5em;" size="40" type="tex"placeholder="Indique la enfermedad" name="poseeenfermedad" id="poseeenfermedad" value="" required="complete este campo" pattern="{2,}" >

<select name="naenfermedad" onchange="mostrarValor1(this.value);">
<option value="" required="complete este campo">Seleccione</option>
<option value="No Aplica" required="complete este campo">No Aplica</option>

</select>
      

   
</br></br>
</br>

</b>

<input class='btn btn-lg btn-primary btn-block btn-signin' style="margin-left: 250px" size="40" type="submit" name="incluir" value="Enviar">

</form>
</font>
</br></br>
</br></br></br>
</br></br></br>
</br>
<footer id="footer2" style="background-color: #999"> <address style="margin-left: 30%;"> <font color="white"><center></b> Intranet Idena - Copyletf2015 Instituto Anonimo Consejo Nacional de Derechos de Niñas, Niños y Adolescentes &copy; <br>
  Todos los derechos reservados &copy; </b></font> <br> </address> </footer>




</body>
</html>
