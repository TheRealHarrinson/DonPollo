<?php
if (!empty ($_POST["CodigoEstudiante"]) && !empty($_POST["PrimerNombreEstudiante"] && !empty($_POST["PrimerApellidoEstudiante"] && !empty($_POST["CursoDeEstudiante"] && !empty($_POST["ProyectoEstudiante"] && !empty($_POST["EspecialidadEstudiante"])))))) { 
 $CodigoEstudiante = $_POST["CodigoEstudiante"] ;
 $PrimerNombreEstudiante = $_POST["PrimerNombreEstudiante"] ;
 $SegundoNombreEstudiante = $_POST["SegundoNombreEstudiante"] ;
 $PrimerApellidoEstudiante = $_POST["PrimerApellidoEstudiante"] ;
 $SegundoApellidoEstudiante = $_POST["SegundoApellidoEstudiante"] ;
 $CursoDeEstudiante = $_POST["CursoDeEstudiante"] ;
 $ProyectoEstudiante = $_POST["ProyectoEstudiante"] ;
 $EspecialidadEstudiante = $_POST["EspecialidadEstudiante"] ;
 $FechaNacimiento = $_POST["FechaNacimiento"] ;
 $CodigoEspecialidad = $_POST["EspecialidadEstudiante"] ;
 
 

include("bd.php");
    $Consulta="INSERT INTO estudiante (CodigoEstudiante, PrimerNombreEstudiante, SegundoNombreEstudiante, PrimerApellidoEstudiante, SegundoApellidoEstudiante, CursoDeEstudiante, CodigoEspecialidad, CodigoProyecto, FechaNacimiento) VALUES ('".$CodigoEstudiante."', '".$PrimerNombreEstudiante."', '".$SegundoNombreEstudiante."', '".$PrimerApellidoEstudiante."', '".$SegundoApellidoEstudiante."', '".$CursoDeEstudiante."', '".$CodigoEspecialidad."', '".$ProyectoEstudiante."', '".$FechaNacimiento."')";
    $Resultado=FALSE;

    try {
        $Resultado= mysqli_query($Conexion, $Consulta);}
    catch (exception $e)
        { $Mensaje="No se pudo registrar el estudiante por error de los datos";
         print $e->getMessage();
         //print $Resultado; 
         //$error=$Se->getMessage();
        }
    if($Resultado == False) { $Mensaje="No se pudo registrar el estudiante";
                 //die($mysqli_error($Conexion)); 
                 }
    else { $Mensaje="El estudiante se registró correctamente"; }
    

}//Fin del if

    else {
    $Mensaje="Llene todos los espacios (OBLIGATORIO)";
    }
    echo $Mensaje;


    
?>
