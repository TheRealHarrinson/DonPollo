<?php

include("bd.php");

$Consulta = "SELECT * FROM proyecto";
$Resultado=FALSE;

    try {
        $Resultado= mysqli_query($Conexion, $Consulta);
    }
    catch (exception $e)
        { $Mensaje="No se pudo listar los proyectos";
         //print $e->getMessage();
         print $e->Resultado(); 
         //$error=$Se->getMessage();
        }
   

if($Resultado == False) { $Mensaje="No se pudo listar los proyectos";
    //die($mysqli_error($Conexion)); 
    }
else {
     echo '<table border= "1">
     <tr>
         <td>Codigo del proyecto</td>
         <td>Nombre del proyecto</td>
         <td>Resumen</td>
         <td>Fecha de Registro</td>
         <td colspan="2">Acciones</td>
         
     </tr>';
     while($Registro=$Resultado->fetch_assoc()){
        echo'
   <tr>
     <td>'.$Registro["CodigoProyecto"].'</td>
     <td>'.$Registro["NombreProyecto"].'</td>
     <td>'.$Registro["Resumen"].'</td>
     <td>'.$Registro["FechaRegistro"].'</td>
     <td>EDITAR</td>
     <td>ELIMINAR</td>
   </tr>';

    }//Fin del ciclo del listado de especialidades
     echo '</table>';
}


 

   


?>