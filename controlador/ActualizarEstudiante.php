<?php
include("bd.php");

if (!empty($_GET["CodigoEstudiante"])){
    $Consulta = "select * from estudiante where CodigoEstudiante = ".$_GET["CodigoEstudiante"];
    $Resultado=FALSE;

    try {
        $Resultado= mysqli_query($Conexion, $Consulta);}
    catch (exception $e)
        { $Mensaje="No se pudo consultar el estudiante con codigo ";
         print $e->getMessage();
         //print $Resultado; 
         //$error=$Se->getMessage();
        }
    if($Resultado == False) { $Mensaje="No se pudo consultar el estudiante con codigo ".$_GET["CodigoEstudiante"];
                 //die($mysqli_error($Conexion)); 
                 }
    else { $Mensaje="Se pudo consultar el estudiante con codigo";
    $Registro=$Resultado->fetch_assoc();
 }
    

}



else if (!empty ($_POST["CodigoEstudiante"]) && !empty($_POST["PrimerNombreEstudiante"] && !empty($_POST["PrimerApellidoEstudiante"] && !empty($_POST["CursoDeEstudiante"] && !empty($_POST["ProyectoEstudiante"] && !empty($_POST["EspecialidadEstudiante"])))))) { 
 $CodigoEstudiante = $_POST["CodigoEstudiante"] ;
 $PrimerNombreEstudiante = $_POST["PrimerNombreEstudiante"] ;
 $SegundoNombreEstudiante = $_POST["SegundoNombreEstudiante"] ;
 $PrimerApellidoEstudiante = $_POST["PrimerApellidoEstudiante"] ;
 $SegundoApellidoEstudiante = $_POST["SegundoApellidoEstudiante"] ;
 $CursoDeEstudiante = $_POST["CursoDeEstudiante"] ;
 $ProyectoEstudiante = $_POST["ProyectoEstudiante"] ;
 $EspecialidadEstudiante = $_POST["EspecialidadEstudiante"] ;
 $FechaNacimiento = $_POST["FechaNacimiento"] ;



    $Consulta="UPDATE estudiante SET CodigoEstudiante = '".$CodigoEstudiante."', PrimerNombreEstudiante = '".$PrimerNombreEstudiante."', SegundoNombreEstudiante = '".$SegundoNombreEstudiante."', PrimerApellidoEstudiante = '".$PrimerApellidoEstudiante."', SegundoApellidoEstudiante = '".$SegundoApellidoEstudiante."', CursoDeEstudiante = '".$CursoDeEstudiante."', CodigoEspecialidad = '".$CodigoEspecialidad."', CodigoProyecto = '".$ProyectoEstudiante."', FechaNacimiento = '".$EspecialidadEstudiante."' WHERE estudiante.CodigoEstudiante = '".$_POST["CodigoActual"];


   
    $Resultado=FALSE;

    try {
        $Resultado= mysqli_query($Conexion, $Consulta);
    }
    catch (exception $e)
        { $Mensaje="No se pudo registrar el estudiante por error de los datos";
         //print $e->getMessage();
         //print $Resultado; 
         //$error=$Se->getMessage();
        }
    if($Resultado == False) { $Mensaje="No se pudo registrar el codigo del estudiante";
                 //die($mysqli_error($Conexion)); 
                 }
    else { $Mensaje="El estudiante se registró correctamente"; }
    

}//Fin del if

    else {
    $Mensaje="Llene todos los espacios (OBLIGATORIO)";
    }
    echo $Mensaje;

?>
