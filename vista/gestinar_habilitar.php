<?php
 session_start();

 include('../controlador/validar_sessiones.php');
 verificar_session();
 
?>
<meta charset="utf-8">
    <title>INHABILITAR</title>
  <script type="text/javascript" src="../recursos/js/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="../recursos/css/idena4.css">
  <link rel="stylesheet" type="text/css" href="../recursos/css/buscador.css" >
  <link rel="stylesheet" type="text/css" href="../recursos/css/prueba.css" >
    <link rel="stylesheet" type="text/css" href="../recursos/css/reloj.css">
   <script type="text/javascript" src="../recursos/js/reloj.js"></script>
   <link rel="stylesheet" type="text/css" href="../recursos/css/estilo7.css">
   <link rel="stylesheet" type="text/css" href="../recursos/css/menu.css">
   <link rel="shortcut icon" type="image/x-icon" href="../recursos/imagenes/favicon.ico">    <!icono de DUINNA en la pestaña (tittle)>


<script src="jquery-1.4.2.minjs"></script>
</head>
<head><img align="center" src="../recursos/imagenes/piedepagina.jpg" width="1330" height="80">
       </head>

<body>
  <img src="../recursos/imagenes/DUINNA.jpg" style="width: 50%;
    margin-left: 20%;
    height: 190px;">


<P style="background-color:lightgrey; width: 100%;" align="center"><b>Data única de incorporación de niños, niñas y adolescentes</b></p>
    </center>
</body>
</br>
 <center>
<ul class="menu">
   <li><a href="../vista/Inicio.php">INICIO</a></li>
    <li><a href="../vista/preguntadecedulapadre.php">REGISTRO NNA</a></li>
     <li><a href="#">REPORTES</a>
        <ul>
             <li><a href="../vista/Reportes_Estado.php">ESTADO</a></li>
             <b>------PROGRAMAS PREVENTIVOS------</b>
             <li><a href="../vista/Reportes_Programa.php">SEMILLERO DE LA PATRIA "SIMÒN BOLIVAR"</a></li>
             <li><a href="../vista/Reportes_Programa.php">SOMBRERO DE LA Ñ</a></li>
             <li><a href="../vista/Reportes_Programa.php">C.C.P.I</a></li>
             <li><a href="../vista/Reportes_Programa.php">BRIGADA COMUNICACIONAL</a></li>
             <li><a href="../vista/Reportes_Programa.php">PROVINNA</a></li>
         
 
         </ul>
    </li>
    <li><a href="#">REPORTE ESPECIFICO </a>
        <ul>
             <li><a href="../vista/Reporte_Discapacidad.php">DISCAPACIDAD</a></li>
             <li><a href="#">PUEBLOS INDIGENAS</a></li>
             <li><a href="../vista/Reporte_Escolarizado.php">ESCOLARIZADO(ESCUELA)</a></li>
             
         
 </li>
         </ul>

         <li><a href="#">PRIVILEGIOS</a>
       <ul>
             <li><a href="../vista/crear_usu_login.html.php">CREAR USUARIO</a></li>
             <li><a href="../vista/consul_usuario.php">CONSULTAR USUARIO</a></li>
             <li><a href="../vista/buscar_usuario_modificar.php">MODIFICAR USUARIO</a></li>
               <li><a href="../vista/cambiar_estatus_usuario.php">ELIMINAR USUARIO</a></li>
                 <li><a href="../vista/consulta_de_usuarios_inactivos.php">COSULTAR USUARIOS ELIMINADOS</a></li>
                   <li><a href="../vista/activar_recuperar_usurios.php">RECUPERAR USUARIOS ELIMINADOS</a></li>
                     

             
         
 
         </ul>
    <li><a href="../recursos/pdfs/manual_de_usuario.pdf" download="Manual de Usuario">AYUDA</a></li>
    <li><a href="../vista/confirmar_salida.php">SALIR</a></li>
</ul></br></br>

<html>
<section class="webdesigntuts-workshop">
 <form style= "margin-right:-2%; margin-top: 5%" id="searchform" action="../controlador/con_gestionar_nna.php" method="POST">      
    <input type="search" name="NNA" placeholder="Buscar NNA..." required="complete este campo">         <!buscador>
    <button>Buscar</button>
  </form>
</section>
</html>










