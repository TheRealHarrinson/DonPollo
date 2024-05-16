<?php
if (!empty ($_POST["CodigoProyecto"]) && !empty($_POST["NombreProyecto"])) { 
    $CodigoProyecto = $_POST["CodigoProyecto"];
    $NombreProyecto = $_POST["NombreProyecto"];
    $Resumen = $_POST["Resumen"];
    $FechaRegistro = $_POST["FechaRegistro"];                            

    include("bd.php");
    $Consulta="INSERT INTO proyecto (CodigoProyecto, NombreProyecto, Resumen, FechaRegistro) 
    VALUES ('".$CodigoProyecto."', '".$NombreProyecto."', '".$Resumen."', '".$FechaRegistro."');";
   
   //echo $Consulta;

   $Resultado=FALSE;

    try {
    $Resultado= mysqli_query($Conexion, $Consulta);
        }
    catch (exception $e)
        { $Mensaje="No se pudo registrar el proyecto por error en los datos";
         //print $e->getMessage();
         print $Resultado; 
         //$error=$Se->getMessage();
        }
    if($Resultado == False) { $Mensaje="No se pudo registrar el proyecto";
                //{die($mysqli_error($Conexion)); 
                 }
    else { $Mensaje="El proyecto se registro correctamente"; }
    } //Fin del if

    else {
    $Mensaje="El codigo y el nombre de el proyecto es obligatorio";
    }
    echo "<h3>".$Mensaje."</h3>";

?>