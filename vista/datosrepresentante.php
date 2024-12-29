<?php
 session_start();

 include('../controlador/validar_sessiones.php');
 verificar_session();
 
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Datos del NNA</title>
  <script type="text/javascript" src="../recursos/js/jquery-3.3.1.min.js"></script>
 
  
  <link rel="stylesheet" type="text/css" href="../recursos/css/idena3.css">
    <link rel="stylesheet" type="text/css" href="../recursos/css/idena4.css">
  <link rel="stylesheet" href="../recursos/css/estilos.ccs">
  <link rel="stylesheet" href="../recursos/css/estilosdenombredeusuario.css">


  <link rel="shortcut icon" type="image/x-icon" href="../recursos/imagenes/favicon.ico">    <!icono de DUINNA en la pestaña (tittle)>
  <script type="text/javascript" src="../recursos/js/jquery.js"></script>
  <script type="text/javascript" src="../recursos/js/formularioidena.js"></script>
       <link rel="stylesheet" type="text/css" href="">






       <script lenguage="javascript">
    //function que me carga los municipios
      $(document).ready(function(){
        $("#cbx_estado").change(function () {
          $('#cbx_parroquia').find('option').remove().end().append('<option value="whatever">Selecione</option>').val('whatever');
          
          
          $("#cbx_estado option:selected").each(function () {
            id_estado = $(this).val();
            $.post("../controlador/getMunicipio.php", { id_estado: id_estado }, function(data){
              $("#cbx_municipio").html(data);
            });            
          });
        })
      });
      
      //hasta que es la function de los municipios

      
      //aqui inicia la de las parroquias
      $(document).ready(function(){
        $("#cbx_municipio").change(function () {
 
          //$('#cbx_parroquia').find('option').remove().end().append('<option value="whatever"></option>').val('whatever');
          
          $("#cbx_municipio option:selected").each(function () {
            id_municipio = $(this).val();
            $.post("../controlador/getParroquia.php", { id_municipio: id_municipio }, function(data){
              $("#cbx_parroquia").html(data);
            });            
          });
        })
      });
      
      
    </script>






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


  

<head>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
function mostrar4(id) {
    if (id == "posee_trabajo") {
        $("#posee_trabajo").show();
        $("#no_trabajo").hide();
        
    }
   
    if (id == "no_trabajo") {
        $("#posee_trabajo").hide();
        $("#no_trabajo").show();
      
    }
 
}
</script>


</head>

<?php
require("../modelo/mod_conexion.php");
$result = pg_query($con,"SELECT id_estado,estado from estados order by estado asc;");
    ?>













      <P style="background-color:lightgrey; width: 100%;" align="center"><b>Data única de incorporación de niños, niñas y adolescentes</b></p>





    </center>
    


<form id="combo" name="combo"  action="../controlador/con_datos_representante.php" method="POST">   <!INCLUIR>


<font FACE="arial">

      <table bgcolor="#999" style="margin-left: 250px" width="60%">

        <tr>
            <td> <font style="margin-left: 15px" size="4"><b>Datos del Representante</b></font> </td>
        </tr>


     </table> <!franja gris>
<b>


</br>


<font style="margin-left: 13.7em;" size="4">Documento de Identidad</font>
          <input id="direccion" placeholder="Documento de Identidad" style="margin-left: 6em;" size="40" type="tex" name="cedula" required="complete este campo">




</br></br>
    <font style="margin-left: 13.7em;" size="4">Nacionalidad</font>
      <select style="margin-left: 13.7em;" name="nacionalidad1" required="complete este campo">

 <option  value="" required="complete este campo">Seleccione</option>

<option value="V" required="complete este campo">V</option>

<option value="E" required="complete este campo">E</option>
      </select> <!nacionalidad del representante> 


<br><br>


<font style="margin-left: 13.7em;" size="4">Primer Nombre </font>
<input style="margin-left: 12em;" size="40" type="tex" placeholder="Primer Nombre" name="primernombrepadre" required pattern="[a-z,A-Z]{3,}" required="complete este campo" >
<br><br>
<font style="margin-left: 13.7em;" size="4">Segundo Nombre  </font>
<input style="margin-left: 10.5em;" size="40" type="tex" placeholder="Segundo Nombre" name="segundonombrepadre" pattern="[a-z,A-Z]{3,}" >
<br><br>
<font style="margin-left: 13.7em;" size="4">Primer Apellido</font>
<input style="margin-left: 11.9em;" size="40" type="tex" placeholder="Primer Apellido" name="primerapellidopadre" required pattern="[a-z,A-Z]{3,}" required="complete este campo">
<br><br>
<font style="margin-left: 13.7em;" size="4">Segundo Apellido</font>
<input style="margin-left: 10.4em;" size="40" type="tex" placeholder="Segundo Apellido" name="segundoapellidopadre" pattern="[a-z,A-Z]{3,}" >
<br><br>

          <font style="margin-left: 13.7em;" size="4">Parentesco</font>
      <select style="margin-left: 14.6em;" name="nacionalidad" required="complete este campo">

           <option value="" required="complete este campo">Seleccione</option>
<option value="papá" required="complete este campo">Papá</option>
<option value="mamá" required="complete este campo">Mamá</option>
<option value="tio" required="complete este campo">Tio</option>
<option value="tia" required="complete este campo">Tia</option>
<option value="hermano" required="complete este campo">Hermano</option>
<option value="hermana" required="complete este campo">Hermana</option>
<option value="abuelo" required="complete este campo">Abuelo</option>
<option value="abueña" required="complete este campo">Abuela</option>
      </select> <! <!parentesco del representante con el NNA>

    



<script language="JavaScript">
function edad(Fecha){
fecha = new Date(Fecha)
hoy = new Date()

ed = parseInt((hoy -fecha)/365/24/60/60/1000)
document.getElementById('años').value = ed  
}
</script>

<br><br>
<font style="margin-left: 13.7em;" size="4">Fecha de Nacimiento</font>
<input style="margin-left: 8.2em;" size="40" type="date" name="fechadenacimientopadre" required="complete este campo" onblur="edad(this.value)"  step="1" min="1900-01-01" max="2008-12-31">
<br><br>

 <b><font style="margin-left: 13.7em;" size="4"> Edad</b> <input placeholder="Edad" required="complete este campo" name="años" id="años" style="margin-left: 0.1em;"> </br></br><!edad>


<font style="margin-left: 13.7em;" size="4"><b>Sexo</font>
      <select style="margin-left: 18.6em;" name="sexopadre" required="complete este campo">

 <option  value="" required="complete este campo">Seleccione</option>

<option value="M" required="complete este campo">Masculino</option>

<option value="F" required="complete este campo">Femenino</option>
      </select> <!sexo del padre> 



</br>

</br>
<font style="margin-left: 13.7em;" size="4"><b>Estado civil</font>
      <select style="margin-left: 14.5em;" name="civilpadre" required="complete este campo">

 <option  value="" required="complete este campo">Seleccione</option>

<option value="soltero" required="complete este campo">Soltero/a</option>

<option value="casado" required="complete este campo">Casado/a</option>
      </select> <!estado civil del padre> 



















      <br/><br/><font style="margin-left: 13.7em;" size="4"><b>Teléfono</b> 
        <input style="margin-left: 16.4em;" name="telefonopadre" placeholder="Número de Teléfono" required pattern="[0-9]{10,}"></br></br> <!telefono del representante>




<div> <label style="margin-left: 13.7em;" for="es_tado">Estado</label> <select style="margin-left: 17.6em;" name="cbx_estado" id="cbx_estado" required="complete este campo">
                          <option value="">Selecione</option><?php

    while ($rowE = pg_fetch_array($result)) {

      ?>
                   <option value=" <?php echo "   $rowE[0]";?> "> <?php echo "   $rowE[1]";?></option>
                         
                <?php
      
    }
    ?>
    </select>
    </div> 


<br>


<div>
  <font style=""><label style="margin-left: 13.7em;" for="mu_nicipio">Municipio</label></font>
            <select id="cbx_municipio" name="cbx_municipio" style="margin-left: 15.7em;" required="complete este campo"></select></div>

</br>

      <div>
  <font style=""><label style="margin-left: 13.7em;" for="pa_rroqia">Parroquia</label></font>
            <select id="cbx_parroquia" name="cbx_parroquia" style="margin-left: 15.7em;" required="complete este campo">            

            </select>
</div>






</br>

    <label style="margin-left: 250px" size="4" for="mail">Correo Electrónico</label>
  <input placeholder="Email" style="margin-left: 9.5em;" required="complete este campo" id="email" id="emailOK" name="mail">
<script type="text/javascript">document.getElementById('email').addEventListener('input', function() {
    campo = event.target;
    valido = document.getElementById('emailOK');
        
    emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
    //Se muestra un texto a modo de ejemplo, luego va a ser un icono
    if (emailRegex.test(campo.value)) {
      valido.innerText = "válido";
    } else {
      valido.innerText = "incorrecto";
    }
});</script>

<br><br>





<table>





<font style="margin-left: 13.7em;" size="4"><b>Trabajo</font>

<select style="margin-left: 17.6em;" name="trabajo" onChange="mostrar4(this.value);">

  
<option value="" required="complete este campo">Seleccione</option>

<option value="posee_trabajo" >Si</option>

<option value="no_trabajo" required="complete este campo">No</option>


<


</select>
<br>
      <div id="posee_trabajo" class="element" style="display: none;">
  
    
      </br><font style="margin-left:13.7em;">Indique cual</font>
      <input  style="margin-left:14.1em;" placeholder="Indique el trabajo"  type="text" name="trabajo">
       
    
</div>



 <div id="no_trabajo" class="element" style="display: none;">
  
    
    
      <font style="margin-left: 370px" value="no_trabajo" type="text" name="no_trabajo" >
      </font>
       
    
</div>
      <br>
       





          <font style="margin-left: 13.7em;" size="4">Dirección del hogar</font>
          <input id="direccion" placeholder="    Dirección de su vivienda" style="margin-left: 9.2em;" size="40" type="tex" name="direccion" required="complete este campo">



</br></br>
<font style="margin-left: 13.7em;" size="4"><b>Número del hijo</font>
      <select style="margin-left: 11.5em;" name="num_hijos" required="complete este campo">

 <option  value="" required="complete este campo">Seleccione</option>

<option value="1" required="complete este campo">1</option>
<option value="2" required="complete este campo">2</option>
<option value="3" required="complete este campo">3</option>
<option value="4" required="complete este campo">4</option>
<option value="5" required="complete este campo">5</option>
<option value="6" required="complete este campo">6</option>
<option value="7" required="complete este campo">7</option>
<option value="8" required="complete este campo">8</option>
<option value="9" required="complete este campo">9</option>
<option value="10" required="complete este campo">10</option>
<option value="11" required="complete este campo">11</option>
<option value="12" required="complete este campo">12</option>
<option value="13" required="complete este campo">13</option>
<option value="14" required="complete este campo">14</option>
<option value="15" required="complete este campo">15</option>
<option value="16" required="complete este campo">16</option>
<option value="17" required="complete este campo">17</option>
<option value="18" required="complete este campo">18</option>
<option value="19" required="complete este campo">19</option>
<option value="20" required="complete este campo">20</option>


      </select> <!numero del hijo>


     
</br></br></br></br></br></br>





 

          </form>
</br>
</br>

<input class='btn btn-lg btn-primary btn-block btn-signin' style="margin-left: 300px" size="40" type="reset" name="borrar" value="Borrar" <!--onclick=" alert('BORRADO');"--/>


<input class='btn btn-lg btn-primary btn-block btn-signin' style="margin-left: 300px" size="40" type="submit" name="incluir" value="Enviar" >



</font>

<!--<script><div class="n"><div class="n">
<a href="#" title="Ir arriba"><img alt="Ir arriba" border="0"
src="file:///C:/Users/1234/Desktop/Nueva%20carpeta/IDENNA(formulario)/formularioidena.html"
style=position:fixed;botttom:0;right:0;/></a></div></script>*/-->

<footer id="footer2" style="background-color: #999"> <address style="margin-left: 30%;"> <font color="white"><center></b> Intranet Idena - Copyletf2015 Instituto Anonimo Consejo Nacional de Derechos de Niñas, Niños y Adolescentes &copy; <br>
  Todos los derechos reservados &copy; </b></font> <br> </address> </footer>



</body>

</html>

<style>
.btn {
    font-weight: 700;
    height: 36px;
    -moz-user-select: none;
    -webkit-user-select: none;      /*botones del incluir y borrar*/
    user-select: none;
    cursor: pointer;

  color:white;
  background-color:#0d8efc;
  border-color:#0fdb4eba;
}
</style>
<style>
input {
    -webkit-appearance: textfield;
    background-color: white;
    -webkit-rtl-ordering: logical;
    cursor: text;
    padding: 1px;
    border-width: 2px;                                       /*borde de los input*/
    border-top-width: 3px;
    border-right-width: 2px;
    border-bottom-width: 2px;
    border-left-width: 4px;
    border-style: inset;
    border-color: initial;
    border-image: initial;
    border-radius: 30px;
}
</style>

<style>
select {
    border-radius: 30px;
    border-color: rgb(169, 169, 169);        /*borde de los select*/
}
}
</style>

<style>
input:focus {
background-color:#08ff64;
border: 2px solid #00aeea;     /*color del input cuando le dan click*/
}
</style>


<style>
select:focus {
background-color:#08ff64;            /*color del select cuando le dan click*/
}
border: 2px solid #00aeea;
}
</style>
</html>


