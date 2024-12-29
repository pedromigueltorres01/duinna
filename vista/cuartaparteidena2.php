<?php
 session_start();

 include('../controlador/validar_sessiones.php');
 verificar_session();
 
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Enfermedad</title>
  <link rel="stylesheet" type="text/css" href="../recursos/css/idena3.css">
  <link rel="stylesheet" type="text/css" href="../recursos/css/idena4.css">
  <script type="text/javascript" src="../recursos/js/jquery.js"></script>
  <script type="text/javascript" src="../recursos/js/cuartaparteidena.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="../recursos/imagenes/favicon.ico">    <!icono de DUINNA en la pestaña (tittle)>
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
            <td> <font style="margin-left: 10px" size="4"><b>Enfermedad</b></font> </td>
        </tr>

     </table>
     <br>

     <form action="Guardadocompletoidenna.php" method="post">   <!INCLUIR>



 <script>

var mostrarValor = function(x){
document.getElementById('poseeenfermedad').value=x;
}
</script>


 <font style="margin-left: 250px" size="4"> <b>¿Padece alguna enfermedad?</b> </font>
    <select style="margin-left: 24px" id="enfermedadid" name="enfermedadname" required="complete este campo" onChange="mostrar(this.value);">
        <option value="" required="complete este campo" >Seleccione</option>
        <option value="enfermedadsi" required="complete este campo" >Si</option>
        <option value="enfermedadno" required="complete este campo" >No</option>
    
     </select>
    

</br></br>





<font style="margin-left: 250px" size="4"><b>¿Que enfermedad posee?</b></font>
<input style="margin-left: 53px" size="40" type="tex"placeholder="Indique la enfermedad" name="poseeenfermedad" id="poseeenfermedad" value="" required="complete este campo" pattern="{2,}" >

<select name="naenfermedad" onchange="mostrarValor(this.value);">
<option value="" required="complete este campo">Seleccione</option>
<option value="N/A" required="complete este campo">N/A</option>

</select>
      








</br></br>
</br>



<input class='btn btn-lg btn-primary btn-block btn-signin' style="margin-left: 250px" size="40" type="submit" name="incluir" value="INCLUIR">

</form>

<footer id="footer2" style="background-color: #999"> <address style="margin-left: 30%;"> <font color="white"><center></b> Intranet Idena - Copyletf2015 Instituto Anonimo Consejo Nacional de Derechos de Niñas, Niños y Adolescentes &copy; <br>
  Todos los derechos reservados &copy; </b></font> <br> </address> </footer>




</body>
</html>
