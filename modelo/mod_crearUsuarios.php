s<?php

class CrearUsuarios{
	 private $estatus="ACTIVO";
   private $perfil1="ADMINISTRADOR";
   private $perfil2="COORDINADOR";
   private $perfil3="PROMOTOR";


public function Validar_Usua(){




$usuario=$_POST['usuario'];



			include ("../modelo/mod_conexion.php");

			//hace una consulta de usuario ingresado
			$consulta=pg_query($con,"SELECT usuario FROM  registro_usuario where usuario  = '$usuario' ");

			           //valida si el Usuario ya exixte
			          if(pg_num_rows ($consulta) ==0 ):


			$isert_regist =new CrearUsuarios();
			$isert_regist->add();


			  exit;


  endif;

				?>

					<script>
						alert('El Usuario ingresado ya existe; indique un Usuario válido.');
						window.location="../vista/crear_usu_login.html.php"
					</script>


				<?php

			
exit;




}
public function add(){
	include ("../modelo/mod_conexion.php");
	 //pasa el valor de post para hacer la insercion a la base de datos
           $nombre=strtoupper($_POST['nombre']);
           $apellido=strtoupper($_POST['apellido']);
           $usuario=$_POST['usuario'];
           $estado=strtoupper($_POST['estado']);
           $pass=$_POST['password'];
           $con_pass=$_POST['confirpassword'];
           $perfil=strtoupper($_POST['perfil']);
           //CIFRADO DE CONTRASEÑA
           $pass_cifrado=password_hash($pass, PASSWORD_DEFAULT);
           $pass_cifrado1=password_hash($con_pass, PASSWORD_DEFAULT);

        if($perfil== 'ADMINISTRADOR' )
        {
  

            //inserta los datos
           $q="INSERT INTO  registro_usuario (nombre,apellido,usuario,perfil,estado,passwords,confirpassword,estatus) values ('$nombre','$apellido','$usuario','$this->perfil1','$estado','$pass_cifrado','$pass_cifrado1','$this->estatus');";
           if (!$q) {

                  ?><script>
                    alert('No se pudo crear el usuario, intentelo de nuevo más tarde.');
                      window.location="../vista/Inicio.php";
                  </script>

                  <?php

              require("../index.php");
       exit;
           
         } 
                     
             	                $sql=pg_query($q);
                            //$sql=null;
                             $this->$q=null;
                             ?>
                              <script>
                                 alert('El usuario se creó correctamente, vaya a Privilegios, consulta de usuario y verifique sus datos.');
                                   window.location="../vista/Inicio.php";
                               </script><?php

                       
                   exit;
   
   
    }elseif ($perfil== 'COORDINADOR') {


            //inserta los datos
           $q="INSERT INTO  registro_usuario (nombre,apellido,usuario,perfil,estado,passwords,confirpassword,estatus) values ('$nombre','$apellido','$usuario','$this->perfil2','$estado','$pass_cifrado','$pass_cifrado1','$this->estatus');";
           if (!$q) {

            ?><script>
              alert('No se pudo crear el usuario, intentelo de nuevo más tarde.');
                window.location="../vista/Inicio.php";
            </script>

            <?php


       exit;
           
         } 
                    
                 $sql=pg_query($q);
                  //$sql=null;
                  $this->$q=null;
                              ?>
                         <script>
                           alert('El usuario se creó correctamente, vaya a Privilegios, consulta de usuario y verifique sus datos.');
                             window.location="../vista/Inicio.php";
                         </script><?php
                        
                   exit;
   
      # code...
   

    } else
  {
            $q="INSERT INTO  registro_usuario (nombre,apellido,usuario,perfil,estado,passwords,confirpassword,estatus) values ('$nombre','$apellido','$usuario','$this->perfil3','$estado','$pass_cifrado','$pass_cifrado1','$this->estatus');";
           if (!$q) 
        {   
                  ?><script>
                    alert('No se pudo crear el usuario, intentelo de nuevo más tarde.');
                      window.location="../vista/Inicio.php";
                      </script>
                  <?php
                 exit;
           
         } 
        

            $sql=pg_query($q);
  //$sql=null;
 $this->$q=null; ?>
                         <script>
                           alert('El usuario se creó correctamente, vaya a Provilegios, consulta de usuario y verifique sus datos.');
                             window.location="../vista/Inicio.php";
                         </script><?php


 

exit;

  }



}




}



?>