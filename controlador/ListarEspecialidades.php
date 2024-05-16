<?php

include("bd.php");

$Consulta = "SELECT * FROM especialidad";
$Resultado=FALSE;

    try {
        $Resultado= mysqli_query($Conexion, $Consulta);
    }
    catch (exception $e)
        { $Mensaje="No se pudo listar las especialidades";
         //print $e->getMessage();
         print $e->Resultado(); 
         //$error=$Se->getMessage();
        }
   

if($Resultado == False) { $Mensaje="No se pudo listar las especialidades";
    //die($mysqli_error($Conexion)); 
    }
else {
     echo '<table border= "1">
     <tr>
         <td>Codigo de especialidad</td>
         <td>Nombre de la especialidad</td>
         <td colspan="2">Acciones</td>
         
     </tr>';
     while($Registro=$Resultado->fetch_assoc()){
        echo'
   <tr>
     <td>'.$Registro["CodigoEspecialidad"].'</td>
     <td>'.$Registro["NombreEspecialidad"].'</td>
     <td><a href="ActualizacionEspecialidades.php?CodigoEspecialidad='.$Registro["CodigoEspecialidad"].'">EDITAR</a></td>
     <td><a href="#" onclick="Preguntar('.$Registro["CodigoEspecialidad"].')">ELIMINAR</a></td>
   </tr>';

    }//Fin del ciclo del listado de especialidades
     echo '</table>';

     
}


 

   
?>

<script type="text/javascript">
    function Preguntar(CodigoEspecialidad)
    {
        if(confirm("¿Está seguro de eliminar la especialidad con codigo "+CodigoEspecialidad+"?"))
        {
            window.location.href = "Especialidades.php?CodigoEspecialidad="+CodigoEspecialidad;
        }
    }
</script>