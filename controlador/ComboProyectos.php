<?php

include("bd.php");

$ConsultaPro="SELECT * FROM Proyecto";
//echo $Consulta;
$ResultadoPro=FALSE;

    try {
        $ResultadoPro= mysqli_query($Conexion, $ConsultaPro);
    }
    catch (exception $e)
        { $Mensaje="No se pudo registrarlos proyectos";
         //print $e->getMessage();
         print $e->Resultado(); 
         //$error=$Se->getMessage();
        }
   

if($ResultadoPro == False) { $Mensaje="No se pudo registrarlos proyectos";
    //die($mysqli_error($Conexion)); 
    }
else {
     echo '<select name="ProyectoEstudiante" id="ProyectoEstudiante">';
     while($RegistroPro=$ResultadoPro->fetch_assoc()){
        echo '<option value="'.$RegistroPro["CodigoProyecto"].'" selected>'.$RegistroPro["NombreProyecto"].'</option>';

     }//Fin del ciclo del listado de especialidades
     echo '</select>';
}

?>
     