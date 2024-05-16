<?php
include("bd.php");

if (!empty($_GET["CodigoProyecto"])){
    $Consulta = "select * from especialidad where CodigoEspecialidad = ".$_GET["CodigoEspecialidad"];
    $Resultado=FALSE;

    try {
        $Resultado= mysqli_query($Conexion, $Consulta);}
    catch (exception $e)
        { $Mensaje="No se pudo consultar la especialidad con codigo ";
         print $e->getMessage();
         //print $Resultado; 
         //$error=$Se->getMessage();
        }
    if($Resultado == False) { $Mensaje="No se pudo consultar la estudiante con codigo ".$_GET["CodigoEspecialidad"];
                 //die($mysqli_error($Conexion)); 
                 }
    else { $Mensaje="Se pudo consultar la especialidad con codigo";
    $Registro=$Resultado->fetch_assoc();
 }
    

}



else if (!empty ($_POST["CodigoEspecialidad"]) && !empty($_POST["NombreEspecialidad"]))  { 
 $CodigoEspecialidad = $_POST["CodigoEspecialidad"] ;
 $NombreEspecialidad = $_POST["NombreEspecialidad"] ;


}

 $Consulta= "UPDATE especialidad SET CodigoEspecialidad = '".$CodigoEspecialidad."', NombreEspecialidad = '".$NombreEspecialidad."' WHERE especialidad.CodigoEspecialidad = '".$_POST["CodigoEspecialidadActual"];


   
    $Resultado=FALSE;

    try {
        $Resultado= mysqli_query($Conexion, $Consulta);
    }
    catch (exception $e)
        { $Mensaje="No se pudo registrar la especialidad por error de los datos";
         //print $e->getMessage();
         //print $Resultado; 
         //$error=$Se->getMessage();
        }
    if($Resultado == False) { $Mensaje="No se pudo registrar el codigo de la especialidad";
                 //die($mysqli_error($Conexion)); 
                 }
    else { $Mensaje="La especialidad se registró correctamente"; }
    
{
}//Fin del if

    else {
    $Mensaje="Llene todos los espacios (OBLIGATORIO)";
    }
    echo $Mensaje;

?>
