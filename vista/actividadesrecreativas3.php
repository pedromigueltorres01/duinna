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
  <link rel="stylesheet" type="text/css" href="../recursos/css/reloj.css">
  <link rel="stylesheet" type="text/css" href="../recursos/css/estilosdenombredeusuario.css" >
  <script type="text/javascript" src="../recursos/js/formularioidena.js"></script>
     <link rel="shortcut icon" type="image/x-icon" href="../recursos/imagenes/favicon.ico">    <!icono de DUINNA en la pestaña (tittle)>
  
 <div style="color: #0489B1; font-size: 1.1em; "><b style="margin-left: 4%; "><script> document.write(new Date())</script></b></div> <!muestra la fecha y la hora>

<div style="position: relative;margin-top: -1.2%; margin-left: 75%; color: #04B404; font-size: 18px;"> <p  " class="nombreUsuario"  ><B>Bienvenid@ <?php echo $_SESSION['username'];?> &nbsp;<?php    
 echo$_SESSION['apellido']?></B></p></div>


</head>
<body>
  <header>
    <center>
       <head><img align="center" src="piedepagina.jpg" width="1330" height="80">
       <img src="DUINNA.jpg" style="width: 50%;
    height: 189px;"></head>
</center>
</header>
      


      <P style="background-color:lightgrey" align="center"><b>Data única de incorporación de niños, niñas y adolescentes</b></p>
   
   
     <form action="terceraparteidena.php" method="post">
                  <!INCLUIR>




  <br>  <br>                                            <!reloj>

  <div class='container'>
 <center> <div id="reloj">IDENNA</div></center> 
  <script src="js/jquery.js"></script>



 
  <script>
      $( document ).ready(function(){
       
      //Evento que actualiza el reloj cada un segundo           //reloj
      setInterval(actualizarReloj,1000);
     
      //Función para actualizar el reloj
      function actualizarReloj(){
        fechaActual = new Date();
        hora = fechaActual.getHours()                       //reloj
        minuto = fechaActual.getMinutes()
        segundo = fechaActual.getSeconds()
       
        $('#reloj').text(hora + ':' + minuto + ':' + segundo);
      }
       
      //Actualizamos al iniciar la página
      actualizarReloj();
    });

  </script>














<table bgcolor="#999" style="margin-left: 250px" width="60%">
</br></br></br>
        <tr></br>
            <td> <font style="margin-left: 10px" size="4"><b>Actividades Recreativas</b></font> </td>
        </tr>

     </table>
     <br>


</head>

<script>

var mostrarValor = function(x){
document.getElementById('ecologiaspractica').value=x;
}
</script>


 <font style="margin-left: 250px" size="4"> <b>¿Practica ecologia?</b> </font>
    <select style="margin-left: 108px" id="practicaecologia" name="practicaecologia" required="complete este campo" onChange="mostrar(this.value);">
        <option value="" required="complete este campo" >Seleccione</option>
        <option value="ecologiasi" required="complete este campo" >Si</option>
        <option value="ecologiano" required="complete este campo" >No</option>
    
     </select>
     </br></br>

<font style="margin-left: 250px" size="4"><b>¿Que practica en la ecologia?</b></font>
<input style="margin-left: 23px" size="40" type="tex"placeholder="Indique la ecologia" name="ecologiaspractica" id="ecologiaspractica" value="" required="complete este campo" pattern="{2,}" >

<select name="pracecologia" onchange="mostrarValor(this.value);">
<option value="">Seleccione</option>
<option value="N/A">N/A</option>

</select>
</br></br>



</br></br></br>







<input class='btn btn-lg btn-primary btn-block btn-signin' style="margin-left: 250px" size="40" type="submit" name="incluir" value="INCLUIR">

</form>

<footer id="footer2" style="background-color: #999"> <address style="margin-left: 30%;"> <font color="white"><center></b> Intranet Idena - Copyletf2015 Instituto Anonimo Consejo Nacional de Derechos de Niñas, Niños y Adolescentes &copy; <br>
  Todos los derechos reservados &copy; </b></font> <br> </address> </footer>

</body>
</html>
