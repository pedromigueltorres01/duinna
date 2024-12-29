<?php
session_start();

class ModificarDatos{



		public function ConsultaModi(){

           include ("../modelo/mod_conexion.php");

			 $codigo=$_SESSION['codigo_consultaNNa'];

			 $estado=strtoupper($_POST['Estado_mod']);
			 $municipio=strtoupper($_POST['municipio_mod']);
			 $parooquia=strtoupper($_POST['parroqia']);
       $direccion_sector=strtoupper($_POST['direccion']);

         
	$consulta=pg_query("UPDATE ubicacion_nna set estado= '$estado'   WHERE codigo='$codigo' or num_hijos ='$codigo'");
	$consulta=pg_query("UPDATE ubicacion_nna set municipio= '$municipio'   WHERE codigo='$codigo' or num_hijos ='$codigo'");
	$consulta=pg_query("UPDATE ubicacion_nna set parroquia = '$parooquia'  WHERE codigo='$codigo' or num_hijos ='$codigo'");
    $consulta=pg_query("UPDATE ubicacion_nna set direccion_sector= '$direccion_sector'   WHERE codigo='$codigo' or num_hijos ='$codigo'");
 



		} public function ModificarPrograma(){


           include ("../modelo/mod_conexion.php");

            $codigo=$_SESSION['codigo_consultaNNa'];
            $programa=strtoupper($_POST['programapreventivo']);
            $ccpi=strtoupper($_POST['ccpi']);
            $brigada=strtoupper($_POST['brigada']);


           $consulta=pg_query("UPDATE programa_nna set asignar_programa= '$programa'   WHERE codigo='$codigo' or num_hijos ='$codigo'");
            $consulta=pg_query("UPDATE programa_nna set nombre_ccpi_grupo_codigo= '$ccpi'   WHERE codigo='$codigo' or num_hijos ='$codigo'");
             $consulta=pg_query("UPDATE programa_nna set lugar_funcionamiento= '$brigada'   WHERE codigo='$codigo' or num_hijos ='$codigo'");
 





       

  



		} public function ModificarCedula(){

               include ("../modelo/mod_conexion.php");              
               $codigo=$_SESSION['codigo_consultaNNa'];
                $cedulaNNA=$_POST['cambiar_cedula'];


             $consulta=pg_query("UPDATE datos_nna set cedula= '$cedulaNNA'   WHERE codigo='$codigo' or num_hijos ='$codigo'");


		}public function ModificarDatosEducativos(){

			  include_once("../modelo/mod_conexion.php");              
             $codigo=$_SESSION['codigo_consultaNNa'];
               $escolarizado=strtoupper($_POST['escolarizado']);
               $sabeleer=strtoupper($_POST['sabeleer']);
               $NivelEducativo=strtoupper($_POST['niveleducativo']);
               $turno=strtoupper($_POST['turno']);
               $ultimogradoaprovado=strtoupper($_POST['ultimogradoaprovado']);
               $institucion=strtoupper($_POST['institucion']);



 $consulta=pg_query("UPDATE datos_educativos_nna set   escolarizado= '$escolarizado'   WHERE codigo='$codigo' or num_hijos ='$codigo'");
$consulta=pg_query("UPDATE datos_educativos_nna set sabe_leer= '$sabeleer'   WHERE codigo='$codigo' or num_hijos ='$codigo'");
$consulta=pg_query("UPDATE datos_educativos_nna set institucion = '$institucion'  WHERE codigo='$codigo' or num_hijos ='$codigo'");
$consulta=pg_query("UPDATE datos_educativos_nna  set ultimo_grado_apro= '$ultimogradoaprovado'   WHERE codigo='$codigo' or num_hijos ='$codigo'");
$consulta=pg_query("UPDATE datos_educativos_nna  set turno = '$turno'   WHERE codigo='$codigo' or num_hijos ='$codigo'");
//$consulta=pg_query("UPDATE datos_educativos_nna  set nivel_educativo = '$NivelEducativo' WHERE codigo='$codigo' or num_hijos ='$codigo'");

		}
}
?>