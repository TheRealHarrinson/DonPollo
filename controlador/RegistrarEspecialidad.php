<?php
if (!empty ($_POST["CodigoEspecialidad"]) && !empty($_POST["NombreEspecialidad"])) { 
    $CodigoEspecialidad = $_POST["CodigoEspecialidad"];
    $NombreEspecialidad = $_POST["NombreEspecialidad"];                            

    include("bd.php");
    $Consulta="INSERT INTO especialidad (CodigoEspecialidad, NombreEspecialidad) VALUES ('".$CodigoEspecialidad."', '".$NombreEspecialidad."')";
    $Resultado=FALSE;

    try {
        $Resultado= mysqli_query($Conexion, $Consulta);
    }
    catch (exception $e)
        { $Mensaje="No se pudo registrar la especialidad por error en los datos";
         //print $e->getMessage();
         //print $Resultado; 
         //$error=$Se->getMessage();
        }
    if($Resultado == False) { $Mensaje="No se pudo registrar la especialidad";
                 //die($mysqli_error($Conexion)); 
                 }
    else { $Mensaje="La especialidad se registro correctamente"; }
    } //Fin del if

    else {
    $Mensaje="El codigo y el nombre de la especialidad es obligatorio";
    }
    echo $Mensaje;

?>