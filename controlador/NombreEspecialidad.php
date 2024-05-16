<?php

include("bd.php");

$ConsultaE = "SELECT * FROM especialidad where CodigoEspecialidad='".$Registro["CodigoEspecialidad"]."'";

$ResultadoE=FALSE;

    try {
        $ResultadoE= mysqli_query($Conexion, $ConsultaE);
    }
    catch (exception $e)
        { $Mensaje="No se pudo consultar la especialidad";
         //print $e->getMessage();
         print $e->ResultadoE(); 
         //$error=$Se->getMessage();
        }
   

if($ResultadoE == False) { $Mensaje="No se pudo consultar la especialidad";
                     //die($mysqli_error($Conexion)); 
                     }
else {
     $RegistroE=$ResultadoE->fetch_assoc();
     echo $RegistroE["NombreEspecialidad"];
   
}


 

   


?>