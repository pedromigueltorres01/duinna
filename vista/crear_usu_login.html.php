<?php
 session_start();

 include('../controlador/validar_sessiones.php');
 verificar_session();
 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="../recursos/js/jquery.1.8.1.js"></script>
  <script type="text/javascript" src="../recursos/js/login.js"></script>
  <link rel="stylesheet" type="text/css" href="../recursos/css/idena3.css">
  <script type="text/javascript" src="../recursos/js/jquery.js"></script>
  <link rel="stylesheet" type="text/css" href="../recursos/css/menu.css">
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



<title>Registro de Usuario</title>
<script>
function valida_registrar() {//función de validación

if (document.fvalida.nombre.value.length==0){
alert("Lo sentimos, hasta que no indique su nombre no podrá validar sus datos.")
document.fvalida.nombre.focus()

return 0;
}
if (document.fvalida.apellido.value.length==0){
alert("Lo sentimos, hasta que no indique su apellidos no podrá validar sus datos.")
document.fvalida.apellido.focus()
return 0;
}

/*if (document.fvalida.respuesta.value.length==0){
alert("Lo sentimos, hasta que no indique su respuesta no podrá validar sus datos.")
document.fvalida.respuesta.focus()
return 0;
}

if(document.fvalida.fecha.selectedIndex==""){
alert("Lo sentimos, hasta que no indique su fecha de nacimiento no podrá validar sus datos.")
document.fvalida.fecha.focus()
return 0;
}

if(document.fvalida.pregunta_s.selectedIndex==""){
alert("Lo sentimos, debe indicar su pregunta de Seguridad para poder valida sus datos.")
document.fvalida.mes.focus()
return 0;
}

if(document.fvalida.mes.selectedIndex==""){
alert("Lo sentimos, debe indicar el mes de nacimiento para poder valida sus datos.")
document.fvalida.mes.focus()
return 0;
}
F=document.fvalida.fecha.selectedIndex
M=document.fvalida.mes.selectedIndex
if(F==31&&M==2){
  alert("Lo sentimos, la fecha que indicó no existe")

  return 0;
  
}
else
  if(F==30&&M==2){
    alert("Lo sentimos, la fecha que indicó no existe.")

      return 0;
  }


if(document.fvalida.año.selectedIndex==""){
alert("losentimos, no indicó su año de Nacimiento, por favor indiquelo para validar.")
document.fvalida.año.focus()
return 0;
}
if(document.fvalida.sexo.selectedIndex==""){
  alert("lo sentimos, tiene que indicar su sexo para validar sus datos.")
document.fvalida.sexo.focus()
return 0;
}
*/

if (document.fvalida.usuario.value.length==0){
alert("Indique su usuario.")
document.fvalida.usuario.focus()
return 0;
}
if (document.fvalida.perfil.value.length==0){
alert("Indique el perfil de Usuario.")
document.fvalida.perfil.focus()
return 0;
}
if (document.fvalida.estado.value.length==0){
alert("Indique Estado al que pertenece, de lo contrario no podrá crear el usuario.")
document.fvalida.estado.focus()
return 0;
}
if (document.fvalida.password.value.length==0){
alert("Deba llenar el campo de la contraseña.")
document.fvalida.password.focus()
return 0;
}
if (document.fvalida.confirpassword.value!=document.fvalida.password.value){
alert("Las contraseñas no coinciden, intentelo de nuevo y asegúrese de que coincidan.")

return 0;
}
/*
if (document.fvalida.email.value.length==0){
  alert("debe ingresar su email.")
  
  return 0;
}/*else
 
 if (/ ^ [\W\.]+@+([\w-]\+.)[\W-][2,4]6/.test(fvalida.email)) {
    alert("la validacion "+ fvalida.email +" es correcta.")
   
return (true);
}else
{
alert("el correo es incorrecto!")
(document.fvalida.email.value.length==0)
return 0;}*/



document.fvalida.submit()

}
</script>

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
    <li><a href="../vista/Inicio.php">INICIO </a></li>
    <li><a href="../vista/preguntadecedulapadre.php">REGISTRO NNA </a></li> <li><a href="#">GESTIONAR NNA </a>
        <ul>
             <li><a href="../vista/inhabilitar_nna.php">INHABILITAR NNA </a></li>
             <li><a href="../vista/habilitar_nna.php">HABILITAR NNA </a></li>
             <li><a href="../vista/modifica_nna.php">MODIFICAR DATOS DEL NNA </a></li>
 
         </ul>
     <li><a href="#">REPORTES </a>
        <ul>
             <li><a href="../vista/Reportes_Estado.php">CONSULTA DE ESTADOS </a></li>
             <li><a href="../vista/Reporte_General_Estado.php">CONSULTA NACIONAL </a></li>
             
             <li><a href="../vista/Reportes_Programa.php">REPORTES POR PROGRAMAS </a></li>
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
               <li><a href="../vista/cambiar_estatus_usuario.php">ELIMINAR USUARIO </a></li>
                 <li><a href="../vista/consulta_de_usuarios_inactivos.php">COSULTAR USUARIOS ELIMINADOS </a></li>
                   <li><a href="../vista/activar_recuperar_usurios.php">RECUPERAR USUARIOS ELIMINADOS </a></li>
                     

             
         
 
         </ul>
    
    <li><a href="../recursos/pdfs/manual_de_usuario.pdf" download="Manual de Usuario">AYUDA </a></li>
    <li><a href="../vista/confirmar_salida.php">SALIR </a></li>
</ul></br></br>


</center>
</header>












<style>
.card-container.card {
    max-width: 350px;
    padding: 40x 40x;
}

.btn {
    font-weight: 700;
    height: 36px;
    -moz-user-select: none;
    -webkit-user-select: none;
    user-select: none;
    cursor: pointer;

  color:white;
  background-color:#0d8efc;
  border-color:#0fdb4eba;
}

/*
 * Card component
 */
.card {
    background-color: #00000017;
    /* just in case there no content*/
    padding: 20px 25px 30px;
    margin: 0 auto 25px;
    margin-top: 50px;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}
/*
.profile-img-card {
    width: 110 px;
    height: 110px;
    margin: 0 auto 10px;
    display: block;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}


 * Form styles
 */
.profile-name-card {
    font-size: 16px;
    font-weight: bold;
    text-align: center;
    margin: 10px 0 0;
    min-height: 1em;
}

</style>





  <div class="container">


      <div class='content'>
        <div class='page-header' style=' margin: 0px;'>
  
         </div>





<div class='container'>
        <div class='card card-container'>
            

            <p id='profile-name' class='profile-name-card'></p>






<center>
<h1>Crear usuario</h1>
</center>
<center>
<form name="fvalida" action="../controlador/class_registar.php" method="POST">
<table>
<tr>
<td><font style="margin-left: -230%">Nombre</font></td>
<td><input placeholder="Nombre" style="margin-left: -35%" type="text" name="nombre" size="30" maxlength="100" required="complete este campo" required pattern="[a-z,A-Z]{3,}"></td>
</tr>
<tr>
<td><font style="margin-left: -230%">Apellido</font></td>
<td><input placeholder="Apellido"style="margin-left: -35%" type="text" name="apellido" size="30" maxlength="100" required="complete este campo" required pattern="[a-z,A-Z]{3,}"></td>
</tr>

<tr>
<td><font style="margin-left: -230%">Usuario</font></td>
<td><input placeholder="Cédula" style="margin-left: -35%" type="number" name="usuario" size="30" maxlength="100" required="complete este campo" required pattern="[0-9]{6,}"></td>
</tr>
<tr><td><font style="margin-left: -230%">Perfil de Usuario</font></td>
<td><select style="margin-left: -35%" name="perfil">
  <option value="">Selecione</option>
  <option value="Administrador">Administrador</option>
  <option value="Coordinador">Coordinador</option>
  <option value="Promotor">Promotor</option>
</select></td></tr>
<tr>
<td><font style="margin-left: -230%">Estado</font></td>
<td>
  <select style="margin-left: -35%" name="estado">
  <option value="">Selecione</option>
  <option value="Amazonas">Amazonas</option>
  <option value="Anzoetegui">Anzoátegui</option>
  <option value="Apure">Apure</option>
  <option value="Aragua">Aragua</option>
  <option value="Barinas">Barinas</option>
  <option value="Bolivar">Bolívar</option>
  <option value="Carabobo">Carabobo</option>
  <option value="Cojedes">Cojedes</option>
  <option value="Delta Amacuro">Delta Amacuro</option>
  <option value="Distrito Capital">Distrito Capital</option>
  <option value="Falcon">Falcón</option>
  <option value="Guarico">Guárico</option>
  <option value="Lara">Lara</option>
  <option value="Merida">Mérida</option>
  <option value="Miranda">Miranda</option>
  <option value="Monagas">Monagas</option>
  <option value="Nueva Esparta">Nueva Esparta</option>
  <option value="Portuguesa">Portuguesa</option>
  <option value="Sucre">Sucre</option>
  <option value="Tachira">Táchira</option>
  <option value="Trujillo">Trujillo</option>
  <option value="Yaracuy">Yaracuy</option>
  <option value="Vargas">Vargas</option>
  <option  value="Zulia"> Zulia</option>
</select>
  </td>
</tr>
<tr>
<td><font style="margin-left: -230%">Password</font></td>
<td><input placeholder="Contraseña" style="margin-left: -35%" type="password" name="password" size="30" maxlength="100"></td>
</tr>
<tr>
<td><font style="margin-left: -230%">Confir. Password</font></td>
<td><input placeholder="Confirmar Contraseña" style="margin-left: -35%" type="password" name="confirpassword" size="30" maxlength="100"></td>
</tr>

</div>

<!--<tr>
  <td>Correo Electronico</td>
<td>
<input  type="email" id="email" pattern="[@]" name="email" required="Direccion de correo no valida" />
</td>
</tr>

<td>Pregunta de Seguridad</td>
<td>
  <select name="pregunta_s">
  <option value="pregunta_s">SELECCIONE
    <option value="pregunta_s">Cual es su color favorito
    <option value="pregunta_s">Cual es el nombre de su abuela
    <option value="pregunta_s">En cual ciudad nació
    <option value="pregunta_s">Cual es su película favorita
    
  </select>

<tr>
<td>Respuesta</td>
<td><input type="text" name="respuesta" size="30" maxlength="100"></td>
</tr>-->

<tr>
<td colspan="2"  align="center"><br> <input class='btn btn-lg btn-primary btn-block btn-signin' style="margin-left: -84%" type="button" value="Registrar" onclick="valida_registrar()">






  <input class='btn btn-lg btn-primary btn-block btn-signin' type="reset" value="Borrar"></td>


</tr>
</table>

</form>
</center>
</body>
</html>
