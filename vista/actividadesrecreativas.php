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
  <script type="text/javascript" src="../recursos/js/jquery.js"></script>
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
   
   
     <form action="../controlador/con_actividadesrecreativas.php" method="post">
                  <!INCLUIR>




                                           <!reloj>

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











<div style="position: relative;margin-top: 6em;">


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
document.getElementById('pracdeporte').value=x;
}
</script>

 <font style="margin-left: 250px" size="4"> <b>Practica alguna actividad extracurricular</b> </font>
    <select style="margin-left: 24px" id="practicadeporte" name="practicadeporte" required="complete este campo" onChange="mostrar(this.value);">
        <option value="" required="complete este campo" >Seleccione</option>
        <option value="No Aplica" required="complete este campo" >No Aplica</option>
        <option value="Natación" required="complete este campo" >Deportiva</option>
        <option value="Fútbol" required="complete este campo" >Cultural</option>
        <option value="Voleibol" required="complete este campo" >Científica</option>
        <option value="Baloncesto" required="complete este campo" >Ecológica</option>
    
     </select>
</div>
</br>


      
       <br>


</br></br>

</br></br>



</br></br></br>







<input class='btn btn-lg btn-primary btn-block btn-signin' style="margin-left: 250px" size="40" type="submit" name="incluir" value="INCLUIR">

</form>
</br></br></br></br></br></br></br></br></br></br>
<footer id="footer2" style="background-color: #999"> <address style="margin-left: 30%;"> <font color="white"><center></b> Intranet Idena - Copyletf2015 Instituto Anonimo Consejo Nacional de Derechos de Niñas, Niños y Adolescentes &copy; <br>
  Todos los derechos reservados &copy; </b></font> <br> </address> </footer>

</body>
</html>
