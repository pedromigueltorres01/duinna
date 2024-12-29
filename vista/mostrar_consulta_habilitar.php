<?php
 session_start();
 ob_start();
 include('../controlador/validar_sessiones.php');
 verificar_session();
 
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Reporte por NNA</title>
  <link rel="stylesheet" type="text/css" href="../recursos/css/idena4.css" >
  <script type="text/javascript" src="../recursos/js/jquery.js"></script>
  <link rel="stylesheet" type="text/css" href="../recursos/css/idena3.css" >
  <link rel="stylesheet" type="text/css" href="../recursos/css/buscador.css" >
   <link rel="shortcut icon" type="image/x-icon" href="../recursos/imagenes/favicon.ico">    <!icono de DUINNA en la pestaña (tittle)>
  <link rel="stylesheet" type="text/css" href="../recursos/css/prueba.css" >
  <link rel="stylesheet" type="text/css" href="../recursos/css/menu.css">
     <script type="text/javascript" src="../recursos/js/jquery-1.3.2.min.js"></script>
<script language="javascript">
$(document).ready(function() {
  $(".botonExcel").click(function(event) {
    $("#datos_a_enviar").val( $("<div>").append( $("#Exportar_a_Excel").eq(0).clone()).html());
    $("#FormularioExportacion").submit();
});
});
</script>
<style type="text/css">
.botonExcel{cursor:pointer;}
</style>
  

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
      <head><img align="center" src="../vista/piedepagina.jpg" width="1330" height="80">
       <img src="../vista/DUINNA.jpg" style="width: 50%;
    height: 189px;"></head>


  





</body>


<head>
<html>
<section class="webdesigntuts-workshop">
  <form style= "margin-right: -77%; margin-top: -5%" id="searchform" action="../controlador/Con_Buscar_nna.php" method="POST">        
    <input type="search" name="NNA" placeholder="Buscar NNA..." required="complete este campo">         <!buscador>
    <button>Buscar</button>
  </form>
</section>
</html>

</head>







      <P style="background-color:lightgrey; width: 100%;" align="center"><b>Data única de incorporación de niños, niñas y adolescentes</b></p>





    </center>
  </br>
    <center>
<ul class="menu">
    <li><a href="../vista/Inicio.php">INICIO </a></li>
    <li><a href="../vista/preguntadecedulapadre.php">REGISTRO NNA </a>
    </li> <li><a href="#">GESTIONAR NNA </a>
        <ul>
             <li><a href="../vista/inhabilitar_nna.php">INHABILITAR NNA </a></li>
             <li><a href="../vista/habilitar_nna.php">HABILITAR NNA </a></li>
             <li><a href="../vista/modifica_nna.php">MODIFICAR DATOS DEL NNA </a></li>
 
         </ul>
     <li><a href="#">REPORTES </a>
        <ul>
             <li><a href="../vista/Reportes_Estado.php">CONSULTA DE ESTADOS </a></li>
             <li><a href="../vista/Reporte_General_Estado.php">CONSULTA NACIONAL </a></li>
             
             <li><a href="../vista/Reportes_Programa.php">REPORTES POR PROGRAMAS</a></li>
             <li><a href="../vista/Reportes_General_Programa.php">REPORTES GENERAL POR PROGRAMAS </a></li>
           
         
 
         </ul>
    </li>
    <li><a href="#">REPORTES ESPECIFICO </a>
        <ul>
             <li><a href="../vista/Reporte_Discapacidad.php">DISCAPACIDAD </a></li>
             <li><a href="../vista/Repore_Etnia.php">PUEBLOS INDIGENAS </a></li>
             <li><a href="../vista/Reporte_Escolarizado.php">ESCOLARIZADO </a></li>
              <li><a href="../vista/buscar_familiares.php">FAMILIAR </a></li>
             
         
 </li>
         </ul>

         <li><a href="#">PRIVILEGIOS </a>
        <ul>
             <li><a href="../vista/crear_usu_login.html.php">CREAR USUARIO </a></li>
             <li><a href="../vista/consul_usuario.php">CONSULTAR USUARIO </a></li>
             <li><a href="../vista/buscar_usuario_modificar.php">MODIFICAR USUARIO </a></li>
               <li><a href="../vista/cambiar_estatus_usuario.php">ELIMINAR USUARIO</a></li>
                 <li><a href="../vista/consulta_de_usuarios_inactivos.php">COSULTAR USUARIOS ELIMINADOS </a></li>
                   <li><a href="../vista/activar_recuperar_usurios.php">RECUPERAR USUARIOS ELIMINADOS </a></li>
                     

             
         
 
         </ul>
    
    <li><a href="../recursos/pdfs/manual_de_usuario.pdf" download="Manual de Usuario">AYUDA </a></li>
    <li><a href="../vista/confirmar_salida.php">SALIR </a></li>
</ul></br></br>


</center></header>

  
</head>

<body>
       <table  style="margin-left: 0%" width="100%" border="1" cellpadding="12" cellspacing="0" bordercolor="#666666" id="Exportar_a_Excel" style="border-collapse:collapse;">
                    <tr><td colspan="14"><h2>Consulta Específica</h2></td>
                    </tr>
                  <tr bgcolor="#913B3B"> 
                    <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Código</td>
                    <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Nacionalidad</td>
                    <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Cédula</td>
                    <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Nombre</td>
                    <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Apellido</td>
                    <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Fecha de Nacimiento</td>
                    <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Edad en la que ingresó al programa</td>
                    <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Sexo</td>
                    <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Estado civil</td>
                    <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Telefono</td>
                    <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Correo</td>
                    <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Estatus</td>
                    <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Registrado por</td>
                    <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Cedula</td>
                  </tr>
                    <?php
$datas=$_SESSION['dat'];
               ?>
                 <tr>
                <td style="padding: 15px;"> <?php echo $datas["0"]."\n"; ?></td> 
                <td style="padding: 15px;"><?php echo $datas["1"]."\n"; ?></td>
                <td style="padding: 15px;"><?php echo $datas["2"]."\n"; ?></td>
                <td style="padding: 15px;"><?php echo $datas["3"]."\n"; ?> </td>
                <td style="padding: 15px;"><?php echo $datas["4"]."\n"; ?> </td>
                <td style="padding: 15px;"><?php echo $datas["5"]."\n"; ?></td>
                <td style="padding: 15px;"><?php echo $datas["6"]."\n"; ?></td>
                <td style="padding: 15px;"><?php echo $datas["7"]."\n"; ?></td>
                <td style="padding: 15px;"><?php echo $datas["8"]."\n"; ?></td>
                <td style="padding: 15px;"><?php echo $datas["9"]."\n"; ?></td>
                <td style="padding: 15px;"><?php echo $datas["10"]."\n"; ?></td>
                <td style="padding: 15px;"><?php echo $datas["11"]; ?></td>
                <td style="padding: 15px;"><?php echo $datas["12"]; ?></td>
                <td style="padding: 15px;"><?php echo $datas["13"]."\n"; ?></td>

<script type="text/javascript">
          alert('El NNA se encuentra INHABILITADO, desea HABILITAR?');
        </script>




                   
                    </tr>
</table>
<table><tr><td><form action="../controlador/con_gestionar_nna.php" method="post">
<input class='btn btn-lg btn-primary btn-block btn-signin' style="margin-left: 30px; margin-top: 4%" size="40" type="submit" name="HABILITAR" value="Habilitar"> </form></td>

</tr></table>



  
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>
    
    
</body>
