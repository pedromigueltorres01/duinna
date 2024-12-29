<?php
        
  
                 function conex(){

                        //creación de la función para cargar los valores de la conexión.
        $con=pg_connect("host='localhost' port='5432' dbname='postgres'user='postgres'password='te319319'") or die ('Error de conexión. Póngase en contacto con el administrador');
                     


   			return $con;

                }
 
               
                
       
       
?>