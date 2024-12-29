<?php
session_start();
class IngresarDatos {

    public $ESTATUS="ACTIVO";
    


    public function Add_padre(){
    	include('../modelo/mod_conexion.php');
    	//carga lo que recibe por post. los datos del representante

							$nacionalidad=strtoupper($_POST['nacionalidad1']);
							$cedula=$_POST['cedula'];
              $num_hijos=$_POST['num_hijos'];
							$primer_nombre=strtoupper($_POST['primernombrepadre']);
							$segundo_nombre=strtoupper($_POST['segundonombrepadre']);
							$primer_apellido=strtoupper($_POST['primerapellidopadre']);
							$segundo_apellido=strtoupper($_POST['segundoapellidopadre']);
							$parentesco=strtoupper($_POST['nacionalidad']);
              $parroquia=strtoupper($_POST['parroqia']);
							$fecha_naci=$_POST['fechadenacimientopadre'];
							$edad=strtoupper($_POST['años']);
							$sexo=strtoupper($_POST['sexopadre']);
							$estado_civil=strtoupper($_POST['civilpadre']);
							$telefono=$_POST['telefonopadre'];
              $estado=strtoupper($_POST['Estado']);
              $municipio=strtoupper($_POST['municipio']);
							$correo=strtoupper($_POST['mail']);
							$trabajo=strtoupper($_POST['trabajo']);
							$direccion=strtoupper($_POST['direccion']);
      
    
             //para relcionar la llave foranea
							
               
     
              //genera el la id del Nna
                $codigo= $cedula.'-'.$num_hijos;

   //   $_SESSION['NUM_NNA']=$codigo;
     // echo $codigo;

  include ("../modelo/mod_conexion.php");

      //hace una consulta de usuario ingresado
      $consulta=pg_query($con,"SELECT cedula FROM  datos_representante_nna where cedula  = '$cedula' ");

                 //valida si el el numero del hijo existe ya exixte
                if(pg_num_rows ($consulta) ==0 ){
                //CAPTURA LA PRIMARY KEY DEL NNA

                       $_SESSION['NUM_NNA']=$codigo;

                    $_SESSION['fk'] = $cedula;
                       $foranea = $_SESSION['fk'];

      



    $q=" INSERT INTO  datos_representante_nna (nacionalidad1,cedula,primer_nombre,segundo_nombre,primer_apellido,segundo_apellido,parentesco,fecha_naci,edad,sexo,estado_civil,telefono,correo,trabajo,num_hijos,codigo) values ('$nacionalidad','$cedula','$primer_nombre','$segundo_nombre','$primer_apellido','$segundo_apellido','$parentesco','$fecha_naci','$edad','$sexo','$estado_civil','$telefono','$correo','$trabajo','$cedula','$codigo');";
               

                        if (!$q) {

                                    ?><script>
                                      alert('No se pudo crear el usuario, intentelo de nuevo más tarde.');
                                    </script>

                                    <?php


                               exit;
                                   
                                 } 
                                     
                                     $sql=pg_query($q);
                                                    //$sql=null;
                                                     $this->$q=null;       
                                                      
     
    
    
      
     
;;
                



    $direccion="INSERT INTO  ubicacion_nna (estado,municipio,parroquia,direccion_sector,codigo,num_hijos,estatus) values ('$estado','$municipio','$parroquia','$direccion','$codigo','$foranea','$this->ESTATUS');";
               

                        if (!$direccion) {

                                    ?><script>
                                      alert('No se pudo crear el usuario, intentelo de nuevo más tarde.');
                                    </script>

                                    <?php


                               exit;
                                   
                                 } 
                                            
                                                    $sql=pg_query($direccion);
                                                    //$sql=null;
                                                     $this->$direccion=null;   


      
    
    
      


 


                                               

               ?>
               <script type="text/javascript">
                 
                 window.location="../vista/formularioidena.php";
               </script>
               <?php                                                                                     



        exit;


  }else{




               ?>
               <script type="text/javascript">
                alert('Ya existe un representante registado con ese documento, ingrese uno válido.');
                 
                 window.location="../vista/preguntadecedulapadre.php";
               </script>
               <?php  




  }

        
							
							
						






    }
    



}





?>