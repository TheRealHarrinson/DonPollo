<?php

include("bd.php");

$ConsultaE= "SELECT * FROM proyecto where CodigoProyecto='".$Registro["CodigoProyecto"]."'";

$ResultadoE=FALSE;
    try {
        $ResultadoE= mysqli_query($Conexion, $ConsultaE);
    }
    catch (exception $e)
        { $Mensaje="No se pudo consultar el proyecto";
         //print $e->getMessage();
         print $e->ResultadoE(); 
         //$error=$Se->getMessage();
        }
   

if($ResultadoE == False) { $Mensaje="No se pudo consultar el proyecto";
                     //die($mysqli_error($Conexion)); 
                     }
else {
     $RegistroE=$ResultadoE->fetch_assoc();
     echo $RegistroE["NombreProyecto"];
   
}


 

   


?>