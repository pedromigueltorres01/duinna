<?php
		
		//print_r($_POST);
		if(isset($_POST['nacionalidad'])  && isset($_POST['primernombre']) && isset($_POST['primerapellido']) && isset($_POST['fechadenacimiento']) && isset($_POST['num_hijos'])&& isset($_POST['sexo']) && isset($_POST['civil']) && isset($_POST['programapreventivo']) && isset($_POST['fechaincorporacion'])  && isset($_POST['brigada']) && !empty($_POST['nacionalidad'])  && !empty($_POST['primernombre']) && !empty($_POST['primerapellido']) && !empty($_POST['fechadenacimiento']) &&!empty($_POST['num_hijos']) && !empty($_POST['num_hijos']) && !empty($_POST['sexo']) && !empty($_POST['civil']) && !empty($_POST['programapreventivo']) && !empty($_POST['fechaincorporacion']) && !empty($_POST['brigada'])){

						             $cedula=$_POST['cedula1'];
						            
						      // cosult que un nino exis en la base de datos con la misma id

									           //valida si el Usuario ya exixte
									         
									include_once('../modelo/mod_ingresar_registro_Nna.php');

						       $add=new IngresarRegistroNna();
						        $add->AddNna2();


									  exit;

			}else
			{


?>
								<script type="text/javascript">
									alert('Asegurese de llenar todos los campos!');
									window.location="../vista/formularioidena.php";
								</script>


<?php
						exit();
			}


?>