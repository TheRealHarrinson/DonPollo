<?php

if(!empty($_GET["CodigoEspecialidad"])){
include("bd.php");
$CodigoEspecialidad=$_GET["CodigoEspecialidad"];
$ConsultaDel = "DELETE FROM especialidad WHERE especialidad.CodigoEspecialidad = ".$CodigoEspecialidad;

//echo $Consulta;

$ResultadoDel=FALSE;

    try {
        $Resultado= mysqli_query($Conexion, $ConsultaDel);
    }
    catch (exception $e)
        { $Mensaje="No se pudo eliminar la especialidad con codigo: ".$CodigoEspecialidad;
         print $e->getMessage();
         //print $e->Resultado(); 
         //$error=$Se->getMessage();
        }
   

if($ResultadoDel == False) { $Mensaje="se pudo eliminar la especialidad con codigo ".$CodigoEspecialidad;
    //die($mysqli_error($Conexion)); 
    }
else { $Mensaje="Se elimino la especialidad con codigo: ".$CodigoEspecialidad;
    
    }
 echo $Mensaje;   
}
?>




 

   



