<?php
//print_r($_POST);


  


if(isset($_POST['incluir']) && !empty($_POST['incluir'])){
	include_once('../modelo/mod_ingresar_datos_educativos_Nna.php');


		$AddEdu=new IngresarDatosEducativos();
        $AddEdu->AddDatosEducativos();




}else{



?>
<script type="text/javascript">
	
     alert('Asegúrese de llenar los datos educativos del Nna!');

     window.location="../vista/segundaparteidena.php";


</script>
<?php
exit();

}












?>