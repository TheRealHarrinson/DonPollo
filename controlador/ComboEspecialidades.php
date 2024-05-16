<?php

include("bd.php");

$ConsultaEsp="SELECT * FROM especialidad";
//echo $Consulta;
$ResultadoEsp=FALSE;

    try {
        $ResultadoEsp= mysqli_query($Conexion, $ConsultaEsp);
    }
    catch (exception $e)
        { $Mensaje="No se pudo registrar el estudiante por error de los datos";
         //print $e->getMessage();
         print $e->Resultado(); 
         //$error=$Se->getMessage();
        }
   

if($ResultadoEsp == False) { $Mensaje="No se pudo registrar el proyecto";
    //die($mysqli_error($Conexion)); 
    }
else {
     echo '<select name="EspecialidadEstudiante" id="EspecialidadEstudiante">';
     while($RegistroEsp=$ResultadoEsp->fetch_assoc()){
        echo '<option value="'.$RegistroEsp["CodigoEspecialidad"].'">'.$RegistroEsp["NombreEspecialidad"].'</option>';

     }//Fin del ciclo del listado de especialidades
     echo '</select>';
}

?>